<?php

    //$to = "'rituparna@gltechnologies.net','amarjit@gltechnologies.net'";
    $Name=ucwords(strtolower($_REQUEST['Name']));
	$Company=$_REQUEST['Company'];
	$Email=$_REQUEST['Email'];
	$Contact=$_REQUEST['Contact'];
	$Message=$_REQUEST['Message'];
	$Username='Arc_Infotech';
	$Password='arc_info123';
    $subject1="A new contact form has been submitted on Softmed Tech";
		$newmsg="Dear Admin ,<br/><br/>
		A new contact us form has been submitted by ".$Name.". The details are given below for your referrence.<br/><br/>
		
		<b>Name :</b>".$Name."<br/>
		<b>Company Name :</b>".$Company."<br/>
		<b>Email Id :</b>".$Email."<br/>
		<b>Contact :</b>".$Contact."<br/>
		<b>Message :</b>".$Message."<br/>
		
		";	
		
		$url = 'https://api.sendgrid.com/';
		$user = $Username;
		$pass = $Password; 
		$json_string = array(
		
		'to' => array(
		
		 'inform@softmedtech.com'
		),
		'category' => 'Mail'
		);
		
		
		$params = array(
		'api_user'  => $user,
		'api_key'   => $pass,
		'x-smtpapi' => json_encode($json_string),
		'to'        => 'info@softmedtech.com',
		'subject'   => $subject1,
		'html'      => $newmsg,
		'text'      => $newmsg,
		'from'      => 'info@softmedtech.com',
		);


$request =  $url.'api/mail.send.json';

// Generate curl request
$session = curl_init($request);
// Tell curl to use HTTP POST
curl_setopt ($session, CURLOPT_POST, true);
// Tell curl that this is the body of the POST
curl_setopt ($session, CURLOPT_POSTFIELDS, $params);
// Tell curl not to return headers, but do return the response
curl_setopt($session, CURLOPT_HEADER, false);
// Tell PHP not to use SSLv3 (instead opting for TLS)
curl_setopt($session, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

// obtain response
$response = curl_exec($session);
curl_close($session);

?>