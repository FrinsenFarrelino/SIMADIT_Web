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
                            <div class="d-flex flex-row-reverse">
                                <div
                                    class="btn btn-warning btn-xs mb-3 disabled text-white fw-bold"
                                >
                                    Batas Penunjukkan 12 September 2022 12.00pm
                                </div>
                            </div>
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
                                        id="setuju"
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
                                        id="tidak-setuju"
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
                <div
                    class="col-12 col-xl-12 stretch-card"
                    id="alasan-tdk-setuju"
                >
                    <div class="row flex-grow-1">
                        <div class="col-md-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <div
                                        class="d-flex justify-content-between align-items-baseline"
                                    >
                                        <h3 class="card-title mb-3 fs-5">
                                            Alasan Tidak Setuju
                                        </h3>
                                    </div>

                                    <textarea
                                        class="form-control"
                                        placeholder="Alasan Anda"
                                        id="floatingTextarea"
                                        rows="10"
                                    ></textarea>
                                    <div class="row">
                                        <div
                                            class="col-md-2 grid-margin stretch-card mt-3"
                                        >
                                            <h6 class="mt-3">File Bukti</h6>
                                        </div>
                                        <div class="col-md-10">
                                            <input
                                                class="form-control form-control-sm mt-4"
                                                id="formFileSm"
                                                type="file"
                                            />
                                        </div>
                                        <div
                                            class="d-flex flex-row-reverse bd-highlight"
                                        >
                                            <div
                                                class="btn btn-primary mt-3"
                                                id="submit-bukti-alasan"
                                            >
                                                Submit
                                            </div>
                                        </div>
                                    </div>
                                    <div id="list-bukti-alasan">
                                        <h6 class="mt-3 mb-3">
                                            List Bukti(File)
                                        </h6>
                                        <div class="border border-2 p-3 mt-2">
                                            <div class="row border-bottom">
                                                <div
                                                    class="col-md-10 grid-margin stretch-card"
                                                >
                                                    <p class="fs-5">
                                                        1.Lampiran1.jpg
                                                    </p>
                                                </div>
                                                <div class="col-2">
                                                    <button
                                                        type="button"
                                                        class="btn btn-primary btn-icon btn-xs"
                                                    >
                                                        <i
                                                            data-feather="eye"
                                                        ></i>
                                                    </button>
                                                    <button
                                                        type="button"
                                                        class="btn btn-primary btn-icon btn-xs"
                                                    >
                                                        <i
                                                            data-feather="download"
                                                        ></i>
                                                    </button>
                                                    <button
                                                        type="button"
                                                        class="btn btn-primary btn-icon btn-xs"
                                                    >
                                                        <i
                                                            data-feather="trash"
                                                        ></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div
                                                class="row border-bottom mt-3 d-none"
                                                id="lampiran"
                                            >
                                                <div
                                                    class="col-md-10 grid-margin stretch-card"
                                                >
                                                    <p class="fs-5">
                                                        2.Lampiran1.jpg
                                                    </p>
                                                </div>
                                                <div class="col-2 col-xl-2">
                                                    <button
                                                        type="button"
                                                        class="btn btn-primary btn-icon btn-xs"
                                                    >
                                                        <i
                                                            data-feather="eye"
                                                        ></i>
                                                    </button>
                                                    <button
                                                        type="button"
                                                        class="btn btn-primary btn-icon btn-xs"
                                                    >
                                                        <i
                                                            data-feather="download"
                                                        ></i>
                                                    </button>
                                                    <button
                                                        type="button"
                                                        class="btn btn-primary btn-icon btn-xs"
                                                    >
                                                        <i
                                                            data-feather="trash"
                                                        ></i>
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

                <div class="d-flex col-12 col-xl-12 justify-content-center">
                    <button
                        type="button"
                        class="btn btn-success"
                        id="btn-validasi"
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
                                            <div
                                                class="btn btn-primary"
                                                id="btn-qr"
                                            >
                                                Buat QR
                                            </div>
                                            <div
                                                class="btn btn-danger"
                                                id="btn-hapus-qr"
                                            >
                                                Hapus
                                            </div>
                                        </div>
                                        <div
                                            class="border border-2 p-2"
                                            id="gbr-ttd"
                                        >
                                            <img
                                                src="{{
                                                    asset(
                                                        'assets/images/ia.png'
                                                    )
                                                }}"
                                                alt="logo"
                                                width="100"
                                            />
                                        </div>
                                      
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button
                                        class="btn btn-primary mb-3"
                                        
                                        onclick="Swal.fire({
                                        title: 'Validasi?',
                                       
                                        icon: 'warning',
                                        showCancelButton: true,
                                        cancelButtonText: 'Tidak',
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: 'Iya'
                                      }).then((result) => {
                                        if (result.isConfirmed) {
                                          Swal.fire(
                                            'Berhasil',
                                            'Validasi Berhasil',
                                            'success'
                                          )
                                        }
                                      })"
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
    $(function () {
        $("#alasan-tdk-setuju").hide();
        $("#gbr-ttd").hide();
        $("#list-bukti-alasan").hide();
        $("#btn-validasi").prop("disabled", true);

        $("#tidak-setuju").click(function () {
            $("#alasan-tdk-setuju").show();
        });
        $("#setuju").click(function () {
            $("#alasan-tdk-setuju").hide();
        });

        $("#submit-bukti-alasan").click(function () {
            $("#list-bukti-alasan").show();
        });

        $("#btn-qr").click(function () {
            $("#gbr-ttd").show();
        });
        $("#btn-hapus-qr").click(function () {
            $("#gbr-ttd").hide();
        });

        $("#setuju").click(function () {
            $("#btn-validasi").prop("disabled", false);
        });
        $("#tidak-setuju").click(function () {
            $("#btn-validasi").prop("disabled", false);
        });
        
    });
</script>

<!-- Plugin js for this page -->
<script src="../../../assets/vendors/sweetalert2/sweetalert2.min.js"></script>
<!-- End plugin js for this page -->

<!-- Custom js for this page -->
<script src="../../../assets/js/sweet-alert.js"></script>
<!-- End custom js for this page -->
@endsection
