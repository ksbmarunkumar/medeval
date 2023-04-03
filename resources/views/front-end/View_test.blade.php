<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('front-end.css_teacher');
    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet" />


    <style>
        .white-bg {
            background: #ffffff;
        }

        input[type=radio] {
            border: 0px;
            width: 14%;
            height: 20px;
        }

        .events__item-inner {
            background: #fff;
            box-shadow: rgb(0 0 0 / 26%) 0px 3px 8px;
            cursor: pointer;
        }

        .events__title {
            color: #000;
            margin-top: 4px;
        }

        a:focus,
        a:hover {
            color: #fff !important;
        }

        .btn12 {
            padding: 10px;
            background-color: #004aac;
            border-radius: 5px;
            color: #fff;
            margin-right: 10px;
        }

        .btn12:hover {
            color: #fff !important;
        }

        .events__more {
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

        fieldset textarea,
        input {
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

        @media (min-width: 768px) {
            .modal-dialog {
                width: 344px !important;
                margin: 30px auto;
            }
        }

        #myModal label {
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

        .footer_b {
            margin-top: 30px;
            text-align: left !important;
        }

        .verticals {
            margin-top: 292px;
        }

        .main-menu ul li a:hover {
            color: #40f200 !important;
        }

           /* for table data search */

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
        .main-menu ul li a {
            color: #313131;
        }

        .main-menu ul li.has-dropdown>a::after {
            color: #000;
        }
    </style>
    <!-- header area start -->
    <style>
        .main-menu ul li a {
            font-size: 14px !important;
        }
    </style>
    <!-- header area end -->
    @include('front-end.header_teacher')

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
                        <img src="https://chillwithpill.com/medeval/admin/assets/img/logo/logo.png" alt="logo">
                    </a>
                </div>
                <div class="mobile-menu fix"></div>


            </div>
        </div>
    </div>
    <!-- sidebar area end -->
    <div class="body-overlay"></div>
    <!-- sidebar area end -->


    @if (session('msg'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Bravo !</strong> {{ session('msg') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <section class="events__area pt-115 pb-120 p-relative">
        <div class="events__shape">
            <img class="events-1-shape" src="https://chillwithpill.com/medeval/admin/assets/img/events/events-shape.png"
                alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-4 offset-xxl-4">
                    <div class="section__title-wrapper mb-60 text-center">
                        <h2 class="section__title">List All <span class="yellow-bg yellow-bg-big"><img
                                    src="https://chillwithpill.com/medeval/admin/assets/img/shape/yellow-bg.png"
                                    alt="">Test</span></h2>

                    </div>
                </div>
            </div>

        


            <div class="row">
                @php
                        $index = 1
                    @endphp

                <table id="myTable" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Test</th>
                            <th>Test Name</th>
                            <th>Total Marks</th>
                            <th>Duation</th>
                            <th>Date</th>
                            <th>Branch</th>
                            <th>Subject Name</th>
                            <th>View Button</th>
                            <th>Edit Button</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                @foreach ($tests as $test)
                        <tr>
                            <td>{{$index}}</td>
                            <td>{{ $test->test_name }}</td>
                            <td>{{ $test->marks }}</td>
                            <td>{{ $test->duration }}</td>
                            <td>{{ $test->date }} </td>
                            <td>{{ $test->branch_name }}</td>
                            <td>{{ $test->subject }}</td>
                            <td><a href="{{ url('/test_view' , $test->id) }}" class="btn12">View</a></td>
                            <td><a href="{{ route('test_edit' , $test->id) }}" class="btn12">Edit</a></td>
                        </tr>
                        @php
                        $index++;
                    @endphp
                @endforeach
                    </tbody>
                </table>

               {{-- @php
                   $index = 1
               @endphp
                @foreach ($tests as $test)
                    <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                        <div class="events__item mb-10 hover__active">
                            <div
                                class="events__item-inner d-sm-flex align-items-center justify-content-between white-bg">


                                <div class="events__content">

                                    <h3 class="events__title">Test-{{$index}}</h3>
                                    <div class="events__meta">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td><span>Test Name</span>
                                                    </td>
                                                    <td style="width:20px;text-align: center;">:</td>
                                                    <td><span> {{ $test->test_name }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td><span>Total Marks</span>
                                                    </td>
                                                    <td style="width:20px;text-align: center;">:</td>
                                                    <td><span> {{ $test->marks }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td><span>Duation</span>
                                                    </td>
                                                    <td style="width:20px;text-align: center;">:</td>
                                                    <td><span> {{ $test->duration }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td><span>Date</span>
                                                    </td>
                                                    <td style="width:20px;text-align: center;">:</td>
                                                    <td><span> {{ $test->date }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td><span>Branch</span>
                                                    </td>
                                                    <td style="width:20px;text-align: center;">:</td>
                                                    <td><span> {{ $test->branch_name }}</span></td>
                                                </tr>
                                                <tr>
                                                    <td><span>Subject Name</span>
                                                    </td>
                                                    <td style="width:20px;text-align: center;">:</td>
                                                    <td><span> {{ $test->subject }}</span></td>
                                                </tr>

                                            </tbody>
                                        </table>

                                      <div class="row">
                                        <div class="col-4">
                                            <div class="header__btn view__btn-2 ml-50 d-none d-sm-block footer_b">
                                                <a href="{{ url('/test_view' , $test->id) }}" class="btn12">View</a>
    
                                            </div>
                                           
                                        </div>
                                        <div class="col-6">
                                            <div class="header__btn view__btn-2 ml-50 d-none d-sm-block footer_b">
                                                <a href="{{ route('test_edit' , $test->id) }}" class="btn12">Edit</a>
    
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    @php
                        $index++;
                    @endphp
                @endforeach --}}


            </div>
        </div>
    </section>



    <!-- cta area start -->
    <section class="cta__area mb--100">
        <div class="container">
            <div class="cta__inner cta__inner-2 blue-bg fix">
                <div class="cta__shape">
                    <img src="https://chillwithpill.com/medeval/admin/assets/img/cta/cta-shape.png" alt="">
                </div>
                <div class="row align-items-center">
                    <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-6">
                        <div class="cta__content">
                            <h3 class="cta__title">Start learning by Downloading Apps.</h3>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-6">
                        <div class="cta__apps d-lg-flex justify-content-end p-relative z-index-1">

                            <a target="_blank" href="#" class="active"><i class="fab fa-google-play"></i> Play
                                Store</a>
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
                                        <a href="index.html">
                                            <img src="assets/img/logo_m.png" alt="" style="width:100px;">
                                        </a>
                                    </div>
                                </div>
                                <div class="footer__widget-body footer__widget-body-2">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has
                                        been the industry's standard dummy text </p>

                                    <div class="footer__social">
                                        <ul>
                                            <li><a href="#"><i class="social_facebook"></i></a></li>
                                            <li><a href="#" class="tw"><i class="social_twitter"></i></a>
                                            </li>
                                            <li><a href="#" class="pin"><i class="social_pinterest"></i></a>
                                            </li>
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
    <!-- footer area end -->
    <!-- JS here -->
    <script src="https://chillwithpill.com/medeval/admin/assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="https://chillwithpill.com/medeval/admin/assets/js/vendor/waypoints.min.js"></script>
    <script src="https://chillwithpill.com/medeval/admin/assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://chillwithpill.com/medeval/admin/assets/js/jquery.meanmenu.js"></script>
    <script src="https://chillwithpill.com/medeval/admin/assets/js/swiper-bundle.min.js"></script>
    <script src="https://chillwithpill.com/medeval/admin/assets/js/owl.carousel.min.js"></script>
    <script src="https://chillwithpill.com/medeval/admin/assets/js/jquery.fancybox.min.js"></script>
    <script src="https://chillwithpill.com/medeval/admin/assets/js/isotope.pkgd.min.js"></script>
    <script src="https://chillwithpill.com/medeval/admin/assets/js/parallax.min.js"></script>
    <script src="https://chillwithpill.com/medeval/admin/assets/js/backToTop.js"></script>
    <script src="https://chillwithpill.com/medeval/admin/assets/js/jquery.counterup.min.js"></script>
    <script src="https://chillwithpill.com/medeval/admin/assets/js/ajax-form.js"></script>
    <script src="https://chillwithpill.com/medeval/admin/assets/js/wow.min.js"></script>
    <script src="https://chillwithpill.com/medeval/admin/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="https://chillwithpill.com/medeval/admin/assets/js/main.js"></script>
       <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
    $('#myTable').DataTable();
          } );
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
            activate: function(event, ui) {
                var active = $('#tabs').tabs('option', 'active');
                $("#tabid").html('the tab id is ' + $("#tabs ul>li a").eq(active).attr("href"));
            }
        });

        function subm() {
            document.forms[0].submit();
            document.forms[1].submit();
        }
    </script>
</body>


</html>
