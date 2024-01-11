<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\IAcmsmodel;

class IAcms extends BaseController
{
	protected $helpers = ['form'];
	
	public function testimonials()
	{
		$db = \Config\Database::connect();
		$IAcmsmodel = new IAcmsmodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		
		if(!isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('/innova-admin/login')); }
		
		$data['testimonials'] = $IAcmsmodel->alltestimonials();
		
		echo view('admin-panel/testimonials-list',$data);
	}
	
	public function testimonialsAdd()
	{
		$db = \Config\Database::connect();
		$IAcmsmodel = new IAcmsmodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$validation = \Config\Services::validation();
		
		if(!isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('/innova-admin/login')); }
		
		if(isset($_POST['catsubmit']))
		{
			$testimonial_array=array('testimonialsby'=>$this->request->getVar('testimonialsby'),'testimonialstype'=>$this->request->getVar('testimonialstype'),'testimonialsdesc'=>$this->request->getVar('testimonialsdesc'),'test_position'=>$this->request->getVar('test_position'));
			$testimonialsimage = $this->request->getFile('testimonialsimage');
			
			$rules = [
						'testimonialsby' => 'required',
						'testimonialstype' => 'required',
						'test_position' => 'required'
					 ];
					 
			if ($this->validate($rules)) 
			{
				$status=$IAcmsmodel->testimonialsAdd($testimonial_array,$testimonialsimage);
				if($status=='success') 
				{ 
					$session->setFlashdata('addedd','addedd');
					return redirect()->to(base_url('/innova-admin/testimonials')); 
				}
				else
				{
					$session->setFlashdata('fail','fail');
					return redirect()->to(base_url('/innova-admin/testimonials-add'));
				}
			}
		}
		
		echo view('admin-panel/testimonials-add');
	}
	
	public function testimonialsUpdate($testimonials_id='')
	{
		$db = \Config\Database::connect();
		$IAcmsmodel = new IAcmsmodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$validation = \Config\Services::validation();
		
		if(!isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('/innova-admin/login')); }
		
		if(isset($_POST['catsubmit']))
		{
			$testimonial_array=array('testimonials_id'=>$this->request->getVar('testimonials_id'),'testimonialsby'=>$this->request->getVar('testimonialsby'),'testimonialstype'=>$this->request->getVar('testimonialstype'),'testimonialsdesc'=>$this->request->getVar('testimonialsdesc'),'test_position'=>$this->request->getVar('test_position'),'testimonialsstatus'=>$this->request->getVar('testimonialsstatus'),'old_testimonialsimage'=>$this->request->getVar('old_testimonialsimage'));
			$testimonialsimage = $this->request->getFile('testimonialsimage');
			
			$rules = [
						'testimonialsby' => 'required',
						'testimonialstype' => 'required',
						'test_position' => 'required'
					 ];
					 
			if ($this->validate($rules)) 
			{
				$status=$IAcmsmodel->testimonialsUpdate($testimonial_array,$testimonialsimage);
				if($status=='success') 
				{ 
					$session->setFlashdata('edited','edited');
					return redirect()->to(base_url('/innova-admin/testimonials')); 
				}
				else
				{
					$session->setFlashdata('fail','fail');
					return redirect()->to(base_url('/innova-admin/testimonials-edit/'.$this->request->getVar('testimonials_id')));
				}
			}
		}
		
		$data['testimonials'] = $IAcmsmodel->singletestimonials($testimonials_id);
		
		echo view('admin-panel/testimonials-edit',$data);
	}
	
	public function deleteTestimonials()
	{
		$db = \Config\Database::connect();
		$IAcmsmodel = new IAcmsmodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		
		if(!isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('/innova-admin/login')); }
		
		$status = $IAcmsmodel->deleteTestimonials($request->uri->getSegment(3));
		if($status=='success')
		{
			$session->setFlashdata('message','deleted');
		}
		else
		{
			$session->setFlashdata('message','notdeleted');
		}
		
		return $status;
		
	}
	
	public function promptQuestion()
	{
		$db = \Config\Database::connect();
		$IAcmsmodel = new IAcmsmodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		
		if(!isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('/innova-admin/login')); }
		
		$data['promptquestions'] = $IAcmsmodel->allpromptquestion();
		
		echo view('admin-panel/prompt-questions-list',$data);
	}
	
	public function deleteQuestion()
	{
		$db = \Config\Database::connect();
		$IAcmsmodel = new IAcmsmodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		
		if(!isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('/innova-admin/login')); }
		
		$status = $IAcmsmodel->deleteQuestion($request->uri->getSegment(3));
		if($status=='success')
		{
			$session->setFlashdata('deleted','deleted');
		}
		else
		{
			$session->setFlashdata('notdeleted','notdeleted');
		}
		
		return $status;
		
	}
	
	public function promptQuestionAdd()
	{
		$db = \Config\Database::connect();
		$IAcmsmodel = new IAcmsmodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$validation = \Config\Services::validation();
		
		if(!isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('/innova-admin/login')); }
		
		if(isset($_POST['catsubmit']))
		{
			$promptquestionArray=array(
										'category_id'=>$this->request->getVar('category_id'), 
										'model_name'=>$this->request->getVar('model_name'),
										'question_title'=>$this->request->getVar('question_title'),
										'question_desc'=>$this->request->getVar('question_desc'),
										'filed_type'=>$this->request->getVar('filed_type'),
										'filed_label'=>$this->request->getVar('filed_label'),
										'filed_name'=>$this->request->getVar('filed_name'),
										'filed_value'=>$this->request->getVar('filed_value'),
										'question_prompt'=>$this->request->getVar('question_prompt')
									  );
			
			$rules = [
						'category_id' => 'required',
						'model_name' => 'required',
						'question_title' => 'required',
						'question_desc' => 'required',
						'question_prompt' => 'required'
					 ];
					 
			if ($this->validate($rules)) 
			{
				$status=$IAcmsmodel->promptQuestionAdd($promptquestionArray);
				if($status=='success') 
				{ 
					$session->setFlashdata('addedd','addedd');
					return redirect()->to(base_url('/innova-admin/prompt-questions')); 
				}
				else
				{
					$session->setFlashdata('fail','fail');
					return redirect()->to(base_url('/innova-admin/prompt-questions-add'));
				}
			}
		}
		
		$data['categories'] = $IAcmsmodel->allcategory();
		
		echo view('admin-panel/prompt-questions-add',$data);
	}
	
	public function allfaq()
	{
		$db = \Config\Database::connect();
		$IAcmsmodel = new IAcmsmodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		
		if(!isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('/innova-admin/login')); }
		
		$data['faqs'] = $IAcmsmodel->allfaq();
		
		echo view('admin-panel/faq-list',$data);
	}
	
	public function faqAdd()
	{
		$db = \Config\Database::connect();
		$IAcmsmodel = new IAcmsmodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$validation = \Config\Services::validation();
		
		if(!isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('/innova-admin/login')); }
		
		if(isset($_POST['catsubmit']))
		{
			$faq_array=array('faq_question'=>$this->request->getVar('faq_question'),'faq_answer'=>$this->request->getVar('faq_answer'),'faq_status'=>$this->request->getVar('faq_status'));
			
			$rules = [
						'faq_question' => 'required',
						'faq_answer' => 'required',
						'faq_status' => 'required'
					 ];
					 
			if ($this->validate($rules)) 
			{
				$status=$IAcmsmodel->faqAdd($faq_array);
				if($status=='success') 
				{ 
					$session->setFlashdata('edited','edited');
					return redirect()->to(base_url('/innova-admin/faq')); 
				}
				else
				{
					$session->setFlashdata('fail','fail');
					return redirect()->to(base_url('/innova-admin/faq-add/'));
				}
			}
		}
		
		echo view('admin-panel/faq-add');
	}
	
	public function faqUpdate($faq_id='')
	{
		$db = \Config\Database::connect();
		$IAcmsmodel = new IAcmsmodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$validation = \Config\Services::validation();
		
		if(!isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('/innova-admin/login')); }
		
		if(isset($_POST['catsubmit']))
		{
			$faq_array=array('faq_id'=>$this->request->getVar('faq_id'),'faq_question'=>$this->request->getVar('faq_question'),'faq_answer'=>$this->request->getVar('faq_answer'),'faq_status'=>$this->request->getVar('faq_status'));
			
			$rules = [
						'faq_question' => 'required',
						'faq_answer' => 'required',
						'faq_status' => 'required'
					 ];
					 
			if ($this->validate($rules)) 
			{
				$status=$IAcmsmodel->faqUpdate($faq_array);
				if($status=='success') 
				{ 
					$session->setFlashdata('edited','edited');
					return redirect()->to(base_url('/innova-admin/faq')); 
				}
				else
				{
					$session->setFlashdata('fail','fail');
					return redirect()->to(base_url('/innova-admin/faq-edit/'.$this->request->getVar('faq_id')));
				}
			}
		}
		
		$data['faq'] = $IAcmsmodel->singleFaq($faq_id);
		
		echo view('admin-panel/faq-edit',$data);
	}
	
	public function deleteFaq()
	{
		$db = \Config\Database::connect();
		$IAcmsmodel = new IAcmsmodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		
		if(!isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('/innova-admin/login')); }
		
		$status = $IAcmsmodel->deleteFaq($request->uri->getSegment(3));
		if($status=='success')
		{
			$session->setFlashdata('deleted','deleted');
		}
		else
		{
			$session->setFlashdata('notdeleted','notdeleted');
		}
		
		return $status;
		
	}
	
	public function allSubscription()
	{
		$db = \Config\Database::connect();
		$IAcmsmodel = new IAcmsmodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		helper('my_helper');
		
		if(!isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('/innova-admin/login')); }
		
		$data['allsubscription'] = $IAcmsmodel->allsubscription();
		
		echo view('admin-panel/all-subscription',$data);
	}
	
	public function subscriptionUpdate($subscription_id='')
	{
		$db = \Config\Database::connect();
		$IAcmsmodel = new IAcmsmodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$validation = \Config\Services::validation();
		
		if(!isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('/innova-admin/login')); }
		
		if(isset($_POST['catsubmit']))
		{
			$subs_array=array('subscription_id'=>$this->request->getVar('subscription_id'),'subscription_amt'=>$this->request->getVar('subscription_amt'));
			$status=$IAcmsmodel->subscriptionUpdate($subs_array);
			
			if($status=='success') 
			{ 
				$session->setFlashdata('edited','edited');
				return redirect()->to(base_url('/innova-admin/all-subscription')); 
			}
			else
			{
				$session->setFlashdata('fail','fail');
				return redirect()->to(base_url('/innova-admin/subscription-update/'.$this->request->getVar('subscription_id')));
			}
		}
		
		$data['subscription'] = $IAcmsmodel->singleSubscription($subscription_id);
		
		echo view('admin-panel/subscription-update',$data);
	}
	
	public function alluser()
	{
		$db = \Config\Database::connect();
		$IAcmsmodel = new IAcmsmodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		helper('my_helper');
		
		if(!isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('/innova-admin/login')); }
		
		$data['alluser'] = $IAcmsmodel->allusers();
		
		echo view('admin-panel/user-list',$data);
	}
	
	public function memberView($member_id ='')
	{
		$db = \Config\Database::connect();
		$IAcmsmodel = new IAcmsmodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		helper('my_helper');
		
		if(!isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('/innova-admin/login')); }
		
		$data['singleuser'] = $IAcmsmodel->singleUsers($member_id);
		$data['userpayment'] = $IAcmsmodel->singleUsersPayments($member_id);
		
		$current_date = current_date();	
		if($data['singleuser'][0]->subscription_status == 'Active' && $data['singleuser'][0]->payment_status == 'Y')
		{
			if($data['singleuser'][0]->subscription_type == 'basic'){ $subscription_type = 'Agent Essentials Plan'; }
			if($data['singleuser'][0]->subscription_type == 'premium'){ $subscription_type = 'Agent Advantage Plan'; }
			if($data['singleuser'][0]->subscription_type == 'elite'){ $subscription_type = 'Agent Excellence Plan'; }
			
			if($current_date <= $data['singleuser'][0]->end_date)
			{
				$end_date = date("M j, Y", strtotime($data['singleuser'][0]->end_date));
			}
			else
			{
				$end_date = '<span>Expired</span>';
			}
			
			$start_date = date("M j, Y", strtotime($data['singleuser'][0]->start_date));
		}
		else
		{
			$subscription_type = 'No Membership';
			$end_date = '--';
			$start_date = '--';
		}
		
		$data['subscription_type'] = $subscription_type;
		$data['end_date'] = $end_date;
		$data['start_date'] = $start_date;
		
		
		echo view('admin-panel/member-view',$data);
	}
	
	public function deleteUser()
	{
		$db = \Config\Database::connect();
		$IAcmsmodel = new IAcmsmodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		
		if(!isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('/innova-admin/login')); }
		
		$status = $IAcmsmodel->deleteUser($request->uri->getSegment(3));
		if($status=='success')
		{
			$session->setFlashdata('deleted','deleted');
		}
		else
		{
			$session->setFlashdata('notdeleted','notdeleted');
		}
		
		return $status;
		
	}
	
	public function allProfessionalsTeams()
	{
		$db = \Config\Database::connect();
		$IAcmsmodel = new IAcmsmodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		
		if(!isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('/innova-admin/login')); }
		
		$data['prfteams'] = $IAcmsmodel->allProfessionalsTeams();
		
		echo view('admin-panel/professionals-teams',$data);
	}
	
	public function ProfessionalsTeamsAdd()
	{
		$db = \Config\Database::connect();
		$IAcmsmodel = new IAcmsmodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$validation = \Config\Services::validation();
		
		if(!isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('/innova-admin/login')); }
		
		if(isset($_POST['catsubmit']))
		{
			$logo_array=array('prfteam_link'=>$this->request->getVar('prfteam_link'),'prfteam_status'=>$this->request->getVar('prfteam_status'));
			$prfteam_logo = $this->request->getFile('prfteam_logo');
			
			$status=$IAcmsmodel->ProfessionalsTeamsAdd($logo_array,$prfteam_logo);
			if($status=='success') 
			{ 
				$session->setFlashdata('addedd','addedd');
				return redirect()->to(base_url('/innova-admin/professionals-teams')); 
			}
			else
			{
				$session->setFlashdata('fail','fail');
				return redirect()->to(base_url('/innova-admin/professionals-teams-add'));
			}
		}
		
		echo view('admin-panel/professionals-teams-add');
	}
	
	public function ProfessionalsTeamsUpdate($prfteam_id='')
	{
		$db = \Config\Database::connect();
		$IAcmsmodel = new IAcmsmodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$validation = \Config\Services::validation();
		
		if(!isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('/innova-admin/login')); }
		
		if(isset($_POST['catsubmit']))
		{
			$logo_array=array('prfteam_id'=>$this->request->getVar('prfteam_id'),'prfteam_link'=>$this->request->getVar('prfteam_link'),'prfteam_status'=>$this->request->getVar('prfteam_status'),'old_logo'=>$this->request->getVar('old_logo'));
			$prfteam_logo = $this->request->getFile('prfteam_logo');
			
			$status=$IAcmsmodel->ProfessionalsTeamsUpdate($logo_array,$prfteam_logo);
			if($status=='success') 
			{ 
				$session->setFlashdata('edited','edited');
				return redirect()->to(base_url('/innova-admin/professionals-teams')); 
			}
			else
			{
				$session->setFlashdata('fail','fail');
				return redirect()->to(base_url('/innova-admin/professionals-teams-edit/'.$this->request->getVar('prfteam_id')));
			}
		}
		
		$data['professionals'] = $IAcmsmodel->singleProfessionals($prfteam_id);
		
		echo view('admin-panel/professionals-teams-edit',$data);
	}
	
	public function deletePrfTeams()
	{
		$db = \Config\Database::connect();
		$IAcmsmodel = new IAcmsmodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		
		if(!isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('/innova-admin/login')); }
		
		$status = $IAcmsmodel->deletePrfTeams($request->uri->getSegment(3));
		if($status=='success')
		{
			$session->setFlashdata('message','deleted');
		}
		else
		{
			$session->setFlashdata('message','notdeleted');
		}
		
		return $status;
		
	}
	
	public function allServicesHighlights()
	{
		$db = \Config\Database::connect();
		$IAcmsmodel = new IAcmsmodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		
		if(!isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('/innova-admin/login')); }
		
		$data['services'] = $IAcmsmodel->allServicesHighlights();
		
		echo view('admin-panel/services-highlights',$data);
	}
	
	public function deleteServices()
	{
		$db = \Config\Database::connect();
		$IAcmsmodel = new IAcmsmodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		
		if(!isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('/innova-admin/login')); }
		
		$status = $IAcmsmodel->deleteServices($request->uri->getSegment(3));
		if($status=='success')
		{
			$session->setFlashdata('message','deleted');
		}
		else
		{
			$session->setFlashdata('message','notdeleted');
		}
		
		return $status;
		
	}
	
	public function ServicesHighlightsAdd()
	{
		$db = \Config\Database::connect();
		$IAcmsmodel = new IAcmsmodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$validation = \Config\Services::validation();
		
		if(!isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('/innova-admin/login')); }
		
		if(isset($_POST['catsubmit']))
		{
			$services_array=array('services_title'=>$this->request->getVar('services_title'),'services_desc'=>$this->request->getVar('services_desc'),'services_status'=>$this->request->getVar('services_status'));
			$services_icon = $this->request->getFile('services_icon');
			
			$rules = [
						'services_title' => 'required',
						'services_desc' => 'required'
					 ];
					 
			if ($this->validate($rules)) 
			{
				$status=$IAcmsmodel->ServicesHighlightsAdd($services_array,$services_icon);
				if($status=='success') 
				{ 
					$session->setFlashdata('addedd','addedd');
					return redirect()->to(base_url('/innova-admin/services-highlights')); 
				}
				else
				{
					$session->setFlashdata('fail','fail');
					return redirect()->to(base_url('/innova-admin/services-highlights-add'));
				}
			}
		}
		
		echo view('admin-panel/services-highlights-add');
	}
	
	public function ServicesHighlightsUpdate($services_id='')
	{
		$db = \Config\Database::connect();
		$IAcmsmodel = new IAcmsmodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$validation = \Config\Services::validation();
		
		if(!isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('/innova-admin/login')); }
		
		if(isset($_POST['catsubmit']))
		{
			$services_array=array('services_id'=>$this->request->getVar('services_id'),'services_title'=>$this->request->getVar('services_title'),'old_icon'=>$this->request->getVar('old_icon'),'services_desc'=>$this->request->getVar('services_desc'),'services_status'=>$this->request->getVar('services_status'));
			$services_icon = $this->request->getFile('services_icon');
			
			$rules = [
						'services_title' => 'required',
						'services_desc' => 'required'
					 ];
					 
			if ($this->validate($rules)) 
			{
				$status=$IAcmsmodel->servicesUpdate($services_array,$services_icon);
				if($status=='success') 
				{ 
					$session->setFlashdata('edited','edited');
					return redirect()->to(base_url('/innova-admin/services-highlights')); 
				}
				else
				{
					$session->setFlashdata('fail','fail');
					return redirect()->to(base_url('/innova-admin/services-highlights-edit/'.$this->request->getVar('testimonials_id')));
				}
			}
		}
		
		$data['services'] = $IAcmsmodel->singleServices($services_id);
		
		echo view('admin-panel/services-highlights-edit',$data);
	}
	
	public function bannerUpdate()
	{
		$db = \Config\Database::connect();
		$IAcmsmodel = new IAcmsmodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$validation = \Config\Services::validation();
		
		if(!isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('/innova-admin/login')); }
		
		if(isset($_POST['catsubmit']))
		{
			$banner_array=array('banner_heading'=>$this->request->getVar('banner_heading'),'old_icon'=>$this->request->getVar('old_icon'),'banner_desc'=>$this->request->getVar('banner_desc'));
			$banner_image = $this->request->getFile('banner_image');
			
			$rules = [
						'banner_heading' => 'required',
						'banner_desc' => 'required'
					 ];
					 
			if ($this->validate($rules)) 
			{
				$status=$IAcmsmodel->BannerUpdate($banner_array,$banner_image);
				if($status=='success') 
				{ 
					$session->setFlashdata('edited','edited');
					return redirect()->to(base_url('/innova-admin/banner-update')); 
				}
				else
				{
					$session->setFlashdata('fail','fail');
					return redirect()->to(base_url('/innova-admin/banner-update/'));
				}
			}
		}
		
		$data['banner'] = $IAcmsmodel->singleBanner(1);
		
		echo view('admin-panel/banner-update',$data);
	}
	
	public function highlightsUpdate()
	{
		$db = \Config\Database::connect();
		$IAcmsmodel = new IAcmsmodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$validation = \Config\Services::validation();
		
		if(!isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('/innova-admin/login')); }
		
		if(isset($_POST['catsubmit']))
		{
			$cms_array=array('cms_desc'=>$this->request->getVar('cms_desc'));
			
			$rules = [
						'cms_desc' => 'required'
					 ];
					 
			if ($this->validate($rules)) 
			{
				$status=$IAcmsmodel->cmsServicesUpdate($cms_array);
				if($status=='success') 
				{ 
					$session->setFlashdata('edited','edited');
					return redirect()->to(base_url('/innova-admin/services-highlights-update')); 
				}
				else
				{
					$session->setFlashdata('fail','fail');
					return redirect()->to(base_url('/innova-admin/services-highlights-update'));
				}
			}
		}
		
		$data['cms'] = $IAcmsmodel->singleCmsInfo(1);
		
		echo view('admin-panel/services-highlights-update',$data);
	}
	
	public function revolutionizingUpdate()
	{
		$db = \Config\Database::connect();
		$IAcmsmodel = new IAcmsmodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$validation = \Config\Services::validation();
		
		if(!isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('/innova-admin/login')); }
		
		if(isset($_POST['catsubmit']))
		{
			$cms_array=array('cms_id'=>2,'cms_desc'=>$this->request->getVar('cms_desc'),'old_icon'=>$this->request->getVar('old_icon'));
			$cms_image = $this->request->getFile('cms_image');
			
			$rules = [
						'cms_desc' => 'required'
					 ];
					 
			if ($this->validate($rules)) 
			{
				$status=$IAcmsmodel->revolutionizingUpdate($cms_array,$cms_image);
				if($status=='success') 
				{ 
					$session->setFlashdata('edited','edited');
					return redirect()->to(base_url('/innova-admin/revolutionizing')); 
				}
				else
				{
					$session->setFlashdata('fail','fail');
					return redirect()->to(base_url('/innova-admin/revolutionizing'));
				}
			}
		}
		
		$data['cms'] = $IAcmsmodel->singleCmsInfo(2);
		
		echo view('admin-panel/revolutionizing',$data);
	}
	
	public function aboutUpdate()
	{
		$db = \Config\Database::connect();
		$IAcmsmodel = new IAcmsmodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$validation = \Config\Services::validation();
		
		if(!isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('/innova-admin/login')); }
		
		if(isset($_POST['catsubmit']))
		{
			$cms_array=array('cms_id'=>3,'cms_desc'=>$this->request->getVar('cms_desc'),'old_icon'=>$this->request->getVar('old_icon'));
			$cms_image = $this->request->getFile('cms_image');
			
			$rules = [
						'cms_desc' => 'required'
					 ];
					 
			if ($this->validate($rules)) 
			{
				$status=$IAcmsmodel->revolutionizingUpdate($cms_array,$cms_image);
				if($status=='success') 
				{ 
					$session->setFlashdata('edited','edited');
					return redirect()->to(base_url('/innova-admin/about-us')); 
				}
				else
				{
					$session->setFlashdata('fail','fail');
					return redirect()->to(base_url('/innova-admin/about-us'));
				}
			}
		}
		
		$data['cms'] = $IAcmsmodel->singleCmsInfo(3);
		
		echo view('admin-panel/about-us',$data);
	}
	
	public function hiwMarketingUpdate()
	{
		$db = \Config\Database::connect();
		$IAcmsmodel = new IAcmsmodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$validation = \Config\Services::validation();
		
		if(!isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('/innova-admin/login')); }
		
		if(isset($_POST['catsubmit']))
		{
			$cms_array=array('cms_id'=>4,'cms_desc'=>$this->request->getVar('cms_desc'),'old_icon'=>$this->request->getVar('old_icon'));
			$cms_image = $this->request->getFile('cms_image');
			
			$rules = [
						'cms_desc' => 'required'
					 ];
					 
			if ($this->validate($rules)) 
			{
				$status=$IAcmsmodel->revolutionizingUpdate($cms_array,$cms_image);
				if($status=='success') 
				{ 
					$session->setFlashdata('edited','edited');
					return redirect()->to(base_url('/innova-admin/how-it-works-marketing')); 
				}
				else
				{
					$session->setFlashdata('fail','fail');
					return redirect()->to(base_url('/innova-admin/how-it-works-marketing'));
				}
			}
		}
		
		$data['cms'] = $IAcmsmodel->singleCmsInfo(4);
		
		echo view('admin-panel/how-it-works-marketing',$data);
	}
	
	public function hiwOptimizedUpdate()
	{
		$db = \Config\Database::connect();
		$IAcmsmodel = new IAcmsmodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$validation = \Config\Services::validation();
		
		if(!isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('/innova-admin/login')); }
		
		if(isset($_POST['catsubmit']))
		{
			$cms_array=array('cms_id'=>5,'cms_desc'=>$this->request->getVar('cms_desc'),'old_icon'=>$this->request->getVar('old_icon'));
			$cms_image = $this->request->getFile('cms_image');
			
			$rules = [
						'cms_desc' => 'required'
					 ];
					 
			if ($this->validate($rules)) 
			{
				$status=$IAcmsmodel->revolutionizingUpdate($cms_array,$cms_image);
				if($status=='success') 
				{ 
					$session->setFlashdata('edited','edited');
					return redirect()->to(base_url('/innova-admin/how-it-works-optimized')); 
				}
				else
				{
					$session->setFlashdata('fail','fail');
					return redirect()->to(base_url('/innova-admin/how-it-works-optimized'));
				}
			}
		}
		
		$data['cms'] = $IAcmsmodel->singleCmsInfo(5);
		
		echo view('admin-panel/how-it-works-optimized',$data);
	}

}
