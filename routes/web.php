<?php

use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\Admin\AdminAddBlogComponent;
use App\Http\Livewire\Admin\AdminAddCategoriesComponent;
use App\Http\Livewire\Admin\AdminAddJobComponent;
use App\Http\Livewire\Admin\AdminAddServiceComponent;
use App\Http\Livewire\Admin\AdminBlogComponent;
use App\Http\Livewire\Admin\AdminCategoriesComponent;
use App\Http\Livewire\BlogDetailsComponent;
use App\Http\Livewire\BlogsComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\FaqsComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\JobDetailsComponent;
use App\Http\Livewire\JobsComponent;
use App\Http\Livewire\ServiceDetailsComponent;
use App\Http\Livewire\ServicesComponent;
use App\Http\Livewire\TeamComponent;
use App\Http\Livewire\TeamDetailsComponent;
use App\Http\Livewire\Admin\AdminContactComponent;
use App\Http\Livewire\Admin\AdminEditBlogComponent;
use App\Http\Livewire\Admin\AdminEditCategoriesComponent;
use App\Http\Livewire\Admin\AdminEditJobComponent;
use App\Http\Livewire\Admin\AdminEditServiceComponent;
use App\Http\Livewire\Admin\AdminJobApplicationComponent;
use App\Http\Livewire\Admin\AdminJobComponent;
use App\Http\Livewire\Admin\AdminServiceComponent;
use App\Http\Livewire\User\UserDashboardComponent;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', HomeComponent::class);
Route::get('/about-us', AboutComponent::class)->name('about');
Route::get('/contact-us', ContactComponent::class)->name('contact');
Route::get('/services', ServicesComponent::class)->name('services');
Route::get('/blogs', BlogsComponent::class)->name('blogs');
Route::get('/faqs', FaqsComponent::class)->name('faqs');
Route::get('/jobs', JobsComponent::class)->name('jobs');
Route::get('/team', TeamComponent::class)->name('team');

Route::get('/service/{serviceId}', ServiceDetailsComponent::class)->name('service.detail');
// Route::get('/service-details', ServiceDetailsComponent::class)->name('service.detail');
Route::get('/blog-details/{blogId}', BlogDetailsComponent::class)->name('blog.detail');
Route::get('/job-details/{jobId}', JobDetailsComponent::class)->name('job.detail');
Route::get('/team-details', TeamDetailsComponent::class)->name('team.detail');


//For User
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
});

//For Admin
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'authadmin'
])->group(function () {
    Route::get('/admin/services', AdminServiceComponent::class)->name('admin.services');
    Route::get('/admin/services/add', AdminAddServiceComponent::class)->name('admin.addservice');
    Route::get('/admin/services/edit/{serviceId}', AdminEditServiceComponent::class)->name('admin.editservice');

    // Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
    Route::get('/admin/jobs', AdminJobComponent::class)->name('admin.jobs');
    Route::get('/admin/categories', AdminCategoriesComponent::class)->name('admin.categories');
    Route::get('/admin/blogs', AdminBlogComponent::class)->name('admin.blogs');

    Route::get('/admin/job/add', AdminAddJobComponent::class)->name('admin.addjob');
    Route::get('/admin/categories/add', AdminAddCategoriesComponent::class)->name('admin.addcategory');
    Route::get('/admin/blogs/add', AdminAddBlogComponent::class)->name('admin.addblog');

    Route::get('/admin/product/edit/{job_id}', AdminEditJobComponent::class)->name('admin.editjob');
    Route::get('/admin/categories/edit/{category_slug}', AdminEditCategoriesComponent::class)->name('admin.editcategory');
    Route::get('/admin/blogs/edit/{blog_id}', AdminEditBlogComponent::class)->name('admin.editblog');

    // Route::get('/admin/slider', AdminHomeSliderComponent::class)->name('admin.homeslider');
    // Route::get('/admin/slider/add', AdminAddHomeSliderComponent::class)->name('admin.addhomeslider');
    // Route::get('/admin/slider/edit/{slide_id}', AdminEditHomeSliderComponent::class)->name('admin.edithomeslider');

    // Route::get('/admin/coupons', AdminCouponsComponent::class)->name('admin.coupons');
    // Route::get('/admin/coupons/add', AdminAddCouponsComponent::class)->name('admin.addcoupon');
    // Route::get('/admin/coupons/edit/{coupon_id}', AdminEditCouponsComponent::class)->name('admin.editcoupon');

    Route::get('/admin/contact-us', AdminContactComponent::class)->name('admin.contact');
    // Route::get('/admin/settings', AdminSettingComponent::class)->name('admin.settings');

    Route::get('/admin/job-applications', AdminJobApplicationComponent::class)->name('admin.applications');
    // Route::get('/admin/orders/{order_id}', AdminOrderDetailsComponent::class)->name('admin.orderdetails');
});
