<?php

if (isset($_POST["contact"])) {
    $subject = $_POST["subject"];
    $email = $_POST["email"];
    $comment = $_POST["comment"];
    $message = "Email Address: " . $email . " Message :" . $comment;


    if (mail("azhar.neub@gmail.com", $subject, $message)) {
        echo "Succefully Send your Message. Thank You!";
    } else {
        echo "Your Message has not Sent";
    }
}
?>
