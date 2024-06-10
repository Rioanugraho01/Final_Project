@extends('user-app.app')

@section('content')

<style>
    .card {
        transition: transform 0.3s;
    }
    .card:hover {
        transform: translateY(-15px);
    }
    .hero {
        background-image: url('/assets/animasi.svg');
        width: 100%;
        height: 250px;
    }
    .hero-text {
        padding-top: 80px;
        font-size: 50px;
        font-family: Poetsen One, sans-serif;
    }
    .scholarship-title {
        font-size: 25px;
    }
    .read-more-link {
        text-decoration: none;
    }
</style>

<header class="hero">
    <div class="container-fluid text-center">
        <p class="text-light hero-text">Beasiswa S2</p>
    </div>
</header>

<main>
    <section>
        <div class="container">
            <article class="pt-5">
                <h2 class="scholarship-title"><b>Beasiswa Pendidikan Indonesia (BPI) S2 dari Kemendikbudristek</b></h2>
                <p>Hai Sobat Beasiswa.ID! Tahun ini Kemendikbudristek kembali mengumumkan penerimaan beasiswa S2 untuk guru dan tenaga kependidikan tujuan studi dalam negeri dan luar negeri. Beasiswa pendidik dan tenaga kependidikan ini ditawarkan mealui Beasiswa Pendidikan Indonesia (BPI) Kemendikbudristek Bergelar. Program beasiswa ini menawarkan beragam jenis beasiswa, salah satunya Beasiswa Pendidik dan Tenaga Kependidikan program S2 di dalam […]</p>
                <div class="card-body">
                    <a href="detail-s2" class="read-more-link">Read More >></a>
                </div>
                <hr class="mt-4">
            </article>
            <article>
                <h2 class="scholarship-title"><b>Beasiswa CIMB ASEAN untuk Mahasiswa S1 dan S2</b></h2>
                <p>Hai Sobat Beasiswa.ID! Bagi kamu calon mahasiswa baru Program S1 dan S2 serta mahasiswa on-going (yang sedang berkuliah) dan sedang mencari beasiswa, saat ini CIMB Foundation menawarkan Beasiswa CIMB ASEAN yang bisa kamu coba! Program CIMB ASEAN Scholarship ini ditawarkan bagi pelajar dan mahasiswa dari negara-negara di kawasan ASEAN dalam bentuk Full Scholarship (beasiswa penuh). Berikut informasi selengkapnya</p>
                <div class="card-body">
                    <a href="#" class="read-more-link">Read More >></a>
                </div>
                <hr class="mt-4">
            </article>
            <article>
                <h2 class="scholarship-title"><b>Beasiswa S2 di Universitas Pertahanan (Unhan)</b></h2>
                <p>Hai Sobat Beasiswa.ID! Universitas Pertahanan (Unhan) saat ini menawarkan beasiswa kuliah S2 bagi PNS, TNI/POLRI, serta masyarakat umum dan mancanegara. Para peserta yang berhasil mendapatkan Beasiswa UNHAN akan dibebaskan biaya kuliah (gratis biaya perkuliahan) hingga lulus. Mau tahu apa saja persiapan yang perlu dilakukan? Berikut informasi selengkapnya yang berhasil kami himpun. Profil UNHAN (Universitas Pertahanan)</p>
                <div class="card-body">
                    <a href="#" class="read-more-link">Read More >></a>
                </div>
                <hr class="mt-4">
            </article>
            <article>
                <h2 class="scholarship-title"><b>Beasiswa S2 dan S3 di Universitas Padjadjaran</b></h2>
                <p>Hai Sobat Beasiswa.ID! Bagi Anda yang sedang mencari beasiswa kuliah S2 – S3 di dalam negeri, informasi beasiswa UNPAD boleh banget nih buat dicoba! Universitas Padjadjaran menyelenggarakan Beasiswa S2 – S3 yang terdiri dari dua skema, yaitu Program Beasiswa Unggulan Pascasarjana Padjadjaran (BUPP) dan Beasiswa Program Doktor Padjadjaran (BPDP) Tahun 2024/2025 bagi masyarakat umum yang</p>
                <div class="card-body">
                    <a href="#" class="read-more-link">Read More >></a>
                </div>
                <hr class="mt-4">
            </article>
        </div>
    </section>

    <section class="container d-flex justify-content-center gap-4 pt-5 mt-3">
        <div class="row gap-5">
            @foreach (range(1, 10) as $index)
            <div class="card shadow" style="width: 18rem;">
                <img src="https://www.scholarsofficial.com/wp-content/uploads/2022/04/BEASISWA.png" class="card-img-top" alt="Scholarship Image">
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
                    <a href="detail" class="card-link read-more-link">Read More >></a>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</main>

@include('user-app.footer')
@endsection
