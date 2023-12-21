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
                                            <h3 class="nk-block-title page-title">Public Data</h3>
                                        </div>
                                    </div>
                                </div>
                                <!--.nk-block-head -->
                            









                             

                                <div class="d-flex justify-content-end">


                                 

                           
                           <a class="btn btn-primary d-none d-md-inline-flex"  href="html/components/forms/wizard/public_form.php" ><em class="icon ni ni-plus"></em><span>Add Data </span></a>
</div>



                                    

 






























                                
<div class="nk-block nk-block-xl-lg" >
                                        <div class="nk-block-head">
                                            <!-- <div class="nk-block-head-content">
                                                <h4 class="nk-block-title">Data Table with Export</h4>
                                                <div class="nk-block-des">
                                                    <p>To intialize datatable with export buttons, use <code class="code-class">.datatable-init-export</code> with <code>table</code> element. <br> <strong class="text-dark">Please Note</strong> By default export libraries is not added globally, so please include <code class="code-class">"js/libs/datatable-btns.js"</code> into your page to active export buttons.</p>
                                                </div>
                                            </div> -->
                                        </div>
                                        <div class="card card-bordered  card-preview" >

                                      
                                            <div class="card-inner">



                                            <!-- <div class="d-flex justify-content-start mb-3">

                                            <?php
                                            
                                            header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=Record-lead.xls");
                                            ?>
                                 
header
<a href="html/under_const/index.html" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-filter"></em></a>
                           <a class="btn btn-primary d-none d-md-inline-flex"  data-bs-toggle="modal" href="#profile-edit"><em class="icon ni ni-filter"></em><span>Filter</span></a>
</div> -->


                                                <table id="demoid" class="datatable-init-export  table" data-export-title="Export">
                                                    <thead>
                                                        <tr>
                                               
                                                         
                                                            <th>Record NO </th>
                                                            <th>Name  </th>
                                                            <th>Email  </th>


                                                            <th>phone  </th>
                                                            <th>Cnic  </th>

                                                            <th>City </th>

                                                            <th>Dob </th>
                                                            

  
                                                            <th>Action</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                    <?php

include 'connect.php';


if(isset($_POST['report'])){

$datefrom = $_POST['datefrom'];
$dateto = $_POST['dateto'];


$stmt = $conn->prepare("SELECT * FROM `all_clients` WHERE date(`date_time`)  BETWEEN '$datefrom' AND '$dateto' ");
                                   


}else{

    $stmt = $conn->prepare("select * from public_data" );

}


  $stmt->execute();


$result = $stmt->fetchAll(PDO::FETCH_BOTH);





?>


<?php
if(count($result)){

    foreach($result as $print){
        


        

?>













                                                      <tr>
                                             
                                                             <td><?php echo $print['p_code']; ?></td>
                                                        <td> <?php echo $print['fname']; ?></td>
                                                            <td> <?php echo $print['email']; ?></td>

                                                            <td><?php echo $print['phone']; ?></td>
                                                            <td> <?php echo $print['cnic']; ?></td>
                                                            <td> <?php echo $print['city']; ?></td>
                                                        
                                                            <td><?php echo date('d-m-Y ' , strtotime($print['dob']));?></td>
                                                            
                                                           
                                                          

                                                
                                                            <td>  <div class="dropdown">
                                                                    <a class="dropdown-toggle btn btn-icon btn-light" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <ul class="link-list-opt">
                                                                            <li><a href="html/lms/public_detail.php?id=<?php echo $print['id'];?>"><em class="icon ni ni-eye"></em><span>View Detail</span></a></li>
  
                                                                            <li><a  class="btn delete_product" data-id='<?php echo $print['id'];?>' ><em class="icon ni ni-activity-alt"></em><span >Delete</span></a></li>
                                                                            <!-- <li><button class='btn btn-sm btn-danger delete_product' data-id='<?php echo $print['id'];?>'>Delete</button></li> -->
                                                                        </ul>
                                                                    </div>
                                                                </div>








</td>
                                                        

                                                        </tr>


                                                        <?php


}}
        


        

?>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div><!-- .card-preview -->
                                    </div> <!-- nk-block -->
                                  
































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
    <script src="./assets/js/libs/datatable-btns.js"></script>


    


    <div class="modal fade" role="dialog" id="report">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="html/under_const/search_client.html" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">Report</h5>
                    <form action="html/lms/search_client.php" class="pt-2" method="post">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="first-name">Date From </label>
                                    <input type="date" name="datefrom" class="form-control" id="first-name" >
                                </div>
                            </div>




                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="first-name">Date To </label>
                                    <input type="date" name="dateto" class="form-control" id="first-name" >
                                </div>
                            </div>


                         

                            <div class="col-md-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-
                                
                                
                                
                                2">
                                    <li>
                                        <input type="submit" class="btn btn-primary" name="report" value="Search">
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

    

    <script type="text/javascript">


function run(){


    location.reload(true); 
}

				$(document).ready(function(){
			

					$(document).on('click', '.delete_product', function(){
						var id = $(this).data('id');

						swal.fire({
							title: 'Are you sure?',
							text: "You won't be able to revert this!",
							icon: 'warning',
							showCancelButton: true,
							confirmButtonColor: '#3085d6',
							cancelButtonColor: '#d33',
							confirmButtonText: 'Yes, delete it!',
						}).then((result) => {
							if (result.value){
								$.ajax({
									url: 'html/lms/delete.php?action=pb_delete',
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