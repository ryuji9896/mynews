@extends('layouts.profile')
@section('title', 'プロフィールの新規作成')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h3>Myプロフィール</h3>
                <form action="{{ route('admin.profile.create') }}" method="post" enctype="multipart/form-data">
                    
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error}}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">氏名</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">性別</label>
                        <div class="col-md-2">
                            <input type="radio"  class="form-check-input" name="gender" id="gender1" value="男" {{ old('gender') == '男'?'checked' :'' }}>
                            <label for="gender1" class="form-check-label">男</label>
                        </div>
                        <div class="col-md-2">
                            <input type="radio"  class="form-check-input" name="gender" id="gender2"  value="女" {{ old('gender') == '女'?'checked' :'' }}>
                            <label for="gender2" class="form-check-label">女</label>
                        </div>
                        <div class="col-md-2">
                            <input type="radio"  class="form-check-input" name="gender" id="gender3"  value="その他" {{ old('gender') == 'その他'?'checked' :'' }}>
                            <label for="gender3" class="form-check-label">その他</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">趣味</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" name="hobby" value="{{ old('hobby') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">自己紹介欄</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="introduction" rows="20">{{ old('introduction') }}</textarea>
                        </div>
                    </div>
                    @csrf
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection