<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('front-end.css_teacher')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        #custom-search-input {
            margin: 0;
            margin-top: 10px;
            padding: 0;
        }

        .error {
            color: red;
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

        #get_mcq {
            height: 45px !important;
            width: 100% !important;
            border-radius: 15px !important;
            margin-top: 15px;
            background: #40f200;
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
    
    @viteReactRefresh
    @vite('resources/js/app.jsx')

    <!-- sidebar area end -->
    <div class="body-overlay"></div>
    <!-- sidebar area end -->

    @yield('main_section')

    <!-- footer area start -->
    <!-- footer area start -->
    @include('front-end.footer_teacher')
    <!-- footer area end -->
    <!-- JS here -->
    @include('front-end.scripts_teacher')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"
        integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"
        integrity="sha512-6S5LYNn3ZJCIm0f9L6BCerqFlQ4f5MwNKq+EthDXabtaJvg3TuFLhpno9pcm+5Ynm6jdA9xfpQoMz2fcjVMk9g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://use.fontawesome.com/e9cdcdc958.js"></script>


    <script src="{{ asset('assets/js/validation.js') }}"></script>
    <script src="{{ asset('assets/js/test_selection.js') }}"></script>

    @stack('page_script')
   
</body>


</html>
