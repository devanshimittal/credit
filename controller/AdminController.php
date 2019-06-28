<?php
@ob_start ();
@session_start ();
//error_reporting(0);
include_once 'Connection.php';
$Connection = new Connection ();
$db = $Connection->getConnection ();
require_once ('../dao/AdminDao.php');
$adminDao = new AdminDao ( $db );
date_default_timezone_set ( "Asia/Kolkata" );
$action_type = $_REQUEST ['action_type'];

if ($action_type == "update") {
	 $id=$_REQUEST['id'];
	 $name=$_REQUEST['sender'];
	 $transfer=$_REQUEST['transfer'];
	 $three=$_REQUEST['three'];
	 $credits=$_REQUEST['credits'];
	 $ccredits=$_REQUEST['ccredits'];
	 
	 
	 $left = $ccredits - $credits;
	 
	 $ID = $id;
	 
	 if($credits>$ccredits)
	 {	
		echo "<script type=\"text/javascript\">
		window.alert('Number of credits to be transferred should be less than the total credits.');
		window.location.href = 'http://localhost/credit/transfer-$ID';
		</script>";
		exit;
	 }
	 if ($credits<0)
	 {
		echo "<script type=\"text/javascript\">
		window.alert('Number of credits to be transferred should be greater than 0.');
		window.location.href = 'http://localhost/credit/transfer-$ID';
		</script>";
		exit;
	 }
	  else 
	 {
		$save = $adminDao->save( $id , $left);
		$savenew = $adminDao->savenew ( $transfer, $credits);
		//$saveTrans = $adminDao->saveTrans ( $name,$transfer, $credits);
		header ( "location:http://localhost/credit/users.php" );
	 }
}


?>
