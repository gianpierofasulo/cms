          

          

@if ($message = Session::get('success'))

  <div class="container mt-5">{!! alert_html( $message, 'success' ) !!}</div>

@endif


@if ($message = Session::get('danger'))

  <div class="container mt-5">{!! alert_html( $message, 'danger' ) !!}</div>


@endif


@if ($message = Session::get('warning'))

  <div class="container mt-5">{!! alert_html( $message, 'warning' ) !!}</div>

@endif


@if ($message = Session::get('info'))

  <div class="container mt-5">{!! alert_html( $message, 'info' ) !!}</div>

@endif

 @if(session()->has('message'))
<p class="alert alert-info">
    {{ session()->get('message') }}
</p>
@endif

@if(session()->has('error'))
<p class="alert alert-danger">
    {{ session()->get('error') }}
</p>
@endif

@if(session()->has('success1'))
<p class="alert alert-success">
    {{ session()->get('success1') }}
</p>
@endif

@if(session()->has('info1'))
<p class="alert alert-info">
    {{ session()->get('info1') }}
</p>
@endif

@if(session()->has('warning1'))
<p class="alert alert-warning">
    {{ session()->get('warning1') }}
</p>
@endif

@if(session()->has('danger1'))
<p class="alert alert-danger">
    {{ session()->get('danger1') }}
</p>
@endif