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
                                    <div class="nk-block-between g-3">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title"> View Lockhouse Sheet </h3>

      
                                        </div>
                                    </div>
                                </div>


                                
<?php




include 'connect.php';
$lid =  $_GET['id']; 

$stmt = $conn->prepare("select * from lockhouse_data where id = '$lid' " );
$stmt->fetchAll(PDO::FETCH_BOTH);
$stmt->execute();

$result = $stmt->fetch();
$data = $result;


?>
                                      
                               
                                <div class="nk-block">

                                    <div class="card">
                                        <div class="card-inner">
                                            <div class="row gy-4">



                                            <div class="d-flex justify-content-end">


                                 

<a class="btn btn-primary d-none d-md-inline-flex accordion-head collapsed"  data-bs-toggle="collapse" data-bs-target="#accordion-item-1-3" ><em class="icon ni ni-file"></em><span>Add Lock-House Entry </span></a>
</div>



                                      
<div class="col-md-12">
<div id="accordion-1" class="accordion accordion-s2">
  
  <div class="accordion-item">
     
      <div class="accordion-body collapse" id="accordion-item-1-3" data-bs-parent="#accordion-1" >
          <div class="accordion-inner">
             
          <h5 class="title">Add Lock House Entry</h5>
                    <form action="html/lms/submit.php" enctype="multipart/form-data" method="post" class="pt-2">
                        <div class="row gy-4">
                        <div class="col-md-2">
                                <div class="form-group">
                                    <label class="form-label" for="address-l1">ID </label>
                                    <input type="hidden" name="id" class="form-control" id="address-l1" value="<?php echo $data['id']?>">
                                    <input type="text" name="sheet_code" class="form-control" id="address-l1" value="<?php echo $data['sheet_code']?>">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="form-label" for="last-name">House No</label>
                                    <input type="text" class="form-control" id="last-name" name="house_no" placeholder="Last name">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label" for="email">Child Name</label>
                                    <input type="email" class="form-control" id="email" name="child_name" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Father Name</label>
                                    <input type="text" class="form-control" id="phone-no" name="father_name" value="" placeholder="Phone Number">
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Age</label>
                                    <input type="text" class="form-control" id="phone-no" name="age" value="" placeholder="">
                                </div>
                            </div>
                        


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="address-l1">Address </label>
                                    <input type="text" name="address" class="form-control" id="address-l1" value="">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Arrival Date</label>
                                    <input type="date" class="form-control" id="phone-no" name="arr_date" value="" placeholder="">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Vaccination Date</label>
                                    <input type="date" class="form-control" id="phone-no" name="vac_date" value="" placeholder="">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no">Validation Date</label>
                                    <input type="date" class="form-control" id="phone-no" name="val_date" value="" placeholder="">
                                </div>
                            </div>
                        


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="address-l1">Reason </label>
                                    <input type="text" name="reason" class="form-control" id="address-l1" value="">
                                </div>
                            </div>
                        
                           
                            
                         
                            <div class="col-md-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <input type="submit"  class="btn btn-primary" value="Add Entry" name="add_lockhouse_entry">
                                    </li>
                                 
                                </ul>
                            </div>
                        </div>
                    </form>


                    <div class="col-md-12 pt-2">
     <h5 class="bg-black text-white p-1 text-center">---------------------------------------------------------------------------------------------</h5>
</div>


          </div>
      </div>
  </div>
</div>
</div>  


<div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Sheet Code</label>

                                                    

                                                        <input type="" readonly name="sheet_code" class="form-control mainagent" id="email" placeholder=""  value="<?php echo $data['sheet_code']?>">
                                                    </div>
                                                </div>




                                                
                                            <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Sheet Date</label>
                                                        <input type="" name="sheet_date" class="form-control mainagent" id="email" placeholder="" value="<?php echo $data['date']?>" >
                                                    </div>
                                                </div>
                                                
                                            <div class="col-md-8">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Compaign Name</label>
                                                        <input type="" name="compaig_name" class="form-control mainagent" id="email" placeholder="" value="<?php echo $data['campaign_name']?>">
                                                    </div>
                                                </div>




                                                
                                       


                                     
                                             

   



                                                <div class="col-md-12 border border-dark p-2">


                                                    


                       
<h5 class="bg-black text-white p-1 text-center">Lock-House  Children Record </h5>


                                    
                                                <table class="datatable-init-export  table" data-export-title="Export">
                                                    <thead class="">
                                                        <tr>
                                                        <th>SR NO</th>
                                                            <th>House No</th>
                                                            <th>Child Details</th>

                                                            <th>Address </th>
                                                            
                                                            
                                                            <th>Reason</th>
                                                            <th> Dates Details</th>


                                                            
                                                            
                                                           

  
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                    <?php

include 'connect.php';

$sheet_code = $data['sheet_code'];
$stmt = $conn->prepare("select *  from `lockhouse_entry` where sheet_code = '$sheet_code' " );



 $stmt->execute();


$result = $stmt->fetchAll(PDO::FETCH_BOTH);





?>


<?php
if(count($result)){

    foreach($result as $key => $print){
        


        

?>













                                                      <tr>
                                                      <td> <?php echo $key + 1 ; ?></td>
                                                            <td><?php echo $print['house_no']; ?></td>

                                                            <td>
                                                                 Child Name : <?php echo $print['name'];?><br>
                                                                 Father Name : <?php echo $print['father_name'];?><br>
                                                                 Age : <?php echo $print['age'];?><br>
                                                        </td>
                                                         
                                                            <td>
                                                                 Arrival : <?php echo $print['arrival_date'];?><br>
                                                                 Vaccination : <?php echo $print['vacination_date'];?><br>
                                                                  Validation : <?php echo $print['validation_date'];?><br>
                                                        </td>
                                                        
                                                        <td>	<?php echo $print['address']; ?></td>
                                                            <td><?php echo $print['reason']; ?></td>

                                                        </tr>


                                                        <?php


}}
        


        

?>
                                                        
                                                    </tbody>
                                                </table>
                                  
</div>
                                  



                                             


     





                            

</div>
<!--row-->







                                        
                                            




















                       
                       











<!--col-->
</div>
<!--row-->











                      </div>
                      <!--card inner-->
                  </div>
                  <!--card-->


              </div>
              <!--.nk-block -->                       



                                


















             

                                       
                                       
























































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

    <div class="modal fade" role="dialog" id="Add">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="html/under_const/index.html" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">Add Child Entry</h5>
                    <form action="html/lms/submit.php" enctype="multipart/form-data" method="post" class="pt-2">
                        <div class="row gy-4">
                        <div class="col-md-2">
                                <div class="form-group">
                                    <label class="form-label" for="address-l1">ID </label>
                                    <input type="text" name="id" class="form-control" id="address-l1" value="<?php echo $data['id']?>">
                                    <input type="text" name="sheet_code" class="form-control" id="address-l1" value="<?php echo $data['sheet_code']?>">
                                </div>
                            </div>
                


                         

<div class="col-md-10">
                                                    <div class="form-group">
                                                        <label class="form-label" for="phone-no" >Select CNIC </label>
                                                        <div class="form-control-wrap">
                                                            <select class="form-select js-select2 hotel2" data-search="on" name="cnic">
                                                            
                                                            <?php

include 'connect.php';



 $stmt = $conn->prepare("select * from public_data" );
  $stmt->execute();


$result = $stmt->fetchAll(PDO::FETCH_BOTH);





?>


<?php
if(count($result)){

    foreach($result as $print){

        ?>
						<option value="<?php echo $print['cnic']?>"><?php echo $print['cnic']?> (<?php echo $print['fname'].$print['lname']?> )</option>


                    <?php

    }}

    ?>


                                                            </select>
                                                        </div>
                                                    </div>
                                            </div>








                                            <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="address">Children for home		</label>


                                                        <div class="form-control-wrap">
                                                            <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                    <button class="btn btn-outline-primary btn-dim">Less than 12 month</button>
                                                                </div>
                                                            <input type="" id="saleriyal" name="no_of_kids_under_12_months" class="form-control Dest1FD" placeholder="">
                                                              <div class="input-group-prepend">
                                                                    <button class="btn btn-outline-primary btn-dim">12 month to 59 month</button>
                                                                </div>
                                                                <input type="" id="saleamt" name="no_of_kids_12_months_to_59_months" class="form-control Dest1FT" placeholder="">
                                                         
                                                            </div>
                                                        </div>
                                     
                                                    </div>
                                                </div>









                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="address">Children for  home given were vacinee		</label>


                                                        <div class="form-control-wrap">
                                                            <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                    <button class="btn btn-outline-primary btn-dim">Less than 12 month</button>
                                                                </div>
                                                            <input type="" id="saleriyal" name="no_of_vacinated_kids_under_12_months" class="form-control Dest1FD" placeholder="">
                                                              <div class="input-group-prepend">
                                                                    <button class="btn btn-outline-primary btn-dim">12 month to 59 month</button>
                                                                </div>
                                                                <input type="" id="saleamt" name="no_of_vacinated_kids_12_months_to_59_months" class="form-control Dest1FT" placeholder="">
                                                         
                                                            </div>
                                                        </div>
                                     
                                                    </div>
                                                </div>

                        
                           
                            
                          
                            <div class="col-md-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <input type="submit"  class="btn btn-primary" value="Add Child" name="add_telesheet_entry">
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

  
</body>

</html>