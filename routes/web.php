<?php

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

Route::get('test', 'ajaxTools@readCurrency');


/*Route cho phần đăng nhập, đăng ký*/
Auth::routes(['verify' => true]);

Route::post('guimail', 'TrangDonController@guimail')->name('sendMail');

Route::get('/', 'TrangChuController@gettrangchu')->name('TrangChu');

/*Route ajax để lấy thông tin kiểm tra địa điểm*/
Route::post('checklocation', 'ajaxTools@checklocation')->name('checklocation');

/*Route cho trang đơn*/
Route::get('thongtin/{id}-{tieude}','TrangDonController@gettrangdon')->name('trangdon');

/*Route cho danh sách tất cả sản phẩm*/
Route::get('danh-sach-san-pham', 'TrangDonController@getdssanpham')->name('dssanpham');

Route::get('danh-sach-san-pham/{id}-{ten}', 'TrangDonController@getdssanphamtheocatalog')->name('dssanphamtheocatalog');

/*Route cho chi tiết sản phẩm*/
Route::get('sanpham/{id}-{tieude}', 'TrangDonController@getsanpham')->name('sanpham');

/*Route cho danh sách tất cả tin tức*/
Route::get('danh-sach-tin-tuc/{id}-{ten}', 'TrangDonController@getdstintuctheocatalog')->name('dstintuctheocatalog');

/*Route cho danh sách tất cả tin tức*/
Route::get('danh-sach-tin-tuc/', 'TrangDonController@getdstintuc')->name('dstintuc');

/*Route cho chi tiết sản phẩm*/
Route::get('tintuc/{id}-{tieude}', 'TrangDonController@gettintuc')->name('tintuc');

Route::get('cuahang/{id}-{ten}','TrangDonController@getcuahang')->name('cuahang');

Route::get('dangkynhuongquyen/{maqh}', 'TrangDonController@getdknq')->name('dangkynhuongquyen');

Route::post('formdknq', 'TrangDonController@postformdknq')->name('formdknq');

/*Route cho trang tổng quan công ty*/
Route::get('tong-quan', 'TrangDonController@gettongquan')->name('tongquan');

/*start route group admin*/
Route::group(['prefix' => 'admin','middleware'=>['auth','verified']], function () {

    Route::get('/', 'adminController@dashboard');


     /* route group for catalog */
     Route::group(['prefix' => 'catalog'], function () {

        Route::get('list', 'CatalogController@getlist')->name('Catalog_list');

        Route::get('edit/{id}', 'CatalogController@getedit')->name('Catalog_edit');
        Route::post('edit/{id}', 'CatalogController@postedit')->name('Catalog_edit');

        Route::get('add', 'CatalogController@getadd')->name('Catalog_add');
        Route::post('add', 'CatalogController@postadd')->name('Catalog_add');
        Route::get('delete/{id}', 'CatalogController@getdelete')->name('Catalog_delete');
});
    /* route group for sanpham */
    Route::group(['prefix' => 'sanpham'], function () {

            Route::get('list', 'SanPhamController@getlist')->name('SanPham_list');

            Route::get('edit/{id}', 'SanPhamController@getedit')->name('SanPham_edit');
            Route::post('edit/{id}', 'SanPhamController@postedit')->name('SanPham_edit');

            Route::get('add', 'SanPhamController@getadd')->name('SanPham_add');
            Route::post('add', 'SanPhamController@postadd')->name('SanPham_add');
            Route::get('delete/{id}', 'SanPhamController@getdelete')->name('SanPham_delete');
    });
     /* route group for staticpage */
    Route::group(['prefix' => 'staticpage'], function () {

            Route::get('list', 'StaticPageController@getlist')->name('StaticPage_list');

            Route::get('edit/{id}', 'StaticPageController@getedit')->name('StaticPage_edit');
            Route::post('edit/{id}', 'StaticPageController@postedit')->name('StaticPage_edit');

            Route::get('add', 'StaticPageController@getadd')->name('StaticPage_add');
            Route::post('add', 'StaticPageController@postadd')->name('StaticPage_add');
            Route::get('delete/{id}', 'StaticPageController@getdelete')->name('StaticPage_delete');
    });

    /* route group for newstype */
    Route::group(['prefix' => 'newstype'], function () {

            Route::get('list', 'NewsTypeController@getlist')->name('NewsType_list');

            Route::get('edit/{id}', 'NewsTypeController@getedit')->name('NewsType_edit');
            Route::post('edit/{id}', 'NewsTypeController@postedit')->name('NewsType_edit');

            Route::get('add', 'NewsTypeController@getadd')->name('NewsType_add');
            Route::post('add', 'NewsTypeController@postadd')->name('NewsType_add');
            Route::get('delete/{id}', 'NewsTypeController@getdelete')->name('NewsType_delete');
    });
    /* route group for news */
    Route::group(['prefix' => 'news'], function () {

            Route::get('list', 'newsController@getlist')->name('news_list');

            Route::get('edit/{id}', 'newsController@getedit')->name('news_edit');
            Route::post('edit/{id}', 'newsController@postedit')->name('news_edit');

            Route::get('add', 'newsController@getadd')->name('news_add');
            Route::post('add', 'newsController@postadd')->name('news_add');
            Route::get('delete/{id}', 'newsController@getdelete')->name('news_delete');
    });


    /* route group for quản trị viên */
    Route::group(['prefix' => 'user'], function () {

        Route::get('list', 'UserController@getlist')->name('User_list');

        Route::get('edit/{id}', 'UserController@getedit')->name('User_edit');
        Route::post('edit/{id}', 'UserController@postedit')->name('User_edit');

        Route::get('add', 'UserController@getadd')->name('User_add');
        Route::post('add', 'UserController@postadd')->name('User_add');
        Route::get('delete/{id}', 'UserController@getdelete')->name('User_delete');
    });
    /* route group for setting */
    Route::group(['prefix' => 'setting'], function () {

        Route::get('/', 'pagesettingController@getpageconfig')->name('pageconfig');

        Route::get('list', 'pagesettingController@getlist')->name('setting_list');

        Route::get('edit/{id}', 'pagesettingController@getedit')->name('setting_edit');
        Route::post('edit/{id}', 'pagesettingController@postedit')->name('setting_edit');

        Route::get('add', 'pagesettingController@getadd')->name('setting_add');
        Route::post('add', 'pagesettingController@postadd')->name('setting_add');

        Route::get('delete/{id}', 'pagesettingController@getdelete')->name('setting_delete');
    });
    /* route group for admin/ajax */
    Route::group(['prefix' => 'ajax'], function () {

        Route::get('selectqh/{matp}', 'ajaxTools@selectqh')->name('selectqh');
        Route::post('basic_setting', 'pagesettingController@postbasicsetting')->name('basic_config');
        Route::post('addition_setting', 'pagesettingController@postadditionsetting')->name('addition_config');
    });
    /*end group admin/ajax*/
});
/*end route group admin*/




