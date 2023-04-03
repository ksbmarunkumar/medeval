
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
    border-bottom: 1px solid #505fc7;
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
    background-color: #505fc7;
    width: 300px;
    height: 150px;
    border: 1px solid #eee;
    box-shadow: 0 15px 30px #505fc7;
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
.form-select:focus {
    border: 1px solid #004ba5 !important;
    box-shadow: none !important;
    color: #004ba5;
}
.form-select option:hover {
    background-color: #505fc7;
}
button.btn.btn-danger.rv-submit {
    background-color: #505fc7!important;
    border-color: #505fc7 !important;
}
.btn-custom {
    width: 126px;
    height: 36px;
    background-color: #505fc7;
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
.form-control:focus
{
    border: 1px solid #004ba5 !important;
}
</style>

<div class="content-wrapper">

    <div class="container-fluid container_rv">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="heading">
                <i class="icon fa fa-user"></i>
                <h4>Send Notification</h4>
            </div>
            <form class="forms-sample" method="POST" action="{{ route('create-studentNotify') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="title">Title<span class="text-red">*</span></label>
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="" placeholder="Enter title">
                                <div class="help-block with-errors" ></div>
                                @error('title')
                                    <span class="invalid-title" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>                            
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="message">Message<span class="text-red">*</span></label>
                                <input id="message" type="text" class="form-control @error('message') is-invalid @enderror" name="message" value="" placeholder="Enter Message">
                                <div class="help-block with-errors" ></div>
                                @error('message')
                                    <span class="invalid-message" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>                            
                    </div>
                    <div class="col-sm-6">
                       
                        <span class="btn btn-primary" id="student_toggle">
                            Send To Student
                        </span>
                        <span class="btn btn-primary" id="batche_toggle">
                            Send To Batches
                        </span>
                        <input type="hidden" id="ref_mult_drop" name="ref_mult_drop">
                        <div class="form-group" id="student_show">
                            <label for="student_id">Send To Student<span class="text-red">*</span></label>
                                <select class="selectpicker form-control" multiple="multiple" name="student_id[]">
                                    <option disabled >Select Option</option>
                                    @foreach($student as $students)
                                        <option value="{{$students->id}}">{{$students->name}}</option>
                                    @endforeach
                                  
                                </select>
                                <div class="help-block with-errors" ></div>
                                @error('student_id')
                                    <span class="invalid-student_id" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>       
                        <div class="form-group" id="batche_show">
                            <label for="batche_id">Send To Batches<span class="text-red">*</span></label>
                            <select multiple  class=" form-control"  name="batche_id[]">
                                <option disabled >Select Option</option>
                              <?php 
                                use App\Models\Batch;
                                use App\Models\Student;
                                $batches = Batch::where('deleted_at',NULL)->get();
                                $batches_obj_datas = json_decode($batches);
                                foreach($batches_obj_datas as $batches_array_data){
                               
                                $stu = Student::where('batch_id', $batches_array_data->id)->get();
                                $stu_array_datas = json_decode($stu);
                                $stuCount = $stu->count();

                                ?>
                                        <option value="{{$batches_array_data->id}}">{{$batches_array_data->batch_name." - Student Count :".$stuCount}}</option>
                                      <?php
                                }
                                 ?>
                                  </select>
                                <div class="help-block with-errors" ></div>
                                @error('student_id')
                                    <span class="invalid-student_id" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>                       
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="image">Image<span class="text-red">*</span></label>
                                <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="">
                                <div class="help-block with-errors" ></div>
                                @error('image')
                                    <span class="invalid-image" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>                            
                    </div>
                    
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" id="sp-submit" class="btn btn-primary2">Submit</button>
                        </div>
                    </div> 
                </div>
            </form>
        </div>     
            </div>
    </div>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js"
    integrity="sha512-CX7sDOp7UTAq+i1FYIlf9Uo27x4os+kGeoT7rgwvY+4dmjqV0IuE/Bl5hVsjnQPQiTOhAX1O2r2j5bjsFBvv/A=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        #batche_show{
            display: none;
        }
        #student_show{
            display: none;
        }
    </style>
    
    <script>
        $(document).ready(function(){
    $("#batche_toggle").click(function(){
        $("#batche_show").show();
        $("#ref_mult_drop").val('batch_drop')
        $("#student_show").hide();
   
    });      
    $("#student_toggle").click(function(){
        $("#batche_show").hide();
        $("#ref_mult_drop").val('student_drop');
        $("#student_show").show();
    });      
});
      
    </script>

@endsection

