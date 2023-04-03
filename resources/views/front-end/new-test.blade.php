<!doctype html>
<html class="no-js" lang="zxx">
   
<head>
     @include('front-end.css_student')
   </head>
   <body>
       
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Start Test</h4>
        </div>
        <script>
         function colectId($test_id , $student_id){
         document.getElementById('getTestId').value = $test_id;
         document.getElementById('s_id').value = $student_id;
         }
        </script>
       
        <div class="modal-body">
			 <form  action="{{route('paper_login') }}" method="post" enctype="multipart/form-data">
            @csrf
				<div class="form-group">
				  {{-- <label for="s_id">Session Id:</label> --}}
              <input type="hidden" id="getTestId" name="getTestId">
				  <input type="hidden" class="form-control" id="s_id" placeholder="Enter Session Id" name="Student_Id">
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
		<style>
			.main-menu ul li a{
				    color: #313131;
			}
		</style>
      <!-- header area start -->
      @include('front-end.student_header')
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
                     <a href="#" class="e-btn e-btn-border mb-10 w-100"> <span></span> view cart</a>
                     <a href="#" class="e-btn w-100"> <span></span> checkout</a>
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
                        <h2 class="section__title">New <span class="yellow-bg yellow-bg-big">Test<img src="{{asset('assets/img/shape/yellow-bg.png')}}" alt=""></span></h2>
                       
                     </div>
                  </div>
               </div>
               <div class="row">
               <?php
                  // echo Auth::user()->business_id;
                  use App\Models\StudentTest;
                  use App\Models\Test;
                  use App\Models\OspTest;
                  $student_tests = StudentTest::where('student_id',"=", Auth::user()->business_id)->get();
                  // echo "<pre>";
                  // print_r($student_tests);
                  // echo "</pre>";
                  foreach ($student_tests as $student_test) {
                     $tests = Test::where('id',"=", $student_test->test_id)->get();
                  foreach ($tests as $test) {
                     ?>
                  <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                     <div class="events__item mb-10 hover__active">
                        <div class="events__item-inner d-sm-flex align-items-center justify-content-between white-bg">
                           <div class="events__content">
                             
                              <h3 class="events__title"><a href="#"> {{$test->test_name}}</a></h3>
							   <div class="events__meta">
                                 <span>Date : 
                                  
                                    <?php
                                    $start_date = new  DateTime($test->date);
                                    $since_start = $start_date->diff(new DateTime('2023-03-27T12:11'));
                                    echo $since_start->days.'d-';
                                  echo $since_start->m.'m-';
                                  echo $since_start->h.'h:';
                                  echo $since_start->i.'m';
                                   ?>
                                   {{-- <input type="text" id="countdown" name="countdown" value="{{$since_start->days.'d-'.$since_start->m.'m-'.$since_start->h.'h:'.$since_start->i.'m'}}"> --}}
                                   <script>
                                      setInterval(function() {
                                              setTimeout(function() {
                                               var timecount =$("#countdown").val();
                                             //   $("#total_marks_add_v").val(timecount);
                                             console.log(timecount);
                                             }, 500);
                                           }, 500);
                               </script>
                                    </span>
								         <br>
                                 <span>Total Marks: {{$test->marks}}</span>
                                 <br>
                                 <?php
                                 $osp_array = json_decode($test->osp_test_id, true);
                                   $osp_test_ids = OspTest::whereIn('id',$osp_array)->get();
                                    $osp_du_total = 0 ;
                                     foreach ($osp_test_ids as $osp_test_id) {
                                       $osp_du_total = $osp_du_total + $osp_test_id->duration;
                                     }
                                 ?>
                                 <span>Duration : {{$test->duration - $osp_du_total}}</span>
                              </div>
                           </div>
                           <div class="events__more">
				
                              <a href="#" class="link-btn" data-toggle="modal" onclick="colectId({{$test->id}},{{$student_test->student_id}})" data-target="#myModal">
                                 Start
                                 <i class="far fa-arrow-right"></i>
                                 <i class="far fa-arrow-right"></i>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
             
                  <?php
               }
               }
               ?>
                 
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
         @include('front-end.footer_teacher')
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

