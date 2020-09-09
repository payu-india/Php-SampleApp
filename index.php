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
<body>
<div class="main">
<header>
<div class="header-main">
<div class="hd-logo"><img src="images/logo.svg" alt="PayU Logo"></div>
<div class="hd-nav">
<ul>
<li><a href="https://github.com/payu-india/payu-sdk-php"><i><img src="images/github-icon.svg"></i>View on Github</a></li>
</ul>
</div>
</div>
</header>
<section>
<div class="banner-main">
<div class="bl-cn">
<div class="container">
<div class="bn-crt-img"><img src="images/banner-cart.svg"></div>
<div class="bn-crt-text">
<h1>Payments Demo</h1>
<span class="yellow-bx">Test Mode</span>
</div>
</div>

<div class="form-main">

<div class="form-white-box">
<div class="form-hd">Complete Or<span>Generate</span>your test payment details below</div>
<form action="http://localhost:8888/PHP_SAMPLE_APP 2/checkout.php" method="post">
<div class="frm-bx-content">
<div class="form-row">
<label>Name</label>
<div class="form-inp">
<input type="text" name="firstname" value = "" id = "input_name" placeholder="Nita Nisha"  value="" >
</div>
</div>
<div class="form-row">
<label>Delivery Address</label>
<div class="form-inp">
<input type="text" name="address" placeholder="90, AnshuGarh, Hisar - 193389" >
</div>
</div>
<div class="form-row">
<label>Contact</label>
<div class="form-inp">
<input type="text" name="phonenumber" placeholder="Enter your phone number">
</div>
</div>


 <input type="submit" class="cmn-btn" value="                                                            Pay ₹ 10.00                                                              " >
</form>

</div>
</div>
<div class="security-logo">
<ul>
<li><img src="images/norton-secure.svg"></li>
<li><img src="images/verified-visa.svg"></li>
<li><img src="images/mastercard.svg"></li>
<li><img src="images/safekey.svg"></li>
<li><img src="images/pcidss.svg"></li>
</ul>
</div>
</div>
</div>
</div>
</section>
<section>
<div class="common-container">
<div class="product-sm">
<div class="container">
<h2>Order Summary</h2>
<div class="product-detail">
<ul>
<li>
<div class="prd-typ-main">
<div class="prd-img"><img src="images/tshirt.png"></div>
<p>
<span class="prd-nm">T-shirt</span>
<span class="prd-typ">medium-size</span>
</p>
</div>
<div class="prd-price">2 x ₹ 1.00 <span>₹ 2.00</span></div>
</li>
<li>
<div class="prd-typ-main">
<div class="prd-img"><img src="images/keyboard_image.jpg"></div>
<p>
<span class="prd-nm">Keyboard</span>
<span class="prd-typ">Standard-size</span>
</p>
</div>
<div class="prd-price">2 x ₹ 1.00 <span>₹ 2.00</span></div>
</li>
<li>
<div class="prd-typ-main">
<div class="prd-img"><img src="images/coffee_mug.jpg"></div>
<p>
<span class="prd-nm">Coffee Mug</span>
<span class="prd-typ">Standard-size</span>
</p>
</div>
<div class="prd-price">2 x ₹ 3.00 <span>₹ 6.00</span></div>
</li>

</ul>

<ul class="subtotal-main">
<li class="custom-con-main">
<div class="prd-typ-main custom-con">
<p>
<span class="prd-nm">SUBTOTAL</span>
</p>
</div>
<div class="prd-price"><span>₹ 10.00</span></div>
</li>
<li class="custom-con-main">
<div class="prd-typ-main custom-con">
<p>
<span class="prd-nm">SHIPPING</span>
</p>
</div>
<div class="prd-price"><span>Free</span></div>
</li>
<li class="pr-tol-amt">
<div class="prd-typ-main custom-con">
<p>
<span class="prd-nm">Total Amount To Pay</span>
</p>
</div>
<div class="prd-price"><span>₹ 10.<small>00</small></span></div>
</li>
</ul>
</div>
</div>
</div>
</div>
</section>
</div>


  </body>
</html>
