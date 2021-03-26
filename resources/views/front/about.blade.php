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
        <img src="assets/images/loader.gif" alt="" />
    </div><!--page-loading end-->
    
    <div class="wrapper">

       @include('front.header')<!--header end-->

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
                    <h2>About us</h2>
                    <ul>
                        <li><a href="#" title="">Home</a></li>
                        <li><span>About us</span></li>
                    </ul>
                </div><!--pager-head end-->
            </div>
        </section><!--pager-section end-->

        <section class="sec-block">
            <div class="container">
                <div class="about-us-sec">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="about-content">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="abt-img">
                                            <img src="https://via.placeholder.com/360x350" alt="" class="w-100">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="abt-img">
                                            <img src="https://via.placeholder.com/360x350" alt="" class="w-100">
                                        </div>
                                    </div>
                                </div>
                                <h4>We deliver food as soon as possible. Our team works seven days a week and is always ready to answer any of your questions.</h4>
                                <p>We are a team of hardworking and friendly people who work every day on a common goal for more than 5 years. Each ctro at us begins with coffee. Together we develop, grow and relax. More than 50 restaurants and cafes cooperate with us. More than 250 employees are working to improve our service. We always work for our beloved customers and try to be on top. We have a favorable system of discounts for regular customers and good conditions for cooperation with partners.</p>
                            </div><!--about-content end-->
                        </div>
                        <div class="col-md-4">
                            <div class="our-proptz v2 text-center">
                                <div class="proptz">
                                    <div class="propt-icon">
                                        <img src="{{asset('front/images/icons/discount.svg')}}" alt="">
                                    </div>
                                    <h3 class="semi-bold text-capitalize">discount system</h3>
                                    <p>We have a favorable discount system for our regular customers.</p>
                                </div>
                                <div class="proptz">
                                    <div class="propt-icon">
                                        <img src="{{asset('front/images/icons/delivery.svg')}}" alt="">
                                    </div>
                                    <h3 class="semi-bold text-capitalize">Express Delivery</h3>
                                    <p>The hottest food &amp; fastest delivery to any location of your city.</p>
                                </div>
                                <div class="proptz">
                                    <div class="propt-icon">
                                        <img src="{{asset('front/images/icons/food.svg')}}" alt="">
                                    </div>
                                    <h3 class="semi-bold text-capitalize">50+ restaurants</h3>
                                    <p>Large selection of restaurants and cafes throughout the country.</p>
                                </div>
                            </div><!--our-proptz end-->
                        </div>
                    </div>
                </div><!--about-us-sec end-->
            </div>
        </section>

        <section class="sec-block oder-sec">
            <div class="fixed-bg bg2"></div>
            <div class="container">
                <div class="order-appliction">
                    <h2>Make orders With Our <span>Application</span></h2>
                    <ul class="vl-fzt">
                        <li>
                            <span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="transparent" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22 11.0799V11.9999C21.9988 14.1563 21.3005 16.2545 20.0093 17.9817C18.7182 19.7088 16.9033 20.9723 14.8354 21.5838C12.7674 22.1952 10.5573 22.1218 8.53447 21.3744C6.51168 20.6271 4.78465 19.246 3.61096 17.4369C2.43727 15.6279 1.87979 13.4879 2.02168 11.3362C2.16356 9.18443 2.99721 7.13619 4.39828 5.49694C5.79935 3.85768 7.69278 2.71525 9.79619 2.24001C11.8996 1.76477 14.1003 1.9822 16.07 2.85986" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M22 4L12 14.01L9 11.01" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                            <div class="vs-info">
                                <h4>Order and pay in a few minutes</h4>
                                <p>Сhoose food and pay for the order in a couple of clicks online also choose you current location using GPS.</p>
                            </div>
                        </li>
                        <li>
                            <span>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="transparent" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22 11.0799V11.9999C21.9988 14.1563 21.3005 16.2545 20.0093 17.9817C18.7182 19.7088 16.9033 20.9723 14.8354 21.5838C12.7674 22.1952 10.5573 22.1218 8.53447 21.3744C6.51168 20.6271 4.78465 19.246 3.61096 17.4369C2.43727 15.6279 1.87979 13.4879 2.02168 11.3362C2.16356 9.18443 2.99721 7.13619 4.39828 5.49694C5.79935 3.85768 7.69278 2.71525 9.79619 2.24001C11.8996 1.76477 14.1003 1.9822 16.07 2.85986" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M22 4L12 14.01L9 11.01" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                            <div class="vs-info">
                                <h4>Check Delivery Status</h4>
                                <p>Follow the status of your order in real time and also track the delivery path until you get it.</p>
                            </div>
                        </li>
                    </ul>
                    <ul class="btnss">
                        <li><img src="{{asset('front/images/btn1.png')}}" alt=""></li>
                        <li><img src="{{asset('front/images/btn2.png')}}" alt=""></li>
                    </ul>
                </div><!--promotion end-->
            </div>
        </section>

        <section class="sec-block pb-0">
            <div class="container">
                <div class="offer-posts">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="offer-post">
                                <img src="https://via.placeholder.com/555x400" alt="" class="w-100">
                                <h2><a href="blog-single.html" title="">Get paid as a courier partner</a></h2>
                                <a href="#" title="" class="arrow">
                                    <img src="{{asset('front/images/icons/arrow.svg')}}" alt="">
                                </a>
                            </div><!--blog end-->
                        </div>
                        <div class="col-md-6">
                            <div class="offer-post">
                                <img src="https://via.placeholder.com/555x400" alt="" class="w-100">
                                <h2><a href="blog-single.html" title="">Become a restaurant partner</a></h2>
                                <a href="#" title="" class="arrow">
                                    <img src="{{asset('front/images/icons/arrow.svg')}}" alt="">
                                </a>
                            </div><!--blog end-->
                        </div>
                    </div>
                </div><!--offer-post end-->
            </div>
        </section>

        <section class="sec-block">
            <div class="container">
                <div class="newsletter-sec">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="newsletter-text">
                                <h2>Newsletter</h2>
                                <p>Don’t miss promotions and discounts.</p>
                            </div><!--newsletter-text end-->
                        </div>
                        <div class="col-lg-8">
                            <form>
                                <input type="email" name="email" class="half-radius" placeholder="Enter your email">
                                <button type="submit" class="btn-default">Subscribe <span></span></button>
                            </form>
                        </div>
                    </div>
                    <h4 class="section_title">Subscribe</h4>
                </div><!--newsletter-sec end-->
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