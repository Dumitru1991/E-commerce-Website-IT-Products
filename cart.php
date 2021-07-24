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
        <title>Coşul meu | <?php echo "" . $_SESSION["name"]; ?></title>
        <?php
        include 'cssfile.php';
        ?>

    </head>
    <body>
        <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
        <header id="header"><!--header-->
            <div class="header_top navbar-fixed-top"><!--header_top-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 ">
                            <div class="contactinfo">
                                <ul class="title-shop">
                                    <li><a href="index.php"><i class="fa fa-home"></i> Shop <span class="logo">IT.</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="social-icons pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a style="height: 37px;" href="#" id="cart_container" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart function_for_user_span"></span>Coşul meu <span class="badge">&nbsp;0&nbsp;</span></a>
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
                                                    </div>
                                                </div>
                                                <div class="panel-footer"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>&nbsp;</li>
                                    <li><a style="height: 37px;" href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user function_for_user_span"></span><?php echo " Bună, " . $_SESSION["name"]; ?></a>
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
                        </div>
                        <div class="col-sm-4">
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-2 col-xs-2" id="cart_msg" style="
                        position:  fixed;
                        margin-left: 950px;
                        margin-top: -20px;
                        z-index: 9999;
                        ">
                        <!--Cart Message--> 
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-md-12"></div>
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading" style="text-align: center;">Coşul meu:</div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-2 col-xs-2"><b>Elemente</b></div>
                                    <div class="col-md-2 col-xs-2"><b>Numele produsului</b></div>
                                    <div class="col-md-2 col-xs-2"><b>Cantitate</b></div>
                                    <div class="col-md-2 col-xs-2"><b>Actualizați/Ștergeți</b></div>
                                    <div class="col-md-2 col-xs-2"><b>Prețul Produsului</b></div>
                                    <div class="col-md-2 col-xs-2"><b>Preț Total</b></div>
                                </div>
                                <p></p>
                                <div id="cart_checkout"></div>
                            </div> 
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </section>
        
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
        
        <?php
        include 'jsfile.php';
        ?>
        <script>
            function Focus(object) {
                object.value = "Test";
            }

            function Blur(object) {
                if (object.value == "")
                    object.value = "";
            }
        </script>
        
    </body>	
    
</html>
















