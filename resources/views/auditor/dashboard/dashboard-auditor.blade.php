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
                                            class="col-md-0 d-none d-md-block visually-hidden"
                                        >
                                            <div class="card">
                                                <div class="card-body">
                                                    <h6 class="card-title mb-4">
                                                        Full calendar
                                                    </h6>
                                                    <div
                                                        id="external-events"
                                                        class="external-events"
                                                    >
                                                        <h6
                                                            class="mb-2 text-muted"
                                                        >
                                                            Draggable Events
                                                        </h6>
                                                        <div
                                                            class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event"
                                                        >
                                                            <div
                                                                class="fc-event-main"
                                                            >
                                                                Birth Day
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event"
                                                        >
                                                            <div
                                                                class="fc-event-main"
                                                            >
                                                                New Project
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event"
                                                        >
                                                            <div
                                                                class="fc-event-main"
                                                            >
                                                                Anniversary
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event"
                                                        >
                                                            <div
                                                                class="fc-event-main"
                                                            >
                                                                Clent Meeting
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event hii"
                                                        >
                                                            <div
                                                                class="fc-event-main"
                                                            >
                                                                Office Trip
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div
                                                        id="fullcalendar"
                                                    ></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            id="fullCalModal"
                                            class="modal fade"
                                        >
                                            <div
                                                class="modal-dialog modal-dialog-centered"
                                            >
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4
                                                            id="modalTitle1"
                                                            class="modal-title"
                                                        ></h4>
                                                        <button
                                                            type="button"
                                                            class="btn-close"
                                                            data-bs-dismiss="modal"
                                                        >
                                                            <span
                                                                class="visually-hidden"
                                                                >close</span
                                                            >
                                                        </button>
                                                    </div>
                                                    <div
                                                        id="modalBody1"
                                                        class="modal-body"
                                                    ></div>
                                                    <div class="modal-footer">
                                                        <button
                                                            type="button"
                                                            class="btn btn-secondary"
                                                            data-bs-dismiss="modal"
                                                        >
                                                            Close
                                                        </button>
                                                        <button
                                                            class="btn btn-primary"
                                                        >
                                                            Event Page
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div
                                            id="createEventModal"
                                            class="modal fade"
                                        >
                                            <div
                                                class="modal-dialog modal-dialog-centered"
                                            >
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4
                                                            id="modalTitle2"
                                                            class="modal-title"
                                                        >
                                                            Add event
                                                        </h4>
                                                        <button
                                                            type="button"
                                                            class="btn-close"
                                                            data-bs-dismiss="modal"
                                                        >
                                                            <span
                                                                class="visually-hidden"
                                                                >close</span
                                                            >
                                                        </button>
                                                    </div>
                                                    <div
                                                        id="modalBody2"
                                                        class="modal-body"
                                                    >
                                                        <form>
                                                            <div class="mb-3">
                                                                <label
                                                                    for="formGroupExampleInput"
                                                                    class="form-label"
                                                                    >Example
                                                                    label</label
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
                                                                    >Another
                                                                    label</label
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
                                                        <button
                                                            class="btn btn-primary"
                                                        >
                                                            Add
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
