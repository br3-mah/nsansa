<?php

use App\Http\Controllers\Api\ActivityController;
use App\Http\Controllers\Api\CoreController;
use App\Http\Controllers\Api\SurveyController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Sanctum\PersonalAccessToken;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return auth()->user(); 
});
Route::post('login', [LoginController::class, 'loginApi']);
Route::post('register', [RegisterController::class, 'register']);

Route::get('get-activities/{id}', [ActivityController::class, 'index']);
Route::get('mark-complete', [ActivityController::class, 'markComplete']);

Route::get('my-survey', [SurveyController::class, 'patientSurveys']);
Route::get('start-survey/{id}', [SurveyController::class, 'startSurvey']);
Route::get('submit-survey', [SurveyController::class, 'submitSurvey']);

Route::get('get-patient-survey', [SurveyController::class, 'getPatientSurvey']);
Route::get('get-counselor-survey', [SurveyController::class, 'getCounselorSurvey']);
Route::get('get-therapy-sessions/{id}', [SurveyController::class, 'getTherapySessions']);
Route::get('get-therapy-session-chat-messages/{chat_id}/{starter}', [SurveyController::class, 'getTherapySessionChatMessages']);

Route::post('submit-survey', [ResultsController::class, 'store']);
Route::get('send-chat-message', [ChatController::class, 'store']);
Route::post('update-session', [ChatController::class, 'update']);

Route::get('my-notifications', [NotificationController::class, 'index'])->middleware('auth:sanctum');

Route::get('/unassigned-patients', [CoreController::class, 'unsignedPatients']);
Route::get('/counselors', [CoreController::class, 'getCounselors']);
Route::get('/departments', [CoreController::class, 'getDepartments']);
Route::get('/assign/{patient_id}/{counselor_id}', [CoreController::class, 'assignCounselor']);

Route::get('get-available-time-slots', [CoreController::class, 'availableTimeSlots']);

Route::middleware('auth:sanctum')->post('logout', function (Request $request) {
    Auth::guard('web')->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
});