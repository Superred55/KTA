<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Kaz Travel Almaty</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
      <link href="{{ asset('css/touchTouch.css') }}" rel="stylesheet">
    <link href="{{ asset('css/isotope.css') }}" rel="stylesheet">
    <link href="{{ asset('css/select2.css') }}" rel="stylesheet">
    <link href="{{ asset('css/smoothness/jquery-ui-1.10.0.custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="front">

<div id="main">

    <div class="top1_wrapper">
        <div class="container">
            <div class="top1 clearfix">
                <div class="email1"><a href="#">kazalmaty@travelagency.com</a></div>
                <div class="phone1">+7 (727) 222 0602│+7 (727) 367 0312│+7 (727) 327 9918</div>
                <div class="social_wrapper">
                    <ul class="social clearfix">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="top2_wrapper">
        <div class="container">
            <div class="top2 clearfix">
                <header>
                    <div class="logo_wrapper">
                        <a href="/" class="logo">
                            <img src="{{asset('images/Logotype.png')}}" style="width: 190px; height: 94px"  alt="" class="img-responsive">
                        </a>
                    </div>
                </header>
                <div class="navbar navbar_ navbar-default text-center" >
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-collapse navbar-collapse_ collapse
                    "  >
                        <ul class="nav navbar-nav sf-menu clearfix">
                            <li class="active"><a href="/" style="font-size: 18px;">Главная</a>
                               </li>
                            <li><a href="/about" style="font-size: 18px;" >О нас</a></li>
                            <li><a href="/gallery" style="font-size: 18px;" >Галлерея</a></li>
                            <li class="sub-menu sub-menu-1"><a href="#" style="font-size: 18px;">Услуги<em></em></a>
                                <ul>
                                    <li><a href="/tours" style="font-size: 18px;">Туры</a>
                                    
                                    </li>


                                    <li><a href="/hotels" style="font-size: 18px;">Отели</a>
            
                                    </li>
                                 <li><a href="/cruises" style="font-size: 18px;">Круизы</a>
                                       
                
                                    </li>
                                </ul>
                            </li>

                            <li ><a href="/blog" style="font-size: 18px;" >Наш Блог</a>
                            </li>
                            <li><a href="/contacts" style="font-size: 18px;">Контакты</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield ("content")

    <div class="bot1_wrapper ">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="logo2_wrapper">
                        <a href="index.html" class="logo2">
                            <img src="images/logo2.png" alt="" class="img-responsive">
                        </a>
                    </div>
                    <p>
                                   Наше турагенство описание.
                    </p>
                    <p>
                        <a href="#" class="btn-default btn2">Узнать подробнее</a>
                    </p>
                </div>
                <div class="col-sm-4">
                    <div class="bot1_title">Специальные
                    предложения</div>
                    <ul class="ul1">
                        <li><a href="#">Полеты первым классом</a></li>
                        <li><a href="#">Доступные путешествия</a></li>
                        <li><a href="#">Незабываемые круизы</a></li>
                    </ul>

                    <div class="social2_wrapper">
                        <ul class="social2 clearfix">
                            <li class="nav1"><a href="#"></a></li>
                            <li class="nav2"><a href="#"></a></li>
                            <li class="nav3"><a href="#"></a></li>
                            <li class="nav4"><a href="#"></a></li>
                            <li class="nav5"><a href="#"></a></li>
                            <li class="nav6"><a href="#"></a></li>
                        </ul>
                    </div>

                </div>
            
                <div class="col-sm-5">
                    <div class="bot1_title">Новостной блог</div>
                    <div class="newsletter_block">
                        <div class="txt1">Идеи, предложения , обратная связь</div>
                        <div class="newsletter-wrapper clearfix">
                            <form class="newsletter" action="javascript:;">
                                <input type="text" name="s" value='Email Address'
                                       onBlur="if(this.value=='') this.value='Email Address'"
                                       onFocus="if(this.value =='Email Address' ) this.value=''">
                                <a href="#" class="btn-default btn3">Отправить</a>
                            </form>
                        </div>
                    </div>
                    <div class="phone2">+7 727 222 0602
                    </br>  
                                        +7 727 367 0312
                                    </br>
                                        +7 727 327 9918
                                    </div>
                    <div class="support1"><a href="#">kazalmaty@travelagency.com</a></div>
                </div>
            </div>
        </div>
    </div>

    <div class="bot2_wrapper">
        <div class="container">
            <div class="left_side">
                Copyright © 2019 <strong>KazTravelAlmaty</strong> <span>|</span> <a href="#">Privacy Policy</a> <span>|</span>
                <a href="#">О нас</a> <span>|</span> <a href="#">FAQ</a> <span>|</span> <a href="#">Связаться с поддержкой</a>
            </div>
            <div class="right_side">Designed by <strong>Vision Internet Marketing</strong></div>
        </div>
    </div>

</div>
@yield ("scripts")
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<script src="{{asset('js/jquery-migrate-1.2.1.min.js')}}"></script>
<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('js/superfish.js')}}"></script>
<script src="{{asset('js/select2.js')}}"></script>
<script src="{{asset('js/jquery.parallax-1.1.3.resize.js')}}"></script>
<script src="{{asset('js/SmoothScroll.js')}}"></script>
<script src="{{asset('js/jquery.appear.js')}}"></script>
<script src="{{asset('js/jquery.caroufredsel.js')}}"></script>
<script src="{{asset('js/jquery.touchSwipe.min.js')}}"></script>
<script src="{{asset('js/jquery.ui.totop.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
</body>
</html>