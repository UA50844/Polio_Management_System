<?php
	//sq_connection

include 'connect.php';

 

 
	if(isset($_GET['action'])){
		$action = $_GET['action'];
	}
 
	
 
	if($action == 'delete'){
		$id = $_POST['id'];
		$output = array();
		$sql = "DELETE FROM ticket_entry WHERE id = '$id'";
		if($sq_conn->query($sql)){
			$output['status'] = 'success';
			$output['message'] = 'Member deleted successfully';
		}
		else{
			$output['status'] = 'error';
			$output['message'] = 'Something went wrong in deleting the member';
		}
 
		echo json_encode($output);
 
	}



	if($action == 'pb_delete'){
		$id = $_POST['id'];
		$output = array();
		$sql = "DELETE FROM public_data WHERE id = '$id'";
		if($sq_conn->query($sql)){
			$output['status'] = 'success';
			$output['message'] = 'Member deleted successfully';
		}
		else{
			$output['status'] = 'error';
			$output['message'] = 'Something went wrong in deleting the member';
		}
 
		echo json_encode($output);
 
	}





	if($action == 'p_mem_delete'){
		$id = $_POST['id'];
		$output = array();
		$sql = "DELETE FROM public_member WHERE id = '$id'";
		if($sq_conn->query($sql)){
			$output['status'] = 'success';
			$output['message'] = 'Member deleted successfully';
		}
		else{
			$output['status'] = 'error';
			$output['message'] = 'Something went wrong in deleting the member';
		}
 
		echo json_encode($output);
 
	}







	if($action == 'vou_delete'){
		$id = $_POST['id'];
		$output = array();
		$sql = "DELETE FROM all_vouchers_data WHERE id = '$id'";
		if($sq_conn->query($sql)){
			$output['status'] = 'success';
			$output['message'] = 'Member deleted successfully';
		}
		else{
			$output['status'] = 'error';
			$output['message'] = 'Something went wrong in deleting the member';
		}
 
		echo json_encode($output);
 
	}









	if($action == 'ledger_entry_delete'){
		$id = $_POST['id'];
		$inv_code = $_POST['inv_code'];
		$bal = $_POST['upbalance'];
		$adv = $_POST['upadvance'];
		$output = array();
	$sql = "DELETE FROM ledger_entry WHERE id = '$id'";
		if($sq_conn->query($sql)){
			
			
			// received or balance  updated 


			


$uptrans = $conn->prepare("UPDATE   `all_invoice_data` SET  `advance` = '$adv' , `balance` = '$bal'   where `inv_code` = '$inv_code'");
$uptrans->execute();


			
			$output['status'] = 'success';
			$output['message'] = 'Ledger Entry deleted successfully';



		}
		else{
			$output['status'] = 'error';
			$output['message'] = 'Something went wrong in deleting the member';
		}
 
		echo json_encode($output);
 
	}










	if($action == 'member_delete'){
		$id = $_POST['id'];
		$output = array();
		$sql = "DELETE FROM hv_pax_entry WHERE id = '$id'";
		if($sq_conn->query($sql)){
			$output['status'] = 'success';
			$output['message'] = 'Member deleted successfully';
		}
		else{
			$output['status'] = 'error';
			$output['message'] = 'Something went wrong in deleting the member';
		}
 
		echo json_encode($output);
 
	}




	

	if($action == 'pkg_delete'){
		$id = $_POST['id'];
		$output = array();
		$sql = "DELETE FROM invoice_entry WHERE id = '$id'";
		if($sq_conn->query($sql)){
			$output['status'] = 'success';
			$output['message'] = 'Package deleted successfully';
		}
		else{
			$output['status'] = 'error';
			$output['message'] = 'Something went wrong in deleting the member';
		}
 
		echo json_encode($output);
 
	}







	if($action == 'PA_delete'){
		$id = $_POST['id'];
		$output = array();
		$sql = "DELETE FROM party_agreement WHERE id = '$id'";
		if($sq_conn->query($sql)){
			$output['status'] = 'success';
			$output['message'] = 'Member deleted successfully';
		}
		else{
			$output['status'] = 'error';
			$output['message'] = 'Something went wrong in deleting the member';
		}
 
		echo json_encode($output);
 
	}



	


	if($action == 'user_delete'){
		$id = $_POST['id'];
		$output = array();
		$sql = "DELETE FROM users WHERE id = '$id'";
		if($sq_conn->query($sql)){
			$output['status'] = 'success';
			$output['message'] = 'User deleted successfully';
		}
		else{
			$output['status'] = 'error';
			$output['message'] = 'Something went wrong in deleting the member';
		}
 
		echo json_encode($output);
 
	}




	
	if($action == 'PT_delete'){
		$id = $_POST['id'];
		$output = array();
		$sql = "DELETE FROM passports WHERE id = '$id'";
		if($sq_conn->query($sql)){
			$output['status'] = 'success';
			$output['message'] = 'Member deleted successfully';
		}
		else{
			$output['status'] = 'error';
			$output['message'] = 'Something went wrong in deleting the member';
		}
 
		echo json_encode($output);
 
	}



	if($action == 'HS_delete'){
		$id = $_POST['id'];
		$output = array();
		$sql = "DELETE FROM hotel_section WHERE id = '$id'";
		if($sq_conn->query($sql)){
			$output['status'] = 'success';
			$output['message'] = 'Member deleted successfully';
		}
		else{
			$output['status'] = 'error';
			$output['message'] = 'Something went wrong in deleting the member';
		}
 
		echo json_encode($output);
 
	}








	if($action == 'HV_delete'){
		$id = $_POST['id'];
		$output = array();
		$sql = "DELETE FROM add_hotel_voucher WHERE id = '$id'";
		if($sq_conn->query($sql)){
			$output['status'] = 'success';
			$output['message'] = 'Member deleted successfully';
		}
		else{
			$output['status'] = 'error';
			$output['message'] = 'Something went wrong in deleting the member';
		}
 
		echo json_encode($output);
 
	}




	if($action == 'HE_delete'){
		$id = $_POST['id'];
		$output = array();
		$sql = "DELETE FROM hotel_entry WHERE id = '$id'";
		if($sq_conn->query($sql)){
			$output['status'] = 'success';
			$output['message'] = 'Member deleted successfully';
		}
		else{
			$output['status'] = 'error';
			$output['message'] = 'Something went wrong in deleting the member';
		}
 
		echo json_encode($output);
 
	}




	
	if($action == 'client_delete'){
		$id = $_POST['id'];
		$output = array();
		$sql = "DELETE FROM all_clients WHERE id = '$id'";
		if($sq_conn->query($sql)){
			$output['status'] = 'success';
			$output['message'] = 'Member deleted successfully';
		}
		else{
			$output['status'] = 'error';
			$output['message'] = 'Something went wrong in deleting the member';
		}
 
		echo json_encode($output);
 
	}




	if($action == 'asignwork_delete'){
		$id = $_POST['id'];
		$output = array();
		$sql = "DELETE FROM asignwork WHERE id = '$id'";
		if($sq_conn->query($sql)){
			$output['status'] = 'success';
			$output['message'] = 'Member deleted successfully';
		}
		else{
			$output['status'] = 'error';
			$output['message'] = 'Something went wrong in deleting the member';
		}
 
		echo json_encode($output);
 
	}




	
	if($action == 'our_hotel_delete'){
		$id = $_POST['id'];
		$output = array();



		$ass_stmt = $conn->prepare("SELECT  * from our_hotels where id =  '$id' " );
		$ass_stmt->fetchAll(PDO::FETCH_BOTH);
		 $ass_stmt->execute();
		
		 $ass_result = $ass_stmt->fetch();
		
		$hotel_code = $ass_result['hotel_code'];

		$img_sql = "DELETE FROM hotel_images WHERE hotel_code = '$hotel_code'";

		$sq_conn->query($img_sql);
		
		$sql = "DELETE FROM our_hotels WHERE id = '$id'";
		if($sq_conn->query($sql)){
			$output['status'] = 'success';
			$output['message'] = 'Member deleted successfully';
		}
		else{
			$output['status'] = 'error';
			$output['message'] = 'Something went wrong in deleting the member';
		}
 
		echo json_encode($output);
 
	}






	
	if($action == 'shr_lead_delete'){
		$id = $_POST['id'];
		$output = array();
		$sql = "DELETE FROM inbox WHERE id = '$id'";
		if($sq_conn->query($sql)){
			$output['status'] = 'success';
			$output['message'] = 'Member deleted successfully';
		}
		else{
			$output['status'] = 'error';
			$output['message'] = 'Something went wrong in deleting the member';
		}
 
		echo json_encode($output);
 
	}





	if($action == 'mul_inv_delete'){
		$id = $_POST['id'];
		$output = array();
		$sql = "DELETE FROM all_invoice_data WHERE id = '$id'";








		$aw_stmt = $conn->prepare("SELECT  * from all_invoice_data where id =  '$id' " );
		$aw_stmt->fetchAll(PDO::FETCH_BOTH);
		 $aw_stmt->execute();
		
		 $aw_result = $aw_stmt->fetch();
		
		$inv_code = $aw_result['inv_code'];


		$inv_delt = "DELETE FROM invoice_entry WHERE inv_code = '$inv_code'";

		$sq_conn->query($inv_delt);
		
		$inv_delt2 = "DELETE FROM ledger_entry WHERE inv_code = '$inv_code'";

		$sq_conn->query($inv_delt2);

		if($sq_conn->query($sql)){
			$output['status'] = 'success';
			$output['message'] = 'Invoice deleted successfully';
		}
		else{
			$output['status'] = 'error';
			$output['message'] = 'Something went wrong in deleting the member';
		}
 
		echo json_encode($output);
 
	}






	if($action == 'mul_quote_delete'){
		$id = $_POST['id'];
		$output = array();
		$sql = "DELETE FROM all_quotation_data WHERE id = '$id'";








		$aw_stmt = $conn->prepare("SELECT  * from all_quotation_data where id =  '$id' " );
		$aw_stmt->fetchAll(PDO::FETCH_BOTH);
		 $aw_stmt->execute();
		
		 $aw_result = $aw_stmt->fetch();
		
		$inv_code = $aw_result['inv_code'];


		$inv_delt = "DELETE FROM quotation_entry WHERE inv_code = '$inv_code'";

		$sq_conn->query($inv_delt);
		
		$inv_delt2 = "DELETE FROM quotation_entry WHERE inv_code = '$inv_code'";

		$sq_conn->query($inv_delt2);

		if($sq_conn->query($sql)){
			$output['status'] = 'success';
			$output['message'] = 'quotation deleted successfully';
		}
		else{
			$output['status'] = 'error';
			$output['message'] = 'Something went wrong in deleting the member';
		}
 
		echo json_encode($output);
 
	}












	
	if($action == 'mega_hv_delete'){
		$id = $_POST['id'];
		$output = array();
		$sql = "DELETE FROM add_hotel_voucher WHERE id = '$id'";








		$aw_stmt = $conn->prepare("SELECT  * from add_hotel_voucher where id =  '$id' " );
		$aw_stmt->fetchAll(PDO::FETCH_BOTH);
		 $aw_stmt->execute();
		
		 $aw_result = $aw_stmt->fetch();
		
		$inv_code = $aw_result['hv_code'];


		$inv_delt = "DELETE FROM hv_pax_entry WHERE hv_code = '$inv_code'";

		$sq_conn->query($inv_delt);
		
		

		if($sq_conn->query($sql)){
			$output['status'] = 'success';
			$output['message'] = 'Member deleted successfully';
		}
		else{
			$output['status'] = 'error';
			$output['message'] = 'Something went wrong in deleting the member';
		}
 
		echo json_encode($output);
 
	}




	// excel file delete




	if($action == 'excel_file_delete'){
		$dlt_work = $_POST['id'];









		$aw_stmt = $conn->prepare("SELECT  * from uploaded where id =  '$dlt_work' " );
		$aw_stmt->fetchAll(PDO::FETCH_BOTH);
		 $aw_stmt->execute();
		
		 $aw_result = $aw_stmt->fetch();
		
		$range1 = $aw_result['range_start'];
		$range2 = $aw_result['range_end']; 
		
		$dlte = $conn->prepare("DELETE  FROM uploaded  WHERE id =  '$dlt_work' " );
			$dlte->execute();
		
		
		
		
		   
		
		$dlte_lead = $conn->prepare("DELETE  FROM excel_data where sr_no between  '$range1' and '$range2'   " );
			$dlte_lead->execute();


















		$output = array();

		if($dlte){
			$output['status'] = 'success';
			$output['message'] = 'Member deleted successfully';
		}
		else{
			$output['status'] = 'error';
			$output['message'] = 'Something went wrong in deleting the member';
		}
 
		echo json_encode($output);
 
	}
	





















	

	
	if($action == 'costsheet_delete'){
		$id = $_POST['id'];
		$output = array();
		$sql = "DELETE FROM costsheet_data WHERE id = '$id'";









		$csi_delt = "DELETE FROM costsheet_item WHERE cs_code = '$id'";

		$sq_conn->query($csi_delt);
		
		

		if($sq_conn->query($sql)){
			$output['status'] = 'success';
			$output['message'] = 'Member deleted successfully';
		}
		else{
			$output['status'] = 'error';
			$output['message'] = 'Something went wrong in deleting the member';
		}
 
		echo json_encode($output);
 
	}



	
	if($action == 'hotel_img_delete'){
		$id = $_POST['id'];
		$output = array();
		
		


		$aw_stmt = $conn->prepare("SELECT  * from hotel_images where id =  '$id' " );
		$aw_stmt->fetchAll(PDO::FETCH_BOTH);
		 $aw_stmt->execute();
		
		 $aw_result = $aw_stmt->fetch();
		
		$paths = $aw_result['photo'];
		
		unlink($paths);



		$sql = "DELETE FROM hotel_images WHERE id = '$id'";


		if($sq_conn->query($sql)){
			$output['status'] = 'success';
			$output['message'] = 'Image deleted successfully';
		}
		else{
			$output['status'] = 'error';
			$output['message'] = 'Something went wrong in deleting the member';
		}
 
		echo json_encode($output);
 
	}



    ?>
 