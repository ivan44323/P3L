<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class kendaraan_customer_model extends CI_model{

		private $_table = "kend_customer";

		public $no_polisi;
		public $id_customer;
		public $id_type;
		
		public function rules(){
			return [
				[
					'field' => 'no_polisi',
					'label' => 'no_polisi',
					'rules' => 'required'
				],

				[
					'field' => 'id_customer',
					'label' => 'id_customer',
					'rules' => 'required'
				],
				
				[
					'field' => 'id_type',
					'label' => 'id_type',
					'rules' => 'required'
				]

			];
		}

		public function getAll(){

			$this->db->select('*');
			$this->db->from('kend_customer');
			$this->db->join('type_motor','kend_customer.id_type=type_motor.id_type','inner');
			$this->db->join('customer','kend_customer.id_customer=customer.id_customer','inner');

			$query = $this->db->get()->result();

			return $query;
		}

		public function getById($no_polisi){

			$this->db->select('*');
			$this->db->from('kend_customer');
			$this->db->join('type_motor','kend_customer.id_type=type_motor.id_type','inner');
			$this->db->join('customer','kend_customer.id_customer=customer.id_customer','inner');
			$this->db->where('kend_customer.no_polisi',$no_polisi);
			
			return $query = $this->db->get()->row();
		}

		public function insert(){

			 $post = $this->input->post();

			 $this->no_polisi = $post["no_polisi"];
			 $this->id_customer = $post["id_customer"];
			 $this->id_type = $post["id_type"];
			

			 $this->db->insert($this->_table, $this);

		}

		public function update()
		{
			$post = $this->input->post();
			
			 $this->no_polisi = $post["no_polisi"];
			 $this->id_customer = $post["id_customer"];
			 $this->id_type = $post["id_type"];

			$this->db->update($this->_table, $this, array('no_polisi' => $post['no_polisi']));
		}

		public function delete($id)
		{
			return $this->db->delete($this->_table, array("no_polisi" => $id));
		}

		public function search_customer($keyword)
		{
			$this->db->like('no_polisi',$keyword);
			$this->db->or_like('id_customer',$keyword);
			$this->db->or_like('id_type',$keyword);

			$result = $this->db->get('kend_customer')->result();

			return $result;
		}

		public function getAllCustomer(){

			$this->db->select('*');
			$this->db->from('customer');
 
			$query = $this->db->get()->result();

			return $query;
		}

		public function getAllTypeMotor(){

			$this->db->select('*');
			$this->db->from('type_motor');
 
			$query = $this->db->get()->result();

			return $query;
		}

		function autocompleteMotor($keyword){
			$this->db->like('nama_type', $keyword , 'both');
			$this->db->order_by('nama_type', 'ASC');
			$this->db->limit(10);
			return $this->db->get('type_motor')->result();
		}
		
	}
?>