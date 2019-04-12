<?php

defined('BASEPATH') OR exit('No direct script access allowed');

	class Customer extends CI_Controller
	{
		public function __construct(){
	        parent::__construct();
	        $this->load->model("customer_model");
	        $this->load->library('form_validation');
		}
		
	    public function insert(){
	        $customer = $this->customer_model;
	        $validation = $this->form_validation;
	        $validation->set_rules($customer->rules());

	        if ($validation->run()) {
	            $customer->insert();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
                redirect(site_url('Page/input_customer'));
	        }
		}

		public function edit($id = null)
		{
			$customer = $this->customer_model;
			$validation = $this->form_validation;
			$validation->set_rules($customer->rules());

			if ($validation->run()) {
				$customer->update();
				$this->session->set_flashdata('success', 'Berhasil disimpan');
				redirect(site_url('Page/input_customer'));
			}

			$data["customer_edit"] = $customer->getById($id);

			$data['customer'] = $this->customer_model->getAll();
			
			$data['temp'] = 0;
			
			$data['content'] = 'Content/edit_customer';
			
			$this->load->view('Template/dashboard',$data);
		}
		
		public function delete($id=null)
		{
			if ($this->customer_model->delete($id)) {
				redirect(site_url('Page/input_customer'));
			}
		}

		public function search_customer()
		{
			$keyword = $this->input->post('keyword');

			$data['customer'] = $this->customer_model->search_customer($keyword);
			$data['search_keyword'] = $keyword;
    		$data['temp'] = 0;
    		$data['content'] = 'Content/input_customer';
    		$this->load->view('Template/dashboard',$data);

		}
	}

	

?>