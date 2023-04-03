<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('front-end.css_teacher')
    <style>
        .view_btn {
            background: #40f200;
            box-shadow: none;
            border: none;
            margin-top: 24px;
            padding: 5px 8px;
            border-radius: 3px;
            color: #fff;
            margin-left: 6px;
        }

        .add_btn {
            background: #40f200;
            box-shadow: none;
            border: none;
            margin-top: 10px;
        }

        .student_s {
            position: relative;
            height: 40px !important;
            width: 100% !important;
            border-radius: 15px !important;
            overflow: hidden;
            box-shadow: -8px -4px 8px 0px #ffffff, 8px 4px 12px 0px #d1d9e6, 4px 4px 4px 0px #d1d9e6 inset, -4px -4px 4px 0px #ffffff inset !important;
        }

        .assign_btn {
            background: #286dc8;
            color: #fff;
            padding: 9px 11px;
            border-radius: 10px;
        }

        input[type=radio] {
            border: 0px;
            width: 14%;
            height: 20px;
        }

        .events__item-inner {
            background-image: linear-gradient(to bottom right, #004aac, #629fef);
            box-shadow: rgb(0 0 0 / 26%) 0px 3px 8px;
            cursor: pointer;
        }

        .events__title {
            color: #fff;
            margin-top: 4px;
        }

        .events__more {
            color: #fff;

            padding: 10px 38px;
            border-radius: 50px;

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

        .header__search button {
            background: transparent;
            position: absolute;
            top: 23px;
            left: 24px;
        }

        #t_name {
            color: #fff;
            font-size: 24px;
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

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet" />



</head>

<body>



    <!-- pre loader area start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="loading-content-2 text-center">
                    <img class="loading-logo-icon-2" src="{{ asset('assets/img/logo_m.png') }}" alt="">

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
                    <a href="index.html">
                        <img src="{{ asset('assets/img/logo/logo.png') }}" alt="logo">
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
                <div class="alert alert-success" role="alert">
                    <p id="alertValue"></p>
                </div>

                <div class="col-xxl-4 offset-xxl-4">
                    <div class="section__title-wrapper mb-60 text-center">
                        <h2 class="section__title">Assign <span class="yellow-bg yellow-bg-big">Teacher<img
                                    src="{{ asset('assets/img/shape/yellow-bg.png') }}" alt=""></span></h2>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-9 offset-lg-1">
                  
                            <div class="form-group">
                                <select class="form-control form-select student_s"  name="batch_ids"  id="batch_ids" aria-label="" required>
                                    <option value="NULL">Select Batch</option>
                                    @forEach($batches as $batch)
                                    <option value="{{$batch->id}}">{{$batch->batch_name}}</option>
                                    @endforeach
                                  </select>
                            </div>        
                
                    <div class="form-group">
                        <select type="text" class="form-control student_s" placeholder="Teacher" id="teacher_ids"
                            readonly="" multiple>
                        </select>
                    </div>
               
                    
                </div>

                <div class="col-md-1">
                    <button type="button" id="assignBtn" class="assign_btn"> Assign</button>
                </div>
            </div>

            <br>

            <div class="row">
                <table id="myTable" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Department</th>
                            <th>Add Button</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teachers as $t)
                       <?php
                        if(Auth::user()->teacher_id != $t->id){
                          ?>
                            <tr>
                            <td> <img src="{{ asset('assets/img/student-profile.png') }}" alt="logo"
                                id="student-profile" style="width:80px;"></td>
                            <td>{{$t->name}}</td>
                            <td>{{$t->department_name}}</td>
                            <td>  
                                 <div class="events__more">
                                   <button type="button" onclick="addStudentIdsToArray({{$t}})" class="btn btn-warning add_btn"><i class="fa fa-plus" aria-hidden="true"></i> Add</button>
                                 </div>
                        </td>
                        </tr>
                        <?php
                        }
                        ?>
                        
                        @endforeach
                    </tbody>
                </table>

                {{-- <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">

                    <div class="form-group">
                        <label for="pwd">Search</label>
                        <div id="custom-search-input">
                            <div class="input-group">
                                <input type="text" class="  search-query form-control student_s"
                                    placeholder="Search" id="search" name="search">

                            </div>
                        </div>
                    </div>
                </div> --}}
            

                    
                {{-- @foreach ($teachers as $t)
                    <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1"  >
                        <div class="events__item mb-10 hover__active">
                            <div
                                class="events__item-inner d-sm-flex align-items-center justify-content-between white-bg">
                                <div class="events__content">
                                    <div class="col-md-2">
                                        <img src="{{ asset('assets/img/student-profile.png') }}" alt="logo"
                                            id="student-profile" style="width:80px;">
                                    </div>
                                    <div class="col-md-6">
                                        <span class="events__title"> {{ $t->name }}</span>
                                        <p id="Department_para"><b>Department :</b> Abc</p>
                                    </div>


                                    <br>

                                </div>
                                <div class="events__more">

                                    <button type="button" onclick="addStudentIdsToArray({{$t}})" class="btn btn-warning add_btn"><i class="fa fa-plus"
                                            aria-hidden="true"></i> Add</button>


                                </div>
                            </div>
                        </div>
                    </div>
                   
                @endforeach --}}

                <style>
                    .events__content {
                        width: 100%;

                    }

                    #Department_para {
                        color: #fff;
                    }
                </style>


                {{-- <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
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
                                <a href="#">
                                    <span>2</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>3</span>
                                </a>
                            </li>
                            <li class="next">
                                <a href="#" class="link-btn">
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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
    </script>


    <script>
        let idArray = []

        function addStudentIdsToArray(obj) {
            console.log(obj)
            
            let tObj = JSON.stringify({
                'id': obj.id,
                'text': obj.name
            })

            $("#teacher_ids").select2()

            if (idArray.includes(tObj)) {

            } else {
                idArray.push(tObj);
                var option = new Option(JSON.parse(tObj).text, JSON.parse(tObj).id, true, true);
                $("#teacher_ids").append(option).trigger('change');
            }
 

            console.log(idArray)
        }

        function setToArray(set) {
            let arr = []
            set.forEach((ele) => {
                arr.push(JSON.parse(ele))
            })
            return arr;
        }
        
        $(document).ready(function() {
            $(".alert").hide();
            $("#assignBtn").click(function() {

                $.ajax({
                    type: 'POST',
                    url: "{{ route('assign_test_to_teacher') }}",
                    data: {
                        teachIds: $("#teacher_ids").select2("val"),
                        batch_ids:$("#batch_ids").val(),
                        _token: '{{ csrf_token() }}'
                    },

                    success: function(data) {
                        console.log(data)
                        $("#alertValue").html(data.message);
                        $(".alert").fadeIn(1000);
                        setTimeout(() => {
                            $(".alert").fadeOut(1000);
                        }, 2000);
                    }
                });

            })

        })
    </script>



</body>


</html>
