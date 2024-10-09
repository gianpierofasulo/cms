<?php
namespace App\Http\Controllers\Front;

use App\Models\Admin\Ai_chat;
use App\Models\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Carbon\Carbon;
use DB;
class AiChatController extends Controller
{
    public function index()
    {
        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $userId = session('customer_id');
        $userChats = DB::table('ai_chats')
                       ->where('user_id', $userId)
                       ->get();

        return view('pages.ai_chat', compact('userChats','g_setting'));
    }
    public function askToChatGPT($prompt)
    {
    $conversation = [];
    // Add user input to conversation
    $conversation[] = [
        'sender' => 'user',
        'content' => $prompt,
    ];
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


public function ask(Request $request)
{
    $g_setting = DB::table('general_settings')->where('id', 1)->first();
    $prompt = $request->input('prompt');
    $chatData = $this->askToChatGPT($prompt);
    $response = $chatData['response'];
    $conversation = $chatData['conversation'];
    $responses = [$response];
    
    if (session('customer_id')) {
        $user = Customer::select('id')->find(session('customer_id'));
        $userId = $user->id;
    } else {
        // Temporary user ID for non-logged in user
        $temporaryId = "TEMP-" . uniqid();
        $userId = $temporaryId;
    }
    
    $this->saveConversationToDatabase($userId, $prompt, $response);
    
    $userChats = DB::table('ai_chats')
                   ->where('user_id', $userId)
                   ->get();
    
    return view('pages.ai_chat', compact('response', 'responses', 'conversation', 'userChats', 'g_setting'));
}

public function ask2(Request $request)
{
    $g_setting = DB::table('general_settings')->where('id', 1)->first();
    $prompt = $request->input('prompt');
    $chatData = $this->askToChatGPT($prompt);
    $response = $chatData['response'];
    $conversation = $chatData['conversation'];
    $responses = [$response];
    
    if(session('id')) {
        $user = Customer::select('id')->find(session('id'));
        $user = $user->id;
        $this->saveConversationToDatabase($user, $prompt, $response);
    } else {
        // Temporary user ID for non-logged in user
        $temporaryId = "TEMP-" . uniqid();
        $this->saveConversationToDatabase($temporaryId, $prompt, $response);
    }
    
    $userId = session('id');
    $userChats = DB::table('ai_chats')
                   ->where('user_id', $userId)
                   ->get();
    
    return view('pages.ai_chat', compact('response', 'responses', 'conversation','userChats','g_setting'));
}

public function askw(Request $request)
{
    $g_setting = DB::table('general_settings')->where('id', 1)->first();
    $prompt = $request->input('prompt');
    $chatData = $this->askToChatGPT($prompt);
    $response = $chatData['response'];
    $conversation = $chatData['conversation'];
    $responses = [$response];
    $userId = Customer::select('id')->find(session('id'));
    $user = $userId->id;
    $this->saveConversationToDatabase($user, $prompt, $response);
    $userId = session('id');
$userChats = DB::table('ai_chats')
               ->where('user_id', $userId)
               ->get();
    return view('pages.ai_chat', compact('response', 'responses', 'conversation','userChats','g_setting'));
}
private function saveConversationToDatabase($user, $userMessage, $aiMessage)
{
    Ai_chat::create([
        'user_id' => $user,
        'user_message' => $userMessage,
        'ai_message' => $aiMessage,
    ]);
}

}