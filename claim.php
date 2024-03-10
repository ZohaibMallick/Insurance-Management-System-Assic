
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="shortcut icon" href="https://www.policybazaar.com/favicon.ico">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
   <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet"> 
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
      <title>Insruance Management System</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="shortcut icon" href="https://www.policybazaar.com/favicon.ico">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <style type="text/css">
            body
            {
                background: url(sunset.png);
                background-repeat: no-repeat;
                background-size: 100% 34%;
            }
            
        </style>
    </head>
    <body class="sb-nav-fixed">
        
        <?php include 'sidebar.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                    <?php 
                         include 'db.php';
                          $name = $_SESSION['SESS_NAME'];
                          $sql = "SELECT * FROM user where uname='$name' ";
                          $result = mysqli_query($con,$sql);
                          while ($row = mysqli_fetch_assoc($result)) {
                            $ty = $row['type'];
                            if ($ty == "user" or $ty == "hr")
                            {
                              ?>
                
                    <div class="container-fluid px-4">
                        <h1 class="mt-4 text-white">Create Insurance</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active text-white">Dashboard</li>
                        </ol>
                        <div class="card mb-4">
    <div class="card-title text-center">
                          <br>      
                                Add Policy
                            </div>
                            <div class="card-body">
                                <div class="row">
            <div class="col-lg-3">
                <form action="add_claim.php" method="POST" enctype="multipart/form-data">
                    <label>Select Policy Name</label>
                    <select name="pname" class="form-control" >
                                        <option value="select" readonly>Select Policy</option>
                                        <?php
                                        $sql = "SELECT DISTINCT pname FROM insurance_tbl";
                                        $result = mysqli_query($con, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo '<option value="' . htmlspecialchars($row['pname']) . '">' . htmlspecialchars($row['pname']) . '</option>';
                                        }
                                        ?>
                                    </select>
            </div>
           
           
             <div class="col-lg-3">
                <label>Description of claiming </label><br>
                <input type="text" name="descr" required class="form-control">
            </div>
             <div class="col-lg-3">
                <label>Proof</label><br>
                <input type="file" name="proof" class="form-control">
            </div>
            <div class="col-lg-3">
                <br>
                <input type="submit" name="submit" value="Add " class="form-control btn btn-danger">
                </form>
                <?php 
                    include 'db.php';
                    if (isset($_POST['submit'])) {
                        $name = $_SESSION['SESS_NAME'];
                        $pname = $_POST['pname'];
                        $type = $_POST['type'];
                        $tenure = $_POST['tenure'];
                        $sql = "SELECT * FROM insurance_tbl where pname='$pname' ";
                        $result = mysqli_query($con,$sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            if ($type == 'premium') {
                                $amount = $row['premium'];
                            }
                            else 
                            {
                                $amount = $row['basic'];
                            }

                        }
                        $sql1 = "INSERT INTO insurance_ap_tbl(uname,pname,type,amount,tenure) values('$name','$pname','$type','$amount','$tenure')";
                        $res = mysqli_query($con,$sql1);
                        if ($res == TRUE)
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
                        echo "";
                    }

                ?>
            </div>
    </div>
    </div>
        </div><br>
                        <div class="card mb-4">
            <div class="card-title text-center">
                <br>
                Insurance Policy List
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Policy name</th>
                                            <th>Description</th>
                                            <th>Proof</th>
                                            <th>total_amount_paid</th>
                                            <th>status</th>
                                            <th>Claimed Amount</th>
                                            <th>Creation Date</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Policy name</th>
                                            <th>Description</th>
                                            <th>Proof</th>
                                            <th>total_amount_paid</th>
                                            <th>status</th>
                                            <th>Claimed Amount</th>
                                            <th>Creation Date</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            include 'db.php';
                        
                        $sql = "SELECT * FROM claim where uname='$name'";
                        $result = mysqli_query($con,$sql);
                        while($row = mysqli_fetch_assoc($result))
                        {
                            ?>
                            <form action="insurance-edit.php" method="POST">
                            <tr>
                                <td><?php echo $row['pname'] ?>  </td>
                                <td><?php echo $row['descr'] ?></td>
                                <td><?php echo $row['proof'] ?></td>
                                <td><?php echo $row['total_amount_paid'] ?></td>
                                 <td><?php echo $row['status'] ?></td>
                                    <td><?php echo $row['claimed_amount'] ?></td>
                                <td><?php echo $row['creationdate'] ?></td>
                                
                            </tr>
                            <?php
                        }

                       
                        
                      
                    ?>
                                    </tbody>
                                </table>
            </div>
        </div><br>
                        
                       
                      <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; insurance bazar 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <?php
                                }
                                else if ($ty == "manager") {
                                    ?>

                   
                               <?php
                            }
                            else  {
                                $name = "";
                            }
                        ?>
                       
                       
                                    <?php
                                    
                                
                           }
                        
                        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="admin/js/datatables-simple-demo.js"></script>
    </body>
</html>
