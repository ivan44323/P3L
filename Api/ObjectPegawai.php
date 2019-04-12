<?php

class ObjectPegawai{

    private $conn;

    public $idPegawai;
    public $idRole;
    public $namaPegawai;
    public $alamatPegawai;
    public $teleponPegawai;
    public $tglLahir;
    public $gajiPegawai;
    public $username;
    public $password;

    public function __construct($db){
        $this->conn = $db;
    }

    public function getPegawai($username, $password){
        $stmt = $this->conn->prepare("SELECT * FROM pegawai WHERE username = '$username'");
        
        if($stmt->execute()){
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            $password = strtoupper(md5($password));
            if($password == $user['password']){
                return $user;
            }
        }else{
            return $user;
        }
    }

    public function isPegwaiExited($username){

        $sql = "SELECT username FROM pegawai WHERE username = '$username'";

        $stmt = $this->conn->prepare(sql);

        $stmt->execute(array($username));

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    }

}
?>