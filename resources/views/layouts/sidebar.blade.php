<style>
    .sidebar-dark-primary {
        background-color: #004ba5 !important;
    }

    .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active,
    .sidebar-light-primary .nav-sidebar>.nav-item>.nav-link.active {
        background-color: #defffc !important;
        color: #000;
    }

    .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active,
    .sidebar-light-primary .nav-sidebar>.nav-item>.nav-link {
        color: #000;
    }

    .brand-link .brand-image {
        float: none;
        line-height: 3.8;
        margin-left: 0.8rem;
        margin-right: 0.5rem;
        margin-top: -3px;
        max-height: 40%;
        width: 185px;
         height: 30%; 
    }
    .sidebar
    {
        height:60% !important;
    }
    [class*=sidebar-dark-] .nav-sidebar>.nav-item.menu-open>.nav-link,
    [class*=sidebar-dark-] .nav-sidebar>.nav-item:hover>.nav-link,
    [class*=sidebar-dark-] .nav-sidebar>.nav-item>.nav-link:focus {
        background-color: #fff;
        color: #000 !important;
    }

    /*[class*=sidebar-dark-] .nav-sidebar>.nav-item>.nav-treeview {*/

    /*    background-color:#3f474e;*/
    /*}*/
    [class*=sidebar-dark] .brand-link {
        border-bottom: none;
    }

    [class*=sidebar-dark-] .nav-sidebar>.nav-item.menu-open>.nav-link,
    [class*=sidebar-dark-] .nav-sidebar>.nav-item:hover>.nav-link,
    [class*=sidebar-dark-] .nav-sidebar>.nav-item>.nav-link:focus {
        background-color: #fff;
        color: #000;
    }

    [class*=sidebar-dark-] .nav-sidebar>.nav-item>.nav-treeview {
        background-color: #3f474e;
        /* color: #fff; */
    }

    body:not(.layout-fixed) .main-sidebar {
        height: 100%;
        min-height: 100%;
        /*position: fixed !important;*/
        top: 0;
    }

    .nav-sidebar {
        padding-bottom:100px;
    }
    /* width */
    ::-webkit-scrollbar 
    {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  /*box-shadow: inset 0 0 5px grey; */
  border-radius: 10px;
  background:#dee2e6;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #adb5bd; 
  border-radius: 10px;
}

/* Handle on hover */
/*::-webkit-scrollbar-thumb:hover {*/
/*  background: #b30000; */
/*}*/
</style>

<aside class="main-sidebar sidebar-dark-primary flex-column">

    <a href="{{url('home')}}" class="brand-link">
        <img src="{{asset('dist/img/logo_m.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <!--<span class="brand-text font-weight text-dark">Medival</span>-->
    </a>
    @if(Auth::user()->user_type == 'SuperAdmin')
        <div class="sidebar overflow-auto">
                <?php $user = Auth::user() ; ?>

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('admin_images')}}/{{$user->image}}" class="img-circle elevation-2" style="height:45px; width:40px;" alt="User Image">
            </div>
            <div class="info">
                <a href="{{url('AdminProfieEdit')}}" class="d-block text-white">{{$user->name}}</a>
            </div>
        </div>

        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar  flex-column " data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item menu-open ">
                    <a href="{{url('home')}}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <!-- <i class="right fas fa-angle-left"></i> -->
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Student
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('student/create')}}" class="nav-link text-white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('students')}}" class="nav-link text-white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Students</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                        <i class="nav-icon fas fa-chalkboard-teacher"></i>
                        <p>
                            Teacher
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('teacher/create')}}" class="nav-link text-white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('teachers')}}" class="nav-link text-white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Teachers</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                        <i class="nav-icon fas fa-tasks"></i>
                        <p>
                            Task
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('Teacher-tasks')}}" class="nav-link text-white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Teachers Task</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('student-tasks')}}" class="nav-link text-white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Student Submit Task</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                        <i class="nav-icon fas fa-upload"></i>
                        <p>
                            Banner
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('banner/create')}}" class="nav-link text-white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Banner</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('banners')}}" class="nav-link text-white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Banners</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                        <i class="nav-icon fas fa-flag"></i>
                        <p>
                            Report
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('report/create')}}" class="nav-link text-white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Report</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('reports')}}" class="nav-link text-white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Reports</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                        <i class="nav-icon fas fa-code-branch"></i>
                        <p>
                            Branch
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('branch/create')}}" class="nav-link text-white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Branch</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('branchs')}}" class="nav-link text-white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Branchs</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                        <i class="nav-icon fas fa-code-branch"></i>
                        <p>
                            Department
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('department/create')}}" class="nav-link text-white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Department</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('departments')}}" class="nav-link text-white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Departments</p>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                        <i class="nav-icon fas fa-code-branch"></i>
                        <p>
                            FAQ
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('faq/create')}}" class="nav-link text-white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Faq</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('faqs')}}" class="nav-link text-white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Faqs</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                        <i class="nav-icon fas fa-code-branch"></i>
                        <p>Batch
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('batch/create')}}" class="nav-link text-white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Batch</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('batches')}}" class="nav-link text-white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Batches</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                        <i class="nav-icon fas fa-code-branch"></i>
                        <p>Semester
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('semester/create')}}" class="nav-link text-white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Semester</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('semesters')}}" class="nav-link text-white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Semesters</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                        <i class="nav-icon fas fa-code-branch"></i>
                        <p>Notification
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('notification/create')}}" class="nav-link text-white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Teacher Notification</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('notify')}}" class="nav-link text-white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Teacher Notify History</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('studentNotify/create')}}" class="nav-link text-white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Student Notification</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('studentNotifies')}}" class="nav-link text-white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Student Notify History</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                        <i class="nav-icon fas fa-code-branch"></i>
                        <p>Subject
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('subject/create')}}" class="nav-link text-white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Subject</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('subjects')}}" class="nav-link text-white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Subjects</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">
                        <i class="nav-icon fas fa-code-branch"></i>
                        <p>Reports 
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('adminViewReports')}}" class="nav-link text-white">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tests</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div>

            </div>
        </nav>

    </div>
    @endif
</aside>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js"
    integrity="sha512-CX7sDOp7UTAq+i1FYIlf9Uo27x4os+kGeoT7rgwvY+4dmjqV0IuE/Bl5hVsjnQPQiTOhAX1O2r2j5bjsFBvv/A=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function(){
        /** add active class and stay opened when selected */
        var url = window.location;
        // for sidebar menu entirely but not cover treeview
        $('ul.nav-sidebar a').filter(function () {
            return this.href == url;
        }).addClass('active');
        // for treeview
        $('ul.nav-treeview a').filter(function () {
            return this.href == url;
        }).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open').prev('a').addClass('active');
    });
</script>
