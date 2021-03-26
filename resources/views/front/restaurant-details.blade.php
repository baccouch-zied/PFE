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
                    <h2>{{$UserRestaurant->name}}</h2>
                    <ul>
                        <li><a href="#" title="">Home</a></li>
                        <li><a href="#" title="">Restaurants</a></li>
                        <li><span>bulgarian restaurant</span></li>
                    </ul>
                </div><!--pager-head end-->
            </div>
        </section><!--pager-section end-->

        <section class="sec-block">
            <div class="container">
                <div class="restaurant-details">
                    <div class="food-thumbail-large">
                        <img src="{{ URL::to('/') }}/images/{{ $UserRestaurant->image2 }}" alt="" class="w-100">
                   
                    </div>
                    <div class="food-info">
                        <ul class="meta">
                            <li>
                                <img src="{{asset('front/images/icons/calendar.svg')}}" alt="">
                                <span>{{$UserRestaurant->jour}}</span>
                            </li>
                            <li>
                                <img src="{{asset('front/images/icons/clock.svg')}}" alt="">
                                <span>{{$UserRestaurant->horaire}}</span>
                            </li>
                            <li>
                                <span>3 Reviews</span>
                                <ul class="rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </li>
                        </ul>
                        <h4>Description de notre restaurant :</h4>
                        <p>{{$UserRestaurant->description}}</p>
                    </div>
                </div><!--restaurant-details end-->
            </div>
        </section>
        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
        <section class="sec-block p-0">
            <div class="container">
                <div class="section-title text-center">
                    <span>Un Parfait Menu à Vous</span>
                    <h2 class="text-capitalize">Menu</h2>
                </div><!--sec-title end-->
                <div class="popular-dishes style2 text-center">
                    <div class="options">
                        <div class="option-isotop">
                            <ul id="filter" class="option-set filters-nav" data-option-key="filter">
                            <li><a class="selected" data-option-value=".meat">Meat</a></li>
                            @foreach($categories as $categorie)
                                <li><a data-option-value=".{{$categorie->nom}}">{{$categorie->nom}}</a></li>
                            @endforeach
                            </ul>
                        </div>
                    </div><!--options end-->
                    <div class="row">
                        <div class="masonary">
                        @foreach($produits as $produit)
                            <div class="col-lg-4 col-md-4 col-sm-6 meat {{$categorie->nom}}">
                                <div class="pd-item">
                                    <div class="pd-thumbnail">
                                        <img src="{{ URL::to('/') }}/images/{{ $produit->image }}" alt="" class="w-100">
                                    </div>
                                    <h3 class="semi-bold text-capitalize"><a href="#" title="">{{$produit->name}}</a> </h3>
                                    <p>{{$produit->details}}</p>
                                    <strong class="semi-bold">{{$produit->price}}</strong>
                                    <form action="{{ route('cart.store')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="produit_id" value="{{$produit->id}}">
                                    <button type="submit" title="" class="btn-default gradient-bg half-radius height-2">Ajouter au panier <span></span></button>
                                    </form>
                                </div>
                            </div>   
                         @endforeach                  
                        </div><!--masonary end-->
                    </div>
                </div><!--popular-dishes end-->
            </div>
        </section>

        <section class="sec-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="feedback-section">
                            <h2>Feedbacks {{$feedback->count()}}</h2>
                            <div class="testimonials-list">
                            @foreach($feedback as $feedback)
                                <div class="test-monial">
                                    <div class="testi_head">
                                        <ul>
                                            <li>
                                                <img src="https://via.placeholder.com/65x65" alt="">
                                                <span>{{$feedback->nom}}</span>        
                                            </li>
                                            <li>
                                                {{$feedback->date}}
                                            </li>
                                            <li>
                                                <ul class="rating">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <p>{{$feedback->feed}}</p>
                                </div><!--test-monial end-->
                            @endforeach
                            </div>
                        </div><!--feedback section end-->
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="widget widget-review">
                                <h3 class="widget-title">Leave a review</h3>
                                <form>
                                    <input type="text" name="name" placeholder="Name*" class="half-radius">
                                    <input type="email" name="email" placeholder="Email*" class="half-radius">
                                    <textarea name="review" placeholder="Write a review"></textarea>
                                    <ul class="rating d-block">
                                        <li><i class="far fa-star"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                    <button type="submit" class="btn-default half-radius">Submit <span></span></button>
                                </form>
                            </div><!--widget-review end-->
                        </div><!--sidebar end-->
                    </div>
                </div>
            </div>
        </section>

       @include('front.footer')<!--footer end-->
        
    </div><!--wrapper end-->


    <script src="{{asset('front/js/jquery.min.js')}}"></script>
    <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('front/js/lib/slick/slick.js')}}"></script>
    <script src="{{asset('front/js/isotope.js')}}"></script>
    <script src="{{asset('front/js/scripts.js')}}"></script>

</body>
</html>