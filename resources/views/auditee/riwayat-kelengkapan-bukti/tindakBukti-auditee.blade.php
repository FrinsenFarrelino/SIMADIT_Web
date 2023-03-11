@extends('layouts.main') @section('body')

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
                                                    aria-controls="line-profile"
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
                    @include('auditee.components.tabBarRiwayat.penerimaanMhsBaru')
                    @include('auditee.components.tabBarRiwayat.lembagaSertifikasi')
                    @include('auditee.components.tabBarRiwayat.biroAkademik')
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
