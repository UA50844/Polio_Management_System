<?php



include 'header.php';
?>



<?php




include 'connect.php';
$lid = $_GET['id']; 

$stmt = $conn->prepare("select * from public_data where id = '$lid' " );
$stmt->fetchAll(PDO::FETCH_BOTH);
$stmt->execute();

$result = $stmt->fetch();
$data = $result;


$username =  $data['fname'].' '. $data['lname'];

?>

    
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h3 class="nk-block-title page-title">User/ <strong class="text-primary small"><?php echo $username;?></strong></h3>
                                    </div>
                                </div>
                                <div class="nk-block nk-block-lg">
                                    <div class="card card-stretch">
                                        <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#personal-info"><em class="icon ni ni-user-circle-fill"></em><span>Personal information</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#profile-overview"><em class="icon ni ni-eye-fill"></em><span>Overview Status</span></a>
                                            </li>
                                            <!-- <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#profile-courses"><em class="icon ni ni-book-fill"></em><span>Lead Status</span></a>
                                            </li>


                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#data-transfer"><em class="icon ni ni-tranx-fill"></em></em><span>Data Transfer</span></a>
                                            </li> -->
                                         

                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#profile-access"><em class="icon ni ni-lock-alt-fill"></em><span>Details</span> </a>
                                            </li>
                                            <li class="nav-item nav-item-trigger">
                                                <a href="html/lms/public_detail_edit.php?id=<?php echo $data['id']?>" class="btn btn-icon btn-trigger"><em class="icon ni ni-edit"></em></a>
                                            </li>
                                        </ul>
                                        <div class="card-inner">
                                            <div class="tab-content">
                                                <div class="tab-pane active"  id="personal-info">
                                                    <div class="nk-block">
                                                        <div class="profile-ud-list">
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">Title</span>
                                                                    <span class="profile-ud-value">Mr.</span>
                                                                </div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">Full Name</span>
                                                                    <span class="profile-ud-value"><?php echo $username?></span>
                                                                </div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">Date of Birth</span>
                                                                    <span class="profile-ud-value"><?php echo $data['dob']?></span>
                                                                </div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">Surname</span>
                                                                    <span class="profile-ud-value text-uppercase" >

                                                                    <?php  	
   

   $words = explode(" ", $username);

   
   foreach ($words as $w) {
     $acronym = mb_substr($w, 0, 1);
     echo $acronym;
   }
   
?>
                                                                    
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">Cnic No</span>
                                                                    <span class="profile-ud-value"><?php echo $data['cnic']?></span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">Date of Issue</span>
                                                                    <span class="profile-ud-value"><?php echo $data['doi']?></span>
                                                                </div>
                                                            </div>

                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">Mobile Number</span>
                                                                    <span class="profile-ud-value"><?php echo $data['phone']?></span>
                                                                </div>
                                                            </div>
                                                                
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">Whatsapp Number</span>
                                                                    <span class="profile-ud-value"><?php echo $data['whatsapp']?></span>
                                                                </div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">Email Address</span>
                                                                    <span class="profile-ud-value"><?php echo $data['email']?></span>
                                                                </div>
                                                            </div>
                                                        </div><!-- .profile-ud-list -->
                                                    </div><!-- .nk-block -->
                                                    <div class="nk-block">
                                                        <div class="nk-block-head nk-block-head-line">
                                                            <h6 class="title overline-title text-base">Additional Information</h6>
                                                        </div><!-- .nk-block-head -->
                                                        <div class="profile-ud-list">
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">Joining Date</span>
                                                                    <span class="profile-ud-value"><?php echo date('F j, Y, g:i a',strtotime($data['entry_date'])); ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">Country</span>
                                                                    <span class="profile-ud-value">Pakistan</span>
                                                                </div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">City</span>
                                                                    <span class="profile-ud-value"><?php echo $data['city']?></span>
                                                                </div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">State</span>
                                                                    <span class="profile-ud-value"><?php echo $data['state']?></span>
                                                                </div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">Postal Code</span>
                                                                    <span class="profile-ud-value"><?php echo $data['postal_code']?></span>
                                                                </div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">Address</span>
                                                                    <span class="profile-ud-value"><?php echo $data['address']?></span>
                                                                </div>
                                                            </div>
                                                            <div class="profile-ud-item">
                                                                <div class="profile-ud wider">
                                                                    <span class="profile-ud-label">Nationality</span>
                                                                    <span class="profile-ud-value">Pakistani</span>
                                                                </div>
                                                            </div>
                                                        </div><!-- .profile-ud-list -->
                                                    </div><!-- .nk-block -->
                                                    <div class="nk-divider divider md"></div>
                                              

                                                </div><!-- tab pane -->
                                                <div class="tab-pane" id="profile-overview">
                                                    <div class="nk-block-head nk-block-head-md">
                                                        <div class="nk-block-between">
                                                            <div class="nk-block-head-content">
                                                                <h5 class="nk-block-title">Profile Overview</h5>
                                                            </div><!-- .nk-block-head-content -->
                                                            <div class="nk-block-head-content">
                                                                <div class="toggle-wrap nk-block-tools-toggle">
                                                                    <a href="html/under_const/index.html" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                                    <div class="toggle-expand-content" data-content="pageMenu">
                                                                        <ul class="nk-block-tools g-3">
                                                                            <li>
                                                                                <div class="drodown">
                                                                                    <a href="html/under_const/index.html" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-bs-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-calender-date"></em><span><span class="d-none d-md-inline">Last</span> 30 Days</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                                        <ul class="link-list-opt no-bdr">
                                                                                            <li><a href="html/under_const/index.html"><span>Last 30 Days</span></a></li>
                                                                                            <li><a href="html/under_const/index.html"><span>Last 6 Months</span></a></li>
                                                                                            <li><a href="html/under_const/index.html"><span>Last 1 Years</span></a></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div><!-- .toggle-wrap -->
                                                            </div><!-- .nk-block-head-content -->
                                                        </div>
                                                    </div><!-- .nk-block-head -->
                                                    <div class="nk-block">
                                                        <div class="row g-gs">
                                                            <div class="col-xxl-8 col-lg-12">
                                                                <div class="card card-full card-bordered border-light">
                                                                    <div class="nk-ecwg nk-ecwg5">
                                                                        <div class="card-inner">
                                                                            <div class="card-title-group align-start pb-3 g-2">
                                                                                <div class="card-title">
                                                                                    <h6 class="title">Total Earning</h6>
                                                                                </div>
                                                                                <div class="card-tools">
                                                                                    <em class="card-hint icon ni ni-help" data-bs-toggle="tooltip" data-bs-placement="left" title="Revenu of this month"></em>
                                                                                </div>
                                                                            </div>
                                                                            <div class="data-group">
                                                                                <div class="data">
                                                                                    <div class="title">Monthly</div>
                                                                                    <div class="amount amount-sm">9.28K</div>
                                                                                    <div class="change up"><em class="icon ni ni-arrow-long-up"></em>4.63%</div>
                                                                                </div>
                                                                                <div class="data">
                                                                                    <div class="title">Weekly</div>
                                                                                    <div class="amount amount-sm">2.69K</div>
                                                                                    <div class="change down"><em class="icon ni ni-arrow-long-down"></em>1.92%</div>
                                                                                </div>
                                                                                <div class="data">
                                                                                    <div class="title">Daily (Avg)</div>
                                                                                    <div class="amount amount-sm">0.94K</div>
                                                                                    <div class="change up"><em class="icon ni ni-arrow-long-up"></em>3.45%</div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="nk-ecwg5-ck">
                                                                                <canvas class="lms-line-chart-s4" id="storeVisitors"></canvas>
                                                                            </div>
                                                                            <div class="chart-label-group">
                                                                                <div class="chart-label">01 Jul, 2020</div>
                                                                                <div class="chart-label">30 Jul, 2020</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- .card -->
                                                            </div><!-- .col -->
                                                            <div class="col-xxl-4">
                                                                <div class="row g-gs">
                                                                    <div class="col-xxl-12 col-md-6">
                                                                        <div class="card card-full card-bordered border-light">
                                                                            <div class="nk-ecwg nk-ecwg3">
                                                                                <div class="card-inner pb-0">
                                                                                    <div class="card-title-group">
                                                                                        <div class="card-title">
                                                                                            <h6 class="title"><a href="">Active Project</a></h6>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="data">
                                                                                        <div class="data-group">
                                                                                            <div class="amount">329</div>
                                                                                            <div class="info text-end"><span class="change up text-danger"><em class="icon ni ni-arrow-long-up"></em>4.63%</span><br><span>vs. last week</span></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div><!-- .card-inner -->
                                                                                <div class="nk-ecwg3-ck">
                                                                                    <canvas class="lms-line-chart-s1" id="activeStudents"></canvas>
                                                                                </div>
                                                                            </div><!-- .nk-ecwg -->
                                                                        </div><!-- .card -->
                                                                    </div><!-- .col -->
                                                                    <div class="col-xxl-12 col-md-6">
                                                                        <div class="card card-full card-bordered border-light">
                                                                            <div class="nk-ecwg nk-ecwg3">
                                                                                <div class="card-inner pb-0">
                                                                                    <div class="card-title-group">
                                                                                        <div class="card-title">
                                                                                            <h6 class="title"><a href="">New Product</a></h6>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="data">
                                                                                        <div class="data-group">
                                                                                            <div class="amount">194</div>
                                                                                            <div class="info text-end"><span class="change up text-danger"><em class="icon ni ni-arrow-long-up"></em>4.63%</span><br><span>vs. Yesterday</span></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div><!-- .card-inner -->
                                                                                <div class="nk-ecwg3-ck">
                                                                                    <canvas class="lms-line-chart-s1" id="newStudents"></canvas>
                                                                                </div>
                                                                            </div><!-- .nk-ecwg -->
                                                                        </div><!-- .card -->
                                                                    </div><!-- .col -->
                                                                </div><!-- .row -->
                                                            </div><!-- .col -->
                                                        </div><!-- .row -->
                                                    </div><!-- .nk-block -->
                                                </div>
                                                <!--tab pane-->
                                                <div class="tab-pane" id="profile-courses">
                                                    <div class="nk-tb-list border border-light rounded overflow-hidden is-compact">
                                                        <div class="nk-tb-item nk-tb-head">
                                                            <div class="nk-tb-col">
                                                                <span class="lead-text">#</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="lead-text">Leads</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="lead-text d-none d-sm-inline">Status</span>
                                                            </div>
                                                            <div class="nk-tb-col nk-tb-col-tools">
                                                                <span class="lead-text">&nbsp;</span>
                                                            </div>
                                                        </div>





                                                        
                                
                                <?php





    $users = $data['email'];
 




    








$checkStatus = $conn->prepare("select * from asignwork  where users = '$users' " );




    $checkStatus->execute();
   
   $resulted =  $checkStatus->fetchAll(PDO::FETCH_BOTH);




    
$sum1 = $sum2 = $sum3 = $sum4 = $sum5 = $sum6 =$sum7 =$sum8 = $sum9 = 0 ;





if(count($resulted)){

    foreach($resulted as $print_c){


        $sum1 +=$print_c['new'];
        $ccc1 = $sum1;

        $sum2 +=$print_c['paid'];
        $ccc2 = $sum2;
        
        $sum3 +=$print_c['unpaid'];
        $ccc3 = $sum3;
        
        $sum4 +=$print_c['followup'];
        $ccc4 = $sum4;
        
        $sum5 +=$print_c['interested'];
        $ccc5 = $sum5;
        
        $sum6 +=$print_c['no_interested'];
        $ccc6 = $sum6;
        
        $sum7 +=$print_c['invalid'];
        $ccc7 = $sum7;
        
        $sum8 +=$print_c['no_response'];
        $ccc8 = $sum8;
        
        $sum9 +=$print_c['totallead'];
        $ccc9 = $sum9;



    }}






    $totalnew = $ccc1;
    $totalpaid = $ccc2;
    $totalunpaid = $ccc3;
    $totalfollowup = $ccc4;
    $totalinterested = $ccc5;
    $totalnointerested = $ccc6;
    $totalinvalid = $ccc7;
    $totalnoresponse = $ccc8;
    $totalllead = $ccc9;







?>













                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col"> # </div>
                                                            <div class="nk-tb-col"> 
                                                            New </div>
                                                            <div class="nk-tb-col">
                                                                <span class="badge badge-dot badge-dot-xs bg-primary"><?php echo $totalnew;?></span>
                                                            </div>
                                                          
                                                        </div>

                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col"> # </div>
                                                            <div class="nk-tb-col"> 
                                                            Paid </div>
                                                            <div class="nk-tb-col">
                                                                <span class="badge badge-dot badge-dot-xs bg-primary"><?php echo $totalpaid;?></span>
                                                            </div>
                                                           
                                                        </div>

                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col"> # </div>
                                                            <div class="nk-tb-col"> 
                                                            Unpaid </div>
                                                            <div class="nk-tb-col">
                                                                <span class="badge badge-dot badge-dot-xs bg-primary"><?php echo $totalunpaid;?></span>
                                                            </div>
                                                            
                                                        </div>


                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col"> # </div>
                                                            <div class="nk-tb-col"> 
                                                            Followup </div>
                                                            <div class="nk-tb-col">
                                                                <span class="badge badge-dot badge-dot-xs bg-primary"><?php echo $totalfollowup;?></span>
                                                            </div>
                                                           
                                                        </div>


                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col"> # </div>
                                                            <div class="nk-tb-col"> 
                                                            Invalid </div>
                                                            <div class="nk-tb-col">
                                                                <span class="badge badge-dot badge-dot-xs bg-primary"><?php echo $totalinvalid;?></span>
                                                            </div>

                                                        </div>


                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col"> # </div>
                                                            <div class="nk-tb-col"> 
                                                            Not Response </div>
                                                            <div class="nk-tb-col">
                                                                <span class="badge badge-dot badge-dot-xs bg-primary"><?php echo $totalnoresponse;?></span>
                                                            </div>
                                                         
                                                        </div>


                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col"> # </div>
                                                            <div class="nk-tb-col"> 
                                                            Interested </div>
                                                            <div class="nk-tb-col">
                                                                <span class="badge badge-dot badge-dot-xs bg-primary"><?php echo $totalinterested;?></span>
                                                            </div>
                                                          
                                                        </div>


                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col"> # </div>
                                                            <div class="nk-tb-col"> 
                                                            Not Interested </div>
                                                            <div class="nk-tb-col">
                                                                <span class="badge badge-dot badge-dot-xs bg-primary"><?php echo $totalnointerested;?></span>
                                                            </div>
                                                           
                                                        </div>


                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col"> # </div>
                                                            <div class="nk-tb-col"> 
                                                            Total Leads </div>
                                                            <div class="nk-tb-col">
                                                                <span class="badge badge-dot badge-dot-xs bg-primary"><?php echo $totalllead;?></span>
                                                            </div>
                                                           
                                                        </div>


                                                        
                                                        <!-- <div class="nk-tb-item">
                                                            <div class="nk-tb-col"> 2 </div>
                                                            <div class="nk-tb-col"> Flat Slab Construction. </div>
                                                            <div class="nk-tb-col">
                                                                <span class="badge badge-dot badge-dot-xs bg-warning">Pending</span>
                                                            </div>
                                                            <div class="nk-tb-col nk-tb-col-tools">
                                                                <ul class="nk-tb-actions gx-1">
                                                                    <li>
                                                                        <a href="html/under_const/index.html" class="btn btn-sm btn-icon btn-trigger me-n1"><em class="icon ni ni-trash-alt text-danger"></em></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col"> 3 </div>
                                                            <div class="nk-tb-col"> 
                                                            Twin Wall Technology. </div>
                                                            <div class="nk-tb-col">
                                                                <span class="badge badge-dot badge-dot-xs bg-danger">Canceled</span>
                                                            </div>
                                                            <div class="nk-tb-col nk-tb-col-tools">
                                                                <ul class="nk-tb-actions gx-1">
                                                                    <li>
                                                                        <a href="html/under_const/index.html" class="btn btn-sm btn-icon btn-trigger me-n1"><em class="icon ni ni-trash-alt text-danger"></em></a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                </div>
                                                <!--tab pane-->









































 <div class="tab-pane" id="data-transfer">
                                                 <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">Data Transfer</h4>
                                                <!-- <div class="nk-block-des">
                                                    <p>The switch markup of a <code>.custom-control</code> <code class="code-fnc">checkbox</code> but uses the <code>.custom-switch</code> class to render a toggle switch.</p>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="card card-bordered card-preview">
                                            <div class="card-inner">
                                                <div class="row gy-4">
                                             
                                                    <div class="col-5 transfered border border-primary p-3 m-2">


                                                    <form id="dataForm" action="html/lms/datatransfer.php" method="post">
   
   


   <div class="col-md-12">
   <div class="form-group">
       <label class="form-label" for="email">User's Data</label>
       <input type="hidden"  name="data_transfer" class="form-control" readonly  placeholder="Name" value="">
       <input type="" name="trans_own" class="form-control" readonly  placeholder="Name" value="<?php echo $data['email'];?>">
   </div>
</div>
   
<div class="col-md-12">
   <div class="form-group">
       <label class="form-label" for="phone-no" ></label>
       <div class="form-control-wrap">

       <select class="form-select js-select2" data-search="on" name="usertrans">
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


<option value="<?php echo $print['email']?>"><?php echo $print['username']?>   (  <?php echo $print['email']?>  ) </option>




<?php

}}

?>









           </select>
       </div>
   </div>
</div>











<!--col-->

   <div class=" offset-4 col-4">
       <div class="preview-block">
           <span class="preview-title mt-3 overline-title"></span>
           <div class="g-3 align-center flex-wrap">


         
            
           

                                                                 
           <button type="submit" class="btn-lg btn-block btn-primary d-none d-md-inline-flex"  name=""><em class="icon ni ni-tranx-fill"></em><span> Data Transfer </span></button>





              
              
           </div>
       </div>
   </div>






</form>



                                                    </div>
                                                    <div class="col-6 deleted border border-danger p-3 m-2">
                                                <form id="dataDel" action="html/lms/datatransfer.php" method="post">
   
   


                                                    <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">User's Data</label>

                                                        <input type="hidden"  name="data_delete" class="form-control" readonly  placeholder="Name" value="">

                                                        <input type="" name="trans_own" class="form-control" readonly  placeholder="Name" value="<?php echo $data['email'];?>">
                                                    </div>
                                                </div>
                                                    
                                            <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="phone-no" ></label>
                                                        <div class="form-control-wrap">

                                                        <select class="form-select js-select2" data-search="on" name="usertrans">
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


					<option value="<?php echo $print['email']?>"><?php echo $print['username']?>   (  <?php echo $print['email']?>  ) </option>




<?php

    }}

    ?>







							
                                      
                                                            </select>
                                                        </div>
                                                    </div>
                                            </div>




                                        




                                              
                                       
                                                <!--col-->
                                              
                                                    <div class=" offset-4 col-4">
                                                        <div class="preview-block">
                                                            <span class="preview-title mt-3 overline-title"></span>
                                                            <div class="g-3 align-center flex-wrap">


                                                          
                                                             
                                                            

                                                                                                                  
                                                            <button type="submit" class="btn-lg btn-block btn-danger d-none d-md-inline-flex"  name=""><em class="icon ni ni-trash-alt"></em><span> Transfer Data Deleted </span></button>
   




                                                               
                                                               
                                                            </div>
                                                        </div>
                                                    </div>






</form>




</div>


                                                    <!-- <div class="col-12">
                                                        <p class="text-soft">For large or small size of <code>.custom-switch</code>, use <code>.custom-control-{lg|sm}</code> with <code>.custom-control</code> class.</p>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->
                                       
                                    </div><!-- .nk-block -->
                                                </div>
                                                <!--tab pane-->


                                    





                                                


                                                 <!--tab pane-->
                                                 <div class="tab-pane" id="profile-access">
                                                 <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">Page Access</h4>
                                                <!-- <div class="nk-block-des">
                                                    <p>The switch markup of a <code>.custom-control</code> <code class="code-fnc">checkbox</code> but uses the <code>.custom-switch</code> class to render a toggle switch.</p>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="card card-bordered card-preview">
                                            <div class="card-inner">
                                                <div class="row gy-4">
                                                    
                                                    <div class="col-12">
                                                    
                                                    



                                                    
                          
<?php







$hv_code = $data['p_code'];

$paxes = $conn->prepare("select * from public_member where p_code = '$hv_code'" );




  $paxes->execute();


$pax_entry = $paxes->fetchAll(PDO::FETCH_BOTH);


$member = count($pax_entry);


?>

<h6 >Total : <span id="members"><?php echo $member;?></span> Kids</h6>


                          <table class="table" id="crud_table">
<thead class="thead-dark bg-dark text-white">
<tr>
<th scope="col">S.no</th>
        <th scope="col">Name</th>
        <th scope="col">Father Name</th>
        <th scope="col">Date of  Birth</th>

        <th scope="col">Age</th>
        <th scope="col">Gender</th>


</tr>
</thead>

<tbody>










<?php
if(count($pax_entry)){



    foreach($pax_entry as $key => $pax){


      

// Loop through the array using foreach and print each number



    


        

?>





<div style="padding-left:500px;">

<tr >
<td class="col-1" > 
<input type=""   class="form-control sr_no" id="sr_no" name="" readonly value="<?php echo $key + 1 ?>"  placeholder="" >
<input type="hidden"   class="form-control mem_id"  name="" readonly value="<?php echo $pax['id']; ?>"  placeholder="" >
</td>


        <td class="col-3" > 
            <input type=""   class="form-control name_mem" readonly  placeholder="item & description" value="<?php echo $pax['name'];?>" >

        </td>

        
        <td class="col-3" > 
            <input type=""   class="form-control father_name" readonly  onkeyup='calc(<?php echo $key + 1?>)' id='qty<?php echo $key + 1?>' name="qty[]" placeholder="qty" value="<?php echo $pax['father_name'];?>">
        </td>
        
        <td class="col-2" > 
            <input type="date"   class="form-control dob_mem" readonly onkeyup='calc(<?php echo $key + 1?>)' id='cost<?php echo $key + 1?>' name="cost[]"  placeholder="rate" value="<?php echo $pax['dob'];?>">
        </td>
        
        <td class="col-1" > 
            <input type="number"   class="form-control age_mem" readonly onkeyup='calc(<?php echo $key + 1?>)' id='price<?php echo $key + 1?>'   name="price[]" placeholder="amount" value="<?php echo $pax['age'];?>">
        </td>

        <td class="col-2" > 
<select class="form-select  js-select2 gender_mem" data-search="on"  name="">
<option  readonly value="<?php echo $pax['gender'];?>"><?php echo $pax['gender'];?></option>
                                                
                                    
        </select>
</td>

        


		

        

       
        

        






</tr>




</div>

<?php

}
}
?>













</tbody>
</table>












                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .card-preview -->
                                       
                                    </div><!-- .nk-block -->
                                                </div>
                                                <!--tab pane-->
                                            </div>
                                            <!--tab content-->
                                        </div>
                                        <!--card inner-->
                                    </div>
                                    <!--card-->
                                </div>
                                <!--nk block lg-->
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
                                    <span class="country-name">Australia</span>
                                </a>
                            </li>
                            <li>
                                <a href="html/under_const/index.html" class="country-item">
                                    <img src="./images/flags/bangladesh.png" alt="" class="country-flag">
                                    <span class="country-name">Bangladesh</span>
                                </a>
                            </li>
                            <li>
                                <a href="html/under_const/index.html" class="country-item">
                                    <img src="./images/flags/canada.png" alt="" class="country-flag">
                                    <span class="country-name">Canada <small>(English)</small></span>
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
                                    <span class="country-name">United Kingdom</span>
                                </a>
                            </li>
                            <li>
                                <a href="html/under_const/index.html" class="country-item">
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
    <!-- Add instructor-->
    <div class="modal fade" role="dialog" id="instructor-add">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="html/under_const/index.html" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">Add Instructor</h5>
                    <form action="#" class="pt-2">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="first-name">First Name</label>
                                    <input type="text" class="form-control" id="first-name" placeholder="First name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="last-name">Last Name</label>
                                    <input type="text" class="form-control" id="last-name" placeholder="Last name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="email">Email Address</label>
                                    <input type="email" class="form-control" id="email" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Phone Number</label>
                                    <input type="text" class="form-control" id="phone-no" value="+880" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address-l1">Address Line 1</label>
                                    <input type="text" class="form-control" id="address-l1" value="2337 Kildeer Drive">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address-line2">Address Line 2</label>
                                    <input type="text" class="form-control" id="address-line2" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="address-st">State</label>
                                    <input type="text" class="form-control" id="address-st" value="Kentucky">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="country">Country</label>
                                    <select class="form-select js-select2" id="country">
                                        <option>Canada</option>
                                        <option>United State</option>
                                        <option>United Kindom</option>
                                        <option>Australia</option>
                                        <option>India</option>
                                        <option>Bangladesh</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="about-instractor">About Instractor</label>
                                    <textarea class="form-control textarea-sm" id="about-instractor" placeholder="Discribe a little bit"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <a href="html/under_const/index.html" class="btn btn-primary">Add Instructor</a>
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











   
    <script src="./assets/js/bundle.js?ver=3.0.3"></script>
    <script src="./assets/js/scripts.js?ver=3.0.3"></script><script src="html/lms/datetime.js"></script>
    <script src="./assets/js/charts/chart-lms.js?ver=3.0.3"></script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 







 <script>

$('#ac_all_reg').change(function () {
    ($(this).is(":checked") ? $('.ac_all_reg').prop("checked", true) :    $('.ac_all_reg').prop("checked", false))
});

$('#ac_all_sale').change(function () {
    ($(this).is(":checked") ? $('.ac_all_sale').prop("checked", true) :    $('.ac_all_sale').prop("checked", false))
});

$('#ac_all_pur').change(function () {
    ($(this).is(":checked") ? $('.ac_all_pur').prop("checked", true) :    $('.ac_all_pur').prop("checked", false))
});

$('#ac_all_acct').change(function () {
    ($(this).is(":checked") ? $('.ac_all_acct').prop("checked", true) :    $('.ac_all_acct').prop("checked", false))
});

$('#ac_all_invt').change(function () {
    ($(this).is(":checked") ? $('.ac_all_invt').prop("checked", true) :    $('.ac_all_invt').prop("checked", false))
});


$('#ac_all_manu').change(function () {
    ($(this).is(":checked") ? $('.ac_all_manu').prop("checked", true) :    $('.ac_all_manu').prop("checked", false))
});

$('#ac_all_user').change(function () {
    ($(this).is(":checked") ? $('.ac_all_user').prop("checked", true) :    $('.ac_all_user').prop("checked", false))
});



$('#ac_all_rep').change(function () {
    ($(this).is(":checked") ? $('.ac_all_rep').prop("checked", true) :    $('.ac_all_rep').prop("checked", false))
});



$('#ac_all_vou').change(function () {
    ($(this).is(":checked") ? $('.ac_all_vou').prop("checked", true) :    $('.ac_all_vou').prop("checked", false))
});

</script>









<script>
    document.getElementById("dataForm").addEventListener("submit", function(event) {
      event.preventDefault(); // Prevent the form from submitting

      Swal.fire({
        title: 'Are you sure?',
							text: "Data  Transfering for  !",
							icon: 'warning',
							showCancelButton: true,
							confirmButtonColor: '#3085d6',
							cancelButtonColor: '#d33',
							confirmButtonText: 'Yes,Transfer Data!',
        reverseButtons: true
      }).then(function(result) {
        if (result.isConfirmed) {
          // User clicked "Yes" - Submit the form
          event.target.submit();
        }
      });
    });



















    document.getElementById("dataDel").addEventListener("submit", function(event) {
      event.preventDefault(); // Prevent the form from submitting

      Swal.fire({
        title: 'Are you sure?',
							text: "Data is Deleted?",
							icon: 'warning',
							showCancelButton: true,
							confirmButtonColor: '#3085d6',
							cancelButtonColor: '#d33',
							confirmButtonText: 'Yes, delete it!',
        reverseButtons: true
      }).then(function(result) {
        if (result.isConfirmed) {
          // User clicked "Yes" - Submit the form
          event.target.submit();
        }
      });
    });
  </script>

   


</body>

</html>