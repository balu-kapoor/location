<?php
session_start();

include_once __DIR__ . '/db.php';

$name = isset($_POST['userid']) ? $_POST['userid']:'';
$email = isset($_POST['usermail']) ? $_POST['usermail']:'';
$country_flag = isset($_POST['country_flag']) ? $_POST['country_flag']:'';
$country_name = isset($_POST['country_name']) ? $_POST['country_name']:'';
$state_prov = isset($_POST['state_prov']) ? $_POST['state_prov']:'';
$city = isset($_POST['city']) ? $_POST['city']:'';
$isp = isset($_POST['isp']) ? $_POST['isp']:'';
$host_name = isset($_POST['host_name']) ? $_POST['host_name']:'';
$present_time = isset($_POST['present_time']) ? $_POST['present_time'] :'';
$os_icon = isset($_POST['os_icon']) ? $_POST['os_icon']:'';
$os_name = isset($_POST['os_name']) ? $_POST['os_name']:'';
$device_type = isset($_POST['device_type']) ? $_POST['device_type']:'';
$browser_name = isset($_POST['browser_name']) ? $_POST['browser_name']:'';
$browser_version = isset($_POST['browser_version']) ? $_POST['browser_version']:'';


$sql = "INSERT INTO users (name, email, country_flag, country_name, state_prov, city, isp, host_name, present_time, os_icon, os_name, device_type, browser_name, browser_version )
VALUES ('$name', '$email', '$country_flag', '$country_name', '$state_prov', '$city', '$isp', '$host_name', '$present_time', '$os_icon', '$os_name', '$device_type' ,'$browser_name', '$browser_name')";

if ($conn->query($sql) === FALSE) {
   echo "Error: " . $sql . "<br>" . $conn->error;
} 

$conn->close();

// $to_email = "brkapoor11@gmail.com";
// $subject = "Script email test";
// $body = "
//    First Name:  $f_name
// ";
// $headers = "From: brkapoor11@gmail.com";

// if (mail($to_email, $subject, $body, $headers)) {
//     echo "Email successfully sent to $to_email...";
// } else {
//     echo "Email sending failed...";
// }

$_SESSION['success'] = true;

header("Location: index.php");
