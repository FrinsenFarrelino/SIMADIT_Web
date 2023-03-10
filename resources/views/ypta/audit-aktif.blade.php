@extends('layouts.main') @section('body')

<div class="main-wrapper">
    <!-- Sidebar -->
    @include('partials.sidebar-ypta')
    <!-- End of Sidebar -->

    <div class="page-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('partials.navbar')
        <!-- partial -->

        <!-- Body -->
        <div class="page-content">
            <div class="mb-4">
                <h4 class="mb-3 mb-md-0 fs-2">DAFTAR AUDIT AKTIF</h4>
            </div>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="dataTableExample" class="table">
                                    <thead>
                                        <tr>
                                            <th>Jenis Perintah</th>
                                            <th>Detail Perintah</th>
                                            <th>Status Audit</th>
                                            <th>Status Progress Tahap</th>
                                            <th>Detail Tahap</th>
                                        </tr>
                                    </thead>
                                    <tbody class="align-middle">
                                        <tr>
                                            <td>Tiger Nixon</td>
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
                                            <td>Aktif</td>
                                            <td>Tahap 6 : Laporan Audit</td>
                                            <td>
                                                <a
                                                    class="btn btn-primary"
                                                    href="/lihat-tahap-ypta"
                                                >
                                                    Lihat tahap<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
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
                                            <td>Aktif</td>
                                            <td>Tahap 6 : Laporan Audit</td>
                                            <td>
                                                <a
                                                    class="btn btn-primary"
                                                    href="/lihat-tahap-ypta"
                                                >
                                                    Lihat tahap<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
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
                                            <td>Aktif</td>
                                            <td>Tahap 6 : Laporan Audit</td>
                                            <td>
                                                <a
                                                    class="btn btn-primary"
                                                    href="/lihat-tahap-ypta"
                                                >
                                                    Lihat tahap<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
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
                                            <td>Aktif</td>
                                            <td>Tahap 6 : Laporan Audit</td>
                                            <td>
                                                <a
                                                    class="btn btn-primary"
                                                    href="/lihat-tahap-ypta"
                                                >
                                                    Lihat tahap<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
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
                                            <td>Aktif</td>
                                            <td>Tahap 6 : Laporan Audit</td>
                                            <td>
                                                <a
                                                    class="btn btn-primary"
                                                    href="/lihat-tahap-ypta"
                                                >
                                                    Lihat tahap<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
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
                                            <td>Aktif</td>
                                            <td>Tahap 6 : Laporan Audit</td>
                                            <td>
                                                <a
                                                    class="btn btn-primary"
                                                    href="/lihat-tahap-ypta"
                                                >
                                                    Lihat tahap<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Herrod Chandler</td>
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
                                            <td>Aktif</td>
                                            <td>Tahap 6 : Laporan Audit</td>
                                            <td>
                                                <a
                                                    class="btn btn-primary"
                                                    href="/lihat-tahap-ypta"
                                                >
                                                    Lihat tahap<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Rhona Davidson</td>
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
                                            <td>Aktif</td>
                                            <td>Tahap 6 : Laporan Audit</td>
                                            <td>
                                                <a
                                                    class="btn btn-primary"
                                                    href="/lihat-tahap-ypta"
                                                >
                                                    Lihat tahap<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Colleen Hurst</td>
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
                                            <td>Aktif</td>
                                            <td>Tahap 6 : Laporan Audit</td>
                                            <td>
                                                <a
                                                    class="btn btn-primary"
                                                    href="/lihat-tahap-ypta"
                                                >
                                                    Lihat tahap<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sonya Frost</td>
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
                                            <td>Aktif</td>
                                            <td>Tahap 6 : Laporan Audit</td>
                                            <td>
                                                <a
                                                    class="btn btn-primary"
                                                    href="/lihat-tahap-ypta"
                                                >
                                                    Lihat tahap<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jena Gaines</td>
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
                                            <td>Aktif</td>
                                            <td>Tahap 6 : Laporan Audit</td>
                                            <td>
                                                <a
                                                    class="btn btn-primary"
                                                    href="/lihat-tahap-ypta"
                                                >
                                                    Lihat tahap<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Quinn Flynn</td>
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
                                            <td>Aktif</td>
                                            <td>Tahap 6 : Laporan Audit</td>
                                            <td>
                                                <a
                                                    class="btn btn-primary"
                                                    href="/lihat-tahap-ypta"
                                                >
                                                    Lihat tahap<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Charde Marshall</td>
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
                                            <td>Aktif</td>
                                            <td>Tahap 6 : Laporan Audit</td>
                                            <td>
                                                <a
                                                    class="btn btn-primary"
                                                    href="/lihat-tahap-ypta"
                                                >
                                                    Lihat tahap<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @include('components.detail-perintah-modal')
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Body -->

        <!-- partial:partials/_footer.html -->
        @include('partials.footer')
        <!-- partial -->
    </div>
</div>

@endsection
