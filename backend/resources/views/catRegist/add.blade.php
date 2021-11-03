@extends('layouts.app')

@section('content')
<div class="container mt-4">
        <div class="border p-4">
            <h1 class="h5 mb-4">
                保護猫情報登録
            </h1>

            <form method="POST" action="{{ route('catRegist.regist') }}" enctype="multipart/form-data">
                @csrf
                <fieldset class="mb-4">
                    <div class="form-group">
                        <label for="name">
                            名前
                        </label>
                        <input
                            id="name"
                            name="name"
                            class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                            value="{{ old('name') }}"
                            placeholder="登録したい名前を入力してください"
                            type="text"
                        >
                        @if ($errors->has('name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>
                    
                    <p>性別</p>
                    <div class="radio-inline">     
                        <label for="male">
                        <input
                            id="male"
                            name="sex"
                            value="male"
                            type="radio"
                        >
                        オス
                        </label>
                        &emsp;                   
                        <label for="female">  
                        <input
                            id="female"
                            name="sex"
                            value="female"
                            type="radio"
                        >
                        メス
                        </label>
                        @if ($errors->has('sex'))
                            <div class="invalid-feedback">
                                {{ $errors->first('sex') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="weight">
                            体重
                        </label>
                        <input
                            id="weight"
                            name="weight"
                            class="form-control {{ $errors->has('weight') ? 'is-invalid' : '' }}"
                            value="{{ old('weight') }}"
                            type="text"
                        >
                        @if ($errors->has('weight'))
                            <div class="invalid-feedback">
                                {{ $errors->first('weight') }}
                            </div>
                        @endif
                    </div>
                    
                    <div class="form-group">
                        <label>
                            年齢（推定）
                        </label>
                        <div class="col-md-6">
                            <input id="age" type="number" min="0" class="form-control{{ $errors->has('age') ? ' is-invalid' : '' }}" name="age" value="{{ old('age') }}" required>
                            @if ($errors->has('age'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('age') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="date">
                            保護日 
                        </label>
                        <br>
                        <input type="date" name ="protectDate" >
                    </div>

                    <p>エイズ</p>
                    <div class="radio-inline">     
                        <label for="positive">
                        <input
                            id="positive"
                            name="aids"
                            value="positive"
                            type="radio"
                        >
                        陽性
                        </label>
                        &emsp;                   
                        <label for="negative">  
                        <input
                            id="negative"
                            name="aids"
                            value="negative"
                            type="radio"
                        >
                        陰性
                        </label>
                        @if ($errors->has('aids'))
                            <div class="invalid-feedback">
                                {{ $errors->first('aids') }}
                            </div>
                        @endif
                    </div>

                    <p>白血病</p>
                    <div class="radio-inline">     
                        <label for="positive">
                        <input
                            id="positive"
                            name="leukemia"
                            value="positive"
                            type="radio"
                        >
                        陽性
                        </label>
                        &emsp;                   
                        <label for="negative">  
                        <input
                            id="negative"
                            name="leukemia"
                            value="negative"
                            type="radio"
                        >
                        陰性
                        </label>
                        @if ($errors->has('leukemia'))
                            <div class="invalid-feedback">
                                {{ $errors->first('leukemia') }}
                            </div>
                        @endif
                    </div>


                    <div class="form-group">
                        <label for="flea">
                            ノミダニ駆除 
                        </label>
                        <br>
                        <input type="date" name="flea">
                    </div>

                    <div class="form-group">
                        <label for="spay">
                            不妊去勢手術 
                        </label>
                        <br>
                        <input type="date" name="spay">
                    </div>

                    <div class="form-group">
                        <label for="vaccination">
                            ワクチン接種 
                        </label>
                        <br>
                        <input type="date" name="vaccination">
                    </div>

                    <div class="form-group">
                        <label for="image_file">
                            画像（任意） 
                        </label>
                        <br>
                        <input type="file" name="image_file">
                    </div>

                    <div class="mt-5">
                        <a class="btn btn-secondary" href="/">
                            戻る
                        </a>
                        <button type="submit" class="btn btn-primary">
                            登録
                        </button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection

