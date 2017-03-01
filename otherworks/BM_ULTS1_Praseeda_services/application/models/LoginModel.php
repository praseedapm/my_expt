<?php
class LoginModel extends CI_Model
{
	public function findUser($data)
	{
		//$query=$this->db->select('*')-> from('user_login_data')-> where($data);

		$queryResult=$this->db->select('*')-> from('user_login_data')-> where($data)
		->get();
		if($queryResult->num_rows()==1)
		{
			$res=$queryResult->result_array();
			//echo $res[0]['email'];
			$result=array('ResponseCode'=>200,'Msg'=>'Success!','FirstName'=>$res[0]['first_name'],'LastName'=>$res[0]['last_name'],'email'=>$res[0]['email'],'FirstName'=>$res[0]['first_name'],'Password');
		}
		else
		{
			$email_id=$data['email'];
			$queryResult=$this->db->select('*')->from('user_login_data')->where('email',$email_id)->get();
			if($queryResult->num_rows()==1)
			{
				$result=array('ResponseCode'=>500,'Msg'=>'Password is incorrect!');
			}
			else
			{
				$result=array('ResponseCode'=>404,'Msg'=>'Email or Password is not defined!');
			}

		}
		return $result;
	}

}

?>`