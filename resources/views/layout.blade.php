<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>短網址產生器</title>
    <meta name="description" content="短網址產生器">
    <link rel="icon" sizes="192x192" href="{{ url('favicon.svg') }}">
    
    <!-- Bootstrap css -->
    <link href="{{ url('assets/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>

    <div class="container" style="max-width: 720px">
        <div class="py-5 px-3 my-5 rounded-3 text-center border">
            <a class="text-decoration-none" href="/"><h2 class="fw-bold mb-5">短網址產生器</h2></a>
            
            @yield('content')
            
        </div>
    </div>

    <!-- Bootstrap js -->
    <script src="{{ url('assets/bootstrap.bundle.min.js') }}"></script>
</body>
</html>