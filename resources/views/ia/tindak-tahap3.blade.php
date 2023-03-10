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
                        class="col-2 bg-light border border-light py-3 px-2"
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
                <h4 class="mb-3 mb-md-0 fs-3">Penentuan Tim Auditor</h4>
            </div>

            <div class="d-flex justify-content-end mb-3">
                <button
                    class="mx-2 btn btn-secondary"
                    data-bs-toggle="modal"
                    data-bs-target="#historyAuditor"
                >
                    <i class="icon-md me-2" data-feather="clock"></i>History
                    Persetujuan
                </button>
                @include('components.auditor.history-auditor-modal')
                <button
                    class="mx-2 btn btn-success"
                    onclick="showSwal('passing-parameter-execute-cancel')"
                >
                    <i class="icon-md me-2" data-feather="save"></i>Simpan
                    Perubahan
                </button>
                <button
                    class="mx-2 btn btn-primary"
                    data-bs-toggle="modal"
                    data-bs-target="#auditorCreate"
                >
                    <i class="icon-md me-2" data-feather="plus"></i>Tambah
                    Auditor
                </button>
                @include('components.auditor.auditor-create-modal')
            </div>

            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="dataTableExample" class="table">
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
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#auditorEdit"
                                                    >
                                                        <i
                                                            class="icon-md"
                                                            data-feather="edit"
                                                        ></i>
                                                    </button>
                                                    <button
                                                        class="btn btn-danger mx-2"
                                                        onclick="showSwal('passing-parameter-delete-cancel')"
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
                                                    class="w-75 bg-secondary py-2 px-3 rounded text-center text-white"
                                                >
                                                    Menunggu Persetujuan
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
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#auditorEdit"
                                                    >
                                                        <i
                                                            class="icon-md"
                                                            data-feather="edit"
                                                        ></i>
                                                    </button>
                                                    <button
                                                        class="btn btn-danger mx-2"
                                                        onclick="showSwal('passing-parameter-delete-cancel')"
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
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#auditorEdit"
                                                    >
                                                        <i
                                                            class="icon-md"
                                                            data-feather="edit"
                                                        ></i>
                                                    </button>
                                                    <button
                                                        class="btn btn-danger mx-2"
                                                        onclick="showSwal('passing-parameter-delete-cancel')"
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
                                                    class="w-75 bg-secondary py-2 px-3 rounded text-center text-white"
                                                >
                                                    Menunggu Persetujuan
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
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#auditorEdit"
                                                    >
                                                        <i
                                                            class="icon-md"
                                                            data-feather="edit"
                                                        ></i>
                                                    </button>
                                                    <button
                                                        class="btn btn-danger mx-2"
                                                        onclick="showSwal('passing-parameter-delete-cancel')"
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
                    </div>
                </div>
            </div>
            @include('components.auditor.auditor-edit-modal')
            @include('components.auditor.auditor-view-modal')

            <div class="row">
                <div class="d-flex justify-content-between">
                    <a href="/tindak-tahap2-ia"
                        ><button class="btn btn-primary">Kembali</button></a
                    >
                    <button
                        class="btn btn-success"
                        data-bs-toggle="modal"
                        data-bs-target="#validasi"
                    >
                        Validasi
                    </button>
                    <a href="/tindak-tahap4-ia"
                        ><button class="btn btn-primary">Selanjutnya</button></a
                    >
                </div>
            </div>
            @include('components.validasi-modal')
        </div>
    </div>
</div>

@endsection
