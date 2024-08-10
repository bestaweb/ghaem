<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Mobile\TestController;
use App\Models\Dashboard\Menu_panel;
use App\Models\Dashboard\Submenu_panel;
use App\Models\Menu;
use App\Models\Submenu;
use DeviceDetector\DeviceDetector;
use Illuminate\Support\Facades\Session;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/'  , [App\Http\Controllers\Site\IndexController::class, 'index']);
Route::get('/login'  , [App\Http\Controllers\Site\IndexController::class, 'login']);
Route::get('/about'  , [App\Http\Controllers\Site\IndexController::class, 'about']);
Route::get('/contact'  , [App\Http\Controllers\Site\IndexController::class, 'contact']);
Route::get('/register'  , [App\Http\Controllers\Site\IndexController::class, 'register']);
Route::get('/brothers'  , [App\Http\Controllers\Site\IndexController::class, 'brothers']);
Route::get('/sisters'  , [App\Http\Controllers\Site\IndexController::class, 'sisters']);
Route::get('/publishing-center'  , [App\Http\Controllers\Site\IndexController::class, 'publishingCenter']);
Route::get('/kindergarten'  , [App\Http\Controllers\Site\IndexController::class, 'kindergarten']);
Route::get('/loan-institute'  , [App\Http\Controllers\Site\IndexController::class, 'loanInstitute']);
Route::get('/charity'  , [App\Http\Controllers\Site\IndexController::class, 'charity']);
Route::get('/mahdia'  , [App\Http\Controllers\Site\IndexController::class, 'mahdia']);
Route::get('/journal'  , [App\Http\Controllers\Site\IndexController::class, 'journal']);
Route::get('/all-services'  , [App\Http\Controllers\Site\IndexController::class, 'allServices']);
Route::get('/speech'  , [App\Http\Controllers\Site\IndexController::class, 'speech']);
Route::get('/news'  , [App\Http\Controllers\Site\IndexController::class, 'news']);
Route::get('/single-news'  , [App\Http\Controllers\Site\IndexController::class, 'singleNews']);
Route::get('/meeting'  , [App\Http\Controllers\Site\IndexController::class, 'meeting']);
Route::get('/single-meeting'  , [App\Http\Controllers\Site\IndexController::class, 'singleMeeting']);
Route::get('/video-gallery'  , [App\Http\Controllers\Site\IndexController::class, 'videoGallery']);
Route::get('/image-gallery'  , [App\Http\Controllers\Site\IndexController::class, 'imageGallery']);
Route::get('/education'  , [App\Http\Controllers\Site\IndexController::class, 'education']);
Route::get('/research'  , [App\Http\Controllers\Site\IndexController::class, 'research']);
Route::get('/cultural'  , [App\Http\Controllers\Site\IndexController::class, 'cultural']);
Route::get('/finance'  , [App\Http\Controllers\Site\IndexController::class, 'finance']);
Route::get('/library'  , [App\Http\Controllers\Site\IndexController::class, 'library']);



Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => '/'], function () {

    $sitemenus = Menu::select('slug', 'class', 'submenu_route', 'submenu')->whereLevel('site')->get();
    $submenus = Submenu::select('id', 'slug', 'class')->get();

    $userAgent = request()->header('User-Agent');
    $deviceDetector = new DeviceDetector($userAgent);
    $deviceDetector->parse();
    if ($deviceDetector->isMobile()) {
        Session::put('device', 'mobile');
    } else {
        Session::put('device', 'desktop');
    }
    if (Session::get('device') == 'desktop') {
        foreach ($sitemenus as $menu) {
            if ($menu->submenu == 0) {
                Route::get($menu->slug, 'Site\IndexController@' . $menu->class)->name($menu->slug);
            } else {
                foreach ($submenus as $submenu) {
                    if ($menu->submenu_route == 1) {
                        if ($submenu->menu_id == $menu->id) {
                            Route::get($menu->slug . '/' . $submenu->slug, 'Site\IndexController@' . $submenu->class);
                        }
                    }
                }
            }
        }
    } elseif (Session::get('device') == 'mobile') {

        foreach ($sitemenus as $menu) {
            if ($menu->submenu == 0) {
                Route::get($menu->slug, 'Mobile\IndexController@' . $menu->class)->name($menu->slug);
            } else {
                foreach ($submenus as $submenu) {
                    if ($menu->submenu_route == 1) {
                        if ($submenu->menu_id == $menu->id) {
                            Route::get($menu->slug . '/' . $submenu->slug, 'Mobile\IndexController@' . $submenu->class);
                        }
                    }
                }
            }
        }
    }
});
Route::group(['namespace' => 'App\Http\Controllers\Site', 'middleware' => 'checkClint'], function () {

    // Authentication Routes...
    Route::get('profile', 'ProfileController@profile')->name('profile');
    Route::get('usernotif', 'ProfileController@usernotif')->name('usernotif');
    Route::get('usernotif', 'ProfileController@usernotif')->name('usernotif');
    Route::get('setting', 'ProfileController@setting')->name('setting');
    Route::get('message', 'ProfileController@message')->name('message');
    Route::get('userrequest', 'ProfileController@userrequest')->name('user-request');
    Route::post('edit-user-profile', 'ProfileController@edituserprofile')->name('edit-user-profile');
    Route::post('change-password', 'ProfileController@changepassword')->name('change-password');
    Route::post('bankaccount', 'ProfileController@creatbankaccount')->name('bank-account');
    Route::post('bankpayment', 'ProfileController@creatbankpayment')->name('bank-payment');
    Route::post('change-email', 'ProfileController@changeemail')->name('change-email');
    Route::post('queries', 'ProfileController@queries')->name('queries');
    Route::post('workshop-sign', 'ProfileController@workshopsign')->name('workshop-sign');
    Route::get('paymentpage', 'ProfileController@paymentpage')->name('paymentpage');
    Route::get('pay', 'ProfileController@pay')->name('pay');
    Route::get('payment.callback', 'ProfileController@callbackpay')->name('payment.callback');
    Route::post('edit-user-mobile/update', 'ProfileController@editusermobile')->name('edit-user-mobile');

    Route::get('payment-success', 'ProfileController@pay')->name('payment-success');
    Route::get('payment-failed', 'ProfileController@pay')->name('payment-failed');


    $dashboardmenus = Menu::select('slug', 'class')->whereLevel('dashboard')->get();

    foreach ($dashboardmenus as $menu) {
        Route::get($menu->slug, 'ProfileController@' . $menu->class)->name($menu->class);
    }

});

Route::get('/setclass', [App\Http\Controllers\Site\IndexController::class, 'setclass'])->name('setclass');
Route::get('/sendmail', [App\Http\Controllers\Site\IndexController::class, 'sendmail'])->name('sendmail');
Route::post('/getcategory', [App\Http\Controllers\Site\IndexController::class, 'getcategory'])->name('getcategory');
Route::post('/Consultationrequest', [App\Http\Controllers\Site\IndexController::class, 'Consultationrequest'])->name('Consultationrequest');
Route::get('شرایط-ضوابط', [App\Http\Controllers\Site\IndexController::class, 'terms'])->name('شرایط-ضوابط');
Route::get('اخبار' . '/' . '{slug}', [App\Http\Controllers\Site\IndexController::class, 'singleakhbar']);
Route::get('محتوای-آموزشی' . '/' . '{slug}', [App\Http\Controllers\Site\IndexController::class, 'singlepost']);
Route::get('/reload-captcha', [App\Http\Controllers\Site\IndexController::class, 'reloadCaptcha']);


Route::group(['prefix' => 'admin', 'middleware' => ['auth:web', 'checkAdmin'], 'namespace' => 'App\Http\Controllers\Admin'], function () {


    $menu_panels = Menu_panel::select('slug', 'controller', 'class', 'submenu')->whereStatus(4)->get();
    $submenu_panels = Submenu_panel::select('id', 'slug', 'class', 'controller', 'method')->whereStatus(4)->get();

    foreach ($menu_panels as $menu_panel) {
        //Route::get($menu_panel->slug, ['App\Http\Controllers\Admin\\'.$menu_panel->controller, $menu_panel->class])->name($menu_panel->slug);
        Route::get($menu_panel->slug, $menu_panel->controller . '@' . $menu_panel->class)->name($menu_panel->slug);

        if ($menu_panel->submenu == 1) {
            foreach ($submenu_panels as $submenu_panel) {
                if ($menu_panel->id == $submenu_panel->menu_id) {
                    if ($submenu_panel->method == 'resource')
                        Route::resource($submenu_panel->slug, $submenu_panel->controller);
//                    elseif ($submenu_panel->method == 'get')
//                        Route::get($submenu_panel->slug .'/'.'{slug}', $submenu_panel->controller.'@'.$submenu_panel->class)->name($submenu_panel->slug);
//                    elseif ($submenu_panel->method == 'post')
//                        Route::post($submenu_panel->slug .'/'.'{slug}', $submenu_panel->controller.'@'.$submenu_panel->class)->name($submenu_panel->slug);
//                    elseif ($submenu_panel->method == 'put')
//                        Route::put($submenu_panel->slug .'/'.'{slug}', $submenu_panel->controller.'@'.$submenu_panel->class)->name($submenu_panel->slug);
//                    elseif ($submenu_panel->method == 'patch')
//                        Route::patch($submenu_panel->slug .'/'.'{slug}', $submenu_panel->controller.'@'.$submenu_panel->class)->name($submenu_panel->slug);
//                    elseif ($submenu_panel->method == 'delete')
//                        Route::delete($submenu_panel->slug .'/'.'{slug}', $submenu_panel->controller.'@'.$submenu_panel->class)->name($submenu_panel->slug);
                }
            }
        }
    }
});


Route::group(['namespace' => 'App\Http\Controllers\Admin'], function () {

    Route::post('change-email', 'ProfileController@changeemail')->name('change-email');

    Route::delete('menudashboards', 'MenudashboardController@deletemenudashboards')->name('deletemenudashboards');
    Route::delete('submenudashboards', 'SubmenudashboardController@deletesubmenudashboards')->name('deletesubmenudashboards');
    Route::delete('permissions', 'PermissionController@deletepermissions')->name('deletepermissions');
    Route::delete('roles', 'RoleController@deleteroles')->name('deleteroles');
    Route::delete('deleteadminlevel', 'RoleController@deleteadminlevel')->name('deleteadminlevel');
    Route::delete('deleteuser', 'UserController@deleteuser')->name('deleteuser');
    Route::delete('deleteslide', 'SlideController@deleteslide')->name('deleteslide');
    Route::delete('deleteakhbar', 'AkhbarController@deleteakhbar')->name('deleteakhbars');
    Route::delete('deleteblugs', 'BlugController@deleteblugs')->name('deleteblugs');
    Route::delete('deletemenus', 'MenuController@deletemenus')->name('deletemenus');
    Route::delete('deletemegamenus', 'MegamenuController@deletemegamenus')->name('deletemegamenus');
    Route::delete('deletesubmenus', 'SubmenuController@deletesubmenus')->name('deletesubmenus');
    Route::delete('deletecustomers', 'CustomerController@deletecustomers')->name('deletecustomers');
    Route::delete('deleteportfolios', 'PortfolioController@deleteportfolios')->name('deleteportfolios');
    Route::delete('deletecompany', 'CompanyController@deletecompany')->name('deletecompany');
    Route::delete('deletecustomertypes', 'CustomertypeController@deletecustomertypes')->name('deletecustomertypes');
    Route::delete('deletequestionlists', 'QuestionlistController@deletequestionlists')->name('deletequestionlists');
    Route::delete('deleteemploees', 'EmploeeController@deleteemploees')->name('deleteemploees');
    Route::delete('deletenotif', 'NotifController@deletenotif')->name('deletenotif');
    Route::delete('deletestelam', 'EstelamController@deletestelam')->name('deletestelam');
    Route::delete('deletesubestelam', 'SubestelamController@deletesubestelam')->name('deletesubestelam');
    Route::delete('deletepost', 'PostController@deletepost')->name('deletepost');
    Route::delete('deletelearnfile', 'LearnfileController@deletelearnfile')->name('deletelearnfile');
    Route::get('learn-file-download/{id}', 'LearnfileController@download')->name('learn-file-download');

    Route::post('readnotif', 'NotifController@readnotif')->name('readnotif');
    Route::post('getuser', 'NotifController@getuser')->name('getuser');
    Route::post('slides/img', 'MediaController@imgupload')->name('img');
    Route::post('gallerypicmanage/img', 'MediaController@imgupload')->name('img');
    Route::post('panel/id', 'PanelController@getsubmenu')->name('getsubmenu');
    Route::post('profile/createuser', 'UserController@createuser')->name('createuser');

    Route::PATCH('profile/update', 'ProfileController@update')->name('edituser');

});

Route::group(['namespace' => 'App\Http\Controllers\Auth'], function () {
    // Authentication Routes...
    Route::post('email/resent', 'VerificationController@resend')->name('verification.resend');
    Route::get('email/verify', 'VerificationController@show')->name('verification.notice');
    Route::get('email/verify/{id}/{hash}', 'VerificationController@verify')->name('verification.verify');
    Route::get('login', 'LoginController@showLoginuserForm')->name('login');
    Route::get('login/{provider}', 'LoginController@redirectToProvider')->name('redirectToProvider');
    Route::get('login/{provider}/callback', 'LoginController@handleProviderCallback')->name('handleProviderCallback');
    Route::get('remember', 'LoginController@showLoginrememberForm')->name('remember');
    Route::post('remember', 'LoginController@remember')->name('remember');
    Route::post('login-user', 'LoginController@loginuser')->name('login-user');
    Route::post('login-user-mobile', 'LoginController@loginusermobile')->name('login-user-mobile');
    Route::get('logout', 'LoginController@logout')->name('logout');
    Route::get('reload-captcha', 'LoginController@reloadcaptcha')->name('reload-captcha');
    Route::get('token', 'TokenController@showToken')->name('phone.token');
    Route::post('token', 'TokenController@token')->name('verify.phone.token');
    Route::get('setpass', 'TokenController@setpassshow')->name('setpass');
    Route::post('setpass', 'TokenController@update')->name('setpass');
    Route::get('register', 'RegisterController@showRegistrationuserForm');
    Route::post('register', 'RegisterController@registeruser')->name('register');
    Route::post('mobile-register', 'RegisterController@mobileregister')->name('mobile-register');
//    Route::post('mobile-profile'         , 'RegisterController@mobileprofile')->name('mobile-profile');

});

Route::group(['namespace' => 'App\Http\Controllers\Auth', 'prefix' => 'admin'], function () {
    // Authentication Routes...
    Route::get('login', 'LoginController@showLoginForm')->name('panellogin');
    Route::post('login', 'LoginController@login');
    Route::get('logout', 'LoginController@logout')->name('panellogout');
});

