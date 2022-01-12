@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('フレンド検索') }}</div>

        <div class="card-body">
          <form action="/search" method="POST">
            @csrf
            <div class="row mb-3">
              <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('ゲームタイトル') }}</label>
              <div class="col-md-6">
                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                  value="{{ old('title') }}" required autocomplete="title" autofocus>
                {{-- @error('title')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror --}}
              </div>
            </div>
            <div class="row mb-3">
              <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('機種') }}</label>
              <div class="col-md-6">
                <select class="form-select" aria-label="Default select example">
                  <option selected></option>
                  <option value="pc">PC</option>
                  <option value="ps">PS4/PS5</option>
                  <option value="switch">Switch</option>
                  <option value="phone">スマホ</option>
                  <option value="xbox">XboxOne</option>
                </select>
              </div>
            </div>
            <div class="row mb-3">
              <label for="time" class="col-md-4 col-form-label text-md-end">{{ __('投稿時間') }}</label>
              <div class="col-md-6">
                <select class="form-select" aria-label="Default select example">
                  <option selected></option>
                  <option value="1">30分以内</option>
                  <option value="2">1時間以内</option>
                  <option value="3">今日まで</option>
                  <option value="4">昨日まで</option>
                  <option value="5">昨日より前</option>
                </select>
              </div>
            </div>
            <div class="row mb-3">
              <label for="comment" class="col-md-4 col-form-label text-md-end">コメント</label>
              <div class="col-md-6">
                <textarea class="form-control" id="comment" rows="3" name="comment"></textarea>
              </div>
            </div>
            <div class="d-md-flex justify-content-md-end">
              <button type="submit" class="btn btn-outline-primary">検索</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection