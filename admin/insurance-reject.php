 <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
session_start();
include '../db.php';
		$id = $_GET['id'];
		$sql = "UPDATE  insurance_ap_tbl SET status='rejected' where id='$id' ";
	$execute = mysqli_query($con,$sql);
	if ($execute == TRUE)
	{
		echo '<script> 
			 $(document).ready(function() {
			swal({
            title: "Congratualtions",
            icon: "success", 
            text: "You have rejected Policy  Successfully",
            confirmButtonText: "Okay"}).then(function() {
                window.location = "insuranceapprove.php";
            }); 
            });
            </script>';
	}

	else
	{
		echo '<script> 
			 $(document).ready(function() {
			swal({
            title: "OOPS",
            icon: "error", 
            text: "Contact the Insurance Administrator",
            confirmButtonText: "Okay"}).then(function() {
                window.location = "insuranceapprove.php";
            }); 
            });
            </script>';

	}
	
	
?>