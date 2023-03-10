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
                    <div
                        class="tab-pane fade show active"
                        id="mhs-baru-line"
                        role="tabpanel"
                        aria-labelledby="penerimaan-mhs-baru"
                    >
                        <div class="col-12 col-xl-12 stretch-card">
                            <div class="row flex-grow-1">
                                <div class="col-md-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <h3
                                                class="card-title mb-3 fs-5 border-bottom border-2 pb-2"
                                            >
                                                Dokumen Berita Acara
                                            </h3>

                                            <!-- FORM FILE DOKUMEN -->
                                            <div
                                                class="row border-bottom"
                                                id="form-file-dokumen"
                                            >
                                                <div
                                                    class="col-md-2 grid-margin stretch-card"
                                                >
                                                    <h6>File Dokumen</h6>
                                                </div>

                                                <input
                                                    class="form-control form-control-sm mb-3"
                                                    id="formFileSm"
                                                    type="file"
                                                />

                                                <div
                                                    class="d-flex flex-row-reverse"
                                                >
                                                    <a
                                                        class="btn btn-success btn-xs mb-3"
                                                        id="btn-submit"
                                                        role="button"
                                                        aria-expanded="false"
                                                    >
                                                        Submit
                                                    </a>
                                                </div>
                                            </div>
                                            <!--  END FORM FILE DOKUMEN -->

                                            <!-- LIST LAMPIRAN -->
                                            <div class="row border">
                                                <div
                                                    class="row border-bottom mt-3"
                                                    id="lampiran-dokumen"
                                                >
                                                    <div
                                                        class="col-md-10 grid-margin stretch-card"
                                                    >
                                                        <p class="fs-6">
                                                            1.Lampiran1.jpg
                                                        </p>
                                                    </div>
                                                    <div class="col-2 col-xl-2">
                                                        <button
                                                            type="button"
                                                            class="btn btn-primary btn-icon btn-xs"
                                                        >
                                                            <i
                                                                data-feather="eye"
                                                                class="feather-16"
                                                            ></i>
                                                        </button>

                                                        <button
                                                            type="button"
                                                            class="btn btn-primary btn-icon btn-xs"
                                                        >
                                                            <i
                                                                data-feather="download"
                                                                class="feather-16"
                                                            ></i>
                                                        </button>
                                                        <button
                                                            type="button"
                                                            class="btn btn-primary btn-icon btn-xs"
                                                            id="hapus"
                                                        >
                                                            <i
                                                                data-feather="trash"
                                                                class="feather-16"
                                                            ></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END LIST LAMPIRAN -->
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
                                                    placeholder="Komentar Auditor"
                                                ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PEMILIHAN SUBDOMAIN -->
                        <div class="col-12 col-xl-12 stretch-card">
                            <div class="row flex-grow-1">
                                <div class="col-md-12 grid-margin">
                                    <input
                                        type="checkbox"
                                        class="btn-check"
                                        id="EDM01"
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
                                    />
                                    <label
                                        class="btn btn-outline-primary"
                                        for="BAI03"
                                        >BAI03</label
                                    >
                                    <input
                                        type="checkbox"
                                        class="btn-check"
                                        id="temuan"
                                    />
                                    <label
                                        class="btn btn-outline-primary"
                                        for="temuan"
                                        >Temuan</label
                                    >
                                    <input
                                        type="checkbox"
                                        class="btn-check"
                                        id="nilai-auditee"
                                    />
                                    <label
                                        class="btn btn-outline-primary"
                                        for="nilai-auditee"
                                        >Nilai Auditee</label
                                    >
                                    <input
                                        type="checkbox"
                                        class="btn-check"
                                        id="jurnal"
                                    />
                                    <label
                                        class="btn btn-outline-primary"
                                        for="jurnal"
                                        >Jurnal</label
                                    >
                                </div>
                            </div>
                        </div>
                        <!-- END PEMILIHAN SUMBDOMAIN -->

                        <!-- BUTTON  Cetak Framework-->
                        <div class="d-flex flex-row-reverse bg-highlight">
                            <div
                                class="btn btn-primary mb-3 btn-xs"
                                id="cetak-framework"
                            >
                                <i data-feather="printer"></i>
                                Cetak Framework
                            </div>
                        </div>
                        <!-- BUTTON  Cetak Framework-->

                        <!-- DESKRIPSI INDIKATOR -->
                        <div class="col-12 col-xl-12 stretch-card" id="desc">
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
                                                    Deskripsi Indikator
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
                        <!-- END DESKRIPSI INDIKATOR -->

                        <!-- PERTANYAAN -->
                        <div
                            class="col-12 col-xl-12 stretch-card"
                            id="pertanyaan"
                        >
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
                                            </div>
                                            <h6 class="mt-4">
                                                Pertanyaan ke-1 tentang EDM01
                                            </h6>
                                            <div class="row">
                                                <div
                                                    class="col-md-2 grid-margin stretch-card mt-3"
                                                >
                                                    <h6 class="mt-3">
                                                        Jawaban
                                                    </h6>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mt-4">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="exampleInputText1"
                                                            placeholder="Masukkan Jawaban"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div
                                                    class="col-md-2 grid-margin stretch-card mt-3"
                                                >
                                                    <h6 class="mt-3">
                                                        Tgl Penyelesaian
                                                    </h6>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mt-4">
                                                        <div
                                                            class="input-group flatpickr"
                                                            id="flatpickr-date"
                                                        >
                                                            <input
                                                                type="text"
                                                                class="form-control flatpickr-input"
                                                                placeholder="Tanggal Penyelesaian"
                                                                data-input=""
                                                                readonly="readonly"
                                                            />
                                                            <span
                                                                class="input-group-text input-group-addon"
                                                                data-toggle=""
                                                                ><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="24"
                                                                    height="24"
                                                                    viewBox="0 0 24 24"
                                                                    fill="none"
                                                                    stroke="currentColor"
                                                                    stroke-width="2"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                    class="feather feather-calendar"
                                                                >
                                                                    <rect
                                                                        x="3"
                                                                        y="4"
                                                                        width="18"
                                                                        height="18"
                                                                        rx="2"
                                                                        ry="2"
                                                                    ></rect>
                                                                    <line
                                                                        x1="16"
                                                                        y1="2"
                                                                        x2="16"
                                                                        y2="6"
                                                                    ></line>
                                                                    <line
                                                                        x1="8"
                                                                        y1="2"
                                                                        x2="8"
                                                                        y2="6"
                                                                    ></line>
                                                                    <line
                                                                        x1="3"
                                                                        y1="10"
                                                                        x2="21"
                                                                        y2="10"
                                                                    ></line></svg
                                                            ></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div
                                                    class="col-md-2 grid-margin stretch-card mt-3"
                                                >
                                                    <h6 class="mt-3">Nilai</h6>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mt-4">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="exampleInputText1"
                                                            placeholder="Masukkan Nilai"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-row-reverse bd-highlight"
                                            >
                                                <div
                                                    class="btn btn-primary mt-3 mb-3"
                                                >
                                                    Submit
                                                </div>
                                            </div>
                                            <div
                                                class="accordion"
                                                id="accordionExample"
                                            >
                                                <div class="accordion-item">
                                                    <h2
                                                        class="accordion-header"
                                                        id="headingOne"
                                                    >
                                                        <button
                                                            class="accordion-button"
                                                            type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapseOne"
                                                            aria-expanded="true"
                                                            aria-controls="collapseOne"
                                                        >
                                                            Dokumen Bukti 1
                                                        </button>
                                                    </h2>
                                                    <div
                                                        id="collapseOne"
                                                        class="accordion-collapse collapse show"
                                                        aria-labelledby="headingOne"
                                                        data-bs-parent="#accordionExample"
                                                    >
                                                        <div
                                                            class="accordion-body"
                                                        >
                                                            <div class="row">
                                                                <div
                                                                    class="col-md-2 grid-margin stretch-card mt-3"
                                                                >
                                                                    <h6
                                                                        class="mt-3"
                                                                    >
                                                                        File
                                                                        Bukti
                                                                    </h6>
                                                                </div>
                                                                <div
                                                                    class="col-md-10"
                                                                >
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

                                                            <div class="row">
                                                                <div
                                                                    class="col-md-2 grid-margin stretch-card mt-3"
                                                                >
                                                                    <h6
                                                                        class="mt-3"
                                                                    >
                                                                        Nama
                                                                        Bukti
                                                                    </h6>
                                                                </div>
                                                                <div
                                                                    class="col-md-10"
                                                                >
                                                                    <div
                                                                        class="mt-4"
                                                                    >
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
                                                                    <h6
                                                                        class="mt-3"
                                                                    >
                                                                        URL
                                                                        Bukti
                                                                    </h6>
                                                                </div>
                                                                <div
                                                                    class="col-md-10"
                                                                >
                                                                    <div
                                                                        class="mt-4"
                                                                    >
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2
                                                        class="accordion-header"
                                                        id="headingTwo"
                                                    >
                                                        <button
                                                            class="accordion-button collapsed"
                                                            id="doc-2"
                                                            type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo"
                                                            aria-expanded="false"
                                                            aria-controls="collapseTwo"
                                                        >
                                                            Dokumen Bukti 2
                                                        </button>
                                                    </h2>
                                                    <div
                                                        id="collapseTwo"
                                                        class="accordion-collapse collapse"
                                                        aria-labelledby="headingTwo"
                                                        data-bs-parent="#accordionExample"
                                                    >
                                                        <div
                                                            class="accordion-body"
                                                        >
                                                            <div class="row">
                                                                <div
                                                                    class="col-md-2 grid-margin stretch-card mt-3"
                                                                >
                                                                    <h6
                                                                        class="mt-3"
                                                                    >
                                                                        File
                                                                        Bukti
                                                                    </h6>
                                                                </div>
                                                                <div
                                                                    class="col-md-10"
                                                                >
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

                                                            <div class="row">
                                                                <div
                                                                    class="col-md-2 grid-margin stretch-card mt-3"
                                                                >
                                                                    <h6
                                                                        class="mt-3"
                                                                    >
                                                                        Nama
                                                                        Bukti
                                                                    </h6>
                                                                </div>
                                                                <div
                                                                    class="col-md-10"
                                                                >
                                                                    <div
                                                                        class="mt-4"
                                                                    >
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
                                                                    <h6
                                                                        class="mt-3"
                                                                    >
                                                                        URL
                                                                        Bukti
                                                                    </h6>
                                                                </div>
                                                                <div
                                                                    class="col-md-10"
                                                                >
                                                                    <div
                                                                        class="mt-4"
                                                                    >
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
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-row-reverse bd-highlight"
                                            >
                                                <div
                                                    class="btn btn-primary mt-3"
                                                    id="submit-bukti-dokumen"
                                                >
                                                    Tambah Dokumen
                                                </div>
                                            </div>

                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <h3 class="card-title mb-3 fs-5">
                                                Pertanyaan EDM01
                                            </h3>
                                            <h6 class="mt-4">
                                                Pertanyaan ke-2 tentang EDM01
                                            </h6>
                                            <div class="row">
                                                <div
                                                    class="col-md-2 grid-margin stretch-card mt-3"
                                                >
                                                    <h6 class="mt-2">
                                                        Jawaban
                                                    </h6>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mt-4">
                                                        <div
                                                            class="form-check form-check-inline"
                                                        >
                                                            <input
                                                                type="radio"
                                                                class="form-check-input"
                                                                name="tipe-yes-no"
                                                                id="yes"
                                                            />
                                                            <label
                                                                class="form-check-label"
                                                                for="yes"
                                                            >
                                                                Iya
                                                            </label>
                                                        </div>
                                                        <div
                                                            class="form-check form-check-inline"
                                                        >
                                                            <input
                                                                type="radio"
                                                                class="form-check-input"
                                                                name="tipe-yes-no"
                                                                id="no"
                                                            />
                                                            <label
                                                                class="form-check-label"
                                                                for="no"
                                                            >
                                                                Tidak
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div
                                                    class="col-md-2 grid-margin stretch-card mt-3"
                                                >
                                                    <h6 class="mt-3">
                                                        Tgl Penyelesaian
                                                    </h6>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mt-4">
                                                        <div
                                                            class="input-group flatpickr"
                                                            id="flatpickr-date"
                                                        >
                                                            <input
                                                                type="text"
                                                                class="form-control flatpickr-input"
                                                                placeholder="Select date"
                                                                data-input=""
                                                                readonly="readonly"
                                                            />
                                                            <span
                                                                class="input-group-text input-group-addon"
                                                                data-toggle=""
                                                                ><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="24"
                                                                    height="24"
                                                                    viewBox="0 0 24 24"
                                                                    fill="none"
                                                                    stroke="currentColor"
                                                                    stroke-width="2"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                    class="feather feather-calendar"
                                                                >
                                                                    <rect
                                                                        x="3"
                                                                        y="4"
                                                                        width="18"
                                                                        height="18"
                                                                        rx="2"
                                                                        ry="2"
                                                                    ></rect>
                                                                    <line
                                                                        x1="16"
                                                                        y1="2"
                                                                        x2="16"
                                                                        y2="6"
                                                                    ></line>
                                                                    <line
                                                                        x1="8"
                                                                        y1="2"
                                                                        x2="8"
                                                                        y2="6"
                                                                    ></line>
                                                                    <line
                                                                        x1="3"
                                                                        y1="10"
                                                                        x2="21"
                                                                        y2="10"
                                                                    ></line></svg
                                                            ></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div
                                                    class="col-md-2 grid-margin stretch-card mt-3"
                                                >
                                                    <h6 class="mt-3">Nilai</h6>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mt-4">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="exampleInputText1"
                                                            placeholder="Masukkan Nilai"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-row-reverse bd-highlight"
                                            >
                                                <div
                                                    class="btn btn-primary mt-3"
                                                >
                                                    Submit
                                                </div>
                                            </div>
                                            <div
                                                class="accordion"
                                                id="accordionExample"
                                            >
                                                <div class="accordion-item">
                                                    <h2
                                                        class="accordion-header"
                                                        id="headingOne"
                                                    >
                                                        <button
                                                            class="accordion-button"
                                                            type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapseOne"
                                                            aria-expanded="true"
                                                            aria-controls="collapseOne"
                                                        >
                                                            Dokumen Bukti 1
                                                        </button>
                                                    </h2>
                                                    <div
                                                        id="collapseOne"
                                                        class="accordion-collapse collapse show"
                                                        aria-labelledby="headingOne"
                                                        data-bs-parent="#accordionExample"
                                                    >
                                                        <div
                                                            class="accordion-body"
                                                        >
                                                            <div class="row">
                                                                <div
                                                                    class="col-md-2 grid-margin stretch-card mt-3"
                                                                >
                                                                    <h6
                                                                        class="mt-3"
                                                                    >
                                                                        File
                                                                        Bukti
                                                                    </h6>
                                                                </div>
                                                                <div
                                                                    class="col-md-10"
                                                                >
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

                                                            <div class="row">
                                                                <div
                                                                    class="col-md-2 grid-margin stretch-card mt-3"
                                                                >
                                                                    <h6
                                                                        class="mt-3"
                                                                    >
                                                                        Nama
                                                                        Bukti
                                                                    </h6>
                                                                </div>
                                                                <div
                                                                    class="col-md-10"
                                                                >
                                                                    <div
                                                                        class="mt-4"
                                                                    >
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
                                                                    <h6
                                                                        class="mt-3"
                                                                    >
                                                                        URL
                                                                        Bukti
                                                                    </h6>
                                                                </div>
                                                                <div
                                                                    class="col-md-10"
                                                                >
                                                                    <div
                                                                        class="mt-4"
                                                                    >
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2
                                                        class="accordion-header"
                                                        id="headingTwo"
                                                    >
                                                        <button
                                                            class="accordion-button collapsed"
                                                            id="doc-2-pertanyaan2"
                                                            type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo"
                                                            aria-expanded="false"
                                                            aria-controls="collapseTwo"
                                                        >
                                                            Dokumen Bukti 2
                                                        </button>
                                                    </h2>
                                                    <div
                                                        id="collapseTwo"
                                                        class="accordion-collapse collapse"
                                                        aria-labelledby="headingTwo"
                                                        data-bs-parent="#accordionExample"
                                                    >
                                                        <div
                                                            class="accordion-body"
                                                        >
                                                            <div class="row">
                                                                <div
                                                                    class="col-md-2 grid-margin stretch-card mt-3"
                                                                >
                                                                    <h6
                                                                        class="mt-3"
                                                                    >
                                                                        File
                                                                        Bukti
                                                                    </h6>
                                                                </div>
                                                                <div
                                                                    class="col-md-10"
                                                                >
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

                                                            <div class="row">
                                                                <div
                                                                    class="col-md-2 grid-margin stretch-card mt-3"
                                                                >
                                                                    <h6
                                                                        class="mt-3"
                                                                    >
                                                                        Nama
                                                                        Bukti
                                                                    </h6>
                                                                </div>
                                                                <div
                                                                    class="col-md-10"
                                                                >
                                                                    <div
                                                                        class="mt-4"
                                                                    >
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
                                                                    <h6
                                                                        class="mt-3"
                                                                    >
                                                                        URL
                                                                        Bukti
                                                                    </h6>
                                                                </div>
                                                                <div
                                                                    class="col-md-10"
                                                                >
                                                                    <div
                                                                        class="mt-4"
                                                                    >
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
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-row-reverse bd-highlight"
                                            >
                                                <div
                                                    class="btn btn-primary mt-3"
                                                    id="submit-bukti-dokumen2"
                                                >
                                                    Tambah Dokumen
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <h3 class="card-title mb-3 fs-5">
                                                Pertanyaan EDM01
                                            </h3>
                                            <h6 class="mt-4">
                                                Pertanyaan ke-3 tentang EDM01
                                            </h6>
                                            <div class="row">
                                                <div
                                                    class="col-md-2 grid-margin stretch-card mt-3"
                                                >
                                                    <h6 class="mt-2">
                                                        Jawaban
                                                    </h6>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mt-4">
                                                      
                                                        <table
                                                        class="table table-striped"
                                                    >
                                                        <thead>
                                                            <tr>
                                                                <th
                                                                    scope="col"
                                                                >Sangat Tidak Setuju</th>
                                                                <th scope="col">
                                                                    Tidak Setuju
                                                                </th>
                                                                <th scope="col">
                                                                    Netral
                                                                </th>
                                                                <th scope="col">
                                                                    Setuju
                                                                </th>
                                                                <th scope="col">
                                                                    Sangat Setuju
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                           
                                                            
                                                           
                                                          
                                                            <tr>
                                                                
                                                                <td>
                                                                    <input
                                                                        type="radio"
                                                                        class="form-check-input"
                                                                        name="radioInline5"
                                                                        id="sgt-tdk-setuju"
                                                                    />
                                                                </td>
                                                                <td>
                                                                    <input
                                                                        type="radio"
                                                                        class="form-check-input"
                                                                        name="radioInline5"
                                                                        id="tdk-setuju"
                                                                    />
                                                                </td>
                                                                <td>
                                                                    <input
                                                                        type="radio"
                                                                        class="form-check-input"
                                                                        name="radioInline5"
                                                                        id="netral"
                                                                    />
                                                                </td>
                                                                <td>
                                                                    <input
                                                                        type="radio"
                                                                        class="form-check-input"
                                                                        name="radioInline5"
                                                                        id="setuju"
                                                                    />
                                                                </td>
                                                                <td>
                                                                    <input
                                                                        type="radio"
                                                                        class="form-check-input"
                                                                        name="radioInline5"
                                                                        id="sangat-setuju"
                                                                    />
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div
                                                    class="col-md-2 grid-margin stretch-card mt-3"
                                                >
                                                    <h6 class="mt-3">
                                                        Tgl Penyelesaian
                                                    </h6>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mt-4">
                                                        <div
                                                            class="input-group flatpickr"
                                                            id="flatpickr-date"
                                                        >
                                                            <input
                                                                type="text"
                                                                class="form-control flatpickr-input"
                                                                placeholder="Select date"
                                                                data-input=""
                                                                readonly="readonly"
                                                            />
                                                            <span
                                                                class="input-group-text input-group-addon"
                                                                data-toggle=""
                                                                ><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="24"
                                                                    height="24"
                                                                    viewBox="0 0 24 24"
                                                                    fill="none"
                                                                    stroke="currentColor"
                                                                    stroke-width="2"
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                    class="feather feather-calendar"
                                                                >
                                                                    <rect
                                                                        x="3"
                                                                        y="4"
                                                                        width="18"
                                                                        height="18"
                                                                        rx="2"
                                                                        ry="2"
                                                                    ></rect>
                                                                    <line
                                                                        x1="16"
                                                                        y1="2"
                                                                        x2="16"
                                                                        y2="6"
                                                                    ></line>
                                                                    <line
                                                                        x1="8"
                                                                        y1="2"
                                                                        x2="8"
                                                                        y2="6"
                                                                    ></line>
                                                                    <line
                                                                        x1="3"
                                                                        y1="10"
                                                                        x2="21"
                                                                        y2="10"
                                                                    ></line></svg
                                                            ></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div
                                                    class="col-md-2 grid-margin stretch-card mt-3"
                                                >
                                                    <h6 class="mt-3">Nilai</h6>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mt-4">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="exampleInputText1"
                                                            placeholder="Masukkan Nilai"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-row-reverse bd-highlight"
                                            >
                                                <div
                                                    class="btn btn-primary mt-3"
                                                >
                                                    Submit
                                                </div>
                                            </div>
                                            <div
                                                class="accordion"
                                                id="accordionExample"
                                            >
                                                <div class="accordion-item">
                                                    <h2
                                                        class="accordion-header"
                                                        id="headingOne"
                                                    >
                                                        <button
                                                            class="accordion-button"
                                                            type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapseOne"
                                                            aria-expanded="true"
                                                            aria-controls="collapseOne"
                                                        >
                                                            Dokumen Bukti 1
                                                        </button>
                                                    </h2>
                                                    <div
                                                        id="collapseOne"
                                                        class="accordion-collapse collapse show"
                                                        aria-labelledby="headingOne"
                                                        data-bs-parent="#accordionExample"
                                                    >
                                                        <div
                                                            class="accordion-body"
                                                        >
                                                            <div class="row">
                                                                <div
                                                                    class="col-md-2 grid-margin stretch-card mt-3"
                                                                >
                                                                    <h6
                                                                        class="mt-3"
                                                                    >
                                                                        File
                                                                        Bukti
                                                                    </h6>
                                                                </div>
                                                                <div
                                                                    class="col-md-10"
                                                                >
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

                                                            <div class="row">
                                                                <div
                                                                    class="col-md-2 grid-margin stretch-card mt-3"
                                                                >
                                                                    <h6
                                                                        class="mt-3"
                                                                    >
                                                                        Nama
                                                                        Bukti
                                                                    </h6>
                                                                </div>
                                                                <div
                                                                    class="col-md-10"
                                                                >
                                                                    <div
                                                                        class="mt-4"
                                                                    >
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
                                                                    <h6
                                                                        class="mt-3"
                                                                    >
                                                                        URL
                                                                        Bukti
                                                                    </h6>
                                                                </div>
                                                                <div
                                                                    class="col-md-10"
                                                                >
                                                                    <div
                                                                        class="mt-4"
                                                                    >
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2
                                                        class="accordion-header"
                                                        id="headingTwo"
                                                    >
                                                        <button
                                                            class="accordion-button collapsed"
                                                            id="doc-2-pertanyaan2"
                                                            type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo"
                                                            aria-expanded="false"
                                                            aria-controls="collapseTwo"
                                                        >
                                                            Dokumen Bukti 2
                                                        </button>
                                                    </h2>
                                                    <div
                                                        id="collapseTwo"
                                                        class="accordion-collapse collapse"
                                                        aria-labelledby="headingTwo"
                                                        data-bs-parent="#accordionExample"
                                                    >
                                                        <div
                                                            class="accordion-body"
                                                        >
                                                            <div class="row">
                                                                <div
                                                                    class="col-md-2 grid-margin stretch-card mt-3"
                                                                >
                                                                    <h6
                                                                        class="mt-3"
                                                                    >
                                                                        File
                                                                        Bukti
                                                                    </h6>
                                                                </div>
                                                                <div
                                                                    class="col-md-10"
                                                                >
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

                                                            <div class="row">
                                                                <div
                                                                    class="col-md-2 grid-margin stretch-card mt-3"
                                                                >
                                                                    <h6
                                                                        class="mt-3"
                                                                    >
                                                                        Nama
                                                                        Bukti
                                                                    </h6>
                                                                </div>
                                                                <div
                                                                    class="col-md-10"
                                                                >
                                                                    <div
                                                                        class="mt-4"
                                                                    >
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
                                                                    <h6
                                                                        class="mt-3"
                                                                    >
                                                                        URL
                                                                        Bukti
                                                                    </h6>
                                                                </div>
                                                                <div
                                                                    class="col-md-10"
                                                                >
                                                                    <div
                                                                        class="mt-4"
                                                                    >
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
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-row-reverse bd-highlight"
                                            >
                                                <div
                                                    class="btn btn-primary mt-3"
                                                    id="submit-bukti-dokumen2"
                                                >
                                                    Tambah Dokumen
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- PERTANYAAN -->

                        <!-- CHECKBOX TEMUAN -->
                        <div
                            class="col-12 col-xl-12 stretch-card"
                            id="isi-temuan"
                        >
                            <div class="row flex-grow-1">
                                <div class="col-md-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <div
                                                class="d-flex flex-row-reverse bd-highlight"
                                            >
                                                <div
                                                    class="btn btn-primary btn-xs mb-4"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#add-temuan"
                                                >
                                                    <i data-feather="plus"></i>
                                                    Tambah Temuan
                                                </div>
                                                <div
                                                    class="modal fade"
                                                    id="add-temuan"
                                                    tabindex="-1"
                                                    aria-hidden="true"
                                                >
                                                    <div class="modal-dialog">
                                                        <div
                                                            class="modal-content"
                                                        >
                                                            <div
                                                                class="modal-header bg-primary text-white"
                                                            >
                                                                <h1
                                                                    class="modal-title fs-5"
                                                                    id="exampleModalLabel"
                                                                >
                                                                    Tambah
                                                                    Temuan Audit
                                                                </h1>
                                                                <button
                                                                    type="button"
                                                                    class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"
                                                                ></button>
                                                            </div>
                                                            <div
                                                                class="modal-body"
                                                            >
                                                                <div
                                                                    class="row p-2"
                                                                >
                                                                    <h6
                                                                        class="mb-2"
                                                                    >
                                                                        Temuan
                                                                    </h6>
                                                                    <input
                                                                        type="text"
                                                                        class="form-control"
                                                                        id="exampleInputText1"
                                                                        placeholder="Masukkan Temuan"
                                                                    />
                                                                </div>
                                                                <div
                                                                    class="row p-2"
                                                                >
                                                                    <h6
                                                                        class="mb-2"
                                                                    >
                                                                        Kategori
                                                                        Temuan
                                                                    </h6>
                                                                    <select
                                                                        class="form-select"
                                                                        name="kategori_select"
                                                                        id="kategoriSelect"
                                                                        aria-invalid="false"
                                                                    >
                                                                        <option
                                                                            selected="Observasi"
                                                                            disabled=""
                                                                        >
                                                                            Pilih
                                                                            Kategori
                                                                            Temuan
                                                                        </option>
                                                                        <option>
                                                                            Observasi
                                                                        </option>
                                                                        <option>
                                                                            Minor
                                                                        </option>
                                                                        <option>
                                                                            Mayor
                                                                        </option>
                                                                    </select>
                                                                </div>

                                                                <div
                                                                    class="row p-2"
                                                                >
                                                                    <h6
                                                                        class="mb-2"
                                                                    >
                                                                        Keterangan
                                                                        Temuan
                                                                    </h6>
                                                                    <textarea
                                                                        type="text"
                                                                        rows="5"
                                                                        class="form-control text-wrap"
                                                                        id="exampleInputText1"
                                                                        placeholder="Tambahkan keterangan temuan"
                                                                    ></textarea>
                                                                </div>
                                                                <div
                                                                    class="row p-2"
                                                                >
                                                                    <h6
                                                                        class="mb-2"
                                                                    >
                                                                        Tenggat
                                                                        Waktu
                                                                        Penyelesaian
                                                                    </h6>
                                                                    <div
                                                                        class="input-group flatpickr"
                                                                        id="flatpickr-date"
                                                                    >
                                                                        <input
                                                                            type="text"
                                                                            class="form-control flatpickr-input"
                                                                            placeholder="Tenggat Waktu Penyelesaian"
                                                                            data-input=""
                                                                            readonly="readonly"
                                                                        />
                                                                        <span
                                                                            class="input-group-text input-group-addon"
                                                                            data-toggle=""
                                                                            ><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24"
                                                                                height="24"
                                                                                viewBox="0 0 24 24"
                                                                                fill="none"
                                                                                stroke="currentColor"
                                                                                stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                class="feather feather-calendar"
                                                                            >
                                                                                <rect
                                                                                    x="3"
                                                                                    y="4"
                                                                                    width="18"
                                                                                    height="18"
                                                                                    rx="2"
                                                                                    ry="2"
                                                                                ></rect>
                                                                                <line
                                                                                    x1="16"
                                                                                    y1="2"
                                                                                    x2="16"
                                                                                    y2="6"
                                                                                ></line>
                                                                                <line
                                                                                    x1="8"
                                                                                    y1="2"
                                                                                    x2="8"
                                                                                    y2="6"
                                                                                ></line>
                                                                                <line
                                                                                    x1="3"
                                                                                    y1="10"
                                                                                    x2="21"
                                                                                    y2="10"
                                                                                ></line></svg
                                                                        ></span>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="row p-2"
                                                                >
                                                                    <h6
                                                                        class="mb-2"
                                                                    >
                                                                        Lampiran
                                                                    </h6>
                                                                    <input
                                                                        class="form-control"
                                                                        type="file"
                                                                        id="formFile"
                                                                    />
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="modal-footer"
                                                            >
                                                                <a
                                                                    href="/form-tindak-auditor"
                                                                    class="btn btn-primary"
                                                                >
                                                                    Tambah
                                                                    Temuan
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div
                                                    class="btn btn-warning btn-xs me-3 mb-4"
                                                >
                                                    <i
                                                        data-feather="printer"
                                                    ></i>
                                                    Cetak Temuan
                                                </div>
                                            </div>
                                            <div class="table-responsive">
                                                <table
                                                    id="dataTableExample"
                                                    class="table"
                                                >
                                                    <thead>
                                                        <tr>
                                                            <th class="pt-0">
                                                                Temuan
                                                            </th>
                                                            <th class="pt-0">
                                                                Kategori
                                                            </th>
                                                            <th class="pt-0">
                                                                Tenggat Waktu
                                                                Penyelesaian
                                                            </th>

                                                            <th class="pt-0">
                                                                Aksi
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                SDM Pengelola
                                                                Keuangan
                                                            </td>
                                                            <td>Minor</td>
                                                            <td>
                                                                20 September
                                                                2022
                                                            </td>
                                                            <td>
                                                                <div
                                                                    class="btn btn-info btn-xs text-white"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#detail-temuan"
                                                                >
                                                                    <i
                                                                        data-feather="eye"
                                                                        class="feather-16"
                                                                    ></i>
                                                                </div>

                                                                <div
                                                                    class="modal fade"
                                                                    id="detail-temuan"
                                                                    tabindex="-1"
                                                                    aria-hidden="true"
                                                                >
                                                                    <div
                                                                        class="modal-dialog"
                                                                    >
                                                                        <div
                                                                            class="modal-content"
                                                                        >
                                                                            <div
                                                                                class="modal-header bg-primary text-white"
                                                                            >
                                                                                <h1
                                                                                    class="modal-title fs-5"
                                                                                    id="exampleModalLabel"
                                                                                >
                                                                                    Ubah
                                                                                    Temuan
                                                                                    Audit
                                                                                </h1>
                                                                                <button
                                                                                    type="button"
                                                                                    class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"
                                                                                ></button>
                                                                            </div>
                                                                            <div
                                                                                class="modal-body"
                                                                            >
                                                                                <div
                                                                                    class="row p-2"
                                                                                >
                                                                                    <h6
                                                                                        class="mb-2"
                                                                                    >
                                                                                        Temuan
                                                                                    </h6>
                                                                                    <input
                                                                                        type="text"
                                                                                        class="form-control"
                                                                                        id="exampleInputText1"
                                                                                        value="SDM Pengelola Keuangan"
                                                                                    />
                                                                                </div>
                                                                                <div
                                                                                    class="row p-2"
                                                                                >
                                                                                    <h6
                                                                                        class="mb-2"
                                                                                    >
                                                                                        Kategori
                                                                                        Temuan
                                                                                    </h6>
                                                                                    <select
                                                                                        class="form-select"
                                                                                        name="kategori_select"
                                                                                        id="kategoriSelect"
                                                                                        aria-invalid="false"
                                                                                    >
                                                                                        <option
                                                                                            selected=""
                                                                                            disabled=""
                                                                                        >
                                                                                            Pilih
                                                                                            Kategori
                                                                                            Temuan
                                                                                        </option>
                                                                                        <option
                                                                                            selected
                                                                                        >
                                                                                            Observasi
                                                                                        </option>
                                                                                        <option>
                                                                                            Minor
                                                                                        </option>
                                                                                        <option>
                                                                                            Mayor
                                                                                        </option>
                                                                                    </select>
                                                                                </div>

                                                                                <div
                                                                                    class="row p-2"
                                                                                >
                                                                                    <h6
                                                                                        class="mb-2"
                                                                                    >
                                                                                        Keterangan
                                                                                        Temuan
                                                                                    </h6>
                                                                                    <textarea
                                                                                        type="text"
                                                                                        rows="5"
                                                                                        class="form-control text-wrap"
                                                                                        id="exampleInputText1"
                                                                                    >
Kepala bagian keuangan memberikan uang muka berdasarkan formulir permintaan uang muka yang sudah diotorisasi oleh marketing sales supervisor. Otorisasi dari supervisor biasanya diberikan dengan mudah tanpa memperhatikan batas maksimum yang bisa diberikan.</textarea
                                                                                    >
                                                                                </div>
                                                                                <div
                                                                                    class="row p-2"
                                                                                >
                                                                                    <h6
                                                                                        class="mb-2"
                                                                                    >
                                                                                        Tenggat
                                                                                        Waktu
                                                                                        Penyelesaian
                                                                                    </h6>
                                                                                    <div
                                                                                        class="input-group flatpickr"
                                                                                        id="flatpickr-date"
                                                                                    >
                                                                                        <input
                                                                                            type="text"
                                                                                            class="form-control flatpickr-input"
                                                                                            placeholder="Tenggat Waktu Penyelesaian"
                                                                                            data-input=""
                                                                                            readonly="readonly"
                                                                                        />
                                                                                        <span
                                                                                            class="input-group-text input-group-addon"
                                                                                            data-toggle=""
                                                                                            ><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                width="24"
                                                                                                height="24"
                                                                                                viewBox="0 0 24 24"
                                                                                                fill="none"
                                                                                                stroke="currentColor"
                                                                                                stroke-width="2"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"
                                                                                                class="feather feather-calendar"
                                                                                            >
                                                                                                <rect
                                                                                                    x="3"
                                                                                                    y="4"
                                                                                                    width="18"
                                                                                                    height="18"
                                                                                                    rx="2"
                                                                                                    ry="2"
                                                                                                ></rect>
                                                                                                <line
                                                                                                    x1="16"
                                                                                                    y1="2"
                                                                                                    x2="16"
                                                                                                    y2="6"
                                                                                                ></line>
                                                                                                <line
                                                                                                    x1="8"
                                                                                                    y1="2"
                                                                                                    x2="8"
                                                                                                    y2="6"
                                                                                                ></line>
                                                                                                <line
                                                                                                    x1="3"
                                                                                                    y1="10"
                                                                                                    x2="21"
                                                                                                    y2="10"
                                                                                                ></line></svg
                                                                                        ></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="row p-2"
                                                                                >
                                                                                    <h6
                                                                                        class="mb-2"
                                                                                    >
                                                                                        Lampiran
                                                                                    </h6>
                                                                                    <input
                                                                                        class="form-control"
                                                                                        type="file"
                                                                                        id="formFile"
                                                                                    />
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="modal-footer"
                                                                            >
                                                                                <a
                                                                                    href="/form-tindak-auditor"
                                                                                    class="btn btn-primary"
                                                                                >
                                                                                    Tambah
                                                                                    Temuan
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div
                                                                    class="btn btn-primary btn-xs text-white"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#ubah-temuan"
                                                                >
                                                                    <i
                                                                        data-feather="edit"
                                                                        class="feather-16"
                                                                    ></i>
                                                                </div>

                                                                <div
                                                                    class="modal fade"
                                                                    id="ubah-temuan"
                                                                    tabindex="-1"
                                                                    aria-hidden="true"
                                                                >
                                                                    <div
                                                                        class="modal-dialog"
                                                                    >
                                                                        <div
                                                                            class="modal-content"
                                                                        >
                                                                            <div
                                                                                class="modal-header bg-primary text-white"
                                                                            >
                                                                                <h1
                                                                                    class="modal-title fs-5"
                                                                                    id="exampleModalLabel"
                                                                                >
                                                                                    Ubah
                                                                                    Temuan
                                                                                    Audit
                                                                                </h1>
                                                                                <button
                                                                                    type="button"
                                                                                    class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"
                                                                                ></button>
                                                                            </div>
                                                                            <div
                                                                                class="modal-body"
                                                                            >
                                                                                <div
                                                                                    class="row p-2"
                                                                                >
                                                                                    <h6
                                                                                        class="mb-2"
                                                                                    >
                                                                                        Temuan
                                                                                    </h6>
                                                                                    <input
                                                                                        type="text"
                                                                                        class="form-control"
                                                                                        id="exampleInputText1"
                                                                                        value="SDM Pengelola Keuangan"
                                                                                    />
                                                                                </div>
                                                                                <div
                                                                                    class="row p-2"
                                                                                >
                                                                                    <h6
                                                                                        class="mb-2"
                                                                                    >
                                                                                        Kategori
                                                                                        Temuan
                                                                                    </h6>
                                                                                    <select
                                                                                        class="form-select"
                                                                                        name="kategori_select"
                                                                                        id="kategoriSelect"
                                                                                        aria-invalid="false"
                                                                                    >
                                                                                        <option
                                                                                            selected=""
                                                                                            disabled=""
                                                                                        >
                                                                                            Pilih
                                                                                            Kategori
                                                                                            Temuan
                                                                                        </option>
                                                                                        <option
                                                                                            selected
                                                                                        >
                                                                                            Observasi
                                                                                        </option>
                                                                                        <option>
                                                                                            Minor
                                                                                        </option>
                                                                                        <option>
                                                                                            Mayor
                                                                                        </option>
                                                                                    </select>
                                                                                </div>

                                                                                <div
                                                                                    class="row p-2"
                                                                                >
                                                                                    <h6
                                                                                        class="mb-2"
                                                                                    >
                                                                                        Keterangan
                                                                                        Temuan
                                                                                    </h6>
                                                                                    <textarea
                                                                                        type="text"
                                                                                        rows="5"
                                                                                        class="form-control text-wrap"
                                                                                        id="exampleInputText1"
                                                                                    >
Kepala bagian keuangan memberikan uang muka berdasarkan formulir permintaan uang muka yang sudah diotorisasi oleh marketing sales supervisor. Otorisasi dari supervisor biasanya diberikan dengan mudah tanpa memperhatikan batas maksimum yang bisa diberikan.</textarea
                                                                                    >
                                                                                </div>
                                                                                <div
                                                                                    class="row p-2"
                                                                                >
                                                                                    <h6
                                                                                        class="mb-2"
                                                                                    >
                                                                                        Tenggat
                                                                                        Waktu
                                                                                        Penyelesaian
                                                                                    </h6>
                                                                                    <div
                                                                                        class="input-group flatpickr"
                                                                                        id="flatpickr-date"
                                                                                    >
                                                                                        <input
                                                                                            type="text"
                                                                                            class="form-control flatpickr-input"
                                                                                            placeholder="Tenggat Waktu Penyelesaian"
                                                                                            data-input=""
                                                                                            readonly="readonly"
                                                                                        />
                                                                                        <span
                                                                                            class="input-group-text input-group-addon"
                                                                                            data-toggle=""
                                                                                            ><svg
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                width="24"
                                                                                                height="24"
                                                                                                viewBox="0 0 24 24"
                                                                                                fill="none"
                                                                                                stroke="currentColor"
                                                                                                stroke-width="2"
                                                                                                stroke-linecap="round"
                                                                                                stroke-linejoin="round"
                                                                                                class="feather feather-calendar"
                                                                                            >
                                                                                                <rect
                                                                                                    x="3"
                                                                                                    y="4"
                                                                                                    width="18"
                                                                                                    height="18"
                                                                                                    rx="2"
                                                                                                    ry="2"
                                                                                                ></rect>
                                                                                                <line
                                                                                                    x1="16"
                                                                                                    y1="2"
                                                                                                    x2="16"
                                                                                                    y2="6"
                                                                                                ></line>
                                                                                                <line
                                                                                                    x1="8"
                                                                                                    y1="2"
                                                                                                    x2="8"
                                                                                                    y2="6"
                                                                                                ></line>
                                                                                                <line
                                                                                                    x1="3"
                                                                                                    y1="10"
                                                                                                    x2="21"
                                                                                                    y2="10"
                                                                                                ></line></svg
                                                                                        ></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="row p-2"
                                                                                >
                                                                                    <h6
                                                                                        class="mb-2"
                                                                                    >
                                                                                        Lampiran
                                                                                    </h6>
                                                                                    <input
                                                                                        class="form-control"
                                                                                        type="file"
                                                                                        id="formFile"
                                                                                    />
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="modal-footer"
                                                                            >
                                                                                <a
                                                                                    href="/form-tindak-auditor"
                                                                                    class="btn btn-primary"
                                                                                >
                                                                                    Tambah
                                                                                    Temuan
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <button
                                                                    class="btn btn-danger btn-xs"
                                                                    onclick="showSwal('hapus')"
                                                                >
                                                                    <i
                                                                        data-feather="trash"
                                                                        class="feather-16"
                                                                    ></i>
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
                        <!-- END CHECKBOX TEMUAN -->

                        <!-- CHECKBOX NILAI AUDITEE -->
                        <div
                            class="col-12 col-xl-12 stretch-card"
                            id="isi-nilai-auditee"
                        >
                            <div class="row flex-grow-1">
                                <div class="col-md-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <h5 class="mb-4">
                                                    Nilai Auditee
                                                </h5>
                                                <h6 class="mb-4">
                                                    Rendys Naja Ripando
                                                </h6>
                                            </div>

                                            <div class="row border border-2">
                                                <table
                                                    class="table table-striped"
                                                >
                                                    <thead>
                                                        <tr>
                                                            <th
                                                                scope="col"
                                                            ></th>
                                                            <th scope="col">
                                                                Kurang
                                                            </th>
                                                            <th scope="col">
                                                                Cukup
                                                            </th>
                                                            <th scope="col">
                                                                Baik
                                                            </th>
                                                            <th scope="col">
                                                                Sangat Baik
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">
                                                                Keterlibatan
                                                                dalam
                                                                Pelaksanaan
                                                                Audit
                                                            </th>
                                                            <td>
                                                                <input
                                                                    type="radio"
                                                                    class="form-check-input"
                                                                    name="radioInline"
                                                                    id="kurang"
                                                                />
                                                            </td>
                                                            <td>
                                                                <input
                                                                    type="radio"
                                                                    class="form-check-input"
                                                                    name="radioInline"
                                                                    id="cukup"
                                                                />
                                                            </td>
                                                            <td>
                                                                <input
                                                                    type="radio"
                                                                    class="form-check-input"
                                                                    name="radioInline"
                                                                    id="baik"
                                                                />
                                                            </td>
                                                            <td>
                                                                <input
                                                                    type="radio"
                                                                    class="form-check-input"
                                                                    name="radioInline"
                                                                    id="sangat-baik"
                                                                />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">
                                                                Manajemen Waktu
                                                            </th>
                                                            <td>
                                                                <input
                                                                    type="radio"
                                                                    class="form-check-input"
                                                                    name="radioInline2"
                                                                    id="kurang"
                                                                />
                                                            </td>
                                                            <td>
                                                                <input
                                                                    type="radio"
                                                                    class="form-check-input"
                                                                    name="radioInline2"
                                                                    id="cukup"
                                                                />
                                                            </td>
                                                            <td>
                                                                <input
                                                                    type="radio"
                                                                    class="form-check-input"
                                                                    name="radioInline2"
                                                                    id="baik"
                                                                />
                                                            </td>
                                                            <td>
                                                                <input
                                                                    type="radio"
                                                                    class="form-check-input"
                                                                    name="radioInline2"
                                                                    id="sangat-baik"
                                                                />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">
                                                                Kemampuan
                                                                Komunikasi
                                                            </th>
                                                            <td>
                                                                <input
                                                                    type="radio"
                                                                    class="form-check-input"
                                                                    name="radioInline3"
                                                                    id="kurang"
                                                                />
                                                            </td>
                                                            <td>
                                                                <input
                                                                    type="radio"
                                                                    class="form-check-input"
                                                                    name="radioInline3"
                                                                    id="cukup"
                                                                />
                                                            </td>
                                                            <td>
                                                                <input
                                                                    type="radio"
                                                                    class="form-check-input"
                                                                    name="radioInline3"
                                                                    id="baik"
                                                                />
                                                            </td>
                                                            <td>
                                                                <input
                                                                    type="radio"
                                                                    class="form-check-input"
                                                                    name="radioInline3"
                                                                    id="sangat-baik"
                                                                />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">
                                                                Pelayanan Unit
                                                                Kerja
                                                            </th>
                                                            <td>
                                                                <input
                                                                    type="radio"
                                                                    class="form-check-input"
                                                                    name="radioInline4"
                                                                    id="kurang"
                                                                />
                                                            </td>
                                                            <td>
                                                                <input
                                                                    type="radio"
                                                                    class="form-check-input"
                                                                    name="radioInline4"
                                                                    id="cukup"
                                                                />
                                                            </td>
                                                            <td>
                                                                <input
                                                                    type="radio"
                                                                    class="form-check-input"
                                                                    name="radioInline4"
                                                                    id="baik"
                                                                />
                                                            </td>
                                                            <td>
                                                                <input
                                                                    type="radio"
                                                                    class="form-check-input"
                                                                    name="radioInline4"
                                                                    id="sangat-baik"
                                                                />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">
                                                                Kemampuan
                                                                Menanggapi
                                                                Temuan untuk
                                                                Unit Kerja
                                                            </th>
                                                            <td>
                                                                <input
                                                                    type="radio"
                                                                    class="form-check-input"
                                                                    name="radioInline5"
                                                                    id="kurang"
                                                                />
                                                            </td>
                                                            <td>
                                                                <input
                                                                    type="radio"
                                                                    class="form-check-input"
                                                                    name="radioInline5"
                                                                    id="cukup"
                                                                />
                                                            </td>
                                                            <td>
                                                                <input
                                                                    type="radio"
                                                                    class="form-check-input"
                                                                    name="radioInline5"
                                                                    id="baik"
                                                                />
                                                            </td>
                                                            <td>
                                                                <input
                                                                    type="radio"
                                                                    class="form-check-input"
                                                                    name="radioInline5"
                                                                    id="sangat-baik"
                                                                />
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div
                                                class="d-flex flex-row-reverse bd-highlight"
                                            >
                                                <div
                                                    class="btn btn-primary mt-3"
                                                    id="submit-"
                                                >
                                                    Submit
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END CHECKBOX NILAI AUDITEE -->

                        <!-- CHECKBOX-JURNAL -->
                        <div
                            class="col-12 col-xl-12 stretch-card"
                            id="isi-jurnal"
                        >
                            <div class="row flex-grow-1">
                                <div class="col-md-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div
                                                    class="col-md-10 grid-margin stretch-card"
                                                >
                                                    <h3
                                                        class="card-title mb-3 fs-5"
                                                    >
                                                        Jurnal
                                                    </h3>
                                                </div>
                                                <div class="col-md-2 mt-2">
                                                    <div
                                                        class="d-flex flex-row-reverse bd-highlight"
                                                    >
                                                        <button
                                                            type="button"
                                                            class="btn btn-primary btn-icon btn-xs ms-2"
                                                        >
                                                            <i
                                                                data-feather="plus"
                                                            ></i>
                                                        </button>
                                                        <button
                                                            type="button"
                                                            class="btn btn-danger btn-icon btn-xs"
                                                        >
                                                            <i
                                                                data-feather="trash"
                                                            ></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div
                                                        class="col-md-2 grid-margin stretch-card mt-3"
                                                    >
                                                        <h6 class="mt-3">
                                                            Tanggal
                                                        </h6>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="mt-4">
                                                            <input
                                                                type="date"
                                                                class="form-control"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div
                                                        class="col-md-2 grid-margin stretch-card mt-3"
                                                    >
                                                        <h6 class="mt-3">
                                                            Jurnal
                                                        </h6>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="mt-4">
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                id="exampleInputText1"
                                                                placeholder="Masukkan Jurnal"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-row-reverse bd-highlight"
                                            >
                                                <div
                                                    class="btn btn-primary mt-3"
                                                    id="submit-"
                                                >
                                                    Submit
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END CHECKBOX-JURNAL -->
                    </div>
                    <div
                        class="tab-pane fade"
                        id="sertifikasi-profesi-line"
                        role="tabpanel"
                        aria-labelledby="lembaga-sertifikasi profesi"
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

                                            <div class="row border-bottom">
                                                <div
                                                    class="col-md-2 grid-margin stretch-card"
                                                >
                                                    <h6>File Dokumen</h6>
                                                </div>

                                                <input
                                                    class="form-control form-control-sm mb-3"
                                                    id="formFileSm"
                                                    type="file"
                                                />

                                                <div
                                                    class="d-flex flex-row-reverse"
                                                >
                                                    <a
                                                        class="btn btn-success"
                                                        id="btn-submit"
                                                        role="button"
                                                        aria-expanded="false"
                                                        aria-controls="collapseExample"
                                                    >
                                                        Submit
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row border-bottom">
                                                <div
                                                    class="col-md-2 grid-margin stretch-card"
                                                >
                                                    <h6>List Dokumen (File)</h6>
                                                </div>
                                                <div
                                                    class="row border-bottom mt-3"
                                                    id="lampiran-dokumen"
                                                >
                                                    <div
                                                        class="col-md-10 grid-margin stretch-card"
                                                    >
                                                        <p class="fs-6">
                                                            1.Lampiran1.jpg
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
                                                            id="hapus"
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
                                                    placeholder="Komentar Auditor"
                                                ></textarea>
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
                                    />
                                    <label
                                        class="btn btn-outline-primary"
                                        for="BAI03"
                                        >BAI03</label
                                    >
                                    <input
                                        type="checkbox"
                                        class="btn-check"
                                        id="temuan"
                                    />
                                    <label
                                        class="btn btn-outline-primary"
                                        for="temuan"
                                        >Temuan</label
                                    >
                                    <input
                                        type="checkbox"
                                        class="btn-check"
                                        id="nilai-auditee"
                                    />
                                    <label
                                        class="btn btn-outline-primary"
                                        for="nilai-auditee"
                                        >Nilai Auditee</label
                                    >
                                    <input
                                        type="checkbox"
                                        class="btn-check"
                                        id="jurnal"
                                    />
                                    <label
                                        class="btn btn-outline-primary"
                                        for="jurnal"
                                        >Jurnal</label
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <div
                                class="btn btn-primary mb-3 btn-xs"
                                id="cetak-framework"
                            >
                                <i data-feather="printer"></i>
                                Cetak Framework
                            </div>
                        </div>
                        <div class="col-12 col-xl-12 stretch-card" id="desc">
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
                        <div
                            class="col-12 col-xl-12 stretch-card"
                            id="pertanyaan"
                        >
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
                                            </div>
                                            <h6 class="mt-4">
                                                Pertanyaan ke-1 tentang EDM01
                                            </h6>
                                            <div class="row">
                                                <div
                                                    class="col-md-2 grid-margin stretch-card mt-3"
                                                >
                                                    <h6 class="mt-3">
                                                        Jawaban
                                                    </h6>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mt-4">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="exampleInputText1"
                                                            placeholder="Masukkan Jawaban"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div
                                                    class="col-md-2 grid-margin stretch-card mt-3"
                                                >
                                                    <h6 class="mt-3">
                                                        Tgl Penyelesaian
                                                    </h6>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mt-4">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="exampleInputText1"
                                                            placeholder="dd/mm/yyyy"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div
                                                    class="col-md-2 grid-margin stretch-card mt-3"
                                                >
                                                    <h6 class="mt-3">Nilai</h6>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mt-4">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="exampleInputText1"
                                                            placeholder="Masukkan Nilai"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-row-reverse bd-highlight"
                                            >
                                                <div
                                                    class="btn btn-primary mt-3"
                                                >
                                                    Submit
                                                </div>
                                            </div>

                                            <div
                                                class="d-flex flex-row-reverse bd-highlight"
                                            >
                                                <div
                                                    class="btn btn-primary mt-3"
                                                    id="submit-bukti"
                                                >
                                                    Submit
                                                </div>
                                            </div>

                                            <div id="list">
                                                <h6 class="mt-3 mb-3">
                                                    List Bukti(File)
                                                </h6>
                                                <div
                                                    class="border border-2 p-3 mt-2"
                                                >
                                                    <div
                                                        class="row border-bottom"
                                                    >
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
                                                        <div
                                                            class="col-2 col-xl-2"
                                                        >
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
                                                <h6 class="mt-3 mb-3">
                                                    List Bukti(URL)
                                                </h6>
                                                <div
                                                    class="border border-2 p-3 mt-2"
                                                >
                                                    <div
                                                        class="row border-bottom"
                                                    >
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
                                                                class="btn btn-primary btn-icon btn-xs"
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
                                                        <div
                                                            class="col-2 col-xl-2"
                                                        >
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
                        <div
                            class="col-12 col-xl-12 stretch-card"
                            id="isi-temuan"
                        >
                            <div class="row flex-grow-1">
                                <div class="col-md-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <div
                                                class="d-flex flex-row-reverse bd-highlight"
                                            >
                                                <div
                                                    class="btn btn-primary btn-xs mb-4"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#add-temuan"
                                                >
                                                    <i data-feather="plus"></i>
                                                    Tambah Temuan
                                                </div>

                                                <div
                                                    class="modal fade"
                                                    id="add-temuan"
                                                    tabindex="-1"
                                                    aria-hidden="true"
                                                >
                                                    <div class="modal-dialog">
                                                        <div
                                                            class="modal-content"
                                                        >
                                                            <div
                                                                class="modal-header bg-primary text-white"
                                                            >
                                                                <h1
                                                                    class="modal-title fs-5"
                                                                    id="exampleModalLabel"
                                                                >
                                                                    Ubah Temuan
                                                                    Audit
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
                                                                    class="row p-2"
                                                                >
                                                                    <h6
                                                                        class="mb-2"
                                                                    >
                                                                        Judul
                                                                        Temuan
                                                                    </h6>
                                                                    <input
                                                                        type="text"
                                                                        class="form-control"
                                                                        id="exampleInputText1"
                                                                        placeholder="Masukkan rincian waktu penyelesaian"
                                                                        value="SDM Pengelolaan Keuangan"
                                                                    />
                                                                </div>
                                                                <div
                                                                    class="row p-2"
                                                                >
                                                                    <h6
                                                                        class="mb-2"
                                                                    >
                                                                        Fakta
                                                                        Temuan
                                                                    </h6>
                                                                    <textarea
                                                                        type="text"
                                                                        rows="5"
                                                                        class="form-control text-wrap"
                                                                        id="exampleInputText1"
                                                                    >
Kepala bagian keuangan memberikan uang muka berdasarkan formulir permintaan uang muka yang sudah diotorisasi oleh marketing sales supervisor. Otorisasi dari supervisor biasanya diberikan dengan mudah tanpa memperhatikan batas maksimum yang bisa diberikan.</textarea
                                                                    >
                                                                </div>
                                                                <div
                                                                    class="row p-2"
                                                                >
                                                                    <h6
                                                                        class="mb-2"
                                                                    >
                                                                        Waktu
                                                                        Selesai
                                                                        Temuan
                                                                        Audit
                                                                    </h6>
                                                                    <input
                                                                        type="text"
                                                                        class="form-control"
                                                                        id="exampleInputText1"
                                                                        value="22 September 2022"
                                                                    />
                                                                </div>
                                                                <div
                                                                    class="row p-2"
                                                                >
                                                                    <h6
                                                                        class="mb-2"
                                                                    >
                                                                        Lampiran
                                                                    </h6>
                                                                    <input
                                                                        class="form-control"
                                                                        type="file"
                                                                        id="formFile"
                                                                    />
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="modal-footer"
                                                            >
                                                                <a
                                                                    href="/form-tindak-auditor"
                                                                    class="btn btn-primary"
                                                                >
                                                                    Ubah Temuan
                                                                </a>
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
                        <div
                            class="col-12 col-xl-12 stretch-card"
                            id="isi-nilai-auditee"
                        >
                            <div class="row flex-grow-1">
                                <div class="col-md-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <h5 class="mb-4">
                                                    Nilai Auditee
                                                </h5>
                                                <h6 class="mb-4">
                                                    Rendys Naja Ripando
                                                </h6>
                                            </div>

                                            <div class="row">
                                                <div
                                                    class="col-md-2 grid-margin stretch-card mt-3"
                                                >
                                                    <h6 class="mt-3">Nilai</h6>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mt-4">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="exampleInputText1"
                                                            placeholder="Masukkan Jawaban"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-row-reverse bd-highlight"
                                            >
                                                <div
                                                    class="btn btn-primary mt-3"
                                                    id="submit-"
                                                >
                                                    Submit
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <h5 class="mb-4">
                                                    Nilai Auditee
                                                </h5>
                                                <h6 class="mb-4">
                                                    Yessica Tamara
                                                </h6>
                                            </div>

                                            <div class="row">
                                                <div
                                                    class="col-md-2 grid-margin stretch-card mt-3"
                                                >
                                                    <h6 class="mt-3">Nilai</h6>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mt-4">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="exampleInputText1"
                                                            placeholder="Masukkan Jawaban"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-row-reverse bd-highlight"
                                            >
                                                <div
                                                    class="btn btn-primary mt-3"
                                                    id="submit-"
                                                >
                                                    Submit
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-12 col-xl-12 stretch-card"
                            id="isi-jurnal"
                        >
                            <div class="row flex-grow-1">
                                <div class="col-md-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div
                                                    class="col-md-10 grid-margin stretch-card"
                                                >
                                                    <h3
                                                        class="card-title mb-3 fs-5"
                                                    >
                                                        Jurnal
                                                    </h3>
                                                </div>
                                                <div class="col-md-2 mt-2">
                                                    <div
                                                        class="d-flex flex-row-reverse bd-highlight"
                                                    >
                                                        <button
                                                            type="button"
                                                            class="btn btn-primary btn-icon btn-xs ms-2"
                                                        >
                                                            <i
                                                                data-feather="plus"
                                                            ></i>
                                                        </button>
                                                        <button
                                                            type="button"
                                                            class="btn btn-danger btn-icon btn-xs"
                                                        >
                                                            <i
                                                                data-feather="trash"
                                                            ></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div
                                                        class="col-md-2 grid-margin stretch-card mt-3"
                                                    >
                                                        <h6 class="mt-3">
                                                            Tanggal
                                                        </h6>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="mt-4">
                                                            <input
                                                                type="date"
                                                                class="form-control"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div
                                                        class="col-md-2 grid-margin stretch-card mt-3"
                                                    >
                                                        <h6 class="mt-3">
                                                            Jurnal
                                                        </h6>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="mt-4">
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                id="exampleInputText1"
                                                                placeholder="Masukkan Jurnal"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-row-reverse bd-highlight"
                                            >
                                                <div
                                                    class="btn btn-primary mt-3"
                                                    id="submit-"
                                                >
                                                    Submit
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="tab-pane fade"
                        id="biro-akademik-line"
                        role="tabpanel"
                        aria-labelledby="biro-akademik"
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

                                            <div class="row border-bottom">
                                                <div
                                                    class="col-md-2 grid-margin stretch-card"
                                                >
                                                    <h6>File Dokumen</h6>
                                                </div>

                                                <input
                                                    class="form-control form-control-sm mb-3"
                                                    id="formFileSm"
                                                    type="file"
                                                />

                                                <div
                                                    class="d-flex flex-row-reverse"
                                                >
                                                    <a
                                                        class="btn btn-success"
                                                        id="btn-submit"
                                                        role="button"
                                                        aria-expanded="false"
                                                        aria-controls="collapseExample"
                                                    >
                                                        Submit
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row border-bottom">
                                                <div
                                                    class="col-md-2 grid-margin stretch-card"
                                                >
                                                    <h6>List Dokumen (File)</h6>
                                                </div>
                                                <div
                                                    class="row border-bottom mt-3"
                                                    id="lampiran-dokumen"
                                                >
                                                    <div
                                                        class="col-md-10 grid-margin stretch-card"
                                                    >
                                                        <p class="fs-6">
                                                            1.Lampiran1.jpg
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
                                                            id="hapus"
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
                                                    placeholder="Komentar Auditor"
                                                ></textarea>
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
                                    />
                                    <label
                                        class="btn btn-outline-primary"
                                        for="BAI03"
                                        >BAI03</label
                                    >
                                    <input
                                        type="checkbox"
                                        class="btn-check"
                                        id="temuan"
                                    />
                                    <label
                                        class="btn btn-outline-primary"
                                        for="temuan"
                                        >Temuan</label
                                    >
                                    <input
                                        type="checkbox"
                                        class="btn-check"
                                        id="nilai-auditee"
                                    />
                                    <label
                                        class="btn btn-outline-primary"
                                        for="nilai-auditee"
                                        >Nilai Auditee</label
                                    >
                                    <input
                                        type="checkbox"
                                        class="btn-check"
                                        id="jurnal"
                                    />
                                    <label
                                        class="btn btn-outline-primary"
                                        for="jurnal"
                                        >Jurnal</label
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <div
                                class="btn btn-primary mb-3 btn-xs"
                                id="cetak-framework"
                            >
                                <i data-feather="printer"></i>
                                Cetak Framework
                            </div>
                        </div>
                        <div class="col-12 col-xl-12 stretch-card" id="desc">
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
                        <div
                            class="col-12 col-xl-12 stretch-card"
                            id="pertanyaan"
                        >
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
                                            </div>
                                            <h6 class="mt-4">
                                                Pertanyaan ke-1 tentang EDM01
                                            </h6>
                                            <div class="row">
                                                <div
                                                    class="col-md-2 grid-margin stretch-card mt-3"
                                                >
                                                    <h6 class="mt-3">
                                                        Jawaban
                                                    </h6>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mt-4">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="exampleInputText1"
                                                            placeholder="Masukkan Jawaban"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div
                                                    class="col-md-2 grid-margin stretch-card mt-3"
                                                >
                                                    <h6 class="mt-3">
                                                        Tgl Penyelesaian
                                                    </h6>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mt-4">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="exampleInputText1"
                                                            placeholder="dd/mm/yyyy"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div
                                                    class="col-md-2 grid-margin stretch-card mt-3"
                                                >
                                                    <h6 class="mt-3">Nilai</h6>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mt-4">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="exampleInputText1"
                                                            placeholder="Masukkan Nilai"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-row-reverse bd-highlight"
                                            >
                                                <div
                                                    class="btn btn-primary mt-3"
                                                >
                                                    Submit
                                                </div>
                                            </div>
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
                                                    class="btn btn-primary mt-3"
                                                    id="submit-bukti"
                                                >
                                                    Submit
                                                </div>
                                            </div>

                                            <div id="list">
                                                <h6 class="mt-3 mb-3">
                                                    List Bukti(File)
                                                </h6>
                                                <div
                                                    class="border border-2 p-3 mt-2"
                                                >
                                                    <div
                                                        class="row border-bottom"
                                                    >
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
                                                        <div
                                                            class="col-2 col-xl-2"
                                                        >
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
                                                <h6 class="mt-3 mb-3">
                                                    List Bukti(URL)
                                                </h6>
                                                <div
                                                    class="border border-2 p-3 mt-2"
                                                >
                                                    <div
                                                        class="row border-bottom"
                                                    >
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
                                                                class="btn btn-primary btn-icon btn-xs"
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
                                                        <div
                                                            class="col-2 col-xl-2"
                                                        >
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
                        <div
                            class="col-12 col-xl-12 stretch-card"
                            id="isi-temuan"
                        >
                            <div class="row flex-grow-1">
                                <div class="col-md-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <div
                                                class="d-flex flex-row-reverse bd-highlight"
                                            >
                                                <div
                                                    class="btn btn-primary btn-xs mb-4"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#add-temuan"
                                                >
                                                    <i data-feather="plus"></i>
                                                    Tambah Temuan
                                                </div>
                                                <div
                                                    class="modal fade"
                                                    id="add-temuan"
                                                    tabindex="-1"
                                                    aria-labelledby="exampleModalLabel"
                                                    aria-hidden="true"
                                                >
                                                    <div class="modal-dialog">
                                                        <div
                                                            class="modal-content"
                                                        >
                                                            <div
                                                                class="modal-header bg-primary text-white"
                                                            >
                                                                <h1
                                                                    class="modal-title fs-5"
                                                                    id="exampleModalLabel"
                                                                >
                                                                    Ubah Temuan
                                                                    Audit
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
                                                                    class="row p-2"
                                                                >
                                                                    <h6
                                                                        class="mb-2"
                                                                    >
                                                                        Rincian
                                                                        Waktu
                                                                        Penyelesaian
                                                                    </h6>
                                                                    <input
                                                                        type="text"
                                                                        class="form-control"
                                                                        id="exampleInputText1"
                                                                        placeholder="Masukkan rincian waktu penyelesaian"
                                                                    />
                                                                </div>
                                                                <div
                                                                    class="row p-2"
                                                                >
                                                                    <h6
                                                                        class="mb-2"
                                                                    >
                                                                        Waktu
                                                                        Selesai
                                                                        Penyelesaian
                                                                        Temuan
                                                                        Audit
                                                                    </h6>
                                                                    <input
                                                                        type="date"
                                                                        class="form-control"
                                                                    />
                                                                </div>
                                                                <div
                                                                    class="row p-2"
                                                                >
                                                                    <h6
                                                                        class="mb-2"
                                                                    >
                                                                        Lampiran
                                                                    </h6>
                                                                    <input
                                                                        class="form-control"
                                                                        type="file"
                                                                        id="formFile"
                                                                    />
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="modal-footer"
                                                            >
                                                                <button
                                                                    type="button"
                                                                    class="btn btn-success btn-xs"
                                                                    data-bs-dismiss="modal"
                                                                >
                                                                    Tambah
                                                                    Temuan
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="btn btn-warning btn-xs me-3 mb-4"
                                                >
                                                    <i
                                                        data-feather="printer"
                                                    ></i>
                                                    Cetak Temuan
                                                </div>
                                            </div>
                                            <div class="table-responsive">
                                                <table
                                                    id="dataTableExample"
                                                    class="table"
                                                >
                                                    <thead>
                                                        <tr>
                                                            <th class="pt-0">
                                                                Judul Temuan
                                                            </th>
                                                            <th class="pt-0">
                                                                Waktu
                                                                Penyelesaian
                                                            </th>
                                                            <th class="pt-0">
                                                                Detail Temuan
                                                            </th>

                                                            <th class="pt-0">
                                                                Aksi
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                SDM Pengelola
                                                                Keuangan
                                                            </td>
                                                            <td>
                                                                20 September
                                                                2022
                                                            </td>

                                                            <td>
                                                                <div
                                                                    class="btn btn-primary btn-xs text-white"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#ubah-temuan"
                                                                >
                                                                    Ubah
                                                                </div>

                                                                <button
                                                                    class="btn btn-danger btn-xs"
                                                                    onclick="Swal.fire({
                                                                    title: 'Anda yakin ingin menghapus temuan tersebut?',
                                                                   
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
                                                                        'Data Berhasil Dihapus',
                                                                        'success'
                                                                      )
                                                                    }
                                                                  })"
                                                                >
                                                                    Hapus
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
                        <div
                            class="col-12 col-xl-12 stretch-card"
                            id="isi-nilai-auditee"
                        >
                            <div class="row flex-grow-1">
                                <div class="col-md-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <h5 class="mb-4">
                                                    Nilai Auditee
                                                </h5>
                                                <h6 class="mb-4">
                                                    Rendys Naja Ripando
                                                </h6>
                                            </div>

                                            <div class="row">
                                                <div
                                                    class="col-md-2 grid-margin stretch-card mt-3"
                                                >
                                                    <h6 class="mt-3">Nilai</h6>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mt-4">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="exampleInputText1"
                                                            placeholder="Masukkan Jawaban"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-row-reverse bd-highlight"
                                            >
                                                <div
                                                    class="btn btn-primary mt-3"
                                                    id="submit-"
                                                >
                                                    Submit
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <h5 class="mb-4">
                                                    Nilai Auditee
                                                </h5>
                                                <h6 class="mb-4">
                                                    Yessica Tamara
                                                </h6>
                                            </div>

                                            <div class="row">
                                                <div
                                                    class="col-md-2 grid-margin stretch-card mt-3"
                                                >
                                                    <h6 class="mt-3">Nilai</h6>
                                                </div>
                                                <div class="col-md-10">
                                                    <div class="mt-4">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            id="exampleInputText1"
                                                            placeholder="Masukkan Jawaban"
                                                        />
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-row-reverse bd-highlight"
                                            >
                                                <div
                                                    class="btn btn-primary mt-3"
                                                    id="submit-"
                                                >
                                                    Submit
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-12 col-xl-12 stretch-card"
                            id="isi-jurnal"
                        >
                            <div class="row flex-grow-1">
                                <div class="col-md-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div
                                                    class="col-md-10 grid-margin stretch-card"
                                                >
                                                    <h3
                                                        class="card-title mb-3 fs-5"
                                                    >
                                                        Jurnal
                                                    </h3>
                                                </div>
                                                <div class="col-md-2 mt-2">
                                                    <div
                                                        class="d-flex flex-row-reverse bd-highlight"
                                                    >
                                                        <button
                                                            type="button"
                                                            class="btn btn-primary btn-icon btn-xs ms-2"
                                                        >
                                                            <i
                                                                data-feather="plus"
                                                            ></i>
                                                        </button>
                                                        <button
                                                            type="button"
                                                            class="btn btn-danger btn-icon btn-xs"
                                                        >
                                                            <i
                                                                data-feather="trash"
                                                            ></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div
                                                        class="col-md-2 grid-margin stretch-card mt-3"
                                                    >
                                                        <h6 class="mt-3">
                                                            Tanggal
                                                        </h6>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="mt-4">
                                                            <input
                                                                type="date"
                                                                class="form-control"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div
                                                        class="col-md-2 grid-margin stretch-card mt-3"
                                                    >
                                                        <h6 class="mt-3">
                                                            Jurnal
                                                        </h6>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="mt-4">
                                                            <input
                                                                type="text"
                                                                class="form-control"
                                                                id="exampleInputText1"
                                                                placeholder="Masukkan Jurnal"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-row-reverse bd-highlight"
                                            >
                                                <div
                                                    class="btn btn-primary mt-3"
                                                    id="submit-"
                                                >
                                                    Submit
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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
        $("#btn-validasi").prop("disabled", true);
        $("#desc").hide();
        $("#pertanyaan").hide();
        $("#isi-temuan").hide();
        $("#isi-nilai-auditee").hide();
        $("#isi-jurnal").hide();
        $("#cetak-framework").hide();
        $("#lampiran-dokumen").hide();
        $("#list").hide();
        $("#gbr-ttd").hide();

        $("#EDM01").click(function () {
            $("#desc").toggle();
            $("#cetak-framework").toggle();
            $("#pertanyaan").toggle();
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
        $("#nilai-auditee").click(function () {
            $("#isi-nilai-auditee").toggle();
        });
        $("#jurnal").click(function () {
            $("#isi-jurnal").toggle();
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
