<?php

use App\Http\Controllers\AboutPage;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CareerPage;
use App\Http\Controllers\ContactPage;
use App\Http\Controllers\CounsellorController;
use App\Http\Controllers\FaqPage;
use App\Http\Controllers\GetStartedPage;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeworkController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReviewsPage;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoCallController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\QuestionaireController;
use App\Http\Controllers\ResultsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

// Route::get('/', [WelcomeController::class, 'index'])->name('index');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    // ====================Dashboard
    Route::get('/therapy-center', [CounsellorController::class, 'index'])->name('counsellor');
    Route::get('/counseling-center', [PatientController::class, 'index'])->name('patient');
    Route::get('/patient-files', [PatientController::class, 'patient_files'])->name('patient-files');
    Route::get('/schedule-appointments', [AppointmentController::class, 'index'])->name('appointment');
    Route::get('/activies', [HomeworkController::class, 'index'])->name('activities');
    Route::get('/actions', [HomeworkController::class, 'actions'])->name('actions');
    Route::get('/billing-history', [BillingController::class, 'index'])->name('billing');
    Route::get('/notifications', [NotificationController::class, 'index'])->name('notification');
    Route::get('/my-profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/live-video-call', [VideoCallController::class, 'index'])->name('video-call');

    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionsController::class);
    Route::resource('users', UserController::class);

    Route::resource('questionaires', QuestionaireController::class);
    Route::delete('question/delete/{id}/{qid}', [QuestionaireController::class, 'questionDestroy'])->name('question.remove');
    Route::get('users-feedback', [QuestionaireController::class, 'feed'])->name('questionaire-user-feedback');
    Route::get('user-survey-response/{id?}', [QuestionaireController::class, 'user_feed'])->name('user-survey-response');
    Route::get('change-questionaire-status', [QuestionaireController::class, 'updateStatus'])->name('questionaire.status');
    Route::resource('answers', AnswerController::class);
    Route::delete('answers/delete/{id}/{qid}', [AnswerController::class, 'customDestroy'])->name('answers.remove');
    Route::resource('results', ResultsController::class);
});


// ================== Website
Route::get('/about', [AboutPage::class, 'index'])->name('about');
Route::get('/contact', [ContactPage::class, 'index'])->name('contact');
Route::get('/frequently-asked-question', [FaqPage::class, 'index'])->name('faq');
Route::get('/start-your-career', [CareerPage::class, 'index'])->name('careers');
Route::get('/quick-questionaire', [CareerPage::class, 'careerSurveyQuestionaire'])->name('career-survey');
Route::get('/reviews', [ReviewsPage::class, 'index'])->name('reviews');
Route::get('/get-started', [GetStartedPage::class, 'index'])->name('start');
Route::get('/make-payments', [PaymentController::class, 'index'])->name('pay');
