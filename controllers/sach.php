<?php 
//$action = isset($_GET['action'])?$_GET['action']:'index';
//$action = isset($_GET['action'])?$_GET['action']:'index';
//                       action: key                
$action = Utilities::get('action', 'index');
$sach = new Sach();


if ($action=='index')
{
    $dataloai=$sach->getAllLoaiSach();
    $datanxb=$sach->getAllNXB();
    $data =$sach->random(4);
//print_r($data);
    include './views/sach/index.php';
}
if ($action=='tatca')
{
    $dataloai=$sach->getAllLoaiSach();
    $datanxb=$sach->getAllNXB();
    $data =$sach->all();
//print_r($data);
    include './views/sach/index.php';
}
if ($action=='search')
{
   // $kw = isset($_GET['kw'])?$_GET['kw']:'';
   $kw = Utilities::get('kw');
    $data = $sach->search($kw);
    include './views/sach/index.php';
}

if ($action=='detail')
{
    //$id = isset($_GET['id'])?$_GET['id']:'';
    $id =Utilities::get('id');
    $data =$sach->detail($id);
    $maloai =$_GET['id'];
    $hinh="";
    
    
    include './views/sach/detail.php';
}
if($action=='about'){
    include './views/sach/about.php';
}

if($action=='loc'){
    $maloai=isset($_POST['maloai'])?$_POST['maloai']:'';
    $manxb=isset($_POST['manxb'])?$_POST['manxb']:'';
    $data=$sach->loc($manxb, $maloai);
    $dataloai=$sach->getAllLoaiSach();
    $datanxb=$sach->getAllNXB();
    include './views/sach/index.php';
}
if($action == "adminPage") {
    $dataloai=$sach->getAllLoaiSach();
    $datanxb=$sach->getAllNXB();
    $data =$sach->all();
    header("Location:admin/index.php?controller=sach&action=index");
}

if($action=='loginForm') {
    include './views/sach/login.php';
}

if($action=='logout') {
    unset($_SESSION["username"]);
    header("Location:index.php?controller=sach&action=index");
}

if($action=='login') {
    $username = $_POST["username"];
    $pas = $_POST["password"];
    $password = md5($pas);
    $error = "Sai tài khoản hoặc mật khẩu";

    $user = checkLogin($username, $password);
    $admin = checkAdmin($username, $password);
    if($user=="user") {
        $str = "khachhang";
        $_SESSION["username"] = $username;
        header("Location:index.php?controller=sach&action=index");
    }elseif ($admin=="admin") {
        $str = "quantri";
        $_SESSION["username"] = $username;
        header("Location:index.php?controller=sach&action=adminPage");
    }else{
        $_SESSION["error"] = $error;
        header("Location:index.php?controller=sach&action=loginForm");
    }

}

function checkLogin($username, $password) {
    $sach = new Sach();
    // Check User

    $user = $sach->getAccUser($username, $password) ?? null;
    $str = "";
    if($user!=null) {
        $str = "user";
    }else{
        $str = "Sai tài khoản user";
    }
    // Check Admin
    return $str;
}

function checkAdmin($username, $password) {
    $sach = new Sach();
    // Check User

    $admin = $sach->getAccAdmin($username, $password) ?? null;
    $str = "";
    if($admin!=null) {
        $str = "admin";
    }else{
        $str = "Sai tài khoản Admin";
    }
    // Check Admin
    return $str;
}

