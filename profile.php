<?php
session_start();
if (!isset($_SESSION["uid"])) {
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="images/icon.png" type="image/x-icon"/>
        <title>IT Shop | <?php echo "Contul lui " . $_SESSION["name"]; ?></title>
        <?php
        include 'cssfile.php';
        ?>
        <style>
            @media screen and (max-width:480px){
                #search{width:80%;}
                #search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}
            }
        </style>
    </head>
    <body>
    
        
        <header id="header"><!--header-->
        <div class="header_top navbar-fixed-top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 ">
                            <div class="contactinfo">
                                <div class="contactinfo">
                                    <ul class="title-shop">
                                        <li><a href="index.php"><i class="fa fa-home"></i> Shop <span class="logo">IT.</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="social-icons pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a style="height: 37px;" href="#" id="cart_container" class="dropdown-toggle" data-toggle="dropdown">
                                            <span class="glyphicon glyphicon-shopping-cart function_for_user_span">
                                            </span>Coşul meu <span class="badge">&nbsp;0</span>&nbsp;</a>
                                        <div class="dropdown-menu function_for_user" style="width:500px; margin-left: -540px">
                                            <div class="panel panel-success">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <div class="col-md-3 col-xs-3">Nr. ordine</div>
                                                        <div class="col-md-3 col-xs-3">Produs</div>
                                                        <div class="col-md-3 col-xs-3">Nume Produs</div>
                                                        <div class="col-md-3 col-xs-3">Preț</div>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <div id="cart_product">
                                                        <!--<div class="row">
                                                                <div class="col-md-3">Sl.No</div>
                                                                <div class="col-md-3">Product Image</div>
                                                                <div class="col-md-3">Product Name</div>
                                                                <div class="col-md-3">Price in $.</div>
                                                        </div>-->
                                                    </div>
                                                </div>
                                                <div class="panel-footer"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>&nbsp;</li>
                                    <li>
                                        <a style="height: 37px;" href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <span class="glyphicon glyphicon-user function_for_user_span"></span><?php echo " Bună, " . $_SESSION["name"]; ?>
                                        </a>
                                        <ul style="height: 85px;" class="dropdown-menu">
                                        <li>
                                                <a href="cart.php" style="font-size: 15px; text-decoration:none; color:black;">
                                                &nbsp;<span class="fa fa-archive"> Coşul meu &nbsp;
                                                </a>
                                                </li>
                                                <li>
                                                <a href="#popup1" style="font-size: 15px; text-decoration:none; color:black;">
                                                &nbsp;<span class="fa fa-refresh"> Schimbați parola &nbsp;
                                                </a>
                                                </li>
                                                <li>
                                                <a href="logout.php" style="font-size: 15px; text-decoration:none; color:black;">
                                                &nbsp;<span class="fa fa-reply"> Deconectează-te &nbsp;
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header_top-->

            <div class="header-bottom"><!--header-bottom-->
                <div class="container">
                    <div class="row menu">
                        <div class="col-sm-8">
                            <div class="navbar-header">
                                <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            
                        </div>
                        <div class="col-sm-4">
                            <div class="">
                                <input type="text" class="form-control" id="search" >
                            </div>
                            <div>
                                <input type="button" class="btn btn-primary" id="search_btn" value="Căutare">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-12">
                        <div id="get_category" >
                    </div>
                        <div id="get_brand" >
                        </div>
                    </div>
                    <div class="col-md-9 col-xs-12">	
                        <div class="row">
                            <div style="position: fixed;
                                margin-left: 750px;
                                margin-top: 0px;
                                z-index: 9999;" class="col-md-2 col-xs-2" id="product_msg">
                            </div>
                        </div>
                        
                    <br><br>
                        <div class="panel panel-info" id="scroll">
                            <div class="panel-heading">Produse</div>
                            <div class="panel-body">
                                <div id="get_product">
                                    <!--aici se face jquery Ajax Request-->
                                </div>
                            
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <center>
                            <ul class="pagination" id="pageno">
                                <li><a href="#">1</a></li>
                            </ul>
                        </center>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'footer.php'; ?>
        <div id="popup1" class="overlay">
            <div class="popup_changepassword">
                <h2>Schimbați parola</h2>
                <a class="close" href="#">&times;</a>
                <div class="content">
                    <form method="POST">
                        <label for="">Parola veche</label>
                        <input type="password" class="form-control" placeholder="Introduceți parola veche" id="oldpass" name="oldpass" required/>
                        <label for="">Introduceți o parolă nouă</label>
                        <input type="password" class="form-control" placeholder="Introduceți noua parolă" id="newpass" name="newpass" required/>
                        <label for="">Introduceți parola nouă</label>
                        <input type="password" class="form-control" placeholder="Parola nouă" id="retypenewpass" name="retypenewpass" required/>
                        <p><br/></p>
                        <div id="changepass_message"></div>
                        <input type="button" class="btn btn-success" style="float:right;" id="change" name="change" value="Schimbați parola">
                    </form>
                </div>
            </div>
        </div>
        <?php include 'jsfile.php'; ?>
    </body>
</html>
















































