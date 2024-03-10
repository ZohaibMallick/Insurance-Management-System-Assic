 <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php

if (isset($_POST['submit'])) {
	
	include 'db.php';
	$uname = $_POST['uname'];
	$password = md5($_POST['password']);
	$repassword = md5($_POST['repassword']);
	$phoneno = $_POST['phoneno'];
	$check = "SELECT * FROM user WHERE phoneno = '$phoneno' ";
	$checkr = mysqli_query($con,$check);
	if (mysqli_num_rows($checkr) > 0)
	{
		echo '<script> 
			 $(document).ready(function() {
			swal({
            title: "OOPS!",
            icon: "error", 
            text: "The phone number is already registered with us",
            confirmButtonText: "Okay"}).then(function() {
                window.location = "account.php";
            }); 
            });
            </script>';

	}
	else if ($password == $repassword)
	{
	$sql = "INSERT INTO user (uname,password,phoneno) values('$uname','$password','$phoneno')";
	$execute = mysqli_query($con,$sql);
	if ($execute == TRUE)
	{
		echo '<script> 
			 $(document).ready(function() {
			swal({
            title: "Congratualtions",
            icon: "success", 
            text: "You have Registered Successfully",
            confirmButtonText: "Okay"}).then(function() {
                window.location = "account.php";
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
                window.location = "account.php";
            }); 
            });
            </script>';

	}

}
else
{
	echo '<script> 
			 $(document).ready(function() {
			swal({
            title: "OOPS",
            icon: "error", 
            text: "Password did not match",
            confirmButtonText: "Okay"}).then(function() {
                window.location = "index.php";
            }); 
            });
            </script>';
}
}
?>