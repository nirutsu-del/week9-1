<?php

// routes/web.php
use App\Http\Controllers\AdminController;

// ผูกเส้นทางขารับฟอร์ม POST ไปยังเมธอด insert ของ AdminController
Route::post('/insert', [AdminController::class, 'insert']);

Route::get('/', function () {
    return view('index');
    return view('blog');
});

Route::get('/about2', function () {
    $name = "Sasis srikokpho" ;
    $date = "20 May 2026";
    return view('about2', compact('name' , 'date'));
})->name("about2");

Route::get('/blog2', function () {
    $blog2 = [
        [
        'title' => 'บทความที่ 1',
        'content' => 'เนื้อหาบทความที่ 1',
        'status' => true 
        ],
        [
        'title' => 'บทความที่ 2',
        'content' => 'เนื้อหาบทความที่ 2',
        'status' => true 
        ],
        [
        'title' => 'บทความที่ 3',
        'content' => 'เนื้อหาบทความที่ 3',
        'status' => false 
        ],
    ];
    return view("blog2", compact('blog2'));
    })->name("blog2");
Route::get('/about2', [AdminController::class, 'about2'] )->name("about2");
Route::get('/blog2', [AdminController::class, 'blog2'] )->name("blog2");
Route::get('/create', [AdminController::class, 'create'] )->name("create");

Route::get('/from', [AdminController::class, 'insert']);
Route::post('/from', [AdminController::class, 'insert']);

Route::get('/delete/{id}', [AdminController::class, 'delete'])->name('delete');