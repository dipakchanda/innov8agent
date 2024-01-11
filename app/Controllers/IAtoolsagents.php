<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\IAtoolsagentsmodel;
use App\Models\IAhomemodel;

class IAtoolsagents extends BaseController
{
	protected $helpers = ['form'];
	
	public function allTools($category_id='')
	{
		$db = \Config\Database::connect();
		$IAtoolsagentsmodel = new IAtoolsagentsmodel($db);
		$IAhomemodel = new IAhomemodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		helper('my_helper');
		
		if(!isset($_SESSION['member_id'])) { return redirect()->to(base_url('login')); }
		
		//payment check
		/*$memberpayment = memberPayment($_SESSION['member_id']);
		$data['memberpayment'] = $memberpayment;
		if($memberpayment == 'inactive') { return redirect()->to(base_url('subscription')); }*/
		//end
		
		if($request->uri->getSegment(2)!=''){
		$data['projects'] = $IAtoolsagentsmodel->allprojects($request->uri->getSegment(2));
		$data['tabactive'] = $request->uri->getSegment(2);
		} else {
		$data['projects'] = $IAtoolsagentsmodel->allprojects();
		$data['tabactive'] = 'all';
		}
		
		$data['userinfo'] = $IAhomemodel->singleuserInfo($_SESSION['member_id']);
		
		$data['categories'] = $IAtoolsagentsmodel->allcategory();
		
		echo view('front-end/tools',$data);
	}
	
	public function loadTools($category_id = '') 
	{
		$db = \Config\Database::connect();
		$IAtoolsagentsmodel = new IAtoolsagentsmodel($db);
		$IAhomemodel = new IAhomemodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		helper('my_helper');
		
		$data = [];
		if ($category_id != '') {
			$data['projects'] = $IAtoolsagentsmodel->allprojects($category_id);
			$data['tabactive'] = $category_id;
		} else {
			$data['projects'] = $IAtoolsagentsmodel->allprojects();
			$data['tabactive'] = 'all';
		}
	
		return view('front-end/loadTools', $data);
	}

	public function singleTools($prompt_question_id='')
	{
		$db = \Config\Database::connect();
		$IAtoolsagentsmodel = new IAtoolsagentsmodel($db);
		$IAhomemodel = new IAhomemodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		helper('my_helper');
		
		if(!isset($_SESSION['member_id'])) { return redirect()->to(base_url('login')); }
		
		//payment check
		$memberpayment = memberPayment($_SESSION['member_id']);
		$data['memberpayment'] = $memberpayment;
		if($memberpayment == 'inactive') { return redirect()->to(base_url('subscription')); }
		//end
		
		$data['project'] = $IAtoolsagentsmodel->singleTools($prompt_question_id);
		
		$data['projectfields'] = $IAtoolsagentsmodel->toolsField($prompt_question_id);
		
		$data['userinfo'] = $IAhomemodel->singleuserInfo($_SESSION['member_id']);
		$data['category'] = $IAtoolsagentsmodel->singleCategory($prompt_question_id);
		
		echo view('front-end/toolDetails',$data);
	}
	
	public function howitworks()
	{
		$db = \Config\Database::connect();
		$IAtoolsagentsmodel = new IAtoolsagentsmodel($db);
		$IAhomemodel = new IAhomemodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		helper('my_helper');
		
		$data['left_testimonials'] = $IAhomemodel->alltestimonials('1');
		$data['right_testimonials'] = $IAhomemodel->alltestimonials('2');
		
		$data['prfteams'] = $IAhomemodel->AllProfessionalsTeams();
		$data['hwmarketing'] = $IAhomemodel->singleCmsInfo(4);
		$data['hwoptimized'] = $IAhomemodel->singleCmsInfo(5);
		
		echo view('front-end/how-it-works',$data);
	}
	
	public function compare()
	{
		$db = \Config\Database::connect();
		$IAtoolsagentsmodel = new IAtoolsagentsmodel($db);
		$IAhomemodel = new IAhomemodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		helper('my_helper');
		
		$data['left_testimonials'] = $IAhomemodel->alltestimonials('1');
		$data['right_testimonials'] = $IAhomemodel->alltestimonials('2');
		$data['prfteams'] = $IAhomemodel->AllProfessionalsTeams();
		$data['hwmarketing'] = $IAhomemodel->singleCmsInfo(4);
		
		echo view('front-end/compare',$data);
	}
	
	public function successStories()
	{
		$db = \Config\Database::connect();
		$IAhomemodel = new IAhomemodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		
		$data['testimonials'] = $IAhomemodel->successStories();
		$data['faqs'] = $IAhomemodel->allfaq();
		$data['prfteams'] = $IAhomemodel->AllProfessionalsTeams();
		$data['banner'] = $IAhomemodel->singleBanner(1);
		$data['cms'] = $IAhomemodel->singleCmsInfo(1);
		$data['revolutionizing'] = $IAhomemodel->singleCmsInfo(2);
		$data['about'] = $IAhomemodel->singleCmsInfo(3);
		
		echo view('front-end/success-stories',$data);
	}
	
	public function FAQ()
	{
		$db = \Config\Database::connect();
		$IAhomemodel = new IAhomemodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		
		$data['testimonials'] = $IAhomemodel->successStories();
		$data['faqs'] = $IAhomemodel->allfaq();
		$data['prfteams'] = $IAhomemodel->AllProfessionalsTeams();
		$data['banner'] = $IAhomemodel->singleBanner(1);
		$data['cms'] = $IAhomemodel->singleCmsInfo(1);
		$data['revolutionizing'] = $IAhomemodel->singleCmsInfo(2);
		$data['about'] = $IAhomemodel->singleCmsInfo(3);
		
		echo view('front-end/faq',$data);
	}
	
	public function TermsUse()
	{
		$db = \Config\Database::connect();
		$IAhomemodel = new IAhomemodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		
		helper('my_helper');
		
		echo view('front-end/terms-use');
	}
	
	public function PrivacyPolicy()
	{
		$db = \Config\Database::connect();
		$IAhomemodel = new IAhomemodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		
		helper('my_helper');
		
		echo view('front-end/privacy-policy');
	}
	
	public function singlesuccessStories($testimonials_id = '') 
	{
		$db = \Config\Database::connect();
		$IAtoolsagentsmodel = new IAtoolsagentsmodel($db);
		$IAhomemodel = new IAhomemodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		helper('my_helper');
		
	
		return view('front-end/success-stories-details');
	}
	
	public function whatsNew()
	{
		$db = \Config\Database::connect();
		$IAhomemodel = new IAhomemodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		
		helper('my_helper');
		
		echo view('front-end/whats-new');
	}
	
	public function gettingStarted()
	{
		$db = \Config\Database::connect();
		$IAhomemodel = new IAhomemodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		
		helper('my_helper');
		
		echo view('front-end/getting-started');
	}
	
	public function plansBilling()
	{
		$db = \Config\Database::connect();
		$IAhomemodel = new IAhomemodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		
		helper('my_helper');
		
		echo view('front-end/plans-billing');
	}
	
	public function featuresFaq()
	{
		$db = \Config\Database::connect();
		$IAhomemodel = new IAhomemodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		
		helper('my_helper');
		
		echo view('front-end/features-faq');
	}
	
	public function accountSettings()
	{
		$db = \Config\Database::connect();
		$IAhomemodel = new IAhomemodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		
		helper('my_helper');
		
		echo view('front-end/account-settings');
	}
	
	public function Troubleshooting()
	{
		$db = \Config\Database::connect();
		$IAhomemodel = new IAhomemodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		
		helper('my_helper');
		
		echo view('front-end/troubleshooting');
	}
	
	public function businessSupport()
	{
		$db = \Config\Database::connect();
		$IAhomemodel = new IAhomemodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		
		helper('my_helper');
		
		echo view('front-end/business-support');
	}
	
	public function Integrations()
	{
		$db = \Config\Database::connect();
		$IAhomemodel = new IAhomemodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		
		helper('my_helper');
		
		echo view('front-end/integrations');
	}
	
	
	public function whatArticles()
	{
		$db = \Config\Database::connect();
		$IAhomemodel = new IAhomemodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		
		helper('my_helper');
		
		echo view('front-end/what-articles');
	}
	
	
	public function helpfulArticles()
	{
		$db = \Config\Database::connect();
		$IAhomemodel = new IAhomemodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		
		helper('my_helper');
		
		echo view('front-end/helpful-articles');
	}
	
	public function cancelArticles()
	{
		$db = \Config\Database::connect();
		$IAhomemodel = new IAhomemodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		
		helper('my_helper');
		
		echo view('front-end/cancel-articles');
	}
	
	public function apiArticles()
	{
		$db = \Config\Database::connect();
		$IAhomemodel = new IAhomemodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		
		helper('my_helper');
		
		echo view('front-end/api-articles');
	}
	

}
