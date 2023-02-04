<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/about.css">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <?php session_start(); ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand text-danger" href="index.php?controller=sach&active=index">Admin</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
           
                <li class="nav-item">
                    <a class="nav-link" href="#"><?php if(isset($_SESSION["username"])){print("Hi ".$_SESSION["username"]);}?></a>
                </li>
                <li class="nav-item"><?php if(isset($_SESSION["username"])){?>
                    <a class="nav-link" href="http://localhost/DoAnMNMtest"><?php 
                        unset($_SESSION["username"]);
                        print("Logout");
                        }?></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="index.php?controller=khachhang&action=khachhang">Tài khoản khách hàng</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" action='index.php' method='get'>
                <input type="hidden" name='controller' value='sach'>
                <input type="hidden" name='action' value='search'>
                <input class="form-control mr-sm-2" type="text" placeholder="Search" name='kw'>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <form class="form-inline " action='index.php' method='get'>
                <input type="hidden" name='controller' value='sach'>
                <input type="hidden" name='action' value='Addsach'>
                <button class="btn btn-outline-success " type="submit">Thêm sách</button>
            </form>
        </div>
    </nav>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</html>