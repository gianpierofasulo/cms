<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blog;
use App\Models\Admin\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailToAllSubscribers;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\URL;
use DB;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $blog = Blog::all();
        return view('admin.blog.index', compact('blog'));
    }
    
    public function create()
    {
        $category=DB::table('categories')->get();
        return view('admin.blog.create', compact('category'));
    }

    public function store(Request $request)
    {

         if(!env('USER_VERIFIED'))
        {
            return redirect()->back()->with('error', 'This feature is disable for demo!');
        }

         // --Sending on telegram channel ---
        $channelId = env('BOT_CHANNEL_ID');
        $chatId = env('YOUR_CHANNEL_ID');
        $token = env('YOUR_TELEGRAM_BOT_TOKEN');
        $currentUrl = URL::current();
        $newUrl = str_replace('/admin', '', $currentUrl);  // Replace '/admin' with your desired URL prefix


        $request->validate([
            'blog_title' => 'required|unique:blogs',
            'blog_slug' => 'unique:blogs',
            'blog_content' => 'required',
            'blog_content_short' => 'required',
            'blog_photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,tiff,tif,psd|max:99992048',
        ]);

        $statement = DB::select("SHOW TABLE STATUS LIKE 'blogs'");
        $ai_id = $statement[0]->Auto_increment;

        $ext = $request->file('blog_photo')->extension();
        $final_name = 'blog-'.$ai_id.'.'.$ext;
        $request->file('blog_photo')->move(public_path('uploads'), $final_name);

        $blog = new Blog();
        $data = $request->only($blog->getFillable());
        if(empty($data['blog_slug']))
        {
            unset($data['blog_slug']);
            $data['blog_slug'] = Str::slug($request->blog_title);
        }

        unset($data['blog_photo']);
        $data['blog_photo'] = $final_name;

        $blog->fill($data)->save();

        // Send Email to Subscribers
        if(request('send_email_to_subscribers') == 'Yes')
        {
            $email_template_data = DB::table('email_templates')->where('id', 4)->first();
            $subject = $email_template_data->et_subject;
            $message = $email_template_data->et_content;

            $post_link = url('blog/'.$data['blog_slug']);
            $message = str_replace('[[post_link]]', $post_link, $message);

            $all_subscribers = Subscriber::where('subs_active', 1)->get();
            foreach($all_subscribers as $row)
            {
                $subs_email = $row->subs_email;
                Mail::to($subs_email)->send(new MailToAllSubscribers($subject,$message));
            }
        } 

// if (request('post_on_telegram_channel') == '1') {
//     $emailTemplateData = DB::table('email_templates')->where('id', 9)->first();
//     $subject = $emailTemplateData->et_subject;
//     $message = $emailTemplateData->et_content;

//     $postLink = url('blog/' . $data['blog_slug']);
//     $formattedLink = '<a href="' . $postLink . '">Click here</a>';
//     $message = str_replace('[[post_link]]', $formattedLink, $message);

//     $baseUrl = 'https://api.telegram.org/bot' . $token . '/';
//     $chatId = $channelId;
//     //$text = $message;
//     $text = strip_tags($message); // Removes any HTML tags from the message content
//     $parseMode = 'HTML';

//     $client = new \GuzzleHttp\Client(['base_uri' => $baseUrl]);

//     $response = $client->post('sendMessage', [
//         'form_params' => [
//             'chat_id' => $chatId,
//             'text' => $text,
//             'parse_mode' => $parseMode,
//         ],
//     ]);
// }

        // ---Sending on telegram channel --
            //if (env('TELEGRAM_STATUS') === true) {
        if(request('post_on_telegram_channel') == '1')
        {
            $email_template_data = DB::table('email_templates')->where('id', 9)->first();
            $subject = $email_template_data->et_subject;
            $message = $email_template_data->et_content;

            $text = strip_tags($message); // Removes any HTML tags from the message content

            $slug = $request->blog_slug;
            $blog_content_short = $request->blog_content_short;
            $blog_title = $request->blog_title;
            $newUrl = str_replace($currentUrl, URL::to('/blog/'.$slug), $currentUrl);
            $link = '<a href="' . $newUrl . '">' . $newUrl . '</a>'; // Create the clickable link
            $telegramMessage = "<b>🔔 ".$blog_title."</b>" ."\n". "👉 ". $subject . "\n\n" . '👉 Post Link: ' . $link . "\n\n" . "Hello,: ". $text. "\n\n". "#share #like #comment";
        $client = new Client(['base_uri' => 'https://api.telegram.org/bot' . $token . '/']);
            $response = $client->post('sendMessage', [
                'json' => [
                    'chat_id' => $channelId,
                    'text' => $telegramMessage,
                    'parse_mode' => 'HTML',
                    // 'parse_mode' => 'Markdown',
                ],
            ]);
                if ($response->getStatusCode() !== 200) {
                }
            }

        return redirect()->route('admin.blog.index')->with('success', 'Blog is added successfully!');
    }
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $category=DB::table('categories')->get();
        return view('admin.blog.edit', compact('blog','category'));
    }

    public function update(Request $request, $id)
    {
         if(!env('USER_VERIFIED'))
        {
            return redirect()->back()->with('error', 'This feature is disable for demo!');
        }

        $blog = Blog::findOrFail($id);
        $data = $request->only($blog->getFillable());

        if ($request->hasFile('blog_photo')) {

            $request->validate([
                'blog_photo' => 'image|mimes:jpeg,png,jpg,gif,svg,webp,tiff,tif,psd|max:99992048'
            ]);


            if ($blog->blog_photo != null) {
                $photoPath = public_path('uploads/' . $blog->blog_photo);
                if (file_exists($photoPath)) {
                    unlink($photoPath);
                }
            }
            // Uploading the file
            $ext = $request->file('blog_photo')->extension();
            $final_name = 'blog-'.$id.'.'.$ext;
            $request->file('blog_photo')->move(public_path('uploads/'), $final_name);

            unset($data['blog_photo']);
            $data['blog_photo'] = $final_name;
        }

        $request->validate([
            'blog_title'   =>  [
                'required',
                Rule::unique('blogs')->ignore($id),
            ],
            'blog_slug'   =>  [
                Rule::unique('blogs')->ignore($id),
            ]
        ]);

        if(empty($data['blog_slug']))
        {
            unset($data['blog_slug']);
            $data['blog_slug'] = Str::slug($request->blog_title);
        }

        $blog->fill($data)->save();

        return redirect()->route('admin.blog.index')->with('success', 'Blog is updated successfully!');
    }

    public function destroy($id)
    {
         if(!env('USER_VERIFIED'))
        {
            return redirect()->back()->with('error', 'This feature is disable for demo!');
        }
        $blog = Blog::findOrFail($id);
        if ($blog->blog_photo != null) {
            $photoPath = public_path('uploads/' . $blog->blog_photo);
            if (file_exists($photoPath)) {
                unlink($photoPath);
            }
        }
        // unlink(public_path('uploads/'.$blog->blog_photo));
        $blog->delete();

        // Success Message and redirect
        return Redirect()->back()->with('success', 'Blog is deleted successfully!');
    }

}
