<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatInformation;

class CatRegistController extends Controller
{
    public function add() {
        return view ('catRegist.add');
    }
    #猫の情報を新規登録
    public function regist (Request $request) {
        $catInformation = new CatInformation;
        $inputForm = $request -> all();
        unset($inputForm['_token']);
        $catInformation -> fill($inputForm) ->save();
        #Todo
        #登録後の遷移先・バリデーション・画像
        return redirect('/');
    }
}
