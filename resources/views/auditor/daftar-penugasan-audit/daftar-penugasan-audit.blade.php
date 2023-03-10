<!DOCTYPE html>
<!--
Template Name: NobleUI - HTML Bootstrap 5 Admin Dashboard Template
Author: NobleUI
Website: https://www.nobleui.com
Portfolio: https://themeforest.net/user/nobleui/portfolio
Contact: nobleui123@gmail.com
Purchase: https://1.envato.market/nobleui_admin
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
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

        <title>NobleUI - HTML Bootstrap 5 Admin Dashboard Template</title>

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
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tiger Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td>
                                                    <td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                </tr>
                                                <tr>
                                                    <td>Garrett Winters</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>63</td>
                                                    <td>2011/07/25</td>
                                                    <td>$170,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Ashton Cox</td>
                                                    <td>
                                                        Junior Technical Author
                                                    </td>
                                                    <td>San Francisco</td>
                                                    <td>66</td>
                                                    <td>2009/01/12</td>
                                                    <td>$86,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Cedric Kelly</td>
                                                    <td>
                                                        Senior Javascript
                                                        Developer
                                                    </td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2012/03/29</td>
                                                    <td>$433,060</td>
                                                </tr>
                                                <tr>
                                                    <td>Airi Satou</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                    <td>$162,700</td>
                                                </tr>
                                                <tr>
                                                    <td>Brielle Williamson</td>
                                                    <td>
                                                        Integration Specialist
                                                    </td>
                                                    <td>New York</td>
                                                    <td>61</td>
                                                    <td>2012/12/02</td>
                                                    <td>$372,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Herrod Chandler</td>
                                                    <td>Sales Assistant</td>
                                                    <td>San Francisco</td>
                                                    <td>59</td>
                                                    <td>2012/08/06</td>
                                                    <td>$137,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Rhona Davidson</td>
                                                    <td>
                                                        Integration Specialist
                                                    </td>
                                                    <td>Tokyo</td>
                                                    <td>55</td>
                                                    <td>2010/10/14</td>
                                                    <td>$327,900</td>
                                                </tr>
                                                <tr>
                                                    <td>Colleen Hurst</td>
                                                    <td>
                                                        Javascript Developer
                                                    </td>
                                                    <td>San Francisco</td>
                                                    <td>39</td>
                                                    <td>2009/09/15</td>
                                                    <td>$205,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Sonya Frost</td>
                                                    <td>Software Engineer</td>
                                                    <td>Edinburgh</td>
                                                    <td>23</td>
                                                    <td>2008/12/13</td>
                                                    <td>$103,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Jena Gaines</td>
                                                    <td>Office Manager</td>
                                                    <td>London</td>
                                                    <td>30</td>
                                                    <td>2008/12/19</td>
                                                    <td>$90,560</td>
                                                </tr>
                                                <tr>
                                                    <td>Quinn Flynn</td>
                                                    <td>Support Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>22</td>
                                                    <td>2013/03/03</td>
                                                    <td>$342,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Charde Marshall</td>
                                                    <td>Regional Director</td>
                                                    <td>San Francisco</td>
                                                    <td>36</td>
                                                    <td>2008/10/16</td>
                                                    <td>$470,600</td>
                                                </tr>
                                                <tr>
                                                    <td>Haley Kennedy</td>
                                                    <td>
                                                        Senior Marketing
                                                        Designer
                                                    </td>
                                                    <td>London</td>
                                                    <td>43</td>
                                                    <td>2012/12/18</td>
                                                    <td>$313,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Tatyana Fitzpatrick</td>
                                                    <td>Regional Director</td>
                                                    <td>London</td>
                                                    <td>19</td>
                                                    <td>2010/03/17</td>
                                                    <td>$385,750</td>
                                                </tr>
                                                <tr>
                                                    <td>Michael Silva</td>
                                                    <td>Marketing Designer</td>
                                                    <td>London</td>
                                                    <td>66</td>
                                                    <td>2012/11/27</td>
                                                    <td>$198,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Paul Byrd</td>
                                                    <td>
                                                        Chief Financial Officer
                                                        (CFO)
                                                    </td>
                                                    <td>New York</td>
                                                    <td>64</td>
                                                    <td>2010/06/09</td>
                                                    <td>$725,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Gloria Little</td>
                                                    <td>
                                                        Systems Administrator
                                                    </td>
                                                    <td>New York</td>
                                                    <td>59</td>
                                                    <td>2009/04/10</td>
                                                    <td>$237,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Bradley Greer</td>
                                                    <td>Software Engineer</td>
                                                    <td>London</td>
                                                    <td>41</td>
                                                    <td>2012/10/13</td>
                                                    <td>$132,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Dai Rios</td>
                                                    <td>Personnel Lead</td>
                                                    <td>Edinburgh</td>
                                                    <td>35</td>
                                                    <td>2012/09/26</td>
                                                    <td>$217,500</td>
                                                </tr>
                                                <tr>
                                                    <td>Jenette Caldwell</td>
                                                    <td>Development Lead</td>
                                                    <td>New York</td>
                                                    <td>30</td>
                                                    <td>2011/09/03</td>
                                                    <td>$345,000</td>
                                                </tr>
                                                <tr>
                                                    <td>Yuri Berry</td>
                                                    <td>
                                                        Chief Marketing Officer
                                                        (CMO)
                                                    </td>
                                                    <td>New York</td>
                                                    <td>40</td>
                                                    <td>2009/06/25</td>
                                                    <td>$675,000</td>
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
