<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\inquriyController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\admin\adminController;
use App\Http\Middleware\AdminAuthMiddleware;

Route::get('/', function () {
    return view('frontend.home');
})->name('frontend.home');

Route::get('/about-us', function () {
    return view('frontend.aboutus');
})->name('frontend.aboutus');

Route::get('/service', function () {
    return view('frontend.services');
})->name('frontend.services');

Route::get('/project', function () {
    return view('frontend.project');
})->name('frontend.project');

Route::get('/our-team', function () {
    return view('frontend.ourteam');
})->name('frontend.ourteam');

Route::get('/testimonial', function () {
    return view('frontend.testimonial');
})->name('frontend.testimonial');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('frontend.contact');

Route::get('/terms-and-conditions', function () {
    return view('frontend.terms_and_conditions');
})->name('terms_and_conditions');

Route::get('/privacy-policy', function () {
    return view('frontend.privacy_policy');
})->name('privacy_policy');


Route::group(['prefix' => 'service'], function () {

    Route::get('/web-design', function () {
        return view('frontend.service-page.web-design');
    })->name('web-design');

    Route::get('/web-development', function () {
        return view('frontend.service-page.web-development');
    })->name('web-development');

    Route::get('/social-media-marketing', function () {
        return view('frontend.service-page.social-media-marketing');
    })->name('social-media-marketing');

    Route::get('/software-development', function () {
        return view('frontend.service-page.software-development');
    })->name('software-development');

    Route::get('/branding-and-logo-design', function () {
        return view('frontend.service-page.branding-and-logo-design');
    })->name('branding-and-logo-design');

    Route::get('/application-design', function () {
        return view('frontend.service-page.application-design');
    })->name('application-design');
});

Route::resource('contacts', ContactController::class);

Route::post('/', [inquriyController::class, 'store'])->name('inquiry.store');
Route::post('/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');



// ============================================= Admin Route ==========================================================

Route::get('admin/login', [adminController::class, 'showLogin'])->name('admin-login');
Route::post('admin/login', [adminController::class, 'login'])->name('admin-data');
Route::post('admin/logout', [adminController::class, 'logout'])->name('admin.logout');

Route::middleware(AdminAuthMiddleware::class)->group(function () {
    Route::get('admin/dashbord', [adminController::class, 'dashbord'])->name('dashbord');
});
// Route::get('admin/dashbord', [adminController::class, 'dashbord'])
//     ->middleware(AdminAuthMiddleware::class) // Use FQCN here
//     ->name('dashbord');// Route::get('/admin/dashbord', function () {
//     return view('admin.dashbord');
// })->name('dashbord');

// Route::get('/admin/login', function () {
//     return view('admin.login');
// })->name('admin-login');
