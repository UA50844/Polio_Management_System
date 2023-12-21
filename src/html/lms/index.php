


<?php

session_start();


if(isset($_SESSION['logged_in'])){

    
header('location:dashboard.php');
}


?>
<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title> Login PMS</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assets/css/dashlite.css?ver=3.0.3">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=3.0.3">

<!-- 
just for testing -->



    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <style>


.overing:hover{

    box-shadow:  0 25px 50px -12px rgb(0 0 0 / 0.25);
}



</style>
 
</head>

<body class="nk-body bg-white npc-default pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-split nk-split-page nk-split-lg">
                        <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                            <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                                <a href="html/under_const/index.html"  class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
                            </div>
                            <div class="nk-block nk-block-middle nk-auth-body" >
                                <div class="brand-logo pb-5 text-center " >
                                    <a href="html/index.html" class="logo-link" >
                                        <img class="logo-light logo-img logo-img-lg "  src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo" >
                                        <img class="logo-dark logo-img logo-img-lg "  src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark" style="">
                                    </a>
                                </div>
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title">Sign-In</h5>

                   
<?php

include 'connect.php';



if(isset($_POST['changepassword'])){


    $id = $_POST['id'];

   
    $changpas = $_POST['changpas'];
    



    $update = $conn->prepare("UPDATE `users` SET `password`='$changpas'  WHERE id = '$id' ");



       
  
  
          
  
$record = $update->execute();
   
if ($record){

   // echo "data submited";


?>


<div class="example-alert">
<div class="alert alert-success alert-icon">
<em class="icon ni ni-check-circle"></em> <strong> Password  Updated    Successfully</strong><a href="html/lms/index.php"> < Login Here</a>
</div>
   </div>
   
                                                       

<?php


// echo "status is  update";
}else{
   
   ?>

   <div class="example-alert">
   <div class="alert alert-fill alert-danger alert-icon">
    <em class="icon ni ni-cross-circle"></em> <strong>Update failed</strong>! There is some technical issues.
    </div>
   </div>                                             
                                             
                                             
                           <?php   
}
}

























if ($_POST) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    // $role = $_POST['role'];

    $select = $conn->prepare("SELECT *FROM users where email = '$email' and password = '$password' ");

     $select->fetchAll(PDO ::FETCH_ASSOC);

    $select->execute();
    $data = $select->fetch();


  
    

if($data['email'] != $email and $data['password'] != $password){
    echo '

    <div class="example-alert">
    <div class="alert alert-danger alert-icon">
        <em class="icon ni ni-cross-circle"></em> <strong> failed</strong>! Invalid User
    </div>
    </div>
    
    ';
    }
    else{

        $_SESSION['logged_in'] = 'logged_in';

        $_SESSION['id'] = $data['id'];

        $_SESSION['password'] = $data['password'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['profile'] = $data['profile'];
  
    $_SESSION['role'] = $data['role'];

    //all  pages access

    $_SESSION['ac_file_sec'] = $data['ac_file_sec'];
//    <sub pages>


$_SESSION['ac_headsec'] = $data['ac_headsec'];
$_SESSION['ac_client_info'] = $data['ac_client_info'];
$_SESSION['ac_trans_auth'] = $data['ac_trans_auth'];




    $_SESSION['ac_umrah_mang'] = $data['ac_umrah_mang'];

     // <sub pages>
        $_SESSION['ac_umrah_ser'] = $data['ac_umrah_ser'];
        $_SESSION['ac_party_agr'] = $data['ac_party_agr'];
        $_SESSION['ac_party_mang'] = $data['ac_party_mang'];
        
        // $_SESSION['ac_sale_recmon'] = $data['ac_sale_recmon'];
        // $_SESSION['ac_sale_inv'] = $data['ac_sale_inv'];
        // $_SESSION['ac_sale_recinv'] = $data['ac_sale_recinv'];
        // $_SESSION['ac_sale_ret'] = $data['ac_sale_ret'];
        // $_SESSION['ac_sale_ref'] = $data['ac_sale_ref'];
 
        // $_SESSION['ac_sale_setl'] = $data['ac_sale_setl'];



    $_SESSION['ac_data_entry'] = $data['ac_data_entry'];


    

     // <sub pages>
     $_SESSION['ac_tic_ent'] = $data['ac_tic_ent'];
     $_SESSION['ac_ref_ent'] = $data['ac_ref_ent'];
     $_SESSION['ac_spec_inv'] = $data['ac_spec_inv'];
     
     $_SESSION['ac_hot_ent'] = $data['ac_hot_ent'];
    //  $_SESSION['ac_pur_ref'] = $data['ac_pur_ref'];
    //  $_SESSION['ac_pur_setl'] = $data['ac_pur_setl'];  $_SESSION['ac_pur_ret'] = $data['ac_pur_ret'];
   
     





    $_SESSION['ac_vou_ent'] = $data['ac_vou_ent'];


 // <sub pages>
 $_SESSION['ac_pay_vou'] = $data['ac_pay_vou'];



    $_SESSION['ac_sale_rep'] = $data['ac_sale_rep'];

     // <sub pages>
 $_SESSION['ac_new_pas'] = $data['ac_new_pas'];
 $_SESSION['ac_ad_hv'] = $data['ac_ad_hv'];
 $_SESSION['ac_ad_hot_vou'] = $data['ac_ad_hot_vou'];
 $_SESSION['ac_hv_ws'] = $data['ac_hv_ws'];
 


    
    $_SESSION['ac_searching'] = $data['ac_searching'];

    // <sub pages>
 $_SESSION['ac_sea_tick'] = $data['ac_sea_tick'];
 $_SESSION['ac_sea_vou'] = $data['ac_sea_vou'];
 $_SESSION['ac_sea_spec_inv'] = $data['ac_sea_spec_inv'];
 $_SESSION['ac_sea_np'] = $data['ac_sea_np'];

 $_SESSION['ac_sea_pa'] = $data['ac_sea_pa'];
 $_SESSION['ac_sea_client'] = $data['ac_sea_client'];
 $_SESSION['ac_sea_hv'] = $data['ac_sea_hv'];
 $_SESSION['ac_sea_ad_hv'] = $data['ac_sea_ad_hv'];
 $_SESSION['ac_sea_hv_ent'] = $data['ac_sea_hv_ent'];







    
    $_SESSION['ac_user'] = $data['ac_user'];

    // <sub pages>
 $_SESSION['ac_all_user'] = $data['ac_all_user'];
 $_SESSION['ac_user_pay'] = $data['ac_user_pay'];



    // <sub pages>
 $_SESSION['ac_file_up'] = $data['ac_file_up'];
 $_SESSION['ac_ex_up'] = $data['ac_ex_up'];


 $_SESSION['ac_ex_led'] = $data['ac_ex_led'];
 $_SESSION['ac_asg_user'] = $data['ac_asg_user'];






 $_SESSION['ac_all_vou'] = $data['ac_all_vou'];


 $_SESSION['ac_hv'] = $data['ac_hv'];
 $_SESSION['ac_cs'] = $data['ac_cs'];


    // echo '

    // <div class="example-alert">
    // <div class="alert alert-success alert-icon">
    //     <em class="icon ni ni-check-circle"></em> <strong>Welcome</strong>. 
    //     <a href="html/lms/welcome.php">GO Now</a>
    // </div>
    // </div>
    
    
    // ';




    header("Location:admin-profile.php");
    

    }

    

       
    

   
    
}
?>



















                                        <div class="nk-block-des">
                                            <p>Access the Deniss panel using your email and passcode.</p>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <!-- <form  class="form-validate is-alter" autocomplete="off" action="./html/lms/welcome.php" method="post"> -->
                                <form  class="form-validate is-alter" autocomplete="off" action="" method="post">
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="email-address">Email</label>
                                            <a class="link link-primary link-sm" tabindex="-1" href="html/under_const/index.html" >Need Help?</a>
                                        </div>
                                        <div class="form-control-wrap">
                                            <input autocomplete="off" type="text" name="email" class="form-control form-control-lg" required id="email-address" placeholder="Enter your email address or username">
                                        </div>
                                    </div><!-- .form-group -->
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="password">Password</label>
                                            <a class="link link-primary link-sm" tabindex="-1" href="html/pages/auths/auth-reset.html">Forgot Code?</a>
                                        </div>
                                        <div class="form-control-wrap">
                                            <a tabindex="-1" href="html/under_const/index.html"  class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input autocomplete="new-password" name="password" type="password" class="form-control form-control-lg" required id="password" placeholder="Enter your passcode">
                                        </div>
                                    </div><!-- .form-group -->
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block" type="submit" >Sign in</button>
                                      
                                        <!-- <a href="./emh_admin/src/html/lms/index.html" class="btn btn-lg btn-primary btn-block mt-2">Sign in Admin</a> -->
                                    </div>
                                </form><!-- form -->
                                <!-- <div class="form-note-s2 pt-4"> New on our platform? <a href="">Create an account</a>
                                </div> -->
                                <!-- <div class="text-center pt-4 pb-3">
                                    <h6 class="overline-title overline-title-sap"><span>OR</span></h6>
                                </div>
                                <ul class="nav justify-center gx-4">
                                    <li class="nav-item"><a class="nav-link" href="html/under_const/index.html" >Facebook</a></li>
                                    <li class="nav-item"><a class="nav-link" href="html/under_const/index.html" >Google</a></li>
                                </ul>
                                <div class="text-center mt-5">
                                    <span class="fw-500">I don't have an account? <a href="html/under_const/index.html" >Try 15 days free</a></span>
                                </div> -->
                            </div><!-- .nk-block -->
                            <div class="nk-block nk-auth-footer">
                                <div class="nk-block-between">
                                    <!-- <ul class="nav nav-sm">
                                        <li class="nav-item">
                                            <a class="nav-link" href="html/under_const/index.html" >Terms & Condition</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="html/under_const/index.html" >Privacy Policy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="html/under_const/index.html" >Help</a>
                                        </li>
                                        <li class="nav-item dropup">
                                            <a class="dropdown-toggle dropdown-indicator has-indicator nav-link" data-bs-toggle="dropdown" data-offset="0,10"><small>English</small></a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                <ul class="language-list">
                                                    <li>
                                                        <a href="html/under_const/index.html"  class="language-item">
                                                            <img src="./images/flags/english.png" alt="" class="language-flag">
                                                            <span class="language-name">English</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="html/under_const/index.html"  class="language-item">
                                                            <img src="./images/flags/spanish.png" alt="" class="language-flag">
                                                            <span class="language-name">Español</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="html/under_const/index.html"  class="language-item">
                                                            <img src="./images/flags/french.png" alt="" class="language-flag">
                                                            <span class="language-name">Français</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="html/under_const/index.html"  class="language-item">
                                                            <img src="./images/flags/turkey.png" alt="" class="language-flag">
                                                            <span class="language-name">Türkçe</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul> -->
                                  
                                </div>
                                <div class="mt-3">
                                    <p>&copy; 2022 Deniss. All Rights Reserved.</p>
                                </div>
                            </div><!-- .nk-block -->
                        </div><!-- .nk-split-content -->
                        <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right" data-toggle-body="true" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
                            <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">
                                <div class="slider-init" data-slick='{"dots":true, "arrows":false}'>
                                    <div class="slider-item">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img">
                                            <img class="nk-survey-gfx mb-5 " src="./images/gfx/job-survey.svg" alt="">
                                            </div>
                                            <div class="nk-feature-content py-4 p-sm-5">
                                              <h4>PPEP </h4>
                                                <p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>
                                            </div>
                                        </div>
                                    </div><!-- .slider-item -->
                                    <div class="slider-item">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img">
                                            <img class="nk-survey-gfx mb-5 " src="./images/gfx/job-survey.svg" alt="">
                                            </div>
                                            <div class="nk-feature-content py-4 p-sm-5">
                                              <h4>PPEP </h4>
                                                <p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>
                                            </div>
                                        </div>
                                    </div><!-- .slider-item -->
                                    <div class="slider-item">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img">
                                            <img class="nk-survey-gfx mb-5 " src="./images/gfx/job-survey.svg" alt="">
                                            </div>
                                            <div class="nk-feature-content py-4 p-sm-5">
                                              <h4>PPEP </h4>
                                                <p>You can start to create your products easily with its user-friendly design & most completed responsive layout.</p>
                                            </div>
                                        </div>
                                    </div><!-- .slider-item -->
                                </div><!-- .slider-init -->
                                <div class="slider-dots"></div>
                                <div class="slider-arrows"></div>
                            </div><!-- .slider-wrap -->
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
    <script src="./assets/js/scripts.js?ver=3.0.3"></script><script src="html/lms/datetime.js"></script>
    <!-- select region modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="region">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="html/under_const/index.html"  class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title mb-4">Select Your Country</h5>
                    <div class="nk-country-region">
                        <ul class="country-list text-center gy-2">
                            <li>
                                <a href="html/under_const/index.html"  class="country-item">
                                    <img src="./images/flags/arg.png" alt="" class="country-flag">
                                    <span class="country-name">Argentina</span>
                                </a>
                            </li>
                            <li>
                                <a href="html/under_const/index.html"  class="country-item">
                                    <img src="./images/flags/aus.png" alt="" class="country-flag">
                                    <span class="country-name">Australia</span>
                                </a>
                            </li>
                            <li>
                                <a href="html/under_const/index.html"  class="country-item">
                                    <img src="./images/flags/bangladesh.png" alt="" class="country-flag">
                                    <span class="country-name">Bangladesh</span>
                                </a>
                            </li>
                            <li>
                                <a href="html/under_const/index.html"  class="country-item">
                                    <img src="./images/flags/canada.png" alt="" class="country-flag">
                                    <span class="country-name">Canada <small>(English)</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="html/under_const/index.html"  class="country-item">
                                    <img src="./images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">Centrafricaine</span>
                                </a>
                            </li>
                            <li>
                                <a href="html/under_const/index.html"  class="country-item">
                                    <img src="./images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">China</span>
                                </a>
                            </li>
                            <li>
                                <a href="html/under_const/index.html"  class="country-item">
                                    <img src="./images/flags/french.png" alt="" class="country-flag">
                                    <span class="country-name">France</span>
                                </a>
                            </li>
                            <li>
                                <a href="html/under_const/index.html"  class="country-item">
                                    <img src="./images/flags/germany.png" alt="" class="country-flag">
                                    <span class="country-name">Germany</span>
                                </a>
                            </li>
                            <li>
                                <a href="html/under_const/index.html"  class="country-item">
                                    <img src="./images/flags/iran.png" alt="" class="country-flag">
                                    <span class="country-name">Iran</span>
                                </a>
                            </li>
                            <li>
                                <a href="html/under_const/index.html"  class="country-item">
                                    <img src="./images/flags/italy.png" alt="" class="country-flag">
                                    <span class="country-name">Italy</span>
                                </a>
                            </li>
                            <li>
                                <a href="html/under_const/index.html"  class="country-item">
                                    <img src="./images/flags/mexico.png" alt="" class="country-flag">
                                    <span class="country-name">México</span>
                                </a>
                            </li>
                            <li>
                                <a href="html/under_const/index.html"  class="country-item">
                                    <img src="./images/flags/philipine.png" alt="" class="country-flag">
                                    <span class="country-name">Philippines</span>
                                </a>
                            </li>
                            <li>
                                <a href="html/under_const/index.html"  class="country-item">
                                    <img src="./images/flags/portugal.png" alt="" class="country-flag">
                                    <span class="country-name">Portugal</span>
                                </a>
                            </li>
                            <li>
                                <a href="html/under_const/index.html"  class="country-item">
                                    <img src="./images/flags/s-africa.png" alt="" class="country-flag">
                                    <span class="country-name">South Africa</span>
                                </a>
                            </li>
                            <li>
                                <a href="html/under_const/index.html"  class="country-item">
                                    <img src="./images/flags/spanish.png" alt="" class="country-flag">
                                    <span class="country-name">Spain</span>
                                </a>
                            </li>
                            <li>
                                <a href="html/under_const/index.html"  class="country-item">
                                    <img src="./images/flags/switzerland.png" alt="" class="country-flag">
                                    <span class="country-name">Switzerland</span>
                                </a>
                            </li>
                            <li>
                                <a href="html/under_const/index.html"  class="country-item">
                                    <img src="./images/flags/uk.png" alt="" class="country-flag">
                                    <span class="country-name">United Kingdom</span>
                                </a>
                            </li>
                            <li>
                                <a href="html/under_const/index.html"  class="country-item">
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