<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class supplier_model extends CI_model{

		private $_table = "supplier";

		public $id_supplier;
		public $nama_supplier;
		public $alamat_supplier;
		public $telp;
		public $nama_sales;
		public $telepon_sales;

		public function rules(){

			return [
				/*[
					'field' => 'id_supplier',
					'label' => 'id_supplier',
					'rules' => 'required'
				],*/

				[
					'field' => 'nama_supplier',
					'label' => 'nama_supplier',
					'rules' => 'required'
				],
				
				[
					'field' => 'alamat_supplier',
					'label' => 'alamat_supplier',
					'rules' => 'required'
				],

				[
					'field' => 'telp',
					'label' => 'telp',
					'rules' => 'required'
				],

				[
					'field' => 'nama_sales',
					'label' => 'nama_sales',
					'rules' => 'required'
				],

				[
					'field' => 'telepon_sales',
					'label' => 'telepon_sales',
					'rules' => 'required'
				]
			];
		}

		public function getAll(){

			return $this->db->get($this->_table)->result();
		}

		public function getById($id_supplier){
			
			return $this->db->get_where($this->_table, ["id_supplier" => $id_supplier])->row();
		}

		public function insert(){

			 $post = $this->input->post();

			 //$this->id_supplier = $post["id_supplier"];
			 $this->nama_supplier = $post["nama_supplier"];
			 $this->alamat_supplier = $post["alamat_supplier"];
			 $this->telp = $post["telp"];
			 $this->nama_sales = $post["nama_sales"];
			 $this->telepon_sales = $post["telepon_sales"];

			 $this->db->insert($this->_table, $this);

		}

		public function update()
		{
			$post = $this->input->post();
			
			 $this->id_supplier = $post["id_supplier"];
			 $this->nama_supplier = $post["nama_supplier"];
			 $this->alamat_supplier = $post["alamat_supplier"];
			 $this->telp = $post["telp"];
			 $this->nama_sales = $post["nama_sales"];
			 $this->telepon_sales = $post["telepon_sales"];


			$this->db->update($this->_table, $this, array('id_supplier' => $post['id_supplier']));
		}

		public function delete($id)
		{
			return $this->db->delete($this->_table, array("id_supplier" => $id));
		}

		public function search_supplier($keyword)
		{
			$this->db->like('id_supplier',$keyword);
			$this->db->or_like('nama_supplier',$keyword);
			$this->db->or_like('alamat_supplier',$keyword);
			$this->db->or_like('telp',$keyword);
			$this->db->or_like('nama_sales',$keyword);
			$this->db->or_like('telepon_sales',$keyword);

			$result = $this->db->get('supplier')->result();

			return $result;
		}

	}
?>