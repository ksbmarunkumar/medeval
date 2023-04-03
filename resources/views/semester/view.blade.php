@extends('layouts.app')
@section('title', 'Teacher')
@section('content')

<style>
    .switch {
      position: relative;
      display: inline-block;
      width: 90px;
      height: 34px;
    }

    .switch input {display:none;}

    .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #ca2222;
      -webkit-transition: .4s;
      transition: .4s;
    }

    .slider:before {
      position: absolute;
      content: "";
      height: 26px;
      width: 26px;
      left: 4px;
      bottom: 4px;
      background-color: white;
      -webkit-transition: .4s;
      transition: .4s;
    }

    input:checked + .slider {
      background-color: #2ab934;
    }

    input:focus + .slider {
      box-shadow: 0 0 1px #2196F3;
    }

    input:checked + .slider:before {
      -webkit-transform: translateX(55px);
      -ms-transform: translateX(55px);
      transform: translateX(55px);
    }
    .on
    {
      display: none;
    }

    .on, .off
    {
      color: white;
      position: absolute;
      transform: translate(-50%,-50%);
      top: 50%;
      left: 50%;
      font-size: 10px;
      font-family: Verdana, sans-serif;
    }

    input:checked+ .slider .on
    {display: block;}

    input:checked + .slider .off
    {display: none;}
    .slider.round {
      border-radius: 34px;
    }

    .slider.round:before {
      border-radius: 50%;}
      table.dataTable thead th, table.dataTable thead td {
    padding: 10px 18px;
    border-bottom: 1px solid #fff;
}
table.dataTable.no-footer {
    border-bottom: 1px solid #dee2e6;
}
table.dataTable.no-footer {
    border-bottom: 1px solid #e6e9ed !important;
}
span.teax-vr-dashbord {
    font-size: 17px;
    position: relative;
    top: 11px;
    left: 29px;
}
h3.rv-list-users {
    position: relative;
    /* right: 18px; */
    margin-left: 16px;
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
.card
{
    -webkit-box-shadow: -1px 2px 37px -3px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 2px 37px -3px rgba(0,0,0,0.75);
box-shadow: -1px 2px 37px -3px rgba(0,0,0,0.75);
}
.dataTables_wrapper .dataTables_filter input {
    
    padding: 2px !important;
   
}
.dataTables_wrapper .dataTables_filter input:focus {
    
   outline:none;
   
}
.dataTables_wrapper .dataTables_paginate .paginate_button.current, .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
    color: #fff !important;
    border: 1px solid #979797;
    padding: 2px;
    background-color: #004ba5 !important;
    border-radius: 5px;
    background: linear-gradient(to bottom, #004ba5 0%, #004ba5 100%);
}
</style>

<div class="content-wrapper">
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-12">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h3 class=" rv-list-users">Semester List</h3>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div>
        @include('layouts.message')
        <div class="col-md-12">
            <div class="card p-3 m-3-rv">
                <div class="card-header">
                    <a href="{{url('semester/create')}}" class="btn btn-primary2">Add +</a>
                   </div>
                <div class="card-body">
                   <table id="example" class="table table-bordered table-hover dataTable no-footer" >
                        <thead>
                            <tr>
                                <th>Semester</th> 
                                <th>Action</th> 
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($semester as $semesters)
                            <tr>
                                <td>{{$semesters->semester_name}}</td>
                                <td>
                                    <a href="semester/edit/{{$semesters->id}}"><i class="fa fa-edit text-green"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="semester/delete/{{$semesters->id}}" class="delete-confirm"><i class="fa fa-trash text-red"></i></a>
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@push('datatable-khushbu')
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $('.delete-confirm').on('click', function (event) {
        event.preventDefault();
        const url = $(this).attr('href');
            swal({
                title: 'Are you sure?',
                text: 'This record  will be deleted!',
                icon: 'warning',
                buttons: ["Cancel", "Yes!"],
            }).then(function(value) {
            if (value) {
                window.location.href = url;
            }
            });
        });
    </script>
  
@endpush

@endsection
