@extends('frontend.layouts.app')
@section('title','About - ' )
@section('content')
<div class="wrapper image-wrapper bg-image inverse-text">
    <div class="container inner pt-200 pb-20  text-center ">
      <h1 class="heading  pt-4 mt-3 mb-md-3 ">About Us</h1>

    </div>
    <!-- /.container -->
  </div>
  <!-- /.wrapper -->
<secttion class="pb-4">
<div class="container">
    <div class="row about-text-sec d-block">

      <p class="mb-0 pt-3 about-page-p text-center">Imagine your wedding day - the laughter, the tears, the stolen glances. Now, imagine capturing those fleeting moments in a way that feels like a scene from your favorite movie. That's what we do best! Our wedding photography isn't just about pretty pictures; it's about weaving a narrative that you'll cherish forever.</p>
     <div class="about-page-img text-center justify-content-center pt-4">
        <img loading="lazy"  src="{{asset('frontend/images/about-page.png')}}" alt="" class="w-100">


     </div>
     <h5 class="tagline pt-30">Capturing Moments, Creating Memories." - The Artist Behind The Lens.</h5>
     <p class="pt-20 pt-mobile-10 about-page-p text-center">We create cinematic wedding films that bring your love story to life, capturing every smile, tear, and heartfelt moment in a timeless movie-like experience. Our candid photography style focuses on capturing real, unposed moments, believing that the best photos come from natural expressions and genuine emotions, preserving the true essence of your special day. We don't just take photos; we tell stories. Each photograph is crafted to reflect the emotions and connections that make your day unique, resulting in a visual masterpiece that will last a lifetime.</p>

<div class="text-center p-4 pb-50 mb-3">
<a href="{{url('/')}}">    <h1 class="text-capitalize d-inline mt-3 heading banner another-logo text-center mx-auto "> The Soul Saaga </h1></a>
</div>
    </div>
</div>
</secttion>

@endsection
