  <!doctype html>
  <html class="no-js" lang="zxx">

  <head>
      @include('front-end.css_teacher')

      <style>
          .error {
              color: red
          }

          textarea.form-control {
              min-height: calc(1.5em + 0.75rem + 2px);
              height: 85px;
          }

      
          .main-menu ul li a {
              color: #313131;
          }

          .main-menu ul li.has-dropdown>a::after {
              color: #000;
          }

          .add-more {
              margin: 15px 0 0 0;
          }

          .main-menu ul li a {
              display: inline-block;
              font-size: 16px;
              font-weight: 400;

              padding: 35px 0;
              text-transform: capitalize;
              text-decoration: none;
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

          label {
            display: inline-block;
            max-width: 100%;
            margin-bottom: 5px;
            font-weight: 700;
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
      </style>

      <!-- CSS only -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <!-- JavaScript Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
      </script>
      <script src="https://code.jquery.com/jquery-2.2.4.min.js"
          integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

      <style>
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


      <!-- header area start -->
      @include('front-end.header_teacher')
      <!-- header area end -->

      <section class="events__area pt-115 pb-120 p-relative">
          <div class="events__shape">
              <img class="events-1-shape" src="#" alt="">
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
                              alt="">Short Question</span></h2>
                  
                              <form  action="{{ route('short-que-store-excel') }}" method="post" enctype="multipart/form-data" id="form_area">
                                @csrf
                                <div class="col-md-2">
                                    <a href="{{asset('excel_file/short_que_store_excel.xlsx')}}" download class="btn btn-primary excel_dow " >Excel Demo</a>
                                </div>
                                 <div class="col-md-10">
                                <div class="form-group text-right excel_form">
                                    <label class="form-label" for="formControlDefault">Import Excel
                                    </label>
                                    <div class="btn">
                                    <input type="hidden" name="test_name" id="input_for_excel_value">
                                    <input type="hidden" name="subject_id" id="input_for_subject_value">
                                    <input type="hidden" name="branch_id" id="input_for_branch_value">
                                    <input type="file" name="file_xcl_imp" id="input_for_file_value">
                                    </div>
                                       <button type="submit" class="btn btn-primary e-btn " >CREATE</button>
                                </div>
                            </div>
                         
                            </form>

                  <form action="{{ route('short-que-store') }}" method="post" enctype="multipart/form-data"
                      id="form_area">
                      @csrf
                      <div class="row" id="form_row">
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label for="test_name">Test Name</label>
                                  <input type="text" class="form-control" name="test_name" id="input_for_excel">
                              </div>
                          </div>

                          <div class="col-md-4">
                              <div class="form-group">
                                  <label for="marks">Marks</label>
                                  <input type="text" id="total_marks"  class="form-control" readonly name="marks" >
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label for="duration">Duration (Min)</label>
                                  <input type="text" class="form-control" name="duration" readonly name="duration"
                                      id="total_duration" >
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label for="no_of_que">No. Of Question</label>
                                  <input type="text" class="form-control" name="no_of_que" readonly
                                      id="total_question">
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label class="branch_id">Branch</label>
                                  <select class="form-select form-select-normal mb-3"
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
                                  <select class="form-select form-select-normal mb-3"
                                      aria-label=".form-select-normal example" name="subject_id" id="input_for_subject">
                                      <option value="false" selected>Select Subject</option>
                                      @foreach ($subject as $subjects)
                                          <option value="{{ $subjects->id }}">{{ $subjects->subject }}</option>
                                      @endforeach
                                  </select>
                              </div>
                          </div>

                          <div class="repeat_d trcounter" id="dynamicrow">
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="subject_id">Question</label>
                                          <textarea class="form-control input-lg" id="question" name="question[]"></textarea>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="subject_id">Question</label>
                                        <input type="file" class="form-control input-lg" id="question_img" name="question_img[]"/>
                                    </div>
                                </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <label for="subject_id">Answer</label>
                                          <textarea class="form-control input-lg" id="answer" name="answer[]"></textarea>
                                      </div>
                                  </div>

                              </div>

                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="subject_id">Duration</label>
                                          <input type="number" class="form-control input-sm time_duration"
                                              id="time_duration" name="time_duration[]"
                                              onkeyup="updateTotalDuration(this)" />
                                      </div>
                                  </div>

                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="subject_id">Marks</label>
                                          <input type="number" class="form-control input-sm que_marks" id="que_marks"
                                              name="que_marks[]" onkeyup="updateTotalMarks()" />
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




                          <!---<div class="col-sm-12">
                <table class="table table-responsive">
                    <tr id="dynamicrow" class='trcounter'>
                        <td style="width:500px;">Question : <textarea class="form-control input-lg" id="question" name="question[]"></textarea></td>
                        <td style="width:700px;">Answer : <textarea class="form-control input-lg" id="answer" name="answer[]"></textarea></td>
                        <td style="width:150px;">Duration : <input type="text" class="form-control input-sm" id="time_duration" name="time_duration[]" /></td>
                        <td style="width:150px;">Marks : <input type="text" class="form-control input-sm" id="que_marks" name="que_marks[]" /></td>
                        <td id="change"><br><a class="btn btn-success input-sm add-more" ><i class="fa fa-plus"></i></a></td>
                    </tr>
                </table>
                </div>----->

                      </div>
                      <br>
                      <button type="submit" class="btn btn-primary e-btn">CREATE</button>

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

</script>

      <script>
          $(document).ready(function() {

              let duration = 0
              let totalMarks = 0
              let totalQuestion = 1
              updateTotalQuestions(totalQuestion)

              $("body").on("click", ".add-more", function() {
                  //   var html = $("#dynamicrow").first().clone();
                  //   $(html).find("#change").html(
                  //       "<label for=''></label><br/><a class='btn btn-danger input-sm remove'><i class='fa fa-minus'></i></a>"
                  //   );
                  var numItems = $('.trcounter').length
                  //   $("#dynamicrow").last().after(html);
                  let html = ` <div class="repeat_d trcounter" id="dynamicrow">
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="subject_id">Question</label>
                                          <textarea class="form-control input-lg" id="question" name="question[]"></textarea>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="subject_id">Question</label>
                                        <input type="file" class="form-control input-lg" id="question_img" name="question_img[]"/>
                                    </div>
                                </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <label for="subject_id">Answer</label>
                                          <textarea class="form-control input-lg" id="answer" name="answer[]"></textarea>
                                      </div>
                                  </div>

                              </div>

                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="subject_id">Duration</label>
                                          <input type="number" class="form-control input-sm time_duration"
                                              id="time_duration" name="time_duration[]" 
                                              onkeyup="updateTotalDuration(this)" />
                                      </div>
                                  </div>

                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="subject_id">Marks</label>
                                          <input type="number" class="form-control input-sm que_marks" id="que_marks"
                                              name="que_marks[]" onkeyup="updateTotalMarks()" />
                                      </div>
                                  </div>

                              </div>

                              <div class="col-md-12 text-right">
                                  <div class="form-group">
                                      <div id="change"><a class='btn btn-danger input-sm remove'><i class='fa fa-minus'></i></a></div>
                                  </div>
                              </div>
                          </div>`
                  $("#form_row").append(html);

                  updateDurationOnAddOrRemove(duration)
                  updateTotalMarksOnAddOrRemove(totalMarks) //
                  updateTotalQuestions(totalQuestion)

              });
              $("body").on("click", ".remove", function() {
                  $(this).parents("#dynamicrow").remove();
                  updateDurationOnAddOrRemove(duration)
                  updateTotalMarksOnAddOrRemove(totalMarks) //
                  updateTotalQuestions(totalQuestion)

              });

              validateShortQueForm()
          });

          function updateDurationOnAddOrRemove(d) {
              $("#form_row").find(".time_duration").each((element, obj) => {
                  console.log(obj.value)
                  if (obj.value) {
                      d = d + parseInt(obj.value)
                  }
              });
              $("#total_duration").val(d)
          }

          function updateTotalMarksOnAddOrRemove(s) {
              $("#form_row").find(".que_marks").each((element, obj) => {
                  console.log(obj.value)
                  if (obj.value) {
                      s = s + parseInt(obj.value)
                  }
              });
              $("#total_marks").val(s)
          }




          function updateTotalMarks() {
              $("#total_marks").val(0)
              totalMarks = 0

              $("#form_row").find(".que_marks").each((element, obj) => {
                  console.log(obj.value)
                  if (obj.value) {
                      totalMarks = totalMarks + parseInt(obj.value)
                  }
              });
              $("#total_marks").val(totalMarks)

          }


          function updateTotalDuration() {
              $("#total_duration").val(0)
              duration = 0

              $("#form_row").find(".time_duration").each((element, obj) => {
                  console.log(obj.value)
                  if (obj.value) {
                      duration = duration + parseInt(obj.value)
                  }
              });
              $("#total_duration").val(duration)
          }

          function updateTotalQuestions(tq) {

              $("#form_row").find(".trcounter").each((element, obj) => {
                  console.log("Question Counts", element)
                  if (element) {
                      tq = element + 1
                  } else {
                      tq = 1
                  }
              });

              $("#total_question").val(tq)
          }
      </script>
  </body>

  </html>
