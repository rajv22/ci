<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Insert extends CI_Controller {
// For data insertion
public function index(){
//Setting validation rules
$this->form_validation->set_rules('firstname','First Name','required|alpha');
$this->form_validation->set_rules('lastname','Last Name','required|alpha');
$this->form_validation->set_rules('emailid','Email id','required|valid_email');
$this->form_validation->set_rules('contactno','Contact Number','required|numeric|exact_length[10]');
$this->form_validation->set_rules('address','Address','required');
if($this->form_validation->run()){
$fname=$this->input->post('firstname');
$lname=$this->input->post('lastname');
$email=$this->input->post('emailid');
$cntno=$this->input->post('contactno');
$adrss=$this->input->post('address');
//loading model
$this->load->model('Insert_Model');
$this->Insert_Model->insertdata($fname,$lname,$email,$cntno,$adrss);
$this->load->view('insert');
} else {
$this->load->view('insert');
}
}
}