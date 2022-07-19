<<<<<<< HEAD
<?php
    $name = $_POST['name'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $text= $_POST['text'];

    $to = "abhijeetkhan28@gmail.com";
    $subject = "New Message From Personal Portfolio";

    $txt ="Name = ". $name . "\r\nEmail = ". $email . "\r\nPhone = "
        . $phone . "\r\nText = " . $text;

    $headers = "From: $email" . "\r\n" .
            "CC: abhijeetkhan28@gmail.com";
    if($email != NULL) {
    mail($to, $subject, $txt, $headers);
    }

    header("Location:index.html");
=======
<?php
    $name = $_POST['name'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $text= $_POST['text'];

    $to = "abhijeetkhan28@gmail.com";
    $subject = "New Message From Personal Portfolio";

    $txt ="Name = ". $name . "\r\nEmail = ". $email . "\r\nPhone = "
        . $phone . "\r\nText = " . $text;

    $headers = "From: $email" . "\r\n" .
            "CC: abhijeetkhan28@gmail.com";
    if($email != NULL) {
    mail($to, $subject, $txt, $headers);
    }

    header("Location:index.html");
>>>>>>> 6451c832704f59cfdfc66c563a267d06fff58a58
?>