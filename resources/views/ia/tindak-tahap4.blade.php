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
                        class="col-2 bg-light border border-light py-3 px-2"
                        style="--bs-bg-opacity: 0.5"
                    >
                        <div>Tahap 4 :</div>
                        <div>Validasi Hasil Audit</div>
                    </div>
                    <div
                        class="col-2 bg-secondary border border-light py-3 px-2"
                        style="--bs-bg-opacity: 0.5"
                    >
                        <div>Tahap 5 :</div>
                        <div>Analisis Hasil Audit</div>
                    </div>
                    <div
                        class="col-2 bg-secondary border border-light py-3 px-2"
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
                <h4 class="mb-3 mb-md-0 fs-3">Validasi Hasil Audit</h4>
            </div>

            <div class="d-flex justify-content-end mb-3">
                <button
                    class="mx-2 btn btn-primary"
                    onclick="showSwal('passing-parameter-verifikasi-cancel')"
                >
                    <i class="icon-md me-2" data-feather="check-circle"></i
                    >Verifikasi
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
                                        Lembaga Sertifikasi Profesi
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

            <div class="row mb-5">
                <div class="d-flex">
                    <button id="edm01" class="btn mx-2">EDM01</button>
                    <button id="edm02" class="btn mx-2">EDM02</button>
                    <button id="apo01" class="btn mx-2">APO01</button>
                    <button id="bai03" class="btn mx-2">BAI03</button>
                    <button id="bai05" class="btn mx-2">BAI05</button>
                    <button id="temuan" class="btn mx-2">Temuan</button>
                    <button id="nilai" class="btn mx-2">Nilai Auditee</button>
                    <button id="jurnal" class="btn mx-2">Jurnal</button>
                </div>
            </div>

            <div id="hasil" class="d-none">
                <div class="d-flex justify-content-end mb-3">
                    <button class="mx-2 btn btn-primary">
                        <i class="icon-md me-2" data-feather="printer"></i>Cetak
                        Framework
                    </button>
                </div>

                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="fw-bold fs-4 mb-3">
                                    Deskripsi Subdomain
                                </div>
                                <div class="mb-3">
                                    <span id="nama-framework"></span>
                                    <span class="text-muted"
                                        >(Ensured Governance Framework Setting
                                        and Maintenance)</span
                                    >
                                </div>
                                <div class="border p-4">
                                    <div class="fw-bold mb-2">
                                        Visi Program Studi Teknik Informatika :
                                    </div>
                                    <div>
                                        Menghasilkan lulusan yang mandiri,
                                        berdaya saing, berbasis nilai dan
                                        karakter bangsa serta mampu beradaptasi
                                        terhadap perkembangan teknologi
                                        informasi menuju program studi unggulan
                                        pada tahun 2035
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
                                <div
                                    class="d-flex justify-content-between align-items-center"
                                >
                                    <div>
                                        <span
                                            class="rounded-5 p-2 bg-dark text-white me-2"
                                            >1</span
                                        >
                                        Pertanyaan
                                        <span id="nama-framework"></span>
                                    </div>
                                    <div
                                        class="rounded-5 bg-success px-4 py-2 text-white"
                                    >
                                        Selesai
                                    </div>
                                </div>
                                <hr />
                                <div>
                                    Pertanyaan ke-1 tentang
                                    <span id="nama-framework"></span>
                                </div>
                                <hr />
                                <div>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="col-3">Jawaban</div>
                                        <div class="col-9">
                                            <input
                                                type="text"
                                                class="form-control"
                                                value="Terdapat Kejanggalan"
                                                readonly
                                            />
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="col-3">
                                            Tanggal Penyelesaian
                                        </div>
                                        <div class="col-9">
                                            <div
                                                class="w-100 me-2 mb-2 mb-md-0"
                                            >
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    value="30-Mar-2022"
                                                    readonly
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="col-3">Nilai</div>
                                        <div class="col-9">
                                            <input
                                                type="text"
                                                class="form-control"
                                                value="9"
                                                readonly
                                            />
                                        </div>
                                    </div>
                                </div>
                                <hr />
                                <div class="mb-3">List Bukti (File)</div>
                                <div class="border border-1 p-3 mb-4">
                                    <div
                                        class="d-flex justify-content-between align-items-center mb-3"
                                    >
                                        <div>Lampiran 1.jpg</div>
                                        <div class="d-flex">
                                            <button
                                                class="btn btn-outline-primary mx-2"
                                            >
                                                <i
                                                    class="icon-md"
                                                    data-feather="eye"
                                                ></i>
                                            </button>
                                            <button
                                                class="btn btn-primary mx-2"
                                            >
                                                <i
                                                    class="icon-md"
                                                    data-feather="download"
                                                ></i>
                                            </button>
                                            <button
                                                class="btn btn-secondary mx-2"
                                                disabled
                                            >
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
                                        <div>Lampiran 2.jpg</div>
                                        <div class="d-flex">
                                            <button
                                                class="btn btn-outline-primary mx-2"
                                            >
                                                <i
                                                    class="icon-md"
                                                    data-feather="eye"
                                                ></i>
                                            </button>
                                            <button
                                                class="btn btn-primary mx-2"
                                            >
                                                <i
                                                    class="icon-md"
                                                    data-feather="download"
                                                ></i>
                                            </button>
                                            <button
                                                class="btn btn-secondary mx-2"
                                                disabled
                                            >
                                                <i
                                                    class="icon-md"
                                                    data-feather="trash"
                                                ></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">List Bukti (Link)</div>
                                <div class="border border-1 p-3">
                                    <div
                                        class="d-flex justify-content-between align-items-center mb-3"
                                    >
                                        <div>Halaman Untag</div>
                                        <div class="d-flex">
                                            <button
                                                class="btn btn-outline-primary mx-2"
                                            >
                                                <i
                                                    class="icon-md"
                                                    data-feather="eye"
                                                ></i>
                                            </button>
                                            <button
                                                class="btn btn-primary mx-2"
                                            >
                                                <i
                                                    class="icon-md"
                                                    data-feather="download"
                                                ></i>
                                            </button>
                                            <button
                                                class="btn btn-secondary mx-2"
                                                disabled
                                            >
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
                                        <div>Halaman Untag</div>
                                        <div class="d-flex">
                                            <button
                                                class="btn btn-outline-primary mx-2"
                                            >
                                                <i
                                                    class="icon-md"
                                                    data-feather="eye"
                                                ></i>
                                            </button>
                                            <button
                                                class="btn btn-primary mx-2"
                                            >
                                                <i
                                                    class="icon-md"
                                                    data-feather="download"
                                                ></i>
                                            </button>
                                            <button
                                                class="btn btn-secondary mx-2"
                                                disabled
                                            >
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

                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div
                                    class="d-flex justify-content-between align-items-center"
                                >
                                    <div>
                                        <span
                                            class="rounded-5 p-2 bg-dark text-white me-2"
                                            >2</span
                                        >
                                        Pertanyaan
                                        <span id="nama-framework"></span>
                                    </div>
                                    <div
                                        class="rounded-5 bg-danger px-4 py-2 text-white"
                                    >
                                        Tidak Selesai
                                    </div>
                                </div>
                                <hr />
                                <div>
                                    Pertanyaan ke-2 tentang
                                    <span id="nama-framework"></span>
                                </div>
                                <hr />
                                <div>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="col-3">Jawaban</div>
                                        <div class="col-9">
                                            <input
                                                type="text"
                                                class="form-control"
                                                value="Terdapat Kejanggalan"
                                                readonly
                                            />
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="col-3">
                                            Tanggal Penyelesaian
                                        </div>
                                        <div class="col-9">
                                            <div
                                                class="w-100 me-2 mb-2 mb-md-0"
                                            >
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    value="30-Mar-2022"
                                                    readonly
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="col-3">Nilai</div>
                                        <div class="col-9">
                                            <input
                                                type="text"
                                                class="form-control"
                                                value="9"
                                                readonly
                                            />
                                        </div>
                                    </div>
                                </div>
                                <hr />
                                <div class="mb-3">List Bukti (File)</div>
                                <div class="border border-1 p-3 mb-4">
                                    <div
                                        class="d-flex justify-content-between align-items-center mb-3"
                                    >
                                        <div>Lampiran 1.jpg</div>
                                        <div class="d-flex">
                                            <button
                                                class="btn btn-outline-primary mx-2"
                                            >
                                                <i
                                                    class="icon-md"
                                                    data-feather="eye"
                                                ></i>
                                            </button>
                                            <button
                                                class="btn btn-primary mx-2"
                                            >
                                                <i
                                                    class="icon-md"
                                                    data-feather="download"
                                                ></i>
                                            </button>
                                            <button
                                                class="btn btn-secondary mx-2"
                                                disabled
                                            >
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
                                        <div>Lampiran 2.jpg</div>
                                        <div class="d-flex">
                                            <button
                                                class="btn btn-outline-primary mx-2"
                                            >
                                                <i
                                                    class="icon-md"
                                                    data-feather="eye"
                                                ></i>
                                            </button>
                                            <button
                                                class="btn btn-primary mx-2"
                                            >
                                                <i
                                                    class="icon-md"
                                                    data-feather="download"
                                                ></i>
                                            </button>
                                            <button
                                                class="btn btn-secondary mx-2"
                                                disabled
                                            >
                                                <i
                                                    class="icon-md"
                                                    data-feather="trash"
                                                ></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">List Bukti (Link)</div>
                                <div class="border border-1 p-3">
                                    <div
                                        class="d-flex justify-content-between align-items-center mb-3"
                                    >
                                        <div>Halaman Untag</div>
                                        <div class="d-flex">
                                            <button
                                                class="btn btn-outline-primary mx-2"
                                            >
                                                <i
                                                    class="icon-md"
                                                    data-feather="eye"
                                                ></i>
                                            </button>
                                            <button
                                                class="btn btn-primary mx-2"
                                            >
                                                <i
                                                    class="icon-md"
                                                    data-feather="download"
                                                ></i>
                                            </button>
                                            <button
                                                class="btn btn-secondary mx-2"
                                                disabled
                                            >
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
                                        <div>Halaman Untag</div>
                                        <div class="d-flex">
                                            <button
                                                class="btn btn-outline-primary mx-2"
                                            >
                                                <i
                                                    class="icon-md"
                                                    data-feather="eye"
                                                ></i>
                                            </button>
                                            <button
                                                class="btn btn-primary mx-2"
                                            >
                                                <i
                                                    class="icon-md"
                                                    data-feather="download"
                                                ></i>
                                            </button>
                                            <button
                                                class="btn btn-secondary mx-2"
                                                disabled
                                            >
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
            </div>

            <div id="tampil-temuan" class="d-none">
                <div class="d-flex justify-content-end mb-3">
                    <button class="mx-2 btn btn-primary">
                        <i class="icon-md me-2" data-feather="printer"></i>Cetak
                        Temuan
                    </button>
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
                                                    <div class="d-flex">
                                                        <button
                                                            class="btn btn-outline-secondary mx-2"
                                                            disabled
                                                        >
                                                            Ubah
                                                        </button>
                                                        <button
                                                            class="btn btn-secondary mx-2"
                                                            disabled
                                                        >
                                                            Hapus
                                                        </button>
                                                    </div>
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
                                                    <div class="d-flex">
                                                        <button
                                                            class="btn btn-outline-secondary mx-2"
                                                            disabled
                                                        >
                                                            Ubah
                                                        </button>
                                                        <button
                                                            class="btn btn-secondary mx-2"
                                                            disabled
                                                        >
                                                            Hapus
                                                        </button>
                                                    </div>
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
                                                    <div class="d-flex">
                                                        <button
                                                            class="btn btn-outline-secondary mx-2"
                                                            disabled
                                                        >
                                                            Ubah
                                                        </button>
                                                        <button
                                                            class="btn btn-secondary mx-2"
                                                            disabled
                                                        >
                                                            Hapus
                                                        </button>
                                                    </div>
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
                                                    <div class="d-flex">
                                                        <button
                                                            class="btn btn-outline-secondary mx-2"
                                                            disabled
                                                        >
                                                            Ubah
                                                        </button>
                                                        <button
                                                            class="btn btn-secondary mx-2"
                                                            disabled
                                                        >
                                                            Hapus
                                                        </button>
                                                    </div>
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
            @include('components.temuan-modal')

            <div id="nilai-auditee" class="d-none">
                <div class="d-flex justify-content-end mb-3">
                    <button class="mx-2 btn btn-primary">
                        <i class="icon-md me-2" data-feather="printer"></i>Cetak
                        Nilai
                    </button>
                </div>
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <span
                                        class="rounded-5 p-2 bg-dark text-white me-2"
                                        >1</span
                                    >
                                    Nilai Auditee
                                </div>
                                <hr />
                                <div class="fw-bold fs-5 mb-3">
                                    Rendys Naja Ripando
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="col-3">Nilai</div>
                                    <div class="col-9">
                                        <input
                                            type="text"
                                            class="form-control"
                                            value="10"
                                            readonly
                                        />
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
                                <div>
                                    <span
                                        class="rounded-5 p-2 bg-dark text-white me-2"
                                        >2</span
                                    >
                                    Nilai Auditee
                                </div>
                                <hr />
                                <div class="fw-bold fs-5 mb-3">
                                    Rendys Ripando
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="col-3">Nilai</div>
                                    <div class="col-9">
                                        <input
                                            type="text"
                                            class="form-control"
                                            value="8"
                                            readonly
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="tampil-jurnal" class="d-none">
                <div class="d-flex justify-content-end mb-3">
                    <button class="mx-2 btn btn-primary">
                        <i class="icon-md me-2" data-feather="printer"></i>Cetak
                        Jurnal
                    </button>
                </div>
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="fw-bold">Jurnal</div>
                                <hr />
                                <div class="d-flex align-items-center mb-3">
                                    <div class="col-3">Tanggal</div>
                                    <div class="col-9">
                                        <input
                                            type="text"
                                            class="form-control"
                                            value="10-September-2022"
                                            readonly
                                        />
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="col-3">Jurnal</div>
                                    <div class="col-9">
                                        <textarea
                                            type="text"
                                            class="form-control"
                                            readonly
                                        >
Auditee seperti menyembunyikan sesuatu dari auditor</textarea
                                        >
                                    </div>
                                </div>
                                <hr />
                                <div class="d-flex align-items-center mb-3">
                                    <div class="col-3">Tanggal</div>
                                    <div class="col-9">
                                        <input
                                            type="text"
                                            class="form-control"
                                            value="10-September-2022"
                                            readonly
                                        />
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="col-3">Jurnal</div>
                                    <div class="col-9">
                                        <textarea
                                            type="text"
                                            class="form-control"
                                            readonly
                                        >
Auditee tidak dapat memberikan jawaban yang dinginkan</textarea
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pt-5">
                <div class="d-flex justify-content-between">
                    <a href="/tindak-tahap3-ia"
                        ><button class="btn btn-primary">Kembali</button></a
                    >
                    <button
                        class="btn btn-success"
                        data-bs-toggle="modal"
                        data-bs-target="#validasi"
                    >
                        Validasi
                    </button>
                    <a href="/tindak-tahap5-ia"
                        ><button class="btn btn-primary">Selanjutnya</button></a
                    >
                </div>
            </div>
            @include('components.validasi-modal')
        </div>
        <!-- end of Body -->

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            var currentState = "";

            $("#edm01, #edm02, #apo01, #bai03, #bai05").click(function () {
                currentState = "Unit " + $(this).text();
                $("#nama-framework").text(currentState);
                // Call the render function to initialize the UI
                $("#hasil").removeClass("d-none");
                $("#tampil-temuan").addClass("d-none");
                $("#tampil-jurnal").addClass("d-none");
                $("#nilai-auditee").addClass("d-none");
            });

            $("#temuan").click(function () {
                // Call the render function to initialize the UI
                $("#hasil").addClass("d-none");
                $("#nilai-auditee").addClass("d-none");
                $("#tampil-temuan").removeClass("d-none");
                $("#tampil-jurnal").addClass("d-none");
            });

            $("#nilai").click(function () {
                // Call the render function to initialize the UI
                $("#hasil").addClass("d-none");
                $("#nilai-auditee").removeClass("d-none");
                $("#tampil-temuan").addClass("d-none");
                $("#tampil-jurnal").addClass("d-none");
            });

            $("#jurnal").click(function () {
                // Call the render function to initialize the UI
                $("#hasil").addClass("d-none");
                $("#nilai-auditee").addClass("d-none");
                $("#tampil-temuan").addClass("d-none");
                $("#tampil-jurnal").removeClass("d-none");
            });
        </script>
    </div>
</div>

@endsection
