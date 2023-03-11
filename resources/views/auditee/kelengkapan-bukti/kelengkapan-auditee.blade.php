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
                    <h4 class="mb-3 mb-md-0">Kelengkapan Bukti</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="table-responsive">
                                    <div
                                        id="dataTableExample_filter"
                                        class="dataTables_filter mb-4"
                                    >
                                     
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
                                                        class="badge bg-success"
                                                        >Lengkap</span
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
            </div>
        </div>
    </div>
</div>

@endsection
