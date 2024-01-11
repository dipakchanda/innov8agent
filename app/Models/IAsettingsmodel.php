<?php namespace App\Models;

use CodeIgniter\Model;

use CodeIgniter\Database\ConnectionInterface;

class IAsettingsmodel extends Model
{
	protected $db;

    public function __construct(ConnectionInterface &$db)
    {
        $this->db =& $db;
    }
	
	public function get_login($user) 
	{
		$db = \Config\Database::connect();
		
		$username=$user['username'];
		$password1=$user['password'];
		$password=md5($password1);
		
		$query = $db->query("SELECT * FROM innova_admin WHERE innova_username='".$username."' and innova_password='".$password."'");
		$results = $query->getResult();
		if(count($results)>0)
		{
			$_SESSION['innova_username']=$results[0]->innova_username;
			$_SESSION['innova_admin_id']=$results[0]->innova_admin_id;
			return "success";
		}
		else
		{
			return "fail";
		}
    }
	
	
	
	
	

}
