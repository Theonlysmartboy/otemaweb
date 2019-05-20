@extends('layouts.frontlayout.design')

@section('content')
    <br>
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
                        <h1><span>get</span> started</h1>
                        <p>open account absolutely free</p>
                    </div>
                    <!-- Main Heading Ends -->
                    <!-- Form Starts -->
                    <form class="custom-form" method="POST" action="{{ route('register') }}">@csrf
                    <!-- Input Field Starts -->
                        <div class="form-group">
                            <input class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="NAME" type="text" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <!-- Input Field Ends -->
                        <!-- Input Field Starts -->
                        <div class="form-group">
                            <input class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="EMAIL" type="email" required autocomplete="email" autofocus>
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
                        <!-- Input Field Starts -->
                        <div class="form-group">
                            <input class="form-control @error('password') is-invalid @enderror" name="confirm password" id="password" placeholder="CONFIRM PASSWORD" type="password" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <!-- Input Field Ends -->

                        <!-- Submit Form Button Starts -->
                        <div class="form-group">
                            <button class="custom-button login" type="submit">Create Account</button>
                            @if (Route::has('password.request'))
                                <p class="text-center">{{ __('Already have an Account?') }}
                                    <a class="btn btn-link" href="{{ route('login') }}">
                                        Login</a>
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
