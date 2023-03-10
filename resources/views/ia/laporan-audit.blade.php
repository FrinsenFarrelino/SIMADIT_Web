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
                <h4 class="mb-3 mb-md-0 fs-2">DAFTAR LAPORAN AUDIT</h4>
            </div>
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="dataTableExample" class="table">
                                    <thead>
                                        <tr>
                                            <th>Nama Objek Audit</th>
                                            <th>Tanggal Dimulai</th>
                                            <th>Tanggal Berakhir</th>
                                            <th>Unit</th>
                                            <th>Detail Laporan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>2 Sep 2022</td>
                                            <td>30 Sep 2022</td>
                                            <td>PMB | LSP</td>
                                            <td>
                                                <a
                                                    class="btn btn-primary"
                                                    href="/detail-laporan-ia"
                                                >
                                                    Lihat Detail<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>2 Sep 2022</td>
                                            <td>30 Sep 2022</td>
                                            <td>PMB | LSP</td>
                                            <td>
                                                <a
                                                    class="btn btn-primary"
                                                    href="/detail-laporan-ia"
                                                >
                                                    Lihat Detail<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>2 Sep 2022</td>
                                            <td>30 Sep 2022</td>
                                            <td>PMB | LSP</td>
                                            <td>
                                                <a
                                                    class="btn btn-primary"
                                                    href="/detail-laporan-ia"
                                                >
                                                    Lihat Detail<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>2 Sep 2022</td>
                                            <td>30 Sep 2022</td>
                                            <td>PMB | LSP</td>
                                            <td>
                                                <a
                                                    class="btn btn-primary"
                                                    href="/detail-laporan-ia"
                                                >
                                                    Lihat Detail<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>2 Sep 2022</td>
                                            <td>30 Sep 2022</td>
                                            <td>PMB | LSP</td>
                                            <td>
                                                <a
                                                    class="btn btn-primary"
                                                    href="/detail-laporan-ia"
                                                >
                                                    Lihat Detail<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
                                            <td>2 Sep 2022</td>
                                            <td>30 Sep 2022</td>
                                            <td>PMB | LSP</td>
                                            <td>
                                                <a
                                                    class="btn btn-primary"
                                                    href="/detail-laporan-ia"
                                                >
                                                    Lihat Detail<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Herrod Chandler</td>
                                            <td>2 Sep 2022</td>
                                            <td>30 Sep 2022</td>
                                            <td>PMB | LSP</td>
                                            <td>
                                                <a
                                                    class="btn btn-primary"
                                                    href="/detail-laporan-ia"
                                                >
                                                    Lihat Detail<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Rhona Davidson</td>
                                            <td>2 Sep 2022</td>
                                            <td>30 Sep 2022</td>
                                            <td>PMB | LSP</td>
                                            <td>
                                                <a
                                                    class="btn btn-primary"
                                                    href="/detail-laporan-ia"
                                                >
                                                    Lihat Detail<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Colleen Hurst</td>
                                            <td>2 Sep 2022</td>
                                            <td>30 Sep 2022</td>
                                            <td>PMB | LSP</td>
                                            <td>
                                                <a
                                                    class="btn btn-primary"
                                                    href="/detail-laporan-ia"
                                                >
                                                    Lihat Detail<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sonya Frost</td>
                                            <td>2 Sep 2022</td>
                                            <td>30 Sep 2022</td>
                                            <td>PMB | LSP</td>
                                            <td>
                                                <a
                                                    class="btn btn-primary"
                                                    href="/detail-laporan-ia"
                                                >
                                                    Lihat Detail<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jena Gaines</td>
                                            <td>2 Sep 2022</td>
                                            <td>30 Sep 2022</td>
                                            <td>PMB | LSP</td>
                                            <td>
                                                <a
                                                    class="btn btn-primary"
                                                    href="/detail-laporan-ia"
                                                >
                                                    Lihat Detail<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Quinn Flynn</td>
                                            <td>2 Sep 2022</td>
                                            <td>30 Sep 2022</td>
                                            <td>PMB | LSP</td>
                                            <td>
                                                <a
                                                    class="btn btn-primary"
                                                    href="/detail-laporan-ia"
                                                >
                                                    Lihat Detail<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Charde Marshall</td>
                                            <td>2 Sep 2022</td>
                                            <td>30 Sep 2022</td>
                                            <td>PMB | LSP</td>
                                            <td>
                                                <a
                                                    class="btn btn-primary"
                                                    href="/detail-laporan-ia"
                                                >
                                                    Lihat Detail<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Haley Kennedy</td>
                                            <td>2 Sep 2022</td>
                                            <td>30 Sep 2022</td>
                                            <td>PMB | LSP</td>
                                            <td>
                                                <a
                                                    class="btn btn-primary"
                                                    href="/detail-laporan-ia"
                                                >
                                                    Lihat Detail<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tatyana Fitzpatrick</td>
                                            <td>2 Sep 2022</td>
                                            <td>30 Sep 2022</td>
                                            <td>PMB | LSP</td>
                                            <td>
                                                <a
                                                    class="btn btn-primary"
                                                    href="/detail-laporan-ia"
                                                >
                                                    Lihat Detail<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Michael Silva</td>
                                            <td>2 Sep 2022</td>
                                            <td>30 Sep 2022</td>
                                            <td>PMB | LSP</td>
                                            <td>
                                                <a
                                                    class="btn btn-primary"
                                                    href="/detail-laporan-ia"
                                                >
                                                    Lihat Detail<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Paul Byrd</td>
                                            <td>2 Sep 2022</td>
                                            <td>30 Sep 2022</td>
                                            <td>PMB | LSP</td>
                                            <td>
                                                <a
                                                    class="btn btn-primary"
                                                    href="/detail-laporan-ia"
                                                >
                                                    Lihat Detail<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Gloria Little</td>
                                            <td>2 Sep 2022</td>
                                            <td>30 Sep 2022</td>
                                            <td>PMB | LSP</td>
                                            <td>
                                                <a
                                                    class="btn btn-primary"
                                                    href="/detail-laporan-ia"
                                                >
                                                    Lihat Detail<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bradley Greer</td>
                                            <td>2 Sep 2022</td>
                                            <td>30 Sep 2022</td>
                                            <td>PMB | LSP</td>
                                            <td>
                                                <a
                                                    class="btn btn-primary"
                                                    href="/detail-laporan-ia"
                                                >
                                                    Lihat Detail<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Dai Rios</td>
                                            <td>2 Sep 2022</td>
                                            <td>30 Sep 2022</td>
                                            <td>PMB | LSP</td>
                                            <td>
                                                <a
                                                    class="btn btn-primary"
                                                    href="/detail-laporan-ia"
                                                >
                                                    Lihat Detail<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jenette Caldwell</td>
                                            <td>2 Sep 2022</td>
                                            <td>30 Sep 2022</td>
                                            <td>PMB | LSP</td>
                                            <td>
                                                <a
                                                    class="btn btn-primary"
                                                    href="/detail-laporan-ia"
                                                >
                                                    Lihat Detail<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Yuri Berry</td>
                                            <td>2 Sep 2022</td>
                                            <td>30 Sep 2022</td>
                                            <td>PMB | LSP</td>
                                            <td>
                                                <a
                                                    class="btn btn-primary"
                                                    href="/detail-laporan-ia"
                                                >
                                                    Lihat Detail<i
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
