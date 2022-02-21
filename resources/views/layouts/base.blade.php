<!DOCTYPE html>
<html lang="en">

<!-- index-226:42-->
<head>
<meta charset="utf-8">
<title>Lagos State Employment Summit 2022 | Home</title>
 <meta name="author" content="LSETF">
<meta name="robots" content="index follow">
<meta name="googlebot" content="index follow">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="keywords" content="Lagos State Employment Summit 2022">
<meta name="description" content="Lagos State Goverment Employment Program">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Stylesheets -->
<link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">   
<!--Color Switcher Mockup-->
<link href="{{asset('assets/css/color-switcher-design.css')}}" rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href="{{asset('assets/css/color-themes/default-theme.css')}}" rel="stylesheet">

<link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"></div>
    
    <!-- Main Header-->
    <header class="main-header header-style-two">
        <div class="header-lower">
            <div class="auto-container">
                <div class="main-box clearfix">
                    <div class="logo-box">
                        <div class="logo"><a href="/"><img src="{{asset('assets/images/lagsi.png')}}" alt="" title=""></a></div>
                    </div>

                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md ">
                            <div class="navbar-header">
                                <!-- Toggle Button -->      
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon flaticon-menu-button"></span>
                                </button>
                            </div>
                            
                            <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix matchpitch">
                                    <li class="current"><a href="/">Home</a></li>
                                    <li class=""><a href="about">About</a></li>
                                    <li class=""><a href="#speakers">Speakers</a></li>
                                    <li class="dropdown"><a href="#">Resource</a>
                                        <ul>
                                            <li><a href="{{asset('assets/images/resource/Employment Summit Agenda.pdf')}}">Schedule</a></li>
                                            <li><a href="{{asset('assets/images/resource/Hon Commissioner for Agriculture Presentation LSETF Employment Summit.pptx')}}">Presentation</a></li>
                                            <li><a href="{{asset('assets/images/resource/LSETF Innovation Deck.pdf')}}">Innovation Desk</a></li>
                                            <li><a href="{{asset('assets/images/resource/Employment Summit Pitch Deck V2.pdf')}}">Summit Deck</a></li>
                                        </ul>
                                    </li>
                                    <li class=""><a href="#contact">Contact Us</a></li>
                                    @guest
                                    <li class=""><a href="register">Register</a></li>
                                        <li class=""><a href="login">Login</a></li>
                                        @else
                                        <li class="nav-item dropdown">
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                                
                                                Logout
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    @endguest
                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->                        

                        <!-- Outer Box-->
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="/" title=""><img src="{{asset('assets/images/lagsi.png')}}" alt="" title=""></a>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-collapse show collapse clearfix">
                            <ul class="navigation clearfix">
                                <li class="current"><a href="/">Home</a></li>
                                <li class=""><a href="about">About</a></li>
                                <li class=""><a href="speakers">Speakers</a></li>
                                <li class=""><a href="#">Resource</a>
                                    <ul>
                                        <li><a href="{{asset('assets/images/resource/Employment Summit Agenda.pdf')}}">Schedule</a></li>
                                        <li><a href="{{asset('assets/images/resource/Hon Commissioner for Agriculture Presentation LSETF Employment Summit.pptx')}}">Presentation</a></li>
                                        <li><a href="{{asset('assets/images/resource/LSETF Innovation Deck.pdf')}}">Innovation Deck</a></li>
                                        <li><a href="{{asset('assets/images/resource/Employment Summit Pitch Deck V2.pdf')}}">Summit Deck</a></li>
                                    </ul>
                                </li>
                                <li class=""><a href="#contact">Contact Us</a></li>
                                @guest
                                <li class=""><a href="register">Register now</a></li>
                                <li class=""><a href="login">Login</a></li>
                                @else
                                <li class="nav-item dropdown">
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            @endguest
                               
                            </ul> 
                        </div>
                    </nav><!-- Main Menu End-->
                    
                </div>
            </div>
        </div><!-- End Sticky Menu -->
    </header>
    <!--End Main Header -->


      @yield('content')

 <!-- Main Footer -->
 <footer class="main-footer alternate">
   <div class="auto-container">
       <!--Widgets Section-->
       <div class="widgets-section">
           <div class="row">
               <!--Big Column-->
               <div class="big-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                   <div class="row">
                       <!--Footer Column-->
                       <div class="footer-column col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="footer-widget about-widget">
                               <div class="footer-logo">
                                   <figure>
                                       <a href="index-2.html"><img src="{{asset('assets/images/lagsi.png')}}" alt=""></a>
                                   </figure>
                               </div>
                               <div class="widget-content">
                                   <div class="text">The summit will create an avenue for various actors to discuss strategies centered
                                    on new trends and opportunities from diverse sectors and value chains that have
                                    remained resilient all through the Covid-19 pandemic.</div>
                               </div>
                           </div>
                       </div>       
                   </div>
               </div>
               
               <!--Big Column-->
               <div class="big-column col-xl-5 col-lg-12 col-md-12 col-sm-12">
                   <div class="row clearfix">
                       <div class="footer-column col-xl-8 col-lg-8 col-md-8 col-sm-12">
                            <div class="footer-widget links-widget">
                               <h2 class="widget-title">Useful links</h2>
                               <div class="widget-content">
                                   <ul class="list d-flex">
                                       <li><a href="about">About</a></li>
                                       <li><a href="speakers">Speakers</a></li>
                                       <li><a href="#contact">Contact Us</a></li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   
   <!--Footer Bottom-->
   <div class="footer-bottom">
       <div class="auto-container">
           <div class="inner-container clearfix">
               <div class="social-links">
                   <ul class="social-icon-two">
                       <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                       <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                       <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                   </ul>
               </div>
               
               <div class="copyright-text" style="color: white">
                  &copy; Lagos State Employment Summit 2022 | All right reserved
               </div>
           </div>
       </div>
   </div>
</footer>
<!-- End Main Footer -->

</div>



<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-o-up"></span></div>
<script src="{{asset('assets/js/jquery.js')}}"></script> 
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('assets/js/owl.js')}}"></script>
<script src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('assets/js/wow.js')}}"></script>
<script src="{{asset('assets/js/appear.js')}}"></script>
<script src="{{asset('assets/js/mixitup.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
<script src="{{asset('assets/js/jquery.countdown.js')}}"></script>
<!-- Color Setting -->
<script src="{{asset('assets/js/color-settings.js')}}"></script>
</body>

<!-- index-226:55-->
</html>