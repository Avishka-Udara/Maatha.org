<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\MDSController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\OfficialsController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Storage;



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ //...
    
        /** Localized Routes here **/
        Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

        Route::get('/about', function () {
            return view('about');
        });

        Route::get('/contact', function () {
            return view('contact');
        });

        Route::get('/join', function () {
            return view('join');
        });

        
        Route::get('/project', [ProjectController::class, 'guestView'])->name('project');
        Route::get('/project/{project}', [ProjectController::class, 'guestShow'])->name('projectshow');
                
        Route::get('/Accountability', [AccountController::class, 'Accountability'])->name('Accountability');
        Route::get('/Accountability/{account}', [AccountController::class, 'guestshow'])->name('Accountability.guestshow');
        
        
        //make MDS routes
        Route::get('/mds', [MDSController::class, 'guestView'])->name('mds.network');
        Route::get('/mds/form', [MDSController::class, 'guestCreate'])->name('mds.form');
        Route::get('/mds/{mds}', [MDSController::class, 'guestShow'])->name('mdsshow');
        Route::post('/mds', [MDSController::class, 'guestStore'])->name('mds.store');

    });
    
    /** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/


Route::get('/post', function () {
    return view('post');
});



Route:: get('/dashboard',[HomeController::class,'index'])->name('dashboard');
Route::resource('users', UserController::class);

Route::get('/register/mentor', [UserController::class, 'createMentor'])->name('register.mentor.form');
Route::post('/register/mentor', [UserController::class, 'storeMentor'])->name('register.mentor.submit');

//make Announcements routes
Route::resource('Announcements', AnnouncementController::class);


Route::resource('mdss', MDSController::class);

//add account routes
Route::resource('accounts', AccountController::class);

Route::resource('oursponsors', SponsorController::class);


Route::resource('officials', OfficialsController::class);


//add project routes
Route::resource('projects', ProjectController::class)->names([
    'index' => 'projects.index',
]);

Route::get('/projects/{project}/image/{image}', function ($project, $image) {
    $url = URL::temporarySignedRoute('image.show', now()->addMinutes(1), ['project' => $project, 'image' => $image]);
    return redirect()->away($url);
})->name('projects.image');


Route::get('/image/{project}/{image}', function ($project, $image) {
    $path = 'uploads/project/' . $image;
    if (Storage::exists($path)) {
        return response()->file(storage_path('app/' . $path));
    }
    abort(404);
})->name('image.show');

Route::get('/news/all', [NewsController::class, 'all'])->name('news.all');
Route::resource('news', NewsController::class);
//Route for all news in the home page