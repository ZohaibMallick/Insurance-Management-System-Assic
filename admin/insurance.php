
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
      <title>Insruance Management System</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="shortcut icon" href="https://www.policybazaar.com/favicon.ico">
  <link rel="shortcut icon" href="https://www.policybazaar.com/favicon.ico">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
         <style type="text/css">
            body
            {
                background: url(../sunset.png);
                background-repeat: no-repeat;
                background-size: 100% 34%;
            }
            
        </style>
    </head>
    <body class="sb-nav-fixed">
        
        <?php include 'sidebar.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4 text-white">Manage Policy</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active text-white">Dashboard</li>
                        </ol>
                
<div class="card mb-4">
    <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Add Policy
                            </div>
                            <div class="card-body">
                                <div class="row">
            <div class="col-lg-3">
                <form action="add_insurance.php" method="POST">
                    <label>Enter the Policy Name</label><br>
                    <input type="text" name="pname" class="form-control" required>
            </div>
           <div class="col-lg-3">
                            <label>Select Category</label>
                            <select class="form-control" name="category">
                                <option value="#">Select Category</option>
                                <option value="Car">Car</option>
                                <option value="Bike">Bike</option>
                                <option value="Travel">Travel</option>
                                <option value="Health">Health</option>
                            </select>
                        </div>
            <div class="col-lg-2">
                <label>Premium Amount</label><br>
                <input type="number" name="premium" required class="form-control">
            </div>
             <div class="col-lg-2">
                <label>Basic Amount</label><br>
                <input type="number" name="basic" required class="form-control">
            </div>
            <div class="col-lg-2">
                <br>
                <input type="submit" name="submit" value="Add To Payout" class="form-control btn btn-danger">
                </form>
            </div>
    </div>
    </div>
        </div><br>
        <div class="card mb-4">
                            <div class="card-header">
                                
                                        <i class="fas fa-table me-1"></i>
                                Policy List
                                   
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Policy name</th>
                                            <th>Category</th>
                                            <th>Premium amount</th>
                                            <th>Basic amount</th>
                                            
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                             <th>Policy name</th>
                                            <th>Category</th>
                                            <th>Premium amount</th>
                                            <th>Basic amount</th>
                                            
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            include '../db.php';
                        
                        $sql = "SELECT * FROM insurance_tbl";
                        $result = mysqli_query($con,$sql);
                        while($row = mysqli_fetch_assoc($result))
                        {
                            ?>
                            <tr>
                                <td><?php echo $row['pname'] ?></td>
                                <td><?php echo $row['category'] ?></td>
                                <td><?php echo $row['premium'] ?></td>
                                <td><?php echo $row['basic'] ?></td>
                               
                                <td>
                                    <div class="row">
                                        <div class="col-lg-2">
                                             <a href="insurance-edit.php?id=<?php echo $row['id']; ?>" style="text-decoration: none;" ><i class="fas fa-edit"></i></a>
                                           
                                        </div>
                                        <div class="col-lg-2">
                                            <a href="insurance-delete.php?id=<?php echo $row['id']; ?>" style="text-decoration: none;" ><i class="fas fa-close"></i></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php
                        }

                       
                        
                      
                    ?>
                                    </tbody>
                                </table>
                            </div>
        

                </main>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
