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
            <h4>Your order.</h4><i class="fas fa-arrow-down"></i>
          </div>
          <a href="shop-list-1.html" class="sb-menu-item sb-menu-item-sm sb-mb-15">
            <div class="sb-cover-frame">
              <img src="img/menu/4.jpg" alt="product">
            </div>
            <div class="sb-card-tp">
              <h4 class="sb-card-title">Saumon Gravlax</h4>
              <div class="sb-price"><sub>$</sub> 9</div>
            </div>
          </a>
          <a href="shop-list-1.html" class="sb-menu-item sb-menu-item-sm sb-mb-15">
            <div class="sb-cover-frame">
              <img src="img/menu/1.jpg" alt="product">
            </div>
            <div class="sb-card-tp">
              <h4 class="sb-card-title">Chevrefrit au miel</h4>
              <div class="sb-price"><sub>$</sub> 14</div>
            </div>
          </a>
          <a href="shop-list-1.html" class="sb-menu-item sb-menu-item-sm sb-mb-15">
            <div class="sb-cover-frame">
              <img src="img/menu/2.jpg" alt="product">
            </div>
            <div class="sb-card-tp">
              <h4 class="sb-card-title">Croustillant de poisson</h4>
              <div class="sb-price"><sub>$</sub> 4</div>
            </div>
          </a>
          <a href="shop-list-1.html" class="sb-menu-item sb-menu-item-sm sb-mb-15">
            <div class="sb-cover-frame">
              <img src="img/menu/3.jpg" alt="product">
            </div>
            <div class="sb-card-tp">
              <h4 class="sb-card-title">Stracciatella</h4>
              <div class="sb-price"><sub>$</sub> 11</div>
            </div>
          </a>
          <a href="shop-list-1.html" class="sb-menu-item sb-menu-item-sm sb-mb-15">
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
                  <h1 class="sb-h2">Online shop</h1>
                  <ul class="sb-breadcrumbs">
                    <li><a href="home-1.html">Home</a></li>
                    <li><a href="shop-1.html">Shop</a></li>
                    <li><a href="#.">Product</a></li>
                  </ul>
                </div>
              </div>
              <!-- main title end -->
            </div>
          </div>
        </div>
      </section>
      <!-- banner end -->

      <!-- product -->
      <section class="sb-p-90-0">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="sb-gallery-item sb-gallery-square sb-mb-90">
                <img src="img/menu/4.jpg" alt="photo">
                <div class="sb-badge sb-vegan"><i class="fas fa-leaf"></i> Vegan</div>
                <!-- button -->
                <a data-fancybox="menu" data-no-swup href="img/menu/4.jpg" class="sb-btn sb-btn-2 sb-btn-icon sb-btn-gray sb-zoom">
                  <span class="sb-icon">
                    <img src="img/ui/icons/zoom.svg" alt="icon">
                  </span>
                </a>
                <!-- button end -->
              </div>
            </div>
            <div class="col-lg-6">
              <div class="sb-product-description sb-mb-90">
                <div class="sb-price-frame sb-mb-30">
                  <h3>Saumon Gravlax</h3>
                  <div class="sb-price"><sub>$</sub> 19</div>
                </div>
                <ul class="sb-stars sb-mb-25">
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                  <li><i class="fas fa-star"></i></li>
                  <li><span>(4 ratings)</span></li>
                </ul>
                <p class="sb-text sb-mb-30"><span>tomatoes</span>, <span>nori</span>, <span>feta cheese</span>, <span>mushrooms</span>, <span>rice noodles</span>, <span>corn</span>, <span>shrimp</span>.</p>
                <div class="row">
                  <div class="col-lg-4">
                    <div class="sb-features-item sb-features-item-sm sb-mb-30">
                      <div class="sb-number">01</div>
                      <div class="sb-feature-text">
                        <h4 class="sb-mb-15">Add to the cart and place an order</h4>
                        <p class="sb-text sb-text-sm">Porro comirton pera nemo veniam</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="sb-features-item sb-features-item-sm sb-mb-30">
                      <div class="sb-number">02</div>
                      <div class="sb-feature-text">
                        <h4 class="sb-mb-15">Enter your phone number and address</h4>
                        <p class="sb-text sb-text-sm">Eligendi adipisci numquam.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="sb-features-item sb-features-item-sm sb-mb-30">
                      <div class="sb-number">03</div>
                      <div class="sb-feature-text">
                        <h4 class="sb-mb-15">Enjoy your favorite food at home!</h4>
                        <p class="sb-text sb-text-sm">Nnecessitatibus praesentium</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="sb-buttons-frame">
                  <div class="sb-input-number-frame">
                    <div class="sb-input-number-btn sb-sub">-</div>
                    <input type="number" value="1" min="1" max="10">
                    <div class="sb-input-number-btn sb-add">+</div>
                  </div>
                  <!-- button -->
                  <a href="#." class="sb-btn sb-atc">
                    <span class="sb-icon">
                      <img src="img/ui/icons/cart.svg" alt="icon">
                    </span>
                    <span class="sb-add-to-cart-text">Add to cart</span>
                    <span class="sb-added-text">Added</span>
                  </a>
                  <!-- button end -->
                </div>
              </div>
            </div>
          </div>
          <!-- filter -->
          <div class="sb-filter">
            <a href="#." data-filter=".sb-ingredients-tab" class="sb-filter-link sb-active">Ingredients</a>
            <a href="#." data-filter=".sb-details-tab" class="sb-filter-link">Product details</a>
            <a href="#." data-filter=".sb-reviews-tab" class="sb-filter-link">Reviews</a>
          </div>
          <!-- filter end -->
          <div class="sb-masonry-grid sb-tabs">
            <div class="sb-grid-sizer"></div>
            <div class="sb-grid-item sb-ingredients-tab">
              <div class="sb-tab">
                <ul class="sb-list">
                  <li><b>Numquam</b><span>1 pack</span></li>
                  <li><b>Cupiditate</b><span>150g</span></li>
                  <li><b>Adipisicing</b><span>500g</span></li>
                  <li><b>Dolorem obcaecati</b><span>3 Teaspoon</span></li>
                  <li><b>Porro</b><span>2 pack</span></li>
                  <li><b>Facilis</b><span>1kg</span></li>
                  <li><b>Goluptatem</b><span>1 Teaspoon</span></li>
                  <li><b>Vel fuga</b><span>300g</span></li>
                </ul>
              </div>
            </div>
            <div class="sb-grid-item sb-details-tab" style="position: absolute">
              <div class="sb-tab">
                <p class="sb-text sb-mb-15">Facilis ratione veritatis asperiores doloremque molestiae delectus iure officia earum dolores sit fugiat, repellendus, neque laboriosam optio culpa quibusdam, magnam totam quos. Mollitia dolorem, culpa,
                  dignissimos
                  quas et voluptates architecto in sit totam, quae animi ratione adipisci nulla ab quasi perferendis quo pariatur dolor magnam inventore. Sequi nisi ex excepturi non harum, asperiores laboriosam ipsum voluptate doloribus incidunt nam
                  eveniet similique unde esse voluptatem minus necessitatibus eaque temporibus quaerat accusantium amet deserunt. Iste, facilis? Illo tenetur, libero, non dicta asperiores quisquam voluptas natus aperiam, at perspiciatis repellat
                  voluptate. Autem non reprehenderit, perferendis.</p>
                <div class="sb-text">Consectetur adipisicing elit. Delectus quibusdam repellendus nesciunt cumque fugit numquam adipisci voluptatum quam, sapiente doloribus ut eaque natus laudantium alias illum quos maiores, quia perferendis.</div>
              </div>
            </div>
            <div class="sb-grid-item sb-reviews-tab" style="position: absolute">
              <div class="sb-tab">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="sb-review-card sb-mb-60">
                      <div class="sb-review-header sb-mb-15">
                        <h4 class="sb-mb-10">Very tasty</h4>
                        <ul class="sb-stars">
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                        </ul>
                      </div>
                      <p class="sb-text sb-mb-15">Inventore possimus laudantium provident, rem eligendi velit. Aut molestias, ipsa itaque laborum, natus
                        tempora, ut soluta animi ducimus dignissimos deserunt doloribus in reprehenderit rem accusamus! Quibusdam labore, aliquam dolor harum!</p>
                      <div class="sb-author-frame">
                        <div class="sb-avatar-frame">
                          <img src="img/faces/1.jpg" alt="Guest">
                        </div>
                        <h4>Emma Newman</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="sb-review-card sb-mb-60">
                      <div class="sb-review-header sb-mb-15">
                        <h4 class="sb-mb-10">I have lunch here every day</h4>
                        <ul class="sb-stars">
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                          <li><i class="fas fa-star"></i></li>
                        </ul>
                      </div>
                      <p class="sb-text sb-mb-15">Tempora ut soluta animi ducimus dignissimos deserunt doloribus in reprehenderit Reprehenderit rem accusamus! Quibusdam labore, aliquam dolor harum!</p>
                      <div class="sb-author-frame">
                        <div class="sb-avatar-frame">
                          <img src="img/faces/2.jpg" alt="Guest">
                        </div>
                        <h4>Paul Trueman</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- product end -->


      <!-- footer -->
      <footer>
        <div class="container">
          <div class="sb-footer-frame">
            <a href="home-1.html" class="sb-logo-frame">
              <!-- logo img -->
              <img src="img/ui/logo.svg" alt="Starbelly">
            </a>
            <ul class="sb-social">
              <li><a href="#."><i class="fab fa-twitter"></i></a></li>
              <li><a href="#."><i class="fab fa-instagram"></i></a></li>
              <li><a href="#."><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#."><i class="fab fa-youtube"></i></a></li>
            </ul>
            <div class="sb-copy">&copy; late 2021 Starbelly. All Rights Reserved.</div>
          </div>
        </div>
      </footer>
      <!-- footer end -->
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
