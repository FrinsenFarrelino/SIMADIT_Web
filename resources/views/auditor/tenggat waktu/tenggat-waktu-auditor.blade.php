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
                                    <div class="d-flex">
                                        <h6
                                            class="card-title mb-3 text-white border rounded-3 bg-danger p-2"
                                        >
                                            Daftar Unit
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
                                                <div class="table-responsive">
                                                    <table
                                                        id="dataTableExample"
                                                        class="table"
                                                    >
                                                        <thead>
                                                            <tr>
                                                                <th
                                                                    class="pt-0"
                                                                >
                                                                    Temuan
                                                                </th>
                                                                <th
                                                                    class="pt-0"
                                                                >
                                                                    Kategori
                                                                </th>
                                                                <th
                                                                    class="pt-0"
                                                                >
                                                                    Tenggat
                                                                    Waktu
                                                                    Penyelesaian
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
                                                                <td>Minor</td>
                                                                <td>
                                                                    20 September
                                                                    2022
                                                                </td>
                                                                <td>
                                                                    <!-- DETAIL TEMUAN -->
                                                                    <div
                                                                        class="btn btn-info btn-xs text-white"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#detail-temuan"
                                                                    >
                                                                        <i
                                                                            data-feather="eye"
                                                                            class="feather-16"
                                                                        ></i>
                                                                    </div>

                                                                    <!-- ISI MODAL DETAIL TEMUAN -->
                                                                    <div
                                                                        class="modal fade"
                                                                        id="detail-temuan"
                                                                        tabindex="-1"
                                                                        aria-hidden="true"
                                                                    >
                                                                        <div
                                                                            class="modal-dialog"
                                                                        >
                                                                            <div
                                                                                class="modal-content"
                                                                            >
                                                                                <div
                                                                                    class="modal-header bg-primary text-white"
                                                                                >
                                                                                    <h1
                                                                                        class="modal-title fs-5"
                                                                                        id="exampleModalLabel"
                                                                                    >
                                                                                        Detail
                                                                                        Temuan
                                                                                        Audit
                                                                                    </h1>
                                                                                    <button
                                                                                        type="button"
                                                                                        class="btn-close"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close"
                                                                                    ></button>
                                                                                </div>
                                                                                <div
                                                                                    class="modal-body"
                                                                                >
                                                                                    <div
                                                                                        class="row p-2"
                                                                                    >
                                                                                        <h6
                                                                                            class="mb-2"
                                                                                        >
                                                                                            Temuan
                                                                                        </h6>
                                                                                        <input
                                                                                            type="text"
                                                                                            class="form-control"
                                                                                            id="exampleInputText1"
                                                                                            value="SDM Pengelola Keuangan"
                                                                                            disabled
                                                                                        />
                                                                                    </div>
                                                                                    <div
                                                                                        class="row p-2"
                                                                                    >
                                                                                        <h6
                                                                                            class="mb-2"
                                                                                        >
                                                                                            Kategori
                                                                                            Temuan
                                                                                        </h6>
                                                                                        <select
                                                                                            class="form-select"
                                                                                            name="kategori_select"
                                                                                            id="kategoriSelect"
                                                                                            aria-invalid="false"
                                                                                            disabled
                                                                                        >
                                                                                            <option
                                                                                                selected=""
                                                                                                disabled=""
                                                                                            >
                                                                                                Pilih
                                                                                                Kategori
                                                                                                Temuan
                                                                                            </option>
                                                                                            <option
                                                                                                selected
                                                                                            >
                                                                                                Observasi
                                                                                            </option>
                                                                                            <option>
                                                                                                Minor
                                                                                            </option>
                                                                                            <option>
                                                                                                Mayor
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>

                                                                                    <div
                                                                                        class="row p-2"
                                                                                    >
                                                                                        <h6
                                                                                            class="mb-2"
                                                                                        >
                                                                                            Keterangan
                                                                                            Temuan
                                                                                        </h6>
                                                                                        <textarea
                                                                                            type="text"
                                                                                            rows="5"
                                                                                            class="form-control text-wrap"
                                                                                            id="exampleInputText1"
                                                                                            disabled
                                                                                        >
Kepala bagian keuangan memberikan uang muka berdasarkan formulir permintaan uang muka yang sudah diotorisasi oleh marketing sales supervisor. Otorisasi dari supervisor biasanya diberikan dengan mudah tanpa memperhatikan batas maksimum yang bisa diberikan.</textarea
                                                                                        >
                                                                                    </div>
                                                                                    <div
                                                                                        class="row p-2"
                                                                                    >
                                                                                        <h6
                                                                                            class="mb-2"
                                                                                        >
                                                                                            Tenggat
                                                                                            Waktu
                                                                                            Penyelesaian
                                                                                        </h6>
                                                                                        <div
                                                                                            class="input-group flatpickr"
                                                                                            id="flatpickr-date"
                                                                                        >
                                                                                            <input
                                                                                                type="text"
                                                                                                class="form-control flatpickr-input"
                                                                                                placeholder="Tenggat Waktu Penyelesaian"
                                                                                                data-input="2023-03-09"
                                                                                                readonly="readonly"
                                                                                                disabled
                                                                                            />
                                                                                            <span
                                                                                                class="input-group-text input-group-addon"
                                                                                                data-toggle=""
                                                                                                ><svg
                                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                                    width="24"
                                                                                                    height="24"
                                                                                                    viewBox="0 0 24 24"
                                                                                                    fill="none"
                                                                                                    stroke="currentColor"
                                                                                                    stroke-width="2"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    class="feather feather-calendar"
                                                                                                >
                                                                                                    <rect
                                                                                                        x="3"
                                                                                                        y="4"
                                                                                                        width="18"
                                                                                                        height="18"
                                                                                                        rx="2"
                                                                                                        ry="2"
                                                                                                    ></rect>
                                                                                                    <line
                                                                                                        x1="16"
                                                                                                        y1="2"
                                                                                                        x2="16"
                                                                                                        y2="6"
                                                                                                    ></line>
                                                                                                    <line
                                                                                                        x1="8"
                                                                                                        y1="2"
                                                                                                        x2="8"
                                                                                                        y2="6"
                                                                                                    ></line>
                                                                                                    <line
                                                                                                        x1="3"
                                                                                                        y1="10"
                                                                                                        x2="21"
                                                                                                        y2="10"
                                                                                                    ></line></svg
                                                                                            ></span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="row p-2"
                                                                                    >
                                                                                        <h6
                                                                                            class="mb-2"
                                                                                        >
                                                                                            Lampiran
                                                                                        </h6>
                                                                                        <input
                                                                                            class="form-control"
                                                                                            type="file"
                                                                                            id="formFile"
                                                                                        />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- END ISI MODAL DETAIL TEMUAN -->

                                                                    <!-- END DETAIL TEMUAN -->

                                                                    <div
                                                                        class="btn btn-primary btn-xs text-white disabled"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#ubah-temuan"
                                                                    >
                                                                        <i
                                                                            data-feather="edit"
                                                                            class="feather-16"
                                                                        ></i>
                                                                    </div>

                                                                    <button
                                                                        class="btn btn-danger btn-xs disabled"
                                                                    >
                                                                        <i
                                                                            data-feather="trash"
                                                                            class="feather-16"
                                                                        ></i>
                                                                    </button>
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
            </div>
        </div>
    </div>
</div>
