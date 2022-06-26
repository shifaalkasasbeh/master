<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from elanta.app/nazar/starbelly-demo/home-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Jun 2022 21:15:50 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- color of address bar in mobile browser -->
  <meta name="theme-color" content="#F5C332">
  <!-- favicon  -->
  <link rel="shortcut icon" href="{{asset('publicthem/img/ui/logo.ico')}}" type="image/x-icon">
  <!-- font awesome css -->
  <link rel="stylesheet" href="{{asset('publicthem/css/plugins/font-awesome.min.css')}}">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="{{asset('publicthem/css/plugins/bootstrap.min.css')}}">
  <!-- swiper css -->
  <link rel="stylesheet" href="{{asset('publicthem/css/plugins/swiper.min.css')}}">
  <!-- datepicker css -->
  <link rel="stylesheet" href="{{asset('publicthem/css/plugins/datepicker.css')}}">
  <!-- mapbox css -->
  <link href="{{asset('publicthem/css/plugins/mapbox-style.css')}}" rel='stylesheet'>
  <!-- fancybox css -->
  <link rel="stylesheet" href="{{asset('publicthem/css/plugins/fancybox.min.css')}}">
  <!-- starbelly css -->
  <link rel="stylesheet" href="{{asset('publicthem/style.css')}}">
  <!-- page title -->
  <title>Starbelly</title>
  <!-- CSS only -->

</head>

<body>
  <!-- app wrapper -->
  <div class="sb-app">
    <!-- preloader -->
    <div class="sb-preloader">
      <div class="sb-preloader-bg"></div>
      <div class="sb-preloader-body">
        <div class="sb-loading">
          <div class="sb-percent"><span class="sb-preloader-number" data-count="101">00</span><span>%</span></div>
        </div>
        <div class="sb-loading-bar">
          <div class="sb-bar"></div>
        </div>
      </div>
    </div>
    <!-- preloader end -->
    <!-- click effect -->
    <div class="sb-click-effect"></div>
    <!-- loader -->
    <div class="sb-load"></div>
    <!-- top bar -->
    <div class="sb-top-bar-frame">
      <div class="sb-top-bar-bg"></div>
      <div class="container">
        <div class="sb-top-bar">
          <a href="home-1.html" class="sb-logo-frame">
            <!-- logo img -->
            <img src="img/ui/logo.svg" alt="Starbelly">
          </a>
          <!-- menu -->
          <div class="sb-right-side">
            <nav id="sb-dynamic-menu" class="sb-menu-transition">
              <ul class="sb-navigation">
                <li class="sb-active sb-has-children">
                  <a href="/">Home</a>
                  <!-- <ul>
                    <li><a href="home-1.html">Type 1</a></li>
                    <li><a href="home-2.html">Type 2</a></li>
                  </ul> -->
                </li>
                <li class="sb-has-children">
                  <a href="about">about</a>
                  <!-- <ul>
                    <li><a href="about">About </a></li>
                     <li><a href="blog-1.html">Blog style 1</a></li>
                    <li><a href="blog-2.html">Blog style 2</a></li>
                    <li><a href="blog-3.html">Blog style 3</a></li>
                    <li><a href="publication-1.html">Publication 1</a></li>
                    <li><a href="publication-2.html">Publication 2</a></li>
                    <li><a href="publication-3.html">Publication 3</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="gallery-2.html">Gallery 2</a></li>
                    <li><a href="reviews.html">Reviews</a></li>
                    <li><a href="reservation.html">Reservation</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="404.html">404</a></li>
                  </ul> -->
                </li>
                <li class="sb-has-children">
                  <a href="menu-1.html">Menu</a>
                  <!-- <ul>
                    <li><a href="menu-1.html">Menu style 1</a></li>
                    <li><a href="menu-2.html">Menu style 2</a></li>
                    <li><a href="menu-3.html">Menu style 3</a></li>
                    <li><a href="menu-4.html">Menu style 4</a></li>
                    <li><a href="menu-5.html">Menu style 5</a></li>
                    <li><a href="menu-6.html">Menu style 6</a></li>
                  </ul> -->
                </li>
                <li class="sb-has-children">
                  <a href="">Shop</a>
                  <ul>
                    <li><a href="shop">Shop </a></li>
                    <!-- <li><a href="shop">Shop style 2</a></li> -->
                    <!-- <li><a href="shop-list-1.html">Shop list 1</a></li>
                    <li><a href="shop-list-2.html">Shop list 2</a></li> -->
                    <li><a href="product">Product page</a></li>
                    <li><a href="cart">Cart</a></li>
                    <li><a href="checkout">Checkout</a></li>
                  </ul>
                </li>
                <li>
                  <a href="contact">Contact</a>
                </li>
              </ul>
            </nav>
            <div class="sb-buttons-frame">
              <!-- button -->
              <div class="sb-btn sb-btn-2 sb-btn-gray sb-btn-icon sb-m-0 sb-btn-cart">
                <span class="sb-icon">
                  <img src="{{asset('publicthem/img/ui/icons/cart.svg')}}" alt="icon">
                </span>
                <i class="sb-cart-number">5</i>
              </div>
              <!-- button end -->
              <!-- menu btn -->
              <div class="sb-menu-btn"><span></span></div>
              <!-- info btn -->
              <div class="sb-info-btn"><span></span></div>
            </div>
          </div>
        </div>
      </div>
      <!-- info bar -->
      <div class="sb-info-bar">
        <div class="sb-infobar-content">
          <div class="sb-ib-title-frame sb-mb-30">
            <h4>Contact</h4><i class="fas fa-arrow-down"></i>
          </div>
          <ul class="sb-list sb-mb-30">
            <li><b>Address:</b><span>Montréal, 1510 Rue Sauvé</span></li>
            <li><b>Working hours:</b><span>09:00 - 23:00</span></li>
            <li><b>Phone:</b><span>+02 (044) 756-X6-52</span></li>
            <li><b>Email:</b><span>starbelly@mail.com</span></li>
          </ul>
          <div class="sb-ib-title-frame sb-mb-30">
            <h4>Instagram</h4><i class="fas fa-arrow-down"></i>
          </div>
          <ul class="sb-instagram sb-mb-30">
            <li><a href="#."><img src="img/instagram/1.jpg" alt="instagram"></a></li>
            <li><a href="#."><img src="img/instagram/2.jpg" alt="instagram"></a></li>
            <li><a href="#."><img src="img/instagram/3.jpg" alt="instagram"></a></li>
            <li><a href="#."><img src="img/instagram/4.jpg" alt="instagram"></a></li>
            <li><a href="#."><img src="img/instagram/5.jpg" alt="instagram"></a></li>
            <li><a href="#."><img src="img/instagram/6.jpg" alt="instagram"></a></li>
          </ul>
          <hr>
          <div class="sb-ib-title-frame sb-mb-30">
            <h4>Latest publications</h4><i class="fas fa-arrow-down"></i>
          </div>
          <a href="publication-1.html" class="sb-blog-card sb-blog-card-sm sb-mb-30">
            <div class="sb-cover-frame">
              <img src="img/blog/1.jpg" alt="cover">
            </div>
            <div class="sb-blog-card-descr">
              <h5 class="sb-mb-5">Simple Homemade Tomato Soup</h5>
              <p class="sb-text sb-text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero optio, sed expedita.</p>
            </div>
          </a>
          <a href="publication-1.html" class="sb-blog-card sb-blog-card-sm sb-mb-30">
            <div class="sb-cover-frame">
              <img src="img/blog/2.jpg" alt="cover">
            </div>
            <div class="sb-blog-card-descr">
              <h5 class="sb-mb-5">Thai Coconut Soup with Tofu and Rice</h5>
              <p class="sb-text sb-text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero optio, sed expedita.</p>
            </div>
          </a>
          <a href="publication-1.html" class="sb-blog-card sb-blog-card-sm sb-mb-30">
            <div class="sb-cover-frame">
              <img src="img/blog/3.jpg" alt="cover">
            </div>
            <div class="sb-blog-card-descr">
              <h5 class="sb-mb-5">21 Things You Should Absolutely Be Buying at ALDI</h5>
              <p class="sb-text sb-text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero optio, sed expedita.</p>
            </div>
          </a>
        </div>
        <div class="sb-info-bar-footer">
          <ul class="sb-social">
            <li><a href="#."><i class="fab fa-twitter"></i></a></li>
            <li><a href="#."><i class="fab fa-instagram"></i></a></li>
            <li><a href="#."><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#."><i class="fab fa-youtube"></i></a></li>
          </ul>
        </div>
      </div>
      <!-- info bar end -->
      <!-- minicart -->
      <div class="sb-minicart">
        <div class="sb-minicart-content">
          <div class="sb-ib-title-frame sb-mb-30">
            <h4>Your order, sir.</h4><i class="fas fa-arrow-down"></i>
          </div>
          <a href="product.html" class="sb-menu-item sb-menu-item-sm sb-mb-15">
            <div class="sb-cover-frame">
              <img src="img/menu/4.jpg" alt="product">
            </div>
            <div class="sb-card-tp">
              <h4 class="sb-card-title">Saumon Gravlax</h4>
              <div class="sb-price"><sub>$</sub> 9</div>
            </div>
          </a>
          <a href="product.html" class="sb-menu-item sb-menu-item-sm sb-mb-15">
            <div class="sb-cover-frame">
              <img src="img/menu/1.jpg" alt="product">
            </div>
            <div class="sb-card-tp">
              <h4 class="sb-card-title">Chevrefrit au miel</h4>
              <div class="sb-price"><sub>$</sub> 14</div>
            </div>
          </a>
          <a href="product.html" class="sb-menu-item sb-menu-item-sm sb-mb-15">
            <div class="sb-cover-frame">
              <img src="img/menu/2.jpg" alt="product">
            </div>
            <div class="sb-card-tp">
              <h4 class="sb-card-title">Croustillant de poisson</h4>
              <div class="sb-price"><sub>$</sub> 4</div>
            </div>
          </a>
          <a href="product.html" class="sb-menu-item sb-menu-item-sm sb-mb-15">
            <div class="sb-cover-frame">
              <img src="img/menu/3.jpg" alt="product">
            </div>
            <div class="sb-card-tp">
              <h4 class="sb-card-title">Stracciatella</h4>
              <div class="sb-price"><sub>$</sub> 11</div>
            </div>
          </a>
          <a href="product.html" class="sb-menu-item sb-menu-item-sm sb-mb-15">
            <div class="sb-cover-frame">
              <img src="img/menu/5.jpg" alt="product">
            </div>
            <div class="sb-card-tp">
              <h4 class="sb-card-title">Carpaccio de daurade</h4>
              <div class="sb-price"><sub>$</sub> 19</div>
            </div>
          </a>
        </div>
        <div class="sb-minicart-footer">
          <!-- button -->
          <a href="cart.html" class="sb-btn sb-btn-gray sb-btn-text">
            <span>View order</span>
          </a>
          <!-- button end -->
          <!-- button -->
          <a href="checkout.html" class="sb-btn sb-btn-text">
            <span>Checkout</span>
          </a>
          <!-- button end -->
        </div>
      </div>
      <!-- minicart end -->
    </div>
    <!-- top bar end -->

    <!-- dynamic content -->
    <div id="sb-dynamic-content" class="sb-transition-fade">

      <!-- banner -->
      <section class="sb-banner sb-banner-xs sb-banner-color">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <!-- main title -->
              <div class="sb-main-title-frame">
                <div class="sb-main-title">
                  <h1 class="sb-h2">About us</h1>
                  <ul class="sb-breadcrumbs">
                    <li><a href="home-1.html">Home</a></li>
                    <li><a href="#.">About us</a></li>
                  </ul>
                </div>
              </div>
              <!-- main title end -->
            </div>
          </div>
        </div>
      </section>
      <!-- banner end -->

      <!-- About text -->
      <section class="sb-about-text sb-p-90-0">
        <div class="sb-bg-2" style="margin-top: 90px">
          <div></div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="sb-illustration-2 sb-mb-90">
                <div class="sb-interior-frame">
                  <img src="img/gallery/2.jpg" alt="interior" class="sb-interior" style="object-position: center">
                </div>
                <div class="sb-square"></div>
                <div class="sb-cirkle-1"></div>
                <div class="sb-cirkle-2"></div>
                <div class="sb-cirkle-3"></div>
                <div class="sb-cirkle-4"></div>
                <div class="sb-experience">
                  <div class="sb-exp-content">
                    <p class="sb-h1 sb-mb-10">17</p>
                    <p class="sb-h3">Years Experiense</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 align-self-center sb-mb-60">
              <h2 class="sb-mb-60">We are doing more than <br>you expect</h2>
              <p class="sb-text sb-mb-30">Faudantium magnam error temporibus ipsam aliquid neque quibusdam dolorum, quia ea numquam assumenda mollitia dolorem impedit. Voluptate at quis exercitationem officia temporibus adipisci quae totam enim
                dolorum,
                assumenda. Sapiente soluta nostrum reprehenderit a velit obcaecati facilis vitae magnam tenetur
                neque vel itaque inventore eaque explicabo commodi maxime! Aliquam quasi, voluptates odio.</p>
              <p class="sb-text sb-mb-60">Consectetur adipisicing elit. Cupiditate nesciunt amet facilis numquam, nam adipisci qui voluptate voluptas enim obcaecati veritatis animi nulla, mollitia commodi quaerat ex, autem ea
                laborum.</p>
              <img src="img/ui/signature.png" alt="Signature" class="sb-signature sb-mb-30">
            </div>
          </div>
        </div>
      </section>
      <!-- About text end -->

      <!-- features -->
      <section class="sb-p-0-30">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div class="sb-features-item sb-mb-60">
                <div class="sb-number">01</div>
                <div class="sb-feature-text">
                  <h3 class="sb-mb-15">We are located in the city center</h3>
                  <p class="sb-text">Porro nemo veniam necessitatibus praesentium eligendi rem temporibus adipisci quo modi numquam.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="sb-features-item sb-mb-60">
                <div class="sb-number">02</div>
                <div class="sb-feature-text">
                  <h3 class="sb-mb-15">Fresh ingredients from organic farms</h3>
                  <p class="sb-text">Porro nemo veniam necessitatibus praesentium eligendi rem temporibus adipisci quo modi numquam.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="sb-features-item sb-mb-60">
                <div class="sb-number">03</div>
                <div class="sb-feature-text">
                  <h3 class="sb-mb-15">Own fast delivery. 30 min Maximum</h3>
                  <p class="sb-text">Porro nemo veniam necessitatibus praesentium eligendi rem temporibus adipisci quo modi numquam.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="sb-features-item sb-mb-60">
                <div class="sb-number">04</div>
                <div class="sb-feature-text">
                  <h3 class="sb-mb-15">Professional, experienced chefs</h3>
                  <p class="sb-text">Porro nemo veniam necessitatibus praesentium eligendi rem temporibus adipisci quo modi numquam.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="sb-features-item sb-mb-60">
                <div class="sb-number">05</div>
                <div class="sb-feature-text">
                  <h3 class="sb-mb-15">The highest standards of service</h3>
                  <p class="sb-text">Porro nemo veniam necessitatibus praesentium eligendi rem temporibus adipisci quo modi numquam.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- features end -->

      <!-- video -->
      <section class="sb-video">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="sb-mb-90">
                <span class="sb-suptitle sb-mb-15">Promo video</span>
                <h2 class="sb-mb-30">Restaurant is like a theater. <br>Our task is to amaze you!</h2>
                <p class="sb-text sb-mb-30">Repellat, dolorem a. Qui ipsam quos, obcaecati mollitia consectetur ad vero minus neque sit architecto totam distineserunt pariatur adipisci rem aspernatur illum ex!</p>
                <!-- button -->
                <a data-fancybox="" data-no-swup href="https://www.youtube.com/watch?v=F3zw1Gvn4Mk" class="sb-btn">
                  <span class="sb-icon">
                    <img src="img/ui/icons/play.svg" alt="icon">
                  </span>
                  <span>Promo video</span>
                </a>
                <!-- button end -->
              </div>
            </div>
            <div class="col-lg-6 align-self-center">
              <div class="sb-illustration-7 sb-mb-90">
                <div class="sb-interior-frame">
                  <img src="img/illustrations/interior-2.jpg" alt="interior" class="sb-interior">
                  <a data-fancybox="" data-no-swup href="https://www.youtube.com/watch?v=F3zw1Gvn4Mk" class="sb-video-play"><i class="fas fa-play"></i></a>
                </div>
                <div class="sb-cirkle-1"></div>
                <div class="sb-cirkle-2"></div>
                <div class="sb-cirkle-3"></div>
                <div class="sb-cirkle-4"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- video end -->

      <!-- team -->
      <section class="sb-team sb-p-0-60">
        <div class="sb-bg-2">
          <div></div>
        </div>
        <div class="container">
          <div class="sb-group-title sb-mb-30">
            <div class="sb-left sb-mb-30">
              <h2 class="sb-cate-title sb-mb-30">They will <span>cook</span> for you</h2>
              <p class="sb-text">Consectetur numquam poro nemo veniam<br>eligendi rem adipisci quo modi.</p>
            </div>
            <div class="sb-right sb-mb-30">
              <!-- button -->
              <a href="menu-1.html" class="sb-btn sb-m-0">
                <span class="sb-icon">
                  <img src="img/ui/icons/menu.svg" alt="icon">
                </span>
                <span>Open menu</span>
              </a>
              <!-- button end -->
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3">
              <div class="sb-team-member sb-mb-30">
                <div class="sb-photo-frame sb-mb-15">
                  <img src="img/team/1.png" alt="Team member">
                </div>
                <div class="sb-member-description">
                  <h4 class="sb-mb-10">Paul Trueman</h4>
                  <p class="sb-text sb-text-sm sb-mb-10">Chef</p>
                  <ul class="sb-social">
                    <li><a href="#."><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#."><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#."><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#."><i class="fab fa-youtube"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="sb-team-member sb-mb-30">
                <div class="sb-photo-frame sb-mb-15">
                  <img src="img/team/2.png" alt="Team member">
                </div>
                <div class="sb-member-description">
                  <h3 class="sb-mb-10">Emma Newman</h3>
                  <p class="sb-text sb-text-sm sb-mb-10">Assistant chef</p>
                  <ul class="sb-social">
                    <li><a href="#."><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#."><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#."><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#."><i class="fab fa-youtube"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="sb-team-member sb-mb-30">
                <div class="sb-photo-frame sb-mb-15">
                  <img src="img/team/3.png" alt="Team member">
                </div>
                <div class="sb-member-description">
                  <h3 class="sb-mb-10">Oscar Oldman</h3>
                  <p class="sb-text sb-text-sm sb-mb-10">Chef</p>
                  <ul class="sb-social">
                    <li><a href="#."><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#."><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#."><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#."><i class="fab fa-youtube"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="sb-team-member sb-mb-30">
                <div class="sb-photo-frame sb-mb-15">
                  <img src="img/team/4.png" alt="Team member">
                </div>
                <div class="sb-member-description">
                  <h3 class="sb-mb-10">Ed Freeman</h3>
                  <p class="sb-text sb-text-sm sb-mb-10">Assistant chef</p>
                  <ul class="sb-social">
                    <li><a href="#."><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#."><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#."><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#."><i class="fab fa-youtube"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- team end -->




      </div>
    <!-- dynamic content end -->

  </div>
  <!-- app wrapper end -->

  <!-- jquery js -->
  <script src="publicthem/js/plugins/jquery.min.js"></script>
  <!-- smooth scroll js -->
  <script src="publicthem/js/plugins/smooth-scroll.js"></script>
  <!-- swup js -->
  <script src="publicthem/js/plugins/swup.min.js"></script>
  <!-- swiper js -->
  <script src="publicthem/js/plugins/swiper.min.js"></script>
  <!-- datepicker js -->
  <script src="publicthem/js/plugins/datepicker.js"></script>
  <!-- isotope js -->
  <script src="publicthem/js/plugins/isotope.js"></script>
  <!-- sticky -->
  <script src="publicthem/js/plugins/sticky.js"></script>
  <!-- mapbox js -->
  <script src="publicthem/js/plugins/mapbox.min.js"></script>
  <!-- fancybox js -->
  <script src="publicthem/js/plugins/fancybox.min.js"></script>
  <!-- starbelly js -->
  <script src="publicthem/main.js"></script>
<!-- JavaScript Bundle with Popper -->

</body>


<!-- Mirrored from elanta.app/nazar/starbelly-demo/about-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Jun 2022 21:16:17 GMT -->
</html>