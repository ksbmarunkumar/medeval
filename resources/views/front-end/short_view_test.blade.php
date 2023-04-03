<!doctype html>
<html class="no-js" lang="zxx">

<head>
   @include('front-end.css_teacher')
   <style>
      input[type=radio] {
         width: 14%;
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
      .btn12
      {
         padding:10px;
         background-color:#004aac;
         border-radius: 5px;
         color:#fff;
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
      .btn12
      {
         padding:10px;
         background-color:#004aac;
         border-radius: 5px;
         color:#fff;
      }
      .btn12:hover
      {
        color:#fff;
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




   <section class="events__area pt-115 pb-120 p-relative">
      <div class="events__shape">
         <img class="events-1-shape" src="assets/img/events/events-shape.png" alt="">
      </div>
      <div class="container">
         <div class="row">
            <div class="col-xxl-4 offset-xxl-4">
               <div class="section__title-wrapper mb-60 text-center">
                  <h2 class="section__title">View <span class="yellow-bg yellow-bg-big">Short Answer<img
                           src="assets/img/shape/yellow-bg.png" alt=""></span></h2>

               </div>
            </div>
         </div>
        @foreach($ShortQueTest as $ShortQueTests)
            <div class="row">
            <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
               <div class="events__item mb-10 hover__active">
                  
                  <div class="events__item-inner  align-items-center justify-content-between white-bg">
                     
                      
                     
                     <div class="events__content  ">

                        

                        <h3 class="events__title">{{$loop->iteration}}. {{$ShortQueTests->test_name}}</h3>
                        <span class="line-bga"></span>


                        <div class="events__meta">
                           <table>
                              <tr>
                                 <td><span>Test Name</span>
                                 <td style="width:20px;text-align: center;">:</td>
                                 <td><span> {{$ShortQueTests->test_name}}</span></td>
                              </tr>
                              <tr>
                                 <td><span>Marks</span>
                                 <td style="width:20px;text-align: center;">:</td>
                                 <td><span> {{$ShortQueTests->marks}}</span></td>
                              </tr>
                              <tr>
                                 <td><span>Duation</span>
                                 <td style="width:20px;text-align: center;">:</td>
                                 <td><span> {{$ShortQueTests->duration}}</span></td>
                              </tr>
                              <tr>
                                 <td><span>No. Of Question</span>
                                 <td style="width:20px;text-align: center;">:</td>
                                 <td><span> {{$ShortQueTests->no_of_que}}</span></td>
                              </tr>
                                    <?php $subject = DB::table('subjects')->where('id',$ShortQueTests->subject_id)->first() ; ?>
                                    <?php $branch = DB::table('branches')->where('id',$ShortQueTests->branch_id)->first() ; ?>
                                <tr>
                                     <td><span>Branch</span>
                                     <td style="width:20px;text-align: center;">:</td>
                                     <td><span> {{$branch->branch_name}}</span></td>
                                </tr>
                                <tr>
                                     <td><span>Subject Name</span>
                                     <td style="width:20px;text-align: center;">:</td>
                                     <td><span> {{$subject->subject}}</span></td>
                                </tr>

                           </table>
                           <div class="header__btn view__btn-2 ml-50 d-none d-sm-block text-center" >
                              <a href="Short_View_details/{{$ShortQueTests->id}}" class="btn12" >View</a>
                           </div>
                        </div>
                     </div>

                  </div>
               </div>
            </div>
         </div>
        @endforeach 

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