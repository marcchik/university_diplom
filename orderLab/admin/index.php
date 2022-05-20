<? require_once('../template/header_admin.php'); ?>

<style>
    body {
        background: url(../template/images/chart.jpg) no-repeat center top fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>
<?
//    echo "<pre>";
//print_r($_SERVER);
//echo "</pre>";
?>

<main>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-12 col-lg-auto h-100 pb-4 px-4 pt-0 p-lg-0">
                    <div class="min-h-100  d-flex justify-content-center align-items-center py-5">
                        <div class="sw-lg-50 px-5 card">
                            <div class="card-body">
                                <div class="sh-11">
                                    <a href="/">
                                        <div class="logo-default"></div>
                                    </a>
                                </div>
                                <div class="mb-5">
                                    <h2 class="cta-1 mb-0 text-primary">Authorization</h2>
                                </div>
                                <div class="mb-5">
                                    <p class="h6">Please login</p>
                                </div>
                                <div>
                                    <form id="loginForm" class="tooltip-end-bottom" novalidate="novalidate"">
                                        <div class="mb-3 filled form-group tooltip-end-top">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="cs-icon cs-icon-user"><path d="M10.0179 8C10.9661 8 11.4402 8 11.8802 7.76629C12.1434 7.62648 12.4736 7.32023 12.6328 7.06826C12.8989 6.64708 12.9256 6.29324 12.9789 5.58557C13.0082 5.19763 13.0071 4.81594 12.9751 4.42106C12.9175 3.70801 12.8887 3.35148 12.6289 2.93726C12.4653 2.67644 12.1305 2.36765 11.8573 2.2256C11.4235 2 10.9533 2 10.0129 2V2C9.03627 2 8.54794 2 8.1082 2.23338C7.82774 2.38223 7.49696 2.6954 7.33302 2.96731C7.07596 3.39365 7.05506 3.77571 7.01326 4.53982C6.99635 4.84898 6.99567 5.15116 7.01092 5.45586C7.04931 6.22283 7.06851 6.60631 7.33198 7.03942C7.4922 7.30281 7.8169 7.61166 8.08797 7.75851C8.53371 8 9.02845 8 10.0179 8V8Z"></path><path d="M16.5 17.5L16.583 16.6152C16.7267 15.082 16.7986 14.3154 16.2254 13.2504C16.0456 12.9164 15.5292 12.2901 15.2356 12.0499C14.2994 11.2842 13.7598 11.231 12.6805 11.1245C11.9049 11.048 11.0142 11 10 11C8.98584 11 8.09511 11.048 7.31945 11.1245C6.24021 11.231 5.70059 11.2842 4.76443 12.0499C4.47077 12.2901 3.95441 12.9164 3.77462 13.2504C3.20144 14.3154 3.27331 15.082 3.41705 16.6152L3.5 17.5"></path></svg>
                                            <input class="form-control" placeholder="Login" name="email">
                                        </div>
                                        <div class="mb-3 filled form-group tooltip-end-top">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="cs-icon cs-icon-lock-off"><path d="M5 12.6667C5 12.0467 5 11.7367 5.06815 11.4824C5.25308 10.7922 5.79218 10.2531 6.48236 10.0681C6.73669 10 7.04669 10 7.66667 10H12.3333C12.9533 10 13.2633 10 13.5176 10.0681C14.2078 10.2531 14.7469 10.7922 14.9319 11.4824C15 11.7367 15 12.0467 15 12.6667V13C15 13.9293 15 14.394 14.9231 14.7804C14.6075 16.3671 13.3671 17.6075 11.7804 17.9231C11.394 18 10.9293 18 10 18V18C9.07069 18 8.60603 18 8.21964 17.9231C6.63288 17.6075 5.39249 16.3671 5.07686 14.7804C5 14.394 5 13.9293 5 13V12.6667Z"></path><path d="M11 15H10 9M13 6V5C13 3.34315 11.6569 2 10 2V2C8.34315 2 7 3.34315 7 5V10"></path></svg>
                                            <input class="form-control pe-7" id="passwordInput" name="password" type="password" placeholder="Password">
                                            <div class="invalid-feedback">Authorisation error.</div>
                                            <a class="text-small position-absolute t-3 e-3" href="#">Forgot?</a>
                                        </div>
                                        <button type="submit" class="btn btn-lg btn-primary" onclick="submitForm()">Login</button>
                                    </form>

                                    <script>
                                        function submitForm() {
                                            let url = '../BD/FORM/form-admin.php'; // здесь указываем адрес PHP файла
                                            let formData = $('.tooltip-end-bottom').serialize();
                                            console.log(formData);


                                            jQuery.ajax({
                                                async: false,
                                                url: url,
                                                method: 'post',
                                                dataType: 'json',
                                                data: formData
                                            });

                                            location = url + '?' + formData;
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<?

if ($_REQUEST['status'] == "success") {
    echo "<script>location.href='/orderLab/management';</script>";
} elseif ($_REQUEST['status'] == "duplicate") {
    echo "<script>alert('Такой пользователь уже существует'); location.href='/orderLab';</script>";
} elseif ($_REQUEST['status'] == "error") {
    echo "<script>alert('Упс.. Произошла ошибка!'); location.href='/orderLab';</script>";
} elseif ($_REQUEST['status'] == "authorized") {
    echo "<script>location.href='/orderLab/profile?id=".$_REQUEST['id']."';</script>";
} elseif ($_REQUEST['status'] == "failed") {
    echo "<script>document.getElementById('passwordInput').className +=' is-invalid'</script>";
}
?>

<? require_once('../template/footer_admin.php'); ?>
