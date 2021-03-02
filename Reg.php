<?php

	class Reg extends CI_Controller
	{
		
		public function register()
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('last_name','Last Name','required');
			$this->form_validation->set_rules('phone_no','Phone No','required');
			$this->form_validation->set_rules('email','Email','required|is_unique[users.email]');
			$this->form_validation->set_rules('password','Password','required');

			if($this->form_validation->run() == false){

				$this->load->view('register');

			}else{
				//store in db
			

			$this->load->model('Reg_model');
			$formArray = array();
			$formArray['first_name']=$this->input->post('first_name');
			$formArray['last_name']=$this->input->post('last_name');
			$formArray['phone']=$this->input->post('phone');
			$formArray['email']=$this->input->post('email');
			$formArray['password']=password_hash($this->input->post('password'),PASSWORD_BCRYPT);
			$formArray['created_at'] = date('Y-m-d h:i:s');
			
			$this->Reg_model->create($formArray); 

			$this->session->set_flashdata('msg','Your massage has been created succesfully');

			redirect(Base_url().'index.php/Reg/register');

			}

			
		}


		public function login(){
			$this->load->view('login');


		}
		
	}

?>