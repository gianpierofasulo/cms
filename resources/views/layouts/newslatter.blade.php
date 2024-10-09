<style>

  .modal-newsletter { 
    color: #999;
    width: 480px;
    margin: 30px auto;
    font-size: 15px;
  }
  .modal-newsletter .modal-content {
    padding: 40px 50px;
    border-radius: 1px;   
    border: none;
  }
  .modal-newsletter .modal-header {
    border-bottom: none;   
    position: relative;
    text-align: center;
    border-radius: 5px 5px 0 0;
  }
  .modal-newsletter h4 {
    color: #000;
    text-align: center;
    font-family: 'Lato', sans-serif;
    font-weight: 900;
    font-size: 30px;
    margin: 0 0 25px;   
    text-transform: uppercase;
  }
  .modal-newsletter .close {
    position: absolute;
    top: -15px;
    right: -25px;
    color: #c0c3c8;
    text-shadow: none;
    opacity: 0.5;
    width: 22px;
    height: 22px;
    border-radius: 20px;
    font-size: 16px;
    border: 2px solid;
  }
  .modal-newsletter .close:hover {
    opacity: 0.8;
  }
  .modal-newsletter .icon-box {
    color: #49c5c1;   
    display: inline-block;
    z-index: 9;
    text-align: center;
    position: relative;
    padding-left: 112px;

  }
  .modal-newsletter .icon-box i {
    font-size: 110px;

  }
  .modal-newsletter .form-control, .modal-newsletter .btn {
    min-height: 46px;
    text-align: center;
    border-radius: 1px; 
  }
  .modal-newsletter .form-control {
    box-shadow: none;
    border-color: #dbdbdb;
  }
  .modal-newsletter .form-control:focus {
    border-color: #49c5c1;
    box-shadow: 0 0 8px rgba(73, 197, 193, 0.5);
  }
  .modal-newsletter .btn {
    color: #fff;
    background: #49c5c1;
    text-decoration: none;
    transition: all 0.4s;
    line-height: normal;
    padding: 6px 20px;
    min-width: 180px;
    border: none;
    margin-top: 20px;
    font-family: 'Airal', sans-serif;
    font-size: 14px;
    font-weight: bold;
    text-transform: uppercase;
  }
  .modal-newsletter .btn:hover, .modal-newsletter .btn:focus {
    background: #39b3af;
    outline: none;
  }
  .modal-newsletter .form-group {
    margin-top: 30px;
  }
  .hint-text {
    margin: 100px auto;
    text-align: center;
  }
</style>
  @if (config('nigus.news_latter_popup') == 1)
<div id="myModal" class="modal fade">
  <div class="modal-dialog modal-newsletter">
    <div class="modal-content">
      <div class="modal-header">
        <div class="icon-box">
          <i class="fa fa-envelope"></i>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span>&times;</span></button>
      </div>
      <div class="modal-body text-center">
        <h4>{{__('Subscribe')}}</h4>  
        <p>{{__('Subscriber our newsletter to receive the latest updates and promostions.')}}</p>
        <form action="{{ route('front.subscription') }}" method="post" class="frm_newsletter justify-content-center">
          @csrf
          <div class="form-group">
            <input type="email" name="subs_email" class="form-control" placeholder="Enter your email" required>
            <input type="submit" class="btn btn-primary" value="Subscribe">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endif

<script>
  $(document).ready(function(){
    $("#myModal").modal('show');
  });
</script>
