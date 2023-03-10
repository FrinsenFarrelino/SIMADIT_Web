@extends('layouts.main') @section('body')

<div class="main-wrapper">
    <!-- Sidebar -->
    @include('partials.sidebar-ia')
    <!-- End of Sidebar -->

    <div class="page-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('partials.navbar')
        <!-- partial -->

        <!-- Body -->
        <div class="page-content">
            <div style="overflow-x: auto" class="mb-4">
                <div class="d-flex text-center">
                    <div
                        class="col-2 bg-success text-white border border-light py-3 px-2"
                    >
                        <div>Tahap 1 :</div>
                        <div>Informasi Objek Audit</div>
                    </div>
                    <div
                        class="col-2 bg-success text-white border-light py-3 px-2"
                    >
                        <div>Tahap 2 :</div>
                        <div>Penentuan Framework</div>
                    </div>
                    <div
                        class="col-2 bg-success text-white border border-light py-3 px-2"
                    >
                        <div>Tahap 3 :</div>
                        <div>Penentuan Tim Auditor</div>
                    </div>
                    <div
                        class="col-2 bg-success text-white border border-light py-3 px-2"
                    >
                        <div>Tahap 4 :</div>
                        <div>Validasi Hasil Audit</div>
                    </div>
                    <div
                        class="col-2 bg-success text-white border border-light py-3 px-2"
                    >
                        <div>Tahap 5 :</div>
                        <div>Analisis Hasil Audit</div>
                    </div>
                    <div
                        class="col-2 bg-light border border-light py-3 px-2"
                        style="--bs-bg-opacity: 0.5"
                    >
                        <div>Tahap 6 :</div>
                        <div>Rekomendasi</div>
                    </div>
                    <div
                        class="col-2 bg-secondary border border-light py-3 px-2"
                        style="--bs-bg-opacity: 0.5"
                    >
                        <div>Tahap 7 :</div>
                        <div>Laporan Audit</div>
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <h4 class="mb-3 mb-md-0 fs-3">Rekomendasi</h4>
            </div>

            <div class="d-flex justify-content-end mb-3">
                <button
                    class="mx-2 btn btn-success"
                    onclick="showSwal('passing-parameter-execute-cancel')"
                >
                    <i class="icon-md me-2" data-feather="save"></i>Simpan
                    Perubahan
                </button>
            </div>

            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="text-start fw-bold fs-3 mb-3">
                                Daftar Unit
                            </div>
                            <div style="overflow-x: auto">
                                <div class="d-flex flex-nowrap mb-4">
                                    <button
                                        id="pmb"
                                        class="btn btn-primary mx-2 col-4"
                                    >
                                        Penerimaan Mahasiswa Baru
                                    </button>
                                    <button
                                        id="lsp"
                                        class="btn btn-primary mx-2 col-4"
                                    >
                                        Lembaga Setifikasi Profesi
                                    </button>
                                    <button
                                        id="ba"
                                        class="btn btn-primary mx-2 col-4"
                                    >
                                        Biro Akademik
                                    </button>
                                    <button
                                        id="bk"
                                        class="btn btn-primary mx-2 col-4"
                                    >
                                        Biro Keuangan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="fw-bold mb-3 fs-4">Temuan</div>
                            <div class="table-responsive">
                                <table id="dataTableExample" class="table">
                                    <thead>
                                        <tr>
                                            <th>Judul Temuan</th>
                                            <th>Waktu Penyelesaian</th>
                                            <th>Detail Temuan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="align-middle">
                                        <tr>
                                            <td>SDM Pengelola Keuangan</td>
                                            <td>12 September 2022</td>
                                            <td>
                                                <button
                                                    class="btn btn-outline-primary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#temuanModal"
                                                >
                                                    Lihat Temuan<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </button>
                                            </td>
                                            <td>
                                                <a
                                                    href="/tindak-tahap6-rekomendasi-ia"
                                                >
                                                    <button
                                                        class="btn btn-primary mx-2"
                                                    >
                                                        Buat Rekomendasi
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>SDM Pengelola Keuangan</td>
                                            <td>12 September 2022</td>
                                            <td>
                                                <button
                                                    class="btn btn-outline-primary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#temuanModal"
                                                >
                                                    Lihat Temuan<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </button>
                                            </td>
                                            <td>
                                                <a
                                                    href="/tindak-tahap6-rekomendasi-ia"
                                                >
                                                    <button
                                                        class="btn btn-primary mx-2"
                                                    >
                                                        Buat Rekomendasi
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>SDM Pengelola Keuangan</td>
                                            <td>12 September 2022</td>
                                            <td>
                                                <button
                                                    class="btn btn-outline-primary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#temuanModal"
                                                >
                                                    Lihat Temuan<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </button>
                                            </td>
                                            <td>
                                                <a
                                                    href="/tindak-tahap6-rekomendasi-ia"
                                                >
                                                    <button
                                                        class="btn btn-primary mx-2"
                                                    >
                                                        Buat Rekomendasi
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>SDM Pengelola Keuangan</td>
                                            <td>12 September 2022</td>
                                            <td>
                                                <button
                                                    class="btn btn-outline-primary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#temuanModal"
                                                >
                                                    Lihat Temuan<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </button>
                                            </td>
                                            <td>
                                                <a
                                                    href="/tindak-tahap6-rekomendasi-ia"
                                                >
                                                    <button
                                                        class="btn btn-primary mx-2"
                                                    >
                                                        Buat Rekomendasi
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('components.temuan-modal')

            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div
                                class="d-flex justify-content-between align-items-center mb-3"
                            >
                                <div class="fw-bold fs-5">
                                    <span
                                        class="bg-dark rounded-5 p-2 text-white me-2"
                                        >1</span
                                    >
                                    Rekomendasi SDM Pengelola Keuangan
                                </div>
                                <button class="btn btn-primary">
                                    <i class="icon-md" data-feather="plus"></i>
                                </button>
                            </div>
                            <div class="border border-1 p-3">
                                <div
                                    class="d-flex justify-content-between align-items-center mb-3"
                                >
                                    <div>
                                        1. Pergantian SDM Pengelola Keuangan
                                    </div>
                                    <div class="d-flex">
                                        <button
                                            class="btn btn-outline-primary mx-2"
                                        >
                                            <i
                                                class="icon-md"
                                                data-feather="eye"
                                            ></i>
                                        </button>
                                        <button class="btn btn-primary mx-2">
                                            <i
                                                class="icon-md"
                                                data-feather="edit"
                                            ></i>
                                        </button>
                                        <button class="btn btn-danger mx-2">
                                            <i
                                                class="icon-md"
                                                data-feather="trash"
                                            ></i>
                                        </button>
                                    </div>
                                </div>
                                <div
                                    class="d-flex justify-content-between align-items-center"
                                >
                                    <div>
                                        2. Pergantian SDM Pengelola Keuangan
                                    </div>
                                    <div class="d-flex">
                                        <button
                                            class="btn btn-outline-primary mx-2"
                                        >
                                            <i
                                                class="icon-md"
                                                data-feather="eye"
                                            ></i>
                                        </button>
                                        <button class="btn btn-primary mx-2">
                                            <i
                                                class="icon-md"
                                                data-feather="edit"
                                            ></i>
                                        </button>
                                        <button class="btn btn-danger mx-2">
                                            <i
                                                class="icon-md"
                                                data-feather="trash"
                                            ></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pt-5">
                <div class="d-flex justify-content-between">
                    <a href="/tindak-tahap5-ia"
                        ><button class="btn btn-primary">Kembali</button></a
                    >
                    <button
                        class="btn btn-success"
                        data-bs-toggle="modal"
                        data-bs-target="#validasi"
                    >
                        Validasi
                    </button>
                    <a href="/tindak-tahap7-ia"
                        ><button class="btn btn-primary">Selanjutnya</button></a
                    >
                </div>
            </div>
            @include('components.validasi-modal')
        </div>
    </div>
</div>

@endsection
