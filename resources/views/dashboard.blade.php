<x-app-layout>
    <!-- heading -->
    <div class="container">
        <div class="primary-bg" style="padding: 40px 0px !important;">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-8 d-md-none text-center">
                    <img src="images/logormv.png" class="heading-img w-full" style="margin-bottom: 8%;">
                </div>
                <div class="col-md-6 text-center text-md-start fade-x-left">
                    <div class="fs-2 fw-bold d-md-flex">
                        <span class="fs-sm-7" style="margin-top: 30px;">SPKPTL APP</span>
                    </div>
                    <div class="my-3 fs-8" style="font-size: 18px;">
                        Selamat datang di sistem pendukung keputusan pemilihan tempat liburan! Kami di sini untuk membantu kamu menemukan destinasi liburan yang paling sesuai dengan keinginan dan kebutuhanmu. Hanya dengan beberapa klik, kamu bisa mendapatkan rekomendasi tempat liburan yang akan membuat liburanmu tak terlupakan. Mari mulai petualanganmu sekarang!
                    </div>
                    <div class="fs-4 fw-bold d-md-flex">
                        <span class="fs-sm-7" style="margin-bottom: 10px">Apa itu Simple Additive Weighting (SAW)?</span>
                    </div>
                    <div class="my-3 fs-8" style="font-size: 18px;">
                        Simple Additive Weighting (SAW) adalah salah satu metode yang sering digunakan dalam pengambilan keputusan multi-kriteria. Metode ini bekerja dengan cara menjumlahkan nilai dari semua alternatif berdasarkan kriteria yang telah ditentukan dan bobot yang diberikan pada setiap kriteria. Alternatif dengan nilai tertinggi akan menjadi pilihan terbaik.
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="images/logormv.png" class="ms-auto d-none d-md-block w-full fade-x-right">
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-primary text-white text-center text-lg-start">
        <!-- Grid container -->
        <div class="container p-4">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h6 class="text-uppercase">Tentang Kami</h6>
                    <p>
                        Aplikasi Sistem Pendukung Keputusan Pemilihan Tempat Liburan dirancang untuk membantu Anda menemukan destinasi liburan terbaik berdasarkan berbagai kriteria.
                    </p>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            @22090101
            <a class="text-white" href="">SPKPTL.com</a>
        </div>
        <!-- Copyright -->
    </footer>

    <style>
        .heading-card {
            margin-top: 90px;
            position: relative;
            background-color: black;
            border-radius: 10px;
        }

        .heading-card .icon {
            height: 70px;
            width: 70px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 70px;
            top: 0;
            left: 50%;
            background: var(--third);
            background-color: white;
            outline: 8px solid var(--first);
        }

        .heading-img {
            height: auto;
            max-width: 100%;
        }
    </style>
</x-app-layout>
