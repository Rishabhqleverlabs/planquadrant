<?php
$name = $_REQUEST['name'];
$phone = $_REQUEST['phone'];
$message = $_REQUEST['message'];
$email = $_REQUEST['email'];




$subject = $triptype;
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From:'. $triptype . "\r\n"; 
$template = '<div style="padding:50px; color:black;">Hello Admin,<br/>'
. '<br/>You have an Enquiry..<br/><br/>'
. '<table ><tr><td>Name:</td><td>' . $name . '</td>'
. '<tr><td>Phone:</td><td> ' . $phone . '</td>'
. '<tr><td> Email:</td><td> ' . $email . '</td>'
. '<tr><td>Message: </td><td>' . $message . '</td></table>';

$sendplace = "<div style=\"background-color:white; color:white;\">" . $template . "</div>";
//echo $sendplace;
$sendplace = wordwrap($sendplace, 70);

mail('hemanth.kumar@qleverlabs.in', $subject, $sendplace, $headers);
echo '1';

?>