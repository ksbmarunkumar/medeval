@extends('layouts.app')
@section('title', 'Teacher')
@section('content')

    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 90px;
            height: 34px;
        }

        .switch input {
            display: none;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ca2222;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked+.slider {
            background-color: #2ab934;
        }

        input:focus+.slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked+.slider:before {
            -webkit-transform: translateX(55px);
            -ms-transform: translateX(55px);
            transform: translateX(55px);
        }

        .on {
            display: none;
        }

        .on,
        .off {
            color: white;
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            font-size: 10px;
            font-family: Verdana, sans-serif;
        }

        input:checked+.slider .on {
            display: block;
        }

        input:checked+.slider .off {
            display: none;
        }

        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }

        table.dataTable thead th,
        table.dataTable thead td {
            padding: 10px 18px;
            border-bottom: 1px solid #fff;
        }

        table.dataTable.no-footer {
            border-bottom: 1px solid #dee2e6;
        }

        table.dataTable.no-footer {
            border-bottom: 1px solid #e6e9ed !important;
        }

        span.teax-vr-dashbord {
            font-size: 17px;
            position: relative;
            top: 11px;
            left: 29px;
        }

        h3.rv-list-users {
            position: relative;
            /* right: 18px; */
            margin-left: 16px;
        }

        .btn-primary2 {

            color: #fff;
            background-color: #004ba5;
            border-color: #004ba5;
            box-shadow: none;

        }

        .btn-primary2:hover {
            color: #fff;
            background-color: #1071f4;
        }

        .card {
            -webkit-box-shadow: -1px 2px 37px -3px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: -1px 2px 37px -3px rgba(0, 0, 0, 0.75);
            box-shadow: -1px 2px 37px -3px rgba(0, 0, 0, 0.75);
        }

        .dataTables_wrapper .dataTables_filter input {

            padding: 2px !important;

        }

        .dataTables_wrapper .dataTables_filter input:focus {

            outline: none;

        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.current,
        .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
            color: #fff !important;
            border: 1px solid #979797;
            padding: 2px;
            background-color: #004ba5 !important;
            border-radius: 5px;
            background: linear-gradient(to bottom, #004ba5 0%, #004ba5 100%);
        }





        /* cards */

        .radius-10 {
            border-radius: 10px !important;
        }

        .border-info {
            border-left: 5px solid #0dcaf0 !important;
        }

        .border-danger {
            border-left: 5px solid #fd3550 !important;
        }

        .border-success {
            border-left: 5px solid #15ca20 !important;
        }

        .border-warning {
            border-left: 5px solid #ffc107 !important;
        }


        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0px solid rgba(0, 0, 0, 0);
            border-radius: .25rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
        }

        .bg-gradient-scooter {
            background: #17ead9;
            background: -webkit-linear-gradient(45deg, #17ead9, #6078ea) !important;
            background: linear-gradient(45deg, #17ead9, #6078ea) !important;
        }

        .widgets-icons-2 {
            width: 56px;
            height: 56px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ededed;
            font-size: 27px;
            border-radius: 10px;
        }

        .rounded-circle {
            border-radius: 50% !important;
        }

        .text-white {
            color: #fff !important;
        }

        .ms-auto {
            margin-left: auto !important;
        }

        .bg-gradient-bloody {
            background: #f54ea2;
            background: -webkit-linear-gradient(45deg, #f54ea2, #ff7676) !important;
            background: linear-gradient(45deg, #f54ea2, #ff7676) !important;
        }

        .bg-gradient-ohhappiness {
            background: #00b09b;
            background: -webkit-linear-gradient(45deg, #00b09b, #96c93d) !important;
            background: linear-gradient(45deg, #00b09b, #96c93d) !important;
        }

        .bg-gradient-blooker {
            background: #ffdf40;
            background: -webkit-linear-gradient(45deg, #ffdf40, #ff8359) !important;
            background: linear-gradient(45deg, #ffdf40, #ff8359) !important;
        }
    </style>

    <div class="content-wrapper">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-12">
                    <div class="page-header-title">
                        <div class="d-inline">
                            <h3 class=" rv-list-users">Test Reports</h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div>

            <div class="col-md-12">
                <div class="card p-3 m-3-rv">
                    <div class="card-header">
                        <a href="" class="btn btn-primary2">Add +</a>
                    </div>
                    <div class="card-body">

                        <div class="container">
                            <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                                <div class="col">
                                    <div class="card radius-10 border-start border-0 border-3 border-info">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <p class="mb-0 text-secondary">Number of Test Created</p>
                                                    <h4 class="my-1 text-info">{{ $total_test }}</h4>
                                                    {{-- <p class="mb-0 font-13">+2.5% from last week</p> --}}
                                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target=".No_test">Card Detail</button>

                                                    <div class="modal fade No_test" tabindex="-1"
                                                        role="dialog" aria-labelledby="myLargeModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                              <div class="m-2">
                                                              <h4 class="my-1 text-secondary">Test Created</h4>
                                                              <table id="myTable" class="table table-bordered">
                                                                <thead>
                                                                  <tr>
                                                                    <th scope="col">id</th>
                                                                    <th scope="col">Test Name</th>
                                                                    <th scope="col">Create Teacher Name</th>
                                                                    <th scope="col">Date</th>
                                                                  </tr>
                                                                </thead>
                                                                <tbody>
                                                                  @foreach($Tests as $Test) 
                                                                  <tr>
                                                                    <th scope="row">{{$Test->id}}</th>
                                                                    <td>{{$Test->test_name}}</td>
                                                                    <td>
                                                                      @php
                                                                      $teacher_name = DB::table('teachers')->where('id',$Test->teacher_id)->first();
                                                                      @endphp
                                                                      {{$teacher_name->name}}
                                                                    </td>
                                                                    <td>{{$Test->date}}</td>
                                                                  </tr>
                                                                @endforeach
                                                                </tbody>
                                                              </table>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto">
                                                    <i class="fa fa-users"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card radius-10 border-start border-0 border-3 border-danger">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <p class="mb-0 text-secondary">Number of Active Test</p>
                                                    <h4 class="my-1 text-danger">{{ $total_active }}</h4>
                                                    {{-- <p class="mb-0 font-13">+5.4% from last week</p> --}}
                                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target=".No_active_test">Card Detail</button>

                                                <div class="modal fade No_active_test" tabindex="-1"
                                                    role="dialog" aria-labelledby="myLargeModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                          <div class="m-2">
                                                          <h4 class="my-1 text-secondary">Active Test</h4>
                                                          <table id="Active_test" class="table table-bordered">
                                                            <thead>
                                                              <tr>
                                                                <th scope="col">id</th>
                                                                <th scope="col">Test Name</th>
                                                                <th scope="col">Create Teacher Name</th>
                                                                <th scope="col">Assigner Teacher Name</th>
                                                                <th scope="col">Assigned Teacher Name</th>
                                                                <th scope="col">Date</th>
                                                              </tr>
                                                            </thead>
                                                            <tbody>
                                                              @foreach($Tests as $Test) 
                                                              @if($Test->status == 'active')
                                                              @php
                                                              $assigner_tech_names = DB::table('teacher_tests')->where('test_id',$Test->id)->get();
                                                              @endphp
                                                              @foreach($assigner_tech_names as $assigner_tech_name)
                                                              @php
                                                              $teacher_name = DB::table('teachers')->where('id',$Test->teacher_id)->first();
                                                              $assigner_teach_id = DB::table('teachers')->where('id',$assigner_tech_name->assigner_teach_id)->first();
                                                              $teacher_assigner = DB::table('teachers')->where('id',$assigner_tech_name->teacher_id)->first();
                                                              @endphp
                                                              <tr>
                                                                <th scope="row">{{$assigner_tech_name->id}}</th>
                                                                <td>{{$Test->test_name}}</td>
                                                                <td>{{$teacher_name->name}}</td>
                                                                <td>{{$assigner_teach_id->name}}</td>
                                                                <td>{{$teacher_assigner->name}}</td>
                                                                <td>{{$Test->date}}</td>
                                                              </tr>
                                                              @endforeach
                                                              @endif
                                                            @endforeach
                                                            </tbody>
                                                          </table>
                                                          </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <div
                                                    class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto">
                                                    <i class="fa fa-users"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card radius-10 border-start border-0 border-3 border-success">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <p class="mb-0 text-secondary">Number of Future Scheduled Test</p>
                                                    <h4 class="my-1 text-success">{{ $total_future }}</h4>
                                                    {{-- <p class="mb-0 font-13">-4.5% from last week</p> --}}
                                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target=".No_future_test">Card Detail</button>

                                                <div class="modal fade No_future_test" tabindex="-1"
                                                    role="dialog" aria-labelledby="myLargeModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                          <div class="m-2">
                                                          <h4 class="my-1 text-secondary">Scheduled Test</h4>
                                                          <table id="Scheduled_test" class="table table-bordered">
                                                            <thead>
                                                              <tr>
                                                                <th scope="col">id</th>
                                                                <th scope="col">Test Name</th>
                                                                <th scope="col">Create Teacher Name</th>
                                                                <th scope="col">Assigner Teacher Name</th>
                                                                <th scope="col">Assigned Teacher Name</th>
                                                                <th scope="col">Date</th>
                                                              </tr>
                                                            </thead>
                                                            <tbody>
                                                              @foreach($Tests as $Test) 
                                                              @if(strtotime(date("y-m-d\Th:i")) < strtotime($Test->date))
                                                              @php
                                                              $assigner_tech_names = DB::table('teacher_tests')->where('test_id',$Test->id)->get();
                                                              @endphp
                                                              @foreach($assigner_tech_names as $assigner_tech_name)
                                                              @php
                                                              $teacher_name = DB::table('teachers')->where('id',$Test->teacher_id)->first();
                                                              $assigner_teach_id = DB::table('teachers')->where('id',$assigner_tech_name->assigner_teach_id)->first();
                                                              $teacher_assigner = DB::table('teachers')->where('id',$assigner_tech_name->teacher_id)->first();
                                                              @endphp
                                                              <tr>
                                                                <th scope="row">{{$assigner_tech_name->id}}</th>
                                                                <td>{{$Test->test_name}}</td>
                                                                <td>{{$teacher_name->name}}</td>
                                                                <td>{{$assigner_teach_id->name}}</td>
                                                                <td>{{$teacher_assigner->name}}</td>
                                                                <td>{{$Test->date}}</td>
                                                              </tr>
                                                              @endforeach
                                                              @endif
                                                            @endforeach
                                                            </tbody>
                                                          </table>
                                                          </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <div
                                                    class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto">
                                                    <i class="fa fa-users"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card radius-10 border-start border-0 border-3 border-warning">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center">
                                                <div>
                                                    <p class="mb-0 text-secondary">Number of Finished Tests</p>
                                                    <h4 class="my-1 text-warning">{{ $total_finish }}</h4>
                                                    {{-- <p class="mb-0 font-13">+8.4% from last week</p> --}}
                                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target=".No_finished_test">Card Detail</button>

                                                <div class="modal fade No_finished_test" tabindex="-1"
                                                    role="dialog" aria-labelledby="myLargeModalLabel"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                          <div class="m-2">
                                                          <h4 class="my-1 text-secondary">Finished Tests</h4>
                                                          <table id="Finished_test" class="table table-bordered">
                                                            <thead>
                                                              <tr>
                                                                <th scope="col">id</th>
                                                                <th scope="col">Test Name</th>
                                                                <th scope="col">Create Teacher Name</th>
                                                                <th scope="col">Assigner Teacher Name</th>
                                                                <th scope="col">Assigned Teacher Name</th>
                                                                <th scope="col">Date</th>
                                                              </tr>
                                                            </thead>
                                                            <tbody>
                                                              @foreach($Tests as $Test) 
                                                              @if($Test->status == 'finished')
                                                              @php
                                                              $assigner_tech_names = DB::table('teacher_tests')->where('test_id',$Test->id)->get();
                                                              @endphp
                                                              @foreach($assigner_tech_names as $assigner_tech_name)
                                                              @php
                                                              $teacher_name = DB::table('teachers')->where('id',$Test->teacher_id)->first();
                                                              $assigner_teach_id = DB::table('teachers')->where('id',$assigner_tech_name->assigner_teach_id)->first();
                                                              $teacher_assigner = DB::table('teachers')->where('id',$assigner_tech_name->teacher_id)->first();
                                                              @endphp
                                                              <tr>
                                                                <th scope="row">{{$assigner_tech_name->id}}</th>
                                                                <td>{{$Test->test_name}}</td>
                                                                <td>{{$teacher_name->name}}</td>
                                                                <td>{{$assigner_teach_id->name}}</td>
                                                                <td>{{$teacher_assigner->name}}</td>
                                                                <td>{{$Test->date}}</td>
                                                              </tr>
                                                              @endforeach
                                                              @endif
                                                            @endforeach
                                                            </tbody>
                                                          </table>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <div
                                                    class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto">
                                                    <i class="fa fa-users"></i>
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
        </div>
    </div>
    @push('datatable-khushbu')
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @endpush
    <script>
      $(document).ready( function () {
  $('#myTable').DataTable();
  $('#Active_test').DataTable();
  $('#Scheduled_test').DataTable();
  $('#Finished_test').DataTable();
        } );
  </script>
@endsection
