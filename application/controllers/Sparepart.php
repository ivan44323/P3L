<?php

defined('BASEPATH') OR exit('No direct script access allowed');

	class Sparepart extends CI_Controller
	{
		public function __construct(){
	        parent::__construct();
	        $this->load->model("sparepart_model");
	        $this->load->library('form_validation');
		}
		
	    public function insert(){
	        $sparepart = $this->sparepart_model;
	        $validation = $this->form_validation;
			$validation->set_rules($sparepart->rules());
			
	        if ($validation->run()) {
	            $sparepart->insert();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
                redirect(site_url('Page/input_sparepart'));
	        }
		}

		public function edit($id = null)
		{
			$sparepart = $this->sparepart_model;
			$validation = $this->form_validation;
			$validation->set_rules($sparepart->rules());

			if ($validation->run()) {
				$sparepart->update();
				$this->session->set_flashdata('success', 'Berhasil disimpan');
				redirect(site_url('Page/input_sparepart'));
			}

			$data["sparepart_edit"] = $sparepart->getById($id);

			$data['sparepart'] = $this->sparepart_model->getAll();

			$data['sparepart_type'] = $this->sparepart_model->getAllTypeSparepart();
			
			$data['temp'] = 0;
			
			$data['content'] = 'Content/edit_sparepart';
			
			$this->load->view('Template/dashboard',$data);
		}
		
		public function delete($id=null)
		{
			if ($this->sparepart_model->delete($id)) {
				redirect(site_url('Page/input_sparepart'));
			}
		}

		public function search_sparepart()
		{
			$keyword = $this->input->post('keyword');

			$data['sparepart'] = $this->sparepart_model->search_sparepart($keyword);
			$data['search_keyword'] = $keyword;
    		$data['temp'] = 0;
    		$data['content'] = 'Content/input_sparepart';
    		$this->load->view('Template/dashboard',$data);

		}
	}

	

?>