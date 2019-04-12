<?php

defined('BASEPATH') OR exit('No direct script access allowed');

	class Supplier extends CI_Controller
	{
		public function __construct(){
	        parent::__construct();
	        $this->load->model("supplier_model");
	        $this->load->library('form_validation');
	    }

	    public function insert(){
	        $supplier = $this->supplier_model;
	        $validation = $this->form_validation;
	        $validation->set_rules($supplier->rules());

	        if ($validation->run()) {
	            $supplier->insert();
				$this->session->set_flashdata('success', 'Berhasil disimpan');
				redirect(site_url('Page/input_supplier'));
	        }
		}
		
		public function edit($id = null)
		{
			$supplier = $this->supplier_model;
			$validation = $this->form_validation;
			$validation->set_rules($supplier->rules());

			if ($validation->run()) {
				$supplier->update();
				$this->session->set_flashdata('success', 'Berhasil disimpan');
				redirect(site_url('Page/input_supplier'));
			}

			$data["supplier_edit"] = $supplier->getById($id);

			$data['supplier'] = $this->supplier_model->getAll();
			
			$data['temp'] = 0;
			
			$data['content'] = 'Content/edit_supplier';
			
			$this->load->view('Template/dashboard',$data);
		}
		
		public function delete($id=null)
		{
			if ($this->supplier_model->delete($id)) {
				redirect(site_url('Page/input_supplier'));
			}
		}

		public function search_supplier()
		{
			$keyword = $this->input->post('keyword');

			$data['supplier'] = $this->supplier_model->search_supplier($keyword);
			$data['search_keyword'] = $keyword;
    		$data['temp'] = 0;
    		$data['content'] = 'Content/input_supplier';
    		$this->load->view('Template/dashboard',$data);

		}
	}

	

?>