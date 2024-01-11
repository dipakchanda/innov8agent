<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\IAdasgboardmodel;

class IAdasgboard extends BaseController
{
	
	public function dashboard()
	{
		$db = \Config\Database::connect();
		$IAdasgboardmodel = new IAdasgboardmodel($db);
		$session = \Config\Services::session();
		
		if(!isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('innova-admin/login'));}
		
		
		
		echo view('admin-panel/dashboard');
	}
	
	public function changepassword()
	{
		$db = \Config\Database::connect();
		$IAdasgboardmodel = new IAdasgboardmodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		
		if(!isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('/innova-admin/login')); }
		
		if(isset($_POST['catsubmit']))
		{
			$password_array=array('innova_password'=>$this->request->getVar('innova_password'), 'new_innova_password'=>$this->request->getVar('new_innova_password'), 'new_con_innova_password'=>$this->request->getVar('new_con_innova_password'));
			
			$rules = [
						'innova_password' => 'required',
						'new_innova_password' => 'required',
						'new_con_innova_password' => 'required'
					 ];
					 
			if ($this->validate($rules)) 
			{
				$status=$IAdasgboardmodel->changePassword($password_array);
				
				if($status=='success') 
				{ 
					$session->setFlashdata('addedd','addedd');
					return redirect()->to(base_url('/innova-admin/changepassword')); 
				}
				else if($status=='notmatch') 
				{
					$session->setFlashdata('fail','fail');
					return redirect()->to(base_url('/innova-admin/changepassword'));
				}
				else
				{
					$session->setFlashdata('failed','failed');
					return redirect()->to(base_url('/innova-admin/changepassword'));
				}
			}
		}
		
		echo view('admin-panel/changepassword');
	}
	
	
	public function contactslist()
	{
		$db = \Config\Database::connect();
		$IAdasgboardmodel = new IAdasgboardmodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		
		if(!isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('/innova-admin/login')); }
		
		$data['contacts'] = $IAdasgboardmodel->allcontacts();
		
		echo view('admin-panel/contacts-list',$data);
	}
	
	public function deleteContact()
	{
		$db = \Config\Database::connect();
		$IAdasgboardmodel = new IAdasgboardmodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		
		if(!isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('/innova-admin/login')); }
		
		$status = $IAdasgboardmodel->deleteContact($request->uri->getSegment(3));
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
	
	public function contactsDetails()
	{
		$db = \Config\Database::connect();
		$IAdasgboardmodel = new IAdasgboardmodel($db);
		$session = \Config\Services::session();
		$request = \Config\Services::request();
		
		if(!isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('/innova-admin/login')); }
		
		if(isset($_POST['catsubmit']))
		{
			$contact_array=array( 'contact_welcome'=>$this->request->getVar('contact_welcome'), 
								   'contact_address'=>$this->request->getVar('contact_address'), 
								   'contact_heading'=>$this->request->getVar('contact_heading'), 
								   'contact_email'=>$this->request->getVar('contact_email'),
								   'contact_phone'=>$this->request->getVar('contact_phone'),
								   'contact_map'=>$this->request->getVar('contact_map')
								   );
			
			$rules = [
						'contact_welcome' => 'required',
						'contact_heading' => 'required',
						'contact_address' => 'required',
						'contact_email' => 'required',
						'contact_phone' => 'required',
						'contact_map' => 'required'
					 ];
					 
			if ($this->validate($rules)) 
			{
				$status=$IAdasgboardmodel->changeDetails($contact_array);
				
				if($status=='success') 
				{ 
					$session->setFlashdata('addedd','addedd');
					return redirect()->to(base_url('/innova-admin/contact-information')); 
				}
				else
				{
					$session->setFlashdata('failed','failed');
					return redirect()->to(base_url('/innova-admin/contact-information'));
				}
			}
		}
		
		$data['contactsdetails'] = $IAdasgboardmodel->detailscontacts();
		
		echo view('admin-panel/contact-details',$data);
	}
	
	
	

}
