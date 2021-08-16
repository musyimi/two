<?php

use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\ExperienceComponent;
use App\Http\Livewire\DedicatedinternetaccessComponent;
use App\Http\Livewire\EthernetaccessComponent;
use App\Http\Livewire\EdgesdwanComponent;
use App\Http\Livewire\BroadbandinternetaccessComponent;
use App\Http\Livewire\DedicatedcloudconnectionComponent;
use App\Http\Livewire\HybriddynamicnetworksComponent;
use App\Http\Livewire\WildixComponent;
use App\Http\Livewire\CustomerpremisesequipmentComponent;
use App\Http\Livewire\FieldserviceComponent;
use App\Http\Livewire\CasestudiesComponent;
use App\Http\Livewire\SmartfibreComponent;
use App\Http\Livewire\ContactusComponent;
use App\Http\Livewire\AskforfibreComponent;
use App\Http\Livewire\CoverageComponent;
use App\Http\Livewire\OffersComponent;
use App\Http\Livewire\HomefibreComponent;
use App\Http\Livewire\SecurenetComponent;
use App\Http\Livewire\FivegprivatelteComponent;
use App\Http\Livewire\EntertainmentComponent;
use App\Http\Livewire\HomecctvComponent;
use App\Http\Livewire\IotworldComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
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

Route::get('/',HomeComponent::class);
Route::get('/about',AboutComponent::class);
Route::get('/experience',ExperienceComponent::class);
Route::get('/dedicated',DedicatedinternetaccessComponent::class);
Route::get('/ethernet',EthernetaccessComponent::class);
Route::get('/edge',EdgesdwanComponent::class);
Route::get('/broadband',BroadbandinternetaccessComponent::class);
Route::get('/dedicatedcloud',DedicatedcloudconnectionComponent::class);
Route::get('/hybrid',HybriddynamicnetworksComponent::class);
Route::get('/wildix',WildixComponent::class);
Route::get('/customer',CustomerpremisesequipmentComponent::class);
Route::get('/field',FieldserviceComponent::class);
Route::get('/casestudies',CasestudiesComponent::class);
Route::get('/fieldservice',FieldserviceComponent::class);
Route::get('/smartfibre',SmartfibreComponent::class);
Route::get('/contactus',ContactusComponent::class);
Route::get('/askforfibre',AskforfibreComponent::class);
Route::get('/coverage',CoverageComponent::class);
Route::get('/offers',OffersComponent::class);
Route::get('/homefibre',HomefibreComponent::class);
Route::get('/securenet',SecurenetComponent::class);
Route::get('/fiveglte',FivegprivatelteComponent::class);
Route::get('/entertainment',EntertainmentComponent::class);
Route::get('/homecctv',HomecctvComponent::class);
Route::get('/iotworld',IotworldComponent::class);



// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

//user
Route::middleware(['auth:sanctum', 'verified'])->group( function () {
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');

});

//admin
Route::middleware(['auth:sanctum', 'verified','authadmin'])->group( function () {
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
});
