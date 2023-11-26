<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HabitController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\MemoController;


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

Route::get('/', function () {
    // return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// トップ画面（習慣一覧）を表示
Route::get('habit', [HabitController::class, 'index_list'])->name('habit.index')->middleware('auth');

// 実行した習慣を登録
Route::post('habit/index', [HabitController::class, 'store_habit_date'])->name('habit.store_habit_date'); 

// ↑登録完了画面を表示
Route::get('habit/finish', [HabitController::class, 'store_habit_date'])->middleware('auth');


// 習慣の新規登録画面を表示
Route::get('habit/create', [HabitController::class, 'create_habit'])->name('habit.create_habit')->middleware('auth');

// 習慣を新規登録
Route::post('habit/create', [HabitController::class, 'store_habit'])->name('habit.store_habit'); 

//習慣の名前を編集する画面を表示
Route::get('habit/edit/{id}', [HabitController::class, 'show_edit_habit_name'])->middleware('auth');

//習慣の名前を編集
Route::patch('habit/edit/{id}', [HabitController::class, 'update_habit_name'])->name('habit.update_habit_name');  

// 習慣削除の確認画面を表示
Route::get('habit/destroy/{id}', [HabitController::class, 'show_delete_habit'])->middleware('auth');

// 習慣を削除
Route::delete('habit/destroy/{id}', [HabitController::class, 'destroy_habit'])->name('habit.destroy_habit');


// 詳細画面を表示
Route::get('habit/detail/{id}', [DetailController::class, 'show_detail'])->middleware('auth')->name('habit.show_detail');

// 実績（達成日）を削除
Route::delete('habit/detail/{id}', [DetailController::class, 'destroy_detail'])->name('habit.destroy_detail');


// メモ画面を表示
Route::get('habit/memo/{id}', [MemoController::class, 'show_memo'])->name('habit.show_memo');

// メモ編集画面を表示
Route::get('habit/edit-memo/{id}/{day}', [MemoController::class, 'show_edit_memo'])->name('habit.show_edit_memo');

// メモを編集
Route::patch('habit/edit-memo/{id}/{day}', [MemoController::class, 'update_memo'])->name('habit.update_memo');


// アーカイブ保存の確認画面を表示
Route::get('habit/save-archive/{id}', [ArchiveController::class, 'show_archive_confirmation'])->middleware('auth');

// アーカイブに保存
Route::post('habit/archive', [ArchiveController::class, 'store_archive'])->name('habit.store_archive');

// アーカイブ一覧画面を表示
Route::get('habit/archive', [ArchiveController::class, 'show_archive'])->name('habit.archive')->middleware('auth');

// アーカイブから一覧に戻す
Route::get('habit/archive/{id}', [ArchiveController::class, 'update_archive'])->name('habit.update_archive');