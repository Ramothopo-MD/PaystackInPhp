<?php
require_once './payGate/payment.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
    <form  action="./payGate/payment.php" method="POST" name="paymentForm">
        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" name="email" id="email-address" required />
        </div>
        <div class="form-group">
          <label for="amount">Amount</label>
          <input type="tel" name="amount" id="amount" required />
        </div>
        <div class="form-group">
          <label for="first-name">First Name</label>
          <input type="text" name="name" id="first-name" />
        </div>
        <div class="form-group">
          <label for="last-name">Last Name</label>
          <input type="text" name="lastname" id="last-name" />
        </div>
        <div class="form-submit">
          <button type="submit" name="checkout" onclick="payWithPaystack()"> Checkout </button>
        </div>
      </form>
      
      <script src="https://js.paystack.co/v2/inline.js"></script> 
      
</body>
</html>