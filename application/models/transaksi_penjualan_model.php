<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class sparepart_model extends CI_model{

		private $_table = "stok_sparepart";

		public $id_sparepart;
		public $nama_sparepart;
		public $merk_sparepart;
		public $id_rak_sparepart;
		public $jumlah_sparepart;
		public $jumlah_min;
		public $harga_jual_sparepart;
		public $harga_beli_sparepart;
		public $id_type_sparepart;
		
		public function rules(){
			return [
				[
					'field' => 'id_sparepart',
					'label' => 'id_sparepart',
					'rules' => 'required'
				],

				[
					'field' => 'nama_sparepart',
					'label' => 'nama_sparepart',
					'rules' => 'required'
				],
				
				[
					'field' => 'merk_sparepart',
					'label' => 'merk_sparepart',
					'rules' => 'required'
				],

				[
					'field' => 'id_rak_sparepart',
					'label' => 'id_rak_sparepart',
					'rules' => 'required'
				],

				[
					'field' => 'jumlah_sparepart',
					'label' => 'jumlah_sparepart',
					'rules' => 'required'
				],				

				[
					'field' => 'jumlah_min',
					'label' => 'jumlah_min',
					'rules' => 'required'
				],

				[
					'field' => 'harga_jual_sparepart',
					'label' => 'harga_jual_sparepart',
					'rules' => 'required'
				],

				[
					'field' => 'harga_beli_sparepart',
					'label' => 'harga_beli_sparepart',
					'rules' => 'required'
				],

				[
					'field' => 'id_type_sparepart',
					'label' => 'id_type_sparepart',
					'rules' => 'required'
				]
			];
		}

		public function getAll(){

			$this->db->select('*');
			$this->db->from('stok_sparepart');
			$this->db->join('type_sparepart','stok_sparepart.id_type_sparepart=type_sparepart.id_type_sparepart','inner');
 
			$query = $this->db->get()->result();

			return $query;
		}

		public function getById($id_sparepart){
			
			return $this->db->get_where($this->_table, ["id_sparepart" => $id_sparepart])->row();
		}

		public function insert(){

			 $post = $this->input->post();

			 $this->id_sparepart = $post["id_sparepart"];
			 $this->nama_sparepart = $post["nama_sparepart"];
			 $this->merk_sparepart = $post["merk_sparepart"];
			 $this->id_rak_sparepart = $post["id_rak_sparepart"];
			 $this->jumlah_sparepart = $post["jumlah_sparepart"];
			 $this->jumlah_min = $post["jumlah_min"];
			 $this->harga_jual_sparepart = $post["harga_jual_sparepart"];
			 $this->harga_beli_sparepart = $post["harga_beli_sparepart"];
			 $this->id_type_sparepart = $post["id_type_sparepart"];
			 
			 $this->db->insert($this->_table, $this);

		}

		public function update()
		{
			 $post = $this->input->post();
			
			 $this->id_sparepart = $post["id_sparepart"];
			 $this->nama_sparepart = $post["nama_sparepart"];
			 $this->merk_sparepart = $post["merk_sparepart"];
			 $this->id_rak_sparepart = $post["id_rak_sparepart"];
			 $this->jumlah_sparepart = $post["jumlah_sparepart"];
			 $this->jumlah_min = $post["jumlah_min"];
			 $this->harga_jual_sparepart = $post["harga_jual_sparepart"];
			 $this->harga_beli_sparepart = $post["harga_beli_sparepart"];
			 $this->id_type_sparepart = $post["id_type_sparepart"];

			$this->db->update($this->_table, $this, array('id_sparepart' => $post['id_sparepart']));
		}

		public function delete($id)
		{
			return $this->db->delete($this->_table, array("id_sparepart" => $id));
		}

		public function search_sparepart($keyword)
		{
			 $this->id_sparepart = $post["id_sparepart"];
			 $this->nama_sparepart = $post["nama_sparepart"];
			 $this->merk_sparepart = $post["merk_sparepart"];
			 $this->id_rak_sparepart = $post["id_rak_sparepart"];
			 $this->jumlah_sparepart = $post["jumlah_sparepart"];
			 $this->jumlah_min = $post["jumlah_min"];
			 $this->harga_jual_sparepart = $post["harga_jual_sparepart"];
			 $this->harga_beli_sparepart = $post["harga_beli_sparepart"];
			 $this->id_type_sparepart = $post["id_type_sparepart"];

			$result = $this->db->get('stok_sparepart')->result();

			return $result;
		}

		public function getAllTypeSparepart(){

			$this->db->select('*');
			$this->db->from('type_sparepart');
 
			$query = $this->db->get()->result();

			return $query;
		}

	}
?>