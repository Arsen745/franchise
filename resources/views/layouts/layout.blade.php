<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Franchise</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/sweetalert2/5.3.5/sweetalert2.min.css">
    @vite(['resources/js/app.js'])
    @stack('scripts')
</head>
<body>
<div id="client">
    <main class="client-content">
        @yield('client-content')
    </main>
</div>
<script src="https://cdn.jsdelivr.net/sweetalert2/5.3.5/sweetalert2.min.js"></script>
@if(session('success'))
    <script>
        swal({
            title: "Спасибо!",
            text: "{{ session('success') }}",
            type: "success",
            timer: 2500,
            showConfirmButton: false
        });
    </script>
@endif
</body>
</html>
