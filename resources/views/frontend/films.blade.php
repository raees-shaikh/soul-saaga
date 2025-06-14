@extends('frontend.layouts.app')
@section('title','Films - ' )
<style>

/* <!-- second slider -->  */
.carousel-film {
  padding: .3em .3em 0;
  text-align: center;
}
.carousel-film div {
  position: relative;
  margin-bottom: .3em;
  padding-top: 56.25%;
}
.carousel-film iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
/* border-radius: 20px */
}
.carousel-film span {
  display: inline-block;
  word-spacing: 1em;  /* расстояние между картинками */

/* прокрутка миниатюр при необходимости */
  overflow: auto;
  white-space: nowrap;
  word-wrap: normal;
  margin-top: 5px

}

.carousel-film a {
  position: relative;
  display: inline-block;
  max-width: 120px;  /* максимальная ширина миниатюр */
  width: 30%;  /* ширина миниатюр */

  opacity: .7;
  text-decoration: none;
  border-radius: 12px;
}

.carousel-film a:hover {
  opacity: 1;
}
.carousel-film a:not(:active):focus {
  pointer-events: none;
}
.carousel-film a::before {
  content: "";
  position: absolute;
  top: 0em;
  right: 0em;
  bottom: 0em;
  left: 0em;
}
.carousel-film img {
  max-width: 100%;
  height: 100px;
  /* border-radius: 12px; */
  vertical-align: middle;  /* убрать нижний отступ до рамки под картинкой */
}
.video-slider::-webkit-scrollbar{
    display: none;
}
.video-slider a {

  position: relative;
  cursor: pointer;


  &:before {
    position:absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    -webkit-transform: translate(-50%, -50%);
    content: "\f01d";
    font-family: FontAwesome;
    font-size: 30px;
    color: #fff;
    opacity: .8;
    text-shadow: 0px 0px 30px rgba(0, 0, 0, 0.5);
  }
  &:hover:before {
    color: #eee;
  }
}

.carousel-control-next {
position: relative;
right: -130px !important;

}

 .carousel-control-prev{

position: relative;
left: -130px !important;

}

.carousel-control-next-icon {
background: #FFF5ED!important;
}

.carousel-control-prev-icon {
background: #FFF5ED!important;
}
/* <!-- third slider -->   */


.carousel-control-prev-icon,
.carousel-control-next-icon {
  height: 50px !important;
  width: 50px !important;
  bottom:13px !important;
  background-size: 100%, 100%;
  border-radius: 50%;
position: relative;
  background-image: none;
}

.carousel-control-next-icon:after
{
position: relative;
top:8px;
  content: '\2192';
  font-size:25px !important;
  color: #000000;
  font-weight:bolder;
}

.carousel-control-prev-icon:after {
    position: relative;
top:8px;
  content: '\2190';
font-size:25px !important;
  color: #000000;
  font-weight:bolder;
}
</style>
@section('content')
<div class="wrapper image-wrapper bg-image inverse-text ">
    <div class="container inner pt-200 pb-0  text-center">
      <h1 class="heading  pt-4 mt-3 mb-md-3 ">Films</h1>

    </div>
    <!-- /.container -->
  </div>

<!-- second slider -->

<div class="row about-text-sec d-block pt-30">
 <div class="col-lg-10 text-center mx-auto">
       <p class="mb-0 pt-3 text-center film ">Step into a world where each frame tells a tale of love eternalized in cinematic splendor. At <span class="logo-font">The Soul Saaga</span>, we specialize in crafting wedding films that transcend mere documentation, capturing the essence of your unique love story with ethereal elegance. Through meticulous attention to detail and a passion for storytelling, we weave together mesmerizing moments that reflect the depth of your emotions and the beauty of your celebration. From the delicate exchange of vows to the jubilant dances under starlit skies, each scene is meticulously curated to create a timeless masterpiece, ensuring that your love story is preserved in a way that is as breathtakingly beautiful as your wedding day.</p>

 </div>

</div>

<div class="row text-center justify-content-center">
    <div class="col-lg-8 pb-0 pt-30 text-center justify-content-center px-lg-0 px-4 film-sm-pt-0">
        <div class="carousel-film pb-20">
          <div ><iframe src="https://drive.google.com/file/d/1AzKixpynnE8x6nxHbgiUqKTJQCfzgtoq/preview" width="640" height="480" allow="autoplay" name="slider1" allowfullscreen="allowfullscreen"></iframe>
        </div>
        <h3 class="add-name mt-20 mb-0 text-gold">Mansi & Meeth</h3>
          {{-- <span class="video-slider justify-content-center  justify-content-md-around d-md-flex mx-auto">
            <a href="https://drive.google.com/file/d/1upUpXwslxK319Xln3qk_pGESzEczW4jk/preview" target="slider1" class="get-name"><img loading="lazy"  src="{{asset('frontend/style/images/films/1.png')}}" class="w-100">
            <br><span class="title-video">Aniket & Tejaswini</span></a>
            <a href="https://drive.google.com/file/d/1IaymMwYHybjjCyNBRiygJPtsySEG5VsX/preview" target="slider1" class="get-name"><img loading="lazy"  src="{{asset('frontend/style/images/films/2.png')}}" class="w-100">
                <br><span class="title-video">Nikhil & Ruchi</span></a>
            <a href="https://drive.google.com/file/d/1JtIakz7y8ZjgDHpUp0xs2q5I81vclorX/preview" target="slider1" class="get-name"><img loading="lazy"  src="{{asset('frontend/style/images/films/3.png')}}" class="w-100">
                <br><span class="title-video">Pratik & Hiral</span></a>
            <a href="https://drive.google.com/file/d/1KLmwyX-TQNjRNLVSDrgCxBtf-ceuy_4j/preview" target="slider1" class="get-name"><img loading="lazy"  src="{{asset('frontend/style/images/films/4.png')}}" class="w-100">
                <br><span class="title-video">Priyanka & Nalin</span></a>
            <a href="https://drive.google.com/file/d/1lRBYTafvwWr1243oWd6b0cC-hvOugooX/preview" target="slider1" class="get-name"><img loading="lazy"  src="{{asset('frontend/style/images/films/5.png')}}" class="w-100">
                <br><span class="title-video">Shivani & Manan</span></a>

          </span> --}}

        </div>
        </div>
</div>

<section class="pb-50 ">
<div class="row justify-content-center pb-20">
    <div class="col-lg-10">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner px-lg-0 px-2">
      <div class="carousel-item active" >
        <span class="video-slider justify-content-center d-flex ">
            <a href="https://drive.google.com/file/d/1AzKixpynnE8x6nxHbgiUqKTJQCfzgtoq/preview" target="slider1" class="get-name"><img loading="lazy"  src="{{asset('frontend/style/images/films/mansi-meeth.JPG')}}" class="w-100 h-100">
                <br><span class="title-video">Mansi & Meeth</span></a>

                <a href="https://drive.google.com/file/d/1lRBYTafvwWr1243oWd6b0cC-hvOugooX/preview" target="slider1" class="get-name"><img loading="lazy"  src="{{asset('frontend/style/images/films/manan.jpg')}}" class="w-100 h-100">
                    <br><span class="title-video">Shivani & Manan</span></a>

                    <a href="https://drive.google.com/file/d/1IaymMwYHybjjCyNBRiygJPtsySEG5VsX/preview" target="slider1" class="get-name"><img loading="lazy"  src="{{asset('frontend/style/images/films/17.png')}}" class="w-100 h-100">
                        <br><span class="title-video">Nikhil & Ruchi</span></a>


                        <a href="https://drive.google.com/file/d/1KLmwyX-TQNjRNLVSDrgCxBtf-ceuy_4j/preview" target="slider1" class="get-name d-md-inline d-none"><img loading="lazy"  src="{{asset('frontend/style/images/films/4.png')}}" class="w-100 h-100">
                            <br><span class="title-video">Priyanka & Nalin</span></a>

                            <a href="https://drive.google.com/file/d/1JtIakz7y8ZjgDHpUp0xs2q5I81vclorX/preview" target="slider1" class="get-name d-md-inline d-none"><img loading="lazy"  src="{{asset('frontend/style/images/films/pratik.jpg')}}" class="w-100 h-100">
                                <br><span class="title-video">Pratik & Hiral</span></a>

            <a href="https://drive.google.com/file/d/1upUpXwslxK319Xln3qk_pGESzEczW4jk/preview" target="slider1" class="get-name d-lg-inline d-none"><img loading="lazy"  src="{{asset('frontend/style/images/films/aniket.jpg')}}" class="w-100 h-100">
            <br><span class="title-video">Aniket & Tejaswini</span></a>






          </span>
      </div>
      <div class="carousel-item ">
        <span class="video-slider justify-content-center  d-flex">
            <a href="https://drive.google.com/file/d/1AzKixpynnE8x6nxHbgiUqKTJQCfzgtoq/preview" target="slider1" class="get-name d-md-inline d-none"><img loading="lazy"  src="{{asset('frontend/style/images/films/mansi-meeth.JPG')}}" class="w-100 h-100">
                <br><span class="title-video">Mansi & Meeth</span></a>

                <a href="https://drive.google.com/file/d/1lRBYTafvwWr1243oWd6b0cC-hvOugooX/preview" target="slider1" class="get-name d-md-inline d-none"><img loading="lazy"  src="{{asset('frontend/style/images/films/manan.jpg')}}" class="w-100 h-100">
                    <br><span class="title-video">Shivani & Manan</span></a>

                    <a href="https://drive.google.com/file/d/1IaymMwYHybjjCyNBRiygJPtsySEG5VsX/preview" target="slider1" class="get-name d-lg-inline d-none"><img loading="lazy"  src="{{asset('frontend/style/images/films/17.png')}}" class="w-100 h-100">
                        <br><span class="title-video">Nikhil & Ruchi</span></a>


                        <a href="https://drive.google.com/file/d/1KLmwyX-TQNjRNLVSDrgCxBtf-ceuy_4j/preview" target="slider1" class="get-name "><img loading="lazy"  src="{{asset('frontend/style/images/films/4.png')}}" class="w-100 h-100">
                            <br><span class="title-video">Priyanka & Nalin</span></a>

                            <a href="https://drive.google.com/file/d/1JtIakz7y8ZjgDHpUp0xs2q5I81vclorX/preview" target="slider1" class="get-name"><img loading="lazy"  src="{{asset('frontend/style/images/films/pratik.jpg')}}" class="w-100 h-100">
                                <br><span class="title-video">Pratik & Hiral</span></a>

            <a href="https://drive.google.com/file/d/1upUpXwslxK319Xln3qk_pGESzEczW4jk/preview" target="slider1" class="get-name"><img loading="lazy"  src="{{asset('frontend/style/images/films/aniket.jpg')}}" class="w-100 h-100">
            <br><span class="title-video">Aniket & Tejaswini</span></a>

          </span>
      </div>
      <div class="carousel-item">
        <span class="video-slider justify-content-center  d-flex">
            <a href="https://drive.google.com/file/d/1AzKixpynnE8x6nxHbgiUqKTJQCfzgtoq/preview" target="slider1" class="get-name"><img loading="lazy"  src="{{asset('frontend/style/images/films/mansi-meeth.JPG')}}" class="w-100 h-100">
                <br><span class="title-video">Mansi & Meeth</span></a>

                <a href="https://drive.google.com/file/d/1lRBYTafvwWr1243oWd6b0cC-hvOugooX/preview" target="slider1" class="get-name d-md-inline d-none"><img loading="lazy"  src="{{asset('frontend/style/images/films/manan.jpg')}}" class="w-100 h-100">
                    <br><span class="title-video">Shivani & Manan</span></a>

                    <a href="https://drive.google.com/file/d/1IaymMwYHybjjCyNBRiygJPtsySEG5VsX/preview" target="slider1" class="get-name"><img loading="lazy"  src="{{asset('frontend/style/images/films/17.png')}}" class="w-100 h-100">
                        <br><span class="title-video">Nikhil & Ruchi</span></a>


                        <a href="https://drive.google.com/file/d/1KLmwyX-TQNjRNLVSDrgCxBtf-ceuy_4j/preview" target="slider1" class="get-name d-lg-inline d-none"><img loading="lazy"  src="{{asset('frontend/style/images/films/4.png')}}" class="w-100 h-100">
                            <br><span class="title-video">Priyanka & Nalin</span></a>

                            <a href="https://drive.google.com/file/d/1JtIakz7y8ZjgDHpUp0xs2q5I81vclorX/preview" target="slider1" class="get-name"><img loading="lazy"  src="{{asset('frontend/style/images/films/pratik.jpg')}}" class="w-100 h-100">
                                <br><span class="title-video">Pratik & Hiral</span></a>

            <a href="https://drive.google.com/file/d/1upUpXwslxK319Xln3qk_pGESzEczW4jk/preview" target="slider1" class="get-name d-md-inline d-none"><img loading="lazy"  src="{{asset('frontend/style/images/films/aniket.jpg')}}" class="w-100 h-100">
            <br><span class="title-video">Aniket & Tejaswini</span></a>

          </span>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
    </div>
</div>
</section>
@endsection
@section('js')
<script>
    jQuery(".get-name").click(function() {
    // event.preventDefault();
    var text = jQuery(this).text(); // 'this' refers to the h3 element that you clicked.. not the div with the class .results
    $('.add-name').text(text);
});
</script>
@endsection
