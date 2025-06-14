@extends('frontend.layouts.app')
@section('title', 'Contact - ')
@section('content')
    {{-- data-image-src="frontend/style/images/art/lady.jpg" --}}
    <div class="wrapper image-wrapper bg-image inverse-text">
        <div class="container inner pt-200 pb-0  text-center ">
            <h1 class="heading pt-4 mt-3 mb-md-3 ">Contact Us</h1>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.rev_slider_wrapper -->
    <div class="space20"></div>
    {{-- <h2 class="section-title text-center">Get In Touch</h2> --}}
    <h2 class=" text-center about-sub-title px-2">Hi. I Am A Photographer
        I Capture Life, Moments, Happiness, Emotions, Action, Impression & Beauty.</h2>
    <!-- /.row -->
    <div class="row  text-center justify-content-center pt-md-4 pt-0">
        <!--/column -->
        <div class="col-lg-8 col-sm-10 mt-lg-0 mt-4  px-4 pt-md-2">
            <div class="form-container px-2">
                <form action="{{ route('frontend.contact.submit') }}" method="post">
                    @csrf
                    <input type="hidden" name="recaptcha_response" id="recaptchaResponseContact">
                    <input type="hidden" class="form-control" name="page_name" value="Contact"
                        value="Contact">
                    <div class="row pt-md-0 pt-4">
                        <div class="col-md-6 pr-10">
                            <div class="form-group">
                                <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}"
                                    minlength="3" maxlength="30" placeholder="First Name" required="required">
                                @if ($errors->has('first_name'))
                                    <div id="message-error " class="text-danger" style="text-align: start;">
                                        {{ $errors->first('first_name') }}
                                    </div>
                                @endif
                            </div>
                            <!--/.form-group -->
                        </div>

                        <div class="col-md-6 pr-10">
                            <div class="form-group">
                                <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}"
                                    minlength="3" maxlength="30" placeholder="Last Name" required="required">
                                @if ($errors->has('last_name'))
                                    <div id="message-error " class="text-danger" style="text-align: start;">
                                        {{ $errors->first('last_name') }}
                                    </div>
                                @endif
                            </div>
                            <!--/.form-group -->
                        </div>
                        <!--/column -->
                        <div class="col-md-6 ">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                                    minlength="5" maxlength="40" placeholder="E-mail" required="required">
                                @if ($errors->has('email'))
                                    <div id="message-error " class="text-danger" style="text-align: start;">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>
                            <!--/.form-group -->
                        </div>
                        <!--/column -->
                        <div class="col-md-6 pr-10">
                            <div class="form-group">
                                <input type="tel" class="form-control" minlength="10" maxlength="10" name="phone"
                                    value="{{ old('phone') }}" placeholder="Phone">
                                @if ($errors->has('phone'))
                                    <div id="message-error " class="text-danger" style="text-align: start;">
                                        {{ $errors->first('phone') }}
                                    </div>
                                @endif
                            </div>
                            <!--/.form-group -->
                        </div>

                        <div class="col-md-6 pr-10">
                            <div class="form-group">
                                <input type="date" class="form-control" name="date" value="{{ old('date') }}"
                                    placeholder="Select A Date">
                                @if ($errors->has('date'))
                                    <div id="message-error " class="text-danger" style="text-align: start;">
                                        {{ $errors->first('date') }}
                                    </div>
                                @endif
                            </div>
                            <!--/.form-group -->
                        </div>

                        <div class="col-md-6 pr-10">
                            <div class="form-group">
                                <select name="area_of_interest" value="{{ old('area_of_interest') }}" id=""
                                    required>
                                    <option value="" disabled selected hidden> Area Of Interest</option>
                                    <option value="All">Select All</option>
                                    <option value="Wedding Photography"> Wedding Photography </option>
                                    <option value="Engage Session/Pre Wedding"> Engage Session/Pre Wedding </option>
                                    <option value="Cinematic Wedding Films"> Cinematic Wedding Films </option>
                                    <option value="Maternity Session"> Maternity Session </option>
                                    <option value="New Born Session"> New Born Session </option>
                                    <option value="Family Day"> Family Day </option>
                                    <option value="Others"> Others </option>
                                </select>
                                @if ($errors->has('area_of_interest'))
                                    <div id="message-error " class="text-danger" style="text-align: start;">
                                        {{ $errors->first('area_of_interest') }}
                                    </div>
                                @endif
                            </div>
                            <!--/.form-group -->
                        </div>

                        <!--/column -->

                        <!--/column -->
                        <div class="col-12 text-center text-lg-left">
                            <textarea name="message" class="form-control" rows="3" placeholder="Type Your Message Here..."minlength="5"
                                maxlength="250" required>{{ old('message') }}</textarea>
                            @if ($errors->has('message'))
                                <div id="message-error " class="text-danger" style="text-align: start;">
                                    {{ $errors->first('message') }}
                                </div>
                            @endif
                            <div class="space30"></div>
                            <button type="submit" class="btn text-capitalize watch-more mt-4" data-error="Fix errors"
                                data-processing="Sending..." data-success="Thank you!">Send Message</button>
                            <footer class="notification-box"></footer>
                        </div>
                        <!--/column -->
                        @if ($errors->has('recaptcha_response_contact'))
                            <div id="message-error " class="text-danger">
                                {{ $errors->first('recaptcha_response_contact') }}
                            </div>
                        @endif
                    </div>
                    <!--/.row -->
                </form>
                <!--/.vanilla-form -->
            </div>
            <!--/.form-container -->
        </div>
        <!--/column -->

    </div>
    <!--/.row -->
    </div>
    <!-- /.container -->
    </div>
    <!-- /.wrapper -->
@endsection
@section('js')

@endsection
