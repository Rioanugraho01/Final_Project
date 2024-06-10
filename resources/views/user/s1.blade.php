@extends('user-app.app')

@section('content')

<style>
    .card {
        transition: transform 0.3s;
    }
    .card:hover {
        transform: translateY(-15px);
    }
</style>

<header class="pt-3">
    <div class="container-fluid" style="background-image: url('/assets/animasi.svg'); width: 100%; height: 250px;">
        <h1 class="text-light text-center" style="padding-top: 80px; font-size: 50px; font-family: Poetsen One, sans-serif;">Beasiswa S1</h1>
    </div>
</header>

<main>
    <section>
        <div class="container">
            <article>
                <h2 class="pt-5" style="font-size: 25px;"><b>Beasiswa S1 dan D3 dari APERTI BUMN</b></h2>
                <p>Hai Sobat Beasiswa.ID! Bagi kamu lulusan SMA/SMK/Sederajat yang sedang mencari beasiswa kuliah, ada tawaran menarik yang bisa kamu pertimbangkan. Program Beasiswa APERTI BUMN menawarkan beasiswa kuliah penuh sampai lulus. Adapun Perguruan Tinggi yang tergabung dalam APERTI BUMN adalah: Universitas Internasional Semen Indonesia (UISI), Institut Teknologi PLN (IT PLN), Universitas Pertamina (UP), Universitas Logistik dan Bisnis Internasional (ULBI), Politeknik Semen […]</p>
                <div class="card-body">
                    <a href="detail-s1" style="text-decoration: none;">Read More >></a>
                </div>
                <hr class="mt-4">
            </article>
        </div>
        <div class="container">
            <article>
                <h2 style="font-size: 25px;"><b>Beasiswa S1 Glow & Lovely Bintang Beasiswa</b></h2>
                <p>Hai Sobat Beasiswa.ID! Saat ini Glow & Lovely Bintang Beasiswa membuka kesempatan bagi Anda yang ingin melanjutkan pendidikan ke jenjang sarjana di sejumlah perguruan tinggi negeri (PTN) dalam negeri pada 2024. Beasiswa S1 ini ditujukan bagi siswi kelas 12 atau lulusan SMA/MA/SMK dan sederajat di tanah air. Beasiswa ini spesial karena hanya ditujukan bagi kaum</p>
                <div class="card-body">
                    <a href="#" style="text-decoration: none;">Read More >></a>
                </div>
                <hr class="mt-4">
            </article>
        </div>
        <div class="container">
            <article>
                <h2 style="font-size: 25px;"><b>Beasiswa CIMB ASEAN untuk Mahasiswa S1 dan S2</b></h2>
                <p>Hai Sobat Beasiswa.ID! Bagi kamu calon mahasiswa baru Program S1 dan S2 serta mahasiswa on-going (yang sedang berkuliah) dan sedang mencari beasiswa, saat ini CIMB Foundation menawarkan Beasiswa CIMB ASEAN yang bisa kamu coba! Program CIMB ASEAN Scholarship ini ditawarkan bagi pelajar dan mahasiswa dari negara-negara di kawasan ASEAN dalam bentuk Full Scholarship (beasiswa penuh). Berikut informasi selengkapnya</p>
                <div class="card-body">
                    <a href="#" style="text-decoration: none;">Read More >></a>
                </div>
                <hr class="mt-4">
            </article>
        </div>
        <div class="container">
            <article>
                <h2 style="font-size: 25px;"><b>Beasiswa DataPrint untuk Pelajar SMP, SMA dan Mahasiswa</b></h2>
                <p>Hai Sobat Beasiswa.ID! Bagi kamu pelajar dan mahasiswa Indonesia, ada tawaran beasiswa yang bisa kamu pertimbangkan untuk diikuti. Program Beasiswa DataPrint 2024 kembali dibuka untuk Periode 2! Beasiswa tahun 2024 ini dibuka untuk pelajar SMP/SMA serta mahasiswa perguruan tinggi jenjang Diploma (D3 & D4) dan Sarjana (S1) di seluruh Indonesia. Beasiswa DataPrint yang dibagikan diharapkan dapat meringankan biaya pendidikan</p>
                <div class="card-body">
                    <a href="#" style="text-decoration: none;">Read More >></a>
                </div>
                <hr class="mt-4">
            </article>
        </div>
    </section>

    <section class="container d-flex justify-content-center gap-4 pt-5 mt-3">
        <div class="row gap-5">
            @foreach(range(1, 8) as $index)
                <div class="card shadow" style="width: 18rem;">
                    <img src="https://www.scholarsofficial.com/wp-content/uploads/2022/04/BEASISWA.png" class="card-img-top" alt="Beasiswa Image">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <i class="fas fa-clock"></i><span class="ps-1"> WAKTU</span>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-map-marker-alt"></i><span class="ps-2"> TEMPAT</span>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-users"></i><span class="ps-1"> KUOTA</span>
                        </li>
                    </ul>
                    <div class="card-body text-center">
                        <a href="#" class="card-link" style="text-decoration: none;">Read More >></a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</main>

<footer>
    @include('user-app.footer')
</footer>

@endsection
