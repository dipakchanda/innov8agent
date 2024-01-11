<?php namespace App\Models;

use CodeIgniter\Model;

use CodeIgniter\Database\ConnectionInterface;

class IAhomemodel extends Model
{
	protected $db;

    public function __construct(ConnectionInterface &$db)
    {
        $this->db =& $db;
    }
	
	public function countryList()
	{
		$db = \Config\Database::connect();
		$query = $db->query("SELECT * FROM innova_country order by countryname ASC");
		$results = $query->getResult();
        return  $results;
	}
	
	public function singleuserInfo($member_id)
	{
		$db = \Config\Database::connect();
		$query = $db->query("SELECT * FROM innova_member where member_id='".$member_id."'");
		$results = $query->getResult();
        return  $results;
	}
	
	public function userRegistration($userArray)
	{
		$db = \Config\Database::connect();
		$emailService = \Config\Services::email();
		
		$member_email=addslashes($userArray['member_email']);
		$member_username=addslashes($userArray['member_username']);
		$member_contact=addslashes($userArray['member_contact']);
		$member_password=md5($userArray['member_password']);
		$member_org=$userArray['member_password'];
		$member_type = 'Website';
		$member_date = date('Y-m-d H:i:s');
		
		
		$chkquery = $db->query("SELECT * FROM innova_member where member_email='".$member_email."' OR member_username='".$member_username."'");
		$chkresults = $chkquery->getResult();
		
		if(count($chkresults)==0)
		{
			$sql = "INSERT INTO innova_member set member_email='".$member_email."', member_username='".$member_username."', member_contact='".$member_contact."', member_password='".$member_password."', member_org='".$member_org."',member_type='".$member_type."',member_date='".$member_date."'";
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
			<h2 style="font-weight: 200; font-size: 24px; margin: 10px 0 20px 0; color: #333333;">Dear '.$member_username.',</h2>	
			
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
			
			<p style="font-weight: 200; font-size: 18px; color: #333333;">Welcome aboard, '.$member_username.'.</p>
			
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
			$emailService->setTo($member_email);
			$emailService->setSubject($email_subject);
			$emailService->setmailType('html');
			$emailService->setMessage($email_content);
			$emailService->send();
			
			$msg = 'success';
		}
		else
		{
			$msg = 'exists';
		}
		
		//exit();
		return $msg;
	}
	
	public function userLogin($userArray)
	{
		$db = \Config\Database::connect();
		
		$username=addslashes($userArray['username']);
		$member_password=md5($userArray['member_password']);
		
		$chkquery = $db->query("SELECT * FROM innova_member where (member_email='".$username."' OR member_username='".$username."') and member_password='".$member_password."' and member_type='Website'");
		$chkresults = $chkquery->getResult();
		
		if(count($chkresults)>0)
		{
			$_SESSION['member_id'] = $chkresults[0]->member_id;
			$msg = 'success';
		}
		else
		{
			$msg = 'exists';
		}
		
		return $msg;
	}
	
	public function userResetPassword($userArray)
	{
		$db = \Config\Database::connect();
		$emailService = \Config\Services::email();
		
		$username=addslashes($userArray['username']);
		
		$chkquery = $db->query("SELECT * FROM innova_member where member_email='".$username."' OR member_username='".$username."' and member_type='Website'");
		$chkresults = $chkquery->getResult();
		
		if(count($chkresults)>0)
		{
			$reset_code = uniqid($chkresults[0]->member_id);
			
			$sql = "UPDATE innova_member set reset_code='".$reset_code."' where member_id= '".$chkresults[0]->member_id."' and member_type='Website' ";
			$db->query($sql);
			
			$member_username = $chkresults[0]->member_username;
			$member_email = $chkresults[0]->member_email;
			
			$email_subject="Password reset message from Innov8Agent";
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
			<h2 style="font-weight: 200; font-size: 30px; margin: 10px 0 20px 0; color: #333333;">Hello '.$member_username.' !!!,</h2>	
			<h1 style="font-weight: 200; font-size: 24px; margin: 10px 0 20px 0; color: #333333;">Click <a href='.base_url().'confirmpassword/'.$reset_code.'>here</a> to reset your password.</h1>
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
			
			$emailService->setFrom('contact@innov8Agent.com', 'Innov8Agent');
			$emailService->setTo($member_email);
			$emailService->setSubject($email_subject);
			$emailService->setmailType('html');
			$emailService->setMessage($email_content);
			$emailService->send();
			
			$msg = 'success';
		}
		else
		{
			$msg = 'exists';
		}
		
		//exit();
		return $msg;
	}
	
	public function userConfirmPassword($userArray)
	{
		$db = \Config\Database::connect();
		$email = \Config\Services::email();
		
		$reset_code=addslashes($userArray['reset_code']);
		$member_password=md5($userArray['member_password']);
		$member_org = $userArray['member_password'];
		
		
		$chkquery = $db->query("SELECT * FROM innova_member where reset_code='".$reset_code."'");
		$chkresults = $chkquery->getResult();
		
		if(count($chkresults)>0)
		{
			$sql = "UPDATE innova_member set member_password='".$member_password."', member_org='".$member_org."' where member_id= '".$chkresults[0]->member_id."' and member_type='Website' ";
			$db->query($sql);
			
			$msg = 'success';
		}
		else
		{
			$msg = 'exists';
		}
		
		//exit();
		return $msg;
	}
	
	public function phoneNumber($userArray)
	{
		$db = \Config\Database::connect();
		$email = \Config\Services::email();
		
		$member_contact=$userArray['member_contact'];
		
		$sql = "UPDATE innova_member set member_contact='".$member_contact."' where member_id= '".$_SESSION['member_id']."' ";
		$db->query($sql);
		$msg = 'success';
		
		return $msg;
	}
	
	public function profileUpdate($userArray,$user_image,$user_logo)
	{
		$db = \Config\Database::connect();
		$email = \Config\Services::email();
		
		$welcome_message=addslashes($userArray['welcome_message']);
		$welcome_estate=addslashes($userArray['welcome_estate']);
		$date_formats=$userArray['date_formats'];
		$time_formats=$userArray['time_formats'];
		$member_country=$userArray['member_country'];
		$time_zone=$userArray['time_zone'];
		
		$old_user_image=$userArray['old_user_image'];
		$old_user_logo=$userArray['old_user_logo'];
		
		if($user_image!='')
		{
			$newName_profile = $user_image->getRandomName();
			$user_image->move(ROOTPATH . 'uploads/profileimg',$newName_profile);
		} 
		else 
		{ 
			$newName_profile = "";
			if($old_user_image == '') { $newName_profile = ""; } else { $newName_profile = $old_user_image; }
		}
		
		if($user_logo!='')
		{
			$newName_logo = $user_logo->getRandomName();
			$user_logo->move(ROOTPATH . 'uploads/profileimg',$newName_logo);
		} 
		else 
		{ 
			$newName_logo = "";
			if($old_user_logo == '') { $newName_logo = ""; } else { $newName_logo = $old_user_logo; }
		}
		
		$sql = "UPDATE innova_member set welcome_message='".$welcome_message."',welcome_estate='".$welcome_estate."',date_formats='".$date_formats."',time_formats='".$time_formats."',member_country='".$member_country."',time_zone='".$time_zone."',user_image='".$newName_profile."',user_logo='".$newName_logo."' where member_id= '".$_SESSION['member_id']."' ";
		$db->query($sql);
		$msg = 'success';
		
		return $msg;
	}
	
	public function changePassword($userArray)
	{
		$db = \Config\Database::connect();
		$email = \Config\Services::email();
		
		$member_password=$userArray['member_password'];
		$new_member_password=$userArray['new_member_password'];
		$con_member_password=$userArray['con_member_password'];
		
		if($new_member_password!=$con_member_password)
		{
			$msg = 'not';
		}
		else
		{
			$query = $db->query("SELECT * FROM innova_member where member_password='".md5($member_password)."' and member_id= '".$_SESSION['member_id']."'");
			$results = $query->getResult();
			
			if(count($results)>0)
			{
				$sql = "UPDATE innova_member set member_password='".md5($new_member_password)."' where member_id= '".$_SESSION['member_id']."' ";
				$db->query($sql);
				$msg = 'success';
			}
			else
			{
				$msg = 'nomatch';
			}
		}
		
		return $msg;
	}
	
	public function userContact($userArray)
	{
		$db = \Config\Database::connect();
		$emailService = \Config\Services::email();
		
		$first_name=addslashes($userArray['first_name']);
		$last_name=addslashes($userArray['last_name']);
		$contact_email=addslashes($userArray['contact_email']);
		$contact_subject=addslashes($userArray['contact_subject']);
		$contact_msg=addslashes($userArray['contact_msg']);
		$contact_date = date('Y-m-d H:i:s');
		
		$sql = "INSERT INTO innova_contact set first_name='".$first_name."', last_name='".$last_name."', contact_email='".$contact_email."', contact_subject='".$contact_subject."', contact_msg='".$contact_msg."',contact_date='".$contact_date."'";
		$db->query($sql);
		
		$email_subject="New Contact message from Innov8Agent";
		$email_content='<!DOCTYPE html><html lang="en"><head><meta charset="utf-8" /><title>Liveright - password reset confirmation</title><meta name="generator" content="Liveright" /></head>
		<body style="font-family:Arial Narrow, Arial, helvetica; font-size:18px; line-height:24px">
		<div style="margin:0; max-width:600px; padding:10px; border:1px solid #ccc">
		<div style="background:#f4f4f4; padding:10px 20px ">
		<h2>Hello Admin</h2>
		<p>You have received a new contact message from Innov8Agent. Details given below</p>
		<p>First Name : '.$first_name.'</p>
		<p>Last Name : '.$last_name.'</p>
		<p>Email : '.$contact_email.'</p>
		<p>Subject : '.$contact_subject.'</p>
		<p>Message : '.$contact_msg.'</p>
		<p>&nbsp;</p>
		<p>Regards,</p>
		<h3>Innov8Agent Team</h3>
		</div>
		<div style="background:#000; padding:10px 20px; font-size:12px; color:#fff">&copy; '.date('Y').' Innov8Agent. All Rights Reserved.</div>
		</div>
		</body>
		</html>
		';
		
		$emailService->setFrom('contact@innov8Agent.com', 'Innov8Agent');
		$emailService->setTo($contact_email);
		$emailService->setSubject($email_subject);
		$emailService->setmailType('html');
		$emailService->setMessage($email_content);
		$emailService->send();
		
		$msg = 'success';
		
		//exit();
		return $msg;
	}
	
	public function detailscontacts()
	{
		$db = \Config\Database::connect();
		
		$query = $db->query("SELECT * FROM innova_contact_details where details_id=1");
		$results = $query->getResult();
        return  $results;
	}
	
	public function alltestimonials($test_position)
	{
		$db = \Config\Database::connect();
		
		$query = $db->query("SELECT * FROM innova_testimonials where testimonialsstatus='Y' and test_position='".$test_position."' order by testimonials_id ASC");
		$results = $query->getResult();
        return  $results;
	}
	
	public function successStories()
	{
		$db = \Config\Database::connect();
		
		$query = $db->query("SELECT * FROM innova_testimonials where testimonialsstatus='Y' order by testimonials_id ASC");
		$results = $query->getResult();
        return  $results;
	}
	
	public function allfaq()
	{
		$db = \Config\Database::connect();
		
		$query = $db->query("SELECT * FROM innova_faq where faq_status='Y' order by faq_id ASC");
		$results = $query->getResult();
        return  $results;
	}
	
	public function AllProfessionalsTeams()
	{
		$db = \Config\Database::connect();
		
		$query = $db->query("SELECT * FROM innova_prf_team where prfteam_status='Y' order by prfteam_id ASC");
		$results = $query->getResult();
        return  $results;
	}
	
	public function singleBanner($banner_id)
	{
		$db = \Config\Database::connect();
		$query = $db->query("SELECT * FROM innova_banner where banner_id='".$banner_id."'");
		$results = $query->getResult();
        return  $results;
	}
	
	public function singleCmsInfo($cms_id)
	{
		$db = \Config\Database::connect();
		$query = $db->query("SELECT * FROM innova_cms where cms_id='".$cms_id."'");
		$results = $query->getResult();
        return  $results;
	}
	

}
