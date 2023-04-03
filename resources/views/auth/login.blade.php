<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<style>
.img-circle
{
    -webkit-box-shadow: -1px 2px 37px -3px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 2px 37px -3px rgba(0,0,0,0.75);
box-shadow: -1px 2px 37px -3px rgba(0,0,0,0.75);
border-radius:100px;
}
    .login_form
    {
       
    }
    .header-login
    {
        text-align:center;
        background:#1071f4;
    }
    .btn-color
    {
        background-color:#defffc;
    }
    input[type=email] {
    
    border: none;

    border-top: 0px;
    border-radius: 3px;
    font-weight: bold;
    outline: 0;
    margin-bottom: 20px;
    padding-left: 0px;

    padding-left:10px;
}
input[type=password] {
    
    border: none;
   
    border-top: 0px;
    border-radius: 3px;
    font-weight: bold;
    outline: 0;
    margin-bottom: 20px;
    padding-left: 0px;
    
    padding-left:10px;
}
input:focus {
    outline: none;
    box-shadow: 0 0 0;
}

.btn-primary1
{
    background-color:#defffc;
     -webkit-box-shadow: -1px 2px 37px -3px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 2px 37px -3px rgba(0,0,0,0.75);
box-shadow: -1px 2px 37px -3px rgba(0,0,0,0.75);
}
.btn-primary1:hover
{
    background-color:#defffc;
}
@media (min-width:1020px) and (max-width:1600px)
{
    .card
    {
         margin: 30px;
         margin-left:150px;
         margin-right:150px;
         -webkit-box-shadow: -1px 2px 37px -3px rgba(0,0,0,0.75);
        -moz-box-shadow: -1px 2px 37px -3px rgba(0,0,0,0.75);
        box-shadow: -1px 2px 37px -3px rgba(0,0,0,0.75);
    }
}
.form-check .form-check-input {
    float: none;
    margin-left: -1.5em;
}

.field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}

.container{
  padding-top:50px;
  margin: auto;
}
.btn-forget
{
    text-decoration:none;
}
.btn-forget:hover
{
    text-decoration:underline;
}

</style>
<title>MedEval Admin</title>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 login_form">
            <div class="card">
                
                <div class="card-header header-login">
                    <img src="{{asset('dist/img/logo_m.png')}}" alt=" Logo" class="brand-image img-circle elevation-3" style="opacity: .8" width="180px" height="180px">
                    

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" >
                        @csrf
                            <div class="col-md-12">
                                <label for="email" class="col-md-12 col-form-label text-start text-white">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
 
                            <div class="col-md-12">
                                <label for="password" class="col-md-12 col-form-label text-start text-white">{{ __('Password') }}</label>
                                <input id="password-field" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                <div class="help-block with-errors" ></div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="form-check text-start">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label text-start text-white" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                     @if (Route::has('password.request'))
                                    <a class="btn-forget text-white" style="float:right;" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0" style="    justify-content: center;">
                            <div class="col-md-8 ">
                                <button type="submit" class="btn btn-light w-50">
                                    {{ __('Login') }}
                                </button>

                               
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

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
@endpush