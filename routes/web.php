<?php

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

// user
Route::get('/signin', 'HomeController@signin')->name('view_signin');
Route::get('/signup', 'HomeController@signup')->name('view_signup');

Route::get('/', 'HomeController@index')->name('view_home');
Route::get('/login', 'HomeController@login')->name('login');
Route::get('/logout', 'HomeController@logout')->name('logout');
Route::post('/register', 'HomeController@register')->name('register');

Route::get('/delivery', 'DeliveryController@index')->name('delivery');
Route::get('/stockpro', 'StockProController@index')->name('stockpro');

// admin
Route::group(['middleware' => ['verify_role:admin'], 'as' => 'admin.', 'prefix' => 'admin'], function () {
    // Home
    Route::get('/', 'Admin\HomeController@index')->name('home');

    // Main
    Route::group(['as' => 'main.', 'prefix' => 'main'], function () {
        Route::get('/', 'Admin\HomeController@main')->name('home');

        // All Orders
        Route::group(['as' => 'order.', 'prefix' => 'order'], function () {
            Route::get('/', 'Admin\Main\OrderController@index')->name('home');
        });

        // Payment
        Route::group(['as' => 'payment.', 'prefix' => 'payment'], function () {
            Route::get('/', 'Admin\Main\PaymentController@index')->name('home');
        });

        // No Data
        Route::group(['as' => 'no_data.', 'prefix' => 'no_data'], function () {
            Route::get('/', 'Admin\Main\NoDataController@index')->name('home');
        });

        // No Data
        Route::group(['as' => 'order_chat.', 'prefix' => 'order_chat'], function () {
            Route::get('/', 'Admin\Main\OrderChatController@index')->name('home');
        });
    });

    // Member
    Route::group(['as' => 'member.', 'prefix' => 'member'], function () {
        Route::get('/', 'Admin\HomeController@member')->name('home');

        // List
        Route::group(['as' => 'list.', 'prefix' => 'list'], function () {
            Route::get('/', 'Admin\Member\ListController@index')->name('home');
        });

        // Out
        Route::group(['as' => 'out_list.', 'prefix' => 'out_list'], function () {
            Route::get('/', 'Admin\Member\OutListController@index')->name('home');
        });

        // Deposit Application Details
        Route::group(['as' => 'deposit_req.', 'prefix' => 'deposit_req'], function () {
            Route::get('/', 'Admin\Member\DepositReqController@index')->name('home');
        });

        Route::get('/deposit_use', 'Admin\MemberController@deposit_use')->name('view_deposit_use');
        Route::get('/deposit_without_passbook', 'Admin\MemberController@deposit_without_passbook')->name('view_deposit_without_passbook');
        Route::get('/notification_message', 'Admin\MemberController@notification_message')->name('view_notification_message');
        Route::get('/reg', 'Admin\MemberController@reg')->name('view_reg');
    });

    // Announcement
    Route::group(['as' => 'announcement.', 'prefix' => 'announcement'], function () {
        Route::get('/', 'Admin\HomeController@announcement')->name('home');

        // Settings
        Route::group(['as' => 'setting.', 'prefix' => 'setting'], function () {
            Route::get('/', 'Admin\Announcement\SettingController@index')->name('home');
        });

        // Consultation
        Route::group(['as' => 'consultation.', 'prefix' => 'consultation'], function () {
            Route::get('/', 'Admin\Announcement\ConsultationController@index')->name('home');
        });

        // Announcement
        Route::group(['as' => 'announcement.', 'prefix' => 'announcement'], function () {
            Route::get('/', 'Admin\Announcement\AnnouncementController@index')->name('home');
        });

        // Service Inquires & Suggestions
        Route::group(['as' => 'service_inquire.', 'prefix' => 'service_inquire'], function () {
            Route::get('/', 'Admin\Announcement\ServiceInquireController@index')->name('home');
        });

        // Event
        Route::group(['as' => 'event.', 'prefix' => 'event'], function () {
            Route::get('/', 'Admin\Announcement\EventController@index')->name('home');
        });

        // Comment
        Route::group(['as' => 'comment.', 'prefix' => 'comment'], function () {
            Route::get('/', 'Admin\Announcement\CommentController@index')->name('home');
        });

        // FAQ
        Route::group(['as' => 'faq.', 'prefix' => 'faq'], function () {
            Route::get('/', 'Admin\Announcement\FAQController@index')->name('home');
        });
    });

    // Homepage Management
    Route::group(['as' => 'management.', 'prefix' => 'management'], function () {
        Route::get('/', 'Admin\HomeController@management')->name('home');

        // Banner
        Route::group(['as' => 'banner.', 'prefix' => 'banner'], function () {
            Route::get('/', 'Admin\Management\BannerController@index')->name('home');
        });

        // Recommended Product
        Route::group(['as' => 'recom_pro.', 'prefix' => 'recom_pro'], function () {
            Route::get('/', 'Admin\Management\RecomProController@index')->name('home');
        });

        // Departure Time
        Route::group(['as' => 'departure.', 'prefix' => 'departure'], function () {
            Route::get('/', 'Admin\Management\DepartureController@index')->name('home');
        });

        // Shopping Information
        Route::group(['as' => 'shop_site.', 'prefix' => 'shop_site'], function () {
            Route::get('/', 'Admin\Management\ShopSiteController@index')->name('home');
        });

        // Event
        Route::group(['as' => 'event.', 'prefix' => 'event'], function () {
            Route::get('/', 'Admin\Management\EventController@index')->name('home');
        });

        // Pop-up
        Route::group(['as' => 'popup.', 'prefix' => 'popup'], function () {
            Route::get('/', 'Admin\Management\PopupController@index')->name('home');
        });

        // Page
        Route::group(['as' => 'page.', 'prefix' => 'page'], function () {
            Route::get('/', 'Admin\Management\PageController@index')->name('home');
        });

        // Mail Form
        Route::group(['as' => 'mail_form.', 'prefix' => 'mail_form'], function () {
            Route::get('/', 'Admin\Management\MailFormController@index')->name('home');
        });
    });

    // Coupon
    Route::group(['as' => 'coupon.', 'prefix' => 'coupon'], function () {
        Route::get('/', 'Admin\HomeController@coupon')->name('home');

        // Banner
        Route::group(['as' => 'list.', 'prefix' => 'list'], function () {
            Route::get('/', 'Admin\Coupon\ListController@index')->name('home');
        });

        // Recommended Product
        Route::group(['as' => 'event.', 'prefix' => 'event'], function () {
            Route::get('/', 'Admin\Coupon\EventController@index')->name('home');
            Route::put('/', 'Admin\Coupon\EventController@store');
        });
    });

    // SMS
    Route::group(['as' => 'sms.', 'prefix' => 'sms'], function () {
        Route::get('/', 'Admin\HomeController@sms')->name('home');

        // Text
        Route::group(['as' => 'text.', 'prefix' => 'text'], function () {
            Route::get('/', 'Admin\SMS\TextController@index')->name('home');
        });

        // Send
        Route::group(['as' => 'send.', 'prefix' => 'send'], function () {
            Route::get('/', 'Admin\SMS\SendController@index')->name('home');
        });

        // SetEtc
        Route::group(['as' => 'set_etc.', 'prefix' => 'set_etc'], function () {
            Route::get('/', 'Admin\SMS\SetEtcController@index')->name('home');
        });

        // Cont
        Route::group(['as' => 'cont.', 'prefix' => 'cont'], function () {
            Route::get('/', 'Admin\SMS\ContController@index')->name('home');
        });

        // Point
        Route::group(['as' => 'point.', 'prefix' => 'point'], function () {
            Route::get('/', 'Admin\SMS\PointController@index')->name('home');
        });
    });

    // Environment
    Route::group(['as' => 'environment.', 'prefix' => 'environment'], function () {
        Route::get('/', 'Admin\HomeController@environment')->name('home');

        // MemGrade
        Route::group(['as' => 'mem_grade.', 'prefix' => 'mem_grade'], function () {
            Route::get('/', 'Admin\Environment\MemGradeController@index')->name('home');
        });

        // Center
        Route::group(['as' => 'center.', 'prefix' => 'center'], function () {
            Route::get('/', 'Admin\Environment\CenterController@index')->name('home');
        });

        // DlvFree
        Route::group(['as' => 'dlv_free.', 'prefix' => 'dlv_free'], function () {
            Route::get('/', 'Admin\Environment\DlvFreeController@index')->name('home');
        });

        // BankAcc
        Route::group(['as' => 'bank_acc.', 'prefix' => 'bank_acc'], function () {
            Route::get('/', 'Admin\Environment\BankAccController@index')->name('home');
        });

        // ExgRt
        Route::group(['as' => 'exg_rt.', 'prefix' => 'exg_rt'], function () {
            Route::get('/', 'Admin\Environment\ExgRtController@index')->name('home');
        });

        // AppExgRt
        Route::group(['as' => 'app_exg_rt.', 'prefix' => 'app_exg_rt'], function () {
            Route::get('/', 'Admin\Environment\AppExgRtController@index')->name('home');
        });

        // AddSvc
        Route::group(['as' => 'add_svc.', 'prefix' => 'add_svc'], function () {
            Route::get('/', 'Admin\Environment\AddSvcController@index')->name('home');
        });

        // IslandFee
        Route::group(['as' => 'island_fee.', 'prefix' => 'island_fee'], function () {
            Route::get('/', 'Admin\Environment\IslandFeeController@index')->name('home');
        });

        // CtmsItem
        Route::group(['as' => 'ctms_item.', 'prefix' => 'ctms_item'], function () {
            Route::get('/', 'Admin\Environment\CtmsItemController@index')->name('home');
        });

        // IvcBandWh
        Route::group(['as' => 'ivc_band_wh.', 'prefix' => 'ivc_band_wh'], function () {
            Route::get('/', 'Admin\Environment\IvcBandWhController@index')->name('home');
        });
    });

    // Rack
    Route::group(['as' => 'rack.', 'prefix' => 'rack'], function () {
        Route::get('/', 'Admin\HomeController@rack')->name('home');

        // Management
        Route::group(['as' => 'management.', 'prefix' => 'management'], function () {
            Route::get('/', 'Admin\Rack\ManagementController@index')->name('home');
        });

        // Use
        Route::group(['as' => 'use.', 'prefix' => 'use'], function () {
            Route::get('/', 'Admin\Rack\UseController@index')->name('home');
        });

        // Log
        Route::group(['as' => 'log.', 'prefix' => 'log'], function () {
            Route::get('/', 'Admin\Rack\LogController@index')->name('home');
        });
    });

    // Rack
    Route::group(['as' => 'statistics.', 'prefix' => 'statistics'], function () {
        Route::get('/', 'Admin\HomeController@statistics')->name('home');

        // Order Statistics
        Route::group(['as' => 'order.', 'prefix' => 'order'], function () {
            Route::get('/', 'Admin\Statistics\OrderController@index')->name('home');
        });

        // Statistics By Member
        Route::group(['as' => 'member.', 'prefix' => 'member'], function () {
            Route::get('/', 'Admin\Statistics\MemberController@index')->name('home');
        });

        // By Employee
        Route::group(['as' => 'employee.', 'prefix' => 'employee'], function () {
            Route::get('/', 'Admin\Statistics\EmployeeController@index')->name('home');
        });

        // Manage Logs
        Route::group(['as' => 'log.', 'prefix' => 'log'], function () {
            Route::get('/', 'Admin\Statistics\LogController@index')->name('home');
        });
    });
});

