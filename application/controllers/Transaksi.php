<?php

defined('BASEPATH') OR exit('No direct script access allowed');

	class Transaksi extends CI_Controller
	{
		public function __construct(){
	        parent::__construct();
	        $this->load->model("transaksi_penjualan_model");
	        $this->load->library('form_validation');
		}
		
	    public function insert(){
	        $transaksi = $this->transaksi_penjualan_model;
	        $validation = $this->form_validation;
			$validation->set_rules($transaksi->rules());
			
	        if ($validation->run()) {
	            $transaksi->insert();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
                redirect(site_url('Page/transaksi_penjualan'));
	        }
		}

		public function edit($id = null)
		{
			$transaksi = $this->transaksi_penjualan_model;
			$validation = $this->form_validation;
			$validation->set_rules($transaksi->rules());

			if ($validation->run()) {
				$transaksi->update();
				$this->session->set_flashdata('success', 'Berhasil disimpan');
				redirect(site_url('Page/transaksi_penjualan'));
			}

			$data["transaksi_edit"] = $transaksi_jasa->getById($id);

			$data['transaksi'] = $this->transaksi_penjualan_model->getAll();

			$data['sparepart_nama'] = $this->transaksi_penjualan_model->getAllNamaSparepart();
            
            $data['jasaservice_nama'] = $this->transaksi_penjualan_model->getAllNamaJasaService();

			$data['pegawai_nama'] = $this->transaksi_penjualan_model->getAllNamaPegawai();
			
			$data['polisi_no'] = $this->transaksi_penjualan_model->getAllNoPolisi();
            
			$data['temp'] = 0;
			
			$data['content'] = 'Content/edit_transaksi_penjualan';
			
			$this->load->view('Template/dashboard',$data);
		}
		
		public function delete($id=null)
		{
			if ($this->transaksi_model->delete($id)) {
				redirect(site_url('Page/transaksi_penjualan'));
			}
		}

		public function search_transaksi()
		{
			$keyword = $this->input->post('keyword');

			$data['transaksi'] = $this->transaksi_model->search_transaksi($keyword);
			$data['search_keyword'] = $keyword;
    		$data['temp'] = 0;
    		$data['content'] = 'Content/transaksi_penjualan';
    		$this->load->view('Template/dashboard',$data);

		}
	}

	

?>