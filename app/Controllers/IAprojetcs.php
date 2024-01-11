<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\IAprojetcsmodel;

class IAprojetcs extends BaseController
{
	protected $helpers = ['form'];
	
	public function category()
	{
		$db = \Config\Database::connect();
		$IAprojetcsmodel = new IAprojetcsmodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		
		if(!isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('/innova-admin/login')); }
		
		$data['categories'] = $IAprojetcsmodel->allcategory();
		
		echo view('admin-panel/category-list',$data);
	}
	
	public function categoryAdd()
	{
		$db = \Config\Database::connect();
		$IAprojetcsmodel = new IAprojetcsmodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$validation = \Config\Services::validation();
		
		if(!isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('/innova-admin/login')); }
		
		if(isset($_POST['catsubmit']))
		{
			$category_array=array('category_name'=>$this->request->getVar('category_name'), 'category_status'=>$this->request->getVar('category_status'));
			
			$rules = [
						'category_name' => 'required'
					 ];
					 
			if ($this->validate($rules)) 
			{
				$status=$IAprojetcsmodel->categoryAdd($category_array);
				if($status=='success') 
				{ 
					$session->setFlashdata('addedd','addedd');
					return redirect()->to(base_url('/innova-admin/category')); 
				}
				else
				{
					$session->setFlashdata('fail','fail');
					return redirect()->to(base_url('/innova-admin/category-add'));
				}
			}
		}
		
		echo view('admin-panel/category-add');
	}
	
	public function categoryUpdate($category_id='')
	{
		$db = \Config\Database::connect();
		$IAprojetcsmodel = new IAprojetcsmodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$validation = \Config\Services::validation();
		
		if(!isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('/innova-admin/login')); }
		
		if(isset($_POST['catsubmit']))
		{
			$category_array=array('category_id'=>$this->request->getVar('category_id'),'category_name'=>$this->request->getVar('category_name'), 'category_status'=>$this->request->getVar('category_status'));
			
			$rules = [
						'category_name' => 'required',
						'category_id' => 'required'
					 ];
					 
			if ($this->validate($rules)) 
			{
				$status=$IAprojetcsmodel->categoryUpdate($category_array);
				if($status=='success') 
				{ 
					$session->setFlashdata('edited','edited');
					return redirect()->to(base_url('/innova-admin/category')); 
				}
				else
				{
					$session->setFlashdata('fail','fail');
					return redirect()->to(base_url('/innova-admin/category-update/'.$this->request->getVar('category_id')));
				}
			}
		}
		
		$data['categories'] = $IAprojetcsmodel->singlecategory($category_id);
		
		echo view('admin-panel/category-update',$data);
	}
	
	public function deleteCategory()
	{
		$db = \Config\Database::connect();
		$IAprojetcsmodel = new IAprojetcsmodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		
		if(!isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('/innova-admin/login')); }
		
		$status = $IAprojetcsmodel->deleteCategory($request->uri->getSegment(3));
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
		$IAprojetcsmodel = new IAprojetcsmodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		
		if(!isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('/innova-admin/login')); }
		
		$data['promptquestions'] = $IAprojetcsmodel->allpromptquestion();
		
		echo view('admin-panel/prompt-questions-list',$data);
	}
	
	public function deleteQuestion()
	{
		$db = \Config\Database::connect();
		$IAprojetcsmodel = new IAprojetcsmodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		
		if(!isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('/innova-admin/login')); }
		
		$status = $IAprojetcsmodel->deleteQuestion($request->uri->getSegment(3));
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
		$IAprojetcsmodel = new IAprojetcsmodel($db);
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
										'filed_sub_head'=>$this->request->getVar('filed_sub_head'),
										'filed_name'=>$this->request->getVar('filed_name'),
										'filed_value'=>$this->request->getVar('filed_value'),
										'question_prompt'=>$this->request->getVar('question_prompt'),
										'question_image'=>$this->request->getVar('question_image')
									  );
			$question_icon = $this->request->getFile('question_icon');						  
			
			$rules = [
						'category_id' => 'required',
						'model_name' => 'required',
						'question_title' => 'required',
						'question_desc' => 'required',
						'question_prompt' => 'required',
						'question_image' => 'required'
					 ];
					 
			if ($this->validate($rules)) 
			{
				$status=$IAprojetcsmodel->promptQuestionAdd($promptquestionArray,$question_icon);
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
		
		$data['categories'] = $IAprojetcsmodel->allcategory();
		
		echo view('admin-panel/prompt-questions-add',$data);
	}
	
	public function promptQuestionUpdate($prompt_question_id='')
	{
		$db = \Config\Database::connect();
		$IAprojetcsmodel = new IAprojetcsmodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		$validation = \Config\Services::validation();
		
		if(!isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('/innova-admin/login')); }
		
		if(isset($_POST['catsubmit']))
		{
			$promptquestionArray=array(
										'prompt_question_id'=>$this->request->getVar('prompt_question_id'),
										'category_id'=>$this->request->getVar('category_id'), 
										'model_name'=>$this->request->getVar('model_name'),
										'question_title'=>$this->request->getVar('question_title'),
										'question_desc'=>$this->request->getVar('question_desc'),
										'filed_type'=>$this->request->getVar('filed_type'),
										'filed_label'=>$this->request->getVar('filed_label'),
										'filed_sub_head'=>$this->request->getVar('filed_sub_head'),
										'filed_name'=>$this->request->getVar('filed_name'),
										'filed_value'=>$this->request->getVar('filed_value'),
										'question_prompt'=>$this->request->getVar('question_prompt'),
										'old_question_icon'=>$this->request->getVar('old_question_icon'),
										'question_image'=>$this->request->getVar('question_image')
									  );
			$question_icon = $this->request->getFile('question_icon');						  
			
			$rules = [
						'category_id' => 'required',
						'model_name' => 'required',
						'question_title' => 'required',
						'question_desc' => 'required',
						'question_prompt' => 'required',
						'question_image' => 'required'
					 ];
					 
			if ($this->validate($rules)) 
			{
				$status=$IAprojetcsmodel->promptQuestionUpdate($promptquestionArray,$question_icon);
				if($status=='success') 
				{ 
					$session->setFlashdata('addedd','addedd');
					return redirect()->to(base_url('/innova-admin/prompt-questions')); 
				}
				else
				{
					$session->setFlashdata('fail','fail');
					return redirect()->to(base_url('/innova-admin/prompt-questions-edit/'.$this->request->getVar('prompt_question_id')));
				}
			}
		}
		
		$data['categories'] = $IAprojetcsmodel->allcategory();
		$data['question'] = $IAprojetcsmodel->singlequestion($prompt_question_id);
		$data['optionfiled'] = $IAprojetcsmodel->singlequestionOption($prompt_question_id);
		
		echo view('admin-panel/prompt-questions-update',$data);
	}
	
	
	
	
	
	
	
	

}
