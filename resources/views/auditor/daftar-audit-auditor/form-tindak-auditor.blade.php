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
                    <h4 class="mb-3 mb-md-0">Hasil Audit</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-xl-12 stretch-card">
                    <div class="row flex-grow-1">
                        <div class="col-md-12 grid-margin">
                            <div class="d-flex flex-row-reverse bd-highlight">
                                <button
                                id="simpan-perubahan"
                                    class="btn btn-primary mb-3"
                                    onclick="Swal.fire({
                                        title: 'Ingin simpan perubahan?',
                                       
                                        icon: 'warning',
                                        showCancelButton: true,
                                        cancelButtonText: 'Tidak',
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: 'Simpan'
                                      }).then((result) => {
                                        if (result.isConfirmed) {
                                          Swal.fire(
                                            'Berhasil',
                                            'Data Berhasil Disimpan',
                                            'success'
                                          )
                                        }
                                      })"
                                >
                                    Simpan Perubahan
                                </button>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div
                                        class="d-flex justify-content-between align-items-baseline"
                                    >
                                        <h3 class="card-title mb-3 fs-5">
                                            List Unit
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
                                                                    class="btn btn-info btn-xs mb-4 text-white"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#detail-temuan"
                                                                >
                                                                    Detail
                                                                    Temuan
                                                                    <i
                                                                        data-feather="eye"
                                                                    ></i>
                                                                </div>
                                                                <div
                                                                    class="modal fade"
                                                                    id="detail-temuan"
                                                                    tabindex="-1"
                                                                    aria-labelledby="exampleModalLabel"
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
                                                                                    Detail
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
                                                                                        disabled
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
                                                                                        disabled
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
                                                                                        disabled
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div
                                                                    class="btn btn-primary btn-xs text-white"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#ubah-temuan"
                                                                >
                                                                    Ubah
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
                                                                                    Ubah
                                                                                    Temuan
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
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
                                        data-bs-target="#exampleModal"
                                    >
                                        Validasi
                                    </button>

                                    <!-- Modal -->
                                    <div
                                        class="modal fade"
                                        id="exampleModal"
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
                                                <div
                                                    class="modal-body text-start"
                                                >
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
                                <div class="col">
                                    <div class="btn btn-secondary disabled">
                                        Selanjutnya
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                                                    class="btn btn-info btn-xs mb-4 text-white"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#detail-temuan"
                                                                >
                                                                    Detail
                                                                    Temuan
                                                                    <i
                                                                        data-feather="eye"
                                                                    ></i>
                                                                </div>
                                                                <div
                                                                    class="modal fade"
                                                                    id="detail-temuan"
                                                                    tabindex="-1"
                                                                    aria-labelledby="exampleModalLabel"
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
                                                                                    Detail
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
                                                                                        disabled
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
                                                                                        disabled
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
                                                                                        disabled
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div
                                                                    class="btn btn-primary btn-xs text-white"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#ubah-temuan"
                                                                >
                                                                    Ubah
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
                                                                                    Ubah
                                                                                    Temuan
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
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
                                        data-bs-target="#exampleModal"
                                    >
                                        Validasi
                                    </button>

                                    <!-- Modal -->
                                    <div
                                        class="modal fade"
                                        id="exampleModal"
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
                                                <div
                                                    class="modal-body text-start"
                                                >
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
                                <div class="col">
                                    <div class="btn btn-secondary disabled">
                                        Selanjutnya
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
                                                                    class="btn btn-info btn-xs mb-4 text-white"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#detail-temuan"
                                                                >
                                                                    Detail
                                                                    Temuan
                                                                    <i
                                                                        data-feather="eye"
                                                                    ></i>
                                                                </div>
                                                                <div
                                                                    class="modal fade"
                                                                    id="detail-temuan"
                                                                    tabindex="-1"
                                                                    aria-labelledby="exampleModalLabel"
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
                                                                                    Detail
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
                                                                                        disabled
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
                                                                                        disabled
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
                                                                                        disabled
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
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div
                                                                    class="btn btn-primary btn-xs text-white"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#ubah-temuan"
                                                                >
                                                                    Ubah
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
                                                                                    Ubah
                                                                                    Temuan
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
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
                                        data-bs-target="#exampleModal"
                                    >
                                        Validasi
                                    </button>

                                    <!-- Modal -->
                                    <div
                                        class="modal fade"
                                        id="exampleModal"
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
                                                <div
                                                    class="modal-body text-start"
                                                >
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
        $("#submit-bukti").click(function () {
            $("#list").show();
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
