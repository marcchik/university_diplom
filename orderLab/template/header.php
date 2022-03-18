
<!DOCTYPE html>
<html lang="en" data-footer="true" data-scrollspy="true">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Order Lab | BSTU</title>
    <meta name="description" content="Generic form examples with validation and different layouts." />
    <!-- Favicon Tags Start -->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="../../orderLab/template/img/favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../../orderLab/template/img/favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../../orderLab/template/img/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../../orderLab/template/img/favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="../../orderLab/template/img/favicon/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="../../orderLab/template/img/favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="../../orderLab/template/img/favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="../../orderLab/template/img/favicon/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="../../orderLab/template/img/favicon/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="../../orderLab/template/img/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="../../orderLab/template/img/favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="../../orderLab/template/img/favicon/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="../../orderLab/template/img/favicon/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="../../orderLab/template/img/favicon/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="../../orderLab/template/img/favicon/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="../../orderLab/template/img/favicon/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="../../orderLab/template/img/favicon/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="../../orderLab/template/img/favicon/mstile-310x310.png" />
    <!-- Favicon Tags End -->
    <!-- Font Tags Start -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="font/CS-Interface/style.css" />
    <!-- Font Tags End -->
    <!-- Vendor Styles Start -->
    <link rel="stylesheet" href="../../orderLab/template/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="../../orderLab/template/css/vendor/OverlayScrollbars.min.css" />
    <link rel="stylesheet" href="../../orderLab/template/css/vendor/select2.min.css" />
    <link rel="stylesheet" href="../../orderLab/template/css/vendor/select2-bootstrap4.min.css" />
    <link rel="stylesheet" href="../../orderLab/template/css/vendor/bootstrap-datepicker3.standalone.min.css" />
    <!-- Vendor Styles End -->
    <!-- Template Base Styles Start -->
    <link rel="stylesheet" href="../../orderLab/template/css/styles.css" />
    <!-- Template Base Styles End -->

    <link rel="stylesheet" href="../../orderLab/template/css/main.css" />
    <script src="../../orderLab/template/js/base/loader.js"></script>
</head>

<body>
<div id="root">
    <div id="nav" class="nav-container d-flex">
        <div class="nav-content d-flex">
            <!-- Logo Start -->
            <div class="logo position-relative">
                <a href="/orderLab">
                    <!-- Logo can be added directly -->
                    <!-- <img src="img/logo/logo-white.svg" alt="logo" /> -->

                    <!-- Or added via css to provide different ones for different color themes -->
                    <div class="img"></div>
                </a>
            </div>
            <!-- Logo End -->

            <!-- Language Switch Start -->
            <div class="language-switch-container">
                <button class="btn btn-empty language-button dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EN</button>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">DE</a>
                    <a href="#" class="dropdown-item active">EN</a>
                    <a href="#" class="dropdown-item">ES</a>
                </div>
            </div>
            <!-- Language Switch End -->

            <!-- User Menu Start -->
            <div class="user-container d-flex">
                <a href="#" class="d-flex user position-relative" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="profile" alt="profile" src="../../orderLab/template/img/profile/profile-10.jpg" />
                    <div class="name">Mark Stepaniuk</div>
                </a>
                <div class="dropdown-menu dropdown-menu-end user-menu wide">
                    <div class="row mb-3 ms-0 me-0">
                        <div class="col-12 ps-1 mb-2">
                            <div class="text-extra-small text-primary">ACCOUNT</div>
                        </div>
                        <div class="col-6 ps-1 pe-1">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">User Info</a>
                                </li>
                                <li>
                                    <a href="#">Preferences</a>
                                </li>
                                <li>
                                    <a href="#">Calendar</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 pe-1 ps-1">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">Security</a>
                                </li>
                                <li>
                                    <a href="#">Billing</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mb-1 ms-0 me-0">
                        <div class="col-12 p-1 mb-2 pt-2">
                            <div class="text-extra-small text-primary">APPLICATION</div>
                        </div>
                        <div class="col-6 ps-1 pe-1">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">Themes</a>
                                </li>
                                <li>
                                    <a href="#">Language</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 pe-1 ps-1">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">Devices</a>
                                </li>
                                <li>
                                    <a href="#">Storage</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row mb-1 ms-0 me-0">
                        <div class="col-12 p-1 mb-3 pt-3">
                            <div class="separator-light"></div>
                        </div>
                        <div class="col-6 ps-1 pe-1">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">
                                        <i data-cs-icon="help" class="me-2" data-cs-size="17"></i>
                                        <span class="align-middle">Help</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i data-cs-icon="file-text" class="me-2" data-cs-size="17"></i>
                                        <span class="align-middle">Docs</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 pe-1 ps-1">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">
                                        <i data-cs-icon="gear" class="me-2" data-cs-size="17"></i>
                                        <span class="align-middle">Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i data-cs-icon="logout" class="me-2" data-cs-size="17"></i>
                                        <span class="align-middle">Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- User Menu End -->

            <!-- Icons Menu Start -->
            <ul class="list-unstyled list-inline text-center menu-icons">
                <li class="list-inline-item">
                    <a href="#" id="colorButton">
                        <i data-cs-icon="light-on" class="light" data-cs-size="18"></i>
                        <i data-cs-icon="light-off" class="dark" data-cs-size="18"></i>
                    </a>
                </li>
            </ul>
            <!-- Icons Menu End -->

            <!-- Menu Start -->
            <div class="menu-container flex-grow-1">
                <ul id="menu" class="menu">

                </ul>
            </div>
            <!-- Menu End -->

            <!-- Mobile Buttons Start -->
            <div class="mobile-buttons-container">
                <!-- Scrollspy Mobile Button Start -->
                <a href="#" id="scrollSpyButton" class="spy-button" data-bs-toggle="dropdown">
                    <i data-cs-icon="menu-dropdown"></i>
                </a>
                <!-- Scrollspy Mobile Button End -->

                <!-- Scrollspy Mobile Dropdown Start -->
                <div class="dropdown-menu dropdown-menu-end" id="scrollSpyDropdown"></div>
                <!-- Scrollspy Mobile Dropdown End -->

                <!-- Menu Button Start -->
                <a href="#" id="mobileMenuButton" class="menu-button">
                    <i data-cs-icon="menu"></i>
                </a>
                <!-- Menu Button End -->
            </div>
            <!-- Mobile Buttons End -->
        </div>
        <div class="nav-shadow"></div>
    </div>