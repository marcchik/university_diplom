<? require_once('../template/header.php'); ?>

<?

// получаем данные о профиле пользователя из JSON файла
$ourData = file_get_contents("../BD/JSON/data.json");

// Преобразуем в массив
$arrayUsersBD = json_decode($ourData, true);

//id пользователя
$ID = $_REQUEST['id'];

foreach ($arrayUsersBD as $key => $item) {

    if (strcasecmp($key, $ID) == 0) {
        $userName = $item['contactName'];
        $userEmail = $item['contactEmail'];
        $userUniversity = $item['university'];
        $userFaculty = $item['faculty'];
        $userSpeciality = $item['speciality'];
    }
}

// получаем данные о успеваемости из JSON файла
$ourData = file_get_contents("../BD/JSON/userInfo.json");

// Преобразуем в массив
$arrayStatBD = json_decode($ourData, true);

//сделано лаб
$doneLab = 0;

foreach($arrayStatBD[$ID] as $pairName => $item) {
    $doneLab += $item;
}


// получаем данные о предметах из JSON файла
$ourData = file_get_contents("../BD/JSON/subject.json");

// Преобразуем в массив
$arraySubjectBD = json_decode($ourData, true);

//всего лаб
$totalLab = 0;
//всего лекций
$totalLecture = 0;

foreach($arraySubjectBD as $subjectItem) {
    $totalLab += $subjectItem['lab'];
    $totalLecture += $subjectItem['lecture'];
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
                            <li class="breadcrumb-item"><a href="/orderLab">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item"><a href="#">Profile</a></li>
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
                                    <img src="../template/img/profile/profile.jpg" class="img-fluid rounded-xl"
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
                                <span class="align-middle">Score</span>
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
                                            <span>Total lab</span>
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
                                        <div class="cta-1 text-primary"><?=$totalLab?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="card hover-border-primary">
                                    <div class="card-body">
                                        <div class="heading mb-0 d-flex justify-content-between lh-1-25 mb-3">
                                            <span>Done</span>
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
                                        <div class="cta-1 text-primary"><?=$doneLab?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="card hover-border-primary">
                                    <div class="card-body">
                                        <div class="heading mb-0 d-flex justify-content-between lh-1-25 mb-3">
                                            <span>Need to do</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                 viewBox="0 0 20 20" fill="none" stroke="currentColor"
                                                 stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                                 class="cs-icon cs-icon-file-empty text-primary">
                                                <path
                                                    d="M6.5 18H13.5C14.9045 18 15.6067 18 16.1111 17.6629C16.3295 17.517 16.517 17.3295 16.6629 17.1111C17 16.6067 17 15.9045 17 14.5V7.44975C17 6.83775 17 6.53175 16.9139 6.24786C16.8759 6.12249 16.8256 6.00117 16.7638 5.88563C16.624 5.62399 16.4076 5.40762 15.9749 4.97487L14.0251 3.02513L14.0251 3.02512C13.5924 2.59238 13.376 2.37601 13.1144 2.23616C12.9988 2.1744 12.8775 2.12415 12.7521 2.08612C12.4682 2 12.1622 2 11.5503 2H6.5C5.09554 2 4.39331 2 3.88886 2.33706C3.67048 2.48298 3.48298 2.67048 3.33706 2.88886C3 3.39331 3 4.09554 3 5.5V14.5C3 15.9045 3 16.6067 3.33706 17.1111C3.48298 17.3295 3.67048 17.517 3.88886 17.6629C4.39331 18 5.09554 18 6.5 18Z"></path>
                                            </svg>
                                        </div>
                                        <div class="text-small text-muted mb-1">RECENT</div>
                                        <div class="cta-1 text-primary"><?=$totalLab - $doneLab?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="card hover-border-primary">
                                    <div class="card-body">
                                        <div class="heading mb-0 d-flex justify-content-between lh-1-25 mb-3">
                                            <span>Your progress</span>
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
                                        <div class="text-small text-muted mb-1">THIS TERM</div>
                                        <div class="cta-1 text-primary"><?=round($doneLab/($totalLab * 0.01))?>% completed</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Stats End -->

                    <!-- Logs Start -->
                    <h2 class="small-title">Subject</h2>

                    <div class="card">
                        <div class="card-body mb-n2">
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div
                                        class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">

                                    </div>
                                </div>
                                <div class="col">
                                    <div
                                        class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                        <div class="d-flex flex-column">
                                            <div class="text-alternate mt-n1 lh-1-25">Name</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                        <div class="text-muted ms-2 mt-n1 lh-1-25">All lab</div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                        <div class="text-muted ms-2 mt-n1 lh-1-25">All lecture</div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <? foreach($arraySubjectBD as $subjectItem) : ?>
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
                                                <div class="text-alternate mt-n1 lh-1-25"><?=$subjectItem['name']?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                            <div class="text-muted ms-2 mt-n1 lh-1-25"><?=$subjectItem['lab']?></div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                            <div class="text-muted ms-2 mt-n1 lh-1-25"><?=$subjectItem['lecture']?></div>
                                        </div>
                                    </div>
                                </div>
                            <? endforeach;?>
                            <hr>
                            <div class="row g-0 mb-2">
                                <div class="col-auto">
                                    <div
                                        class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">

                                    </div>
                                </div>
                                <div class="col">
                                    <div
                                        class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                                        <div class="d-flex flex-column">
                                            <div class="text-alternate mt-n1 lh-1-25">All</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                        <div class="text-muted ms-2 mt-n1 lh-1-25"><?=$totalLab?></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                                        <div class="text-muted ms-2 mt-n1 lh-1-25"><?=$totalLecture?></div>
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
                    <h2 class="small-title">Score</h2>

                    <div class="row mb-3">
                        <form class="tooltip-end-top" method="post" action="index.php" id="reservationForm" novalidate>
                            <div class="card h-100">
                                <div class="card-body">
                                    <p class="text-alternate mb-4">Your achievements!</p>
                                    <div class="row g-3">
                                        <div class="col-md-4">
                                            <div class="mb-3 top-label">
                                                <select class="form-control" data-width="100%" name="subject" id="reservationRoom">
                                                    <option label="&nbsp;"></option>
                                                    <? foreach($arraySubjectBD as $idSubject => $subjectItem) : ?>
                                                        <option value="<?=$idSubject?>"><?=$subjectItem['name']?></option>
                                                    <? endforeach; ?>
                                                </select>
                                                <span>SUBJECT</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3 top-label">
                                                <select class="form-control" data-width="100%" name="number" id="reservationAdults">
                                                    <option label="&nbsp;"></option>
                                                    <? for($i = 1; $i < 17; $i++) : ?>
                                                        <option value="<?=$i?>"><?=$i?></option>
                                                    <? endfor; ?>
                                                </select>
                                                <span>NUMBER</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 ">
                                            <input class="btn btn-primary mb-1 mt-2" type="submit" value="Submit" onclick="submitForm()">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>

                    <script type="text/JavaScript">
                        function submitForm(){
                            let url = '../BD/FORM/form-profile.php'; // здесь указываем адрес PHP файла
                            let formData = $('.tooltip-end-top').serialize();
                            console.log(formData);


                            jQuery.ajax({
                                async: false,
                                url: url,
                                method: 'post',
                                dataType: 'json',
                                data: formData
                            });

                            location = url + '?id=<?=$_REQUEST['id']?>&' + formData;
                        }
                    </script>
                    <!-- Projects Content Start -->
                    <div class="row row-cols-1 row-cols-sm-2 g-2">
                        <? foreach($arrayStatBD[$ID] as $pairID => $item) :?>
                            <div class="col">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <h6 class="heading mb-3">
                                            <a href="#" class="stretched-link">
                                            <span class="clamp-line sh-5" data-line="2"
                                                  style="overflow: hidden; text-overflow: ellipsis; -webkit-box-orient: vertical; display: -webkit-box; -webkit-line-clamp: 2;">
                                               <?=$arraySubjectBD[$pairID]['name']?>
                                            </span>
                                            </a>
                                        </h6>

                                        <div>
                                            <div class="mb-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                                     viewBox="0 0 20 20" fill="none" stroke="currentColor"
                                                     stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                                     class="cs-icon cs-icon-diagram-2 text-muted me-2">
                                                    <path
                                                        d="M12 4.28988C14.8915 5.15043 17 7.82898 17 11 17 11.3965 16.967 11.7852 16.9037 12.1637M3.07089 12C3.02417 11.6734 3 11.3395 3 11 3 7.82898 5.10851 5.15043 8 4.28988M4.90441 15.7995C6.18092 17.1543 7.99169 18 10 18 11.6695 18 13.2024 17.4156 14.4054 16.4402 14.5768 16.3012 14.7415 16.1543 14.899 16M8 4C8 2.89543 8.89543 2 10 2V2C11.1046 2 12 2.89543 12 4V4C12 5.10457 11.1046 6 10 6V6C8.89543 6 8 5.10457 8 4V4z"></path>
                                                    <path
                                                        d="M14 14C14 12.8954 14.8954 12 16 12V12C17.1046 12 18 12.8954 18 14V14C18 15.1046 17.1046 16 16 16V16C14.8954 16 14 15.1046 14 14V14zM2 14C2 12.8954 2.89543 12 4 12V12C5.10457 12 6 12.8954 6 14V14C6 15.1046 5.10457 16 4 16V16C2.89543 16 2 15.1046 2 14V14z"></path>
                                                </svg>
                                                <span class="align-middle text-alternate">All: <?=$arraySubjectBD[$pairID]['lab']?></span>
                                            </div>
                                            <div class="mb-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                                     viewBox="0 0 20 20" fill="none" stroke="currentColor"
                                                     stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                                     class="cs-icon cs-icon-trend-up text-muted me-2">
                                                    <path
                                                        d="M17.8636 5L11.2453 11.6183C10.4771 12.3865 9.23606 12.401 8.45017 11.6508L8.27708 11.4856C7.49119 10.7354 6.25016 10.7498 5.48192 11.5181L2 15"></path>
                                                    <path d="M14 5H18V9"></path>
                                                </svg>
                                                <span class="align-middle text-alternate">Not done: <?=($arraySubjectBD[$pairID]['lab'] - $item)?></span>
                                            </div>
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17"
                                                     viewBox="0 0 20 20" fill="none" stroke="currentColor"
                                                     stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"
                                                     class="cs-icon cs-icon-check-square text-muted me-2">
                                                    <path
                                                        d="M17 5L10.6329 12.2032C10.2511 12.6351 9.58418 12.6556 9.17656 12.248L6.92857 10"></path>
                                                    <path
                                                        d="M11 2L5.5 2C4.09554 2 3.39331 2 2.88886 2.33706C2.67048 2.48298 2.48298 2.67048 2.33706 2.88886C2 3.39331 2 4.09554 2 5.5L2 14.5C2 15.9045 2 16.6067 2.33706 17.1111C2.48298 17.3295 2.67048 17.517 2.88886 17.6629C3.39331 18 4.09554 18 5.5 18L14.5 18C15.9045 18 16.6067 18 17.1111 17.6629C17.3295 17.517 17.517 17.3295 17.6629 17.1111C18 16.6067 18 15.9045 18 14.5L18 11"></path>
                                                </svg>
                                                <span class="align-middle text-alternate">Completed: <?=$item?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <? endforeach; ?>
                    </div>
                    <!-- Projects Content End -->
                </div>
                <!-- Projects Tab End -->

                <!-- Permissions Tab Start -->
                <div class="tab-pane fade" id="permissionsTab" role="tabpanel">
                    <h2 class="small-title">Schedule</h2>

                    <div class="row row-cols-1 g-2">
                        <section class="scroll-section" id="embed">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-xl-4 col-xxl-3">
                                    <div class="card mb-5">
                                        <div class="card-body">
                                            <div id="datePickerEmbed">
                                                <div class="datepicker datepicker-inline">
                                                    <div class="datepicker-days" style="">
                                                        <table class="table-condensed">
                                                            <thead>
                                                            <tr>
                                                                <th colspan="7" class="datepicker-title"
                                                                    style="display: none;"></th>
                                                            </tr>
                                                            <tr>
                                                                <th class="prev"><i class="cs-chevron-left"></i></th>
                                                                <th colspan="5" class="datepicker-switch">March 2022
                                                                </th>
                                                                <th class="next"><i class="cs-chevron-right"></i></th>
                                                            </tr>
                                                            <tr>
                                                                <th class="dow">Su</th>
                                                                <th class="dow">Mo</th>
                                                                <th class="dow">Tu</th>
                                                                <th class="dow">We</th>
                                                                <th class="dow">Th</th>
                                                                <th class="dow">Fr</th>
                                                                <th class="dow">Sa</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td class="old day" data-date="1645920000000">27</td>
                                                                <td class="old day" data-date="1646006400000">28</td>
                                                                <td class="day" data-date="1646092800000">1</td>
                                                                <td class="day" data-date="1646179200000">2</td>
                                                                <td class="day" data-date="1646265600000">3</td>
                                                                <td class="day" data-date="1646352000000">4</td>
                                                                <td class="day" data-date="1646438400000">5</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="day" data-date="1646524800000">6</td>
                                                                <td class="day" data-date="1646611200000">7</td>
                                                                <td class="day" data-date="1646697600000">8</td>
                                                                <td class="day" data-date="1646784000000">9</td>
                                                                <td class="day" data-date="1646870400000">10</td>
                                                                <td class="day" data-date="1646956800000">11</td>
                                                                <td class="day" data-date="1647043200000">12</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="day" data-date="1647129600000">13</td>
                                                                <td class="day" data-date="1647216000000">14</td>
                                                                <td class="day" data-date="1647302400000">15</td>
                                                                <td class="day" data-date="1647388800000">16</td>
                                                                <td class="day" data-date="1647475200000">17</td>
                                                                <td class="day" data-date="1647561600000">18</td>
                                                                <td class="day" data-date="1647648000000">19</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="day" data-date="1647734400000">20</td>
                                                                <td class="day" data-date="1647820800000">21</td>
                                                                <td class="day" data-date="1647907200000">22</td>
                                                                <td class="day" data-date="1647993600000">23</td>
                                                                <td class="day" data-date="1648080000000">24</td>
                                                                <td class="day" data-date="1648166400000">25</td>
                                                                <td class="day" data-date="1648252800000">26</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="day" data-date="1648339200000">27</td>
                                                                <td class="day" data-date="1648425600000">28</td>
                                                                <td class="day" data-date="1648512000000">29</td>
                                                                <td class="day" data-date="1648598400000">30</td>
                                                                <td class="day" data-date="1648684800000">31</td>
                                                                <td class="new day" data-date="1648771200000">1</td>
                                                                <td class="new day" data-date="1648857600000">2</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="new day" data-date="1648944000000">3</td>
                                                                <td class="new day" data-date="1649030400000">4</td>
                                                                <td class="new day" data-date="1649116800000">5</td>
                                                                <td class="new day" data-date="1649203200000">6</td>
                                                                <td class="new day" data-date="1649289600000">7</td>
                                                                <td class="new day" data-date="1649376000000">8</td>
                                                                <td class="new day" data-date="1649462400000">9</td>
                                                            </tr>
                                                            </tbody>
                                                            <tfoot>
                                                            <tr>
                                                                <th colspan="7" class="today" style="display: none;">
                                                                    Today
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="7" class="clear" style="display: none;">
                                                                    Clear
                                                                </th>
                                                            </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                    <div class="datepicker-months" style="display: none;">
                                                        <table class="table-condensed">
                                                            <thead>
                                                            <tr>
                                                                <th colspan="7" class="datepicker-title"
                                                                    style="display: none;"></th>
                                                            </tr>
                                                            <tr>
                                                                <th class="prev"><i class="cs-chevron-left"></i></th>
                                                                <th colspan="5" class="datepicker-switch">2022</th>
                                                                <th class="next">ghdbtn</i></th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td colspan="7"><span class="month">Jan</span><span
                                                                        class="mongit th">Feb</span><span
                                                                        class="month focused">Mar</span><span
                                                                        class="month">Apr</span><span
                                                                        class="month">May</span><span
                                                                        class="month">Jun</span><span
                                                                        class="month">Jul</span><span
                                                                        class="month">Aug</span><span
                                                                        class="month">Sep</span><span
                                                                        class="month">Oct</span><span
                                                                        class="month">Nov</span><span
                                                                        class="month">Dec</span></td>
                                                            </tr>
                                                            </tbody>
                                                            <tfoot>
                                                            <tr>
                                                                <th colspan="7" class="today" style="display: none;">
                                                                    Today
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="7" class="clear" style="display: none;">
                                                                    Clear
                                                                </th>
                                                            </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                    <div class="datepicker-years" style="display: none;">
                                                        <table class="table-condensed">
                                                            <thead>
                                                            <tr>
                                                                <th colspan="7" class="datepicker-title"
                                                                    style="display: none;"></th>
                                                            </tr>
                                                            <tr>
                                                                <th class="prev"><i class="cs-chevron-left"></i></th>
                                                                <th colspan="5" class="datepicker-switch">2020-2029</th>
                                                                <th class="next"><i class="cs-chevron-right"></i></th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td colspan="7"><span class="year old">2019</span><span
                                                                        class="year">2020</span><span
                                                                        class="year">2021</span><span
                                                                        class="year focused">2022</span><span
                                                                        class="year">2023</span><span
                                                                        class="year">2024</span><span
                                                                        class="year">2025</span><span
                                                                        class="year">2026</span><span
                                                                        class="year">2027</span><span
                                                                        class="year">2028</span><span
                                                                        class="year">2029</span><span class="year new">2030</span>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                            <tfoot>
                                                            <tr>
                                                                <th colspan="7" class="today" style="display: none;">
                                                                    Today
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="7" class="clear" style="display: none;">
                                                                    Clear
                                                                </th>
                                                            </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                    <div class="datepicker-decades" style="display: none;">
                                                        <table class="table-condensed">
                                                            <thead>
                                                            <tr>
                                                                <th colspan="7" class="datepicker-title"
                                                                    style="display: none;"></th>
                                                            </tr>
                                                            <tr>
                                                                <th class="prev"><i class="cs-chevron-left"></i></th>
                                                                <th colspan="5" class="datepicker-switch">2000-2090</th>
                                                                <th class="next"><i class="cs-chevron-right"></i></th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td colspan="7"><span
                                                                        class="decade old">1990</span><span
                                                                        class="decade">2000</span><span class="decade">2010</span><span
                                                                        class="decade focused">2020</span><span
                                                                        class="decade">2030</span><span class="decade">2040</span><span
                                                                        class="decade">2050</span><span class="decade">2060</span><span
                                                                        class="decade">2070</span><span class="decade">2080</span><span
                                                                        class="decade">2090</span><span
                                                                        class="decade new">2100</span></td>
                                                            </tr>
                                                            </tbody>
                                                            <tfoot>
                                                            <tr>
                                                                <th colspan="7" class="today" style="display: none;">
                                                                    Today
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="7" class="clear" style="display: none;">
                                                                    Clear
                                                                </th>
                                                            </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                    <div class="datepicker-centuries" style="display: none;">
                                                        <table class="table-condensed">
                                                            <thead>
                                                            <tr>
                                                                <th colspan="7" class="datepicker-title"
                                                                    style="display: none;"></th>
                                                            </tr>
                                                            <tr>
                                                                <th class="prev"><i class="cs-chevron-left"></i></th>
                                                                <th colspan="5" class="datepicker-switch">2000-2900</th>
                                                                <th class="next"><i class="cs-chevron-right"></i></th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td colspan="7"><span
                                                                        class="century old">1900</span><span
                                                                        class="century focused">2000</span><span
                                                                        class="century">2100</span><span
                                                                        class="century">2200</span><span
                                                                        class="century">2300</span><span
                                                                        class="century">2400</span><span
                                                                        class="century">2500</span><span
                                                                        class="century">2600</span><span
                                                                        class="century">2700</span><span
                                                                        class="century">2800</span><span
                                                                        class="century">2900</span><span
                                                                        class="century new">3000</span></td>
                                                            </tr>
                                                            </tbody>
                                                            <tfoot>
                                                            <tr>
                                                                <th colspan="7" class="today" style="display: none;">
                                                                    Today
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                <th colspan="7" class="clear" style="display: none;">
                                                                    Clear
                                                                </th>
                                                            </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
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
