@extends('layouts.app')

@section('content')
<div class="container mt-4">
        <div class="border p-4">
            <h1 class="h5 mb-4">
                薬剤情報登録
            </h1>

            <form method="POST" action="{{ route('medicineRegist.regist') }}" enctype="multipart/form-data">
                @csrf
                <fieldset class="mb-4">
                    <div class="form-group">
                        <label for="medicineName">
                            薬剤名
                        </label>
                        <input
                            id="medicineName"
                            name="medicineName"
                            class="form-control {{ $errors->has('medicineName') ? 'is-invalid' : '' }}"
                            value="{{ old('medicineName') }}"
                            type="text"
                            placeholder="登録する薬の名前を入力してください"
                            required
                        >
                        @if ($errors->has('medicineName'))
                            <div class="invalid-feedback">
                                {{ $errors->first('medicineName') }}
                            </div>
                        @endif
                    </div>
                    
                    <p>剤型</p>
                    <div class="radio-inline">     
                        <label for="oral">
                        <input
                            id="oral"
                            name="dosageForm"
                            value="oral"
                            type="radio"
                        >
                        内服
                        </label>
                        &emsp;                   
                        <label for="topical">  
                        <input
                            id="topical"
                            name="dosageForm"
                            value="topical"
                            type="radio"
                        >
                        外用
                        </label>
                        @if ($errors->has('dosageForm'))
                            <div class="invalid-feedback">
                                {{ $errors->first('dosageForm') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="work">
                            薬の働き
                        </label>
                        <textarea
                            id="work"
                            name="work"
                            class="form-control {{ $errors->has('work') ? 'is-invalid' : '' }}"
                            value="{{ old('work') }}"
                            placeholder="薬の効能や効果を入力してください"
                            maxlength="1000"
                            rows="5"
                        ></textarea>
                        @if ($errors->has('work'))
                            <div class="invalid-feedback">
                                {{ $errors->first('work') }}
                            </div>
                        @endif
                    </div>

                    <p>用法</p>
                    <div class="radio-inline">     
                        <label for="morning">
                        <input
                            id="morning"
                            name="usage[]"
                            value="morning"
                            type="checkbox"
                        >
                        朝
                        </label>
                        &emsp;                   
                        <label for="noon">  
                        <input
                            id="noon"
                            name="usage[]"
                            value="noon"
                            type="checkbox"
                        >
                        昼
                        </label>
                        &emsp;                   
                        <label for="evening">  
                        <input
                            id="evening"
                            name="usage[]"
                            value="ebening"
                            type="checkbox"
                        >
                        夕方
                        </label>
                        &emsp;                   
                        <label for="night">  
                        <input
                            id="night"
                            name="usage[]"
                            value="night"
                            type="checkbox"
                        >
                        就寝前
                        </label>
                        @if ($errors->has('usage[]'))
                            <div class="invalid-feedback">
                                {{ $errors->first('usage[]') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label>
                            用量（1回量）
                        </label>
                        <div class="col-md-6">
                            <input id="dose" type="number" min="1" class="form-control{{ $errors->has('dose') ? ' is-invalid' : '' }}" name="dose" value="{{ old('dose') }}" required>
                            @if ($errors->has('dose'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('dose') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="caution">
                            注意事項
                        </label>
                        <textarea
                            id="caution"
                            name="caution"
                            class="form-control {{ $errors->has('caution') ? 'is-invalid' : '' }}"
                            value="{{ old('caution') }}"
                            placeholder="服用時に注意事項があれば入力してください"
                            maxlength="1000"
                            rows="5"
                        ></textarea>
                        @if ($errors->has('caution'))
                            <div class="invalid-feedback">
                                {{ $errors->first('caution') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="sideEffect">
                            副作用
                        </label>
                        <textarea
                            id="sideEffect"
                            name="sideEffect"
                            class="form-control {{ $errors->has('sideEffect') ? 'is-invalid' : '' }}"
                            value="{{ old('sideEffect') }}"
                            placeholder="副作用を入力してください"
                            maxlength="1000"
                            rows="5"
                        ></textarea>
                        @if ($errors->has('sideEffect'))
                            <div class="invalid-feedback">
                                {{ $errors->first('sideEffect') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="image_file">
                            薬の画像 
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

