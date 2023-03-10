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
                        class="col-2 bg-light border border-light py-3 px-2"
                        style="--bs-bg-opacity: 0.5"
                    >
                        <div>Tahap 1 :</div>
                        <div>Informasi Objek Audit</div>
                    </div>
                    <div
                        class="col-2 bg-secondary border border-light py-3 px-2"
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
                <h4 class="mb-3 mb-md-0 fs-3">Informasi Objek Audit</h4>
            </div>
            <div class="d-flex justify-content-end mb-3">
                <button class="mx-2 btn btn-primary">
                    <i class="icon-md me-2" data-feather="printer"></i>Cetak
                    Informasi
                </button>
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
                        <div class="card-body">
                            <div class="d-flex mb-4">
                                <div class="col-6 d-flex flex-column">
                                    <div class="fs-5 mb-1 fw-bold">
                                        Kategori Audit
                                    </div>
                                    <select
                                        class="form-select w-75"
                                        aria-label="Default select example"
                                    >
                                        <option selected>Pilih Kategori</option>
                                        <option value="1">Keuangan</option>
                                        <option value="2">Operasional</option>
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
                                        >
                                            Pilih Unit
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
                                                    >Biro Akademik</label
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
                                        />
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
                            <div class="w-100 mb-4">
                                <div class="mb-2">
                                    Nama Objek Audit
                                    <span class="text-danger">*</span>
                                </div>
                                <input type="text" class="form-control" />
                            </div>
                            <div class="w-100">
                                <div class="mb-2">
                                    Ruang Lingkup
                                    <span class="text-danger">*</span>
                                </div>
                                <textarea class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="d-flex justify-content-between">
                    <a href="/perintah-audit-ia"
                        ><button class="btn btn-primary">Kembali</button></a
                    >
                    <button
                        class="btn btn-success"
                        data-bs-toggle="modal"
                        data-bs-target="#validasi"
                    >
                        Validasi
                    </button>
                    <a href="/tindak-tahap2-ia"
                        ><button class="btn btn-primary">Selanjutnya</button></a
                    >
                </div>
            </div>
            @include('components.validasi-modal')
        </div>
        <!-- partial:partials/_footer.html -->
        <!-- @include('partials.footer') -->
        <!-- partial -->
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function () {
            // When a checkbox is clicked
            $(".dropdown-menu li input[type='checkbox']").click(function () {
                // Get an array of the selected options
                var selectedOptions = [];
                $(".dropdown-menu li input[type='checkbox']:checked").each(
                    function () {
                        selectedOptions.push($(this).val());
                    }
                );

                // Update the button label with the selected options
                if (selectedOptions.length > 0) {
                    $("#dropdownMenuButton").html(selectedOptions.join(", "));
                } else {
                    $("#dropdownMenuButton").html("Pilih Unit");
                }
            });
        });
    </script>

    @endsection
</div>
