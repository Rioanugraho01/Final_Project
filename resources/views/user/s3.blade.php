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

<section class="hero-section pt-3">
    <div class="container-fluid" style="background-image: url('/assets/animasi.svg'); width: 100%; height: 250px;">
        <p class="hero-text text-light text-center"
            style="padding-top: 80px; font-size: 50px; font-family: Poetsen One, sans-serif;">Beasiswa S3</p>
    </div>
</section>

<section class="main-section">
    <div class="container">
        <article class="beasiswa-item">
            <h2 class="beasiswa-title pt-5">Beasiswa S2 dan S3 di Universitas Padjadjaran</h2>
            <p>Hai Sobat Beasiswa.ID! Bagi Anda yang sedang mencari beasiswa kuliah S2 – S3 di dalam negeri, informasi beasiswa UNPAD boleh banget nih buat dicoba! Universitas Padjadjaran menyelenggarakan Beasiswa S2 – S3 yang terdiri dari dua skema, yaitu Program Beasiswa Unggulan Pascasarjana Padjadjaran (BUPP) dan Beasiswa Program Doktor Padjadjaran (BPDP) Tahun 2024/2025 bagi masyarakat umum yang […]</p>
            <div class="card-body">
                <a href="detail-s3" class="read-more-link">Read More >></a>
            </div>
        </article>
        <hr class="section-divider mt-4">
    </div>
    <div class="container">
        <article class="beasiswa-item">
            <h2 class="beasiswa-title">Beasiswa S3 di University of Warwick, UK</h2>
            <p>Hai Sobat Beasiswa.ID! Tiap tahun University of Warwick menawarkan beasiswa doktor satu ini. Chancellor’s International Scholarship. Sasarannya adalah kandidat-kandidat internasional, seperti Indonesia yang berminat mengambil doktor riset (PhD) dari semua disiplin ilmu yang tersedia di University of Warwick. Pendaftaran dibuka untuk beasiswa doktor 2024 – 2025. Pelamar studah dapat mengajukan aplikasi mulai pertengahan November 2021.</p>
            <div class="card-body">
                <a href="#" class="read-more-link">Read More >></a>
            </div>
        </article>
        <hr class="section-divider mt-4">
    </div>
    <div class="container">
        <article class="beasiswa-item">
            <h2 class="beasiswa-title">Beasiswa S2 dan S3 di University of Oxford, Inggris</h2>
            <p>Hai Sobat Beasiswa.ID! Clarendon Scholarship. Program beasiswa pascasarjana ini rutin ditawarkan University of Oxford, UK. Beasiswa Clarendon merupakan salah satu beasiswa unggulan University of Oxford dan memiliki banyak peminat. Beasiswa ini bersifat penuh yang mendanai kebutuhan studi untuk jenjang S2 atau S3 di universitas terbaik Inggris itu. Setiap tahun sekitar 200 kursi disediakan dan ditujukan</p>
            <div class="card-body">
                <a href="#" class="read-more-link">Read More >></a>
            </div>
        </article>
        <hr class="section-divider mt-4">
    </div>
    <div class="container">
        <article class="beasiswa-item">
            <h2 class="beasiswa-title">Beasiswa S3 HKPFS di Hong Kong</h2>
            <p>Hai Sobat Beasiswa.ID! Ada beasiswa menarik yang ditawarkan Research Grants Council (RGC) Hong Kong bagi peminat internasional yang ingin melanjutkan S3 di universitas-universitas Hong Kong. Programnya Hong Kong PhD Fellowship Scheme (HKPFS). Beasiswa ini menyediakan pendanaan studi di 8 universitas terbaik Hong Kong selama periode PhD, yakni 3 tahun. Beasiswa HKPFS terbuka bagi Anda yang</p>
            <div class="card-body">
                <a href="#" class="read-more-link">Read More >></a>
            </div>
        </article>
        <hr class="section-divider mt-4">
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
@include('user-app.footer')
@endsection
