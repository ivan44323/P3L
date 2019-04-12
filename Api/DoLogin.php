<?php

    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    include_once 'conn.php';
    include_once 'ObjectPegawai.php';

    $database = new Database();
    $db = $database->getConnection();
    
    $pegawai = new ObjectPegawai($db);

    if (isset($_POST['username']) && isset($_POST['password'])){

        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $user = $pegawai->getPegawai($username, $password);

        if($user != false){
            $response["username"] = $user["username"];
            $response["password"] = $user["password"];
            $response["idpegawai"] = $user["id_pegawai"];
            $response["idrole"] = $user["id_role"];
            $response["namapegawai"] = $user["nama_pegawai"];
            $response["alamatpegawai"] = $user["alamat_pegawai"];
            $response["teleponpegawai"] = $user["telepon_pegawai"];
            $response["tgllahir"] = $user["tgl_lahir_pegawai"];
            $response["gajipegawai"] = $user["gaji_pegawai"];
            echo json_encode($response);
        }else{
            $response["error"] = "error username or password";
            echo json_encode($response);
        }

    }else{
        $response["error"] = "error missing parameters";
        echo json_encode($response);
    }

?>