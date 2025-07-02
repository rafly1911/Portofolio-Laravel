<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio - MyWebsite</title>

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    
    {{-- Custom CSS --}}
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-dark">
    {{-- Include Navbar --}}
    @include('partials.nav')

    <section class="py-5 bg-secondary text-white position-relative bg-dark"> 
        <div class="containe py-5 "> 
            {{-- Isi --}}
                <div class="container my-5">
                    <div class="row text-center">
                        <div class="col-md-4">
                            <img src="{{ asset('assets/img/tokobunga2.png') }}" class="img-fluid rounded" alt="Gambar 1">
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('assets/img/tokobunga1.png') }}" class="img-fluid rounded" alt="Gambar 2">
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('assets/img/tokobunga3.png') }}" class="img-fluid rounded" alt="Gambar 3">
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col">
                            <p class="text-center fs-5">
                                <p class="text-center fs-5">
                                    Proyek ini dibuat sebagai bagian dari tugas mata kuliah Sistem Basis Data pada semester 4. Dalam proyek ini, kami berkolaborasi sebagai tim untuk merancang dan mengembangkan basis data untuk sebuah toko bunga online. Toko ini dirancang untuk menjual berbagai jenis bunga dan melayani berbagai kebutuhan pelanggan secara daring.
                                    
                                    Sebagai bagian dari tim, tanggung jawab utama saya adalah merancang UI/UX atau antarmuka pengguna dari website. Saya bertanggung jawab penuh dalam mendesain tampilan dan interaksi yang ramah pengguna, memastikan bahwa pengalaman pengguna berjalan dengan lancar dan intuitif. Mulai dari pembuatan wireframe hingga desain akhir, saya memastikan setiap elemen visual dan navigasi berfungsi dengan baik untuk mendukung tujuan bisnis toko bunga ini.
                                </p>
                                                                <div class="d-flex justify-content-center gap-3 mt-4">
                                    <a href="https://www.figma.com/proto/hrjijnIJpFQMB2ygiy4mL7/Tugas-SBD?page-id=0%3A1&node-id=65-33&p=f&viewport=34%2C236%2C0.04&t=Kr836lb1wfSjHUbJ-1&scaling=min-zoom&content-scaling=fixed&starting-point-node-id=65%3A33">
                                        <button class="btn btn-primary btn-lg" type="button">Link UI UX</button>
                                    </a>
                                </div>
                        </div>
                    </div>
                </div>

                <div class="container my-5">
                    <div class="row text-center">
                        <div class="col-md-4">
                            <img src="{{ asset('assets/img/homeevent2.png') }}" class="img-fluid rounded" alt="Gambar 1">
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('assets/img/homeevent1.png') }}" class="img-fluid rounded" alt="Gambar 2">
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('assets/img/homeevent3.png') }}" class="img-fluid rounded" alt="Gambar 3">
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col">
                            <p class="text-center fs-5">
                                Proyek ini dibuat sebagai bagian dari tugas mata kuliah Sistem Basis Data pada semester 4. Dalam proyek ini, kami berkolaborasi sebagai tim untuk merancang dan mengembangkan basis data untuk sebuah toko bunga online. Toko ini dirancang untuk menjual berbagai jenis bunga dan melayani berbagai kebutuhan pelanggan secara daring.
                                <br>  
                                Sebagai bagian dari tim, tanggung jawab utama saya adalah merancang UI/UX atau antarmuka pengguna dari website. Saya bertanggung jawab penuh dalam mendesain tampilan dan interaksi yang ramah pengguna, memastikan bahwa pengalaman pengguna berjalan dengan lancar dan intuitif. Mulai dari pembuatan wireframe hingga desain akhir, saya memastikan setiap elemen visual dan navigasi berfungsi dengan baik untuk mendukung tujuan bisnis toko bunga ini.
                                </p>
                                <div class="d-flex justify-content-center gap-3 mt-4">
                                    <a href="https://www.figma.com/proto/uhXJMxEeaPICm78pc2bsmG/PBW-Home-Event?page-id=0%3A1&node-id=66-452&node-type=frame&viewport=154%2C536%2C0.05&t=VCD87DZT5tjWtcFE-1&scaling=min-zoom&content-scaling=fixed&starting-point-node-id=136%3A416">
                                        <button class="btn btn-primary btn-lg" type="button">Link UI UX</button>
                                    </a>
                                    <a href="https://github.com/rafly1911/HomeEvent">
                                        <button class="btn btn-primary btn-lg" type="button">Github Home Event</button>
                                    </a>
                                </div>

                        </div>
                    </div>
                </div>

        {{-- Batas Isi --}}
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </section>
</body>
</html>