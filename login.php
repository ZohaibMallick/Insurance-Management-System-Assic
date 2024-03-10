 <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
session_start();
include 'db.php';
if (isset($_POST['submit'])) {
	$name = $_POST['uname'];
	$password = md5($_POST['password']);
	$check = "SELECT * FROM user WHERE uname = '$name' and password = '$password' ";
	$checkr = mysqli_query($con,$check);
	if (mysqli_num_rows($checkr) > 0)
	{
		$_SESSION['SESS_NAME'] = $name;
		echo '<script> 
			 $(document).ready(function() {
			swal({
            title: "Congratulations",
            icon: "success", 
            text: "Logged in successfully",
            confirmButtonText: "Okay"}).then(function() {
                window.location = "dashboard.php";
            }); 
            });
            </script>';

	}
	else
	{
		echo '<script> 
			 $(document).ready(function() {
			swal({
            title: "OOPS!",
            icon: "error", 
            text: "Something went wrong check your username or password",
            confirmButtonText: "Okay"}).then(function() {
                window.location = "index.php";
            }); 
            });
            </script>';
	}
}

?>