<?php namespace App\Models;

use CodeIgniter\Model;

use CodeIgniter\Database\ConnectionInterface;

class IAtoolsagentsmodel extends Model
{
	protected $db;

    public function __construct(ConnectionInterface &$db)
    {
        $this->db =& $db;
    }
	
	public function allcategory()
	{
		$db = \Config\Database::connect();
		
		$query = $db->query("SELECT * FROM innova_category where category_status='Y' order by category_id DESC");
		$results = $query->getResult();
        return  $results;
	}
	
	public function singleCategory($prompt_question_id='')
	{
		$db = \Config\Database::connect();
		
		$catquery = $db->query("SELECT * FROM innova_prompt_question where prompt_question_id='".$prompt_question_id."'");
		$catresults = $catquery->getResult();
		
		$query = $db->query("SELECT * FROM innova_category where category_status='Y' and category_id='".$catresults[0]->category_id."'");
		$results = $query->getResult();
        return  $results;
	}
	
	public function allprojects($category_id='')
	{
		$db = \Config\Database::connect();
		
		if($category_id!='' && $category_id!='all') { $string = ' and category_id='.$category_id.''; } else { $string = ''; }
		
		$query = $db->query("SELECT * FROM innova_prompt_question where 1=1 ".$string." order by prompt_question_id DESC");
		$results = $query->getResult();
        return  $results;
	}
	
	public function singleTools($prompt_question_id='')
	{
		$db = \Config\Database::connect();
		
		$query = $db->query("SELECT * FROM innova_prompt_question where prompt_question_id='".$prompt_question_id."' order by prompt_question_id DESC");
		$results = $query->getResult();
        return  $results;
	}
	
	public function toolsField($prompt_question_id='')
	{
		$db = \Config\Database::connect();
		
		$query = $db->query("SELECT * FROM innova_form_field where prompt_question_id='".$prompt_question_id."' order by form_field_id ASC");
		$results = $query->getResult();
        return  $results;
	}
	
	
	
	
	
	
	
	
	

}
