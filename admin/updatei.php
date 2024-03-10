 <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
session_start();
include '../db.php';
        $id = $_POST['id'];
        $pname = $_POST['pname'];
        $category = $_POST['category'];
        $sql = "UPDATE  insurance_tbl SET pname='$pname',category='$category' where id='$id' ";
    $execute = mysqli_query($con,$sql);
    if ($execute == TRUE)
    {
        echo '<script> 
             $(document).ready(function() {
            swal({
            title: "Congratualtions",
            icon: "success", 
            text: "You have updated policy successfully",
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
            text: "Contact the Insurance Administrator",
            confirmButtonText: "Okay"}).then(function() {
                window.location = "query.php";
            }); 
            });
            </script>';

    }
    
    
?>