<? require_once('../template/header.php'); ?>

<main>
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- Title Start -->
                <section class="scroll-section" id="title">
                    <div class="page-title-container">
                        <h1 class="mb-0 pb-0 display-4">Registration</h1>
                    </div>
                </section>
                <!-- Title End -->

                <!-- Content Start -->
                <div>

                    <!-- Reservation Start -->
                    <section class="scroll-section" id="reservation">
                        <form class="tooltip-end-top" method="post" id="reservationForm">
                            <div class="card">
                                <div class="card-body">
                                    <p class="text-alternate mb-4">We would love to hear from you!</p>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="mb-3 filled">
                                                <i data-cs-icon="user"></i>
                                                <input class="form-control" placeholder="Name" name="contactName" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3 filled">
                                                <i data-cs-icon="email"></i>
                                                <input class="form-control" placeholder="Email" name="contactEmail"  />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row g-3">
                                        <div class="col-md-4">
                                            <div class="mb-3 top-label">
                                                <select class="form-control" data-width="100%" name="university" id="reservationRoom">
                                                    <option label="&nbsp;"></option>
                                                    <option value="1">BSTU</option>
                                                    <option value="2">BNTU</option>
                                                    <option value="3">BSU</option>
                                                </select>
                                                <span>UNIVERSITY</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3 top-label">
                                                <select class="form-control" data-width="100%" name="faculty" id="reservationAdults">
                                                    <option label="&nbsp;"></option>
                                                    <option value="1">FIT</option>
                                                    <option value="2">HTiT</option>
                                                </select>
                                                <span>FACULTY</span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3 top-label">
                                                <select class="form-control" data-width="100%" name="speciality" id="reservationChildren">
                                                    <option label="&nbsp;"></option>
                                                    <option value="2">POIT</option>
                                                    <option value="1">POIBMS</option>
                                                    <option value="4">ISiT</option>
                                                    <option value="3">DEiVI</option>
                                                </select>
                                                <span>SPECIALITY</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="mb-3 filled">
                                                <i data-cs-icon="lock-off"></i>
                                                <input class="form-control" type="password" name="loginPassword1" placeholder="Password" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3 filled">
                                                <i data-cs-icon="lock-off"></i>
                                                <input class="form-control" type="password" name="loginPassword2" placeholder="Confirm password" />
                                            </div>
                                        </div>
                                    </div>


                                    <div class="mb-3 position-relative tooltip-label-end form-group">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="customCheck1" name="signUpCheck" />
                                            <label class="form-check-label" for="customCheck1">
                                                I have read and accept the
                                                <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">terms and conditions</a>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer border-0 pt-0 d-flex justify-content-end align-items-center">
                                    <div>
                                        <a href="/orderLab" class="btn btn-icon btn-icon-end btn-primary">
                                            <span>Login</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="cs-icon cs-icon-chevron-right"><path d="M7 4L12.6464 9.64645C12.8417 9.84171 12.8417 10.1583 12.6464 10.3536L7 16"></path></svg>

                                        </a>
                                        <button class="btn btn-icon btn-icon-end btn-primary" type="submit">
                                            <span>Sign Up</span>
                                            <i data-cs-icon="chevron-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </section>
                    <div class="error-text"></div>
                    <!-- Reservation End -->
                </div>
                <!-- Content End -->
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
            
            <script>
                $("#reservationForm").submit(function(){
                    var $that = $(this),
                        formData = new FormData($that.get(0));
                    $.ajax({
                        contentType: false,
                        processData: false,
                        type: "POST",
                        url: "../DB/FORM/form-register.php",
                        data: formData,
                        dataType: 'json',
                        success: function(result){
                            if(result.status=='success'){
                                document.querySelector(".error-text").style.textAlign = "center";
                                document.querySelector(".error-text").style.marginTop = "26px";
                                document.querySelector(".error-text").style.color = "#395f04";
                                document.querySelector('.error-text').textContent = result.mess;
                            }else{
                                document.querySelector(".error-text").style.textAlign = "center";
                                document.querySelector(".error-text").style.marginTop = "26px";
                                document.querySelector(".error-text").style.color = "#ef5241";
                                document.querySelector('.error-text').textContent = result.mess;
                            }
                        }
                    });
                    return false;
                });


            </script>
        </div>
    </div>

</main>

<? require_once('../template/footer.php'); ?>
