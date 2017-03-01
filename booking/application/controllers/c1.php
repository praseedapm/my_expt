<?php
/**
* 
*/
class C1 extends CI_Controller
{
	
	public function index()
	{
		if($this->m1->insert())
		{
		$this->load->view('a');
		}

	}
	public function selection()
	{
		$cx=$this->input->post('cx');
		$c=implode(',',$cx);
		$this->m1->selection($cx);
		{
			//redirect('c1/index');
			$this->load->view('a');
		}
	}
}