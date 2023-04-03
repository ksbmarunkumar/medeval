<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('front-end.css_teacher')

    <style>
        .main-menu ul li a {
            color: #313131 !important;
        }

        .error {
            color: red;
        }

        .add-more {
            margin: 15px 0 0 0;
        }

        .add_all {
            border: 2px solid #d6d6d6;
            margin-top: 10px;
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
        .excel_dow{
            display: inline-block !important;
    height: 50px;
    line-height: 52px;
    text-align: center !important;
    display: flex !important;
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
    flex-direction: row !important;
    flex-wrap: wrap;
    align-content: center;
    justify-content: center;
    align-items: center;
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

    </style>
    <!-- header area start -->
    @include('front-end.header_teacher')
    <!-- header area end -->


    <div class="body-overlay"></div>
    <!-- cart mini area end -->



    <section class="events__area pt-115 pb-120 p-relative">
        <div class="events__shape">
            <img class="events-1-shape" src="" alt="">
        </div>
        <div class="container">
        @if ($errors->any())
                <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                </ul>
              </div>
              @endif
            <div class="row">
                <h2 class="section__title" style="text-align:center; margin-bottom: 30px;">Create <span
                        class="yellow-bg yellow-bg-big"><img src="{{ asset('assets/img/shape/yellow-bg.png') }}"
                            alt="">MCQ</span></h2>

    
                            
                            <form  action="{{ route('mcq_test_store_excel') }}" method="post" enctype="multipart/form-data" id="form_area">
                                @csrf
                                <div class="col-md-2">
                                    <a href="{{asset('excel_file/mcq_test_store_excel.xlsx')}}" download class="btn btn-primary excel_dow" >Excel Demo</a>
                                </div>
                                 <div class="col-md-10">
                                <div class="form-group text-right excel_form">
                                    <label class="form-label" for="formControlDefault">Import Excel
                                    </label>
                                    <div class="btn">
                                    <input type="hidden" name="test_name" id="input_for_excel_value">
                                    <input type="hidden" name="subject_id" id="input_for_subject_value">
                                    <input type="hidden" name="branch_id" id="input_for_branch_value">
                                    <input type="hidden" name="duration" id="input_for_duration_value">
                                    <input type="file" name="file_xcl_imp" id="input_for_file_value">
                                    </div>
                                       <button type="submit" class="btn btn-primary e-btn " >CREATE MCQ</button>
                                </div>
                            </div>
                         
                            </form>

                <form action="{{ route('mcq_test_store') }}" method="post" enctype="multipart/form-data"
                    id="form_area">
                    @csrf
                    <div class="row" id="form_row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="test_name">Test Name</label>
                                <input type="text" placeholder="Enter test name" class="form-control" 
                                    name="test_name" id="input_for_excel">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="marks">Marks</label>
                                <input type="text" placeholder="Enter marks" id="total_marks" readonly
                                    class="form-control" name="marks">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="duration">Duration (Min)</label>
                                <input type="number" placeholder="Enter duration" class="form-control" 
                                    name="duration" id="input_for_duration">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="no_of_que">No. Of Question</label>
                                <input type="number" id="total_question" placeholder="Enter no of question"
                                    class="form-control"  name="no_of_que" readonly>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="branch_id" for="formControlSm">Branch</label>
                                <select class="form-select form-select-normal mb-3"
                                    aria-label=".form-select-normal example" name="branch_id" id="input_for_branch" required>
                                    <option disabled selected>Select Branch</option>
                                    @foreach ($branch as $b)
                                        <option value="{{ $b->id }}">{{ $b->branch_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="subject_id">Subject Name</label>
                                <select class="form-select form-select-normal mb-3"
                                    aria-label=".form-select-normal example" name="subject_id" id="input_for_subject" required>
                                    <option disabled selected>Select Subject</option>
                                    @foreach ($subject as $s)
                                        <option value="{{ $s->id }}">{{ $s->subject }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                       


                        <div class="add_all trcounter" id="dynamicrow">

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="subject_id">Marks</label>
                                    <input  type="number" class="form-control input-sm que_marks" id="que_marks"
                                        minlength="0" required onkeyup="updateTotalMarks()" name="que_marks[]" required/>
                                </div>
                                {{-- <div class="col-md-3">
                                    <div  class="btn btn-primary e-btn input_view position-absolute top-40 end-10" id="input_view"  >Text Input</div>
                               </div>
                                <div class="col-md-3">
                                    <div  class="btn btn-primary e-btn image_view position-absolute top-40 end-10" id="image_view"  >Image Input</div>
                               </div> --}}
                               
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                        <label for="subject_id">Question</label>
                                        <input  type="text" class="form-control input-lg question" placeholder="Enter question"
                                             id="question" name="question[]" required/>
                                        <input  type="file" class="form-control" id="question_img" name="question_img[]" />
                                    </div>
                                </div>
                            </div>
              
                    <span style="display:none;color:red;" id="span_input">Fill Input Either Image</span>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="subject_id">Answer1</label>
                                        <input  type="text" class="form-control input-sm answer1" 
                                            placeholder="Enter answer"   id="answer1" name="answer1[]"  />
                                            <input  type="file" class="form-control" id="answer1_img" name="answer1_img[]" />
                                    </div>
                                </div>
                            </div>
                          
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="subject_id">Answer2</label>
                                        <input  type="text" class="form-control input-sm answer2"  id="answer2"
                                            name="answer2[]"  />
                                            <input  type="file" class="form-control" id="answer2_img" name="answer2_img[]" />
                                    </div>
                                </div>
                            </div>
                              

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="subject_id">Answer3</label>
                                        <input  type="text" class="form-control input-sm answer3" id="answer3" 
                                            name="answer3[]"  />
                                            <input  type="file" class="form-control" id="answer3_img" name="answer3_img[]" />
                                    </div>
                                </div>
                            </div>
                               

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="subject_id">Answer4</label>
                                        <input  type="text" class="form-control input-sm answer4"  id="answer4"
                                            name="answer4[]"  />
                                            <input  type="file" class="form-control" id="answer4_img" name="answer4_img[]" />
                                    </div>
                                </div>
                            </div>
                              
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="subject_id">Right Answer</label>
                                        <select class="form-select form-select-normal mb-3"
                                            aria-label=".form-select-normal example" name="right_ans[]" required>
                                            <option disabled selected>Select Answer</option>
                                            <option value="1">Answer1</option>
                                            <option value="2">Answer2</option>
                                            <option value="3">Answer3</option>
                                            <option value="3">Answer4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 text-right">
                                <div class="form-group">
                                    <div id="change"><a class="btn btn-success input-sm add-more"><i
                                                class="fa fa-plus"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <!-------end of add_all---------------->



                    </div>
                    <button type="submit" class="btn btn-primary e-btn"  value="Submit">CREATE MCQ</button>
                </form>
            </div>
        </div>
    </section>






    <!-- footer area start -->
    @include('front-end.footer_teacher')
    <!-- footer area end -->
    <!-- JS here -->
    @include('front-end.scripts_teacher')
    
    <script>
document.getElementById('input_for_excel').addEventListener('keyup', function() {
//  console.log('You selected: ', this.value);
 var value_input = this.value;
 document.getElementById('input_for_excel_value').value = value_input;
});
document.getElementById('input_for_subject').addEventListener('change', function() {
//  console.log('You selected: ', this.value);
 var value_input = this.value;
 document.getElementById('input_for_subject_value').value = value_input;
});
document.getElementById('input_for_branch').addEventListener('change', function() {
//  console.log('You selected: ', this.value);
 var value_input = this.value;
 document.getElementById('input_for_branch_value').value = value_input;
});
document.getElementById('input_for_duration').addEventListener('keyup', function() {
        //  console.log('You selected: ', this.value);
         var value_input = this.value;
         document.getElementById('input_for_duration_value').value = value_input;

        });

</script>



    <script>
     
        //Tabs Layout Code
        $("#tabs").tabs({
            activate: function(event, ui) {
                var active = $('#tabs').tabs('option', 'active');
                $("#tabid").html('the tab id is ' + $("#tabs ul>li a").eq(active).attr("href"));
            }
        });
    </script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"
        integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"
        integrity="sha512-6S5LYNn3ZJCIm0f9L6BCerqFlQ4f5MwNKq+EthDXabtaJvg3TuFLhpno9pcm+5Ynm6jdA9xfpQoMz2fcjVMk9g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{ asset('assets/js/validation.js') }}"></script>


    <script>
        $(document).ready(function() {

            let i = 0;
            $("#total_question").val(1)

            $("body").on("click", ".add-more", function() {

                // var html = $("#dynamicrow").first().clone();

                let dynamicRw = `<div class="add_all trcounter" id="dynamicrow">

<div class="row">

  
    <div class="col-md-6">
        <label for="subject_id">Marks</label>
        <input type="text" class="form-control input-sm que_marks" id="que_marks${i}"  onkeyup="updateTotalMarks()" name="que_marks[]" />
    </div>
</div>

<div class="row">
<div class="col-md-12">
        <div class="form-group">
            <label for="subject_id">Question</label>
            <input type="text" class="form-control input-lg question" placeholder="Enter question"  id="question${i}" name="question[]"  required />
            <input  type="file" class="form-control" id="question_img${i}" name="question_img[]" />
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="subject_id">Answer1</label>
            <input type="text" class="form-control input-sm answer1"  placeholder="Enter answer1" id="answer1${i}" name="answer1[]"   />
            <input  type="file" class="form-control" id="answer1_img${i}" name="answer1_img[]" />
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="subject_id">Answer2</label>
            <input type="text" class="form-control input-sm answer2"  id="answer2${i}" name="answer2[]"   />
            <input  type="file" class="form-control" id="answer2_img${i}" name="answer2_img[]" />
        </div>
    </div>
</div>



<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="subject_id">Answer3</label>
            <input type="text" class="form-control input-sm answer3"  id="answer3${i}" name="answer3[]"   />
            <input  type="file" class="form-control" id="answer3_img${i}" name="answer3_img[]" />
        </div>
    </div>
</div>



<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="subject_id">Answer4</label>
            <input type="text" class="form-control input-sm answer4"  id="answer4${i}" name="answer4[]"   />
            <input  type="file" class="form-control" id="answer4_img${i}" name="answer4_img[]" />
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="subject_id">Right Answer</label>
            <select class="form-select form-select-normal mb-3" aria-label=".form-select-normal example" name="right_ans[]" required >
                <option disabled selected>Select Answer</option>
                <option value="1">Answer1</option>
                <option value="2">Answer2</option>
                <option value="3">Answer3</option>
                <option value="3">Answer4</option>
            </select>
        </div>
    </div>
</div>

<div class="col-md-12 text-right">
    <div class="form-group">
        <div id="change"><a class='btn btn-danger input-sm remove'><i class='fa fa-minus'></i></a></div>
    </div>
</div>
</div>`;

                $("#form_row").append(dynamicRw)
                // $(html).find("#change").html("<label for=''></label><br/><a class='btn btn-danger input-sm remove'><i class='fa fa-minus'></i></a>");
                var numItems = $('.trcounter').length
                // $("#dynamicrow").last().after(html);

                i++
                updateTotalQuestions(0)


            });


            $("body").on("click", ".remove", function() {
                $(this).parents("#dynamicrow").remove();
                updateTotalQuestions(0)
            });



            $("#que_marks").keyup(function() {
                // $("input").css("background-color", "pink");
                let marks = parseInt($("#que_marks").val());
                let total_marks = $("#total_marks").val();

            });
            validateMcqForm();
        });

        $("#total_marks").val(0);
        let total_marks = parseInt($("#total_marks").val(0));


        let sum = 0

        function updateTotalMarks() {
            $("#total_marks").val(0)
            sum = 0

            $("#form_row").find(".que_marks").each((element, obj) => {
                console.log(obj.value)
                if (obj.value) {
                    sum = sum + parseInt(obj.value)
                }
            });
            $("#total_marks").val(sum)

        }
    </script>



{{-- <script>
$(document).ready(function(){
    $( function() {
        $( ".question" ).hide();
        $( ".answer1" ).hide();
        $( ".answer2" ).hide();
        $( ".answer3" ).hide();
        $( ".answer4" ).hide();
    });
});

$(document).ready(function(){
    $( function() {
        $("#image_view").click(function(){
        $( ".question" ).attr('type', 'text');
        $( ".answer1" ).attr('type', 'file');
        $( ".answer2" ).attr('type', 'file');
        $( ".answer3" ).attr('type', 'file');
        $( ".answer4" ).attr('type', 'file');
        $( ".question" ).show();
        $( ".answer1" ).show();
        $( ".answer2" ).show();
        $( ".answer3" ).show();
        $( ".answer4" ).show();
        
    });
});
});
    
$(document).ready(function(){
    $( function() {
        $("#input_view").click(function(){
        $( ".question" ).attr('type', 'text');
        $( ".answer1" ).attr('type', 'text');
        $( ".answer2" ).attr('type', 'text');
        $( ".answer3" ).attr('type', 'text');
        $( ".answer4" ).attr('type', 'text');
                $( ".question" ).show();
        $( ".answer1" ).show();
        $( ".answer2" ).show();
        $( ".answer3" ).show();
        $( ".answer4" ).show();
    });
});
});
</script> --}}

</body>

</html>
