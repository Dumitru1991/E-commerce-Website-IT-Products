
<?php
session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
$href = '../';
require_once'connection.php';
$prd = 0;
if (isset($_SESSION['cart'])) {
    $prd = count($_SESSION['cart']);
}
if(isset($_GET['error'])) {
     $error = 'Please check ID or password again';
}else 
$error = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link  rel="stylesheet" type="text/css" href="dist/css/home_admin.css">
    <link rel="stylesheet" type="text/css" href="dist/css/style.css">

    
     <link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="bower_components/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/datatables/media/css/jquery.dataTables.min.css">
  
    <style>
            body {
                background-image: url('../images/bgadmin.jpg');
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>
</head>
<body>
<div class="container" style="margin-top:200px">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <center> <strong> ĐĂNG NHẬP VÀO TÀI KHOẢN</strong>
                    </center>
                    <p style="color: red"><?php echo $error;?></p>
                </div>
                <div class="panel-body">
                    <form  action="login-back.php" method="POST">
                 
                            <div class="row">
                                <div class="center-block">
<!--                                    <img class="profile-img"
                                         src="images\7efeebc96a0be5e2d1834a60048a3c09.jpg" alt="">-->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="glyphicon glyphicon-user"></i>
                                            </span> 
                                            <input class="form-control" placeholder="Username" name="user-name" type="text" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="glyphicon glyphicon-lock"></i>
                                            </span>
                                            <input class="form-control" placeholder="Password" name="password" type="password" value="" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" style="background: #15aeb4;" class="btn btn-md btn-block"   name = "login" id="login" value="Đăng nhập" >
                                    </div>
                                </div>
                            </div>
             
                    </form>
                </div>
                <div class="panel-footer ">
                    <p style="color:#15aeb4;">Modern Bag</p>
                </div>
            </div>
        </div>
    </div>
</div>
    </body>
</html>
