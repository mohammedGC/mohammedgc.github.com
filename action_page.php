
$name    =  test_input($_POST["name"]);
$email    =  test_input($_POST["email"]);
$to      = 'tkotd18@gmail.com';
$subject    =  test_input($_POST["subject"]);
$message    =  test_input($_POST["message"]);
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
