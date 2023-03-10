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
                    <h4 class="mb-3 mb-md-0">Edit Profile</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-xl-12 stretch-card">
                    <div class="row flex-grow-1">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-12 col-md-12 col-xl-12">
                                            <img
                                                src="{{
                                                    asset(
                                                        'assets/images/ia.png'
                                                    )
                                                }}"
                                                width="90"
                                                alt=""
                                                srcset=""
                                                class="me-3"
                                            />
                                            <div class="btn btn-primary btn-xs">
                                                Upload Foto Baru
                                            </div>
                                            <div class="btn btn-danger btn-xs">
                                                Hapus
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-12 col-md-12 col-xl-12">
                                            <h6 class="mb-2">Nama</h6>
                                            <div
                                                class="d-flex align-items-baseline"
                                            >
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="exampleInputText1"
                                                    placeholder="Masukkan Nama "
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12 col-md-12 col-xl-12">
                                            <h6 class="mb-2">Jabatan</h6>
                                            <div
                                                class="d-flex align-items-baseline"
                                            >
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="exampleInputText1"
                                                    placeholder="Masukkan Jabatan"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12 col-md-12 col-xl-12">
                                            <h6
                                                class="mb-2 text-black-50 fs-5 border-bottom border-3 pb-2"
                                            >
                                                INFO KONTAK
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12 col-md-12 col-xl-12">
                                            <h6 class="mb-2">Email</h6>
                                            <div
                                                class="d-flex align-items-baseline"
                                            >
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="exampleInputText1"
                                                    placeholder="Masukkan Email"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12 col-md-12 col-xl-12">
                                            <h6 class="mb-2">Telepon</h6>
                                            <div
                                                class="d-flex align-items-baseline"
                                            >
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="exampleInputText1"
                                                    placeholder="Masukkan telepon"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12 col-md-12 col-xl-12">
                                            <h6 class="mb-2">Twitter</h6>
                                            <div
                                                class="d-flex align-items-baseline"
                                            >
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    id="exampleInputText1"
                                                    placeholder="Masukkan twitter"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-row-reverse">
                <a
                    class="btn btn-warning text-white"
                    href="/dashboard-auditor"
                    role="button"
                >
                    <i data-feather="save" class="me-2"></i>
                    Simpan Perubahan
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
