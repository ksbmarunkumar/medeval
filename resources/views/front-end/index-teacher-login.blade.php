<!doctype html>
<html class="no-js" lang="zxx">
   
<head>
      @include('front-end.css_teacher')
      
      <style>
          .btn12 {
            padding: 10px;
            background-color: #004aac;
            border-radius: 5px;
            color: #fff;
        }
      </style>
   </head>
   <body>
       

      <!-- pre loader area start -->
      <div id="loading">
         <div id="loading-center">
            <div id="loading-center-absolute">
               <div class="loading-content-2 text-center">
                  <img class="loading-logo-icon-2" src="assets/img/logo_m.png" alt="">
				  
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
	<style>
		.header__btn-2 a {
			height: 44px;
			line-height: 44px;
			padding: 0 38px;
			text-transform: capitalize;
		}
		
		.ml-50{
			margin-left:17px;
			margin-bottom: 19px;
		}
		.header__search button {
			background: transparent;
			position: absolute;
			top: 21px;
			left: 24px;
		}
		.main-menu ul li a {
            display: inline-block;
            font-size: 16px;
            font-weight: 500;
            color: #000;
            padding: 35px 0;
            text-transform: capitalize;
        }
.main-menu ul li.has-dropdown > a::after {
    content: "\f107";
    -webkit-transform: translateY(1px);
    -moz-transform: translateY(1px);
    -ms-transform: translateY(1px);
    transform: translateY(1px);
    font-size: 14px;
    color: #000;
    font-family: "Font Awesome 5 Pro";
    font-weight: 400;
    margin-left: 5px;
    display: inline-block;
}
		
	</style>
      
      @include('front-end.header_teacher')

      <!-- cart mini area start -->
     
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
                  <img src="assets/img/logo_m.png" alt="logo" style="width:80px;">
                  </a>
               </div>
               <div class="mobile-menu fix"></div>

            
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
               <img class="hero-1-circle" src="assets/img/shape/hero/hero-1-circle.png" alt="">
               <img class="hero-1-circle-2" src="assets/img/shape/hero/hero-1-circle-2.png" alt="">
               <img class="hero-1-dot-2" src="assets/img/shape/hero/hero-1-dot-2.png" alt="">
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
                              <img class="hero-big" src="assets/img/hero/hero-2/hero.png" alt="">
                              <img class="hero-shape-purple" src="assets/img/hero/hero-2/hero-shape-purple.png" alt="">

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

       
	<section class="events__area pt-115 pb-120 p-relative">
            <div class="events__shape">
               <img class="events-1-shape" src="assets/img/events/events-shape.png" alt="">
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-xxl-4 offset-xxl-4">
                     <div class="section__title-wrapper mb-60 text-center">
                        <h2 class="section__title">My <span class="yellow-bg yellow-bg-big">Test<img src="assets/img/shape/yellow-bg.png" alt=""></span></h2>
                       
                     </div>
                  </div>
               </div>
               <div class="row">
			   
				
				<div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                    <div class="header__search p-relative ml-50 d-none d-md-block">
                           <form action="#">
                              <input type="text" placeholder="Search...">
                              <button type="submit"><i class="fad fa-search"></i></button>
                           </form>
                         
                        </div>
                  </div>
			   
                  <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                     <div class="events__item mb-10 hover__active">
                        <div class="events__item-inner d-sm-flex align-items-center justify-content-between white-bg">
                           <div class="events__content">
                             
                              <h3 class="events__title"><a href="#">Digital transformation conference</a></h3>
							   <div class="events__meta">
                                 <span>Jun 14, 2022</span>
								 <br>
                                 <span>Total Marks : 50</span>
								 <br>
								 <span>Duration : 20s</span>
								 <br><br>
								 <a href="#" class="btn12">View</a>
                              </div>
                           </div>
                           <div class="events__more">
				
                              <!-- <a href="#" class="link-btn" data-toggle="modal" data-target="#myModal"> -->
                                 <!-- Start -->
                                 <!-- <i class="far fa-arrow-right"></i> -->
                                 <!-- <i class="far fa-arrow-right"></i> -->
                              <!-- </a> -->
                           </div>
                        </div>
                     </div>
                  </div>
             
			 
				 <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                     <div class="events__item mb-10 hover__active">
                        <div class="events__item-inner d-sm-flex align-items-center justify-content-between white-bg">
                           <div class="events__content">
                             
                              <h3 class="events__title"><a href="#">Digital transformation conference</a></h3>
							   <div class="events__meta">
                                 <span>Jun 14, 2022</span>
								 <br>
                                 <span>Total Marks : 50</span>
								 <br>
								 <span>Duration : 20s</span>
								 <br><br>
								 <a href="#" class="btn12">View</a>
                              </div>
                           </div>
                           <div class="events__more">
				
                              <!-- <a href="#" class="link-btn" data-toggle="modal" data-target="#myModal"> -->
                                 <!-- Start -->
                                 <!-- <i class="far fa-arrow-right"></i> -->
                                 <!-- <i class="far fa-arrow-right"></i> -->
                              <!-- </a> -->
                           </div>
                        </div>
                     </div>
                  </div>
				   <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                     <div class="events__item mb-10 hover__active">
                        <div class="events__item-inner d-sm-flex align-items-center justify-content-between white-bg">
                           <div class="events__content">
                             
                              <h3 class="events__title"><a href="#">Digital transformation conference</a></h3>
							   <div class="events__meta">
                                 <span>Jun 14, 2022</span>
								 <br>
                                 <span>Total Marks : 50</span>
								 <br>
								 <span>Duration : 20s</span>
								 <br><br>
								 <a href="#" class="btn12">View</a>
                              </div>
                           </div>
                           <div class="events__more">
				
                              <!-- <a href="#" class="link-btn" data-toggle="modal" data-target="#myModal"> -->
                                 <!-- Start -->
                                 <!-- <i class="far fa-arrow-right"></i> -->
                                 <!-- <i class="far fa-arrow-right"></i> -->
                              <!-- </a> -->
                           </div>
                        </div>
                     </div>
                  </div>
				  
				 <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                           <div class="basic-pagination wow fadeInUp mt-30" data-wow-delay=".2s">
                              <ul class="d-flex align-items-center"> 
                                 <li class="prev">
                                    <a href="blog.html" class="link-btn link-prev">
                                       Prev
                                       <i class="arrow_left"></i>
                                       <i class="arrow_left"></i>
                                    </a>
                                 </li>
                                 <li class="active">
                                    <a href="#">
                                       <span>1</span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="blog.html">
                                       <span>2</span>
                                    </a>
                                 </li>
                                 <li>
                                    <a href="blog.html">
                                       <span>3</span>
                                    </a>
                                 </li>
                                 <li class="next">
                                    <a href="blog.html" class="link-btn">
                                       Next
                                       <i class="arrow_right"></i>
                                       <i class="arrow_right"></i>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
               </div>
            </div>
			
			<div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
				<hr>
			</div>
			
			<div class="container">
               <div class="row">
                  <div class="col-xxl-4 offset-xxl-4">
                     <div class="section__title-wrapper mb-60 text-center">
                        <h2 class="section__title">Test  <span class="yellow-bg yellow-bg-big">Reference<img src="assets/img/shape/yellow-bg.png" alt=""></span></h2>
                       
                     </div>
                  </div>
               </div>
			   
			   <div class="row">
					<div class="col-lg-5 offset-lg-1">
                    <div class="header__search p-relative ml-50 d-none d-md-block">
                           <form action="#">
                              <input type="text" placeholder="Search...">
                              <button type="submit"><i class="fad fa-search"></i></button>
                           </form>
                         
                        </div>
                  </div>
				  
				 <div class="col-lg-6">
                    <div class="header__search p-relative ml-50 d-none d-md-block">
                           <form action="#">
						   <label for="birthday">From:</label>
                              <input type="date" placeholder="Search..." style="width:190px; padding: 25px 20px 20px 20px;">
							  <label for="birthday">To:</label>
                              <input type="date" placeholder="Search..." style="width:190px; padding: 25px 20px 20px 20px;">
                           </form>
                         
                        </div>
                  </div>
			   </div>
			   
               <div class="row">

                  <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                     <div class="events__item mb-10 hover__active">
                        <div class="events__item-inner d-sm-flex align-items-center justify-content-between white-bg">
                           <div class="events__content">
                             
                            
							   <div class="events__meta">
                                 <span><b>Batch Name:</b> Abc</span>
								 <br>
                                 <span><b>Teacher Name :</b> Rohan Singh</span>
								 <br>
								 <span><b>Subject :</b> English</span>
								 <br>
								 <span><b>Test Name :</b> Abc</span>
								 <br>
								 <span><b>Date :</b> Jun 14, 2022</span>
								 <br><br>
								 <a href="#" class="btn12">View</a>
                              </div>
                           </div>
                           <div class="events__more">
				
                              <!-- <a href="#" class="link-btn" data-toggle="modal" data-target="#myModal"> -->
                                 <!-- Start -->
                                 <!-- <i class="far fa-arrow-right"></i> -->
                                 <!-- <i class="far fa-arrow-right"></i> -->
                              <!-- </a> -->
                           </div>
                        </div>
                     </div>
                  </div>
             
			 
				 <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                     <div class="events__item mb-10 hover__active">
                        <div class="events__item-inner d-sm-flex align-items-center justify-content-between white-bg">
                           <div class="events__content">
                             
                              <h3 class="events__title"><a href="#">Digital transformation conference</a></h3>
							   <div class="events__meta">
                                 <span><b>Batch Name:</b> Abc</span>
								 <br>
                                 <span><b>Teacher Name :</b> Rohan Singh</span>
								 <br>
								 <span><b>Subject :</b> English</span>
								 <br>
								 <span><b>Test Name :</b> Abc</span>
								 <br>
								 <span><b>Date :</b> Jun 14, 2022</span>
								 <br><br>
								 <a href="#" class="btn12">View</a>
                              </div>
                           </div>
                           <div class="events__more">
				
                              <!-- <a href="#" class="link-btn" data-toggle="modal" data-target="#myModal"> -->
                                 <!-- Start -->
                                 <!-- <i class="far fa-arrow-right"></i> -->
                                 <!-- <i class="far fa-arrow-right"></i> -->
                              <!-- </a> -->
                           </div>
                        </div>
                     </div>
                  </div>
				   <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                     <div class="events__item mb-10 hover__active">
                        <div class="events__item-inner d-sm-flex align-items-center justify-content-between white-bg">
                           <div class="events__content">
                             
                              <h3 class="events__title"><a href="#">Digital transformation conference</a></h3>
							  <div class="events__meta">
                                 <span><b>Batch Name:</b> Abc</span>
								 <br>
                                 <span><b>Teacher Name :</b> Rohan Singh</span>
								 <br>
								 <span><b>Subject :</b> English</span>
								 <br>
								 <span><b>Test Name :</b> Abc</span>
								 <br>
								 <span><b>Date :</b> Jun 14, 2022</span>
								 <br><br>
								 <a href="#" class="btn12">View</a>
                              </div>
                           </div>
                           <div class="events__more">
				
                              <!-- <a href="#" class="link-btn" data-toggle="modal" data-target="#myModal"> -->
                                 <!-- Start -->
                                 <!-- <i class="far fa-arrow-right"></i> -->
                                 <!-- <i class="far fa-arrow-right"></i> -->
                              <!-- </a> -->
                           </div>
                        </div>
                     </div>
                  </div>
				  
				 <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                    <div class="basic-pagination wow fadeInUp mt-30" data-wow-delay=".2s">
                      <ul class="d-flex align-items-center"> 
                         <li class="prev">
                            <a href="blog.html" class="link-btn link-prev">
                               Prev
                               <i class="arrow_left"></i>
                               <i class="arrow_left"></i>
                            </a>
                         </li>
                         <li class="active">
                            <a href="#">
                               <span>1</span>
                            </a>
                         </li>
                         <li>
                            <a href="blog.html">
                               <span>2</span>
                            </a>
                         </li>
                         <li>
                            <a href="blog.html">
                               <span>3</span>
                            </a>
                         </li>
                         <li class="next">
                            <a href="blog.html" class="link-btn">
                               Next
                               <i class="arrow_right"></i>
                               <i class="arrow_right"></i>
                            </a>
                         </li>
                      </ul>
                    </div>
                </div>
               </div>
            </div>
         </section>

         <!-- cta area start -->
         <section class="cta__area mb--100">
            <div class="container">
               <div class="cta__inner cta__inner-2 blue-bg fix">
                  <div class="cta__shape">
                     <img src="assets/img/cta/cta-shape.png" alt="">
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

         @include('front-end.footer_teacher')
      <!-- JS here -->
      @include('front-end.scripts_teacher')
   </body>


</html>

