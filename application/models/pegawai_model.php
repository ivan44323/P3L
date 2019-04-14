<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class pegawai_model extends CI_model{

		private $_table = "pegawai";

		public $id_pegawai;
		public $id_role;
		public $nama_pegawai;
		public $alamat_pegawai;
		public $telepon_pegawai;
		public $tgl_lahir_pegawai;
		public $gaji_pegawai;
		public $username;
		public $password;
		
		public function rules(){
			return [
				/*[
					'field' => 'id_pegawai',
					'label' => 'id_pegawai',
					'rules' => 'required'
				],*/

				[
					'field' => 'id_role',
					'label' => 'id_role',
					'rules' => 'required'
				],
				
				[
					'field' => 'nama_pegawai',
					'label' => 'nama_pegawai',
					'rules' => 'required'
				],

				[
					'field' => 'alamat_pegawai',
					'label' => 'alamat_pegawai',
					'rules' => 'required'
				],

				[
					'field' => 'telepon_pegawai',
					'label' => 'telepon_pegawai',
					'rules' => 'required'
				],

				[
					'field' => 'tgl_lahir_pegawai',
					'label' => 'tgl_lahir_pegawai',
					'rules' => 'required'
				],

				[
					'field' => 'gaji_pegawai',
					'label' => 'gaji_pegawai',
					'rules' => 'required'
				],

				[
					'field' => 'username',
					'label' => 'username',
					'rules' => 'required'
				],

				[
					'field' => 'password',
					'label' => 'password',
					'rules' => 'required'
				]

			];
		}

		public function getAll(){

			$this->db->select('*');
			$this->db->from('pegawai');
			$this->db->join('role','role.id_role=pegawai.id_role','inner');
 
			$query = $this->db->get()->result();

			return $query;
		}

		public function getById($id_pegawai){
			
			return $this->db->get_where($this->_table, ["id_pegawai" => $id_pegawai])->row();
		}

		public function insert(){

			 $post = $this->input->post();

			 //$this->id_pegawai = $post["id_pegawai"];
			 $this->id_role = $post["id_role"];
			 $this->nama_pegawai = $post["nama_pegawai"];
			 $this->alamat_pegawai = $post["alamat_pegawai"];
			 $this->telepon_pegawai = $post["telepon_pegawai"];
			 $this->tgl_lahir_pegawai = $post["tgl_lahir_pegawai"];
			 $this->gaji_pegawai = $post["gaji_pegawai"];
			 $this->username = $post["username"];
			 $this->password = $post["password"];
			 
			 $this->db->insert($this->_table, $this);

		}

		public function update()
		{
			 $post = $this->input->post();
			
			 $this->id_pegawai = $post["id_pegawai"];
			 $this->id_role = $post["id_role"];
			 $this->nama_pegawai = $post["nama_pegawai"];
			 $this->alamat_pegawai = $post["alamat_pegawai"];
			 $this->telepon_pegawai = $post["telepon_pegawai"];
			 $this->tgl_lahir_pegawai = $post["tgl_lahir_pegawai"];
			 $this->gaji_pegawai = $post["gaji_pegawai"];
			 $this->username = $post["username"];
			 $this->password = $post["password"];

			$this->db->update($this->_table, $this, array('id_pegawai' => $post['id_pegawai']));
		}

		public function delete($id)
		{
			return $this->db->delete($this->_table, array("id_pegawai" => $id));
		}

		public function search_pegawai($keyword)
		{
			$this->db->like('id_pegawai',$keyword);
			$this->db->or_like('id_role',$keyword);
			$this->db->or_like('nama_pegawai',$keyword);
			$this->db->or_like('alamat_pegawai',$keyword);
			$this->db->or_like('telepon_pegawai',$keyword);
			$this->db->or_like('tgl_lahir_pegawai',$keyword);
			$this->db->or_like('gaji_pegawai',$keyword);
			$this->db->or_like('username',$keyword);
			$this->db->or_like('password',$keyword);

			$result = $this->db->get('pegawai')->result();

			return $result;
		}

		public function getAllRole(){

			$this->db->select('*');
			$this->db->from('role');
 
			$query = $this->db->get()->result();

			return $query;
		}

	}
?>