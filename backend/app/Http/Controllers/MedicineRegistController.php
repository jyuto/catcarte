<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MedicineInformation;

class MedicineRegistController extends Controller
{
    public function add() {
        return view ('medicineRegist.add');
    }
    #薬の情報を新規登録
    public function regist (Request $request) {
        $medicineInformation = new MedicineInformation;
        $inputForm = $request -> all();
        unset($inputForm['_token']);
        // 用法項目(checkbox)をselializeして保存
        if ($request->filled('usage')) {
            $inputForm['usage'] = serialize($inputForm['usage']);
        }
        $medicineInformation -> fill($inputForm) ->save();
        #Todo
        #登録後の遷移先・バリデーション・画像
        return redirect('/');
    }
}
