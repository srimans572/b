<?php

    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $email_from = 'srimans572@gmail.com';
    $email_subject = "Form Application";
    $email_body = "Last Name: $last_name.\n".
                    "First Name: $first_name.\n";
    $to = 'sriman573@fusdk12.net';
    $headers = "From: $email_from \r\n";
    $headers .= "Reply to: $email_from";
    mail($to, $email_subject, $email_body, $headers);
    header("Location: project_application.html");

?>