<?php namespace App\Controllers;

use CodeIgniter\Controller;



class IAlanding extends BaseController
{
	protected $helpers = ['form'];
	
	public function index()
	{
		$db = \Config\Database::connect();
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$email = \Config\Services::email();
		
		/*$email->setTo('bandhu2003@gmail.com');
		$email->setFrom('innov8agent23@gmail.com', 'innov8Agent');
		$email->setSubject('Subject');
		$email->setMessage('Your message goes here');
		$email->send();	
		
		if ($email->send()) {
		echo 'Email sent successfully!';
		} else {
		$data = $email->printDebugger(['headers']);
		}*/
		
		echo view('front-end/index');
	}
	
	
	public function sendEmail()
	{
		$db = \Config\Database::connect();
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$emailService = \Config\Services::email(); // Use a different variable name for email service
		
		// Fetch POST data from the form
		$email = $this->request->getPost('member_email');
		$firstName = $this->request->getPost('member_first');
		$lastName = $this->request->getPost('member_last');
		$phoneNumber = $this->request->getPost('member_contact');
		
		if($email!='' && $firstName!='' && $lastName!='' && $phoneNumber!='')
		{
			$email_subject = "New message from Innov8Agent";
			$email_content = '<html>
			<head>
			<meta name="viewport" content="width=device-width" />
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			</head>
			<body>
			<table bgcolor="#fafafa" style=" width: 100%!important; height: 100%; background-color: #fafafa; padding: 20px; font-family:Helvetica, Arial, sans-serif;  font-size: 100%; line-height: 1.6;">
			<tr>
			<td></td>
			<td bgcolor="#FFFFFF" style="border: 1px solid #eeeeee; background-color: #ffffff; border-radius:5px; display:block!important; max-width:600px!important; margin:0 auto!important; clear:both!important;"><div style="padding:20px; max-width:600px; margin:0 auto; display:block;">
			<table style="width: 100%;">
			<tr>
			<td><p style="text-align: center; display: block;  padding-bottom:20px;  margin-bottom:20px; border-bottom:1px solid #dddddd;"><img src="https://innov8agent.com/front-panel/images/logo/logoColor.png" style="max-height=45px" /></p>
			<h2 style="font-weight: 200; font-size: 30px; margin: 10px 0 20px 0; color: #333333;">Hello Admin,</h2>	
			<h1 style="font-weight: 200; font-size: 24px; margin: 10px 0 20px 0; color: #333333;">Please check the below details</h1>
			<p style="margin-bottom: 10px; font-weight: normal; font-size:16px; color: #333333;">First Name : '.$email.'</p>
			<h2 style="font-weight: 200; font-size: 16px; margin: 10px 0; color: #333333;"> Last Name : '.$firstName.' </h2>
			<h2 style="font-weight: 200; font-size: 16px; margin: 10px 0; color: #333333;"> Email : '.$lastName.' </h2>
			<h2 style="font-weight: 200; font-size: 16px; margin: 10px 0; color: #333333;"> Contact : '.$phoneNumber.' </h2>
			<h2 style="font-weight: 200; font-size: 16px; margin: 10px 0; color: #333333;"> Regards,<br/>Innov8Agent Team </h2>
			<p style="text-align: center; display: block; padding-top:20px; font-weight: bold; margin-top:30px; color: #666666; border-top:1px solid #dddddd;">&copy; '.date('Y').' Innov8Agent. All Rights Reserved.</p></td>
			</tr>
			</table>
			</div>
			</td>
			<td></td>
			</tr>
			</table>
			</body>
			</html>
			';
			
			$emailService->setTo('innov8agent@gmail.com');
			$emailService->setFrom('innov8agent23@gmail.com', 'innov8Agent');
			$emailService->setSubject($email_subject);
			$emailService->setMailType('html');
			$emailService->setMessage($email_content);
			$emailService->send();
		}
		
		return "success";

		
	}
	
	
	

}
