<style>
    .main-menu ul li a{
        font-size: 14px !important;
    }
</style>
<header>
         <div id="header-sticky" class="header__area header__padding-2 header__shadow">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-2 col-sm-4 col-6">
                     <div class="header__left d-flex">
                        <div class="logo">
                           <a href="{{url ('/teacher')}}">
                              <img src="{{asset('assets/img/student-profile.png')}}" alt="logo" id="student-profile" style="width:80px;">
                           </a>
                        </div>
                        
                     </div>
                  </div>
                   <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-10 col-sm-8 col-6">
                     <div class="header__right d-flex justify-content-end align-items-center">
                        <div class="main-menu main-menu-2">
                           <nav id="mobile-menu">
                              <ul>
                                  <li><a href="{{url ('/teacher')}}">Home</a></li>
                                  
                                <li class="has-dropdown">
                                    <a href="#">Test</a>
                                    <ul class="submenu">
                                       <li><a href="{{url ('/View_test')}}">View</a></li>
                                       <li><a href="{{url ('/assign_test')}}">Assign</a></li>
                                       <li><a href="{{url ('/create_test')}}">Create</a></li>
                                    </ul>
                                 </li>
                                <li class="has-dropdown">
                                    <a href="#">MCQ</a>
                                    <ul class="submenu">
                                       <li><a href="{{url ('/View_MCQ')}}">View</a></li>
                                       <li><a href="{{url ('/MK_MCQ_test')}}">Create</a></li>
                                       <li><a href="{{url ('/MK_MCQ_bulk_img')}}">Image Upload</a></li>
                                    </ul>
                                 </li>
								 
								  <li class="has-dropdown">
                                    <a href="#">Short Answer</a>
                                    <ul class="submenu">
                                       <li><a href="{{url ('/short_view')}}">View</a></li>
                                       <li><a href="{{url ('/MK-short-que')}}">Create</a></li>
                                       <li><a href="{{url ('/MK-short-que_img')}}">Image Upload</a></li>
									            {{-- <li><a href="#">Scan</a></li>
                                       <li><a href="#">Evaloution</a></li> --}}
                                    </ul>
                                 </li>
								 
								  <li class="has-dropdown">
                                    <a href="#">Osplist</a>
                                    <ul class="submenu">
                                       <li><a href="{{url ('/opslist_view')}}">View</a></li>
                                       {{-- <li><a href="{{url ('/opslist_assign')}}">Assign</a></li> --}}
                                       <li><a href="{{url ('/MK_create_opslist')}}">Create</a></li>
                                    </ul>
                                 </li>
								 
								 
								<li class="has-dropdown" style="margin-right:20px">
                                    <a href="#">My Session</a>
                                    <ul class="submenu">
                                       <li><a href="{{url ('/assign_session')}}">Test</a></li>
                                       <li><a href="{{url ('/test_report_session')}}">Reports</a></li>
                                     
                                    </ul>
                                 </li>
								
                                 <?php
                                 use App\Models\TeacherNotify;
                                 $new_teachers = App\Models\TeacherNotify::where('user_id','=',Auth::user()->teacher_id)->where('status','=','false')->get();
                                 $notification = count($new_teachers) ;  
                                 $index = 1;           
                                
                                ?>
                                 <li class="has-dropdown" id="notification">
                                    <a >
                                       <i class="far fa-bell fa-lg"></i>
                                       <span >{{$notification}}</span>
                                    </a>
                                    <ul class="submenu">
                                       <table class="table">
                                          <thead>
                                            <tr>
                                              <th scope="col">S.no</th>
                                              <th scope="col">Title</th>
                                              <th scope="col">Message</th>
                                              <th scope="col">Image</th>
                                            </tr>
                                          </thead>
                                          <tbody>                                             
                                             @foreach($new_teachers as $new_teacher)
                                            <tr>
                                              <td><div class="m-2">{{$index}}</div></td>
                                              <td><div class="m-2">{{$new_teacher->title}}</div></td>
                                              <td><div class="m-2">{{$new_teacher->message}}</div></td>
                                              <td>  <div class="m-2"><img src="{{ URL::asset($new_teacher->image) }}"  alt="logo" width="40px" height="40px"></div></td>
                                            </tr>
                                            @php $index++ @endphp
                                            @endforeach
                                          </tbody>
                                        </table>
                                    
                                    </ul>
                                  </li>
                             
                                
                              </ul>
                           </nav>
                        </div>

                        <div class="header__btn header__btn-2 ml-50 d-none d-sm-block">
                           <a href="{{ url('web-logout') }}" class="e-btn"><i class="fa fa-sign-in" aria-hidden="true"></i> LogOut</a>
                        </div>
                        <div class="sidebar__menu d-xl-none">
                           <div class="sidebar-toggle-btn ml-30" id="sidebar-toggle">
                               <span class="line"></span>
                               <span class="line"></span>
                               <span class="line"></span>
                           </div>
                       </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
         <script>
           $(document).ready(function() {
            var teacher_ids = {{Auth::user()->teacher_id}};
               $('#notification').hover(function(){
                  let data = {
                '_token': '{{ csrf_token() }}',
                'student_ids':teacher_ids
            }
            // console.log(data);
            $.ajax({
               url:"{{ route('activeteacherNotify') }}",
                type: "put",
                data: data,
                success: function(result) {
                  console.log(result.success);
                }
            });
                  

               });
            });
         </script>
      </header>