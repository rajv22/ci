<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Opening extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->database();
		$this->load->model('opening_model');
	  }

	public function add()
	{
                    $this->opening_model->add();
					$this->session->set_flashdata('success', 'Details added successfully');
					$data['data']=array('view'=>'opening/add_opening');				           
	}
	public function view()
	{		
        $cat= $this->opening_model->get();
	  	$data['category'] = $cat;
		$data['data']=array('view'=>'opening/view_opening');
		$this->load->view('backend/pagination_template',$data);

	}



	public function del()
	{
		$id =  $this->uri->segment(3);
		$this->opening_model->del($id);
		$this->session->set_flashdata('success', 'Details deleted successfully');
		redirect('opening/view');
		
	}




	// public function view()
	// {		
 //        $cat =  $this->setting_model->get();	
	// 	$data['data']=array('view'=>'setting/faq_view','category'=>$cat);	
	// 	$this->load->view('backend/pagination_template',$data);
 //       }




}