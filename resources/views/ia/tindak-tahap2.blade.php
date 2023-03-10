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
                        class="col-2 bg-light border border-light py-3 px-2"
                        style="--bs-bg-opacity: 0.5"
                    >
                        <div>Tahap 2 :</div>
                        <div>Penentuan Framework</div>
                    </div>
                    <div
                        class="col-2 bg-secondary border border-light py-3 px-2"
                        style="--bs-bg-opacity: 0.5"
                    >
                        <div>Tahap 3 :</div>
                        <div>Penentuan Tim Auditor</div>
                    </div>
                    <div
                        class="col-2 bg-secondary border border-light py-3 px-2"
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
                <h4 class="mb-3 mb-md-0 fs-3">Penentuan Framework</h4>
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

            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    Auditee <span class="ms-5 me-2">:</span>
                                </div>
                                <div class="me-3">
                                    <button
                                        class="btn btn-primary align-middle"
                                        data-bs-toggle="modal"
                                        data-bs-target="#auditee"
                                    >
                                        <i
                                            class="me-2 icon-md"
                                            data-feather="plus"
                                        ></i
                                        >Tambah Auditee
                                    </button>
                                    @include('components.auditee-modal')
                                </div>
                                <div
                                    class="text-primary border border-1 border-primary rounded-2 d-flex align-items-center"
                                >
                                    <i
                                        class="ms-3 me-2 icon-md"
                                        data-feather="user"
                                    ></i>
                                    Rendys
                                    <button class="btn text-primary">
                                        <i class="icon-md" data-feather="x"></i>
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
                            <div class="fw-bold fs-5 mb-3">Data Framework</div>

                            <div class="d-flex">
                                <button
                                    class="btn btn-outline-primary me-3 cobit"
                                >
                                    COBIT 2019
                                </button>
                                <button class="btn btn-outline-primary me-3">
                                    ISO 27001
                                </button>
                                <button class="btn btn-outline-primary me-3">
                                    ISO 9001
                                </button>
                                <button class="btn btn-outline-primary me-3">
                                    ISO 13485
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" id="dataDomain" hidden>
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="fw-bold fs-5 mb-3">Data Domain</div>

                            <div class="d-flex">
                                <button
                                    class="btn btn-outline-primary me-3 edm"
                                >
                                    EDM
                                </button>
                                <button class="btn btn-outline-primary me-3">
                                    APO
                                </button>
                                <button class="btn btn-outline-primary me-3">
                                    BAI
                                </button>
                                <button class="btn btn-outline-primary me-3">
                                    DSS
                                </button>
                                <button class="btn btn-outline-primary me-3">
                                    MEA
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" id="dataSubdomain" hidden>
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="fw-bold fs-5 mb-3">Data Subdomain</div>

                            <div class="d-flex">
                                <button
                                    class="btn btn-outline-primary me-3 edm01"
                                >
                                    EDM01
                                </button>
                                <button
                                    class="btn btn-outline-primary me-3 edm02"
                                >
                                    EDM02
                                </button>
                                <button class="btn btn-outline-primary me-3">
                                    EDM03
                                </button>
                                <button
                                    class="btn btn-outline-primary me-3 apo01"
                                >
                                    APO01
                                </button>
                                <button class="btn btn-outline-primary me-3">
                                    APO02
                                </button>
                                <button class="btn btn-outline-primary me-3">
                                    BAI01
                                </button>
                                <button class="btn btn-outline-primary me-3">
                                    BAI02
                                </button>
                                <button
                                    class="btn btn-outline-primary me-3 bai03"
                                >
                                    BAI03
                                </button>
                                <button class="btn btn-outline-primary me-3">
                                    BAI04
                                </button>
                                <button class="btn btn-outline-primary me-3">
                                    BAI05
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" id="dataEdm01" hidden>
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div
                                class="d-flex justify-content-between align-items-center mb-3"
                            >
                                <div class="fw-bold fs-5">
                                    Data Pertanyaan EDM01
                                </div>
                                <button
                                    class="btn btn-primary"
                                    data-bs-toggle="modal"
                                    data-bs-target="#pertanyaan"
                                >
                                    <i class="icon-md" data-feather="plus"></i>
                                </button>
                            </div>
                            <div class="border border-1 p-3">
                                <div
                                    class="d-flex justify-content-between align-items-center mb-3"
                                >
                                    <div>1. Pertanyaan ke-1 tentang EDM01</div>
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
                                    <div>2. Pertanyaan ke-2 tentang EDM01</div>
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

            <div class="row" id="dataEdm02" hidden>
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div
                                class="d-flex justify-content-between align-items-center mb-3"
                            >
                                <div class="fw-bold fs-5">
                                    Data Pertanyaan EDM02
                                </div>
                                <button
                                    class="btn btn-primary"
                                    data-bs-toggle="modal"
                                    data-bs-target="#pertanyaan"
                                >
                                    <i class="icon-md" data-feather="plus"></i>
                                </button>
                            </div>
                            <div class="border border-1 p-3">
                                <div
                                    class="d-flex justify-content-between align-items-center mb-3"
                                >
                                    <div>1. Pertanyaan ke-1 tentang EDM02</div>
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
                                    <div>2. Pertanyaan ke-2 tentang EDM02</div>
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

            <div class="row" id="dataApo01" hidden>
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div
                                class="d-flex justify-content-between align-items-center mb-3"
                            >
                                <div class="fw-bold fs-5">
                                    Data Pertanyaan APO01
                                </div>
                                <button
                                    class="btn btn-primary"
                                    data-bs-toggle="modal"
                                    data-bs-target="#pertanyaan"
                                >
                                    <i class="icon-md" data-feather="plus"></i>
                                </button>
                            </div>
                            <div class="border border-1 p-3">
                                <div
                                    class="d-flex justify-content-between align-items-center mb-3"
                                >
                                    <div>1. Pertanyaan ke-1 tentang APO01</div>
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
                                    <div>2. Pertanyaan ke-2 tentang APO01</div>
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

            <div class="row" id="dataBai03" hidden>
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div
                                class="d-flex justify-content-between align-items-center mb-3"
                            >
                                <div
                                    class="fw-bold fs-5"
                                    data-bs-toggle="modal"
                                    data-bs-target="#pertanyaan"
                                >
                                    Data Pertanyaan BAI03
                                </div>
                                <button class="btn btn-primary">
                                    <i class="icon-md" data-feather="plus"></i>
                                </button>
                            </div>
                            <div class="border border-1 p-3">
                                <div
                                    class="d-flex justify-content-between align-items-center mb-3"
                                >
                                    <div>1. Pertanyaan ke-1 tentang BAI03</div>
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
                                    <div>2. Pertanyaan ke-2 tentang BAI03</div>
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
            @include('components.pertanyaan-modal')

            <div class="row">
                <div class="d-flex justify-content-between">
                    <a href="/tindak-tahap1-ia"
                        ><button class="btn btn-primary">Kembali</button></a
                    >
                    <button
                        class="btn btn-success"
                        data-bs-toggle="modal"
                        data-bs-target="#validasi"
                    >
                        Validasi
                    </button>
                    <a href="/tindak-tahap3-ia"
                        ><button class="btn btn-primary">Selanjutnya</button></a
                    >
                </div>
            </div>
            @include('components.validasi-modal')
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(".cobit").click(function () {
        $(this).addClass("btn-primary");
        $(this).removeClass("btn-outline-primary");
        $("#dataDomain").removeAttr("hidden");
    });

    $(".edm").click(function () {
        $(this).addClass("btn-primary");
        $(this).removeClass("btn-outline-primary");
        $("#dataSubdomain").removeAttr("hidden");
    });

    $(".edm01").click(function () {
        $(this).addClass("btn-primary");
        $(this).removeClass("btn-outline-primary");
        $("#dataEdm01").removeAttr("hidden");
    });

    $(".edm02").click(function () {
        $(this).addClass("btn-primary");
        $(this).removeClass("btn-outline-primary");
        $("#dataEdm02").removeAttr("hidden");
    });

    $(".apo01").click(function () {
        $(this).addClass("btn-primary");
        $(this).removeClass("btn-outline-primary");
        $("#dataApo01").removeAttr("hidden");
    });

    $(".bai03").click(function () {
        $(this).addClass("btn-primary");
        $(this).removeClass("btn-outline-primary");
        $("#dataBai03").removeAttr("hidden");
    });
</script>

@endsection
