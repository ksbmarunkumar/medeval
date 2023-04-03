@extends('layouts.app')
@section('title', 'User')
@section('content')
<style>
    .heading {
    display: flex;
    justify-content: left;
    align-items: center;
    position: relative;
    top: -12px;
}
.heading h4 {
    margin: 12px 0 0 12px;
}
.title {
    text-align: center;
}
.title h4 {
    margin: 0;
    padding: 0;
    color: #aaa;
    text-transform: capitalize;
}
.container_rv {
    background-color: #fff;
    /*width: 50% !important;*/
    /*height: 100% !important;*/
    margin: 50px auto;
    border: 2px solid #fff;
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5);
    border-radius: 5px;
}
.container_rv .left {
    float: left;
    /*width: 50%;*/
    /*height: 100% !important;*/
    box-sizing: border-box;
}
.container_rv .right {
    float: right;
    margin-top: 30px;
    /*width: 50%;*/
    /*height: 100% !important;*/
    margin: 10px auto;
     background-color: red; 
}
.container_rv .right button {
    text-align: center;
}
.formBox {
    /*width: 80%;*/
    margin: 30px 15px;
    box-sizing: border-box;
    border-radius: 0px 0px 0px 0px;
}
.formBox input {
    width: 100%;
    margin-bottom: 20px;
    border-radius: 0px 0px 0px 0px;
}
.formBox input[type="text"] {
    border: none;
    border-bottom: 1px solid #aaa;
    outline: none;
    height: 30px;
    border-radius: 0px 0px 0px 0px;
}
.formBox input[type="text"]:focus {
    border-bottom: 1px solid #42e523;
    box-shadow: none;
    border-radius: 0px 0px 0px 0px;
}

.formBox label {
    margin-top: 20px;
    margin-bottom: 20px;
}
.right .formBox {
    width: 80%;
    margin: 30px 15px;
    box-sizing: border-box;
}
.right .formBox .picture {
    background-color: #b3ffae;
    width: 300px;
    height: 150px;
    border: 1px solid #eee;
    box-shadow: 0 15px 30px #b3ffae;
    border-radius: 5px;
    margin-bottom: 20px;
}
.icon {
    width: 50px;
    height: 50px;
    background-color:#004ba5;
    color: #fff;
    font-size: 25px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 4px;
}
.form-control:focus
{
    border: 1px solid #004ba5 !important;
}
.form-select:focus {
    border: 1px solid #004ba5 !important;
    box-shadow: none !important;
    color: #dc3545;
}
.form-select option:hover {
    background-color: #42e523 !important;
}
button.btn.btn-danger.rv-submit {
    background-color: #505fc7!important;
    border-color: #505fc7 !important;
}
.btn-custom {
    width: 126px;
    height: 36px;
    background-color: #004ba5;
    color: #fff;
    font-size: 1rem;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 25px;
    padding: 10px 10px;
    border: none;
}
button.btn.btn-danger.rv-submit:hover {
    border-color: #576482!important;
    background-color: #576482!important;
}
button#sp-submit {
    margin-top: 28px;
}
.custom-control.custom-switch.mk {
    margin-left: 50px;
    margin-top: 37px;
}
.content-wrapper
{
    padding:25px;
}
.btn-primary2
{
 
    color: #fff;
    background-color: #004ba5;
    border-color: #004ba5;
    box-shadow: none;

}
.btn-primary2:hover
{
    color:#fff;
    background-color:#1071f4;
}

.field-icon {
  
 padding-top: 10px;
    position: relative;
    width:2rem;
    z-index: 2;
   background-color: #f8f9fa;
  
    border:1px solid #ddd;
}

.container{
  padding-top:50px;
  margin: auto;
}

</style>

<div class="content-wrapper">

    <div class="container-fluid container_rv">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="heading">
                <i class="icon fa fa-user"></i>
                <h4>Edit Student</h4>
            </div>

            <form class="forms-sample" method="POST" action="{{ url('student/update') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$student->id}}">

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="name">Name<span class="text-red">*</span></label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$student->name}}" placeholder="Enter Student Name">
                                <div class="help-block with-errors" ></div>
                                @error('name')
                                    <span class="invalid-name" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>                            
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="mobile">Mobile<span class="text-red">*</span></label>
                                <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{$student->mobile_no}}" placeholder="Enter Student Mobile">
                                <div class="help-block with-errors" ></div>
                                @error('mobile')
                                    <span class="invalid-mobile" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>                            
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email">Email<span class="text-red">*</span></label>
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$student->email}}" placeholder="Enter Student Email">
                                <div class="help-block with-errors" ></div>
                                @error('email')
                                    <span class="invalid-email" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>                            
                    </div>
                    {{-- <div class="col-sm-6">
                        <div class="form-group">
                            <label for="password">Password<span class="text-red">*</span></label>
                             <div class="input-group">
                                
                                <input id="password-field" type="text" rel="gp" data-size="8" data-character-set="a-z,A-Z,0-9,#" class="form-control @error('password') is-invalid @enderror" name="password" value="" placeholder="Enter Student Password">
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                <span class="input-group-btn"><button type="button" class="btn btn-default getNewPass" onclick="on_gnr()">Generate</button></span>
                                </div>
                                <div class="help-block with-errors" ></div>
                                @error('password')
                                    <span class="invalid-password" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>  
                    </div> --}}

                    <div class="col-sm-6">
                        <div class="form-group">
                               <label for="image">Image</label>
                               <div class="row">
                               <div class="col-sm-6"> <input  type="file" class="form-control" name="image" id="image" value=""></div>
                               <div class="col-sm-6">
                                <input type="hidden" name="image_old" value="{{$user_img}}">
                                <img src="{{asset($user_img)}}" alt="" height="25px" width="25">
                            </div>

                            </div>
                        </div>
                    </div>
                   
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="univercity_id">Univercity Id</label>
                                <input id="univercity_id" type="text" class="form-control @error('univercity_id') is-invalid @enderror" name="univercity_id" value="{{$student->univercity_id}}" placeholder="Enter Univercity ID">
                                <div class="help-block with-errors" ></div>
                                @error('univercity_id')
                                    <span class="invalid-univercity_id" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>                            
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="admission_no">Admission No<span class="text-red">*</span></label>
                                <input id="admission_no" type="text" class="form-control @error('univercity_id') is-invalid @enderror" name="admission_no" value="{{$student->admission_no}}" placeholder="Enter Admission No">
                                <div class="help-block with-errors" ></div>
                                @error('admission_no')
                                    <span class="invalid-admission_no" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>                            
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="branch">Branch<span class="text-red">*</span></label>
                            <?php $student_branch = DB::table('students')->where('id',$student->id)->first() ; ?>

                                <select class="selectpicker form-control" name="branch">
                                    <option>Choose Your Branch</option>
                                    
                                    @foreach($branch as $branches)
                                        <option value="{{$branches->id}}" {{  ($branches->id == $student_branch->branch ? ' selected' : '') }}>{{$branches->branch_name}}</option>
                                    @endforeach
                                  
                                </select>
                                <div class="help-block with-errors" ></div>
                                @error('branch')
                                    <span class="invalid-branch" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>                            
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="semester_id">Semester<span class="text-red">*</span></label>

                                <select class="selectpicker form-control" name="semester_id">
                                    <option>Choose Your Semester</option>
                                    @foreach($semester as $semesters)
                                        <option value="{{$semesters->id}}" {{  ($semesters->id == $student_branch->semester_id ? ' selected' : '') }}>{{$semesters->semester_name}}</option>
                                    @endforeach
                                  
                                </select>
                                <div class="help-block with-errors" ></div>
                                @error('semester_id')
                                    <span class="invalid-semester_id" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>                            
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="batch">Batch<span class="text-red">*</span></label>
                                <select class="selectpicker form-control" name="batch_id">
                                    <option>Choose Your Batch</option>
                                    @foreach($batch as $batches)
                                        <option value="{{$batches->id}}" {{  ($batches->id == $student_branch->batch_id ? ' selected' : '') }}>{{$batches->batch_name}}</option>
                                    @endforeach
                                  
                                </select>
                                <div class="help-block with-errors" ></div>
                                @error('batch_id')
                                    <span class="invalid-batch_id" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>                            
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="year_of_joining">Year of joining<span class="text-red">*</span></label>
                                <input id="year_of_joining" type="date" class="form-control @error('univercity_id') is-invalid @enderror" name="year_of_joining" value="{{$student->year_of_joining}}">
                                <div class="help-block with-errors" ></div>
                                @error('year_of_joining')
                                    <span class="invalid-year_of_joining" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>                            
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="section">Section</label>
                                <input id="section" type="text" class="form-control @error('section') is-invalid @enderror" name="section" value="{{$student->section}}" placeholder="Enter Section Name">
                                <div class="help-block with-errors" ></div>
                                @error('section')
                                    <span class="invalid-section" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>                            
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="subject">Status<span class="text-red">*</span></label>
                            <select class="form-control" name="statusStu"  required>
                            <option>Choose Department</option>
                            <option value="Active" {{  ($user_status_id == "Active" ? ' selected' : '') }}>Active</option>
                            <option value="Deactive" {{  ($user_status_id == "Deactive" ? ' selected' : '') }} >Deactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" id="sp-submit" class="btn btn-primary2">Update</button>
                        </div>
                    </div> 
                </div>
            </form>
        </div>

                
            </div>
    </div>
    
@push('datatable-khushbu')
    <script>
    $(".toggle-password").click(function() {
    
      $(this).toggleClass("fa-eye fa-eye-slash");
      var input = $($(this).attr("toggle"));
      if (input.attr("type") == "password") {
        input.attr("type", "text");
      } else {
        input.attr("type", "password");
      }
    });
    </script>
    <script>
        
    // Generate a password string
    function on_gnr(){
            function randString(id){
      var dataSet = $(id).attr('data-character-set').split(',');  
      var possible = '';
      if($.inArray('a-z', dataSet) >= 0){
        possible += 'abcdefghijklmnopqrstuvwxyz';
      }
      if($.inArray('A-Z', dataSet) >= 0){
        possible += 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      }
      if($.inArray('0-9', dataSet) >= 0){
        possible += '0123456789';
      }
      if($.inArray('#', dataSet) >= 0){
        possible += '![]{}()%&*$#^<>~@|';
      }
      var text = '';
      for(var i=0; i < $(id).attr('data-size'); i++) {
        text += possible.charAt(Math.floor(Math.random() * possible.length));
      }
      return text;
    }
    
    // Create a new password on page load
    $('input[rel="gp"]').each(function(){
      $(this).val(randString($(this)));
    });
    
    // Create a new password
    $(".getNewPass").click(function(){
      var field = $(this).closest('div').find('input[rel="gp"]');
      field.val(randString(field));
    });
    
    // Auto Select Pass On Focus
    $('input[rel="gp"]').on("click", function () {
       $(this).select();
    });



    }

    </script>
@endpush

@endsection

