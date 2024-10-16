<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\Calculator\CalculatorController;
use App\Http\Controllers\About\AboutController;
use App\Http\Controllers\Search\SearchController;
use App\Http\Controllers\Notification\NotificationController;
use App\Http\Controllers\Settings\SettingsController;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\CarbonCredit\CarbonCreditController;
use App\Http\Controllers\Microfinance\MicrofinanceController;
use App\Http\Controllers\Sponsor\SponsorshipController;
use App\Http\Controllers\Partner\PartnerController;
use App\Http\Controllers\Services\ServicesController;
use App\Http\Controllers\KnowledgeCenter\KnowledgeCenterController;
use App\Http\Controllers\Project\ProjectController;
use App\Http\Controllers\Emission\EmissionController;


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
//include apps
include('hub.php');


//
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);

});


//test page
Route::get('test', function () {return Inertia::render('TestPage');});
//routes

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[AboutController::class,'index'])->name('about');
Route::get('/contact',[ContactController::class,'index'])->name('contact');
Route::get('/carbon/credit',[CarbonCreditController::class,'index'])->name('carbon-credit');
Route::get('microfinance/introduction', [MicrofinanceController::class, 'index'])->name('microfinance.introduction');
Route::get('microfinance/membership',[MicrofinanceController::class,'membership'])->name('microfinance.membership');
Route::get('calculator/guest',[CalculatorController::class,'guest_emission_calculator'])->name('calculator.guest');
Route::get('microfinance/loan-application',[MicrofinanceController::class,'loanApplication'])->name('microfinance.loan-application-page');
Route::get('sponsor/project',[SponsorshipController::class,'projectSponsorship'])->name('sponsor.project');
Route::get('partner/microfinance', [PartnerController::class, 'microfinancePartnership'])->name('partner.microfinance-partnership');
Route::get('carbon/project-development', [CarbonCreditController::class, 'projectDevelopment'])->name('carbon.project-development');
Route::get('carbon/buying-carbon-credit', [CarbonCreditController::class, 'purchaseCarbonCredit'])->name('carbon.purchase-carboncredit');
Route::get('carbon/offsetting',[CarbonCreditController::class, 'emissionOffsetting'])->name('carbon.offestting');
Route::get('carbon/financing', [CarbonCreditController::class, 'carbonFinancing'])->name('carbon.financing');
Route::get('services',[ServicesController::class,'index'] )->name('services');
Route::post('contact/store',[ContactController::class,'store'])->name('contact.store');
Route::get('microfinance/fundraising', [MicrofinanceController::class,'fundraising'])->name('microfinance.fundraising');
Route::get('about/carbon-offsetting-guide', [AboutController::class, 'carbonOffsetGuide'])->name('about.carbon-offset-guide');
Route::get('/about/emission-tracking',[AboutController::class,'trackingEmissions'])->name('about.emission-tracking');
Route::get('about/carbon-credit-registration', [AboutController::class, 'carbonCreditRegistration'])->name('about.carbon-credit-registration');
Route::get('about/project-verification-certification',[AboutController::class,'verificationCertification'])->name('about.verification-certification');
Route::get('about/carbon-credit-trading', [AboutController::class, 'carbonCreditTrading'])->name('about.carbon-redit-trading');
Route::get('about/capacity-building-training', [AboutController::class, 'capacityBuildingTraining'])->name('about.capacity-building-training');
Route::get('hub/welcome', [KnowledgeCenterController::class, 'index'])->name('hub.welcome');
Route::get('projects',[ProjectController::class,'index'])->name('projects.welcome');
Route::get('project/details/{id}',[ProjectController::class,'show'])->name('project.show');
Route::get('project/developer',[ProjectController::class,'developProject'])->name('project.developer');
Route::get('project/support',[ProjectController::class,'supportProject'])->name('project.support');
Route::get('project/help',[ProjectController::class,'helpProject'])->name('project.help');
Route::get('emission/calculate',[EmissionController::class,'emissionCalculator'])->name('emission.calculate');
Route::get('carbon/market',[CarbonCreditController::class,'carbonMarket'])->name('carbon.market');
Route::get('carbon/offset-emissions',[CarbonCreditController::class,'offsetEmissions'])->name('carbon.offset-emissions');



















//authenticated routes
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

Route::get('/dashboard',[DashboardController::class,'index',])->name('dashboard');
Route::post('/create-profile',[ProfileController::class,'store'])->name('create-profile');
//Route::get('/calculate/{any}',[CalculatorController::class,'index'])->name('caliculate.show');
Route::get('/search',[SearchController::class,'index'])->name('search');
Route::get('/notification',[NotificationController::class,'index'])->name('notification');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/settings',[SettingsController::class,'index'])->name('settings');

//culculator
Route::get('/calculate/energy-consumption',[CalculatorController::class,'energyView'])->name('energy-consumption.show');
Route::get('/calculate/water-usage',[CalculatorController::class,'energyView'])->name('water-usage.show');
Route::get('/calculate/waste-management',[CalculatorController::class,'energyView'])->name('waste-management.show');
Route::get('/calculate/transport',[CalculatorController::class,'energyView'])->name('transport.show');
Route::get('/calculate/food-diet',[CalculatorController::class,'energyView'])->name('food-diet.show');
Route::get('/calculate/goods',[CalculatorController::class,'energyView'])->name('goods.show');
Route::get('/calculate/land-use',[CalculatorController::class,'energyView'])->name('land-use.show');
Route::get('/calculate/building',[CalculatorController::class,'energyView'])->name('building.show');
Route::get('/calculate/supply-chain',[CalculatorController::class,'energyView'])->name('supply-chain.show');

//Carbon Credit




});




// Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
//     return Inertia::render('Dashboard');
// })->name('dashboard');






