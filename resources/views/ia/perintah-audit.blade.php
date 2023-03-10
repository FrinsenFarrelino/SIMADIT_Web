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
                <h4 class="mb-3 mb-md-0 fs-2">DAFTAR PERINTAH AUDIT</h4>
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
                                            <th>Keterangan Pengaduan</th>
                                            <th>Unit</th>
                                            <th>Detail Perintah</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="align-middle">
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>
                                                Lorem Ipsum...<button
                                                    class="btn text-secondary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#detailPengaduan"
                                                >
                                                    Lebih banyak
                                                </button>
                                            </td>
                                            <td>Edinburgh</td>
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
                                            <td>
                                                <a
                                                    href="/tindak-tahap1-ia"
                                                    class="btn btn-primary"
                                                    >Tindak</a
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>
                                                Lorem Ipsum...<button
                                                    class="btn text-secondary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#detailPengaduan"
                                                >
                                                    Lebih banyak
                                                </button>
                                            </td>
                                            <td>Tokyo</td>
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
                                            <td>
                                                <a
                                                    href="/tindak-tahap1-ia"
                                                    class="btn btn-primary"
                                                    >Tindak</a
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>
                                                Lorem Ipsum...<button
                                                    class="btn text-secondary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#detailPengaduan"
                                                >
                                                    Lebih banyak
                                                </button>
                                            </td>
                                            <td>San Francisco</td>
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
                                            <td>
                                                <a
                                                    href="/tindak-tahap1-ia"
                                                    class="btn btn-primary"
                                                    >Tindak</a
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>
                                                Lorem Ipsum...<button
                                                    class="btn text-secondary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#detailPengaduan"
                                                >
                                                    Lebih banyak
                                                </button>
                                            </td>
                                            <td>Edinburgh</td>
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
                                            <td>
                                                <a
                                                    href="/tindak-tahap1-ia"
                                                    class="btn btn-primary"
                                                    >Tindak</a
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>
                                                Lorem Ipsum...<button
                                                    class="btn text-secondary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#detailPengaduan"
                                                >
                                                    Lebih banyak
                                                </button>
                                            </td>
                                            <td>Tokyo</td>
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
                                            <td>
                                                <a
                                                    href="/tindak-tahap1-ia"
                                                    class="btn btn-primary"
                                                    >Tindak</a
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Brielle Williamson</td>
                                            <td>
                                                Lorem Ipsum...<button
                                                    class="btn text-secondary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#detailPengaduan"
                                                >
                                                    Lebih banyak
                                                </button>
                                            </td>
                                            <td>New York</td>
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
                                            <td>
                                                <a
                                                    href="/tindak-tahap1-ia"
                                                    class="btn btn-primary"
                                                    >Tindak</a
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Herrod Chandler</td>
                                            <td>
                                                Lorem Ipsum...<button
                                                    class="btn text-secondary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#detailPengaduan"
                                                >
                                                    Lebih banyak
                                                </button>
                                            </td>
                                            <td>San Francisco</td>
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
                                            <td>
                                                <a
                                                    href="/tindak-tahap1-ia"
                                                    class="btn btn-primary"
                                                    >Tindak</a
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Rhona Davidson</td>
                                            <td>
                                                Lorem Ipsum...<button
                                                    class="btn text-secondary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#detailPengaduan"
                                                >
                                                    Lebih banyak
                                                </button>
                                            </td>
                                            <td>Tokyo</td>
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
                                            <td>
                                                <a
                                                    href="/tindak-tahap1-ia"
                                                    class="btn btn-primary"
                                                    >Tindak</a
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Colleen Hurst</td>
                                            <td>
                                                Lorem Ipsum...<button
                                                    class="btn text-secondary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#detailPengaduan"
                                                >
                                                    Lebih banyak
                                                </button>
                                            </td>
                                            <td>San Francisco</td>
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
                                            <td>
                                                <a
                                                    href="/tindak-tahap1-ia"
                                                    class="btn btn-primary"
                                                    >Tindak</a
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Sonya Frost</td>
                                            <td>
                                                Lorem Ipsum...<button
                                                    class="btn text-secondary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#detailPengaduan"
                                                >
                                                    Lebih banyak
                                                </button>
                                            </td>
                                            <td>Edinburgh</td>
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
                                            <td>
                                                <a
                                                    href="/tindak-tahap1-ia"
                                                    class="btn btn-primary"
                                                    >Tindak</a
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jena Gaines</td>
                                            <td>
                                                Lorem Ipsum...<button
                                                    class="btn text-secondary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#detailPengaduan"
                                                >
                                                    Lebih banyak
                                                </button>
                                            </td>
                                            <td>London</td>
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
                                            <td>
                                                <a
                                                    href="/tindak-tahap1-ia"
                                                    class="btn btn-primary"
                                                    >Tindak</a
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Quinn Flynn</td>
                                            <td>
                                                Lorem Ipsum...<button
                                                    class="btn text-secondary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#detailPengaduan"
                                                >
                                                    Lebih banyak
                                                </button>
                                            </td>
                                            <td>Edinburgh</td>
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
                                            <td>
                                                <a
                                                    href="/tindak-tahap1-ia"
                                                    class="btn btn-primary"
                                                    >Tindak</a
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Charde Marshall</td>
                                            <td>
                                                Lorem Ipsum...<button
                                                    class="btn text-secondary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#detailPengaduan"
                                                >
                                                    Lebih banyak
                                                </button>
                                            </td>
                                            <td>San Francisco</td>
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
                                            <td>
                                                <a
                                                    href="/tindak-tahap1-ia"
                                                    class="btn btn-primary"
                                                    >Tindak</a
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Haley Kennedy</td>
                                            <td>
                                                Lorem Ipsum...<button
                                                    class="btn text-secondary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#detailPengaduan"
                                                >
                                                    Lebih banyak
                                                </button>
                                            </td>
                                            <td>London</td>
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
                                            <td>
                                                <a
                                                    href="/tindak-tahap1-ia"
                                                    class="btn btn-primary"
                                                    >Tindak</a
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tatyana Fitzpatrick</td>
                                            <td>
                                                Lorem Ipsum...<button
                                                    class="btn text-secondary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#detailPengaduan"
                                                >
                                                    Lebih banyak
                                                </button>
                                            </td>
                                            <td>London</td>
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
                                            <td>
                                                <a
                                                    href="/tindak-tahap1-ia"
                                                    class="btn btn-primary"
                                                    >Tindak</a
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Michael Silva</td>
                                            <td>
                                                Lorem Ipsum...<button
                                                    class="btn text-secondary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#detailPengaduan"
                                                >
                                                    Lebih banyak
                                                </button>
                                            </td>
                                            <td>London</td>
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
                                            <td>
                                                <a
                                                    href="/tindak-tahap1-ia"
                                                    class="btn btn-primary"
                                                    >Tindak</a
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Paul Byrd</td>
                                            <td>
                                                Lorem Ipsum...<button
                                                    class="btn text-secondary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#detailPengaduan"
                                                >
                                                    Lebih banyak
                                                </button>
                                            </td>
                                            <td>New York</td>
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
                                            <td>
                                                <a
                                                    href="/tindak-tahap1-ia"
                                                    class="btn btn-primary"
                                                    >Tindak</a
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Gloria Little</td>
                                            <td>
                                                Lorem Ipsum...<button
                                                    class="btn text-secondary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#detailPengaduan"
                                                >
                                                    Lebih banyak
                                                </button>
                                            </td>
                                            <td>New York</td>
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
                                            <td>
                                                <a
                                                    href="/tindak-tahap1-ia"
                                                    class="btn btn-primary"
                                                    >Tindak</a
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bradley Greer</td>
                                            <td>
                                                Lorem Ipsum...<button
                                                    class="btn text-secondary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#detailPengaduan"
                                                >
                                                    Lebih banyak
                                                </button>
                                            </td>
                                            <td>London</td>
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
                                            <td>
                                                <a
                                                    href="/tindak-tahap1-ia"
                                                    class="btn btn-primary"
                                                    >Tindak</a
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Dai Rios</td>
                                            <td>
                                                Lorem Ipsum...<button
                                                    class="btn text-secondary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#detailPengaduan"
                                                >
                                                    Lebih banyak
                                                </button>
                                            </td>
                                            <td>Edinburgh</td>
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
                                            <td>
                                                <a
                                                    href="/tindak-tahap1-ia"
                                                    class="btn btn-primary"
                                                    >Tindak</a
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Jenette Caldwell</td>
                                            <td>
                                                Lorem Ipsum...<button
                                                    class="btn text-secondary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#detailPengaduan"
                                                >
                                                    Lebih banyak
                                                </button>
                                            </td>
                                            <td>New York</td>
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
                                            <td>
                                                <a
                                                    href="/tindak-tahap1-ia"
                                                    class="btn btn-primary"
                                                    >Tindak</a
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Yuri Berry</td>
                                            <td>
                                                Lorem Ipsum...<button
                                                    class="btn text-secondary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#detailPengaduan"
                                                >
                                                    Lebih banyak
                                                </button>
                                            </td>
                                            <td>New York</td>
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
                                            <td>
                                                <a
                                                    href="/tindak-tahap1-ia"
                                                    class="btn btn-primary"
                                                    >Tindak</a
                                                >
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            @include('components.detail-pengaduan-modal')
                            @include('components.detail-perintah-modal')
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
