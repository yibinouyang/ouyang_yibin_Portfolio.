<?php

// var_dump($_GET);

// var_dump($_POST['name']);
if(empty($_POST)){
    echo"NO..";
    exit;
}

$name = '';
$email = '';
$subject = '';
$feedback = '';
$recipient = 'cyreneeeeee@gmail.com';

// some validations

if(isset($_POST['name'])){
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
}

if(isset($_POST['email'])){
    $email = str_replace(array("\r", "\n", "%0a", "%0d"),'',$_POST['email']);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
}

if(isset($_POST['subject'])){
    $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
}

if(isset($_POST['feedback'])){
    $feedback = $_POST['feedback'];
}

$headers = [
    'From' => 'noreply@test.ca',
    'reply-To' => $name.'<'.$email.'>'
];

if(mail($recipient, $subject, $feedback, $headers)){
    echo '<p> Thanks for you contact me,' .$name.'you will get reply with 48 hours </p>';
}else{
    echo '<p>We are sorry but the email did not go through</p>';
}




?>