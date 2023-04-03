@extends('base')


@section('main_section')
    <section class="events__area pt-115 pb-120 p-relative">
        <div class="events__shape">
            <img class="events-1-shape" src="{{asset('assets/img/events/events-shape.png')}}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="alert " role="alert">
                    Module Assigned successfully
                </div>

                <h2 class="section__title" style="text-align:center; margin-bottom: 30px;">Assign   
                    <span class="yellow-bg yellow-bg-big"><img height="10" src="{{asset('assets/img/shape/yellow-bg.png')}}"
                            alt="">  Module</span>
                </h2>
                <form method="POST"  enctype="multipart/form-data" id="form_area">
                    <input type="hidden" name="_token" value="hGt1qv2ItL3pjqfgjCCd4IFLQkcbQBSALhQapSPs">
                    <!--<input type="hidden" name="_token" value="ST4utUKTd4gx4qr1R0NAGygwNvEkuRjNxNJR6hni">-->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="test_name">Test Name</label>
                                <input type="text" placeholder="Enter test name" value="{{ $ospQue->test_name }}"
                                    readonly class="form-control" name="test_name">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="marks">Marks</label>
                                <input type="text" placeholder="Enter marks" class="form-control"
                                    value="{{ $ospQue->marks }}" name="marks" readonly>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="duration">Duration</label>
                                <input type="text" placeholder="Enter duration" class="form-control"
                                    value="{{ $ospQue->duration }}" name="duration" readonly>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="no_of_que">Date</label>
                                <input type="date" placeholder="Enter no of question" readonly
                                    value="{{ $ospQue->created_at }}" class="form-control" name="no_of_que">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="branch_id" for="formControlSm">Branch</label>
                                <select class="form-select form-select-normal mb-3" disabled
                                    aria-label=".form-select-normal example" name="branch_id">
                                    <option selected>{{ $ospQue->branch_name }}</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="subject_id">Subject Name</label>
                                <select class="form-select form-select-normal mb-3" disabled
                                    aria-label=".form-select-normal example" name="subject_id">
                                    <option selected>{{ $ospQue->subject }}</option>

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
                                <tbody id="tdody_auto">



                                </tbody>
                            </table>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-8">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Assigner Id</th>
                                        <th>Teacher</th>
                                        <th>Quection Name</th>
                                        <th>Student</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    <?php
                                     $tId = session('tId');
                                     $data_gets = DB::table('assign_modules')
                                     ->select('assign_modules.assigner_id','assign_modules.teacher_id','assign_modules.ospque_id' ,'assign_modules.student_ids')
                                     ->where('assign_modules.assigner_id','=',Auth::user()->teacher_id)
                                     ->where('assign_modules.ospque_id','=',$oQueId)
                                     ->where('assign_modules.test_id', '=', $tId)
                                     ->get();
       
                                       $index = 1;
                                      foreach($data_gets as $data_get){
                                       
                                        $assigner_id = DB::table('users')
                                     ->select('users.name')
                                     ->where('users.teacher_id','=',$data_get->assigner_id)
                                     ->get();
                                     
                                     $assigner_name = json_decode($assigner_id);
                                     $name_assi = $assigner_name[0]->name;

                                        // for teacher name
                                     $teacher_id = DB::table('teachers')
                                     ->select('teachers.name')
                                     ->where('teachers.id','=',$data_get->teacher_id)
                                     ->get();

                                     $teacher_name = json_decode($teacher_id);
                                     $teacher_n = $teacher_name[0]->name;

                                    // for short_que_tests test_name

                                     $ospque_id = DB::table('osp_tests')
                                     ->select('osp_tests.test_name')
                                     ->where('osp_tests.id','=',$data_get->ospque_id)
                                     ->get();
                                        
                                     $ospque_id_name = json_decode($ospque_id);
                                     $ospque_name = $ospque_id_name[0]->test_name;
                                  
                                        ?>
                                         <tr>
                                         <td>{{$index}}</td>
                                         <td>{{$name_assi}}</td>
                                         <td>{{$teacher_n}}</td>
                                         <td>{{$ospque_name}}</td>
                                         <td>
                                            <?php
                                            $student_ids = json_decode($data_get->student_ids) ;
                                               foreach($student_ids as $student_id){
                                            //   for students name
                                                $student_name_json = DB::table('students')
                                              ->select('students.name')
                                              ->where('students.id','=',$student_id)
                                                ->get();
                                                $student_names = json_decode($student_name_json);
                                                echo $student_name = $student_names[0]->name;
                                                }
                                            ?>
                                         </td>
                                         </tr>

                                        <?php
                                        $index++;
                                      }
                                    ?>
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
@endsection


@push('page_script')
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
            $('#tdody_auto').empty();

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
                        $('#tdody_auto').append(rowMarkup);
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
                            term: term,
                            page_name : "osplist_copy",
                            oQueId : {{$oQueId}}
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
                'ospque_id': "{{ $ospQue->id }}",
                'test_id': "{{ session('tId') }}",
                'assigner_id': "{{ auth()->user()->teacher_id }}"
            }
            $.ajax({
                url: "{{ route('assign_module') }}",
                type: 'post',
                data: data,
                success: function(result) {
                    location.reload()
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
@endpush
