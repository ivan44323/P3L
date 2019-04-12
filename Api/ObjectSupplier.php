<?php

class ObjectSupplier{

    private $conn;

    public $id_supplier;
    public $nama_supplier;
    public $alamat_supplier;
    public $telp;
    public $nama_sales;
    public $telepon_sales;

    public function __construct($db){
        $this->conn = $db;
    }

    public function getAllSupplier(){

        $query = "SELECT * FROM TBL_SUPPLIER";

        $stmt = $this->conn->prepare($query);

        $stmt->execute();

        return $stmt;
    }
}
?>