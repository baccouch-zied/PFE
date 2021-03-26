<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DeliTaste</title>
    <meta name="description" content="Delitaste - Food delivery and Restaurant HTML Template" />
    <meta name="author" content="George_Fx">
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="assets/images/favicon.png">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/js/lib/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/js/lib/slick/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/flaticon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/responsive.css')}}">
</head>

<body>
    
    <div class="page-loading">
        <img src="{{asset('front/images/loader.gif')}}" alt="" />
    </div><!--page-loading end-->
    
    <div class="wrapper">

       @include('front.header')><!--header end-->

        <div class="responsive-mobile-menu">
            <ul>
                <li><a class="active" href="index.html" title="">Home</a></li>
                <li><a href="about.html" title="">About Us</a></li>
                <li><a href="#" title="">Pages</a>
                    <ul>
                        <li><a href="restaurants.html" title="">Restaurants</a></li>
                        <li><a href="restaurant-details.html" title="">Restaurant detail</a></li>
                        <li><a href="cart.html" title="">Cart</a></li>
                        <li><a href="checkout.html" title="">Checkout</a></li>
                        <li><a href="profile.html" title="">My profile</a></li>
                        <li><a href="faqs.html" title="">FAQs</a></li>
                        <li><a href="testimonials.html" title="">Testimonials</a></li>
                        <li><a href="404.html" title="">404</a></li>
                    </ul>
                </li>
                <li><a href="#" title="">Blog</a>
                    <ul>
                        <li><a href="blog1.html" title="">Blog 1</a></li>
                        <li><a href="blog2.html" title="">Blog 2</a></li>
                        <li><a href="blog-single.html" title="">Blog Single</a></li>
                    </ul>
                </li>
                <li><a href="contact.html" title="">Contact Us</a></li>
            </ul>
        </div><!--responsive-mobile-menu end-->

        <section class="pager-section text-center">
            <div class="fixed-bg bg4"></div>
            <div class="container">
                <div class="pager-head">
                    <h2>Sign In</h2>
                    <ul>
                        <li><a href="#" title="">Home</a></li>
                        <li><span>Sign in</span></li>
                    </ul>
                </div><!--pager-head end-->
            </div>
        </section><!--pager-section end-->

        <section class="sec-block">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="delitaste-form text-center">
                            <div class="lg-text">
                                <h3>Sign Up With</h3>
                                <ul class="social">
                                    <li><a class="facebook" href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a class="linkedin" href="#" title=""><i class="fab fa-linkedin"></i></a></li>
                                    <li><a class="twitter" href="#" title=""><i class="fab fa-twitter"></i></a></li>
                                    <li><a class="google" href="#" title=""><i class="fab fa-google"></i></a></li>
                                </ul>
                            </div><!--lg-text end-->
                            <div class="or">
                                <span>or</span>
                            </div>
                            <form class="auth-register-form mt-2" method="POST" action="{{ route('registerClient') }}">
                            @csrf
                                <div class="row">
                                  
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="register-name" name="name" placeholder="Votre nom *" aria-describedby="register-name" tabindex="1" autofocus value="{{ old('name') }}" />
                                            @error('name')
                                          <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                         </span>
                                          @enderror
                                        </div>
                                      <!--form-group end-->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control @error('prenom') is-invalid @enderror" id="register-prenom" name="prenom" placeholder="Votre prenom *" aria-describedby="register-prenom" tabindex="1" autofocus value="{{ old('prenom') }}" />
                                            @error('prenom')
                                          <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                         </span>
                                          @enderror
                                        </div>
                                      <!--form-group end-->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control @error('telephone') is-invalid @enderror" id="register-telephone" name="telephone" placeholder="Nombre de Telephone *" aria-describedby="register-telephone" tabindex="1" autofocus value="{{ old('telephone') }}" />
                                            @error('telephone')
                                          <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                         </span>
                                          @enderror
                                        </div>
                                      <!--form-group end-->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="register-email" name="email" placeholder="Votre email *" aria-describedby="register-email" tabindex="1" autofocus value="{{ old('email') }}" />
                                            @error('email')
                                          <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                         </span>
                                          @enderror
                                        </div>
                                      <!--form-group end-->
                                    </div>
                                </div>
                                <h4 class="text-left">Password:</h4>
                                <div class="row">
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="register-password" name="password" placeholder="Mote de passe *" aria-describedby="register-password" tabindex="1" autofocus value="{{ old('password') }}" />
                                            <input type="hidden" name="type" value="client" />
                                            @error('password')
                                          <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                         </span>
                                          @enderror
                                        </div>
                                      <!--form-group end-->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <input type="password" class="form-control form-control-merge" id="register-password-confirm" name="password_confirmation" placeholder="Confirmer mot de passe" aria-describedby="register-password" tabindex="3" />

                                            @error('password_confirmation')
                                          <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                         </span>
                                          @enderror
                                        </div>
                                      <!--form-group end-->
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn-default w-100">Create Account <span></span></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="btm-tx">
                                <span class="d-block">Already have an account? <a href="/loginC" title="">Log in</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('front.footer')<!--footer end-->
        
    </div><!--wrapper end-->


    <script src="{{asset('front/js/jquery.min.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front/js/lib/slick/slick.js')}}"></script>
    <script src="{{asset('front/js/scripts.js')}}"></script>

</body>
</html>