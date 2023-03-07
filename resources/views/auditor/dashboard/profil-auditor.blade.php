@extends('layouts.main') @section('body')

<div class="main-wrapper">
    <!-- Sidebar -->
    @include('auditor.partial.sidebar-auditor')
    <!-- End of Sidebar -->
    <div class="page-wrapper">
        @include('auditor.partial.navbar-auditor')

        <div class="page-content">
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <!-- UNTUK HEADER DAN FOTO PROFIL -->
                        <div class="position-relative">
                            <figure
                                class="overflow-hidden mb-0 d-flex justify-content-center"
                            >
                                <img
                                    src="{{ asset('assets/images/ia.png') }}"
                                    class="rounded-top"
                                    alt="profile cover"
                                />
                            </figure>
                            <div
                                class="d-flex justify-content-between align-items-center position-absolute top-90 w-100 px-2 px-md-4 mt-n4"
                            >
                                <div>
                                    <img
                                        class="wd-70 rounded-circle"
                                        src="{{
                                            asset('assets/images/ia.png')
                                        }}"
                                        alt="profile"
                                    />
                                </div>
                                <div class="d-none d-md-block">
                                    <a href="/edit-profile-auditor">
                                        <button
                                            class="btn btn-primary btn-icon-text"
                                        >
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-width="2"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                class="feather feather-edit btn-icon-prepend"
                                            >
                                                <path
                                                    d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"
                                                ></path>
                                                <path
                                                    d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"
                                                ></path>
                                            </svg>
                                            Edit profile
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex rounded-bottom mt-3">
                            <span class="h4 ms-3 text-dark mt-3">Adelia</span>
                        </div>
                        <div class="d-flex rounded-bottom">
                            <span class="ms-3 text-dark"
                                >Dosen Universitas 17 Agustus 1945
                                Surabaya</span
                            >
                        </div>

                        <!-- INFO KONTAK -->
                        <div class="d-flex rounded-bottom">
                            <a
                                href="#info-kontak"
                                class="ms-3"
                                data-bs-toggle="modal"
                                data-bs-target="#info-kontak"
                                >Info Kontak</a
                            >

                            <!-- POPUP INFO KONTAK -->
                            <div
                                class="modal fade"
                                id="info-kontak"
                                tabindex="-1"
                                aria-labelledby="exampleModalLabel"
                                aria-hidden="true"
                            >
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary">
                                            <h1
                                                class="modal-title fs-5 text-white"
                                                id="exampleModalLabel"
                                            >
                                                Rendys Naja Ripando
                                            </h1>
                                            <button
                                                type="button"
                                                class="btn-close"
                                                data-bs-dismiss="modal"
                                                aria-label="Close"
                                            ></button>
                                        </div>
                                        <div class="modal-body text-start">
                                            <div class="row p-2">
                                                <h5>Info Kontak</h5>
                                            </div>

                                            <div class="row p-2 email">
                                                <div class="col-1">
                                                    <i data-feather="mail"></i>
                                                </div>
                                                <div class="col-6">
                                                    <h6>Email</h6>
                                                    <span
                                                        >yessica@gmail.com</span
                                                    >
                                                </div>
                                            </div>
                                            <div class="row p-2 telepon">
                                                <div class="col-1">
                                                    <i data-feather="phone"></i>
                                                </div>
                                                <div class="col-6">
                                                    <h6>Telepon</h6>
                                                    <span>085xxxxxxxx</span>
                                                </div>
                                            </div>
                                            <div class="row p-2 twitter">
                                                <div class="col-1">
                                                    <i
                                                        data-feather="twitter"
                                                    ></i>
                                                </div>
                                                <div class="col-6">
                                                    <h6>Twitter</h6>
                                                    <span>farnymous</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- TAB BAR -->
                        <div
                            class="d-flex rounded-bottom justify-content-center"
                        >
                            <ul
                                class="nav nav-tabs nav-tabs-line"
                                id="lineTab"
                                role="tablist"
                            >
                                <li class="nav-item">
                                    <a
                                        class="nav-link active"
                                        id="do-auditor-line-tab"
                                        data-bs-toggle="tab"
                                        href="#do-auditor"
                                        role="tab"
                                        aria-controls="line-home"
                                        aria-selected="true"
                                        >Audit Dikerjakan</a
                                    >
                                </li>
                                <li class="nav-item">
                                    <a
                                        class="nav-link"
                                        id="history-auditor-line"
                                        data-bs-toggle="tab"
                                        href="#history-auditor"
                                        role="tab"
                                        aria-controls="line-profile"
                                        aria-selected="false"
                                        >History Audit</a
                                    >
                                </li>
                            </ul>
                        </div>

                        <!-- ISI TAB BAR -->
                        <div class="tab-content" id="lineTabContent">
                            <!-- TAB BAR AUDIT -->
                            <div
                                class="tab-pane fade show active"
                                id="do-auditor"
                                role="tabpanel"
                                aria-labelledby="do-auditor-line-tab"
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
                                                                    Jenis
                                                                    Perintah
                                                                </th>
                                                                <th
                                                                    class="pt-0"
                                                                >
                                                                    Status Audit
                                                                </th>
                                                                <th
                                                                    class="pt-0"
                                                                >
                                                                    Status
                                                                    Progress
                                                                    Tahap
                                                                </th>
                                                                <th
                                                                    class="pt-0"
                                                                >
                                                                    Detail
                                                                    Perintah
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    Audit
                                                                    Keuangan
                                                                </td>
                                                                <td>Aktif</td>
                                                                <td>
                                                                    Tahap 6 :
                                                                    Laporan
                                                                    Audit
                                                                </td>

                                                                <!-- Modal Lihat Detail -->
                                                                <td>
                                                                    <!-- Button trigger modal -->
                                                                    <button
                                                                        type="button"
                                                                        class="btn btn-primary"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#detail-audit"
                                                                    >
                                                                        Lihat
                                                                        Detail
                                                                        <i
                                                                            data-feather="eye"
                                                                        ></i>
                                                                    </button>

                                                                    <!-- Modal -->
                                                                    <div
                                                                        class="modal fade"
                                                                        id="detail-audit"
                                                                        tabindex="-1"
                                                                        aria-labelledby="exampleModalLabel"
                                                                        aria-hidden="true"
                                                                    >
                                                                        <div
                                                                            class="modal-dialog"
                                                                        >
                                                                            <div
                                                                                class="modal-content"
                                                                            >
                                                                                <div
                                                                                    class="modal-header bg-primary"
                                                                                >
                                                                                    <h1
                                                                                        class="modal-title fs-5 text-white"
                                                                                        id="exampleModalLabel"
                                                                                    >
                                                                                        Lihat
                                                                                        Detail
                                                                                    </h1>
                                                                                    <button
                                                                                        type="button"
                                                                                        class="btn-close"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close"
                                                                                    ></button>
                                                                                </div>
                                                                                <div
                                                                                    class="modal-body text-start"
                                                                                >
                                                                                    <div
                                                                                        class="row-md-6 grid-margin scretch-card"
                                                                                    >
                                                                                        <div
                                                                                            class="row mt-3"
                                                                                        >
                                                                                            <div
                                                                                                class="col-6"
                                                                                            >
                                                                                                <div
                                                                                                    class="tgl-perintah"
                                                                                                >
                                                                                                    <h6
                                                                                                        class="mb-3"
                                                                                                    >
                                                                                                        Tanggal
                                                                                                        Perintah
                                                                                                        :
                                                                                                        30
                                                                                                        Agt
                                                                                                        2022
                                                                                                    </h6>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="surat-perintah-audit mb-3"
                                                                                                >
                                                                                                    <h6
                                                                                                        class="mb-2"
                                                                                                    >
                                                                                                        Surat
                                                                                                        Perintah
                                                                                                        Audit
                                                                                                    </h6>

                                                                                                    <div
                                                                                                        class="border border-2 p-2 col-12"
                                                                                                    >
                                                                                                        <div
                                                                                                            class="row"
                                                                                                        >
                                                                                                            <div
                                                                                                                class="col-10"
                                                                                                            >
                                                                                                                <i
                                                                                                                    data-feather="file"
                                                                                                                ></i>
                                                                                                                <span
                                                                                                                    class="text-wa"
                                                                                                                    >Judul
                                                                                                                    File</span
                                                                                                                >
                                                                                                            </div>
                                                                                                            <i
                                                                                                                class="col-2"
                                                                                                                data-feather="download"
                                                                                                            ></i>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="daftar-pengaduan"
                                                                                                >
                                                                                                    <h6>
                                                                                                        Daftar
                                                                                                        Pengaduan
                                                                                                    </h6>
                                                                                                    <div
                                                                                                        class="card"
                                                                                                    >
                                                                                                        <div
                                                                                                            class="card-body"
                                                                                                        >
                                                                                                            <div
                                                                                                                class="d-flex justify-content-between align-items-baseline"
                                                                                                            >
                                                                                                                <h6
                                                                                                                    class="card-title mb-3 text-white border rounded-3 bg-danger p-2"
                                                                                                                >
                                                                                                                    Pengaduan
                                                                                                                    1
                                                                                                                </h6>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="row mb-3"
                                                                                                            >
                                                                                                                <div
                                                                                                                    class="d-flex align-items-baseline"
                                                                                                                >
                                                                                                                    <p
                                                                                                                        class="text-black text-wrap"
                                                                                                                    >
                                                                                                                        Lorem
                                                                                                                        ipsum,
                                                                                                                        dolor
                                                                                                                        sit
                                                                                                                        amet
                                                                                                                        consectetur
                                                                                                                        adipisicing
                                                                                                                        elit.
                                                                                                                        Dignissimos,
                                                                                                                        eaque!
                                                                                                                    </p>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="card"
                                                                                                    >
                                                                                                        <div
                                                                                                            class="card-body"
                                                                                                        >
                                                                                                            <div
                                                                                                                class="d-flex justify-content-between align-items-baseline"
                                                                                                            >
                                                                                                                <h6
                                                                                                                    class="card-title mb-3 text-white border rounded-3 bg-danger p-2"
                                                                                                                >
                                                                                                                    Pengaduan
                                                                                                                    2
                                                                                                                </h6>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="row mb-3"
                                                                                                            >
                                                                                                                <div
                                                                                                                    class="d-flex align-items-baseline"
                                                                                                                >
                                                                                                                    <p
                                                                                                                        class="text-black text-wrap"
                                                                                                                    >
                                                                                                                        Lorem
                                                                                                                        ipsum,
                                                                                                                        dolor
                                                                                                                        sit
                                                                                                                        amet
                                                                                                                        consectetur
                                                                                                                        adipisicing
                                                                                                                        elit.
                                                                                                                        Dignissimos,
                                                                                                                        eaque!
                                                                                                                    </p>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="col-6"
                                                                                            >
                                                                                                <h6
                                                                                                    class="mb-3"
                                                                                                >
                                                                                                    Keterangan
                                                                                                    Pengaduan
                                                                                                </h6>
                                                                                                <div
                                                                                                    class="border border-2 p-1"
                                                                                                >
                                                                                                    <p
                                                                                                        class="text-wrap"
                                                                                                    >
                                                                                                        Lorem,
                                                                                                        ipsum
                                                                                                        dolor
                                                                                                        sit
                                                                                                        amet
                                                                                                        consectetur
                                                                                                        adipisicing
                                                                                                        elit.
                                                                                                        Quisquam,
                                                                                                        ipsam
                                                                                                        harum
                                                                                                        qui,
                                                                                                        distinctio
                                                                                                        dolorem
                                                                                                        illo
                                                                                                        voluptatem
                                                                                                        voluptas
                                                                                                        reiciendis
                                                                                                        eligendi
                                                                                                        dolore
                                                                                                        soluta
                                                                                                        aliquid
                                                                                                        unde
                                                                                                        at
                                                                                                        porro
                                                                                                        totam
                                                                                                        facere
                                                                                                        commodi
                                                                                                        ea,
                                                                                                        voluptates
                                                                                                        blanditiis
                                                                                                        id
                                                                                                        mollitia
                                                                                                        tempore
                                                                                                        dolor.
                                                                                                        Reprehenderit,
                                                                                                        delectus
                                                                                                        aperiam
                                                                                                        sunt
                                                                                                        ducimus
                                                                                                        non
                                                                                                        voluptatibus
                                                                                                        consequuntur
                                                                                                        vel
                                                                                                        nemo
                                                                                                        minus
                                                                                                        autem
                                                                                                        suscipit
                                                                                                        porro
                                                                                                        ullam?
                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Audit
                                                                    Keuangan
                                                                </td>
                                                                <td>Aktif</td>
                                                                <td>
                                                                    Tahap 6 :
                                                                    Laporan
                                                                    Audit
                                                                </td>

                                                                <!-- Modal Lihat Detail -->
                                                                <td>
                                                                    <!-- Button trigger modal -->
                                                                    <button
                                                                        type="button"
                                                                        class="btn btn-primary"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#detail-audit"
                                                                    >
                                                                        Lihat
                                                                        Detail
                                                                        <i
                                                                            data-feather="eye"
                                                                        ></i>
                                                                    </button>

                                                                    <!-- Modal -->
                                                                    <div
                                                                        class="modal fade"
                                                                        id="detail-audit"
                                                                        tabindex="-1"
                                                                        aria-labelledby="exampleModalLabel"
                                                                        aria-hidden="true"
                                                                    >
                                                                        <div
                                                                            class="modal-dialog"
                                                                        >
                                                                            <div
                                                                                class="modal-content"
                                                                            >
                                                                                <div
                                                                                    class="modal-header bg-primary"
                                                                                >
                                                                                    <h1
                                                                                        class="modal-title fs-5 text-white"
                                                                                        id="exampleModalLabel"
                                                                                    >
                                                                                        Lihat
                                                                                        Detail
                                                                                    </h1>
                                                                                    <button
                                                                                        type="button"
                                                                                        class="btn-close"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close"
                                                                                    ></button>
                                                                                </div>
                                                                                <div
                                                                                    class="modal-body text-start"
                                                                                >
                                                                                    <div
                                                                                        class="row-md-6 grid-margin scretch-card"
                                                                                    >
                                                                                        <div
                                                                                            class="row mt-3"
                                                                                        >
                                                                                            <div
                                                                                                class="col-6"
                                                                                            >
                                                                                                <div
                                                                                                    class="tgl-perintah"
                                                                                                >
                                                                                                    <h6
                                                                                                        class="mb-3"
                                                                                                    >
                                                                                                        Tanggal
                                                                                                        Perintah
                                                                                                        :
                                                                                                        30
                                                                                                        Agt
                                                                                                        2022
                                                                                                    </h6>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="surat-perintah-audit mb-3"
                                                                                                >
                                                                                                    <h6
                                                                                                        class="mb-2"
                                                                                                    >
                                                                                                        Surat
                                                                                                        Perintah
                                                                                                        Audit
                                                                                                    </h6>

                                                                                                    <div
                                                                                                        class="border border-2 p-2 col-12"
                                                                                                    >
                                                                                                        <div
                                                                                                            class="row"
                                                                                                        >
                                                                                                            <div
                                                                                                                class="col-10"
                                                                                                            >
                                                                                                                <i
                                                                                                                    data-feather="file"
                                                                                                                ></i>
                                                                                                                <span
                                                                                                                    class="text-wa"
                                                                                                                    >Judul
                                                                                                                    File</span
                                                                                                                >
                                                                                                            </div>
                                                                                                            <i
                                                                                                                class="col-2"
                                                                                                                data-feather="download"
                                                                                                            ></i>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="daftar-pengaduan"
                                                                                                >
                                                                                                    <h6>
                                                                                                        Daftar
                                                                                                        Pengaduan
                                                                                                    </h6>
                                                                                                    <div
                                                                                                        class="card"
                                                                                                    >
                                                                                                        <div
                                                                                                            class="card-body"
                                                                                                        >
                                                                                                            <div
                                                                                                                class="d-flex justify-content-between align-items-baseline"
                                                                                                            >
                                                                                                                <h6
                                                                                                                    class="card-title mb-3 text-white border rounded-3 bg-danger p-2"
                                                                                                                >
                                                                                                                    Pengaduan
                                                                                                                    1
                                                                                                                </h6>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="row mb-3"
                                                                                                            >
                                                                                                                <div
                                                                                                                    class="d-flex align-items-baseline"
                                                                                                                >
                                                                                                                    <p
                                                                                                                        class="text-black text-wrap"
                                                                                                                    >
                                                                                                                        Lorem
                                                                                                                        ipsum,
                                                                                                                        dolor
                                                                                                                        sit
                                                                                                                        amet
                                                                                                                        consectetur
                                                                                                                        adipisicing
                                                                                                                        elit.
                                                                                                                        Dignissimos,
                                                                                                                        eaque!
                                                                                                                    </p>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="card"
                                                                                                    >
                                                                                                        <div
                                                                                                            class="card-body"
                                                                                                        >
                                                                                                            <div
                                                                                                                class="d-flex justify-content-between align-items-baseline"
                                                                                                            >
                                                                                                                <h6
                                                                                                                    class="card-title mb-3 text-white border rounded-3 bg-danger p-2"
                                                                                                                >
                                                                                                                    Pengaduan
                                                                                                                    2
                                                                                                                </h6>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="row mb-3"
                                                                                                            >
                                                                                                                <div
                                                                                                                    class="d-flex align-items-baseline"
                                                                                                                >
                                                                                                                    <p
                                                                                                                        class="text-black text-wrap"
                                                                                                                    >
                                                                                                                        Lorem
                                                                                                                        ipsum,
                                                                                                                        dolor
                                                                                                                        sit
                                                                                                                        amet
                                                                                                                        consectetur
                                                                                                                        adipisicing
                                                                                                                        elit.
                                                                                                                        Dignissimos,
                                                                                                                        eaque!
                                                                                                                    </p>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="col-6"
                                                                                            >
                                                                                                <h6
                                                                                                    class="mb-3"
                                                                                                >
                                                                                                    Keterangan
                                                                                                    Pengaduan
                                                                                                </h6>
                                                                                                <div
                                                                                                    class="border border-2 p-1"
                                                                                                >
                                                                                                    <p
                                                                                                        class="text-wrap"
                                                                                                    >
                                                                                                        Lorem,
                                                                                                        ipsum
                                                                                                        dolor
                                                                                                        sit
                                                                                                        amet
                                                                                                        consectetur
                                                                                                        adipisicing
                                                                                                        elit.
                                                                                                        Quisquam,
                                                                                                        ipsam
                                                                                                        harum
                                                                                                        qui,
                                                                                                        distinctio
                                                                                                        dolorem
                                                                                                        illo
                                                                                                        voluptatem
                                                                                                        voluptas
                                                                                                        reiciendis
                                                                                                        eligendi
                                                                                                        dolore
                                                                                                        soluta
                                                                                                        aliquid
                                                                                                        unde
                                                                                                        at
                                                                                                        porro
                                                                                                        totam
                                                                                                        facere
                                                                                                        commodi
                                                                                                        ea,
                                                                                                        voluptates
                                                                                                        blanditiis
                                                                                                        id
                                                                                                        mollitia
                                                                                                        tempore
                                                                                                        dolor.
                                                                                                        Reprehenderit,
                                                                                                        delectus
                                                                                                        aperiam
                                                                                                        sunt
                                                                                                        ducimus
                                                                                                        non
                                                                                                        voluptatibus
                                                                                                        consequuntur
                                                                                                        vel
                                                                                                        nemo
                                                                                                        minus
                                                                                                        autem
                                                                                                        suscipit
                                                                                                        porro
                                                                                                        ullam?
                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
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
                            <div
                                class="tab-pane fade"
                                id="history-auditor"
                                role="tabpanel"
                                aria-labelledby="history-auditor-line"
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
                                                                    Jenis
                                                                    Perintah
                                                                </th>
                                                                <th
                                                                    class="pt-0"
                                                                >
                                                                    Status Audit
                                                                </th>
                                                                <th
                                                                    class="pt-0"
                                                                >
                                                                    Status
                                                                    Progress
                                                                    Tahap
                                                                </th>
                                                                <th
                                                                    class="pt-0"
                                                                >
                                                                    Detail
                                                                    Perintah
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    Audit
                                                                    Keuangan
                                                                </td>
                                                                <td>Selesai</td>
                                                                <td>
                                                                    Tahap 6 :
                                                                    Laporan
                                                                    Audit
                                                                </td>

                                                                <!-- Modal Lihat Detail -->
                                                                <td>
                                                                    <!-- Button trigger modal -->
                                                                    <button
                                                                        type="button"
                                                                        class="btn btn-primary"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#detail-history"
                                                                    >
                                                                        Lihat
                                                                        Detail
                                                                        <i
                                                                            data-feather="eye"
                                                                        ></i>
                                                                    </button>

                                                                    <!-- Modal -->
                                                                    <div
                                                                        class="modal fade"
                                                                        id="detail-history"
                                                                        tabindex="-1"
                                                                        aria-labelledby="exampleModalLabel"
                                                                        aria-hidden="true"
                                                                    >
                                                                        <div
                                                                            class="modal-dialog"
                                                                        >
                                                                            <div
                                                                                class="modal-content"
                                                                            >
                                                                                <div
                                                                                    class="modal-header bg-primary"
                                                                                >
                                                                                    <h1
                                                                                        class="modal-title fs-5 text-white"
                                                                                        id="exampleModalLabel"
                                                                                    >
                                                                                        Lihat
                                                                                        Detail
                                                                                    </h1>
                                                                                    <button
                                                                                        type="button"
                                                                                        class="btn-close"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close"
                                                                                    ></button>
                                                                                </div>
                                                                                <div
                                                                                    class="modal-body text-start"
                                                                                >
                                                                                    <div
                                                                                        class="row-md-6 grid-margin scretch-card"
                                                                                    >
                                                                                        <div
                                                                                            class="row mt-3"
                                                                                        >
                                                                                            <div
                                                                                                class="col-6"
                                                                                            >
                                                                                                <div
                                                                                                    class="tgl-perintah"
                                                                                                >
                                                                                                    <h6
                                                                                                        class="mb-3"
                                                                                                    >
                                                                                                        Tanggal
                                                                                                        Perintah
                                                                                                        :
                                                                                                        30
                                                                                                        Agt
                                                                                                        2022
                                                                                                    </h6>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="surat-perintah-audit mb-3"
                                                                                                >
                                                                                                    <h6
                                                                                                        class="mb-2"
                                                                                                    >
                                                                                                        Surat
                                                                                                        Perintah
                                                                                                        Audit
                                                                                                    </h6>

                                                                                                    <div
                                                                                                        class="border border-2 p-2 col-12"
                                                                                                    >
                                                                                                        <div
                                                                                                            class="row"
                                                                                                        >
                                                                                                            <div
                                                                                                                class="col-10"
                                                                                                            >
                                                                                                                <i
                                                                                                                    data-feather="file"
                                                                                                                ></i>
                                                                                                                <span
                                                                                                                    class="text-wa"
                                                                                                                    >Judul
                                                                                                                    File</span
                                                                                                                >
                                                                                                            </div>
                                                                                                            <i
                                                                                                                class="col-2"
                                                                                                                data-feather="download"
                                                                                                            ></i>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div
                                                                                                    class="daftar-pengaduan"
                                                                                                >
                                                                                                    <h6>
                                                                                                        Daftar
                                                                                                        Pengaduan
                                                                                                    </h6>
                                                                                                    <div
                                                                                                        class="card"
                                                                                                    >
                                                                                                        <div
                                                                                                            class="card-body"
                                                                                                        >
                                                                                                            <div
                                                                                                                class="d-flex justify-content-between align-items-baseline"
                                                                                                            >
                                                                                                                <h6
                                                                                                                    class="card-title mb-3 text-white border rounded-3 bg-danger p-2"
                                                                                                                >
                                                                                                                    Pengaduan
                                                                                                                    1
                                                                                                                </h6>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="row mb-3"
                                                                                                            >
                                                                                                                <div
                                                                                                                    class="d-flex align-items-baseline"
                                                                                                                >
                                                                                                                    <p
                                                                                                                        class="text-black text-wrap"
                                                                                                                    >
                                                                                                                        Lorem
                                                                                                                        ipsum,
                                                                                                                        dolor
                                                                                                                        sit
                                                                                                                        amet
                                                                                                                        consectetur
                                                                                                                        adipisicing
                                                                                                                        elit.
                                                                                                                        Dignissimos,
                                                                                                                        eaque!
                                                                                                                    </p>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="card"
                                                                                                    >
                                                                                                        <div
                                                                                                            class="card-body"
                                                                                                        >
                                                                                                            <div
                                                                                                                class="d-flex justify-content-between align-items-baseline"
                                                                                                            >
                                                                                                                <h6
                                                                                                                    class="card-title mb-3 text-white border rounded-3 bg-danger p-2"
                                                                                                                >
                                                                                                                    Pengaduan
                                                                                                                    2
                                                                                                                </h6>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="row mb-3"
                                                                                                            >
                                                                                                                <div
                                                                                                                    class="d-flex align-items-baseline"
                                                                                                                >
                                                                                                                    <p
                                                                                                                        class="text-black text-wrap"
                                                                                                                    >
                                                                                                                        Lorem
                                                                                                                        ipsum,
                                                                                                                        dolor
                                                                                                                        sit
                                                                                                                        amet
                                                                                                                        consectetur
                                                                                                                        adipisicing
                                                                                                                        elit.
                                                                                                                        Dignissimos,
                                                                                                                        eaque!
                                                                                                                    </p>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div
                                                                                                class="col-6"
                                                                                            >
                                                                                                <h6
                                                                                                    class="mb-3"
                                                                                                >
                                                                                                    Keterangan
                                                                                                    Pengaduan
                                                                                                </h6>
                                                                                                <div
                                                                                                    class="border border-2 p-1"
                                                                                                >
                                                                                                    <p
                                                                                                        class="text-wrap"
                                                                                                    >
                                                                                                        Lorem,
                                                                                                        ipsum
                                                                                                        dolor
                                                                                                        sit
                                                                                                        amet
                                                                                                        consectetur
                                                                                                        adipisicing
                                                                                                        elit.
                                                                                                        Quisquam,
                                                                                                        ipsam
                                                                                                        harum
                                                                                                        qui,
                                                                                                        distinctio
                                                                                                        dolorem
                                                                                                        illo
                                                                                                        voluptatem
                                                                                                        voluptas
                                                                                                        reiciendis
                                                                                                        eligendi
                                                                                                        dolore
                                                                                                        soluta
                                                                                                        aliquid
                                                                                                        unde
                                                                                                        at
                                                                                                        porro
                                                                                                        totam
                                                                                                        facere
                                                                                                        commodi
                                                                                                        ea,
                                                                                                        voluptates
                                                                                                        blanditiis
                                                                                                        id
                                                                                                        mollitia
                                                                                                        tempore
                                                                                                        dolor.
                                                                                                        Reprehenderit,
                                                                                                        delectus
                                                                                                        aperiam
                                                                                                        sunt
                                                                                                        ducimus
                                                                                                        non
                                                                                                        voluptatibus
                                                                                                        consequuntur
                                                                                                        vel
                                                                                                        nemo
                                                                                                        minus
                                                                                                        autem
                                                                                                        suscipit
                                                                                                        porro
                                                                                                        ullam?
                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
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
                        </div>

                        <!-- ISI TAB BAR HITORY AUDIT -->
                        <div class="tab-content" id="lineTabContent"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
