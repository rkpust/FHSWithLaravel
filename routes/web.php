<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IntroductionController;
use App\Http\Controllers\BriefHistoryController;
use App\Http\Controllers\HeadmasterSpeechController;
use App\Http\Controllers\ManagingCommitteeController;
use App\Http\Controllers\MasterplanController;
use App\Http\Controllers\AimObjectivesController;
use App\Http\Controllers\AchievementSuccessController;
use App\Http\Controllers\NoticesController;
use App\Http\Controllers\HolidaysController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\ComputerLabController;
use App\Http\Controllers\SototaStoreController;
use App\Http\Controllers\MagazineController;
use App\Http\Controllers\OnlyViewReturnController;
use App\Http\Controllers\OpinionsController;
use App\Http\Controllers\LoginController;



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

Route::get('/', [ HomeController::class , 'index'])->name('index.page');

Route::get('/introduction', [ IntroductionController::class , 'introduction'])->name('introduction.page');
 
Route::get('/brief-history', [ BriefHistoryController::class , 'index'])->name('brief.history');

Route::get('/speech-of-headmaster', [ HeadmasterSpeechController::class , 'index'])->name('headmasters.speech');

Route::get('/managing-committee', [ ManagingCommitteeController::class , 'index'])->name('managing.committee');

Route::get('/master-plan', [ MasterplanController::class , 'index'])->name('master.plan');

Route::get('/aim-objectives', [ AimObjectivesController::class , 'index'])->name('aim.objectives');

Route::get('/achievement-success', [ AchievementSuccessController::class , 'index'])->name('achievement.success');






Route::get('/notices', [ NoticesController::class , 'index']);

Route::get('/holidays', [ HolidaysController::class , 'index']);

Route::get('/library', [ LibraryController::class , 'index']);

Route::get('/computer-lab', [ ComputerLabController::class , 'index']);

Route::get('/sotota-store', [ SototaStoreController::class , 'index']);

Route::get('/magazine', [ MagazineController::class , 'index']);

Route::get('/events', [ OnlyViewReturnController::class , 'events']);

Route::get('/important-links', [ OnlyViewReturnController::class , 'importantlinks']);

Route::get('/code-of-conducts', [ OnlyViewReturnController::class , 'CodeOfConducts'])->name('code-of-conducts');

Route::get('/dress-code', [ OnlyViewReturnController::class , 'DressCode'])->name('dress-code');

Route::get('/lesson-plan', [ OnlyViewReturnController::class , 'LessonPlan'])->name('lesson-plan');

Route::get('/calendar', [ OnlyViewReturnController::class , 'Calendar'])->name('calendar');

Route::get('/class-routine', [ OnlyViewReturnController::class , 'ClassRoutine'])->name('class-routine');

Route::get('/exam-routine', [ OnlyViewReturnController::class , 'ExamRoutine'])->name('exam-routine');

Route::get('/results', [ OnlyViewReturnController::class , 'Results'])->name('results');





Route::get('/boys-scout', [ OnlyViewReturnController::class , 'BoysScout']);

Route::get('/girls-guide', [ OnlyViewReturnController::class , 'GirlsGuide']);

Route::get('/sports', [ OnlyViewReturnController::class , 'Sports']);

Route::get('/culture-practice', [ OnlyViewReturnController::class , 'CulturePractice']);

Route::get('/number-of-students', [ OnlyViewReturnController::class , 'NumberOfStudents']);

Route::get('/list-of-students', [ OnlyViewReturnController::class , 'ListOfStudents']);

Route::get('/teachers', [ OnlyViewReturnController::class , 'Teachers']);

Route::get('/employees', [ OnlyViewReturnController::class , 'Employees']);

Route::get('/photo-gallery', [ OnlyViewReturnController::class , 'PhotoGallery']);

Route::get('/video-gallery', [ OnlyViewReturnController::class , 'VideoGallery']);

Route::get('/former-persons', [ OnlyViewReturnController::class , 'FormerPersons']);

Route::get('/meritorious-students', [ OnlyViewReturnController::class , 'MeritoriousStudents']);

Route::get('/contact', [ OpinionsController::class , 'Contact']);

Route::post('/opinion', [ OpinionsController::class , 'OpinionStore']);


Route::get('/login', [ LoginController::class , 'Login']);

Route::post('/check', [ LoginController::class , 'Check']);

Route::get('/admin/dashboard', [ LoginController::class , 'dashboard']);


