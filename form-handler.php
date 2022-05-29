<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'venkat.rvnetworking@gmail.com';
$email_subject = 'New Form Submission';
$email_body = "User Name: ".$name;
                "User Email: ".$visitor_email;
                "Subject: ".$subject;
                "User Message".$message;

 $to = 'ssanket378@gmail.com';
 $headers = "From:".$email_from; 
 $headers .= "Reply-To".$visitor_email; 
 mail($to,$email_subject,$email_body,$headers);
 header("Location: contact.html");           
?>