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
                            <a class="nav-link px-0 border-bottom border-separator-light active" data-bs-toggle="tab"
                               href="#overviewTab" role="tab" aria-selected="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 20 20"
                                     fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                     stroke-linejoin="round" class="cs-icon cs-icon-activity me-2">
                                    <path
                                        d="M2 10H4.82798C5.04879 10 5.24345 10.1448 5.3069 10.3563L7.10654 16.3551C7.25028 16.8343 7.93071 16.8287 8.06664 16.3473L11.905 2.75299C12.0432 2.26379 12.7384 2.26886 12.8693 2.76003L14.701 9.62883C14.7594 9.84771 14.9576 10 15.1841 10H18"></path>
                                </svg>
                                <span class="align-middle">Overview</span>
                            </a>
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
                            <a class="nav-link px-0 border-bottom border-separator-light" data-bs-toggle="tab"
                               href="#friendsTab" role="tab" aria-selected="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 20 20"
                                     fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                     stroke-linejoin="round" class="cs-icon cs-icon-heart me-2">
                                    <path
                                        d="M8.76342 3.53821L9.38606 4.02249C9.74717 4.30335 10.2528 4.30335 10.6139 4.02249L11.2366 3.53822C13.0089 2.15977 15.5753 2.55317 16.8533 4.39919C18.1181 6.22616 17.9917 8.67633 16.5456 10.3635L10.7593 17.1142C10.3602 17.5798 9.63984 17.5798 9.24074 17.1142L3.45439 10.3635C2.00828 8.67633 1.88189 6.22616 3.14672 4.39919C4.42473 2.55317 6.99113 2.15977 8.76342 3.53821Z"></path>
                                </svg>
                                <span class="align-middle">Friends</span>
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
                <!-- Overview Tab Start -->
                <div class="tab-pane fade active show" id="overviewTab" role="tabpanel">
                    <!-- Stats Start -->
                    <h2 class="small-title">Stats</h2>

                    <div class="mb-5">
                        <div class="row g-2">
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="card hover-border-primary">
                                    <div class="card-body">
                                        <div class="heading mb-0 d-flex justify-content-between lh-1-25 mb-3">
                                            <span>Projects</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                 viewBox="0 0 20 20" fill="none" stroke="currentColor"
                                                 stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                                 class="cs-icon cs-icon-suitcase text-primary">
                                                <path
                                                    d="M14.5 5C15.9045 5 16.6067 5 17.1111 5.33706C17.3295 5.48298 17.517 5.67048 17.6629 5.88886C18 6.39331 18 7.09554 18 8.5L18 14.5C18 15.9045 18 16.6067 17.6629 17.1111C17.517 17.3295 17.3295 17.517 17.1111 17.6629C16.6067 18 15.9045 18 14.5 18L5.5 18C4.09554 18 3.39331 18 2.88886 17.6629C2.67048 17.517 2.48298 17.3295 2.33706 17.1111C2 16.6067 2 15.9045 2 14.5L2 8.5C2 7.09554 2 6.39331 2.33706 5.88886C2.48298 5.67048 2.67048 5.48298 2.88886 5.33706C3.39331 5 4.09554 5 5.5 5L14.5 5Z"></path>
                                                <path
                                                    d="M14 5L13.9424 4.74074C13.6934 3.62043 13.569 3.06028 13.225 2.67266C13.0751 2.50368 12.8977 2.36133 12.7002 2.25164C12.2472 2 11.6734 2 10.5257 2L9.47427 2C8.32663 2 7.75281 2 7.29981 2.25164C7.10234 2.36133 6.92488 2.50368 6.77496 2.67266C6.43105 3.06028 6.30657 3.62044 6.05761 4.74074L6 5"></path>
                                                <path
                                                    d="M18 9L11.855 12.8406C11.0846 13.3221 10.6994 13.5629 10.2784 13.622C10.0937 13.648 9.90629 13.648 9.72161 13.622C9.30056 13.5629 8.91537 13.3221 8.145 12.8406L2 9"></path>
                                                <path d="M11 9H10H9"></path>
                                            </svg>
                                        </div>
                                        <div class="text-small text-muted mb-1">ACTIVE</div>
                                        <div class="cta-1 text-primary">14</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="card hover-border-primary">
                                    <div class="card-body">
                                        <div class="heading mb-0 d-flex justify-content-between lh-1-25 mb-3">
                                            <span>Tasks</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                 viewBox="0 0 20 20" fill="none" stroke="currentColor"
                                                 stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                                 class="cs-icon cs-icon-check-square text-primary">
                                                <path
                                                    d="M17 5L10.6329 12.2032C10.2511 12.6351 9.58418 12.6556 9.17656 12.248L6.92857 10"></path>
                                                <path
                                                    d="M11 2L5.5 2C4.09554 2 3.39331 2 2.88886 2.33706C2.67048 2.48298 2.48298 2.67048 2.33706 2.88886C2 3.39331 2 4.09554 2 5.5L2 14.5C2 15.9045 2 16.6067 2.33706 17.1111C2.48298 17.3295 2.67048 17.517 2.88886 17.6629C3.39331 18 4.09554 18 5.5 18L14.5 18C15.9045 18 16.6067 18 17.1111 17.6629C17.3295 17.517 17.517 17.3295 17.6629 17.1111C18 16.6067 18 15.9045 18 14.5L18 11"></path>
                                            </svg>
                                        </div>
                                        <div class="text-small text-muted mb-1">PENDING</div>
                                        <div class="cta-1 text-primary">153</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="card hover-border-primary">
                                    <div class="card-body">
                                        <div class="heading mb-0 d-flex justify-content-between lh-1-25 mb-3">
                                            <span>Notes</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                 viewBox="0 0 20 20" fill="none" stroke="currentColor"
                                                 stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                                 class="cs-icon cs-icon-file-empty text-primary">
                                                <path
                                                    d="M6.5 18H13.5C14.9045 18 15.6067 18 16.1111 17.6629C16.3295 17.517 16.517 17.3295 16.6629 17.1111C17 16.6067 17 15.9045 17 14.5V7.44975C17 6.83775 17 6.53175 16.9139 6.24786C16.8759 6.12249 16.8256 6.00117 16.7638 5.88563C16.624 5.62399 16.4076 5.40762 15.9749 4.97487L14.0251 3.02513L14.0251 3.02512C13.5924 2.59238 13.376 2.37601 13.1144 2.23616C12.9988 2.1744 12.8775 2.12415 12.7521 2.08612C12.4682 2 12.1622 2 11.5503 2H6.5C5.09554 2 4.39331 2 3.88886 2.33706C3.67048 2.48298 3.48298 2.67048 3.33706 2.88886C3 3.39331 3 4.09554 3 5.5V14.5C3 15.9045 3 16.6067 3.33706 17.1111C3.48298 17.3295 3.67048 17.517 3.88886 17.6629C4.39331 18 5.09554 18 6.5 18Z"></path>
                                            </svg>
                                        </div>
                                        <div class="text-small text-muted mb-1">RECENT</div>
                                        <div class="cta-1 text-primary">24</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="card hover-border-primary">
                                    <div class="card-body">
                                        <div class="heading mb-0 d-flex justify-content-between lh-1-25 mb-3">
                                            <span>Views</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                 viewBox="0 0 20 20" fill="none" stroke="currentColor"
                                                 stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                                 class="cs-icon cs-icon-screen text-primary">
                                                <path d="M10 15V16V18M8 18H12"></path>
                                                <path
                                                    d="M14.5 2C15.9045 2 16.6067 2 17.1111 2.33706C17.3295 2.48298 17.517 2.67048 17.6629 2.88886C18 3.39331 18 4.09554 18 5.5L18 11.5C18 12.9045 18 13.6067 17.6629 14.1111C17.517 14.3295 17.3295 14.517 17.1111 14.6629C16.6067 15 15.9045 15 14.5 15L5.5 15C4.09554 15 3.39331 15 2.88886 14.6629C2.67048 14.517 2.48298 14.3295 2.33706 14.1111C2 13.6067 2 12.9045 2 11.5L2 5.5C2 4.09554 2 3.39331 2.33706 2.88886C2.48298 2.67048 2.67048 2.48298 2.88886 2.33706C3.39331 2 4.09554 2 5.5 2L14.5 2Z"></path>
                                                <path d="M9 7 7 10M13.2412 7 11.2412 10"></path>
                                            </svg>
                                        </div>
                                        <div class="text-small text-muted mb-1">THIS MONTH</div>
                                        <div class="cta-1 text-primary">524</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Stats End -->

                    <!-- Logs Start -->
                    <h2 class="small-title">Logs</h2>

                    <div class="card">
                        <div class="card-body mb-n2">
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div
                                        class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                        <div class="sh-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                 viewBox="0 0 20 20" fill="none" stroke="currentColor"
                                                 stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                                 class="cs-icon cs-icon-circle text-primary align-top">
                                                <circle cx="10" cy="10" r="7"></circle>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div
                                        class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                        <div class="d-flex flex-column">
                                            <div class="text-alternate mt-n1 lh-1-25">New user registiration</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                        <div class="text-muted ms-2 mt-n1 lh-1-25">18 Dec</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div
                                        class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                        <div class="sh-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                 viewBox="0 0 20 20" fill="none" stroke="currentColor"
                                                 stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                                 class="cs-icon cs-icon-circle text-primary align-top">
                                                <circle cx="10" cy="10" r="7"></circle>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div
                                        class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                        <div class="d-flex flex-column">
                                            <div class="text-alternate mt-n1 lh-1-25">3 new product added</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                        <div class="text-muted ms-2 mt-n1 lh-1-25">18 Dec</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div
                                        class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                        <div class="sh-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                 viewBox="0 0 20 20" fill="none" stroke="currentColor"
                                                 stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                                 class="cs-icon cs-icon-square text-secondary align-top">
                                                <path
                                                    d="M13.5 3C14.9045 3 15.6067 3 16.1111 3.33706C16.3295 3.48298 16.517 3.67048 16.6629 3.88886C17 4.39331 17 5.09554 17 6.5L17 13.5C17 14.9045 17 15.6067 16.6629 16.1111C16.517 16.3295 16.3295 16.517 16.1111 16.6629C15.6067 17 14.9045 17 13.5 17L6.5 17C5.09554 17 4.39331 17 3.88886 16.6629C3.67048 16.517 3.48298 16.3295 3.33706 16.1111C3 15.6067 3 14.9045 3 13.5L3 6.5C3 5.09554 3 4.39331 3.33706 3.88886C3.48298 3.67048 3.67048 3.48298 3.88886 3.33706C4.39331 3 5.09554 3 6.5 3L13.5 3Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div
                                        class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                        <div class="d-flex flex-column">
                                            <div class="text-alternate mt-n1 lh-1-25">
                                                Product out of stock:
                                                <a href="#" class="alternate-link underline-link">Breadstick</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                        <div class="text-muted ms-2 mt-n1 lh-1-25">16 Dec</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div
                                        class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                        <div class="sh-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                 viewBox="0 0 20 20" fill="none" stroke="currentColor"
                                                 stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                                 class="cs-icon cs-icon-square text-secondary align-top">
                                                <path
                                                    d="M13.5 3C14.9045 3 15.6067 3 16.1111 3.33706C16.3295 3.48298 16.517 3.67048 16.6629 3.88886C17 4.39331 17 5.09554 17 6.5L17 13.5C17 14.9045 17 15.6067 16.6629 16.1111C16.517 16.3295 16.3295 16.517 16.1111 16.6629C15.6067 17 14.9045 17 13.5 17L6.5 17C5.09554 17 4.39331 17 3.88886 16.6629C3.67048 16.517 3.48298 16.3295 3.33706 16.1111C3 15.6067 3 14.9045 3 13.5L3 6.5C3 5.09554 3 4.39331 3.33706 3.88886C3.48298 3.67048 3.67048 3.48298 3.88886 3.33706C4.39331 3 5.09554 3 6.5 3L13.5 3Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div
                                        class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                        <div class="d-flex flex-column">
                                            <div class="text-alternate mt-n1 lh-1-25">Category page returned an error
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                        <div class="text-muted ms-2 mt-n1 lh-1-25">15 Dec</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div
                                        class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                        <div class="sh-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                 viewBox="0 0 20 20" fill="none" stroke="currentColor"
                                                 stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                                 class="cs-icon cs-icon-circle text-primary align-top">
                                                <circle cx="10" cy="10" r="7"></circle>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div
                                        class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                        <div class="d-flex flex-column">
                                            <div class="text-alternate mt-n1 lh-1-25">14 products added</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                        <div class="text-muted ms-2 mt-n1 lh-1-25">15 Dec</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div
                                        class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                        <div class="sh-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                 viewBox="0 0 20 20" fill="none" stroke="currentColor"
                                                 stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                                 class="cs-icon cs-icon-hexagon text-tertiary align-top">
                                                <path
                                                    d="M9 2.57735C9.6188 2.22008 10.3812 2.22008 11 2.57735L15.9282 5.42265C16.547 5.77992 16.9282 6.44017 16.9282 7.1547V12.8453C16.9282 13.5598 16.547 14.2201 15.9282 14.5774L11 17.4226C10.3812 17.7799 9.6188 17.7799 9 17.4226L4.0718 14.5774C3.45299 14.2201 3.0718 13.5598 3.0718 12.8453V7.1547C3.0718 6.44017 3.45299 5.77992 4.0718 5.42265L9 2.57735Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div
                                        class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                        <div class="d-flex flex-column">
                                            <div class="text-alternate mt-n1 lh-1-25">
                                                New sale:
                                                <a href="#" class="alternate-link underline-link">Steirer Brot</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                        <div class="text-muted ms-2 mt-n1 lh-1-25">15 Dec</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div
                                        class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                        <div class="sh-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                 viewBox="0 0 20 20" fill="none" stroke="currentColor"
                                                 stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                                 class="cs-icon cs-icon-hexagon text-tertiary align-top">
                                                <path
                                                    d="M9 2.57735C9.6188 2.22008 10.3812 2.22008 11 2.57735L15.9282 5.42265C16.547 5.77992 16.9282 6.44017 16.9282 7.1547V12.8453C16.9282 13.5598 16.547 14.2201 15.9282 14.5774L11 17.4226C10.3812 17.7799 9.6188 17.7799 9 17.4226L4.0718 14.5774C3.45299 14.2201 3.0718 13.5598 3.0718 12.8453V7.1547C3.0718 6.44017 3.45299 5.77992 4.0718 5.42265L9 2.57735Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div
                                        class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                        <div class="d-flex flex-column">
                                            <div class="text-alternate mt-n1 lh-1-25">
                                                New sale:
                                                <a href="#" class="alternate-link underline-link">Soda Bread</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                        <div class="text-muted ms-2 mt-n1 lh-1-25">15 Dec</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div
                                        class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                        <div class="sh-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                 viewBox="0 0 20 20" fill="none" stroke="currentColor"
                                                 stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                                 class="cs-icon cs-icon-triangle text-warning align-top">
                                                <path
                                                    d="M8.49441 3.95707C9.14861 2.68098 10.8514 2.68098 11.5056 3.95706L16.7832 14.2516C17.4163 15.4864 16.5871 17 15.2776 17H4.72238C3.41289 17 2.58375 15.4864 3.21679 14.2516L8.49441 3.95707Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div
                                        class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                        <div class="d-flex flex-column">
                                            <div class="text-alternate mt-n1 lh-1-25">Recived a support ticket</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                        <div class="text-muted ms-2 mt-n1 lh-1-25">14 Dec</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0">
                                <div class="col-auto">
                                    <div
                                        class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                                        <div class="sh-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                 viewBox="0 0 20 20" fill="none" stroke="currentColor"
                                                 stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                                 class="cs-icon cs-icon-hexagon text-tertiary align-top">
                                                <path
                                                    d="M9 2.57735C9.6188 2.22008 10.3812 2.22008 11 2.57735L15.9282 5.42265C16.547 5.77992 16.9282 6.44017 16.9282 7.1547V12.8453C16.9282 13.5598 16.547 14.2201 15.9282 14.5774L11 17.4226C10.3812 17.7799 9.6188 17.7799 9 17.4226L4.0718 14.5774C3.45299 14.2201 3.0718 13.5598 3.0718 12.8453V7.1547C3.0718 6.44017 3.45299 5.77992 4.0718 5.42265L9 2.57735Z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div
                                        class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                        <div class="d-flex flex-column">
                                            <div class="text-alternate mt-n1 lh-1-25">
                                                New sale:
                                                <a href="#" class="alternate-link underline-link">Cholermüs</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                        <div class="text-muted ms-2 mt-n1 lh-1-25">13 Dec</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Logs End -->
                </div>
                <!-- Overview Tab End -->

                <!-- Projects Tab Start -->
                <div class="tab-pane fade" id="projectsTab" role="tabpanel">
                    <h2 class="small-title">Users</h2>

                    <!-- Projects Content Start -->

                    <!-- Projects Content End -->
                </div>
                <!-- Projects Tab End -->

                <!-- Permissions Tab Start -->
                <div class="tab-pane fade" id="permissionsTab" role="tabpanel">
                    <h2 class="small-title">Permissions</h2>
                    <div class="mb-5">
                        <div class="row g-2">
                            <div class="col-12 col-sm-6 col-lg-2">
                                <form class="card mb-5 tooltip-end-top" id="contactForm1" novalidate="novalidate">
                                    <div class="card-body">
                                        <p class="text-alternate mb-4">Monday</p>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="First pair" name="1-1">
                                        </div>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="Second pair" name="1-2">
                                        </div>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="Third pair" name="1-3">
                                        </div>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="Fourth pair" name="1-4">
                                        </div>
                                    </div>
                                    <div class="card-footer border-0 pt-0 d-flex justify-content-end align-items-center">
                                        <div>
                                            <button class="btn btn-icon btn-icon-end btn-primary" type="submit">
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
                                            <input class="form-control" placeholder="First pair" name="2-1">
                                        </div>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="Second pair" name="2-2">
                                        </div>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="Third pair" name="2-3">
                                        </div>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="Fourth pair" name="2-4">
                                        </div>
                                    </div>
                                    <div class="card-footer border-0 pt-0 d-flex justify-content-end align-items-center">
                                        <div>
                                            <button class="btn btn-icon btn-icon-end btn-primary" type="submit">
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
                                            <input class="form-control" placeholder="First pair" name="3-1">
                                        </div>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="Second pair" name="3-2">
                                        </div>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="Third pair" name="3-3">
                                        </div>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="Fourth pair" name="3-4">
                                        </div>
                                    </div>
                                    <div class="card-footer border-0 pt-0 d-flex justify-content-end align-items-center">
                                        <div>
                                            <button class="btn btn-icon btn-icon-end btn-primary" type="submit">
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
                                            <input class="form-control" placeholder="First pair" name="4-1">
                                        </div>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="Second pair" name="4-2">
                                        </div>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="Third pair" name="4-3">
                                        </div>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="Fourth pair" name="4-4">
                                        </div>
                                    </div>
                                    <div class="card-footer border-0 pt-0 d-flex justify-content-end align-items-center">
                                        <div>
                                            <button class="btn btn-icon btn-icon-end btn-primary" type="submit">
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
                                            <input class="form-control" placeholder="First pair" name="5-1">
                                        </div>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="Second pair" name="5-2">
                                        </div>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="Third pair" name="5-3">
                                        </div>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="Fourth pair" name="5-4">
                                        </div>
                                    </div>
                                    <div class="card-footer border-0 pt-0 d-flex justify-content-end align-items-center">
                                        <div>
                                            <button class="btn btn-icon btn-icon-end btn-primary" type="submit">
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
                                            <input class="form-control" placeholder="First pair" name="6-1">
                                        </div>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="Second pair" name="6-2">
                                        </div>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="Third pair" name="6-3">
                                        </div>
                                        <div class="mb-3 filled">
                                            <input class="form-control" placeholder="Fourth pair" name="6-4">
                                        </div>
                                    </div>
                                    <div class="card-footer border-0 pt-0 d-flex justify-content-end align-items-center">
                                        <div>
                                            <button class="btn btn-icon btn-icon-end btn-primary" type="submit">
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
                <!-- Permissions Tab End -->

                <!-- Friends Tab Start -->
                <div class="tab-pane fade" id="friendsTab" role="tabpanel">
                    <h2 class="small-title">Friends</h2>

                    <div class="row row-cols-1 row-cols-md-2 row-cols-xxl-3 g-2 mb-5">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-0 sh-6">
                                        <div class="col-auto">
                                            <img src="img/profile/profile-1.jpg" class="card-img rounded-xl sh-6 sw-6"
                                                 alt="thumb">
                                        </div>
                                        <div class="col">
                                            <div
                                                class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                <div class="d-flex flex-column">
                                                    <div><?=$userName." ".$userSurname?></div>
                                                    <div class="text-small text-muted">Project Manager</div>
                                                </div>
                                                <div class="d-flex">
                                                    <button type="button" class="btn btn-outline-primary btn-sm ms-1">
                                                        Follow
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-0 sh-6">
                                        <div class="col-auto">
                                            <img src="img/profile/profile-4.jpg" class="card-img rounded-xl sh-6 sw-6"
                                                 alt="thumb">
                                        </div>
                                        <div class="col">
                                            <div
                                                class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                <div class="d-flex flex-column">
                                                    <div>Cherish Kerr</div>
                                                    <div class="text-small text-muted">Development Lead</div>
                                                </div>
                                                <div class="d-flex">
                                                    <button type="button" class="btn btn-outline-primary btn-sm ms-1">
                                                        Follow
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-0 sh-6">
                                        <div class="col-auto">
                                            <img src="img/profile/profile-8.jpg" class="card-img rounded-xl sh-6 sw-6"
                                                 alt="thumb">
                                        </div>
                                        <div class="col">
                                            <div
                                                class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                <div class="d-flex flex-column">
                                                    <div>Kirby Peters</div>
                                                    <div class="text-small text-muted">Accounting</div>
                                                </div>
                                                <div class="d-flex">
                                                    <button type="button" class="btn btn-outline-primary btn-sm ms-1">
                                                        Follow
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-0 sh-6">
                                        <div class="col-auto">
                                            <img src="img/profile/profile-5.jpg" class="card-img rounded-xl sh-6 sw-6"
                                                 alt="thumb">
                                        </div>
                                        <div class="col">
                                            <div
                                                class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                <div class="d-flex flex-column">
                                                    <div>Olli Hawkins</div>
                                                    <div class="text-small text-muted">Client Relations Lead</div>
                                                </div>
                                                <div class="d-flex">
                                                    <button type="button" class="btn btn-outline-primary btn-sm ms-1">
                                                        Follow
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-0 sh-6">
                                        <div class="col-auto">
                                            <img src="img/profile/profile-2.jpg" class="card-img rounded-xl sh-6 sw-6"
                                                 alt="thumb">
                                        </div>
                                        <div class="col">
                                            <div
                                                class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                <div class="d-flex flex-column">
                                                    <div>Zayn Hartley</div>
                                                    <div class="text-small text-muted">Customer Engagement</div>
                                                </div>
                                                <div class="d-flex">
                                                    <button type="button" class="btn btn-outline-primary btn-sm ms-1">
                                                        Follow
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-0 sh-6">
                                        <div class="col-auto">
                                            <img src="img/profile/profile-3.jpg" class="card-img rounded-xl sh-6 sw-6"
                                                 alt="thumb">
                                        </div>
                                        <div class="col">
                                            <div
                                                class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                <div class="d-flex flex-column">
                                                    <div>Esperanza Lodge</div>
                                                    <div class="text-small text-muted">UX Designer</div>
                                                </div>
                                                <div class="d-flex">
                                                    <button type="button" class="btn btn-outline-primary btn-sm ms-1">
                                                        Follow
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-0 sh-6">
                                        <div class="col-auto">
                                            <img src="img/profile/profile-4.jpg" class="card-img rounded-xl sh-6 sw-6"
                                                 alt="thumb">
                                        </div>
                                        <div class="col">
                                            <div
                                                class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                <div class="d-flex flex-column">
                                                    <div>Kerr Jackson</div>
                                                    <div class="text-small text-muted">Frontend Developer</div>
                                                </div>
                                                <div class="d-flex">
                                                    <button type="button" class="btn btn-outline-primary btn-sm ms-1">
                                                        Follow
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-0 sh-6">
                                        <div class="col-auto">
                                            <img src="img/profile/profile-6.jpg" class="card-img rounded-xl sh-6 sw-6"
                                                 alt="thumb">
                                        </div>
                                        <div class="col">
                                            <div
                                                class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                <div class="d-flex flex-column">
                                                    <div>Kathryn Mengel</div>
                                                    <div class="text-small text-muted">Team Leader</div>
                                                </div>
                                                <div class="d-flex">
                                                    <button type="button" class="btn btn-outline-primary btn-sm ms-1">
                                                        Follow
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-0 sh-6">
                                        <div class="col-auto">
                                            <img src="img/profile/profile-6.jpg" class="card-img rounded-xl sh-6 sw-6"
                                                 alt="thumb">
                                        </div>
                                        <div class="col">
                                            <div
                                                class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                <div class="d-flex flex-column">
                                                    <div>Joisse Kaycee</div>
                                                    <div class="text-small text-muted">Copywriter</div>
                                                </div>
                                                <div class="d-flex">
                                                    <button type="button" class="btn btn-outline-primary btn-sm ms-1">
                                                        Follow
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row g-0 sh-6">
                                        <div class="col-auto">
                                            <img src="../template/img/profile/profile-7.jpg" class="card-img rounded-xl sh-6 sw-6"
                                                 alt="thumb">
                                        </div>
                                        <div class="col">
                                            <div
                                                class="card-body d-flex flex-row pt-0 pb-0 ps-3 pe-0 h-100 align-items-center justify-content-between">
                                                <div class="d-flex flex-column">
                                                    <div>Zayn Hartley</div>
                                                    <div class="text-small text-muted">Visual Effect Designer</div>
                                                </div>
                                                <div class="d-flex">
                                                    <button type="button" class="btn btn-outline-primary btn-sm ms-1">
                                                        Follow
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
                <!-- Friends Tab End -->

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
