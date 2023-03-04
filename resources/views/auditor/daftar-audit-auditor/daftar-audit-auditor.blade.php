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
                    <h4 class="mb-3 mb-md-0">Daftar Audit</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-xl-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th class="pt-0">Jenis Perintah</th>
                                            <th class="pt-0">Kategori Audit</th>
                                            <th class="pt-0">
                                                Tanggal Perintah
                                            </th>
                                            <th class="pt-0">Detail Audit</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Audit Keuangan</td>
                                            <td>Keuangan</td>

                                            <td>15 September 2022</td>
                                            <td>
                                                <button
                                                    type="button"
                                                    class="btn btn-info text-white"
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
                                                                    Detail Audit
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
                                                                                <div
                                                                                    class="btn btn-danger btn-xs mb-3"
                                                                                >
                                                                                    Unit
                                                                                    :
                                                                                    PMB
                                                                                </div>
                                                                                <div
                                                                                    class="btn btn-danger btn-xs mb-3"
                                                                                >
                                                                                    Kategori
                                                                                    :
                                                                                    Keuangan
                                                                                </div>
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
                                                <a
                                                    class="btn btn-primary"
                                                    href="/form-tindak-auditor"
                                                    role="button"
                                                    >Tindak</a
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Audit Keuangan</td>
                                            <td>Keuangan</td>

                                            <td>15 September 2022</td>
                                            <td>
                                                <button
                                                    type="button"
                                                    class="btn btn-info text-white"
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
                                                                    Detail Audit
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
                                                                                <div
                                                                                    class="btn btn-danger btn-xs mb-3"
                                                                                >
                                                                                    Unit
                                                                                    :
                                                                                    PMB
                                                                                </div>
                                                                                <div
                                                                                    class="btn btn-danger btn-xs mb-3"
                                                                                >
                                                                                    Kategori
                                                                                    :
                                                                                    Keuangan
                                                                                </div>
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
                                                <a
                                                    class="btn btn-primary"
                                                    href="/form-tindak-auditor"
                                                    role="button"
                                                    >Tindak</a
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

@endsection
