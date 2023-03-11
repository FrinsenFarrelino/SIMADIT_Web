@extends('layouts.main') @section('body') @push('plugin-styles')
<link
    href="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.css') }}"
    rel="stylesheet"
/>
@endpush
<div class="main-wrapper">
    <!-- Sidebar -->
    @include('auditee.partial.sidebar-auditee')
    <!-- End of Sidebar -->
    <div class="page-wrapper">
        @include('auditee.partial._navbar')
        <div class="page-content">
            <div
                class="d-flex justify-content-between align-items-center flex-wrap grid-margin"
            >
                <div>
                    <h4 class="mb-3 mb-md-0">Hasil Audit</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-xl-12 stretch-card">
                    <div class="row flex-grow-1">
                        <div class="col-md-12 grid-margin">
                            <div class="d-flex flex-row-reverse bd-highlight">
                                <button
                                    class="btn btn-primary mb-3 btn-xs"
                                    onclick="showSwal('simpan-perubahan')"
                                    id="btn-simpan"
                                >
                                    <i
                                        data-feather="save"
                                        class="feather-16"
                                    ></i>
                                    Simpan Perubahan
                                </button>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div
                                        class="d-flex justify-content-between align-items-baseline"
                                    >
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
                                                    id="home-line-tab"
                                                    data-bs-toggle="tab"
                                                    href="#line-home"
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
                                                    id="sertifikasi-line-tab"
                                                    data-bs-toggle="tab"
                                                    href="#line-sertifikasi"
                                                    role="tab"
                                                    aria-controls="line-sertifikasi"
                                                    aria-selected="false"
                                                    >Lembaga Sertifikasi
                                                    Profesi</a
                                                >
                                            </li>
                                            <li class="nav-item">
                                                <a
                                                    class="nav-link"
                                                    id="akademik-line-tab"
                                                    data-bs-toggle="tab"
                                                    href="#line-akademik"
                                                    role="tab"
                                                    aria-controls="line-akademik"
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
                    @include('auditee.components.tabBarKelengkapan.penerimaanMhsBaru')
                    @include('auditee.components.tabBarkelengkapan.lembagaSertifikasi')
                    @include('auditee.components.tabBarKelengkapan.biroAkademik')
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Plugin js for this page -->
<script src="../../../assets/vendors/sweetalert2/sweetalert2.min.js"></script>
<!-- End plugin js for this page -->

<!-- Custom js for this page -->
<script src="../../../assets/js/sweet-alert.js"></script>
<!-- End custom js for this page -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
    $(function () {
        $("#isi-EDM01").hide();
        $("#isi-EDM01-sertifikasi").hide();
        $("#isi-EDM01-akademik").hide();
        $("#btn-validasi-penerimaan").prop("disabled", true);
        $("#btn-validasi-sertifikasi").prop("disabled", true);
        $("#btn-validasi-akademik").prop("disabled", true);

        $("#EDM01").click(function () {
            $("#isi-EDM01").toggle();
        });
        $("#EDM01-sertifikasi").click(function () {
            $("#isi-EDM01-sertifikasi").toggle();
        });
        $("#EDM01-akademik").click(function () {
            $("#isi-EDM01-akademik").toggle();
        });
        $("#btn-simpan").click(function () {
            $("#btn-validasi-penerimaan").prop("disabled", false);
            $("#btn-validasi-sertifikasi").prop("disabled", false);
            $("#btn-validasi-akademik").prop("disabled", false);
        });
    });
</script>

@endsection
