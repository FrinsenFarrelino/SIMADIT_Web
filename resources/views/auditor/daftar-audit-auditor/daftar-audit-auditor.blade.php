<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <meta
            name="description"
            content="Responsive HTML Admin Dashboard Template based on Bootstrap 5"
        />
        <meta name="author" content="NobleUI" />
        <meta
            name="keywords"
            content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web"
        />

        <title>Sistem Informasi Audit</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
            rel="stylesheet"
        />
        <!-- End fonts -->

        <!-- core:css -->
        <link rel="stylesheet" href="../../../assets/vendors/core/core.css" />
        <!-- endinject -->

        <!-- Plugin css for this page -->
        <link
            rel="stylesheet"
            href="../../../assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css"
        />
        <!-- End plugin css for this page -->

        <!-- inject:css -->
        <link
            rel="stylesheet"
            href="../../../assets/fonts/feather-font/css/iconfont.css"
        />
        <link
            rel="stylesheet"
            href="../../../assets/vendors/flag-icon-css/css/flag-icon.min.css"
        />
        <!-- endinject -->

        <!-- Layout styles -->
        <link rel="stylesheet" href="../../../assets/css/demo1/style.css" />
        <!-- End layout styles -->

        <link rel="shortcut icon" href="../../../assets/images/favicon.png" />
    </head>
    <body>
        <div class="main-wrapper">
            <!-- sidebar -->
            <nav class="sidebar">
                <div class="sidebar-header">
                    <a href="/dashboard-ia" class="sidebar-brand"
                        ><img
                            src="{{ asset('assets/images/ia.png') }}"
                            alt="logo"
                            width="50"
                        />
                        SIM<span>ADIT</span>
                    </a>
                </div>
                <div class="sidebar-body">
                    <ul class="nav">
                        <li class="nav-item nav-category">Main</li>
                        <li class="nav-item">
                            <a href="/dashboard-auditor" class="nav-link">
                                <i class="link-icon" data-feather="box"></i>
                                <span class="link-title">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item nav-category">Pages</li>

                        <li class="nav-item">
                            <a href="/daftar-audit-auditor" class="nav-link">
                                <i class="link-icon" data-feather="box"></i>
                                <span class="link-title">Daftar Audit</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/tenggat-waktu-auditor" class="nav-link">
                                <i class="link-icon" data-feather="box"></i>
                                <span class="link-title">Tenggat Waktu</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- end sidebar -->

            <div class="page-wrapper">
                <!-- Navbar -->

                <nav class="navbar">
                    <a href="#" class="sidebar-toggler">
                        <i data-feather="menu"></i>
                    </a>
                    <div class="navbar-content">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a
                                    class="nav-link dropdown-toggle"
                                    href="#"
                                    id="appsDropdown"
                                    role="button"
                                    data-bs-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                >
                                    <i data-feather="grid"></i>
                                </a>
                                <div
                                    class="dropdown-menu p-0"
                                    aria-labelledby="appsDropdown"
                                >
                                    <div
                                        class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom"
                                    >
                                        <p class="mb-0 fw-bold">Web Apps</p>
                                        <a
                                            href="javascript:;"
                                            class="text-muted"
                                            >Edit</a
                                        >
                                    </div>
                                    <div class="row g-0 p-1">
                                        <div class="col-3 text-center">
                                            <a
                                                href="pages/apps/chat.html"
                                                class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"
                                                ><i
                                                    data-feather="message-square"
                                                    class="icon-lg mb-1"
                                                ></i>
                                                <p class="tx-12">Chat</p></a
                                            >
                                        </div>
                                        <div class="col-3 text-center">
                                            <a
                                                href="pages/apps/calendar.html"
                                                class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"
                                                ><i
                                                    data-feather="calendar"
                                                    class="icon-lg mb-1"
                                                ></i>
                                                <p class="tx-12">Calendar</p></a
                                            >
                                        </div>
                                        <div class="col-3 text-center">
                                            <a
                                                href="pages/email/inbox.html"
                                                class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"
                                                ><i
                                                    data-feather="mail"
                                                    class="icon-lg mb-1"
                                                ></i>
                                                <p class="tx-12">Email</p></a
                                            >
                                        </div>
                                        <div class="col-3 text-center">
                                            <a
                                                href="/profile-auditor"
                                                class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"
                                                ><i
                                                    data-feather="instagram"
                                                    class="icon-lg mb-1"
                                                ></i>
                                                <p class="tx-12">Profile</p></a
                                            >
                                        </div>
                                    </div>
                                    <div
                                        class="px-3 py-2 d-flex align-items-center justify-content-center border-top"
                                    >
                                        <a href="javascript:;">View all</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a
                                    class="nav-link dropdown-toggle"
                                    href="#"
                                    id="messageDropdown"
                                    role="button"
                                    data-bs-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                >
                                    <i data-feather="mail"></i>
                                </a>
                                <div
                                    class="dropdown-menu p-0"
                                    aria-labelledby="messageDropdown"
                                >
                                    <div
                                        class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom"
                                    >
                                        <p>9 New Messages</p>
                                        <a
                                            href="javascript:;"
                                            class="text-muted"
                                            >Clear all</a
                                        >
                                    </div>
                                    <div class="p-1">
                                        <a
                                            href="javascript:;"
                                            class="dropdown-item d-flex align-items-center py-2"
                                        >
                                            <div class="me-3">
                                                <img
                                                    class="wd-30 ht-30 rounded-circle"
                                                    src="https://via.placeholder.com/30x30"
                                                    alt="userr"
                                                />
                                            </div>
                                            <div
                                                class="d-flex justify-content-between flex-grow-1"
                                            >
                                                <div class="me-4">
                                                    <p>Leonardo Payne</p>
                                                    <p class="tx-12 text-muted">
                                                        Project status
                                                    </p>
                                                </div>
                                                <p class="tx-12 text-muted">
                                                    2 min ago
                                                </p>
                                            </div>
                                        </a>
                                        <a
                                            href="javascript:;"
                                            class="dropdown-item d-flex align-items-center py-2"
                                        >
                                            <div class="me-3">
                                                <img
                                                    class="wd-30 ht-30 rounded-circle"
                                                    src="https://via.placeholder.com/30x30"
                                                    alt="userr"
                                                />
                                            </div>
                                            <div
                                                class="d-flex justify-content-between flex-grow-1"
                                            >
                                                <div class="me-4">
                                                    <p>Carl Henson</p>
                                                    <p class="tx-12 text-muted">
                                                        Client meeting
                                                    </p>
                                                </div>
                                                <p class="tx-12 text-muted">
                                                    30 min ago
                                                </p>
                                            </div>
                                        </a>
                                        <a
                                            href="javascript:;"
                                            class="dropdown-item d-flex align-items-center py-2"
                                        >
                                            <div class="me-3">
                                                <img
                                                    class="wd-30 ht-30 rounded-circle"
                                                    src="https://via.placeholder.com/30x30"
                                                    alt="userr"
                                                />
                                            </div>
                                            <div
                                                class="d-flex justify-content-between flex-grow-1"
                                            >
                                                <div class="me-4">
                                                    <p>Jensen Combs</p>
                                                    <p class="tx-12 text-muted">
                                                        Project updates
                                                    </p>
                                                </div>
                                                <p class="tx-12 text-muted">
                                                    1 hrs ago
                                                </p>
                                            </div>
                                        </a>
                                        <a
                                            href="javascript:;"
                                            class="dropdown-item d-flex align-items-center py-2"
                                        >
                                            <div class="me-3">
                                                <img
                                                    class="wd-30 ht-30 rounded-circle"
                                                    src="https://via.placeholder.com/30x30"
                                                    alt="userr"
                                                />
                                            </div>
                                            <div
                                                class="d-flex justify-content-between flex-grow-1"
                                            >
                                                <div class="me-4">
                                                    <p>Amiah Burton</p>
                                                    <p class="tx-12 text-muted">
                                                        Project deatline
                                                    </p>
                                                </div>
                                                <p class="tx-12 text-muted">
                                                    2 hrs ago
                                                </p>
                                            </div>
                                        </a>
                                        <a
                                            href="javascript:;"
                                            class="dropdown-item d-flex align-items-center py-2"
                                        >
                                            <div class="me-3">
                                                <img
                                                    class="wd-30 ht-30 rounded-circle"
                                                    src="https://via.placeholder.com/30x30"
                                                    alt="userr"
                                                />
                                            </div>
                                            <div
                                                class="d-flex justify-content-between flex-grow-1"
                                            >
                                                <div class="me-4">
                                                    <p>Yaretzi Mayo</p>
                                                    <p class="tx-12 text-muted">
                                                        New record
                                                    </p>
                                                </div>
                                                <p class="tx-12 text-muted">
                                                    5 hrs ago
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                    <div
                                        class="px-3 py-2 d-flex align-items-center justify-content-center border-top"
                                    >
                                        <a href="javascript:;">View all</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a
                                    class="nav-link dropdown-toggle"
                                    href="#"
                                    id="notificationDropdown"
                                    role="button"
                                    data-bs-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                >
                                    <i data-feather="bell"></i>
                                    <div class="indicator">
                                        <div class="circle"></div>
                                    </div>
                                </a>
                                <div
                                    class="dropdown-menu p-0"
                                    aria-labelledby="notificationDropdown"
                                >
                                    <div
                                        class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom"
                                    >
                                        <p>6 New Notifications</p>
                                        <a
                                            href="javascript:;"
                                            class="text-muted"
                                            >Clear all</a
                                        >
                                    </div>
                                    <div class="p-1">
                                        <a
                                            href="javascript:;"
                                            class="dropdown-item d-flex align-items-center py-2"
                                        >
                                            <div
                                                class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3"
                                            >
                                                <i
                                                    class="icon-sm text-white"
                                                    data-feather="gift"
                                                ></i>
                                            </div>
                                            <div class="flex-grow-1 me-2">
                                                <p>New Order Recieved</p>
                                                <p class="tx-12 text-muted">
                                                    30 min ago
                                                </p>
                                            </div>
                                        </a>
                                        <a
                                            href="javascript:;"
                                            class="dropdown-item d-flex align-items-center py-2"
                                        >
                                            <div
                                                class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3"
                                            >
                                                <i
                                                    class="icon-sm text-white"
                                                    data-feather="alert-circle"
                                                ></i>
                                            </div>
                                            <div class="flex-grow-1 me-2">
                                                <p>Server Limit Reached!</p>
                                                <p class="tx-12 text-muted">
                                                    1 hrs ago
                                                </p>
                                            </div>
                                        </a>
                                        <a
                                            href="javascript:;"
                                            class="dropdown-item d-flex align-items-center py-2"
                                        >
                                            <div
                                                class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3"
                                            >
                                                <img
                                                    class="wd-30 ht-30 rounded-circle"
                                                    src="https://via.placeholder.com/30x30"
                                                    alt="userr"
                                                />
                                            </div>
                                            <div class="flex-grow-1 me-2">
                                                <p>New customer registered</p>
                                                <p class="tx-12 text-muted">
                                                    2 sec ago
                                                </p>
                                            </div>
                                        </a>
                                        <a
                                            href="javascript:;"
                                            class="dropdown-item d-flex align-items-center py-2"
                                        >
                                            <div
                                                class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3"
                                            >
                                                <i
                                                    class="icon-sm text-white"
                                                    data-feather="layers"
                                                ></i>
                                            </div>
                                            <div class="flex-grow-1 me-2">
                                                <p>Apps are ready for update</p>
                                                <p class="tx-12 text-muted">
                                                    5 hrs ago
                                                </p>
                                            </div>
                                        </a>
                                        <a
                                            href="javascript:;"
                                            class="dropdown-item d-flex align-items-center py-2"
                                        >
                                            <div
                                                class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3"
                                            >
                                                <i
                                                    class="icon-sm text-white"
                                                    data-feather="download"
                                                ></i>
                                            </div>
                                            <div class="flex-grow-1 me-2">
                                                <p>Download completed</p>
                                                <p class="tx-12 text-muted">
                                                    6 hrs ago
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                    <div
                                        class="px-3 py-2 d-flex align-items-center justify-content-center border-top"
                                    >
                                        <a href="javascript:;">View all</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a
                                    class="nav-link dropdown-toggle"
                                    href="#"
                                    id="profileDropdown"
                                    role="button"
                                    data-bs-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                >
                                    <img
                                        class="wd-30 ht-30 rounded-circle"
                                        src="https://via.placeholder.com/30x30"
                                        alt="profile"
                                    />
                                </a>
                                <div
                                    class="dropdown-menu p-0"
                                    aria-labelledby="profileDropdown"
                                >
                                    <div
                                        class="d-flex flex-column align-items-center border-bottom px-5 py-3"
                                    >
                                        <div class="mb-3">
                                            <img
                                                class="wd-80 ht-80 rounded-circle"
                                                src="https://via.placeholder.com/80x80"
                                                alt=""
                                            />
                                        </div>
                                        <div class="text-center">
                                            <p class="tx-16 fw-bolder">
                                                Amiah Burton
                                            </p>
                                            <p class="tx-12 text-muted">
                                                amiahburton@gmail.com
                                            </p>
                                        </div>
                                    </div>
                                    <ul class="list-unstyled p-1">
                                        <li class="dropdown-item py-2">
                                            <a
                                                href="/profile-auditor"
                                                class="text-body ms-0"
                                            >
                                                <i
                                                    class="me-2 icon-md"
                                                    data-feather="user"
                                                ></i>
                                                <span>Profile</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-item py-2">
                                            <a
                                                href="/edit-profile-auditor"
                                                class="text-body ms-0"
                                            >
                                                <i
                                                    class="me-2 icon-md"
                                                    data-feather="edit"
                                                ></i>
                                                <span>Edit Profile</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-item py-2">
                                            <a
                                                href="javascript:;"
                                                class="text-body ms-0"
                                            >
                                                <i
                                                    class="me-2 icon-md"
                                                    data-feather="repeat"
                                                ></i>
                                                <span>Switch User</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-item py-2">
                                            <a
                                                href="javascript:;"
                                                class="text-body ms-0"
                                            >
                                                <i
                                                    class="me-2 icon-md"
                                                    data-feather="log-out"
                                                ></i>
                                                <span>Log Out</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- end-navbar -->

                <!-- content -->
                <div class="page-content">
                    <h4 class="mb-3 mb-md-0">Daftar Penugasan Audit</h4>

                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table
                                            id="dataTableExample"
                                            class="table"
                                        >
                                            <thead>
                                                <tr>
                                                    <th>Kategori Audit</th>
                                                    <th>Tanggal Mulai</th>
                                                    <th>Tanggal Akhir</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Keuangan</td>
                                                    <td>15 September 2022</td>
                                                    <td>15 Desember 2022</td>
                                                    <td>
                                                        <!-- DETAIL AUDIT -->
                                                        <!-- Button Detail Audit -->
                                                        <button
                                                            type="button"
                                                            class="btn btn-info text-white btn-xs"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#detail-audit"
                                                        >
                                                            <i
                                                                class="feather-16"
                                                                data-feather="eye"
                                                            ></i>
                                                        </button>
                                                        <!-- end button detail audit -->

                                                        <!-- ISI MODAL DETAIL AUDIT -->
                                                        <div
                                                            class="modal fade modal-lg"
                                                            id="detail-audit"
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
                                                                        class="modal-header bg-primary"
                                                                    >
                                                                        <h1
                                                                            class="modal-title fs-5 text-white"
                                                                            id="exampleModalLabel"
                                                                        >
                                                                            Detail
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
                                                                            class="row"
                                                                        >
                                                                            <div
                                                                                class="col-6"
                                                                            >
                                                                                <div
                                                                                    class="unit-kategori-pengaduan"
                                                                                >
                                                                                    <div
                                                                                        class="btn btn-danger btn-xs mb-3 disabled"
                                                                                        id="unit-pengaduan"
                                                                                    >
                                                                                        Unit
                                                                                        :
                                                                                        PMB
                                                                                    </div>

                                                                                    <div
                                                                                        class="btn btn-danger btn-xs mb-3 disabled"
                                                                                        id="kategori-pengaduan"
                                                                                    >
                                                                                        Kategori
                                                                                        :
                                                                                        Keuangan
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="mb-3"
                                                                                    id="surat-perintah-audit"
                                                                                >
                                                                                    <h6
                                                                                        class="mb-2"
                                                                                    >
                                                                                        Surat
                                                                                        Perintah
                                                                                        Audit
                                                                                    </h6>

                                                                                    <div
                                                                                        class="border border-2 p-2 col-12"
                                                                                    >
                                                                                        <div
                                                                                            class="row"
                                                                                        >
                                                                                            <div
                                                                                                class="col-10"
                                                                                            >
                                                                                                <i
                                                                                                    data-feather="file"
                                                                                                ></i>
                                                                                                <span
                                                                                                    >Nama
                                                                                                    File
                                                                                                </span>
                                                                                            </div>
                                                                                            <i
                                                                                                class="col-2 feather-16 mt-1"
                                                                                                data-feather="download"
                                                                                            ></i>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="daftar-pengaduan"
                                                                                >
                                                                                    <h6
                                                                                        class="mb-2"
                                                                                    >
                                                                                        Daftar
                                                                                        Pengaduan
                                                                                    </h6>
                                                                                    <div
                                                                                        class="card mb-2"
                                                                                    >
                                                                                        <div
                                                                                            class="card-body"
                                                                                        >
                                                                                            <div
                                                                                                class="d-flex"
                                                                                            >
                                                                                                <h6
                                                                                                    class="card-title mb-3 text-white border rounded-3 bg-danger p-2"
                                                                                                >
                                                                                                    Pengaduan
                                                                                                    1
                                                                                                </h6>
                                                                                            </div>
                                                                                            <div
                                                                                                class="row mb-3"
                                                                                            >
                                                                                                <div
                                                                                                    class="d-flex align-items-baseline"
                                                                                                >
                                                                                                    <p
                                                                                                        class="text-black text-wrap"
                                                                                                    >
                                                                                                        Lorem
                                                                                                        ipsum,
                                                                                                        dolor
                                                                                                        sit
                                                                                                        amet
                                                                                                        consectetur
                                                                                                        adipisicing
                                                                                                        elit.
                                                                                                        Dignissimos,
                                                                                                        eaque!
                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="card"
                                                                                    >
                                                                                        <div
                                                                                            class="card-body"
                                                                                        >
                                                                                            <div
                                                                                                class="d-flex"
                                                                                            >
                                                                                                <h6
                                                                                                    class="card-title mb-3 text-white border rounded-3 bg-danger p-2"
                                                                                                >
                                                                                                    Pengaduan
                                                                                                    2
                                                                                                </h6>
                                                                                            </div>
                                                                                            <div
                                                                                                class="row mb-3"
                                                                                            >
                                                                                                <div
                                                                                                    class="d-flex align-items-baseline"
                                                                                                >
                                                                                                    <p
                                                                                                        class="text-black text-wrap"
                                                                                                    >
                                                                                                        Lorem
                                                                                                        ipsum,
                                                                                                        dolor
                                                                                                        sit
                                                                                                        amet
                                                                                                        consectetur
                                                                                                        adipisicing
                                                                                                        elit.
                                                                                                        Dignissimos,
                                                                                                        eaque!
                                                                                                    </p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="col-6"
                                                                            >
                                                                                <h6
                                                                                    class="mb-3"
                                                                                >
                                                                                    Keterangan
                                                                                    Pengaduan
                                                                                </h6>
                                                                                <div
                                                                                    class="border border-2 p-1"
                                                                                >
                                                                                    <p
                                                                                        class="text-wrap"
                                                                                    >
                                                                                        Lorem
                                                                                        ipsum
                                                                                        dolor
                                                                                        sit
                                                                                        amet
                                                                                        consectetur
                                                                                        adipisicing
                                                                                        elit.
                                                                                        Itaque
                                                                                        odit
                                                                                        tempore
                                                                                        voluptates
                                                                                        rem
                                                                                        illo,
                                                                                        tenetur
                                                                                        dolor
                                                                                        corporis
                                                                                        vel
                                                                                        nihil
                                                                                        velit
                                                                                        dolorum
                                                                                        vitae
                                                                                        iure
                                                                                        accusantium
                                                                                        dignissimos
                                                                                        architecto
                                                                                        nesciunt
                                                                                        commodi
                                                                                        sunt
                                                                                        illum
                                                                                        blanditiis
                                                                                        accusamus
                                                                                        est
                                                                                        animi
                                                                                        expedita
                                                                                        veritatis
                                                                                        consequatur.
                                                                                        Neque
                                                                                        quisquam
                                                                                        earum
                                                                                        voluptates,
                                                                                        explicabo
                                                                                        totam
                                                                                        dolor
                                                                                        unde
                                                                                        adipisci,
                                                                                        non
                                                                                        exercitationem
                                                                                        excepturi
                                                                                        ullam
                                                                                        perspiciatis
                                                                                        iste
                                                                                        ab
                                                                                        necessitatibus
                                                                                        nam
                                                                                        placeat
                                                                                        consequatur
                                                                                        vero
                                                                                        iure
                                                                                        officiis
                                                                                        possimus
                                                                                        voluptatibus,
                                                                                        rerum
                                                                                        porro
                                                                                        molestiae
                                                                                        fuga?
                                                                                        Veritatis
                                                                                        dolorem
                                                                                        itaque
                                                                                        officia
                                                                                        ad
                                                                                        vel
                                                                                        voluptates
                                                                                        dolor
                                                                                        aliquam
                                                                                        esse
                                                                                        provident,
                                                                                        dicta
                                                                                        accusantium
                                                                                        consectetur
                                                                                        exercitationem.
                                                                                        Accusamus
                                                                                        ea
                                                                                        laboriosam
                                                                                        sapiente
                                                                                        consectetur
                                                                                        explicabo
                                                                                        eveniet,
                                                                                        porro
                                                                                        autem
                                                                                        in
                                                                                        numquam
                                                                                        accusantium
                                                                                        doloremque
                                                                                        atque,
                                                                                        praesentium
                                                                                        quasi
                                                                                        eaque
                                                                                        natus.
                                                                                        Quaerat?
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- END ISI MODAL DETAIL AUDIT -->

                                                        <!-- END DETAIL AUDIT -->

                                                        <!-- AUDIT -->
                                                        <a
                                                            class="btn btn-primary btn-xs"
                                                            href="/form-tindak-auditor"
                                                            role="button"
                                                            ><i data-feather="clipboard" class="feather-16"></i></a
                                                        >
                                                        <!-- END AUDIT -->
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
                <!-- end content -->

                <!-- partial:../../partials/_footer.html -->
                <footer
                    class="footer d-flex flex-column flex-md-row align-items-center justify-content-between px-4 py-3 border-top small"
                >
                    <p class="text-muted mb-1 mb-md-0">
                        Copyright © 2022
                        <a href="https://www.nobleui.com" target="_blank"
                            >NobleUI</a
                        >.
                    </p>
                    <p class="text-muted">
                        Handcrafted With
                        <i
                            class="mb-1 text-primary ms-1 icon-sm"
                            data-feather="heart"
                        ></i>
                    </p>
                </footer>
                <!-- partial -->
            </div>
        </div>

        <!-- core:js -->
        <script src="../../../assets/vendors/core/core.js"></script>
        <!-- endinject -->

        <!-- Plugin js for this page -->
        <script src="../../../assets/vendors/datatables.net/jquery.dataTables.js"></script>
        <script src="../../../assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
        <!-- End plugin js for this page -->

        <!-- inject:js -->
        <script src="../../../assets/vendors/feather-icons/feather.min.js"></script>
        <script src="../../../assets/js/template.js"></script>
        <!-- endinject -->

        <!-- Custom js for this page -->
        <script src="../../../assets/js/data-table.js"></script>
        <!-- End custom js for this page -->
    </body>
</html>
