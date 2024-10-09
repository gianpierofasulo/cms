<?php
namespace App\Http\Controllers\Admin;

use App\Models\Admin\Ai_chat;
use App\Models\Admin\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Carbon\Carbon;
use DB;
class ChatGPTController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
          // Retrieve the logged-in user's ID
$userId = session('id');
// Retrieve the user's data from the `ai_chats` table
$userChats = DB::table('ai_chats')
               ->where('user_id', $userId)
               ->orderby('created_at', 'Desc')
               ->get();
// Pass the data to a view
return view('admin.chatgpt.index')->with('userChats', $userChats);

        //return view('admin.chatgpt.index');
    }

    public function ask2(Request $request)
{
    $prompt = $request->input('prompt');
    $response = $this->askToChatGPT($prompt);

    $responses = [$response]; // or populate $responses with multiple responses if necessary

    return view('admin.chatgpt.index', compact('response', 'responses'));
}

    public function ask1(Request $request)
    {
        $prompt = $request->input('prompt');
        $response = $this->askToChatGPT($prompt);

        return view('admin.chatgpt.index', ['response' => $response]);
       // return redirect()->route('admin.chatgpt.index')->with('success', 'Blog is added successfully!');
    }

    private function askToChatGPT1($prompt) 
    {
        $response = Http::withoutVerifying()
            ->withHeaders([
                'Authorization' => 'Bearer ' . env('CHATGPT_API_KEY'),
                'Content-Type' => 'application/json',
            ])->post('https://api.openai.com/v1/engines/text-davinci-003/completions', [
                "prompt" => $prompt,
                "max_tokens" => 1000,
                "temperature" => 0.5,

                "top_p" => 1.0,
                "frequency_penalty" => 0.52,
                "presence_penalty" => 0.5,
                "stop" => ["11."]
            ]);

        return $response->json()['choices'][0]['text'];
    }

    public function askToChatGPT($prompt)
{
    $conversation = [];

    // Add user input to conversation
    $conversation[] = [
        'sender' => 'user',
        'content' => $prompt,
    ];

    // Call ChatGPT API and retrieve response
    $response = Http::withoutVerifying()
        ->withHeaders([
            'Authorization' => 'Bearer ' . env('CHATGPT_API_KEY'),
            'Content-Type' => 'application/json',
        ])->post('https://api.openai.com/v1/engines/gpt-3.5-turbo-instruct/completions', [
            "prompt" => $prompt,
            "max_tokens" => 1000,
            "temperature" => 0.5,
            "top_p" => 1.0,
            "frequency_penalty" => 0.52,
            "presence_penalty" => 0.5,
            "stop" => ["11."]
        ])->json();

    // Extract ChatGPT response content
    $chatgptResponse = $response['choices'][0]['text'];

    // Add ChatGPT response content to conversation
    $conversation[] = [
        'sender' => 'chatgpt',
        'content' => $chatgptResponse,
    ];

    return [
        'response' => $chatgptResponse,
        'conversation' => $conversation,
    ];
}


public function adsk(Request $request)
{
    $prompt = $request->input('prompt');
    $chatData = $this->askToChatGPT($prompt);

    $response = $chatData['response'];
    $conversation = $chatData['conversation'];
    $responses = [$response];

//     $adatas = [
//         'user_message' => $conversation,
//         'ai_message' => $response,
//         'user_id' => "1"
//     ];
// $chat = new Ai_chat();
// $data = Arr::only($adatas, $chat->getFillable());
// //$data = $adatas->only($chat->getFillable());
// $chat->fill($data)->save();

   

    return view('admin.chatgpt.index', compact('response', 'responses', 'conversation'));
}

public function ask(Request $request)
{
    // Extract the user's prompt from the request
    $prompt = $request->input('prompt');

    // Call the function to interact with ChatGPT
    $chatData = $this->askToChatGPT($prompt);

    // Extract relevant data from the ChatGPT response
    $response = $chatData['response'];
    $conversation = $chatData['conversation'];
    $responses = [$response];

    $userId = Admin::select('id')->find(session('id'));
    $user = $userId->id;
    $this->saveConversationToDatabase($user, $prompt, $response);

    $userId = session('id');
// Retrieve the user's data from the `ai_chats` table
$userChats = DB::table('ai_chats')
               ->where('user_id', $userId)
               ->orderby('created_at', 'Desc')
               ->get();
// Pass the data to a view

    // Pass data to the view for rendering
    return view('admin.chatgpt.index', compact('response', 'responses', 'conversation','userChats'));
}

// Function to save the conversation to the database
private function saveConversationToDatabase($user, $userMessage, $aiMessage)
{
    Ai_chat::create([
        'user_id' => $user,
        'user_message' => $userMessage,
        'ai_message' => $aiMessage,
    ]);
}

public function destroy($id)
    {
         if(!env('USER_VERIFIED'))
        {
            return redirect()->back()->with('error', 'This feature is disable for demo!');
        }
        $coupon = Ai_chat::findOrFail($id);
        $coupon->delete();
        return Redirect()->back()->with('success', 'Chat is deleted successfully!');
    }

}