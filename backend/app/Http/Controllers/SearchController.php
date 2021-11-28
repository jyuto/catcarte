<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatInformation;

class SearchController extends Controller
{
    ##Todo
    #バリデーション・詳細編集削除・fat controller部分修正・ページネーション・モデルに検索ロジック移動
    public function searchCatInformation(Request $request)
    {
        $keywordName = $request->name;
        $keywordSex = $request->sex;
        $keywordAge = $request->age;
        $keywordAgeCondition = $request->age_condition;
        $keywordProtectDateFrom = $request->protectDateFrom;
        $keywordProtectDateTo = $request->protectDateTo;
        $keywordSpayFrom = $request->spayFrom;
        $keywordSpayTo = $request->spayTo;

        $query = Catinformation::query();

        if(isset($keywordName))
        {
            $query->where('name','like','%'.$keywordName.'%');
        }
        
        if(isset($keywordSex))
        {
            $query->where('sex',$keywordSex);
        }

        #年齢条件(入力値以上)
        if(isset($keywordAge) && $keywordAgeCondition == 1)
        {
            $query->where('age','>=', $keywordAge);
        }
        #年齢条件(入力値以下)
        if(isset($keywordAge) && $keywordAgeCondition == 2)
        {
            $query->where('age','<=', $keywordAge);
        }

        if(isset($keywordProtectDateFrom) && isset($keywordProtectDateTo))
        {
            $query->whereBetween('protectDate',[$keywordProtectDateFrom,$keywordProtectDateTo]);
        }

        if(isset($keywordSpayFrom) && isset($keywordSpayTo))
        {
            $query->whereBetween('spay',[$keywordSpayFrom,$keywordSpayTo]);
        }

        $allCatInformation = $query->get();
        return view('index', ['catInformations' => $allCatInformation]);

        #全検索（検索条件に指定がない場合全ての情報を抽出）
        if($request->filled(['name','sex','age','age_condition','protectDateFrom','protectDateTo','spayFrom','spayTo']) === false)
        {
            $allCatInformation  = CatInformation::all();
            return view('index', ['catInformations' => $allCatInformation]);
        }
    }
}
