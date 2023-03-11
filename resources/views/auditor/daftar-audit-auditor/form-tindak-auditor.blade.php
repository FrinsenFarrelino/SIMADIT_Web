@extends('layouts.main') @section('body')
<div class="main-wrapper">
    <!-- SIDEBAR -->
    @include('auditor.partial.sidebar-auditor')
    <!-- END SIDEBAR -->

    <div class="page-wrapper">
        <!-- NAVBAR -->
        @include('auditor.partial.navbar-auditor')
        <!-- END NAVBAR -->

        <!-- CONTENT -->
        <div class="page-content">
            <h3 class="mb-3 mb-md-0">Hasil Audit</h3>

            <div class="row">
                <div class="col-12 col-xl-12 stretch-card">
                    <div class="row flex-grow-1">
                        <div class="col-md-12 grid-margin">
                            <div class="d-flex flex-row-reverse bd-highlight">
                                <button
                                    class="btn btn-success mb-3 btn-xs"
                                    onclick="showSwal('simpan-perubahan')"
                                    id="simpan-perubahan"
                                >
                                    <i data-feather="save" class="feather-16">
                                    </i
                                    >Simpan Perubahan
                                </button>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <h3 class="card-title mb-3 fs-5">
                                            Daftar Unit
                                        </h3>
                                    </div>
                                    <div class="row">
                                        <ul
                                            class="nav nav-tabs nav-tabs-line"
                                            id="lineTab"
                                            role="tablist"
                                        >
                                            <li class="nav-item">
                                                <a
                                                    class="nav-link active"
                                                    id="penerimaan-mhs-baru"
                                                    data-bs-toggle="tab"
                                                    href="#mhs-baru-line"
                                                    role="tab"
                                                    aria-controls="line-home"
                                                    aria-selected="true"
                                                    >Penerimaan Mahasiswa
                                                    Baru</a
                                                >
                                            </li>
                                            <li class="nav-item">
                                                <a
                                                    class="nav-link"
                                                    id="lembaga-sertifikasi-profesi"
                                                    data-bs-toggle="tab"
                                                    href="#sertifikasi-profesi-line"
                                                    role="tab"
                                                    aria-controls="line-profile"
                                                    aria-selected="false"
                                                    >Lembaga Sertifikasi
                                                    Profesi</a
                                                >
                                            </li>
                                            <li class="nav-item">
                                                <a
                                                    class="nav-link"
                                                    id="biro-akademik"
                                                    data-bs-toggle="tab"
                                                    href="#biro-akademik-line"
                                                    role="tab"
                                                    aria-controls="line-contact"
                                                    aria-selected="false"
                                                    >Biro Akademik</a
                                                >
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-content" id="lineTabContent">
                    @include('auditor.components.tabBar.mhsBaru')
                    @include('auditor.components.tabBar.sertifikasi')
                    @include('auditor.components.tabBar.biroAkademik')

                    <div class="container text-center">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="btn btn-primary">Kembali</div>
                            </div>
                            <div class="col">
                                <!-- Button trigger modal -->
                                <button
                                    type="button"
                                    id="btn-validasi"
                                    class="btn btn-success"
                                    data-bs-toggle="modal"
                                    data-bs-target="#button-validasi"
                                >
                                    Validasi
                                </button>

                                <!-- ISI MODAL BUTTON VALIDASI -->
                                <div
                                    class="modal fade"
                                    id="button-validasi"
                                    tabindex="-1"
                                    aria-labelledby="btn-validasi"
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
                                                    <h6 class="mb-2">
                                                        Nomor Dokumen
                                                    </h6>
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        id="exampleInputText1"
                                                        placeholder="Masukkan Nomor Dokumen"
                                                    />
                                                </div>
                                                <div class="row p-2">
                                                    <h6 class="mb-2">
                                                        Tanda Tangan
                                                    </h6>
                                                    <div
                                                        class="border border-2 p-2"
                                                    >
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
                                                    onclick="showSwal('validasi')"
                                                >
                                                    Validasi
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END ISI MODAL BUTTON VALIDASI -->
                            </div>
                            <div class="col">
                                <div class="btn btn-secondary disabled">
                                    Selanjutnya
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTENT -->
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
    $(function () {
        $("#doc-2-pertanyaan2").hide();
        $("#doc-2").hide();
        $("#doc-3").hide();
        $("#btn-validasi").prop("disabled", true);
        $("#isi-edm01-mhsBaru").hide();
        $("#isi-edm01-sertifikasi").hide();
        $("#isi-edm01-akademik").hide();
        $("#isi-temuan").hide();
        $("#isi-temuan-sertifikasi").hide();
        $("#isi-nilai-auditee").hide();
        $("#isi-nilai-auditee-sertifikasi").hide();
        $("#isi-jurnal").hide();
        $("#isi-jurnal-sertifikasi").hide();
        $("#lampiran-dokumen").hide();
        $("#list").hide();
        $("#gbr-ttd").hide();

        $("#EDM01").click(function () {
            $("#isi-edm01-mhsBaru").toggle();
        });
        $("#EDM01-sertifikasi").click(function () {
            $("#isi-edm01-sertifikasi").toggle();
        });

        $("#btn-submit").click(function () {
            $("#lampiran-dokumen").show();
        });
        $("#submit-bukti-dokumen").click(function () {
            $("#doc-2").show();
        });
        $("#submit-bukti-dokumen2").click(function () {
            $("#doc-2-pertanyaan2").show();
        });
        $("#temuan").click(function () {
            $("#isi-temuan").toggle();
        });
        $("#temuan-sertifikasi").click(function () {
            $("#isi-temuan-sertifikasi").toggle();
        });
        $("#nilai-auditee").click(function () {
            $("#isi-nilai-auditee").toggle();
        });
        $("#nilai-auditee-sertifikasi").click(function () {
            $("#isi-nilai-auditee-sertifikasi").toggle();
        });
        $("#jurnal-sertifikasi").click(function () {
            $("#isi-jurnal-sertifikasi").toggle();
        });
        $("#hapus").click(function () {
            $("#lampiran-dokumen").hide();
        });

        $("#btn-qr").click(function () {
            $("#gbr-ttd").show();
        });
        $("#btn-hapus-qr").click(function () {
            $("#gbr-ttd").hide();
        });
        $("#simpan-perubahan").click(function () {
            $("#btn-validasi").prop("disabled", false);
        });
    });
</script>
@endsection
