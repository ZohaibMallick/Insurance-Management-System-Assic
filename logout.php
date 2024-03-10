 <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
session_start();
session_unset();
echo '<script> 
			 $(document).ready(function() {
			swal({
            title: "Hurray",
            icon: "success", 
            text: "You have been logged out successfully visit again",
            confirmButtonText: "Okay"}).then(function() {
                window.location = "index.php";
            }); 
            });
            </script>';

?>