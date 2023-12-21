<?php

include 'header.php';

?>
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">





                            <?php


include 'connect.php';         
                            

// $server = $_SERVER['QUERY_STRING'];


$get_id = $_GET['id'];


$server = $_SERVER['QUERY_STRING'];
                                            
$stmt = $conn->prepare("select * from public_data where id = '$get_id'   " );
$stmt->fetchAll(PDO::FETCH_BOTH);
 $stmt->execute();

 $data = $stmt->fetch();

 $username =  $data['fname'].' '. $data['lname'];

                    
 ?>



                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between g-3">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Edit Detail For  -   <?php echo $username?>  </h3>
                                        </div>
                                    </div>
                                </div>
                                <!--.nk-block-head -->
                                <div class="nk-block">
                                    <form method="post" action="html/lms/submit.php" enctype="multipart/form-data">
                                    <div class="card">
                                        <div class="card-inner">
                                            <div class="row gy-4">

                                      
                                                <!--col-->






                                   
                                                        <input type="hidden" name="" class="form-control id"    placeholder="Enter Search" value="<?php echo $data['id'];?>">

                                                        <input type="hidden" name="" class="form-control p_code"    placeholder="Enter Search" value="<?php echo $data['p_code'];?>">

                                                        <input type="hidden" readonly  class="form-control server"  placeholder="Trip No" value="<?php echo $server;?>">
                                                   

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                    <label class="form-label" for="phone-no" > Joining Date</label>

                                   
                                                        <input type="" readonly name="" class="form-control inv_date"    placeholder="Enter Search" value="<?php echo date('F j, Y, g:i a',strtotime($data['entry_date'])); ?>">

                                                    </div>
                                                </div>  



                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                    <label class="form-label" for="phone-no" >First Name</label>

                                   
                                                        <input type="" name="" class="form-control fname"    placeholder="Enter Search" value="<?php echo $data['fname'];?>" >

                                                    </div>
                                                </div>  


                                                
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                    <label class="form-label" for="phone-no" >Last Name</label>

                                   
                                                        <input type="" name="" class="form-control lname"    placeholder="Enter Search" value="<?php echo $data['lname'];?>" >

                                                    </div>
                                                </div>  



                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                    <label class="form-label" for="phone-no" >Address</label>

                                   
                                                        <input type="" name="" class="form-control address"    placeholder="Enter Search" value="<?php echo $data['address'];?>" >

                                                    </div>
                                                </div>  




                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                    <label class="form-label" for="phone-no" >City</label>

                                   
                                                        <input type="" name="" class="form-control city"    placeholder="Enter Search" value="<?php echo $data['city'];?>" >

                                                    </div>
                                                </div>  



                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                    <label class="form-label" for="phone-no" >State</label>

                                   
                                                        <input type="" name="" class="form-control state"    placeholder="Enter Search" value="<?php echo $data['state'];?>" >

                                                    </div>
                                                </div>  





                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                    <label class="form-label" for="phone-no" >Postal Code</label>

                                   
                                                        <input type="" name="" class="form-control postal_code"    placeholder="Enter Search" value="<?php echo $data['postal_code'];?>" >

                                                    </div>
                                                </div>
                                                
                                                

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                    <label class="form-label" for="phone-no" >Phone Number</label>

                                   
                                                        <input type="" name="" class="form-control phone"    placeholder="Enter Search" value="<?php echo $data['phone'];?>" >

                                                    </div>
                                                </div>




                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                    <label class="form-label" for="phone-no" >Whatsapp</label>

                                   
                                                        <input type="" name="" class="form-control whatsapp"    placeholder="Enter Search" value="<?php echo $data['whatsapp'];?>" >

                                                    </div>
                                                </div>





                                          


                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                    <label class="form-label" for="phone-no" >Cnic</label>

                                   
                                                        <input type="" name="" class="form-control cnic"    placeholder="Enter Search" value="<?php echo $data['cnic'];?>" >

                                                    </div>
                                                </div>



                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                    <label class="form-label" for="phone-no" >Date of Issue</label>

                                   
                                                        <input type="date" name="" class="form-control doi"    placeholder="Enter Search" value="<?php echo $data['doi'];?>" >

                                                    </div>
                                                </div>



                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                    <label class="form-label" for="phone-no" >Date of Birth</label>

                                   
                                                        <input type="date" name="" class="form-control dob"    placeholder="Enter Search" value="<?php echo $data['doi'];?>" >

                                                    </div>
                                                </div>





                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                    <label class="form-label" for="phone-no" >Number of kids</label>

                                   
                                                        <input type="" name="" class="form-control kids"    placeholder="Enter Search" value="<?php echo $data['no_of_kids'];?>" >

                                                    </div>
                                                </div>



                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                    <label class="form-label" for="phone-no" >Younger Than 1 Year</label>

                                   
                                                        <input type="" name="" class="form-control younger"    placeholder="Enter Search" value="<?php echo $data['younger'];?>" >

                                                    </div>
                                                </div>



                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                    <label class="form-label" for="phone-no" >Elder Than 1 Year</label>

                                   
                                                        <input type="" name="" class="form-control elder"    placeholder="Enter Search" value="<?php echo $data['elder'];?>" >

                                                    </div>
                                                </div>




                                     
                                               

                                             

                                     




                                     
                                       

                                            
                                            </div>
                                            <!--row-->







     




       

    <!-- <div class=" offset-md-3 col-md-4 mt-3">
     
                <button type="submit" name="addQuot"  class="btn btn-block btn-primary">Search </button>
         
    </div> -->
    <!--col-->
</div>
<!--row-->











                                        </div>
                                        <!--card inner-->
                                    </div>
                                    <!--card-->


                                </div>
                                <!--.nk-block -->














  
  

   





  

  <div class="nk-block">
                  
                  <div class="card">
                      <div class="card-inner">
                          <div class="row gy-4">



                       




                          
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

        <th scope="col">Action</th>
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
            <input type=""   class="form-control name_mem"   placeholder="item & description" value="<?php echo $pax['name'];?>" >

        </td>

        
        <td class="col-3" > 
            <input type=""   class="form-control father_name"  onkeyup='calc(<?php echo $key + 1?>)' id='qty<?php echo $key + 1?>' name="qty[]" placeholder="qty" value="<?php echo $pax['father_name'];?>">
        </td>
        
        <td class="col-2" > 
            <input type="date"   class="form-control dob_mem" onkeyup='calc(<?php echo $key + 1?>)' id='cost<?php echo $key + 1?>' name="cost[]"  placeholder="rate" value="<?php echo $pax['dob'];?>">
        </td>
        
        <td class="col-1" > 
            <input type="number"   class="form-control age_mem" onkeyup='calc(<?php echo $key + 1?>)' id='price<?php echo $key + 1?>'   name="price[]" placeholder="amount" value="<?php echo $pax['age'];?>">
        </td>

        <td class="col-2" > 
<select class="form-select  js-select2 gender_mem" data-search="on" name="">
<option  value="<?php echo $pax['gender'];?>"><?php echo $pax['gender'];?></option>
                                                
                                             
                                                
            <option value="Male" >Male</option>
		  	<option value="Female" >Female</option>
        </select>
</td>

        


		

        

       
        

        


        <td class="col-1"   >
            
        <button type='button' name='remove' data-id='<?php echo $pax['id'];?>' class='btn btn-danger  delete_product'>  <em class='icon ni ni-trash'></em></button>

        <td>




</tr>




</div>

<?php

}
}
?>
 <tr >





<td class="" >
 
</td>

<td class="" >
 
</td>


<td class="" >
 
</td>

<td class="" >
 
</td>

<td class="" >
 
</td>


<td class="" >
 
</td>


<td class="col-1" >
<a class="dropdown-toggle btn btn-icon btn-light" data-bs-toggle="dropdown"><a href="javascript:void(0)" class="add-more-form float-end btn btn-primary addTableRow"  id="party">+</a></a>
 
</td>
</tr >













</tbody>
</table>






























    
   
  
  

                         



                                         
        


  <div class=" offset-md-3 col-md-4 mt-3">
     
                <button type="button" name="save"  id="save" class="btn btn-block btn-primary">Update </button>
         
    </div> 
        


   


    
   
  
  

                         
                                       




                 
             
                                             






                                         
        



     




       

    <!-- <div class=" offset-md-3 col-md-4 mt-3">
     
                <button type="submit" name="addQuot"  class="btn btn-block btn-primary">Search </button>
         
    </div> -->
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

   

    <script>
       





     



















// add table row


$(document).ready(function(){
 var count = <?php echo $member; ?>;
 $('.addTableRow').click(function(){
  count = count + 1;
  var html_code = "<tr id='row"+count+"'>";





  html_code += " <td class='col-1' ><input type=''   class='form-control sr_no_new' id='sr_no' name='' readonly value='"+count+"'  placeholder='' ></td>";
  html_code += " <td class='col-3' ><input type=''   class='form-control name_new'  placeholder='item & description'></td>";
   html_code += " <td class='col-3' ><input type=''   class='form-control father_name_new' onkeyup='calc("+count+")' id='qty"+count+"' name='qty[]'  placeholder='qty'></td>";

   html_code += " <td class='col-2' ><input type='date'   class='form-control dob_new'  onkeyup='calc("+count+")' id='cost"+count+"' name='cost[]' placeholder='rate'></td>";
   html_code += " <td class='col-1' ><input type='number'   class='form-control age_new' onkeyup='calc("+count+")' id='price"+count+"' name='price[]'  placeholder='amount'></td>";
   html_code += "<td class='col-1' ><select class='form-select  js-select2 gender_new' data-search='on'><option value='Male' >Male</option><option value='Female' >Female</option></select></td>";
   html_code += "<td><button type='button' name='remove' data-row='row"+count+"' class='btn btn-danger  remove'>  <em class='icon ni ni-trash'></em></button></td>";   
   html_code += "</tr>";  
   $('#crud_table').append(html_code);
 });
});





$(document).on('click', '.remove', function(){
  var delete_row = $(this).data("row");
  $('#' + delete_row).remove();

  update();
 });
 



 $('#save').click(function () {
    var name_mem = [];
    var father_name = [];
    var dob_mem = [];
    var age_mem = [];
    var mem_id = [];
    var gender_mem = [];

    // new record

    var name_new = [];
    var father_name_new = [];
    var dob_new = [];
    var age_new = [];
    var gender_new = [];


    $('.mem_id').each(function () {
        mem_id.push($(this).val());
    });

    $('.name_mem').each(function () {
        name_mem.push($(this).val());
    });

    $('.father_name').each(function () {
        father_name.push($(this).val());
    });

    $('.dob_mem').each(function () {
        dob_mem.push($(this).val());
    });

    $('.age_mem').each(function () {
        age_mem.push($(this).val());
    });

    $('.gender_mem').each(function () {
        gender_mem.push($(this).val());
    });

    $('.name_new').each(function () {
        name_new.push($(this).val());
    });

    $('.father_name_new').each(function () {
        father_name_new.push($(this).val());
    });

    $('.dob_new').each(function () {
        dob_new.push($(this).val());
    });

    $('.age_new').each(function () {
        age_new.push($(this).val());
    });

    $('.gender_new').each(function () {
        gender_new.push($(this).val());
    });

    var id = $('.id').val();
    var p_code = $('.p_code').val();
    var fname = $('.fname').val();
    var lname = $('.lname').val();
    var email = $('.email').val();
    var phone = $('.phone').val();
    var whatsapp = $('.whatsapp').val();
    var cnic = $('.cnic').val();
    var doi = $('.doi').val();
    // var dob = $('.dob').val();
    var gender = $('.gender').val();
    var address = $('.address').val();
    var postal_code = $('.postal_code').val();
    var state = $('.state').val();
    var city = $('.city').val();
    var kids = $('.kids').val();
    var younger = $('.younger').val();
    var elder = $('.elder').val();
    var server = $('.server').val();

    // function rungo() {
    //     setInterval(function () {
    //         window.location.replace("html/lms/public_detail_edit.php?" + server);
    //     }, 3000);
    // }

    $.ajax({
        url: "html/lms/editPublicDetail.php",
        method: "POST",
        data: {
            id: id,
            p_code: p_code,
            server: server,
            fname: fname,
            lname: lname,
            email: email,
            phone: phone,
            whatsapp: whatsapp,
            cnic: cnic,
            doi: doi,
            address: address,
            state: state,
            city: city,
            postal_code: postal_code,
            kids: kids,
            younger: younger,
            elder: elder,
            mem_id: mem_id,
            name_mem: name_mem,
            father_name: father_name,
            gender_mem: gender_mem,
            age_mem: age_mem,
            dob_mem: dob_mem,
            name_new: name_new,
            father_name_new: father_name_new,
            dob_new: dob_new,
            gender_new: gender_new,
            age_new: age_new
        },
        success: function (data) {
            swal.fire('Notice!', data, 'success');
            // rungo();
        },
        error: function (xhr, status, error) {
            console.error(xhr.responseText);
            swal.fire('Error!', 'An error occurred while processing your request.', 'error');
        }
    });
});












$(document).ready(function(){


function run(){

setInterval(function() {
    location.reload(true); 
  }, 2000);
}

                        $(document).on('click', '.delete_product', function(){
                            var id = $(this).data('id');
                            
                            swal.fire({
                                title: 'Are you sure?',
                                text: " Package is Deleted!",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Yes, delete it!',
                            }).then((result) => {
                                if (result.value){
                                    $.ajax({
                                        url: 'html/lms/delete.php?action=p_mem_delete',
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