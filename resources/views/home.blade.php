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

    {{-- Include Navbar --}}
    @include('partials.nav')

    {{-- Header Section --}}
    <section class="py-5 bg-secondary text-white position-relative bg-dark">
        <div class="container ">


            <div class="row align-items-center ">
                <div class="col-md-6 text-center text-md-start">
                    
                    <h1 class="display-1 fw-bold">Hi, I am</h1>
                    <h2 class="fw-medium">Rafly Fadriansyah Ramadhani</h2>
                    <p class="fs-4 fw-light">Undergraduate <br> System Information</p>
                    <p class="fs-5">At <br> Gunadarma University</p>
                </div>
                <div class="col-md-6 text-center ">
                    <img src="{{ asset('assets/img/fotodiri.png') }}" alt="Profile" class="img-fluid" style="max-width: 500px;">
                </div>
            </div>
        </div>
    </section>

    {{-- Social Media Section --}}
    <section class="py-2 bg-light border-top">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                
                {{-- Tulisan kiri --}}
                <h3 class="fw-bold mb-3 mb-md-0">Linkedin Account</h3>
                
                {{-- LinkedIn kanan --}}
                <div class="d-flex align-items-center gap-3">
                    <img src="{{ asset('assets/img/linkedin.png') }}" alt="Social Icon" class="rounded" style="width: 50px;">
                    <a href="https://www.linkedin.com/in/rafly-fadriasnyah-ramadhani/" target="_blank" class="text-decoration-none text-secondary fs-5 fw-light">
                        Rafly Fadriansyah Ramadhani
                    </a>
                </div>

                


            </div>
        </div>
    </section>



    {{-- Extra Content Section --}}
    <section class="py-5 bg-dark text-white">
        <div class="container text-center">
            <h2 class="mb-4">About Me</h2>
            <div class="d-flex justify-content-center gap-4">
                <h5>Mahasiswa semester 6 Program Studi Sistem Informasi di Universitas Gunadarma dengan fokus utama pada pengembangan website seperti UI/UX, HTML, CSS, PHP. Saya fleksibel, kreatif, dan berpikiran terbuka, serta mampu bekerja secara mandiri atau kelompok dengan memanfaatkan keterampilan kepemimpinan dan manajemen proyek yang saya peroleh melalui keterlibatan aktif di Badan Eksekutif Mahasiswa. Selain itu, minat saya yang tinggi dalam bidang UI/UX, Data Analyst membuat saya mendalami kedua bidang tersebut. sehingga dapat memberikan solusi inovatif yang mendukung pengambilan keputusan yang lebih baik.</h5>
            </div>
        </div>

        @include('partials.foother')
    </section>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous"></script>
</body>
</html>
