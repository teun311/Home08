<?php  session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <style>
        .py-auto{margin-top: 120px;}
    </style>
</head>
<body>
<?php //if (isset($_SESSION['id'])) {?>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
        <a href="action.php?pages=home" class="navbar-brand">LOGO</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="action.php?pages=home"class="nav-link">Home</a></li>
            <?php if (isset($_SESSION['name'])){?>
                <li class="nav-item "><a href="action.php?pages=fileU"class="nav-link ">File Upload</a></li>
                <li class="nav-item"><a href="action.php?pages=all"class="nav-link">Registerd </a></li>
                <li class="nav-item"><a href="action.php?pages=log_out"class="nav-link text-danger">Logout</a></li>
           <?php } ?>
            <?php if (!isset($_SESSION['name'])) {?>
            <li class="nav-item"><a href="action.php?pages=log_in"class="nav-link text-primary";">Login</a></li>
            <?php }?>
        </ul>
    </div>
</nav>


<?php //}?>
