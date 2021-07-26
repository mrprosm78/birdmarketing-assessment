<?php

require 'database.php';
$db = $conn;// database connection

// legal input values
 $fullName     = legal_input( $_POST['fullName'] );
 $emailAddress = legal_input( $_POST['emailAddress'] );
 $phoneNumber  = legal_input( $_POST['phoneNumber'] );

if ( ! empty( $fullName ) && ! empty( $emailAddress ) && ! empty( $phoneNumber ) ) {
	// Sql Query to insert user data into database table
	Insert_data( $fullName, $emailAddress, $phoneNumber );
    Send_email( $fullName, $emailAddress, $phoneNumber );
} else {
	echo 'All fields are required';
}

// convert illegal input value to legal value formate
function legal_input( $value ) {
	$value = trim( $value );
	$value = stripslashes( $value );
	$value = htmlspecialchars( $value );
	return $value;
}

// // function to insert user data into database table
function insert_data( $fullName, $emailAddress, $phoneNumber ) {

	global $db;

	 $query = "INSERT INTO popup_table(fullName,emailAddress,phoneNumber) VALUES('$fullName','$emailAddress','$phoneNumber ')";

	$execute = mysqli_query( $db, $query );
	if ( $execute == true ) {
		echo 'Data : Saved';
	} else {
		echo 'Data Error: ' . $sql . '<br>' . mysqli_error( $db );
	}
}

function Send_email( $fullName, $emailAddress, $phoneNumber ){


$to = $emailAddress.", ".$emailAddress;
$subject = "Confirmation ";

$message = "
<html> <head> <title>Confirmatio</title> </head>
<body>
<p>This email contains HTML Tags!</p>
    <table>
        <tr><th>Full Name :".$fullName." </th></tr>
        <tr><th>Email :".$emailAddress." </th></tr>
        <tr><th>Phone :".$phoneNumber." </th></tr>
    </table>
</body>
</html>";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <noreply@birdmarketing.co.uk>' . "\r\n";
$headers .= 'Cc: noreply2@birdmarketing.co.uk' . "\r\n";

$error = mail($to,$subject,$message,$headers);
    if($error){
        echo " Email : Sent";
    }else{
        echo " Email : Not Sent";
    }
}