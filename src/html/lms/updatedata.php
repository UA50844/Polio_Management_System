
<?php



include 'header.php';
?>
                <!-- main header @e -->
                <!-- content @s -->

      
            




                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="content-page wide-md m-auto">
                                    <div class="nk-block-head nk-block-head-lg wide-xs mx-auto">
                                        <div class="nk-block-head-content text-center">
                                            <h2 class="nk-block-title fw-normal">Query Updating</h2>
                                            <div class="nk-block-des">

                                            </div>
                                        </div>
                                    </div>  



                                                                        
                                                   


                                    <div class="card card-bordered card-preview">
                                            <div class="card-inner">
                                                <div class="example-alerts">
                                                    <div class="gy-4">











<!-- 
<php session> -->



               




     

<?php

include 'connect.php';

if(isset($_POST['ac_pages'])){



    $ac_id = $_POST['ac_id'];

    $ac_file_sec = $_POST['ac_file_sec'];
    // <sub pages>

    $ac_headsec = $_POST['ac_headsec'];
    $ac_client_info = $_POST['ac_client_info'];

    $ac_trans_auth = $_POST['ac_trans_auth'];
    $ac_umrah_mang = $_POST['ac_umrah_mang'];

        // <sub pages>ac_spec_inv

        $ac_umrah_ser = $_POST['ac_umrah_ser'];
        $ac_party_mang = $_POST['ac_party_mang'];
        $ac_party_agr = $_POST['ac_party_agr'];
   
        $ac_data_entry = $_POST['ac_data_entry'];
        $ac_tic_ent = $_POST['ac_tic_ent'];
        $ac_hot_ent = $_POST['ac_hot_ent'];

                 
 








        // <sub pages>
        $ac_ref_ent = $_POST['ac_ref_ent'];/////////////////
        $ac_spec_inv = $_POST['ac_spec_inv'];
        $ac_vou_ent = $_POST['ac_vou_ent'];/////////////////
        
        $ac_pay_vou = $_POST['ac_pay_vou'];
        $ac_sale_rep = $_POST['ac_sale_rep'];
        $ac_new_pas = $_POST['ac_new_pas'];
        $ac_hv_ws = $_POST['ac_hv_ws'];
        $ac_ad_hv = $_POST['ac_ad_hv'];
 
        $ac_ad_hot_vou = $_POST['ac_ad_hot_vou'];



        $ac_searching = $_POST['ac_searching'];


         // <sub pages>
      
         $ac_sea_tick = $_POST['ac_sea_tick'];
       
         
         $ac_sea_vou = $_POST['ac_sea_vou'];
         $ac_sea_pa = $_POST['ac_sea_pa'];
         $ac_sea_np = $_POST['ac_sea_np'];
         $ac_sea_hv = $_POST['ac_sea_hv'];
         $ac_sea_hv_ent = $_POST['ac_sea_hv_ent'];
         $ac_sea_ad_hv = $_POST['ac_sea_ad_hv'];
  
         $ac_sea_client = $_POST['ac_sea_client'];
         $ac_all_user = $_POST['ac_all_user'];


    $ac_user = $_POST['ac_user'];

     // <sub pages>
     $ac_user_pay = $_POST['ac_user_pay'];
     $ac_file_up = $_POST['ac_file_up'];
     $ac_ex_up = $_POST['ac_ex_up'];


    $ac_ex_led = $_POST['ac_ex_led'];
   


    
     // <sub pages>
     $ac_asg_user = $_POST['ac_asg_user'];
     
    







     $ac_all_vou = $_POST['ac_all_vou'];
     $ac_hv = $_POST['ac_hv'];
     $ac_cs = $_POST['ac_cs'];



     if(empty($ac_all_vou )){

        $ac_all_vou = 'off';
        }else{
            $ac_all_vou = 'on';
        }
        
if(empty($ac_hv )){

    $ac_hv = 'off';
    }else{
        $ac_hv = 'on';
    }


    
if(empty($ac_cs )){

    $ac_cs = 'off';
    }else{
        $ac_cs = 'on';
    }



if(empty($ac_file_sec )){

    $ac_file_sec = 'off';
    }else{
        $ac_file_sec = 'on';
    }

    // <sub pages>

    
if(empty($ac_headsec)){

    $ac_headsec = 'off';
    }else{
        $ac_headsec = 'on';
    }


    
if(empty($ac_client_info)){

    $ac_client_info = 'off';
    }else{
        $ac_client_info = 'on';
    }


    
if(empty($ac_ref_ent )){

    $ac_ref_ent = 'off';
    }else{
        $ac_ref_ent = 'on';
    }


    
    // <sub pages>

    


    
if(empty($ac_spec_inv)){

    $ac_spec_inv = 'off';
    }else{
        $ac_spec_inv = 'on';
    }




    if(empty($ac_vou_ent)){

        $ac_vou_ent = 'off';
        }else{
            $ac_vou_ent = 'on';
        }

        if(empty($ac_sale_rep)){

            $ac_sale_rep = 'off';
            }else{
                $ac_sale_rep = 'on';
            }



            if(empty($ac_new_pas)){

                $ac_new_pas = 'off';
                }else{
                    $ac_new_pas = 'on';
                }

                if(empty($ac_pay_vou)){

                    $ac_pay_vou = 'off';
                    }else{
                        $ac_pay_vou = 'on';
                    }

                    if(empty($ac_hv_ws)){

                        $ac_hv_ws = 'off';
                        }else{
                            $ac_hv_ws = 'on';
                        }


                        if(empty($ac_ad_hv)){

                            $ac_ad_hv = 'off';
                            }else{
                                $ac_ad_hv = 'on';
                            }


                            if(empty($ac_ad_hot_vou)){

                                $ac_ad_hot_vou = 'off';
                                }else{
                                    $ac_ad_hot_vou = 'on';
                                }


    
if(empty($ac_umrah_mang )){

    $ac_umrah_mang = 'off';
    }else{
        $ac_umrah_mang = 'on';
    }

    // <sub pages>

    
if(empty($ac_umrah_ser )){

    $ac_umrah_ser = 'off';
    }else{
        $ac_umrah_ser = 'on';
    }


    
if(empty($ac_party_mang )){

    $ac_party_mang = 'off';
    }else{
        $ac_party_mang = 'on';
    }


    
if(empty($ac_party_agr )){

    $ac_party_agr = 'off';
    }else{
        $ac_party_agr = 'on';
    }



    
if(empty($ac_data_entry )){

    $ac_data_entry = 'off';
    }else{
        $ac_data_entry = 'on';
    }


    
if(empty($ac_trans_auth )){

    $ac_trans_auth = 'off';
    }else{
        $ac_trans_auth = 'on';
    }


    
if(empty($ac_tic_ent )){

    $ac_tic_ent = 'off';
    }else{
        $ac_tic_ent = 'on';
    }


    
if(empty($ac_hot_ent )){

    $ac_hot_ent = 'off';
    }else{
        $ac_hot_ent = 'on';
    }

    



    
if(empty($ac_searching )){

    $ac_searching = 'off';
    }else{
        $ac_searching = 'on';
    }


    // sub pages




    
if(empty($ac_sea_tick )){

    $ac_sea_tick = 'off';
    }else{
        $ac_sea_tick = 'on';
    }


    
if(empty($ac_sea_vou )){

    $ac_sea_vou = 'off';
    }else{
        $ac_sea_vou = 'on';
    }

    
if(empty($ac_sea_pa )){

    $ac_sea_pa = 'off';
    }else{
        $ac_sea_pa = 'on';
    }

    
if(empty($ac_sea_hv_ent )){

    $ac_sea_hv_ent = 'off';
    }else{
        $ac_sea_hv_ent = 'on';
    }


    
if(empty($ac_sea_hv )){

    $ac_sea_hv = 'off';
    }else{
        $ac_sea_hv = 'on';
    }


    
if(empty($ac_sea_ad_hv )){

    $ac_sea_ad_hv = 'off';
    }else{
        $exp = 'on';
    }


    
if(empty($ac_sea_client )){

    $ac_sea_client = 'off';
    }else{
        $ac_sea_client = 'on';
    }


    
if(empty($ac_all_user )){

    $exp = 'off';
    }else{
        $exp = 'on';
    }


    
if(empty($ac_sea_np )){

    $ac_sea_np = 'off';
    }else{
        $ac_sea_np = 'on';
    }


    
if(empty($ac_user )){

    $ac_user = 'off';
    }else{
        $ac_user = 'on';
    }


    // <sub pages>


        
if(empty($ac_user_pay )){

    $ac_user_pay = 'off';
    }else{
        $ac_user_pay = 'on';
    }



        
if(empty($ac_file_up )){

    $ac_file_up = 'off';
    }else{
        $ac_file_up = 'on';
    }


    
if(empty($ac_ex_up )){

    $ac_ex_up = 'off';
    }else{
        $ac_ex_up = 'on';
    }

    
if(empty($ac_ex_led )){

    $ac_ex_led = 'off';
    }else{
        $ac_ex_led = 'on';
    }


    // sub pages

    
if(empty($ac_asg_user )){

    $ac_asg_user = 'off';
    }else{
        $ac_asg_user = 'on';
    }






   


    


  
    
    
    
      
    //    $update = $conn->prepare("UPDATE  
    //     users SET   `ac_file_sec`='$ac_file_sec',  `ac_headsec`='$ac_headsec',`ac_client_info`='$ac_client_info' , `ac_ref_ent`='$ac_ref_ent',  `ac_spec_inv`='$ac_spec_inv',`ac_vou_ent`='$ac_vou_ent',`ac_sale_rep`='$ac_sale_rep',`ac_new_pas`='$ac_new_pas',`ac_hv_ws`='$ac_hv_ws',`ac_pay_vou`='$ac_pay_vou',`ac_ad_hv`='$ac_ad_hv',`ac_ad_hot_vou`='$ac_ad_hot_vou', `ac_umrah_mang`='$ac_umrah_mang', `ac_umrah_ser`='$ac_umrah_ser',`ac_party_mang`='$ac_party_mang',`ac_party_agr`='$ac_party_agr',`ac_trans_auth`='$ac_trans_auth',`ac_tic_ent`='$ac_tic_ent',`ac_data_entry`='$ac_data_entry',`ac_hot_ent`='$ac_hot_ent', `ac_searching`='$ac_searching' , `ac_sea_tick`='$ac_sea_tick',`ac_sea_vou`='$ac_sea_vou',`ac_sea_pa`='$ac_sea_pa',`ac_sea_np`='$ac_sea_np',`ac_sea_hv`='$ac_sea_hv',`ac_sea_hv_ent`='$ac_sea_hv_ent',`ac_sea_ad_hv`='$ac_sea_ad_hv',`ac_sea_client`='$ac_sea_client',`ac_all_user`='$ac_all_user',  `ac_user`='$ac_user' ,`ac_user_pay`='$ac_user_pay',`ac_file_up`='$ac_file_up',`ac_ex_up`='$ac_ex_up',`ac_manu`='$ac_ex_led',  `ac_asg_user`='$ac_asg_user', `ac_all_user`='$ac_all_user'    
  
    //         where id = '$ac_id'");




            
       $update = $conn->prepare("UPDATE  
        users SET   `ac_file_sec`='$ac_file_sec' ,  `ac_headsec`='$ac_headsec',`ac_client_info`='$ac_client_info' , `ac_trans_auth`='$ac_trans_auth' , `ac_umrah_mang`='$ac_umrah_mang', `ac_umrah_ser`='$ac_umrah_ser',`ac_party_mang`='$ac_party_mang',`ac_party_agr`='$ac_party_agr' , `ac_tic_ent`='$ac_tic_ent',`ac_data_entry`='$ac_data_entry',`ac_hot_ent`='$ac_hot_ent', `ac_ref_ent`='$ac_ref_ent',  `ac_spec_inv`='$ac_spec_inv' , `ac_vou_ent` = '$ac_vou_ent' , `ac_pay_vou` = '$ac_pay_vou' ,  `ac_sale_rep`='$ac_sale_rep',`ac_new_pas`='$ac_new_pas',`ac_hv_ws`='$ac_hv_ws',`ac_ad_hv` = '$ac_ad_hv' , `ac_ad_hot_vou` = '$ac_ad_hot_vou' , `ac_user`='$ac_user' ,`ac_user_pay`='$ac_user_pay',`ac_file_up`='$ac_file_up',`ac_ex_up`='$ac_ex_up',`ac_ex_led`='$ac_ex_led',  `ac_asg_user`='$ac_asg_user', `ac_all_user`='$ac_all_user' , `ac_searching`='$ac_searching' , `ac_sea_tick`='$ac_sea_tick',`ac_sea_vou`='$ac_sea_vou',`ac_sea_pa`='$ac_sea_pa',`ac_sea_np`='$ac_sea_np',`ac_sea_hv`='$ac_sea_hv',`ac_sea_hv_ent`='$ac_sea_hv_ent',`ac_sea_ad_hv`='$ac_sea_ad_hv',`ac_sea_client`='$ac_sea_client' ,`ac_all_vou`='$ac_all_vou',`ac_hv`='$ac_hv',`ac_cs`='$ac_cs'
            where id = '$ac_id'");
    
          $update->execute();
    
   
     if ($update){
        echo '<div class="alert alert-success">
        <strong>Congraulation!</strong> data has been changed
    
      </div>';
   
    // header("location:.php");

    ?>

    <!-- <script>


    Swal.fire(
        "Access is Updated", 
        "Please Go Back !", 
        "success"
    );

    </script> -->

    
     <!-- <div class="example-alert">
                                                            <div class="alert alert-success alert-icon">
                                                                <em class="icon ni ni-check-circle"></em> <strong>Page Access is Updated</strong>GO BACK.
                                                            </div>
                                                        </div> -->

    <?php


// echo "status is  update";
    }else{
    
        echo "status is not update";
    }
}

?>












<?php

include 'connect.php';

if(isset($_POST['emp_sheet'])){



    $emp_sheet_id = $_POST['pr_id'];

    $get_pcode = $_POST['get_pcode'];

    $emp_name = $_POST['emp_name'];

    
    $destination = $_POST['destination'];


    






    

    $date_1 = $_POST['date_1'];
                                                            
    $date_2 = $_POST['date_2'];
    
    $date_3 = $_POST['date_3'];
    
    $date_4 = $_POST['date_4'];
    
    $date_5 = $_POST['date_5'];
    
    $date_6 = $_POST['date_6'];
    
    $date_7 = $_POST['date_7'];
    
    $date_8 = $_POST['date_8'];
    
    $date_9 = $_POST['date_9'];
    
    $date_10 = $_POST['date_10'];
    
    $date_11 = $_POST['date_11'];
    
    $date_12 = $_POST['date_12'];
    
    $date_13 = $_POST['date_13'];
    
    $date_14 = $_POST['date_14'];
    
    $date_15 = $_POST['date_15'];
    
    $date_16 = $_POST['date_16'];
    
    $date_17 = $_POST['date_17'];
    
    $date_18 = $_POST['date_18'];
    
    $date_19 = $_POST['date_19'];
    
    $date_20 = $_POST['date_20'];
    
    $date_21 = $_POST['date_21'];
    
    $date_22 = $_POST['date_22'];
    
    $date_23 = $_POST['date_23'];
    
    $date_24 = $_POST['date_24'];
    
    $date_25 = $_POST['date_25'];
    
    $date_26 = $_POST['date_26'];
    
    $date_27 = $_POST['date_27'];
    
    $date_28 = $_POST['date_28'];
    
    $date_29 = $_POST['date_29'];
    
    $date_30 = $_POST['date_30'];
    
    $date_31 = $_POST['date_31'];




    
$total_hour = $date_1  +  $date_2  + 
            


$date_3  +

$date_4  + 

$date_5  + 

$date_6  + 

$date_7  + 

$date_8  + 

$date_9  + 

$date_10  + 

$date_11  + 

$date_12  + 

$date_13  + 

$date_14  + 

$date_15  + 

$date_16  + 

$date_17  + 

$date_18  + 

$date_19  + 

$date_20  + 

$date_21  + 

$date_22  + 

$date_23  + 

$date_24  + 

$date_25  + 

$date_26  + 

$date_27  + 

$date_28  + 

$date_29  + 

$date_30  + 

$date_31 ;




$sum_smm = 0;

$sum_smm += $total_hour;
$smm = $sum_smm;


$total_days  = $total_hour / 8 ;

$rate = $_POST['rate'];

$total_payment = $rate * $total_days ;
























      
      
    


    
    $update_emp_sheet = $conn->prepare("UPDATE  
    empolyee SET   `emp_name`='$emp_name' , `destination`='$destination' , `total_hour`='$total_hour' , `total_days`='$total_days'  ,  `total_payment` = '$total_payment' , `rate` = ' $rate'   ,  `date_1` = ' $date_1' , `date_2` = ' $date_2' , `date_3` = ' $date_3' , `date_4` = '$date_4' ,`date_5` = '$date_5',`date_6` = '$date_6' , `date_7` = ' $date_7' , `date_8` = ' $date_8' , `date_9` = '$date_9' , `date_10` = '$date_10' , `date_11` =' $date_11' , `date_12` = '$date_12' ,`date_13` = '$date_13' ,`date_14` = '$date_14' , `date_15` = '$date_15' ,`date_16` = ' $date_16' ,`date_17` = ' $date_17' , `date_18` =' $date_18' , `date_19` = '$date_19' , `date_20` = '$date_20' ,`date_21` = '$date_21' ,`date_22` = '$date_22' ,`date_23` = '$date_23' , `date_24` = '$date_24' , `date_25` =' $date_25' , `date_26` = '$date_26' , `date_27` = '$date_27' ,`date_28` = '$date_28' , `date_29` = '$date_29' , `date_30` = '$date_30' , `date_31` = '$date_31'  where id = '$emp_sheet_id'");

      $update_emp_sheet->execute();


 if ($update_emp_sheet){
  
    //  header("location:data_entry.php");

  ?>


<script>
            window.location.href='html/lms/data_entry.php?p_code=<?php echo $get_pcode;?>';
        </script>

  <?php
 }else{


    echo '<div class="alert alert-success">
    <strong>Congraulation!</strong> Sheet  not has been Updated

  </div>';

 }


}

// header("location:.php");

?>






















<?php

include 'connect.php';

if(isset($_POST['editopenheadaccount'])){



    $ids = $_POST['id'];

    $heads_codes = $_POST['heads'];
    $subheads = $_POST['subHeads'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $ref = $_POST['ref'];
    $ref2 = $_POST['ref2'];
    $balance = $_POST['balance'];


    
   
    if($heads_codes == "1001"){

        $heads = "Capital";


    }else if($heads_codes == "1002"){

        $heads = "Non-Current Liabilities";

    }else if($heads_codes == "1003"){

        $heads = "Current Liabilities";

    }else if($heads_codes == "1004"){

        $heads = "Non-Current Assets";

    }else if($heads_codes == "1005"){

        $heads = "Current Assets";

    }else if($heads_codes == "1006"){

        $heads = "Incomes";

    }else if($heads_codes == "1007"){

        $heads = "Expenses";

    }else{

        $heads = "no heads";

    }



        







    // $ac_earn = $_POST['ac_earn'];



    $insert = $conn->prepare("UPDATE  
      openheadaccount SET `head_code` = '$heads_codes', `heads` = '$heads'  ,  `sub_heads` = '$subheads'  , `name` = '$name' , `email`  = '$email' , `phone` = '$phone' , `ref` = '$ref' , `ref2` = '$ref2' , `balance` = '$balance'  where id = '$ids' ");
 
       
  
  
          
  
    $record = $insert->execute();
   
     if ($record){

        // echo "data submited";


    ?>


     <div class="example-alert">
     <div class="alert alert-success alert-icon">
     <em class="icon ni ni-check-circle"></em> <strong>open new Account Head Updated Successfully</strong><a href="html/lms/AC_head_management.php"> <  GO BACK. </a>
     </div>
        </div>
        
                                                            

    <?php


// echo "status is  update";
    }else{?>
    
        <div class="example-alert">
        <div class="alert alert-fill alert-danger alert-icon">
         <em class="icon ni ni-cross-circle"></em> <strong>Update failed</strong>! There is some technical issues.
         </div>
        </div>                                             
                                                  
                                                  
                                <?php   
    }

}
?>






























<?php

include 'connect.php';

if(isset($_POST['edit_empolyee'])){


    
    $ids = $_POST['id'];

    $emp_name = $_POST['emp_name'];
    $emp_at = $_POST['emp_at'];
    $email = $_POST['email'];
    
    $phone = $_POST['phone'];
    $mobile = $_POST['mobile'];
    $pas = $_POST['pas'];
    
    $login_status = $_POST['login_status'];
    $emp_login = $_POST['emp_login'];
    
    $login_status_report = $_POST['login_status_report'];
    $login_status_record = $_POST['login_status_record'];
    
    $login_status_delup = $_POST['edit_status_delup'];
    $view_special_report = $_POST['view_special_report'];



        







    // $ac_earn = $_POST['ac_earn'];



    $insert = $conn->prepare("UPDATE `empolyee` SET `emp_name`='$emp_name',`email`='$email',`phone`='$phone',`mobile`='$phone',`password`='$pas',`login_status`='$login_status',`login_status_rep`='$login_status_report',`login_status_delup`='$login_status_delup',`login_status_record`='$login_status_record',`emp_at`='$emp_at',`view_special_report`='$view_special_report',`emp_login`='$emp_login'   where id = '$ids' ");
 
       
  
  
          
  
    $record = $insert->execute();
   
     if ($record){

        // echo "data submited";


    ?>


     <div class="example-alert">
     <div class="alert alert-success alert-icon">
     <em class="icon ni ni-check-circle"></em> <strong>Empolyee Updated Successfully</strong><a href="html/lms/AC_head_management.php"> <  GO BACK. </a>
     </div>
        </div>
        
                                                            

    <?php


// echo "status is  update";
    }else{?>
    
        <div class="example-alert">
        <div class="alert alert-fill alert-danger alert-icon">
         <em class="icon ni ni-cross-circle"></em> <strong>Update failed</strong>! There is some technical issues.
         </div>
        </div>                                             
                                                  
                                                  
                                <?php   
    }

}
?>






















<?php

include 'connect.php';

if(isset($_POST['update_asign_lead'])){


    
    $ids = $_POST['id'];

    $users = $_POST['users'];
    $r1 = $_POST['range1'];
    $r2 = $_POST['range2'];
    
        







    // $ac_earn = $_POST['ac_earn'];



    $insert = $conn->prepare("UPDATE `asignwork` SET `users`='$users',`range_start`='$r1',`range_end`='$r2'   where id = '$ids'");
 
       
  
  
          
  
    $record = $insert->execute();
   
     if ($record){

        // echo "data submited";


    ?>


     <div class="example-alert">
     <div class="alert alert-success alert-icon">
     <em class="icon ni ni-check-circle"></em> <strong>Lead Updated Successfully</strong><a href="html/lms/asignlead.php"> <  GO BACK. </a>
     </div>
        </div>
        
                                                            

    <?php


// echo "status is  update";
    }else{?>
    
        <div class="example-alert">
        <div class="alert alert-fill alert-danger alert-icon">
         <em class="icon ni ni-cross-circle"></em> <strong>Update failed</strong>! There is some technical issues.
         </div>
        </div>                                             
                                                  
                                                  
                                <?php   
    }

}
?>





































                                                        


                                                    



                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->








                                     
                                   
                                </div><!-- .content-page -->
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
    <!-- JavaScript -->

    
       
    

    <script src="./assets/js/bundle.js?ver=3.0.3"></script>
    <script src="./assets/js/scripts.js?ver=3.0.3"></script><script src="html/lms/datetime.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 










           



</body>

</html>