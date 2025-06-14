<footer class="dark-wrapper inverse-text">
    <div class="sub-footer">
        <div class="container inner  text-center pb-0">
            {{-- <a href="{{url('/')}}"> <img src="#" srcset="frontend/images/soul-saaga.png 1x, frontend/images/soul-saaga.png 2x" alt=""></a> --}}
            <div class="row">
                <div class="col-12  text-footer-p custom-align">
                    <section class="bg-img  text-center">
                        <div class="container px-0">
                            <h2 class="pb-4 latest-shot text-gold">
                                Get In Touch
                            </h2>
                            <form class="form-subscribe m-0 text-center mx-auto"
                                action="{{ route('frontend.get_in_touch.submit') }}" method="post">
                                @csrf
                                <input type="hidden" name="recaptcha_response" id="recaptchaResponseGetInTouch">
                                <input type="hidden" class="form-control" name="page_name" value="Get In Touch">
                                <div class="input-group">
                                    <input type="text" class="form-control input-lg" name="email_address"
                                        value="{{ old('email_address') }}" minlength="5" maxlength="40"
                                        placeholder="Your Mail" required>
                                    <span class="input-group-btn">
                                        <button class="btn btn-success btn-lg m-0 footer-btn" type="submit">Get In
                                            Touch</button>
                                    </span>
                                </div>
                                @if ($errors->has('email_address'))
                                    <div id="message-error " class="text-danger">
                                        {{ $errors->first('email_address') }}
                                    </div>
                                @endif
                                @if ($errors->has('recaptcha_response'))
                                    <div id="message-error " class="text-danger">
                                        {{ $errors->first('recaptcha_response') }}
                                    </div>
                                @endif
                            </form>
                        </div>
                        <div class="space30"></div>
                        <div class="d-flex text-center justify-content-center">

                            <p class="text-center pb-20 mx-md-2 mx-1"><i class="fa fa-mobile-phone text-black"></i><a
                                    href="tel:917738277703" class="e-mail">+91-7738277703</a></p> &nbsp;
                            <p class="text-center pb-20 mx-md-2 mx-1"><i class="fa fa-envelope text-black"></i><a
                                    href="mailto:hello@thesoulsaaga.com" class="e-mail">hello@thesoulsaaga.com</a></p>
                        </div>
                        <ul class="social social-bg social-s ">
                            {{-- <li><a href="#"><i class="fa fa-linkedin pt-0"></i></a></li> --}}
                            {{-- <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="#"> <i class="fa fa-youtube-play"></i></a></li> --}}
                            <li><a href="https://www.instagram.com/thesoulsaaga/?igshid=YTQwZjQ0NmI0OA%3D%3D"
                                    target="_blank"><i class="fa fa-instagram"></i></a></li>
                            {{-- <li><a href="https://api.whatsapp.com/send?phone=917738277703"><i
                                        class="fa fa-whatsapp"></i></a></li> --}}
                            {{-- <li><a href="#"><i class="fa fa-vimeo"></i></a></li> --}}
                        </ul>
                    </section>
                    <div class="space10 "></div>
                    <div class="text-footer-p text-black pt-xl-1"> Copyright &copy; {{ date('Y') }} All Rights
                        Reserved The Soul Saaga | Designed &
                        Developed By
                        <a href="https://www.acetrot.com/" target="_blank"
                            class="text-coffee">Acetrot</a>
                    </div>
                </div>


            </div>
        </div>
        <!-- /.container -->

    </div>
    <!-- /.sub-footer -->
</footer>

<a  class="whats-app floating" href="https://api.whatsapp.com/send?phone=917738277703" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>
<div class="contentDiv" id="content">

    <button class="back-to-top" type="button"></button>
</div>
</div>
<!-- /.content-wrapper -->


<script src="{{ asset('frontend/style/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/style/js/popper.min.js') }}"></script>
<script src="{{ asset('frontend/style/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/style/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('frontend/style/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script
    src="{{ asset('frontend/style/revolution/revolution-addons/filmstrip/js/revolution.addon.filmstrip.min.js') }}">
</script>
<script
    src="{{ asset('frontend/style/revolution/revolution-addons/typewriter/js/revolution.addon.typewriter.min.js') }}">
</script>
<script src="{{ asset('frontend/style/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('frontend/style/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/style/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('frontend/style/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}">
</script>
<script src="{{ asset('frontend/style/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('frontend/style/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('frontend/style/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('frontend/style/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('frontend/style/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('frontend/style/js/plugins.js') }}"></script>
<script src="{{ asset('frontend/style/js/scripts.js') }}"></script>
<script src="{{ asset('frontend/js/custom.js') }}"></script>

<script>
    window.onscroll = function() {
        growShrinkLogo()
    };

    var Logo = document.getElementById("Logo");
    var endOfDocumentTop = 50;
    var size = 0;

    function growShrinkLogo() {
        var scroll = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;

        if (size == 0 && scroll > endOfDocumentTop) {
            Logo.style.width = '100px';
            size = 1;
        } else if (size == 1 && scroll <= endOfDocumentTop) {
            Logo.style.width = '170px';
            size = 0;
        }
    }
</script>

<script>
    // Back to top
    var amountScrolled = 200;
    var amountScrolledNav = 25;

    $(window).scroll(function() {
        if ($(window).scrollTop() > amountScrolled) {
            $('button.back-to-top').addClass('show');
        } else {
            $('button.back-to-top').removeClass('show');
        }
    });

    $('button.back-to-top').click(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 800);
        return false;
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/lightgallery.min.js"
    integrity="sha512-jEJ0OA9fwz5wUn6rVfGhAXiiCSGrjYCwtQRUwI/wRGEuWRZxrnxoeDoNc+Pnhx8qwKVHs2BRQrVR9RE6T4UHBg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/lightgallery.umd.min.js"
    integrity="sha512-VOQBxCIgNssJrB8+irZF7L8MvfpAshegc36C3H5QD7vmibXM4uCNaqJIaSNatD2z2ZQQJSx0k+q+m+xsSPp4Xw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/plugins/thumbnail/lg-thumbnail.umd.min.js"
    integrity="sha512-dc8xJSGs0ib9uo0fLT/v4wp2LG7+4OSzc+UpFiIKiv6QP/e4hZH/S8manUCTtO3tNVGzcje8uJjSdL+NH29blQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/plugins/zoom/lg-zoom.umd.min.js"
    integrity="sha512-OUF2jbRheQR5yXPCvXN71udWa5cvwPf+shcXM+5GrW1vtNurTn7az8LCP3hS50gm17ULXdh3cdkhiPa0Qqyczw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>



<script type="text/javascript">
    lightGallery(document.getElementById('lightgallery'), {
        plugins: [lgZoom, lgThumbnail],
        licenseKey: 'your_license_key',
        speed: 500,
        // ... other settings
    });
</script>

<script>
    $(document).ready(function() {
        $("#lightgallery").lightGallery({
            selector: 'div a'
        });
    });
</script>


<script type="text/javascript">
    lightGallery(document.getElementById('lightgallery-2'), {
        plugins: [lgZoom, lgThumbnail],
        licenseKey: 'your_license_key',
        speed: 500,
        fullScreen: true
        // ... other settings
    });
</script>

<script>
    $(document).ready(function() {
        $("#lightgallery-2").lightGallery({
            selector: 'div a'
        });
    });
</script>



<script type="text/javascript">
    lightGallery(document.getElementById('lightgallery-3'), {
        plugins: [lgZoom, lgThumbnail],
        licenseKey: 'your_license_key',
        speed: 500,
        // ... other settings
    });
</script>

<script>
    $(document).ready(function() {
        $("#lightgallery-3").lightGallery({
            selector: 'div a'
        });
    });
</script>
<script src="{{ asset('/frontend/plugins/snackbar/snackbar.min.js') }}"></script>
<script>
    @if (Session::get('alert-type') == 'success')
        @if (Session::has('message'))
            Snackbar.show({
                text: "{{ Session::get('message') }}",
                pos: 'top-right',
                actionTextColor: '#fff',
                backgroundColor: '#1abc9c'
            });
        @endif
    @elseif (Session::get('alert-type') == 'info')
        @if (Session::has('message'))
            Snackbar.show({
                text: "{{ Session::get('message') }}",
                pos: 'top-right',
                actionTextColor: '#fff',
                backgroundColor: '#2196f3'
            });
        @endif
    @elseif (Session::get('alert-type') == 'error')
        @if (Session::has('message'))
            Snackbar.show({
                text: "{{ Session::get('message') }}",
                pos: 'top-right',
                actionTextColor: '#fff',
                backgroundColor: '#e7515a'
            });
        @endif
    @else
        @if (Session::has('message'))
            Snackbar.show({
                text: "{{ Session::get('message') }}",
                pos: 'top-right',
                actionTextColor: '#fff',
                backgroundColor: '#3b3f5c'
            });
        @endif
    @endif
</script>

<script
    src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render={{ config('app.google_captcha_site_key') }}"
    async defer></script>
<script>
    var onloadCallback = function() {
        // alert('hell')
        grecaptcha.ready(function() {
            grecaptcha.execute('{{ config('app.google_captcha_site_key') }}', {
                action: 'submit'
            }).then(function(token) {
                var recaptchaResponseContact = document.getElementById('recaptchaResponseContact');
                if (recaptchaResponseContact) {
                    recaptchaResponseContact.value = token;
                }
                var recaptchaResponseGetInTouch = document.getElementById(
                    'recaptchaResponseGetInTouch');
                if (recaptchaResponseGetInTouch) {
                    recaptchaResponseGetInTouch.value = token;
                }
            })
        })
    }
</script>
