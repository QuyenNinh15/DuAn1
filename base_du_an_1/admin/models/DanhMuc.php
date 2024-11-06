<?php

class DanhMuc {
    public $conn;

    // Kết nối CSDL
    public function __construct() {
        $this->conn = connectDB();
    }

    // Danh sách danh mục
    public function getAll(){
        try {
            //code...
            $sql = 'SELECT * FROM danh_mucs';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return  $stmt->fetchAll();
        } catch (PDOException $e) {
            echo "Thất bại" . $e->getMessage();}
    }
    // Thêm dữ liệu vào CSDL
    

    // Hủy kết nối CSDL
    public function __destrust() {
        $this -> conn = null;
    }
}