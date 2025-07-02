<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - MyWebsite</title>

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    
    {{-- Custom CSS --}}
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-light">
    @include('partials.nav')
    {{-- Header Section --}}
    <section class="py-5 bg-secondary text-white position-relative bg-dark">
    <!-- Baris Pertama (4 kotak) -->
    <div class="container py-5 text-center">
        <h1 class="fw-bold mb-2">My Skill</h1>
        <h2 class="fw-light mb-5">Using Now</h2>

        <!-- Baris Pertama -->
        <div class="row justify-content-center text-center mb-5">
            <div class="col-6 col-md-3 mb-4">
                <img src="{{ asset('assets/img/figma.png') }}" alt="Figma" style="width: 60px; height: 60px;" class="mb-2">
                <h5 class="m-0">Figma</h5>
            </div>
            <div class="col-6 col-md-3 mb-4">
                <img src="{{ asset('assets/img/html_5.png') }}" alt="HTML" style="width: 60px; height: 60px;" class="mb-2">
                <h5 class="m-0">HTML</h5>
            </div>
            <div class="col-6 col-md-3 mb-4">
                <img src="{{ asset('assets/img/bootstrap.png') }}" alt="Bootstrap" style="width: 60px; height: 60px;" class="mb-2">
                <h5 class="m-0">Bootstrap</h5>
            </div>
            <div class="col-6 col-md-3 mb-4">
                <img src="{{ asset('assets/img/laravel 1.png') }}" alt="Laravel" style="width: 60px; height: 60px;" class="mb-2">
                <h5 class="m-0">Laravel</h5>
            </div>
        </div>

        <!-- Baris Kedua -->
        <div class="row justify-content-center text-center">
            <div class="col-6 col-md-3 mb-4">
                <img src="{{ asset('assets/img/Canva.png') }}" alt="Canva" style="width: 60px; height: 60px;" class="mb-2">
                <h5 class="m-0">Canva</h5>
            </div>
            <div class="col-6 col-md-3 mb-4">
                <img src="{{ asset('assets/img/css_3.png') }}" alt="CSS" style="width: 60px; height: 60px;" class="mb-2">
                <h5 class="m-0">CSS</h5>
            </div>
            <div class="col-6 col-md-3 mb-4">
                <img src="{{ asset('assets/img/mysql.png') }}" alt="MySQL" style="width: 60px; height: 60px;" class="mb-2">
                <h5 class="m-0">MySQL</h5>
            </div>
            <div class="col-6 col-md-3 mb-4">
                <img src="{{ asset('assets/img/Frame 2.png') }}" alt="Power BI" style="width: 60px; height: 60px;" class="mb-2">
                <h5 class="m-0">Power BI</h5>
            </div>
        </div>

        <h2 class="fw-light mb-5">Learning</h2>
        <div class="row justify-content-center text-center mb-5">
            <div class="col-6 col-md-3 mb-4">
                <img src="{{ asset('assets/img/Oracle.png') }}" alt="Power BI" style="width: 60px; height: 60px;" class="mb-2">
                <h5 class="m-0">Oracle</h5>
            </div>
            <div class="col-6 col-md-3 mb-4">
                <img src="{{ asset('assets/img/Javascript.png') }}" alt="Power BI" style="width: 60px; height: 60px;" class="mb-2">
                <h5 class="m-0">JavaScript</h5>
            </div>
            <div class="col-6 col-md-3 mb-4">
                <img src="{{ asset('assets/img/python.png') }}" alt="Power BI" style="width: 60px; height: 60px;" class="mb-2">
                <h5 class="m-0">Python</h5>
            </div>
            <div class="col-6 col-md-3 mb-4">
                <img src="{{ asset('assets/img/adobe_lightroom.png') }}" alt="Power BI" style="width: 60px; height: 60px;" class="mb-2">
                <h5 class="m-0">Adobe Lightroom</h5>
            </div>
        </div>

    </div>


    </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>