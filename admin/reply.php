 <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
session_start();
include '../db.php';
        $id = $_POST['id'];
        $solution = $_POST['solution'];
        $sql = "UPDATE  contact SET solution='$solution' where id='$id' ";
    $execute = mysqli_query($con,$sql);
    if ($execute == TRUE)
    {
        echo '<script> 
             $(document).ready(function() {
            swal({
            title: "Congratualtions",
            icon: "success", 
            text: "You have sent reply  Successfully",
            confirmButtonText: "Okay"}).then(function() {
                window.location = "query.php";
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
                window.location = "query.php";
            }); 
            });
            </script>';

    }
    
    
?>