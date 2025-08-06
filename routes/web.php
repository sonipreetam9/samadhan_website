<?php

use App\Http\Controllers\ApplyJobController;
use App\Http\Controllers\SCandidateController;
use App\Http\Controllers\SVacancyController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\MemberShipController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PrintFormController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SDashboardController;
use App\Http\Controllers\SAuthController;
use App\Http\Controllers\SProfileController;
use App\Http\Controllers\SAdvertisementController;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\SuperAuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/about-us', [IndexController::class, 'about'])->name('about');
Route::get('/gallery', [IndexController::class, 'gallery'])->name('gallery');
Route::get('/contact-us', [IndexController::class, 'contact'])->name('contact');
Route::post('/contact-us-post', [ContactUsController::class, 'contact_post'])->name('contact.post');
Route::get('/overview', [IndexController::class, 'overview'])->name('overview');
Route::get('/our-company', [IndexController::class, 'our_company'])->name('our_company');
Route::get('/mission', [IndexController::class, 'mission'])->name('mission');
Route::get('/vision', [IndexController::class, 'vision'])->name('vision');
Route::get('/services', [IndexController::class, 'services'])->name('services');
Route::get('/required-documents', [IndexController::class, 'required_documents'])->name('required_documents');
Route::get('/instruction-to-applicants', [IndexController::class, 'instruction_applicants'])->name('instruction_to_applicants');
Route::get('/locations', [IndexController::class, 'locations'])->name('locations');
Route::get('/team', [IndexController::class, 'team'])->name('team');


Route::get('/super_admin', [SuperAuthController::class, 'login_page'])->name('super.login');
Route::post('/super_admin', [SuperAuthController::class, 'check_login'])->name('super.post.login');
Route::get('/super_admin/register', [SuperAuthController::class, 'register_page'])->name('super.register');
Route::post('/super_admin/register', [SuperAuthController::class, 'register_post'])->name('super.post.register');


Route::get('/apply-membership', [MemberShipController::class, 'apply_member_form'])->name('membership.form');
Route::post('/apply-membership-post', [MemberShipController::class, 'member_form_post'])->name('membership.form.post');



Route::group(
    ['middleware' => 'guest'],
    function () {
        Route::get('/login', [AuthController::class, 'login_page'])->name('login');
        Route::post('/login', [AuthController::class, 'check_login'])->name('post.login');
        Route::get('/register', [AuthController::class, 'register_page'])->name('register');
        Route::post('/register', [AuthController::class, 'register_post'])->name('post.register');
    }
);


Route::group(['prefix' => 'user', 'middleware' => ['auth']], function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
    Route::get('/all-vacancy-list', [VacancyController::class, 'vacancy_list'])->name('user.vacancy.list');
    Route::get('/select-vacancy-list', [VacancyController::class, 'select_vacancy_list'])->name('user.select.vacancy.form.list');


    Route::get('/apply-job-form/{vacancyID}', [ApplyJobController::class, 'vacancy_applying_form'])->name('user.apply.job');
    Route::post('/apply-job-form-post', [ApplyJobController::class, 'vancany_apply_post'])->name('user.apply.job.post');
    Route::get('/apply-job-list', [ApplyJobController::class, 'applyed_job_list'])->name('user.apply.job.list');




    Route::get('upload-documents-form/{applyed_id}/{vacancy_id}', [ApplyJobController::class, 'upload_documents_form'])->name('user.upload.documents');
    Route::post('upload-documents-form-post/{applyed_id}/{vacancy_id}', [ApplyJobController::class, 'upload_documents_post'])->name('user.upload.documents.post');




    Route::get('/print-form/{applyed_id}/{vacancy_id}', [PrintFormController::class, 'print_form'])->name('user.print.form');





    Route::get('make-payment/{applyed_id}/{vacancy_id}', [PaymentController::class, 'payment_page'])->name('make.payment.page');
    Route::post('make-payment-post/{applyed_id}/{vacancy_id}', [PaymentController::class, 'payment_post'])->name('make.payment.post');
});

Route::group(
    ['prefix' => 'super_admin', 'middleware' => ['admin']],
    function () {

        Route::get('/logout', [SuperAuthController::class, 'logout'])->name('super.logout');
        Route::get('/dashboard', [SDashboardController::class, 'dashboard'])->name('super.dashboard');

        Route::get('/profile', [SProfileController::class, 'profile'])->name('super.profile');

        Route::get('/add-vacancy', [SVacancyController::class, 'vacancy'])->name('super.add.vacancy');
        Route::post('/add-vacancy-post', [SVacancyController::class, 'add_vacancy'])->name('super.add.vacancy.post');
        Route::get('/all-vacancy-list', [SVacancyController::class, 'vacancy_list'])->name('super.vacancy.list');


        Route::get('/all-candidate-list', [SCandidateController::class, 'candidate_list'])->name('super.candidate.list');
        Route::get('/contact-messages', [SCandidateController::class, 'contact_list'])->name('super.contact');

        Route::get('/all-payments-list', [PaymentController::class, 'new_payment_list'])->name('super.payment.list');
        Route::get('/update-payment-status/{id}/{status}', [PaymentController::class, 'update_payment_status'])->name('super.update.payment.status');



        Route::get('/add-advertisement', [SAdvertisementController::class, 'add_advertisement'])->name('super.add.advertisement.page');
        Route::post('/add-advertisement-post', [SAdvertisementController::class, 'add_advertisement_post'])->name('super.add.advertisement.post');
    }
);



Route::get('/optimize', function () {
    Artisan::call('optimize:clear');
    Artisan::call('optimize');

    // Optional: Run individual commands
    Artisan::call('route:cache');
    Artisan::call('config:cache');
    Artisan::call('view:cache');

    return 'Project optimized successfully!';
});
