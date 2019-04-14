<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class jasa_service_model extends CI_model{

		private $_table = "jasa_service";

		public $id_jasa_service;
		public $nama_jasa;
		public $harga_jual_jasa;
		public function rules(){

			return [
				/*[
					'field' => 'id_jasa_service',
					'label' => 'id_jasa_service',
					'rules' => 'required'
				],*/

				[
					'field' => 'nama_jasa',
					'label' => 'nama_jasa',
					'rules' => 'required'
				],
				
				[
					'field' => 'harga_jual_jasa',
					'label' => 'harga_jual_jasa',
					'rules' => 'required'
				]

			];
		}

		public function getAll(){

			return $this->db->get($this->_table)->result();
		}

		public function getById($id_jasa_service){
			
			return $this->db->get_where($this->_table, ["id_jasa_service" => $id_jasa_service])->row();
		}

		public function insert(){

			 $post = $this->input->post();

			 //$this->id_jasa_service = $post["id_jasa_service"];
			 $this->nama_jasa = $post["nama_jasa"];
			 $this->harga_jual_jasa = $post["harga_jual_jasa"];

			 $this->db->insert($this->_table, $this);
		}

		public function update()
		{
			$post = $this->input->post();
			
			$this->id_jasa_service = $post["id_jasa_service"];
			$this->nama_jasa = $post["nama_jasa"];
			$this->harga_jual_jasa = $post["harga_jual_jasa"];

			$this->db->update($this->_table, $this, array('id_jasa_service' => $post['id_jasa_service']));
		}

		public function delete($id)
		{
			return $this->db->delete($this->_table, array("id_jasa_service" => $id));
		}

		public function search_jasa_service($keyword)
		{
			$this->db->like('id_jasa_service',$keyword);
			$this->db->or_like('nama_jasa',$keyword);
			$this->db->or_like('harga_jual_jasa',$keyword);

			$result = $this->db->get('jasa_service')->result();

			return $result;
		}
















	}
?>