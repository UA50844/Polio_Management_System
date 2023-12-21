<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Public Form  | PMS</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assets/css/dashlite.css?ver=3.0.3">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=3.0.3">
</head>

<body class="nk-body bg-white npc-default pg-survey">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-split nk-split-page nk-split-lg">
                        <div class="nk-split-content bg-dark is-dark p-5 d-flex justify-between flex-column text-center">
                            <a href="html/index.html" class="logo-link nk-sidebar-logo">
                                <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                                <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                            </a>
                            <div class="text-block wide-xs mx-auto">
                                <h3 class="text-white">Welcome To PMS</h3>
                                <p>Tation argumentum et usu, dicit viderer evertitur te has. Eu dictas concludaturque usu, facete detracto patrioque an per, lucilius pertinacia eu vel.</p>
                                <img class="nk-survey-gfx mt-5" src="./images/gfx/job-survey.svg" alt="">
                            </div>
                            <p>&copy; 2023 PPEP</p>
                        </div><!-- .nk-split-content -->
                        <div class="nk-split-content nk-split-stretch bg-white p-5 d-flex justify-center align-center flex-column">
                            <div class="wide-xs-fix">
                                <form class="nk-stepper stepper-init is-alter" action="html/lms/submit.php" enctype="multipart/form-data"  method="post" id="stepper-survey-v2">
                                       <div class="nk-stepper-content">
                                        <div class="nk-stepper-progress stepper-progress mb-4">
                                            <div class="stepper-progress-count mb-2"></div>
                                            <div class="progress progress-md">
                                                <div class="progress-bar stepper-progress-bar"></div>
                                            </div>
                                        </div>




                                        
                                        <div class="nk-stepper-steps stepper-steps">
                                            <div class="nk-stepper-step">
                                                <div class="row g-4">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="sv1-first-name">First Name</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="sv1-first-name" name="fname" placeholder="First name"  required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="sv1-last-name">Last Name</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" id="sv1-last-name" name="lname" placeholder="Last name"  required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="form-label">Gender </label>
                                                        <div class="form-control-wrap">
                                                            <ul class="custom-control-group">
                                                                <li>
                                                                    <div class="custom-control custom-radio">
                                                                        <input type="radio" class="custom-control-input" name="gender" id="sv2-gender-male" value="male"  required>
                                                                        <label class="custom-control-label" for="sv2-gender-male">Male</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-radio">
                                                                        <input type="radio" class="custom-control-input" name="gender" id="sv2-gender-female" value="female"  required>
                                                                        <label class="custom-control-label" for="sv2-gender-female">Female</label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                  
                                                </div>
                                            </div>
                                            <!-- <div class="nk-stepper-step">
                                                <div class="nk-stepper-step-head mb-4">
                                                    <h5 class="title">What are you looking for ?</h5>
                                                    <p>Tation argumentum et usu, dicit viderer evertitur te has</p>
                                                </div>
                                                <ul class="row g-3">
                                                    <li class="col-6">
                                                        <div class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                            <input type="radio" class="custom-control-input" name="sv2-preference" id="sv2-preference-fedev" value="sv2-preference-fedev"  required>
                                                            <label class="custom-control-label" for="sv2-preference-fedev">
                                                                <span class="d-flex flex-column text-center py-1 py-sm-2">
                                                                    <span class="icon-wrap xl">
                                                                        <img class="img" src="./images/icons/fornt-end-developer.svg" alt="">
                                                                    </span>
                                                                    <span class="lead-text mb-1 mt-3">Front End Developer</span>
                                                                    <span class="sub-text">Postea democritum mnesarchum ne nam, ad vim aperiri tractatos.</span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="col-6">
                                                        <div class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                            <input type="radio" class="custom-control-input" name="sv2-preference" id="sv2-preference-uxdis" value="sv2-preference-uxdis"  required>
                                                            <label class="custom-control-label" for="sv2-preference-uxdis">
                                                                <span class="d-flex flex-column text-center py-1 py-sm-2">
                                                                    <span class="icon-wrap xl">
                                                                        <img class="img" src="./images/icons/ux-designer.svg" alt="">
                                                                    </span>
                                                                    <span class="lead-text mb-1 mt-3">Ux designer</span>
                                                                    <span class="sub-text">Prioritize and solve your tasks in short time cycles.</span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="col-12">
                                                        <div class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                            <input type="radio" class="custom-control-input" name="sv2-preference" id="sv2-preference-freelance" value="sv2-preference-freelance"  required>
                                                            <label class="custom-control-label" for="sv2-preference-freelance">
                                                                <span class="d-flex flex-column text-center py-1 py-sm-2">
                                                                    <span class="icon-wrap xl">
                                                                        <img class="img" src="./images/icons/freelancing-service.svg" alt="">
                                                                    </span>
                                                                    <span class="lead-text mb-1 mt-3">Freelancing Serivces</span>
                                                                    <span class="sub-text">Prioritize and solve your tasks in short time cycles.</span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div> -->

                                            <div class="nk-stepper-step">
                                                <div class="nk-stepper-step-head mb-4">
                                                    <h5 class="title">Whats Your Address info?</h5>
                                                    <p>Tation argumentum et usu, dicit viderer evertitur te has</p>
                                                </div>
                                                <div class="row g-4">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="sv1-phone-no">Address:</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="sv1-phone-no" name="address" placeholder="First name"  required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="form-label" for="sv1-whatsapp-no">City</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="sv1-whatsapp-no" name="city" placeholder="Last name"  required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="form-label" for="sv1-whatsapp-no">State</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control" id="sv1-whatsapp-no" name="state" placeholder="Last name"  required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <label class="form-label" for="sv1-whatsapp-no">Postal Code</label>
                                                            <div class="form-control-wrap">
                                                                <input type="number" class="form-control" id="sv1-whatsapp-no" name="postal_code" placeholder="Last name"  required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="nk-stepper-step">
                                                <div class="nk-stepper-step-head mb-4">
                                                    <h5 class="title">Whats Your Contact info?</h5>
                                                    <p>Tation argumentum et usu, dicit viderer evertitur te has</p>
                                                </div>
                                                <div class="row g-4">


                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="sv1-email-address">Email Address</label>
                                                        <div class="form-control-wrap">
                                                            <input type="email" class="form-control" id="sv1-email-address" name="email" placeholder="Email Address"  required>
                                                        </div>
                                                    </div>
                                                </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="sv1-phone-no">Phone No</label>
                                                            <div class="form-control-wrap">
                                                                <input type="number" class="form-control" id="sv1-phone-no" name="phone" placeholder="First name"  required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="sv1-whatsapp-no">Whatsapp No</label>
                                                            <div class="form-control-wrap">
                                                                <input type="number" class="form-control" id="sv1-whatsapp-no" name="whatsapp" placeholder="Last name"  required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                       
                                            






                                            <div class="nk-stepper-step">
                                                <div class="nk-stepper-step-head mb-4">
                                                    <h5 class="title">Lets learn about yourself</h5>
                                                    <p>Tation argumentum et usu, dicit viderer evertitur te has</p>
                                                </div>
                                                <div class="row g-3">
                                                  

                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="sv1-phone-no">CNIC No</label>
                                                            <div class="form-control-wrap">
                                                                <input type="number" class="form-control" id="sv1-phone-no" name="cnic" placeholder="First name"  required>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="sv1-phone-no">Date Of issue</label>
                                                            <div class="form-control-wrap">
                                                                <input type="date" class="form-control" id="sv1-phone-no" name="doi" placeholder="First name"  required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="sv1-phone-no">Date Of Birth</label>
                                                            <div class="form-control-wrap">
                                                                <input type="date" class="form-control" id="sv1-phone-no" name="dob" placeholder="First name"  required>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="form-label">Upload Picture</label>
                                                            <span class="form-note mb-2">( Files accepted: .pdf. doc/docx - Max file size: 190k for demo limit )</span>
                                                            <div class="form-control-wrap">
                                                                <div class="form-file">
                                                                    <input type="file"  class="form-file-input" id="sv2-file-attachment" name="profile">
                                                                    <label class="form-file-label" for="sv2-file-attachment">Choose files....</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                       


                                                </div>
                                            </div>

                                            <div class="nk-stepper-step">
                                                <div class="nk-stepper-step-head mb-4">
                                                    <h5 class="title">How many Your Kids?</h5>
                                                    <p>Tation argumentum et usu, dicit viderer evertitur te has</p>
                                                </div>
                                                <div class="row g-4">

                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="sv1-email-address">Number of Kids</label>
                                                        <div class="form-control-wrap">
                                                            <input type="number" class="form-control"  name="kids" placeholder="Email Address"  required>
                                                        </div>
                                                    </div>
                                                </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="sv1-phone-no">Younger Than 1 Year</label>
                                                            <div class="form-control-wrap">
                                                                <input type="number" class="form-control" id="sv1-phone-no" name="younger" placeholder="First name"  required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="sv1-whatsapp-no">Elder Than 1 Year</label>
                                                            <div class="form-control-wrap">
                                                                <input type="number" class="form-control" id="sv1-whatsapp-no" name="elder" placeholder="Last name"  required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                         
                                            
                                        </div>
                                        <ul class="nk-stepper-pagination pt-4 gx-4 gy-2 stepper-pagination">
                                            <li class="step-prev"><button class="btn btn-dim btn-primary">Back</button></li>
                                            <li class="step-next"><button class="btn btn-primary">Continue</button></li>
                                            
                                            <button class="btn btn-primary step-submit" name="public_submit" type="submit">Submit</button>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div><!-- .nk-split-content -->
                    </div><!-- .nk-split -->
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=3.0.3"></script>
    <script src="./assets/js/scripts.js?ver=3.0.3"></script>
    <!-- select region modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="region">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title mb-4">Select Your Country</h5>
                    <div class="nk-country-region">
                        <ul class="country-list text-center gy-2">
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/arg.png" alt="" class="country-flag">
                                    <span class="country-name">Argentina</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/aus.png" alt="" class="country-flag">
                                    <span class="country-name">Australia</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/bangladesh.png" alt="" class="country-flag">
                                    <span class="country-name">Bangladesh</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/canada.png" alt="" class="country-flag">
                                    <span class="country-name">Canada <small>(English)</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">Centrafricaine</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">China</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/french.png" alt="" class="country-flag">
                                    <span class="country-name">France</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/germany.png" alt="" class="country-flag">
                                    <span class="country-name">Germany</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/iran.png" alt="" class="country-flag">
                                    <span class="country-name">Iran</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/italy.png" alt="" class="country-flag">
                                    <span class="country-name">Italy</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/mexico.png" alt="" class="country-flag">
                                    <span class="country-name">México</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/philipine.png" alt="" class="country-flag">
                                    <span class="country-name">Philippines</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/portugal.png" alt="" class="country-flag">
                                    <span class="country-name">Portugal</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/s-africa.png" alt="" class="country-flag">
                                    <span class="country-name">South Africa</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/spanish.png" alt="" class="country-flag">
                                    <span class="country-name">Spain</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/switzerland.png" alt="" class="country-flag">
                                    <span class="country-name">Switzerland</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/uk.png" alt="" class="country-flag">
                                    <span class="country-name">United Kingdom</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/english.png" alt="" class="country-flag">
                                    <span class="country-name">United State</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div><!-- .modal -->

</html>