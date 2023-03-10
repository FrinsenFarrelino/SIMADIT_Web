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
                        class="col-2 bg-light border border-light py-3 px-2"
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
                <h4 class="mb-3 mb-md-0 fs-3">Analisis Hasil Audit</h4>
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
                        <div class="card-body">
                            <div class="fw-bold fs-5 mb-3">Analisis</div>
                            <hr />
                            <div class="d-flex align-items-center mb-3">
                                <div class="col-3">Nama Analis</div>
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Masukkan nama analis..."
                                />
                            </div>
                            <div class="d-flex align-items-center mb-3">
                                <div class="col-3">Tanggal Penyelesaian</div>
                                <input type="date" class="form-control" />
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="col-3">Hasil Analisis</div>
                                <textarea
                                    class="form-control"
                                    placeholder="Masukan hasil analisis..."
                                ></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pt-5">
                <div class="d-flex justify-content-between">
                    <a href="/tindak-tahap4-ia"
                        ><button class="btn btn-primary">Kembali</button></a
                    >
                    <button
                        class="btn btn-success"
                        data-bs-toggle="modal"
                        data-bs-target="#validasi"
                    >
                        Validasi
                    </button>
                    <a href="/tindak-tahap6-ia"
                        ><button class="btn btn-primary">Selanjutnya</button></a
                    >
                </div>
            </div>
            @include('components.validasi-modal')
        </div>
    </div>
</div>

@endsection
