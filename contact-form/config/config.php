<?php

// return [
//     'subject' => [
//         'prefix' => '[Contact Form]'
//     ],
//     'emails' => [
//         'to'   => 'mail2activeshail@gmail.com',
//         'from' => 'mailbox.ssb@gmail.com'
//     ],
//     'messages' => [
//         'error'   => 'There was an error sending your message, please try again later.',
//         'success' => 'Your message has been sent successfully.'
//     ],
//     'fields' => [
//         'name'     => 'Name',
//         'email'    => 'Email',
//         'phone'    => 'Phone',
//         'subject'  => 'Subject',
//         'message'  => 'Message',
//         'btn-send' => 'Send'
//     ]
// ];

$servername = "localhost";
$username = "root"; 
$password = "DotComs#123"; 
$dbname = "dotcomstestdb"; 
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
