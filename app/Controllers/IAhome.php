<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\IAhomemodel;


class IAhome extends BaseController
{
	protected $helpers = ['form'];
	
	public function home()
	{
		$db = \Config\Database::connect();
		$IAhomemodel = new IAhomemodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		helper('my_helper');
		
		$data['left_testimonials'] = $IAhomemodel->alltestimonials('1');
		$data['right_testimonials'] = $IAhomemodel->alltestimonials('2');
		$data['faqs'] = $IAhomemodel->allfaq();
		$data['prfteams'] = $IAhomemodel->AllProfessionalsTeams();
		$data['banner'] = $IAhomemodel->singleBanner(1);
		$data['cms'] = $IAhomemodel->singleCmsInfo(1);
		$data['revolutionizing'] = $IAhomemodel->singleCmsInfo(2);
		$data['about'] = $IAhomemodel->singleCmsInfo(3);
		
		echo view('front-end/home',$data);
	}
	
	public function register()
	{
		$db = \Config\Database::connect();
		$IAhomemodel = new IAhomemodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$validation = \Config\Services::validation();
		helper('my_helper');
		
		if(isset($_SESSION['member_id'])) 
		{ 
			return redirect()->to(base_url('myaccount')); 
		}
		
		if(isset($_POST['SignBtn']))
		{
			$userArray=array(
							'member_email'=>$this->request->getVar('member_email'),
							'member_username'=>$this->request->getVar('member_username'), 
							'member_contact'=>$this->request->getVar('member_contact'),
							'member_password'=>$this->request->getVar('member_password')
						  );
			
			$rules = [
						'member_email' => 'required|valid_email',
						'member_username' => 'required|min_length[5]',
						'member_contact' => 'required',
						'member_password' => 'required|min_length[6]',
    					'member_con_password' => 'required|matches[member_password]'
					 ];
			
			if ($this->validate($rules)) 
			{
				$status=$IAhomemodel->userRegistration($userArray);
				if($status=='success') 
				{ 
					$session->setFlashdata('addedd','addedd');
					return redirect()->to(base_url('subscription')); 
				}
				else
				{
					$session->setFlashdata('fail','fail');
					return redirect()->to(base_url('register'));
				}
			}
					 			  
		}
		
		echo view('front-end/register');
	}
	
	public function login()
	{
		$db = \Config\Database::connect();
		$IAhomemodel = new IAhomemodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$validation = \Config\Services::validation();
		helper('my_helper');
		
		if(isset($_SESSION['member_id'])) 
		{ 
			return redirect()->to(base_url('myaccount')); 
		}
		
		if(isset($_POST['SignInBtn']))
		{
			$userArray=array(
							'username'=>$this->request->getVar('username'),
							'member_password'=>$this->request->getVar('member_password')
						  );
			
			$rules = [
						'username' => 'required',
						'member_password' => 'required|min_length[6]'
					 ];
			
			if ($this->validate($rules)) 
			{
				$status=$IAhomemodel->userLogin($userArray);
				if($status=='success') 
				{ 
					$session->setFlashdata('addedd','addedd');
					
					$current_date = current_date();
					
					$memberpayment = memberPayment($_SESSION['member_id']);
					
					$results = memberInformation($_SESSION['member_id']);
					$payment_status = $results[0]->payment_status;
					$subscription_type = $results[0]->subscription_type;
					$end_date = $results[0]->end_date;
					
					if($current_date <= $end_date && $payment_status == 'Y')
					{
						return redirect()->to(base_url('myaccount')); 
					}
					else
					{
						return redirect()->to(base_url('subscription'));
					}
				}
				else
				{
					$session->setFlashdata('fail','fail');
					return redirect()->to(base_url('login'));
				}
			}
		}
		
		echo view('front-end/login');
	}
	
	public function myaccount()
	{
		$db = \Config\Database::connect();
		$IAhomemodel = new IAhomemodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		helper('my_helper');
		
		if(!isset($_SESSION['member_id'])) { return redirect()->to(base_url('login')); }
		
		//payment check
		$memberpayment = memberPayment($_SESSION['member_id']);
		$data['memberpayment'] = $memberpayment;
		//end
		
		if(isset($_POST['editBtn']))
		{
			$userArray=array(
							'welcome_message'=>$this->request->getVar('welcome_message'),
							'welcome_estate'=>$this->request->getVar('welcome_estate'),
							'date_formats'=>$this->request->getVar('date_formats'),
							'time_formats'=>$this->request->getVar('time_formats'),
							'member_country'=>$this->request->getVar('member_country'),
							'time_zone'=>$this->request->getVar('time_zone'),
							'old_user_image'=>$this->request->getVar('old_user_image'),
							'old_user_logo'=>$this->request->getVar('old_user_logo')
						  );
			
			$rules = [
						'welcome_message' => 'required',
						'welcome_estate' => 'required',
						'date_formats' => 'required',
						'time_formats' => 'required',
						'member_country' => 'required',
						'time_zone' => 'required'
					 ];
			
			$user_image = $this->request->getFile('user_image');	
			$user_logo = $this->request->getFile('user_logo');	
			
			if ($this->validate($rules)) 
			{
				$status=$IAhomemodel->profileUpdate($userArray,$user_image,$user_logo);
				if($status=='success') 
				{ 
					$session->setFlashdata('addedd','addedd');
					return redirect()->to(base_url('myaccount')); 
				}
				else
				{
					$session->setFlashdata('fail','fail');
					return redirect()->to(base_url('myaccount'));
				}
			}
		}
		
		$data['userinfo'] = $IAhomemodel->singleuserInfo($_SESSION['member_id']);
		$data['country'] = $IAhomemodel->countryList();
		
		echo view('front-end/myaccount',$data);
	}
	
	public function phoneNumber()
	{
		$db = \Config\Database::connect();
		$IAhomemodel = new IAhomemodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		helper('my_helper');
		
		if(!isset($_SESSION['member_id'])) { return redirect()->to(base_url('login')); }
		
		//payment check
		$memberpayment = memberPayment($_SESSION['member_id']);
		$data['memberpayment'] = $memberpayment;
		//end
		
		if(isset($_POST['changeSubmit']))
		{
			$userArray=array(
							'member_contact'=>$this->request->getVar('member_contact')
						  );
			
			$rules = [
						'member_contact' => 'required|min_length[10]'
					 ];
			
			if ($this->validate($rules)) 
			{
				$status=$IAhomemodel->phoneNumber($userArray);
				if($status=='success') 
				{ 
					$session->setFlashdata('addedd','addedd');
					return redirect()->to(base_url('phone')); 
				}
				else
				{
					$session->setFlashdata('fail','fail');
					return redirect()->to(base_url('phone'));
				}
			}
		}
		
		$data['userinfo'] = $IAhomemodel->singleuserInfo($_SESSION['member_id']);
		
		echo view('front-end/phone-number',$data);
	}
	
	public function changepassword()
	{
		$db = \Config\Database::connect();
		$IAhomemodel = new IAhomemodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		helper('my_helper');
		
		if(!isset($_SESSION['member_id'])) { return redirect()->to(base_url('login')); }
		
		//payment check
		$memberpayment = memberPayment($_SESSION['member_id']);
		$data['memberpayment'] = $memberpayment;
		//end
		
		if(isset($_POST['changeSubmit']))
		{
			$userArray=array(
							'member_password'=>$this->request->getVar('member_password'),
							'new_member_password'=>$this->request->getVar('new_member_password'),
							'con_member_password'=>$this->request->getVar('con_member_password')
						  );
			
			$rules = [
						'member_password' => 'required',
						'new_member_password' => 'required',
    					'con_member_password' => 'required|matches[new_member_password]'
					 ];
			
			
			if ($this->validate($rules)) 
			{
				$status=$IAhomemodel->changePassword($userArray);
				
				if($status=='success') 
				{ 
					$session->setFlashdata('addedd','addedd');
					return redirect()->to(base_url('changepassword')); 
				}
				else if($status=='not') 
				{
					$session->setFlashdata('not','not');
					return redirect()->to(base_url('changepassword'));
				}
				else
				{
					$session->setFlashdata('nomatch','nomatch');
					return redirect()->to(base_url('changepassword'));
				}
			}
			else
			{
				$session->setFlashdata('valider','valider');
				return redirect()->to(base_url('changepassword'));
			}
		}
		
		$data['userinfo'] = $IAhomemodel->singleuserInfo($_SESSION['member_id']);
		
		echo view('front-end/change-password',$data);
	}
	
	public function signout()
	{
		$session = \Config\Services::session();
		$_SESSION['member_id'] = '';
		session_destroy();
		return redirect()->to(base_url('login'));
	}
	
	public function forgotpassword()
	{
		$db = \Config\Database::connect();
		$IAhomemodel = new IAhomemodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$validation = \Config\Services::validation();
		
		if(isset($_POST['SignresetBtn']))
		{
			$userArray=array(
							'username'=>$this->request->getVar('username')
						  );
			
			$rules = [
						'username' => 'required|min_length[5]'
					 ];
			
			if ($this->validate($rules)) 
			{
				$status=$IAhomemodel->userResetPassword($userArray);
				if($status=='success') 
				{ 
					$session->setFlashdata('addedd','addedd');
					return redirect()->to(base_url('forgotpassword')); 
				}
				else
				{
					$session->setFlashdata('fail','fail');
					return redirect()->to(base_url('forgotpassword'));
				}
			}
					 			  
		}
		
		echo view('front-end/forgotpassword');
	}
	
	public function confirmpassword($resetcode = '')
	{
		$db = \Config\Database::connect();
		$IAhomemodel = new IAhomemodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$validation = \Config\Services::validation();
		
		if(isset($_POST['SignresetBtn']))
		{
			$userArray=array(
							'member_password'=>$this->request->getVar('member_password'),
							'reset_code'=>$this->request->getVar('reset_code')
						  );
			
			$rules = [
						'member_password' => 'required|min_length[6]',
    					'member_con_password' => 'required|matches[member_password]',
						'reset_code' => 'required'
					 ];
			
			if ($this->validate($rules)) 
			{
				$status=$IAhomemodel->userConfirmPassword($userArray);
				if($status=='success') 
				{ 
					$session->setFlashdata('addedd','addedd');
					return redirect()->to(base_url('confirmpassword/'.$this->request->getVar('reset_code'))); 
				}
				else
				{
					$session->setFlashdata('fail','fail');
					return redirect()->to(base_url('confirmpassword/'.$this->request->getVar('reset_code')));
				}
			}
					 			  
		}
		
		echo view('front-end/confirmpassword');
	}
	
	public function google()
	{
		$db = \Config\Database::connect();
		$IAhomemodel = new IAhomemodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$validation = \Config\Services::validation();
		
		$client = new \Google\Client();
        $client->setClientId('208575503984-ncll7n9gq1qt7grql26a0fhnb1d8bshc.apps.googleusercontent.com');
        $client->setClientSecret('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');
        $client->setRedirectUri(base_url('auth/callback'));
       // $client->addScope(\Google\Service\Plus::USERINFO_EMAIL);
	   $client->addScope('https://www.googleapis.com/auth/userinfo.email');
		

        $authUrl = $client->createAuthUrl();
        return redirect()->to($authUrl);
	}
	
	public function callback()
    {
		$db = \Config\Database::connect();
		$IAhomemodel = new IAhomemodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$validation = \Config\Services::validation();
		$emailService = \Config\Services::email();
		helper('my_helper');
		
        $client = new \Google\Client();
        $client->setClientId('208575503984-ncll7n9gq1qt7grql26a0fhnb1d8bshc.apps.googleusercontent.com');
        $client->setClientSecret('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');
        $client->setRedirectUri(base_url('auth/callback'));

        if (isset($_GET['code'])) {
            $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
            $client->setAccessToken($token['access_token']);

            // Get user info
            $oauth2 = new \Google\Service\Oauth2($client);
            $userInfo = $oauth2->userinfo->get();
			
			$email = $userInfo['email'];
			$name = $userInfo['name'];
			$gender = $userInfo['gender'];
			$oauth_uid = $userInfo['id'];
			$member_type = 'Google';
			$member_date = date('Y-m-d H:i:s');
			
			$chkquery = $db->query("SELECT * FROM innova_member where member_email='".$email."' and member_type='Google'");
		    $chkresults = $chkquery->getResult();
			
			if(count($chkresults)==0)
			{
				$sql = "INSERT INTO innova_member set member_email='".$email."', member_username='".$name."', oauth_uid='".$oauth_uid."',member_type='".$member_type."',member_date='".$member_date."'";
				$db->query($sql);
				$member_id = $db->insertID();
				$_SESSION['member_id'] = $member_id;
				
				$email_subject="New Resgistration message from Innov8Agent";
				$email_content='<html>
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
				<h2 style="font-weight: 200; font-size: 24px; margin: 10px 0 20px 0; color: #333333;">Dear '.$name.',</h2>	
				
				<p style="font-weight: 200; font-size: 18px; color: #333333;">Welcome to Innov8Agent, where your journey toward real estate excellence begins! As a new member of our innovative platform, you are now part of a dynamic community leveraging technology to redefine success in the real estate industry.</p>
				
				<p style="font-weight: 200; font-size: 18px; color: #333333;">Here is how to kickstart your journey with us:</p>
				
				<p style="font-weight: 200; font-size: 18px; color: #333333;">Explore the Platform: Familiarize yourself with our intuitive interface. You will find tools tailored to enhance your real estate prowess. www.innov8agent.com</p>
				
				<p style="font-weight: 200; font-size: 18px; color: #333333;">Set up Your Profile: A complete profile can significantly impact your visibility and credibility. Take a moment to add your professional details.</p>
				
				<p style="font-weight: 200; font-size: 18px; color: #333333;">Dive into the Genius: Access a wealth of geniuses designed to boost your listings, marketing, and knowledge.</p>
				
				<p style="font-weight: 200; font-size: 18px; color: #333333;">Top 5 Ways to Drive New Business with Innov8Agent:</p>
				
				<p style="font-weight: 200; font-size: 18px; color: #333333;">Social Mastery: Craft compelling posts for social media to broaden your reach and grow your client base.</p>
				<p style="font-weight: 200; font-size: 18px; color: #333333;">Promotion Powerhouse: Easily create emails, texts, blogs, and more to showcase your listings and services.</p>
				<p style="font-weight: 200; font-size: 18px; color: #333333;">Business Brilliance: Let Innov8 be your ally in developing business and marketing plans, property descriptions, listing ads, and much more.</p>
				
				<p style="font-weight: 200; font-size: 18px; color: #333333;">Outreach Optimization: Enhance communication with tailored offer letters, proposals, email and text campaigns, lead generation surveys, and beyond.</p>
				
				<p style="font-weight: 200; font-size: 18px; color: #333333;">SEO Supremacy: Produce SEO-rich content aligned with the latest Google and Bing algorithms to amplify your online presence and attract more leads.</p>
				
				<p style="font-weight: 200; font-size: 20px; color: #333333;">Be the Revolution</p>
				
				<p style="font-weight: 200; font-size: 18px; color: #333333;">By choosing Innov8Agent, you are not just accessing a tool; you are embracing a revolution. Unlike other platforms, we offer an exclusive blend of technology crafted by industry experts, powered by a unique data set that evolves continuously. This is your chance to use cutting-edge technology specifically designed for real estate professionals at a fraction of the cost of other platforms.</p>
				
				<p style="font-weight: 200; font-size: 18px; color: #333333;">Imagine being part of a professional community where every tool, every feature, and every update is aimed at propelling your career forward.</p>
				
				<p style="font-weight: 200; font-size: 18px; color: #333333;">That is the promise of Innov8Agent – technology that evolves with you, for you.</p>
				
				<p style="font-weight: 200; font-size: 18px; color: #333333;">Welcome aboard, '.$name.'.</p>
				
				<p style="font-weight: 200; font-size: 18px; color: #333333;">Together, let&rsquo;s turn your dreams into achievements!</p>
				
				<h2 style="font-weight: 200; font-size: 16px; margin: 10px 0; color: #333333;"> Best regards,<br/>Innov8Agent Team<br/>It&rsquo;s Time To WIN!<br/>Innov8Agent.com </h2>
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
				
				$emailService->setFrom('contact@innov8Agent.com', 'Innov8Agent');
				$emailService->setTo($email);
				$emailService->setSubject($email_subject);
				$emailService->setmailType('html');
				$emailService->setMessage($email_content);
				$emailService->send();
			}
			else
			{
				$_SESSION['member_id'] = $chkresults[0]->member_id;
			}
			
            //return redirect()->to('myaccount'); // Redirect to dashboard after login
			
			$current_date = current_date();
			$memberpayment = memberPayment($_SESSION['member_id']);
			$results = memberInformation($_SESSION['member_id']);
			$payment_status = $results[0]->payment_status;
			$subscription_type = $results[0]->subscription_type;
			$end_date = $results[0]->end_date;
			if($current_date <= $end_date && $payment_status == 'Y')
			{
				return redirect()->to(base_url('myaccount')); 
			}
			else
			{
				return redirect()->to(base_url('subscription'));
			}
        } 
		else 
		{
            return redirect()->to('logout'); // Handle authentication failure
        }
    }
	
	public function subscription()
	{
		$db = \Config\Database::connect();
		$IAhomemodel = new IAhomemodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		helper('my_helper');
		
		if(!isset($_SESSION['member_id'])) { return redirect()->to(base_url('login')); }
		$_SESSION['transaction_rand'] = '';
		
		echo view('front-end/subscription');
	}
	
	public function buysubscribe($type = '',$timetype = '')
	{
		$db = \Config\Database::connect();
		$IAhomemodel = new IAhomemodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		helper('my_helper');
		
		if(!isset($_SESSION['member_id'])) { return redirect()->to(base_url('login')); }
		
        if($type == '')
		{
			return redirect()->to(base_url('subscription')); 
		}
		else
		{
			//Agent Essentials Plan
			if($type == 'basic' && $timetype == 'monthly') 
			{ 
				$amount =24; 
				$item_number = $_SESSION['member_id']."_".rand()."_basic"; 
				$days = 30; 
			}
			
			if($type == 'basic' && $timetype == 'annually') 
			{ 
				$amount =19.20*12; 
				$item_number = $_SESSION['member_id']."_".rand()."_basic"; 
				$days = 365; 
			} 
			
			//Agent Advantage Plan
			if($type == 'premium' && $timetype == 'monthly') 
			{ 
				$amount =34; 
				$item_number = $_SESSION['member_id']."_".rand()."_premium"; 
				$days = 30;
			} 
			
			if($type == 'premium' && $timetype == 'annually') 
			{ 
				$amount =27.20*12; 
				$item_number = $_SESSION['member_id']."_".rand()."_premium"; 
				$days = 365;
			} 
			
			//Agent Excellence Plan
			if($type == 'elite' && $timetype == 'monthly') 
			{ 
				$amount =54; 
				$item_number = $_SESSION['member_id']."_".rand()."_elite"; 
				$days = 30; 
			} 
			
			if($type == 'elite' && $timetype == 'annually') 
			{ 
				$amount =43.20*12; 
				$item_number = $_SESSION['member_id']."_".rand()."_elite"; 
				$days = 365; 
			} 
			
			$userID = $_SESSION['member_id'];
			
			$current_date = current_date();
			$transaction_rand = time();
			$_SESSION['transaction_rand'] = $transaction_rand;
			$_SESSION['subscription_type'] = $timetype;
			$_SESSION['item_number'] = $item_number;
			
			$sql_payment = "INSERT INTO innova_payment set member_id='".$userID."', subscription_type='".$type."',item_number='".$item_number."', start_date='".$current_date."',transaction_rand='".$transaction_rand."', applied_date='".$current_date."',payment_amount='".$amount."'";
			$db->query($sql_payment);
			
			$sql = "UPDATE innova_member set start_date='".$current_date."',subscription_type='".$type."',item_number='".$item_number."',payment_amount='".$amount."' where member_id= '".$userID."'";
			$db->query($sql);
			 
			echo '<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" name="PayForm" id="PayForm">
			<input type="hidden" name="business" value="mysandbox.2018@gmail.com">
			<input type="hidden" name="cmd" value="_xclick">
			<input type="hidden" name="item_name" value="'.$type.' subscription">
			<input type="hidden" name="item_number" value="'.$item_number.'">
			<input type="hidden" name="amount" value="'.$amount.'">
			<input type="hidden" name="currency_code" value="USD">
			<input type="hidden" name="cancel_return" value="'.base_url().'payment-cancel">
			<input type="hidden" name="return" value="'.base_url().'payment-success">
			</form>
			<script type="text/javascript">
			document.getElementById("PayForm").submit();
			</script>
			';
		}
	}
	
	/*public function buysubscribe($type = '', $timetype = '')
	{
		$db = \Config\Database::connect();
		$IAhomemodel = new IAhomemodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		helper('my_helper');
		
		if (!isset($_SESSION['member_id'])) {
			return redirect()->to(base_url('login'));
		}
		
		if ($type == '') {
			return redirect()->to(base_url('subscription'));
		} else {
			$userID = $_SESSION['member_id'];
		
			// Setup subscription plan details
			$planName = ucfirst($type) . ' subscription'; // e.g., Basic subscription, Premium subscription, etc.
		
			// Define the billing cycle and amount based on the subscription type and time type
			if ($timetype == 'monthly') {
				$billingCycle = 'Month';
				$billingFrequency = 1; // Every 1 month
				if ($type == 'basic') {
					$amount = 24;
				} elseif ($type == 'premium') {
					$amount = 34;
				} elseif ($type == 'elite') {
					$amount = 54;
				}
			} elseif ($timetype == 'annually') {
				$billingCycle = 'Year';
				$billingFrequency = 1; // Every 1 year
				if ($type == 'basic') {
					$amount = 19.20 * 12;
				} elseif ($type == 'premium') {
					$amount = 27.20 * 12;
				} elseif ($type == 'elite') {
					$amount = 43.20 * 12;
				}
			}
		
			$item_number = $userID . "_" . uniqid() . "_" . $type;
		
			// Create subscription record in the database
			$current_date = current_date();
			$transaction_rand = time();
			$_SESSION['transaction_rand'] = $transaction_rand;
			$_SESSION['subscription_type'] = $timetype;
			$_SESSION['item_number'] = $item_number;
		
			$sql_payment = "INSERT INTO innova_payment SET member_id='".$userID."', subscription_type='".$type."', item_number='".$item_number."', start_date='".$current_date."', transaction_rand='".$transaction_rand."', applied_date='".$current_date."'";
			$db->query($sql_payment);
		
			$sql = "UPDATE innova_member SET start_date='".$current_date."', subscription_type='".$type."', item_number='".$item_number."' WHERE member_id='".$userID."'";
			$db->query($sql);
		
			// Construct PayPal recurring payment form
			echo '<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" name="PayForm" id="PayForm">
				<input type="hidden" name="business" value="mysandbox.2018@gmail.com">
				<input type="hidden" name="cmd" value="_xclick-subscriptions">
				<input type="hidden" name="item_name" value="'.$planName.'">
				<input type="hidden" name="item_number" value="'.$item_number.'">
				<input type="hidden" name="currency_code" value="USD">
				<input type="hidden" name="a3" value="'.$amount.'">
				<input type="hidden" name="p3" value="1">
				<input type="hidden" name="t3" value="'.$billingCycle.'">
				<input type="hidden" name="src" value="1">
				<input type="hidden" name="sra" value="1">
				<input type="hidden" name="cancel_return" value="'.base_url().'payment-cancel">
				<input type="hidden" name="return" value="'.base_url().'payment-success">
				<input type="hidden" name="notify_url" value="'.base_url().'paypal-ipn">
			</form>
			<script type="text/javascript">
				document.getElementById("PayForm").submit();
			</script>';
		}
	}*/
	
	public function paymentSuccess()
	{
		$db = \Config\Database::connect();
		$IAhomemodel = new IAhomemodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		helper('my_helper');
		
		if(!isset($_SESSION['member_id'])) { return redirect()->to(base_url('login')); }
		
		$current_date = current_date();
		
		if($_SESSION['subscription_type'] == 'annually')
		{
			$due_date = date('Y-m-d', strtotime("+365 days"));
		}
		else
		{
			$due_date = date('Y-m-d', strtotime("+30 days"));
		}
		
		$end_date = $due_date;
		
		$payerID = $this->request->getVar('PayerID');
		
		if($_SESSION['transaction_rand']!='' && $payerID!='' && $_SESSION['item_number']!='')
		{
		$sql_payment = "UPDATE innova_payment set end_date='".$end_date."', payerid='".$payerID."',payment_status='Y' where transaction_rand='".$_SESSION['transaction_rand']."' and item_number='".$_SESSION['item_number']."'";
		$db->query($sql_payment);
		
		$sql = "UPDATE innova_member set end_date='".$end_date."',payment_status='Y',subscription_status='Active' where member_id= '".$_SESSION['member_id']."'";
		$db->query($sql);
		}
		
		$_SESSION['transaction_rand'] = '';
		 
		echo view('front-end/payment-success');
	}
	
	public function paymentCancel()
	{
		$db = \Config\Database::connect();
		$IAhomemodel = new IAhomemodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		helper('my_helper');
		
		if(!isset($_SESSION['member_id'])) { return redirect()->to(base_url('login')); }
		$_SESSION['transaction_rand'] = '';
		
		echo view('front-end/payment-cancel');
	}
	
	public function contact()
	{
		$db = \Config\Database::connect();
		$IAhomemodel = new IAhomemodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$validation = \Config\Services::validation();
		
		if(isset($_POST['sendBtn']))
		{
			$userArray=array(
							'first_name'=>$this->request->getVar('first_name'),
							'last_name'=>$this->request->getVar('last_name'), 
							'contact_email'=>$this->request->getVar('contact_email'),
							'contact_subject'=>$this->request->getVar('contact_subject'),
							'contact_msg'=>$this->request->getVar('contact_msg')
						  );
			
			$rules = [
						'first_name' => 'required',
						'last_name' => 'required',
						'contact_email' => 'required|valid_email',
						'contact_subject' => 'required',
						'contact_msg' => 'required'
					 ];
			
			if ($this->validate($rules)) 
			{
				$status=$IAhomemodel->userContact($userArray);
				if($status=='success') 
				{ 
					$session->setFlashdata('addedd','addedd');
					return redirect()->to(base_url('contact')); 
				}
				else
				{
					$session->setFlashdata('fail','fail');
					return redirect()->to(base_url('contact'));
				}
			}
		}
		
		$data['contactsdetails'] = $IAhomemodel->detailscontacts();
		
		echo view('front-end/contact',$data);
	}
	
	public function facebook()
	{
		$db = \Config\Database::connect();
		$IAhomemodel = new IAhomemodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$validation = \Config\Services::validation();
	
		require_once ROOTPATH . 'vendor/facebook/graph-sdk/src/Facebook/autoload.php'; // Path to autoload.php file of the Facebook SDK
	
		// No need for "use" statement here if you are already using fully qualified namespace
		$fb = new \Facebook\Facebook([
			'app_id' => '1573812370050161', // Replace with your Facebook App ID
			'app_secret' => '766693085cc9eeb7b37f2102a8510760', // Replace with your Facebook App Secret
			'default_graph_version' => 'v13.0',
		]);
	
		$helper = $fb->getRedirectLoginHelper();
	
		$permissions = ['email']; // Add more permissions as needed
	
		$loginUrl = $helper->getLoginUrl(base_url('facebook-callback'), $permissions);
	
		return redirect()->to($loginUrl);
	}
	
	public function facebookcallback()
    {
		$db = \Config\Database::connect();
		$IAhomemodel = new IAhomemodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$validation = \Config\Services::validation();
		$emailService = \Config\Services::email();
		helper('my_helper');
		
        require_once ROOTPATH . 'vendor/facebook/graph-sdk/src/Facebook/autoload.php'; // Path to autoload.php file of the Facebook SDK
	
		// No need for "use" statement here if you are already using fully qualified namespace
		$fb = new \Facebook\Facebook([
			'app_id' => '1573812370050161', // Replace with your Facebook App ID
			'app_secret' => '766693085cc9eeb7b37f2102a8510760', // Replace with your Facebook App Secret
			'default_graph_version' => 'v13.0',
		]);

        $helper = $fb->getRedirectLoginHelper();

        try {
            $accessToken = $helper->getAccessToken();
            $response = $fb->get('/me?fields=id,name,email', $accessToken);
            $userData = $response->getGraphUser();
			
			$id = $userData['id'];
			$name = $userData['name'];
			$email = $userData['email'];
			
			$member_type = 'Facebook';
			$member_date = date('Y-m-d H:i:s');
			
			$chkquery = $db->query("SELECT * FROM innova_member where member_email='".$email."' and member_type='Facebook'");
		    $chkresults = $chkquery->getResult();
			
			if(count($chkresults)==0)
			{
				$sql = "INSERT INTO innova_member set member_email='".$email."', member_username='".$name."', oauth_uid='".$id."',member_type='".$member_type."',member_date='".$member_date."'";
				$db->query($sql);
				$member_id = $db->insertID();
				$_SESSION['member_id'] = $member_id;
				
				$email_subject="New Resgistration message from Innov8Agent";
				$email_content='<html>
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
				<h2 style="font-weight: 200; font-size: 24px; margin: 10px 0 20px 0; color: #333333;">Dear '.$name.',</h2>	
				
				<p style="font-weight: 200; font-size: 18px; color: #333333;">Welcome to Innov8Agent, where your journey toward real estate excellence begins! As a new member of our innovative platform, you are now part of a dynamic community leveraging technology to redefine success in the real estate industry.</p>
				
				<p style="font-weight: 200; font-size: 18px; color: #333333;">Here is how to kickstart your journey with us:</p>
				
				<p style="font-weight: 200; font-size: 18px; color: #333333;">Explore the Platform: Familiarize yourself with our intuitive interface. You will find tools tailored to enhance your real estate prowess. www.innov8agent.com</p>
				
				<p style="font-weight: 200; font-size: 18px; color: #333333;">Set up Your Profile: A complete profile can significantly impact your visibility and credibility. Take a moment to add your professional details.</p>
				
				<p style="font-weight: 200; font-size: 18px; color: #333333;">Dive into the Genius: Access a wealth of geniuses designed to boost your listings, marketing, and knowledge.</p>
				
				<p style="font-weight: 200; font-size: 18px; color: #333333;">Top 5 Ways to Drive New Business with Innov8Agent:</p>
				
				<p style="font-weight: 200; font-size: 18px; color: #333333;">Social Mastery: Craft compelling posts for social media to broaden your reach and grow your client base.</p>
				<p style="font-weight: 200; font-size: 18px; color: #333333;">Promotion Powerhouse: Easily create emails, texts, blogs, and more to showcase your listings and services.</p>
				<p style="font-weight: 200; font-size: 18px; color: #333333;">Business Brilliance: Let Innov8 be your ally in developing business and marketing plans, property descriptions, listing ads, and much more.</p>
				
				<p style="font-weight: 200; font-size: 18px; color: #333333;">Outreach Optimization: Enhance communication with tailored offer letters, proposals, email and text campaigns, lead generation surveys, and beyond.</p>
				
				<p style="font-weight: 200; font-size: 18px; color: #333333;">SEO Supremacy: Produce SEO-rich content aligned with the latest Google and Bing algorithms to amplify your online presence and attract more leads.</p>
				
				<p style="font-weight: 200; font-size: 20px; color: #333333;">Be the Revolution</p>
				
				<p style="font-weight: 200; font-size: 18px; color: #333333;">By choosing Innov8Agent, you are not just accessing a tool; you are embracing a revolution. Unlike other platforms, we offer an exclusive blend of technology crafted by industry experts, powered by a unique data set that evolves continuously. This is your chance to use cutting-edge technology specifically designed for real estate professionals at a fraction of the cost of other platforms.</p>
				
				<p style="font-weight: 200; font-size: 18px; color: #333333;">Imagine being part of a professional community where every tool, every feature, and every update is aimed at propelling your career forward.</p>
				
				<p style="font-weight: 200; font-size: 18px; color: #333333;">That is the promise of Innov8Agent – technology that evolves with you, for you.</p>
				
				<p style="font-weight: 200; font-size: 18px; color: #333333;">Welcome aboard, '.$name.'.</p>
				
				<p style="font-weight: 200; font-size: 18px; color: #333333;">Together, let&rsquo;s turn your dreams into achievements!</p>
				
				<h2 style="font-weight: 200; font-size: 16px; margin: 10px 0; color: #333333;"> Best regards,<br/>Innov8Agent Team<br/>It&rsquo;s Time To WIN!<br/>Innov8Agent.com </h2>
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
				
				$emailService->setFrom('contact@innov8Agent.com', 'Innov8Agent');
				$emailService->setTo($email);
				$emailService->setSubject($email_subject);
				$emailService->setmailType('html');
				$emailService->setMessage($email_content);
				$emailService->send();
			}
			else
			{
				$_SESSION['member_id'] = $chkresults[0]->member_id;
			}
			
            //return redirect()->to('myaccount'); // Redirect to dashboard after login
			
			$current_date = current_date();
			$memberpayment = memberPayment($_SESSION['member_id']);
			$results = memberInformation($_SESSION['member_id']);
			$payment_status = $results[0]->payment_status;
			$subscription_type = $results[0]->subscription_type;
			$end_date = $results[0]->end_date;
			if($current_date <= $end_date && $payment_status == 'Y')
			{
				return redirect()->to(base_url('myaccount')); 
			}
			else
			{
				return redirect()->to(base_url('subscription'));
			}
			
			
			
            // Handle user data, log in user, etc.
            // Example: $userData->getId(), $userData->getName(), $userData->getEmail()
        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
            // Handle API errors
        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            // Handle SDK errors
        }
    }

	
	
	
	
	

}
