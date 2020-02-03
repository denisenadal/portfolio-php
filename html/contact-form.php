<?php
$fullname = !empty($_POST['fullname']) ? strip_tags($_POST['fullname']) : false;
$emailaddress = !empty($_POST['emailaddress']) AND filter_var($_POST['emailaddress'], FILTER_VALIDATE_EMAIL) ? $_POST['emailaddress'] : false;
$phonenumber =!empty($_POST['phonenumber']) ? strip_tags($_POST['phonenumber']) : '';
$company = !empty($_POST['company']) ? strip_tags($_POST['company']) : '';
$preferred =!empty($_POST['preferred-contact']) && in_array($_POST['preferred-contact'], array('text','email','phone')) ? $_POST['preferred-contact'] : '';
$message = !empty($_POST['message']) ? strip_tags($_POST['message']) : false;


if(in_array(false, array($fullname, $emailaddress, $message)) ){
	//return fail message
	http_response_code(400);
	header('Content-Type: application/json');
	echo json_encode(array(
		'error'=>'missing required fields. Please include a name, email and message so I can contact you!'
	));
	exit();
}

$email_message = " From: ".$fullname."\n Company: ".$company."\n Email: ".$emailaddress."\n Phone: ".$phonenumber."\n Preferred Contact: ".$preferred."\n\n".$message ;
if(mail("denise@denisenadal.com","New Comment from denisenadal.com",$email_message,"From: mailer@denisenadal.com");){
	//send success message to client
header('Content-Type: application/json');
echo json_encode(array(
	'status'=>'Success!',
	'message'=>'Thank you for your message. Denise will be getting in contact with you shortly!'
));
}
else{
	header('Content-Type: application/json');
echo json_encode(array(
	'status'=>'fail!',
	'message'=>'WHOOOPS!'
));
}

exit();
