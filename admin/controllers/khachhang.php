<?php 
$action = isset($_GET['action'])?$_GET['action']:'index';

$sach = new Sach();
$khachhang=new KhachHang();
if($action=='khachhang'){
    $data =$khachhang->all('khachhang');
    //print_r($data);
        include './views/khachhang.php';
}


if ($action=='search')
{
    $kw = isset($_GET['kw'])?$_GET['kw']:'';
    $data = $khachhang->search('khachhang',$kw);
    include './views/khachhang.php';
}