@extends('layout')

@section('content')
    <!-- Submit Form -->
    <form action="/generate" method="POST">
        @CSRF
        <div class="input-group input-group-lg">
            <input name="full_url" type="text" class="form-control" placeholder="請輸入網址" required>
            <button type="submit" class="btn btn-primary">產生短網址</button>
        </div>
    </form>
    @error('full_url')
        <div class="alert alert-danger mt-4 mb-0">{{ $message }}</div>
    @enderror
@endsection