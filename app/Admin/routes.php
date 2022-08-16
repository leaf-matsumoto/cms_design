<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

    // 単品商品管理
    $router->resource('single-menus', SingleMenuController::class);

    // セット商品管理
    $router->resource('set-menus', SetMenuController::class);

    // お知らせ管理
    $router->resource('new-contents', NewContentController::class);

    // オーダー管理
    $router->resource('order-mgts', OrderMgtController::class);

    // モバイルオーダーエラー
    $router->resource('m-errors', MErrorController::class);

    // セルフレジエラー
    $router->resource('s-errors', SErrorController::class);

    // マスタ同期
    $router->resource('masters', MasterController::class);
    $router->resource('master2s', Master2Controller::class);
    $router->resource('master3s', Master3Controller::class);

    // オーダー用紙管理
    $router->resource('purchase-papers', PurchasePapersController::class);

    // アレルギー管理
    $router->resource('allergies', AllergyController::class);

    // おすすめ商品管理
    $router->resource('pickups', PickupController::class);

    // QRコード設定
    $router->resource('qrcodes', Qrcodecontroller::class);

    // コンセ完了メール
    $router->resource('mails', MailController::class);

    // クーポン管理
    $router->resource('coupons', CouponController::class);

    // モバイル販売管理
    $router->resource('mobiles', MobileController::class);

});
