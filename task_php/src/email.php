<?php
include 'config.php';
// getting data
if (isset($_POST)) {
    $name =  input_data($_POST['name']);
    $phone = input_data($_POST['number']);
    $email =  input_data($_POST['email']);
    $subject = input_data($_POST['subject']);
    $msg =    input_data($_POST['msg']);
    $ip = $_SERVER['REMOTE_ADDR'];
    $time = time();
    $date = date("Y-m-d", $time);
    $validation = true;
    unset($_POST);
    if (!validate_email($email)) {
        $validation = false;
    }
    if (!validate_mobile($phone)) {
        $validation = false;
    }
    if ($validation == true) {
        $stmt = "Insert into `contact_form`(`name`,`phone`,`email`,`subject`,`msg`,`ip`,`time`) values ('$name','$phone','$email','$subject','$msg','$ip','$date') ";
        if (mysqli_query($conn, $stmt)) {
            echo "success";
            sendEmail($subject, $msg, $email, $phone, $name);
        } else {
            echo "Error: " . $stmt . "<br>" . mysqli_error($conn);
            echo  "<a href='index.php' class='btn btn-info'>Back</a>";
        }
    } else {
        echo "validation failed";
        echo  "<a href='index.php' class='btn btn-info'>Back</a>";
    }
}else{
    header('location:index.php');
}
function validate_email($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}
function validate_mobile($mobile)
{
    return preg_match('/^[6-9]\d{9}$/', $mobile);
}
function input_data($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function sendEmail($subject, $msg, $email, $name, $phone)
{
    // send the data on e-mail
    $recipient = 'test@techsolvitservice.com';
    $subject = 'New Form Submission';

    $body = "Name: $name\n";
    $body .= "Email: $email'\n";
    $body .= "Message: $msg\n";
    $body .= "Mobile : $phone\n";

    $headers = "From: $name <$email]>\r\n";
    $headers .= "Reply-To: $email\r\n";

    $mailSent = mail($recipient, $subject, $body, $headers);

    if ($mailSent) {
        $msg .= "Email has been sent.";
    } else {
        $msg .= "There was a problem in sending e-mail.";
    }
}
