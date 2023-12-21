
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
                                            <h2 class="nk-block-title fw-normal">Query Added</h2>
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


<!-- 
<ADD HEADS> -->
        



<?php

include 'connect.php';

if(isset($_POST['addheads'])){




    $heads = $_POST['heads'];
    $subheads = $_POST['subheads'];
   

    if($heads == "Capital"){

        $head_code = "1001";


    }else if($heads == "Non-Current Liabilities"){

        $head_code = "1002";

    }else if($heads == "Current Liabilities"){

        $head_code = "1003";

    }else if($heads == "Non-Current Assets"){

        $head_code = "1004";

    }else if($heads == "Current Assets"){

        $head_code = "1005";

    }else if($heads == "Incomes"){

        $head_code = "1006";

    }else if($heads == "Expenses"){

        $head_code = "1007";

    }





    // $ac_earn = $_POST['ac_earn'];



    $insert = $conn->prepare("INSERT INTO heads (`heads`,`sub_heads` , `head_code`  ) values('$heads','$subheads' , '$head_code')");

       
  
  
          
  
    $record = $insert->execute();
   
     if ($record){

        // echo "data submited";


    ?>


     <div class="example-alert">
     <div class="alert alert-success alert-icon">
     <em class="icon ni ni-check-circle"></em> <strong>Head Added Successfully</strong><a href="html/lms/AC_head_management.php"> <  GO BACK. </a>
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



<!-- 
Add open head account -->




<?php

include 'connect.php';

if(isset($_POST['addheadaccount'])){




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



    $insert = $conn->prepare("INSERT INTO openheadaccount (`head_code`, `heads` , `sub_heads`  , `name` , `email`  , `phone` , `ref` , `ref2` , `balance` ) values('$heads_codes', '$heads' , '$subheads' , '$name' , '$email'  , '$phone' , '$ref' , '$ref2' , '$balance')");

       
  
  
          
  
    $record = $insert->execute();
   
     if ($record){

        // echo "data submited";


    ?>


     <div class="example-alert">
     <div class="alert alert-success alert-icon">
     <em class="icon ni ni-check-circle"></em> <strong>open new Account Head Added Successfully</strong><a href="html/lms/AC_head_management.php"> <  GO BACK. </a>
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

if(isset($_POST['addsalesman'])){




    $date = $_POST['date'];
    $salesman = $_POST['salesman'];
 


    



        







    // $ac_earn = $_POST['ac_earn'];



    $insert = $conn->prepare("INSERT INTO salesman (`date`, `salesman`  ) values('$date ', '$salesman' )");

       
  
  
          
  
    $record = $insert->execute();
   
     if ($record){

        // echo "data submited";


    ?>


     <div class="example-alert">
     <div class="alert alert-success alert-icon">
     <em class="icon ni ni-check-circle"></em> <strong>salesman Added Successfully</strong><a href="html/lms/AC_head_management.php"> <  GO BACK. </a>
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

if(isset($_POST['addparty'])){




    $date = $_POST['date'];
    $name = $_POST['name'];
    
    $pas = $_POST['pas'];
    $login_id = $_POST['login_id'];
    $login_access = $_POST['login_access'];
    $login_status = $_POST['login_status'];


 


    



        







    // $ac_earn = $_POST['ac_earn'];



    $insert = $conn->prepare("INSERT INTO party (`login_id`,  `party_name`, `password`, `login_access`, `login_status`, `date`)
                                        VALUES ('$login_id','$name','$pas','$login_access','$login_status','$date')");

       
  
  
          
  
    $record = $insert->execute();
   
     if ($record){

        // echo "data submited";


    ?>


     <div class="example-alert">
     <div class="alert alert-success alert-icon">
     <em class="icon ni ni-check-circle"></em> <strong>Party Added Successfully</strong><a href="html/lms/AC_head_management.php"> <  GO BACK. </a>
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

if(isset($_POST['MakeLedger'])){




    $inv_code = $_POST['inv_code'];
    $inv_date = $_POST['inv_date'];
    
    $ref = $_POST['ref'];
    
    $balance = $_POST['balance'];
    
    $advance = $_POST['advance'];
    
   


    $banks = $_POST['banks'];

    
    $received = $_POST['received'];

    $new_received = $_POST['advance'] +  $_POST['received'];
    
    $new_balance =   $_POST['bal'];
   
    $forinvoice = $_POST['forinvoice'];


 


    



        







    // $ac_earn = $_POST['ac_earn'];



    $insert = $conn->prepare("INSERT INTO `ledger_entry`( `inv_code`, `inv_date`, `forledger`, `ref`, `received`, `balance`, `banks`)
     VALUES ('$inv_code','$inv_date','$forinvoice','$ref','$received','$new_balance','$banks')");


    $record = $insert->execute();


    
$updated = $conn->prepare("UPDATE `all_invoice_data` set   `advance` = '$new_received', `balance` = '$new_balance' where  `inv_code` = '$inv_code' ");
    
$updated->execute();
   
     if ($record){

        // echo "data submited";


    ?>


     <div class="example-alert">
     <div class="alert alert-success alert-icon">
     <em class="icon ni ni-check-circle"></em> <strong>Ledger Added Successfully</strong><a href="html/lms/view_ledger.php?inv_code=<?php echo $inv_code;?>"> View Ledger.> </a>
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

if(isset($_POST['add_empolyee'])){



    $emp_id = $_POST['emp_id'];
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



    $insert = $conn->prepare("INSERT INTO empolyee ( `emp_id` , `emp_name`, `email`, `phone`, `mobile`, `password`, `login_status`, `login_status_rep`,  `login_status_delup`, `login_status_record`, `emp_at`, `view_special_report`, `emp_login` )
                                            VALUES ('$emp_id' ,'$emp_name','$email','$phone','$mobile','$pas','$login_status','$login_status_report','$login_status_delup','$login_status_record','$emp_at','$view_special_report','$emp_login' )");

       
  
  
          
  
    $record = $insert->execute();
   
     if ($record){

        // echo "data submited";


    ?>


     <div class="example-alert">
     <div class="alert alert-success alert-icon">
     <em class="icon ni ni-check-circle"></em> <strong>Empolyee Added Successfully</strong><a href="html/lms/AC_head_management.php"> <  GO BACK. </a>
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

if(isset($_POST['add_party_agreement'])){




    $party_name = $_POST['party_name'];
    $date = $_POST['date'];
    $hotel = $_POST['hotel'];
    
    $remark = $_POST['remark'];
    $roomtype = $_POST['roomtype'];
 
    
    $saleamry = $_POST['saleamry'];
    
    $saleriyal = $_POST['saleriyal'];
    
    $puramry = $_POST['puramry'];
 
    $purriyal = $_POST['purriyal'];
 

    



        






    
    // $ac_earn = $_POST['ac_earn'];



    $insert = $conn->prepare("INSERT INTO party_agreement ( `party_name`, `hotel`, `room_type`, `date`, `remark`, `sale_amount_riyal`, `sale_riyal`, `pur_amount_riyal`, `pur_riyal`) 
                                                    VALUES ('$party_name','$hotel','$roomtype','$date','$remark','$saleamry','$saleriyal','$puramry','$purriyal')");

       
  
  
          
  
    $record = $insert->execute();
   
     if ($record){

        // echo "data submited";


    ?>


     <div class="example-alert">
     <div class="alert alert-success alert-icon">
     <em class="icon ni ni-check-circle"></em> <strong>Party Agreement Added Successfully</strong><a href="html/lms/AC_head_management.php"> <  GO BACK. </a>
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

if(isset($_POST['add_umrah_hotel'])){




    $name = $_POST['name'];
    $pay_to = $_POST['payableto'];
    $detail = $_POST['detail'];
    
    $desi = $_POST['desi'];
    $status = $_POST['status'];
  
    
    $padamry = $_POST['padamry'];
    
    $padamrs = $_POST['padamrs'];

    
    $pchamry = $_POST['pchamry'];

    
    $pchamrs = $_POST['pchamrs'];

    
    $pinamry = $_POST['pinamry'];

    
    $pinamrs = $_POST['pinamrs'];

 

    $radamry = $_POST['radamry'];
    
    $radamrs = $_POST['radamrs'];

    
    $rchamry = $_POST['rchamry'];

    
    $rchamrs = $_POST['rchamrs'];

    
    $rinamry = $_POST['rinamry'];

    
    $rinamrs = $_POST['rinamrs'];

    



        






    
    // $ac_earn = $_POST['ac_earn'];



    $insert = $conn->prepare("INSERT INTO umrah_hotel ( `name`, `description` , `detail`, `payable_to`, `pay_adult_amount_riyal`, `pay_child_amount_riyal`, `pay_infant_amount_riyal`, `pay_adult_amount_rs`, `pay_child_amount_rs`, `pay_infant_amount_rs`, `rec_adult_amount_riyal`, `rec_child_amount_riyal`, `rec_infant_amount_riyal`, `rec_adult_amount_rs`, `rec_child_amount_rs`, `rec_infant_amount_rs`, `status`)  VALUES ('$name', '$desi' , '$detail','$pay_to','$padamry','$pchamry','$pinamry','$padamrs','$pchamrs','$pinamrs','$radamry','$rchamry','$rinamry','$radamrs','$rchamrs','$rinamrs','$status')");

       
  
  
          
  
    $record = $insert->execute();
   
     if ($record){

        // echo "data submited";


    ?>


     <div class="example-alert">
     <div class="alert alert-success alert-icon">
     <em class="icon ni ni-check-circle"></em> <strong>Urmah Hotel Added Successfully</strong><a href="html/lms/AC_head_management.php"> <  GO BACK. </a>
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

if(isset($_POST['add_user'])){



    $username = $_POST['fname']. " " . $_POST['lname'] ;

    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $role = $_POST['role'];
    $state = $_POST['state'];
    $phone = $_POST['phone'];

    $file = $_FILES['photo'];
    $filename = $file['name'];
    $filepath = $file['tmp_name'];
    $fileerror = $file['error'];

    
    

    $destfile  = 'upload/'.$filename;

    move_uploaded_file($filepath,$destfile);
    
    // $ac_earn = $_POST['ac_earn'];



    $insert = $conn->prepare("INSERT INTO users (`username`,`email`, `phone` ,`password` , `address` , `state` , `role` , `profile`  ) values('$username','$email', '$phone' , '$password' , '$address' , '$state' , '$role' , '$destfile')");

       
  
  
          
  
    $record = $insert->execute();
   
     if ($record){

        // echo "data submited";


    ?>


     <div class="example-alert">
     <div class="alert alert-success alert-icon">
     <em class="icon ni ni-check-circle"></em> <strong>User Added Successfully</strong><a href="html/lms/users.php"> <  GO BACK. </a>
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



if(isset($_POST['banks'])){





    $bank_name = $_POST["bank_name"];

    $bank_code = $_POST["bank_code"];

    $acct_title = $_POST["acct_title"];
    $acct_no = $_POST["acct_no"];

    $iban = $_POST["iban"];

    
    

    
    // $ac_earn = $_POST['ac_earn'];



    $insert = $conn->prepare("INSERT INTO `banks`( `bank_code`, `bank_name`, `acct_title`, `acct_no`, `iban`) VALUES ('$bank_code','$bank_name','$acct_title','$acct_no','$iban')");

       
  
  
          
  
    $record = $insert->execute();
   
     if ($record){

        // echo "data submited";


    ?>


     <div class="example-alert">
     <div class="alert alert-success alert-icon">
     <em class="icon ni ni-check-circle"></em> <strong>Bank Added Successfully</strong><a href="html/lms/banks.php"> <  GO BACK. </a>
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



if(isset($_POST['our_hotels'])){



$rand_code = rand(10000,99999);
$hotel_code = "HC".$rand_code;







$hotel_name = $_POST["hotel_name"];

    $address = $_POST["address"];
    $images = $_FILES["images"];


    
    $disc = $_POST['disc'];

    // convert newlines to HTML line breaks
   $disc = nl2br($disc);
   
   // escape the string for safe use in a SQL query
   $disc = mysqli_real_escape_string($sq_conn, $disc);

   $date_to = $_POST["dto"];

   $date_from = $_POST["dfrom"];

    $category = $_POST["category"];
    
    $distance = $_POST["distance"];

    $dest = $_POST["dest"];

    $currency = $_POST["currency"];
    $price = $_POST["price"];





    // thumbail

    $file = $_FILES['thumbail'];

    $filename = $file['name'];






    // new image name


    
    if(empty($_FILES['thumbail']['name'])){
    
        $destfile = '';

    }else{


        $thumbName =  $file['name']; 

        $imageFileTypethumb = pathinfo($thumbName, PATHINFO_EXTENSION);
        
        $newthumbName = rand(10000,99999).".".$imageFileTypethumb;
        
        $filename = $newthumbName;
            $filepath = $file['tmp_name'];
            $fileerror = $file['error'];

        $destfile  = 'upload/'.$hotel_code."_".$filename;

        move_uploaded_file($filepath,$destfile);

    }



    for ($i = 0; $i < count($images["name"]); $i++) {
        $imageName = $images["name"][$i];

       $imageFileType = pathinfo($imageName, PATHINFO_EXTENSION);

       $newImageName = "HMI".rand(10000,99999).".".$imageFileType;

        $imagePath = $images["tmp_name"][$i];
        $imageError = $images["error"][$i];
        
    $imageDest  = 'upload/'.$rand_code."_".$newImageName;
       move_uploaded_file($imagePath,$imageDest);
    
        // Insert image into the database
        
        $insertImage = $conn->prepare("INSERT INTO `hotel_images`( `hotel_code`, `photo`) VALUES ('$hotel_code','$imageDest')");

        $insertImage->execute();
       
    }
    



    
    

    
    // $ac_earn = $_POST['ac_earn'];



    $insert = $conn->prepare("INSERT INTO `our_hotels`( `hotel_name`, `dest`, `currency`, `price` , `distance` , `category` , `address` , `thumbail`,`hotel_code` ,`description` ,`date_to`,`date_from`) VALUES ('$hotel_name','$dest','$currency','$price' ,'$distance','$category' , '$address','$destfile' ,'$hotel_code' , '$disc','$date_to' ,'$date_from')");

       
  
  
          
  
    $record = $insert->execute();
   
     if ($record){

        // echo "data submited";


    ?>


     <div class="example-alert">
     <div class="alert alert-success alert-icon">
     <em class="icon ni ni-check-circle"></em> <strong>Hotel Added Successfully</strong><a href="html/lms/our_hotels.php"> <  GO BACK. </a>
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



if(isset($_POST['addPLead'])){





    $date = $_POST["date"];

    $cn = $_POST["cn"];

    $phone = $_POST["phone"];
    $pkg = $_POST["pkg"];

    $noofperson = $_POST["noofperson"];
    $status = $_POST["status"];
    $users = $_SESSION['email'];
    $leadtype = 'PLead';

    
    

    
    // $ac_earn = $_POST['ac_earn'];



    $insert = $conn->prepare("INSERT INTO `excel_data`( `PLeadOwn`, `leaddate`, `package`, `cn`, `phone` , `noofperson`, `status` , `leadtype`) VALUES ('$users','$date','$pkg','$cn','$phone' , '$noofperson' , '$status' , '$leadtype')");

       
  
  
          
  
    $record = $insert->execute();
   
     if ($record){

        // echo "data submited";


    ?>


     <div class="example-alert">
     <div class="alert alert-success alert-icon">
     <em class="icon ni ni-check-circle"></em> <strong>Lead Added Successfully</strong><a href="html/lms/view_excel_lead.php?PLead"> <  View Lead. </a>
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



if(isset($_POST['addproject'])){




    $date = $_POST['date'];




$project_code = 'PC000'.random_int(100000, 999999);


    $subject = $_POST['subject'];
    $project = $_POST['project'];
    $con_name = $_POST['con_name'];
    $rate = $_POST['rate'];

    $month = $_POST['month'];
 
    // $ac_earn = $_POST['ac_earn'];



    $insert = $conn->prepare("INSERT INTO project (`man_date`, `month` ,`subject`, `project` ,   `project_code` ,  `rate` , `con_name`  ) values('$date', '$month' , '$subject', '$project' ,  '$project_code' ,   '$rate' , '$con_name')");

       
  
  
          
  
    $record = $insert->execute();
   
     if ($record){
      
        ?>

        <script>
            window.location.href='html/lms/projects.php';
        </script>


<?php

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



if(isset($_POST['addEmp'])){




    $date = $_POST['date'];

    $emp_name = $_POST['emp_name'];
    $destination= $_POST['destination'];
    $project = $_POST['project'];
    $rate = $_POST['rate'];
 
    // $ac_earn = $_POST['ac_earn'];



    $insert = $conn->prepare("INSERT INTO empolyee (`man_date`,`emp_name`, `destination` , `project` ,`rate`   ) values('$date','$emp_name', '$destination' ,  '$project' , '$rate')");

       
  
  
          
  
    $record = $insert->execute();
   
     if ($record){

        // echo "data submited";


    ?>


     <div class="example-alert">
     <div class="alert alert-success alert-icon">
     <em class="icon ni ni-check-circle"></em> <strong>Empolyee Added Successfully</strong><a href="html/lms/empolyees.php"> <  GO BACK. </a>
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



if(isset($_POST['addCont'])){




    $date = $_POST['date'];

    $con_name = $_POST['con_name'];

    $rate = $_POST['rate'];
    $payment = $_POST['payment'];
 
    // $ac_earn = $_POST['ac_earn'];



    $insert = $conn->prepare("INSERT INTO contractors (`man_date`,`con_name`,`rate` , `payment`   ) values('$date','$con_name', '$rate' , '$payment')");

       
  
  
          
  
    $record = $insert->execute();
   
     if ($record){

        // echo "data submited";


    ?>


     <div class="example-alert">
     <div class="alert alert-success alert-icon">
     <em class="icon ni ni-check-circle"></em> <strong>Contractor Added Successfully</strong><a href="html/lms/contractor.php"> <  GO BACK. </a>
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



if(isset($_POST['add_ticket_entry'])){




    $al_type = $_POST['al_type'];
    $cus_code = $_POST['cus_code'];
    $inv_date = $_POST['inv_date'];
    $vali_date = $_POST['vali_date'];

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $party_name = $_POST['party_name'];

    $airline = $_POST['airline'];
    $exo = $_POST['exo'];
    $exo_agent = $_POST['exo_agent'];
    $pnr = $_POST['pnr'];
    $ticket_no = $_POST['ticket_no'];
 
 
    $dpr = $_POST['dpr'];
 
    $flgt_no = $_POST['flgt_no'];
 
    $acl = $_POST['acl'];
 



 
    $sector = $_POST['sector'];
 
    $al_taxes = $_POST['al_taxes'];
    
    $tapt = $_POST['tapt'];
 
    $fare = $_POST['fare'];
 
    $rg = $_POST['rg'];
 
    $ced = $_POST['ced'];


    
 
    $yq = $_POST['yq'];
 
    $yi = $_POST['yi'];
    
    $xt = $_POST['xt'];
 
    $pb = $_POST['pb'];
 
    $o_tax_a22 = $_POST['o_tax_a22'];
 
    $pk = $_POST['pk'];




    $psf_p = $_POST['psf_p'];
    
    $psf_a = $_POST['psf_a'];
 
    $kb_al = $_POST['kb_al'];
    
    $commission = $_POST['commission'];
 
    $wht_a = $_POST['wht_a'];
 
    $wht_tax_p = $_POST['wht_tax_p'];
 
    $sp_p = $_POST['sp_p'];




    
    $o_tax_p = $_POST['o_tax_p'];
 
    $o_tax_p22 = $_POST['o_tax_p22'];
    
    $srb_tax = $_POST['srb_tax'];
 
    $kb_p = $_POST['kb_p'];
 
    $sp_staff = $_POST['sp_staff'];
 
    $mobile = $_POST['mobile'];

    
    $salesman = $_POST['salesman'];
    
    $comment = $_POST['comment'];


 













    
    $gross_payable_airline = $_POST['gross_payable_airline'];
 
    $net_payable_airline = $_POST['net_payable_airline'];
    
    $gross_receivable = $_POST['gross_receivable'];
 
    $net_receivable_party = $_POST['net_receivable_party'];
 
    $net_receivable_staff = $_POST['net_receivable_staff'];
 
    $address = $_POST['address'];




    
    $telephone = $_POST['telephone'];
 
    $email = $_POST['email'];
    
    $idcard_no = $_POST['idcard_no'];
 
    $passport_no = $_POST['passport_no'];
 
    $reference = $_POST['reference'];
 
    


 
    // $ac_earn = $_POST['ac_earn'];



    $insert = $conn->prepare("INSERT INTO ticket_entry ( `customer_code`, `customer_name`, `gender`, `invoice_date`, `validate_date`, `al_type`, `party_name`, `airline`, `ticket_no`, `pnr`, `exo`, `exo_agent`, `dpr`, `flgt_no`, `acl`, `sector`, `al_taxes`, `far`, `tapt`, `rg`, `ced`, `yq`, `yi`, `xt`, `pk`, `pb`, `o_tax_a22`, `psf_p`, `kb_al`, `commission`, `wht_a`, `psf_a`, `wht_tax_p`, `sp_p`, `o_tax_p`, `o_tax_p22`, `srb_tax`, `sp_staff`, `kb_p`, `comment`, `mobile`, `salesman`, `gross_payable_airline`, `net_payable_airline`, `gross_receivable`, `net_receivable_party`, `net_receivable_staff`, `address`, `telephone`, `email`, `idcard_no`, `passport_no`, `reference`)
                                               VALUES ( '$cus_code','$name','$gender','$inv_date','$vali_date','$al_type','$party_name','$airline','$ticket_no','$pnr','$exo','$exo_agent','$dpr','$flgt_no','$acl','$sector','$al_taxes','$fare','$tapt','$rg','$ced','$yq','$yi','$xt','$pk','$pb','$o_tax_a22','$psf_p','$kb_al','$commission','$wht_a','$psf_a','$wht_tax_p','$sp_p','$o_tax_p','$o_tax_p22','$srb_tax','$sp_staff','$kb_p','$comment','$mobile','$salesman','$gross_payable_airline','$net_payable_airline','$gross_receivable','$net_receivable_party','$net_receivable_staff','$address','$telephone','$email','$idcard_no','$passport_no','$reference') ");

       
  
  
          
  
    $record = $insert->execute();
   
     if ($record){

        // echo "data submited";


    ?>


     <div class="example-alert">
     <div class="alert alert-success alert-icon">
     <em class="icon ni ni-check-circle"></em> <strong>Ticket Data Entry  Added Successfully</strong><a href="html/lms/quotations.php"> <  GO BACK. </a>
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

?>

































<?php



if(isset($_POST['add_refund_entry'])){




    $al_type = $_POST['al_type'];
    $cus_code = $_POST['cus_code'];
    $inv_date = $_POST['inv_date'];
    $vali_date = $_POST['vali_date'];

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $party_name = $_POST['party_name'];

    $airline = $_POST['airline'];
    $exo = $_POST['exo'];
    $exo_agent = $_POST['exo_agent'];
    $system = $_POST['system'];
    $system_pnr = $_POST['system_pnr'];
    $pnr = $_POST['pnr'];
    $ticket_no = $_POST['ticket_no'];
 
 
    $dpr = $_POST['dpr'];
 
    $flgt_no = $_POST['flgt_no'];
 
    $acl = $_POST['acl'];
 



 
    $sector = $_POST['sector'];
 
    $al_taxes = $_POST['al_taxes'];
    
    $tapt = $_POST['tapt'];
 
    $fare = $_POST['fare'];
 
    $rg = $_POST['rg'];
 
    $ced = $_POST['ced'];


    
 
    $yq = $_POST['yq'];
 
    $yr = $_POST['yr'];
    
    $xt = $_POST['xt'];
 
    $pb = $_POST['pb'];
 
    $o_tax_a22 = $_POST['o_tax_a22'];
 
    $pk = $_POST['pk'];




    $psf_p = $_POST['psf_p'];
    
    $psf_a = $_POST['psf_a'];
 
    $kb_al = $_POST['kb_al'];
    
    $commission = $_POST['commission'];
 
    $wht_a = $_POST['wht_a'];
 
    $wht_tax_p = $_POST['wht_tax_p'];
 
    $sp_p = $_POST['sp_p'];




    
    $o_tax_p = $_POST['o_tax_p'];
 
    $o_tax_p22 = $_POST['o_tax_p22'];
    
    $srb_tax = $_POST['srb_tax'];
 
    $kb_p = $_POST['kb_p'];
 
    $sp_staff = $_POST['sp_staff'];
 
    
    
    $salesman = $_POST['salesman'];
    
    $comment = $_POST['comment'];


 













    
    $gross_payable_airline = $_POST['gross_payable_airline'];
 
    $net_payable_airline = $_POST['net_payable_airline'];
    
    $gross_receivable = $_POST['gross_receivable'];
 
    $net_receivable_party = $_POST['net_receivable_party'];
 
    $net_receivable_staff = $_POST['net_receivable_staff'];
 
    $rf_airline = $_POST['rf_airline'];




    
    $rf_party = $_POST['rf_party'];
 
    $cancel_chng_a = $_POST['cancel_chngs_a'];
    
    $cancel_chng_b = $_POST['cancel_chngs_p'];
 
    $rf_ref_no = $_POST['rf_ref_no'];
 
 
    


 
    // $ac_earn = $_POST['ac_earn'];



    $insert = $conn->prepare("INSERT INTO refund_entry ( `customer_code`, `customer_name`, `gender`, `invoice_date`, `validate_date`, `al_type`, `party_name`, `airline`, `ticket_no`, `pnr`, `exo`, `exo_agent`, `dpr`, `flgt_no`, `acl`, `sector`, `al_taxes`, `far`, `tapt`, `rg`, `ced`, `yq`, `yr`, `xt`, `pk`, `pb`, `o_tax_a22`, `psf_p`, `kb_al`, `commission`, `wht_a`, `psf_a`, `wht_tax_p`, `sp_p`, `o_tax_p`, `o_tax_p22`, `srb_tax`, `sp_staff`, `kb_p`, `comment`,  `salesman`, `gross_payable_airline`, `net_payable_airline`, `gross_receivable`, `net_receivable_party`, `net_receivable_staff`, `rf_party`, `rf_airline`, `cancel_chngs_a`, `cancel_chngs_b`, `rf_ref_no` , `system_pnr` ,`system`)
                                               VALUES ( '$cus_code','$name','$gender','$inv_date','$vali_date','$al_type','$party_name','$airline','$ticket_no','$pnr','$exo','$exo_agent','$dpr','$flgt_no','$acl','$sector','$al_taxes','$fare','$tapt','$rg','$ced','$yq','$yr','$xt','$pk','$pb','$o_tax_a22','$psf_p','$kb_al','$commission','$wht_a','$psf_a','$wht_tax_p','$sp_p','$o_tax_p','$o_tax_p22','$srb_tax','$sp_staff','$kb_p','$comment','$salesman','$gross_payable_airline','$net_payable_airline','$gross_receivable','$net_receivable_party','$net_receivable_staff','$rf_party','$rf_airline','$cancel_chng_a','$cancel_chng_b','$rf_ref_no','$system_pnr' , '$system') ");

       
  
  
          
  
    $record = $insert->execute();
   
     if ($record){

        // echo "data submited";


    ?>


     <div class="example-alert">
     <div class="alert alert-success alert-icon">
     <em class="icon ni ni-check-circle"></em> <strong>Refund Data Entry  Added Successfully</strong><a href="html/lms/quotations.php"> <  GO BACK. </a>
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

?>




























<?php



if(isset($_POST['add_hotel_entry'])){




    $cus_code = $_POST['cus_code'];
    $inv_date = $_POST['inv_date'];

    $name = $_POST['name'];
    $detail = $_POST['detail'];
    $party_name = $_POST['party_name'];
    $vendor = $_POST['vendor'];
    $pax = $_POST['pax'];
    

    $vehile = $_POST['vehile'];
    $hotel = $_POST['hotel'];
    $typeofroom = $_POST['typeofroom'];
    $roomno = $_POST['roomno'];
    $room_cate = $_POST['room_cate'];
    $rooms = $_POST['rooms'];
    $noofnights = $_POST['nights'];
 
 
    $checkin = $_POST['checkin'];
 
    $checkout = $_POST['checkout'];
 
    $reservation = $_POST['reservation'];
 



 
    $reference = $_POST['reference'];
 
    $rec_amount = $_POST['rec_amount'];
    
    $pay_amount = $_POST['pay_amount'];
 
    $sp_party = $_POST['sp_party'];
 
    $sp_other = $_POST['sp_other'];
 
    $income_head = $_POST['income_head'];


    
 
    $salesman = $_POST['salesman'];
 
   
 
 
    


 
    // $ac_earn = $_POST['ac_earn'];



    $insert = $conn->prepare("INSERT INTO hotel_entry ( `party_name` , `customer_code`, `vendor`, `name`, `invoice_date`, `detail`, `pax`, `vehile`, `hotel`, `room_cate`, `room_type`, `checkin`, `checkout`, `nights`, `noofrooms`, `room_no`, `reservation`, `reference`, `rec_amount`, `pay_amount`, `sp_party`, `sp_other`, `income_head`, `salesman`)
                                               VALUES ('$party_name' ,'$cus_code','$vendor','$name','$inv_date','$detail','$pax','$vehile','$hotel','$room_cate','$typeofroom','$checkin','$checkout','$noofnights', '$rooms' , '$roomno','$reservation','$reference','$rec_amount','$pay_amount','$sp_party','$sp_other','$income_head','$salesman') ");

       
  
  
          
  
    $record = $insert->execute();
   
     if ($record){

        // echo "data submited";


    ?>


     <div class="example-alert">
     <div class="alert alert-success alert-icon">
     <em class="icon ni ni-check-circle"></em> <strong>Hotel Data Entry  Added Successfully</strong><a href="html/lms/quotations.php"> <  GO BACK. </a>
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


?>
















<?php



if(isset($_POST['addClient'])){




    $record_no = $_POST['record_no'];
    $date = $_POST['Date'];

    $dob = $_POST['dob'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $mobile = $_POST['mobile'];
    

    $id_card = $_POST['id_card'];
    $passport_no = $_POST['passport_no'];
    $ref = $_POST['ref'];
    $client = $_POST['client_type'];
    $address = $_POST['address'];

 
 
    // $ac_earn = $_POST['ac_earn'];



    $insert = $conn->prepare("INSERT INTO `all_clients`( `record_no`, `date`, `dob`, `name`, `email`, `address`, `telephone`, `mobile`, `ref`, `id_card`, `passport_no`, `client_type`)
                                                VALUES ('$record_no','$date','$dob','$name','$email','$address','$telephone','$mobile','$ref','$id_card','$passport_no','$client')");

       
  
  
          
  
    $record = $insert->execute();
   
     if ($record){

        // echo "data submited";


    ?>


     <div class="example-alert">
     <div class="alert alert-success alert-icon">
     <em class="icon ni ni-check-circle"></em> <strong>Client  Added Successfully</strong><a href="html/lms/quotations.php"> <  GO BACK. </a>
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


?>












<?php



if(isset($_POST['add_specialinvoice_entry'])){




    $cus_code = $_POST['cus_code'];
    $inv_date = $_POST['inv_date'];

    $party_name = $_POST['party_name'];
    $vendor = $_POST['vendor'];
    $party_name = $_POST['party_name'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $detail = $_POST['detail'];
    

    $ref = $_POST['ref'];
    $pp = $_POST['pp'];
 


 
 
    $rec_amount = $_POST['rec_amount'];
    
    $pay_amount = $_POST['pay_amount'];
 
    $sp_party = $_POST['sp_party'];
 
    $sp_other = $_POST['sp_other'];
 
    $income_head = $_POST['income_head'];


    
 
    $salesman = $_POST['salesman'];
 
   
 
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];

 

    $gross_rec = $_POST['gross_rec'];
 
    $net_rec_party = $_POST['net_rec_party'];
    
    $income = $_POST['income'];
 
    $payable = $_POST['payable'];
 
    $net_rec_staff = $_POST['net_rec_staff'];
    


 
    // $ac_earn = $_POST['ac_earn'];



    $insert = $conn->prepare("INSERT INTO `specialinvoice_entry`( `customer_code`, `vendor`, `party_name`, `invoice_date`, `detail`, `name`, `gender`,  `pp`, `ref`, `mobile`, `email`,  `rec_amount`, `pay_amount`, `sp_party`, `sp_other`, `income_head`, `salesman`, `payable`, `net_rec_party`, `net_rec_staff`, `gross_rec`, `income`)
                                                         VALUES ('$cus_code','$vendor','$party_name','$inv_date','$detail','$name', '$gender' , '$pp','$ref','$mobile','$email','$rec_amount','$pay_amount','$sp_party','$sp_other','$income_head','$salesman','$payable','$net_rec_party','$net_rec_staff','$gross_rec','$income')");

       
  
  
          
  
    $record = $insert->execute();
   
     if ($record){

        // echo "data submited";


    ?>


     <div class="example-alert">
     <div class="alert alert-success alert-icon">
     <em class="icon ni ni-check-circle"></em> <strong>Special Invoice Entry  Added Successfully</strong><a href="html/lms/quotations.php"> <  GO BACK. </a>
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


?>
















































<?php



if(isset($_POST['addRepEntry'])){




    $rep_code = $_POST['rep_code'];
    $date = $_POST['date'];
    $adjdate = $_POST['adjdate'];

    $party_name = $_POST['party_name'];
    $debitto = $_POST['debitto'];
    $name = $_POST['name'];
    $ref = $_POST['ref'];
    $chqno = $_POST['chqno'];
    $bill = $_POST['bill'];
    

    $amount = $_POST['amount'];
    


 
 
    


 
    // $ac_earn = $_POST['ac_earn'];



    $insert = $conn->prepare("INSERT INTO `add_receipt_entry`( `rep_code`, `date`, `party_name`, `debitto`, `adjdate`, `name`, `chq_no`, `amount`, `bill`, `ref`) 
                                                      VALUES ('$rep_code','$date','$party_name','$debitto','$adjdate','$name','$chqno','$amount','$bill','$ref')");

       
  
  
          
  
    $record = $insert->execute();
   
     if ($record){

        // echo "data submited";


    ?>


     <div class="example-alert">
     <div class="alert alert-success alert-icon">
     <em class="icon ni ni-check-circle"></em> <strong>Receipt Entry  Added Successfully</strong><a href="html/lms/quotations.php"> <  GO BACK. </a>
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


?>


























<?php



if(isset($_POST['add_new_passport'])){




    $entry_date = $_POST['entrydate'];
    $cnic = $_POST['cnic'];

    $passportno = $_POST['passportno'];
    $passport_issue_date = $_POST['passport_issue_date'];
    $passport_exp_date = $_POST['passport_exp_date'];
    $issue_auth = $_POST['issue_auth'];
    


    $party_name = $_POST['party_name'];
    $father = $_POST['father'];
    $name = $_POST['name'];
    $namedes = $_POST['namedes'];
    $fatherdes = $_POST['fatherdes'];
    $pkg = $_POST['pkg'];
    
    $mehramname = $_POST['mehramname'];
    $relation = $_POST['relation'];
    $dob = $_POST['dob'];
    $pob = $_POST['pob'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $telephone = $_POST['telephone'];
    $wit_mobile = $_POST['witness_mobile'];
    
    
    $formno = $_POST['formno'];
    

    $traveldate = $_POST['traveldate'];
    
    $night_makkah = $_POST['night_makkah'];
    $night_makkah2 = $_POST['night_makkah2'];
 


 
 
    $night_madinah = $_POST['night_madinah'];
    
    $mis_charges = $_POST['misc_charges'];
 
    $discount = $_POST['discount'];
 
    $ref = $_POST['ref'];
 
    $ref2 = $_POST['ref2'];




 
    // $ac_earn = $_POST['ac_earn'];



    $insert = $conn->prepare("INSERT INTO `passports`( `entry_date`, `cnic`, `party_name`, `passport_no`, `issue_auth`, `pass_isue_date`, `pass_exp_date`, `pkg_info`, `pax_name`, `name_des`, `father_name`, `father_name_des`, `relation`, `reference`, `mehram_name`, `dob`, `pob`, `address`, `email`, `mobile`,  `telephone`, `wit_mobile`, `reference2`, `form_no`, `night_makkah`, `night_makkah2`, `night_madinah`, `travel_date`, `misc_charge`, `discount`)
                                             VALUES ('$entry_date','$cnic','$party_name','$passportno','$issue_auth','$passport_issue_date','$passport_exp_date','$pkg','$name','$namedes','$father','$fatherdes','$relation','$ref','$mehramname','$dob','$pob','$address','$email','$mobile','$telephone','$wit_mobile','$ref2','$formno','$night_makkah','$night_makkah2','$night_madinah','$traveldate','$mis_charges' , '$discount')");

       
  
  
          
  
    $record = $insert->execute();
   
     if ($record){

        // echo "data submited";


    ?>


     <div class="example-alert">
     <div class="alert alert-success alert-icon">
     <em class="icon ni ni-check-circle"></em> <strong>New Passport Entry  Added Successfully</strong><a href="html/lms/quotations.php"> <  GO BACK. </a>
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


?>


























<?php



if(isset($_POST['add_hotel_section'])){




    $hv_no = $_POST['hv_no'];
    $fl_no = $_POST['fl_no'];
    $sr_no = $_POST['sr_no'];

    $hotels = $_POST['hotels'];
    $roomtype = $_POST['roomtype'];
    $cate_room = $_POST['cate_room'];
    $checkin = $_POST['check_in'];

   $checkout = $_POST['check_out'];
    $no_of_night = $_POST['no_of_night'];
    $no_of_room = $_POST['no_of_room'];
    $ref = $_POST['ref'];
    $reservation = $_POST['reservation'];
    

    $vechile = $_POST['vechile'];
    


 
 
    


 
    // $ac_earn = $_POST['ac_earn'];



    $insert = $conn->prepare("INSERT INTO `hotel_section`( `hv_no`, `sr_no`, `hotels`, `fl_no`, `room_type`, `cate_room`, `room_no`, `night_no`, `checkin`, `checkout`, `vechile`, `reservation`, `ref`)
                                              VALUES ('$hv_no','$sr_no','$hotels','$fl_no','$roomtype','$cate_room','$no_of_room','$no_of_night','$checkin','$checkout','$vechile','$reservation','$ref')");

       
  
  
          
  
    $record = $insert->execute();
   
     if ($record){

        // echo "data submited";


    ?>


     <div class="example-alert">
     <div class="alert alert-success alert-icon">
     <em class="icon ni ni-check-circle"></em> <strong>Hotel Section  Added Successfully</strong><a href="html/lms/quotations.php"> <  GO BACK. </a>
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


?>










<?php



if(isset($_POST['add_payment_voucher'])){




    $voucher = $_POST['voucher'];
    $vou_date = $_POST['vou_date'];
    $narration = $_POST['narration'];

    $chq_no = $_POST['chq_no'];
    $chq_date = $_POST['chq_date'];



    $adjdate = $_POST['adjdate'];
    $bno = $_POST['bno'];
    $party_name = $_POST['party_name'];

    $detail = $_POST['detail'];
    $ref = $_POST['ref'];
    $amount = $_POST['amount'];
    $trans_handle = $_POST['trans_handle'];
   
 
   




   
    // foreach($bno as $index ){
    //   $adjdates11 = $adjdates;
    // //   $party_name1 = $party_name[$index];
    //   $bno1 = [$index];
    // //   $detail1 = $detail[$index];
    // //   $ref1 = $ref[$index];
    // //   $amount1 = $amount[$index];
    // //   $trans_handle1 = $trans_handle[$index];
    //   // $s_otherfiled = $empid[$index];


    // //   $insert = $conn->prepare("INSERT INTO `payment_voucher`( `voucher`, `vou_date`, `party_name`, `narration`, `adjdate`, `chq_date`, `chq_no`, `bno`, `trans_handle`, `amount`, `detail`, `ref`) 
    // //                                                  VALUES ('$voucher','$vou_date','$party_name1','$narration','$adjdates11','$chq_date','$chq_no','$bno1','$trans_handle1','$amount1','$detail1','$ref1')");
       


    //   $insert = $conn->prepare("INSERT INTO `payment_voucher`( `adjdate`,  `bno`) 
    //                                                  VALUES ('$adjdates11' , '$bno1')");
    
    
       
  
  
  
    $record = $insert->execute();
 

  if ($record){

    // echo "data submited";


?>


 <div class="example-alert">
 <div class="alert alert-success alert-icon">
 <em class="icon ni ni-check-circle"></em> <strong>Payment Vouchers  Added Successfully</strong><a href="html/lms/quotations.php"> <  GO BACK. </a>
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


?>
















<?php



if(isset($_POST['add_hotel_voucher'])){




    $book_date = $_POST['book_date'];
    $record_no = $_POST['record_no'];
    $passport_no = $_POST['passport_no'];
    $pax_name = $_POST['pax_name'];
    $party_name = $_POST['party_name'];

    $hotel_voucher = $_POST['hotel_voucher'];
    $pkg_info = $_POST['pkg_info'];
    $from = $_POST['from'];

    $reference = $_POST['reference'];
    $reference2 = $_POST['reference2'];
    $umrah_co = $_POST['umrah_co'];
    $rec_amount = $_POST['rec_amount'];
    $pkr = $_POST['pkr'];
    $sr_no = $_POST['sr_no'];
 
 
    $vechile1 = $_POST['vechile1'];
 
    $typeroom1 = $_POST['typeroom1'];
 
    $payable1 = $_POST['payable1'];
    
    $check_in1 = $_POST['check_in1'];
 
    $check_out1 = $_POST['check_out1'];
 
    $ref1 = $_POST['ref1'];
    
    $reservation1 = $_POST['reservation1'];
 
    $hotels1 = $_POST['hotels1'];

    $no_of_night1 = $_POST['no_of_night1'];
 
    $no_of_room1 = $_POST['no_of_room1'];













    $vechile2 = $_POST['vechile2'];
 
    $typeroom2 = $_POST['typeroom2'];
 
    $payable2 = $_POST['payable2'];
    
    $check_in2 = $_POST['check_in2'];
 
    $check_out2 = $_POST['check_out2'];
 
    $ref2 = $_POST['ref2'];
    
    $reservation2 = $_POST['reservation2'];
 
    $hotels2 = $_POST['hotels2'];
  $no_of_night2 = $_POST['no_of_night2'];
 
    $no_of_room2 = $_POST['no_of_room2'];








    $vechile3 = $_POST['vechile3'];
 
    $typeroom3 = $_POST['typeroom3'];
 
    $payable3 = $_POST['payable3'];
    
    $check_in3 = $_POST['check_in3'];
 
    $check_out3 = $_POST['check_out3'];
 
    $ref3 = $_POST['ref3'];
    
    $reservation3 = $_POST['reservation3'];
 
    $hotels3 = $_POST['hotels3'];
 
  
    $no_of_night3 = $_POST['no_of_night3'];
 
    $no_of_room3 = $_POST['no_of_room3'];



 
    $flt_no1 = $_POST['flt_no1'];
 
    $flfrom1 = $_POST['flfrom1'];
    
    $flto1 = $_POST['flto1'];
 
    $fldate1 = $_POST['fldate1'];
 
    $pnr1 = $_POST['pnr1'];
 
    $departure1 = $_POST['departure1'];

    $arrival1 = $_POST['arrival1'];










    
 
    $flt_no2 = $_POST['flt_no2'];
 
    $flfrom2 = $_POST['flfrom2'];
    
    $flto2 = $_POST['flto2'];
 
    $fldate2 = $_POST['fldate2'];
 
    $pnr2 = $_POST['pnr2'];
 
    $departure2 = $_POST['departure2'];

    $arrival2 = $_POST['arrival2'];






    
 
    $trans_vechile = $_POST['trans_vechile'];
 
    $z_mak_vec = $_POST['z_mak_vec'];
    
    $z_mad_vec = $_POST['z_mad_vec'];
 
    $transport = $_POST['transport'];
 
    $trans_rec_amount_rs = $_POST['trans_rec_amount_rs'];
    $trans_rec_amount_ry = $_POST['trans_rec_amount_ry'];
    $trans_pay_amount_rs = $_POST['trans_pay_amount_rs'];

    $trans_pay_amount_ry = $_POST['trans_rec_amount_ry'];
    $ch_rec_amount_rs = $_POST['ch_rec_amount_rs'];
    $ch_rec_amount_ry = $_POST['ch_rec_amount_ry'];
 
    $sale_trans = $_POST['salestrans'];




    $data_enter = $_POST['dataenter'];
    

    $insert = $conn->prepare(" INSERT INTO `add_hotel_voucher`( `book_date`, `record_no`, `pax_name`, `party_name`, `passport_no`, `hv`, `pkg_info`, `from`, `pkr`, `umrah_co`, `rec_amount`, `reference2`, `reference`, `sr_no`, `vechile1`, `hotel1`, `typeroom1`, `reservation1`, `ref1`, `no_of_night1`, `no_of_room1`, `checkin1`, `checkout1`, `payable1`, `vechile2`, `hotel2`, `typeroom2`, `reservation2`,  `ref2` ,  `no_of_night2`, `no_of_room2`, `checkin2`, `checkout2`, `payable2`, `vechile3`, `hotel3`, `typeroom3`, `reservation3`,  `ref3` , `no_of_night3`, `no_of_room3`, `checkin3`, `checkout3`, `payable3`, `flt_no1`, `flt_no2`, `flt_date1`, `flt_date2`, `fltfrom1`, `fltto1`, `fltfrom2`, `fltto2`, `pnr1`, `pnr2`, `departure1`, `departure2`, `arrival1`, `arrival2`, `trans_vechile`, `trans_rec_amount_rs`, `trans_rec_amount_ry`, `trans_pay_amount_rs`, `trans_pay_amount_ry`, `ch_rec_amount_rs`, `ch_rec_amount_ry`, `transport`, `z_mak_vec`, `z_mad_vec`, `sale_trans`, `data_enter`)
                                                     VALUES ('$book_date','$record_no','$pax_name','$party_name','$passport_no','$hotel_voucher','$pkg_info','$from','$pkr','$umrah_co','$rec_amount','$reference2','$reference','$sr_no','$vechile1','$hotels1','$typeroom1','$reservation1','$ref1','$no_of_night1','$no_of_room1','$check_in1','$check_out1','$payable1','$vechile2','$hotels2','$typeroom2','$reservation2','$ref2','$no_of_night2','$no_of_room2','$check_in2','$check_out2','$payable2' ,'$vechile3','$hotels3','$typeroom3','$reservation3','$ref3','$no_of_night3','$no_of_room3','$check_in3','$check_out3','$payable3','$flt_no1','$flt_no2','$fldate1','$fldate2','$flfrom1','$flto1','$flfrom2','$flto2','$pnr1','$pnr2','$departure1','$departure2','$arrival1','$arrival2','$trans_vechile','$trans_rec_amount_rs','$trans_rec_amount_ry','$trans_pay_amount_rs','$trans_pay_amount_ry','$ch_rec_amount_rs','$ch_rec_amount_ry','$transport','$z_mak_vec','$z_mad_vec','$sale_trans','$data_enter')");

       
  
  
          
  
    $record = $insert->execute();
   
     if ($record){

        // echo "data submited";


    ?>


     <div class="example-alert">
     <div class="alert alert-success alert-icon">
     <em class="icon ni ni-check-circle"></em> <strong>Hotel Voucher  Added Successfully</strong><a href="html/lms/quotations.php"> <  GO BACK. </a>
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

?>




















<?php


                        
if (isset($_POST['allow_bound_lead']) ) {



    $users_bound =  $_POST['users'];
    $range1=$_POST['range1'];
    $range2=$_POST['range2'];
  
    
    
  
    foreach($range1 as $index => $ranges)
    {
        $range11 = $ranges;
        $range22 = $range2[$index];
        // $s_otherfiled = $empid[$index];
  
  
        $insert = $conn->prepare("INSERT INTO asignwork (users,range_start, range_end  ) values('$users_bound','$range11', '$range22'  )");

    
    

        
    $record = $insert->execute();



    // $sale_lead = $conn->prepare("UPDATE `excel_data` SET `saleman_lead` = '$users_bound'  where  `sr_no` between '$range11' and '$range22'");
         
    // $sale_lead->execute();





}
  
  
  
    // $services=$_POST['services'];
    
    
    
    
    
    
    
    
    
   
                        
  
   
     if ($record){

        // echo "data submited";


    ?>


     <div class="example-alert">
     <div class="alert alert-success alert-icon">
     <em class="icon ni ni-check-circle"></em> <strong>Asign Leads Successfully</strong><a href="html/lms/quotations.php"> <  GO BACK. </a>
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

?>



















<?php


                        
if (isset($_POST['sharelead']) ) {



    $lid =  $_POST['lid'];
    $sender=$_POST['sender'];
    $sender_name=$_POST['sender_name'];
    $sender_profile=$_POST['sender_profile'];
    $receiver=$_POST['receiver'];
  
    

  
  
        $insert = $conn->prepare("INSERT INTO inbox (l_id,sender, send_prof ,  send_name , receiver  ) values('$lid','$sender', '$sender_profile' , '$sender_name', '$receiver'  )");
         
         
    
    
    
    $record = $insert->execute();
  
  
  
  
    // $services=$_POST['services'];
    
    
    
    
    
    
    
    
    
   
                        
  
   
     if ($record){

        // echo "data submited";


    ?>


     <div class="example-alert">
     <div class="alert alert-success alert-icon">
     <em class="icon ni ni-check-circle"></em> <strong>Share  Leads Successfully</strong><a href="html/lms/quotations.php"> <  GO BACK. </a>
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

    

 
<?php



if(isset($_POST['add_hotel_photos'])){



    $hotel_code = $_POST['h_code'];
    $rand_code = str_replace('HC','',$_POST['h_code']);
    $server = $_POST['server'];

    $images = $_FILES["images"];

  



    
    






    for ($i = 0; $i < count($images["name"]); $i++) {
        $imageName = $images["name"][$i];
        $imageFileType = pathinfo($imageName, PATHINFO_EXTENSION);

       $newImageName = "HMI".rand(10000,99999).".".$imageFileType;
        $imagePath = $images["tmp_name"][$i];
        $imageError = $images["error"][$i];
        
    $imageDest  = 'upload/'.$rand_code."_".$newImageName;
       move_uploaded_file($imagePath,$imageDest);
    
        // Insert image into the database
        
        $insertImage = $conn->prepare("INSERT INTO `hotel_images`( `hotel_code`, `photo`) VALUES ('$hotel_code','$imageDest')");

        $insertImage->execute();
       
    }
    


    
     if ($insertImage){

        // echo "data submited";


    ?>


<script>
   window.location.replace("html/lms/edit_hotel_section.php?<?php echo $server;?>");
   </script>
        
                                                            

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



       
    

    <script src="./assets/js/bundle.js?ver=3.0.3"></script>
    <script src="./assets/js/scripts.js?ver=3.0.3"></script><script src="html/lms/datetime.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 







    



</body>

</html>