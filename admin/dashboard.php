
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta content="" name="description">
  <meta content="" name="keywords">
  <title>Insruance Management System</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="shortcut icon" href="https://www.policybazaar.com/favicon.ico">
  <link rel="shortcut icon" href="https://www.policybazaar.com/favicon.ico">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet"> 
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
       <title>AMT Dashboard</title>
   <link rel="icon" type="image/x-icon" href="https://i.ytimg.com/vi/h_Z01mSNY_o/maxresdefault.jpg">
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
                        <h1 class="mt-4 text-white">Admin</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active text-white">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">
                                        <h6 class="text-center">Travel Insurance</h6>
                                        <?php 
                                        include '../db.php';
                                       
                                        $sql = "SELECT COUNT(*) AS count
                                        FROM insurance_ap_tbl i
                                        INNER JOIN insurance_tbl inc ON i.pname = inc.pname
                                        WHERE inc.category = 'Travel';
";
                                        $result = mysqli_query($con,$sql);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <h4 class="text-center"><?php echo $row['count']; ?></h4>
                                            <?php
                                        }
                                    ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                     <div class="card-body">
                                        <h6 class="text-center">Car Insurance </h6>
                                        <?php 
                                        include '../db.php';
                                       
                                        $sql = "SELECT COUNT(*) AS count
                                        FROM insurance_ap_tbl i
                                        INNER JOIN insurance_tbl inc ON i.pname = inc.pname
                                        WHERE inc.category = 'Car';
";
                                        $result = mysqli_query($con,$sql);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <h4 class="text-center"><?php echo $row['count']; ?></h4>
                                            <?php
                                        }
                                    ?>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">
                                        <h6 class="text-center">Bike Insurance</h6>
                                     <?php 
                                        include '../db.php';
                                       
                                        $sql = "SELECT COUNT(*) AS count
                                        FROM insurance_ap_tbl i
                                        INNER JOIN insurance_tbl inc ON i.pname = inc.pname
                                        WHERE inc.category = 'Bike';
";
                                        $result = mysqli_query($con,$sql);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <h4 class="text-center"><?php echo $row['count']; ?></h4>
                                            <?php
                                        }
                                    ?>
                                    </div>
                                    
                                </div>
                            </div>
                             <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                     <div class="card-body">
                                        <h6 class="text-center"> Health Insurance</h6>
                                     <?php 
                                        include '../db.php';
                                       
                                        $sql = "SELECT COUNT(*) AS count
                                        FROM insurance_ap_tbl i
                                        INNER JOIN insurance_tbl inc ON i.pname = inc.pname
                                        WHERE inc.category = 'Health';
";
                                        $result = mysqli_query($con,$sql);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <h4 class="text-center"><?php echo $row['count']; ?></h4>
                                            <?php
                                        }
                                    ?>
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div><br>
                        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Expenditure Monthly 
            </div>
            <div class="card-body">
             <?php
include '../db.php';


$query = "SELECT  month, SUM(amount_paid) as total_amount
          FROM payment_tbl  group by month  ";

$result = mysqli_query($con, $query);


$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Convert data to JSON format
$json_data = json_encode($data);

// Close the database connection
mysqli_close($con);
?>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            // Parse the JSON data
            var jsonData = <?php echo $json_data; ?>;
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'month');
            data.addColumn('number', 'Total Amount');

            // Add data to the DataTable
            for (var i = 0; i < jsonData.length; i++) {
                data.addRow([ jsonData[i].month, parseFloat(jsonData[i].total_amount)]);
            }

            // Set chart options
            var options = {
                title: 'Total Amount Spent',
                hAxis: { title: 'Month' },
                vAxis: { title: 'Total Amount' },
                legend: 'none',
                curveType: 'function', // Choose 'function' for smooth lines
                pointSize: 8,          // Adjust the size of the dots
               
            };

            // Create and draw the chart
            var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>
                <div id="chart_div" style="width: 900px; height: 500px;"></div>
           </div>
        </div>
                       
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
