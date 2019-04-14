<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class transaksi_model extends CI_model{

		private $_table = "detail_transaksi";

		public $id_transaksi;
		public $qty_transaksi;
		public $total_transaksi;
		public $id_sparepart;
		public $id_jasa_service;
		public $id_pegawai;
		public $id_detail_transaksi;
		public $no_polisi;
		public $status_transaksi;
		public $cek_transaksi = "diproses";
		
		public function rules(){
			return [
				[
					'field' => 'id_transaksi',
					'label' => 'id_transaksi',
					'rules' => 'required'
				],

				[
					'field' => 'qty_transaksi',
					'label' => 'qty_transaksi',
					'rules' => 'required'
				],
				
				[
					'field' => 'total_transaksi',
					'label' => 'total_transaksi',
					'rules' => 'required'
				],

				[
					'field' => 'id_sparepart',
					'label' => 'id_sparepart',
					'rules' => 'required'
				],

				[
					'field' => 'id_jasa_service',
					'label' => 'id_jasa_service',
					'rules' => 'required'
				],				

				[
					'field' => 'id_pegawai',
					'label' => 'id_pegawai',
					'rules' => 'required'
				],

				[
					'field' => 'id_detail_transaksi',
					'label' => 'id_detail_transaksi',
					'rules' => 'required'
				],

				[
					'field' => 'no_polisi',
					'label' => 'no_polisi',
					'rules' => 'required'
				],

				[
					'field' => 'status_transaksi',
					'label' => 'status_transaksi',
					'rules' => 'required'
				]
			];
		}

		public function getAll(){

			$this->db->select('*');
			$this->db->from('detail_transaksi');
			$this->db->join('stok_sparepart','detail_transaksi.id_sparepart=stok_sparepart.id_sparepart','inner');
			$this->db->join('jasa_service','detail_transaksi.id_jasa_service=jasa_service.id_jasa_service','inner');
			$this->db->join('pegawai','detail_transaksi.id_pegawai=pegawai.id_pegawai','inner');
			$this->db->join('kend_customer','detail_transaksi.no_polisi=kend_customer.no_polisi','inner');
			$this->db->where('detail_transaksi.status',$cek_transaksi);
			
			$query = $this->db->get()->result();

			return $query;
		}

		public function getById($id_transaksi){
			
			return $this->db->get_where($this->_table, ["id_transaksi" => $id_transaksi])->row();
		}

		public function insert(){

			 $post = $this->input->post();

			 $this->id_transaksi = $post["id_transaksi"];
			 $this->qty_transaksi = $post["qty_transaksi"];
			 $this->total_transaksi = $post["total_transaksi"];
			 $this->id_sparepart = $post["id_sparepart"];
			 $this->id_jasa_service = $post["id_jasa_service"];
			 $this->id_pegawai = $post["id_pegawai"];
			 $this->id_detail_transaksi = $post["id_detail_transaksi"];
			 $this->no_polisi = $post["no_polisi"];
			 
			 $this->db->insert($this->_table, $this);

		}

		public function update()
		{
			 $post = $this->input->post();
			
			 $this->id_transaksi = $post["id_transaksi"];
			 $this->qty_transaksi = $post["qty_transaksi"];
			 $this->total_transaksi = $post["total_transaksi"];
			 $this->id_sparepart = $post["id_sparepart"];
			 $this->id_jasa_service = $post["id_jasa_service"];
			 $this->id_pegawai = $post["id_pegawai"];
			 $this->id_detail_transaksi = $post["id_detail_transaksi"];
			 $this->no_polisi = $post["no_polisi"];

			$this->db->update($this->_table, $this, array('id_transaksi' => $post['id_transaksi']));
		}

		public function delete($id)
		{
			return $this->db->delete($this->_table, array("id_transaksi" => $id));
		}

		public function search_transaksi($keyword)
		{
			 $this->id_transaksi = $post["id_transaksi"];
			 $this->qty_transaksi = $post["qty_transaksi"];
			 $this->total_transaksi = $post["total_transaksi"];
			 $this->id_sparepart = $post["id_sparepart"];
			 $this->id_jasa_service = $post["id_jasa_service"];
			 $this->id_pegawai = $post["id_pegawai"];
			 $this->id_detail_transaksi = $post["id_detail_transaksi"];
			 $this->no_polisi = $post["no_polisi"];

			$result = $this->db->get('detail_transaksi')->result();

			return $result;
		}

		public function getAllNamaSparepart(){

			$this->db->select('*');
			$this->db->from('stok_sparepart');
 
			$query = $this->db->get()->result();

			return $query;
		}

		public function getAllNamaJasaService(){

			$this->db->select('*');
			$this->db->from('jasa_service');
 
			$query = $this->db->get()->result();

			return $query;
		

		}	

		public function getAllNamaPegawwai(){

			$this->db->select('*');
			$this->db->from('pegawai');
 
			$query = $this->db->get()->result();

			return $query;
		}

		public function getAllNoPolisi(){

			$this->db->select('*');
			$this->db->from('kend_customer');
 
			$query = $this->db->get()->result();

			return $query;
		}
	}
?>