<? require_once('../template/header.php'); ?>

<?

// получаем данные из JSON файла
$ourData = file_get_contents("../BD/data.json");

// Преобразуем в массив
$arrayUsersBD = json_decode($ourData, true);

foreach ($arrayUsersBD as $key => $item) {

    if (strcasecmp($key, $_REQUEST['id']) == 0) {
        $userName = $item['contactName'];
        $userEmail = $item['contactEmail'];
        $userUniversity = $item['university'];
        $userFaculty = $item['faculty'];
        $userSpeciality = $item['speciality'];
    }
}

// получаем данные из JSON файла
$ourData = file_get_contents("../BD/schedule.json");

// Преобразуем в массив
$arrayScheduleDay = json_decode($ourData, true);

?>

<main>
    <div class="container">
        <!-- Title and Top Buttons Start -->
        <div class="page-title-container">
            <div class="row">
                <!-- Title Start -->
                <div class="col-12 col-md-7">
                    <h1 class="mb-0 pb-0 display-4" id="title"><?=$userName." ".$userSurname?></h1>
                    <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                        <ul class="breadcrumb pt-0">
                            <li class="breadcrumb-item"><a href="Dashboards.Default.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="Pages.html">Pages</a></li>
                            <li class="breadcrumb-item"><a href="Pages.Profile.html">Profile</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Title End -->

                <!-- Top Buttons Start -->
                <div class="col-12 col-md-5 d-flex align-items-start justify-content-end">
                    <button type="button" class="btn btn-outline-primary btn-icon btn-icon-start w-100 w-md-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none"
                             stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                             class="cs-icon cs-icon-edit-square">
                            <path
                                d="M11 2L5.5 2C4.09554 2 3.39331 2 2.88886 2.33706C2.67048 2.48298 2.48298 2.67048 2.33706 2.88886C2 3.39331 2 4.09554 2 5.5L2 14.5C2 15.9045 2 16.6067 2.33706 17.1111C2.48298 17.3295 2.67048 17.517 2.88886 17.6629C3.39331 18 4.09554 18 5.5 18L14.5 18C15.9045 18 16.6067 18 17.1111 17.6629C17.3295 17.517 17.517 17.3295 17.6629 17.1111C18 16.6067 18 15.9045 18 14.5L18 11"></path>
                            <path
                                d="M15.4978 3.06224C15.7795 2.78052 16.1616 2.62225 16.56 2.62225C16.9585 2.62225 17.3405 2.78052 17.6223 3.06224C17.904 3.34396 18.0623 3.72605 18.0623 4.12446C18.0623 4.52288 17.904 4.90497 17.6223 5.18669L10.8949 11.9141L8.06226 12.6223L8.7704 9.78966L15.4978 3.06224Z"></path>
                        </svg>
                        <span>Edit</span>
                    </button>
                </div>
                <!-- Top Buttons End -->
            </div>
        </div>
        <!-- Title and Top Buttons End -->

        <div class="row">
            <!-- Left Side Start -->
            <div class="col-12 col-xl-4 col-xxl-3">
                <!-- Biography Start -->
                <h2 class="small-title">Profile</h2>

                <div class="card mb-5">
                    <div class="card-body">
                        <div class="d-flex align-items-center flex-column mb-4">
                            <div class="d-flex align-items-center flex-column">
                                <div class="sw-13 position-relative mb-3">
                                    <img src="../template/img/profile/profile-7.jpg" class="img-fluid rounded-xl"
                                         alt="thumb">
                                </div>
                                <div class="h5 mb-0"><?=$userName." ".$userSurname?></div>
                            </div>
                        </div>
                        <div class="nav flex-column" role="tablist">
                            <a class="nav-link px-0 border-bottom border-separator-light" data-bs-toggle="tab"
                               href="#projectsTab" role="tab" aria-selected="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="cs-icon cs-icon-trend-up me-2"><path d="M17.8636 5L11.2453 11.6183C10.4771 12.3865 9.23606 12.401 8.45017 11.6508L8.27708 11.4856C7.49119 10.7354 6.25016 10.7498 5.48192 11.5181L2 15"></path><path d="M14 5H18V9"></path></svg>
                                <span class="align-middle">Users</span>
                            </a>
                            <a class="nav-link px-0 border-bottom border-separator-light" data-bs-toggle="tab"
                               href="#permissionsTab" role="tab" aria-selected="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="cs-icon cs-icon-calendar me-2"><path d="M14.5 4C15.9045 4 16.6067 4 17.1111 4.33706C17.3295 4.48298 17.517 4.67048 17.6629 4.88886C18 5.39331 18 6.09554 18 7.5L18 14.5C18 15.9045 18 16.6067 17.6629 17.1111C17.517 17.3295 17.3295 17.517 17.1111 17.6629C16.6067 18 15.9045 18 14.5 18L5.5 18C4.09554 18 3.39331 18 2.88886 17.6629C2.67048 17.517 2.48298 17.3295 2.33706 17.1111C2 16.6067 2 15.9045 2 14.5L2 7.5C2 6.09554 2 5.39331 2.33706 4.88886C2.48298 4.67048 2.67048 4.48298 2.88886 4.33706C3.39331 4 4.09554 4 5.5 4L14.5 4Z"></path><path d="M2 9H18M7 2 7 5.5M13 2 13 5.5M5 15H6"></path></svg>
                                <span class="align-middle">Schedule</span>
                            </a>
                            <a class="nav-link px-0" data-bs-toggle="tab" href="#aboutTab" role="tab"
                               aria-selected="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 20 20"
                                     fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                     stroke-linejoin="round" class="cs-icon cs-icon-user me-2">
                                    <path
                                        d="M10.0179 8C10.9661 8 11.4402 8 11.8802 7.76629C12.1434 7.62648 12.4736 7.32023 12.6328 7.06826C12.8989 6.64708 12.9256 6.29324 12.9789 5.58557C13.0082 5.19763 13.0071 4.81594 12.9751 4.42106C12.9175 3.70801 12.8887 3.35148 12.6289 2.93726C12.4653 2.67644 12.1305 2.36765 11.8573 2.2256C11.4235 2 10.9533 2 10.0129 2V2C9.03627 2 8.54794 2 8.1082 2.23338C7.82774 2.38223 7.49696 2.6954 7.33302 2.96731C7.07596 3.39365 7.05506 3.77571 7.01326 4.53982C6.99635 4.84898 6.99567 5.15116 7.01092 5.45586C7.04931 6.22283 7.06851 6.60631 7.33198 7.03942C7.4922 7.30281 7.8169 7.61166 8.08797 7.75851C8.53371 8 9.02845 8 10.0179 8V8Z"></path>
                                    <path
                                        d="M16.5 17.5L16.583 16.6152C16.7267 15.082 16.7986 14.3154 16.2254 13.2504C16.0456 12.9164 15.5292 12.2901 15.2356 12.0499C14.2994 11.2842 13.7598 11.231 12.6805 11.1245C11.9049 11.048 11.0142 11 10 11C8.98584 11 8.09511 11.048 7.31945 11.1245C6.24021 11.231 5.70059 11.2842 4.76443 12.0499C4.47077 12.2901 3.95441 12.9164 3.77462 13.2504C3.20144 14.3154 3.27331 15.082 3.41705 16.6152L3.5 17.5"></path>
                                </svg>
                                <span class="align-middle">About</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Biography End -->
            </div>
            <!-- Left Side End -->

            <!-- Right Side Start -->
            <div class="col-12 col-xl-8 col-xxl-9 mb-5 tab-content">


                <!-- Projects Tab Start -->
                <div class="tab-pane fade" id="projectsTab" role="tabpanel">
                    <h2 class="small-title">Users</h2>

                    <!-- Projects Content Start -->
                    <div class="-out">
                        <div class="by-count os-host os-theme-dark os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition" data-count="7" style="height: 392px; margin-bottom: -8px;"><div class="os-resize-observer-host observed"><div class="os-resize-observer" style="left: 0px; right: auto;"></div></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -15px;"></div><div class="os-padding"><div class="os-viewport os-viewport-native-scrollbars-invisible os-viewport-native-scrollbars-overlaid" style="overflow-y: scroll;"><div class="os-content" style="padding: 0px 15px; height: 100%; width: 100%;">
                                        <div class="card mb-2 sh-15 sh-md-6">
                                            <div class="card-body pt-0 pb-0 h-100">
                                                <div class="row g-0 h-100 align-content-center">
                                                    <div class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                                                        <a href="#" class="body-link text-truncate">Barmbrack</a>
                                                    </div>
                                                    <div class="col-12 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                                                        <span class="badge bg-outline-secondary me-1">STOCK</span>
                                                    </div>
                                                    <div class="col-12 col-md-3 d-flex align-items-center text-medium text-danger justify-content-md-center mb-1 mb-md-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="cs-icon cs-icon-arrow-bottom me-1"><path d="M17 11 10.3536 17.6464C10.1583 17.8417 9.84171 17.8417 9.64645 17.6464L3 11M10 2 10 17"></path></svg>
                                                        <span class="text-medium">-18.4%</span>
                                                    </div>
                                                    <div class="col-12 col-md-2 d-flex align-items-center justify-content-md-end text-muted text-medium mb-1 mb-md-0">
                                  <span>
                                    <span class="text-small">$</span>
                                    3.25
                                  </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2 sh-15 sh-md-6">
                                            <div class="card-body pt-0 pb-0 h-100">
                                                <div class="row g-0 h-100 align-content-center">
                                                    <div class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                                                        <a href="#" class="body-link text-truncate">Cheesymite Scroll</a>
                                                    </div>
                                                    <div class="col-12 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                                                        <span class="badge bg-outline-secondary me-1">TREND</span>
                                                    </div>
                                                    <div class="col-12 col-md-3 d-flex align-items-center text-medium text-danger justify-content-md-center mb-1 mb-md-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="cs-icon cs-icon-arrow-bottom me-1"><path d="M17 11 10.3536 17.6464C10.1583 17.8417 9.84171 17.8417 9.64645 17.6464L3 11M10 2 10 17"></path></svg>
                                                        <span class="text-medium">-13.4%</span>
                                                    </div>
                                                    <div class="col-12 col-md-2 d-flex align-items-center justify-content-md-end text-muted text-medium mb-1 mb-md-0">
                                  <span>
                                    <span class="text-small">$</span>
                                    4.50
                                  </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2 sh-15 sh-md-6">
                                            <div class="card-body pt-0 pb-0 h-100">
                                                <div class="row g-0 h-100 align-content-center">
                                                    <div class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                                                        <a href="#" class="body-link text-truncate">Cholermüs</a>
                                                    </div>
                                                    <div class="col-12 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                                                        <span class="badge bg-outline-secondary me-1">SALE</span>
                                                    </div>
                                                    <div class="col-12 col-md-3 d-flex align-items-center text-medium text-success justify-content-md-center mb-1 mb-md-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="cs-icon cs-icon-arrow-top me-1"><path d="M3 9 9.64645 2.35355C9.84171 2.15829 10.1583 2.15829 10.3536 2.35355L17 9M10 18 10 3"></path></svg>
                                                        <span class="text-medium">+9.7%</span>
                                                    </div>
                                                    <div class="col-12 col-md-2 d-flex align-items-center justify-content-md-end text-muted text-medium mb-1 mb-md-0">
                                  <span>
                                    <span class="text-small">$</span>
                                    1.75
                                  </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2 sh-15 sh-md-6">
                                            <div class="card-body pt-0 pb-0 h-100">
                                                <div class="row g-0 h-100 align-content-center">
                                                    <div class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                                                        <a href="#" class="body-link text-truncate">Ruisreikäleipä</a>
                                                    </div>
                                                    <div class="col-12 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                                                        <span class="badge bg-outline-secondary me-1">SALE</span>
                                                    </div>
                                                    <div class="col-12 col-md-3 d-flex align-items-center text-medium text-success justify-content-md-center mb-1 mb-md-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="cs-icon cs-icon-arrow-top me-1"><path d="M3 9 9.64645 2.35355C9.84171 2.15829 10.1583 2.15829 10.3536 2.35355L17 9M10 18 10 3"></path></svg>
                                                        <span class="text-medium">+5.3%</span>
                                                    </div>
                                                    <div class="col-12 col-md-2 d-flex align-items-center justify-content-md-end text-muted text-medium mb-1 mb-md-0">
                                  <span>
                                    <span class="text-small">$</span>
                                    3.00
                                  </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2 sh-15 sh-md-6">
                                            <div class="card-body pt-0 pb-0 h-100">
                                                <div class="row g-0 h-100 align-content-center">
                                                    <div class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                                                        <a href="#" class="body-link text-truncate">Bagel</a>
                                                    </div>
                                                    <div class="col-12 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                                                        <span class="badge bg-outline-secondary me-1">STOCK</span>
                                                    </div>
                                                    <div class="col-12 col-md-3 d-flex align-items-center text-medium text-danger justify-content-md-center mb-1 mb-md-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="cs-icon cs-icon-arrow-bottom me-1"><path d="M17 11 10.3536 17.6464C10.1583 17.8417 9.84171 17.8417 9.64645 17.6464L3 11M10 2 10 17"></path></svg>
                                                        <span class="text-medium">-2.3%</span>
                                                    </div>
                                                    <div class="col-12 col-md-2 d-flex align-items-center justify-content-md-end text-muted text-medium mb-1 mb-md-0">
                                  <span>
                                    <span class="text-small">$</span>
                                    4.25
                                  </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2 sh-15 sh-md-6">
                                            <div class="card-body pt-0 pb-0 h-100">
                                                <div class="row g-0 h-100 align-content-center">
                                                    <div class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                                                        <a href="#" class="body-link text-truncate">Buccellato di Lucca</a>
                                                    </div>
                                                    <div class="col-12 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                                                        <span class="badge bg-outline-secondary me-1">TREND</span>
                                                    </div>
                                                    <div class="col-12 col-md-3 d-flex align-items-center text-medium text-danger justify-content-md-center mb-1 mb-md-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="cs-icon cs-icon-arrow-bottom me-1"><path d="M17 11 10.3536 17.6464C10.1583 17.8417 9.84171 17.8417 9.64645 17.6464L3 11M10 2 10 17"></path></svg>
                                                        <span class="text-medium">-5.3%</span>
                                                    </div>
                                                    <div class="col-12 col-md-2 d-flex align-items-center justify-content-md-end text-muted text-medium mb-1 mb-md-0">
                                  <span>
                                    <span class="text-small">$</span>
                                    3.75
                                  </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2 sh-15 sh-md-6">
                                            <div class="card-body pt-0 pb-0 h-100">
                                                <div class="row g-0 h-100 align-content-center">
                                                    <div class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                                                        <a href="#" class="body-link text-truncate">Chapati</a>
                                                    </div>
                                                    <div class="col-12 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                                                        <span class="badge bg-outline-secondary me-1">SALE</span>
                                                    </div>
                                                    <div class="col-12 col-md-3 d-flex align-items-center text-medium text-success justify-content-md-center mb-1 mb-md-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="cs-icon cs-icon-arrow-top me-1"><path d="M3 9 9.64645 2.35355C9.84171 2.15829 10.1583 2.15829 10.3536 2.35355L17 9M10 18 10 3"></path></svg>
                                                        <span class="text-medium">+7.1%</span>
                                                    </div>
                                                    <div class="col-12 col-md-2 d-flex align-items-center justify-content-md-end text-muted text-medium mb-1 mb-md-0">
                                  <span>
                                    <span class="text-small">$</span>
                                    1.85
                                  </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-2 sh-15 sh-md-6">
                                            <div class="card-body pt-0 pb-0 h-100">
                                                <div class="row g-0 h-100 align-content-center">
                                                    <div class="col-12 col-md-5 d-flex align-items-center mb-2 mb-md-0">
                                                        <a href="#" class="body-link text-truncate">Pullman Loaf</a>
                                                    </div>
                                                    <div class="col-12 col-md-2 d-flex align-items-center text-muted text-medium mb-1 mb-md-0">
                                                        <span class="badge bg-outline-secondary me-1">TREND</span>
                                                    </div>
                                                    <div class="col-12 col-md-3 d-flex align-items-center text-medium text-success justify-content-md-center mb-1 mb-md-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="cs-icon cs-icon-arrow-top me-1"><path d="M3 9 9.64645 2.35355C9.84171 2.15829 10.1583 2.15829 10.3536 2.35355L17 9M10 18 10 3"></path></svg>
                                                        <span class="text-medium">+2.3%</span>
                                                    </div>
                                                    <div class="col-12 col-md-2 d-flex align-items-center justify-content-md-end text-muted text-medium mb-1 mb-md-0">
                                  <span>
                                    <span class="text-small">$</span>
                                    2.25
                                  </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div></div></div><div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden"><div class="os-scrollbar-track os-scrollbar-track-off"><div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden" style="height: calc(100% - 8px);"><div class="os-scrollbar-track os-scrollbar-track-off"><div class="os-scrollbar-handle" style="height: 89.0909%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar-corner"></div></div>
                    </div>
                    <!-- Projects Content End -->
                </div>
                <!-- Projects Tab End -->


                <!-- Permissions Tab Start -->
                <div class="tab-pane fade active show" id="permissionsTab" role="tabpanel">
                    <h2 class="small-title">Schedule</h2>
                    <div class="mb-5">
                        <div class="row g-2">
                            <div class="col-12 col-sm-6 col-lg-2">
                                <form class="card mb-5 tooltip-end-top" id="contactForm1" novalidate="novalidate">
                                    <div class="card-body">
                                        <p class="text-alternate mb-4">Monday</p>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="First pair" name="1" value="<?=$arrayScheduleDay[1][1]?>">
                                        </div>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="Second pair" name="2" value="<?=$arrayScheduleDay[1][2]?>">
                                        </div>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="Third pair" name="3" value="<?=$arrayScheduleDay[1][3]?>">
                                        </div>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="Fourth pair" name="4" value="<?=$arrayScheduleDay[1][4]?>">
                                        </div>
                                    </div>
                                    <div class="card-footer border-0 pt-0 d-flex justify-content-end align-items-center">
                                        <div>
                                            <button class="btn btn-icon btn-icon-end btn-primary" type="button" onclick="submitForm(1)">
                                                <span>Change</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="cs-icon cs-icon-chevron-right"><path d="M7 4L12.6464 9.64645C12.8417 9.84171 12.8417 10.1583 12.6464 10.3536L7 16"></path></svg>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-2">
                                <form class="card mb-5 tooltip-end-top" id="contactForm2" novalidate="novalidate">
                                    <div class="card-body">
                                        <p class="text-alternate mb-4">Tuesday</p>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="First pair" name="1" value="<?=$arrayScheduleDay[2][1]?>">
                                        </div>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="Second pair" name="2" value="<?=$arrayScheduleDay[2][2]?>">
                                        </div>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="Third pair" name="3" value="<?=$arrayScheduleDay[2][3]?>">
                                        </div>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="Fourth pair" name="4" value="<?=$arrayScheduleDay[2][4]?>">
                                        </div>
                                    </div>
                                    <div class="card-footer border-0 pt-0 d-flex justify-content-end align-items-center">
                                        <div>
                                            <button class="btn btn-icon btn-icon-end btn-primary" type="button" onclick="submitForm(2)">
                                                <span>Change</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="cs-icon cs-icon-chevron-right"><path d="M7 4L12.6464 9.64645C12.8417 9.84171 12.8417 10.1583 12.6464 10.3536L7 16"></path></svg>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-2">
                                <form class="card mb-5 tooltip-end-top" id="contactForm3" novalidate="novalidate">
                                    <div class="card-body">
                                        <p class="text-alternate mb-4">Wednesday</p>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="First pair" name="1" value="<?=$arrayScheduleDay[3][1]?>">
                                        </div>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="Second pair" name="2" value="<?=$arrayScheduleDay[3][2]?>">
                                        </div>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="Third pair" name="3" value="<?=$arrayScheduleDay[3][3]?>">
                                        </div>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="Fourth pair" name="4" value="<?=$arrayScheduleDay[3][4]?>">
                                        </div>
                                    </div>
                                    <div class="card-footer border-0 pt-0 d-flex justify-content-end align-items-center">
                                        <div>
                                            <button class="btn btn-icon btn-icon-end btn-primary" type="button" onclick="submitForm(3)">
                                                <span>Change</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="cs-icon cs-icon-chevron-right"><path d="M7 4L12.6464 9.64645C12.8417 9.84171 12.8417 10.1583 12.6464 10.3536L7 16"></path></svg>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-2">
                                <form class="card mb-5 tooltip-end-top" id="contactForm4" novalidate="novalidate">
                                    <div class="card-body">
                                        <p class="text-alternate mb-4">Thursday</p>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="First pair" name="1" value="<?=$arrayScheduleDay[4][1]?>">
                                        </div>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="Second pair" name="2" value="<?=$arrayScheduleDay[4][2]?>">
                                        </div>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="Third pair" name="3" value="<?=$arrayScheduleDay[4][3]?>">
                                        </div>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="Fourth pair" name="4" value="<?=$arrayScheduleDay[4][4]?>">
                                        </div>
                                    </div>
                                    <div class="card-footer border-0 pt-0 d-flex justify-content-end align-items-center">
                                        <div>
                                            <button class="btn btn-icon btn-icon-end btn-primary" type="button" onclick="submitForm(4)">
                                                <span>Change</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="cs-icon cs-icon-chevron-right"><path d="M7 4L12.6464 9.64645C12.8417 9.84171 12.8417 10.1583 12.6464 10.3536L7 16"></path></svg>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-2">
                                <form class="card mb-5 tooltip-end-top" id="contactForm5" novalidate="novalidate">
                                    <div class="card-body">
                                        <p class="text-alternate mb-4">Friday</p>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="First pair" name="1" value="<?=$arrayScheduleDay[5][1]?>">
                                        </div>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="Second pair" name="2" value="<?=$arrayScheduleDay[5][2]?>">
                                        </div>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="Third pair" name="3" value="<?=$arrayScheduleDay[5][3]?>">
                                        </div>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="Fourth pair" name="4" value="<?=$arrayScheduleDay[5][4]?>">
                                        </div>
                                    </div>
                                    <div class="card-footer border-0 pt-0 d-flex justify-content-end align-items-center">
                                        <div>
                                            <button class="btn btn-icon btn-icon-end btn-primary" type="button" onclick="submitForm(5)">
                                                <span>Change</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="cs-icon cs-icon-chevron-right"><path d="M7 4L12.6464 9.64645C12.8417 9.84171 12.8417 10.1583 12.6464 10.3536L7 16"></path></svg>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="col-12 col-sm-6 col-lg-2">
                                <form class="card mb-5 tooltip-end-top" id="contactForm6" novalidate="novalidate">
                                    <div class="card-body">
                                        <p class="text-alternate mb-4">Saturday</p>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="First pair" name="1" value="<?=$arrayScheduleDay[6][1]?>">
                                        </div>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="Second pair" name="2" value="<?=$arrayScheduleDay[6][2]?>">
                                        </div>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="Third pair" name="3" value="<?=$arrayScheduleDay[6][3]?>">
                                        </div>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="Fourth pair" name="4" value="<?=$arrayScheduleDay[6][4]?>">
                                        </div>
                                    </div>
                                    <div class="card-footer border-0 pt-0 d-flex justify-content-end align-items-center">
                                        <div>
                                            <button class="btn btn-icon btn-icon-end btn-primary" type="button" onclick="submitForm(6)">
                                                <span>Change</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="cs-icon cs-icon-chevron-right"><path d="M7 4L12.6464 9.64645C12.8417 9.84171 12.8417 10.1583 12.6464 10.3536L7 16"></path></svg>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/JavaScript">
                    function submitForm(num){
                        let url = '../BD/form-management.php'; // здесь указываем адрес PHP файла
                        let formData = $('#contactForm' + num).serialize();
                        console.log(formData);


                        jQuery.ajax({
                            async: false,
                            url: url,
                            method: 'post',
                            dataType: 'json',
                            data: formData
                        });

                        location = url + '?day=' + num + '&' + formData;
                    }
                </script>


                <!-- Permissions Tab End -->

                <!-- About Tab Start -->
                <div class="tab-pane fade" id="aboutTab" role="tabpanel">
                    <h2 class="small-title">About</h2>
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-5">
                                <p class="text-small text-muted mb-2">NAME SURNAME</p>
                                <a href="#" class="d-block body-link mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="cs-icon cs-icon-user"><path d="M10.0179 8C10.9661 8 11.4402 8 11.8802 7.76629C12.1434 7.62648 12.4736 7.32023 12.6328 7.06826C12.8989 6.64708 12.9256 6.29324 12.9789 5.58557C13.0082 5.19763 13.0071 4.81594 12.9751 4.42106C12.9175 3.70801 12.8887 3.35148 12.6289 2.93726C12.4653 2.67644 12.1305 2.36765 11.8573 2.2256C11.4235 2 10.9533 2 10.0129 2V2C9.03627 2 8.54794 2 8.1082 2.23338C7.82774 2.38223 7.49696 2.6954 7.33302 2.96731C7.07596 3.39365 7.05506 3.77571 7.01326 4.53982C6.99635 4.84898 6.99567 5.15116 7.01092 5.45586C7.04931 6.22283 7.06851 6.60631 7.33198 7.03942C7.4922 7.30281 7.8169 7.61166 8.08797 7.75851C8.53371 8 9.02845 8 10.0179 8V8Z"></path><path d="M16.5 17.5L16.583 16.6152C16.7267 15.082 16.7986 14.3154 16.2254 13.2504C16.0456 12.9164 15.5292 12.2901 15.2356 12.0499C14.2994 11.2842 13.7598 11.231 12.6805 11.1245C11.9049 11.048 11.0142 11 10 11C8.98584 11 8.09511 11.048 7.31945 11.1245C6.24021 11.231 5.70059 11.2842 4.76443 12.0499C4.47077 12.2901 3.95441 12.9164 3.77462 13.2504C3.20144 14.3154 3.27331 15.082 3.41705 16.6152L3.5 17.5"></path></svg>
                                    <span class="align-middle"><?=$userName." ".$userSurname?></span>
                                </a>
                            </div>
                            <div class="mb-5">
                                <div class="row g-2">
                                    <div class="col-12 col-sm-6 col-lg-1">
                                        <div class="text-small text-muted mb-1">UNIVERSITY</div>
                                        <div class="cta-3 text-primary"><?=$userUniversity?></div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-1">
                                        <div class="text-small text-muted mb-1">FACULTY</div>
                                        <div class="cta-3 text-primary"><?=$userFaculty?></div>
                                    </div>
                                    <div class="col-12 col-sm-6 col-lg-1">
                                        <div class="text-small text-muted mb-1">SPECIALITY</div>
                                        <div class="cta-3 text-primary"><?=$userSpeciality?></div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <p class="text-small text-muted mb-2">CONTACT</p>
                                <a href="#" class="d-block body-link mb-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="cs-icon cs-icon-phone me-2"><path d="M2.36826 7.02416C2.12342 6.39146 2.25583 5.68011 2.67964 5.15035L4.20309 3.24603C5.07376 2.1577 6.76274 2.27131 7.47982 3.46644L8.7175 5.52926C8.89341 5.82244 8.90734 6.18516 8.75444 6.49097L8.10551 7.78883C8.03608 7.92769 7.99714 8.08102 8.00909 8.2358C8.15117 10.0757 9.92426 11.8487 11.7641 11.9908C11.9189 12.0028 12.0722 11.9638 12.2111 11.8944L13.5089 11.2455C13.8148 11.0926 14.1775 11.1065 14.4707 11.2824L16.5335 12.5201C17.7286 13.2372 17.8422 14.9262 16.7539 15.7968L14.8496 17.3203C14.3198 17.7441 13.6085 17.8765 12.9758 17.6317C7.87716 15.6586 4.34135 12.1228 2.36826 7.02416Z"></path></svg>
                                    <span class="align-middle"> <?=$userPhone?></span>
                                </a>
                                <a href="#" class="d-block body-link">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="cs-icon cs-icon-email me-2"><path d="M18 7L11.5652 10.2174C10.9086 10.5457 10.5802 10.7099 10.2313 10.7505C10.0776 10.7684 9.92238 10.7684 9.76869 10.7505C9.41977 10.7099 9.09143 10.5457 8.43475 10.2174L2 7"></path><path d="M14.5 4C15.9045 4 16.6067 4 17.1111 4.33706C17.3295 4.48298 17.517 4.67048 17.6629 4.88886C18 5.39331 18 6.09554 18 7.5L18 12.5C18 13.9045 18 14.6067 17.6629 15.1111C17.517 15.3295 17.3295 15.517 17.1111 15.6629C16.6067 16 15.9045 16 14.5 16L5.5 16C4.09554 16 3.39331 16 2.88886 15.6629C2.67048 15.517 2.48298 15.3295 2.33706 15.1111C2 14.6067 2 13.9045 2 12.5L2 7.5C2 6.09554 2 5.39331 2.33706 4.88886C2.48298 4.67048 2.67048 4.48298 2.88886 4.33706C3.39331 4 4.09554 4 5.5 4L14.5 4Z"></path></svg>
                                    <span class="align-middle"><?=$userEmail?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- About Tab End -->
            </div>
            <!-- Right Side End -->
        </div>
    </div>
</main>

<? require_once('../template/footer.php'); ?>
