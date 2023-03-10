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
                <h4 class="mb-3 mb-md-0 fs-2">PROFIL AUDITOR</h4>
            </div>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="position-relative">
                            <figure
                                class="overflow-hidden mb-0 d-flex justify-content-center"
                            >
                                <img
                                    src="https://www.nobleui.com/html/template/assets/images/others/profile-cover.jpg"
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
                                        src="https://www.nobleui.com/html/template/assets/images/faces/face1.jpg"
                                        alt="profile"
                                    />
                                    <span class="h4 ms-3 text-dark"
                                        >Adelia</span
                                    >
                                    <span class="ms-3"
                                        >Dosen Universitas 17 Agustus 1945
                                        Surabaya</span
                                    >
                                </div>
                            </div>
                        </div>
                        <div
                            class="d-flex justify-content-center p-3 rounded-bottom"
                        >
                            <ul
                                class="d-flex align-items-center m-0 p-0 align-middle"
                            >
                                <li class="d-flex align-items-center">
                                    <i
                                        class="me-1 icon-md text-primary"
                                        data-feather="mail"
                                    ></i>

                                    <span
                                        class="pt-1px d-none d-md-block text-primary me-2"
                                    >
                                        Email
                                    </span>
                                    <span class="text-dark"
                                        >adelia@gmail.com</span
                                    >
                                </li>
                                <li
                                    class="ms-3 ps-3 border-start d-flex align-items-center"
                                >
                                    <i
                                        class="me-1 icon-md text-primary"
                                        data-feather="phone"
                                    ></i>

                                    <span
                                        class="pt-1px d-none d-md-block text-primary me-2"
                                    >
                                        Telepon
                                    </span>
                                    <span class="text-dark">081123456789</span>
                                </li>
                                <li
                                    class="ms-3 ps-3 border-start d-flex align-items-center"
                                >
                                    <i
                                        class="me-1 icon-md text-primary"
                                        data-feather="twitter"
                                    ></i>

                                    <span
                                        class="pt-1px d-none d-md-block text-primary me-2"
                                    >
                                        Twitter
                                    </span>
                                    <span class="text-dark">adelcantik</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row profile-body">
                <!-- left wrapper start -->
                <div class="d-none d-md-block">
                    <div class="card rounded">
                        <div class="card-body">
                            <!-- Pake Tabs -->
                            <ul
                                class="nav nav-tabs nav-tabs-line d-flex mb-4"
                                id="lineTab"
                                role="tablist"
                            >
                                <li class="nav-item col-6 text-center">
                                    <a
                                        class="nav-link active"
                                        id="auditDikerjakan-line-tab"
                                        data-bs-toggle="tab"
                                        href="#auditDikerjakan"
                                        role="tab"
                                        aria-controls="auditDikerjakan"
                                        aria-selected="true"
                                        >Audit Dikerjakan</a
                                    >
                                </li>
                                <li class="nav-item col-6 text-center">
                                    <a
                                        class="nav-link"
                                        id="riwayatAudit-line-tab"
                                        data-bs-toggle="tab"
                                        href="#riwayatAudit"
                                        role="tab"
                                        aria-controls="riwayatAudit"
                                        aria-selected="false"
                                        >Riwayat Audit</a
                                    >
                                </li>
                            </ul>
                            <div
                                class="tab-content mt-3 table-responsive"
                                id="lineTabContent"
                            >
                                <div
                                    class="tab-pane fade show active"
                                    id="auditDikerjakan"
                                    role="tabpanel"
                                    aria-labelledby="auditDikerjakan-line-tab"
                                >
                                    <table id="auditDikerjakan" class="table">
                                        <thead>
                                            <tr>
                                                <th>Jenis Perintah</th>
                                                <th>Status Audit</th>
                                                <th>Status Progress Tahap</th>
                                                <th>Detail Perintah</th>
                                            </tr>
                                        </thead>
                                        <tbody class="align-middle">
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>Aktif</td>
                                                <td>Tahap 6 : Laporan Audit</td>
                                                <td>
                                                    <button
                                                        class="btn btn-outline-primary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#detailPerintah"
                                                    >
                                                        Lihat detail<i
                                                            class="ms-2 icon-md"
                                                            data-feather="eye"
                                                        ></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Aktif</td>
                                                <td>Tahap 6 : Laporan Audit</td>
                                                <td>
                                                    <button
                                                        class="btn btn-outline-primary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#detailPerintah"
                                                    >
                                                        Lihat detail<i
                                                            class="ms-2 icon-md"
                                                            data-feather="eye"
                                                        ></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Aktif</td>
                                                <td>Tahap 6 : Laporan Audit</td>
                                                <td>
                                                    <button
                                                        class="btn btn-outline-primary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#detailPerintah"
                                                    >
                                                        Lihat detail<i
                                                            class="ms-2 icon-md"
                                                            data-feather="eye"
                                                        ></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Cedric Kelly</td>
                                                <td>Aktif</td>
                                                <td>Tahap 6 : Laporan Audit</td>
                                                <td>
                                                    <button
                                                        class="btn btn-outline-primary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#detailPerintah"
                                                    >
                                                        Lihat detail<i
                                                            class="ms-2 icon-md"
                                                            data-feather="eye"
                                                        ></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Airi Satou</td>
                                                <td>Aktif</td>
                                                <td>Tahap 6 : Laporan Audit</td>
                                                <td>
                                                    <button
                                                        class="btn btn-outline-primary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#detailPerintah"
                                                    >
                                                        Lihat detail<i
                                                            class="ms-2 icon-md"
                                                            data-feather="eye"
                                                        ></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Brielle Williamson</td>
                                                <td>Aktif</td>
                                                <td>Tahap 6 : Laporan Audit</td>
                                                <td>
                                                    <button
                                                        class="btn btn-outline-primary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#detailPerintah"
                                                    >
                                                        Lihat detail<i
                                                            class="ms-2 icon-md"
                                                            data-feather="eye"
                                                        ></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Herrod Chandler</td>
                                                <td>Aktif</td>
                                                <td>Tahap 6 : Laporan Audit</td>
                                                <td>
                                                    <button
                                                        class="btn btn-outline-primary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#detailPerintah"
                                                    >
                                                        Lihat detail<i
                                                            class="ms-2 icon-md"
                                                            data-feather="eye"
                                                        ></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Rhona Davidson</td>
                                                <td>Aktif</td>
                                                <td>Tahap 6 : Laporan Audit</td>
                                                <td>
                                                    <button
                                                        class="btn btn-outline-primary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#detailPerintah"
                                                    >
                                                        Lihat detail<i
                                                            class="ms-2 icon-md"
                                                            data-feather="eye"
                                                        ></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Colleen Hurst</td>
                                                <td>Aktif</td>
                                                <td>Tahap 6 : Laporan Audit</td>
                                                <td>
                                                    <button
                                                        class="btn btn-outline-primary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#detailPerintah"
                                                    >
                                                        Lihat detail<i
                                                            class="ms-2 icon-md"
                                                            data-feather="eye"
                                                        ></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div
                                    class="tab-pane fade"
                                    id="riwayatAudit"
                                    role="tabpanel"
                                    aria-labelledby="riwayatAudit-line-tab"
                                >
                                    <table id="historyAudit" class="table">
                                        <thead>
                                            <tr>
                                                <th>Jenis Perintah</th>
                                                <th>Status Audit</th>
                                                <th>Status Progress Tahap</th>
                                                <th>Detail Perintah</th>
                                            </tr>
                                        </thead>
                                        <tbody class="align-middle">
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>Selesai</td>
                                                <td>Tahap 6 : Laporan Audit</td>
                                                <td>
                                                    <button
                                                        class="btn btn-outline-primary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#detailPerintah"
                                                    >
                                                        Lihat detail<i
                                                            class="ms-2 icon-md"
                                                            data-feather="eye"
                                                        ></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Selesai</td>
                                                <td>Tahap 6 : Laporan Audit</td>
                                                <td>
                                                    <button
                                                        class="btn btn-outline-primary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#detailPerintah"
                                                    >
                                                        Lihat detail<i
                                                            class="ms-2 icon-md"
                                                            data-feather="eye"
                                                        ></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Selesai</td>
                                                <td>Tahap 6 : Laporan Audit</td>
                                                <td>
                                                    <button
                                                        class="btn btn-outline-primary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#detailPerintah"
                                                    >
                                                        Lihat detail<i
                                                            class="ms-2 icon-md"
                                                            data-feather="eye"
                                                        ></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Cedric Kelly</td>
                                                <td>Selesai</td>
                                                <td>Tahap 6 : Laporan Audit</td>
                                                <td>
                                                    <button
                                                        class="btn btn-outline-primary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#detailPerintah"
                                                    >
                                                        Lihat detail<i
                                                            class="ms-2 icon-md"
                                                            data-feather="eye"
                                                        ></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Airi Satou</td>
                                                <td>Selesai</td>
                                                <td>Tahap 6 : Laporan Audit</td>
                                                <td>
                                                    <button
                                                        class="btn btn-outline-primary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#detailPerintah"
                                                    >
                                                        Lihat detail<i
                                                            class="ms-2 icon-md"
                                                            data-feather="eye"
                                                        ></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Brielle Williamson</td>
                                                <td>Selesai</td>
                                                <td>Tahap 6 : Laporan Audit</td>
                                                <td>
                                                    <button
                                                        class="btn btn-outline-primary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#detailPerintah"
                                                    >
                                                        Lihat detail<i
                                                            class="ms-2 icon-md"
                                                            data-feather="eye"
                                                        ></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Herrod Chandler</td>
                                                <td>Selesai</td>
                                                <td>Tahap 6 : Laporan Audit</td>
                                                <td>
                                                    <button
                                                        class="btn btn-outline-primary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#detailPerintah"
                                                    >
                                                        Lihat detail<i
                                                            class="ms-2 icon-md"
                                                            data-feather="eye"
                                                        ></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Rhona Davidson</td>
                                                <td>Selesai</td>
                                                <td>Tahap 6 : Laporan Audit</td>
                                                <td>
                                                    <button
                                                        class="btn btn-outline-primary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#detailPerintah"
                                                    >
                                                        Lihat detail<i
                                                            class="ms-2 icon-md"
                                                            data-feather="eye"
                                                        ></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Colleen Hurst</td>
                                                <td>Selesai</td>
                                                <td>Tahap 6 : Laporan Audit</td>
                                                <td>
                                                    <button
                                                        class="btn btn-outline-primary"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#detailPerintah"
                                                    >
                                                        Lihat detail<i
                                                            class="ms-2 icon-md"
                                                            data-feather="eye"
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
                <!-- left wrapper end -->
            </div>
        </div>
        @include('components.detail-perintah-modal')
        <!-- End of Body -->

        <script
            src="https://code.jquery.com/jquery-3.6.3.js"
            integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
            crossorigin="anonymous"
        ></script>

        <script>
            $(function () {
                show = function (type) {
                    "use strict";
                    if (type === "audit") {
                        $("#history").removeClass(
                            "border-bottom border-primary border-4"
                        );
                        $("#auditDikerjakan").removeClass("d-none");
                        $("#historyAudit").addClass("d-none");
                        $("#audit").addClass(
                            "border-bottom border-primary border-4"
                        );
                    } else if (type == "history") {
                        $("#audit").removeClass(
                            "border-bottom border-primary border-4"
                        );
                        $("#auditDikerjakan").addClass("d-none");
                        $("#historyAudit").removeClass("d-none");
                        $("#history").addClass(
                            "border-bottom border-primary border-4"
                        );
                    }
                };
            });
        </script>

        <!-- partial:partials/_footer.html -->
        @include('partials.footer')
        <!-- partial -->
    </div>
</div>
@endsection
