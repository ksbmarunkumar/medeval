<!doctype html>
<html class="no-js" lang="zxx">
   
<head>
      @include('front-end.css_teacher')
   </head>
   <body>
       
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">New Test</h4>
        </div>
        <div class="modal-body">
			 <form action="/action_page.php">
				<div class="form-group">
				  <label for="s_id">Session Id:</label>
				  <input type="text" class="form-control" id="s_id" placeholder="Enter Session Id" name="Session Id">
				</div>
				<div class="form-group">
				  <label for="pwd">Password:</label>
				  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
				</div>
				
				<button type="submit" class="btn btn-default popup_btn">Submit</button>
			  </form>
        </div>
		
	
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  
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
			.main-menu ul li a{
				    color: #313131;
			}
		</style>
      <!-- header area start -->
      @include('front-end.header_teacher')
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
                  <a href="#">
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




		<section class="events__area pt-115 pb-120 p-relative">
            <div class="events__shape">
               <img class="events-1-shape" src="{{asset('assets/img/events/events-shape.png')}}" alt="">
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-xxl-4 offset-xxl-4">
                     <div class="section__title-wrapper mb-60 text-center">
                        <h2 class="section__title">Test <span class="yellow-bg yellow-bg-big">Report<img src="{{asset('assets/img/shape/yellow-bg.png')}}" alt=""></span></h2>
                       
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                     <div class="events__item mb-10 hover__active">
                        <div class="events__item-inner d-sm-flex align-items-center justify-content-between white-bg">
                           <div class="events__content">
                             
                              <h3 class="events__title"><a href="{{url('/test_report_session_details')}}">1.Digital transformation conference</a></h3>
							   <div class="events__meta">
                                 <span>Jun 14, 2022</span>
								 <br>
                                 <span>Total Marks : 50/100</span>
                              </div>
                           </div>
                           
                        </div>
                     </div>
                  </div>
             
			 
				 <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                     <div class="events__item mb-10 hover__active">
                        <div class="events__item-inner d-sm-flex align-items-center justify-content-between white-bg">
                           <div class="events__content">
                             
                              <h3 class="events__title"><a href="{{url('/test_report_session_details')}}">2.Digital transformation conference</a></h3>
							   <div class="events__meta">
                                 <span>Jun 14, 2022</span>
								 <br>
                                 <span>Total Marks : 50/100</span>
                              </div>
                           </div>
                           
                        </div>
                     </div>
                  </div>
				   <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                     <div class="events__item mb-10 hover__active">
                        <div class="events__item-inner d-sm-flex align-items-center justify-content-between white-bg">
                           <div class="events__content">
                             
                              <h3 class="events__title"><a href="{{url('/test_report_session_details')}}">3.Digital transformation conference</a></h3>
							   <div class="events__meta">
                                 <span>Jun 14, 2022</span>
								 <br>
                                 <span>Total Marks : 50/100</span>
                              </div>
                           </div>
                           
                        </div>
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

         <!-- footer area start -->
          <!-- footer area start -->
         <footer>
            <div class="footer__area grey-bg-2">
               <div class="footer__top pt-190 pb-40">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-4">
                           <div class="footer__widget mb-50">
                              <div class="footer__widget-head mb-22">
                                 <div class="footer__logo">
                                    <a href="#">
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
                        <div class="col-md-4">
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
                       
                       <div class="col-md-4">
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
      @include('front-end.scripts_teacher')
	  
	  <script>
		/*var Person = function(name,age,email){
		  this.name = name;
		  this.age = age;
		  this.email = email;
		}

		var gurpreet = new Person("Gurpreet",18,"gurprit96kaur@gmail.com");
		var manpreet = new Person("Manpreet",20,"manpreet.gulati17@gmail.com");

		var myName = $("span.name");
		var mylink = $("span.links");

		myName.html(manpreet.name + ", " + manpreet.age);

		mylink.html(manpreet.email);*/


		//Tabs Layout Code
		$("#tabs").tabs({
			activate: function (event, ui) {
				var active = $('#tabs').tabs('option', 'active');
				$("#tabid").html('the tab id is ' + $("#tabs ul>li a").eq(active).attr("href"));
			}
		});
	  </script>
   </body>


</html>

