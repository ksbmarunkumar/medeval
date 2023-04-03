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
                        <div class="header__btn header__btn-2 ml-50 d-none d-sm-block">
                           <a href="{{url('FormLogin')}}" class="e-btn">Login</a>
                        </div>
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

      <!-- cart mini area start -->
      <div class="cartmini__area">
         <div class="cartmini__wrapper">
            <div class="cartmini__title">
               <h4>Shopping cart</h4>
            </div>
            <div class="cartmini__close">
               <button type="button" class="cartmini__close-btn"><i class="fal fa-times"></i></button>
            </div>
            <div class="cartmini__widget">
               <div class="cartmini__inner">
                  <ul>
                     <li>
                        <div class="cartmini__thumb">
                           <a href="#">
                              <img src="{{asset('assets/img/course/sm/cart-1.jpg')}}" alt="">
                           </a>
                        </div>
                        <div class="cartmini__content">
                           <h5><a href="#">Strategy law and organization Foundation </a></h5>
                           <div class="product-quantity mt-10 mb-10">
                              <span class="cart-minus">-</span>
                              <input class="cart-input" type="text" value="1"/>
                              <span class="cart-plus">+</span>
                           </div>
                           <div class="product__sm-price-wrapper">
                              <span class="product__sm-price">$46.00</span>
                           </div>
                        </div>
                        <a href="#" class="cartmini__del"><i class="fal fa-times"></i></a>
                     </li>
                     <li>
                        <div class="cartmini__thumb">
                           <a href="#">
                              <img src="{{asset('assets/img/course/sm/cart-2.jpg')}}" alt="">
                           </a>
                        </div>
                        <div class="cartmini__content">
                           <h5><a href="#">Fundamentals of music theory Learn new</a></h5>
                           <div class="product-quantity mt-10 mb-10">
                              <span class="cart-minus">-</span>
                              <input class="cart-input" type="text" value="1"/>
                              <span class="cart-plus">+</span>
                           </div>
                           <div class="product__sm-price-wrapper">
                              <span class="product__sm-price">$32.00</span>
                           </div>
                        </div>
                        <a href="#" class="cartmini__del"><i class="fal fa-times"></i></a>
                     </li>
                     <li>
                        <div class="cartmini__thumb">
                           <a href="#">
                              <img src="{{asset('assets/img/course/sm/cart-3.jpg')}}" alt="">
                           </a>
                        </div>
                        <div class="cartmini__content">
                           <h5><a href="#">Strategy law and organization Foundation </a></h5>
                           <div class="product-quantity mt-10 mb-10">
                              <span class="cart-minus">-</span>
                              <input class="cart-input" type="text" value="1"/>
                              <span class="cart-plus">+</span>
                           </div>
                           <div class="product__sm-price-wrapper">
                              <span class="product__sm-price">$62.00</span>
                           </div>
                        </div>
                        <a href="#" class="cartmini__del"><i class="fal fa-times"></i></a>
                     </li>
                  </ul>
               </div>
               <div class="cartmini__checkout">
                  <div class="cartmini__checkout-title mb-30">
                     <h4>Subtotal:</h4>
                     <span>$113.00</span>
                  </div>
                  <div class="cartmini__checkout-btn">
                     <a href="cart.html" class="e-btn e-btn-border mb-10 w-100"> <span></span> view cart</a>
                     <a href="checkout.html" class="e-btn w-100"> <span></span> checkout</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
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
                  <img src="{{asset('assets/img/logo_m.png')}}" alt="logo" style="width:80px;">
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

         <!-- hero area start -->
         <section class="hero__area hero__height hero__height-2 d-flex align-items-center blue-bg-3 p-relative fix">
            <div class="hero__shape">
               <img class="hero-1-circle" src="{{asset('assets/img/shape/hero/hero-1-circle.png')}}" alt="">
               <img class="hero-1-circle-2" src="{{asset('assets/img/shape/hero/hero-1-circle-2.png')}}" alt="">
               <img class="hero-1-dot-2" src="{{asset('assets/img/shape/hero/hero-1-dot-2.png')}}" alt="">
            </div>
            <div class="container">
               <div class="hero__content-wrapper mt-90">
                  <div class="row align-items-center">
                     <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                        <div class="hero__content hero__content-2 p-relative z-index-1">
                           <h3 class="hero__title hero__title-2">
                              MedEval
                           </h3>
                          
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
                           
                          
                        </div>
                     </div>
                     <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                        <div class="hero__thumb-wrapper mb--120">
                           <div class="hero__thumb-2 scene">
                              <img class="hero-big" src="{{asset('assets/img/hero/hero-2/hero.png')}}" alt="">
                              <img class="hero-shape-purple" src="{{asset('assets/img/hero/hero-2/hero-shape-purple.png')}}" alt="">

                              <div class="hero__promotion d-flex white-bg layer" data-depth="0.1">
                                 <div class="hero__promotion-icon inspiration mr-10">
                                    <span>
                                       <svg viewBox="0 0 512 512">
                                          <g>
                                             <path class="st0" d="M158.5,87.1c7.2-4.1,9.6-13.3,5.5-20.5l-15-26c-4.2-7.2-13.4-9.7-20.5-5.5c-7.2,4.1-9.6,13.3-5.5,20.5l15,26   C142.2,88.9,151.4,91.2,158.5,87.1z"/>
                                             <path class="st0" d="M66.6,348l-26,15c-7.2,4.1-9.6,13.3-5.5,20.5c4.2,7.2,13.4,9.6,20.5,5.5l26-15c7.2-4.1,9.6-13.3,5.5-20.5   C83,346.3,73.8,343.9,66.6,348z"/>
                                             <path class="st0" d="M445.4,164l26-15c7.2-4.1,9.6-13.3,5.5-20.5s-13.4-9.6-20.5-5.5l-26,15c-7.2,4.1-9.6,13.3-5.5,20.5   C429.1,165.7,438.3,168.1,445.4,164z"/>
                                             <path class="st0" d="M430.4,374l26,15c7.1,4.1,16.3,1.7,20.5-5.5c4.1-7.2,1.7-16.3-5.5-20.5l-26-15c-7.2-4.1-16.3-1.7-20.5,5.5   C420.7,360.7,423.2,369.8,430.4,374z"/>
                                             <path class="st0" d="M81.6,138l-26-15c-7.2-4.1-16.3-1.7-20.5,5.5s-1.7,16.3,5.5,20.5l26,15c7.1,4.1,16.3,1.7,20.5-5.5   C91.3,151.3,88.8,142.2,81.6,138z"/>
                                             <path class="st0" d="M374,81.6l15-26c4.1-7.2,1.7-16.3-5.5-20.5c-7.2-4.2-16.3-1.7-20.5,5.5l-15,26c-4.1,7.2-1.7,16.3,5.5,20.5   C360.6,91.2,369.8,88.9,374,81.6z"/>
                                             <path class="st0" d="M271,46V15c0-8.3-6.7-15-15-15s-15,6.7-15,15v31c0,8.3,6.7,15,15,15C264.3,61,271,54.3,271,46z"/>
                                             <path class="st0" d="M15,271h31c8.3,0,15-6.7,15-15s-6.7-15-15-15H15c-8.3,0-15,6.7-15,15C0,264.3,6.7,271,15,271z"/>
                                             <path class="st0" d="M497,241h-31c-8.3,0-15,6.7-15,15c0,8.3,6.7,15,15,15h31c8.3,0,15-6.7,15-15S505.3,241,497,241z"/>
                                             <path class="st0" d="M271,259.5l-15-30l-15,30V271h30V259.5z"/>
                                             <path class="st0" d="M241,301h30v60h-30V301z"/>
                                             <path class="st0" d="M93.5,226.9c-9.4,54.9,8.7,110.3,48.6,148.3c24.7,23.5,38.9,57.6,38.9,91.8c0,24.8,20.2,45,45,45h60   c24.8,0,45-20.2,45-45c0-34.1,14.2-68.2,38.9-91.8c33-31.4,51.1-73.8,51.1-119.2c0-90.6-73-164.4-164.4-164.9   C172.2,90.6,106.4,151.7,93.5,226.9z M211,256c0-2.3,0.5-4.6,1.6-6.7l30-60c5.1-10.2,21.7-10.2,26.8,0l30,60c1,2.1,1.6,4.4,1.6,6.7   v120c0,8.3-6.7,15-15,15h-60c-8.3,0-15-6.7-15-15V256z"/>
                                          </g>
                                          </svg>
                                    </span>
                                 </div>
                                 <div class="hero__promotion-text">
                                    <h5>Idea</h5>
                                    <p>Your Idea</p>
                                 </div>
                              </div>
                              <div class="hero__promotion education d-none d-lg-flex white-bg layer" data-depth="0.2" >
                                 <div class="hero__promotion-icon mr-10">
                                    <span class="cap">
                                       <svg viewBox="0 0 791.8 791.8">
                                          <g>
                                             <path class="st0" d="M395.9,501l-236.2-72.7v71.5v49.9c0,56.1,105.8,101.6,236.3,101.6s236.3-45.5,236.3-101.6   c0-0.4-0.1-0.9-0.2-1.3V428.3L395.9,501z"/>
                                             <path class="st0" d="M0,318.7l84.4,30.2l7.2-15.4l31-2.6l4.4,4.6l-26.6,6.3l-3.9,11.5c0,0-60.1,125.6-51.3,187c0,0,37.5,22.4,75,0   l10-168v-14l55.8-12.6l-3.9,9.7L140.5,369l19.2,6.9l236.2,72.7l236.2-72.7l159.7-57.1L395.9,166.4L0,318.7z"/>
                                          </g>
                                          </svg>
                                    </span>
                                 </div>
                                 <div class="hero__promotion-text">
                                    <h5><span class="counter">MedEval</h5>
                                    
                                 </div>
                              </div>
                              
                              <div class="hero__mic">
                                 <span>
                                    <svg viewBox="0 0 512 512">
                                       <g>
                                          <g>
                                             <path class="st0" d="M435.7,0H126.5C89.6,0,59.6,30,59.6,66.9v378.3c0,36.9,30,66.9,66.9,66.9h309.2c9.2,0,16.7-7.5,16.7-16.7    c0-17.5,0-461.2,0-478.6C452.4,7.5,444.9,0,435.7,0z M338.9,396.2c0,13.7-15.7,21.5-26.6,13.4L244,358.9h-54.2    c-9.2,0-16.7-7.5-16.7-16.7v-72c0-9.2,7.5-16.7,16.7-16.7H244l68.3-50.7c11-8.2,26.6-0.3,26.6,13.4V396.2z M419,100.3H126.5    c-18.5,0-33.5-15-33.5-33.5c0-18.5,15-33.5,33.5-33.5H419V100.3z"/>
                                          </g>
                                       </g>
                                       <g>
                                          <g>
                                             <rect x="206.5" y="286.8" class="st0" width="26.3" height="38.7"/>
                                          </g>
                                       </g>
                                       <g>
                                          <g>
                                             <polygon class="st0" points="266.2,278.5 266.2,333.8 305.5,363 305.5,249.3   "/>
                                          </g>
                                       </g>
                                    </svg>
                                 </span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- hero area end -->

       

         <!-- about area start -->
         <section class="about__area pt-90 pb-150">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-5 offset-xxl-1 col-xl-6 col-lg-6">
                     <div class="about__thumb-wrapper">

                        <div class="about__review">
                           <h5> <span>MedEval</span> About</h5>
                        </div>
                        <div class="about__thumb ml-100">
                           <img src="{{asset('assets/img/about/about.jpg')}}" alt="">
                        </div>
                        <div class="about__banner mt--210">
                           <img src="{{asset('assets/img/about/about-banner.jpg')}}" alt="">
                        </div>
                        
                     </div>
                  </div>
                  <div class="col-xxl-6 col-xl-6 col-lg-6">
                     <div class="about__content pl-70 pr-60 pt-25">
                        <div class="section__title-wrapper mb-25">
                           <h2 class="section__title">About<br><span class="yellow-bg-big">MedEval<img src="{{asset('assets/img/shape/yellow-bg-2.png')}}" alt=""></span></h2>
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
						</div>
                        
                        <a href="#" class="e-btn e-btn-border">About Us</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- about area end -->

        


         <!-- testimonial area start -->
         <section class="testimonial__area testimonial__overlay pt-175 pb-170" data-background="{{asset('assets/img/testimonial/testimonial-bg.jpg')}}">
            <div class="container">
               <div class="col-xxl-12">
                  <div class="testimonial__slider swiper-container">
                     <div class="testimonial__slider-inner swiper-wrapper">
                        <div class="testimonial__item text-center swiper-slide">
                           <div class="testimonial__thumb">
                              <img src="{{asset('assets/img/testimonial/testi-1.jpg')}}" alt="">
                           </div>
                           <div class="testimonial__content">
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
   
                              <div class="testimonial__info">
                                 <h4>Deepak Singh</h4>
                                 <span>Teacher</span>
                              </div>
                           </div>
                        </div>
                        <div class="testimonial__item text-center swiper-slide">
                           <div class="testimonial__thumb">
                              <img src="{{asset('assets/img/testimonial/testi-1.jpg')}}" alt="">
                           </div>
                           <div class="testimonial__content">
                              <p>“ Barmy loo sloshed porkiesdo with me down the pub say bubble and squeak. ”</p>
   
                              <div class="testimonial__info">
                                 <h4>Jason Response</h4>
                                 <span>UX Designer</span>
                              </div>
                           </div>
                        </div>
                        <div class="testimonial__item text-center swiper-slide">
                           <div class="testimonial__thumb">
                              <img src="{{asset('assets/img/testimonial/testi-1.jpg')}}" alt="">
                           </div>
                           <div class="testimonial__content">
                              <p>“ Barmy loo sloshed porkiesdo with me down the pub say bubble and squeak. ”</p>
   
                              <div class="testimonial__info">
                                 <h4>Jason Response</h4>
                                 <span>UX Designer</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="swiper-button-next swiper-nav"><i class="far fa-arrow-right"></i></div>
                     <div class="swiper-button-prev swiper-nav"><i class="far fa-arrow-left"></i></div>
                  </div>
               </div>
            </div>
         </section>
         <!-- testimonial area end -->

         <!-- blog area start -->
         <section class="blog__area pt-115 pb-130">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-6 offset-xxl-3">
                     <div class="section__title-wrapper text-center mb-60">
                        <h2 class="section__title">MedEval Blog</h2>
                        <p>You don't have to struggle alone, you've got our assistance and help.</p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                     <div class="blog__item white-bg mb-30 transition-3 fix">
                        <div class="blog__thumb w-img fix">
                           <a href="#">
                              <img src="{{asset('assets/img/blog/blog-1.jpg')}}" alt="">
                           </a>
                        </div>
                        <div class="blog__content">
                           <div class="blog__tag">
                              <a href="#">Art & Design</a>
                           </div>
                           <h3 class="blog__title"><a href="#">The Challenge Of Global Learning In Public Education</a></h3>

                           <div class="blog__meta d-flex align-items-center justify-content-between">
                              <div class="blog__author d-flex align-items-center">
                                 <div class="blog__author-thumb mr-10">
                                    <img src="{{asset('assets/img/blog/author/author-1.jpg')}}" alt="">
                                 </div>
                                 <div class="blog__author-info">
                                    <h5>Jim Séchen</h5>
                                 </div>
                              </div>
                              <div class="blog__date d-flex align-items-center">
                                 <i class="fal fa-clock"></i>
                                 <span>April 02, 2022</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                     <div class="blog__item white-bg mb-30 transition-3 fix">
                        <div class="blog__thumb w-img fix">
                           <a href="#">
                              <img src="{{asset('assets/img/blog/blog-2.jpg')}}" alt="">
                           </a>
                        </div>
                        <div class="blog__content">
                           <div class="blog__tag">
                              <a href="#" class="purple">Marketing</a>
                           </div>
                           <h3 class="blog__title"><a href="#">Exactly How Technology Can Make Reading Better</a></h3>

                           <div class="blog__meta d-flex align-items-center justify-content-between">
                              <div class="blog__author d-flex align-items-center">
                                 <div class="blog__author-thumb mr-10">
                                    <img src="{{asset('assets/img/blog/author/author-2.jpg')}}" alt="">
                                 </div>
                                 <div class="blog__author-info">
                                    <h5>Barry Tone</h5>
                                 </div>
                              </div>
                              <div class="blog__date d-flex align-items-center">
                                 <i class="fal fa-clock"></i>
                                 <span>July 02, 2022</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                     <div class="blog__item white-bg mb-30 transition-3 fix">
                        <div class="blog__thumb w-img fix">
                           <a href="#">
                              <img src="{{asset('assets/img/blog/blog-3.jpg')}}" alt="">
                           </a>
                        </div>
                        <div class="blog__content">
                           <div class="blog__tag">
                              <a href="#" class="pink">UX Design</a>
                           </div>
                           <h3 class="blog__title"><a href="#">New Chicago school budget relies on state pension</a></h3>

                           <div class="blog__meta d-flex align-items-center justify-content-between">
                              <div class="blog__author d-flex align-items-center">
                                 <div class="blog__author-thumb mr-10">
                                    <img src="{{asset('assets/img/blog/author/author-3.jpg')}}" alt="">
                                 </div>
                                 <div class="blog__author-info">
                                    <h5>Barry Tone</h5>
                                 </div>
                              </div>
                              <div class="blog__date d-flex align-items-center">
                                 <i class="fal fa-clock"></i>
                                 <span>July 02, 2022</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- blog area end -->

         <!-- cta area start -->
         <section class="cta__area mb--100">
            <div class="container">
               <div class="cta__inner cta__inner-2 blue-bg fix">
                  <div class="cta__shape">
                     <img src="{{asset('assets/img/cta/cta-shape.png')}}" alt="">
                  </div>
                  <div class="row align-items-center">
                     <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-6">
                        <div class="cta__content">
                           <h3 class="cta__title">Start learning by Downloading Apps.</h3>
                        </div>
                     </div>
                     <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6">
                        <div class="cta__apps d-lg-flex justify-content-end p-relative z-index-1">
                           
                           <a target="_blank" href="#" class="active"><i class="fab fa-google-play"></i> Play Store</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- cta area end -->

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
                                 <h3 class="footer__widget-title footer__widget-title-2">Company</h3>
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

