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
<body class="bg-light">
    <!-- Container -->
    <div class="container" style="max-width: 720px">
        <!-- Content -->
        <div class="bg-white py-5 px-4 mt-5 rounded-3 text-center border">
            <h2 class="fw-bold mb-5">
                <a class="text-decoration-none" href="/">短網址產生器</a>
            </h2>
            
            @yield('content')
            
        </div>

        <!-- Footer -->
        <div class="text-center mt-3 py-1">
            <h6>
                <strong>Kevin Chen © {{ date('Y') <= 2022 ? date('Y') : '2022 - ' . date('Y') }}</strong>
            </h6>
            <h6 class="my-2">
                <a class="text-decoration-none" href="https://github.com/D1034181036/Short-URL" target="_blank">GitHub</a>
            </h6>
        </div>
    </div>
</body>
</html>