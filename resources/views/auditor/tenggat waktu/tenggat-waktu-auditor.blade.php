@extends('layouts.main') @section('body')

<div class="main-wrapper">
    <!-- Sidebar -->
    @include('auditor.partial.sidebar-auditor')
    <!-- End of Sidebar -->
    <div class="page-wrapper">
        @include('auditor.partial.navbar-auditor')

        <div class="page-content">
            <div
                class="d-flex justify-content-between align-items-center flex-wrap grid-margin"
            >
                <div>
                    <h4 class="mb-3 mb-md-0">
                        Tenggat Waktu Penyelesaian Temuan Audit
                    </h4>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-xl-12 stretch-card">
                    <div class="row flex-grow-1">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div
                                        class="d-flex justify-content-between align-items-baseline"
                                    >
                                        <h6
                                            class="card-title mb-3 text-white border rounded-3 bg-danger p-2"
                                        >
                                            List Unit
                                        </h6>
                                    </div>

                                    <div class="row">
                                        <ul
                                            class="nav nav-tabs nav-tabs-line"
                                            id="lineTab"
                                            role="tablist"
                                        >
                                            <li class="nav-item">
                                                <a
                                                    class="nav-link active"
                                                    id="penerimaan-line-tab"
                                                    data-bs-toggle="tab"
                                                    href="#penerimaan-mhs-baru"
                                                    role="tab"
                                                    aria-controls="line-penerimaan"
                                                    aria-selected="true"
                                                    >Penerimaan Mahasiswa
                                                    Baru</a
                                                >
                                            </li>
                                            <li class="nav-item">
                                                <a
                                                    class="nav-link"
                                                    id="sertifikasi-line-tab"
                                                    data-bs-toggle="tab"
                                                    href="#lembaga-sertifikasi"
                                                    role="tab"
                                                    aria-controls="line-profile"
                                                    aria-selected="false"
                                                    >Lembaga Sertifikasi
                                                    Profesi</a
                                                >
                                            </li>
                                            <li class="nav-item">
                                                <a
                                                    class="nav-link"
                                                    id="contact-line-tab"
                                                    data-bs-toggle="tab"
                                                    href="#line-contact"
                                                    role="tab"
                                                    aria-controls="line-contact"
                                                    aria-selected="false"
                                                    >Biro Akademik</a
                                                >
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content" id="lineTabContent">
                            <div
                                class="tab-pane fade show active"
                                id="penerimaan-mhs-baru"
                                role="tabpanel"
                                aria-labelledby="penerimaan-line-tab"
                            >
                                <div class="row">
                                    <div
                                        class="col-12 col-xl-12 grid-margin stretch-card"
                                    >
                                        <div class="card">
                                            <div class="card-body">
                                                <div
                                                    class="d-flex justify-content-between align-items-baseline mb-2"
                                                ></div>
                                                <div class="table-responsive">
                                                    <table
                                                        class="table table-hover mb-0"
                                                    >
                                                        <thead>
                                                            <tr>
                                                                <th
                                                                    class="pt-0"
                                                                >
                                                                    Jenis Temuan
                                                                </th>
                                                                <th
                                                                    class="pt-0"
                                                                >
                                                                    Waktu
                                                                    Penyelesaian
                                                                </th>
                                                                <th
                                                                    class="pt-0"
                                                                >
                                                                    Detail
                                                                    Temuan
                                                                </th>
                                                                <th
                                                                    class="pt-0"
                                                                >
                                                                    Aksi
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    SDM
                                                                    Pengelola
                                                                    Keuangan
                                                                </td>

                                                                <td>
                                                                    15 September
                                                                    2022
                                                                </td>
                                                                <td>
                                                                    <button
                                                                        type="button"
                                                                        class="btn btn-info text-white"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModal"
                                                                    >
                                                                        Lihat
                                                                        Temuan
                                                                    </button>

                                                                    <div
                                                                        class="modal fade"
                                                                        id="exampleModal"
                                                                        tabindex="-1"
                                                                        aria-labelledby="exampleModalLabel"
                                                                        aria-hidden="true"
                                                                    >
                                                                        <div
                                                                            class="modal-dialog modal-dialog-scrollable"
                                                                        >
                                                                            <div
                                                                                class="modal-content"
                                                                            >
                                                                                <div
                                                                                    class="modal-header"
                                                                                >
                                                                                    <h5
                                                                                        class="modal-title"
                                                                                        id="exampleModalLabel"
                                                                                    >
                                                                                        Detail
                                                                                        Temuan
                                                                                    </h5>
                                                                                    <button
                                                                                        type="button"
                                                                                        class="btn-close"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="btn-close"
                                                                                    ></button>
                                                                                </div>
                                                                                <div
                                                                                    class="modal-body"
                                                                                >
                                                                                    <div
                                                                                        class="row"
                                                                                    >
                                                                                        <div
                                                                                            class="judul-temuan mb-3"
                                                                                        >
                                                                                            <label
                                                                                                for="judul-temuan"
                                                                                                class="form-label fw-bold"
                                                                                                >Judul
                                                                                                Temuan</label
                                                                                            >
                                                                                            <input
                                                                                                type="text"
                                                                                                class="form-control"
                                                                                                id="judul-temuan"
                                                                                                autocomplete="off"
                                                                                                placeholder="Judul Temuan"
                                                                                                value="SDM Pengelola Keuangan"
                                                                                                disabled
                                                                                            />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="row"
                                                                                    >
                                                                                        <div
                                                                                            class="fakta-temuan mb-3"
                                                                                        >
                                                                                            <label
                                                                                                for="fakta-temuan"
                                                                                                class="form-label fw-bold"
                                                                                                >Fakta
                                                                                                Temuan</label
                                                                                            >
                                                                                            <textarea
                                                                                                class="form-control"
                                                                                                rows="10"
                                                                                                value="jcnskjcn"
                                                                                                disabled
                                                                                            >
Kepala bagian keuangan memberikan uang muka berdasarkan formulir permintaan uang muka yang sudah diotorisasi oleh marketing sales supervisor. Otorisasi dari supervisor biasanya diberikan dengan mudah tanpa memperhatikan batas maksimum yang bisa diberikan.</textarea
                                                                                            >
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="row"
                                                                                    >
                                                                                        <div
                                                                                            class="rincian-waktu mb-3"
                                                                                        >
                                                                                            <label
                                                                                                for="rincian-waktu"
                                                                                                class="form-label fw-bold"
                                                                                                >Rincian
                                                                                                Waktu
                                                                                                Penyelesaian
                                                                                            </label>
                                                                                            <input
                                                                                                type="text"
                                                                                                class="form-control"
                                                                                                id="rincian-waktu"
                                                                                                autocomplete="off"
                                                                                                value="Akan diselesaikan dalam 2 minggu kerja"
                                                                                                disabled
                                                                                            />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="row"
                                                                                    >
                                                                                        <div
                                                                                            class="waktu-selesai mb-3"
                                                                                        >
                                                                                            <label
                                                                                                for="waktu-selesai"
                                                                                                class="form-label fw-bold"
                                                                                                >Waktu
                                                                                                Selesai
                                                                                                Penyelesaian
                                                                                                Temuan
                                                                                                Audit
                                                                                            </label>
                                                                                        </div>
                                                                                        <div
                                                                                            class="row"
                                                                                        >
                                                                                            <input
                                                                                                type="date"
                                                                                                class="form-control"
                                                                                                disabled
                                                                                            />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="row"
                                                                                    >
                                                                                        <div
                                                                                            class="lampiran"
                                                                                        >
                                                                                            <label
                                                                                                for="lampiran"
                                                                                                class="form-label fw-bold"
                                                                                                >Lampiran
                                                                                            </label>
                                                                                        </div>
                                                                                        <div
                                                                                            class="row"
                                                                                        >
                                                                                            <div
                                                                                                class="border border-2 p-2 col-5 me-2 bg-secondary bg-opacity-50"
                                                                                            >
                                                                                                <p
                                                                                                    class="fs-6"
                                                                                                >
                                                                                                    Lampiran
                                                                                                    Temuan
                                                                                                    Final
                                                                                                </p>
                                                                                            </div>
                                                                                            <div
                                                                                                class="border border-2 p-2 col-5 bg-secondary bg-opacity-50"
                                                                                            >
                                                                                                <p
                                                                                                    class="fs-6"
                                                                                                >
                                                                                                    Lampiran
                                                                                                    Temuan
                                                                                                    Final
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div
                                                                        class="btn btn-primary disabled"
                                                                    >
                                                                        Ubah
                                                                    </div>
                                                                    <div
                                                                        class="btn btn-danger disabled"
                                                                    >
                                                                        Hapus
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

                                <div class="row">
                                    <div
                                        class="col-12 col-xl-12 grid-margin stretch-card"
                                    >
                                        <div class="card">
                                            <div class="card-body">
                                                <div
                                                    class="d-flex justify-content-between align-items-baseline mb-2"
                                                >
                                                    Kalender
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="tab-pane fade show"
                                id="lembaga-sertifikasi"
                                role="tabpanel"
                                aria-labelledby="sertifikasi-line-tab"
                            >
                                dkcnjkd
                            </div>
                        </div>
                    </div>

                    @endsection
                </div>
            </div>
        </div>
    </div>
</div>
