<style>

.thank_u{
    color: green;}
@media only screen and (max-width: 600px) {
    
 .form1 {
    background-color: #fff;
    width: 300px;
    padding: 20px;
    border: 1px solid #CCCCCC;
    position: fixed;
    z-index: 10;
    right: 0;
    margin-top: 22vh;
    margin-right: -300px;
    transition: .3s;
}
.form2 {
    margin-right: 0px;
}
}
</style> 
<script>
function Validation()
{
	var Name=$('#name').val();
	var Company=$('#company-name').val();
	var Email=$('#email').val();
	var Contact=$('#contact').val();
	var Message=$('#Remarks').val();
	if(Name=='')
	{
		$('#name').css('border-color','red');
		$('#name').focus();		
		return false;
	}
	if(Company=='')
	{
		$('#company-name').css('border-color','red');
		$('#company-name').focus();		
		return false;
	}
	if(Email=='')
	{
		$('#email').css('border-color','red');
		$('#email').focus();		
		return false;
	}
	if(Contact=='')
	{
		$('#contact').css('border-color','red');
		$('#contact').focus();		
		return false;
	}
	if(Message=='')
	{
		$('#Remarks').css('border-color','red');
		$('#Remarks').focus();
		return false;
	}
}
</script>
<script>
function emptyborders()
{
	var Name=$('#name').val();
	var Company=$('#company-name').val();
	var Email=$('#email').val();
	var Contact=$('#contact').val();
	var Message=$('#Remarks').val();
	if(Name!='')
	{
		$('#name').css('border-color','');		
		
		
	}
	if(Company!='')
	{
		$('#company-name').css('border-color','');		
		
		
	}
	if(Email!='')
	{
		$('#email').css('border-color','');		
		
		
	}
	if(Contact!='')
	{
		$('#contact').css('border-color','');
		
		
	}
	if(Message!='')
	{
		$('#Remarks').css('border-color','');
		
		
	}
}
</script>
<?php
if(isset($_REQUEST['submit_demo']))
{
$URL=$_SERVER['REQUEST_URI'];
$Explode=explode("/",$URL);
$Page_Link=$Explode[2];
if($Page_Link=='telerad_suit.php')
{
	$Service="Telarad Suite";
}
if($Page_Link=='telerad_web.php')
{
	$Service="Telarad Web Portal";
}
if($Page_Link=='telerad_viewr.php')
{
	$Service="Telarad Viewer";
}
if($Page_Link=='telerad_pacs.php')
{
	$Service="Telarad Pacs";
}
if($Page_Link=='telerad_ecg.php')
{
	$Service="Tele-ECG";
}
if($Page_Link=='intelllmage.php')
{
	$Service="Intelllmage 2011";
}
if($Page_Link=='tele_medicine.php')
{
	$Service="Tele Medicine Solution";
}

	$Name=ucwords(strtolower($_REQUEST['name']));
	$Company=$_REQUEST['company-name'];
	$Email=$_REQUEST['email'];
	$Contact=$_REQUEST['contact'];
	$Message=$_REQUEST['Remarks'];
	$Username='Arc_Infotech';
	$Password='arc_info123';
    $subject1="A demo request form has been submitted on Softmed Technologies";
		$newmsg="A demo request form has been submitted by ".$Name.". The details are given below for your referrence.<br/><br/>
		
		<b>Name :</b>".$Name."<br/>
		<b>Company Name :</b>".$Company."<br/>
		<b>Email Id :</b>".$Email."<br/>
		<b>Contact :</b>".$Contact."<br/>
		<b>Demo Request For :</b>".$Service."<br/>
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
		'to'        => 'inform@softmedtech.com',
		'subject'   => $subject1,
		'html'      => $newmsg,
		'text'      => $newmsg,
		'from'      => 'inform@softmedtech.com',
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

$Suc_Msg="Your message has been sent successfully...";
/*$FromEmail .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$from = "inform@softmedtech.com";
$FromEmail .= 'From: ' . "Softmed Tech<". $from.">\r\n";
$subject1="A demo request form has been submitted on Softmed Technologies";
		$newmsg="A demo request form has been submitted by ".$Name.". The details are given below for your referrence.<br/><br/>
		
		<b>Name :</b>".$Name."<br/>
		<b>Company Name :</b>".$Company."<br/>
		<b>Email Id :</b>".$Email."<br/>
		<b>Contact :</b>".$Contact."<br/>
		<b>Demo Request For :</b>".$Service."<br/>
		<b>Message :</b>".$Message."<br/>
		
		";
mail('amarjit@gltechnologies.net',$subject1,$newmsg,$FromEmail);*/


?>
<script>setTimeout(function(){ window.location.href='index.php'; }, 2500);</script>
<?php
}
?>  
<div class="form1">
<button class="Request-button">Request a demo</button>
<div class="form-popup">
  <h5>Request a demo</h5>
 
  <form action="#" method="post" onsubmit="return Validation()">
    <div class="form-group">
      <input type="text" class="form-control" id="name" placeholder="Name" name="name" style="height:30px;" onKeyPress="emptyborders()">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="company-name" placeholder="Company Name" name="company-name" style="height:30px;" onKeyPress="emptyborders()">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="email" placeholder="Email" name="email" style="height:30px;" onKeyPress="emptyborders()">
    </div>
    
     <div class="form-group">
      <input type="text" class="form-control" id="contact" placeholder="Phone Number" name="contact" style="height:30px;" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" onKeyPress="emptyborders()" maxlength="10">
    </div>
    
    <div class="form-group">
      <textarea type="text" class="form-control" id="Remarks" placeholder="Remarks" name="Remarks" rows="2" style="resize:none;" onKeyPress="emptyborders()"></textarea>
    </div>
     <div class="form-group">
         <div class="">
    <button type="submit" name="submit_demo" class="btn btn-primary">Submit</button></div>
    <div class="">
    <span class="thank_u" id="err" style=""><?php if($Suc_Msg!=''){echo $Suc_Msg;}?></span></div>
    </div>
  </form>
</div>
</div>    