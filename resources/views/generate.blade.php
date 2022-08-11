@extends('layout')

@section('content')
    <div class="input-group input-group-lg">
        <input type="text" class="form-control text-center" value="{{ $short_url }}" readonly>
    </div>
@endsection