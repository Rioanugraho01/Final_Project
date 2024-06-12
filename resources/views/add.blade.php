@extends('layouts.user_type.auth')

<style>
    /* form add data */
</style>

@section('content')
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between">
                            <h6>Menambahkan Data Beasiswa</h6>
                            <a href="#" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; Add Data</a>
                        </div>
                        <div class="card-body px-0 pt-0">
                            <div class="table-responsive p-0">
                                <form class="d-flex flex-column align-items-center">
                                    <div class="row d-flex justify-content-center">
                                        <div class="form-group mb-3" style="width: 600px;">
                                            <label for="id">Id</label>
                                            <input type="text" class="form-control" id="id" name="id" placeholder="Masukan Id" required>
                                        </div>
                                        <div class="form-group mb-3" style="width: 600px;">
                                            <label for="gambar">Gambar</label>
                                            <input type="file" class="form-control" id="gambar" name="gambar" required>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div class="form-group mb-3" style="width: 600px;">
                                            <label for="nama_beasiswa">Nama Beasiswa</label>
                                            <input type="text" class="form-control" id="nama_beasiswa" name="nama_beasiswa" placeholder="Masukan Nama Beasiswa" required>
                                        </div>
                                        <div class="form-group mb-3" style="width: 600px;">
                                            <label for="deskripsi">Deskripsi</label>
                                            <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukan Deskripsi" required>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div class="form-group mb-3" style="width: 600px;">
                                            <label for="persyaratan">Persyaratan</label>
                                            <input type="text" class="form-control" id="persyaratan" name="persyaratan" placeholder="Masukan Persyaratan" required>
                                        </div>
                                        <div class="form-group mb-3" style="width: 600px;">
                                            <label for="berkas_pendaftaran">Berkas Pendaftaran</label>
                                            <input type="text" class="form-control" id="berkas_pendaftaran" name="berkas_pendaftaran" placeholder="Masukan Berkas Pendaftaran" required>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div class="form-group mb-3" style="width: 600px;">
                                            <label for="mekanisme_pendaftaran">Mekanisme Pendaftaran</label>
                                            <input type="text" class="form-control" id="mekanisme_pendaftaran" name="mekanisme_pendaftaran" placeholder="Masukan Mekanisme Pendaftaran" required>
                                        </div>
                                        <div class="form-group mb-3" style="width: 600px;">
                                            <label for="seleksi_berkas">Seleksi Berkas</label>
                                            <input type="text" class="form-control" id="seleksi_berkas" name="seleksi_berkas" placeholder="Masukan Seleksi Berkas" required>
                                        </div>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div class="form-group mb-3" style="width: 600px;">
                                            <label for="jadwal_beasiswa">Jadwal Beasiswa</label>
                                            <input type="text" class="form-control" id="jadwal_beasiswa" name="jadwal_beasiswa" placeholder="Masukan Jadwal Beasiswa" required>
                                        </div>
                                        <div class="form-group mb-3" style="width: 600px;">
                                            <label for="kontak">Kontak</label>
                                            <input type="text" class="form-control" id="kontak" name="kontak" placeholder="Masukan Kontak" required>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
