<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class customer_model extends CI_model{

		private $_table = "customer";

		public $id_customer;
		public $nama_customer;
		public $alamat_customer;
		public $telepon_customer;
		
		public function rules(){
			return [
				/*[
					'field' => 'id_customer',
					'label' => 'id_customer',
					'rules' => 'required'
				],*/

				[
					'field' => 'nama_customer',
					'label' => 'nama_customer',
					'rules' => 'required'
				],
				
				[
					'field' => 'alamat_customer',
					'label' => 'alamat_customer',
					'rules' => 'required'
				],

				[
					'field' => 'telepon_customer',
					'label' => 'telepon_customer',
					'rules' => 'required'
				]

			];
		}

		public function getAll(){

			return $this->db->get($this->_table)->result();
		}

		public function getById($id_customer){
			
			return $this->db->get_where($this->_table, ["id_customer" => $id_customer])->row();
		}

		public function insert(){

			 $post = $this->input->post();

			 //$this->id_customer = $post["id_customer"];
			 $this->nama_customer = $post["nama_customer"];
			 $this->alamat_customer = $post["alamat_customer"];
			 $this->telepon_customer = $post["telepon_customer"];
			

			 $this->db->insert($this->_table, $this);

		}

		public function update()
		{
			$post = $this->input->post();
			
			 $this->id_customer = $post["id_customer"];
			 $this->nama_customer = $post["nama_customer"];
			 $this->alamat_customer = $post["alamat_customer"];
			 $this->telepon_customer = $post["telepon_customer"];

			$this->db->update($this->_table, $this, array('id_customer' => $post['id_customer']));
		}

		public function delete($id)
		{
			return $this->db->delete($this->_table, array("id_customer" => $id));
		}

		public function search_customer($keyword)
		{
			$this->db->like('id_customer',$keyword);
			$this->db->or_like('nama_customer',$keyword);
			$this->db->or_like('alamat_customer',$keyword);
			$this->db->or_like('telepon_customer',$keyword);

			$result = $this->db->get('customer')->result();

			return $result;
		}

	}
?>