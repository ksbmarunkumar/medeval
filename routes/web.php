<?php

use App\Http\Controllers\AssignController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\StudentLoginController;
use App\Http\Controllers\TeacherLoginController;
use App\Http\Controllers\TeacherTaskController;
use App\Http\Controllers\StudentTaskController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\FilterQuestionController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\StudentBatchController;
use App\Http\Controllers\StudentTestController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TestController;
use App\http\Controllers\StafeInfoController;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/front', [FrontController::class, 'index'])->name('front');


Route::get('/', function () {
    return view('auth.login');
});

//Admin Profile Edit
Route::get('AdminProfieEdit', [UserController::class, 'admin_edit']);
Route::post('AdminProfie/update', [UserController::class, 'profile_update']);

Auth::routes();

//Front-End


Route::get('/FormLogin', [FrontController::class, 'FormLogin']);
Route::post('FormLogin', [FrontController::class, 'postLogin'])->name('FormLogin');

Route::group(['middleware' => ['web_auth']], function () {

    //teacher website start

    Route::get('/teacher', [FrontController::class, 'Teacher_Welcome'])->name('teacher');

    Route::get('/View_test', [FrontController::class, 'Teacher_view_test'])->name('list-test');
    Route::get('/assign_test', [FrontController::class, 'assign_test']);
    Route::post('/assign_test_check_box', [FrontController::class, 'assign_test_check_box'])->name('assign_test_check_box');
    Route::get('/create_test', [FrontController::class, 'create_test']);
    Route::post('/create_test', [FrontController::class, 'mk_test_store'])->name('mk-test-store');
    Route::get('/assign_session', [FrontController::class, 'assign_session']);
    Route::get('/test_report_session', [FrontController::class, 'test_report_session']);
    Route::get('/test_report_session_details', [FrontController::class, 'test_report_session_details']);

    Route::get('/View_MCQ', [FrontController::class, 'view_mcq']);
    Route::get('/MCQ_test', [FrontController::class, 'mcq_test']);

    Route::get('/MK_MCQ_test', [FrontController::class, 'mk_mcq_test']);
    Route::post('/MK_MCQ_test', [FrontController::class, 'mcq_test_store'])->name('mcq_test_store');
    // mcq question bulk image upload 
    Route::get('/MK_MCQ_bulk_img', [FrontController::class, 'mk_mcq_bluk_img']);
    Route::post('/MK_MCQ_bulk_img', [FrontController::class, 'bulk_img_mcq_upload'])->name('bulk_img_mcq_upload');
    //for excel
    Route::post('/MK_MCQ_test_excel', [FrontController::class, 'mcq_test_store_excel'])->name('mcq_test_store_excel');


    Route::get('/MK-short-que', [FrontController::class, 'short_que_create']);
    Route::post('/MK-short-que', [FrontController::class, 'short_que_store'])->name('short-que-store');

     // short question bulk image upload 
    Route::get('/MK-short-que_img', [FrontController::class, 'mk_short_bluk_img']);
    Route::post('/MK-short-que_img', [FrontController::class, 'bulk_img_short_upload'])->name('bulk_img_short_upload');
    //for excel
    Route::post('/MK-short-que-excel', [FrontController::class, 'short_que_store_excel'])->name('short-que-store-excel');



    Route::get('/MK_create_opslist', [FrontController::class, 'mk_create_osplist']);
    Route::post('/MK_create_opslist', [FrontController::class, 'mk_store_osplist'])->name('mk-store-osplist');
    
    //for excel
    
    Route::post('/MK_create_opslist_excel', [FrontController::class, 'mk_store_osplist_excel'])->name('mk-store-osplist-excel');
    
    
    
    

    Route::get('/assign_modules/{tId}', [FrontController::class, 'assign_modules']);
    Route::get('/assign_studnet/{tId}', [FrontController::class, 'assign_student']);
    Route::get('/assign_teacher/{tId}', [FrontController::class, 'assign_teacher']);
    Route::get('/student_view/{bId}', [FrontController::class, 'student_batch'])->name('get_students_of_batch');
    Route::get('/assign_Opslist', [FrontController::class, 'assign_Opslist']);
    Route::get('/assign_short_answer/{assign_ospQuesQueId}', [FrontController::class, 'assign_short_answer']);
    Route::get('/assign_ospQue/{oQueId}', [FrontController::class, 'assign_osp']);
    Route::get('/assign_vivaQue', [FrontController::class, 'assign_viva']);

    Route::get('/assign_short_answer_new', [FrontController::class, 'assign_short_answer_new']);

    Route::get('assign_viva', [FrontController::class, 'assign_viva']);

    Route::get('/short_view', [FrontController::class, 'short_view_test']);
    Route::get('/short_assign', [FrontController::class, 'short_assign']);
    Route::get('/create_short', [FrontController::class, 'short_create']);
    Route::get('/opslist_view', [FrontController::class, 'opslist_view_test']);
    Route::get('/opslist_assign', [FrontController::class, 'opslist_assign']);
    Route::get('/create_opslist', [FrontController::class, 'opslist_create']);
    Route::get('/test_View_details', [FrontController::class, 'View_details_test']);

    Route::get('/test_view/{id}', [FrontController::class, 'test_view']);
    Route::get('/model_test_view/{id}', [FrontController::class, 'model_test_view']);

    Route::get('/MCQ_View_details/{id}', [FrontController::class, 'View_details_mcq']);
    Route::get('/Short_View_details/{id}', [FrontController::class, 'View_details_short']);
    Route::get('/Opslist_View_details/{id}', [FrontController::class, 'View_details_opslist']);
    Route::get('/Create_mcq_question', [FrontController::class, 'create_mcq_question']);
    Route::get('/Create_short_question', [FrontController::class, 'create_short_question']);
    Route::get('/Create_opslist_question', [FrontController::class, 'create_opslist_question']);
    Route::get('/mk-test-create', [FrontController::class, 'mk_test_create']);
    Route::get('/mk-test', [FrontController::class, 'mk_test']);
    Route::get('/session_reports', [FrontController::class, 'session_reports']);



    
    // ===========================================Arun Kumar Routes Starts==============================================
    // filter Questions Sets 

    Route::get('teachers-all' , [TeacherController::class, 'getAllTeachers'])->name('teachers_list');
    Route::get('students-list-from-test_id' , [AssignController::class, 'get_studentFromTestId'])->name('get_students_from_test_id');
    Route::post('students-list-of-ids' , [AssignController::class, 'get_studentDetailsOfSelectedIds'])->name('get_students_of_ids');
    Route::post('teacher_of_id' , [AssignController::class, 'get_teacherOfId'])->name('get_teacher_of_id');

    Route::prefix('filter')->group(function () {
        Route::get('/mcq_set', [FilterQuestionController::class, 'getAllMcq'])->name('filtermcq');
        Route::get('/short_set', [FilterQuestionController::class, 'getAllShortAnswer'])->name('filtershort');
        Route::get('/shor_osplist', [FilterQuestionController::class, 'getAllOspList'])->name('filterosp');
    });

    Route::prefix('test')->group(function () {
        Route::get('/edit/{id}', [TestController::class, "edit"])->name('test_edit');
        Route::post('/update/{id}', [TestController::class, "update"])->name('test_update');
    });

    Route::post('/assing-test-to-student' , [StudentTestController::class,'assignTest'])->name('assign_test_to_student');
    Route::post('/assing-test-to-batch' , [AssignController::class,'assignTestToBatch'])->name('assign_test_to_batch');
    Route::post('/assing-test-to-teacher' , [AssignController::class,'assignTestToTeacher'])->name('assign_test_to_teacher');
    Route::post('/assing-module' , [AssignController::class,'assignModule'])->name('assign_module');

    //=========================================Arun Kumar Routes Ends========================================================

    // teacher website end

    // student website start
    Route::get('/profile_student', [FrontController::class, 'student_profile']);
    Route::post('/profile_student', [StudentLoginController::class, 'profile_update'])->name('student-profile-update');

    Route::get('/test_report_student', [FrontController::class, 'student_test_report']);
    Route::get('/new_test_student', [FrontController::class, 'student_new_test']);
    Route::post('/paper_login', [FrontController::class, 'paper_login_check'])->name('paper_login');

    Route::get('/StudentLogin', [StudentLoginController::class, 'StudentLogin']);
    Route::put('/activeStudentNotify', [StudentLoginController::class, 'updateStudentNotify'])->name('activeStudentNotify');
    Route::get('/TeacherLogin', [TeacherLoginController::class, 'TeacherLogin']);
    Route::put('/activeteacherNotify', [TeacherLoginController::class, 'updateteacherNotify'])->name('activeteacherNotify');
   

    Route::get('/nipu', [TeacherLoginController::class, 'nipu']);
});

Route::get('/web-logout', [LogoutController::class, 'webLogout'])->name('web-logout.webLogout');

//Fornt-ENd


Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');

Route::group(['middleware' => ['auth']], function () {

    //Admin
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    //student
    Route::get('students', [StudentController::class, 'index']);
    Route::get('student/create', [StudentController::class, 'create']);
    Route::post('student/create', [StudentController::class, 'store'])->name('create-student');
    Route::get('student/edit/{id}', [StudentController::class, 'edit']);
    Route::post('student/update', [StudentController::class, 'update']);
    Route::get('student/delete/{id}', [StudentController::class, 'delete']);
    Route::get('student-tasks', [StudentTaskController::class, 'index']);

    Route::get('file-import-export', [UserController::class, 'fileImportExport']);
    Route::post('file-import', [UserController::class, 'fileImport'])->name('file-import');
    Route::get('file-export', [UserController::class, 'fileExport'])->name('file-export');

    Route::get('teacher-import-export', [UserController::class, 'TeacherImportExport']);
    Route::post('teacher-import', [UserController::class, 'TeacherImport'])->name('teacher-import');
    Route::get('teacher-export', [UserController::class, 'TeacherExport'])->name('teacher-export');

    //Teacher
    Route::get('teachers', [TeacherController::class, 'index']);
    Route::get('teacher/create', [TeacherController::class, 'create']);
    Route::post('teacher/create', [TeacherController::class, 'store'])->name('create-teacher');
    Route::get('teacher/{id}', [TeacherController::class, 'edit']);
    Route::post('teacher/update', [TeacherController::class, 'update']);
    Route::get('teacher/delete/{id}', [TeacherController::class, 'delete']);
    Route::get('Teacher-tasks', [TeacherTaskController::class, 'index']);

    //Banner
    Route::get('banners', [BannerController::class, 'index']);
    Route::get('banner/create', [BannerController::class, 'create']);
    Route::post('banner/create', [BannerController::class, 'store'])->name('create-banner');
    Route::get('banner/edit/{id}', [BannerController::class, 'edit']);
    Route::post('banner/update', [BannerController::class, 'update']);
    Route::get('banner/delete/{id}', [BannerController::class, 'delete']);

    //Branch
    Route::get('branchs', [BranchController::class, 'index']);
    Route::get('branch/create', [BranchController::class, 'create']);
    Route::post('branch/create', [BranchController::class, 'store'])->name('create-branch');
    Route::get('branch/edit/{id}', [BranchController::class, 'edit']);
    Route::post('branch/update', [BranchController::class, 'update']);
    Route::get('branch/delete/{id}', [BranchController::class, 'delete']);

    //Department
    Route::get('departments', [DepartmentController::class, 'index']);
    Route::get('department/create', [DepartmentController::class, 'create']);
    Route::post('department/create', [DepartmentController::class, 'store'])->name('create-department');
    Route::get('department/edit/{id}', [DepartmentController::class, 'edit']);
    Route::post('department/update', [DepartmentController::class, 'update']);
    Route::get('department/delete/{id}', [DepartmentController::class, 'delete']);

    //FAQ
    Route::get('faqs', [FaqController::class, 'index']);
    Route::get('faq/create', [FaqController::class, 'create']);
    Route::post('faq/create', [FaqController::class, 'store'])->name('create-faq');
    Route::get('faq/edit/{id}', [FaqController::class, 'edit']);
    Route::post('faq/update', [FaqController::class, 'update']);
    Route::get('faq/delete/{id}', [FaqController::class, 'delete']);
    //Report
    Route::get('reports', [ReportController::class, 'index']);
    Route::get('report/create', [ReportController::class, 'create']);
    Route::post('report/create', [ReportController::class, 'store'])->name('create-report');

    //Batch
    Route::get('batches', [BatchController::class, 'index']);
    Route::get('batch/create', [BatchController::class, 'create']);
    Route::post('batch/create', [BatchController::class, 'store'])->name('create-batch');
    Route::get('batch/edit/{id}', [BatchController::class, 'edit']);
    Route::post('batch/update', [BatchController::class, 'update']);
    Route::get('batch/delete/{id}', [BatchController::class, 'delete']);

    //Semester
    Route::get('semesters', [SemesterController::class, 'index']);
    Route::get('semester/create', [SemesterController::class, 'create']);
    Route::post('semester/create', [SemesterController::class, 'store'])->name('create-semester');
    Route::get('semester/edit/{id}', [SemesterController::class, 'edit']);
    Route::post('semester/update', [SemesterController::class, 'update']);
    Route::get('semester/delete/{id}', [SemesterController::class, 'delete']);

    //Subject`
    Route::get('subjects', [SubjectController::class, 'index']);
    Route::get('subject/create', [SubjectController::class, 'create']);
    Route::post('subject/create', [SubjectController::class, 'store'])->name('create-subject');
    Route::get('subject/edit/{id}', [SubjectController::class, 'edit']);
    Route::post('subject/update', [SubjectController::class, 'update']);
    Route::get('subject/delete/{id}', [SubjectController::class, 'delete']);

    //Teacher Notification
    Route::get('notify', [NotificationController::class, 'index']);
    Route::get('notification/create', [NotificationController::class, 'create']);
    Route::post('notification/create', [NotificationController::class, 'store'])->name('create-notification');
    Route::get('notification/delete/{id}', [NotificationController::class, 'delete']);


    //Student Notification
    Route::get('studentNotifies', [NotificationController::class, 'showStudent']);
    Route::get('studentNotify/create', [NotificationController::class, 'createStudent']);
    Route::post('studentNotify/create', [NotificationController::class, 'storeStudent'])->name('create-studentNotify');
    Route::get('studentNotify/delete/{id}', [NotificationController::class, 'studentDelete']);

    //Stafe Information
    
    Route::get('adminViewReports', [StafeInfoController::class, 'index']);
});
