@extends('layouts.main') @section('body')

<div class="main-wrapper">
    <!-- Sidebar -->
    @include('auditee.partial.sidebar-auditee')
    <!-- End of Sidebar -->
    <div class="page-wrapper">
        @include('auditee.partial._navbar')

        <div class="page-content">
            <div
                class="d-flex justify-content-between align-items-center flex-wrap grid-margin"
            >
                <div>
                    <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-xl-12 stretch-card">
                    <div class="row flex-grow-1">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div
                                        class="d-flex justify-content-between align-items-baseline"
                                    >
                                        <h3
                                            class="card-title mb-3 text-danger fs-4"
                                        >
                                            Pemberitahuan
                                        </h3>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12 col-md-16 col-xl-16">
                                            <h6 class="mb-0">
                                                Perintah Melengkapi Bukti
                                            </h6>
                                            <div
                                                class="d-flex align-items-baseline"
                                            >
                                                <p class="text-success">
                                                    Unit Internal Audit telah
                                                    mengirimkan perintah
                                                    kelengkapan bukti,
                                                    selengkapnya
                                                    <a href="#">disini</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12 col-md-16 col-xl-16">
                                            <h6 class="mb-0">
                                                Perintah Melengkapi Bukti
                                            </h6>
                                            <div
                                                class="d-flex align-items-baseline"
                                            >
                                                <p class="text-success">
                                                    Unit Internal Audit telah
                                                    mengirimkan perintah
                                                    kelengkapan bukti,
                                                    selengkapnya
                                                    <a href="#">disini</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12 col-md-16 col-xl-16">
                                            <h6 class="mb-0">
                                                Perintah Melengkapi Bukti
                                            </h6>
                                            <div
                                                class="d-flex align-items-baseline"
                                            >
                                                <p class="text-success">
                                                    Unit Internal Audit telah
                                                    mengirimkan perintah
                                                    kelengkapan bukti,
                                                    selengkapnya
                                                    <a href="#">disini</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div
                                        class="d-flex justify-content-between align-items-baseline"
                                    >
                                        <h3
                                            class="card-title mb-3 text-danger fs-4"
                                        >
                                            Kalender
                                        </h3>
                                    </div>

                                    <div class="row">
                                        <div
                                            class="col-6 col-md-12 col-xl-5"
                                        ></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->

            <div class="row">
                <div class="col-12 col-xl-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div
                                class="d-flex justify-content-between align-items-baseline mb-2"
                            ></div>
                            <div class="table-responsive">
                                <div
                                    id="dataTableExample_filter"
                                    class="dataTables_filter mb-4"
                                >
                                    <label
                                        ><input
                                            type="search"
                                            class="form-control"
                                            placeholder="Search"
                                            aria-controls="dataTableExample"
                                    /></label>
                                </div>
                                <table id="dataTableExample" class="table">
                                    <thead>
                                        <tr>
                                            <th class="pt-0">
                                                Jenis Perintah
                                            </th>
                                            <th class="pt-0">
                                                Kategori Audit
                                            </th>
                                            <th class="pt-0">
                                                Tanggal Perintah
                                            </th>
                                            <th class="pt-0">Status</th>
                                            <th class="pt-0">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Audit Keuangan</td>
                                            <td>Keuangan</td>
                                            <td>15 September 2022</td>
                                            <td>
                                                <span
                                                    class="badge bg-danger"
                                                    >Belum Lengkap</span
                                                >
                                            </td>
                                            <td>
                                                <a
                                                    class="btn btn-primary btn-xs"
                                                    href="/form-bukti-auditee"
                                                    role="button"
                                                    >Tindak Lanjut</a
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Audit Keuangan</td>
                                            <td>Keuangan</td>
                                            <td>15 September 2022</td>
                                            <td>
                                                <span
                                                    class="badge bg-danger"
                                                    >Belum Lengkap</span
                                                >
                                            </td>
                                            <td>
                                                <a
                                                    class="btn btn-primary btn-xs"
                                                    href="/form-bukti-auditee"
                                                    role="button"
                                                    >Tindak Lanjut</a
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Audit Keuangan</td>
                                            <td>Keuangan</td>
                                            <td>15 September 2022</td>
                                            <td>
                                                <span
                                                    class="badge bg-warning"
                                                    >Hampir Lengkap</span
                                                >
                                            </td>
                                            <td>
                                                <a
                                                    class="btn btn-primary btn-xs"
                                                    href="/form-bukti-auditee"
                                                    role="button"
                                                    >Tindak Lanjut</a
                                                >
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->
        </div>
    </div>
</div>

@endsection
