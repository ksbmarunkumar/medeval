<style>
    .navbar-white {
    background-color: #caf0f8;
    color: #1f2d3d;
}
i.far.fa-comments:hover {
    font-size: 18pt;
}
i.far.fa-bell:hover
{
    font-size:18pt;
}
.navbar-search-block .input-group {
    width: 75%;
    margin-top: 10px;
}
</style>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <ul class="navbar-nav">
<!--         <li class="nav-item">-->
<!--<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>-->
<!--</li>-->
<!--         <li class="nav-item d-none d-sm-inline-block">-->
<!--<a href="index3.html" class="nav-link">Home</a>-->
<!--</li>-->
<!--<li class="nav-item d-none d-sm-inline-block">-->
<!--<a href="#" class="nav-link">Contact</a>-->
<!--</li>-->
 <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="fas fa-search"></i>
            </a>
            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>

                        </div>
                    </div>
                </form>
            </div>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">

       
       
        <!--<li class="nav-item dropdown">-->
        <!--    <a class="nav-link" data-toggle="dropdown" href="#">-->
        <!--        <i class="far fa-comments fa-lg"></i>-->
        <!--        <span class="badge badge-danger navbar-badge">3</span>-->
        <!--    </a>-->
        <!--    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">-->
        <!--        <a href="#" class="dropdown-item">-->



        <!--        </a>-->
        <!--        <div class="dropdown-divider"></div>-->
        <!--        <a href="#" class="dropdown-item">-->

        <!--            <div class="media">-->
        <!--                <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">-->
        <!--                <div class="media-body">-->
        <!--                    <h3 class="dropdown-item-title">-->
        <!--                        John Pierce-->
        <!--                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>-->
        <!--                    </h3>-->
        <!--                    <p class="text-sm">I got your message bro</p>-->
        <!--                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>-->
        <!--                </div>-->
        <!--            </div>-->

        <!--        </a>-->
        <!--        <div class="dropdown-divider"></div>-->
        <!--        <a href="#" class="dropdown-item">-->

        <!--            <div class="media">-->
        <!--                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">-->
        <!--                <div class="media-body">-->
        <!--                    <h3 class="dropdown-item-title">-->
        <!--                        Nora Silvester-->
        <!--                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>-->
        <!--                    </h3>-->
        <!--                    <p class="text-sm">The subject goes here</p>-->
        <!--                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>-->
        <!--                </div>-->
        <!--            </div>-->

        <!--        </a>-->
        <!--        <div class="dropdown-divider"></div>-->
        <!--        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>-->
        <!--    </div>-->
        <!--</li>-->
                <?php
                    $new_student = App\Models\Student::where('deleted_at',NULL)->whereDate('created_at', '>=', date('Y-m-d H:i:s',strtotime('-7 days')) )->count(); 
                    $new_teacher = App\Models\Teacher::where('deleted_at',NULL)->whereDate('created_at', '>=', date('Y-m-d H:i:s',strtotime('-7 days')) )->count(); 
                    $new_faq = App\Models\Faq::where('deleted_at',NULL)->whereDate('created_at', '>=', date('Y-m-d H:i:s',strtotime('-7 days')) )->count(); 
                   
                    $notification = (number_format($new_student) + number_format($new_teacher) + number_format($new_faq));

                   ?>
        {{-- <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell fa-lg"></i>
                <span class="badge badge-warning navbar-badge">{{$notification}}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-header">{{$notification}} Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> {{$new_student}} new student
                    <!--<span class="float-right text-muted text-sm">3 mins</span>-->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i>{{$new_teacher}} new teacher
                    <!--<span class="float-right text-muted text-sm">12 hours</span>-->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> {{$new_faq}} new faqs
                    <!--<span class="float-right text-muted text-sm">2 days</span>-->
                </a>
                <div class="dropdown-divider"></div>
                <!--<form>-->
                <!--    <a href="#" class="dropdown-item dropdown-footer" data-toggle="modal" data-target="#modalContactForm_Q">Send Notification</a>-->
                <!--</form>-->
            </div>
        </li> --}}
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
         <a href="{{url('logout')}}" class="nav-link btn btn-danger text-white">
            <p>Logout&nbsp;&nbsp;&nbsp;<i class="fas fa-sign-out-alt"></i></p>
            
        </a>
        </li>

    </ul>
</nav>


@push('datatable-khushbu')
    <script type="text/javascript">
    jQuery(document).ready(function() {
            $('#example').DataTable( {
            lengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
            language: {
              processing: '<i class="ace-icon fa fa-spinner fa-spin orange bigger-500" style="font-size:60px;margin-top:50px;"></i>'
            },
            scroller: {
                loadingIndicator: false
            },
            pagingType: "full_numbers",
            dom: "<'row'<'col-sm-2'l><'col-sm-7 text-center'B><'col-sm-3'f>>tipr",

            buttons: [
                {
                    extend: 'copy',
                    className: 'btn-sm btn-info',
                    title: 'Restaurants',
                    header: false,
                    footer: true,
                    exportOptions: {
                        // columns: ':visible'
                    }
                },
                {
                    extend: 'csv',
                    className: 'btn-sm btn-success',
                    title: 'Restaurants',
                    header: false,
                    footer: true,
                    exportOptions: {
                        // columns: ':visible'
                    }
                },
                {
                    extend: 'excel',
                    className: 'btn-sm btn-danger',
                    title: 'Restaurants',
                    header: false,
                    footer: true,
                    exportOptions: {
                        // columns: ':visible',
                    }
                },
                {
                    extend: 'pdf',
                    className: 'btn-sm btn-primary',
                    title: 'Restaurants',
                    pageSize: 'A2',
                    header: false,
                    footer: true,
                    exportOptions: {
                        // columns: ':visible'
                    }
                },
                {
                    extend: 'print',
                    className: 'btn-sm btn-dark',
                    title: 'Restaurants',
                    pageSize: 'A2',
                    header: true,
                    footer: false,
                    orientation: 'landscape',
                    exportOptions: {
                        // columns: ':visible',
                        stripHtml: false
                    }
                }
            ],

            });
    } );

    </script>
  

  
@endpush