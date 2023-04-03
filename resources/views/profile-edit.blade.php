@extends('layouts.app')
@section('title', 'Teacher')
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
    width: 80%;
    margin: 30px 15px;
    box-sizing: border-box;
    border-radius: 0px 0px 0px 0px;
}
.formBox input {
    width: 100%;
    margin-bottom: 20px;
    border-radius: 0px 0px 0px 0px;
}
/*.formBox input[type="text"] {*/
/*    border: none;*/
/*    border-bottom: 1px solid #aaa;*/
/*    outline: none;*/
/*    height: 30px;*/
/*    border-radius: 0px 0px 0px 0px;*/
/*}*/
/*.formBox input[type="text"]:focus {*/
/*    border-bottom: 1px solid #505fc7;*/
/*    box-shadow: none;*/
/*    border-radius: 0px 0px 0px 0px;*/
/*}*/

/*.formBox label {*/
/*    margin-top: 20px;*/
/*    margin-bottom: 20px;*/
/*}*/
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
    background-color:#505fc7;
    color: #fff;
    font-size: 25px;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 4px;
}
.form-select:focus {
    border: 1px solid #dc3545 !important;
    box-shadow: none !important;
    color: #dc3545;
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
                        <h4>Edit Profile</h4>
                    </div>
                     <form class="forms-sample" method="POST" action="{{ url('AdminProfie/update') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$user->id}}">

                    <div class="row">
                       
                        <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="formBox">
                        
                            <div class="form-group">
                            <input class="form-control @error('name') is-invalid @enderror" type="text"  name="name" value="{{$user->name}}" placeholder="Enter Name">
                            <div class="help-block with-errors" ></div>

                                @error('name')
                                    <span class="invalid-name" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                            <input class="form-control @error('email') is-invalid @enderror" type="text" name="email" value="{{$user->email}}" placeholder="Email">
                             <div class="help-block with-errors" ></div>

                                @error('email')
                                    <span class="invalid-email" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
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
                            <div class="form-group">
                                <input class="form-control" type="text"name="password_confirmation" placeholder="Retype password ">
                                @error('password_confirmation')
                                    <span class="invalid-password_confirmation" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-danger rv-submit">Update</button>

                    </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="formBox">

                            <div class="holder border border-sm shadow shadow-lg mt-5 ">
                            @if($user->image)
                                <img id="imgPreview" src="{{asset('admin_images')}}/{{$user->image}}" alt="pic"style="height:150px; width:150px;" class="img-fluid" />
                            @else
                                <img id="imgPreview" src="{{asset('admin_images/dummy.png')}}" alt="pic"style="height:150px; width:150px;" class="img-fluid" />
                            @endif
                      </div>
                            <label>Profile Pic</label>
                            <input type="file" name="image"
                            id="photo" class="form-control" />
                            
                    </div>
                        </div>
                    </div>
                </form>
            </div>
          
            </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
        $(document).ready(()=>{
            $('#photo').change(function(){
                const file = this.files[0];
                console.log(file);
                if (file){
                let reader = new FileReader();
                reader.onload = function(event){
                    console.log(event.target.result);
                    $('#imgPreview').css({'height':'150px','width':'150px'});
                    $('#imgPreview').attr('src', event.target.result);
                }
                reader.readAsDataURL(file);
                }
        
            });
        });

    </script>
        
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