@extends('frontend.layouts.app')
@section('title','Work - ' )
@section('content')
<div class="wrapper image-wrapper bg-image inverse-text">
    <div class="container inner pt-200 pb-20  text-center work-sec">
      <h1 class="heading pt-4 mt-3 mb-lg-3">Our  Work</h1>

      {{-- <p class="lead larger text-center mb-0">Minimalism meets photography</p> --}}
    </div>
    <!-- /.container -->
  </div>



<section class="pb-50 pb-after-lg-30">

    <div class="row about-text-sec d-block pb-lg-0 pb-4">
            <div class="col-lg-10 justify-content-center text-center mx-auto">
        <p class="mb-0 pt-3 work text-center">At <span class="logo-font">The Soul Saaga</span>, we specialize in creating exquisite wedding films that capture the essence of each couple's unique love story. With a keen eye for detail and a commitment to excellence, our team of experienced cinematographers and editors transform weddings into cinematic masterpieces. We believe in the power of storytelling through visuals, meticulously crafting each frame to evoke emotions and preserve cherished memories. Whether it's an intimate elopement or a grand celebration,
            we approach every project with creativity and dedication, ensuring that our clients receive a film that not only documents their special day but also reflects the beauty and significance of their commitment. Discover how we can turn your wedding into a timeless cinematic experience.</p>

       </div>
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



                </div></div></div></section>
        <div class="row pt-40">
            <div class="col-lg-10 mx-auto about-text-sec ">
                {{-- <p class="pt-30 pb-0 mb-0 pt-lg-work work">we approach every project with creativity and dedication, ensuring that our clients receive a film that not only documents their special day but also reflects the beauty and significance of their commitment. Discover how we can turn your wedding into a timeless cinematic experience.</p> --}}

                <div class="text-center p-4 pb-30">
                <a href="{{url('/')}}">    <h1 class="text-capitalize d-inline mt-3 heading banner another-logo text-center mx-auto"> The Soul Saaga </h1></a>
                </div></div></div></section>




@endsection

