<!doctype html>
<html class="no-js" lang="zxx">

<head>
  @include('front-end.css_teacher')

   <style>
      input[type=radio] {
         width: 100%;
         border: none;
         height: 20px;
         box-shadow: none;
      }

      #myModal label {
         font-size: 21px;
      }

      @media (min-width: 768px) {
         .modal-dialog {
            width: 432px !important;
            margin: 30px auto;
         }
      }

      .td-radio {
         padding: 5px;
      }

      /* .td-a
      {
        padding: 15px;
      } */
      .td-text {
         padding: 5px;
      }

      h4 {
         margin-top: 1px;
         margin-bottom: 1px;
      }
      .tab {
  display: none;
}
input.invalid {
  background-color: #ffdddd;
}
textarea.invalid{background-color:#ffdddd;}
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
      .main-menu ul li a {
         color: #313131;
      }

      .ml-50 {
         margin: 0 !important;
      }

      .main-menu ul li.has-dropdown>a::after {
         color: #000;
      }

      .session_t {
         margin-right: 20px;
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
                  <img src="assets/img/logo/logo.png" alt="logo">
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
                        <circle class="st0" cx="9" cy="21" r="1" />
                        <circle class="st0" cx="20" cy="21" r="1" />
                        <path class="st0" d="M1,1h4l2.7,13.4c0.2,1,1,1.6,2,1.6h9.7c1,0,1.8-0.7,2-1.6L23,6H6" />
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




   <!------ Question --------------->
   <section class="events__area pt-115 pb-120 p-relative">
      <div class="events__shape">
         <img class="events-1-shape" src="assets/img/events/events-shape.png" alt="">
      </div>
      <div class="container">
         <div class="row">
            <div class="col-xxl-4 offset-xxl-4">
               <div class="section__title-wrapper mb-60 text-center">
                  <h2 class="section__title">Create Question Answer</h2>

               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
               <div class="events__item1 mb-10 hover__active">
                  <span class="background-design"></span>
                  <div class="events__item-inner  align-items-center justify-content-between white-bg">



                     <div class="events__content  ">
                        <h3 class="events__title">Create MCQ </h3>
                        <span class="line-bga1"></span>


                        <div class="events__meta">

                           <form id="regForm">
                                <div class="tab">    
                              <div class="col-12 ">
                                 
                                      <div class="col-md-8">
                                        <h2>Question 1 of 6</h2>
                                     </div> 

                                      <div class="form-outline col-md-4">
                                        <label class="form-label" for="formControlDefault">Marks:</label>
                                        <input type="number" id="formControlDefault" placeholder="Enter Question..."
                                           class="form-control" />
                                     </div> 

                              </div>

                              <div class="form-outline col-12">
                                 <label class="form-label" for="formControlDefault">Question</label>
                                 <input type="text" id="formControlDefault" placeholder="Enter Question..."
                                    class="form-control" />
                              </div>

                              <div class="form-group">
                                <label for="exampleFormControlTextarea1">Answer Paragraph</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" placeholder="Enter Paragraph.."></textarea>
                              </div>
                              <div class="form-outline">
                                 <label class="form-label" for="formControlSm">Time Duration</label>
                                 <input type="text" id="formControlDefault" placeholder="Enter Time Duration..."
                                    class="form-control" />

                              </div>
                              <div class="form-outline">
                                <label class="form-label" for="formControlSm">Marks</label>
                                <input type="text" id="formControlDefault" placeholder="Enter Marks number..."
                                   class="form-control" />

                             </div>
                             </div>
                             <div class="tab">    
                              <div class="col-12 ">
                                 
                                      <div class="col-md-8">
                                        <h2>Question 2 of 6</h2>
                                     </div> 

                                      <div class="form-outline col-md-4">
                                        <label class="form-label" for="formControlDefault">Marks:</label>
                                        <input type="number" id="formControlDefault" placeholder="Enter Question..."
                                           class="form-control" />
                                     </div> 

                              </div>

                              <div class="form-outline col-12">
                                 <label class="form-label" for="formControlDefault">Question</label>
                                 <input type="text" id="formControlDefault" placeholder="Enter Question..."
                                    class="form-control" />
                              </div>

                              <div class="form-group">
                                <label for="exampleFormControlTextarea1">Answer Paragraph</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" placeholder="Enter Paragraph.."></textarea>
                              </div>
                              <div class="form-outline">
                                 <label class="form-label" for="formControlSm">Time Duration</label>
                                 <input type="text" id="formControlDefault" placeholder="Enter Time Duration..."
                                    class="form-control" />

                              </div>
                              <div class="form-outline">
                                <label class="form-label" for="formControlSm">Marks</label>
                                <input type="text" id="formControlDefault" placeholder="Enter Marks number..."
                                   class="form-control" />

                             </div>
                             </div>
                             <div class="tab">    
                              <div class="col-12 ">
                                 
                                      <div class="col-md-8">
                                        <h2>Question 3 of 6</h2>
                                     </div> 

                                      <div class="form-outline col-md-4">
                                        <label class="form-label" for="formControlDefault">Marks:</label>
                                        <input type="number" id="formControlDefault" placeholder="Enter Question..."
                                           class="form-control" />
                                     </div> 

                              </div>

                              <div class="form-outline col-12">
                                 <label class="form-label" for="formControlDefault">Question</label>
                                 <input type="text" id="formControlDefault" placeholder="Enter Question..."
                                    class="form-control" />
                              </div>

                              <div class="form-group">
                                <label for="exampleFormControlTextarea1">Answer Paragraph</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" placeholder="Enter Paragraph.."></textarea>
                              </div>
                              <div class="form-outline">
                                 <label class="form-label" for="formControlSm">Time Duration</label>
                                 <input type="text" id="formControlDefault" placeholder="Enter Time Duration..."
                                    class="form-control" />

                              </div>
                              <div class="form-outline">
                                <label class="form-label" for="formControlSm">Marks</label>
                                <input type="text" id="formControlDefault" placeholder="Enter Marks number..."
                                   class="form-control" />

                             </div>
                             </div>
                             <div class="tab">    
                              <div class="col-12 ">
                                 
                                      <div class="col-md-8">
                                        <h2>Question 4 of 6</h2>
                                     </div> 

                                      <div class="form-outline col-md-4">
                                        <label class="form-label" for="formControlDefault">Marks:</label>
                                        <input type="number" id="formControlDefault" placeholder="Enter Question..."
                                           class="form-control" />
                                     </div> 

                              </div>

                              <div class="form-outline col-12">
                                 <label class="form-label" for="formControlDefault">Question</label>
                                 <input type="text" id="formControlDefault" placeholder="Enter Question..."
                                    class="form-control" />
                              </div>

                              <div class="form-group">
                                <label for="exampleFormControlTextarea1">Answer Paragraph</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" placeholder="Enter Paragraph.."></textarea>
                              </div>
                              <div class="form-outline">
                                 <label class="form-label" for="formControlSm">Time Duration</label>
                                 <input type="text" id="formControlDefault" placeholder="Enter Time Duration..."
                                    class="form-control" />

                              </div>
                              <div class="form-outline">
                                <label class="form-label" for="formControlSm">Marks</label>
                                <input type="text" id="formControlDefault" placeholder="Enter Marks number..."
                                   class="form-control" />

                             </div>
                             </div>
                             <div class="tab">    
                              <div class="col-12 ">
                                 
                                      <div class="col-md-8">
                                        <h2>Question 5  of 6</h2>                                    
                                        </div> 

                                      <div class="form-outline col-md-4">
                                        <label class="form-label" for="formControlDefault">Marks:</label>
                                        <input type="number" id="formControlDefault" placeholder="Enter Question..."
                                           class="form-control" />
                                     </div> 

                              </div>

                              <div class="form-outline col-12">
                                 <label class="form-label" for="formControlDefault">Question</label>
                                 <input type="text" id="formControlDefault" placeholder="Enter Question..."
                                    class="form-control" />
                              </div>

                              <div class="form-group">
                                <label for="exampleFormControlTextarea1">Answer Paragraph</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" placeholder="Enter Paragraph.."></textarea>
                              </div>
                              <div class="form-outline">
                                 <label class="form-label" for="formControlSm">Time Duration</label>
                                 <input type="text" id="formControlDefault" placeholder="Enter Time Duration..."
                                    class="form-control" />

                              </div>
                              <div class="form-outline">
                                <label class="form-label" for="formControlSm">Marks</label>
                                <input type="text" id="formControlDefault" placeholder="Enter Marks number..."
                                   class="form-control" />

                             </div>
                             </div>
                             <div class="tab">    
                              <div class="col-12 ">
                                 
                                      <div class="col-md-8">
                                        <h2>Question 6 of 6</h2>
                                     </div> 

                                      <div class="form-outline col-md-4">
                                        <label class="form-label" for="formControlDefault">Marks:</label>
                                        <input type="number" id="formControlDefault" placeholder="Enter Question..."
                                           class="form-control" />
                                     </div> 

                              </div>

                              <div class="form-outline col-12">
                                 <label class="form-label" for="formControlDefault">Question</label>
                                 <input type="text" id="formControlDefault" placeholder="Enter Question..."
                                    class="form-control" />
                              </div>

                              <div class="form-group">
                                <label for="exampleFormControlTextarea1">Answer Paragraph</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="8" placeholder="Enter Paragraph.."></textarea>
                              </div>
                              <div class="form-outline">
                                 <label class="form-label" for="formControlSm">Time Duration</label>
                                 <input type="text" id="formControlDefault" placeholder="Enter Time Duration..."
                                    class="form-control" />

                              </div>
                              <div class="form-outline">
                                <label class="form-label" for="formControlSm">Marks</label>
                                <input type="text" id="formControlDefault" placeholder="Enter Marks number..."
                                   class="form-control" />

                             </div>
                             </div>
                              <div class="col-12 d-flex">
                                       <div class=" view__btn-2 mt-4 col-6">
                                      
                                     <a href="{{url('/create_short')}}" class="e-btn">Previous</a>
                                  </div>
                                  <div class=" view__btn-2 mt-4 col-6 text-end">
                                      
                                     <button type="button" class="e-btn" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                  </div>
                                   
                                  </div>
                              
                           </form>
                        </div>



                     </div>
                  </div>

               </div>
            </div>
         </div>
      </div>


   </section>


   <!------------------------------start of popup---------------------------------->

   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header text-center">
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               <h4 class="modal-title" id="myModalLabel">Select</h4>
            </div>
            <div class="modal-body text-center">
               <form action="/action_page.php">
                  <input type="radio" name="group1" value="Milk" id="rad1"><label for="rad1">Bulk upload</label>
                  <input type="radio" name="group1" value="Milk" id="rad1"><label for="rad1">Single upload</label>
                  <br>

                  <button type="submit" class="btn btn-default popup_btn" style="margin-top: 20px;">Submit</button>
               </form>
            </div>


         </div>
         <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
   </div>


   <!------------------------------start of popup---------------------------------->


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

   <!-- footer area start -->
   <!-- footer area start -->
   @include('front-end.footer_teacher')
   <!-- footer area end -->
   <!-- JS here -->
   @include('front-end.scripts_teacher')

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

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


     var currentTab = 0; 
showTab(currentTab); 

function showTab(n) {
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
 
//   fixStepIndicator(n)
}

function nextPrev(n) {
  
  var x = document.getElementsByClassName("tab");
  
  if (n == 1 && !validateForm()) return false;
  
  x[currentTab].style.display = "none";
 
  currentTab = currentTab + n;
  
  if (currentTab >= x.length) {
    
    document.getElementById("regForm").submit();
    return false;
  }
  
  showTab(currentTab);
}


function validateForm() {
  
  var x, y, i,t, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  
  for (i = 0; i < y.length; i++) {
    
    if (y[i].value == "") {
      
      y[i].className += " invalid";
      
      valid = false;
    }
  }
  var z = x[currentTab].getElementsByTagName("textarea");
  
  for (i = 0; i < z.length; i++) {
    
    if (z[i].value == "") {
      
      z[i].className += " invalid";
      
      valid = false;
    }
  }
  
  
  return valid; 
}




   </script>
</body>


</html>