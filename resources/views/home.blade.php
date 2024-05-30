<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>PerFinAd</title>

    
    <!-- Bootstrap core CSS -->
    <link href="js-files/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/random.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/form.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>


  </head>
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->

      <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                      <img src="assets/images/logo3.png" alt="" style="width: 220px; height: 80px;">
                  </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="index.html" class="active">Home</a></li>
                        <li><a href="/about">About Us</a></li>
                        <li><a href="/service">Services</a></li>
                        <li><a href="author.html">Our Team</a></li>
                        <li><a href="{{url('shop')}}">Shop</a></li>

                        <li><a href="create.html">Contact Us</a></li>
                        <li>      @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><p id="qq">Hi, {{Auth::user()->name}}</p></a>
                    @else
                        <!-- <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Login</a> -->

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Login/Register</a>
                        @endif
                    @endauth
                </div>
            @endif</li>


                        <!-- <li><a href="create.html">Login</a></li> -->
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

   <!-- ***** Main Banner Area Start ***** -->
   <div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="header-text">
            <h6>Your Personal Financial Advisory</h6>
            <h2>Maximize your wealth  Minimize Your Stress</h2>
            <p>Welcome to Perfinad, your personalized financial advisor. 
              Navigate your journey to financial success with expert guidance and tailored solutions. Your financial future starts here.</p>
            <div class="buttons">
              <div class="border-button">
                <a href="explore.html">Explore More</a>
              </div>
              <div class="main-button">
                <a href="https://youtube.com/templatemo" target="_blank">Watch Our Videos</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="owl-banner owl-carousel">
            <div class="item">
              <img src="assets/images/ban-1.png" alt="">
            </div>
            <div class="item">
              <img src="assets/images/ban-2.png" alt="">
            </div>
            <div class="item">
              <img src="assets/images/ban-3.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- ***** Main Banner Area End ***** -->
  
  <div class="categories-collections">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="categories">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <div class="line-dec"></div>
                  <h2>Browse Through Our <em>Services</em> Here.</h2>
                </div>
              </div>
              <div class="col-lg-2 col-sm-6">
                <div class="item">
                  <div class="icon">
                    <img src="assets/images/icon-2.png" alt="">
                  </div>
                  <h4>Accounting <br> Servives</h4>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-sm-6">
                <div class="item">
                  <div class="icon">
                    <img src="assets/images/icon-3.png" alt="">
                  </div>
                  <h4>Audit <br> Servives</h4>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-sm-6">
                <div class="item">
                  <div class="icon">
                    <img src="assets/images/icon-4.png" alt="">
                  </div>
                  <h4>Tax <br> Servives</h4>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-sm-6">
                <div class="item">
                  <div class="icon">
                    <img src="assets/images/icon-5.png" alt="">
                  </div>
                  <h4>Risk<br> Management</h4>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-sm-6">
                <div class="item">
                  <div class="icon">
                    <img src="assets/images/icon-6.png" alt="">
                  </div>
                  <h4>Retirement <br> Planing</h4>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-sm-6">
                <div class="item">
                  <div class="icon">
                    <img src="assets/images/icon-7.png" alt="">
                  </div>
                  <h4>Debt <br> Management</h4>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="collections">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <div class="line-dec"></div>
                  
                  <h2>  Perfinad's Success<em> Snapshots:</em> Hottest Market Triumphs!</h2>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="owl-collection owl-carousel">
                  <div class="item">
                    <img src="assets/images/storie-1.png" alt="">
                    <div class="down-content">
                      <h4><b>Sarah Samuel</b></h4>
                      <!-- <span class="collection">Items In Collection:<br><strong>310/340</strong></span>
                      <span class="category">Category:<br><strong>Digital Crypto</strong></span> -->
                      <h4>"Perfinad made my dream home a reality by turning my debt into savings!" - Sarah</h4>
                      <div class="main-button">
                        <a href="explore.html">Contact Her</a>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <img src="assets/images/storie-2.png" alt="">
                    <div class="down-content">
                      <h4><b>Elton Perera</b></h4>
                      <!-- <span class="collection">Items In Collection:<br><strong>324/324</strong></span>
                      <span class="category">Category:<br><strong>Visual Art</strong></span> -->
                      <h4>"Perfinad's guidance allowed me to retire early and live the life I dreamt of." - Perera</h4>
                      <div class="main-button">
                        <a href="explore.html">Contact Him</a>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <img src="assets/images/storie-3.png" alt="">
                    <div class="down-content">
                      <h4><b>Emil Fernando</b></h4>
                      <!-- <span class="collection">Items In Collection:<br><strong>380/394</strong></span>
                      <span class="category">Category:<br><strong>Music Art</strong></span> -->
                      <h4>"Perfinad's plans brought financial freedom and dream getaways!" - Emil</h4>
                      <div class="main-button">
                      <a href="explore.html">Contact Him</a>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <img src="assets/images/storie-4.png" alt="">
                    <div class="down-content">
                      <h4><b>Janaka De Soyza</b></h4>
                      <!-- <span class="collection">Items In Collection:<br><strong>426/468</strong></span>
                      <span class="category">Category:<br><strong>Blockchain</strong></span> -->
                      <h4>"Perfinad transformed my modest investments into a path to financial freedom." - Janaka</h4>
                      <div class="main-button">
                      <a href="explore.html">Contact Him</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- <div class="create-nft">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2>Create Your NFT & Put It On The Market.</h2>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="main-button">
            <a href="create.html">Create Your NFT Now</a>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item first-item">
            <div class="number">
              <h6>1</h6>
            </div>
            <div class="icon">
              <img src="assets/images/icon-02.png" alt="">
            </div>
            <h4>Set Up Your Wallet</h4>
            <p>NFT means Non-Fungible Token that are used in digital cryptocurrency markets. There are many different kinds of NFTs in the industry.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item second-item">
            <div class="number">
              <h6>2</h6>
            </div>
            <div class="icon">
              <img src="assets/images/icon-04.png" alt="">
            </div>
            <h4>Add Your Digital NFT</h4>
            <p>There are 5 different HTML pages included in this NFT <a href="https://templatemo.com/page/1" target="_blank" rel="nofollow">website template</a>. You can edit or modify any section on any page as you required.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item">
            <div class="icon">
              <img src="assets/images/icon-06.png" alt="">
            </div>
            <h4>Sell Your NFT &amp; Make Profit</h4>
            <p>If you would like to support our TemplateMo website, please visit <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">our contact page</a> to make a PayPal contribution. Thank you.</p>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <div class="currently-market">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2><em>Meet</em> Our professionals</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="filters">
            <ul>
              <li data-filter="*"  class="active">All</li>
              <li data-filter=".msc">Accounting</li>
              <li data-filter=".dig">Tax and Auditing</li>
              <li data-filter=".blc">Risk </li>
              <li data-filter=".vtr">Retirement and Debt</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="row grid">
            <div class="col-lg-6 currently-market-item all msc">
              <div class="item">
                <div class="left-image">
                  <img src="assets/images/profile-02.png" alt="" style="border-radius: 20px; min-width: 195px;">
                  <br> <br> <br> <h5>Accounting</h5>
                </div>
                <div class="right-content">
                  <h4>Brayan Weerakoon</h4>
                  <span class="author">
                    <img src="assets/images/logo5.png" alt="" style="max-width: 50px; border-radius: 50%;">
                    <!-- <h6>Liberty Artist<br><a href="#">@libertyart</a></h6> -->
                    
                  </span>
                  <div class="line-dec"></div>
                  <h4>Meet Brayan, the accomplished accounting specialist at Perfinad, leveraging a decade of expertise to drive financial excellence and client success</h4>
                  <!-- <span class="bid">
                    Current Bid<br><strong>2.03 ETH</strong><br><em>($8,240.50)</em>
                  </span>
                  <span class="ends"> -->
                    <!-- Ends In<br><strong>4D 08H 15M 42S</strong><br><em>(July 24th, 2022)</em>
                  </span> -->
                  <div class="main-button">
                      <a href="explore.html">Contact</a>
                      </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 currently-market-item all dig">
              <div class="item">
                <div class="left-image">
                  <img src="assets/images/profile-03.png" alt="" style="border-radius: 20px; min-width: 195px;">
                  <br> <br> <br> <h5>Tax & Audits</h5>
                </div>
                <div class="right-content">
                  <h4>Manjula Gunarathna</h4>
                  <span class="author">
                    <img src="assets/images/logo5.png" alt="" style="max-width: 50px; border-radius: 50%;">
                    <!-- <h6>Liberty Artist<br><a href="#">@libertyart</a></h6> -->
                  </span>
                  <div class="line-dec"></div>
                  <!-- <span class="bid">
                    Current Bid<br><strong>2.03 ETH</strong><br><em>($7,200.50)</em>
                  </span>
                  <span class="ends">
                    Ends In<br><strong>2D 06H 30M 25S</strong><br><em>(July 26th, 2022)</em>
                  </span> -->
                  <h4> Meet Manjula excels in tax expertise, ensuring clients navigate complexities seamlessly. As an auditor, he guarantees financial accuracy and compliance.</h4>
                  <div class="main-button">
                      <a href="explore.html">Contact</a>
                      </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 currently-market-item all blc">
              <div class="item">
                <div class="left-image">
                  <img src="assets/images/profile-04.png" alt="" style="border-radius: 20px; min-width: 195px;">
                  <br> <br> <br> <h5>Risk</h5>
                </div>
                <div class="right-content">
                  <h4>Trevin Kariyawasam</h4>
                  <span class="author">
                    <img src="assets/images/logo5.png" alt="" style="max-width: 50px; border-radius: 50%;">
                    <!-- <h6>Liberty Artist<br><a href="#">@libertyart</a></h6> -->
                  </span>
                  <div class="line-dec"></div>
                  <!-- <span class="bid">
                    Current Bid<br><strong>3.64 ETH</strong><br><em>($6,600.00)</em>
                  </span>
                  <span class="ends">
                    Ends In<br><strong>6D 05H 40M 50S</strong><br><em>(July 28th, 2022)</em>
                  </span> -->
                  <h4>Meet Trevin's focus is meticulous risk analysis, providing clients with insights and strategies to navigate financial uncertainties with confidence.</h4>
                  <div class="main-button">
                      <a href="explore.html">Contact</a>
                      </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 currently-market-item all vtr">
              <div class="item">
                <div class="left-image">
                  <img src="assets/images/profile-05.png" alt="" style="border-radius: 20px; min-width: 195px;">
                  <br> <br> <br> <h5>Retirement & Debt</h5>
                </div>
                <div class="right-content">
                  <h4>Shehan Liyanage</h4>
                  <span class="author">
                    <img src="assets/images/logo5.png" alt="" style="max-width: 50px; border-radius: 50%;">
                    <!-- <h6>Liberty Artist<br><a href="#">@libertyart</a></h6> -->
                  </span>
                  <div class="line-dec"></div>
                  <!-- <span class="bid">
                    Current Bid<br><strong>2.44 ETH</strong><br><em>($8,800.50)</em>
                  </span>
                  <span class="ends">
                    Ends In<br><strong>3D 05H 20M 58S</strong><br><em>(July 14th, 2022)</em>
                  </span> -->
                  <h4>Meet Shehan specializes in retirement and debt planning, crafting personalized strategies for a secure financial future.</h4>
                  <div class="main-button">
                      <a href="explore.html">Contact</a>
                      </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 currently-market-item all vrt dig">
              <div class="item">
                <div class="left-image">
                  <img src="assets/images/profile-06.png" alt="" style="border-radius: 20px; min-width: 195px;">
                  <br> <br> <br> <h5>Tax & Audits</h5>
                </div>
                <div class="right-content">
                  <h4>Arun Perera</h4>
                  <span class="author">
                    <img src="assets/images/logo5.png" alt="" style="max-width: 50px; border-radius: 50%;">
                    <!-- <h6>Liberty Artist<br><a href="#">@libertyart</a></h6> -->
                  </span>
                  <div class="line-dec"></div>
                  <!-- <span class="bid">
                    Current Bid<br><strong>2.50 ETH</strong><br><em>($8,400.50)</em>
                  </span>
                  <span class="ends">
                    Ends In<br><strong>4D 08H 32M 18S</strong><br><em>(July 16th, 2022)</em>
                  </span> -->
                  <h4>Meet Arun specializes in audits, ensuring financial integrity. His expertise as a tax advisor ensures clients optimize their financial strategies effectively.</h4>
                  <div class="main-button">
                      <a href="explore.html">Contact</a>
                      </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 currently-market-item all msc blc">
              <div class="item">
                <div class="left-image">
                  <img src="assets/images/profile-07.png" alt="" style="border-radius: 20px; min-width: 195px;">
                  <br> <br> <br> <h5>Accounting & Risk</h5>
                </div>
                <div class="right-content">
                  <h4>Lehan De Silva</h4>
                  <span class="author">
                    <img src="assets/images/logo5.png" alt="" style="max-width: 50px; border-radius: 50%;">
                    <!-- <h6>Liberty Artist<br><a href="#">@libertyart</a></h6> -->
                  </span>
                  <div class="line-dec"></div>
                  <!-- <span class="bid">
                    Current Bid<br><strong>2.44 ETH</strong><br><em>($8,200.50)</em>
                  </span>
                  <span class="ends">
                    Ends In<br><strong>5D 10H 22M 24S</strong><br><em>(July 18th, 2022)</em>
                  </span> -->
                  <h4>Meet Lehan brings expertise in accounting and precise risk analysis to ensure financial success and security.</h4>
                  <div class="main-button">
                      <a href="explore.html">Contact</a>
                      </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2022 <a href="#">Liberty</a> NFT Marketplace Co., Ltd. All rights reserved.
          &nbsp;&nbsp;
          Designed by <a title="HTML CSS Templates" rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
        </div>
      </div>
    </div>

    
  </footer> -->
<!-- form starts -->
<center>
<div class="container1">
      <!-- <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" /> -->
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
          Connect with Perfinad effortlessly. Fill out the 'Let's Get in Touch' form below, and let our experts guide you towards financial success.
          </p>

          <div class="info">
            <div class="information">
              <img src="img/location.png" class="icon" alt="" />
              <p>92 Cherry Drive Uniondale, NY 11553</p>
            </div>
            <div class="information">
              <img src="img/email.png" class="icon" alt="" />
              <p>lorem@ipsum.com</p>
            </div>
            <div class="information">
              <img src="img/phone.png" class="icon" alt="" />
              <p>123-456-789</p>
            </div>
          </div>

          <div class="social-media1">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="index.html" autocomplete="off">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" />
              <label for="">Username</label>
              <span>Username</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input"></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" value="Send" class="btn" />
          </form>
        </div>
      </div>
    </div>

    <script src="app.js"></script>
</center>
<!-- form ends -->

<!-- footer start -->
  
  <footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
         <a href="index.html" class="logo">
                      <img src="assets/images/logo6.png" alt="" style="width: 220px; height: 80px;">
                  </a>
  	 		</div>
  	 		<div class="footer-col">
         <h4>company</h4>
  	 			<ul>
  	 				<li><a href="#">about us</a></li>
  	 				<li><a href="#">our services</a></li>
  	 				<li><a href="#">privacy policy</a></li>
  	 				<li><a href="#">affiliate program</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>online shop</h4>
  	 			<ul>
  	 				<li><a href="#">watch</a></li>
  	 				<li><a href="#">bag</a></li>
  	 				<li><a href="#">shoes</a></li>
  	 				<li><a href="#">dress</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>


    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/app1.js"></script>
  
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/popup.js"></script>
    <script src="assets/js/custom.js"></script>


  
    </body>
  </html>