<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
    $to = "ihsanamk333@gmail.com"; 
    
    $subject = "Message from Website Contact Form";
    
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Phone Number: $phone\n\n";
    $email_message .= "Message:\n$message\n";
    
    if(mail($to, $subject, $email_message)){
        exit();
    }
    else{
        echo "siomething went wrong";
    }

    
}
?>
