
    <header>
            <div class="container-fluid">
                <div class="header-content d-flex flex-wrap align-items-center">
                    <div class="logo">
                        <a href="index.html" title="">
                            <img src="{{asset('front/images/logo.png')}}" alt="">
                        </a>
                    </div><!--logo end-->
                    <nav>
                        <ul>
                            <li><a href="/" title="">Accueil</a></li>
                            <li><a href="/APropos" title="">A Propos</a></li>
                            <li><a href="#" title="">Restaurants</a>
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
                            <li><a href="/faqs" title="">Faqs</a>                              
                            </li>
                            <li><a href="#" title="">Mon Profil</a>                              
                            </li>
                            <li><a class="active" href="/contact" title="">Contact</a></li>
                        </ul>
                    </nav><!--navigation end-->
                    <div class="menu-btn">
                        <span class="bar1"></span>
                        <span class="bar2"></span>
                        <span class="bar3"></span>
                    </div><!--menu-bar end-->
                    <ul class="oth-lnks ml-auto">
                        <li><img src="{{asset('front/images/icons/phone.svg')}}" alt="">+216 5453225</li>
                        <li><a href="/mon-panier" title="" class="cart-ico"><img src="{{asset('front/images/icons/cart.svg')}}" alt=""></a><span class="cart-item-num">{{Cart::count()}}</span></li>
                        <li><a href="/loginC" title="" class="cart-ico">Sign in <img src="{{asset('front/images/icons/sign-in.svg')}}" alt=""></a></li>
                    </ul>
                    <!--oth-lnks end-->
                </div><!--header-content end-->
                <div class="search-bar">
                    <div class="container">
                        <form>
                            <input type="text" name="search" placeholder="Search">
                        </form>
                    </div>    
                </div><!--search-bar end-->
            </div>
        </header><!--header end-->
        
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