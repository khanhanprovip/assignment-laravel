<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Home
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('product.home');
});

/*
|--------------------------------------------------------------------------
| Product routes (group)
|--------------------------------------------------------------------------
*/
Route::prefix('product')->group(function () {

    // /product
    Route::get('/', function () {
        $products = [
            ['id' => 1, 'name' => 'iPhone 15'],
            ['id' => 2, 'name' => 'Samsung S24'],
            ['id' => 3, 'name' => 'Xiaomi 14'],
        ];
        return view('product.index', compact('products'));
    })->name('product.index');

    // /product/add
    Route::get('/add', function () {
        return view('product.add');
    })->name('product.add');

    // /product/{id}
    Route::get('/{id?}', function ($id = '123') {
        return "Chi tiết sản phẩm ID = " . $id;
    })->where('id', '[A-Za-z0-9]+');
});

/*
|--------------------------------------------------------------------------
| Sinh viên
|--------------------------------------------------------------------------
*/
Route::get('/student/info', function () {
    return view('student.info');
})->name('student.info');

Route::get('/sinhvien/{name?}/{mssv?}', function (
    $name = 'Nguyen Khanh An',
    $mssv = '4005867'
) {
    return "
        <h2>Thông tin sinh viên</h2>
        <p>Tên: $name</p>
        <p>MSSV: $mssv</p>
    ";
});

/*
|--------------------------------------------------------------------------
| Bàn cờ vua n*n
|--------------------------------------------------------------------------
*/
Route::get('/banco/{n}', function ($n) {
    return view('product.banco', compact('n'));
});

/*
|--------------------------------------------------------------------------
| 404
|--------------------------------------------------------------------------
*/
Route::fallback(function () {
    return view('error.404');
});
