<?php
require_once 'bootstrap.php';
$products=[
 'monthly'=>['name'=>'PC World Geek Monthly Membership','amount'=>1499,'mode'=>'subscription','price_key'=>'monthly'],
 'annual'=>['name'=>'PC World Geek Annual Membership','amount'=>14999,'mode'=>'subscription','price_key'=>'annual'],
 'computer'=>['name'=>'Computer & Laptop Support','amount'=>6900,'mode'=>'payment','price_key'=>'computer'],
 'printer'=>['name'=>'Printer Support','amount'=>5900,'mode'=>'payment','price_key'=>'printer'],
 'wifi'=>['name'=>'Wi-Fi & Router Support','amount'=>5900,'mode'=>'payment','price_key'=>'wifi'],
 'security'=>['name'=>'Security & Malware Support','amount'=>7900,'mode'=>'payment','price_key'=>'security'],
];
$key=$_GET['product']??'';
if(!isset($products[$key])){http_response_code(404);exit('Product not found.');}
$p=$products[$key]; $u=user(); $pageTitle='Checkout | PC World Geek'; require 'header.php';
?>
<main class="page"><div class="wrap narrow"><span class="eyebrow">SECURE CHECKOUT</span><h1><?=e($p['name'])?></h1><div class="checkoutbox"><div><b>Price</b><strong>£<?=number_format($p['amount']/100,2)?></strong><span><?= $p['mode']==='subscription' ? ($key==='monthly'?'per month, recurring':'per year, recurring') : 'one-time payment' ?></span></div>
<p>You'll be redirected to Stripe's secure checkout to complete payment. <?= $p['mode']==='subscription'?'The recurring billing interval is shown before you confirm payment.':'' ?></p>
<form method="post" action="api/create-checkout.php"><input type="hidden" name="csrf" value="<?=e(csrf())?>"><input type="hidden" name="product" value="<?=e($key)?>"><button class="btn primary" type="submit">Continue to Secure Checkout →</button></form>
<p class="fineprint">If you do not yet have an account, you can create one after choosing your support option. Do not enter remote-access credentials into this checkout form.</p></div></div></main><?php require 'footer.php';?>