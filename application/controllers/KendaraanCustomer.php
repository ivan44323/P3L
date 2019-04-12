<?php

defined('BASEPATH') OR exit('No direct script access allowed');

	class KendaraanCustomer extends CI_Controller
	{
		public function __construct(){
	        parent::__construct();
	        $this->load->model("kendaraan_customer_model");
			$this->load->library('form_validation');
			$this->load->database();
		}
		
	    public function insert(){
	        $kendaraancustomer = $this->kendaraan_customer_model;
	        $validation = $this->form_validation;
			$validation->set_rules($kendaraancustomer->rules());
			
	        if ($validation->run()) {
	            $kendaraancustomer->insert();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
                redirect(site_url('Page/input_kendaraan_customer'));
	        }
		}

		public function edit($id = null)
		{
			$kendaraancustomer = $this->kendaraan_customer_model;
			$validation = $this->form_validation;
			$validation->set_rules($kendaraancustomer->rules());

			if ($validation->run()) {
				$kendaraancustomer->update();
				$this->session->set_flashdata('success', 'Berhasil disimpan');
				redirect(site_url('Page/input_kendaraan_customer'));
			}

			$data["kendaraancustomer_edit"] = $kendaraancustomer->getById($id);

			$data['kendaraancustomer'] = $this->kendaraan_customer_model->getAll();

			$data['kendaraancustomer_type_motor'] = $this->kendaraan_customer_model->getAllTypeMotor();

			$data['kendaraancustomer_customer'] = $this->kendaraan_customer_model->getAllCustomer();
			
			$data['temp'] = 0;
			
			$data['content'] = 'Content/edit_kendaraan_customer';
			
			$this->load->view('Template/dashboard',$data);
		}
		
		public function delete($id=null)
		{
			if ($this->kendaraan_customer_model->delete($id)) {
				redirect(site_url('Page/input_kendaraan_customer'));
			}
		}

		public function search_kendaraan_customer()
		{
			$keyword = $this->input->post('keyword');

			$data['kendaraancustomer'] = $this->kendaraan_customer_model->search_kendaraan_customer($keyword);
			$data['search_keyword'] = $keyword;
    		$data['temp'] = 0;
    		$data['content'] = 'Content/input_kendaraan_customer';
    		$this->load->view('Template/dashboard',$data);

		}

		function get_autocompleteMotor(){
			if (isset($_GET['term'])) {
				  $result = $this->kendaraan_customer_model->autocompleteMotor($_GET['term']);
				   if (count($result) > 0) {
				foreach ($result as $row)
					 $arr_result[] = array(
						'ID_TYPE'	=> $row->ID_TYPE,
						'NAMA_TYPE'	=> $row->NAMA_TYPE
					);
					 echo json_encode($arr_result);
				   }
			}
		}
	}

	

?>