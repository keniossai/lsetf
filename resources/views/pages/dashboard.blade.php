@extends('layouts.app')

@section('content')
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <nav class="pcoded-navbar">
            <div class="pcoded-inner-navbar main-menu">
                <ul class="pcoded-item pcoded-left-item">
                    <li class="pcoded-hasmenu">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                            <span class="pcoded-mtext">Dashboard</span>
                        </a>
                    </li>
                    <li class="pcoded-hasmenu">
                        <a href="javascript:void(0)">
                            <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                            <span class="pcoded-mtext">Pages</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class=" pcoded-hasmenu">
                                <a href="{{asset('assets/images/resource/Employment Summit Agenda.pdf')}}">
                                    <span class="pcoded-mtext">Schedule</span>
                                </a>                               
                            </li>
                            <li class=" pcoded-hasmenu">
                                <a href="{{asset('assets/images/resource/Hon Commissioner for Agriculture Presentation LSETF Employment Summit.pptx')}}">
                                    <span class="pcoded-mtext">Presentation</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="{{asset('assets/images/resource/LSETF Innovation Deck.pdf')}}">
                                    <span class="pcoded-mtext">Innovation Desk</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="{{asset('assets/images/resource/Employment Summit Pitch Deck V2.pdf')}}">
                                    <span class="pcoded-mtext">Summit Desk</span>
                                </a>
                            </li>
                            <li class=" ">
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                     <span class="pcoded-mtext">Logout</span>
                                </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </li>
                        </ul>
                    </li>   
                </ul>
            </div>    
        </nav>
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <!-- Main-body start -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- Page-header start -->
                        
                            <!-- Page-body start -->
                            <div class="page-body">
                                <!--profile cover start-->
                                <div class="row">
                                    <div class="container">
                                        <div class="card">
                                            <img style="width: 100%; background-size: cover;"  src="{{asset('admin/assets/images/welcome.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="cover-profile">
                                            <div class="profile-bg-img">
                                                <a href=""><img class="profile-bg-img img-fluid" src="{{asset('assets/images/background/asset.png')}}" alt="bg-img"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--profile cover end-->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <!-- tab header start -->
                                        <div class="tab-header card">
                                            <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">The Lobby</a>
                                                    <div class="slide"></div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#binfo" role="tab">Schedules</a>
                                                    <div class="slide"></div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- tab header end -->
                                        <!-- tab content start -->
                                        <div class="tab-content">
                                            <!-- tab panel personal start -->
                                            <div class="tab-pane active" id="personal" role="tabpanel">
                                                <!-- personal card start -->
                                                
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-sm-12 text-center ">
                                                            <div class="card">
                                                                
                                                                <div class="card-body" style="background-image: url({{asset('assets/images/main-slider/profile.png')}});height: 500px; background-size: cover; background-position: center; ">
                                                                    <div style="position: relative; top: 150px;">
                                                                        <h5 class="card-title text-left m-2" style="color: white">Lagos Employment Summit 2022</h5>
                                                                        <h5 class="card-title text-left m-2" style="color: white">Opening Speeches & Plenary Sessions</h5>
                                                                        <a style="color: #000" class="btn text-center" data-toggle="modal" data-target="#ModalCentered"> <i class="fa fa-play-circle-o" aria-hidden="true"></i></a>
                                                                    </div>
                                                                    
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="col-lg-12 col-xl-6 text-center">
                                                            <div class="card" style="background-image: url({{asset('assets/images/main-slider/profile.png')}}); height: 200px; background-size: cover; background-attachment: repeat;">
                                                                <div class="card-body">
                                                                    <h4 class="card-title text-left m-2" style="color: white">Breakout Session 1</h4>
                                                                    <ul>
                                                                        <li class="card-text m-2 text-left" style="color: white">Identifying Barriers & Opportunities in the use of TVET to grow youth employment</li>
                                                                    </ul>
                                                                    <a style="color: #000" class="btn btn-2" data-toggle="modal" data-target="#bd-example-modal-lg"><i class="fa fa-play-circle-o" aria-hidden="true"></i></a>
    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-xl-6 text-center">
                                                            <div class="card" style="background-image: url({{asset('assets/images/main-slider/profile.png')}});height: 200px;">
                                                                <div class="card-body">
                                                                    <h4 class="card-title text-left m-2" style="color: white">Breakout Session 2</h4>
                                                                    <ul>
                                                                        <li class="card-text m-2 text-left" style="color: white">Job Centres: Preparing Youth for a Resilient Career; Soft-skills and other investments.</li>
                                                                    </ul>
                                                                    <a style="color: #000" class="btn btn-2" data-toggle="modal" data-target="#bd-example-modal-lg"><i class="fa fa-play-circle-o" aria-hidden="true"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="modal fade" id="ModalCentered" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-xl">
                                                      <div class="modal-content">
                                                        <iframe width="966" height="543" src="https://www.youtube.com/embed/0zJZaWfdf4Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                      </div>
                                                    </div>
                                                  </div>

                                                  <div class="modal fade" id="bd-example-modal-lg" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-xl">
                                                      <div class="modal-content">
                                                        <iframe width="966" height="543" src="https://www.youtube.com/embed/0zJZaWfdf4Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-xl">
                                                      <div class="modal-content">
                                                        <iframe width="966" height="543" src="https://www.youtube.com/embed/0zJZaWfdf4Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                      </div>
                                                    </div>
                                                  </div>
                                            </div>
                                            
                                            <!-- tab pane personal end -->
                                            <!-- tab pane info start -->
                                            <div class="tab-pane" id="binfo" role="tabpanel">
                                                <!-- info card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5 class="card-header-text">Event Schedule</h5> 
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="card b-l-success business-info services m-b-20">
                                                                    <div class="card-header">
                                                                        <div class="service-header">
                                                                            <a href="#">
                                                                                <h5 class="card-header-text">Day 1</h5>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card b-l-success business-info services m-b-20">
                                                                    <div class="card-header">
                                                                        <div class="service-header">
                                                                            <a href="#">
                                                                                <h5 class="card-header-text">Day 2</h5>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card b-l-danger business-info services">
                                                                    <div class="card-header">
                                                                        <div class="service-header">
                                                                            <a href="#">
                                                                                <h5 class="card-header-text">Welcome (10:00 - 10:10am)</h5>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <p class="task-detail">Mrs. Bola Adesola</p>
                                                                            </div>
                                                                            <!-- end of col-sm-8 -->
                                                                        </div>
                                                                        <!-- end of row -->
                                                                    </div>
                                                                    <!-- end of card-block -->
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card b-l-danger business-info services">
                                                                    <div class="card-header">
                                                                        <div class="service-header">
                                                                            <a href="#">
                                                                                <h5 class="card-header-text">Opening Remarks (10:10 - 10:20am)</h5>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <p class="task-detail">Hon Yetunde Arobieke</p>
                                                                                <p class="task-detail">(Honorable Commissioner, Ministry of Wealth Creation & Employment)</p>
                                                                            </div>
                                                                            <!-- end of col-sm-8 -->
                                                                        </div>
                                                                        <!-- end of row -->
                                                                    </div>
                                                                    <!-- end of card-block -->
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card b-l-info business-info services">
                                                                    <div class="card-header">
                                                                        <div class="service-header">
                                                                            <a href="#">
                                                                                <h5 class="card-header-text">Opening Remarks Government Strategies for Job creation</h5>
                                                                            </a>
                                                                        </div>
                                                                        <span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip"></span>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <p class="task-detail">Mr Sam Egube (Hon. Commissioner, MEPB)</p>
                                                                            </div>
                                                                            <!-- end of col-sm-8 -->
                                                                        </div>
                                                                        <!-- end of row -->
                                                                    </div>
                                                                    <!-- end of card-block -->
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card b-l-warning business-info services">
                                                                    <div class="card-header">
                                                                        <div class="service-header">
                                                                            <a href="#">
                                                                                <h5 class="card-header-text">Keynote: (9:55 - 10: 10am)</h5>
                                                                            </a>
                                                                        </div>
                                                                        <span class="dropdown-toggle addon-btn text-muted f-right service-btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="tooltip"></span>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <p class="task-detail">Mr Abubakar Suleiman (MD/CEO Sterling Bank)</p>
                                                                            </div>
                                                                            <!-- end of col-sm-8 -->
                                                                        </div>
                                                                        <!-- end of row -->
                                                                    </div>
                                                                    <!-- end of card-block -->
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card b-l-danger business-info services">
                                                                    <div class="card-header">
                                                                        <div class="service-header">
                                                                            <a href="#">
                                                                                <h5 class="card-header-text">Our 5 Year Journey: What We’ve Learned from Building Resilience and Supporting Job Creation for MSMEs. (10:25 - 10:45am)</h5>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <p class="task-detail">Mrs. Teju Abisoye (Executive Secretary, LSETF)</p>
                                                                            </div>
                                                                            <!-- end of col-sm-8 -->
                                                                        </div>
                                                                        <!-- end of row -->
                                                                    </div>
                                                                    <!-- end of card-block -->
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-6">
                                                                <div class="card b-l-success business-info services">
                                                                    <div class="card-header">
                                                                        <div class="service-header">
                                                                            <a href="#">
                                                                                <h5 class="card-header-text">Plenary Session 3: Partnering for Impact: Critical Drivers of Youth Employment.(10:10 - 11:00am)</h5>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <p class="task-detail">Panellists:</p>
                                                                                <p class="task-detail">Tosin Faniro-Dada - Moderator (Endeavor)</p>
                                                                            </div>
                                                                            <!-- end of col-sm-8 -->
                                                                        </div>
                                                                        <!-- end of row -->
                                                                    </div>
                                                                    <!-- end of card-block -->
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card b-l-danger business-info services">
                                                                    <div class="card-header">
                                                                        <div class="service-header">
                                                                            <a href="#">
                                                                                <h5 class="card-header-text">Video: Africa & The Future of Work (10:45 - 10:50am)</h5>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <p class="task-detail">Mr. Aloysius Uche Ordu </p><small>Director - Africa Growth Initiative, Brookings Institute</small>
                                                                            </div>
                                                                            <!-- end of col-sm-8 -->
                                                                        </div>
                                                                        <!-- end of row -->
                                                                    </div>
                                                                    <!-- end of card-block -->
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card b-l-success business-info services">
                                                                    <div class="card-header">
                                                                        <div class="service-header">
                                                                            <a href="#">
                                                                                <h5 class="card-header-text">Financial Institutions and their role in Job creation(11:00 - 11:10am)</h5>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <p class="task-detail">AIG Imokhuede</p><small>Chairman AIG</small>
                                                                            </div>
                                                                            <!-- end of col-sm-8 -->
                                                                        </div>
                                                                        <!-- end of row -->
                                                                    </div>
                                                                    <!-- end of card-block -->
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card b-l-danger business-info services">
                                                                    <div class="card-header">
                                                                        <div class="service-header">
                                                                            <a href="#">
                                                                                <h5 class="card-header-text">Keynote: (10:50 - 11:10am)</h5>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <p class="task-detail">Ina Hommers</p><small>Country Director Nigeria & ECOWAS GIZ</small>
                                                                            </div>
                                                                            <!-- end of col-sm-8 -->
                                                                        </div>
                                                                        <!-- end of row -->
                                                                    </div>
                                                                    <!-- end of card-block -->
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card b-l-success business-info services">
                                                                    <div class="card-header">
                                                                        <div class="service-header">
                                                                            <a href="#">
                                                                                <h5 class="card-header-text">Plenary Session 4: Learning from History: A Case Study of Apprenticeship Systems (11:30 - 12:20pm)</h5>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <p class="task-detail">Panellists:</p><small> Dr. Henrietta Onwuegbuzie</small>
                                                                            </div>
                                                                            <!-- end of col-sm-8 -->
                                                                        </div>
                                                                        <!-- end of row -->
                                                                    </div>
                                                                    <!-- end of card-block -->
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card b-l-danger business-info services">
                                                                    <div class="card-header">
                                                                        <div class="service-header">
                                                                            <a href="#">
                                                                                <h5 class="card-header-text">Governor’s Keynote Remarks (11:10 - 11:25am)</h5>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <p class="task-detail">Mr. Babajide Sanwoolu</p><small>Governor of Lagos State</small>
                                                                            </div>
                                                                            <!-- end of col-sm-8 -->
                                                                        </div>
                                                                        <!-- end of row -->
                                                                    </div>
                                                                    <!-- end of card-block -->
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card b-l-success business-info services">
                                                                    <div class="card-header">
                                                                        <div class="service-header">
                                                                            <a href="#">
                                                                                <h5 class="card-header-text">Plenary Session 5: Orange Economy: Catalysing Youth Employment in Emerging Markets (12:20 - 1:10pm)</h5>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <b class="task-detail">Omoyemi Akerele - Moderator</b><small> Style House</small> <br>
                                                                                <small>1. Mr. Fola  Olatunji -David</small>
                                                                                <small>2. Mr. Idris Olorunnimbe</small>
                                                                                <small>3. Chinaza Onuzo</small>
                                                                                <small>4. Ojoma Ochai</small>
                                                                            </div>
                                                                            <!-- end of col-sm-8 -->
                                                                        </div>
                                                                        <!-- end of row -->
                                                                    </div>
                                                                    <!-- end of card-block -->
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card b-l-danger business-info services">
                                                                    <div class="card-header">
                                                                        <div class="service-header">
                                                                            <a href="#">
                                                                                <h5 class="card-header-text">Plenary Session 1: Innovative and Inclusive Job Creation Strategies Post the COVID-19 Pandemic (11:50 - 12:40pm)</h5>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <p class="task-detail">Panellist: </p>
                                                                                <b>Adenike Adeyemi- Moderator</b>
                                                                                <small>1. Uyi Akpata / Sola Adewola</small>/
                                                                                <small>2. Jussi Hinkkanen</small>/
                                                                                <small>3. Ferris, Sybil </small>/
                                                                                <small>4. Ify Umunna </small>/
                                                                                <small>Solape Hammond </small>/
                                                                            </div>
                                                                            <!-- end of col-sm-8 -->
                                                                        </div>
                                                                        <!-- end of row -->
                                                                    </div>
                                                                    <!-- end of card-block -->
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-6">
                                                                <div class="card b-l-success business-info services">
                                                                    <div class="card-header">
                                                                        <div class="service-header">
                                                                            <a href="#">
                                                                                <h5 class="card-header-text">Topical presentation: Building Resilience for MSMEs: A report on the MSME Recovery Advocacy project - The journey thus far (1.10 - 1.20pm)</h5>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <p class="task-detail">Mr Jimi Ogbobine</p><small>Agusto & Co</small>
                                                                            </div>
                                                                            <!-- end of col-sm-8 -->
                                                                        </div>
                                                                        <!-- end of row -->
                                                                    </div>
                                                                    <!-- end of card-block -->
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card b-l-danger business-info services">
                                                                    <div class="card-header">
                                                                        <div class="service-header">
                                                                            <a href="#">
                                                                                <h5 class="card-header-text">Lagos State & Improved Ease of Doing Business Policy (11:50 - 12:40pm)</h5>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <p class="task-detail">Solape Hammond </p><small>SA, SDG to Gov, LASG</small>/
                                                                            </div>
                                                                            <!-- end of col-sm-8 -->
                                                                        </div>
                                                                        <!-- end of row -->
                                                                    </div>
                                                                    <!-- end of card-block -->
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card b-l-success business-info services">
                                                                    <div class="card-header">
                                                                        <div class="service-header">
                                                                            <a href="#">
                                                                                <h5 class="card-header-text">Special Presentations: Showcase of leading practices in Entrepreneurship for job creation (1.20 - 2.10pm)</h5>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <p class="task-detail">Panelist Presentations</p>
                                                                                <b>Omolara Adewumi- Moderator</b>
                                                                                <small> 1. Khalil Nur Khalil</small>
                                                                                <small> 2. Olawale Anifowoshe</small>
                                                                                <small> 3. Tola Johnson</small>
                                                                                <small> 4. Mrs Ayokanmi Ayuba</small>
                                                                                <small> 5. Prof Adebisi</small>
                                                                            </div>
                                                                            <!-- end of col-sm-8 -->
                                                                        </div>
                                                                        <!-- end of row -->
                                                                    </div>
                                                                    <!-- end of card-block -->
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card b-l-danger business-info services">
                                                                    <div class="card-header">
                                                                        <div class="service-header">
                                                                            <a href="#">
                                                                                <h5 class="card-header-text">Plenary Session 2: The role of Regulation & Ease of doing business in reviving youth employment (12:45 - 1:30pm)</h5>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <p class="task-detail">Panellist: </p>
                                                                                <b>Babasola Alakolaro– Moderator</b>
                                                                                <small>1. Jumoke Oduwole</small>/
                                                                                <small>2. Mr. Olaoye Jaiyeola</small>/
                                                                                <small>3. Michael Famoroti </small>/
                                                                                <small>4. Princess Adeyinka </small>/
                                                                                <small>5. Adeniyi Adenubi </small>/
                                                                            </div>
                                                                            <!-- end of col-sm-8 -->
                                                                        </div>
                                                                        <!-- end of row -->
                                                                    </div>
                                                                    <!-- end of card-block -->
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card b-l-success business-info services">
                                                                    <div class="card-header">
                                                                        <div class="service-header">
                                                                            <a href="#">
                                                                                <h5 class="card-header-text">Topical Presentation: Block Chain- NFT, E-currencies and the GIG Economy (3.05 - 3.10pm)</h5>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <p class="task-detail">Mr. Victor Akoma-Philips</p><small> Interstellar Limited</small>
                                                                            </div>
                                                                            <!-- end of col-sm-8 -->
                                                                        </div>
                                                                        <!-- end of row -->
                                                                    </div>
                                                                    <!-- end of card-block -->
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card b-l-danger business-info services">
                                                                    <div class="card-header">
                                                                        <div class="service-header">
                                                                            <a href="#">
                                                                                <h5 class="card-header-text">TVET in Nigeria and other Jurisdictions: The Possibilities (2.25 - 2.30pm)</h5>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <p class="task-detail">Christian Kaelin</p><small>Head Employability, LSETF</small>/
                                                                            </div>
                                                                            <!-- end of col-sm-8 -->
                                                                        </div>
                                                                        <!-- end of row -->
                                                                    </div>
                                                                    <!-- end of card-block -->
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card b-l-success business-info services">
                                                                    <div class="card-header">
                                                                        <div class="service-header">
                                                                            <a href="#">
                                                                                <h5 class="card-header-text">Breakout Session 4: The future of work; ‘Gig Economy’ – Opportunities, challenges, and strategies for success  (3:10 - 4:10pm)</h5>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <p class="task-detail">Panelist:</p>
                                                                                <b>Ibraheem Babalola - Moderator</b>
                                                                                <small> 2. Kikelomo Fola- Ogunniya</small>
                                                                                <small> 3. Tope Akinwumi</small>
                                                                                <small> 4. Mr. Olufemi Taiwo, Co-Founder/CEO</small>
                                                                                <small> 4. Mrs Ayokanmi Ayuba</small>
                                                                                <small> 5. Fade Ogunro</small>
                                                                            </div>
                                                                            <!-- end of col-sm-8 -->
                                                                        </div>
                                                                        <!-- end of row -->
                                                                    </div>
                                                                    <!-- end of card-block -->
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card b-l-danger business-info services">
                                                                    <div class="card-header">
                                                                        <div class="service-header">
                                                                            <a href="#">
                                                                                <h5 class="card-header-text">Breakout Session 1: Identifying Barriers & Opportunities in the use of TVET to grow youth employment (2.30pm - 3.30pm)</h5>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <p class="task-detail">Panellist: </p>
                                                                                <b>Mrs. Ronke Azeez  - Moderator</b>
                                                                                <small>1.Ms. Jody  Adewale</small>/
                                                                                <small>2. Mr. Tobias Wolfgarten </small>/
                                                                                <small>3. Mrs. Adefisayo </small>/
                                                                                <small>4. Princess Adeyinka </small>/
                                                                                <small>4.Mr. Igbuan Okaisabor </small>/
                                                                            </div>
                                                                            <!-- end of col-sm-8 -->
                                                                        </div>
                                                                        <!-- end of row -->
                                                                    </div>
                                                                    <!-- end of card-block -->
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card b-l-success business-info services">
                                                                    <div class="card-header">
                                                                        <div class="service-header">
                                                                            <a href="#">
                                                                                <h5 class="card-header-text">Breakout Session 6: Agriculture, Technology and Youth: Harvesting Hidden Opportunities in the Value Chain  (3:10 - 4:10pm)</h5>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <p class="task-detail">Panelist:</p>
                                                                                <b>Ms Durosinmi-Etti - Moderator</b>
                                                                                <small> 2. Mr. Olabode Abikoye</small>
                                                                                <small> 3. Ebun Feludu</small>
                                                                                <small> 4. Rotimi Olawale</small>
                                                                                <small> 5. Mr. Seyi Abolaji </small>
                                                                            </div>
                                                                            <!-- end of col-sm-8 -->
                                                                        </div>
                                                                        <!-- end of row -->
                                                                    </div>
                                                                    <!-- end of card-block -->
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card b-l-danger business-info services">
                                                                    <div class="card-header">
                                                                        <div class="service-header">
                                                                            <a href="#">
                                                                                <h5 class="card-header-text">Breakout Session 2: Job Centres: Preparing Youth for a Resilient Career; Soft-skills and other investments. (2.30pm - 3.30pm)</h5>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <p class="task-detail">Panellist: </p>
                                                                                <b>Sheila Ojei - Moderator</b>
                                                                                <small>1. Ms. Adetomi Soyinka</small>/
                                                                                <small>2. Femi Taiwo</small>/
                                                                                <small>3. Mrs. Seriki Bello</small>/
                                                                                <small>4. Bode Roberts </small>/
                                                                            </div>
                                                                            <!-- end of col-sm-8 -->
                                                                        </div>
                                                                        <!-- end of row -->
                                                                    </div>
                                                                    <!-- end of card-block -->
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card b-l-success business-info services">
                                                                    <div class="card-header">
                                                                        <div class="service-header">
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        
                                                                    </div>
                                                                    <!-- end of card-block -->
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card b-l-danger business-info services">
                                                                    <div class="card-header">
                                                                        <div class="service-header">
                                                                            <a href="#">
                                                                                <h5 class="card-header-text">Break out Session 3: Alternative education to employment pathways: How recognition of prior learning from immersion, freelancing, informal apprenticeship can be recognized and leveraged as a pathway to self or waged employment. (3.30pm - 4.30pm)</h5>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <p class="task-detail">Panellist: </p>
                                                                                <b>Sybil Ferris - Moderator</b>
                                                                                <small>1. Foluke Jaiyeola</small>/
                                                                                <small>2. Olawanle Morenikeji</small>/
                                                                                <small>3. Ewoma Oloye</small>/
                                                                                <small>4. Mrs. Omowale Ogunrinde </small>/
                                                                            </div>
                                                                            <!-- end of col-sm-8 -->
                                                                        </div>
                                                                        <!-- end of row -->
                                                                    </div>
                                                                    <!-- end of card-block -->
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card b-l-success business-info services">
                                                                    <div class="card-header">
                                                                        <div class="service-header">
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <!-- end of row -->
                                                                    </div>
                                                                    <!-- end of card-block -->
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="card b-l-danger business-info services">
                                                                    <div class="card-header">
                                                                        <div class="service-header">
                                                                            <a href="#">
                                                                                <h5 class="card-header-text">Break out session 4:  Diversity & Inclusion: A Tool for Economic Growth  (3.30pm - 4.30pm)</h5>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <p class="task-detail">Panellist: </p>
                                                                                <b>Mrs. Abosede George-Ogan - Moderator</b>
                                                                                <small>2. Ms. Adenike Oyetunde</small>/
                                                                                <small>3. Mrs. Hansatu Adegbite, </small>/
                                                                                <small>4. Dabesaki Mac- Ikemenjima</small>/
                                                                                <small>5. Omolola Opaleye </small>/
                                                                            </div>
                                                                            <!-- end of col-sm-8 -->
                                                                        </div>
                                                                        <!-- end of row -->
                                                                    </div>
                                                                    <!-- end of card-block -->
                                                                </div>
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <!-- tab content end -->
                                    </div>
                                </div>
                            </div>
                            <!-- Page-body end -->
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</div>

<style>

@media only screen and (min-width: 375px){
    .btn-2{
        position: relative;
        top: -40px;
    }

    .card-body li{
        /* display: none; */
    }
}
    .modal-content{
        width: 100%;
        height: 0;
        padding-bottom: 56.25%;
        position: relative;
    }

    .modal-content iframe{
        position: absolute;
        width: 100%;
        height: 100%;
    }
    .btn{
        text-decoration: none;
        padding: 5px;
        background-color: #f82e2e;
        color: #000;
        justify-content: center;
        align-items: center;
        border-radius: 50px;
        cursor: pointer;
    }

    .btn:hover{
        box-shadow: #000;
    }
    .btn i{
        font-size: 40px;
        color: white;
        left: 20px;
    }
</style>  

@endsection


{{-- <div class="d-flex justify-content-center">
    <a href="about">
        <button class="theme-btn btn-style-one">About Event</button>
    </a>
    <div class="dropdown ml-3">
        <button class="theme-btn bg-warning btn-style-one dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Career Development
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
    </div>
</div> --}}