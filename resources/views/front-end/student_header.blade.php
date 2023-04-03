<header>
         <div id="header-sticky" class="header__area header__transparent header__padding-2">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-2 col-sm-4 col-6">
                     <div class="header__left d-flex">
                        <div class="logo">
                           <a href="{{url('/StudentLogin')}}">
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
                                <li><a href="{{url('/profile_student')}}">My profile</a></li>
							          	<li><a href="{{url('/test_report_student')}}">Test report</a></li>
                                 <li><a href="{{url('/new_test_student')}}">New test</a></li>

                                 <?php
                                 use App\Models\StudentNotify;
                                 $new_students = App\Models\StudentNotify::where('student_id','=',Auth::user()->student_id)->where('status','=','false')->get();
                                 $notification = count($new_students) ;  
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
                                             @foreach($new_students as $new_student)
                                            <tr>
                                              <td><div class="m-2">{{$index}}</div></td>
                                              <td><div class="m-2">{{$new_student->title}}</div></td>
                                              <td><div class="m-2">{{$new_student->message}}</div></td>
                                              <td>  <div class="m-2"><img src="{{ URL::asset($new_student->image) }}"  alt="logo" width="40px" height="40px"></div></td>
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
                           <a href="{{url('web-logout')}}" class="e-btn"><i class="fa fa-sign-in" aria-hidden="true"></i> LogOut</a>
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
            var student_ids = {{Auth::user()->student_id}};
               $('#notification').hover(function(){
                  let data = {
                '_token': '{{ csrf_token() }}',
                'student_ids':student_ids
            }
            // console.log(data);
            $.ajax({
               url:"{{ route('activeStudentNotify') }}",
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