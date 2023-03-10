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
                <h4 class="mb-3 mb-md-0 fs-2">MANAJEMEN FRAMEWORK</h4>
            </div>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div
                                class="d-flex justify-content-between align-items-center mb-3"
                            >
                                <div class="fw-bold fs-5 mb-3">
                                    Data Framework
                                </div>
                                <div>
                                    <button
                                        class="btn btn-primary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#frameworkCreate"
                                    >
                                        <i
                                            class="icon-md"
                                            data-feather="plus"
                                        ></i>
                                    </button>
                                    @include('components.framework.framework-create-modal')
                                    <button
                                        class="btn btn-success"
                                        data-bs-toggle="modal"
                                        data-bs-target="#frameworkEdit"
                                    >
                                        <i
                                            class="icon-md"
                                            data-feather="edit"
                                        ></i>
                                    </button>
                                    @include('components.framework.framework-edit-modal')
                                    <button
                                        class="btn btn-danger"
                                        onclick="showSwal('passing-parameter-delete-cancel')"
                                    >
                                        <i
                                            class="icon-md"
                                            data-feather="trash"
                                        ></i>
                                    </button>
                                </div>
                            </div>

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
                            <div
                                class="d-flex justify-content-between align-items-center mb-3"
                            >
                                <div class="fw-bold fs-5 mb-3">Data Domain</div>
                                <div>
                                    <button
                                        class="btn btn-primary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#domainCreate"
                                    >
                                        <i
                                            class="icon-md"
                                            data-feather="plus"
                                        ></i>
                                    </button>
                                    @include('components.domain.domain-create-modal')
                                    <button
                                        class="btn btn-success"
                                        data-bs-toggle="modal"
                                        data-bs-target="#domainEdit"
                                    >
                                        <i
                                            class="icon-md"
                                            data-feather="edit"
                                        ></i>
                                    </button>
                                    @include('components.domain.domain-edit-modal')
                                    <button
                                        class="btn btn-danger"
                                        onclick="showSwal('passing-parameter-delete-cancel')"
                                    >
                                        <i
                                            class="icon-md"
                                            data-feather="trash"
                                        ></i>
                                    </button>
                                </div>
                            </div>

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
                            <div
                                class="d-flex justify-content-between align-items-center mb-3"
                            >
                                <div class="fw-bold fs-5 mb-3">
                                    Data Subdomain
                                </div>
                                <div>
                                    <button
                                        class="btn btn-primary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#subdomainCreate"
                                    >
                                        <i
                                            class="icon-md"
                                            data-feather="plus"
                                        ></i>
                                    </button>
                                    @include('components.subdomain.subdomain-create-modal')
                                    <button
                                        class="btn btn-success"
                                        data-bs-toggle="modal"
                                        data-bs-target="#subdomainEdit"
                                    >
                                        <i
                                            class="icon-md"
                                            data-feather="edit"
                                        ></i>
                                    </button>
                                    @include('components.subdomain.subdomain-edit-modal')
                                    <button
                                        class="btn btn-danger"
                                        onclick="showSwal('passing-parameter-delete-cancel')"
                                    >
                                        <i
                                            class="icon-md"
                                            data-feather="trash"
                                        ></i>
                                    </button>
                                </div>
                            </div>

                            <div class="d-flex mb-4">
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
                            <div class="border p-4">
                                <div class="fw-bold mb-2">
                                    Visi Program Studi Teknik Informatika :
                                </div>
                                <div>
                                    Menghasilkan lulusan yang mandiri, berdaya
                                    saing, berbasis nilai dan karakter bangsa
                                    serta mampu beradaptasi terhadap
                                    perkembangan teknologi informasi menuju
                                    program studi unggulan pada tahun 2035
                                </div>
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
                                <div>
                                    <button
                                        class="btn btn-primary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#pertanyaan"
                                    >
                                        <i
                                            class="icon-md"
                                            data-feather="plus"
                                        ></i>
                                    </button>
                                    <button
                                        class="btn btn-success"
                                        data-bs-toggle="modal"
                                        data-bs-target="#pertanyaan"
                                    >
                                        <i
                                            class="icon-md"
                                            data-feather="edit"
                                        ></i>
                                    </button>
                                    <button
                                        class="btn btn-danger"
                                        onclick="showSwal('passing-parameter-delete-cancel')"
                                    >
                                        <i
                                            class="icon-md"
                                            data-feather="trash"
                                        ></i>
                                    </button>
                                </div>
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
                                <div
                                    class="fw-bold fs-5"
                                    data-bs-toggle="modal"
                                    data-bs-target="#pertanyaan"
                                >
                                    Data Pertanyaan EDM02
                                </div>
                                <div>
                                    <button
                                        class="btn btn-primary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#pertanyaan"
                                    >
                                        <i
                                            class="icon-md"
                                            data-feather="plus"
                                        ></i>
                                    </button>
                                    <button
                                        class="btn btn-success"
                                        data-bs-toggle="modal"
                                        data-bs-target="#pertanyaan"
                                    >
                                        <i
                                            class="icon-md"
                                            data-feather="edit"
                                        ></i>
                                    </button>
                                    <button
                                        class="btn btn-danger"
                                        onclick="showSwal('passing-parameter-delete-cancel')"
                                    >
                                        <i
                                            class="icon-md"
                                            data-feather="trash"
                                        ></i>
                                    </button>
                                </div>
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
                                <div
                                    class="fw-bold fs-5"
                                    data-bs-toggle="modal"
                                    data-bs-target="#pertanyaan"
                                >
                                    Data Pertanyaan APO01
                                </div>
                                <div>
                                    <button
                                        class="btn btn-primary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#pertanyaan"
                                    >
                                        <i
                                            class="icon-md"
                                            data-feather="plus"
                                        ></i>
                                    </button>
                                    <button
                                        class="btn btn-success"
                                        data-bs-toggle="modal"
                                        data-bs-target="#pertanyaan"
                                    >
                                        <i
                                            class="icon-md"
                                            data-feather="edit"
                                        ></i>
                                    </button>
                                    <button
                                        class="btn btn-danger"
                                        onclick="showSwal('passing-parameter-delete-cancel')"
                                    >
                                        <i
                                            class="icon-md"
                                            data-feather="trash"
                                        ></i>
                                    </button>
                                </div>
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
                                <div>
                                    <button
                                        class="btn btn-primary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#pertanyaan"
                                    >
                                        <i
                                            class="icon-md"
                                            data-feather="plus"
                                        ></i>
                                    </button>
                                    <button
                                        class="btn btn-success"
                                        data-bs-toggle="modal"
                                        data-bs-target="#pertanyaan"
                                    >
                                        <i
                                            class="icon-md"
                                            data-feather="edit"
                                        ></i>
                                    </button>
                                    <button
                                        class="btn btn-danger"
                                        onclick="showSwal('passing-parameter-delete-cancel')"
                                    >
                                        <i
                                            class="icon-md"
                                            data-feather="trash"
                                        ></i>
                                    </button>
                                </div>
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
        </div>
        @include('components.pertanyaan-modal')
        <!-- End of Body -->

        <!-- partial:partials/_footer.html -->
        @include('partials.footer')
        <!-- partial -->
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
