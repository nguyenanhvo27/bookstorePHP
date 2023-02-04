<?php 
class Db{
    protected static $pdo;
    function __construct()
    {
        self::$pdo = new PDO('mysql:host='. HOST .';dbname='. DB, USER , PW);
        self::$pdo->query('set names utf8');
    }

    protected function selectQuery($sql, $arr=[])
    {
        $stm = self::$pdo->prepare($sql);
        $stm->execute($arr);
        $data = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    //insert, delete, update
    protected function updateQuery($sql, $arr=[])
    {
        $stm = self::$pdo->prepare($sql);
        $stm->execute($arr);
        return $stm->rowCount();
    }
    public function selectKhachHang($username, $password) {
        $sql = "select email,matkhau from khachhang where email='${username}' and matkhau='${password}'";

        //Tạo Prepared Statement

        $stmt = self::$pdo->prepare($sql);


        //Thiết lập kiểu dữ liệu trả về

        $stmt->setFetchMode(PDO::FETCH_ASSOC);



        //Gán giá trị và thực thi

        $stmt->execute();



        return $stmt->fetchAll();

    }

    public function selectAdmin($username, $password) {
        $sql = "select username,matkhau from quantri where username='${username}' and matkhau='${password}'";

        //Tạo Prepared Statement

        $stmt = self::$pdo->prepare($sql);


        //Thiết lập kiểu dữ liệu trả về

        $stmt->setFetchMode(PDO::FETCH_ASSOC);



        //Gán giá trị và thực thi

        $stmt->execute();


        return $stmt->fetchAll();

    }
}

