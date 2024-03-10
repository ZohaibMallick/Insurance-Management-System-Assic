 <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
session_start();
include '../db.php';
	if (isset($_POST['submit'])) {
		$pname = $_POST['pname'];
		$category = $_POST['category'];
		$premium = $_POST['premium'];
		$basic = $_POST['basic'];
		$sql = "INSERT INTO insurance_tbl (pname,category,premium,basic) values('$pname','$category','$premium','$basic')";
	$execute = mysqli_query($con,$sql);
	if ($execute == TRUE)
	{
		echo '<script> 
			 $(document).ready(function() {
			swal({
            title: "Congratualtions",
            icon: "success", 
            text: "You have added Policy  Successfully",
            confirmButtonText: "Okay"}).then(function() {
                window.location = "insurance.php";
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
            text: "Contact the AMT Administrator",
            confirmButtonText: "Okay"}).then(function() {
                window.location = "insurance.php";
            }); 
            });
            </script>';

	}
	}
	else
	{
		echo "contact AMT administrator";
	}
?>