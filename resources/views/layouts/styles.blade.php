@php
$g_setting = DB::table('general_settings')->where('id', 1)->first();
@endphp
<!-- All CSS -->
<link rel="stylesheet" href="{{ asset('public/frontend/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/frontend/css/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/frontend/css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('public/frontend/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/frontend/css/jquery.dataTables.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/frontend/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/frontend/css/select2-bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/frontend/css/meanmenu.css') }}">
<link rel="stylesheet" href="{{ asset('public/frontend/css/toastr.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/frontend/css/all.css') }}">
<link rel="stylesheet" href="{{ asset('public/frontend/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('public/frontend/css/spacing.css') }}">
<link rel="stylesheet" href="{{ asset('public/frontend/css/cookieconsent.min.css') }}">
<link rel="stylesheet" href="{{ asset('public/backend/css/flag-icons-main/css/flag-icons.min.css') }}">

<link rel="stylesheet" href="{{ asset('public/frontend/css/prism.css') }}">


<script src='https://www.google.com/recaptcha/api.js'></script>

<style>
    #preloader #status {
        background-image: url({{ asset('public/uploads/preloader.gif') }});
    }

    .top,
    .main-nav nav .navbar-nav .nav-item .dropdown-menu,
    .video-button:before,
    .video-button:after,
    .special .read-more a,
    .service .read-more a,
    .testimonial-bg,
    .project .read-more a,
    .team-text,
    .cta .overlay,
    .blog-area .blog-image .date,
    .blog-area .read-more a,
    .newsletter-area .overlay,
    .footer-social-link ul li a,
    .scroll-top,
    .single-section .read-more a,
    .sidebar .widget .search button,
    .comment button,
    .contact-item:hover .contact-icon,
    .product-item .text button,
    .btn-arf,
    .project-photo-carousel .owl-nav .owl-prev,
    .project-photo-carousel .owl-nav .owl-next,
    .faq h4.panel-title a,
    .team-social li a:hover,
    .doc_detail_social li i,
    .nav-doctor .nav-link.active {
        background: #3867D6!important;
    }
    .main-nav nav .navbar-nav .nav-item a:hover,
    .main-nav nav .navbar-nav .nav-item:hover a,
    .service .service-item .text h3 a:hover,
    .project .project-item .text h3 a:hover,
    .blog-area .blog-item h3 a:hover,
    .footer-item ul li a:hover,
    .sidebar .widget .type-2 ul li a:hover,
    .sidebar .widget .type-1 ul li:before,
    .sidebar .widget .type-1 ul li a:hover,
    .single-section h3,
    .contact-icon,
    .product-item .text h3 a:hover,
    .career-main-item h3,
    .reg-login-form .new-user a {
        color: #3867D6!important;
    }
    .text-animated li a:hover,
    .feature .feature-item {
        background-color: #3867D6!important;
    }
    .text-animated li a:hover,
    .special .read-more a,
    .footer-social-link ul li a,
    .contact-item:hover .contact-icon,
    .faq h4.panel-title,
    .team-social li a:hover {
        border-color: #3867D6!important;
    }



    .main-nav nav .navbar-nav .nav-item .dropdown-menu li a,
    .contact-item:hover .contact-icon {
        color: #fff!important;
    }
    .feature .feature-item:hover,
    .service .read-more a:hover,
    .project .read-more a:hover,
    .blog-area .read-more a:hover,
    .single-section .read-more a:hover,
    .comment button:hover,
    .doc_detail_social li:hover i {
        background: #333!important;
    }
    .footer-social-link ul li a:hover {
        background: transparent!important;
    }
    .special .read-more a:hover {
        background: transparent!important;
        border-color: #fff!important;
    }

/*--------New Custom CSSS -------*/
    .nigus{
         margin-top:100px;
    }
    .counter-box {
        display: block;
        background: #f6f6f6;
        padding: 40px 20px 37px;
        text-align: center;
        border-radius: 8px;
        border: solid orange 2px;
    }

    .counter-box p {
        margin: 5px 0 0;
        padding: 0;
        color: #909090;
        font-size: 18px;
        font-weight: 500
    }

    .counter-box i {
        font-size: 60px;
        margin: 0 0 15px;
        color: #d2d2d2
    }

    .counter { 
        display: block;
        font-size: 32px;
        font-weight: 700;
        color: #666;
        line-height: 28px
    }

    .counter-box.colored {
          /*background: #3acf87;*/
         background: {{ '#'.$g_setting->theme_color }}!important;
    }

    .counter-box.colored p,
    .counter-box.colored i,
    .counter-box.colored .counter {
        color: #fff;
    }
/*--------End Custom CSSS -------*/

.career-form {
  background-color: #4e63d7;
  border-radius: 5px;
  padding: 0 16px;
}

.career-form .form-control {
  background-color: rgba(255, 255, 255, 0.2);
  border: 0;
  padding: 12px 15px;
  color: #fff;
}

.career-form .form-control::-webkit-input-placeholder {
  /* Chrome/Opera/Safari */
  color: #fff;
}

.career-form .form-control::-moz-placeholder {
  /* Firefox 19+ */
  color: #fff;
}

.career-form .form-control:-ms-input-placeholder {
  /* IE 10+ */
  color: #fff;
}

.career-form .form-control:-moz-placeholder {
  /* Firefox 18- */
  color: #fff;
}

.career-form .custom-select {
  background-color: rgba(255, 255, 255, 0.2);
  border: 0;
  padding: 12px 15px;
  color: #fff;
  width: 100%;
  border-radius: 5px;
  text-align: left;
  height: auto;
  background-image: none;
}

.career-form .custom-select:focus {
  -webkit-box-shadow: none;
          box-shadow: none;
}

.career-form .select-container {
  position: relative;
}

.career-form .select-container:before {
  position: absolute;
  right: 15px;
  top: calc(50% - 14px);
  font-size: 18px;
  color: #ffffff;
  content: '\F2F9';
  font-family: "Material-Design-Iconic-Font";
}

.filter-result .job-box {
background:#fff;
  -webkit-box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
          box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
  border-radius: 10px;
  padding: 10px 35px;
}

ul {
  list-style: none; 
}

.list-disk li {
  list-style: none;
  margin-bottom: 12px;
}

.list-disk li:last-child {
  margin-bottom: 0;
}

.job-box .img-holder {
  height: 65px;
  width: 65px;
  background-color: #4e63d7;
  background-image: -webkit-gradient(linear, left top, right top, from(rgba(78, 99, 215, 0.9)), to(#5a85dd));
  background-image: linear-gradient(to right, rgba(78, 99, 215, 0.9) 0%, #5a85dd 100%);
  font-family: "Open Sans", sans-serif;
  color: #fff;
  font-size: 22px;
  font-weight: 700;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  border-radius: 65px;
}

.career-title {
  background-color: #4e63d7;
  color: #fff;
  padding: 15px;
  text-align: center;
  border-radius: 10px 10px 0 0;
  background-image: -webkit-gradient(linear, left top, right top, from(rgba(78, 99, 215, 0.9)), to(#5a85dd));
  background-image: linear-gradient(to right, rgba(78, 99, 215, 0.9) 0%, #5a85dd 100%);
}

.job-overview {
  -webkit-box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
          box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
  border-radius: 10px;
}

@media (min-width: 992px) {
  .job-overview {
    position: -webkit-sticky;
    position: sticky;
    top: 70px;
  }
}

.job-overview .job-detail ul {
  margin-bottom: 28px;
}

.job-overview .job-detail ul li {
  opacity: 0.75;
  font-weight: 600;
  margin-bottom: 15px;
}

.job-overview .job-detail ul li i {
  font-size: 20px;
  position: relative;
  top: 1px;
}

.job-overview .overview-bottom,
.job-overview .overview-top {
  padding: 35px;
}

.job-content ul li {
  font-weight: 600;
  opacity: 0.75;
  border-bottom: 1px solid #ccc;
  padding: 10px 5px;
}

@media (min-width: 768px) {
  .job-content ul li {
    border-bottom: 0;
    padding: 0;
  }
}

.job-content ul li i {
  font-size: 20px;
  position: relative;
  top: 1px;
}

.mb-30 {
    margin-bottom: 30px;
}
</style>
