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
                        Form Persetujuan Menjadi Auditor
                    </h4>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-xl-12 stretch-card">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="border border-2 p-2 mb-3">
                                    <p>Nama : Adelia</p>
                                    <p>Email : adelia@gmail.com</p>
                                    <p>Telepon : 082xxxxxxxx</p>
                                    <p class="mb-3">
                                        Dalam hal ini bertindak atas nama
                                        sendiri, yang disebut sebagai pihak
                                        kedua
                                    </p>
                                    <p>
                                        Pada hari Senin, 08 September 2022,
                                        Pihak Pertama dan Pihak Kedua telah
                                        sepakat untuk saling terikat dalam surat
                                        kontrak
                                    </p>
                                </div>

                                <h6 class="mb-3">Keputusan</h6>

                                <div class="form-check ms-3">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="flexRadioDefault"
                                        id="flexRadioDefault1"
                                        value="Setuju"
                                    />
                                    <label
                                        class="form-check-label"
                                        for="flexRadioDefault1"
                                    >
                                        Setuju
                                    </label>
                                </div>
                                <div class="form-check ms-3">
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="flexRadioDefault"
                                        id="flexRadioDefault2"
                                        value="Tidak"
                                    />
                                    <label
                                        class="form-check-label"
                                        for="flexRadioDefault2"
                                    >
                                        Tidak Setuju
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex col-12 col-xl-12 justify-content-center">
                    <button
                        type="button"
                        class="btn btn-success"
                        data-bs-toggle="modal"
                        data-bs-target="#validasi-persetujuan"
                    >
                        Validasi
                    </button>

                    <div
                        class="modal fade"
                        id="validasi-persetujuan"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true"
                    >
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1
                                        class="modal-title fs-5"
                                        id="exampleModalLabel"
                                    >
                                        Validasi
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
                                        <h6 class="mb-2">
                                            Nama Penanda Tangan
                                        </h6>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="exampleInputText1"
                                            placeholder="Masukkan Nama "
                                        />
                                    </div>
                                    <div class="row p-2">
                                        <h6 class="mb-2">Nomor Dokumen</h6>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="exampleInputText1"
                                            placeholder="Masukkan Nomor Dokumen"
                                        />
                                    </div>
                                    <div class="row p-2">
                                        <h6 class="mb-2">Tanda Tangan</h6>
                                        <div class="border border-2 p-2">
                                            <div class="btn btn-primary">
                                                Buat QR
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button
                                        type="button"
                                        class="btn btn-success"
                                    >
                                        Validasi
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
