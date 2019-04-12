<?php

defined('BASEPATH') OR exit('No direct script access allowed');

	class Pegawai extends CI_Controller
	{
		public function __construct(){
	        parent::__construct();
	        $this->load->model("pegawai_model");
	        $this->load->library('form_validation');
		}
		
	    public function insert(){
	        $pegawai = $this->pegawai_model;
	        $validation = $this->form_validation;
			$validation->set_rules($pegawai->rules());
			
	        if ($validation->run()) {
	            $pegawai->insert();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
                redirect(site_url('Page/input_pegawai'));
	        }
		}

		public function edit($id = null)
		{
			$pegawai = $this->pegawai_model;
			$validation = $this->form_validation;
			$validation->set_rules($pegawai->rules());

			if ($validation->run()) {
				$pegawai->update();
				$this->session->set_flashdata('success', 'Berhasil disimpan');
				redirect(site_url('Page/input_pegawai'));
			}

			$data["pegawai_edit"] = $pegawai->getById($id);

			$data['pegawai'] = $this->pegawai_model->getAll();

			$data['pegawai_role'] = $this->pegawai_model->getAllRole();
			
			$data['temp'] = 0;
			
			$data['content'] = 'Content/edit_pegawai';
			
			$this->load->view('Template/dashboard',$data);
		}
		
		public function delete($id=null)
		{
			if ($this->pegawai_model->delete($id)) {
				redirect(site_url('Page/input_pegawai'));
			}
		}

		public function search_pegawai()
		{
			$keyword = $this->input->post('keyword');

			$data['pegawai'] = $this->pegawai_model->search_pegawai($keyword);
			$data['search_keyword'] = $keyword;
    		$data['temp'] = 0;
    		$data['content'] = 'Content/input_pegawai';
    		$this->load->view('Template/dashboard',$data);

		}
	}

	

?>