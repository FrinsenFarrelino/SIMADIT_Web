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
                    <h4 class="mb-3 mb-md-0">Daftar Penugasan Audit</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-xl-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-10 col-md-10">
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
                                </div>
                                <div class="col-2">
                                    <div class="d-flex flex-row-reverse">
                                        <div
                                            class="btn btn-success btn-xs"
                                            data-bs-toggle="modal"
                                            data-bs-target="#history-persetujuan"
                                        >
                                            History Persetujuan
                                        </div>

                                        <div
                                            class="modal fade"
                                            id="history-persetujuan"
                                            tabindex="-1"
                                            aria-labelledby="exampleModalLabel"
                                            aria-hidden="true"
                                        >
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div
                                                        class="modal-header bg-primary text-white"
                                                    >
                                                        <h1
                                                            class="modal-title fs-5"
                                                            id="exampleModalLabel"
                                                        >
                                                            History Persetujuan
                                                        </h1>
                                                        <button
                                                            type="button"
                                                            class="btn-close"
                                                            data-bs-dismiss="modal"
                                                            aria-label="Close"
                                                        ></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div
                                                            class="border border-2 p-2 border-primary border-opacity-50 rounded-1 mb-2"
                                                        >
                                                            <div class="row">
                                                                <h3
                                                                    class="mb-2"
                                                                >
                                                                    Adelia
                                                                </h3>
                                                                <h6
                                                                    class="fs-6 mb-2"
                                                                >
                                                                    Peran :
                                                                    Ketua
                                                                </h6>
                                                                <h6
                                                                    class="fs-6 mb-2"
                                                                >
                                                                    Status :
                                                                    <span
                                                                        class="bg-success text-white p-1 bg-opacity-50"
                                                                        >Setuju</span
                                                                    >
                                                                </h6>
                                                                <h6
                                                                    class="fs-6 mb-2"
                                                                >
                                                                    Audit :
                                                                    Keuangan
                                                                </h6>
                                                                <div
                                                                    class="row"
                                                                >
                                                                    <div
                                                                        class="col-11 col-md-11"
                                                                    >
                                                                        <h6
                                                                            class="mb-2"
                                                                        >
                                                                            Tanggal
                                                                            Persetujuan
                                                                            : 7
                                                                            September
                                                                            2022
                                                                        </h6>
                                                                    </div>
                                                                    <div
                                                                        class="col-1 col-md-1"
                                                                    >
                                                                        <i
                                                                            data-feather="printer"
                                                                        ></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="border border-2 p-2 border-primary border-opacity-50 rounded-1"
                                                        >
                                                            <div class="row">
                                                                <h3
                                                                    class="mb-2"
                                                                >
                                                                    Adelia
                                                                </h3>
                                                                <h6
                                                                    class="fs-6 mb-2"
                                                                >
                                                                    Peran :
                                                                    Ketua
                                                                </h6>
                                                                <h6
                                                                    class="fs-6 mb-2"
                                                                >
                                                                    Status :
                                                                    <span
                                                                        class="bg-success text-white p-1 bg-opacity-50"
                                                                        >Setuju</span
                                                                    >
                                                                </h6>
                                                                <h6
                                                                    class="fs-6 mb-2"
                                                                >
                                                                    Audit :
                                                                    Keuangan
                                                                </h6>
                                                                <div
                                                                    class="row"
                                                                >
                                                                    <div
                                                                        class="col-11 col-md-11"
                                                                    >
                                                                        <h6
                                                                            class="mb-2"
                                                                        >
                                                                            Tanggal
                                                                            Persetujuan
                                                                            : 7
                                                                            September
                                                                            2022
                                                                        </h6>
                                                                    </div>
                                                                    <div
                                                                        class="col-1 col-md-1"
                                                                    >
                                                                        <i
                                                                            data-feather="printer"
                                                                        ></i>
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
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead class="text-center">
                                        <tr>
                                            <th class="pt-0">Nama Auditor</th>
                                            <th class="pt-0">
                                                Kategori Pengaduan
                                            </th>
                                            <th class="pt-0">
                                                Batas Penunjukkan
                                            </th>
                                            <th class="pt-0">
                                                Detail Perintah
                                            </th>
                                            <th>Keputusan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Adelia</td>
                                            <td>Keuangan</td>

                                            <td class="text-wrap">
                                                Lorem ipsum dolor, sit amet
                                                consectetur adipisicing elit.
                                                Corrupti repellendus error eum!
                                                Aut quod, adipisci deleniti
                                                impedit est delectus provident?
                                                <button
                                                    type="button"
                                                    class="btn btn-link"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#detail-batas-penunjukkan"
                                                >
                                                    lihat
                                                </button>

                                                <!-- ISI MODAL -->
                                                <div
                                                    class="modal fade"
                                                    id="detail-batas-penunjukkan"
                                                    tabindex="-1"
                                                    aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true"
                                                >
                                                    <div class="modal-dialog">
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
                                                                    Keterangan
                                                                    Pengaduan
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
                                                                <p>
                                                                    Lorem ipsum
                                                                    dolor, sit
                                                                    amet
                                                                    consectetur
                                                                    adipisicing
                                                                    elit.
                                                                    Commodi
                                                                    animi,
                                                                    dolore
                                                                    officia
                                                                    dolor,
                                                                    delectus eos
                                                                    accusamus
                                                                    praesentium
                                                                    repellat
                                                                    placeat
                                                                    amet,
                                                                    impedit
                                                                    iure. Dolore
                                                                    debitis
                                                                    soluta dolor
                                                                    quo
                                                                    voluptates
                                                                    natus,
                                                                    excepturi
                                                                    neque, ut
                                                                    architecto
                                                                    quaerat
                                                                    voluptate.
                                                                    Cum est
                                                                    maxime rem
                                                                    officia.
                                                                    Reiciendis
                                                                    recusandae
                                                                    illum
                                                                    repellat
                                                                    reprehenderit
                                                                    quod amet
                                                                    sint
                                                                    dignissimos
                                                                    dolore.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <button
                                                    type="button"
                                                    class="btn btn-info text-white btn-xs"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#detail-audit"
                                                >
                                                    Lihat Detail
                                                    <i data-feather="eye"></i>
                                                </button>

                                                <!-- ISI MODAL -->
                                                <div
                                                    class="modal fade"
                                                    id="detail-audit"
                                                    tabindex="-1"
                                                    aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true"
                                                >
                                                    <div class="modal-dialog">
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
                                                                    Detail
                                                                    Perintah
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
                                            <td>
                                                <button class="btn btn-primary">
                                                    <a
                                                        href="/form-persetujuan"
                                                        class="text-white"
                                                        >Keputusan</a
                                                    >
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
@endsection
