<?php
if (isset($_POST['checkout']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $lastname = $_POST['lastname'];
  $amount = $_POST['amount'];
  $email = $_POST['email'];

  $url = "https://api.paystack.co/transaction/initialize";

  $fields = [
    'email' => $email,
    'amount' => $amount,
    'currency' => 'ZAR',
    'callback_url' => "http://localhost/paystackIntegration/paymentComplete.php",
    'metadata' => ["cancel_action" => "https://your-cancel-url.com"]
  ];



  $fields_string = http_build_query($fields);

  //open connection
  $ch = curl_init();

  //set the url, number of POST vars, POST data
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Authorization: Bearer Secret key",
    "Cache-Control: no-cache",
  ));

  //So that curl_exec returns the contents of the cURL; rather than echoing it
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  //execute post
  $result = curl_exec($ch);
  echo $result;

  $response = json_decode($result, true);

  if ($response['status']) {
    // Redirect to the authorization URL
    header('Location: ' . $response['data']['authorization_url']);
    exit();
  } else {
    echo "Error: " . $response['message'];
  }
}
