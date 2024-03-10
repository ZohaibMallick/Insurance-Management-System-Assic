 <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
session_start();
include 'db.php';

if (isset($_POST['submit'])) {
    $name = $_SESSION['SESS_NAME'];
    $pname = $_POST['pname'];
    $descr = $_POST['descr'];
        $amount = 0;
    // Check if "proof" key is set in $_FILES array
    if (isset($_FILES["proof"])) {
        $filename = $_FILES["proof"]["name"];
        $tempname = $_FILES["proof"]["tmp_name"];
        $folder = "proofimage/" . $filename;

        $sql = "SELECT sum(amount_paid) as amt, month FROM payment_tbl where pname='$pname' and name='$name' group by month ";
        $result = mysqli_query($con, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            global $amount;
            $amount = $row['amt'];

        }

        
        $sql1 = "INSERT INTO claim(uname,descr,pname,proof,total_amount_paid) values('$name','$descr','$pname','$filename','$amount')";
        $res = mysqli_query($con, $sql1);

        if ($res == TRUE && move_uploaded_file($tempname, $folder)) {
            echo '<script>
                 $(document).ready(function() {
                swal({
                title: "Congratulations",
                icon: "success",
                text: "You have added a claim successfully",
                confirmButtonText: "Okay"
                }).then(function() {
                    window.location = "claim.php";
                });
                });
                </script>';
        } else {
            echo '<script>
                 $(document).ready(function() {
                swal({
                title: "Failed",
                icon: "error",
                text: "File upload failed",
                confirmButtonText: "Okay"
                }).then(function() {
                    window.location = "claim.php";
                });
                });
                </script>';
        }
    } else {
        echo '<script>
             $(document).ready(function() {
            swal({
            title: "Missing Proof",
            icon: "error",
            text: "Please provide a proof file",
            confirmButtonText: "Okay"
            }).then(function() {
                window.location = "claim.php";
            });
            });
            </script>';
    }
} else {
    echo "";
}
?>
