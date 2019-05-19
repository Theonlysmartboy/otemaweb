@extends('layouts.frontlayout.design')

@section('content')
    <div class="container-fluid user-auth">
        <div class="hidden-xs col-sm-4 col-md-4 col-lg-4">
                        <!-- Slider Starts -->
            <div id="carousel-testimonials" class="carousel slide carousel-fade" data-ride="carousel">
                <!-- Indicators Starts -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-testimonials" data-slide-to="1"></li>
                    <li data-target="#carousel-testimonials" data-slide-to="2"></li>
                </ol>
                <!-- Indicators Ends -->
                <!-- Carousel Inner Starts -->
                <div class="carousel-inner">
                    <!-- Carousel Item Starts -->
                    <div class="item active item-1">
                        <div>
                            <blockquote>
                                <p>Amira's Team Was Great To Work With And Interpreted Our Needs Perfectly.</p>
                                <footer><span>Lucy Smith</span>, England</footer>
                            </blockquote>
                        </div>
                    </div>
                    <!-- Carousel Item Ends -->
                    <!-- Carousel Item Starts -->
                    <div class="item item-2">
                        <div>
                            <blockquote>
                                <p>The Team Is Endlessly Helpful, Flexible And Always Quick To Respond, Thanks Amira!</p>
                                <footer><span>Rawia Chniti</span>, Russia</footer>
                            </blockquote>
                        </div>
                    </div>
                    <!-- Carousel Item Ends -->
                    <!-- Carousel Item Starts -->
                    <div class="item item-3">
                        <div>
                            <blockquote>
                                <p>We Are So Appreciative Of Their Creative Efforts, And Love Our New Site!, millions of thanks Amira!</p>
                                <footer><span>Mario Verratti</span>, Spain</footer>
                            </blockquote>
                        </div>
                    </div>
                    <!-- Carousel Item Ends -->
                </div>
                <!-- Carousel Inner Ends -->
            </div>
            <!-- Slider Ends -->
        </div>
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">

            <div class="form-container">
                <div>
                    <!-- Main Heading Starts -->
                    <div class="text-center top-text">
                        <h1><span>member</span> login</h1>
                        <p>great to have you back!</p>
                    </div>
                    <!-- Main Heading Ends -->
                    <!-- Form Starts -->
                    <form class="custom-form" method="POST" action="{{ route('login') }}">@csrf
                        <!-- Input Field Starts -->
                        <div class="form-group">
                            <input class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="EMAIL" type="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <!-- Input Field Ends -->
                        <!-- Input Field Starts -->
                        <div class="form-group">
                            <input class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="PASSWORD" type="password" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <!-- Input Field Ends -->

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- Submit Form Button Starts -->
                        <div class="form-group">
                            <button class="custom-button login" type="submit">login</button>
                            @if (Route::has('password.request'))
                            <p class="text-center">{{ __('Forgot Your Password?') }}
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                Reset now!</a>
                            @endif
                        </div>
                        <!-- Submit Form Button Ends -->
                    </form>
                    <!-- Form Ends -->
                </div>
            </div>
                    </div>
    </div>
@endsection
