<?php 

include('../db.php');
session_start();
 date_default_timezone_set("Asia/Calcutta");
$name = $_SESSION['SESS_NAME'];
$paymentid=$_POST['payment_id'];
$productid=$_POST['product_id'];
$amount =$_POST['amount'];
$pname=$_POST['product_name'];
$dt=date('Y-m-d h:i:s');
$month = date('F');
$sql="insert into payment_tbl (productid,name,pname,amount_paid,status,payment_id,pdate,month) values ('".$productid."','".$name."','".$pname."','".$amount."','paid','".$paymentid."','".$dt."','".$month."')";

$result=mysqli_query($con,$sql);

if($result > 0)
{
	echo 'done';
	$_SESSION['paymentid']=$paymentid;
}
else 
{
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>