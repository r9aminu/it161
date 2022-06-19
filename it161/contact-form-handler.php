<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'rotimi.seattle@gmail.com';
    $email_subject = "New form Submission";
    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n". 
                        "User Message: $message.\n";

    $to = "rotimi.seattle@gmail.com";

    $headers = "From: $email_from \r\n";
    
    mail($to, $email_subject,$email_body,$headers);

    header("Location: index.html");
?>