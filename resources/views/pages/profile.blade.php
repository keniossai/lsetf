@extends('layouts.base')

@section('content')
<section class="page-title" style="background-image:url({{asset('assets/images/background/footer-2.png')}}); height: 200px;">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <div class="title-box">
                <h1>Profile</h1>
            </div>
        </div>
    </div>
</section>
     <!-- Specialize Section -->
     <section class="specialize-section-two">
        <div class="auto-container">
            <div class="row">
                <!-- Title Column -->
                <div class="title-column col-xl-5 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="float-text">Ndidi Nwuneli</span>
                            <h2>Ndidi Nwuneli</h2>
                        </div>
                        <br>
                        <div class="text-box">
                            <h4>(Sahel Capital) Agriculture</h4>
                            <p>Quality over quantity, so the saying goes. With so many concepts floating around the architectural profession, it can be difficult to keep up with all the ideas which you’re expected to know.</p>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they.It has survived not only five centuries. When an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Carousel Column -->
                <div class="carousel-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="carousel-outer">
                            <ul class="image-carousel owl-carousel owl-theme">
                                <li><img src="{{asset('assets/images/speakers/indidi.jpg')}}" alt=""></li>
                            </ul>
                            
                            <ul class="thumbs-carousel owl-carousel owl-theme">
                                <li class="thumb-box">
                                    <figure><img src="images/resource/special-thumb-3.jpg" alt=""></figure>
                                    <div class="overlay"><span class="icon fa fa-arrows-alt"></span></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Specialize Section -->
@endsection