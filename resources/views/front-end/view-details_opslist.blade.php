<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('front-end.css_teacher')

    <style>
        .main-menu ul li a {
            color: #313131;
        }

        .main-menu ul li.has-dropdown>a::after {
            color: #000;
        }

        .events__item-inner {
            background-image: linear-gradient(to bottom right, #004aac, #629fef);
            box-shadow: rgb(0 0 0 / 26%) 0px 3px 8px;
        }

        .events__title {
            color: #fff;
            margin-top: 4px;
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

        label {
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
                    <img class="loading-logo-icon-2" src="{{ url('assets/img/logo_m.png') }}" alt="">

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
                        <img src="#" alt="logo">
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
            <img class="events-1-shape" src="{{ asset('assets/img/events/events-shape.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-4 offset-xxl-4">
                    <div class="section__title-wrapper mb-60 text-center">
                        <h2 class="section__title">View <span class="yellow-bg yellow-bg-big">Details<img
                                    src="{{ asset('assets/img/shape/yellow-bg.png') }}" alt=""></span></h2>

                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <h4>Test Name:</h4>
                    </div>
                    <div class="col-md-4">
                        <h4>Test Date:</h4>
                    </div>
                    <div class="section__title-wrapper mb-20 col-md-2 text-end">

                        <?php
                        $tests = DB::table('tests')->select('osp_test_id')->where('tests.teacher_id' , '=' , Auth::id())->get();
                       // print_r  ($tests);
                      foreach ($tests as $test) {
                       $osp_test_id = json_decode($test->osp_test_id);
                       if(in_array($id , $osp_test_id)){
                          ?>
                           <a href="{{ url('MK_create_opslist') }}" class="e-btn">Edit</a>
                          <?php
                       }
                      }
                       ?>

                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
            @foreach ($OspQuestionTest as $OspQuestionTests)
                <div class="row">
                    <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                        <div class="events__item mb-10 hover__active">
                            <div
                                class="events__item-inner d-sm-flex align-items-center justify-content-between white-bg">

                                <div class="events__content">
                                    <div class="row">

                                        <div class="col-8">
                                            <h3 class="events__title">Q{{ $loop->iteration }}.
                                                &nbsp;{{ $OspQuestionTests->question }}</h3>
                                        </div>
                                        <div class="col-4   float-right">
                                            <span style="color:white"> Marks {{ $OspQuestionTests->que_marks }}</span>
                                        </div>
                                    </div>
                                    
                                    <br>
                                    <div class="row">
                                       <span style="color:white"> Steps : </span>
                                       
                                            <?php $no_step = DB::table('osp_question_ans')
                                                ->where('osp_tests_id', $id)
                                                ->where('osp_question_tests_id', $OspQuestionTests->id)
                                                ->get(); ?>
                                            @foreach ($no_step as $no_steps)
                                                <div ><span> {{ $no_steps->answer }}</span></div>
                                            @endforeach
                                         
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </section>

    <!-- cta area start -->
    <section class="cta__area mb--100">
        <div class="container">
            <div class="cta__inner cta__inner-2 blue-bg fix">
                <div class="cta__shape">
                    <img src="{{ asset('assets/img/cta/cta-shape.png') }}" alt="">
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
            activate: function(event, ui) {
                var active = $('#tabs').tabs('option', 'active');
                $("#tabid").html('the tab id is ' + $("#tabs ul>li a").eq(active).attr("href"));
            }
        });
    </script>
</body>


</html>
