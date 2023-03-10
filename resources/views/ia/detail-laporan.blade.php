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
            <div class="mb-4">
                <h4 class="mb-3 mb-md-0 fs-2">DETAIL LAPORAN AUDIT</h4>
            </div>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="text-start fw-bold fs-3 mb-3">
                                Laporan Tahapan
                            </div>
                            <div style="overflow-x: auto">
                                <div class="d-flex flex-nowrap mb-4">
                                    <button
                                        class="btn btn-primary mx-2 col-4 step1"
                                        value="1"
                                    >
                                        Tahap 1 : Informasi Objek Audit
                                    </button>
                                    <button
                                        class="btn btn-primary mx-2 col-4 step2"
                                        value="2"
                                    >
                                        Tahap 2 : Penentuan Framework
                                    </button>
                                    <button
                                        class="btn btn-primary mx-2 col-4 step3"
                                        value="3"
                                    >
                                        Tahap 3 : Penentuan Tim Auditor
                                    </button>
                                    <button
                                        class="btn btn-primary mx-2 col-4 step4"
                                        value="4"
                                    >
                                        Tahap 4 : Validasi Hasil Audit
                                    </button>
                                    <button
                                        class="btn btn-primary mx-2 col-4 step5"
                                        value="5"
                                    >
                                        Tahap 5 : Analisis Hasil Audit
                                    </button>
                                    <button
                                        class="btn btn-primary mx-2 col-4 step6"
                                        value="6"
                                    >
                                        Tahap 6 : Rekomendasi
                                    </button>
                                    <button
                                        class="btn btn-primary mx-2 col-4 step7"
                                        value="7"
                                    >
                                        Tahap 7 : Laporan Audit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="tampil-tahap" class="d-none">
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div
                                    id="judul-step"
                                    class="fw-bold fs-4 mb-4"
                                ></div>

                                <div id="tahap" class="tahap1 d-none">
                                    <div class="d-flex mb-4">
                                        <div class="col-6 d-flex flex-column">
                                            <div class="fs-5 mb-1 fw-bold">
                                                Kategori Audit
                                            </div>
                                            <select
                                                class="form-select w-75"
                                                aria-label="Default select example"
                                                disabled
                                            >
                                                <option>Pilih Kategori</option>
                                                <option selected value="1">
                                                    Keuangan
                                                </option>
                                                <option value="2">
                                                    Operasional
                                                </option>
                                                <option value="3">
                                                    Sistem Informasi
                                                </option>
                                                <option value="4">Pajak</option>
                                            </select>
                                        </div>
                                        <div class="col-6 d-flex flex-column">
                                            <div class="fs-5 mb-1 fw-bold">
                                                Tanggal Mulai Audit
                                            </div>
                                            <div
                                                class="input-group flatpickr w-75 me-2 mb-2 mb-md-0"
                                                id="dashboardDate"
                                            >
                                                <span
                                                    class="input-group-text input-group-addon bg-transparent border-secondary"
                                                    data-toggle
                                                    ><i
                                                        data-feather="calendar"
                                                        class="text-black"
                                                    ></i
                                                ></span>
                                                <input
                                                    type="text"
                                                    class="form-control bg-transparent border-secondary"
                                                    placeholder="Select date"
                                                    data-input
                                                    disabled
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="col-6 d-flex flex-column">
                                            <div class="fs-5 mb-1 fw-bold">
                                                Unit yang akan di audit
                                            </div>
                                            <!-- Button trigger input dropdown -->
                                            <div class="dropdown">
                                                <button
                                                    class="form-select w-75 text-start"
                                                    type="button"
                                                    id="dropdownMenuButton"
                                                    data-bs-toggle="dropdown"
                                                    aria-expanded="false"
                                                    disabled
                                                >
                                                    PMB, LSP
                                                </button>
                                                <ul
                                                    class="dropdown-menu"
                                                    aria-labelledby="dropdownMenuButton"
                                                >
                                                    <li class="p-2">
                                                        <input
                                                            class="form-check-input"
                                                            type="checkbox"
                                                            value="PMB"
                                                            id="pmb"
                                                        /><label
                                                            class="ms-2 form-check-label"
                                                            for="pmb"
                                                            >PMB</label
                                                        >
                                                    </li>
                                                    <li class="p-2">
                                                        <input
                                                            class="form-check-input"
                                                            type="checkbox"
                                                            value="LSP"
                                                            id="lsp"
                                                        /><label
                                                            class="ms-2 form-check-label"
                                                            for="lsp"
                                                            >LSP</label
                                                        >
                                                    </li>
                                                    <li class="p-2">
                                                        <input
                                                            class="form-check-input"
                                                            type="checkbox"
                                                            value="Biro Akademik"
                                                            id="ba"
                                                        /><label
                                                            class="ms-2 form-check-label"
                                                            for="ba"
                                                            >Biro
                                                            Akademik</label
                                                        >
                                                    </li>
                                                    <li class="p-2">
                                                        <input
                                                            class="form-check-input"
                                                            type="checkbox"
                                                            value="DSI"
                                                            id="dsi"
                                                        /><label
                                                            class="ms-2 form-check-label"
                                                            for="dsi"
                                                            >DSI</label
                                                        >
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-6 d-flex flex-column">
                                            <div class="fs-5 mb-1 fw-bold">
                                                Tanggal Akhir Audit
                                            </div>
                                            <div
                                                class="input-group flatpickr w-75 me-2 mb-2 mb-md-0"
                                                id="dashboardDate"
                                            >
                                                <span
                                                    class="input-group-text input-group-addon bg-transparent border-secondary"
                                                    data-toggle
                                                    ><i
                                                        data-feather="calendar"
                                                        class="text-black"
                                                    ></i
                                                ></span>
                                                <input
                                                    type="text"
                                                    class="form-control bg-transparent border-secondary"
                                                    placeholder="Select date"
                                                    data-input
                                                    disabled
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <div class="w-100 mb-4">
                                            <div class="mb-2">
                                                Nama Objek Audit
                                                <span class="text-danger"
                                                    >*</span
                                                >
                                            </div>
                                            <input
                                                type="text"
                                                class="form-control"
                                                value="Audit Keuangan"
                                                disabled
                                            />
                                        </div>
                                        <div class="w-100">
                                            <div class="mb-2">
                                                Ruang Lingkup
                                                <span class="text-danger"
                                                    >*</span
                                                >
                                            </div>
                                            <textarea
                                                class="form-control"
                                                disabled
                                            >
Keseluruhan fungsi manajemen dan unit terkait, mencapai seluruh aktivitas/program. Keluasan audit bergantung pada pengendalian manajemen perusahaan.
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div id="tahap" class="tahap2 d-none">
                                    <div class="row">
                                        <div
                                            class="col-md-12 grid-margin stretch-card"
                                        >
                                            <div class="card">
                                                <div
                                                    class="card-body text-center"
                                                >
                                                    <div
                                                        class="text-start fw-bold fs-3 mb-3"
                                                    >
                                                        Daftar Unit
                                                    </div>
                                                    <div
                                                        style="overflow-x: auto"
                                                    >
                                                        <div
                                                            class="d-flex flex-nowrap mb-4"
                                                        >
                                                            <button
                                                                id="pmb"
                                                                class="btn btn-primary mx-2 col-4"
                                                            >
                                                                Penerimaan
                                                                Mahasiswa Baru
                                                            </button>
                                                            <button
                                                                id="lsp"
                                                                class="btn btn-primary mx-2 col-4"
                                                            >
                                                                Lembaga
                                                                Sertifikasi
                                                                Profesi
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
                                        <div
                                            class="col-md-12 grid-margin stretch-card"
                                        >
                                            <div class="card">
                                                <div class="card-body">
                                                    <div
                                                        class="d-flex align-items-center"
                                                    >
                                                        <div>
                                                            Auditee
                                                            <span
                                                                class="ms-5 me-2"
                                                                >:</span
                                                            >
                                                        </div>
                                                        <div class="me-3">
                                                            <button
                                                                class="btn btn-primary align-middle"
                                                            >
                                                                <i
                                                                    class="me-2 icon-md"
                                                                    data-feather="plus"
                                                                ></i
                                                                >Tambah Auditee
                                                            </button>
                                                        </div>
                                                        <div
                                                            class="text-primary border border-1 border-primary rounded-2 d-flex align-items-center"
                                                        >
                                                            <i
                                                                class="ms-3 me-2 icon-md"
                                                                data-feather="user"
                                                            ></i>
                                                            Rendys
                                                            <button
                                                                class="btn text-primary"
                                                            >
                                                                <i
                                                                    class="icon-md"
                                                                    data-feather="x"
                                                                ></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div
                                            class="col-md-12 grid-margin stretch-card"
                                        >
                                            <div class="card">
                                                <div class="card-body">
                                                    <div
                                                        class="fw-bold fs-5 mb-3"
                                                    >
                                                        Data Framework
                                                    </div>

                                                    <div class="d-flex">
                                                        <button
                                                            class="btn btn-primary me-3"
                                                        >
                                                            COBIT 2019
                                                        </button>
                                                        <button
                                                            class="btn btn-outline-primary me-3"
                                                        >
                                                            ISO 27001
                                                        </button>
                                                        <button
                                                            class="btn btn-outline-primary me-3"
                                                        >
                                                            ISO 9001
                                                        </button>
                                                        <button
                                                            class="btn btn-outline-primary me-3"
                                                        >
                                                            ISO 13485
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div
                                            class="col-md-12 grid-margin stretch-card"
                                        >
                                            <div class="card">
                                                <div class="card-body">
                                                    <div
                                                        class="fw-bold fs-5 mb-3"
                                                    >
                                                        Data Domain
                                                    </div>

                                                    <div class="d-flex">
                                                        <button
                                                            class="btn btn-primary me-3"
                                                        >
                                                            EDM
                                                        </button>
                                                        <button
                                                            class="btn btn-primary me-3"
                                                        >
                                                            APO
                                                        </button>
                                                        <button
                                                            class="btn btn-primary me-3"
                                                        >
                                                            BAI
                                                        </button>
                                                        <button
                                                            class="btn btn-outline-primary me-3"
                                                        >
                                                            DSS
                                                        </button>
                                                        <button
                                                            class="btn btn-outline-primary me-3"
                                                        >
                                                            MEA
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div
                                            class="col-md-12 grid-margin stretch-card"
                                        >
                                            <div class="card">
                                                <div class="card-body">
                                                    <div
                                                        class="fw-bold fs-5 mb-3"
                                                    >
                                                        Data Subdomain
                                                    </div>

                                                    <div class="d-flex">
                                                        <button
                                                            class="btn btn-primary me-3"
                                                        >
                                                            EDM01
                                                        </button>
                                                        <button
                                                            class="btn btn-primary me-3"
                                                        >
                                                            EDM02
                                                        </button>
                                                        <button
                                                            class="btn btn-outline-primary me-3"
                                                        >
                                                            EDM03
                                                        </button>
                                                        <button
                                                            class="btn btn-primary me-3"
                                                        >
                                                            APO01
                                                        </button>
                                                        <button
                                                            class="btn btn-outline-primary me-3"
                                                        >
                                                            APO02
                                                        </button>
                                                        <button
                                                            class="btn btn-outline-primary me-3"
                                                        >
                                                            BAI01
                                                        </button>
                                                        <button
                                                            class="btn btn-outline-primary me-3"
                                                        >
                                                            BAI02
                                                        </button>
                                                        <button
                                                            class="btn btn-primary me-3"
                                                        >
                                                            BAI03
                                                        </button>
                                                        <button
                                                            class="btn btn-outline-primary me-3"
                                                        >
                                                            BAI04
                                                        </button>
                                                        <button
                                                            class="btn btn-outline-primary me-3"
                                                        >
                                                            BAI05
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div
                                            class="col-md-12 grid-margin stretch-card"
                                        >
                                            <div class="card">
                                                <div class="card-body">
                                                    <div
                                                        class="d-flex justify-content-between align-items-center mb-3"
                                                    >
                                                        <div
                                                            class="fw-bold fs-5"
                                                        >
                                                            Data Pertanyaan
                                                            EDM01
                                                        </div>
                                                        <button
                                                            class="btn btn-primary"
                                                            disabled
                                                        >
                                                            <i
                                                                class="icon-md"
                                                                data-feather="plus"
                                                            ></i>
                                                        </button>
                                                    </div>
                                                    <div
                                                        class="border border-1 p-3"
                                                    >
                                                        <div
                                                            class="d-flex justify-content-between align-items-center mb-3"
                                                        >
                                                            <div>
                                                                1. Pertanyaan
                                                                ke-1 tentang
                                                                EDM01
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
                                                                <button
                                                                    class="btn btn-primary mx-2"
                                                                    disabled
                                                                >
                                                                    <i
                                                                        class="icon-md"
                                                                        data-feather="edit"
                                                                    ></i>
                                                                </button>
                                                                <button
                                                                    class="btn btn-danger mx-2"
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
                                                            <div>
                                                                2. Pertanyaan
                                                                ke-2 tentang
                                                                EDM01
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
                                                                <button
                                                                    class="btn btn-primary mx-2"
                                                                    disabled
                                                                >
                                                                    <i
                                                                        class="icon-md"
                                                                        data-feather="edit"
                                                                    ></i>
                                                                </button>
                                                                <button
                                                                    class="btn btn-danger mx-2"
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
                                        <div
                                            class="col-md-12 grid-margin stretch-card"
                                        >
                                            <div class="card">
                                                <div class="card-body">
                                                    <div
                                                        class="d-flex justify-content-between align-items-center mb-3"
                                                    >
                                                        <div
                                                            class="fw-bold fs-5"
                                                        >
                                                            Data Pertanyaan
                                                            EDM02
                                                        </div>
                                                        <button
                                                            class="btn btn-primary"
                                                            disabled
                                                        >
                                                            <i
                                                                class="icon-md"
                                                                data-feather="plus"
                                                            ></i>
                                                        </button>
                                                    </div>
                                                    <div
                                                        class="border border-1 p-3"
                                                    >
                                                        <div
                                                            class="d-flex justify-content-between align-items-center mb-3"
                                                        >
                                                            <div>
                                                                1. Pertanyaan
                                                                ke-1 tentang
                                                                EDM02
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
                                                                <button
                                                                    class="btn btn-primary mx-2"
                                                                    disabled
                                                                >
                                                                    <i
                                                                        class="icon-md"
                                                                        data-feather="edit"
                                                                    ></i>
                                                                </button>
                                                                <button
                                                                    class="btn btn-danger mx-2"
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
                                                            <div>
                                                                2. Pertanyaan
                                                                ke-2 tentang
                                                                EDM02
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
                                                                <button
                                                                    class="btn btn-primary mx-2"
                                                                    disabled
                                                                >
                                                                    <i
                                                                        class="icon-md"
                                                                        data-feather="edit"
                                                                    ></i>
                                                                </button>
                                                                <button
                                                                    class="btn btn-danger mx-2"
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
                                        <div
                                            class="col-md-12 grid-margin stretch-card"
                                        >
                                            <div class="card">
                                                <div class="card-body">
                                                    <div
                                                        class="d-flex justify-content-between align-items-center mb-3"
                                                    >
                                                        <div
                                                            class="fw-bold fs-5"
                                                        >
                                                            Data Pertanyaan
                                                            APO01
                                                        </div>
                                                        <button
                                                            class="btn btn-primary"
                                                            disabled
                                                        >
                                                            <i
                                                                class="icon-md"
                                                                data-feather="plus"
                                                            ></i>
                                                        </button>
                                                    </div>
                                                    <div
                                                        class="border border-1 p-3"
                                                    >
                                                        <div
                                                            class="d-flex justify-content-between align-items-center mb-3"
                                                        >
                                                            <div>
                                                                1. Pertanyaan
                                                                ke-1 tentang
                                                                APO01
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
                                                                <button
                                                                    class="btn btn-primary mx-2"
                                                                    disabled
                                                                >
                                                                    <i
                                                                        class="icon-md"
                                                                        data-feather="edit"
                                                                    ></i>
                                                                </button>
                                                                <button
                                                                    class="btn btn-danger mx-2"
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
                                                            <div>
                                                                2. Pertanyaan
                                                                ke-2 tentang
                                                                APO01
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
                                                                <button
                                                                    class="btn btn-primary mx-2"
                                                                    disabled
                                                                >
                                                                    <i
                                                                        class="icon-md"
                                                                        data-feather="edit"
                                                                    ></i>
                                                                </button>
                                                                <button
                                                                    class="btn btn-danger mx-2"
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
                                        <div
                                            class="col-md-12 grid-margin stretch-card"
                                        >
                                            <div class="card">
                                                <div class="card-body">
                                                    <div
                                                        class="d-flex justify-content-between align-items-center mb-3"
                                                    >
                                                        <div
                                                            class="fw-bold fs-5"
                                                        >
                                                            Data Pertanyaan
                                                            BAI03
                                                        </div>
                                                        <button
                                                            class="btn btn-primary"
                                                            disabled
                                                        >
                                                            <i
                                                                class="icon-md"
                                                                data-feather="plus"
                                                            ></i>
                                                        </button>
                                                    </div>
                                                    <div
                                                        class="border border-1 p-3"
                                                    >
                                                        <div
                                                            class="d-flex justify-content-between align-items-center mb-3"
                                                        >
                                                            <div>
                                                                1. Pertanyaan
                                                                ke-1 tentang
                                                                BAI03
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
                                                                <button
                                                                    class="btn btn-primary mx-2"
                                                                    disabled
                                                                >
                                                                    <i
                                                                        class="icon-md"
                                                                        data-feather="edit"
                                                                    ></i>
                                                                </button>
                                                                <button
                                                                    class="btn btn-danger mx-2"
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
                                                            <div>
                                                                2. Pertanyaan
                                                                ke-2 tentang
                                                                BAI03
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
                                                                <button
                                                                    class="btn btn-primary mx-2"
                                                                    disabled
                                                                >
                                                                    <i
                                                                        class="icon-md"
                                                                        data-feather="edit"
                                                                    ></i>
                                                                </button>
                                                                <button
                                                                    class="btn btn-danger mx-2"
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
                                <div id="tahap" class="tahap3 d-none">
                                    @include('components.auditor.auditor-view-modal')
                                    <div class="table-responsive">
                                        <table
                                            id="dataTableExample"
                                            class="table"
                                        >
                                            <thead>
                                                <tr>
                                                    <th>Nama Auditor</th>
                                                    <th>Email</th>
                                                    <th>Batas Penunjukan</th>
                                                    <th>Status Persetujuan</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody class="align-middle">
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>adel@gmail.com</td>
                                                    <td>12 September 2022</td>
                                                    <td>
                                                        <div
                                                            class="w-75 bg-success py-2 px-3 rounded text-center text-white"
                                                        >
                                                            Setuju
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <button
                                                                class="btn btn-outline-primary mx-2"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#auditorView"
                                                            >
                                                                <i
                                                                    class="icon-md"
                                                                    data-feather="eye"
                                                                ></i>
                                                            </button>
                                                            <button
                                                                class="btn btn-primary mx-2"
                                                                disabled
                                                            >
                                                                <i
                                                                    class="icon-md"
                                                                    data-feather="edit"
                                                                ></i>
                                                            </button>
                                                            <button
                                                                class="btn btn-danger mx-2"
                                                                disabled
                                                            >
                                                                <i
                                                                    class="icon-md"
                                                                    data-feather="trash"
                                                                ></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Garrett Winters</td>
                                                    <td>adel@gmail.com</td>
                                                    <td>12 September 2022</td>
                                                    <td>
                                                        <div
                                                            class="w-75 bg-success py-2 px-3 rounded text-center text-white"
                                                        >
                                                            Setuju
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <button
                                                                class="btn btn-outline-primary mx-2"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#auditorView"
                                                            >
                                                                <i
                                                                    class="icon-md"
                                                                    data-feather="eye"
                                                                ></i>
                                                            </button>
                                                            <button
                                                                class="btn btn-primary mx-2"
                                                                disabled
                                                            >
                                                                <i
                                                                    class="icon-md"
                                                                    data-feather="edit"
                                                                ></i>
                                                            </button>
                                                            <button
                                                                class="btn btn-danger mx-2"
                                                                disabled
                                                            >
                                                                <i
                                                                    class="icon-md"
                                                                    data-feather="trash"
                                                                ></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Ashton Cox</td>
                                                    <td>adel@gmail.com</td>
                                                    <td>12 September 2022</td>
                                                    <td>
                                                        <div
                                                            class="w-75 bg-danger py-2 px-3 rounded text-center text-white"
                                                        >
                                                            Tidak Setuju
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <button
                                                                class="btn btn-outline-primary mx-2"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#auditorView"
                                                            >
                                                                <i
                                                                    class="icon-md"
                                                                    data-feather="eye"
                                                                ></i>
                                                            </button>
                                                            <button
                                                                class="btn btn-primary mx-2"
                                                                disabled
                                                            >
                                                                <i
                                                                    class="icon-md"
                                                                    data-feather="edit"
                                                                ></i>
                                                            </button>
                                                            <button
                                                                class="btn btn-danger mx-2"
                                                                disabled
                                                            >
                                                                <i
                                                                    class="icon-md"
                                                                    data-feather="trash"
                                                                ></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Cedric Kelly</td>
                                                    <td>adel@gmail.com</td>
                                                    <td>12 September 2022</td>
                                                    <td>
                                                        <div
                                                            class="w-75 bg-success py-2 px-3 rounded text-center text-white"
                                                        >
                                                            Setuju
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <button
                                                                class="btn btn-outline-primary mx-2"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#auditorView"
                                                            >
                                                                <i
                                                                    class="icon-md"
                                                                    data-feather="eye"
                                                                ></i>
                                                            </button>
                                                            <button
                                                                class="btn btn-primary mx-2"
                                                                disabled
                                                            >
                                                                <i
                                                                    class="icon-md"
                                                                    data-feather="edit"
                                                                ></i>
                                                            </button>
                                                            <button
                                                                class="btn btn-danger mx-2"
                                                                disabled
                                                            >
                                                                <i
                                                                    class="icon-md"
                                                                    data-feather="trash"
                                                                ></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                @include('components.temuan-modal')
                                <div id="tahap" class="tahap4 d-none">
                                    <div class="row">
                                        <div
                                            class="col-md-12 grid-margin stretch-card"
                                        >
                                            <div class="card">
                                                <div
                                                    class="card-body text-center"
                                                >
                                                    <div
                                                        class="text-start fw-bold fs-3 mb-3"
                                                    >
                                                        Daftar Unit
                                                    </div>
                                                    <div
                                                        style="overflow-x: auto"
                                                    >
                                                        <div
                                                            class="d-flex flex-nowrap mb-4"
                                                        >
                                                            <button
                                                                id="pmb"
                                                                class="btn btn-primary mx-2 col-4"
                                                            >
                                                                Penerimaan
                                                                Mahasiswa Baru
                                                            </button>
                                                            <button
                                                                id="lsp"
                                                                class="btn btn-primary mx-2 col-4"
                                                            >
                                                                Lembaga
                                                                Sertifikasi
                                                                Profesi
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
                                            <button id="edm01" class="btn mx-2">
                                                EDM01
                                            </button>
                                            <button id="edm02" class="btn mx-2">
                                                EDM02
                                            </button>
                                            <button id="apo01" class="btn mx-2">
                                                APO01
                                            </button>
                                            <button id="bai03" class="btn mx-2">
                                                BAI03
                                            </button>
                                            <button id="bai05" class="btn mx-2">
                                                BAI05
                                            </button>
                                            <button
                                                id="temuan"
                                                class="btn mx-2"
                                            >
                                                Temuan
                                            </button>
                                            <button id="nilai" class="btn mx-2">
                                                Nilai Auditee
                                            </button>
                                            <button
                                                id="jurnal"
                                                class="btn mx-2"
                                            >
                                                Jurnal
                                            </button>
                                        </div>
                                    </div>

                                    <div id="hasil" class="d-none">
                                        <div
                                            class="d-flex justify-content-end mb-3"
                                        >
                                            <button
                                                class="mx-2 btn btn-primary"
                                            >
                                                <i
                                                    class="icon-md me-2"
                                                    data-feather="printer"
                                                ></i
                                                >Cetak Framework
                                            </button>
                                        </div>

                                        <div class="row">
                                            <div
                                                class="col-md-12 grid-margin stretch-card"
                                            >
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div
                                                            class="fw-bold fs-4 mb-3"
                                                        >
                                                            Deskripsi Subdomain
                                                        </div>
                                                        <div class="mb-3">
                                                            <span
                                                                id="nama-framework"
                                                            ></span>
                                                            <span
                                                                class="text-muted"
                                                                >(Ensured
                                                                Governance
                                                                Framework
                                                                Setting and
                                                                Maintenance)</span
                                                            >
                                                        </div>
                                                        <div class="border p-4">
                                                            <div
                                                                class="fw-bold mb-2"
                                                            >
                                                                Visi Program
                                                                Studi Teknik
                                                                Informatika :
                                                            </div>
                                                            <div>
                                                                Menghasilkan
                                                                lulusan yang
                                                                mandiri, berdaya
                                                                saing, berbasis
                                                                nilai dan
                                                                karakter bangsa
                                                                serta mampu
                                                                beradaptasi
                                                                terhadap
                                                                perkembangan
                                                                teknologi
                                                                informasi menuju
                                                                program studi
                                                                unggulan pada
                                                                tahun 2035
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div
                                                class="col-md-12 grid-margin stretch-card"
                                            >
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
                                                                <span
                                                                    id="nama-framework"
                                                                ></span>
                                                            </div>
                                                            <div
                                                                class="rounded-5 bg-success px-4 py-2 text-white"
                                                            >
                                                                Selesai
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <div>
                                                            Pertanyaan ke-1
                                                            tentang
                                                            <span
                                                                id="nama-framework"
                                                            ></span>
                                                        </div>
                                                        <hr />
                                                        <div>
                                                            <div
                                                                class="d-flex align-items-center mb-3"
                                                            >
                                                                <div
                                                                    class="col-3"
                                                                >
                                                                    Jawaban
                                                                </div>
                                                                <div
                                                                    class="col-9"
                                                                >
                                                                    <input
                                                                        type="text"
                                                                        class="form-control"
                                                                        value="Terdapat Kejanggalan"
                                                                        readonly
                                                                    />
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="d-flex align-items-center mb-3"
                                                            >
                                                                <div
                                                                    class="col-3"
                                                                >
                                                                    Tanggal
                                                                    Penyelesaian
                                                                </div>
                                                                <div
                                                                    class="col-9"
                                                                >
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
                                                            <div
                                                                class="d-flex align-items-center mb-3"
                                                            >
                                                                <div
                                                                    class="col-3"
                                                                >
                                                                    Nilai
                                                                </div>
                                                                <div
                                                                    class="col-9"
                                                                >
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
                                                        <div class="mb-3">
                                                            List Bukti (File)
                                                        </div>
                                                        <div
                                                            class="border border-1 p-3 mb-4"
                                                        >
                                                            <div
                                                                class="d-flex justify-content-between align-items-center mb-3"
                                                            >
                                                                <div>
                                                                    Lampiran
                                                                    1.jpg
                                                                </div>
                                                                <div
                                                                    class="d-flex"
                                                                >
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
                                                                <div>
                                                                    Lampiran
                                                                    2.jpg
                                                                </div>
                                                                <div
                                                                    class="d-flex"
                                                                >
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
                                                        <div class="mb-3">
                                                            List Bukti (Link)
                                                        </div>
                                                        <div
                                                            class="border border-1 p-3"
                                                        >
                                                            <div
                                                                class="d-flex justify-content-between align-items-center mb-3"
                                                            >
                                                                <div>
                                                                    Halaman
                                                                    Untag
                                                                </div>
                                                                <div
                                                                    class="d-flex"
                                                                >
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
                                                                <div>
                                                                    Halaman
                                                                    Untag
                                                                </div>
                                                                <div
                                                                    class="d-flex"
                                                                >
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
                                            <div
                                                class="col-md-12 grid-margin stretch-card"
                                            >
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
                                                                <span
                                                                    id="nama-framework"
                                                                ></span>
                                                            </div>
                                                            <div
                                                                class="rounded-5 bg-danger px-4 py-2 text-white"
                                                            >
                                                                Tidak Selesai
                                                            </div>
                                                        </div>
                                                        <hr />
                                                        <div>
                                                            Pertanyaan ke-2
                                                            tentang
                                                            <span
                                                                id="nama-framework"
                                                            ></span>
                                                        </div>
                                                        <hr />
                                                        <div>
                                                            <div
                                                                class="d-flex align-items-center mb-3"
                                                            >
                                                                <div
                                                                    class="col-3"
                                                                >
                                                                    Jawaban
                                                                </div>
                                                                <div
                                                                    class="col-9"
                                                                >
                                                                    <input
                                                                        type="text"
                                                                        class="form-control"
                                                                        value="Terdapat Kejanggalan"
                                                                        readonly
                                                                    />
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="d-flex align-items-center mb-3"
                                                            >
                                                                <div
                                                                    class="col-3"
                                                                >
                                                                    Tanggal
                                                                    Penyelesaian
                                                                </div>
                                                                <div
                                                                    class="col-9"
                                                                >
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
                                                            <div
                                                                class="d-flex align-items-center mb-3"
                                                            >
                                                                <div
                                                                    class="col-3"
                                                                >
                                                                    Nilai
                                                                </div>
                                                                <div
                                                                    class="col-9"
                                                                >
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
                                                        <div class="mb-3">
                                                            List Bukti (File)
                                                        </div>
                                                        <div
                                                            class="border border-1 p-3 mb-4"
                                                        >
                                                            <div
                                                                class="d-flex justify-content-between align-items-center mb-3"
                                                            >
                                                                <div>
                                                                    Lampiran
                                                                    1.jpg
                                                                </div>
                                                                <div
                                                                    class="d-flex"
                                                                >
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
                                                                <div>
                                                                    Lampiran
                                                                    2.jpg
                                                                </div>
                                                                <div
                                                                    class="d-flex"
                                                                >
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
                                                        <div class="mb-3">
                                                            List Bukti (Link)
                                                        </div>
                                                        <div
                                                            class="border border-1 p-3"
                                                        >
                                                            <div
                                                                class="d-flex justify-content-between align-items-center mb-3"
                                                            >
                                                                <div>
                                                                    Halaman
                                                                    Untag
                                                                </div>
                                                                <div
                                                                    class="d-flex"
                                                                >
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
                                                                <div>
                                                                    Halaman
                                                                    Untag
                                                                </div>
                                                                <div
                                                                    class="d-flex"
                                                                >
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
                                        <div
                                            class="d-flex justify-content-end mb-3"
                                        >
                                            <button
                                                class="mx-2 btn btn-primary"
                                            >
                                                <i
                                                    class="icon-md me-2"
                                                    data-feather="printer"
                                                ></i
                                                >Cetak Temuan
                                            </button>
                                        </div>
                                        <div class="row">
                                            <div
                                                class="col-md-12 grid-margin stretch-card"
                                            >
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div
                                                            class="fw-bold mb-3 fs-4"
                                                        >
                                                            Temuan
                                                        </div>
                                                        <div
                                                            class="table-responsive"
                                                        >
                                                            <table
                                                                id="dataTableExample"
                                                                class="table"
                                                            >
                                                                <thead>
                                                                    <tr>
                                                                        <th>
                                                                            Judul
                                                                            Temuan
                                                                        </th>
                                                                        <th>
                                                                            Waktu
                                                                            Penyelesaian
                                                                        </th>
                                                                        <th>
                                                                            Detail
                                                                            Temuan
                                                                        </th>
                                                                        <th>
                                                                            Aksi
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody
                                                                    class="align-middle"
                                                                >
                                                                    <tr>
                                                                        <td>
                                                                            SDM
                                                                            Pengelola
                                                                            Keuangan
                                                                        </td>
                                                                        <td>
                                                                            12
                                                                            September
                                                                            2022
                                                                        </td>
                                                                        <td>
                                                                            <button
                                                                                class="btn btn-outline-primary"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#temuanModal"
                                                                            >
                                                                                Lihat
                                                                                Temuan<i
                                                                                    class="ms-2 icon-md"
                                                                                    data-feather="eye"
                                                                                ></i>
                                                                            </button>
                                                                        </td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex"
                                                                            >
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
                                                                        <td>
                                                                            SDM
                                                                            Pengelola
                                                                            Keuangan
                                                                        </td>
                                                                        <td>
                                                                            12
                                                                            September
                                                                            2022
                                                                        </td>
                                                                        <td>
                                                                            <button
                                                                                class="btn btn-outline-primary"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#temuanModal"
                                                                            >
                                                                                Lihat
                                                                                Temuan<i
                                                                                    class="ms-2 icon-md"
                                                                                    data-feather="eye"
                                                                                ></i>
                                                                            </button>
                                                                        </td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex"
                                                                            >
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
                                                                        <td>
                                                                            SDM
                                                                            Pengelola
                                                                            Keuangan
                                                                        </td>
                                                                        <td>
                                                                            12
                                                                            September
                                                                            2022
                                                                        </td>
                                                                        <td>
                                                                            <button
                                                                                class="btn btn-outline-primary"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#temuanModal"
                                                                            >
                                                                                Lihat
                                                                                Temuan<i
                                                                                    class="ms-2 icon-md"
                                                                                    data-feather="eye"
                                                                                ></i>
                                                                            </button>
                                                                        </td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex"
                                                                            >
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
                                                                        <td>
                                                                            SDM
                                                                            Pengelola
                                                                            Keuangan
                                                                        </td>
                                                                        <td>
                                                                            12
                                                                            September
                                                                            2022
                                                                        </td>
                                                                        <td>
                                                                            <button
                                                                                class="btn btn-outline-primary"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#temuanModal"
                                                                            >
                                                                                Lihat
                                                                                Temuan<i
                                                                                    class="ms-2 icon-md"
                                                                                    data-feather="eye"
                                                                                ></i>
                                                                            </button>
                                                                        </td>
                                                                        <td>
                                                                            <div
                                                                                class="d-flex"
                                                                            >
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

                                    <div id="nilai-auditee" class="d-none">
                                        <div
                                            class="d-flex justify-content-end mb-3"
                                        >
                                            <button
                                                class="mx-2 btn btn-primary"
                                            >
                                                <i
                                                    class="icon-md me-2"
                                                    data-feather="printer"
                                                ></i
                                                >Cetak Nilai
                                            </button>
                                        </div>
                                        <div class="row">
                                            <div
                                                class="col-md-12 grid-margin stretch-card"
                                            >
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
                                                        <div
                                                            class="fw-bold fs-5 mb-3"
                                                        >
                                                            Rendys Naja Ripando
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center"
                                                        >
                                                            <div class="col-3">
                                                                Nilai
                                                            </div>
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
                                            <div
                                                class="col-md-12 grid-margin stretch-card"
                                            >
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
                                                        <div
                                                            class="fw-bold fs-5 mb-3"
                                                        >
                                                            Rendys Ripando
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center"
                                                        >
                                                            <div class="col-3">
                                                                Nilai
                                                            </div>
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
                                        <div
                                            class="d-flex justify-content-end mb-3"
                                        >
                                            <button
                                                class="mx-2 btn btn-primary"
                                            >
                                                <i
                                                    class="icon-md me-2"
                                                    data-feather="printer"
                                                ></i
                                                >Cetak Jurnal
                                            </button>
                                        </div>
                                        <div class="row">
                                            <div
                                                class="col-md-12 grid-margin stretch-card"
                                            >
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="fw-bold">
                                                            Jurnal
                                                        </div>
                                                        <hr />
                                                        <div
                                                            class="d-flex align-items-center mb-3"
                                                        >
                                                            <div class="col-3">
                                                                Tanggal
                                                            </div>
                                                            <div class="col-9">
                                                                <input
                                                                    type="text"
                                                                    class="form-control"
                                                                    value="10-September-2022"
                                                                    readonly
                                                                />
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center"
                                                        >
                                                            <div class="col-3">
                                                                Jurnal
                                                            </div>
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
                                                        <div
                                                            class="d-flex align-items-center mb-3"
                                                        >
                                                            <div class="col-3">
                                                                Tanggal
                                                            </div>
                                                            <div class="col-9">
                                                                <input
                                                                    type="text"
                                                                    class="form-control"
                                                                    value="10-September-2022"
                                                                    readonly
                                                                />
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center"
                                                        >
                                                            <div class="col-3">
                                                                Jurnal
                                                            </div>
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
                                </div>
                                <div id="tahap" class="tahap5 d-none">
                                    <div class="row">
                                        <div
                                            class="col-md-12 grid-margin stretch-card"
                                        >
                                            <div class="card">
                                                <div class="card-body">
                                                    <div
                                                        class="fw-bold fs-5 mb-3"
                                                    >
                                                        Analisis
                                                    </div>
                                                    <hr />
                                                    <div
                                                        class="d-flex align-items-center mb-3"
                                                    >
                                                        <div class="col-3">
                                                            Nama Analis
                                                        </div>
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            placeholder="Masukkan nama analis..."
                                                            value="Candys"
                                                            disabled
                                                        />
                                                    </div>
                                                    <div
                                                        class="d-flex align-items-center mb-3"
                                                    >
                                                        <div class="col-3">
                                                            Tanggal Penyelesaian
                                                        </div>
                                                        <input
                                                            type="date"
                                                            class="form-control"
                                                            value="2022-09-29"
                                                            disabled
                                                        />
                                                    </div>
                                                    <div
                                                        class="d-flex align-items-center"
                                                    >
                                                        <div class="col-3">
                                                            Hasil Analisis
                                                        </div>
                                                        <textarea
                                                            class="form-control"
                                                            placeholder="Masukan hasil analisis..."
                                                            disabled
                                                        >
Proses perekrutan merupakan awal dari seluruh proses yang menjadi tanggung jawab seorang manajer SDM. Seseorang dipilih atas kesesuaiannya dalam sebuah pekerjaan di perusahaan yang akan mempekerjakannya. Perusahaan yang hanya memiliki visi yang hebat tanpa orang yang tepat tidaklah bisa dikatakan relevan.

Sebuah perusahaan yang besar tidak hanya merekrut orang dengan latar belakang yang hebat, namun merekrut orang dengan karakter yang tepat. Hal ini disebabkan karena apabila perusahaan hanya melihat pengalaman atau pendidikan calon pegawai sebagai indikator. Besar kemungkinan perusahaan akan hancur apabila tidak dijalankan oleh orang yang memiliki integritas atau dapat dipercaya.
                                                        
Setelah merekrut orang yang tepat, manajer SDM akan melatih dan memotivasi karyawannya agar dapat bekerja secara optimal di lingkungan kerja yang kondusif. Motivasi sangatlah penting bagi seorang manajer, karena dalam bisnis kita tidak bisa menyalahkan kurangnya tenaga kerja, yang ada hanyalah kurangnya semangat.
                                                        </textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tahap" class="tahap6 d-none">
                                    <div class="row">
                                        <div
                                            class="col-md-12 grid-margin stretch-card"
                                        >
                                            <div class="card">
                                                <div
                                                    class="card-body text-center"
                                                >
                                                    <div
                                                        class="text-start fw-bold fs-3 mb-3"
                                                    >
                                                        Daftar Unit
                                                    </div>
                                                    <div
                                                        style="overflow-x: auto"
                                                    >
                                                        <div
                                                            class="d-flex flex-nowrap mb-4"
                                                        >
                                                            <button
                                                                id="pmb"
                                                                class="btn btn-primary mx-2 col-4"
                                                            >
                                                                Penerimaan
                                                                Mahasiswa Baru
                                                            </button>
                                                            <button
                                                                id="lsp"
                                                                class="btn btn-primary mx-2 col-4"
                                                            >
                                                                Lembaga
                                                                Setifikasi
                                                                Profesi
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
                                        <div
                                            class="col-md-12 grid-margin stretch-card"
                                        >
                                            <div class="card">
                                                <div class="card-body">
                                                    <div
                                                        class="fw-bold mb-3 fs-4"
                                                    >
                                                        Temuan
                                                    </div>
                                                    <div
                                                        class="table-responsive"
                                                    >
                                                        <table
                                                            id="dataTableExample"
                                                            class="table"
                                                        >
                                                            <thead>
                                                                <tr>
                                                                    <th>
                                                                        Judul
                                                                        Temuan
                                                                    </th>
                                                                    <th>
                                                                        Waktu
                                                                        Penyelesaian
                                                                    </th>
                                                                    <th>
                                                                        Detail
                                                                        Temuan
                                                                    </th>
                                                                    <th>
                                                                        Aksi
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody
                                                                class="align-middle"
                                                            >
                                                                <tr>
                                                                    <td>
                                                                        SDM
                                                                        Pengelola
                                                                        Keuangan
                                                                    </td>
                                                                    <td>
                                                                        12
                                                                        September
                                                                        2022
                                                                    </td>
                                                                    <td>
                                                                        <button
                                                                            class="btn btn-outline-primary"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#temuanModal"
                                                                        >
                                                                            Lihat
                                                                            Temuan<i
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
                                                                                Buat
                                                                                Rekomendasi
                                                                            </button>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        SDM
                                                                        Pengelola
                                                                        Keuangan
                                                                    </td>
                                                                    <td>
                                                                        12
                                                                        September
                                                                        2022
                                                                    </td>
                                                                    <td>
                                                                        <button
                                                                            class="btn btn-outline-primary"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#temuanModal"
                                                                        >
                                                                            Lihat
                                                                            Temuan<i
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
                                                                                Buat
                                                                                Rekomendasi
                                                                            </button>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        SDM
                                                                        Pengelola
                                                                        Keuangan
                                                                    </td>
                                                                    <td>
                                                                        12
                                                                        September
                                                                        2022
                                                                    </td>
                                                                    <td>
                                                                        <button
                                                                            class="btn btn-outline-primary"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#temuanModal"
                                                                        >
                                                                            Lihat
                                                                            Temuan<i
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
                                                                                Buat
                                                                                Rekomendasi
                                                                            </button>
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        SDM
                                                                        Pengelola
                                                                        Keuangan
                                                                    </td>
                                                                    <td>
                                                                        12
                                                                        September
                                                                        2022
                                                                    </td>
                                                                    <td>
                                                                        <button
                                                                            class="btn btn-outline-primary"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#temuanModal"
                                                                        >
                                                                            Lihat
                                                                            Temuan<i
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
                                                                                Buat
                                                                                Rekomendasi
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

                                    <div class="row">
                                        <div
                                            class="col-md-12 grid-margin stretch-card"
                                        >
                                            <div class="card">
                                                <div class="card-body">
                                                    <div
                                                        class="d-flex justify-content-between align-items-center mb-3"
                                                    >
                                                        <div
                                                            class="fw-bold fs-5"
                                                        >
                                                            <span
                                                                class="bg-dark rounded-5 p-2 text-white me-2"
                                                                >1</span
                                                            >
                                                            Rekomendasi SDM
                                                            Pengelola Keuangan
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="border border-1 p-3"
                                                    >
                                                        <div
                                                            class="d-flex justify-content-between align-items-center mb-3"
                                                        >
                                                            <div>
                                                                1. Pergantian
                                                                SDM Pengelola
                                                                Keuangan
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
                                                                <button
                                                                    class="btn btn-primary mx-2"
                                                                    disabled
                                                                >
                                                                    <i
                                                                        class="icon-md"
                                                                        data-feather="edit"
                                                                    ></i>
                                                                </button>
                                                                <button
                                                                    class="btn btn-danger mx-2"
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
                                                            <div>
                                                                2. Pergantian
                                                                SDM Pengelola
                                                                Keuangan
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
                                                                <button
                                                                    class="btn btn-primary mx-2"
                                                                    disabled
                                                                >
                                                                    <i
                                                                        class="icon-md"
                                                                        data-feather="edit"
                                                                    ></i>
                                                                </button>
                                                                <button
                                                                    class="btn btn-danger mx-2"
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
                                <div id="tahap" class="tahap7 d-none">
                                    <div class="row">
                                        <div
                                            class="col-md-12 grid-margin stretch-card"
                                        >
                                            <div class="card">
                                                <div
                                                    class="card-body text-center"
                                                >
                                                    <div
                                                        class="text-start fw-bold fs-3 mb-3"
                                                    >
                                                        Daftar Unit
                                                    </div>
                                                    <div
                                                        style="overflow-x: auto"
                                                    >
                                                        <div
                                                            class="d-flex flex-nowrap mb-4"
                                                        >
                                                            <button
                                                                id="pmb"
                                                                class="btn btn-primary mx-2 col-4"
                                                            >
                                                                Penerimaan
                                                                Mahasiswa Baru
                                                            </button>
                                                            <button
                                                                id="lsp"
                                                                class="btn btn-primary mx-2 col-4"
                                                            >
                                                                Lembaga
                                                                Sertifikasi
                                                                Profesi
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
                                        <div
                                            class="col-md-12 grid-margin stretch-card"
                                        >
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
                                                    <div
                                                        class="fw-bold fs-5 mb-3"
                                                    >
                                                        Rendys Naja Ripando
                                                    </div>
                                                    <div
                                                        class="d-flex align-items-center"
                                                    >
                                                        <div class="col-3">
                                                            Nilai
                                                        </div>
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
                                        <div
                                            class="col-md-12 grid-margin stretch-card"
                                        >
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
                                                    <div
                                                        class="fw-bold fs-5 mb-3"
                                                    >
                                                        Rendys Ripando
                                                    </div>
                                                    <div
                                                        class="d-flex align-items-center"
                                                    >
                                                        <div class="col-3">
                                                            Nilai
                                                        </div>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Body -->

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                var currentState = "";
                var currentState2 = "";

                $(
                    ".step1, .step2, .step3, .step4, .step5, .step6, .step7"
                ).click(function () {
                    $("#tampil-tahap").removeClass("d-none");
                    currentState = $(this).text();
                    $("#judul-step").text(currentState);

                    if ($(this).val() === "1") {
                        $(".tahap1").removeClass("d-none");
                        $(".tahap2").addClass("d-none");
                        $(".tahap3").addClass("d-none");
                        $(".tahap4").addClass("d-none");
                        $(".tahap5").addClass("d-none");
                        $(".tahap6").addClass("d-none");
                        $(".tahap7").addClass("d-none");
                        // $(".tahap1").show();
                        // $("#tahap").not(".tahap1").hide();
                        // $("#tahap").each(function () {
                        //     if (!$(this).hasClass("tahap1"))
                        //         $(this).addClass("d-none");
                        //     // $(this).hide();
                        // });
                    } else if ($(this).val() === "2") {
                        $(".tahap1").addClass("d-none");
                        $(".tahap2").removeClass("d-none");
                        $(".tahap3").addClass("d-none");
                        $(".tahap4").addClass("d-none");
                        $(".tahap5").addClass("d-none");
                        $(".tahap6").addClass("d-none");
                        $(".tahap7").addClass("d-none");
                    } else if ($(this).val() === "3") {
                        $(".tahap1").addClass("d-none");
                        $(".tahap2").addClass("d-none");
                        $(".tahap3").removeClass("d-none");
                        $(".tahap4").addClass("d-none");
                        $(".tahap5").addClass("d-none");
                        $(".tahap6").addClass("d-none");
                        $(".tahap7").addClass("d-none");
                    } else if ($(this).val() === "4") {
                        $(".tahap1").addClass("d-none");
                        $(".tahap2").addClass("d-none");
                        $(".tahap3").addClass("d-none");
                        $(".tahap4").removeClass("d-none");
                        $(".tahap5").addClass("d-none");
                        $(".tahap6").addClass("d-none");
                        $(".tahap7").addClass("d-none");
                    } else if ($(this).val() === "5") {
                        $(".tahap1").addClass("d-none");
                        $(".tahap2").addClass("d-none");
                        $(".tahap3").addClass("d-none");
                        $(".tahap4").addClass("d-none");
                        $(".tahap5").removeClass("d-none");
                        $(".tahap6").addClass("d-none");
                        $(".tahap7").addClass("d-none");
                    } else if ($(this).val() === "6") {
                        $(".tahap1").addClass("d-none");
                        $(".tahap2").addClass("d-none");
                        $(".tahap3").addClass("d-none");
                        $(".tahap4").addClass("d-none");
                        $(".tahap5").addClass("d-none");
                        $(".tahap6").removeClass("d-none");
                        $(".tahap7").addClass("d-none");
                    } else if ($(this).val() === "7") {
                        $(".tahap1").addClass("d-none");
                        $(".tahap2").addClass("d-none");
                        $(".tahap3").addClass("d-none");
                        $(".tahap4").addClass("d-none");
                        $(".tahap5").addClass("d-none");
                        $(".tahap6").addClass("d-none");
                        $(".tahap7").removeClass("d-none");
                    }

                    // Call the render function to initialize the UI
                });

                $("#edm01, #edm02, #apo01, #bai03, #bai05").click(function () {
                    currentState2 = "Unit " + $(this).text();
                    $("#nama-framework").text(currentState2);
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
</div>
