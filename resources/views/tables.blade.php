@extends('layouts.user_type.auth')

@section('content')

<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0 d-flex justify-content-between">
            <h6>Beasiswa Table</h6>
            <a href="add" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; Add Beasiswa</a>
          </div>
          <div class="card-body px-0 pt-0 pb-2 text-center">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gambar</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Beasiswa</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Deskripsi</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Persyaratan</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Berkas Pendaftaran</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mekanisme Pendaftaran</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Seleksi Berkas</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jadwal Beasiswa</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kontak</th>
                    <th class="text-secondary opacity-7"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          1
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="../assets/img/beasiswa1.jpg" class="avatar avatar-sm me-3" alt="beasiswa1">
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">Beasiswa Unggulan</p>
                    </td>
                    <td class="align-middle text-sm">
                      <span class="text-secondary text-xs font-weight-bold">Beasiswa untuk mahasiswa berprestasi</span>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="text-secondary text-xs font-weight-bold">IPK minimal 3.5</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">Transkrip nilai, CV</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">Online melalui website resmi</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">Seleksi berkas dan wawancara</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">Februari - April</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">beasiswa@domain.com</span>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          2
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="../assets/img/beasiswa2.jpg" class="avatar avatar-sm me-3" alt="beasiswa2">
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">Beasiswa Prestasi</p>
                    </td>
                    <td class="align-middle text-sm">
                      <span class="text-secondary text-xs font-weight-bold">Beasiswa untuk mahasiswa aktif dalam organisasi</span>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="text-secondary text-xs font-weight-bold">IPK minimal 3.0</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">Transkrip nilai, sertifikat organisasi</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">Online melalui website resmi</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">Seleksi berkas dan wawancara</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">Maret - Mei</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">prestasi@domain.com</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

@endsection
