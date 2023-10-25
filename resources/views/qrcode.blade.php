<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>How to Generate QR Code in Laravel 9</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

   <!-- Google Web Fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
     <!-- Customized Bootstrap Stylesheet -->
     <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <!-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) -->
    
</head>

<body>

    <div class="container mt-4">

        <div class="card">
            <div class="card-header">
                <h2>QR Code d'invitation</h2>
            </div>
            <div class="card-body">
                {!! QrCode::size(300)->generate('/show') !!}
            </div>
        </div>

 <!--        <div class="card">
            <div class="card-header">
                <h2> QR Code D'invitation</h2>
            </div>
            <div class="card-body">
                {!! QrCode::size(300)->backgroundColor(255,90,0)->generate('/techvblogs.com/blog/generate-qr-code-laravel-9') !!}
            </div>
        </div>
 -->
    </div>
</body>
</html>