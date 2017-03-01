<?php
/**
* 
*/
class M1 extends CI_Model
{
	public function insert()
	{
		$r=$this->db->select('*')->from('rooms')->get()->result_array();
		if(empty($r))
		{	
		$i=1;
		while($i<=10)
		{
		$ar = array('Code' => 'c'.$i);
		$this->db->insert('rooms',$ar);
		$i=$i+1;
		}
		return true;
		}
		else
		{
			return true;
		}
}

	public function selection($cx)
	{
		
		$i=0;

		//echo count($cx);
		
		 while($i<count($cx))
		 {
		 	$array= array('Status' => 'not booked', 'Code'=> $cx[$i]);
		 	$query=$this->db->select('Code')->from('rooms')->where($array)->get()->result_array();

		 	
		 // if (!empty($cx[$i]))
		 // {
		 	if(empty($query))
		 	{
		 		echo $cx[$i]. " is already booked..<br> Please select another.<br>";
				return false;
		 	}
		 	else if($cx[$i] =$query[0])
		 	{
		 	$a = array('Status' => 'booked' );
		 	$c=implode(',', $cx[$i]);
			$this->db->where('Code',$c);
		 	$this->db->update('rooms', $a);
		 	echo  "Successfully booked  ".$c."<br>";
		 	}
		 
		
		 
		
		
		//echo $cx[$i];
		//echo $cx[$i+1];
		$i=$i+1;

		}
		return true;
	}
}