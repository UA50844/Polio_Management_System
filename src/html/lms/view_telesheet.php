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
                                            <h3 class="nk-block-title page-title"> View Telesheet </h3>

      
                                        </div>
                                    </div>
                                </div>


                                
<?php




include 'connect.php';
$lid =  $_GET['id']; 

$stmt = $conn->prepare("select * from telesheet_data where id = '$lid' " );
$stmt->fetchAll(PDO::FETCH_BOTH);
$stmt->execute();

$result = $stmt->fetch();
$data = $result;


?>
                                      
                               
                                <div class="nk-block">
                                <form method="post" action="html/lms/submit.php" >
                                    <div class="card">
                                        <div class="card-inner">
                                            <div class="row gy-4">



                                            <div class="d-flex justify-content-end">


                                 

<a class="btn btn-primary d-none d-md-inline-flex" data-bs-toggle="modal" href="#Add" ><em class="icon ni ni-file"></em><span>Add Child Entry </span></a>
</div>



                                            <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Sheet Code</label>

                                                    

                                                        <input type="" readonly name="sheet_code" class="form-control mainagent" id="email" placeholder=""  value="<?php echo $data['sheet_code']?>">
                                                    </div>
                                                </div>




                                                
                                            <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Sheet Date</label>
                                                        <input type="date" name="sheet_date" class="form-control mainagent" id="email" placeholder="" value="<?php echo $data['date']?>" >
                                                    </div>
                                                </div>
                                                
                                            <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Compaig Name</label>
                                                        <input type="" name="compaig_name" class="form-control mainagent" id="email" placeholder="" value="<?php echo $data['campaign_name']?>">
                                                    </div>
                                                </div>




                                                
                                            <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">SNID</label>
                                                        <input type="" name="snid" class="form-control mainagent" id="email" placeholder="" value="<?php echo $data['snid']?>" >
                                                    </div>
                                                </div>




                                                
                                            <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">NID</label>
                                                        <input type="" name="nid" class="form-control mainagent" id="email" placeholder="" value="<?php echo $data['nid']?>" >
                                                    </div>
                                                </div>







                                                
                                            <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Street/Town</label>
                                                        <input type="" name="street" class="form-control mainagent" id="email" placeholder=""  value="<?php echo $data['area']?>">
                                                    </div>
                                                </div>


                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Union Council</label>
                                                        <input type="" name="union_council" class="form-control mainagent" id="email" placeholder="" value="<?php echo $data['union_council']?>" >
                                                    </div>
                                                </div>




                                                
                                            <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Teehseel</label>
                                                        <input type="" name="teehseel" class="form-control mainagent" id="email" placeholder=""  value="<?php echo $data['tehsil']?>">
                                                    </div>
                                                </div>



                                                
                                            <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">District</label>
                                                        <input type="" name="district" class="form-control mainagent" id="email" placeholder=""  value="<?php echo $data['district']?>">
                                                    </div>
                                                </div>



                                                


                                                
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Team No</label>
                                                        <input type="" name="team_no" class="form-control mainagent" id="email" placeholder=""  value="<?php echo $data['team_no']?>">
                                                    </div>
                                                </div>
                                                
                                            <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Member 1</label>
                                                        <input type="" name="member1" class="form-control mainagent" id="email" placeholder=""  value="<?php echo $data['member_1']?>">
                                                    </div>
                                                </div>



                                                
                                                
                                            <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Member 2</label>
                                                        <input type="" name="member2" class="form-control mainagent" id="email" placeholder=""  value="<?php echo $data['member_2']?>">
                                                    </div>
                                                </div>


                                                
                                            <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Supervisor</label>
                                                        <input type="" name="supervisor" class="form-control mainagent" id="email" placeholder="" value="<?php echo $data['supervisor']?>">
                                                    </div>
                                                </div>



                                                
                                            <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">UCMO</label>
                                                        <input type="" name="ucmo" class="form-control mainagent" id="email" placeholder="" value="<?php echo $data['UCMO']?>">
                                                    </div>
                                                </div>





                                                
                                            <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">First Home Owner Name</label>
                                                        <input type="" name="fhon" class="form-control mainagent" id="email" placeholder="" value="<?php echo $data['first_house_head']?>" >
                                                    </div>
                                                </div>



                                                
                                                
                                            <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Last Home Owner Name</label>
                                                        <input type="" name="lhon" class="form-control mainagent" id="email" placeholder=""  value="<?php echo $data['last_house_head']?>">
                                                    </div>
                                                </div>




                                                
                                            <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Working Area Name</label>
                                                        <input type="" name="work_area_name" class="form-control mainagent" id="email" placeholder="" value="<?php echo $data['work_area_name']?>" >
                                                    </div>
                                                </div>




                                                <div class="col-md-4">
                                                <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="customCheck1" name="guest_checkbox" value="yes">
    <label class="custom-control-label" for="customCheck1">Guest Children Were given the Vaccine</label>
</div>

                                                </div>


                                                <div class="col-md-4">
                                                <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="customCheck2" name="drop_checkbox" value="yes">
    <label class="custom-control-label" for="customCheck2">Drink Drop Children in Market And Street</label>
</div>

                                                </div>


                                                <div class="col-md-4">
                                                <div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="customCheck3" name="school_checkbox" value="yes">
    <label class="custom-control-label" for="customCheck3">School And Mosque Were given the Vaccine</label>
</div>

                                                </div>






                                     
                                             

   



                                                <div class="col-md-12 border border-dark p-2">


                                                    


                       
<h5 class="bg-black text-white p-1 text-center">Telesheet Children Record </h5>


                                    
                                                <table class="datatable-init-export  table" data-export-title="Export">
                                                    <thead class="">
                                                        <tr>
                                                        <th>SR NO</th>
                                                            <th>CNIC </th>
                                                            <th>kids under 12 month/th>

                                                            <th>kids 12 to 59 months </th>
                                                            
                                                            <th>Vaccinated kids under 12 month/th>

                                                            <th>Vaccinated 12  to 59 months </th>
                                                            
                                                           

  
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                    <?php

include 'connect.php';

$sheet_code = $data['sheet_code'];
$stmt = $conn->prepare("select *  from `telesheet_entry` where sheet_code = '$sheet_code' " );



 $stmt->execute();


$result = $stmt->fetchAll(PDO::FETCH_BOTH);





?>


<?php
if(count($result)){

    foreach($result as $key => $print){
        


        

?>













                                                      <tr>
                                                      <td> <?php echo $key + 1 ; ?></td>
                                                            <td><?php echo $print['cnic']; ?></td>

                                                            <td> <?php echo $print['no_of_kids_under_12_months']; ?></td>
                                                            <td>	<?php echo $print['no_of_kids_12_months_to_59_months']; ?></td>
                                                            <td><?php echo $print['no_of_vacinated_kids_under_12_months']; ?></td>
                                                            <td><?php echo $print['no_of_vacinated_kids_12_months_to_59_months']; ?></td>
                                                        
                                                        

                                                        </tr>


                                                        <?php


}}
        


        

?>
                                                        
                                                    </tbody>
                                                </table>
                                  
</div>
                                  



                                             




                                                                              
                                                                  

     













    
                                                <div class="col-md-12">
     <h5 class="bg-dark text-white p-1 text-center">Quatity of Children in homewere the given vaccine</h5>
</div>


                                           


                                      
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="address">Children in home		</label>


                                                        <div class="form-control-wrap">
                                                            <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                    <button class="btn btn-outline-primary btn-dim">Less than 12 month</button>
                                                                </div>
                                                            <input type="" id="saleriyal" name="month_12_1" class="form-control Dest1FD" placeholder="" value="<?php echo $data['no_of_house_kids_under_12_month']?>">
                                                              <div class="input-group-prepend">
                                                                    <button class="btn btn-outline-primary btn-dim">12 month to 59 month</button>
                                                                </div>
                                                                <input type="" id="saleamt" name="month_59_1" class="form-control Dest1FT" placeholder="" value="<?php echo $data['no_of_house_kids_12_month_to_59_months']?>">
                                                         
                                                            </div>
                                                        </div>
                                     
                                                    </div>
                                                </div>









                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="address">Children out of home		</label>


                                                        <div class="form-control-wrap">
                                                            <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                    <button class="btn btn-outline-primary btn-dim">Less than 12 month</button>
                                                                </div>
                                                            <input type="" id="saleriyal" name="month_12_2" class="form-control Dest1FD" placeholder="" value="<?php echo $data['no_of_vacinated_house_kids_under_12_month']?>">
                                                              <div class="input-group-prepend">
                                                                    <button class="btn btn-outline-primary btn-dim">12 month to 59 month</button>
                                                                </div>
                                                                <input type="" id="saleamt" name="month_59_2" class="form-control Dest1FT" placeholder="" value="<?php echo $data['no_of_vacinated_house_kids_12_month_to_59_months']?>">
                                                         
                                                            </div>
                                                        </div>
                                     
                                                    </div>
                                                </div>



                                             














                                                <div class="col-md-12">
     <h5 class="bg-dark text-white p-1 text-center">Quatity of Children out of homewere the given vaccine</h5>
</div>








              










                                          

                                                


                                               


                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Streets	</label>
                                                        <input type="" name="qty_street" class="form-control check_in3" id="check_in3" placeholder="" value="<?php echo $data['vacinated_streets']?>">
                                                    </div>
                                                </div>



                                           


                                      

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email"> Schools/Mosques	</label>
                                                        <input type="" name="qty_school" class="form-control check_out3" id="email" placeholder="" value="<?php echo $data['vacinated_school']?>">
                                                    </div>
                                                </div>


                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Guests	</label>
                                                        <input type="" name="qty_guest" class="form-control no_of_night3" id="email" placeholder="" value="<?php echo $data['vacinated_guest']?>"> 
                                                    </div>
                                                </div>


                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Total Children		</label>
                                                        <input type="" name="tot_child" class="form-control no_of_room3" id="email" placeholder="" value="<?php echo $data['total_no_of_kids']?>">
                                                    </div>
                                                </div>






                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Quatity of children in society Were given vacinne</label>
                                                        <input type="" name="qty_society" class="form-control refno3" id="email" placeholder="" value="<?php echo $data['total_no_of_vacinated_kids']?>">
                                                    </div>
                                                </div>






                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">feedback Supervisor		</label>
                                                        <input type="" name="fed_supervisor" class="form-control no_of_room3" id="email" placeholder="" value="<?php echo $data['supervisor_feedback']?>">
                                                    </div>
                                                </div>












                                                


                                                <div class="col-md-12">
     <h5 class="bg-dark text-white p-1 text-center">Area Incharge for Visit 1 </h5>
</div>








              










                                          

                                                


                                               


                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Home Number</label>
                                                        <input type="" name="home_no_1" class="form-control check_in3" id="check_in3" placeholder="" value="<?php echo $data['1st_visit_no_of_house']?>">
                                                    </div>
                                                </div>



                                           


                                      

                                              


                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Used vaccinne	</label>
                                                        <input type="" name="used_vac_1" class="form-control no_of_night3" id="email" placeholder="" value="<?php echo $data['1st_visit_used_vaccine']?>">
                                                    </div>
                                                </div>


                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Without Vaccinne Children		</label>
                                                        <input type="" name="without_vac_1" class="form-control no_of_room3" id="email" placeholder="" value="<?php echo $data['1st_visit_no_of_unvacinated_kids']?>">
                                                    </div>
                                                </div>






                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Visit Time</label>
                                                        <input type="time" name="visit_time_1" class="form-control refno3" id="email" placeholder="" value="<?php echo $data['1st_visit_time']?>">
                                                    </div>
                                                </div>


  <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email"> Quatity of Children Were given vaccination	</label>
                                                        <input type="" name="qty_child_vac_1" class="form-control check_out3" id="email" placeholder="" value="<?php echo $data['1st_visit_no_of_vacinated_kids']?>">
                                                    </div>
                                                </div>



                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">What Kind of Help Area Incharge 		</label>
                                                        <input type="" name="help_1" class="form-control no_of_room3" id="email" placeholder="" value="<?php echo $data['1st_visit_supervisor_helped']?>">
                                                    </div>
                                                </div>












                                                
                                                <div class="col-md-12">
     <h5 class="bg-dark text-white p-1 text-center">Area Incharge for Visit 2 </h5>
</div>








              










                                          

                                                

<div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Home Number</label>
                                                        <input type="" name="home_no_2" class="form-control check_in3" id="check_in3" placeholder="" value="<?php echo $data['2nd_visit_no_of_house']?>">
                                                    </div>
                                                </div>



                                           


                                      

                                              


                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Used vaccinne	</label>
                                                        <input type="" name="used_vac_2" class="form-control no_of_night3" id="email" placeholder="" value="<?php echo $data['2nd_visit_used_vaccine']?>">
                                                    </div>
                                                </div>


                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Without Vaccinne Children		</label>
                                                        <input type="" name="without_vac_2" class="form-control no_of_room3" id="email" placeholder="" value="<?php echo $data['2nd_visit_no_of_unvacinated_kids']?>">
                                                    </div>
                                                </div>






                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Visit Time</label>
                                                        <input type="time" name="visit_time_2" class="form-control refno3" id="email" placeholder="" value="<?php echo $data['2nd_visit_time']?>">
                                                    </div>
                                                </div>


  <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email"> Quatity of Children Were given vaccination	</label>
                                                        <input type="" name="qty_child_vac_2" class="form-control check_out3" id="email" placeholder="" value="<?php echo $data['2nd_visit_no_of_vacinated_kids']?>">
                                                    </div>
                                                </div>



                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">What Kind of Help Area Incharge 		</label>
                                                        <input type="" name="help_2" class="form-control no_of_room3" id="email" placeholder="" value="<?php echo $data['2nd_visit_supervisor_helped']?>">
                                                    </div>
                                                </div>











                                                
                                                <div class="col-md-12">
     <h5 class="bg-dark text-white p-1 text-center">UCMO/DHMT/DPCR Visit </h5>
</div>








              










                                          

                                                


                                               


<div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Home Number</label>
                                                        <input type="" name="home_no_3" class="form-control check_in3" id="check_in3" placeholder="" value="<?php echo $data['UCMO_visit_no_of_house']?>">
                                                    </div>
                                                </div>



                                           


                                      

                                              


                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Used vaccinne	</label>
                                                        <input type="" name="used_vac_3" class="form-control no_of_night3" id="email" placeholder="" value="<?php echo $data['UCMO_visit_used_vaccine']?>">
                                                    </div>
                                                </div>


                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Without Vaccinne Children		</label>
                                                        <input type="" name="without_vac_3" class="form-control no_of_room3" id="email" placeholder="" value="<?php echo $data['UCMO_visit_no_of_unvacinated_kids']?>">
                                                    </div>
                                                </div>






                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">Visit Time</label>
                                                        <input type="time" name="visit_time_3" class="form-control refno3" id="email" placeholder="" value="<?php echo $data['UCMO_visit_time']?>">
                                                    </div>
                                                </div>


  <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email"> Quatity of Children Were given vaccination	</label>
                                                        <input type="" name="qty_child_vac_3" class="form-control check_out3" id="email" placeholder="" value="<?php echo $data['UCMO_visit_no_of_vacinated_kids']?>">
                                                    </div>
                                                </div>



                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="email">What Kind of Help Area Incharge 		</label>
                                                        <input type="" name="help_3" class="form-control no_of_room3" id="email" placeholder="" value="<?php echo $data['UCMO_helped']?>">
                                                    </div>
                                                </div>





                                   

<div class=" offset-md-3 col-md-4 mt-3">


<button type="submit" name="create_telesheet"  class="btn btn-block btn-lg btn-primary">Update Sheet </button>
<!-- <input type="submit" value="submit"> -->

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
</form>

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