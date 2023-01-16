<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EditCalendarController;
use App\Http\Controllers\ViewCalendarController;


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
    if ($user = Auth::user()) {
        //if login
        return redirect('/dashboard');
    } else {
        //if not login
        return redirect('login');
    }
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');//nama kat url / nama function / nama panggil kat interface
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'loadDashboard'])->name('dashboard');


//REGISTER


//ACTIVITY
Route::get('/activity', [App\Http\Controllers\ActivityController::class, 'index'])->name('activity');
Route::get('/activity/ViewActivity', [App\Http\Controllers\ActivityController::class, 'viewActv'])->name('activity/ViewActv');
Route::get('/activity/AddNewActivity', [App\Http\Controllers\ActivityController::class, 'addActv'])->name('activity/AddActv');
Route::get('/activity/ActivityApproval', [App\Http\Controllers\ActivityController::class, 'planActv'])->name('activity/PlanActv');


//CALENDAR
Route::get('viewcalendar', [App\Http\Controllers\ViewCalendarController::class, 'index'])->name('viewcalendar');
Route::get('editcalendar', [App\Http\Controllers\EditCalendarController::class, 'index'])->name('editcalendar');
Route::post('editcalendar/action', [App\Http\Controllers\EditCalendarController::class, 'action']);


//PROPOSAL

?>
