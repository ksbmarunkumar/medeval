    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

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
</style>


   <form action="{{ route('mk-store-osplist') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="test_name">Test Name</label>
                    <input type="text" class="form-control" name="test_name">
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="form-group">
                    <label for="marks">Marks</label>
                    <input type="text" class="form-control" name="marks">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="duration">Duration</label>
                    <input type="text" class="form-control" name="duration">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="no_of_que">No. Of Question</label>
                    <input type="text" class="form-control" name="no_of_que">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label class="branch_id" for="formControlSm">Branch</label>
                        <select class="form-select form-select-normal mb-3" aria-label=".form-select-normal example" name="branch_id">
                         <option selected>Select Branch</option>
                            @foreach($branch as $branches)
                                <option value="{{$branches->id}}">{{$branches->branch_name}}</option>
                            @endforeach
                       </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="subject_id">Subject Name</label>
                        <select class="form-select form-select-normal mb-3" aria-label=".form-select-normal example" name="subject_id">
                               <option selected>Select Subject</option>
                                @foreach($subject as $subjects)
                                    <option value="{{$subjects->id}}">{{$subjects->subject}}</option>
                                @endforeach
                       </select>
                </div>
            </div>
              <div class="col-sm-12">
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
                </div>
                
        </div>
                
              <button type="submit" class="btn btn-primary">CREATE MCQ</button>
          
</form>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
    $(document).ready(function () {
      
        $("body").on("click", ".add-more", function () {
            var html = $("#dynamicrow").first().clone();
            $(html).find("#change").html("<label for=''></label><br/><a class='btn btn-danger input-sm remove'><i class='fa fa-minus'></i></a>");
            var numItems = $('.trcounter').length
            $("#dynamicrow").last().after(html);
        });
        $("body").on("click", ".remove", function () {
            $(this).parents("#dynamicrow").remove();
        });


    });
</script>