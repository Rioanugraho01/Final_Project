@extends('user-app.app')

@section('content')
    <style>
        /* Icon Rating */
        .rating {
            display: flex;
            justify-content: start;
            flex-direction: row-reverse;
            gap: 0.3rem;
            --stroke: #666;
            --fill: #ffc73a;
        }

        .rating input {
            appearance: unset;
        }

        .rating label {
            cursor: pointer;
        }

        .rating svg {
            width: 2rem;
            height: 2rem;
            overflow: visible;
            fill: transparent;
            stroke: var(--stroke);
            stroke-linejoin: bevel;
            stroke-dasharray: 12;
            animation: idle 4s linear infinite;
            transition: stroke 0.2s, fill 0.5s;
        }

        @keyframes idle {
            from {
                stroke-dashoffset: 24;
            }
        }

        .rating label:hover svg {
            stroke: var(--fill);
        }

        .rating input:checked~label svg {
            transition: 0s;
            animation: idle 4s linear infinite, yippee 0.75s backwards;
            fill: var(--fill);
            stroke: var(--fill);
            stroke-opacity: 0;
            stroke-dasharray: 0;
            stroke-linejoin: miter;
            stroke-width: 8px;
        }

        @keyframes yippee {
            0% {
                transform: scale(1);
                fill: var(--fill);
                fill-opacity: 0;
                stroke-opacity: 1;
                stroke: var(--stroke);
                stroke-dasharray: 10;
                stroke-width: 1px;
                stroke-linejoin: bevel;
            }

            30% {
                transform: scale(0);
                fill: var(--fill);
                fill-opacity: 0;
                stroke-opacity: 1;
                stroke: var(--stroke);
                stroke-dasharray: 10;
                stroke-width: 1px;
                stroke-linejoin: bevel;
            }

            30.1% {
                stroke: var(--fill);
                stroke-dasharray: 0;
                stroke-linejoin: miter;
                stroke-width: 8px;
            }

            60% {
                transform: scale(1.2);
                fill: var(--fill);
            }
        }
    </style>

    <section class="pt-3">
        <div class="container-fluid" style= "background-image: url('/assets/animasi.svg'); width: 100%; height: 250px;">
            <p class="text-light text-center"
                style="padding-top: 70px; font-size: 50px; font-family: Poetsen One, sans-serif;">Detail Beasiswa</p>
        </div>
    </section>

    <section>
        <div class="container">
            <p class="pt-5" style="font-size: 25px;"><b>Beasiswa S1 Glow & Lovely Bintang Beasiswa</b></p>
            <p>Hai Sobat Beasiswa.ID! Saat ini Glow & Lovely Bintang Beasiswa membuka kesempatan bagi Anda yang ingin
                melanjutkan pendidikan ke jenjang sarjana di <br>sejumlah perguruan tinggi negeri (PTN) dalam negeri pada
                2024. Beasiswa S1 ini ditujukan bagi siswi kelas 12 atau lulusan SMA/MA/SMK dan sederajat di tanah <br>air.
                Beasiswa ini spesial karena hanya ditujukan bagi kaum perempuan. Jadi, bila Anda adalah perempuan tamatan
                SMA/SMK atau MA atau siswi kelas 12, <br>kesempatan ini sayang untuk dilewatkan.</p>
            <p>Glow & Lovely Bintang Beasiswa menawarkan bantuan biaya pendidikan tunai sebesar Rp 17.500.000 dengan rincian
                Tahun 1: Rp 10.000.000, Tahun 2: Rp <br>2.500.000, Tahun 3: Rp 2.500.000, dan Tahun 4: Rp 2.500.000.
                Beasiswa disalurkan kepada penerima setiap awal semester ganjil selama 4 tahun. Selain <br>dukungan biaya
                pendidikan, kandidat penerima beasiswa juga memperoleh laptop serta pendampingan (capacity building) setiap
                tahunnya untuk 4 tahun perkuliahan. Materi pendampingan disesuaikan dengan kurikulum dari Hoshizora
                Foundation.</p>
            <p>Tahun ini, sebanyak 80 kandidat akan dipilih sebagai penerima beasiswa dari Glow & Lovely Bintang Beasiswa.
                Sasarannya adalah perempuan lulusan <br>SMA/SMK/MA/sederajat yang memenuhi kriteria masuk PTN berakreditasi
                A atau B tahun 2024 serta memiliki gagasan untuk berkontribusi di masyarakat, <br>berprestasi, dan memiliki
                motivasi tinggi namun memiliki keterbatasan secara finansial.</p>
            <hr class="mt-4">
        </div>
        <div class="container">
            <p style="font-size: 25px;"><b>Persyaratan</b></p>
            <p>1. Siswi kelas 12 atau lulusan SMA/SMK/MA/sederajat 3 tahun terakhir yang dapat mendaftar seleksi masuk PTN
                tahun 2024. <br>2. Siswi mendaftarkan diri melalui salah satu jalur: <br><span class="ps-4">- Seleksi
                    Nasional Berdasarkan Prestasi (SNBP)/Seleksi Prestasi/sederajat.</span> <br><span class="ps-4">-
                    Seleksi Nasional Berbasis Tes (SNBT)/sederajat. <br>3. Memiliki potensi akademik dan non-akademik
                    dibuktikan dengan fotokopi atau scan piagam prestasi lomba (jika ada). <br>4. Memiliki rencana studi di
                    PTN yang diinginkan dan gagasan untuk berkontribusi kepada masyarakat. <br>5. Berkomitmen untuk
                    menyelesaikan studi di universitas terpilih.</span></p>
            <hr class="mt-4">
        </div>
        <div class="container">
            <p style="font-size: 25px;"><b>Berkas Pendaftaran</b></p>
            <p>1. Pas foto terbaru ukuran 3X4 <br>2. Surat keterangan penghasilan dari kelurahan atau balai desa. (pilih
                salah satu dan harus ada nominalnya)</span> <br>3. Kartu Keluarga <br>4. Scan raport semester 1 sampai 5
                (ukuran max 10 mb, max 10 files)</p>
            <hr class="mt-4">
        </div>
        <div class="container">
            <p style="font-size: 25px;"><b>Mekanisme pendaftaran</b></p>
            <p>1. Sosialisasi online dilakukan mulai bulan Maret-April 2024 di seluruh Indonesia. Calon peserta mendaftarkan
                diri dengan submit data pada form di www.galbintangbeasiswa.com.*<br>2. Tim Hoshizora Foundation akan
                menyeleksi berkas pendaftar dan mengumumkan hasil seleksi berkas pada bulan Mei-Juni 2024.* <br>3. Calon
                peserta yang lolos seleksi berkas akan melanjutkan ke tahap seleksi interview secara online selama bulan
                Juni-Juli 2024.* <br>4. Peserta yang lolos seleksi interview akan melanjutkan ke tahap home-visit secara
                online selama bulan Juli-September 2024.*</p>
            <hr class="mt-4">
        </div>
        <div class="container">
            <p style="font-size: 25px;"><b>Seleksi berkas</b></p>
            <p>Interview online : <br>1. Calon peserta beasiswa yang telah lulus tahap seleksi berkas akan mendapat undangan
                interview di waktu yang telah ditentukan. <br>2. Interview terhadap calon peserta beasiswa akan dilakukan
                tim Hoshizora Foundation menggunakan guideline yang telah ditentukan. <br>3. Interview dilakukan dengan
                media online seperti telepon atau video call.</p>
            <p>Interview online : <br>1. Calon peserta beasiswa yang telah lulus tahap seleksi berkas akan mendapat undangan
                interview di waktu yang telah ditentukan. <br>2. Interview terhadap calon peserta beasiswa akan dilakukan
                tim Hoshizora Foundation menggunakan guideline yang telah ditentukan. <br>3. Interview dilakukan dengan
                media online seperti telepon atau video call.</p>
            <hr class="mt-4">
        </div>
        {{-- masuk ke mekanisme --}}
        <div class="container">
            <p style="font-size: 25px;"><b>Jadwal Beasiswa</b></p>
            <p>Pendaftaran: 22 Maret s/d 31 Mei 2024 <br>Seleksi Berkas: 1 Juni – 12 Juli 2024 <br>Seleksi Interview & Home
                Visit: 13 Juli s/d 6 September 2024 <br>Pengumuman penerima beasiswa: September 2024</p>
            <hr class="mt-4">
        </div>
        <div class="container">
            <p style="font-size: 25px;"><b>Kontak</b></p>
            <p>[wa] 0821-3439-5655 <br>[e] galbeasiswa@hoshizora.org <br>[w] https://www.kelasberbagicerah.com/id/beasiswa
            </p>
            <hr class="mt-4">
        </div>
        <div class="container">
            <p><b>Berikan Rating Terbaikmu 🙂</b></p>
            <div class="rating">
                <input type="radio" id="star-1" name="star-radio" value="star-1">
                <label for="star-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path pathLength="360"
                            d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z">
                        </path>
                    </svg>
                </label>
                <input type="radio" id="star-2" name="star-radio" value="star-1">
                <label for="star-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path pathLength="360"
                            d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z">
                        </path>
                    </svg>
                </label>
                <input type="radio" id="star-3" name="star-radio" value="star-1">
                <label for="star-3">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path pathLength="360"
                            d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z">
                        </path>
                    </svg>
                </label>
                <input type="radio" id="star-4" name="star-radio" value="star-1">
                <label for="star-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path pathLength="360"
                            d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z">
                        </path>
                    </svg>
                </label>
                <input type="radio" id="star-5" name="star-radio" value="star-1">
                <label for="star-5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path pathLength="360"
                            d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z">
                        </path>
                    </svg>
                </label>
            </div>
        </div>
    </section>
    @include('user-app.footer')
@endsection
