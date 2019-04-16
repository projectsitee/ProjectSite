<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title>عنوان سایت</title>
    <meta content="" name="description"/>
    <meta content="" name="keywords"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta content="telephone=no" name="format-detection"/>
    <meta name="HandheldFriendly" content="true"/>
    <link rel="stylesheet" href="{{asset('/assets/css/master.css')}}"/>
</head>
<body>
<div class="b-page-wrap">

    <!-- Loader-->
    <div id="page-preloader">
        <div class="loader-wrap"><span class="loader02"></span></div>
    </div>
    <!-- Loader end-->

    <!-- ==========================-->
    <!-- SEARCH MODAL-->
    <!-- ==========================-->
    <div class="header-search open-search" dir="rtl">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                    <div class="navbar-search">
                        <form class="search-global">
                            <input type="text" placeholder="دنبال چه چیزی میگردید؟" autocomplete="off" name="s" value=""
                                   class="search-global__input"/>
                            <button class="search-global__btn"><i class="icon fa fa-search"></i></button>
                            <div class="search-global__note">بد از تایپ کلمه مورد نظر کلید اینتر را بزنید</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <button type="button" class="search-close close"><i class="fa fa-times"></i></button>
    </div>
    <!-- ==========================-->
    <!-- MOBILE MENU-->
    <!-- ==========================-->


    <header class="header-transparent wow slideInDown">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                    <div class="b-logo">
                        <a href="index-1.html">
                            <img src="assets/media/general/logo-white.png" alt="/">
                            <span class="logo-title">
                                                                                        عنوان سایت
                                                                                    </span>
                        </a>
                    </div>
                    <!-- Mobile Trigger Start-->
                    <button class="menu-mobile-button visible-xs-block js-toggle-mobile-slidebar toggle-menu-button"><i
                                class="toggle-menu-button-icon"><span></span><span></span><span></span><span></span><span></span><span></span></i>
                    </button>
                    <!-- Mobile Trigger End-->
                </div>
                <div class="hidden-xs col-sm-9 col-md-7 col-lg-8">
                    <div class="header-navibox-2">
                        <nav id="nav" class="navbar">
                            <ul class="yamm main-menu nav navbar-nav hidden-xs">
                                <li>
                                    <a href="gallery-3.html">نماس با ما</a>
                                </li>
                                <li>
                                    <a href="gallery-3.html">اطلاعیه ها</a>
                                </li>
                                <li>
                                    <a href="gallery-3.html">شماره حساب ها</a>
                                </li>
                                <li>
                                    <a href="gallery-3.html">تعرفه ها</a>
                                </li>
                                <li>
                                    <a href="gallery-3.html">ورود به سایت</a>
                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
                    <div class="b-socials">
                        <ul class="list-inline">
                            <li class="search-toogle">
                                <a href="#" class="btn_header_search">
                                    <i class="fa fa-search fa-fw" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </header>

    <div class="b-page-content with-layer-bg">
        <!-- ==========================-->
        <!-- PAGES BACKGROUND -->
        <!-- ==========================-->
        <div class="b-layer-big">
            <div class="layer-big-bg page-layer-big-bg">
                <div class="layer-content-big">
                    <!-- Home slider -->
                    <div class="b-home-slider-holder wow slideInUp">
                        <div class="b-home-slider"
                             data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "fade": true, "speed": 1000, "autoplay": true}'>
                            <!-- Home slide 1 -->
                            <div class="home-slide">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 text-center">
                                            <div class="b-home-slider-content">
                                                <img src="{{asset('/img/00.jpg')}}" width="1000" height="300">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Home slide 2 -->
                            <div class="home-slide">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 text-center">
                                            <div class="b-home-slider-content">
                                                <img src="{{asset('/img/02.jpg')}}" width="1000" height="300">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- END Home slider -->
                </div>
            </div>
        </div>

    </div>
</div>
<br/>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('فرم ثبت اطلاعات') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{url('/AddMember')}}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('نام') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text"
                                       class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                       name="FName" value="{{ old('name') }}" autofocus>

                                @if ($errors->has('FName'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('FName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name"
                                   class="col-md-4 col-form-label text-md-right">{{ __('نام خانوادگی') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text"
                                       class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                       name="LName" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('LNmae'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('LName') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name"
                                   class="col-md-4 col-form-label text-md-right">{{ __('جنسیت') }}</label>

                            <div class="col-md-6">
                                <select name="Sex" class="form-control">

                                    <option
                                            value="1">مرد
                                    </option>

                                    <option
                                            value="2">زن
                                    </option>

                                </select>
                            </div>

                        </div>


                        <div class="form-group row">
                            <label for="name"
                                   class="col-md-4 col-form-label text-md-right">{{ __('شماره تلفن ثابت') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text"
                                       class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                       name="TelHome" value="{{ old('name') }}" required autofocus>


                                @if ($errors->has('TelHome'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('TelHome') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name"
                                   class="col-md-4 col-form-label text-md-right">{{ __('شماره تلفن همراه') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text"
                                       class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                       name="Phone" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('Phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Phone') }}</strong>
                                    </span>
                                @endif

                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email"
                                   class="col-md-4 col-form-label text-md-right">{{ __('پست الکترونیک') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text"
                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                       name="UserName" value="{{ old('email') }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name"
                                   class="col-md-4 col-form-label text-md-right">{{ __('نام شرکت یا موسسه') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text"
                                       class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                       name="NameCompany" value="{{ old('name') }}" required autofocus>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name"
                                   class="col-md-4 col-form-label text-md-right">{{ __('استان') }}</label>

                            <div class="col-md-6">
                                <select name="State" class="form-control">

                                    <option
                                            value="1">تهران
                                    </option>

                                    <option
                                            value="2">شیراز
                                    </option>

                                </select>
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="name"
                                   class="col-md-4 col-form-label text-md-right">{{ __('شهرستان') }}</label>

                            <div class="col-md-6">
                                <select name="City" class="form-control">

                                    <option
                                            value="1"></option>


                                </select>
                            </div>

                        </div>


                        <div class="form-group row">
                            <label for="name"
                                   class="col-md-4 col-form-label text-md-right">{{ __('ادرس پستی') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text"
                                       class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                       name="PostalAdderss" value="{{ old('name') }}" required autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name"
                                   class="col-md-4 col-form-label text-md-right">{{ __('کد پستی') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text"
                                       class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                       name="PostalCode" value="{{ old('name') }}" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name"
                                   class="col-md-4 col-form-label text-md-right">{{ __('نام کاربری(موبایل)') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text"
                                       class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                       name="email" value="{{ old('name') }}" required autofocus>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password"
                                   class="col-md-4 col-form-label text-md-right">{{ __('کلمه عبور') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                       name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                   class="col-md-4 col-form-label text-md-right">{{ __('تکرار کلمه عبور') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control"
                                       name="password_confirmation" required>
                            </div>
                        </div>
                        <br/>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="color:red;">
                                    {{ __('ثبت اطلاعات') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <div class="b-footer-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="titles">
                        <h4>اخبار و اطلاعیه</h4>
                        <hr/>
                    </div>
                    <ul class="news-list">
                        <li><a href="downloadSoft.aspx">بهترین مرورگر استفاده از سایت کروم و فاریرفاکس می باشد </a></li>
                        <li>
                            <a onclick='window.open("http://trustseal.enamad.ir/Verify.aspx?id=32247&p=fuixwkynwkynodshqgwl", "Popup","toolbar=no, location=no, statusbar=no, menubar=no, scrollbars=1, resizable=0, width=580, height=600, top=30")'
                               alt='' src='http://trustseal.enamad.ir/logo.aspx?id=32247&p=vjymqesgqesgaodspeuk'>اخذ
                                نماد اعتماد الکترونیکی</a>
                        </li>
                        <li><a href="contact.aspx">آدرس جدید دفتر چاپ ما</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="titles">
                        <h4>درگاه های پرداخت آنلاین</h4>
                        <hr/>
                    </div>
                    <p>چاپ ما با افتخار اعلام میدارد که مجوز های مربوطه و افتخارات لازمه را در زمینه فعالیت خود کسب
                        کرده است</p>
                    <div class="trust">
                        <img src="img/logo-mellat.png" width="80px"/>
                        <img src="img/BPMLogo.png" width="80px">
                        <img src="img/logo3.jpg" width="80px">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="titles">
                        <h4>ما را دنبال کنید</h4>
                        <hr/>
                    </div>
                    <p>ما همیشه در کنار شما هستیم و در شبکه های اجتماعی نیز فعال خواهیم بود .ما را از این شبکه ها دریافت
                        کنید </p>
                    <div class="socials">
                        <a href="#"><i class="icon-facebook"></i></a>
                        <a href="#"><i class="icon-twitter"></i></a>
                        <a href="https://telegram.me/hafezprint" target="_blank"><i><img
                                        src="{{asset('/img/telegram.png')}}"/></i></a>
                        <a href="#"><img src="{{asset('/img/insta.png')}}"/></a>
                        <a href="#"><img src="{{asset('/img/Line.png')}}"/></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</footer>
<!-- MAIN SCRIPTS-->
<script src="{{asset('/assets/libs/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('/assets/libs/jquery-migrate-1.2.1.js')}}"></script>
<!-- Bootstrap-->
<script src="{{asset('/assets/libs/bootstrap/bootstrap.min.js')}}"></script>
<!-- Adaptive big text -->
<script src="{{asset('/assets/plugins/slabText/js/jquery.slabtext.min.js')}}"></script>
<!-- Sliders -->
<!-- Owl slider -->
<script src="{{asset('/assets/plugins/owl-carousel/owl.carousel.min.js')}}"></script>
<!-- Slick slider -->
<script src="{{asset('/assets/plugins/slick/slick.min.js')}}"></script>
<!-- Sly slider -->
<script src="{{asset('/assets/plugins/slyslider/sly.min.js')}}"></script>
<!-- Bx slider -->
<script src="{{asset('/assets/plugins/bxslider/vendor/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('/assets/plugins/bxslider/vendor/jquery.fitvids.js')}}"></script>
<script src="{{asset('/assets/plugins/bxslider/jquery.bxslider.min.js')}}"></script>
<!-- Pop-up window-->
<script src="{{asset('/assets/plugins/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<!-- Headers scripts-->
<script src="{{asset('/assets/plugins/headers/slidebar.js')}}"></script>
<script src="{{asset('/assets/plugins/headers/header.js')}}"></script>
<!-- Filter and sorting images-->
<script src="{{asset('/assets/plugins/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('/assets/plugins/isotope/imagesLoaded.js')}}"></script>
<!-- Progress numbers-->
<script src="{{asset('/assets/plugins/rendro-easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
<script src="{{asset('/assets/plugins/rendro-easy-pie-chart/waypoints.min.js')}}"></script>
<!-- Entry Animations -->
<script src="{{asset('/assets/plugins/wow.min.js')}}"></script>
<!-- Calendar plugin -->
<script src="{{asset('/assets/plugins/pickmeup/pickmeup.js')}}"></script>
<!-- User customization-->
<script src="{{asset('/assets/js/custom.js')}}"></script>
<!-- User map-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqQ_bBw186KJnMcRByvn5ffZueg88wp1E"></script>
<!-- Maps customization-->
<script src="{{asset('/assets/js/custom-map.js')}}"></script>
<!--Contact form-->
{{--<script src="{{asset('/assets/plugins/jqBootstrapValidation.js')}}"></script>--}}
{{--<script src="{{asset('/assets/plugins/contact_me.js')}}"></script>--}}
</body>
</html>
