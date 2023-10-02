<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ConsultantController;
use App\Http\Controllers\Auth\AuthController;
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
Route::get('404', function () {
    return view('errors.404');
});


Route::get('/kayit-ol', [HomeController::class, 'kayitOl'])->name('kayitOl');
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/ulkeler', [HomeController::class, 'countries'])->name('countries');
Route::get('/blog', [HomeController::class, 'blogs'])->name('blogs');
Route::get('/edvisor', [HomeController::class, 'edvisor'])->name('edvisor');
Route::get('/danismanlar', [HomeController::class, 'consultants'])->name('consultants');
Route::get('/danisman/{slug}', [HomeController::class, 'consultantView'])->name('consultantView');
Route::get('/iletisim', [HomeController::class, 'contact'])->name('contact');
Route::get('/hakkimizda', [HomeController::class, 'aboutUs'])->name('aboutUs');
Route::get('/ulke/{slug}', [HomeController::class, 'countryView'])->name('countryView');
Route::get('/okul/{slug}', [HomeController::class, 'schoolView'])->name('schoolView');
Route::get('/haberler', [HomeController::class, 'news'])->name('news');
Route::get('/haberler/{slug}', [HomeController::class, 'newView'])->name('newView');
Route::get('/blog/{slug}', [HomeController::class, 'blogView'])->name('blogView');
Route::get('/danisman/yeni/basvur', [HomeController::class, 'consultantApply'])->name('consultantApply');
Route::get('/banka-hesap-bilgileri', [HomeController::class, 'bankAccount'])->name('bankAccount');
Route::post('/send-message', [HomeController::class, 'contactPost'])->name('contactPost');
Route::get('/program/bolum/{slug}', [HomeController::class, 'programView'])->name('programView');
Route::get('/program/{slug}', [HomeController::class, 'programCategoryView'])->name('programCategoryView');
Route::get('/yasal/{slug}', [HomeController::class, 'legalView'])->name('legalView');
Route::get('get-countries/{id}', [HomeController::class, 'getCountries'])->name('getCountries');
Route::post('get-languages', [HomeController::class, 'getLanguages'])->name('getLanguages');
Route::post('get-parts', [HomeController::class, 'getParts'])->name('getParts');
Route::post('/arama', [HomeController::class, 'programsList'])->name('programsList');
Route::post('/filtrele', [HomeController::class, 'filterProgram'])->name('filterProgram');
Route::post('/canada/coop/send', [HomeController::class, 'CanadaCoopApplication'])->name('CanadaCoopApplication');
Route::get('/kanada-coop', [HomeController::class, 'canadaCoop'])->name('canadaCoop');
Route::get('/franchise', [HomeController::class, 'franchise'])->name('franchise');
Route::post('/franchise/coop/send', [HomeController::class, 'FranchiseApplicationPost'])->name('FranchiseApplicationPost');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('/danisman/basvuru/post', [HomeController::class, 'consultantApplyPost'])->name('consultantApplyPost');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/get-extra-tostay', [HomeController::class, 'getExtraTostay'])->name('getExtraTostay');
Route::post('/get-extra-service', [HomeController::class, 'getExtraService'])->name('getExtraService');
Route::post('/calculate', [HomeController::class, 'calculate'])->name('calculate');
Route::post('/apply-application', [HomeController::class, 'applyApplication'])->name('applyApplication');
Route::post('/send-message-student', [HomeController::class, 'studentSendMessage'])->name('studentSendMessage');
Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [\App\Http\Controllers\LogoutController::class, "perform"])->name('logout.perform');
    Route::get('/profilim', [HomeController::class, 'profile'])->name('profile');
    Route::post('/change-password', [HomeController::class , "changePassword"])->name('change.password');
    Route::post('/store-file', [HomeController::class, 'fileUpload'])->name('fileUpload');
    Route::post('information/post', [HomeController::class, 'informationPost'])->name('informationPost');
    Route::post('/profile/update', [HomeController::class , "profile_update"])->name('profile.update');
    Route::post('/apply-program', [HomeController::class, 'applyProgram'])->name('applyProgram');
    Route::post('/new-application', [HomeController::class, 'newApplication'])->name('newApplication');
    Route::get('/basvuru/devam/{id}', [HomeController::class, 'applicationContinue'])->name('applicationContinue');
    Route::get('/student/message/detail/{id}', [HomeController::class, 'studentMessageDetail'])->name('student.message.detail');
    Route::get('/consultant-panel', [ConsultantController::class, 'consultants'])->name('consultant.index');
    Route::get('/consultant-panel/datalar', [ConsultantController::class, 'datas'])->name('consultant.datas');
    Route::get('/consultant-panel/consultants', [ConsultantController::class, 'consultants'])->name('consultant.consultants');
    Route::get('/consultant-panel/applications', [ConsultantController::class, 'applications'])->name('consultant.applications');
    Route::get('/consultant-panel/applications/view/{id}', [ConsultantController::class, 'applicationsView'])->name('consultant.application.view');
    Route::post('/consultant-application-post', [ConsultantController::class, 'StatusConsultantPost'])->name('consultant.StatusConsultantPost');
    Route::get('/consultant/edit/{id}', [ConsultantController::class, 'consultantEdit'])->name('consultant.edit');
    Route::post('/consultant-delete-post', [ConsultantController::class, 'consultantDelete'])->name('consultant.delete');
    Route::get('/consultant-add', [ConsultantController::class, 'consultantAdd'])->name('consultant.add');
    Route::get('/consultant/my-services/view', [ConsultantController::class, 'consultantServices'])->name('consultant.services');
    Route::get('/consultant/my-pays/view', [ConsultantController::class, 'consultantPays'])->name('consultant.pays');
    Route::get('/consultant/my-services/add', [ConsultantController::class, 'consultantServiceAdd'])->name('consultant.service.add');
    Route::post('/consultant/my-services/post', [ConsultantController::class, 'consultantServiceApplyPost'])->name('consultant.serviceApplyPost');
    Route::post('/consultant-add-post', [ConsultantController::class, 'consultantAddPost'])->name('consultant.add.post');
    Route::post('/consultant-delete-service', [ConsultantController::class, 'consultantServiceDelete'])->name('consultant.service.delete');
    Route::get('/consultant/messages/view', [ConsultantController::class, 'consultantMessages'])->name('consultant.messages');
    Route::post('/consultant/form/post', [ConsultantController::class, 'consultantEditPost'])->name('consultant.edit.post');
    Route::get('/consultant/message/detail/{id}', [ConsultantController::class, 'consultantMessageDetail'])->name('consultant.message.detail');
    Route::post('/consultant/message/answer/post', [ConsultantController::class, 'consultantMessageAnswerPost'])->name('consultant.message.answer.post');
    Route::get('/consultant/datas/all', [ConsultantController::class, 'consultantDatasAll'])->name('consultant.datas.all');
    Route::get('/consultant/datas/create', [ConsultantController::class, 'consultantDatasCreate'])->name('consultant.add.data');
    Route::get('/consultant/datas/edit/{id}', [ConsultantController::class, 'consultantDataEdit'])->name('consultant.data.edit');
    Route::post('/consultant/datas/post', [ConsultantController::class, 'consultantEditDataPost'])->name('consultant.editData.post');
    Route::get('/consultant/student/create', [ConsultantController::class, 'consultantStudentCreate'])->name('consultant.student.add');
    Route::post('/consultant/reminder/post', [ConsultantController::class, 'consultantReminderPost'])->name('consultant.reminder.add.post');
    Route::post('/consultant/process/post', [ConsultantController::class, 'consultantProcessPost'])->name('consultant.process.add.post');
    Route::get('/consultant/datas/all/{filter}', [ConsultantController::class, 'consultantAllDataFilter'])->name('consultant.all.data.filter');
    Route::post('/consultant/stage/post', [ConsultantController::class, 'stagePost'])->name('consultant.stage.post');
    Route::post('consultant/reminder/status', [ConsultantController::class, 'consultantReminderStatusUpdate'])->name('consultant.reminder.status.update');
    Route::get('/consultant/hatirlaticilar/all', [ConsultantController::class, 'consultantReminderAll'])->name('consultant.all.reminder');

    Route::post('consultant/extrapay/post', [ConsultantController::class, 'consultantExtrapayPost'])->name('consultant.extrapay.post');
    Route::post('consultant/extraservice/post', [ConsultantController::class, 'consultantExtraservicePost'])->name('consultant.extraservice.post');
    Route::post('consultant/data/filter', [ConsultantController::class, 'consultantDataFilter'])->name('consultant.data.filter');
    
    
    Route::get('/consultant/my-pays/add', [ConsultantController::class, 'consultantPayAdd'])->name('consultant.pay.add');
    Route::post('/consultant/my-pays/post', [ConsultantController::class, 'consultantPayApplyPost'])->name('consultant.payApplyPost');
    Route::post('/consultant-delete-pay', [ConsultantController::class, 'consultantPayDelete'])->name('consultant.pay.delete');


});

Route::get('/{slug}', [HomeController::class, 'specialPage'])->name('specialPage');
