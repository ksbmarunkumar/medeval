<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MedEval</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- CSS here -->
    <link rel="stylesheet" href="https://chillwithpill.com/medeval/admin/assets/css/preloader.css">
    <link rel="stylesheet" href="https://chillwithpill.com/medeval/admin/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://chillwithpill.com/medeval/admin/assets/css/meanmenu.css">
    <link rel="stylesheet" href="https://chillwithpill.com/medeval/admin/assets/css/animate.min.css">
    <link rel="stylesheet" href="https://chillwithpill.com/medeval/admin/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://chillwithpill.com/medeval/admin/assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="https://chillwithpill.com/medeval/admin/assets/css/backToTop.css">
    <link rel="stylesheet" href="https://chillwithpill.com/medeval/admin/assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://chillwithpill.com/medeval/admin/assets/css/fontAwesome5Pro.css">
    <link rel="stylesheet" href="https://chillwithpill.com/medeval/admin/assets/css/elegantFont.css">
    <link rel="stylesheet" href="https://chillwithpill.com/medeval/admin/assets/css/default.css">
    <link rel="stylesheet" href="https://chillwithpill.com/medeval/admin/assets/css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


    <style>
        .teacher_pro .dropdown-toggle::after {
            display: none;
        }

        .teacher_pro .btn {
            padding: 11px 12px !important;
            width: 100% !important;
            box-shadow: none;
            left: 0 !important;
        }

        .teacher_pro .bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
            width: 100% !important;

        }

        .pro .multiselect-dropdown-list input {
            display: none;
        }

        .pro .multiselect-dropdown-all-selector {
            display: none;
        }

        .multiselect-dropdown {
            padding: 11px 12px !important;
            width: 100% !important;
        }

        .events__shape img.events-1-shape {
            z-index: -1;
        }

        .edit_btn {
            background: #40f200;
            box-shadow: none;
            border: none;
            padding: 7px 15px;
            color: #fff;
            border-radius: 5px;

        }

        .delate_btn {
            background: #668fc6;
            box-shadow: none;
            border: none;
            padding: 7px 15px;
            color: #fff;
            border-radius: 5px;
        }

        .table>:not(:last-child)>:last-child>* {
            border-bottom-color: currentColor;
            background: #e5ffd2;
        }


        #custom-search-input {
            margin: 0;
            margin-top: 10px;
            padding: 0;
        }



        #custom-search-input button {
            border: 0;
            background: none;
            /** belows styles are working good */
            padding: 2px 5px;
            margin-top: 2px;
            position: relative;
            left: -28px;
            /* IE7-8 doesn't have border-radius, so don't indent the padding */
            margin-bottom: 0;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            color: #000000;
            box-shadow: none;
        }

        .search-query:focus+button {
            z-index: 3;
        }

        .s_form {
            position: relative;
            height: 40px !important;
            width: 100% !important;
            border-radius: 15px !important;
            overflow: hidden;
            box-shadow: -8px -4px 8px 0px #ffffff, 8px 4px 12px 0px #d1d9e6, 4px 4px 4px 0px #d1d9e6 inset, -4px -4px 4px 0px #ffffff inset !important;
        }

        #reset_btn {
            height: 45px !important;
            width: 100% !important;
            border-radius: 15px !important;
            margin-top: 15px;
            background: #7099d0;
            color: #fff;
        }

        .main_scroll {
            height: 400px;
        }

        .panel-default>.panel-heading+.panel-collapse>.panel-body {
            border-top-color: #ddd;
            height: 745px;
            overflow-y: scroll;
        }

        .btn-warning {
            color: #fff;
            background-color: #40f200;
            border-color: #40f200;
            box-shadow: none;
            margin-top: 10px;
        }

        .btn-warning:hover {
            background-color: #40f200;
        }

        .events__item {
            position: unset;
            z-index: 1;
            margin-top: 12%;
        }

        #accordion .form-control {
            position: relative;
            height: 30px !important;
            width: 100% !important;
            border-radius: 15px !important;
            overflow: hidden;
            box-shadow: -8px -4px 8px 0px #ffffff, 8px 4px 12px 0px #d1d9e6, 4px 4px 4px 0px #d1d9e6 inset, -4px -4px 4px 0px #ffffff inset !important;
        }

        .panel-title {
            width: 100%;
        }

        #accordion {

            .panel,
            .panel-heading,
            panel-title,
            .panel-body {
                border: 0;
            }

            .panel {
                box-shadow: none;
            }

            .panel-heading {
                border-radius: 0;

                .panel-title a {
                    text-decoration: none;
                    padding: 1em 0;
                }

                .panel-title a span {
                    float: right;
                    width: 50px;
                }

                .panel-title a span:after {
                    content: "\2014";
                    color: #1B5062;
                    font-size: 20px;
                }

                .panel-title a.collapsed span:after {
                    content: "+";
                }
            }
        }
        }

        .events__shape img.events-1-shape {
            z-index: -1;
        }

        .add-more {
            margin: 15px 0 0 0;
        }

        .add_all {
            border: 2px solid #d6d6d6;
            margin-top: 10px;
            padding: 15px;
        }

        .e-btn {
            display: inline-block;
            height: 50px;
            line-height: 52px;
            text-align: center;
            padding: 0 25px;
            color: #ffffff !important;
            background: #40f200 !important;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            font-weight: 500;
            text-transform: capitalize;
            border: none !important;
            box-shadow: none !important;
        }

        .form-control {
            display: block;
            width: 100%;
            height: 34px;
            padding: 18px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
            box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
            -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
        }

        /* Style the form */
        #regForm {
            background-color: #ffffff;
            margin: 100px auto;
            padding: 40px;
            width: 70%;
            min-width: 300px;
        }

        /* Style the input fields */
        input {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa;
        }

        /* Mark input boxes that gets an error on validation: */
        input.invalid {
            background-color: #ffdddd;
        }

        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        /* Mark the active step: */
        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: #04AA6D;
        }

        .form-select {
            padding: 11px 12px !important;
        }

        #form_area {
            background: #e9e9e9;
            box-shadow: rgb(17 17 26 / 10%) 0px 4px 16px, rgb(17 17 26 / 5%) 0px 8px 32px;
            padding: 30px;
            border-radius: 15px 0;
        }
    </style>

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

        .all_add_btn {
            width: 100%;
            text-align: left;
            box-shadow: none;
            background: #004aac;
            border: none;
            padding: 12px;
            margin-top: 12px;
        }

        .all_add_btn:hover {
            width: 100%;
            text-align: left;
            box-shadow: none;
            background: #40f200;
            border: none;

        }


        #add_icon_new {
            float: right;
            background: #40f200;
            height: 20px;
            padding: 4px;
            width: 20px;
            border-radius: 50%;
            color: #fff;
            font-size: 12px;
            text-align: center;
            position: relative;
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
    </style>
    <!-- header area start -->
    <header>
        <div id="header-sticky" class="header__area header__padding-2 header__shadow">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-2 col-sm-4 col-6">
                        <div class="header__left d-flex">
                            <div class="logo">
                                <a href="https://chillwithpill.com/medeval/admin/teacher">
                                    <img src="assets/img/student-profile.png" alt="logo" id="student-profile"
                                        style="width:80px;">
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-10 col-sm-8 col-6">
                        <div class="header__right d-flex justify-content-end align-items-center">
                            <div class="main-menu main-menu-2">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="has-dropdown">
                                            <a href="#">Test</a>
                                            <ul class="submenu">
                                                <li><a href="https://chillwithpill.com/medeval/admin/View_test">View</a>
                                                </li>
                                                <li><a
                                                        href="https://chillwithpill.com/medeval/admin/assign_test">Assign</a>
                                                </li>
                                                <li><a
                                                        href="https://chillwithpill.com/medeval/admin/create_test">Create</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="#">MCQ</a>
                                            <ul class="submenu">
                                                <li><a href="https://chillwithpill.com/medeval/admin/View_MCQ">View</a>
                                                </li>
                                                <li><a
                                                        href="https://chillwithpill.com/medeval/admin/MK_MCQ_test">Create</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="has-dropdown">
                                            <a href="#">Short Answer</a>
                                            <ul class="submenu">
                                                <li><a
                                                        href="https://chillwithpill.com/medeval/admin/short_view">View</a>
                                                </li>
                                                <li><a
                                                        href="https://chillwithpill.com/medeval/admin/short_assign">Assign</a>
                                                </li>
                                                <li><a
                                                        href="https://chillwithpill.com/medeval/admin/MK-short-que">Create</a>
                                                </li>
                                                <li><a href="#">Scan</a></li>
                                                <li><a href="#">Evaloution</a></li>
                                            </ul>
                                        </li>

                                        <li class="has-dropdown">
                                            <a href="#">Osplist</a>
                                            <ul class="submenu">
                                                <li><a
                                                        href="https://chillwithpill.com/medeval/admin/opslist_view">View</a>
                                                </li>
                                                <li><a
                                                        href="https://chillwithpill.com/medeval/admin/opslist_assign">Assign</a>
                                                </li>
                                                <li><a
                                                        href="https://chillwithpill.com/medeval/admin/MK_create_opslist">Create</a>
                                                </li>
                                            </ul>
                                        </li>




                                        </li>

                                        <li class="session_t"><a href="#">My Session</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="header__btn header__btn-2 ml-50 d-none d-sm-block">
                                <a href="https://chillwithpill.com/medeval/admin/web-logout" class="e-btn"><i
                                        class="fa fa-sign-in" aria-hidden="true"></i> LogOut</a>
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
    </header> <!-- header area end -->


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

                </div>
                <div class="sidebar__cart mt-30">
                    <a href="#">
                        <div class="header__cart-icon">
                            <svg viewBox="0 0 24 24">
                                <circle class="st0" cx="9" cy="21" r="1" />
                                <circle class="st0" cx="20" cy="21" r="1" />
                                <path class="st0"
                                    d="M1,1h4l2.7,13.4c0.2,1,1,1.6,2,1.6h9.7c1,0,1.8-0.7,2-1.6L23,6H6" />
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
                <div class="alert " role="alert">
                    Module Assigned successfully
                </div>

                <h2 class="section__title" style="text-align:center; margin-bottom: 30px;">Assign Short
                    <span class="yellow-bg yellow-bg-big"><img src="assets/img/shape/yellow-bg.png"
                            alt="">Answer</span>
                </h2>
                <form method="POST" action="https://chillwithpill.com/medeval/admin/create_test"
                    enctype="multipart/form-data" id="form_area">
                    <input type="hidden" name="_token" value="hGt1qv2ItL3pjqfgjCCd4IFLQkcbQBSALhQapSPs">
                    <!--<input type="hidden" name="_token" value="ST4utUKTd4gx4qr1R0NAGygwNvEkuRjNxNJR6hni">-->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="test_name">Test Name</label>
                                <input type="text" placeholder="Enter test name"
                                    value="{{ $shortQue->test_name }}" readonly class="form-control"
                                    name="test_name">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="marks">Marks</label>
                                <input type="text" placeholder="Enter marks" class="form-control"
                                    value="{{ $shortQue->marks }}" name="marks" readonly>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="duration">Duration</label>
                                <input type="text" placeholder="Enter duration" class="form-control"
                                    value="{{ $shortQue->duration }}" name="duration" readonly>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="no_of_que">Date</label>
                                <input type="date" placeholder="Enter no of question" readonly
                                    value="{{ $shortQue->created_at }}" class="form-control" name="no_of_que">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="branch_id" for="formControlSm">Branch</label>
                                <select class="form-select form-select-normal mb-3" disabled
                                    aria-label=".form-select-normal example" name="branch_id">
                                    <option selected>{{ $shortQue->branch_name }}</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="subject_id">Subject Name</label>
                                <select class="form-select form-select-normal mb-3" disabled
                                    aria-label=".form-select-normal example" name="subject_id">
                                    <option selected>{{ $shortQue->subject }}</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="teacher_pro">
                                <input type="hidden" class="teacher_name" name="teacher_name">
                                <label>Teacher</label><br>
                                <select id="teacher_ids" data-show-subtext="true" required data-live-search="true">

                                </select>
                                {{-- <select class="selectpicker" data-show-subtext="true" data-live-search="true">
                                    <option>Select</option>
                                    <option>Deepak Singh (Department)</option>
                                    <option>Vivek Singh</option>
                                    <option>Rohit Singh</option>
                                    <option>Rohan Kumar</option>
                                    <option>Sonu Kumar</option>
                                    <option>Deepu Singh</option>

                                </select> --}}
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label>Student</label><br>
                            {{-- <select name="field2" id="field2" multiple multiselect-search="true"
                                multiselect-select-all="true" multiselect-max-items="25"
                                onchange="console.log(this.selectedOptions)">
                                <option>Deepak Singh (Roll Number)</option>
                                <option>Vivek Singh</option>
                                <option>Rohit Singh</option>
                                <option>Rohan Kumar</option>
                                <option>Sonu Kumar</option>
                                <option>Deepu Singh</option>
                            </select> --}}
                            <select name="student_ids[]" id="student_ids" multiple>

                            </select>

                        </div>


                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-8">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Teacher</th>
                                        <th>Student</th>

                                    </tr>
                                </thead>
                                <tbody>



                                </tbody>
                            </table>
                        </div>
                    </div>

            </div>

            <button type="button" id="assign_btn" class="btn btn-warning">Assign</button>

            {{-- <button type="submit" class="btn btn-primary e-btn">CREATE TEST</button> --}}
            </form>
        </div>

    </section>



    <!-- footer area start -->
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
    <script src="{{ asset('assets/js/vendor/jquery-3.5.1.min.js') }}"></script>
    {{-- <script src="https://chillwithpill.com/medeval/admin/assets/js/vendor/waypoints.min.js"></script>
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
    <script src="https://chillwithpill.com/medeval/admin/assets/js/imagesloaded.pkgd.min.js"></script> --}}
    <script src="{{ asset('assets/js/main.js') }} "></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    {{-- <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script> --}}

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        setUpStudentsList()
        setUpTeachersList()
        //Tabs Layout Code
        $('.alert').hide()
        $('#student_ids').on('change', function(e) {

            addTableRow($('#student_ids').val())
        })


        $('#teacher_ids').on('change', function(e) {

            let tid = $('#teacher_ids').val()

            $.ajax({
                url: `{{ route('get_teacher_of_id') }}`,
                type: 'post',
                data: {
                    '_token': '{{ csrf_token() }}',
                    'tId': tid
                },
                success: function(result) {
                    setTeacherName(result.name)
                }
            });
        });


        // $("#tabs").tabs({
        //     activate: function(event, ui) {
        //         var active = $('#tabs').tabs('option', 'active');
        //         $("#tabid").html('the tab id is ' + $("#tabs ul>li a").eq(active).attr("href"));
        //     }
        // });


        $("#assign_btn").click(function() {
            assignModule()
        });


        function addTableRow(studentIdlist) {
            $('tbody').empty();

            $.ajax({
                url: "{{ route('get_students_of_ids') }}",
                type: 'post',
                data: {
                    '_token': '{{ csrf_token() }}',
                    'student_ids': studentIdlist
                },
                success: function(result) {
                    let index = 1
                    let teacherName = $('.teacher_name').val()
                    result.forEach(student => {
                        rowMarkup =
                            `<tr><td> ${index} </td> <td class='teacher_name_td'> ${teacherName} </td> <td>${student.name}</td></tr>`;
                        $('tbody').append(rowMarkup);
                        index++;
                    });
                }
            });

        }

        function setTeacherName(teacherName) {
            console.log(teacherName);
            $('.teacher_name').val(teacherName);
            $('.teacher_name_td').text(teacherName);

        }

        function setUpStudentsList() {

            $("#student_ids").select2({
                minimumInputLength: 0,
                tags: [],
                ajax: {
                    url: "{{ route('get_students_from_test_id') }}",
                    dataType: 'json',
                    type: "GET",
                    quietMillis: 50,
                    data: function(term) {
                        return {
                            term: term
                        };
                    },
                    processResults: function(data) {
                        return {
                            results: $.map(data, function(item) {
                                console.log("Student", item);
                                return {
                                    text: item.name,
                                    id: item.id
                                }
                            })
                        };
                    }
                }

            });
        }

        function setUpTeachersList() {
            $("#teacher_ids").select2({
                minimumInputLength: 0,
                tags: [],
                quietMillis: 50,
                ajax: {
                    url: "{{ route('teachers_list') }}",
                    dataType: 'json',
                    type: "GET",
                    data: function(term) {
                        return {
                            term: term
                        };
                    },
                    processResults: function(data) {
                        return {
                            results: $.map(data, function(item) {
                                return {
                                    text: item.name,
                                    id: item.id
                                }
                            })
                        };
                    }
                }
            });
        }



        function assignModule() {
            let data = {
                '_token': '{{ csrf_token() }}',
                'student_ids': $('#student_ids').val(),
                'teacher_id': $('#teacher_ids').val(),
                'shortQue_id': "{{ $shortQue->id }}",
                'test_id': "{{ session('tId') }}",
                'assigner_id': "{{ auth()->user()->id }}"
            }
            $.ajax({
                url: "{{ route('assign_module') }}",
                type: 'post',
                data: data,
                success: function(result) {
                    
                    $('.alert').addClass('alert-success')
                    $('.alert').text(result.message)
                    $('.alert').fadeIn(200)
                    setTimeout(() => {
                        $('.alert').fadeOut(200)
                        $('.alert').removeClass('alert-success')
                    }, 3000);
                },
                error: function(e) {
                    $('.alert').addClass('alert-danger')
                    $('.alert').text(e.responseJSON.message)
                    $('.alert').fadeIn(200)
                    setTimeout(() => {
                        $('.alert').fadeOut(200)
                        $('.alert').removeClass('alert-danger')

                    }, 3000);
                    console.log();
                }
            });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>





</body>


</html>
