<?php 
if (!defined('HOST')){
    exit;
}

class Khachhang extends Db 
{
    function all()
    {
        return $this->selectQuery("select * from khachhang");
    }


    function search($kw)
    {
        $s ="select * from khachhang  where email like ?";
        $a =["%$kw%"];
        return $this->selectQuery($s, $a);
    }
}