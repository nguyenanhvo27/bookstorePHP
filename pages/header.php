<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/about.css">
    <title>User</title>
</head>
<body>
    <?php session_start(); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand text-danger" href="#">User</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?controller=sach&action=tatca">Tat ca sach</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="index.php?controller=sach&action=about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?controller=sach&action=loginForm">
                    <?php if(isset($_SESSION["username"])) { 
                        echo "Hi ".$_SESSION["username"];
                    }else {
                        echo "Login";
                    }?>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?controller=sach&action=logout">
                    <?php if(isset($_SESSION["username"])) { 
                        echo "Logout";
                    }?>
                </a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" 
                action='index.php' method='get'>
            <input type="hidden"  name='controller' value='sach'>
            <input type="hidden"  name='action' value='search'>
            <input class="form-control mr-sm-2" type="text" placeholder="Search" name='kw'>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
