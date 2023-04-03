@php
    use App\Models\Student;
@endphp

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('front-end.css_teacher')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet" />

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

        .view_btn {
            background: #40f200;
            box-shadow: none;
            border: none;
            margin-top: 10px;
        }

        .view_btn:hover {
            background: #40f200;
            box-shadow: rgb(40 40 40 / 46%) 0px 7px 29px 0px;
        }

        .main-menu ul li a {
            color: #313131;
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

        a.disabled {
            pointer-events: none;
            cursor: default;
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
                    <p>Test assigned to batch successfuly.</p>
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
                        <select type="text" class="form-control student_s" multiple placeholder="Student" readonly
                            id="batch_ids">
                        </select>
                    </div>
                </div>

                <div class="col-md-1">
                    <button type="button" class="assign_btn" id="assignBtn"> Assign</button>
                </div>
            </div>

            <div class="row">

                <div class="row">
                    <table id="myTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Batch</th>
                                <th>Semester</th>
                                <th>Total Student</th>
                                <th>Add Button</th>
                                <th>View Button</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($batches as $b)
                            @php
                                $stu = Student::where('batch_id', $b->id)->get();
                                $stu_array_datas = json_decode($stu);
                                $stuCount = $stu->count();
                            @endphp
                            <tr>
                                <td> {{ $b->batch_name }}</td>
                                <td>First</td>
                                <td>{{ $stuCount }}</td>
                                <td>  
                                    <button type="button" class="btn btn-warning view_btn"
                                            onclick="addBatchIdsToArray({{ $b }})"
                                            {{ $stuCount ? '' : 'disabled' }}><i class="fa fa-plus"
                                                aria-hidden="true"></i> Add</button>
                            </td>
                            <td>  
                                <a href="{{ route('get_students_of_batch', $b->id) }}"
                                    class="{{ $stuCount ? '' : 'disabled' }}">
                                    <button type="button" class="btn btn-warning view_btn"
                                        {{ $stuCount ? '' : 'disabled' }}><i class="fa fa-eye"
                                            aria-hidden="true"></i> View</button>
                                </a>
                        </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>



                {{-- <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">

                    <div class="form-group">
                        <label for="pwd">Search</label>
                        <div id="custom-search-input">
                            <div class="input-group">
                                <input type="text" class="  search-query form-control student_s"
                                    placeholder="Search">

                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- @foreach ($batches as $b)
                    @php
                        $stu = Student::where('batch_id', $b->id)->get();
                        $stuCount = $stu->count();
                    @endphp

                    <div class="col-xxl-10 offset-xxl-1 col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                        <div class="events__item mb-10 hover__active">
                            <div
                                class="events__item-inner d-sm-flex align-items-center justify-content-between white-bg">

                                <div class="events__content">

                                    <h3 class="events__title">{{ $b->batch_name }}</h3>
                                    <div class="events__meta">

                                        <span>Semester : First</span>
                                        <br>
                                        <span>Batch : {{ $b->batch_name }}</span>
                                        <br>
                                        <button type="button" class="btn btn-warning view_btn"
                                            onclick="addBatchIdsToArray({{ $b }})"
                                            {{ $stuCount ? '' : 'disabled' }}><i class="fa fa-plus"
                                                aria-hidden="true"></i> Add</button>
                                        <!-- <form action="{{ url('/student_view') }}">-->
                                        <!--<button type="button" class="btn btn-warning view_btn"><i class="fa fa-eye" aria-hidden="true"></i> View</button>-->
                                        <!--                        </form>-->
                                        <a href="{{ route('get_students_of_batch', $b->id) }}"
                                            class="{{ $stuCount ? '' : 'disabled' }}">
                                            <button type="button" class="btn btn-warning view_btn"
                                                {{ $stuCount ? '' : 'disabled' }}><i class="fa fa-eye"
                                                    aria-hidden="true"></i> View</button>
                                        </a>
                                    </div>
                                </div>
                                <div class="events__more">
                                    <p id="student_count">Total Student</p><span
                                        id="student_count2">{{ $stuCount }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach --}}
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

        function addBatchIdsToArray(obj) {
            console.log(obj)


            let bObj = JSON.stringify({
                'id': obj.id,
                'text': obj.batch_name
            })

            $("#batch_ids").select2()

            if (idArray.includes(bObj)) {

            } else {
                idArray.push(bObj);
                var option = new Option(JSON.parse(bObj).text, JSON.parse(bObj).id, true, true);
                $("#batch_ids").append(option);
            }
            $("#batch_ids").trigger('change')



            console.log(idArray)
        }


        $(document).ready(function() {
            $(".alert").hide();
            $("#assignBtn").click(function() {
                console.log("batchIDS"+ $("#batch_ids").select2("val"))
                $.ajax({
                    type: 'POST',
                    url: "{{ route('assign_test_to_batch') }}",
                    data: {
                        batchIds: $("#batch_ids").select2("val"),
                        _token: '{{ csrf_token() }}'
                    },

                    success: function(data) {
                        console.log(data)
                        $(".alert").fadeIn(1000);
                        setTimeout(() => {
                            $(".alert").fadeOut(1000);
                        }, 2000);
                    },

                    error: function (data) {
                   console.log('An error occurred.');
                   console.log(data);
                  }
                });

            })

        })
    </script>
</body>


</html>
