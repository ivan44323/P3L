<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once 'conn.php';
include_once 'ObjectSupplier.php';

$database = new Database();
$db = $database->getConnection();

$supplier = new ObjectSupplier($db);

$stmt = $supplier->getAllSupplier();

$num = $stmt->rowCount();


if($num>0){

    $supplier_arr=array();
    $supplier_arr["result"]=array();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);

        $list_supplier = array(
            "id_supplier" => $id_supplier,
            "nama_supplier" => $nama_supplier,
            "alamat_supplier" => $alamat_supplier,
            "telp" => $telp,
            "nama_sales" => $nama_sales,
            "telepon_sales" => $telepon_sales
        );

        array_push($supplier_arr["result"], $list_supplier);

    }

    echo json_encode($supplier_arr);

}else{

    echo json_encode(
        array("message" => "No Data Found.")
    );
}



?>