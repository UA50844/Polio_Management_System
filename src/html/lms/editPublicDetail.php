<?php
session_start();
include 'connect.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$address = $_POST['address'];
$state = $_POST['state'];
$city = $_POST['city'];
$postal_code = $_POST['postal_code'];
$phone = $_POST['phone'];
$whatsapp = $_POST['whatsapp'];
$gender = $_POST['gender'];
$cnic = $_POST['cnic'];
$doi = $_POST['doi'];
$dob = $_POST['dob'];
$kids = $_POST['kids'];
$younger = $_POST['younger'];
$elder = $_POST['elder'];

$mem_id = $_POST['mem_id'];
$name_mem = $_POST['name_mem'];
$father_name = $_POST['father_name'];
$gender_mem = $_POST['gender_mem'];
$dob_mem = $_POST['dob_mem'];
$age_mem = $_POST['age_mem'];

$name_new = $_POST['name_new'];
$father_name_new = $_POST['father_name_new'];
$gender_new = $_POST['gender_new'];
$dob_new = $_POST['dob_new'];
$age_new = $_POST['age_new'];

$id = $_POST['id'];
$p_code = $_POST['p_code'];
$server = $_POST['server'];

$query_mem = '';
for ($count = 0; $count < count($mem_id); $count++) {
    $mem_id_clean = mysqli_real_escape_string($sq_conn, $mem_id[$count]);
    $name_clean = mysqli_real_escape_string($sq_conn, $name_mem[$count]);
    $father_name_clean = mysqli_real_escape_string($sq_conn, $father_name[$count]);
    $dob_clean = mysqli_real_escape_string($sq_conn, $dob_mem[$count]);
    $gender_clean = mysqli_real_escape_string($sq_conn, $gender_mem[$count]);
    $age_clean = mysqli_real_escape_string($sq_conn, $age_mem[$count]);

    $query_mem = "UPDATE public_member SET name = '$name_clean', father_name = '$father_name_clean', dob = '$dob_clean', gender = '$gender_clean', age = '$age_clean' WHERE id = '$mem_id_clean'; ";
    mysqli_multi_query($sq_conn, $query_mem);

  }


$query_new_mem = '';
for ($counta = 0; $counta < count($name_new); $counta++) {
    $name_new_clean = mysqli_real_escape_string($sq_conn, $name_new[$counta]);
    $father_name_new_clean = mysqli_real_escape_string($sq_conn, $father_name_new[$counta]);
    $dob_new_clean = mysqli_real_escape_string($sq_conn, $dob_new[$counta]);
    $gender_new_clean = mysqli_real_escape_string($sq_conn, $gender_new[$counta]);
    $age_new_clean = mysqli_real_escape_string($sq_conn, $age_new[$counta]);

    $query_new_mem .= "INSERT INTO public_member (p_code, name, father_name, dob, gender, age) VALUES ('$p_code', '$name_new_clean', '$father_name_new_clean', '$dob_new_clean', '$gender_new_clean', '$age_new_clean'); ";
}

mysqli_multi_query($sq_conn, $query_new_mem);

$query_v = "UPDATE public_data SET
    fname = '$fname',
    lname = '$lname',
    gender = '$gender',
    address = '$address',
    city = '$city',
    state = '$state',
    postal_code = '$postal_code',
    phone = '$phone',
    whatsapp = '$whatsapp',
    cnic = '$cnic',
    doi = '$doi',
    dob = '$dob',
    profile = '$destfile',
    email = '$email',
    no_of_kids = '$kids',
    younger = '$younger',
    elder = '$elder'
    WHERE id = '$id' ";

mysqli_multi_query($sq_conn, $query_v);

if ($query_v) {
    echo '✔️ Profile Edited Successfully! Please wait for 3 seconds to view the voucher.';
} else {
    echo '❌ Oops! Payment Voucher not Added.';
}
?>
