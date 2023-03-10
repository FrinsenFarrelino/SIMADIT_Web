@extends('layouts.main') @section('body')

<div class="main-wrapper">
    <!-- Sidebar -->
    @include('partials.sidebar-ypta')
    <!-- End of Sidebar -->

    <div class="page-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('partials.navbar')
        <!-- partial -->

        <!-- Body -->
        <div class="page-content">
            <div
                class="d-flex justify-content-between align-items-center flex-wrap grid-margin"
            >
                <div>
                    <h4 class="mb-3 mb-md-0 fs-2">
                        SELAMAT DATANG, YAYASAN PERGURUAN 17 AGUSTUS 1945!
                    </h4>
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
                                        <h6 class="card-title mb-2">
                                            Jumlah Perintah Audit
                                        </h6>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-md-12 col-xl-5">
                                            <h3 class="mb-2">25</h3>
                                            <div
                                                class="d-flex align-items-baseline"
                                            >
                                                <p class="text-success">
                                                    <span>+3.3%</span>
                                                    <i
                                                        data-feather="arrow-up"
                                                        class="icon-sm mb-1"
                                                    ></i>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-12 col-xl-7">
                                            <div
                                                id="customersChart"
                                                class="mt-md-3 mt-xl-0"
                                            ></div>
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
                                        <h6 class="card-title mb-2">
                                            Jumlah Audit Aktif
                                        </h6>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 col-md-12 col-xl-5">
                                            <h3 class="mb-2">5</h3>
                                            <div
                                                class="d-flex align-items-baseline"
                                            >
                                                <p class="text-danger">
                                                    <span>-2.8%</span>
                                                    <i
                                                        data-feather="arrow-down"
                                                        class="icon-sm mb-1"
                                                    ></i>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-12 col-xl-7">
                                            <div
                                                id="ordersChart"
                                                class="mt-md-3 mt-xl-0"
                                            ></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- row -->
            <div class="row mb-4">
                <div
                    class="col-xl-6 grid-margin grid-margin-xl-0 grid-margin stretch-card"
                >
                    <div class="card">
                        <div class="card-body">
                            <div
                                class="d-flex justify-content-between align-items-baseline mb-2"
                            >
                                <h6 class="card-title mb-4 fs-4">
                                    Pemberitahuan
                                </h6>
                            </div>
                            <div class="d-flex flex-column">
                                <a
                                    href="javascript:;"
                                    class="d-flex align-items-center border-bottom pb-3"
                                >
                                    <div class="me-3">
                                        <img
                                            src="https://via.placeholder.com/35x35"
                                            class="rounded-circle wd-35"
                                            alt="user"
                                        />
                                    </div>
                                    <div class="w-100">
                                        <div
                                            class="d-flex justify-content-between"
                                        >
                                            <h6 class="text-body mb-2">
                                                Leonardo Payne
                                            </h6>
                                            <p class="text-muted tx-12">
                                                12.30 PM
                                            </p>
                                        </div>
                                        <p class="text-muted tx-13">
                                            Hey! there I'm available...
                                        </p>
                                    </div>
                                </a>
                                <a
                                    href="javascript:;"
                                    class="d-flex align-items-center border-bottom py-3"
                                >
                                    <div class="me-3">
                                        <img
                                            src="https://via.placeholder.com/35x35"
                                            class="rounded-circle wd-35"
                                            alt="user"
                                        />
                                    </div>
                                    <div class="w-100">
                                        <div
                                            class="d-flex justify-content-between"
                                        >
                                            <h6 class="text-body mb-2">
                                                Carl Henson
                                            </h6>
                                            <p class="text-muted tx-12">
                                                02.14 AM
                                            </p>
                                        </div>
                                        <p class="text-muted tx-13">
                                            I've finished it! See you so..
                                        </p>
                                    </div>
                                </a>
                                <a
                                    href="javascript:;"
                                    class="d-flex align-items-center border-bottom py-3"
                                >
                                    <div class="me-3">
                                        <img
                                            src="https://via.placeholder.com/35x35"
                                            class="rounded-circle wd-35"
                                            alt="user"
                                        />
                                    </div>
                                    <div class="w-100">
                                        <div
                                            class="d-flex justify-content-between"
                                        >
                                            <h6 class="text-body mb-2">
                                                Jensen Combs
                                            </h6>
                                            <p class="text-muted tx-12">
                                                08.22 PM
                                            </p>
                                        </div>
                                        <p class="text-muted tx-13">
                                            This template is awesome!
                                        </p>
                                    </div>
                                </a>
                                <a
                                    href="javascript:;"
                                    class="d-flex align-items-center border-bottom py-3"
                                >
                                    <div class="me-3">
                                        <img
                                            src="https://via.placeholder.com/35x35"
                                            class="rounded-circle wd-35"
                                            alt="user"
                                        />
                                    </div>
                                    <div class="w-100">
                                        <div
                                            class="d-flex justify-content-between"
                                        >
                                            <h6 class="text-body mb-2">
                                                Amiah Burton
                                            </h6>
                                            <p class="text-muted tx-12">
                                                05.49 AM
                                            </p>
                                        </div>
                                        <p class="text-muted tx-13">
                                            Nice to meet you
                                        </p>
                                    </div>
                                </a>
                                <a
                                    href="javascript:;"
                                    class="d-flex align-items-center border-bottom py-3"
                                >
                                    <div class="me-3">
                                        <img
                                            src="https://via.placeholder.com/35x35"
                                            class="rounded-circle wd-35"
                                            alt="user"
                                        />
                                    </div>
                                    <div class="w-100">
                                        <div
                                            class="d-flex justify-content-between"
                                        >
                                            <h6 class="text-body mb-2">
                                                Yaretzi Mayo
                                            </h6>
                                            <p class="text-muted tx-12">
                                                01.19 AM
                                            </p>
                                        </div>
                                        <p class="text-muted tx-13">
                                            Hey! there I'm available...
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-0 d-none d-md-block visually-hidden">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title mb-4">Full calendar</h6>
                            <div id="external-events" class="external-events">
                                <h6 class="mb-2 text-muted">
                                    Draggable Events
                                </h6>
                                <div
                                    class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event"
                                >
                                    <div class="fc-event-main">Birth Day</div>
                                </div>
                                <div
                                    class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event"
                                >
                                    <div class="fc-event-main">New Project</div>
                                </div>
                                <div
                                    class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event"
                                >
                                    <div class="fc-event-main">Anniversary</div>
                                </div>
                                <div
                                    class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event"
                                >
                                    <div class="fc-event-main">
                                        Clent Meeting
                                    </div>
                                </div>
                                <div
                                    class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event hii"
                                >
                                    <div class="fc-event-main">Office Trip</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <div id="fullcalendar"></div>
                        </div>
                    </div>
                </div>

                <div id="fullCalModal" class="modal fade">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 id="modalTitle1" class="modal-title"></h4>
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                >
                                    <span class="visually-hidden">close</span>
                                </button>
                            </div>
                            <div id="modalBody1" class="modal-body"></div>
                            <div class="modal-footer">
                                <button
                                    type="button"
                                    class="btn btn-secondary"
                                    data-bs-dismiss="modal"
                                >
                                    Close
                                </button>
                                <button class="btn btn-primary">
                                    Event Page
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="createEventModal" class="modal fade">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 id="modalTitle2" class="modal-title">
                                    Add event
                                </h4>
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="modal"
                                >
                                    <span class="visually-hidden">close</span>
                                </button>
                            </div>
                            <div id="modalBody2" class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <label
                                            for="formGroupExampleInput"
                                            class="form-label"
                                            >Example label</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="formGroupExampleInput"
                                            placeholder="Example input"
                                        />
                                    </div>
                                    <div class="mb-3">
                                        <label
                                            for="formGroupExampleInput2"
                                            class="form-label"
                                            >Another label</label
                                        >
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="formGroupExampleInput2"
                                            placeholder="Another input"
                                        />
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button
                                    type="button"
                                    class="btn btn-secondary"
                                    data-bs-dismiss="modal"
                                >
                                    Close
                                </button>
                                <button class="btn btn-primary">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-lg-12 col-xl-12 stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div
                                class="d-flex justify-content-between align-items-baseline mb-2"
                            >
                                <h6 class="card-title mb-3 fs-4">
                                    Daftar Laporan Audit
                                </h6>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>Nama Objek Audit</th>
                                            <th>Tanggal Dimulai</th>
                                            <th>Tanggal Berakhir</th>
                                            <th>Unit</th>
                                            <th>Detail Laporan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>2 Sep 2022</td>
                                            <td>30 Sep 2022</td>
                                            <td>PMB | LSP</td>
                                            <td>
                                                <a
                                                    class="btn btn-primary"
                                                    href="/detail-laporan-ypta"
                                                >
                                                    Lihat Detail<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>2 Sep 2022</td>
                                            <td>30 Sep 2022</td>
                                            <td>PMB | LSP</td>
                                            <td>
                                                <a
                                                    class="btn btn-primary"
                                                    href="/detail-laporan-ypta"
                                                >
                                                    Lihat Detail<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mt-4 d-flex justify-content-center">
                                <a href="/laporan-audit-ypta"
                                    >Lihat Lebih Banyak</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('components.detail-pengaduan-modal')
            @include('components.detail-perintah-modal')
        </div>
        <!-- End of Body -->

        <!-- partial:partials/_footer.html -->
        @include('partials.footer')
        <!-- partial -->
    </div>
</div>

@endsection
