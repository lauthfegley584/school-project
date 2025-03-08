  <?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $to = 'your_email@example.com';
  $subject = "New message from $name";
  $headers = 'From: your_email@example.com' . "\r\n" .
    'Reply-To: your_email@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
  mail($to, $subject, $message, $headers);
  header("Location: thankyou.php"); /* Redirect browser */
  exit();
  ?>