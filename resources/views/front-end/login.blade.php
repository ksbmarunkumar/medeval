<!doctype html>
<html class="no-js" lang="zxx">
   
<head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>MedEval</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.png')}}">
      <!-- CSS here -->
      <link rel="stylesheet" href="{{asset('assets/css/preloader.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/meanmenu.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/backToTop.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/jquery.fancybox.min.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/fontAwesome5Pro.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/elegantFont.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/default.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	  
	  <style>
		.main-menu ul li a {
			display: inline-block;
			font-size: 16px;
			font-weight: 500;
			color: #000;
			padding: 35px 0;
			text-transform: capitalize;
		}
		
		.login_btn{
			background: #004aac;
		}
	  </style>
   </head>
   <body>
   
      <!-- pre loader area start -->
   <div id="loading">
         <div id="loading-center">
            <div id="loading-center-absolute">
               <div class="loading-content-2 text-center">
                  <img class="loading-logo-icon-2" src="{{asset('assets/img/logo_m.png')}}" alt="">
				  
				  <h3 class="loading-logo-text-2">MedEval</h3>
                  
               </div>
            </div>
         </div>  
      </div>
      <!-- pre loader area end -->

      <!-- back to top start -->
      <div class="progress-wrap">
         <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
         </svg>
      </div>
      <!-- back to top end -->

      <!-- header area start -->
      <header>
         <div id="header-sticky" class="header__area header__transparent header__padding-2">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-2 col-sm-4 col-6">
                     <div class="header__left d-flex">
                        <div class="logo">
                           <a href="index.html">
                              <img src="{{asset('assets/img/logo_m.png')}}" alt="logo" style="width:100px;">
                           </a>
                        </div>
                        
                     </div>
                  </div>
                  <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-10 col-sm-8 col-6">
                     <div class="header__right d-flex justify-content-end align-items-center">
                        <div class="main-menu main-menu-2">
                           <nav id="mobile-menu">
                              <ul>
                                <li><a href="#">Home</a></li>
								<li><a href="#">About Us</a></li>
                                 </li>
                             
                                 <li><a href="#">Contact</a></li>
                              </ul>
                           </nav>
                        </div>
                        <!--<div class="header__btn header__btn-2 ml-50 d-none d-sm-block">
                           <a href="sign-up.html" class="e-btn">Sign up</a>
                        </div>-->
                        <div class="sidebar__menu d-xl-none">
                           <div class="sidebar-toggle-btn ml-30" id="sidebar-toggle">
                               <span class="line"></span>
                               <span class="line"></span>
                               <span class="line"></span>
                           </div>
                       </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- header area end -->

      <div class="body-overlay"></div>
      <!-- cart mini area end -->


      <!-- sidebar area start -->
      <div class="sidebar__area">
         <div class="sidebar__wrapper">
            <div class="sidebar__close">
               <button class="sidebar__close-btn" id="sidebar__close-btn">
               <span><i class="fal fa-times"></i></span>
               <span>close</span>
               </button>
            </div>
            <div class="sidebar__content">
               <div class="logo mb-40">
                  <a href="index.html">
                  <img src="{{asset('assets/img/logo/logo.png')}}" alt="logo">
                  </a>
               </div>
               <div class="mobile-menu fix"></div>

               <div class="sidebar__search p-relative mt-40 ">
               <form action="#">
                     <input type="text" placeholder="Search...">
                     <button type="submit"><i class="fad fa-search"></i></button>
                  </form>
               </div>
               <div class="sidebar__cart mt-30">
                  <a href="#">
                     <div class="header__cart-icon">
                        <svg viewBox="0 0 24 24">
                           <circle class="st0" cx="9" cy="21" r="1"/>
                           <circle class="st0" cx="20" cy="21" r="1"/>
                           <path class="st0" d="M1,1h4l2.7,13.4c0.2,1,1,1.6,2,1.6h9.7c1,0,1.8-0.7,2-1.6L23,6H6"/>
                        </svg>
                     </div>
                     <span class="cart-item">2</span>
                  </a>
               </div>
            </div>
         </div>
      </div>
      <!-- sidebar area end -->      
      <div class="body-overlay"></div>
      <!-- sidebar area end -->

      <main>

         <!-- sign up area start -->
         <section class="signup__area po-rel-z1 pt-100 pb-145">
            <div class="sign__shape">
               <img class="man-1" src="{{asset('assets/img/icon/sign/man-3.png')}}" alt="">
               <img class="man-2 man-22" src="{{asset('assets/img/icon/sign/man-2.png')}}" alt="">
               <img class="circle" src="{{asset('assets/img/icon/sign/circle.png')}}" alt="">
               <img class="zigzag" src="{{asset('assets/img/icon/sign/zigzag.png')}}" alt="">
               <img class="dot" src="{{asset('assets/img/icon/sign/dot.png')}}" alt="">
               <img class="bg" src="{{asset('assets/img/icon/sign/sign-up.png')}}" alt="">
               <img class="flower" src="{{asset('assets/img/icon/sign/flower.png')}}" alt="">
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2">
                     <div class="section__title-wrapper text-center mb-55">
                        <h2 class="section__title">MedEval<br>  Login</h2>
                        
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                     <div class="sign__wrapper white-bg">
                        
                        <div class="sign__form">
                           <form  method="POST" action="{{ route('FormLogin') }}">
                              @csrf
                              <div class="sign__input-wrapper mb-25">
                                 <h5>User Name</h5>
                                 <div class="sign__input">
                                    <input type="text" name="email" placeholder="User name" class="form-control @error('email') is-invalid @enderror">
                                    <i class="fal fa-user"></i>
                                 </div>
                                  <div class="help-block with-errors" ></div>
                                @error('email')
                                    <span class="invalid-email" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                             
                              <div class="sign__input-wrapper mb-25">
                                 <h5>Password</h5>
                                 <div class="sign__input">
                                    <input type="password" name="password" placeholder="Password" class="form-control @error('email') is-invalid @enderror">
                                    <i class="fal fa-lock"></i>
                                 </div>
                              </div>
                              <div class="help-block with-errors" ></div>
                                @error('password')
                                    <span class="invalid-password" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              <div class="sign__action d-flex justify-content-between mb-30">
                                 <div class="sign__agree d-flex align-items-center">
                                    <input class="m-check-input" type="checkbox" id="m-agree">
                                    <label class="m-check-label" for="m-agree">I agree to the <a href="#">Terms & Conditions</a>
                                       </label>
                                 </div>
                              </div>
                              <button type="submit" class="e-btn w-100 login_btn"> <span></span>Login</button>
                              
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- sign up area end -->
         
      </main>

         <!-- footer area start -->
          <footer>
            <div class="footer__area grey-bg-2">
               <div class="footer__top pt-190 pb-40">
                  <div class="container">
                     <div class="row">
                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-4 col-sm-6">
                           <div class="footer__widget mb-50">
                              <div class="footer__widget-head mb-22">
                                 <div class="footer__logo">
                                    <a href="index.html">
                                       <img src="{{asset('assets/img/logo_m.png')}}" alt="" style="width:100px;">
                                    </a>
                                 </div>
                              </div>
                              <div class="footer__widget-body footer__widget-body-2">
                                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text </p>

                                 <div class="footer__social">
                                    <ul>
                                       <li><a href="#"><i class="social_facebook"></i></a></li>
                                       <li><a href="#" class="tw"><i class="social_twitter"></i></a></li>
                                       <li><a href="#" class="pin"><i class="social_pinterest"></i></a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xxl-2 offset-xxl-1 col-xl-2 offset-xl-1 col-lg-4 offset-lg-0 col-md-2 offset-md-1 col-sm-5 offset-sm-1">
                           <div class="footer__widget mb-50">
                              <div class="footer__widget-head mb-22">
                                 <h3 class="footer__widget-title footer__widget-title-2">Important Link</h3>
                              </div>
                              <div class="footer__widget-body">
                                 <div class="footer__link footer__link-2">
                                    <ul>
                                       <li><a href="#">Home</a></li>
                                       <li><a href="#">About Us</a></li>
                                       <li><a href="#">Contact Us</a></li>
                                       
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                       
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-5 col-sm-6">
                           <div class="footer__widget footer__pl-70 mb-50">
                              <div class="footer__widget-head mb-22">
                                 <h3 class="footer__widget-title footer__widget-title-2">Subscribe</h3>
                              </div>
                              <div class="footer__widget-body">
                                 <div class="footer__subscribe footer__subscribe-2">
                                    <form action="#">
                                       <div class="footer__subscribe-input mb-15">
                                          <input type="email" placeholder="Your email address">
                                          <button type="submit">
                                             <i class="far fa-arrow-right"></i>
                                             <i class="far fa-arrow-right"></i>
                                          </button>
                                       </div>
                                    </form>
                                    <p>Get the latest news and updates right at your inbox.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="footer__bottom footer__bottom-2">
                  <div class="container">
                     <div class="row">
                        <div class="col-xxl-12">
                           <div class="footer__copyright footer__copyright-2 text-center">
                              <p>© 2022 MedEval, All Rights Reserved.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <!-- footer area end -->
      <!-- JS here -->
      <script src="{{asset('assets/js/vendor/jquery-3.5.1.min.js')}}"></script>
      <script src="{{asset('assets/js/vendor/waypoints.min.js')}}"></script>
      <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('assets/js/jquery.meanmenu.js')}}"></script>
      <script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
      <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
      <script src="{{asset('assets/js/jquery.fancybox.min.js')}}"></script>
      <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
      <script src="{{asset('assets/js/parallax.min.js')}}"></script>
      <script src="{{asset('assets/js/backToTop.js')}}"></script>
      <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
      <script src="{{asset('assets/js/ajax-form.js')}}"></script>
      <script src="{{asset('assets/js/wow.min.js')}}"></script>
      <script src="{{asset('assets/js/imagesloaded.pkgd.min.js')}}"></script>
      <script src="{{asset('assets/js/main.js')}}"></script>
   </body>
</html>

