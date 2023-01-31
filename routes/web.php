<?php

use App\Http\Middleware\Prefix;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\RecruitingController;
use App\Http\Controllers\admin\JobSeekerController;
use App\Http\Controllers\admin\ActiveInactiveController;
use App\Http\Controllers\admin\PageController;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\CoursesController;
use App\Http\Controllers\front\AuthControllers;
use App\Http\Controllers\front\CondidateProfile;
use App\Http\Controllers\front\recuriter\RecuriterController;
use App\Http\Controllers\front\recuriter\AddToCartController;

use App\Models\Recuriter;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


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
/*-----------Fornt Side Managment--------------*/; 
// Route::get('/', function () {
//      return view('front.home.home-page');
// });
// Route::view('manpowernew','front.home.home-page')->middleware('HomePage');    
/*-----------Front Managment--------------*/;
    Route::get('/',[HomeController::class,'index_home'])->name('home')->middleware('HomePage');
    Route::controller(CoursesController::class)->group(function(){
        Route::get('/courses','courses')->name('courses');
    });    
Route::controller(HomeController::class)->middleware('CondidateProfile','employer')->group(function(){
    Route::controller(CondidateProfile::class)->group(function(){
    Route::post('/location-save','location')->name('front.location');
    Route::get('/candidate-profile','condidate_profile')->name('CandidateProfile');
    Route::post('/candidate-profile-save/{type?}','condidate_profile_save')->name('CandidateProfileSave');
    Route::post('/candidate-experience','candidate_experience_save')->name('CandidateExperience');
    Route::post('/candidate-qualifications','candidate_qualifications_save')->name('CandidateQualifications');
    Route::post('/candidate-skills','candidate_skills_save')->name('CandidateSkills');
    Route::post('/candidate-about','candidate_about')->name('CandidateAbout');

        Route::post('/show-state','show_state')->name('show.state');
        Route::post('/show-city','show_city')->name('show.city');
    // Route::post('/candidate-language','candidate_language_save')->name('CandidateLanguage');
    }); 
    Route::view('/uploadcv','front.login.uploadcv')->name('signupUserCv');
    Route::post('/uploadcv-save',[AuthControllers::class,'uploadcv'])->name('signupUserCvSave');
});
Route::controller(AuthControllers::class)->middleware('front_guest')->name('front.')->group(function(){
    Route::view('/login','front.login.login')->name('Login');
    Route::view('/sign-up-user','front.login.signup')->name('signupUserSave')->middleware('SignUp');
    Route::post('/sign-up','sign_up')->name('signupUser');
    Route::post('/login-dashboard','login_user')->name('loginUser');
    Route::post('/sign-up-user-save','signup_form_first')->name('signupUserSaveForm');
});
Route::prefix('recuriter')->controller(RecuriterController::class)->middleware('employer')->name('Recuriter.')->group(function(){
    Route::post('sign-up-save','recuriter_save')->name('RegisterFrom');
    Route::post('sign-save','register')->name('RegisterSave');
    Route::view('advice','front/recuriter/BeforeLogin/advicer')->name('Advicer');
    Route::view('/basket','front/recuriter/AfterLogin/basket')->name('Basket');
    Route::middleware('RecuriterGuest')->group(function(){
        Route::view('/home','front/recuriter/BeforeLogin/home')->name('Home');
        Route::view('/login','front/recuriter/BeforeLogin/login')->name('Login');
        Route::view('/recruitment-agencies','front/recuriter/BeforeLogin/agencies')->name('Agencies');
        Route::view('/post-a-job','front/recuriter/BeforeLogin/postjob')->name('PostJobFront');
        Route::view('/cv-search','front/recuriter/BeforeLogin/cvsearch')->name('CvSearch');
        Route::post('/login_user','login_check')->name('LoginCheck');
    });
    Route::middleware('RecuriterLoginCheck')->group(function(){
        Route::view('/','front/recuriter/AfterLogin/recruiter')->name('RecruiterPage');
        Route::view('/account/edit','front/recuriter/AfterLogin/accountadit')->name('AccountEdit');
        Route::view('/account','front/recuriter/AfterLogin/account')->name('Account');
        Route::view('recruiter/account/credits/','front/recuriter/AfterLogin/PostJob')->name('PostJob');
        Route::view('/checkout','front/recuriter/AfterLogin/checkout')->name('Checkout');
        Route::view('/about/help','front/recuriter/AfterLogin/help')->name('Help');
        Route::controller(AddToCartController::class)->group(function(){
            Route::post('add-to-cart','add_to_cart')->name('AddCart');
        });
    });
});
/*-----------Admin Panel Login Managment--------------*/; 
Route::prefix('admin')->middleware('guest')->group(function(){
    Route::view('/login','admin/auth/login')->name('admin.login');    
	Route::view('/forgot-password', 'admin/auth/forgot-password')->name('admin.forgot-password');
    Route::controller(AuthController::class)->group(function(){
        Route::post('/login-verify','loginAuth')->name('admin.login-verify');
        Route::post('/forgot-email-verify', 'forgotPassword')->name('admin.forgotPassword');
        Route::get('/reset-password/{id}',  'resetPassword')->name('admin.reset-password');
        Route::post('/reset-password-verify/{id}',  'verifyResetPassword')->name('admin.reset-password-verify');
    });
});
/*-----------Admin Panel Dashboard--------------*/ 
Route::prefix('admin')->middleware('auth:admin')->group(function(){
        Route::view('/dashboard','admin/dashboard')->name('admin.dashboard');
    Route::controller(ProfileController::class)->group(function(){
        Route::get('/profile/{type?}','index')->name('admin.getProfile');
        Route::post('/save-profile/{type?}','save_profile')->name('admin.setProfile');
    });
    Route::controller(RecruitingController::class)->name('admin.recruiting.')->group(function(){
        Route::get('/show-data-recruiter','index')->name('index');
        Route::get('/add-edit-recruiter/{id?}','add_or_edit')->name('addOrEdit');
        Route::Post('/add-edit-recruiter/{id?}','add_or_edit_save')->name('addOrEditSave');
    });
    Route::controller(JobSeekerController::class)->name('admin.jobseeker.')->group(function(){
        Route::get('/show-data-jobseeker','index')->name('index');
        Route::get('/add-edit-jobseeker/{id?}','add_or_edit')->name('addOrEdit');
        Route::Post('/add-edit-jobseeker/{id?}','add_or_edit_save')->name('addOrEditSave');
    });
        Route::controller(ActiveInactiveController::class)->name('admin.dashboard.')->group(function(){
        Route::get('/active-inactive-user','active_inactive')->name('activeInactive');
    }); 
    Route::controller(PageController::class)->name('admin.page.')->group(function(){
        Route::get('policy-page,{type}','index')->name('index');
        Route::get('/home-page','home_index')->name('homePage');
        Route::post('privacy-policy-add-edit,{type}','add_edit_update')->name('addOrEdit');
        Route::post('/home-page-save/{type}','home_page_save')->name('homeSave');
    });
});
/*-----------Admin And User Panel Logout--------------*/; 
Route::get('/logout',[AuthController::class,'logout'])->name('admin.logout');
Route::get('/logout-user',[AuthControllers::class,'front_logout'])->name('front.logout');

