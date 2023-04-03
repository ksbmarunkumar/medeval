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

        #get_mcq , #get_short  {
            height: 45px !important;
            width: 100% !important;
            border-radius: 15px !important;
            margin-top: 15px;
            background: #40f200;
            color: #fff;
        }
        .panel-default>.panel-heading+.panel-collapse>.panel-body {
    border-top-color: #ddd;
    height: 100% ;
    overflow-y: scroll;
      }
      #total_marks_add_v{
        display: none;
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
    <!-- sidebar area end -->
    <div class="body-overlay"></div>
    <!-- sidebar area end -->

    <section class="events__area pt-115 pb-120 p-relative">
        <div class="events__shape">
            <img class="events-1-shape" src="assets/img/events/events-shape.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <h2 class="section__title" style="text-align:center; margin-bottom: 30px;">Create
                    <span class="yellow-bg yellow-bg-big"><img src="assets/img/shape/yellow-bg.png"
                            alt="">TEST</span>
                </h2>
                <form method="POST" action="{{ route('mk-test-store') }}" enctype="multipart/form-data" id="form_area" >
                    @csrf
                    <!--<input type="hidden" name="_token" value="ST4utUKTd4gx4qr1R0NAGygwNvEkuRjNxNJR6hni">-->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="test_name">Test Name</label>
                                <input type="text" placeholder="Enter test name" class="form-control"
                                    name="test_name" required>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="marks">Marks</label>
                                <input type="text" id="total_marks" readonly placeholder="Enter marks"
                                    class="form-control" name="marks" value="0">
                                    <input type="text" id="total_marks_add_v" readonly placeholder="Enter marks"
                                    class="form-control" name="marks" value="0">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="duration">Duration</label>
                                <input type="text" placeholder="Enter duration" readonly id="total_duration"
                                    class="form-control" name="duration" value="0">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="datetime-local" class="form-control" name="date" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="branch_id" for="formControlSm">Branch</label>
                                <select class="form-select form-select-normal mb-3"
                                    aria-label=".form-select-normal example" name="branch_id" required>
                                    <option value="false" selected="">Select Branch</option>
                                    @foreach ($branches as $b)
                                        <option value="{{ $b->id }}">{{ $b->branch_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="subject_id">Subject Name</label>
                                <select class="form-select form-select-normal mb-3"
                                    aria-label=".form-select-normal example" name="main_subject_id" required>
                                    <option value="false" selected="">Select Subject</option>
                                    @foreach ($subjects as $s)
                                        <option value="{{ $s->id }}">{{ $s->subject }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>



                        <div class="add_all trcounter" id="dynamicrow">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel-group" id="accordion" role="tablist"
                                        aria-multiselectable="true">

                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                <h4 class="panel-title">
                                                    <div class="form-group">
                                                        {{-- mCQ section --}}
                                                        <input type="text" multiple="multiple"
                                                            class="form-control myselect2" placeholder="Mcq"
                                                            id="mcqIDMK" readonly>
                                                        <div id="mcq_id_container">

                                                        </div>
                                                        {{-- <input type="hidden" class="form-control" placeholder="Mcq"
                                                            id="mcqID" name="mcq_test_id" value=""> --}}
                                                    </div>
                                                    <a class="collapsed" role="button" data-toggle="collapse"
                                                        data-parent="#accordion" href="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        MCQ <i class="fa fa-plus" aria-hidden="true"
                                                            id="add_icon_new"></i>
                                                        <span></span>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                                aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-12">

                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="pwd">Mcq</label>
                                                                    <input type="text" class="form-control"
                                                                        name="mcq_set_name" placeholder="Mcq"
                                                                        id="mcq">
                                                                </div>
                                                            </div>


                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="pwd">From Date</label>
                                                                    <input type="date" class="form-control"
                                                                        name="mcq_sdate" id="mcq_sdate">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="pwd">To Date</label>
                                                                    <input type="date" class="form-control"
                                                                        name="mcq_edate" id="mcq_edate">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="subject_id">Subject Name</label>
                                                                    <?php $subjects = DB::table('subjects')->get(); ?>
                                                                    <select
                                                                        class="form-select form-select-normal mb-3 s_form"
                                                                        aria-label=".form-select-normal example"
                                                                        id="mcq_subjectId" name="subject_id">
                                                                        <option selected="">Select Subject</option>
                                                                        @foreach ($subjects as $s)
                                                                            <option value="{{ $s->id }}">
                                                                                {{ $s->subject }}</option>
                                                                        @endforeach

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input type="button" value="GET"
                                                                        id="get_mcq" name="get_mcq"
                                                                        onclick="getMCQ()">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <input type="reset" value="Reset"
                                                                        id="reset_btn">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    {{-- //////////////////////////////// --}}

                                                    <div class="row">
                                                        <div class="col-12" id="mcq_results_container">

                                                        </div>
                                                    </div>
                                                    {{--  --}}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingTwo1">
                                                <h4 class="panel-title">
                                                    <div class="form-group">
                                                        <input type="text" multiple="multiple"
                                                            class="form-control myselect2" id="shortansID"
                                                            placeholder="Short Answer" id="shortAns_setName">

                                                        <div id="short_id_container">

                                                        </div>
                                                        {{-- <input type="hidden" class="form-control"
                                                            placeholder="Short Answer" readonly name="shortansID"> --}}

                                                    </div>
                                                    <a class="collapsed" role="button" data-toggle="collapse"
                                                        data-parent="#accordion" href="#collapseTwo1"
                                                        aria-expanded="false" aria-controls="collapseTwo1">
                                                        Short Answer <i class="fa fa-plus" aria-hidden="true"
                                                            id="add_icon_new"></i>
                                                        <span></span>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo1" class="panel-collapse collapse" role="tabpanel"
                                                aria-labelledby="headingTwo1">
                                                <div class="panel-body">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="pwd">Short Answer</label>
                                                            <input type="text" class="form-control"
                                                                placeholder="Short Answer" id="ShortAnswer_name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="pwd">From Date</label>
                                                            <input type="date" class="form-control"
                                                                id="short_sdate">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="pwd">To Date</label>
                                                            <input type="date" class="form-control"
                                                                id="short_edate">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="subject_id">Subject Name</label>
                                                            <?php $subjects = DB::table('subjects')->get(); ?>
                                                            <select class="form-select form-select-normal mb-3 s_form"
                                                                aria-label=".form-select-normal example"
                                                                id="short_subjectId" name="subject_id">
                                                                <option selected="">Select Subject</option>
                                                                @foreach ($subjects as $s)
                                                                    <option value="{{ $s->id }}">
                                                                        {{ $s->subject }}</option>
                                                                @endforeach

                                                            </select>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="button" value="GET" id="get_short"
                                                                    name="get_mcq" onclick="getShortAns()">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="reset" value="Reset" id="reset_btn">
                                                            </div>
                                                        </div>

                                                    </div>

                                                    {{-- //////////////////////////////// --}}

                                                    <div class="row">
                                                        <div class="col-12" id="short_results_container">

                                                        </div>
                                                    </div>
                                                    {{--  --}}
                                                </div>
                                            </div>


                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingTwo2">
                                                    <h4 class="panel-title">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control myselect2"
                                                                placeholder="Osplist" multiple="multiple" readonly
                                                                id="OsplistIDMK">
                                                            <div id="osp_id_container">

                                                            </div>
                                                            {{-- <input type="hidden" class="form-control"
                                                                placeholder="Osplist" id="OsplistID"
                                                                name="osplis_id"> --}}

                                                        </div>
                                                        <a class="collapsed" role="button" data-toggle="collapse"
                                                            data-parent="#accordion" href="#collapseTwo2"
                                                            aria-expanded="false" aria-controls="collapseTwo2">
                                                            Osplist <i class="fa fa-plus" aria-hidden="true"
                                                                id="add_icon_new"></i>
                                                            <span></span>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseTwo2" class="panel-collapse collapse"
                                                    role="tabpanel" aria-labelledby="headingTwo2">
                                                    <div class="panel-body">

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="pwd">Osplist</label>
                                                                <div id="custom-search-input">
                                                                    <div class="input-group">
                                                                        <input type="text"
                                                                            class="  search-query form-control"
                                                                            placeholder="Search" id="osp_setName" />
                                                                        <span class="input-group-btn">
                                                                            <button class="btn btn-danger"
                                                                                type="button">
                                                                                <span
                                                                                    class=" glyphicon glyphicon-search"></span>
                                                                            </button>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="pwd">From Date</label>
                                                                <input type="date" class="form-control"
                                                                    id="osp_sdate">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="pwd">To Date</label>
                                                                <input type="date" class="form-control"
                                                                    id="osp_edate">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="subject_id">Subject Name</label>
                                                                <?php $subjects = DB::table('subjects')->get(); ?>
                                                                <select
                                                                    class="form-select form-select-normal mb-3 s_form"
                                                                    aria-label=".form-select-normal example"
                                                                    id="osp_subjectId" name="subject_id">
                                                                    <option selected="">Select Subject</option>
                                                                    @foreach ($subjects as $s)
                                                                        <option value="{{ $s->id }}">
                                                                            {{ $s->subject }}</option>
                                                                    @endforeach

                                                                </select>
                                                            </div>

                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="button" value="GET" id="get_short"
                                                                    name="get_mcq" onclick="getOpslist()">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <input type="reset" value="Reset" id="reset_btn">
                                                            </div>
                                                        </div>
                                                        {{-- //////////////////////////////// --}}

                                                        <div class="row">
                                                            <div class="col-12" id="osp_results_container">

                                                            </div>
                                                        </div>
                                                        {{--  --}}

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingTwo3">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse"
                                                            data-parent="#accordion" href="#collapseTwo3"
                                                            aria-expanded="false" aria-controls="collapseTwo3">
                                                            Viva <i class="fa fa-plus" aria-hidden="true"
                                                                id="add_icon_new"></i>
                                                            <span></span>
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseTwo3" class="panel-collapse collapse"
                                                    role="tabpanel" aria-labelledby="headingTwo3">
                                                    <div class="panel-body" >

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="pwd">Test Name</label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Test Name" name="viva_test_name" 
                                                                    id="viva_test_name">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="pwd">Marks</label>
                                                                <input type="text" class="form-control" 
                                                                    placeholder="Marks" name="viva_marks"
                                                                    id="viva_marks">
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <style>
                                                        table.table tr th,
                                                        table.table tr td {
                                                            border: none;
                                                        }
                                                        .table-wrapper {
                                                            width: 100%;
                                                            margin: 0px auto;
                                                            background: #fff;
                                                            padding: 20px;
                                                            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
                                                        }

                                                        .table-title {
                                                            padding-bottom: 10px;
                                                            margin: 0 0 10px;
                                                        }

                                                        .table-title h2 {
                                                            margin: 6px 0 0;
                                                            font-size: 22px;
                                                        }

                                                        .table-title .add-new {
                                                            float: right;
                                                            height: 30px;
                                                            font-weight: bold;
                                                            font-size: 12px;
                                                            text-shadow: none;
                                                            min-width: 100px;
                                                            border-radius: 50px;
                                                            line-height: 13px;
                                                        }

                                                        .table-title .add-new i {
                                                            margin-right: 4px;
                                                        }

                                                        table.table {
                                                            table-layout: fixed;
                                                        }

                                                        table.table tr th,
                                                        table.table tr td {
                                                            border-color: #e9e9e9;
                                                        }

                                                        table.table th i {
                                                            font-size: 13px;
                                                            margin: 0 5px;
                                                            cursor: pointer;
                                                        }

                                                        table.table th:last-child {
                                                            width: 100px;
                                                        }

                                                        table.table td a {
                                                            cursor: pointer;
                                                            display: inline-block;
                                                            margin: 41px 8px;
                                                            min-width: 24px;
                                                        }

                                                        table.table td a.add {
                                                            color: #27C46B;
                                                        }

                                                        table.table td a.edit {
                                                            color: #FFC107;
                                                        }

                                                        table.table td a.delete {
                                                            color: #E34724;
                                                        }

                                                        table.table td i {
                                                            font-size: 19px;
                                                        }

                                                        table.table td a.add i {
                                                            font-size: 24px;
                                                            margin-right: -1px;
                                                            position: relative;
                                                            top: 3px;
                                                        }

                                                        table.table .form-control {
                                                            height: 32px;
                                                            line-height: 32px;
                                                            box-shadow: none;
                                                            border-radius: 2px;
                                                        }

                                                        table.table .form-control.error {
                                                            border-color: #f50000;
                                                        }

                                                        table.table td .add {
                                                            display: none;
                                                        }

                                                        .add-new {
                                                            display: inline-block;
                                                            height: 30px;
                                                            line-height: 33px;
                                                            text-align: center;
                                                            padding: 0 11px;
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
                                                        div#new_flex {
                                                                   display: flex; 
                                                                   justify-content: center;
                                                                   align-items: center;
                                                                   text-align: center;
                                                                   }
                                                    </style>
                                            
                                               
                                                        <div class="container-lg">
                                                            <div class="table-responsive">
                                                                <div class="table-wrapper">
                                                                    <div class="table-title">
                                                                        <div class="row">
                                                                            <div class="col-sm-6">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <table class="table table-bordered" >

                                                                        <tbody  id="apend_topic">
                                                                            <tr>
                                                                                {{-- <td>
                                                                                    <div class="form-group">
                                                                                        <label
                                                                                            for="pwd">Subject</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            placeholder="Subject"
                                                                                            name="Subject">
                                                                                    </div>
                                                                                </td> --}}
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <label
                                                                                            for="pwd">Topic</label>
                                                                                            <div id="new_flex">
                                                                                        <input type="text" required
                                                                                            class="form-control"
                                                                                            placeholder="Topic"
                                                                                            name="topic[]">
                                                                                             {{-- <a class="delete" title="Delete"
                                                                                        data-toggle="tooltip"><i
                                                                                            class="fa fa-trash-o"></i></a> --}}
                                                                                            <button type="button"
                                                                                            class="btn btn-info add-new"><i
                                                                                                class="fa fa-plus"></i> Add
                                                                                            New</button>
                                                                                            </div>
                                                                                    </div>
                                                                                </td>
                                                                              
                                                                            </tr>
                                                                            <script>
                                                                                $(document).ready(function(){
                                                                                    // $('[data-toggle="tooltip"]').tooltip();
                                                                                    var actions = $("table td:last-child").html();
                                                                                    // Append table with add row form on add new button click
                                                                                    $(".add-new").click(function(event) {
                                                                                        event.preventDefault();
                                                                                        // <td><label for="pwd">Subject</label><input type="text" class="form-control" name="name" id="Subject" placeholder="Subject"></td> 
                                                                                        var row = `<tr> <td><label for="pwd">Topic</label>  <div id="new_flex"><input type="text" class="form-control" name="topic[]" required id="viva_topic" placeholder="Topic"><a class='btn btn-danger input-sm remove'><i class='fa fa-minus'></i></a>    </td>   
                                                                                          </div> </tr>`;
                                                                                         $("#apend_topic").append(row);
                                                                                    });
                                                                                    $("body").on("click", ".remove", function(event) {
                                                                                        event.preventDefault();
                                                                                        $(this).parents("tr").remove();
                                                                                    });
                                                                        
                                                                                    $(document).on("click", ".add", function() {
                                                                                        var empty = false;
                                                                                        var input = $(this).parents("tr").find('input[type="text"]');
                                                                                        input.each(function() {
                                                                                            if (!$(this).val()) {
                                                                                                $(this).addClass("error");
                                                                                                empty = true;
                                                                                            } else {
                                                                                                $(this).removeClass("error");
                                                                                            }
                                                                                        });
                                                                                        $(this).parents("tr").find(".error").first().focus();
                                                                                        if (!empty) {
                                                                                            input.each(function() {
                                                                                                $(this).parent("td").html($(this).val());
                                                                                            });
                                                                                            $(this).parents("tr").find(".add, .edit").toggle();
                                                                                            $(".add-new").removeAttr("disabled");
                                                                                        }
                                                                                    });
                                                                                    // Edit row on edit button click
                                                                                    $(document).on("click", ".edit", function(event) {
                                                                                        event.preventDefault();
                                                                                        $(this).parents("tr").find("td:not(:last-child)").each(function() {
                                                                                            $(this).html('<input type="text" class="form-control" value="' + $(this)
                                                                                                .text() + '">');
                                                                                        });
                                                                                        $(this).parents("tr").find(".add, .edit").toggle();
                                                                                        $(".add-new").attr("disabled", "disabled");
                                                                                    });
                                                                                    // Delete row on delete button click
                                                                                    $(document).on("click", ".delete", function(event) {
                                                                                        event.preventDefault();
                                                                                        $(this).parents("tr").remove();
                                                                                        $(".add-new").removeAttr("disabled");
                                                                                    });
                                                                                });
                                                                            </script>
                                                                        

                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                     

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <br>
                        <button type="submit" id="submitBtn" class="btn btn-primary e-btn">CREATE TEST</button>
                </form>
            </div>
        </div>
    </section>
   



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

    <script src="{{ asset('assets/js/validation.js') }}"></script>
    <script src="{{ asset('assets/js/test_selection.js') }}"></script>

    <!-- <script>
        $(document).ready(function() {


            validateCreateTestForm()
        });
        //Tabs Layout Code
        $("#tabs").tabs({
            activate: function(event, ui) {
                var active = $('#tabs').tabs('option', 'active');
                $("#tabid").html('the tab id is ' + $("#tabs ul>li a").eq(active).attr("href"));
            }
        });
    </script> -->

    <!-- <script>
        function mcqADD(id) {
            // alert(id);
            var mcwTitile = $("#test_" + id + " #mcq_title_" + id + " ").html()
            var mcqid = $("#mcqIDMK").val();
            if (mcqid == '') {
                var test = '';
            } else {
                test = ','
            }
            $("#mcqIDMK").val(mcqid + test + mcwTitile);
            var mcqd = $("#mcqID").val();
            if (mcqd == '') {
                var test1 = '';
            } else {
                test1 = ','
            }
            $("#mcqID").val(mcqd + test1 + id);
            // alert(mcwTitile);
        }
    </script>
    <script>
        function mcqRemove(id) {

        }
    </script>
    <script>
        function shortansADD(id) {
            // alert(id);
            var shortansTitile = $("#shortans_" + id + " #shortanstitle_" + id + " ").html()
            var shortansid = $("#shortansIDMK").val();
            // alert(shortansid)
            if (shortansid == '') {
                var test = '';
            } else {
                test = ','
            }
            $("#shortansIDMK").val(shortansid + test + shortansTitile);
            var shortans = $("#shortansID").val();
            if (shortans == '') {
                var test1 = '';
            } else {
                test1 = ','
            }
            $("#shortansID").val(shortans + test1 + id);
            // alert(mcwTitile);
        }

        function osplistADD(id) {
            // alert(id);
            var osplistTitile = $("#osp_" + id + " #osplisttitle_" + id + " ").html()
            var osplistid = $("#OsplistIDMK").val();
            // alert(osplistid)
            if (osplistid == '') {
                var test = '';
            } else {
                test = ','
            }
            $("#OsplistIDMK").val(osplistid + test + osplistTitile);
            var osplist = $("#OsplistID").val();
            if (osplist == '') {
                var test1 = '';
            } else {
                test1 = ','
            }
            $("#OsplistID").val(osplist + test1 + id);
            // alert(osplistTitile);
        }
    </script> -->

    <script>
        function getMCQ() {

            let fData = {
                'mcq_setName': $("#mcq").val(),
                'mcq_sDate': $("#mcq_sdate").val(),
                'mcq_eDate': $("#mcq_edate").val(),
                'subject_id': $("#mcq_subjectId").val()
            }
            $.ajax({
                type: "GET",
                url: "{{ route('filtermcq') }}",
                data: fData,
                success: function(data) {
                    $("#mcq_results_container").empty()

                    data.data.forEach(mcqObj => {
                        let html = `<div class="events__item hover__active">
                                                                <div
                                                                    class="events__item-inner  align-items-center justify-content-between white-bg">
                                                                    <div class="events__content  ">
                                                                        <h3 class="events__title">${mcqObj.test_name}</h3>


                                                                        <div class="events__meta">
                                                                            <table>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td><span>Date</span>  </td> 
                                                                                        <td><span>${mcqObj.created_at}</span>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><span>Marks</span>  </td>  
                                                                                        <td><input type='hidden' class='que-marks' value='${mcqObj.marks}'/> <span>${mcqObj.marks} </span> </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><span> Duration</span> </td>
                                                                                        <td><input type='hidden'  readonly class='que-duration' value='${mcqObj.duration}'/> <span>${mcqObj.duration} </span></td>
                                                                                        
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                            <a
                                                                                href="{{ url('/Opslist_View_details/1') }}"><button
                                                                                    type="button"
                                                                                    class="btn btn-warning"><i
                                                                                        class="fa fa-eye"
                                                                                        aria-hidden="true"></i>
                                                                                    View</button></a>
                                                                         <button  type="button"  onclick='addMcqQuestoArray(${mcqObj.id} , "${mcqObj.test_name}" , "${mcqObj.duration}", ${mcqObj.marks} )'   class="btn btn-warning">  <i class="fa fa-plus" aria-hidden="true"></i> Add</button> 
                                                                        </div>
                                                                    </div>


                                                                </div>
                                                            </div>`

                        $("#mcq_results_container").append(html)
                         console.log(mcqObj)
                    });

                     console.log(data)
                },
                error: function(data) {
                    $("#mcq_results_container").empty()
                }

            });

        }

        function getShortAns() {

            let fData = {
                'short_setName': $("#ShortAnswer_name").val(),
                'short_sDate': $("#short_sdate").val(),
                'short_eDate': $("#short_edate").val(),
                'subject_id': $("#short_subjectId").val()
            }
            $.ajax({
                type: "GET",
                url: "{{ route('filtershort') }}",
                data: fData,
                success: function(data) {
                    $("#short_results_container").empty()

                    data.data.forEach(sObj => {
                        let html = `<div class="events__item mb-10 hover__active">
                                                    <div
                                                        class="events__item-inner  align-items-center justify-content-between white-bg">
                                                        <div class="events__content  ">
                                                            <h3 class="events__title">${sObj.test_name}</h3>


                                                            <div class="events__meta">
                                                                <table>
                                                                    <tbody>
                                                                                    <tr>
                                                                                        <td><span>Date</span>
                                                                                        </td>
                                                                                        <td
                                                                                            style="width:20px;text-align: center;">
                                                                                            :</td>
                                                                                        <td><span>${sObj.created_at}</span>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><span>Marks</span>  </td>  
                                                                                        <td><input type='hidden' class='que-marks' value='${sObj.marks}'/> <span>${sObj.marks} </span> </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><span> Duration</span> </td>
                                                                                        <td><input type='hidden'  readonly class='que-duration' value='${sObj.duration}'/> <span>${sObj.duration} </span></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                </table>
                                                                <a
                                                                    href="{{ url('/Opslist_View_details/1') }}"><button
                                                                        type="button"
                                                                        class="btn btn-warning"><i
                                                                            class="fa fa-eye"
                                                                            aria-hidden="true"></i>
                                                                        View</button></a>
                                                                        <button  type="button"  onclick='addShortQuestoArray(${sObj.id} , "${sObj.test_name}", "${sObj.duration}", ${sObj.marks})'   class="btn btn-warning">  <i class="fa fa-plus" aria-hidden="true"></i> Add</button> 

                                                    </div>
                                                        </div>


                                                    </div>
                                                </div>`
                        $("#short_results_container").append(html)
                        console.log(sObj)
                    });

                    console.log(data)
                },
                error: function(data) {
                    $("#short_results_container").empty()
                }

            });

        }

        function getOpslist() {

            console.log($("#osp_setName").val())
            let fData = {
                'osp_setName': $("#osp_setName").val(),
                'osp_sDate': $("#osp_sdate").val(),
                'osp_eDate': $("#osp_edate").val(),
                'osp_subjectId': $("#osp_subjectId").val()
            }
            $.ajax({
                type: "GET",
                url: "{{ route('filterosp') }}",
                data: fData,
                success: function(data) {

                    data.data.forEach(ospObj => {
                        let html = `<div class="events__item mb-10 hover__active">
                                                    <div
                                                        class="events__item-inner  align-items-center justify-content-between white-bg">
                                                        <div class="events__content  ">
                                                            <h3 class="events__title">${ospObj.test_name}</h3>


                                                            <div class="events__meta">
                                                                <table>
                                                                    <tbody>
                                                                                    <tr>
                                                                                        <td><span>Date</span>
                                                                                        </td>
                                                                                        <td
                                                                                            style="width:20px;text-align: center;">
                                                                                            :</td>
                                                                                        <td><span >${ospObj.created_at}</span>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><span>Marks</span>  </td>  
                                                                                        <td><input type='hidden' class='que-marks' value='${ospObj.marks}'/> <span>${ospObj.marks} </span> </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><span> Duration</span> </td>
                                                                                        <td><input type='hidden'  readonly class='que-duration' value='${ospObj.duration}'/> <span>${ospObj.duration} </span></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                </table>
                                                                <a  href="{{ url('/Opslist_View_details/1') }}">
                                                                    <button type="button"   class="btn btn-warning">
                                                                     <i class="fa fa-eye"  aria-hidden="true"></i>
                                                                        View
                                                                    </button>
                                                                </a>
                                                                <button  type="button"  onclick='addOspQuestoArray(${ospObj.id} , "${ospObj.test_name}" , "${ospObj.duration}", ${ospObj.marks})'   class="btn btn-warning">  <i class="fa fa-plus" aria-hidden="true"></i> Add</button> 

                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>`
                        $("#osp_results_container").append(html)
                        console.log(ospObj)
                    });

                    console.log(data)
                },
                error: function(data) {
                    $("#osp_results_container").empty()
                }

            });

        };


        let totalMarks = 0
        let totaDuration = 0

        $("#OsplistIDMK").on('select2:select', function(e) {
            addandUpdateTotal(e.params.data, "osp_id")
        });

        $("#OsplistIDMK").on('select2:unselect', function(e) {
            subtractandUpdateTotal(e.params.data, "osp_id")
        });

        $("#mcqIDMK").on('select2:select', function(e) {
            addandUpdateTotal(e.params.data, "mcq_id")
            // console.log(e.params.data);
        });

        $("#mcqIDMK").on('select2:unselect', function(e) {
            subtractandUpdateTotal(e.params.data, "mcq_id")

        });
        $("#shortansID").on('select2:select', function(e) {

            addandUpdateTotal(e.params.data, "short_id")

        });

        $("#shortansID").on('select2:unselect', function(e) {

            subtractandUpdateTotal(e.params.data, "short_id")
        });

        
        // let viva_marks = 0

        // $("#viva_marks").on('keyup', function(e) {
        //     let total = parseInt($("#total_marks").val()) ;
        //     console.log(total);
        //     console.log(e.key);
        //     if(e.key == "Backspace"){
        //         // alert(e.key);
        //         console.log(e.target.value)
        //     }else{

        //     }
        //     viva_marks = parseInt(e.target.value);
        //     total = total + parseInt(e.target.value);
        //     $("#total_marks").val(total);
        //     $("#total_duration").val(durationsum);
        // })
       
        $("#viva_marks").on('keyup', function(e) {
            let viva_mar = parseInt(e.target.value);
            if(viva_mar > "0"){
                setInterval(function() {
                   setTimeout(function() {
                    var total_marks = parseInt($("#total_marks").val());
                    var total_marks = parseInt($("#total_marks").val());
                    total = total_marks + parseInt(e.target.value);
                    $("#total_marks_add_v").val(total);
                  }, 500);
                }, 500);
              
             $("#total_marks_add_v").show();
             $("#total_marks").hide();
             }else{
                let total_marks = parseInt($("#total_marks").val());
             $("#total_marks_add_v").val(total_marks);
             $("#total_marks_add_v").hide();
             $("#total_marks").show();
            }
        })

          
        
        function addandUpdateTotal(d, queType) {

            totalMarks = totalMarks + d.mark
            totaDuration = totaDuration + parseInt(d.duration)
            $("#total_marks").val(totalMarks)
            $("#total_duration").val(totaDuration)

            let html =
                `<input type='hidden' id='${queType}-${d.id}' readonly class='mcq_test_id' name='${queType}[]' value='${d.id}'/>`
            $(`#${queType}_container`).append(html)
        }

        function subtractandUpdateTotal(d, queType) {

            totalMarks = totalMarks - d.mark
            totaDuration = totaDuration - parseInt(d.duration)

            $("#total_marks").val(totalMarks)
            $("#total_duration").val(totaDuration)
            $(`#${queType}-${d.id}`).remove()
        }

        $("#submitBtn").click(function(e) {
            // $("#mcqIDMK").select2('data').map(function(elem) {
            //     //  console.log(elem.id)
            // });

            // updateTotalMarks();
            // updateTotalDuration()
            // e.preventDefault()
        });

        function updateTotalMarks() {
            let sum = 0;
            $(".que-marks").each((TotalnumElement, obj) => {
                sum = sum + parseInt(obj.value)
            })
            $("#total_marks").val(sum)

        }

        function updateTotalDuration() {
            let durationsum = 0;
            $(".que-duration").each((TotalnumElement, obj) => {

                durationsum = durationsum + parseInt(obj.value)

            })
            $("#total_duration").val(durationsum)

        }


        let mcqQueObjSet = new Set()
        let shortQueObjSet = new Set()
        let ospQueObjSet = new Set()


        function addMcqQuestoArray(id, name, d, m) {
            let obj = composeQueObj(id, name, d, m)
            mcqQueObjSet.add(JSON.stringify(obj));
            setUpSelect2(mcqQueObjSet, 'mcqIDMK')
            // console.log(mcqQueObjSet);
        }

        function addShortQuestoArray(id, name, d, m) {
            let obj = composeQueObj(id, name, d, m)
            shortQueObjSet.add(JSON.stringify(obj))
            setUpSelect2(shortQueObjSet, 'shortansID')
            // console.log(shortQueObjSet);
        }

        function addOspQuestoArray(id, name, d, m) {
            let obj = composeQueObj(id, name, d, m)
            ospQueObjSet.add(JSON.stringify(obj))
            setUpSelect2(ospQueObjSet, 'OsplistIDMK')
            // console.log(ospQueObjSet);
        }

        function composeQueObj(id, name, duration, mark) {
            return {
                'id': id,
                'text': name,
                'mark': mark,
                'duration': duration,
            }
        }


        function setUpSelect2(queSet, select2Id) {
            let queObjArray = []
            
            queSet.forEach((str) => {
                queObjArray.push(JSON.parse(str))
            })
          
            // console.log(queObjArray);
            $(`#${select2Id}`).select2({
                data: queObjArray
            })
        }
    </script>
    <script src="https://use.fontawesome.com/e9cdcdc958.js"></script>
</body>


</html>
