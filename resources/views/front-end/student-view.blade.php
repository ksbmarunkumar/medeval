<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('front-end.css_teacher')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <style>
        .assign_btn {
            background: #286dc8;
            color: #fff;
            padding: 9px 11px;
            border-radius: 10px;
        }

        .student_s {
            position: relative;
            height: 40px !important;
            width: 100% !important;
            border-radius: 15px !important;
            overflow: hidden;
            box-shadow: -8px -4px 8px 0px #ffffff, 8px 4px 12px 0px #d1d9e6, 4px 4px 4px 0px #d1d9e6 inset, -4px -4px 4px 0px #ffffff inset !important;
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

        .events__meta span {
            color: #fff;
        }

        .add_btn {
            background: #40f200;
            box-shadow: none;
            border: none;
            margin-top: 24px;
            padding: 5px 8px;
            border-radius: 3px;
            color: #fff;
            margin-left: 6px;
        }
    </style>
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
                    <a href="#">
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
                    <p>Test assigned to student successfuly.</p>
                </div>

                <div class="col-xxl-4 offset-xxl-4">
                    <div class="section__title-wrapper mb-60 text-center">
                        <h2 class="section__title">Batch <span class="yellow-bg yellow-bg-big"><img
                                    src="{{ asset('assets/img/shape/yellow-bg.png') }}" alt=""></span></h2>

                    </div>
                </div>


            </div>


            <div class="row">
                <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-9 offset-lg-1">
                    <div class="form-group">
                        {{-- <input type="text" class="form-control student_s" multiple='multiple' placeholder="Student"
                            name="student_ids" id="student_ids" readonly /> --}}
                        <select type="text" class="form-control student_s" multiple='multiple' placeholder="Student"
                            name="student_ids" id="student_ids" readonly>
                        </select>
                    </div>
                </div>

                <div class="col-md-1">
                    <button type="button" class="assign_btn" id="assignBtn"> Assign</button>
                </div>
            </div>

            <div class="row">
                <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">

                    <div class="form-group">
                        <label for="pwd">Search</label>
                        <div id="custom-search-input">
                            <div class="input-group">
                                <input type="text" class="  search-query form-control student_s"
                                    placeholder="Search">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($students as $s)
                    <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                        <div class="events__item mb-10 hover__active">
                            <div
                                class="events__item-inner d-sm-flex align-items-center justify-content-between white-bg">

                                <div class="events__content">

                                    <img src="{{ asset('assets/img/student-profile.png') }}" alt="logo"
                                        id="student-profile" style="width:80px;"><span class="events__title">
                                        {{ $s->name }} </span>
                                    <br>
                                    <button class="add_btn btn btn-primary"
                                        onclick="addStudentIdsToArray({{ $s }})"><i class="fa fa-plus"></i>
                                        Add</button>
                                </div>

                                <div class="events__more">
                                    <p id="student_count">Roll Number</p><span id="student_count2"> {{ $s->id }}
                                    </span>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
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


    {{-- modal starts --}}
    <!-- Modal -->


    {{-- modal ends --}}



    <!-- footer area start -->
    @include('front-end.footer_teacher')
    <!-- footer area end -->
    <!-- JS here -->
    @include('front-end.scripts_teacher')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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

                                                                    		mylink.html(manpreet.email);


                                                                Tabs Layout Code
                                                                $("#tabs").tabs({
                                                                    activate: function(event, ui) {
                                                                        var active = $('#tabs').tabs('option', 'active');
                                                                        $("#tabid").html('the tab id is ' + $("#tabs ul>li a").eq(active).attr("href"));
                                                                    }
                                                                });
                                                              */
    </script>

    <script>
        let idArray = []

        function addStudentIdsToArray(obj) {
            console.log(obj)


            let sObj = JSON.stringify({
                'id': obj.id,
                'text': obj.name
            })

            $("#student_ids").select2()

            if (idArray.includes(sObj)) {

            } else {
                idArray.push(sObj);
                var option = new Option(JSON.parse(sObj).text, JSON.parse(sObj).id, true, true);
                $("#student_ids").append(option).trigger('change');
            }

            idArray.forEach(ele => {
                //  var option = new Option(JSON.parse(ele).text, JSON.parse(ele).id, true, true);
                //  $("#student_ids").append(option).trigger('change');

            })

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
                    url: "{{ route('assign_test_to_student') }}",
                    data: {
                        studIds: $("#student_ids").select2("val"),
                        _token: '{{ csrf_token() }}'
                    },

                    success: function(data) {
                        console.log(data)
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
