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
@include('auditee.components.description.framework')
@include('auditee.components.description.domain')
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
@include('auditee.components.description.subdomain')
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