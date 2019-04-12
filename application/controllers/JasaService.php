<?php

defined('BASEPATH') OR exit('No direct script access allowed');

	class JasaService extends CI_Controller
	{
		public function __construct(){
	        parent::__construct();
	        $this->load->model("jasa_service_model");
	        $this->load->library('form_validation');
	    }

	    public function insert(){
	        $jasa_service = $this->jasa_service_model;
	        $validation = $this->form_validation;
	        $validation->set_rules($jasa_service->rules());

	        if ($validation->run()) {
	            $jasa_service->insert();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
                redirect(site_url('Page/input_jasa_service'));
	        }
		}
		
		public function edit($id = null)
		{
			$jasa_service = $this->jasa_service_model;
			$validation = $this->form_validation;
			$validation->set_rules($jasa_service->rules());

			if ($validation->run()) {
				$jasa_service->update();
				$this->session->set_flashdata('success', 'Berhasil disimpan');
				redirect(site_url('Page/input_jasa_service'));
			}

			$data["service_edit"] = $jasa_service->getById($id);

			$data['jasa_service'] = $this->jasa_service_model->getAll();
			
			$data['temp'] = 0;
			
			$data['content'] = 'Content/edit_jasa_service';
			
			$this->load->view('Template/dashboard',$data);
		}
		
		public function delete($id=null)
		{
			if ($this->jasa_service_model->delete($id)) {
				redirect(site_url('Page/input_jasa_service'));
			}
		}

		public function search_jasa_service()
		{
			$keyword = $this->input->post('keyword');

			$data['jasa_service'] = $this->jasa_service_model->search_jasa_service($keyword);
			$data['search_keyword'] = $keyword;
    		$data['temp'] = 0;
    		$data['content'] = 'Content/input_jasa_service';
    		$this->load->view('Template/dashboard',$data);

		}
	}
	

	

?>