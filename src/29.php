<?php
// Define variables and constants from contact form data
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];

// Create variable that will contain your record
$data_assoc = array (
  'Name' => $name,
  'Email' => $email_address,
  'Message' => $message
);

// Add the data to the query. Note that we are adding "Contact" in the URL.
$url = 'https://example.com/contact';
$curl_data = http_build_query($data_assoc, '', '&');

// Send an HTTP POST request to the server using PHP's curl function
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $curl_data);

$response = curl_exec($ch);
curl_close($ch);

// Check if the query was successful
if (isset($response)) {
  echo "Your message has been sent successfully!";
} else {
  echo "There was a problem with your request. Please try again.";
}
?>
