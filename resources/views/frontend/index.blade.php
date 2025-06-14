@extends('frontend.layouts.app')
@section('title', '')
@section('content')

    {{-- <div class="rev_slider_wrapper fullscreen-container">
      <div id="slider5" class="rev_slider fullscreenbanner bg-dark" data-version="5.4.8">
        <ul>
          <li data-transition="fade" data-thumb="frontend/style/images/art/slider-bg17.jpg"><img loading="lazy"  src="{{asset('frontend/style/images/art/slider-bg17.jpg')}}" alt=""></li>
          <li data-transition="fade" data-thumb="frontend/style/images/art/slider-bg18.jpg"><img loading="lazy"  src="{{asset('frontend/style/images/art/slider-bg18.jpg')}}" alt=""></li>
          <li data-transition="fade" data-thumb="frontend/style/images/art/slider-bg19.jpg"><img loading="lazy"  src="{{asset('frontend/style/images/art/slider-bg19.jpg')}}" alt=""></li>
          <li data-transition="fade" data-thumb="frontend/style/images/art/slider-bg20.jpg"><img loading="lazy"  src="{{asset('frontend/style/images/art/slider-bg20.jpg')}}" alt=""></li>
          <li data-transition="fade" data-thumb="frontend/style/images/art/slider-bg21.jpg"><img loading="lazy"  src="{{asset('frontend/style/images/art/slider-bg21.jpg')}}" alt=""></li>
          <li data-transition="fade" data-thumb="frontend/style/images/art/slider-bg22.jpg"><img loading="lazy"  src="{{asset('frontend/style/images/art/slider-bg22.jpg')}}" alt=""></li>
          <li data-transition="fade" data-thumb="frontend/style/images/art/slider-bg23.jpg"><img loading="lazy"  src="{{asset('frontend/style/images/art/slider-bg23.jpg')}}" alt=""></li>
        </ul>
        <div class="tp-static-layers">
          <div class="tp-caption tp-static-layer font-weight-700 text-uppercase color-white text-center" data-x="center" data-y="middle" data-voffset="['-40','-40','-40','-35']" data-fontsize="['55','55','45','35']" data-lineheight="['65','65','55','45']" data-width="['900','900','700','450']" data-textalign="['center','center','center','center']" data-whitespace="['normal','normal','normal','normal']" data-frames='[{"from":"y:-50px;sX:2;sY:2;opacity:0;","speed":1000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-startslide="0" data-endslide="8" data-responsive="on" data-responsive_offset="on" style="z-index: 9; letter-spacing: 5px;">The Soul Saaga</div>
          <div class="tp-caption tp-static-layer font-weight-500 text-uppercase text-pink text-center" data-x="center" data-y="middle" data-voffset="['40','40','40','35']" data-fontsize="['24','24','24','18']" data-lineheight="['34','34','34','28']" data-width="['600','600','600','450']" data-textalign="['center','center','center','center']" data-whitespace="['normal','normal','normal','normal']" data-frames='[{"from":"y:-50px;sX:2;sY:2;opacity:0;","speed":1000,"to":"o:1;","delay":1200,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-startslide="0" data-endslide="8" data-responsive="on" data-responsive_offset="on" style="z-index: 9; letter-spacing: 10px;"><span class="typer" data-delay="100" data-delim=":" data-words="Wedding Photography:Videography:Photo Shots"></span><span class="cursor" data-owner="typer"></span></div>
        </div>
      </div>
      <!-- /.rev_slider -->
    </div> --}}

    <section>
        <div class="container-fluid px-xl-5">

            <div class="row py-5 ">
                <div class="col-lg-7 order-lg-2 order-1">
                    <div id="carouselExampleSlidesOnly" class="carousel slide mt-45" data-ride="carousel">
                        <div class="carousel-inner">


                            <div class="carousel-item active">
                                <img loading="lazy" class="d-block w-100"
                                    src="{{ asset('frontend/style/images/banner/slider-1.png') }}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img loading="lazy" class="d-block w-100"
                                    src="{{ asset('frontend/style/images/banner/slider-4.png') }}" alt="Second slide">
                            </div>

                            <div class="carousel-item">
                                <img loading="lazy" class="d-block w-100"
                                    src="{{ asset('frontend/style/images/banner/slider-2.png') }}" alt="Second slide">
                            </div>

                            <div class="carousel-item">
                                <img loading="lazy" class="d-block w-100"
                                    src="{{ asset('frontend/style/images/banner/slider-3.png') }}" alt="Third slide">
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" position-relative col-lg-5 mt-sm-0 mt-5 order-lg-1 order-2 text-lg-left text-center rect-sec-img">
                    <div class="logo-section">
                        <img loading="lazy" src="{{ asset('frontend/style/images/rectangle.png') }}" alt=""
                        class="pb-5  pr-lg-2 r-corner-arrow">
                    <h1 class="text-capitalize d-inline mt-3 heading banner"> The Soul Saaga </h1>
                    <p class="banner-p  text-center">Where two souls unite for eternity.</p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.rev_slider_wrapper -->
    <div class="wrapper pt-50 about-pt-30">
        <div class="container-fluid px-xl-5 inner pt-0 pb-0">
            <div class="row gutter-60 gutter-md-30 pt-0 mb-0 align-items-center">

                <div class="col-lg-5 pt-lg-0 pt-4 px-xl-0 order-2  px-xl-5 text-lg-left text-center rect-sec-img-2">
                    <h2 class="section-title text-lg-left text-center pt-lg-4 pt-3 mb-3 sub-head d-inline">About Me</h2>
                    <img loading="lazy" src="{{ asset('frontend/style/images/rect-left.png') }}" alt=""
                        class="rect-left">
                    <p class="banner-p text-center text-lg-left  my-2 px-0">I'm a passionate wedding photographer based in Mumbai, blending creativity, concept, and passion into every shot. I specialize in cinematic wedding films and candid photography, capturing the magic of cinema and the art of storytelling. For me, it's all about capturing emotions and moments, turning them into unique coffee table books that reflect the essence of your special day. Let's create something beautiful together!</p>

                    <div class="text-center pt-20 text-lg-left text-center"><a href="{{ url('/contact') }}"
                            class="watch-more">Get In Touch</a></div>

                    {{-- <div class="text-lg-left text-center pt-xl-3 pt-2">
                    <a href="{{url('/about-us')}}" class=" btn btn-full-rounded text-capitalize ">Read More </a>
                </div> --}}
                </div>
                <!-- /column -->

                <div class="col-lg-7   order-1 ">
                    <figure><img loading="lazy" src="{{ asset('frontend/style/images/about.png') }}" alt=""
                            class="w-100"></figure>
                </div>
                <!-- /column -->


            </div>

            <!-- /.row -->

        </div>
        <!--/.row -->
    </div>
    <!-- /.container -->

    <div class="wrapper pt-30 about-pt-30">
        <div class="container-fluid px-custom inner  pb-0">
            <div class="row gutter-60 gutter-md-30 pt-0 mb-0 align-items-center px-xl-1 ">

                <div
                    class="col-lg-5 pt-lg-0 pt-4 px-xl-0 order-lg-1 rect-sec-img-2 order-2 px-xl-5 text-lg-left text-center">
                    <h2 class="section-title text-lg-left text-center pt-lg-4 pt-3 mb-3 sub-head d-inline">Our Style</h2>
                    <img loading="lazy" src="{{ asset('frontend/style/images/rect-left.png') }}" alt=""
                        class="rect-left">
                    <p class="banner-p text-center text-lg-left  my-2 px-0">We capture more than just moments; we capture the true essence of your special day. Our approach is all about storytelling through each photograph, focusing on the genuine emotions and connections that make your day unique. With a blend of aesthetic and editorial portraits, we create timeless wedding photos that will be etched in your hearts forever.</p>
                    <div class="text-center pt-30 pb-40 text-lg-left text-center"><a href="{{ url('/contact') }}"
                            class="watch-more">Get In Touch</a></div>
                </div>
                <!-- /column -->
                <div class="col-lg-7   order-lg-2 order-1 ">
                    <figure><img loading="lazy" src="{{ asset('frontend/style/images/art/our-style.png') }}" alt=""
                            class="w-100"></figure>
                </div>
                <!-- /column -->

            </div>
            <!-- /.row -->
        </div>
        <!--/.row -->
    </div>





    <div id="carouselExampleIndicator" class="carousel slide d-lg-none d-block" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicator" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicator" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicator" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner px-2"  id="lightgallery-3">
            <div class="carousel-item active">
                <section class="px-2 d-lg-none-d-block">
                    <div class="container-fluid">
                        <div class="row mobile-slider">
                            <div class="col-4 item">
                                <a href="{{ asset('frontend/style/images/gallery/5.jpg') }}">
                                    <img loading="lazy"
                                    src="{{ asset('frontend/style/images/gallery/5.jpg') }}" alt="">
                                </a>
                                </div>
                            <div class="col-4 item">
                                  <a href="{{ asset('frontend/style/images/gallery/2.jpg') }}">
                                    <img loading="lazy"
                                    src="{{ asset('frontend/style/images/gallery/2.jpg') }}" alt="">
                                  </a>
                                </div>
                            <div class="col-4 item ">
                              <a href="{{ asset('frontend/style/images/gallery/3.jpg')}}">
                                <img loading="lazy" src="{{ asset('frontend/style/images/gallery/3.jpg')}}"
                                alt="">
                              </a>
                            </div>

                            <div class="col-4 item custom-inner-height">
                           <div class="img-h-100">
                           <a href="{{ asset('frontend/style/images/gallery/haldi-4.jpg') }}">
                            <img loading="lazy" src="{{ asset('frontend/style/images/gallery/haldi-4.jpg') }}"
                            alt="" class="h-300">
                           </a>
                           </div>

                            </div>
                            <div class="col-4 item text-center custom-inner-height">
                                <div class="gallery-text-sec pt-15">
                                    <img loading="lazy" src="{{ asset('frontend/style/images/mobile-rect.png') }}"
                                        alt="" class="mobile-rect">
                                    <h2 class=" text-center text-gold mb-2 d-inline">Haldi & Mehendi</h2>
                                    <p class="text-center">The vibrant hues of Haldi and delicate Mehendi designs weave tales of love and celebration, marking the beginning of a beautiful journey together.</p>
                                </div>

                            </div>
                            <div class="col-4 item custom-inner-height">
                                <div class="">
                                    <a href="{{ asset('frontend/style/images/gallery/haldi-5.jpg')}}">
                                        <img loading="lazy" src="{{ asset('frontend/style/images/gallery/haldi-5.jpg')}}"
                                    alt="" class="h-300">
                                    </a>
                                   </div>
                            </div>

                            <div class="col-4 item">
                                <a href="{{ asset('frontend/style/images/gallery/haldi-6.jpg') }}">
                                    <img loading="lazy" src="{{ asset('frontend/style/images/gallery/haldi-6.jpg') }}"
                                    alt="">
                                </a>
                            </div>
                            <div class="col-4 item">
                                <a href="{{ asset('frontend/style/images/gallery/haldi-7.jpg') }}">
                                    <img loading="lazy" src="{{ asset('frontend/style/images/gallery/haldi-7.jpg') }}"
                                    alt="">
                                </a>
                            </div>
                            <div class="col-4 item">
                                <a href="{{ asset('frontend/style/images/gallery/13.jpg') }}">
                                    <img loading="lazy" src="{{ asset('frontend/style/images/gallery/13.jpg') }}"
                                    alt="">
                                </a>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
            <div class="carousel-item">
                <section class="px-2 d-lg-none-d-block">
                    <div class="container-fluid">
                        <div class="row mobile-slider">
                            <div class="col-4 item">
                                <a href="{{ asset('frontend/style/images/gallery/1.jpg') }}">
                                    <img loading="lazy"
                                    src="{{ asset('frontend/style/images/gallery/1.jpg') }}" alt="">
                                </a>
                                </div>
                            <div class="col-4 item">
                                <a href="{{ asset('frontend/style/images/gallery/12.jpg') }}">
                                    <img loading="lazy"
                                    src="{{ asset('frontend/style/images/gallery/12.jpg') }}" alt="">
                                </a>
                                </div>
                            <div class="col-4 item ">
                              <a href="{{ asset('frontend/style/images/gallery/10.jpg') }}">
                                <img loading="lazy" src="{{ asset('frontend/style/images/gallery/10.jpg') }}"
                                alt="">
                              </a>

                            </div>

                            <div class="col-4 item custom-inner-height">
                                <div>
                                <a href="{{ asset('frontend/style/images/gallery/9.jpg') }}">
                                    <img loading="lazy" src="{{ asset('frontend/style/images/gallery/9.jpg') }}"
                                    alt="">
                                </a>
                                </div>
                                <div>
                                 <a href="{{ asset('frontend/style/images/gallery/27.jpg') }}">
                                    <img loading="lazy" src="{{ asset('frontend/style/images/gallery/27.jpg') }}"
                                 alt="">
                                 </a>
                                </div>
                                 </div>
                                 <div class="col-4 item text-center custom-inner-height">
                                     <div class="gallery-text-sec pt-15">
                                         <img loading="lazy" src="{{ asset('frontend/style/images/mobile-rect.png') }}"
                                             alt="" class="mobile-rect">
                                         <h2 class=" text-center text-gold mb-2 d-inline"> Wedding</h2>
                                         <p class="text-center">Wrapped in the elegance of tradition and the warmth of cherished moments, wedding rituals create a beautiful mosaic of love, hope, and everlasting commitment.</p>
                                     </div>

                                 </div>
                                 <div class="col-4 item custom-inner-height">
                                    <div>
                                     <a href="{{ asset('frontend/style/images/gallery/wed-6.JPG') }}">
                                        <img loading="lazy" src="{{ asset('frontend/style/images/gallery/wed-6.JPG') }}"
                                     alt="">
                                     </a>
                                    </div>
                                    <div >
                                     <a href="{{ asset('frontend/style/images/gallery/wed-7.jpg') }}">
                                        <img loading="lazy" src="{{ asset('frontend/style/images/gallery/wed-7.jpg') }}"
                                     alt="">
                                     </a>
                                    </div>
                                 </div>
                            <div class="col-4 item">
                               <a href="{{ asset('frontend/style/images/gallery/24.JPG') }}">
                                <img loading="lazy" src="{{ asset('frontend/style/images/gallery/24.JPG') }}"
                                alt="">
                               </a>
                            </div>
                            <div class="col-4 item">
                                <a href="{{ asset('frontend/style/images/gallery/19.JPG') }}">
                                    <img loading="lazy" src="{{ asset('frontend/style/images/gallery/19.JPG') }}"
                                    alt="">
                                </a>
                            </div>
                            <div class="col-4 item">
                                <a href="{{ asset('frontend/style/images/gallery/7.jpg') }}">
                                    <img loading="lazy" src="{{ asset('frontend/style/images/gallery/7.jpg') }}"
                                    alt="">
                                </a>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
            <div class="carousel-item">
                <section class="px-2 d-lg-none-d-block">
                    <div class="container-fluid">
                        <div class="row mobile-slider">
                            <div class="col-4 item ">
                               <a href="{{ asset('frontend/style/images/gallery/21.jpg')}}">
                                <img loading="lazy" src="{{ asset('frontend/style/images/gallery/21.jpg')}}"
                                alt="">
                               </a>
                            </div>
                            <div class="col-4 item">
                                <a href="{{ asset('frontend/style/images/gallery/11.jpg') }}">
                                    <img loading="lazy"
                                    src="{{ asset('frontend/style/images/gallery/11.jpg') }}" alt="">
                                </a>
                                </div>
                            <div class="col-4 item">
                                <a href="{{ asset('frontend/style/images/gallery/23.jpg') }}">
                                    <img loading="lazy"
                                    src="{{ asset('frontend/style/images/gallery/23.jpg') }}" alt="">
                                </a>
                                </div>

                                    <div class="col-4 item custom-inner-height">
                                        <div>
                                        <a href="{{ asset('frontend/style/images/gallery/20.jpg') }}">
                                            <img loading="lazy" src="{{ asset('frontend/style/images/gallery/20.jpg') }}"
                                            alt="">
                                        </a>
                                        </div>
                                        <div>
                                         <a href="{{ asset('frontend/style/images/gallery/25.jpg') }}">
                                            <img loading="lazy" src="{{ asset('frontend/style/images/gallery/25.jpg') }}"
                                         alt="">
                                         </a>
                                        </div>
                                         </div>
                                         <div class="col-4 item text-center custom-inner-height">
                                             <div class="gallery-text-sec pt-15">
                                                 <img loading="lazy" src="{{ asset('frontend/style/images/mobile-rect.png') }}"
                                                     alt="" class="mobile-rect">
                                                 <h2 class=" text-center text-gold mb-2 d-inline">Couple Pictures</h2>
                                                 <p class="text-center">Through the lens, their connection reveals a <span class="logo-font">soul saga</span>, a journey of two spirits eternally bound by love and destiny.</p>
                                             </div>

                                         </div>
                                         <div class="col-4 item custom-inner-height">
                                            <div>
                                             <a href="{{ asset('frontend/style/images/gallery/19.JPG') }}">
                                                <img loading="lazy" src="{{ asset('frontend/style/images/gallery/19.JPG') }}"
                                             alt="">
                                             </a>
                                            </div>
                                            <div >
                                             <a href="{{ asset('frontend/style/images/gallery/14.jpg') }}">
                                                <img loading="lazy" src="{{ asset('frontend/style/images/gallery/14.jpg') }}"
                                             alt="">
                                             </a>
                                            </div>
                                         </div>

                            <div class="col-4 item">
                                <a href="{{ asset('frontend/style/images/gallery/28.JPG') }}">
                                    <img loading="lazy" src="{{ asset('frontend/style/images/gallery/28.JPG') }}"
                                    alt="">
                                </a>
                            </div>
                            <div class="col-4 item">
                                <a href="{{ asset('frontend/style/images/gallery/6.jpg') }}">
                                    <img loading="lazy" src="{{ asset('frontend/style/images/gallery/6.jpg') }}"
                                    alt="">
                                </a>
                            </div>
                            <div class="col-4 item">

                                <a href="{{ asset('frontend/style/images/gallery/couple-12.jpg') }}">
                                    <img loading="lazy" src="{{ asset('frontend/style/images/gallery/couple-12.jpg') }}"
                                    alt="">
                                </a>

                            </div>
                        </div>
                    </div>

                </section>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicator" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicator" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>



    <section class="pt-30 about-pt-30 d-lg-block d-none">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators desk">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" id="lightgallery-2">
                <div class="carousel-item active" data-interval="5000">
                    <section>
                        <div class="container-fluid px-custom-gallery inner  pb-0 pt-50">
                            <div class="row gallery-row">
                             <div class="grid-wrapper">
                                <div> <a href="{{ asset('frontend/style/images/gallery/13.jpg') }}"> <img src="{{ asset('frontend/style/images/gallery/13.jpg') }}" alt="" class="w-100 fisrt-b-img" loading="lazy"> </a> </div>
                                <div> <a href="{{ asset('frontend/style/images/gallery/2.jpg') }}"> <img src="{{ asset('frontend/style/images/gallery/2.jpg') }}" alt="" class="w-100 fisrt-b-img" loading="lazy"> </a> </div>
                                <div> <a href="{{ asset('frontend/style/images/gallery/3.jpg') }}"> <img src="{{ asset('frontend/style/images/gallery/3.jpg') }}" alt="" class="w-100 fisrt-b-img" loading="lazy"> </a> </div>
                                <div class="item-4"><a href="{{ asset('frontend/style/images/gallery/haldi-4.jpg') }}"> <img src="{{ asset('frontend/style/images/gallery/haldi-4.jpg') }}" alt="" class="w-100 h-100" loading="lazy"></a> </div>
                                <div class="item-5"> <a href="{{ asset('frontend/style/images/gallery/haldi-5.jpg') }}"><img src="{{ asset('frontend/style/images/gallery/haldi-5.jpg') }}" alt="" class="w-100 h-100" loading="lazy"> </a></div>

                                <div class="item-6 text-center py-5">  <h2
                                    class="section-title  text-center pt-lg-0 pt-3 mb-3 sub-head d-inline mx-auto">
                                    Haldi & Mehendi</h2> <img loading="lazy"
                                    src="{{ asset('frontend/style/images/rect-left.png') }}" alt=""
                                    class="rect-left">
                                <p class="banner-p text-center  my-2 px-0">The vibrant hues of Haldi and delicate Mehendi designs weave tales of love and celebration, marking the beginning of a beautiful journey together.</p>
                                   </div>
                                   <div> <a href="{{ asset('frontend/style/images/gallery/haldi-6.jpg') }}"> <img src="{{ asset('frontend/style/images/gallery/haldi-6.jpg') }}" alt="" class="w-100 fisrt-b-img" loading="lazy"> </a> </div>
                                   <div> <a href="{{ asset('frontend/style/images/gallery/haldi-7.jpg') }}"> <img src="{{ asset('frontend/style/images/gallery/haldi-7.jpg') }}" alt="" class="w-100 fisrt-b-img" loading="lazy"> </a> </div>
                                   <div> <a href="{{ asset('frontend/style/images/gallery/5.jpg') }}"> <img src="{{ asset('frontend/style/images/gallery/5.jpg') }}" alt="" class="w-100 fisrt-b-img" loading="lazy"> </a> </div>


                             </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="carousel-item" data-interval="5000">
                    <section>
                        <div class="container-fluid px-custom-gallery inner  pb-0 pt-40">
                            <div class="row gallery-row">
                                <div class="col-12">
                                    <div class="row">

                                        <div class="col-lg-3 col-md-6 pr-lg-0 div-overflow-hidden">
                                           <a href="{{ asset('frontend/style/images/gallery/1.jpg') }}">
                                            <img loading="lazy" src="{{ asset('frontend/style/images/gallery/1.jpg') }}"
                                            alt="" class="w-100 h-100">
                                           </a>
                                        </div>
                                        <div class="col-lg-3 col-md-6 pr-lg-0 div-overflow-hidden">
                                           <a href="{{ asset('frontend/style/images/gallery/12.jpg') }}">
                                            <img loading="lazy" src="{{ asset('frontend/style/images/gallery/12.jpg') }}"
                                            alt="" class="w-100 h-100">
                                           </a>
                                        </div>
                                        <div class="col-lg-3 col-md-6 div-overflow-hidden">
                                           <a href="{{ asset('frontend/style/images/gallery/10.jpg') }}">
                                            <img loading="lazy" src="{{ asset('frontend/style/images/gallery/10.jpg') }}"
                                            alt="" class="w-100 h-100">
                                           </a>
                                        </div>

                                        <div class="col-lg-3 col-md-3 mt-gallery pl-lg-0 div-overflow-hidden">
                                           <a href="{{ asset('frontend/style/images/gallery/9.jpg') }}">
                                            <img loading="lazy" src="{{ asset('frontend/style/images/gallery/9.jpg') }}"
                                            alt="" class="w-100 h-100">
                                           </a>
                                        </div>

                                    </div>



                                    <div class="row mt-15 align-items-center">
                                        <div class="col-lg-3 col-md-6 div-overflow-hidden">
                                            <a href="{{ asset('frontend/style/images/gallery/27.jpg') }}">
                                                <img loading="lazy" src="{{ asset('frontend/style/images/gallery/27.jpg') }}"
                                                alt="" class="w-100 h-100">
                                            </a>
                                        </div>
                                        <div class="col-lg-6 col-md-6 text-center  align-self-center pt-0 rect-sec-img-2">
                                            <h2
                                                class="section-title  text-center pt-lg-0 pt-3 mb-3 sub-head d-inline mx-auto">
                                                Wedding</h2> <img loading="lazy"
                                                src="{{ asset('frontend/style/images/rect-left.png') }}" alt=""
                                                class="rect-left">
                                            <p class="banner-p text-center  my-2 px-0">Wrapped in the elegance of tradition and the warmth of cherished moments, wedding rituals create a beautiful mosaic of love, hope, and everlasting commitment.</p>

                                        </div>
                                        <div class="col-lg-3 col-md-6 div-overflow-hidden">
                                            <a href="{{ asset('frontend/style/images/gallery/wed-6.JPG') }}">
                                                <img loading="lazy" src="{{ asset('frontend/style/images/gallery/wed-6.JPG') }}"
                                                alt="" class="w-100 h-100">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row mt-15">

                                        <div class="col-lg-3 col-md-6 pb-md-0 pb-3 div-overflow-hidden">
                                            <a href="{{ asset('frontend/style/images/gallery/wed-7.jpg') }}">
                                                <img loading="lazy" src="{{ asset('frontend/style/images/gallery/wed-7.jpg') }}"
                                                alt="" class="w-100 h-100">
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-6 pl-lg-0 div-overflow-hidden">
                                            <a href="{{ asset('frontend/style/images/gallery/24.JPG') }}">
                                                <img loading="lazy" src="{{ asset('frontend/style/images/gallery/24.JPG') }}"
                                                alt="" class="w-100 h-100">
                                            </a>

                                        </div>

                                        <div class="col-lg-3 sm col-md-3  px-lg-0 div-overflow-hidden">
                                            <a href="{{ asset('frontend/style/images/gallery/19.JPG') }}">
                                                <img loading="lazy" src="{{ asset('frontend/style/images/gallery/19.JPG') }}"
                                                alt="" class="w-100 h-100">
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-3 div-overflow-hidden">
                                            <a href="{{ asset('frontend/style/images/gallery/7.jpg') }}">
                                                <img loading="lazy" src="{{ asset('frontend/style/images/gallery/7.jpg') }}"
                                                alt="" class="w-100 h-100">
                                            </a>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </section>
                </div>
                <div class="carousel-item" data-interval="5000">
                    <section>
                        <div class="container-fluid px-custom-gallery inner  pb-0 pt-40">
                            <div class="row gallery-row">
                                <div class="col-12">
                                    <div class="row">

                                        <div class="col-lg-3 col-md-6 pb-md-0 pb-3 div-overflow-hidden">
                                            <a href="{{ asset('frontend/style/images/gallery/21.jpg') }}">
                                                <img loading="lazy" src="{{ asset('frontend/style/images/gallery/21.jpg') }}"
                                                alt="" class="w-100 h-100">
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-6 px-lg-0  div-overflow-hidden">
                                            <a href="{{ asset('frontend/style/images/gallery/11.jpg') }}">
                                                <img loading="lazy" src="{{ asset('frontend/style/images/gallery/11.jpg') }}"
                                                alt="" class="w-100 h-100">
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-6 div-overflow-hidden">

                                               <a href="{{ asset('frontend/style/images/gallery/23.jpg') }}">
                                                <img loading="lazy" src="{{ asset('frontend/style/images/gallery/23.jpg') }}"
                                                alt="" class="w-100 h-100">
                                               </a>

                                        </div>

                                        <div class="col-lg-3 col-md-3 mt-gallery pl-lg-0 div-overflow-hidden">
                                            <a href="{{ asset('frontend/style/images/gallery/20.jpg') }}">
                                                <img loading="lazy" src="{{ asset('frontend/style/images/gallery/20.jpg') }}"
                                                alt="" class="w-100 h-100">
                                            </a>
                                        </div>

                                    </div>



                                    <div class="row mt-15 align-items-center">
                                        <div class="col-lg-3 col-md-6 div-overflow-hidden">
                                           <a href="{{ asset('frontend/style/images/gallery/25.jpg') }}">
                                            <img loading="lazy" src="{{ asset('frontend/style/images/gallery/25.jpg') }}"
                                            alt="" class="w-100 h-100">
                                           </a>
                                        </div>
                                        <div class="col-lg-6 col-md-6 text-center  align-self-center pt-0 rect-sec-img-2">
                                            <h2
                                                class="section-title  text-center pt-lg-0 pt-3 mb-3 sub-head d-inline mx-auto">
                                                Couple Pictures</h2> <img loading="lazy"
                                                src="{{ asset('frontend/style/images/rect-left.png') }}" alt=""
                                                class="rect-left">
                                            <p class="banner-p text-center  my-2 px-0">Through the lens, their connection reveals a <span class="logo-font fs-sm">soul saga</span>, a journey of two spirits eternally bound by love and destiny.</p>

                                        </div>
                                        <div class="col-lg-3 col-md-6 div-overflow-hidden">
                                           <a href="{{ asset('frontend/style/images/gallery/19.JPG') }}">
                                            <img loading="lazy" src="{{ asset('frontend/style/images/gallery/19.JPG') }}"
                                            alt="" class="w-100 h-100">
                                           </a>
                                        </div>
                                    </div>

                                    <div class="row mt-15">

                                        <div class="col-lg-3 col-md-6 pb-md-0 pb-3 div-overflow-hidden">
                                           <a href="{{ asset('frontend/style/images/gallery/14.jpg') }}">
                                            <img loading="lazy" src="{{ asset('frontend/style/images/gallery/14.jpg') }}"
                                            alt="" class="w-100 h-100">
                                           </a>
                                        </div>
                                        <div class="col-lg-3 col-md-6 pl-lg-0 div-overflow-hidden">
                                            <a href="{{ asset('frontend/style/images/gallery/28.JPG') }}">
                                                <img loading="lazy" src="{{ asset('frontend/style/images/gallery/28.JPG') }}"
                                                alt="" class="w-100 h-100">
                                            </a>

                                        </div>

                                        <div class="col-lg-3 sm col-md-3 px-lg-0 div-overflow-hidden">
                                            <a href="{{ asset('frontend/style/images/gallery/6.jpg') }}">
                                                <img loading="lazy" src="{{ asset('frontend/style/images/gallery/6.jpg') }}"
                                                alt="" class="w-100 h-100">
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-3 div-overflow-hidden">
                                            <a href="{{ asset('frontend/style/images/gallery/couple-12.jpg') }}">
                                                <img loading="lazy" src="{{ asset('frontend/style/images/gallery/couple-12.jpg') }}"
                                                alt="" class="w-100 h-100">
                                            </a>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <a class="carousel-control-prev d-none" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next d-none" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>


    <section class="pt-30 about-pt-30 pt-after-lg">
        <div class="container-fluid px-custom-get-in-touch inner  pb-30 pt-50">
            <div class="row align-items-self flex-lg-row flex-column-reverse">
                <div class="col-lg-6 touch-bg text-center px-0 rect-sec-img">
                    <div class="get-in-touch-inner">
                        <img loading="lazy" src="{{ asset('frontend/style/images/rectangle.png') }}" alt=""
                            class="pb-4">
                        <h1 class="text-capitalize d-inline mt-3 heading"> GET IN TOUCH!</h1>
                        <p class="banner-p text-center">Are You Ready To Make Magic?</p>
                        <a href="{{ url('/contact') }}" class="contact-btn mt-2"> Contact Us</a>
                    </div>

                </div>
                <div class="col-lg-6 px-0">
                    <img loading="lazy" src="{{ asset('frontend/style/images/get-touch.png') }}" alt=""
                        class="w-100">
                </div>
            </div>
        </div>
    </section>

    {{-- <div >
        <a href="{{ asset('frontend/style/images/art/our-style.png') }}" data-lg-size="1600-2400">
            <img alt="img1" src="{{ asset('frontend/style/images/art/our-style.png') }}" />
        </a>
        <a href="{{ asset('frontend/style/images/art/our-style.png') }}" data-lg-size="1024-800">
            <img alt="img2" src="{{ asset('frontend/style/images/art/our-style.png') }}" />
        </a>
        ...
    </div> --}}

    <section>
        <h2 class="latest-shot text-center pb-md-0 pb-3 pt-10 mb-0">My Latest Shots</h2>
        <div class="container-fluid px-custom-latest-shots inner  pb-50 pt-30 about-pt-30">

            <section class=""  id="lightgallery">
                <div class="row" >
                    <div class="col-lg-6 mb-10-767" >

                        <div class="row" >
                            <div class="col-6 mb-0-767 px-custom-767 ">

                                <div class="div mt-shots mt-0 grid-container-2 " >
                                    <a href="{{ asset('frontend/style/images/latest-shots/1.jpg') }}" data-lg-size="1600-2400">
                                    <img loading="lazy" src="{{ asset('frontend/style/images/latest-shots/1.jpg') }}"
                                        alt="" class="w-100 ">
                                    </a>
                                </div>

                                <div class="div mt-shots grid-container-2">
                                    <a href="{{ asset('frontend/style/images/latest-shots/2.jpg') }}" data-lg-size="1600-2400" >
                                    <img loading="lazy" src="{{ asset('frontend/style/images/latest-shots/2.jpg') }}"
                                        alt="" class="w-100 "></a>
                                </div></a>
                            </div>
                            <div class="col-6 px-lg-0 px-custom-767 single-img mb-0-767 grid-container-2" >
                               <a href="{{asset('frontend/style/images/latest-shots/3.jpg') }}" ata-lg-size="1600-2400"> <img loading="lazy" src="{{ asset('frontend/style/images/latest-shots/3.jpg') }}"
                                alt="" class="w-100 "></a>
                            </div>


                        </div>

                    </div>

                    <div class="col-lg-6">
                        <div class="row mt-bet-lg-md">
                            <div class="col-6 order-lg-1 order-2 px-custom-767 mb-10-767">
                                <div class="div mt-shots mt-0 grid-container-2">
                                 <a href="{{ asset('frontend/style/images/latest-shots/4.jpg') }}" ata-lg-size="1600-2400">   <img loading="lazy" src="{{ asset('frontend/style/images/latest-shots/4.jpg') }}"
                                    alt="" class="w-100 "></a>
                                </div>

                                <div class="div mt-shots grid-container-2">
                                    <a href="{{ asset('frontend/style/images/latest-shots/5.JPG') }}" ata-lg-size="1600-2400">
                                        <img loading="lazy" src="{{ asset('frontend/style/images/latest-shots/5.JPG') }}"
                                        alt="" class="w-100 ">
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 px-lg-0 single-img order-lg-2 order-1 px-custom-767 grid-container-2">
                                <a href="{{ asset('frontend/style/images/latest-shots/6.jpg') }}" ata-lg-size="1600-2400">
                                    <img loading="lazy" src="{{ asset('frontend/style/images/latest-shots/6.jpg') }}"
                                    alt="" class="w-100">
                                </a>
                            </div>


                        </div>
                    </div>
                </div>


                <div class="toggle_circle">
                    <div class="row mt-15 ">
                        <div class="col-lg-6  mb-0-767">

                            <div class="row">
                                <div class="col-6 order-lg-1 order-2 px-custom-767 mb-0-767">
                                    <div class="div mt-shots mt-0 grid-container-2">
                                  <a href="{{ asset('frontend/style/images/latest-shots/7.JPG') }}" ata-lg-size="1600-2400">
                                    <img loading="lazy" src="{{ asset('frontend/style/images/latest-shots/7.JPG') }}"
                                    alt="" class="w-100">
                                  </a>
                                    </div>

                                    <div class="div mt-shots grid-container-2">
                                       <a href="{{ asset('frontend/style/images/latest-shots/8.jpg') }}" ata-lg-size="1600-2400">
                                        <img loading="lazy" src="{{ asset('frontend/style/images/latest-shots/8.jpg') }}"
                                        alt="" class="w-100 ">
                                       </a>
                                    </div>
                                </div>
                                <div class="col-6 px-lg-0 single-img order-lg-2 order-1 px-custom-767 mb-0-767 grid-container-2">
                               <a href="{{ asset('frontend/style/images/latest-shots/9.JPG') }}" ata-lg-size="1600-2400">
                                <img loading="lazy" src="{{ asset('frontend/style/images/latest-shots/9.JPG') }}"
                                alt="" class="w-100 ">
                               </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-10-767 mt-bet-lg-md">
                            <div class="row">
                                <div class="col-6 px-custom-767 mb-10-767">
                                    <div class="div mt-shots mt-0 grid-container-2">
                                       <a href="{{ asset('frontend/style/images/latest-shots/10.jpg') }}" ata-lg-size="1600-2400">
                                        <img loading="lazy"
                                        src="{{ asset('frontend/style/images/latest-shots/10.jpg') }}" alt=""
                                        class="w-100 ">
                                       </a>
                                    </div>

                                    <div class="div mt-shots grid-container-2">
                                        <a href="{{ asset('frontend/style/images/latest-shots/11.jpg') }}" ata-lg-size="1600-2400">
                                            <img loading="lazy"
                                            src="{{ asset('frontend/style/images/latest-shots/11.jpg') }}" alt=""
                                            class="w-100 ">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 px-lg-0 single-img px-custom-767 mb-10-767 grid-container-2">
                                   <a href="{{ asset('frontend/style/images/latest-shots/12.png') }}" ata-lg-size="1600-2400">
                                    <img loading="lazy" src="{{ asset('frontend/style/images/latest-shots/12.png') }}"
                                    alt="" class="w-100">
                                   </a>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="grid-container">
                <div class="items"><img loading="lazy"  src="{{asset('frontend/style/images/latest-shots/1.jpg')}}" alt="" class="w-100 h-100" ></div>
                <div class="items"><img loading="lazy"  src="{{asset('frontend/style/images/latest-shots/2.jpg')}}" alt="" class="w-100 h-100"></div>
                <div class="items">
                    <img loading="lazy"  src="{{asset('frontend/style/images/latest-shots/3.jpg')}}" alt="" class="w-100 h-100">
                </div>
                <div class="items"> <im

                    g loading="lazy"  src="{{asset('frontend/style/images/latest-shots/4.jpg')}}" alt="" class="w-100 h-100"></div>
              </div>

              <div class="grid-container-2 grid-pt">
                <div class="items"><img loading="lazy"  src="{{asset('frontend/style/images/latest-shots/5.JPG')}}" alt="" class="w-100 h-100" ></div>
                <div class="items"><img loading="lazy"  src="{{asset('frontend/style/images/latest-shots/6.png')}}" alt="" class="w-100 h-100"></div>
                <div class="items">
                    <img loading="lazy"  src="{{asset('frontend/style/images/latest-shots/7.png')}}" alt="" class="w-100 h-100">
                </div>
                <div class="items"> <img loading="lazy"  src="{{asset('frontend/style/images/latest-shots/8.jpg')}}" alt="" class="w-100 h-100"></div>
              </div>
              <div class="toggle_circle mt-15">

              <div class="grid-container">
                <div class="items"><img loading="lazy"  src="{{asset('frontend/style/images/latest-shots/9.png')}}" alt="" class="w-100 h-100" ></div>
                <div class="items"><img loading="lazy"  src="{{asset('frontend/style/images/latest-shots/10.png')}}" alt="" class="w-100 h-100"></div>
                <div class="items">
                    <img loading="lazy"  src="{{asset('frontend/style/images/latest-shots/11.jpg')}}" alt="" class="w-100 h-100">
                </div>
                <div class="items"> <img loading="lazy"  src="{{asset('frontend/style/images/latest-shots/12.jpg')}}" alt="" class="w-100 h-100"></div>
              </div>

              <div class="grid-container-2 grid-pt">
                <div class="items"><img loading="lazy"  src="{{asset('frontend/style/images/latest-shots/13.jpg')}}" alt="" class="w-100 h-100" ></div>
                <div class="items"><img loading="lazy"  src="{{asset('frontend/style/images/latest-shots/14.jpg')}}" alt="" class="w-100 h-100"></div>
                <div class="items">
                    <img loading="lazy"  src="{{asset('frontend/style/images/latest-shots/15.png')}}" alt="" class="w-100 h-100">
                </div>
                <div class="items"> <img loading="lazy"  src="{{asset('frontend/style/images/latest-shots/16.jpg')}}" alt="" class="w-100 h-100"></div>
              </div>

              </div> --}}
            </section>

            {{-- <section class="d-lg-none d-block ">
                <div class="row mobile-shots">
                    <div class="col-6"><img loading="lazy"
                            src="{{ asset('frontend/style/images/mobile-shots/1.png') }}" alt="" class="w-100">
                    </div>
                    <div class="col-6"> <img loading="lazy"
                            src="{{ asset('frontend/style/images/mobile-shots/2.png') }}" alt="" class="w-100">
                    </div>
                    <div class="col-6"><img loading="lazy"
                            src="{{ asset('frontend/style/images/mobile-shots/3.png') }}" alt="" class="w-100">
                    </div>
                    <div class="col-6"><img loading="lazy"
                            src="{{ asset('frontend/style/images/mobile-shots/4.png') }}" alt="" class="w-100">
                    </div>
                    <div class="col-6"><img loading="lazy"
                            src="{{ asset('frontend/style/images/mobile-shots/5.png') }}" alt="" class="w-100">
                    </div>
                    <div class="col-6"><img loading="lazy"
                            src="{{ asset('frontend/style/images/mobile-shots/6.png') }}" alt="" class="w-100">
                    </div>
                    <div class="col-6"><img loading="lazy"
                            src="{{ asset('frontend/style/images/mobile-shots/7.png') }}" alt="" class="w-100">
                    </div>
                    <div class="col-6"><img loading="lazy"
                            src="{{ asset('frontend/style/images/mobile-shots/8.png') }}" alt="" class="w-100">
                    </div>
                </div>

                <div class="row mobile-shots toggle_circle custom-flex">
                    <div class="col-6"><img loading="lazy"
                            src="{{ asset('frontend/style/images/mobile-shots/9.png') }}" alt="" class="w-100">
                    </div>
                    <div class="col-6"> <img loading="lazy"
                            src="{{ asset('frontend/style/images/mobile-shots/10.png') }}" alt=""
                            class="w-100"></div>
                    <div class="col-6"><img loading="lazy"
                            src="{{ asset('frontend/style/images/mobile-shots/11.png') }}" alt=""
                            class="w-100"></div>
                    <div class="col-6"><img loading="lazy"
                            src="{{ asset('frontend/style/images/mobile-shots/12.png') }}" alt=""
                            class="w-100"></div>
                    <div class="col-6"><img loading="lazy"
                            src="{{ asset('frontend/style/images/mobile-shots/13.png') }}" alt=""
                            class="w-100"></div>
                    <div class="col-6"><img loading="lazy"
                            src="{{ asset('frontend/style/images/mobile-shots/14.png') }}" alt=""
                            class="w-100"></div>
                    <div class="col-6"><img loading="lazy"
                            src="{{ asset('frontend/style/images/mobile-shots/15.png') }}" alt=""
                            class="w-100"></div>
                    <div class="col-6"><img loading="lazy"
                            src="{{ asset('frontend/style/images/mobile-shots/16.png') }}" alt=""
                            class="w-100"></div>
                </div>
            </section> --}}
        </div>
        <div class="text-center pt-0 pb-50"><a href="javascript:void(0)" class="watch-more" id="toggle_time">Watch
                More</a></div>
    </section>

@endsection


@section('js')
    <script>
        $(document).ready(function() {
            $(".toggle_circle").toggleClass('d-none');

            $("#toggle_time").click(function() {
                $(".toggle_circle").toggleClass('d-block');
                $(".custom-flex").toggleClass('d-flex');


            });
        });

        $(function() {
            $("#toggle_time").click(function() {
                $(this).text(function(i, text) {
                    return text === "Watch Less" ? "Watch More" : "Watch Less";
                })
            });
        })
    </script>
@endsection
