<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatRegistController;
use App\Http\Controllers\MedicineRegistController;
use App\Http\Controllers\MedicineManageController;
use App\Http\Controllers\MedicineEditController;
use App\Http\Controllers\SearchController;

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

#TOPページ画面
Route::get('/', function () {
    return view('index');
});
#検索
Route::get('/search', [SearchController::class,'searchCatInformation'])->name('searchCatInformation');


#猫情報新規登録
Route::get('/catRegist', [CatRegistController::class,'add'])->name('catRegist.add');
Route::post('/catRegist', [CatRegistController::class,'regist'])->name('catRegist.regist');
#猫情報詳細
#猫情報編集
#薬剤新規登録
Route::get('/medicineRegist', [MedicineRegistController::class,'add'])->name('medicineRegist.add');
Route::post('/medicineRegist', [MedicineRegistController::class,'regist'])->name('medicineRegist.regist');
#薬剤管理画面
Route::get('/medicineManage', [MedicineManageController::class,'allMedicineInformation'])->name('medicineManage.show');
#薬剤編集画面
Route::get('/medicineEdit/{medicine_id}', [MedicineEditController::class,'MedicineInformationEdit'])->name('medicineEdit.edit');
Route::post('/medicineEdit', [MedicineEditController::class,'MedicineInformationUpdate'])->name('medicineEdit.update');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
