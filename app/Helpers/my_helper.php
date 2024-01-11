<?php
function current_datetime()
{ 
	date_default_timezone_set('Asia/kolkata');
	$current_datetime=date('Y-m-d H:i:s');
	return $current_datetime;
}

function current_date()
{ 
	date_default_timezone_set('Asia/kolkata');
	$current_datetime=date('Y-m-d');
	return $current_datetime;
}

function days_in_month($month, $year) 
{ 
	return $month == 2 ? ($year % 4 ? 28 : ($year % 100 ? 29 : ($year % 400 ? 28 : 29))) : (($month - 1) % 7 % 2 ? 30 : 31); 
}

function getWeeks($date, $rollover)
{
	$cut = substr($date, 0, 8);
	$daylen = 86400;

	$timestamp = strtotime($date);
	$first = strtotime($cut . "00");
	$elapsed = ($timestamp - $first) / $daylen;

	$weeks = 1;

	for ($i = 1; $i <= $elapsed; $i++)
	{
		$dayfind = $cut . (strlen($i) < 2 ? '0' . $i : $i);
		$daytimestamp = strtotime($dayfind);

		$day = strtolower(date("l", $daytimestamp));

		if($day == strtolower($rollover))  $weeks ++;
	}

	return $weeks;
}

function randomPassword() 
{
	$alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
	$pass = array(); 
	$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
	for ($i = 0; $i < 8; $i++)
	{
		$n = rand(0, $alphaLength);
		$pass[] = $alphabet[$n];
	}
	return implode($pass); //turn the array into a string
}

function pwdencypt($pwd)  /* //==Password Encription==// */
{
	$str_squr="!l_e5t4s-t_r!y%to".$pwd."%h1a4c3k@a8g9a6i6n0";
	$enckey="$%@-fa^%&$44$#%@svoid^&%^$#%@~@#@f-hack-cast-*&(&*#@$@";
	$mk1=md5(sha1($str_squr));
	$mk2=md5(sha1($mk1));
	$mk3=md5(sha1($mk2));
	$mk4=md5(sha1($mk3));
	$hackpw=$mk3."don't".$mk1."get".$mk2."angry".$mk4."me";
	$hackpw=md5(sha1($hackpw).$enckey);
	return $hackpw;
}

function memberInformation($member_id) 
{
	$db = \Config\Database::connect();
	$query = $db->query("SELECT * FROM innova_member where member_id='".$member_id."'");
	$results = $query->getResult();
	return $results;
}

function memberPayment($member_id) 
{
	$db = \Config\Database::connect();
	$current_date = current_date();
	
	$query = $db->query("SELECT * FROM innova_member where member_id='".$member_id."'");
	$results = $query->getResult();
	
	$payment_status = $results[0]->payment_status;
	$subscription_type = $results[0]->subscription_type;
	$end_date = $results[0]->end_date;
	
	if($current_date <= $end_date && $payment_status == 'Y')
	{
		$message = "Active"; 
	}
	else
	{
		$message = "inactive"; 
		$sql = "UPDATE innova_member set payment_status='N',subscription_status='Inactive' where member_id= '".$member_id."'";
		$db->query($sql);
		
	}
					
	return $message;
}

function subscriptionInfo() 
{
	$db = \Config\Database::connect();
	
	$array = array();
	
	$query = $db->query("SELECT * FROM innova_subscription where subscription_id='1'");
	$results = $query->getResult();
	$array['basic_price'] = $results[0]->subscription_amt;
	
	$pre_query = $db->query("SELECT * FROM innova_subscription where subscription_id='2'");
	$pre_results = $pre_query->getResult();
	$array['premium_price'] = $pre_results[0]->subscription_amt;
	
	$elite_query = $db->query("SELECT * FROM innova_subscription where subscription_id='3'");
	$elite_results = $elite_query->getResult();
	$array['elite_price'] = $elite_results[0]->subscription_amt;
	
	$custom_query = $db->query("SELECT * FROM innova_subscription where subscription_id='4'");
	$custom_results = $custom_query->getResult();
	$array['custom_price'] = $custom_results[0]->subscription_amt;
	
	return $array;
}

?>