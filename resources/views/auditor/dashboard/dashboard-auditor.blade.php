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
                    <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-xl-12 stretch-card">
                    <div class="row flex-grow-1">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div
                                        class="d-flex justify-content-between align-items-baseline"
                                    >
                                        <h3
                                            class="card-title mb-3 text-white fs-5 border rounded-3 bg-danger p-2"
                                        >
                                            <i data-feather="bell"></i>
                                            Pemberitahuan
                                        </h3>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12 col-md-12 col-xl-12">
                                            <h6 class="mb-2">
                                                <i
                                                    data-feather="plus-square"
                                                ></i>
                                                Penunjukkan Auditor
                                            </h6>
                                            <div
                                                class="d-flex align-items-baseline"
                                            >
                                                <p class="text-black">
                                                    Unit Internal Audit meminta
                                                    anda untuk menjadi auditor,
                                                    keputusan anda klik
                                                    <a href="#">disini</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12 col-md-12 col-xl-12">
                                            <h6 class="mb-2">
                                                <i
                                                    data-feather="plus-square"
                                                ></i>
                                                Penunjukkan Auditor
                                            </h6>
                                            <div
                                                class="d-flex align-items-baseline"
                                            >
                                                <p class="text-black">
                                                    Unit Internal Audit meminta
                                                    anda untuk menjadi auditor,
                                                    keputusan anda klik
                                                    <a href="#">disini</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12 col-md-12 col-xl-12">
                                            <h6 class="mb-2">
                                                <i
                                                    data-feather="alert-circle"
                                                ></i>
                                                Perintah Audit
                                            </h6>
                                            <div
                                                class="d-flex align-items-baseline"
                                            >
                                                <p class="text-black">
                                                    Unit Internal Audit telah
                                                    mengirimkan perintah audit,
                                                    selengkapnya klik
                                                    <a href="#">disini</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div
                                        class="d-flex justify-content-between align-items-baseline"
                                    >
                                        <h3
                                            class="card-title mb-3 text-danger fs-4"
                                        >
                                            Kalender
                                        </h3>
                                    </div>

                                    <div class="row">
                                        <div
                                            class="col-6 col-md-12 col-xl-5"
                                        ></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->

            <div class="row">
                <div class="col-6 col-xl-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div
                                class="d-flex justify-content-between align-items-baseline"
                            >
                                <h3
                                    class="card-title mb-3 text-white fs-5 border rounded-3 bg-danger p-2"
                                >
                                    <i data-feather="calendar"></i>
                                    Terakhir Dilihat
                                </h3>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 col-md-12 col-xl-12">
                                    <h6 class="mb-2">
                                        <i data-feather="alert-circle"></i>
                                        Perintah Audit
                                    </h6>
                                    <div class="d-flex align-items-baseline">
                                        <p class="text-black">
                                            Unit Internal Audit telah
                                            mengirimkan perintah audit,
                                            selengkapnya klik
                                            <a href="#">disini</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->
        </div>
    </div>
</div>

@endsection
