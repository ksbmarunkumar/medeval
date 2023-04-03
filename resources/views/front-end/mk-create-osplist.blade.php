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
            z-index: 2;
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
                            alt="">Opslist</span></h2>
                            
                            
                            <form  action="{{ route('mk-store-osplist-excel') }}" method="post" enctype="multipart/form-data" id="form_area">
                                @csrf
                                <div class="col-md-2">
                                    <a href="{{asset('excel_file/osplist_excel.xlsx')}}" download class="btn btn-primary excel_dow" >Excel Demo</a>
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
                            
                            
                            
                    <form action="{{ route('mk-store-osplist') }}" method="post" enctype="multipart/form-data"
                    id="form_area">
                    @csrf
                    <div class="row" id="form_row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="test_name">Test Name</label>
                                <input type="text" placeholder="Enter test name" class="form-control "
                                    name="test_name" id="input_for_excel">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="marks">Marks</label>
                                <input type="text" placeholder="Enter marks" class="form-control " id="total_marks"
                                readonly  name="marks">
                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="duration">Duration (Min)</label>
                                <input type="text" placeholder="Enter duration" class="form-control" name="duration" id="input_for_duration">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="no_of_que">No. Of Question</label>
                                <input type="text" readonly placeholder="Enter no of question" class="form-control"
                                    name="no_of_que" id="total_question">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="branch_id" for="formControlSm">Branch</label>
                                <select class="form-select form-select-normal mb-3 "
                                    aria-label=".form-select-normal example" name="branch_id" id="input_for_branch">
                                    <option value="false" selected>Select Branch</option>
                                    @foreach ($branch as $branches)
                                        <option value="{{ $branches->id }}">{{ $branches->branch_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="subject_id">Subject Name</label>
                                <select class="form-select form-select-normal mb-3 "
                                    aria-label=".form-select-normal example" name="subject_id" id="input_for_subject">
                                    <option value="false" selected>Select Subject</option>
                                    @foreach ($subject as $subjects)
                                        <option value="{{ $subjects->id }}">{{ $subjects->subject }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>



                        <div class="add_all trcounter" id="dynamicrow">
                            
                              
                            <div class="tab" style="display: block;">

                                <div class="form-outline col-12">
                                    <label class="form-label" for="formControlDefault">Question</label>
                                    <input type="text" id="formControlDefault" name="question[]"
                                        placeholder="Enter Question..." class="form-control">
                                </div>

                                <div class="form-outline">
                                    <label class="form-label" for="formControlSm">Total Marks</label>
                                    <input type="number" name="que_marks[]" onkeyup="updateTotalMarks()"
                                        placeholder="Enter Total Marks number..." class="form-control que_marks">
                                </div>

                                <div class="form-group">
                                    <label class="form-label" for="formControlDefault">No. of steps</label>
                                    <!--id="SelName"-->
                                        <input type="number" name="no_of_step[]"
                                            placeholder="Enter No. of steps (20 Maximum)"
                                            class="form-control form-control123 SelName" data-item-id="0">
                                </div>

                                <!--- show 1-->
                                <div class="sub-cats">
                                </div>
                                <!------->

                            </div>

                            <div class="col-md-12 text-right">
                                <div class="form-group">
                                    <div id="change"><a class="btn btn-success input-sm add-more"><i
                                                class="fa fa-plus"></i></a></div>
                                </div>
                            </div>

                        </div>



                        <!-------end of add_all---------------->

                        <!---<div class="col-sm-12">
                <table class="table table-responsive">
                    <tr id="dynamicrow" class='trcounter'>
                        <td>Question : <input type="text" class="form-control input-lg" id="question" name="question[]" /></td>
                        <td>Answer1 : <input type="text" class="form-control input-sm" id="answer1" name="answer1[]" /></td>
                        <td>Answer2 : <input type="text" class="form-control input-sm" id="answer2" name="answer2[]" /></td>
                        <td>Answer3 : <input type="text" class="form-control input-sm" id="answer3" name="answer3[]" /></td>
                        <td>Answer4 : <input type="text" class="form-control input-sm" id="answer4" name="answer4[]" /></td>
                        <td>Right Answer : <input type="text" class="form-control input-sm" id="right_ans" name="right_ans[]" /></td>
                        <td>Marks : <input type="text" class="form-control input-sm" id="que_marks" name="que_marks[]" /></td>
                        <td id="change"><br><a class="btn btn-success input-sm add-more" ><i class="fa fa-plus"></i></a></td>
                    </tr>
                </table>
                </div>---->



                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary e-btn">CREATE MCQ</button>
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
        const devil = (e) => {
            if (e.keyCode == 13) {
                return false;
            }
        }

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


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"
        integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"
        integrity="sha512-6S5LYNn3ZJCIm0f9L6BCerqFlQ4f5MwNKq+EthDXabtaJvg3TuFLhpno9pcm+5Ynm6jdA9xfpQoMz2fcjVMk9g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{ asset('assets/js/validation.js') }}"></script>

 

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
        let dev_count = 1;
        let an = 1;

        $(document).ready(function() {

            updateTotalMarksOnAddOrRemove(0, "form_row", "que_marks", "total_marks")

            $("#total_question").val(1)
            validateOpsListForm()
            $("body").on("click", ".add-more", function() {
                // var html = $("#dynamicrow").first().clone();
                var html =
                    `<div class="add_all trcounter" id="dynamicrow">
                            <div class="tab" style="display: block;">
                                <div class="form-outline col-12">
                                    <label class="form-label" for="formControlDefault">Question</label>
                                    <input type="text" id="formControlDefault" name="question[]" placeholder="Enter Question..." class="form-control">
                                </div>
                                <div class="form-outline">
                                    <label class="form-label" for="formControlSm">Total Marks</label>
                                    <input type="text" class="que_marks" id="formControlDefault" name="que_marks[]" onkeyup="updateTotalMarks()" placeholder="Enter Total Marks number..." class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="formControlDefault">No. of steps</label>
                                    <input type="number" name="no_of_step[]" placeholder="Enter No. of steps (20 Maximum)" class="form-control form-control123 SelName"  data-item-id="` +
                    an + `">
                                    
                                </div>
                                <!--- show 1-->
                                <div class="sub-cats">
                                </div>
                                <!------->
                            </div>
                            <div class="col-md-12 text-right">
                                <div class="form-group">
                                    <div id="change"><a class="btn btn-danger input-sm remove"><i class="fa fa-minus"></i></a></div>
                                </div>
                            </div>
                        </div>`;

                // $(html).find("#change").html("<label for=''></label><br/><a class='btn btn-danger input-sm remove'><i class='fa fa-minus'></i></a>");
                var numItems = $('.trcounter').length;
                an++;
                $("#form_row").append(html);
                dev_count++;
                // Devil Boy
                $(".SelName").keyup(function() {
                    // alert($(this).data("item-id"));
                    console.log("key devil");
                    var inputVal = $(this).val();
                    let div = $(this).parent().next('.sub-cats');;
                    console.log(this);
                    // $(".sub-cats").html("");
                    $(div).html("");
                    if(inputVal <= 20){
                    for (i = 1; i <= inputVal; i++) {
                        $(div).append('<div class="col-12 form-group" id="image' + i +
                            '"><label>Answer ' + i +
                            ':*</label><input type="test" name="answer[' + $(this).data(
                                "item-id") + '][]" placeholder="Enter Answer ' + i +
                            '..." class="form-control"></div>');
                    }
                }
                });
                updateTotalMarksOnAddOrRemove(0, "form_row", "que_marks", "total_marks")
                updateTotalQuestions(0)
            });

            // $(".form-control123").on("keypress", function() {
            //     console.log("key");
            //     var inputVal = $(".form-control123").val();
            //     $(".sub-cats").html("");
            //     for (i = 1; i <= inputVal; i++) {
            //         $(".sub-cats").append('<div class="col-12 form-group" id="image' + i + '"><label>Answer ' + i + ':*</label><input type="test" name="answer[]" placeholder="Enter Answer ' + i + '..." class="form-control"></div>');
            //     }
            // });
            $(".SelName").keyup(function() {
                // alert($(this).data("item-id"));
                // var inputVal = $(".form-control123").val();
                var inputVal = $(this).val();
                let div = $(this).parent().next('.sub-cats');;
              
                // $(".sub-cats").html("");
                $(div).html("");
                if(inputVal <= 20){
                for (i = 1; i <= inputVal; i++) {
                    $(div).append('<div class="col-12 form-group" id="image' + i + '"><label>Answer ' + i +
                        ':*</label><input type="test" name="answer[' + $(this).data("item-id") +
                        '][]" placeholder="Enter Answer ' + i + '..." class="form-control"></div>');
                }
            }

            });
            $("body").on("click", ".remove", function() {
                $(this).parents("#dynamicrow").remove();
                updateTotalMarksOnAddOrRemove(0, "form_row", "que_marks", "total_marks")
                updateTotalQuestions(0)
            });


        });
    </script>

    <script>
        $(window).ready(function() {
            $("#form_area").on("keypress", function(event) {
                var keyPressed = event.keyCode || event.which;
                if (keyPressed == 13) {
                    // alert("You pressed the Enter key!!");
                    event.preventDefault();
                    return false;
                }
            });
        });
    </script>

    <script>
        // show hide
        $(document).ready(function() {
            hideAll();
            // $('#SelName').on('input', function() {
            //     let num = $(this).val();
            //     let divs = $('.myDivs');
            //     hideAll();
            //     if (num) {
            //         for (let i = 0; i < divs.length; i++) {
            //             let div = divs[i];
            //             if (i + 1 <= num)
            //                 $(div).show();
            //         }
            //     }
            // });

            // $('.SelName').change('input', function() {
            //     let divs = $(this).parent();
            //     let num = $(this).val();
            //     // let divs = $('.myDivs');
            //     hideAll();
            //     if (num) {
            //         for (let i = 0; i < divs.length; i++) {
            //             let div = divs[i];
            //             if (i + 1 <= num)
            //                 $(div).show();
            //         }
            //     }
            // });

            // function hideAll() {
            //     let divs = $('.myDivs');
            //     for (let i = 0; i < divs.length; i++) {
            //         let div = divs[i];
            //         $(div).hide();
            //     }
            // }
        });


        // $('input').on('input', function () {

        //     var value = $(this).val();

        //     if ((value !== '') && (value.indexOf('.') === -1)) {

        //         $(this).val(Math.max(Math.min(value, 50), -1));
        //     }
        // });
    </script>

</body>

</html>
