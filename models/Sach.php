<?php
if (!defined('HOST')) {
    exit;
}
class Sach extends Db
{
    // cac phuong thuc 
    function all()
    {
        return $this->selectQuery('select * from sach');
    }

    function random($n)
    {
        return $this->selectQuery("select * from sach order by rand() limit 0, $n");
    }

    function search($kw)
    {
        $s = 'select * from sach where tensach like ?';
        $a = ["%$kw%"];
        return $this->selectQuery($s, $a);
    }

    function detail($id)
    {
        $data = $this->selectQuery('select * from sach where masach=?', [$id]);
        return $data[0];
    }
    function delete($id)
    {
        $data = $this->selectQuery(' DELETE FROM `sach`where masach=?', [$id]);
        return $this->selectQuery('select * from sach');
    }
    function getAllLoaiSach()
    {
        return $this->selectQuery('select * from loai');
    }
    function getAllNXB()
    {
        return $this->selectQuery('select * from nhaxb');
    }
    public function addBook($id, $name, $des, $price, $img, $nxb, $loai)
    {
        $sql = "INSERT INTO sach(masach, tensach, mota, gia, hinh, manxb, maloai) 
        VALUES ('$id','$name','$des','$price','$img','$nxb','$loai')";
        $data = $this->updateQuery($sql);
        return $this->selectQuery('select * from sach');
    }
    function getInfoSach($id)
    {
        $data = $this->selectQuery('select * from sach where masach=?', [$id]);
        return $data[0];
    }
    public function updateBook($id, $name, $des, $price, $img, $nxb, $loai)
    {
        $sql = "UPDATE `sach` SET `tensach`='$name',`mota`='$des',`gia`='$price',`hinh`='$img',`manxb`='$nxb',`maloai`='$loai' WHERE masach='$id'";
        $data = $this->updateQuery($sql);
        return $this->selectQuery('select * from sach');
    }
    
    function loc($manxb,$maloai){
        return $this->selectQuery("select * from sach where maloai = '$maloai' and manxb = '$manxb'");
    }
    function getAccUser($email, $password) {
        $data = $this->selectKhachHang($email, $password);
        return $data;
    }

    function getAccAdmin($email, $password) {
        $data = $this->selectAdmin($email, $password);
        return $data;
    }
}
