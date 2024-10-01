<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Simulate sending an email (in practice, you would use a mail server)
    echo "Thank you, $name. Your message has been sent!";
    // You can use PHP mail() function to send an email to the seller.
}
?>
