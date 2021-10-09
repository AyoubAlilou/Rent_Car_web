<?php session_start();?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>LUXURY RENT</title>
  <!-- site favicon -->
  <link rel="shortcut icon" type="image/png" href="assets/images/favicon.jpg"/>
  <!-- fontawesome css link -->
  <link rel="stylesheet" href="assets/css/fontawesome.min.css">
  <!-- bootstrap css link -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- lightcase css link -->
  <link rel="stylesheet" href="assets/css/lightcase.css">
  <!-- animate css link -->
  <link rel="stylesheet" href="assets/css/animate.css">
  <!-- nice select css link -->
  <link rel="stylesheet" href="assets/css/nice-select.css">
  <!-- datepicker css link -->
  <link rel="stylesheet" href="assets/css/datepicker.min.css">
  <!-- wickedpicker css link -->
  <link rel="stylesheet" href="assets/css/wickedpicker.min.css">
  <!-- jquery ui css link -->
  <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
  <!-- owl carousel css link -->
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <!-- main style css link -->
  <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

  <!-- preloader start -->
  <div id="preloader"></div>
  <!-- preloader end -->

  <!--  header-section start  -->
  <header class="header-section">
    <div class="header-top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-3">
            <ul class="social-links">
              <li><a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#0"><i class="fa fa-twitter"></i></a></li>


            </ul>
          </div>
          <div class="col-lg-6">
            <ul class="header-info d-flex justify-content-center">
              <li>
                <i class="fa fa-map-marker"></i>
                <p>Tunis, El menzah 1, 1004 </p>
              </li>
              <li>
                <i class="fa fa-clock-o"></i>
                <p>Monday-Saturday 8:00am-3:00pm  </p>
              </li>
                <li>
                    <a href="modifierUser.php">Change password  </a>
                </li>
            </ul>
            </ul>
          </div>
          <div class="col-lg-3">
            <div class="header-action d-flex align-items-center justify-content-end">


                <div class="login-reg">
                    <?php if ($_SESSION['id']==null){
                        echo " <a href='registration.html'>Sign Up</a>
                <a href='login.html'>Sign in</a>";}
                    else{
                        echo " <a href='login.html'>Disconnection</a>";
                    }
                    ?>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-bottom">
      <div class="container">
        <nav class="navbar navbar-expand-lg p-0">
          <a class="site-logo site-title" href="index.php"><img src="assets/images/luxury2.png" class="logo" alt="site-logo"><span class="logo-icon"><i class="flaticon-fire"></i></span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="menu-toggle"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav main-menu mr-auto">
              <li ><a href="index.php">Home</a>   </li>
              <li ><a href="car-list.php">List cars</a>   </li>
              <li><a href="contact.html">contact us</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </div><!-- header-bottom end -->
  </header>
  <!--  header-section end  -->

  <!-- banner-section start  -->
  <section class="banner-section bg_img" data-background="assets/images/banner-bg.jpg">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-7">
          <div class="banner-content">
            <h1 class="title">LUXURY RENT </h1>
            <p>Welcome to Luxury Rent . your best luxury car rental service in tunisia,  Rent a car online now from your home.Take advantage of our large vehicle rental selection and make your booking online instantly. With all the best offers and deals on car rental on the website right now,Luxury Rent is the best place to book your car hire. Start your booking process using the reservation system below or check out latest car rental offers.</p>
            <a href="car-list.php" class="cmn-btn">see all vehicles</a>
          </div>
        </div>
        <div class="col-md-5">
          <div class="banner-img">
            <img src="assets/images/elements/porshe.png" alt="image">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- banner-section end  -->

  <!-- search-section start -->

  <!-- search-section end -->

  <!-- features-section start -->
  <section class="features-section pb-120">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section-header text-center">
            <h2 class="section-title">our awsome features</h2>
<!--            <p> Augue urna molestie mi adipiscing vulputate pede sedmassa  Praesquam massa, sodales velit turpis in tellu.</p>-->
          </div>
        </div>
      </div>
      <div class="row mb-none-30">
        <div class="col-lg-4 col-sm-6">
          <div class="icon-item text-center">
            <div class="icon"><i class="fa fa-user"></i></div>
            <div class="content">
              <h4 class="title">expert drivers</h4>
              <p> </p>
            </div>
          </div>
        </div><!-- icon-item end -->
        <div class="col-lg-4 col-sm-6">
          <div class="icon-item text-center">
            <div class="icon"><i class="fa fa-rocket"></i></div>
            <div class="content">
              <h4 class="title">fast services</h4>
              <p></p>
            </div>
          </div>
        </div><!-- icon-item end -->





        <div class="col-lg-4 col-sm-6">
          <div class="icon-item text-center">
            <div class="icon"><i class="fa fa-volume-control-phone"></i></div>
            <div class="content">
              <h4 class="title">customer support</h4>
              <p></p>
            </div>
          </div>
        </div><!-- icon-item end -->
      </div>
    </div>
  </section>

  <h2 class="section-title" style="text-align:center">Our cars</h2><br>
  <table>
    <tr>
        <img src="assets/images/money-method/bmw.png"   style="height:180px ; margin-left: 25px" alt="">
    </tr>

  <tr>
    <img src="assets/images/money-method/mercedes.png"   style="height:180px;margin-left:20px" alt="">
  </tr>

  <tr>
      <img src="assets/images/money-method/bently.png"   style="height:180px" alt="">
  </tr>

<tr>
  <img src="assets/images/money-method/porshe.png"   style="height:180px" alt="">
</tr>

<tr>
    <img src="assets/images/money-method/audi.png"   style="height:180px" alt="">
</tr>

<tr>
    <img src="assets/images/money-method/maserati.png"   style="height:140px;margin-top:50px" alt="">
</tr>


<tr>
    <img src="assets/images/money-method/chrysler.png"   style="height:140px;margin-top:80px; margin-left:30px" alt="">
</tr>



</table>
  <section class="choose-car-section pt-120 pb-120 section-bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section-header text-center">
            <h2 class="section-title">choose awsome rental car</h2>
            <p> Augue urna molestie mi adipiscing vulputate pede sedmassa  Praesquam massa, sodales velit turpis in tellu.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="choose-car-slider owl-carousel">
            <div class="car-item">
              <div class="thumb">
                <img src="Stellar-master/php/photos/bmw.png" alt="image">
              </div>
              <div class="car-item-body">
                <div class="content">
                  <h4 class="title">mistubisshi</h4>
                  <span class="price">start form $20 per day</span>
                  <p>Aliquam sollicitudin dolores tristiquvel ornare, vitae aenean.</p>
                  <a href="#0" class="cmn-btn">rent car</a>
                </div>
                <div class="car-item-meta">
                  <ul class="details-list">
                    <li><i class="fa fa-car"></i>model 2014ib</li>
                    <li><i class="fa fa-tachometer"></i>32000 KM</li>
                    <li><i class="fa fa-sliders"></i>auto</li>
                  </ul>
                </div>
              </div>
            </div><!-- car-item end -->
            <div class="car-item">
              <div class="thumb">
                <img src="Stellar-master/php/photos/car1.jpg" alt="image">
              </div>
              <div class="car-item-body">
                <div class="content">
                  <h4 class="title">forester subar</h4>
                  <span class="price">start form $20 per day</span>
                  <p>Aliquam sollicitudin dolores tristiquvel ornare, vitae aenean.</p>
                  <a href="#0" class="cmn-btn">rent car</a>
                </div>
                <div class="car-item-meta">
                  <ul class="details-list">
                    <li><i class="fa fa-car"></i>model 2014ib</li>
                    <li><i class="fa fa-tachometer"></i>32000 KM</li>
                    <li><i class="fa fa-sliders"></i>auto</li>
                  </ul>
                </div>
              </div>
            </div><!-- car-item end -->
            <div class="car-item">
              <div class="thumb">
                <img src="Stellar-master/php/photos/téléchargement.jpg" alt="image">
              </div>
              <div class="car-item-body">
                <div class="content">
                  <h4 class="title">subaru liberty</h4>
                  <span class="price">start form $20 per day</span>
                  <p>Aliquam sollicitudin dolores tristiquvel ornare, vitae aenean.</p>
                  <a href="#0" class="cmn-btn">rent car</a>
                </div>
                <div class="car-item-meta">
                  <ul class="details-list">
                    <li><i class="fa fa-car"></i>model 2014ib</li>
                    <li><i class="fa fa-tachometer"></i>32000 KM</li>
                    <li><i class="fa fa-sliders"></i>auto</li>
                  </ul>
                </div>
              </div>
            </div><!-- car-item end -->
            <div class="car-item">
              <div class="thumb">
                <img src="assets/images/cars/1.jpg" alt="image">
              </div>
              <div class="car-item-body">
                <div class="content">
                  <h4 class="title">mistubisshi</h4>
                  <span class="price">start form $20 per day</span>
                  <p>Aliquam sollicitudin dolores tristiquvel ornare, vitae aenean.</p>
                  <a href="#0" class="cmn-btn">rent car</a>
                </div>
                <div class="car-item-meta">
                  <ul class="details-list">
                    <li><i class="fa fa-car"></i>model 2014ib</li>
                    <li><i class="fa fa-tachometer"></i>32000 KM</li>
                    <li><i class="fa fa-sliders"></i>auto</li>
                  </ul>
                </div>
              </div>
            </div><!-- car-item end -->
            <div class="car-item">
              <div class="thumb">
                <img src="assets/images/cars/2.jpg" alt="image">
              </div>
              <div class="car-item-body">
                <div class="content">
                  <h4 class="title">forester subar</h4>
                  <span class="price">start form $20 per day</span>
                  <p>Aliquam sollicitudin dolores tristiquvel ornare, vitae aenean.</p>
                  <a href="#0" class="cmn-btn">rent car</a>
                </div>
                <div class="car-item-meta">
                  <ul class="details-list">
                    <li><i class="fa fa-car"></i>model 2014ib</li>
                    <li><i class="fa fa-tachometer"></i>32000 KM</li>
                    <li><i class="fa fa-sliders"></i>auto</li>
                  </ul>
                </div>
              </div>
            </div><!-- car-item end -->
          </div>
        </div>
        <div class="col-lg-4">

        </div>
      </div>
    </div>
  </section>
  <section class="blog-section pt-120 pb-120">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section-header text-center">
            <h2 class="section-title">latest news & tips</h2>
            <p> </p>
          </div>
        </div>
      </div>
      <div class="row mb-none-30">
        <div class="col-lg-6">
          <div class="post-item post-item--grid">
            <div class="thumb bg_img" data-background="assets/images/blog/bmw.jpg">
              <ul class="post-meta d-flex">
                <li><a href="#0">13 april 2021</a></li>
              </ul>
            </div>
            <div class="content">
              <h5 class="post-title"> THE 4 2021 BMW 4 SERIES COUPE </h5>
              <p>Modern aesthetics, BMW engineering, and exceptional technology capture the essence of sportiness in the All-New 4 Series Coupe.<br><strong>available NOW !!! on Luxury Rent</strong></p>
              <a href="https://www.bmwusa.com/vehicles/4-series/coupe/overview.html" class="text-btn">read more</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="post-item post-item--grid">
            <div class="thumb bg_img" data-background="assets/images/blog/bently.jpg">
              <ul class="post-meta d-flex">
                <li><a href="#0">14 avril 2021  </a></li>
              </ul>
            </div>
            <div class="content">
              <h5 class="post-title">Bentley Continental GT Speed Convertible revealed</h5>
              <p>Convertible version of Bentley Continental GT Speed breaks cover with W12 producing 650bhp</p>
              <p><strong>SOON !!</strong></p><br>
              <a href="https://www.autocar.co.uk/car-news/new-cars/bentley-continental-gt-speed-convertible-revealed" class="text-btn">read more</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="post-item post-item--grid">
            <div class="thumb bg_img" data-background="assets/images/blog/jaguar.jpg">
              <ul class="post-meta d-flex">
                <li><a href="https://www.autocar.co.uk/car-news?page=2">12 avril 2021</a></li>

              </ul>
            </div>
            <div class="content">
              <h5 class="post-title"><a href="#0">New Jaguar F-Type R-Dynamic Black brings bespoke design</a></h5>
              <p>Visual tweaks and extensive standard equipment for coupé and convertible sports car</p>
              <a href="https://www.autocar.co.uk/car-news?page=2" class="text-btn">read more</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="post-item post-item--grid">
            <div class="thumb bg_img" data-background="assets/images/blog/c5.jpg">
              <ul class="post-meta d-flex">
                <li><a href="#0">12 avril 2021</a></li>

              </ul>
            </div>
            <div class="content">
              <h5 class="post-title">New 2021 Citroen C5X revealed as luxury range-topper</h5>
              <p>Segment-straddling flagship combines SUV, estate and saloon styles and will offer PHEV power from launch</p>
              <a href="https://www.autocar.co.uk/car-news/new-cars/new-2021-citroen-c5x-revealed-luxury-range-topper" class="text-btn">read more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="footer-section">

        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
       <div class="row justify-content-between">
         <div class="col-sm-6">-->
           <p class="copy-right-text"><a href="templateshub.net"></a></p>
          </div>-->
         <div class="col-sm-6">

        <div class="col-lg-4 col-sm-8">
          <div class="footer-widget widget-address">
            <h4 class="widget-title">contact with us</h4>
            <ul>
              <li>
                <i class="fa fa-map-marker"></i>
                <span>Tunis, El menzah 1, 1004</span>
              </li>
              <li>
                <i class="fa fa-envelope"></i>
                <span>www.luxurycars@gmail.com  www.luxurycars.com</span>
              </li>
              <li>
                <i class="fa fa-phone-square"></i>
                <span>71216548</span>
              </li>
            </ul>
          </div>
        </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer-section end -->


  <!-- scroll-to-top start -->
  <div class="scroll-to-top">
    <span class="scroll-icon">
      <i class="fa fa-rocket"></i>
    </span>
  </div>
  <!-- scroll-to-top end -->

  <!-- jquery js link -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <!-- jquery migrate js link -->
  <script src="assets/js/jquery-migrate-3.0.0.js"></script>
  <!-- bootstrap js link -->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- lightcase js link -->
  <script src="assets/js/lightcase.js"></script>
  <!-- wow js link -->
  <script src="assets/js/wow.min.js"></script>
  <!-- nice select js link -->
  <script src="assets/js/jquery.nice-select.min.js"></script>
  <!-- datepicker js link -->
  <script src="assets/js/datepicker.min.js"></script>
  <script src="assets/js/datepicker.en.js"></script>
  <!-- wickedpicker js link -->
  <script src="assets/js/wickedpicker.min.js"></script>
  <!-- owl carousel js link -->
  <script src="assets/js/owl.carousel.min.js"></script>
  <!-- jquery ui js link -->
  <script src="assets/js/jquery-ui.min.js"></script>
  <!-- main js link -->
  <script src="assets/js/main.js"></script>
</body>

</html>
