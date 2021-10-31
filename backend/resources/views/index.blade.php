@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="border p-4">
        <h1 class="h5 mb-4">
            検索条件
        </h1>

        <form action="{{ url('/search')}}" method="post">
        @csrf
        @method('get')
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>名前</label>
                        <input type="text" class="form-control" placeholder="検索したい名前を入力してください" name="name">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>性別</label>
                        <select class="form-control" name="sex">
                        <option selected value="">選択...</option>
                        <option value="male">オス</option>
                        <option value="female">メス</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>年齢</label>
                        <input type="text" class="form-control" placeholder="年齢を入力してください" name="age" value="{{ old('name') }}">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>年齢の条件</label>
                        <select class="form-control" name="age_condition">
                        <option selected value="">選択...</option>
                        <option value="1">以上</option>
                        <option value="2">以下</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="protectDateFrom">
                            保護日 
                        </label>
                        <br>
                        <input type="date" name ="protectDateFrom" >
                        &emsp;
                        -
                        &emsp;
                        <input type="date" name ="protectDateTo" >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="spayFrom">
                            不妊去勢手術日
                        </label>
                        <br>
                        <input type="date" name="spayFrom">
                        &emsp;
                        -
                        &emsp;
                        <input type="date" name="spayTo">
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">検索</button>
        </form>

    </div>
</div>

<div class="container mt-4">
    <a href="/catRegist" class="btn btn-primary">保護猫新規登録</a>
    <a href="/medicineRegist" class="btn btn-primary">薬剤新規登録</a>
    <a href="/medicineManage" class="btn btn-primary">薬剤管理</a>
</div>

<div class="container mt-4">
    <div class="border p-4">

        <h1 class="h5 mb-4">
            検索結果一覧
        </h1>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>名前</th>
                    <th>性別</th>
                    <th>年齢</th>
                    <th>保護日</th>
                    <th>エイズ</th>
                    <th>白血病</th>
                    <th>ノミダニ駆除</th>
                    <th>不妊去勢手術</th>
                    <th>ワクチン接種</th>
                </tr>
            </thead>

            <tbody>
            @isset($catInformations)
            @foreach($catInformations as $catInformation)
                <tr>
                    <td>{{$catInformation->id}}</td>
                    <td>{{$catInformation->name}}</td>
                    <td>{{$catInformation->sex}}</td>
                    <td>{{$catInformation->age}}</td>
                    <td>{{$catInformation->protectDate}}</td>
                    <td>{{$catInformation->aids}}</td>
                    <td>{{$catInformation->leukemia}}</td>
                    <td>{{$catInformation->flea}}</td>
                    <td>{{$catInformation->spay}}</td>
                    <td>{{$catInformation->vaccination}}</td>
                        <td>
                            <a href="{{route('catinformation_detail.show',['id'=>$catInformation->id])}}" class="btn btn-primary btn-sm">詳細</a>
                            <a href="{{route('catinformation_detail.edit',['id'=>$catInformation->id])}}" class="btn btn-primary btn-sm">編集</a>
                            <a href="" class="btn btn-danger btn-sm">削除</a>
                        </td>
                </tr>
            @endforeach
            @endisset
            </tbody>
        </table>
        
        <!-- page control -->
        <?php
        //{!! $students->render() !!}
        ?>

    </div>
</div>
@endsection