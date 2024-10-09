@extends('admin.admin_layouts')
@section('admin_content')
<h1 class="h3 mb-3 text-gray-800">Chat</h1>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 mt-2 font-weight-bold text-primary">AI Chat</h6>
        <div class="float-right d-inline">
         <!--  <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add New</a> -->
     </div>
 </div>

 <div class="card-body">
   




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
  </style>


<!-- ========================= -->

<!-- ============================ -->
<main class="content">
    <div class="container p-0">


        <div class="card">
            <div class="row g-0">
                <div class="col-12 col-lg-5 col-xl-3 d-none d-lg-block border-right chat-messages">
                    <div class="px-4 d-none d-md-block">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <input type="text" class="form-control my-3" placeholder="Search...">
                            </div>
                        </div>
                    </div>

                    @if (!empty($userChats))
                     @foreach($userChats as $chat)
                    <!-- <a href="#" class="list-group-item list-group-item-action border-0">
                        <div class="badge bg-success float-right">5</div>
                        <div class="d-flex align-items-start">
                            <img src="{{ asset('public/uploads/'.session('photo')) }}" class="rounded-circle mr-1" alt="Vanessa Tucker" width="40" height="40">
                            <div class="flex-grow-1 ml-3">
                                {{ session('name') }}
                                <div class="small"><span class="fas fa-circle chat-online"></span> Online</div>
                            </div>
                        </div>
                    </a> -->
                   
                    <a href="#" class="list-group-item list-group-item-action border-0">
                        <div class="d-flex align-items-start">
                            <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Jennifer Chang" width="40" height="40">
                            <div class="flex-grow-1 ml-3">
                                ChatGPT
                                <div class="small"><span class="fas fa-circle chat-offline"></span> Bot Chat {{ Carbon\Carbon::parse($chat->created_at)->diffForHumans() }}</div>
                            </div>
                            <a href="{{ URL::to('admin/chatgpt/delete/'.$chat->id) }}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');"><i style="font-size: 10px" class="fas fa-trash-alt"></i></a>
                        </div>
                    </a>
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
                                <div class="text-muted small"><em>Typing...</em></div>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-lg mr-1 px-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone feather-lg"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg></button>
                                <button class="btn btn-info btn-lg mr-1 px-3 d-none d-md-inline-block"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video feather-lg"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg></button>
                                <button class="btn btn-light border btn-lg px-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal feather-lg"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></button>
                            </div>
                        </div>
                    </div>

                    <div class="position-relative">
                        <div class="chat-messages p-4">

                             @if (!empty($userChats))
                     @foreach($userChats as $chat)
<!-- 
                      <li>  <div class="card-body">
                            <strong><img class="img-profile rounded-circle" src="{{ asset('public/uploads/'.session('photo')) }}">User: </strong> <p>{{ $chat->user_message }}</p>&nbsp;
                        </div> </li><br>
                        <li><div class="card-body">
                         <br> <strong>ChatGPT: </strong>
                         <pre><code>{{ $chat->ai_message }}</code></pre>
                     </div></li><br> -->


                            <div class="chat-message-right pb-4">
                                <div>
                                    <img src="{{ asset('public/uploads/'.session('photo')) }}" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">
                                    <div class="text-muted small text-nowrap mt-2">{{ Carbon\Carbon::parse($chat->created_at)->diffForHumans() }}</div>
                                </div>
                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                                    <div class="font-weight-bold mb-1">You</div>
                                  {{ $chat->user_message }}
                                </div>
                            </div>

                            <div class="chat-message-left pb-4">
                                <div>
                                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                                    <div class="text-muted small text-nowrap mt-2"><p>{{ Carbon\Carbon::parse($chat->created_at)->diffForHumans() }}</p></div>
                                </div>
                                <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                                    <div class="font-weight-bold mb-1">ChatGPT</div>
                                   <pre class="code-output" ><code class="language-javascript"> {{ $chat->ai_message }}</code></pre>
                                </div>
                            </div>

                            @endforeach
                            @endif

                        </div>
                    </div>
                  

                    <div class="flex-grow-0 py-3 px-4 border-top">
                         <form method="POST" action="{{ route('admin.chatgpt.ask') }}">
                        @csrf
                        <div class="input-group">
                             <input type="text" class="form-control text-center" name="prompt" placeholder="Ask something...">

                            <!-- <input type="text" class="form-control" placeholder="Type your message"> -->
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
<style type="text/css">
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
</style>
@endsection