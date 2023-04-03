<!doctype html>
<html class="no-js" lang="zxx">
   
<head>
      @include('front-end.css_teacher')
  
      
      <style>
        .white-bg {
            background: #ffffff;
        }
        
		input[type=radio] {
			border: 0px;
			width: 14%;
			height: 20px;
		}
			.events__item-inner{
				background:#fff;
				box-shadow: rgb(0 0 0 / 26%) 0px 3px 8px;
				cursor:pointer;
			}
			.events__title{
				color:#000;
				margin-top: 4px;
			}
			a:focus, a:hover{
			    color:#fff !important;
			}
			
			.btn12 {
                padding: 10px;
                background-color: #004aac;
                border-radius: 5px;
                color: #fff;
                margin-right: 10px;
            }
            
            .btn12:hover{
                color: #fff !important;
            }
			.events__more{
				color: #fff;
				background-image: linear-gradient(to bottom right, #004aac, #629fef);
				padding: 10px 38px;
				border-radius: 50px;
				box-shadow: rgb(0 0 0 / 24%) 0px 3px 8px;
			}
			.pt-115 {
				padding-top: 34px;
			}
			
			.ml-50 {
    margin-left: 0;
}
fieldset textarea, input {
				font-family: Open Sans;
				font-size: 15px;
				color: #333;
				background-color: #f7f7f7;
				box-shadow: none;
				padding: 5px;
				width: 7%;
				margin: 5px auto;
				border: 0;
				border-radius: 2.5px;
				outline: 0;
				transition: 0.3s ease;
			}
			
			@media (min-width: 768px){
				.modal-dialog {
					width: 344px !important;
					margin: 30px auto;
				}
			}

			#myModal label{
				    font-size: 21px;
			}
			
			.header__search input {
				width: 280px;
				height: 50px;
				line-height: 20px;
				-webkit-border-radius: 4px;
				-moz-border-radius: 4px;
				border-radius: 4px;
				background: #ffffff;
				outline: none;
				border: 1px solid #cfcfcf;
				font-size: 16px;
				padding: 21px 65px 20px 55px;
			}
			
			.footer_b{
			    margin-top: 30px;
                text-align: left !important;
			}
            .verticals
            {
                margin-top:292px;
            }


            .events__shape img.events-1-shape {
           z-index: -1;
           position: absolute;
           top: 60%;
           left: 53%;
           -webkit-transform: translate(-50%, -50%);
           -moz-transform: translate(-50%, -50%);
           -ms-transform: translate(-50%, -50%);
           transform: translate(-50%, -50%);
          }
            .dataTables_wrapper .dataTables_filter input {
             border: 1px solid #aaa;
             border-radius: 3px;
             padding: 5px;
             background-color: transparent;
             margin-left: 3px;
             width: 150px !important;
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
			.main-menu ul li a{
				    color: #313131;
			}
			
			.main-menu ul li.has-dropdown > a::after{
					color:#000;
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
                  <a href="index.html">
                  <img src="{{asset('assets/img/logo/logo.png')}}" alt="logo">
                  </a>
               </div>
               <div class="mobile-menu fix"></div>

              
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
                        <h2 class="section__title">Assign <span class="yellow-bg yellow-bg-big"><img src="{{asset('assets/img/shape/yellow-bg.png')}}" alt="">Test</span></h2>
                       
                     </div>
                  </div>
               </div>
			   
			@php
         $index = 1;
         $index_module = 1;
         @endphp
			   <br>

          
               <div class="row">
                 <table id="myTable" class="table table-bordered">
              <thead>
                  <tr>
                      <th>Test</th>
                      <th>Test Name</th>
                      <th>Total Marks</th>
                      <th>Duation</th>
                      <th>Branch</th>
                      <th>Subject Name</th>
                      <th>View Button</th>
                  </tr>
              </thead>
              <tbody>
               @foreach($test as $test)
               @if($test->assign_modules_id == 'false')
                  <tr>
                      <td>{{$index}}@php $index++; @endphp</td>
                      <td>{{ $test->test_name }}</td>
                      <td>{{ $test->marks }}</td>
                      <td>{{ $test->duration }}</td>
                      <td>{{ $test->branch_name }}</td>
                      <td>{{ $test->subject }}</td>
                      <td><a href="{{ url('/test_view',$test->id)}}" class="btn12">View</a></td>
                  </tr>
                  @endif
               
          @endforeach
              </tbody>
          </table>
          <br>
          <br>
          <div class="row">
            <div class="col-xxl-4 offset-xxl-4">
               <div class="section__title-wrapper mb-60 text-center">
                  <h2 class="section__title">Assign <span class="yellow-bg yellow-bg-big"><img src="{{asset('assets/img/shape/yellow-bg.png')}}" alt="">Module</span></h2>
                 
               </div>
            </div>
         </div>

          <table id="myTable_module" class="table table-bordered">
              <thead>
                  <tr>
                      <th>Test</th>
                      <th>Test Name</th>
                      <th>Module Name</th>
                      <th>Total Marks</th>
                      <th>Duation</th>
                      <th>Branch</th>
                      <th>Subject Name</th>
                      <th>View Button</th>
                  </tr>
              </thead>
              <tbody>
               @foreach($modules_tests as $modules_test)
               @if($modules_test->teacherId == Auth::user()->teacher_id)
                  <tr>
                      <td>{{$index_module}}@php $index_module++; @endphp</td>
                      <td>{{ $modules_test->test_name }}</td>
                      <td>{{ $modules_test->ospTestName.','}}{{ $modules_test->shortTestName.','}}{{ $modules_test->vivaName}}</td>
                      <td>{{ $modules_test->short_duration_sum + $modules_test->osp_duration_sum}}</td>
                      <td>{{ $modules_test->shortTestMarksSum + $modules_test->ospTestMarksSum + $modules_test->vivaMarksSum }}</td>
                      <td>{{ $modules_test->branch_name}}</td>
                      <td>{{ $modules_test->subject }}</td>
                      <td><a href="{{ url('/model_test_view',$modules_test->assingedTestId)}}" class="btn12">View</a></td>
                  </tr>
                  @endif
          @endforeach
              </tbody>
          </table>


                  {{-- <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                     <div class="events__item mb-10 hover__active">
                        <div class="events__item-inner d-sm-flex align-items-center justify-content-between white-bg" >
                           
                           
                           <div class="events__content">
                             
                              <h3 class="events__title">Test-1</h3>
							   <div class="events__meta">
                                   <table>
                                        <tbody><tr>
                                         <td><span>Test Name</span>
                                         </td><td style="width:20px;text-align: center;">:</td>
                                         <td><span> test1</span></td>
                                      </tr>
                                       <tr>
                                         <td><span>Total Marks</span>
                                         </td><td style="width:20px;text-align: center;">:</td>
                                         <td><span> 12</span></td>
                                      </tr>
                                       <tr>
                                         <td><span>Duation</span>
                                         </td><td style="width:20px;text-align: center;">:</td>
                                         <td><span> 30 minutes</span></td>
                                      </tr>
                                      <tr>
                                         <td><span>Date</span>
                                         </td><td style="width:20px;text-align: center;">:</td>
                                         <td><span> 30-11-2022</span></td>
                                      </tr>
                                                                                                                 <tr>
                                         <td><span>Branch</span>
                                         </td><td style="width:20px;text-align: center;">:</td>
                                         <td><span> CSE</span></td>
                                      </tr>
                                     <tr>
                                         <td><span>Subject Name</span>
                                         </td><td style="width:20px;text-align: center;">:</td>
                                         <td><span> Database</span></td>
                                      </tr>
        
                                   </tbody></table>
                                   
                                   <div class="header__btn view__btn-2 ml-50 d-none d-sm-block footer_b">
                                      <a href="#" class="btn12" data-toggle="modal" data-target="#myModal">Asing test </a>
                                       <a href="{{url('/assign_modules')}}" class="btn12">Assing modules</a>
                                   </div>
                                </div>
                           </div>
                           <div class="verticals">
				
                             
                                <a href="{{url('/assign_studnet')}}" class="btn12" data-toggle="modal" >Assign Student </a>
                                       <a href="{{url('/assign_teacher')}}" class="btn12">Assign Teacher</a>
                           
                           </div>
                        </div>
                     </div>
                  </div> --}}
				  
			
				  
				  
				  
{{-- 				  
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
				   </div> --}}
             
                 
                 
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

      <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
      <script>
          $(document).ready( function () {
      $('#myTable').DataTable();
      $('#myTable_module').DataTable();
            });
            
      </script>
	  
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
		
		function subm(){
document.forms[0].submit();
document.forms[1].submit();
}
	  </script>
   </body>


</html>

