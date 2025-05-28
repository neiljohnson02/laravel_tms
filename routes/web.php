<?php




use App\Http\Controllers\NavbarController;
use App\Navbar;
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
    return view('auth.login');
});

Route::get('welcome','NavbarController@welcome')->name('welcome');
Route::get('company/company','NavbarController@company')->name('company.company');
Route::get('groupoftour/groupoftour','NavbarController@groupoftour')->name('groupoftour.groupoftour');
Route::get('package/package','NavbarController@package')->name('package.package');
Route::get('honeymoon/honeymoon','NavbarController@honeymoon')->name('honeymoon.honeymoon');
Route::get('wedding/wedding','NavbarController@wedding')->name('wedding.wedding');
Route::get('contact/contact','NavbarController@contact')->name('contact.contact');


Route::get('home/dubai1','NavbarController@dubai1')->name('home.dubai1');
Route::get('home/singapore1','NavbarController@singapore1')->name('home.singapore1');
Route::get('home/france1','NavbarController@france1')->name('home.france1');
Route::get('home/china1','NavbarController@china1')->name('home.china1');
Route::get('home/usa1','NavbarController@usa1')->name('home.usa1');
Route::get('home/germany1','NavbarController@germany1')->name('home.germany1');

// premium tour welcome page
Route::get('premium/dubai2','NavbarController@dubai2')->name('premium.dubai2');
Route::get('premium/france2','NavbarController@france2')->name('premium.france2');
Route::get('premium/maldivs2','NavbarController@maldivs2')->name('premium.maldivs2');
Route::get('premium/germany2','NavbarController@germany2')->name('premium.germany2');
Route::get('premium/tajmahal2','NavbarController@tajmahal2')->name('premium.tajmahal2');
Route::get('premium/southafrica','NavbarController@southafrica')->name('premium.southafrica');

// your might tour
route::get('dubai1desert','NavbarController@dubai1desert')->name('dubai1desert');
route::get('dubai1waterpark','NavbarController@dubai1waterpark')->name('dubai1waterpark');
route::get('dubai1musium','NavbarController@dubai1musium')->name('dubai1musium');

//ultimate group of tour

route::get('groupoftour/dubai3','NavbarController@dubai3')->name('groupoftour.dubai3');
route::get('groupoftour/australia3','NavbarController@australia3')->name('groupoftour.australia3');
route::get('groupoftour/tajmahal3','NavbarController@tajmahal3')->name('groupoftour.tajmahal3');
route::get('groupoftour/goa3','NavbarController@goa3')->name('groupoftour.goa3');
route::get('groupoftour/paris3','NavbarController@paris3')->name('groupoftour.paris3');
route::get('groupoftour/france3','NavbarController@france3')->name('groupoftour.france3');
route::get('groupoftour/usa3','NavbarController@usa3')->name('groupoftour.usa3');
route::get('groupoftour/mountrush3','NavbarController@mountrush3')->name('groupoftour.mountrush3');
route::get('groupoftour/germany3','NavbarController@germany3')->name('groupoftour.germany3');
route::get('groupoftour/berlin3','NavbarController@berlin3')->name('groupoftour.berlin3');
route::get('groupoftour/italy3','NavbarController@italy3')->name('groupoftour.italy3');
route::get('groupoftour/rome3','NavbarController@rome3')->name('groupoftour.rome3');

//reservation group of tour

route::get('groupoftour/grpresdubai1','NavbarController@grpresdubai1')->name('groupoftour.grpresdubai1');
route::get('groupoftour/grpreskerala','NavbarController@grpreskerala')->name('groupoftour.grpreskerala');
route::get('groupoftour/grprestajmahal','NavbarController@grprestajmahal')->name('groupoftour.grprestajmahal');
route::get('groupoftour/grpresgoa','NavbarController@grpresgoa')->name('groupoftour.grpresgoa');
route::get('groupoftour/grpresindonesia','NavbarController@grpresindonesia')->name('groupoftour.grpresindonesia');
route::get('groupoftour/grprestokyo','NavbarController@grprestokyo')->name('groupoftour.grprestokyo');
route::get('groupoftour/grpresbankok','NavbarController@grpresbankok')->name('groupoftour.grpresbankok');
route::get('groupoftour/grpressingapore','NavbarController@grpressingapore')->name('groupoftour.grpressingapore');
route::get('groupoftour/grpreskawasanfalls','NavbarController@grpreskawasanfalls')->name('groupoftour.grpreskawasanfalls');
route::get('groupoftour/grpresturkey','NavbarController@grpresturkey')->name('groupoftour.grpresturkey');
route::get('groupoftour/grpressouthkorea','NavbarController@grpressouthkorea')->name('groupoftour.grpressouthkorea');
route::get('groupoftour/grpresrussia','NavbarController@grpresrussia')->name('groupoftour.grpresrussia');


// honeymoon tour india

route::get('honeymoon/hnykashmir','NavbarController@hnykashmir')->name('honeymoon.hnykashmir');
route::get('honeymoon/hnymanali','NavbarController@hnymanali')->name('honeymoon.hnymanali');
route::get('honeymoon/hnyallepey','NavbarController@hnyallepey')->name('honeymoon.hnyallepey');
route::get('honeymoon/hnyooty','NavbarController@hnyooty')->name('honeymoon.hnyooty');
route::get('honeymoon/hnydharamshala','NavbarController@hnydharamshala')->name('honeymoon.hnydharamshala');
route::get('honeymoon/hnyshimla','NavbarController@hnyshimla')->name('honeymoon.hnyshimla');
route::get('honeymoon/hnyauli','NavbarController@hnyauli')->name('honeymoon.hnyauli');
route::get('honeymoon/hnyandaman','NavbarController@hnyandaman')->name('honeymoon.hnyandaman');
route::get('honeymoon/hnylakshadweep','NavbarController@hnylakshadweep')->name('honeymoon.hnylakshadweep');
route::get('honeymoon/hydarjeeling','NavbarController@hydarjeeling')->name('honeymoon.hydarjeeling');
route::get('honeymoon/hnygoa','NavbarController@hnygoa')->name('honeymoon.hnygoa');
route::get('honeymoon/hnyladakh','NavbarController@hnyladakh')->name('honeymoon.hnyladakh');


//honeymoon tour international

route::get('honeymoon/hnyintbali','NavbarController@hnyintbali')->name('honeymoon.hnyintbali');
route::get('honeymoon/hnyintnewzeland','NavbarController@hnyintnewzeland')->name('honeymoon.hnyintnewzeland');
route::get('honeymoon/hnyintcolombo','NavbarController@hnyintcolombo')->name('honeymoon.hnyintcolombo');
route::get('honeymoon/hnyintmaldivs','NavbarController@hnymaldivs')->name('honeymoon.hnyintmaldivs');
route::get('honeymoon/hnyintisland','NavbarController@hnyintisland')->name('honeymoon.hnyintisland');
route::get('honeymoon/hnyintcarotia','NavbarController@hnyintcarotia')->name('honeymoon.hnyintcarotia');
route::get('honeymoon/hnyintitaly','NavbarController@hnyintitaly')->name('honeymoon.hnyintitaly');
route::get('honeymoon/hnyintgermany','NavbarController@hnyintgermany')->name('honeymoon.hnyintgermany');
route::get('honeymoon/hnyintgreece','NavbarController@hnyintgreece')->name('honeymoon.hnyintgreece');
route::get('honeymoon/hnyintsouthafrica','NavbarController@hnyintsouthafrica')->name('honeymoon.hnyintsouthafrica');
route::get('honeymoon/hnyintaustralia','NavbarController@hnyintaustralia')->name('honeymoon.hnyintaustralia');
route::get('honeymoon/hnyintargentina','NavbarController@hnyintargentina')->name('honeymoon.hnyintargentina');
route::get('honeymoon/hnyintbrazil','NavbarController@hnyintbrazil')->name('honeymoon.hnyintbrazil');
route::get('honeymoon/hnyintbarbados','NavbarController@hnyintbarbados')->name('honeymoon.hnyintbarbados');
route::get('honeymoon/hnyintfrance','NavbarController@hnyintfrance')->name('honeymoon.hnyintfrance');
route::get('honeymoon/hnyinturuguay','NavbarController@hnyinturuguay')->name('honeymoon.hnyinturuguay');



//packages tour 

route::get('package/packindia','NavbarController@packindia')->name('package.packindia');
route::get('package/packafrica','NavbarController@packafrica')->name('package.packafrica');
route::get('package/packamerica','NavbarController@packamerica')->name('package.packamerica');
route::get('package/packasia','NavbarController@packasia')->name('package.packasia');
route::get('package/packeurope','NavbarController@packeurope')->name('package.packeurope');

route::get('package/packindia1','NavbarController@packindia1')->name('package.packindia1');
route::get('package/packindia2','NavbarController@packindia2')->name('package.packindia2');
route::get('package/packindia3','NavbarController@packindia3')->name('package.packindia3');
route::get('package/packindia4','NavbarController@packindia4')->name('package.packindia4');
route::get('package/packindia5','NavbarController@packindia5')->name('package.packindia5');
route::get('package/packindia6','NavbarController@packindia6')->name('package.packindia6');
route::get('package/packindia7','NavbarController@packindia7')->name('package.packindia7');
route::get('package/packindia8','NavbarController@packindia8')->name('package.packindia8');
route::get('package/packindia9','NavbarController@packindia9')->name('package.packindia9');
route::get('package/packindia10','NavbarController@packindia10')->name('package.packindia10');
route::get('package/packindia11','NavbarController@packindia11')->name('package.packindia11');
route::get('package/packindia12','NavbarController@packindia12')->name('package.packindia12');
route::get('package/packindia13','NavbarController@packindia13')->name('package.packindia13');
route::get('package/packindia14','NavbarController@packindia14')->name('package.packindia14');
route::get('package/packindia15','NavbarController@packindia15')->name('package.packindia15');
route::get('package/packindia16','NavbarController@packindia16')->name('package.packindia16');
route::get('package/packindia17','NavbarController@packindia17')->name('package.packindia17');
route::get('package/packindia18','NavbarController@packindia18')->name('package.packindia18');
route::get('package/packindia19','NavbarController@packindia19')->name('package.packindia19');
route::get('package/packindia20','NavbarController@packindia20')->name('package.packindia20');

// package africa

route::get('package/packafrica1','NavbarController@packafrica1')->name('package.packafrica1');
route::get('package/packafrica2','NavbarController@packafrica2')->name('package.packafrica2');
route::get('package/packafrica3','NavbarController@packafrica3')->name('package.packafrica3');
route::get('package/packafrica4','NavbarController@packafrica4')->name('package.packafrica4');
route::get('package/packafrica5','NavbarController@packafrica5')->name('package.packafrica5');
route::get('package/packafrica6','NavbarController@packafrica6')->name('package.packafrica6');
route::get('package/packafrica7','NavbarController@packafrica7')->name('package.packafrica7');
route::get('package/packafrica8','NavbarController@packafrica8')->name('package.packafrica8');
route::get('package/packafrica9','NavbarController@packafrica9')->name('package.packafrica9');
route::get('package/packafrica10','NavbarController@packafrica10')->name('package.packafrica10');
route::get('package/packafrica11','NavbarController@packafrica11')->name('package.packafrica11');
route::get('package/packafrica12','NavbarController@packafrica12')->name('package.packafrica12');
route::get('package/packafrica13','NavbarController@packafrica13')->name('package.packafrica13');
route::get('package/packafrica14','NavbarController@packafrica14')->name('package.packafrica14');
route::get('package/packafrica15','NavbarController@packafrica15')->name('package.packafrica15');
route::get('package/packafrica16','NavbarController@packafrica16')->name('package.packafrica16');


//package america

route::get('package/packamerica1','NavbarController@packamerica1')->name('package.packamerica1');
route::get('package/packamerica2','NavbarController@packamerica2')->name('package.packamerica2');
route::get('package/packamerica3','NavbarController@packamerica3')->name('package.packamerica3');
route::get('package/packamerica4','NavbarController@packamerica4')->name('package.packamerica4');
route::get('package/packamerica5','NavbarController@packamerica5')->name('package.packamerica5');
route::get('package/packamerica6','NavbarController@packamerica6')->name('package.packamerica6');
route::get('package/packamerica7','NavbarController@packamerica7')->name('package.packamerica7');
route::get('package/packamerica8','NavbarController@packamerica8')->name('package.packamerica8');
route::get('package/packamerica9','NavbarController@packamerica9')->name('package.packamerica9');
route::get('package/packamerica10','NavbarController@packamerica10')->name('package.packamerica10');
route::get('package/packamerica11','NavbarController@packamerica11')->name('package.packamerica11');
route::get('package/packamerica12','NavbarController@packamerica12')->name('package.packamerica12');
route::get('package/packamerica13','NavbarController@packamerica13')->name('package.packamerica13');
route::get('package/packamerica14','NavbarController@packamerica14')->name('package.packamerica14');
route::get('package/packamerica15','NavbarController@packamerica15')->name('package.packamerica15');
route::get('package/packamerica16','NavbarController@packamerica16')->name('package.packamerica16');


// package europe
route::get('package/packeurope1','NavbarController@packeurope1')->name('package.packeurope1');
route::get('package/packeurope2','NavbarController@packeurope2')->name('package.packeurope2');
route::get('package/packeurope3','NavbarController@packeurope3')->name('package.packeurope3');
route::get('package/packeurope4','NavbarController@packeurope4')->name('package.packeurope4');
route::get('package/packeurope5','NavbarController@packeurope5')->name('package.packeurope5');
route::get('package/packeurope6','NavbarController@packeurope6')->name('package.packeurope6');
route::get('package/packeurope7','NavbarController@packeurope7')->name('package.packeurope7');
route::get('package/packeurope8','NavbarController@packeurope8')->name('package.packeurope8');
route::get('package/packeurope9','NavbarController@packeurope9')->name('package.packeurope9');
route::get('packeurope10','NavbarController@packeurope10')->name('package.packeurope10');
route::get('package/packeurope11','NavbarController@packeurope11')->name('package.packeurope11');
route::get('package/packeurope12','NavbarController@packeurope12')->name('package.packeurope12');
route::get('package/packeurope13','NavbarController@packeurope13')->name('package.packeurope13');
route::get('package/packeurope14','NavbarController@packeurope14')->name('package.packeurope14');
route::get('package/packeurope15','NavbarController@packeurope15')->name('package.packeurope15');
route::get('package/package/packeurope16','NavbarController@packeurope16')->name('package.packeurope16');
route::get('package/package/packeurope17','NavbarController@packeurope17')->name('package.packeurope17');
route::get('package/packeurope18','NavbarController@packeurope18')->name('package.packeurope18');
route::get('package/packeurope19','NavbarController@packeurope19')->name('package.packeurope19');
route::get('package/packeurope20','NavbarController@packeurope20')->name('package.packeurope20');


//package asia
route::get('package/packasia1','NavbarController@packasia1')->name('package.packasia1');
route::get('package/packasia2','NavbarController@packasia2')->name('package.packasia2');
route::get('package/packasia3','NavbarController@packasia3')->name('package.packasia3');
route::get('package/packasia4','NavbarController@packasia4')->name('package.packasia4');
route::get('package/packasia5','NavbarController@packasia5')->name('package.packasia5');
route::get('package/packasia6','NavbarController@packasia6')->name('package.packasia6');
route::get('package/packasia7','NavbarController@packasia7')->name('package.packasia7');
route::get('package/packasia8','NavbarController@packasia8')->name('package.packasia8');
route::get('package/packasia9','NavbarController@packasia9')->name('package.packasia9');
route::get('package/packasia10','NavbarController@packasia10')->name('package.packasia10');
route::get('package/packasia11','NavbarController@packasia11')->name('package.packasia11');
route::get('package/packasia12','NavbarController@packasia12')->name('package.packasia12');
route::get('package/packasia13','NavbarController@packasia13')->name('package.packasia13');
route::get('package/packasia14','NavbarController@packasia14')->name('package.packasia14');
route::get('package/packasia15','NavbarController@packasia15')->name('package.packasia15');
route::get('package/packasia16','NavbarController@packasia16')->name('package.packasia16');
route::get('package/packasia17','NavbarController@packasia17')->name('package.packasia17');
route::get('package/packasia18','NavbarController@packasia18')->name('package.packasia18');
route::get('package/packasia19','NavbarController@packasia19')->name('package.packasia19');
route::get('package/packasia20','NavbarController@packasia20')->name('package.packasia20');
route::get('package/packasia21','NavbarController@packasia21')->name('package.packasia21');
route::get('package/packasia22','NavbarController@packasia22')->name('package.packasia22');
route::get('package/packasia23','NavbarController@packasia23')->name('package.packasia23');
route::get('package/packasia24','NavbarController@packasia24')->name('package.packasia24');


//contact page
route::get('contact/contact1','NavbarController@contact1')->name('contact.contact1');
route::get('contact/contact2','NavbarController@contact2')->name('contact.contact2');
route::get('contact/contact3','NavbarController@contact3')->name('contact.contact3');
route::get('contact/contact4','NavbarController@contact4')->name('contact.contact4');
route::get('contact/contact5','NavbarController@contact5')->name('contact.contact5');
route::get('contact/contact6','NavbarController@contact6')->name('contact.contact6');
route::get('contact/contact7','NavbarController@contact7')->name('contact.contact7');
route::get('contact/contact8','NavbarController@contact8')->name('contact.contact8');
route::get('contact/contact9','NavbarController@contact9')->name('contact.contact9');
route::get('contact/contact10','NavbarController@contact10')->name('contact.contact10');
route::get('contact/contact11','NavbarController@contact11')->name('contact.contact11');
route::get('contact/contact12','NavbarController@contact12')->name('contact.contact12');
route::get('dashboard/welcome','WelcomeController@index')->name('dashboard.welcome');


// admin dashboard
route::get('dashboard/admin','NavbarController@admin')->name('dashboard/admin');

//admin dashboard group of tours

route::get('dashboard/grp','NavbarController@admingrp')->name('dashboard/grp');
route::get('dashboard/packages','NavbarController@adminpackages')->name('dashboard/packages');
route::get('dashboard/honeymoon','NavbarController@adminhoneymoon')->name('dashboard/honeymoon');
route::get('dashboard/contact','NavbarController@admincontact')->name('dashboard/contact');
route::get('dashboard/wedding','NavbarController@adminwedding')->name('dashboard/wedding');
route::get('dashboard/profit','NavbarController@profit')->name('dashboard/profit');
route::get('dashboard/expense','NavbarController@adminexpense')->name('dashboard/expense');
route::get('dashboard/grptable','NavbarController@grptable')->name('dashboard/grptable');
route::get('add','NavbarController@add')->name('add');

// backend code 
// Route::get('/', function () {
//     return view('dashboard/grp');
// });

// Route::get('add-toursit',function(){
//   return view('dashboard/grp');
// });

//  Route::post('add-toursit',[NavbarController::class,'addtourist'])->name('addtourist');

//  //data show table code 

//  Route::get('/get-tourist',function(){
//      return view('dashboard/grptable');
//       });

// Route::put('/students/{id}', [JohnsonControllerController::class, 'updateStudent']);



 Route::get('/get-all-tourist',[NavbarController::class,'gettourist'])->name('gettourist');


 Route::get('editUser/{id}',[NavbarController::class,'gettouristsData'])->name('gettouristsData');
 Route::post('update-dataUser/',[NavbarController::class,'updatetourist'])->name('updatetourist');
 Route::get('delete-data/{id}',[NavbarController::class,'deletedata'])->name('deletedata');

 
 
//welcome formpage 




use App\Http\Controllers\AuthController;

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('welcome', [NavbarController::class, 'welcome'])
    ->middleware('auth')
    ->name('welcome');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Use App\Http\Controllers\WelcomeController;


Route::get('/dashboard.welcome', [WelcomeController::class, 'index'])->name('welcome.index');

Route::post('welcomeinsert', [WelcomeController::class, 'store'])->name('welcomeinsert');

// Route::delete('/formpage/{id}', [WelcomeController::class, 'destroy'])->name('formpage.destroy');
Route::get('/user/{id}/edit', [WelcomeController::class, 'edit'])->name('user.edit');
Route::delete('/user/{id}', [WelcomeController::class, 'destroy'])->name('user.destroy');
Route::post('/send-email/{id}', [WelcomeController::class, 'sendMail'])->name('send.email');



use App\Http\Controllers\TrendingTourController;

Route::post('/submit-tour', [TrendingTourController::class, 'store'])->name('submit.tour');
Route::get('/fetch-tours', [TrendingTourController::class, 'fetchAll'])->name('fetch.tours');
Route::delete('/trendingtour/{id}', [TrendingTourController::class, 'destroy'])->name('trendingtour.destroy');
Route::post('/trendingtour-email/{id}',[TrendingTourController::class, 'sendMail'])->name('trendingtour.email');

Route::get('/dashboard/trendingtourtable', function(){
    return view('dashboard.trendingtourtable');
});

use App\Http\Controllers\PremiumTourController;

Route::post('/premium/dubai2', [PremiumTourController::class, 'store'])->name('premium.tour');
Route::get('/premium-tours', [PremiumTourController::class, 'index'])->name('premium.tours');
Route::delete('/premiumtour/{id}', [PremiumTourController::class, 'destroy'])->name('premiumtour.destroy');
Route::post('/premiumtour-email/{id}',[PremiumTourController::class, 'sendMail'])->name('premiumtour.email');
Route::get('/dashboard/admin', [PremiumTourController::class, 'static'])->name('dashboard.admin');


use App\Http\Controllers\PremiumPaymentController;

Route::post('/premium-payment/store', [PremiumPaymentController::class, 'store'])->name('premium-payment.store');

Route::get('/payment/premium-tour', [PremiumPaymentController::class, 'getPremiumTours'])
     ->name('payment.premiumtour');
Route::delete('/premiumtourpayment/{id}', [PremiumPaymentController::class, 'destroy'])->name('premiumtourpayment.destroy');
Route::post('/premiumtourpayment-email/{id}',[PremiumPaymentController::class, 'sendMail'])->name('premiumtourpayment.email');


use App\Http\Controllers\GroupofTourController;
use App\Http\Controllers\GroupoftourPaymentController;


Route::post('/group/australia3', [GroupofTourController::class, 'store'])->name('group.tour');
Route::get('/group-tours', [GroupofTourController::class, 'index'])->name('group.tours');
Route::delete('/group/{id}', [GroupofTourController::class, 'destroy'])->name('group.destroy');
Route::post('/group-email/{id}',[GroupofTourController::class, 'sendMail'])->name('group.email');
Route::get('/dashboard/admin',[GroupofTourController::class, 'static'])->name('dashboard.admin');


Route::post('/groupoftour-payment/store', [GroupoftourPaymentController::class, 'store'])->name('groupoftour-payment.store');

Route::get('/groupoftour/groupof-tours', [GroupoftourPaymentController::class, 'getgroupofTours'])
     ->name('groupoftour.groupoftours');
Route::delete('/groupoftourpayment/{id}', [GroupoftourPaymentController::class, 'destroy'])->name('groupoftourpayment.destroy');
Route::post('/groupoftourpayment-email/{id}',[GroupoftourPaymentController::class, 'sendMail'])->name('groupoftourpayment.email');


use App\Http\Controllers\HoneymoonPackageController;
use App\Http\Controllers\HoneymoonPaymentController;

Route::post('/honeymoon/hnykashmir', [HoneymoonPackageController::class, 'store'])->name('honeymoon.tour');
Route::get('/honeymoon-tours', [HoneymoonPackageController::class, 'index'])->name('honeymoon.tours');
Route::delete('/honeymoon/{id}', [HoneymoonPackageController::class, 'destroy'])->name('honeymoon.destroy');
Route::post('/honeymoon-email/{id}',[HoneymoonPackageController::class, 'sendMail'])->name('honeymoon.email');
Route::get('/dashboard/admin',[HoneymoonPackageController::class, 'honeymoonstatic'])->name('dashboard.admin');

Route::post('/honeymoon-payment/store', [HoneymoonPaymentController::class, 'store'])->name('honeymoon-payment.store');

Route::get('/honeymoon/honey-moons', [HoneymoonPaymentController::class, 'getgroupofTours'])
     ->name('honeymoon.honeymoons');
Route::delete('/honeymoonpayment/{id}', [HoneymoonPaymentController::class, 'destroy'])->name('honeymoonpayment.destroy');
Route::post('/honeymoonpayment-email/{id}',[HoneymoonPaymentController::class, 'sendMail'])->name('honeymoonpayment.email');

use App\Http\Controllers\HoneymoonInternationController;
use App\Http\Controllers\HoneymooninternationalPaymentController;

Route::post('/honeymooninternational-payment/store', [HoneymooninternationalPaymentController::class, 'store'])->name('honeymooninternational-payment.store');

Route::get('/honeymooninternational/payment', [HoneymooninternationalPaymentController::class, 'getGroupOfTours'])
    ->name('honeymooninternational.payment');

 Route::delete('/honeymooninternationalpayment/{id}', [HoneymooninternationalPaymentController::class, 'destroy'])->name('honeymooninternationalpayment.destroy');
 Route::post('/honeymooninternationalpayment-email/{id}',[HoneymooninternationalPaymentController::class, 'sendMail'])->name('honeymooninternationalpayment.email');
//
Route::post('/honeymooninternational/hnykashmir', [HoneymoonInternationController::class, 'store'])->name('honeymooninternational.tour');
Route::get('/honeymooninternational-tours', [HoneymoonInternationController::class, 'index'])->name('honeymooninternational.tours');
Route::delete('/honeymooninternational/{id}', [HoneymoonInternationController::class, 'destroy'])->name('honeymooninternational.destroy');
Route::post('/honeymooninternational-email/{id}',[HoneymoonInternationController::class, 'sendMail'])->name('honeymooninternational.email');


use App\Http\Controllers\AfricapackageController;
use App\Http\Controllers\AfricapaymentController;


Route::post('/package/packafrica1', [AfricapackageController::class, 'store'])->name('packafrica.tour');
Route::get('/packafrica-tours', [AfricapackageController::class, 'index'])->name('packafrica.tours');
Route::delete('/packafrica/{id}', [AfricapackageController::class, 'destroy'])->name('packafrica.destroy');
Route::post('/packafrica-email/{id}',[AfricapackageController::class, 'sendMail'])->name('packafrica.email');

Route::post('/packafrica-payment/store', [AfricapaymentController::class, 'store'])->name('packafrica-payment.store');

Route::get('/packafrica/pack-africas', [AfricapaymentController::class, 'getgroupofTours'])
     ->name('packafrica.packafricas');
Route::delete('/packafricapayment/{id}', [AfricapaymentController::class, 'destroy'])->name('packafricapayment.destroy');
Route::post('/packafricapayment-email/{id}',[AfricapaymentController::class, 'sendMail'])->name('packafricapayment.email');
Route::get('/africapayment', [AfricaPaymentController::class, 'index'])->name('africapayment.index');

use App\Http\Controllers\AsiapackageController;
use App\Http\Controllers\AsiapymentController;


Route::post('/package/packasia1', [AsiapackageController::class, 'store'])->name('packasia.tour');
Route::get('/packasia-tours', [AsiapackageController::class, 'index'])->name('packasia.tours');
Route::delete('/packasia/{id}', [AsiapackageController::class, 'destroy'])->name('packasia.destroy');
Route::post('/packasia-email/{id}',[AsiapackageController::class, 'sendMail'])->name('packasia.email');


Route::post('/packasia-payment/store', [AsiapymentController::class, 'store'])->name('packasia-payment.store');

Route::get('/packasia/pack-asias', [AsiapymentController::class, 'getgroupofTours'])
     ->name('packasia.packasias');
Route::delete('/packasiapayment/{id}', [AsiapymentController::class, 'destroy'])->name('packasiapayment.destroy');
Route::post('/packasiapayment-email/{id}',[AsiapymentController::class, 'sendMail'])->name('packasiapayment.email');

use App\Http\Controllers\EuropepackageController;
use App\Http\Controllers\EuropepaymentController;



Route::post('/package/packeurope1', [EuropepackageController::class, 'store'])->name('packeurope.tour');
Route::get('/packeurope-tours', [EuropepackageController::class, 'index'])->name('packeurope.tours');
Route::delete('/packeurope/{id}', [EuropepackageController::class, 'destroy'])->name('packeurope.destroy');
Route::post('/packeurope-email/{id}',[EuropepackageController::class, 'sendMail'])->name('packeurope.email');

Route::post('/packeurope-payment/store', [AsiapymentController::class, 'store'])->name('packeurope-payment.store');

Route::get('/packeurope/pack-europes', [AsiapymentController::class, 'getgroupofTours'])
     ->name('packeurope.packeuropes');
Route::delete('/packeuropepayment/{id}', [AsiapymentController::class, 'destroy'])->name('packeuropepayment.destroy');
Route::post('/packeuropepayment-email/{id}',[AsiapymentController::class, 'sendMail'])->name('packeuropepayment.email');

use App\Http\Controllers\IndiapackageController;
use App\Http\Controllers\IndiapaymentController;

Route::post('/package/packindia1', [IndiapackageController::class, 'store'])->name('packindia.tour');
Route::get('/packindia-tours', [IndiapackageController::class, 'index'])->name('packindia.tours');
Route::delete('/packindia/{id}', [IndiapackageController::class, 'destroy'])->name('packindia.destroy');
Route::post('/packindia-email/{id}',[IndiapackageController::class, 'sendMail'])->name('packindia.email');



Route::post('/packindia-payment/store', [IndiapaymentController::class, 'store'])->name('packindia-payment.store');

Route::get('/packindia/pack-indias', [IndiapaymentController::class, 'getgroupofTours'])
     ->name('packindia.packindias');
Route::delete('/packindiapayment/{id}', [IndiapaymentController::class, 'destroy'])->name('packindiapayment.destroy');
Route::post('/packindiapayment-email/{id}',[IndiapaymentController::class, 'sendMail'])->name('packindiapayment.email');

use App\Http\Controllers\AmericapackageController;
use App\Http\Controllers\AmericapaymentController;

Route::post('/package/packamerica1', [AmericapackageController::class, 'store'])->name('packamerica.tour');
Route::get('/packamerica-tours', [AmericapackageController::class, 'index'])->name('packamerica.tours');
Route::delete('/packamerica/{id}', [AmericapackageController::class, 'destroy'])->name('packamerica.destroy');
Route::post('/packamerica-email/{id}',[AmericapackageController::class, 'sendMail'])->name('packamerica.email');


Route::post('/packamerica-payment/store', [AmericapaymentController::class, 'store'])->name('packamerica-payment.store');

Route::get('/packamerica/pack-americas', [AmericapaymentController::class, 'getgroupofTours'])
     ->name('packamerica.packamericas');
Route::delete('/packiamericapayment/{id}', [AmericapaymentController::class, 'destroy'])->name('packamericapayment.destroy');
Route::post('/packamericapayment-email/{id}',[AmericapaymentController::class, 'sendMail'])->name('packamericapayment.email');


use App\Http\Controllers\ProfitController;

Route::get('/profit-dashboard', [ProfitController::class, 'profitDashboard']);

route::get('dashboard/profit','NavbarController@profitDashboard')->name('dashboard.profit');


use App\Http\Controllers\ExpesiveController;

Route::get('/expensive-summary', [ExpesiveController::class, 'generateSummary'])->name('expensive.summary');
Route::get('/generate-summary', [ExpesiveController::class, 'generateSummary'])->name('expensive.summary');;
Route::get('/summary', [ExpesiveController::class, 'showSummary']);


use App\Http\Controllers\AdminController;

Route::get('/dashboard/admin', [AdminController::class , 'dashboard'])->name('dashboard.admin');