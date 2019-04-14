<?php
class Page extends CI_Controller{
  function __construct(){
    
    parent::__construct();

    $this->load->helper('url');

    $this->load->model('customer_model');
    $this->load->model('jasa_service_model');
    $this->load->model('supplier_model');
    $this->load->model('pegawai_model');
    $this->load->model('sparepart_model');
    $this->load->model('kendaraan_customer_model');
    $this->load->model('transaksi_penjualan_model');

    if($this->session->userdata('logged_in') !== TRUE){
      redirect('Home');
    }
    
  }

  function admin(){
    
      if($this->session->userdata('nama_role')==='admin'){

          $data['content'] = 'Content/home';
          $this->load->view('Template/dashboard',$data);
          
      }else{
          echo "Access Denied";
      }
 
  }
 
  function customerservice(){

    if($this->session->userdata('nama_role')==='customer service'){
          
          $data['content'] = 'Content/home';
          $this->load->view('Template/dashboard',$data);
      }else{
          echo "Access Denied";
      }
  }

  function kasir(){

    if($this->session->userdata('nama_role')==='kasir'){

      $data['content'] = 'Content/home';
      $this->load->view('Template/dashboard',$data);
    }else{
      echo "Access Denied";
    }
  }

  function dashboard(){

    if($this->session->userdata('nama_role')==='admin')
    {
      $this->admin();
    }else if($this->session->userdata('nama_role')==='customer service')
    {
      $this->customerservice();
    }else if($this->session->userdata('nama_role')==='kasir')
    {
      $this->kasir();
    }

  }

  function input_supplier(){

    $data['supplier'] = $this->supplier_model->getAll();
    $data['temp'] = 0;
    $data['search_keyword'] = " ";
    $data['content'] = 'Content/input_supplier';
    $this->load->view('Template/dashboard',$data);
  }

  function input_jasa_service(){

    $data['jasa_service'] = $this->jasa_service_model->getAll();
    $data['temp'] = 0;
    $data['search_keyword'] = " ";
    $data['content'] = 'Content/input_jasa_service';
    $this->load->view('Template/dashboard',$data);
  }

  function input_customer(){

    $data['customer'] = $this->customer_model->getAll();
    $data['temp'] = 0;
    $data['search_keyword'] = " ";
    $data['content'] = 'Content/input_customer';
    $this->load->view('Template/dashboard',$data);
  }

  function input_pegawai(){

    $data['pegawai'] = $this->pegawai_model->getAll();
    $data['pegawai_role'] = $this->pegawai_model->getAllRole();
    $data['temp'] = 0;
    $data['search_keyword'] = " ";
    $data['content'] = 'Content/input_pegawai';
    $this->load->view('Template/dashboard',$data);
  }

  function input_sparepart(){

    $data['sparepart'] = $this->sparepart_model->getAll();
    $data['sparepart_type'] = $this->sparepart_model->getAllTypeSparepart();
    $data['temp'] = 0;
    $data['search_keyword'] = " ";
    $data['content'] = 'Content/input_sparepart';
    $this->load->view('Template/dashboard',$data);
  }

  function input_kendaraan_customer(){

    $data['kendaraancustomer'] = $this->kendaraan_customer_model->getAll();
    $data['kendaraancustomer_type_motor'] = $this->kendaraan_customer_model->getAllTypeMotor();
    $data['kendaraancustomer_customer'] = $this->kendaraan_customer_model->getAllCustomer();
    $data['temp'] = 0;
    $data['search_keyword'] = " ";
    $data['content'] = 'Content/input_kendaraan_customer';
    $this->load->view('Template/dashboard',$data);
  }

  function transaksi_penjualan(){
    $data['transaksi'] = $this->transaksi_penjualan_model->getAll();
		$data['sparepart_nama'] = $this->transaksi_penjualan_model->getAllNamaSparepart(); 
    $data['jasaservice_nama'] = $this->transaksi_penjualan_model->getAllNamaJasaService();
    $data['pegawai_nama'] = $this->transaksi_penjualan_model->getAllNamaPegawai();
    $data['polisi_no'] = $this->transaksi_penjualan_model->getAllNoPolisi();
    $data['temp'] = 0;
    $data['search_keyword'] = " ";
    $data['content'] = 'Content/transaksi_penjualan';
    $this->load->view('Template/dashboard',$data);
  }

}