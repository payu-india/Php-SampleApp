
<?php

error_reporting(E_ERROR | E_PARSE);

include "payu/PayUClient.php";

use payu\PayUClient;


$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"]; //Please use the amount value from database
$txnid=$_POST["txnid"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$udf1 = $_POST["udf1"];
$udf2 = $_POST["udf2"];
$udf3 = $_POST["udf3"];
$udf4 = $_POST["udf4"];
$udf5 = $_POST["udf5"];


$salt="iZspKOPu"; //Please change the value with the live salt for production environment
// You should set your key & salt values to the function as below:
$payuClient = new PayUClient($key,$salt);

# Set params as follows
$params = array("status"=>$status,"txnid"=>$txnid,"amount"=>$amount,"productinfo"=>$productinfo,"firstname"=>$firstname,"email"=>$email,"udf1"=>$udf1,"udf2"=>$udf2,"udf3"=>$udf3,"udf4"=>$udf4,"udf5"=>$udf5);

# you can generate payment hash as follows:
$hash = new Hasher();
$reverse_hash = $hash->validate_hash($params);
echo "<br>";
echo $reverse_hash;
echo "<br>";

print_r($params);
echo "<br>";
echo $posted_hash;

       if ($reverse_hash != $posted_hash) {
	       echo "Transaction has been tampered. Please try again";
		   }

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>PayU</title>
<meta name="description" content="">
<link rel="stylesheet" type="text/css" href="css/layout.css">
<link rel="stylesheet" type="text/css" href="css/typography.css">
</head>
<body class="page-bg-gray">
<div class="main">
<header>
<div class="header-main gray-hdr">
<div class="hd-logo"><img src="images/logo.svg" alt="PayU Logo"></div>
<div class="hd-nav">
<ul>
<li><a href="https://github.com/payu-india/payu-sdk-php"><i><img src="images/github-icon.svg"></i>View on Github</a></li>
</ul>
</div>
</div>
</header>

<section>
<div class="common-container">
<div class="container">
<div class="code-main-wrap">
<div class="code-container">
<i class="pay-icon">
<img src="images/failure-icon.jpg">
</i>
<h1>Payment Failed</h1>
<p>Your Payment has been failed</p>
<div class="vs-code-main">
<h2>PAYMENT S0URCE OBJECT</h2>
<div class="code-main">
<code>
<p>{</p>
<p>"txnid": <?php echo $txnid ?>,</p>
<p>"status": <?php echo $status ?>,</p>
<p>"details": {</p>
<!-- <p>"statement_descriptor": <span>null,</span></p>
 --><!-- <p>"native_url": <span>null,</span></p>
<p>"data_string": <span>null</span></p> -->
<!-- <p>},</p> -->
<p>"amount": <?php echo $amount ?>,</p>
<p>"productinfo": <?php echo $productinfo ?>,</p>
<p>"firstname": <?php echo  $firstname ?>,</p>
<p>"emailid": <?php echo $email ?></p>
<!-- <p>"currency": "eur",</p>
<p>"flow": "redirect",</p>
<p>"livemode": false,</p>
<p>"metadata": {</p>
<p>"paymentIntent": "pi_1GaGJvLqkZN1XDm1WnK8JsLo"</p>
<p>},</p> -->
<p>}</p>
<p>}</p>
</code>
</div>

</div>
</div>

</div>
</section>
</div>

</body>
</html>
