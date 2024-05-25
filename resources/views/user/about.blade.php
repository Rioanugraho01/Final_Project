@extends('user-app.app')

@section('content')
    <style>
        .about-section {
            padding: 50px 0;
        }

        .about-card {
            background-color: #FFFFFF;
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .about-card:hover {
            transform: translateY(-10px);
        }

        .about-image {
            height: 200px;
            object-fit: cover;
            border
        }
    </style>

    <section>
        <div class="container text-dark rounded-5 mt-4" style="background-color: #141E27; width: 87%; height: 600px;">
            <div class="row">
                <div class="col-6 mb-5"><img class="img-fluid" src="{{ asset('assets/about.svg') }}" /></div>
                <div class="col d-md-flex align-items-md-end align-items-lg-center mb-5">
                    <div class="gap-5 ms-3 text-light">
                        <p style="font-size: 40px;  font-family: Poetsen One, sans-serif;">About Us</p>
                        <p>BeasiswaFinder adalah sebuah platform web yang dirancang untuk membantu mahasiswa dalam menemukan
                            informasi tentang berbagai jenis beasiswa yang tersedia. Platform ini menyediakan fitur
                            pencarian yang memungkinkan pengguna untuk menemukan beasiswa yang sesuai dengan kebutuhan
                            mereka berdasarkan kriteria tertentu, seperti tingkat pendidikan, jurusan, atau jenis beasiswa.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="about-header text-center pt-5 mt-5">
        <div class="container">
            <h1>Tentang Kami</h1>
            <p>Mengenal lebih jauh tentang beasiswa finder</p>
        </div>
    </section>

    <section class="about-section pt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card about-card">
                        <img src="https://via.placeholder.com/600x400" class="card-img-top about-image" alt="Our Team">
                        <div class="card-body">
                            <h5 class="card-title">Tim Kami</h5>
                            <p class="card-text">Tim kami terdiri dari para profesional yang berdedikasi dan berpengalaman
                                dalam bidang pendidikan dan pengelolaan beasiswa.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card about-card">
                        <img src="https://via.placeholder.com/600x400" class="card-img-top about-image" alt="Our Values">
                        <div class="card-body">
                            <h5 class="card-title">Nilai-Nilai Kami</h5>
                            <p class="card-text">Kami menjunjung tinggi integritas, transparansi, dan komitmen untuk
                                memberikan yang terbaik dalam setiap layanan kami.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card about-card">
                        <img src="https://via.placeholder.com/600x400" class="card-img-top about-image" alt="Contact Us">
                        <div class="card-body">
                            <h5 class="card-title">Hubungi Kami</h5>
                            <p class="card-text">Jangan ragu untuk menghubungi kami jika Anda memiliki pertanyaan atau
                                membutuhkan informasi lebih lanjut tentang layanan kami.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('user-app.footer')
@endsection
