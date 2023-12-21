<?php



include 'header.php';
?>
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Users</h3>
                                        </div>
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="html/under_const/index.html" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="more-options"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="more-options">
                                                    <ul class="nk-block-tools g-3">
                                                        <li>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right">
                                                                    <em class="icon ni ni-search"></em>
                                                                </div>
                                                                <input type="text" class="form-control" id="default-04" placeholder="Search by name">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="drodown">
                                                                <a href="html/under_const/index.html" class="dropdown-toggle dropdown-indicator btn btn-outline-light btn-white" data-bs-toggle="dropdown">Status</a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="html/under_const/index.html"><span>Actived</span></a></li>
                                                                        <li><a href="html/under_const/index.html"><span>Inactived</span></a></li>
                                                                        <li><a href="html/under_const/index.html"><span>Blocked</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="nk-block-tools-opt">
                                                            <a href="html/under_const/index.html" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                                            <a class="btn btn-primary d-none d-md-inline-flex" data-bs-toggle="modal" href="#instructor-add"><em class="icon ni ni-plus"></em><span>Add User</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card">
                                        <div class="card-inner-group">
                                            <div class="card-inner p-0">
                                                <div class="nk-tb-list nk-tb-ulist">
                                                    <div class="nk-tb-item nk-tb-head">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid">
                                                                <label class="custom-control-label" for="uid"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col"><span class="sub-text">User</span></div>
                                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Phone</span></div>
                                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Role</span></div>
                                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">State</span></div>


                                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1 my-n1">
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="html/under_const/index.html" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="html/under_const/index.html"><em class="icon ni ni-mail"></em><span>Send Email to All</span></a></li>
                                                                                <li><a href="html/under_const/index.html"><em class="icon ni ni-na"></em><span>Suspend Selected</span></a></li>
                                                                                <li><a href="html/under_const/index.html"><em class="icon ni ni-trash"></em><span>Remove Seleted</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <!-- <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid1">
                                                                <label class="custom-control-label" for="uid1"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <a href="html/lms/instructor-details.html">
                                                                <div class="user-card">
                                                                    <div class="user-avatar bg-primary">
                                                                        <span>AB</span>
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span class="tb-lead">Admin <span class="dot dot-success d-md-none ms-1"></span></span>
                                                                        <span>info@softnio.com</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span>+811 758-756433</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>karachi</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>Lorem ipsum dolor sit amet.</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-mb">
                                                            <span>12 active projects</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="tb-status text-success">Active</span>
                                                        </div>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="html/under_const/index.html" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                                        <em class="icon ni ni-mail-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="html/under_const/index.html" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                                        <em class="icon ni ni-user-cross-fill"></em>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="html/under_const/index.html" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="html/lms/users_detail.php"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                <li><a href="html/under_const/index.html"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div> -->




























                                                    <?php

include 'connect.php';



 $stmt = $conn->prepare("select * from users" );
  $stmt->execute();


$result = $stmt->fetchAll(PDO::FETCH_BOTH);





?>


<?php
if(count($result)){

    foreach($result as $print){
        


        

?>



                                                    <!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid2">
                                                                <label class="custom-control-label" for="uid2"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <a href="html/lms/instructor-details.html">
                                                                <div class="user-card">
                                                                    <div class="user-avatar">
                                                                        <img src="html/lms/<?php echo $print['profile'];?>" alt="">
                                                                    </div>
                                                                    <div class="user-info">
                                                                        <span class="tb-lead"><?php echo $print['username']; ?> <span class="dot dot-warning d-md-none ms-1"></span></span>
                                                                        <span><?php echo $print['email']; ?></span></br>
                                                                        <span><?php echo $print['password']; ?></span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span><?php echo $print['phone']; ?></span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span><?php echo $print['role']; ?></span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span><?php echo $print['state']; ?></span>
                                                        </div>
                                                       
                                                     
                                                        <?php
                                                       

                                                       if($print['updatesystem'] == 'update'){
                                                       
                                                       ?>
                                                       
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="tb-status text-danger"><?php echo $print['updatesystem']; ?></span>
                                                        </div>
                                                        <?php
                                                       
                                                       }else{
                                                       
                                                       ?>
                                                       


                                                       
                                                       <div class="nk-tb-col tb-col-md">
                                                            <span class="tb-status text-success"><?php echo $print['updatesystem']; ?></span>
                                                        </div>
                                                        <?php

                                                 
                                                       
                                                       }
                                                       
                                                       ?>
                                                        <div class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a data-bs-toggle="modal" href="#changepassword" id='<?php echo $print['id'];?>' title="<?php echo $print['password'];?>" name="<?php echo $print['username'];?>" onclick="document.getElementById('ids').value = this.id;document.getElementById('password').value = this.title;document.getElementById('username').value = this.name;"  class="btn btn-trigger btn-icon"  >
                                                                        <em class="icon ni ni-edit"></em>
                                                                    </a>
                                                                </li>
                                                                <li class="nk-tb-action-hidden">
                                                                    <button  data-id='<?php echo $print['id'];?>' class="btn delete_product btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                                                        <em class="icon ni ni-trash"></em>
                                                                    </button>
                                                                </li>
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="html/under_const/index.html" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="html/lms/users_detail.php?id=<?php echo $print['id'];?>"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->

<?php
    }}
    ?>
                                                    
                                                </div><!-- .nk-tb-list -->
                                            </div>
                                            <div class="card-inner">
                                                <div class="nk-block-between-md g-3">
                                                    <div class="g">
                                                        <ul class="pagination justify-content-center justify-content-md-start">
                                                            <li class="page-item"><a class="page-link" href="html/under_const/index.html"><em class="icon ni ni-chevrons-left"></em></a></li>
                                                            <li class="page-item"><a class="page-link" href="html/under_const/index.html">1</a></li>
                                                            <li class="page-item"><a class="page-link" href="html/under_const/index.html">2</a></li>
                                                            <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                                                            <li class="page-item"><a class="page-link" href="html/under_const/index.html">6</a></li>
                                                            <li class="page-item"><a class="page-link" href="html/under_const/index.html">7</a></li>
                                                            <li class="page-item"><a class="page-link" href="html/under_const/index.html"><em class="icon ni ni-chevrons-right"></em></a></li>
                                                        </ul><!-- .pagination -->
                                                    </div>
                                                    <div class="g">
                                                        <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                                            <div>Page</div>
                                                            <div>
                                                                <select class="form-select js-select2" data-search="on" data-dropdown="xs center">
                                                                    <option value="page-1">1</option>
                                                                    <option value="page-2">2</option>
                                                                    <option value="page-4">4</option>
                                                                    <option value="page-5">5</option>
                                                                    <option value="page-6">6</option>
                                                                    <option value="page-7">7</option>
                                                                    <option value="page-8">8</option>
                                                                    <option value="page-9">9</option>
                                                                    <option value="page-10">10</option>
                                                                    <option value="page-11">11</option>
                                                                    <option value="page-12">12</option>
                                                                    <option value="page-13">13</option>
                                                                    <option value="page-14">14</option>
                                                                    <option value="page-15">15</option>
                                                                    <option value="page-16">16</option>
                                                                    <option value="page-17">17</option>
                                                                    <option value="page-18">18</option>
                                                                    <option value="page-19">19</option>
                                                                    <option value="page-20">20</option>
                                                                </select>
                                                            </div>
                                                            <div>OF 102</div>
                                                        </div>
                                                    </div><!-- .pagination-goto -->
                                                </div><!-- .nk-block-between -->
                                            </div>
                                            <!--card inner-->
                                        </div>
                                    </div>
                                    <!--card-->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; 2022 Deniss. Developed by <a href="https://designsexpertise.com/" target="_blank">DESIGNS EXPERTISE.</a>
                            </div>
                            <div class="nk-footer-links">
                                <ul class="nav nav-sm">
                                    <li class="nav-item dropup">
                                        <a href="html/under_const/index.html" class="dropdown-toggle dropdown-indicator has-indicator nav-link text-base" data-bs-toggle="dropdown" data-offset="0,10"><span>English</span></a>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                            <ul class="language-list">
                                                <li>
                                                    <a href="html/under_const/index.html" class="language-item">
                                                        <span class="language-name">English</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="html/under_const/index.html" class="language-item">
                                                        <span class="language-name">Español</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="html/under_const/index.html" class="language-item">
                                                        <span class="language-name">Français</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="html/under_const/index.html" class="language-item">
                                                        <span class="language-name">Türkçe</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a data-bs-toggle="modal" href="#region" class="nav-link"><em class="icon ni ni-globe"></em><span class="ms-1">Select Region</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- select region modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="region">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="html/under_const/index.html" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title mb-4">Select Your Country</h5>
                    <div class="nk-country-region">
                        <ul class="country-list text-center gy-2">
                            <li>
                                <a href="html/under_const/index.html" class="country-item">
                                    <img src="./images/flags/arg.png" alt="" class="country-flag">
                                    <span class="country-name">Argentina</span>
                                </a>
                            </li>
                            <li>
                                <a href="html/under_const/index.html" class="country-item">
                                    <img src="./images/flags/aus.png" alt="" class="country-flag">
                                    <span class="country-name">Faisalabad</span>
                                </a>
                            </li>
                            <li>
                                <a href="html/under_const/index.html" class="country-item">
                                    <img src="./images/flags/Rawalpandi.png" alt="" class="country-flag">
                                    <span class="country-name">Rawalpandi</span>
                                </a>
                            </li>
                            <li>
                                <a href="html/under_const/index.html" class="country-item">
                                    <img src="./images/flags/Hyderabad.png" alt="" class="country-flag">
                                    <span class="country-name">Hyderabad <small>(English)</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="html/under_const/index.html" class="country-item">
                                    <img src="./images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">Centrafricaine</span>
                                </a>
                            </li>
                            <li>
                                <a href="html/under_const/index.html" class="country-item">
                                    <img src="./images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">China</span>
                                </a>
                            </li>
                            <li>
                                <a href="html/under_const/index.html" class="country-item">
                                    <img src="./images/flags/french.png" alt="" class="country-flag">
                                    <span class="country-name">France</span>
                                </a>
                            </li>
                            <li>
                                <a href="html/under_const/index.html" class="country-item">
                                    <img src="./images/flags/germany.png" alt="" class="country-flag">
                                    <span class="country-name">Germany</span>
                                </a>
                            </li>
                            <li>
                                <a href="html/under_const/index.html" class="country-item">
                                    <img src="./images/flags/iran.png" alt="" class="country-flag">
                                    <span class="country-name">Iran</span>
                                </a>
                            </li>
                            <li>
                                <a href="html/under_const/index.html" class="country-item">
                                    <img src="./images/flags/italy.png" alt="" class="country-flag">
                                    <span class="country-name">Italy</span>
                                </a>
                            </li>
                            <li>
                                <a href="html/under_const/index.html" class="country-item">
                                    <img src="./images/flags/mexico.png" alt="" class="country-flag">
                                    <span class="country-name">México</span>
                                </a>
                            </li>
                            <li>
                                <a href="html/under_const/index.html" class="country-item">
                                    <img src="./images/flags/philipine.png" alt="" class="country-flag">
                                    <span class="country-name">Philippines</span>
                                </a>
                            </li>
                            <li>
                                <a href="html/under_const/index.html" class="country-item">
                                    <img src="./images/flags/portugal.png" alt="" class="country-flag">
                                    <span class="country-name">Portugal</span>
                                </a>
                            </li>
                            <li>
                                <a href="html/under_const/index.html" class="country-item">
                                    <img src="./images/flags/s-africa.png" alt="" class="country-flag">
                                    <span class="country-name">South Africa</span>
                                </a>
                            </li>
                            <li>
                                <a href="html/under_const/index.html" class="country-item">
                                    <img src="./images/flags/spanish.png" alt="" class="country-flag">
                                    <span class="country-name">Spain</span>
                                </a>
                            </li>
                            <li>
                                <a href="html/under_const/index.html" class="country-item">
                                    <img src="./images/flags/switzerland.png" alt="" class="country-flag">
                                    <span class="country-name">Switzerland</span>
                                </a>
                            </li>
                            <li>
                                <a href="html/under_const/index.html" class="country-item">
                                    <img src="./images/flags/uk.png" alt="" class="country-flag">
                                    <span class="country-name">Islamabad</span>
                                </a>
                            </li>
                            <li>
                                <a href="html/under_const/index.html" class="country-item">
                                    <img src="./images/flags/english.png" alt="" class="country-flag">
                                    <span class="country-name">karachi</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div><!-- .modal -->
    <!-- Add instructor-->
    <div class="modal fade" role="dialog" id="instructor-add">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="html/under_const/index.html" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">Add Users</h5>
                    <form action="html/lms/submit.php" enctype="multipart/form-data" method="post" class="pt-2">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="first-name">First Name</label>
                                    <input type="text" class="form-control" id="first-name" name="fname" placeholder="First name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="last-name">Last Name</label>
                                    <input type="text" class="form-control" id="last-name" name="lname" placeholder="Last name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="email">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Phone Number</label>
                                    <input type="text" class="form-control" id="phone-no" name="phone" value="" placeholder="Phone Number">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Password</label>
                                    <input type="password" class="form-control" id="phone-no" name="password" value="" placeholder="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="country">State</label>
                                    <select name="state" class="form-select js-select2" id="country">
                                        <option>Karachi</option>
                                        <option>Lahore</option>
                                        <option>Islamabad</option>
                                        <option>Hyderabad</option>
                                        <option>Faisalabad</option>
                                        <option>Rawapandi</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="address-l1">Address </label>
                                    <input type="text" name="address" class="form-control" id="address-l1" value="">
                                </div>
                            </div>
                        
                           
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="country">Role</label>
                                    <select name="role" class="form-select js-select2" id="country">
                                    <option>Admin</option>
                                        <option>Supervisor</option>
                                        <option>Manager</option>
                                        <option>Worker</option>
                                        
                                     
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address-l1">Upload Profile </label>
                                    <input type="file" name="photo" class="form-control" id="address-l1" value="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <input type="submit"  class="btn btn-primary" value="Add User" name="add_user">
                                    </li>
                                    <li>
                                        <a href="html/under_const/index.html" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
    <!-- JavaScript -->




    



    <div class="modal fade" id="changepassword">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <a href="html/under_const/index.html" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross"></em></a>
               <form method="post" action="html/lms/update.php">
                <div class="modal-body">
                   
                <h5 class="title mb-4">User Edit</h5>
                   
                    <div class="form-group">
                   
                                                        <label class="form-label" for="email">ID</label>
                                                        <input type="" name="ids" class="form-control" readonly id="ids">
                                                        <label class="form-label" for="email">Username</label>
                                                        <input type="" name="username" class="form-control" id="username">

                                                        <label class="form-label" for="email">Password</label>
                                                        <input type="" name="password" class="form-control" id="password">
                                                        
                                                  
                    </div>
                    <div class="form-group">
                        <button data-bs-dismiss="modal" name="userEdit" type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
</form>
            </div>
        </div>
    </div>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        Checkbox is checked
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
    <script src="./assets/js/bundle.js?ver=3.0.3"></script>
    <script src="./assets/js/scripts.js?ver=3.0.3"></script><script src="html/lms/datetime.js"></script>



<script type="text/javascript">


function run(){


    location.reload(true); 
}

				$(document).ready(function(){
			

					$(document).on('click', '.delete_product', function(){
						var id = $(this).data('id');

						swal.fire({
							title: 'Are you sure?',
							text: "User is Delete?",
							icon: 'warning',
							showCancelButton: true,
							confirmButtonColor: '#3085d6',
							cancelButtonColor: '#d33',
							confirmButtonText: 'Yes, delete it!',
						}).then((result) => {
							if (result.value){
								$.ajax({
									url: 'html/lms/delete.php?action=user_delete',
									type: 'POST',
									data: 'id='+id,
									dataType: 'json'
								})
								.done(function(response){
									swal.fire('Deleted!', response.message, response.status);
                                    run();
							
								})
								.fail(function(){
									swal.fire('Oops...', 'Something went wrong with ajax !', 'error');
								});
							}

						})

					});
				});

                </script>


</body>

</html>