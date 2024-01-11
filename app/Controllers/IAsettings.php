<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\IAsettingsmodel;

class IAsettings extends BaseController
{
	
	public function login()
	{
		$db = \Config\Database::connect();
		$IAsettingsmodel = new IAsettingsmodel($db);
		$session = \Config\Services::session();
		
		if(isset($_SESSION['innova_admin_id'])) { return redirect()->to(base_url('innova-admin/dashboard'));}
		
		if(isset($_POST['loginButton']))
		{
			$user=array('username'=>$this->request->getVar('username'), 'password'=>$this->request->getVar('password'));
			if($this->request->getVar('keep_my')!='') { $keep_my=$this->request->getVar('keep_my'); } else { $keep_my="0"; }
			
			if($keep_my=='1')
			{
				setcookie("username",trim($this->request->getVar('username')),time()+(86400 * 30),"/");
				setcookie("password",trim($this->request->getVar('password')),time()+(86400 * 30),"/");
				setcookie("keep_my",$keep_my,time()+(86400*30),"/");
			}
			else
			{ 
				setcookie("username",trim($this->request->getVar('username')),time()-(86400 * 30),"/");
				setcookie("password",trim($this->request->getVar('password')),time()-(86400 * 30),"/");	
				setcookie("keep_my", $keep_my, time()-(86400*30),"/");		
			}
			
			$status=$IAsettingsmodel->get_login($user);
			if($status=='success') 
			{ 
				return redirect()->to(base_url('/innova-admin/dashboard')); 
			}
			else
			{
				$session->setFlashdata('fail','Invalid username or password');
				return redirect()->to(base_url('/innova-admin/login'));
			}
		}
		
		echo view('admin-panel/signin');
	}
	
	public function logout()
	{
		$session = \Config\Services::session();
		$_SESSION['innova_admin_id'] = '';
		$_SESSION['innova_username'] = '';
		session_destroy();
		return redirect()->to(base_url('/innova-admin/login'));
	}
	
	
	
	
	
	
	
	

}
