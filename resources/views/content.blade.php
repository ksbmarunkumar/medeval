<style>
    .content-header h1 {
    font-size: 40px;
    margin: 0;
}
.content-wrapper {
  
    background-image:url("{{asset('dist/img/logo_m.png')}}");
    background-repeat:no-repeat;
    background-size: 100% 100%;
    background-blend-mode: soft-light;
}
.wrapper .content-wrapper {
    min-height: calc(100vh - calc(3.5rem + 1px) - calc(3.5rem + 1px)) !important;
}
.content-wrapper
{
    height:auto !important;
}
</style>
@extends('layouts.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    
    <!-- Main content -->
    @if(Auth::user()->user_type == 'SuperAdmin')
        <section class="content">
          <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
              <div class="col-lg-6 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">
                        <?php $teachers = DB::table('teachers')->where('deleted_at',NULL)->count(); ?>
                        <?php $students = DB::table('students')->where('deleted_at',NULL)->count(); ?>
                        <?php $branches = DB::table('branches')->where('deleted_at',NULL)->count(); ?>
                        <?php $faq = DB::table('faqs')->where('deleted_at',NULL)->count(); ?>
    
                    <h3>{{$teachers}}</h3>
    
                    <p>Total Teachers</p>
                  </div>
                  <div class="icon">
                    <i class="fas fa-box"></i>
                  </div>
                  <a href="{{url('teachers')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-6 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                  <div class="inner">
                    <h3>{{$students}}</h3>
    
                    <p>Total Students</p>
                  </div>
                  <div class="icon">
                    <i class="fas fa-percent"></i>
                  </div>
                  <a href="{{url('students')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-6 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                  <div class="inner">
                    <h3>{{$branches}}</h3>
    
                    <p>Total Branches</p>
                  </div>
                  <div class="icon">
                    <i class="fas fa-users"></i>
                  </div>
                  <a href="{{url('branchs')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-6 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                  <div class="inner">
                    <h3>{{$faq}}</h3>
    
                    <p>No of Faq</p></p>
                  </div>
                  <div class="icon">
                    <i class="far fa-eye"></i>
                  </div>
                  <a href="{{url('faqs')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              
            </div>
            </div>
        </section>
    @endif
</div>
  
  <!-- /.content-wrapper -->
@endsection