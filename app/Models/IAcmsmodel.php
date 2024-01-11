<?php namespace App\Models;

use CodeIgniter\Model;

use CodeIgniter\Database\ConnectionInterface;

class IAcmsmodel extends Model
{
	protected $db;

    public function __construct(ConnectionInterface &$db)
    {
        $this->db =& $db;
    }
	
	public function alltestimonials()
	{
		$db = \Config\Database::connect();
		$query = $db->query("SELECT * FROM innova_testimonials order by testimonials_id DESC");
		$results = $query->getResult();
        return  $results;
	}
	
	public function singletestimonials($testimonials_id)
	{
		$db = \Config\Database::connect();
		$query = $db->query("SELECT * FROM innova_testimonials where testimonials_id='".$testimonials_id."'");
		$results = $query->getResult();
        return  $results;
	}
	
	public function deleteTestimonials($testimonials_id)
	{
		$db = \Config\Database::connect();
		
		$query = $db->query("SELECT testimonialsimage FROM innova_testimonials where testimonials_id='".$testimonials_id."'");
		$results = $query->getResult();
		$testimonialsimage  = $results[0]->testimonialsimage;
		
		$sql = "DELETE from innova_testimonials where testimonials_id='".$testimonials_id."'";
		$res = $db->query($sql);
		
		if($testimonialsimage!='' && file_exists('uploads/testimonials/'.$testimonialsimage)){ unlink('uploads/testimonials/'.$testimonialsimage); }
		
		if($res) { return "success"; } else { return "false"; }
	}
	
	public function testimonialsAdd($testimonial_array,$testimonialsimage)
	{
		$db = \Config\Database::connect();
		
		$testimonialsby=addslashes($testimonial_array['testimonialsby']);
		$testimonialstype=addslashes($testimonial_array['testimonialstype']);
		$testimonialsdesc=addslashes($testimonial_array['testimonialsdesc']);
		$test_position=addslashes($testimonial_array['test_position']);
		
		if($testimonialsimage!='')
		{
			$newName = $testimonialsimage->getRandomName();
			$testimonialsimage->move(ROOTPATH . 'uploads/testimonials',$newName);
		} 
		else 
		{ 
			$newName = "";
		}
		
		
		$sql = "INSERT INTO innova_testimonials set testimonialsby='".$testimonialsby."', testimonialstype='".$testimonialstype."', testimonialsdesc='".$testimonialsdesc."', test_position='".$test_position."', testimonialsimage='".$newName."'";
		$db->query($sql);
		return "success";
	}
	
	public function testimonialsUpdate($testimonial_array,$testimonialsimage)
	{
		$db = \Config\Database::connect();
		
		$testimonials_id=addslashes($testimonial_array['testimonials_id']);
		$testimonialsby=addslashes($testimonial_array['testimonialsby']);
		$testimonialstype=addslashes($testimonial_array['testimonialstype']);
		$testimonialsdesc=addslashes($testimonial_array['testimonialsdesc']);
		$test_position=addslashes($testimonial_array['test_position']);
		$testimonialsstatus=addslashes($testimonial_array['testimonialsstatus']);
		
		if($testimonialsimage!='')
		{
			$newName = $testimonialsimage->getRandomName();
			$testimonialsimage->move(ROOTPATH . 'uploads/testimonials',$newName);
		} 
		else 
		{ 
			if($testimonial_array['old_testimonialsimage'] == '') { $newName = ""; } else { $newName = $testimonial_array['old_testimonialsimage']; }
		}
		
		$sql = "UPDATE innova_testimonials set testimonialsby='".$testimonialsby."', testimonialstype='".$testimonialstype."', testimonialsdesc='".$testimonialsdesc."', test_position='".$test_position."',testimonialsstatus='".$testimonialsstatus."', testimonialsimage='".$newName."' where testimonials_id='".$testimonials_id."' ";
		$db->query($sql);
		return "success";
	}
	
	public function allfaq()
	{
		$db = \Config\Database::connect();
		$query = $db->query("SELECT * FROM innova_faq order by faq_id DESC");
		$results = $query->getResult();
        return  $results;
	}
	
	public function singleFaq($faq_id)
	{
		$db = \Config\Database::connect();
		$query = $db->query("SELECT * FROM innova_faq where faq_id='".$faq_id."'");
		$results = $query->getResult();
        return  $results;
	}
	
	public function faqAdd($faq_array)
	{
		$db = \Config\Database::connect();
		
		$faq_question = addslashes($faq_array['faq_question']);
		$faq_answer = addslashes($faq_array['faq_answer']);
		$faq_status = addslashes($faq_array['faq_status']);
		
		$sql = "INSERT INTO innova_faq SET faq_question='" . $faq_question . "', faq_answer='" . $faq_answer . "', faq_status='" . $faq_status . "'";
		$db->query($sql);

		return "success";
	}
	
	public function faqUpdate($faq_array)
	{
		$db = \Config\Database::connect();
		
		$faq_id = addslashes($faq_array['faq_id']);
		$faq_question = addslashes($faq_array['faq_question']);
		$faq_answer = addslashes($faq_array['faq_answer']);
		$faq_status = addslashes($faq_array['faq_status']);
		
		$sql = "UPDATE innova_faq SET faq_question='" . $faq_question . "', faq_answer='" . $faq_answer . "', faq_status='" . $faq_status . "' WHERE faq_id='" . $faq_id . "'";
		$db->query($sql);

		return "success";
	}
	
	public function deleteFaq($faq_id)
	{
		$db = \Config\Database::connect();
		
		$sql = "DELETE from innova_faq where faq_id='".$faq_id."'";
		$res = $db->query($sql);
		
		if($res) { return "success"; } else { return "false"; }
	}
	
	public function allusers()
	{
		$db = \Config\Database::connect();
		$query = $db->query("SELECT * FROM innova_member order by member_id DESC");
		$results = $query->getResult();
        return  $results;
	}
	
	public function allsubscription()
	{
		$db = \Config\Database::connect();
		$query = $db->query("SELECT * FROM innova_subscription order by subscription_id ASC");
		$results = $query->getResult();
        return  $results;
	}
	
	public function singleSubscription($subscription_id)
	{
		$db = \Config\Database::connect();
		$query = $db->query("SELECT * FROM innova_subscription where subscription_id='".$subscription_id."'");
		$results = $query->getResult();
        return  $results;
	}
	
	public function subscriptionUpdate($subs_array)
	{
		$db = \Config\Database::connect();
		
		$subscription_id=$subs_array['subscription_id'];
		$subscription_amt=$subs_array['subscription_amt'];
		
		$sql = "UPDATE innova_subscription set subscription_amt='".$subscription_amt."' where subscription_id='".$subscription_id."'";
		$db->query($sql);
		return "success";
	}
	
	public function singleUsers($member_id)
	{
		$db = \Config\Database::connect();
		$query = $db->query("SELECT * FROM innova_member where member_id='".$member_id."'");
		$results = $query->getResult();
        return  $results;
	}
	
	public function singleUsersPayments($member_id)
	{
		$db = \Config\Database::connect();
		$query = $db->query("SELECT * FROM innova_payment where member_id='".$member_id."' order by payment_id DESC");
		$results = $query->getResult();
        return  $results;
	}
	
	public function deleteUser($member_id)
	{
		$db = \Config\Database::connect();
		
		$sql = "DELETE from innova_member where member_id='".$member_id."'";
		$res = $db->query($sql);
		
		if($res) { return "success"; } else { return "false"; }
	}
	
	public function allProfessionalsTeams()
	{
		$db = \Config\Database::connect();
		$query = $db->query("SELECT * FROM innova_prf_team order by prfteam_id DESC");
		$results = $query->getResult();
        return  $results;
	}
	
	public function ProfessionalsTeamsAdd($logo_array,$prfteam_logo)
	{
		$db = \Config\Database::connect();
		
		$prfteam_link=addslashes($logo_array['prfteam_link']);
		$prfteam_status=addslashes($logo_array['prfteam_status']);
		
		if($prfteam_logo!='')
		{
			$newName = $prfteam_logo->getRandomName();
			$prfteam_logo->move(ROOTPATH . 'uploads/othersfiles',$newName);
		} 
		else 
		{ 
			$newName = "";
		}
		
		$sql = "INSERT INTO innova_prf_team set prfteam_logo='".$newName."', prfteam_link='".$prfteam_link."', prfteam_status='".$prfteam_status."'";
		$db->query($sql);
		return "success";
	}
	
	public function ProfessionalsTeamsUpdate($logo_array,$prfteam_logo)
	{
		$db = \Config\Database::connect();
		
		$prfteam_id=addslashes($logo_array['prfteam_id']);
		$prfteam_link=addslashes($logo_array['prfteam_link']);
		$prfteam_status=addslashes($logo_array['prfteam_status']);
		
		if($prfteam_logo!='')
		{
			$newName = $prfteam_logo->getRandomName();
			$prfteam_logo->move(ROOTPATH . 'uploads/othersfiles',$newName);
		} 
		else 
		{ 
			if($logo_array['old_logo'] == '') { $newName = ""; } else { $newName = $logo_array['old_logo']; }
		}
		
		$sql = "UPDATE innova_prf_team set prfteam_link='".$prfteam_link."', prfteam_status='".$prfteam_status."', prfteam_logo='".$newName."' where prfteam_id='".$prfteam_id."'";
		$db->query($sql);
		return "success";
	}
	
	public function singleProfessionals($prfteam_id)
	{
		$db = \Config\Database::connect();
		$query = $db->query("SELECT * FROM innova_prf_team where prfteam_id='".$prfteam_id."'");
		$results = $query->getResult();
        return  $results;
	}
	
	public function deletePrfTeams($prfteam_id)
	{
		$db = \Config\Database::connect();
		
		$query = $db->query("SELECT prfteam_logo FROM innova_prf_team where prfteam_id='".$prfteam_id."'");
		$results = $query->getResult();
		$prfteam_logo  = $results[0]->prfteam_logo;
		
		$sql = "DELETE from innova_prf_team where prfteam_id='".$prfteam_id."'";
		$res = $db->query($sql);
		
		if($prfteam_logo!='' && file_exists('uploads/othersfiles/'.$prfteam_logo)){ unlink('uploads/othersfiles/'.$prfteam_logo); }
		
		if($res) { return "success"; } else { return "false"; }
	}
	
	public function allServicesHighlights()
	{
		$db = \Config\Database::connect();
		$query = $db->query("SELECT * FROM innova_services order by services_id DESC");
		$results = $query->getResult();
        return  $results;
	}
	
	public function ServicesHighlightsAdd($services_array,$services_icon)
	{
		$db = \Config\Database::connect();
		
		$services_title=addslashes($services_array['services_title']);
		$services_desc=addslashes($services_array['services_desc']);
		$services_status=addslashes($services_array['services_status']);
		
		if($services_icon!='')
		{
			$newName = $services_icon->getRandomName();
			$services_icon->move(ROOTPATH . 'uploads/othersfiles',$newName);
		} 
		else 
		{ 
			$newName = "";
		}
		
		$sql = "INSERT INTO innova_services set services_title='".$services_title."', services_desc='".$services_desc."', services_status='".$services_status."', services_icon='".$newName."'";
		$db->query($sql);
		return "success";
	}
	
	public function servicesUpdate($services_array,$services_icon)
	{
		$db = \Config\Database::connect();
		
		$services_id=addslashes($services_array['services_id']);
		$services_title=addslashes($services_array['services_title']);
		$services_desc=addslashes($services_array['services_desc']);
		$services_status=addslashes($services_array['services_status']);
		
		if($services_icon!='')
		{
			$newName = $services_icon->getRandomName();
			$services_icon->move(ROOTPATH . 'uploads/othersfiles',$newName);
		} 
		else 
		{ 
			if($services_array['old_icon'] == '') { $newName = ""; } else { $newName = $services_array['old_icon']; }
		}
		
		$sql = "UPDATE innova_services set services_title='".$services_title."', services_desc='".$services_desc."', services_status='".$services_status."', services_icon='".$newName."' where services_id='".$services_id."'";
		$db->query($sql);
		return "success";
	}
	
	public function singleServices($services_id)
	{
		$db = \Config\Database::connect();
		$query = $db->query("SELECT * FROM innova_services where services_id='".$services_id."'");
		$results = $query->getResult();
        return  $results;
	}
	
	public function deleteServices($services_id)
	{
		$db = \Config\Database::connect();
		
		$query = $db->query("SELECT services_icon FROM innova_services where services_id='".$services_id."'");
		$results = $query->getResult();
		$services_icon  = $results[0]->services_icon;
		
		$sql = "DELETE from innova_services where services_id='".$services_id."'";
		$res = $db->query($sql);
		
		if($services_icon!='' && file_exists('uploads/othersfiles/'.$services_icon)){ unlink('uploads/othersfiles/'.$services_icon); }
		
		if($res) { return "success"; } else { return "false"; }
	}
	
	public function singleBanner($banner_id)
	{
		$db = \Config\Database::connect();
		$query = $db->query("SELECT * FROM innova_banner where banner_id='".$banner_id."'");
		$results = $query->getResult();
        return  $results;
	}
	
	public function BannerUpdate($banner_array,$banner_image)
	{
		$db = \Config\Database::connect();
		
		$banner_heading=addslashes($banner_array['banner_heading']);
		$banner_desc=addslashes($banner_array['banner_desc']);
		
		if($banner_image!='')
		{
			$newName = $banner_image->getRandomName();
			$banner_image->move(ROOTPATH . 'uploads/othersfiles',$newName);
		} 
		else 
		{ 
			if($banner_array['old_icon'] == '') { $newName = ""; } else { $newName = $banner_array['old_icon']; }
		}
		
		$sql = "UPDATE innova_banner set banner_heading='".$banner_heading."', banner_desc='".$banner_desc."', banner_image='".$newName."' where banner_id='1'";
		$db->query($sql);
		return "success";
	}
	
	public function singleCmsInfo($cms_id)
	{
		$db = \Config\Database::connect();
		$query = $db->query("SELECT * FROM innova_cms where cms_id='".$cms_id."'");
		$results = $query->getResult();
        return  $results;
	}
	
	public function cmsServicesUpdate($cms_array)
	{
		$db = \Config\Database::connect();
		
		$cms_desc=addslashes($cms_array['cms_desc']);
		
		$sql = "UPDATE innova_cms set cms_desc='".$cms_desc."' where cms_id='1'";
		$db->query($sql);
		return "success";
	}
	
	public function revolutionizingUpdate($cms_array,$cms_image)
	{
		$db = \Config\Database::connect();
		
		$cms_id=addslashes($cms_array['cms_id']);
		$cms_desc=addslashes($cms_array['cms_desc']);
		
		if($cms_image!='')
		{
			$newName = $cms_image->getRandomName();
			$cms_image->move(ROOTPATH . 'uploads/othersfiles',$newName);
		} 
		else 
		{ 
			if($cms_array['old_icon'] == '') { $newName = ""; } else { $newName = $cms_array['old_icon']; }
		}
		
		$sql = "UPDATE innova_cms set cms_desc='".$cms_desc."', cms_image='".$newName."' where cms_id='".$cms_id."'";
		$db->query($sql);
		return "success";
	}
	

}
