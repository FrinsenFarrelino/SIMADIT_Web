@extends('layouts.main') @section('body')

<div class="main-wrapper">
    <!-- Sidebar -->
    @include('partials.sidebar-ia')
    <!-- End of Sidebar -->

    <div class="page-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('partials.navbar')
        <!-- partial -->

        <!-- Body -->
        <div class="page-content">
            <div class="mb-4">
                <h4 class="mb-3 mb-md-0 fs-2">
                    TENGGAT WAKTU PENYELESAIAN TEMUAN AUDIT
                </h4>
            </div>

            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="text-start fw-bold fs-3 mb-3">
                                Daftar Unit
                            </div>
                            <div style="overflow-x: auto">
                                <div class="d-flex flex-nowrap mb-4">
                                    <button
                                        id="pmb"
                                        class="btn btn-outline-primary mx-2 col-4"
                                    >
                                        Penerimaan Mahasiswa Baru
                                    </button>
                                    <button
                                        id="lsp"
                                        class="btn btn-primary mx-2 col-4"
                                    >
                                        Lembaga Setifikasi Profesi
                                    </button>
                                    <button
                                        id="ba"
                                        class="btn btn-primary mx-2 col-4"
                                    >
                                        Biro Akademik
                                    </button>
                                    <button
                                        id="bk"
                                        class="btn btn-primary mx-2 col-4"
                                    >
                                        Biro Keuangan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="table" class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div id="perintah" class="fs-1 mb-2">
                                Unit Penerimaan Mahasiswa Baru
                            </div>
                            <div class="table-responsive">
                                <table id="dataTableExample" class="table">
                                    <thead>
                                        <tr>
                                            <th>Judul Temuan</th>
                                            <th>Waktu Penyelesaian</th>
                                            <th>Detail Temuan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="align-middle">
                                        <tr>
                                            <td>SDM Pengelola Keuangan</td>
                                            <td>20 September 2022</td>
                                            <td>
                                                <button
                                                    class="btn btn-outline-primary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#temuanModal"
                                                >
                                                    Lihat Temuan<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </button>
                                            </td>
                                            <td>
                                                <a
                                                    href="#"
                                                    class="btn btn-light"
                                                    >Ubah</a
                                                >
                                                <a
                                                    href="#"
                                                    class="btn btn-primary"
                                                    >Hapus</a
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>SDM Pengelola Keuangan</td>
                                            <td>20 September 2022</td>
                                            <td>
                                                <button
                                                    class="btn btn-outline-primary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#temuanModal"
                                                >
                                                    Lihat Temuan<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </button>
                                            </td>
                                            <td>
                                                <a
                                                    href="#"
                                                    class="btn btn-light"
                                                    >Ubah</a
                                                >
                                                <a
                                                    href="#"
                                                    class="btn btn-primary"
                                                    >Hapus</a
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>SDM Pengelola Keuangan</td>
                                            <td>20 September 2022</td>
                                            <td>
                                                <button
                                                    class="btn btn-outline-primary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#temuanModal"
                                                >
                                                    Lihat Temuan<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </button>
                                            </td>
                                            <td>
                                                <a
                                                    href="#"
                                                    class="btn btn-light"
                                                    >Ubah</a
                                                >
                                                <a
                                                    href="#"
                                                    class="btn btn-primary"
                                                    >Hapus</a
                                                >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>SDM Pengelola Keuangan</td>
                                            <td>20 September 2022</td>
                                            <td>
                                                <button
                                                    class="btn btn-outline-primary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#temuanModal"
                                                >
                                                    Lihat Temuan<i
                                                        class="ms-2 icon-md"
                                                        data-feather="eye"
                                                    ></i>
                                                </button>
                                            </td>
                                            <td>
                                                <a
                                                    href="#"
                                                    class="btn btn-light"
                                                    >Ubah</a
                                                >
                                                <a
                                                    href="#"
                                                    class="btn btn-primary"
                                                    >Hapus</a
                                                >
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('components.temuan-modal')
            <!-- Coba DOM Refresh Elemen -->
            <div id="calendar" class="row">
                <div class="col-0 visually-hidden">
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="fullcalendar"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Body -->

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                var currentState = "";
                // $("#tes").attr("hidden");

                $("#pmb, #lsp, #ba, #bk").click(function () {
                    currentState = "Unit " + $(this).text();
                    $(this).removeClass("btn-primary");
                    $(this).addClass("btn-outline-primary");
                    if ($("#pmb").text() != $(this).text()) {
                        $("#pmb").removeClass("btn-outline-primary");
                        $("#pmb").addClass("btn-primary");
                    }
                    if ($("#lsp").text() != $(this).text()) {
                        $("#lsp").removeClass("btn-outline-primary");
                        $("#lsp").addClass("btn-primary");
                    }
                    if ($("#ba").text() != $(this).text()) {
                        $("#ba").removeClass("btn-outline-primary");
                        $("#ba").addClass("btn-primary");
                    }
                    if ($("#bk").text() != $(this).text()) {
                        $("#bk").removeClass("btn-outline-primary");
                        $("#bk").addClass("btn-primary");
                    }
                    $("#perintah").text(currentState);
                    // Call the render function to initialize the UI
                    $("#table").removeClass("d-none");
                    $("#calendar").removeAttr("hidden");
                });
            </script>
        </div>
    </div>
    @endsection
</div>
