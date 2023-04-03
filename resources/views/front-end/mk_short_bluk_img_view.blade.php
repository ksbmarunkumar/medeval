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
                            alt="">Short Question Images</span></h2>
                      
                <form action="{{ route('bulk_img_short_upload') }}" method="post" enctype="multipart/form-data"
                    id="form_area">
                    @csrf
                    <label class="form-label" for="formControlDefault">Image Select</label>
                    <input type="file" name="bulk_img_short[]" id="bulk_img_short" multiple>
                    <button type="submit" class="btn btn-primary e-btn"  value="Submit">Image Upload</button>
                </form>
            </div>
             
          
            <table id="img_page" class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Image Name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Copy Path</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($bulk_img as $bulk_imgs )
                  <tr>
                    <th class=""  ><h5>{{$bulk_imgs->id}}</h5></th>
                    <td class="" ><h5>{{$bulk_imgs->image_path}}</h5></td>
                    <td class="" ><img src="{{asset($bulk_imgs->image_path)}}" alt="" height="200" width="200"></td>
                    <td class="" > <input type="text" value="{{$bulk_imgs->image_path}}" id="Path_img{{$bulk_imgs->id}}" style="display:none;">  <button onclick="path_copy({{$bulk_imgs->id}})"><i class="fa fa-clone"> Copy Path</i></button></td></tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          
        </div>
    </section>






    <!-- footer area start -->
    @include('front-end.footer_teacher')
    <!-- footer area end -->
    <!-- JS here -->
    @include('front-end.scripts_teacher')
    
  
  

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"
        integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"
        integrity="sha512-6S5LYNn3ZJCIm0f9L6BCerqFlQ4f5MwNKq+EthDXabtaJvg3TuFLhpno9pcm+5Ynm6jdA9xfpQoMz2fcjVMk9g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{ asset('assets/js/validation.js') }}"></script>

   
    
    <script>
    function path_copy(id) {
      var id_path = 'Path_img'.concat(id);
      
      // Get the text field
      var copyText = document.getElementById(id_path);
     
      // Select the text field
      copyText.select();
      copyText.setSelectionRange(0, 99999); // For mobile devices
    
      // Copy the text inside the text field
      navigator.clipboard.writeText(copyText.value);
      
      // Alert the copied text
      alert("Copied the image name: " + copyText.value);
    }
    </script>
    <!--DataTable Link-->
 <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
 <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
 <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
 <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
 <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
 
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" />

<script>
    $(document).ready( function () {
$('#img_page').DataTable();
      } );
</script>

</body>

</html>
