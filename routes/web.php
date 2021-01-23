<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\tourPlaceController;
use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\admin\tourDetailsController;
use App\Http\Controllers\toureGuideController;
use App\Http\Controllers\multiPageFormController;
use App\Http\Controllers\guide\guideController;
use App\Http\Controllers\newAuthController;
use App\Http\Controllers\customAuthController;
 



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

//Route::get('/', function () { return view('welcome');});




Route::get('/', [homeController::class, 'index'])->name('front.index');

Route::get('/for-guide', function () {return view('front.for-guide');})->name('front.forguide');
Route::get('/for-tour', function () {return view('front.for-tour');})->name('front.fortour');
Route::get('/agent-login', function () {return view('front.admin-login');})->name('front.adminlogin');
Route::get('/guide-login', function () {return view('front.guide-login');})->name('front.guidelogin');
Route::get('/traveler-login', function () {return view('front.traveler-login');})->name('front.travelerlogin');
Route::get('/traveler-register', function () {return view('front.traveler-register');})->name('front.travelerregister');


Route::get('/newregister', function () {return view('front.register');})->name('front.register');



Route::get('/multi-page-form/{id}', [multiPageFormController::class, 'index'])->name('front.multipageform');
Route::post('/multi-page-form-success', [multiPageFormController::class, 'store'])->name('front.multipageformstore');



Route::get('/packagedetails', function () {return view('front.packagedetails');})->name('front.packagelist');
Route::get('/packagelist', function () {return view('front.packagelist');});
//Route::get('/single-guide-details', function () {return view('front.single-guide-details');});
Route::get('/single-tour-details/{id}', [tourDetailsController::class, 'index'])->name('singletourDetails');


Route::get('/tour-place/{id}', [tourPlaceController::class, 'index'])->name('tourplace');




Route::get('/single-guide-details/{id}', [toureGuideController::class, 'index'])->name('singleGuideDetails');


Route::post('/newregister-success', [newAuthController::class, 'store'])->name('newregister');


/*Route::middleware(['auth:sanctum', 'verified' , 'authadmin'])->get('/admin/index', [adminController::class, 'index'])->name('backend.index');*/

Route::middleware(['auth:sanctum', 'verified' , 'authadmin'])->get('/admin/manage-slider', [adminController::class, 'slider'])->name('backend.manageslider');
Route::POST('/admin/slider-success', [adminController::class, 'store'])->name('backend.store');
//Route::get('/member/{id}/edit', [memberController::class, 'edit'])->name('member.edit');
Route::middleware(['auth:sanctum', 'verified' , 'authadmin'])->get('/admin/manage-slider/{id}', [adminController::class, 'destroy']);
Route::post('/admin/manage-slider/update', [adminController::class, 'update'])->name('admin.update');


Route::POST('/admin/location-success', [adminController::class, 'locationstore'])->name('backend.locationstore');
Route::POST('/admin/location-update', [adminController::class, 'locationupdate'])->name('backend.locationupdate');
Route::middleware(['auth:sanctum', 'verified' , 'authadmin'])->get('/admin/location-delete/{id}', [adminController::class, 'locationdestroy']);







Route::middleware(['auth:sanctum', 'verified' , 'authadmin'])->get('/admin/manage-tours-place', [adminController::class, 'tourplacearea'])->name('backend.tourplacearea');
Route::POST('/admin/tourplace-area-success', [adminController::class, 'tourplacestore'])->name('backend.tourplacestore');

Route::middleware(['auth:sanctum', 'verified' , 'authadmin'])->get('/admin/manage-tours-place/{id}', [adminController::class, 'tourplacedestroy']);
Route::post('/admin/manage-tours-place/update', [adminController::class, 'tourplaceupdate'])->name('tourplace.update');




Route::middleware(['auth:sanctum', 'verified' , 'authadmin'])->get('/admin/manage-guide', [adminController::class, 'manageguide'])->name('backend.manageguide');

Route::middleware(['auth:sanctum', 'verified' , 'authadmin'])->get('/admin/manage-guide-for-tour/{id}', [adminController::class, 'manageguidefortour'])->name('backend.manageguidefortour');

//Route::POST('/admin/tourplace-area-success', [adminController::class, 'tourplacestore'])->name('backend.tourplacestore');
Route::post('/admin/approve-guide', [adminController::class, 'approveguide'])->name('backend.approveguide');

Route::post('/admin/approve-tour-guide', [adminController::class, 'approvetourguide'])->name('backend.approvetourguide');



Route::get('/admin/view/{id}/show', [adminController::class, 'guideshow'])->name('backend.guideshow');

Route::middleware(['auth:sanctum', 'verified' , 'authadmin'])->get('/admin/guidedestroy/{id}', [adminController::class, 'guidedestroy']);




Route::middleware(['auth:sanctum', 'verified' , 'authadmin'])->get('/admin/manage-order', [adminController::class, 'manageorder'])->name('backend.manageorder');
Route::middleware(['auth:sanctum', 'verified' , 'authadmin'])->get('/admin/manage-package', [adminController::class, 'managepackage'])->name('backend.managepackage');
Route::middleware(['auth:sanctum', 'verified' , 'authadmin'])->post('/admin/manage-package', [adminController::class, 'packagestore'])->name('package.store');

Route::post('/admin/approve-order', [adminController::class, 'approveorder'])->name('backend.approveorder');
Route::post('/admin/approve-payment', [adminController::class, 'approvepayment'])->name('backend.approvepayment');
Route::get('/admin/view/order/{id}/show', [adminController::class, 'ordershow'])->name('backend.ordershow');

Route::middleware(['auth:sanctum', 'verified' , 'authadmin'])->get('/admin/orderdestroy/{id}', [adminController::class, 'orderdestroy']);







Route::middleware(['auth:sanctum', 'verified' , 'authadmin'])->get('/admin/add-location', [adminController::class, 'addlocation'])->name('backend.addlocation');





//** start testimonial**//
Route::middleware(['auth:sanctum', 'verified' , 'authadmin'])->get('/admin/manage-testimonial', [adminController::class, 'testimonial'])->name('backend.managetestimonial');
Route::POST('/admin/testimonial-success', [adminController::class, 'testimonialstore'])->name('testimonial.store');

Route::middleware(['auth:sanctum', 'verified' , 'authadmin'])->get('/admin/manage-testimonial/{id}', [adminController::class, 'testimonialdestroy'])->name('testimonial.destroy');
Route::post('/admin/manage-testimonial/update', [adminController::class, 'testimonialupdate'])->name('testimonial.update');

//**end testimonial**//

Route::POST('/guide/guide-store', [guideController::class, 'store'])->name('guide.store');
Route::POST('/guide/guide-success', [guideController::class, 'update'])->name('guide.update');

Route::POST('/guide/guide-apply-success', [guideController::class, 'guideapplystore'])->name('guide.applystore');

Route::POST('/userprofileupdate-success', [guideController::class, 'userprofileupdate'])->name('userprofileupdate');

Route::POST('/guide/guide-personalimageupdate-success', [guideController::class, 'personalimageupdate'])->name('guide.personalimageupdate');





Route::get('/guide-apply', [guideController::class, 'guideapply'])->name('guide.apply');


Route::POST('/guide/guide-apply-update', [guideController::class, 'guideapplyupdate'])->name('guide.applyupdate');









Route::get('/guide/order/{id}/show', [guideController::class, 'show'])->name('guide.show');


Route::middleware(['auth:sanctum', 'verified'])->get('/profile/setting', function () {return view('profile.setting');})->name('profile.setting');





Route::middleware(['auth:sanctum', 'verified'])->get('/user/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified' , 'authadmin'])->get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::middleware(['auth:sanctum', 'verified' , 'authguide'])->get('/guide/dashboard', function () {
    return view('guide.dashboard');
})->name('guide.dashboard');


//filters
Route::middleware(['auth:sanctum', 'verified' , 'authadmin'])->get('/admin/filter-tours-place/{id}', [adminController::class, 'filterbydistrict'])->name('backend.filter.tourplacearea');

Route::get('/custom/login', function() {
    return view('login');

})->name('custome.login');

Route::get('/custom/login/get', [customAuthController::class, 'boot'])->name('custom.login.post');