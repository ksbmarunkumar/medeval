<!doctype html>

<html class="no-js" lang="zxx">
   
<head>
      @include('front-end.css_student')
      <style>
          
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
                  <a href="{{url('/StudentLogin')}}">
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

		<div class="wrapper">
		  <div class="profile">
			<div class="content">
			  <h1>My Profile</h1>
			     <form action="{{ route('student-profile-update') }}" method="post" enctype="multipart/form-data" id="form_area">
			         @csrf
				<!-- Photo -->
				<fieldset>
				 
				<div class="grid-65">
					<span class="photo" title="Upload your Avatar!">
                        <img id="imgPreview" src="{{asset('student_images')}}{{$student->image}}" alt="pic"style="height:150px; width:150px;" class="img-fluid" />
					</span>
					<input type="file" class="btn" name="image" id="photo" class="form-control"/>
				</div>
				</fieldset>
				<fieldset>
				  <div class="grid-35">
					<label for="s_id">Student Id</label>
				  </div>
				  <div class="grid-65">
					<input type="text" id="s_id" tabindex="1" name="student_id" class="form-control" value="{{$student->id}}" readonly/>
				  </div>
				</fieldset>
				<fieldset>
				  <div class="grid-35">
					<label for="R_no">Admission No</label>
				  </div>
				  <div class="grid-65">
					<input type="text" id="R_no" tabindex="2" name="roll_no" class="form-control" value="{{$student->admission_no}}" readonly/>
				  </div>
				</fieldset>
				<fieldset>
				  <div class="grid-35">
					<label for="R_no">Student Code</label>
				  </div>
				  <div class="grid-65">
					<input type="text" id="R_no" tabindex="2" name="roll_no" class="form-control" value="{{$student->student_code}}" readonly/>
				  </div>
				</fieldset>
				<fieldset>
				  <div class="grid-35">
					<label for="name">Name</label>
				  </div>
				  <div class="grid-65">
					<input type="text" id="name" class="form-control @error('name') is-invalid @enderror" tabindex="2" name="name" value="{{$student->name}}"/>
				  </div>
				  <div class="help-block with-errors" ></div>
                    @error('name')
                        <span class="invalid-name" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</fieldset>
				
				<fieldset>
				  <div class="grid-35">
					<label for="P_no">Phone Number</label>
				  </div>
				  <div class="grid-65">
					<input type="text" id="P_no" tabindex="2" name="mobile" value="{{$student->mobile_no}}" class="form-control @error('mobile') is-invalid @enderror"/>
				  </div>
				  <div class="help-block with-errors" ></div>
                    @error('mobile')
                        <span class="invalid-mobile" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</fieldset>
				
			
				<!-- Email -->
				<fieldset>
				  <div class="grid-35">
					<label for="email">Email Address</label>
				  </div>
				  <div class="grid-65">
					<input type="email" id="email" tabindex="6" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$student->email}}"/>
				  </div>
				  <div class="help-block with-errors" ></div>
                    @error('email')
                        <span class="invalid-email" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</fieldset>
				
					<!-- Email -->
				<fieldset>
				  <div class="grid-35">
					<label for="pass">Password</label>
				  </div>
				  <div class="grid-65">
					<input type="pass" id="pass" tabindex="6" class="form-control @error('email') is-invalid @enderror" name="password"/>
				  </div>
				  <div class="help-block with-errors" ></div>
                    @error('email')
                        <span class="invalid-email" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</fieldset>
                	<fieldset>
				  <div class="grid-35">
					<label for="R_no">Year of Joining</label>
				  </div>
				  <div class="grid-65">
					<input type="text" id="R_no" tabindex="2" name="roll_no" class="form-control" value="{{$student->year_of_joining}}" readonly/>
				  </div>
				</fieldset>
				<fieldset>
				  <input type="submit" class="Btn" value="Update" />
				</fieldset>

			  </form>
			</div>
		  </div>
		</div>


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
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
        $(document).ready(()=>{
            $('#photo').change(function(){
                const file = this.files[0];
                console.log(file);
                if (file){
                let reader = new FileReader();
                reader.onload = function(event){
                    console.log(event.target.result);
                    $('#imgPreview').css({'height':'150px','width':'150px'});
                    $('#imgPreview').attr('src', event.target.result);
                }
                reader.readAsDataURL(file);
                }
        
            });
        });

    </script>
   </body>


</html>

