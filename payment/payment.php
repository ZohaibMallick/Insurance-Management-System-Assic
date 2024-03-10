
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="shortcut icon" href="https://www.policybazaar.com/favicon.ico">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
   <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
      <title>Insurance Management System</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
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
        
        <?php include '../sidebar.php'; ?>
            <div id="layoutSidenav_content">
                <main>
                    <?php 
                         include '../db.php';
                          $name = $_SESSION['SESS_NAME'];
                          $sql = "SELECT * FROM user where uname='$name' ";
                          $result = mysqli_query($con,$sql);
                          while ($row = mysqli_fetch_assoc($result)) {
                            $ty = $row['type'];
                            if ($ty == "user" or $ty == "hr")
                            {
                              ?>
                 <div class="container-fluid px-4">
                        <h1 class="mt-4 text-white">Review Details</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active text-white">Dashboard</li>
                        </ol>
                   
                      <div class="container-fluid">
<div class="row" >
  <div class="col-lg-6">
    <div class="card" id="mgn">
      <div class="card-body">
        <h5 class="card-title text-center">Review the details</h5>
        <?php
            include '../db.php';
            $name = $_SESSION['SESS_NAME'];
            $id = $_GET['id'];
            $sql = "SELECT * FROM insurance_ap_tbl where uname='$name' and id='$id' ";
            $checkr = mysqli_query($con,$sql);
            while ($row = mysqli_fetch_assoc($checkr)) {
              ?>
              <p class="card-text" style="text-transform: uppercase;"><b>Name :</b> <?php echo $row['uname'] ?></p>
              <p class="card-text" style="text-transform: uppercase;"><b>Policy Name  :</b> <?php echo $row['pname'] ?></p>
              <p class="card-text" style="text-transform: uppercase;"><b>Insurance Type  :</b> <?php echo $row['type'] ?></p>
              <p class="card-text" style="text-transform: uppercase;"><b>Amount :</b> <?php echo $row['amount'] ?></p>
              <a href="javascript:void(0)" data-productid="<?php echo $row['id'];?>" data-productname="<?php echo $row['pname'] ?>" data-amount="<?php echo $row['amount'] ?>" class="btn btn-primary buynow">Pay Now</a>
              <?php
            }
        ?>
      </div>
    </div>
  </div>
  <div class="col-lg-6" >
    <img src="https://images.prismic.io/cred/7cadb933-0a33-487a-88e4-a61cdc78ac88_ccc-payment.jpg?auto=compress,format&rect=0,0,1916,1270&w=620&h=411" class="img-fluid">
  </div>
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
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>

$(".buynow").click(function()
{

var amount=$(this).attr('data-amount'); 
var productid=$(this).attr('data-productid'); 
var productname=$(this).attr('data-productname'); 
  
var options = {
    "key": "rzp_test_nXVfzbVmNhjv2K", // Enter the Key ID generated from the Dashboard
    "amount": amount*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "name": "Insurance Bazar",
    "description": productname,
    "image": "https://www.policybazaar.com/favicon.ico",
    "handler": function (response){
        var paymentid=response.razorpay_payment_id;
    
    $.ajax({
      url:"payment-process.php",
      type:"POST",
      data:{product_id:productid,payment_id:paymentid,product_name:productname,amount:amount},
      success:function(finalresponse)
      {
        if(finalresponse=='done')
        {
          $(document).ready(function() {
      swal({
            title: "Congratulations",
            icon: "success", 
            text: "Payment has been successfully completed ",
            confirmButtonText: "Okay"}).then(function() {
                window.location = "../phistory.php";
            }); 
            });
        }
        else 
        {
          alert('Please check console.log to find error');
          console.log(finalresponse);
        }
      }
    })
        
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
 rzp1.open();
 e.preventDefault();
});
</script>
            </div>
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
       
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
       
    </body>
</html>
