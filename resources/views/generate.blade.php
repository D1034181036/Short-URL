@extends('layout')

@section('content')

            <div class="input-group input-group-lg">
                <input id="short_url" type="text" class="form-control text-center" value="{{ $short_url }}" readonly>
                <button class="btn btn-primary" data-clipboard-target="#short_url">複製</button>
            </div>

            <script src="{{ url('assets/clipboard.min.js') }}"></script>
            <script>
                new ClipboardJS('.btn');
            </script>
@endsection