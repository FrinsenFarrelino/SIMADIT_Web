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
                                                    id="profile-line-tab"
                                                    data-bs-toggle="tab"
                                                    href="#line-profile"
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
                                                    id="contact-line-tab"
                                                    data-bs-toggle="tab"
                                                    href="#line-contact"
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
                    <div
                        class="tab-pane fade show active"
                        id="line-home"
                        role="tabpanel"
                        aria-labelledby="home-line-tab"
                    >
                        <div class="col-12 col-xl-12 stretch-card">
                            <div class="row flex-grow-1">
                                <div class="col-md-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <div
                                                class="d-flex justify-content-between align-items-baseline"
                                            >
                                                <h3
                                                    class="card-title mb-3 fs-5 border-bottom border-2 pb-2"
                                                >
                                                    Dokumen Berita Acara
                                                </h3>
                                            </div>
                                            <h5 class="mt-3">List Dokumen</h5>
                                            <div
                                                class="border border-2 p-3 mt-2"
                                            >
                                                <div class="row border-bottom">
                                                    <div
                                                        class="col-md-10 grid-margin stretch-card"
                                                    >
                                                        <p class="fs-6">
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
                                                            class="btn btn-primary btn-icon btn-xs disabled"
                                                        >
                                                            <i
                                                                data-feather="trash"
                                                            ></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div
                                                    class="row border-bottom mt-3"
                                                >
                                                    <div
                                                        class="col-md-10 grid-margin stretch-card"
                                                    >
                                                        <p class="fs-6">
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
                                                            class="btn btn-primary btn-icon btn-xs disabled"
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
                        <div class="col-12 col-xl-12 stretch-card">
                            <div class="row flex-grow-1">
                                <div class="col-md-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <div
                                                class="d-flex justify-content-between align-items-baseline"
                                            >
                                                <h3
                                                    class="card-title mb-3 fs-5"
                                                >
                                                    Komentar
                                                </h3>
                                            </div>

                                            <div class="mb-3">
                                                <label
                                                    for="exampleFormControlTextarea1 "
                                                    class="form-label"
                                                ></label>
                                                <textarea
                                                    class="form-control"
                                                    id="exampleFormControlTextarea1"
                                                    rows="10"
                                                    disabled
                                                >
Komentar Auditor</textarea
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-12 stretch-card">
                            <div class="row flex-grow-1">
                                <div class="col-md-12 grid-margin">
                                    <input
                                        type="checkbox"
                                        class="btn-check"
                                        id="EDM01"
                                        checked
                                    />
                                    <label
                                        class="btn btn-outline-primary"
                                        for="EDM01"
                                        >EDM01</label
                                    >
                                    <input
                                        type="checkbox"
                                        class="btn-check"
                                        id="EDM02"
                                        disabled
                                    />
                                    <label
                                        class="btn btn-outline-primary"
                                        for="EDM02"
                                        >EDM02</label
                                    >
                                    <input
                                        type="checkbox"
                                        class="btn-check"
                                        id="APO01"
                                        disabled
                                    />
                                    <label
                                        class="btn btn-outline-primary"
                                        for="APO01"
                                        >APO01</label
                                    >
                                    <input
                                        type="checkbox"
                                        class="btn-check"
                                        id="BAI03"
                                        disabled
                                    />
                                    <label
                                        class="btn btn-outline-primary"
                                        for="BAI05"
                                        >BAI05</label
                                    >
                                    <input
                                        type="checkbox"
                                        class="btn-check"
                                        id="BAI05"
                                        disabled
                                    />
                                   
                                    
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-12 stretch-card">
                            <div class="row flex-grow-1">
                                <div class="col-md-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <div
                                                class="d-flex justify-content-between align-items-baseline"
                                            >
                                                <h3
                                                    class="card-title mb-3 fs-5"
                                                >
                                                    Deskripsi Subdomain
                                                </h3>
                                            </div>

                                            <h6 class="mt-4">
                                                EDM01
                                                <span class="text-black-50"
                                                    >blablablabla</span
                                                >
                                            </h6>
                                            <div
                                                class="border border-2 p-3 mt-3"
                                            >
                                                <h6>
                                                    Visi Program Studi Teknik
                                                    Informatika
                                                </h6>
                                                <p class="text-black-50 mt-2">
                                                    Menghasilkan lulusan yang
                                                    mandiri, berdaya saing,
                                                    berbasis nilai dan karakter
                                                    bangsa serta mampu
                                                    beradaptasi terhadap
                                                    perkembangan teknologi
                                                    informasi menuju program
                                                    studi unggulan pada tahun
                                                    2035
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-12 stretch-card">
                            <div class="row flex-grow-1">
                                <div class="col-md-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <div
                                                class="d-flex justify-content-between align-items-baseline"
                                            >
                                                <h3
                                                    class="card-title mb-3 fs-5"
                                                >
                                                    Pertanyaan EDM01
                                                </h3>
                                                <div
                                                    class="d-flex flex-row-reverse bd-highlight"
                                                >
                                                    <div class="row-4">
                                                        <p class="text-center">
                                                            Batas Pengumpulan
                                                        </p>
                                                        <div
                                                            class="btn btn-danger mt-3 disabled"
                                                        >
                                                            22 September 2022
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="mt-4">
                                                Pertanyaan ke-1 tentang EDM01
                                            </h6>
                                            <div class="row">
                                                <div
                                                    class="col-md-2 grid-margin stretch-card mt-3"
                                                >
                                                    <h6 class="mt-3">
                                                        File Bukti
                                                    </h6>
                                                </div>
                                                <div class="col-md-10">
                                                    <div
                                                        class="border border-2 p-2 mt-3"
                                                    >
                                                        <input
                                                            class="form-control form-control-sm"
                                                            id="formFileSm"
                                                            type="file"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-row-reverse bd-highlight"
                                            >
                                                <div
                                                    class="btn btn-primary mt-3 disabled"
                                                >
                                                    Submit
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div
                                                    class="col-md-2 grid-margin stretch-card mt-3"
                                                >
                                                    <h6 class="mt-3">
                                                        Nama Bukti
                                                    </h6>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mt-4">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="exampleInputText1"
                                                            value="Amiah Burton"
                                                            placeholder="Enter Name"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div
                                                    class="col-md-2 grid-margin stretch-card mt-3"
                                                >
                                                    <h6 class="mt-3">
                                                        URL Bukti
                                                    </h6>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mt-4">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="exampleInputText1"
                                                            value="Amiah Burton"
                                                            placeholder="Enter Name"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-row-reverse bd-highlight"
                                            >
                                                <div
                                                    class="btn btn-primary mt-3 disabled"
                                                >
                                                    Submit
                                                </div>
                                            </div>

                                            <h6 class="mt-3 mb-3">
                                                List Bukti(File)
                                            </h6>
                                            <div
                                                class="border border-2 p-3 mt-2"
                                            >
                                                <div class="row border-bottom">
                                                    <div
                                                        class="col-md-10 grid-margin stretch-card"
                                                    >
                                                        <p class="fs-6">
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
                                                            class="btn btn-primary btn-icon btn-xs disabled"
                                                        >
                                                            <i
                                                                data-feather="trash"
                                                            ></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div
                                                    class="row border-bottom mt-3"
                                                >
                                                    <div
                                                        class="col-md-10 grid-margin stretch-card"
                                                    >
                                                        <p class="fs-6">
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
                                                            class="btn btn-primary btn-icon btn-xs disabled"
                                                        >
                                                            <i
                                                                data-feather="trash"
                                                            ></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="mt-3 mb-3">
                                                List Bukti(URL)
                                            </h6>
                                            <div
                                                class="border border-2 p-3 mt-2"
                                            >
                                                <div class="row border-bottom">
                                                    <div
                                                        class="col-md-10 grid-margin stretch-card"
                                                    >
                                                        <p class="fs-6">
                                                            1. Halaman Untag
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
                                                            class="btn btn-primary btn-icon btn-xs disabled"
                                                        >
                                                            <i
                                                                data-feather="trash"
                                                            ></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div
                                                    class="row border-bottom mt-3"
                                                >
                                                    <div
                                                        class="col-md-10 grid-margin stretch-card"
                                                    >
                                                        <p class="fs-6">
                                                            2. Halaman Untag
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
                                                            class="btn btn-primary btn-icon btn-xs disabled"
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
                        <div class="col-12 col-xl-12 stretch-card">
                            <div class="row flex-grow-1">
                                <div class="col-md-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <div
                                                class="d-flex justify-content-between align-items-baseline"
                                            >
                                                <h3
                                                    class="card-title mb-3 fs-5"
                                                >
                                                    Pertanyaan EDM01
                                                </h3>
                                                <div
                                                    class="d-flex flex-row-reverse bd-highlight"
                                                >
                                                    <div class="row-4">
                                                        <p class="text-center">
                                                            Batas Pengumpulan
                                                        </p>
                                                        <div
                                                            class="btn btn-danger mt-3 disabled"
                                                        >
                                                            22 September 2022
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="mt-4">
                                                Pertanyaan ke-2 tentang EDM01
                                            </h6>
                                            <div class="row">
                                                <div
                                                    class="col-md-2 grid-margin stretch-card mt-3"
                                                >
                                                    <h6 class="mt-3">
                                                        File Bukti
                                                    </h6>
                                                </div>
                                                <div class="col-md-10">
                                                    <div
                                                        class="border border-2 p-2 mt-3"
                                                    >
                                                        <input
                                                            class="form-control form-control-sm"
                                                            id="formFileSm"
                                                            type="file"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-row-reverse bd-highlight"
                                            >
                                                <div
                                                    class="btn btn-primary mt-3 disabled"
                                                >
                                                    Submit
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div
                                                    class="col-md-2 grid-margin stretch-card mt-3"
                                                >
                                                    <h6 class="mt-3">
                                                        Nama Bukti
                                                    </h6>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mt-4">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="exampleInputText1"
                                                            value="Amiah Burton"
                                                            placeholder="Enter Name"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div
                                                    class="col-md-2 grid-margin stretch-card mt-3"
                                                >
                                                    <h6 class="mt-3">
                                                        URL Bukti
                                                    </h6>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mt-4">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="exampleInputText1"
                                                            value="Amiah Burton"
                                                            placeholder="Enter Name"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-row-reverse bd-highlight"
                                            >
                                                <div
                                                    class="btn btn-primary mt-3 disabled"
                                                >
                                                    Submit
                                                </div>
                                            </div>

                                            <h6 class="mt-3 mb-3">
                                                List Bukti(File)
                                            </h6>
                                            <div
                                                class="border border-2 p-3 mt-2"
                                            >
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
                                                            class="btn btn-primary btn-icon btn-xs disabled"
                                                        >
                                                            <i
                                                                data-feather="trash"
                                                            ></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div
                                                    class="row border-bottom mt-3"
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
                                                            class="btn btn-primary btn-icon btn-xs disabled"
                                                        >
                                                            <i
                                                                data-feather="trash"
                                                            ></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <h6 class="mt-3 mb-3">
                                                List Bukti(URL)
                                            </h6>
                                            <div
                                                class="border border-2 p-3 mt-2"
                                            >
                                                <div class="row border-bottom">
                                                    <div
                                                        class="col-md-10 grid-margin stretch-card"
                                                    >
                                                        <p class="fs-6">
                                                            1. Halaman Untag
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
                                                            class="btn btn-primary btn-icon btn-xs disabled"
                                                        >
                                                            <i
                                                                data-feather="trash"
                                                            ></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div
                                                    class="row border-bottom mt-3"
                                                >
                                                    <div
                                                        class="col-md-10 grid-margin stretch-card"
                                                    >
                                                        <p class="fs-6">
                                                            2. Halaman Untag
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
                                                            class="btn btn-primary btn-icon btn-xs disabled"
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
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
