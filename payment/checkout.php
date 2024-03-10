<?php

session_start();
if (!isset($_SESSION['SESS_NAME']) || $_SESSION['SESS_NAME'] == '')
  header('location: ../index.php');
include 'header.php'; 
require 'config.php';
require 'vendor/autoload.php';

use Razorpay\Api\Api;

if (!empty($_POST['amount'])) {
	$name = $_POST['name'];
	$amount = $_POST['amount'];
	$phoneno = $_POST['phoneno'];
	$api = new Api(API_KEY,API_SECRET);
	$res = $api->order->create(
		array(
			'receipt' => '123',
			'amount' => $amount.'00',
			'currency' => 'INR',
			'notes' => array('key1' => 'value3' , 'key2' => 'value4')
		)
	);
}

if (!empty($res['id'])) {
	$_SESSION['order_id']=$res['id'];
}
?>
<form 	action="<?php echo BASE_URL ?>success.php" method="POST">
	<script type="text/javascript" 
	src="https://checkout.razorpay.com/v1/checkout.js"
	data-key = "<?php echo API_KEY ?>"
	data-amount = "<?php $a = $amount.'00'; echo $a; ?>"
	data-currency = "INR"
	data-order-id = "<?php echo $res['id'] ?>"
	data-buttontext = "PAY <?php echo $amount;  ?> with Razorpay"
	data-name = "<?php echo COMPANY_NAME; ?>"
	data-image = "<?php echo COMPANY_LOGO_URL; ?>"
	data-prefill.name = "<?php echo $name ?>"
	data-prefill.phoneno = "<?php echo $phoneno; ?>"
	data-theme.color = 	"#F37254"
	>
		
	</script>
	<input type="hidden" name="hidden" custom="Hidden Element">
</form>
<?php

?>