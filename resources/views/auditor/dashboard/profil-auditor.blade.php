@extends('layouts.main') @section('body')

<div class="main-wrapper">
    <!-- Sidebar -->
    @include('auditor.partial.sidebar-auditor')
    <!-- End of Sidebar -->
    <div class="page-wrapper">
        <!-- NAVBAR -->
        @include('auditor.partial.navbar-auditor')
        <!-- END NAVBAR -->

        <div class="page-content">
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
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
                                            asset('assets/images/lulu.jpg')
                                        }}"
                                        alt="profile"
                                    />
                                    <span class="h4 ms-3 text-dark"
                                        >Lulu Salsabila</span
                                    >
                                </div>
                                <div class="d-none d-md-block">
                                    <a
                                        href="/edit-profile-auditor"
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
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div
                            class="justify-content-start p-3 rounded-bottom mt-3"
                        >
                            <div class="row rounded-bottom">
                                <span class="text-dark mt-3"
                                    >Dosen Universitas 17 Agustus 1945
                                    Surabaya</span
                                >
                            </div>
                            <div class="row rounded-bottom">
                                <a
                                    href="#info-kontak"
                                    class=""
                                    data-bs-toggle="modal"
                                    data-bs-target="#info-kontak"
                                    >Info Kontak</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row profile-body">
                <!-- TAB BAR -->
                <div class="d-flex rounded-bottom justify-content-center">
                    <ul
                        class="nav nav-tabs nav-tabs-line"
                        id="lineTab"
                        role="tablist"
                    >
                        <li class="nav-item">
                            <a
                                class="nav-link active"
                                id="audit-dikerjakan-label"
                                data-bs-toggle="tab"
                                href="#audit-dikerjakan"
                                role="tab"
                                aria-controls="line-home"
                                aria-selected="true"
                                >Audit Dikerjakan</a
                            >
                        </li>
                        <li class="nav-item">
                            <a
                                class="nav-link"
                                id="history-audit-label"
                                data-bs-toggle="tab"
                                href="#history-audit"
                                role="tab"
                                aria-controls="line-profile"
                                aria-selected="false"
                                >Riwayat Audit</a
                            >
                        </li>
                    </ul>
                </div>
                <!--END TAB BAR  -->

                <!-- ISI TAB BAR -->

                <div class="tab-content" id="lineTabContent">
                    <!-- TAB BAR AUDIT DIKERJAKAN-->
                    <div
                        class="tab-pane fade show active"
                        id="audit-dikerjakan"
                        role="tabpanel"
                        aria-labelledby="audit-dikerjakan-label"
                    >
                        <div class="col-12 col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="pt-0">
                                                        Jenis Perintah
                                                    </th>
                                                    <th class="pt-0">
                                                        Status Audit
                                                    </th>
                                                    <th class="pt-0">
                                                        Status Progress Tahap
                                                    </th>
                                                    <th class="pt-0">
                                                        Detail Perintah
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Audit Keuangan</td>
                                                    <td>Aktif</td>
                                                    <td>
                                                        Tahap 6 : Laporan Audit
                                                    </td>

                                                    <!-- Modal Lihat Detail -->
                                                    <td>
                                                        <!-- Button trigger modal -->
                                                        <button
                                                            type="button"
                                                            class="btn btn-primary"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#detail-audit-dikerjakan"
                                                        >
                                                            Lihat Detail
                                                            <i
                                                                data-feather="eye"
                                                                class="feather-16"
                                                            ></i>
                                                        </button>
                                                    </td>
                                                    <!-- Modal Lihat Detail -->
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END TAB-BAR-AUDIT-DIKERJAKAN -->

                    <!-- TAB BAR HISTORY AUDIT -->
                    <div
                        class="tab-pane fade"
                        id="history-audit"
                        role="tabpanel"
                        aria-labelledby="history-audit-label"
                    >
                        <div class="col-12 col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="pt-0">
                                                        Jenis Perintah
                                                    </th>
                                                    <th class="pt-0">
                                                        Status Audit
                                                    </th>
                                                    <th class="pt-0">
                                                        Status Progress Tahap
                                                    </th>
                                                    <th class="pt-0">
                                                        Detail Perintah
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Audit Keuangan</td>
                                                    <td>Selesai</td>
                                                    <td>
                                                        Tahap 6 : Laporan Audit
                                                    </td>

                                                    <!-- Modal Lihat Detail -->
                                                    <td>
                                                        <!-- Button trigger modal -->
                                                        <button
                                                            type="button"
                                                            class="btn btn-primary"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#detail-audit-dikerjakan"
                                                        >
                                                            Lihat Detail
                                                            <i
                                                                data-feather="eye"
                                                                class="feather-16"
                                                            ></i>
                                                        </button>
                                                    </td>
                                                    <!-- Modal Lihat Detail -->
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END TAB-BAR-HISTORY-AUDIT -->
                    <!-- END ISI TAB BAR -->
                </div>
            </div>
        </div>
    </div>

    <!-- ISI MODAL DETAIL AUDIT DIEKRJAKAN -->
    <div
        class="modal fade modal-lg"
        id="detail-audit-dikerjakan"
        tabindex="-1"
        aria-labelledby="detail-audit-dikerjakan-label"
        aria-hidden="true"
    >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h1
                        class="modal-title fs-5 text-white"
                        id="detail-audit-dikerjakan-label"
                    >
                        Lihat Detail
                    </h1>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">
                    <div class="row-md-6 grid-margin scretch-card">
                        <div class="row mt-3">
                            <div class="col-6">
                                <div class="tgl-perintah">
                                    <h6 class="mb-3">
                                        Tanggal Perintah : 30 Agt 2022
                                    </h6>
                                </div>
                                <div class="surat-perintah-audit mb-3">
                                    <h6 class="mb-2">Surat Perintah Audit</h6>

                                    <div class="border border-2 p-2 col-12">
                                        <div class="row">
                                            <div class="col-10">
                                                <i data-feather="file"></i>
                                                <span class="text-wa"
                                                    >Judul File</span
                                                >
                                            </div>
                                            <i
                                                class="feather-16 col-2 mt-1"
                                                data-feather="download"
                                            ></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="daftar-pengaduan">
                                    <h6>Daftar Pengaduan</h6>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <h6
                                                    class="card-title mb-3 text-white border rounded-3 bg-danger p-2"
                                                >
                                                    Pengaduan 1
                                                </h6>
                                            </div>
                                            <div class="row mb-3">
                                                <div
                                                    class="d-flex align-items-baseline"
                                                >
                                                    <p
                                                        class="text-black text-wrap"
                                                    >
                                                        Lorem ipsum, dolor sit
                                                        amet consectetur
                                                        adipisicing elit.
                                                        Dignissimos, eaque!
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <h6
                                                    class="card-title mb-3 text-white border rounded-3 bg-danger p-2"
                                                >
                                                    Pengaduan 2
                                                </h6>
                                            </div>
                                            <div class="row mb-3">
                                                <div
                                                    class="d-flex align-items-baseline"
                                                >
                                                    <p
                                                        class="text-black text-wrap"
                                                    >
                                                        Lorem ipsum, dolor sit
                                                        amet consectetur
                                                        adipisicing elit.
                                                        Dignissimos, eaque!
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <h6 class="mb-3">Keterangan Pengaduan</h6>
                                <div class="border border-2 p-1">
                                    <p class="text-wrap">
                                        Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Corrupti quae
                                        assumenda fugit quo sapiente voluptate
                                        numquam magni expedita exercitationem
                                        fuga explicabo provident sequi adipisci
                                        vel consequatur vitae, labore eaque eum
                                        placeat doloribus dicta magnam porro
                                        fugiat. Illo ipsa maiores minus
                                        praesentium expedita, dolores quam,
                                        possimus quae, enim accusamus eius quis
                                        id. Corporis laborum maxime,
                                        exercitationem hic ad voluptate nemo at
                                        cupiditate ab voluptas id eum, non est
                                        eaque, delectus minima. Unde porro sint
                                        ut impedit voluptas beatae nostrum
                                        sequi, veritatis blanditiis. Nisi
                                        accusamus voluptatum officiis maiores!
                                        Pariatur dolores vitae necessitatibus
                                        voluptates velit voluptatem quibusdam,
                                        ipsam officiis quia minus qui inventore
                                        distinctio reiciendis. Eum delectus
                                        recusandae obcaecati facilis alias, vel
                                        cum.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END ISI MODAL DETAIL AUDIT DIEKRJAKAN -->
    @endsection
</div>
