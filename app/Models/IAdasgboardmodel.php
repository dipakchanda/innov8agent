<?php namespace App\Models;

use CodeIgniter\Model;

use CodeIgniter\Database\ConnectionInterface;

class IAdasgboardmodel extends Model
{
	protected $db;

    public function __construct(ConnectionInterface &$db)
    {
        $this->db =& $db;
    }
	
	public function changePassword($password_array)
	{
		$db = \Config\Database::connect();
		
		$innova_password=$password_array['innova_password'];
		$new_innova_password=$password_array['new_innova_password'];
		$new_con_innova_password=$password_array['new_con_innova_password'];
		
		if($new_innova_password!=$new_con_innova_password)
		{
			$msg = "not";
		}
		else
		{
			$query = $db->query("SELECT * FROM innova_admin where innova_password='".md5($innova_password)."' and innova_admin_id =1 ");
			$results = $query->getResult();
			if(count($results)>0)
			{
				$sql = "UPDATE innova_admin set innova_password='".md5($new_innova_password)."' where innova_admin_id = 1 ";
				$db->query($sql);
				$msg = "success";
			}
			else
			{
				$msg = "notmatch";
			}
		}
		
		return $msg ;
	}
	
	public function allcontacts()
	{
		$db = \Config\Database::connect();
		
		$query = $db->query("SELECT * FROM innova_contact order by contact_id DESC");
		$results = $query->getResult();
        return  $results;
	}
	
	public function deleteContact($contact_id)
	{
		$db = \Config\Database::connect();
		
		$sql = "DELETE from innova_contact where contact_id='".$contact_id."'";
		$res = $db->query($sql);
		
		if($res) { return "success"; } else { return "false"; }
	}
	
	public function detailscontacts()
	{
		$db = \Config\Database::connect();
		
		$query = $db->query("SELECT * FROM innova_contact_details where details_id=1");
		$results = $query->getResult();
        return  $results;
	}
	
	public function changeDetails($contact_array)
	{
		$db = \Config\Database::connect();
		
		$contact_welcome=addslashes($contact_array['contact_welcome']);
		$contact_heading=addslashes($contact_array['contact_heading']);
		$contact_address=addslashes($contact_array['contact_address']);
		$contact_email=addslashes($contact_array['contact_email']);
		$contact_phone=addslashes($contact_array['contact_phone']);
		$contact_map=addslashes($contact_array['contact_map']);
		
		$sql = "UPDATE innova_contact_details set contact_welcome='".$contact_welcome."', contact_heading='".$contact_heading."',contact_address='".$contact_address."',contact_email='".$contact_email."',contact_phone='".$contact_phone."',contact_map='".$contact_map."' where details_id = 1 ";
		$db->query($sql);
		$msg = "success";
		
		return 'success' ;
	}
	

}
