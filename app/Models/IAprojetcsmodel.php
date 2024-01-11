<?php namespace App\Models;

use CodeIgniter\Model;

use CodeIgniter\Database\ConnectionInterface;

class IAprojetcsmodel extends Model
{
	protected $db;

    public function __construct(ConnectionInterface &$db)
    {
        $this->db =& $db;
    }
	
	public function allcategory()
	{
		$db = \Config\Database::connect();
		$query = $db->query("SELECT * FROM innova_category order by category_id DESC");
		$results = $query->getResult();
        return  $results;
	}
	
	public function singlecategory($category_id)
	{
		$db = \Config\Database::connect();
		$query = $db->query("SELECT * FROM innova_category where category_id='".$category_id."'");
		$results = $query->getResult();
        return  $results;
	}
	
	public function deleteCategory($category_id)
	{
		$db = \Config\Database::connect();
		
		$sql = "DELETE from innova_category where category_id='".$category_id."'";
		$res = $db->query($sql);
		
		$sql_qst = "DELETE from innova_prompt_question where category_id='".$category_id."'";
		$db->query($sql_qst);
		
		$sql_qst = "DELETE from innova_form_field where category_id='".$category_id."'";
		$db->query($sql_qst);
		
		if($res) { return "success"; } else { return "false"; }
	}
	
	public function categoryAdd($category_array)
	{
		$db = \Config\Database::connect();
		$category_name=addslashes($category_array['category_name']);
		$category_status=addslashes($category_array['category_status']);
		
		$sql = "INSERT INTO innova_category set category_name='".$category_name."', category_status='".$category_status."'";
		$db->query($sql);
		return "success";
	}
	
	public function categoryUpdate($category_array)
	{
		$db = \Config\Database::connect();
		$category_id=addslashes($category_array['category_id']);
		$category_name=addslashes($category_array['category_name']);
		$category_status=addslashes($category_array['category_status']);
		
		$sql = "UPDATE innova_category set category_name='".$category_name."', category_status='".$category_status."' where category_id='".$category_id."'";
		$db->query($sql);
		return "success";
	}
	
	public function allpromptquestion()
	{
		$db = \Config\Database::connect();
		$query = $db->query("SELECT innova_category.category_name,innova_prompt_question.* FROM innova_prompt_question INNER JOIN innova_category on innova_category.category_id=innova_prompt_question.category_id order by innova_prompt_question.prompt_question_id DESC");
		$results = $query->getResult();
        return  $results;
	}
	
	public function deleteQuestion($prompt_question_id)
	{
		$db = \Config\Database::connect();
		
		$query = $db->query("SELECT question_icon FROM innova_prompt_question where prompt_question_id='".$prompt_question_id."'");
		$results = $query->getResult();
		$question_icon  = $results[0]->question_icon;
		
		$sql_qst = "DELETE from innova_prompt_question where prompt_question_id='".$prompt_question_id."'";
		$res=$db->query($sql_qst);
		
		$sql_qst = "DELETE from innova_form_field where prompt_question_id='".$prompt_question_id."'";
		$db->query($sql_qst);
		
		if($question_icon!='' && file_exists('uploads/questionicon/'.$question_icon)){ unlink('uploads/questionicon/'.$question_icon); }
		
		if($res) { return "success"; } else { return "false"; }
	}
	
	public function promptQuestionAdd($promptquestionArray,$question_icon)
	{
		$db = \Config\Database::connect();
		
		$category_id=addslashes($promptquestionArray['category_id']);
		$model_name=addslashes($promptquestionArray['model_name']);
		$question_title=addslashes($promptquestionArray['question_title']);
		$question_desc=addslashes($promptquestionArray['question_desc']);
		$question_prompt=addslashes($promptquestionArray['question_prompt']);
		$question_image=$promptquestionArray['question_image'];
		
		if($question_icon!='')
		{
			$newName = $question_icon->getRandomName();
			$question_icon->move(ROOTPATH . 'uploads/questionicon',$newName);
		} 
		else 
		{ 
			$newName = "";
		}
		
		$filed_type=$promptquestionArray['filed_type'];
		$filed_name=$promptquestionArray['filed_name'];
		$filed_value=$promptquestionArray['filed_value'];
		$filed_label=$promptquestionArray['filed_label'];
		$filed_sub_head=$promptquestionArray['filed_sub_head'];
		
		//print_r($filed_type);
		//print_r($filed_value); 
		
		
		$sql = "INSERT INTO innova_prompt_question set category_id='".$category_id."', model_name='".$model_name."', question_title='".$question_title."', question_desc='".$question_desc."', question_prompt='".$question_prompt."',question_icon='".$newName."',question_image='".$question_image."'";
		$db->query($sql);
		$prompt_question_id = $db->insertID();
		
		if(count($filed_type)>0)
		{
			for($i=0;$i<count($filed_type);$i++)
			{
				$sqlquest = "INSERT INTO innova_form_field set category_id='".$category_id."', prompt_question_id='".$prompt_question_id."', filed_type='".$filed_type[$i]."', filed_name='".$filed_name[$i]."', filed_value='".$filed_value[$i]."', filed_label='".$filed_label[$i]."', filed_sub_head='".$filed_sub_head[$i]."'";
				$db->query($sqlquest);
			}
		}
		
		
		//exit();
		return "success";
	}
	
	public function singlequestion($prompt_question_id)
	{
		$db = \Config\Database::connect();
		$query = $db->query("SELECT * FROM innova_prompt_question where prompt_question_id='".$prompt_question_id."'");
		$results = $query->getResult();
        return  $results;
	}
	
	public function singlequestionOption($prompt_question_id)
	{
		$db = \Config\Database::connect();
		$query = $db->query("SELECT * FROM innova_form_field where prompt_question_id='".$prompt_question_id."'");
		$results = $query->getResult();
        return  $results;
	}
	
	public function promptQuestionUpdate($promptquestionArray,$question_icon)
	{
		$db = \Config\Database::connect();
		
		$prompt_question_id=addslashes($promptquestionArray['prompt_question_id']);
		
		$category_id=addslashes($promptquestionArray['category_id']);
		$model_name=addslashes($promptquestionArray['model_name']);
		$question_title=addslashes($promptquestionArray['question_title']);
		$question_desc=addslashes($promptquestionArray['question_desc']);
		$question_prompt=addslashes($promptquestionArray['question_prompt']);
		$old_question_icon=$promptquestionArray['old_question_icon'];
		$question_image=$promptquestionArray['question_image'];
		
		if($question_icon!='')
		{
			$newName = $question_icon->getRandomName();
			$question_icon->move(ROOTPATH . 'uploads/questionicon',$newName);
		} 
		else 
		{ 
			if($old_question_icon == '') { $newName = ""; } else { $newName = $old_question_icon; }
		}
		
		$filed_type=$promptquestionArray['filed_type'];
		$filed_name=$promptquestionArray['filed_name'];
		$filed_value=$promptquestionArray['filed_value'];
		$filed_label=$promptquestionArray['filed_label'];
		$filed_sub_head=$promptquestionArray['filed_sub_head'];
		
		//print_r($filed_type);
		//print_r($filed_value); 
		
		
		$sql = "UPDATE innova_prompt_question set category_id='".$category_id."', model_name='".$model_name."', question_title='".$question_title."', question_desc='".$question_desc."', question_prompt='".$question_prompt."',question_icon='".$newName."',question_image='".$question_image."' where prompt_question_id = '".$prompt_question_id."'";
		$db->query($sql);
		
		if(count($filed_type)>0)
		{
			$sql_qst = "DELETE from innova_form_field where prompt_question_id='".$prompt_question_id."'";
			$res=$db->query($sql_qst);
		
			for($i=0;$i<count($filed_type);$i++)
			{
				$sqlquest = "INSERT INTO innova_form_field set category_id='".$category_id."', prompt_question_id='".$prompt_question_id."', filed_type='".$filed_type[$i]."', filed_name='".$filed_name[$i]."', filed_value='".$filed_value[$i]."', filed_label='".$filed_label[$i]."', filed_sub_head='".$filed_sub_head[$i]."'";
				$db->query($sqlquest);
			}
		}
		
		
		//exit();
		return "success";
	}
	
	
	
	

}
