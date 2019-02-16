<?php

    $recipient="ubaidahmed30@gmail.com"; //Enter your mail address
    $subject=$_POST['subject']; //Subject
    $sender_Name=$_POST['name'];
    $senderEmail=$_POST['email'];
    $message=$_POST['message'];
    $mailBody="Name: $sender_Name\nEmail Address: $senderEmail\n\nMessage: $message\n\n Sent from Portfolio Website";
    

    mail($recipient, $subject, $mailBody);
    sleep(1);
    header("Location:#"); // Set here redirect page or destination page

?>