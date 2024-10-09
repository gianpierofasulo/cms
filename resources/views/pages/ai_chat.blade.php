@extends('layouts.app')

@section('content')
<div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_blog) }})">
  <div class="bg-page"></div>
  <div class="text">
    <h1>{{ __() }}</h1>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb justify-content-center">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">{{_('Home')}}</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ __('Ai chat') }}</li>
      </ol>
    </nav>
  </div>
</div>

<style type="text/css">
  .notification {
    position: fixed;
    top: 20px;
    right: 20px;
    padding: 10px 20px;
    background-color: #333;
    color: #fff;
    font-size: 14px;
    border-radius: 4px;
    z-index: 9999;
  }
   .chat-online {
    color: #34ce57
  }

  .chat-offline {
    color: #e4606d
  }

  .chat-messages {
    display: flex;
    flex-direction: column;
    max-height: 800px;
    overflow-y: scroll
  }

  .chat-message-left,
  .chat-message-right {
    display: flex;
    flex-shrink: 0
  }

  .chat-message-left {
    margin-right: auto
  }

  .chat-message-right {
    flex-direction: row-reverse;
    margin-left: auto
  }
  .py-3 {
    padding-top: 1rem!important;
    padding-bottom: 1rem!important;
  }
  .px-4 {
    padding-right: 1.5rem!important;
    padding-left: 1.5rem!important;
  }
  .flex-grow-0 {
    flex-grow: 0!important;
  }
  .border-top {
    border-top: 1px solid #dee2e6!important;
  }

  .bb { font-size: 50px; margin: 0; color: #dc8100;}
  article { display: block; text-align: left; max-width: 650px; margin: 0 auto; }
  .cc { color: #dc8100; text-decoration: none; }
  .cc:hover { color: #333; text-decoration: none; }
  @media only screen and (max-width : 480px) {
    .bb { font-size: 40px; }
  }
  .pp{
    color: white;
  }
</style>

<div class="page-content" style="background: black;">
  <div class="container">

   <!-- ============================ -->
   @if (config('nigus.chatgpt_status') == false)

   <article>
    <h1 class="bb">AI CHAT is temporarily unavailable.</h1>
    <p class="pp">Scheduled maintenance is currently in progress. Please check back soon.</p>
    <p class="pp">We apologize for any inconvenience.</p>
    <p id="signature">&mdash; <a class="cc" href="mailto:{{$g_setting->top_bar_email}}">[Contact Us {{$g_setting->top_bar_email}}]</a></p>
  </article>
  @else
  <main class="content">
    <div class="container p-0">
      <div class="card">
        <div class="row g-0">
          <div class="col-12 col-lg-5 col-xl-3 border-right">
            @if (!empty($userChats))
            @foreach($userChats as $chat)

            @endforeach
            @endif
            <hr class="d-block d-lg-none mt-1 mb-0">
          </div>
          <div class="col-12 col-lg-7 col-xl-9">
            <div class="py-2 px-4 border-bottom d-none d-lg-block">
              <div class="d-flex align-items-center py-1">
                <div class="position-relative">
                  <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                </div>
                <div class="flex-grow-1 pl-3">
                  <strong>ChatGPT</strong>
                  <div class="text-muted small"><em>Ask me anything...</em> <div class="small"><span class="fas fa-circle chat-online"></span> Online</div></div>
                </div>
              </div>
            </div>
            <div class="position-relative">
              <div class="chat-messages p-4">
               @if (!empty($userChats))
               @foreach($userChats as $chat)
               <div class="chat-message-right pb-4">
                <div>
                  <img src="{{ asset('public/uploads/'.session('photo')) }}" class="rounded-circle mr-1" alt="Avater" width="40" height="40">
                  <div class="text-muted small text-nowrap mt-2">{{ Carbon\Carbon::parse($chat->created_at)->diffForHumans() }}</div>
                </div>
                <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                  <div class="font-weight-bold mb-1">You</div>
                  <p class="small mb-0"> {{ $chat->user_message }}</p>
                </div>
              </div>

              <div class="chat-message-left pb-4">
                <div>
                  <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                  <div class="text-muted small text-nowrap mt-2"><p>{{ Carbon\Carbon::parse($chat->created_at)->diffForHumans() }}</p></div>
                </div>
                <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                  <div class="font-weight-bold mb-1">ChatGPT</div>
                  @if (startsWithCode($chat->ai_message))
                  <pre  class="code-output" ><code class="language-javascript"> {{ $chat->ai_message }}</code></pre>
                  @else
                  <p class="small mb-0">{{ $chat->ai_message }}</p>
                  @endif
                </div>
              </div>
              @endforeach
              @endif
            </div>
          </div>

          <div class="flex-grow-0 py-3 px-4 border-top">
           <form method="POST" action="{{ route('front.ai_chat.ask') }}">
            @csrf
            <div class="input-group">
              <textarea class="form-control" name="prompt" placeholder="Ask something..." id="textAreaExample" rows="4"></textarea>
              <!-- <input type="text" class="form-control text-center" name="prompt" placeholder="Ask me anything..."> -->
              <button type="submit" class="btn btn-primary">Send</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
</div>
</main>
@endif
</div>
</div>
@endsection