<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$website = $_POST['website'];
$message = $_POST['message'];

if (!empty($email) && !empty($message)){
    if (filter_var($email, FILTER_VALIDATE_EMAIL)){
        $receiver = "ebaaarmanazi@gmail.com";
        $subject = "From: $name <$email>";
        $body = "Name: $name\nEmail: $email\nPhone: $phone\nWebsite: $website\n\nMessage:\n$message\n\nRegards,\n$name";
        $sender = "From: $email";
        if (mail($receiver,$subject,$body,$sender)){
            echo "Your message has ben sent successfully!";
        } else {
            echo "Sorry, Failed to send your message!";
        }
    }else{
        echo "Enter a valid email address";
    }

} else{
    echo "Email and Password field is required!";
}

?>