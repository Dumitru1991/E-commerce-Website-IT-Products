<?php
session_start();
if (isset($_SESSION["uid"])) {
    header("location:profile.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" href="images/icon.png" type="image/x-icon"/>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;900&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
        <link rel="stylesheet" href="css/styles.css" />
        <title>IT Shop | Online Shop</title>
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
    <div id="pre-loader">
    <div class="loader"></div>
    </div> 
    <div class="glide glide1" id="glide1">
        <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides glide__hero">
        <li class="glide__slide">
            <div class="banner">
                <div class="banner-content">
                    <span style="color:red;" >Noile tehnologii 2021</span>
                    <h1 style="color:white">Jocuri facute pentru tine!</h1>
                    <h3 style="color:white">Tendințe pentru gameri și nu numai.</h3>
                        <div class="buttons-group">
                            <a href="#Produse-link"><button>Cumpără</button></a>
                            <a href="https://www.ign.com/" target="_blank"><button>Gaming</button></a>
                        </div>
                    </div>
                <img src="./images/banner_1.png" class="special_01" alt="">
            </li>
            <li class="glide__slide">
            <div class="banner banner1">
                <div class="banner-content">
                    <h1 style="color:#477817; text-decoration:overline; font-weight: bold; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">Horizon ZERO Dawn™</h1>
                        <div class="buttons-group">
                            <a href="https://store.steampowered.com/app/1151640/Horizon_Zero_Dawn_Complete_Edition/" target="_blank"><button>Cumpără</button></a>
                        </div>
                </div>
                    <img src="./images/banner_2.jpg" class="special_02" alt="">
            </div>
            </li>
            <li class="glide__slide">
            <div class="banner">
                <div class="banner-content">
                    <h1 style="color:green; font-weight: bold; text-shadow: -1px 0 white, 0 1px black, 1px 0 black, 0 -1px black;">Noile plăci video de la Nvidia</h1>
                        <div class="buttons-group">
                            <a href="https://www.nvidia.com/en-us/" target="_blank"><button>Faceți clic pentru a vizualiza</button></a>
                        </div>
                    </div>
                    <img src="./images/banner_3.jpg" class="special_03" alt="">
                </div>
            </li>
            <li class="glide__slide">
            <div class="banner">
                <div class="banner-content">
                    <span style="color:black; font-weight: bold; text-shadow: -1px 0 white, 0 1px white, 1px 0 white, 0 -1px white;" >Noile procesoare AMD</span>
                    <h1 style="color:black; font-weight: bold; text-shadow: -1px 0 white, 0 1px white, 1px 0 white, 0 -1px white;">Tehnologii facute pentru tine!</h1>
                    <h3 style="color:black; font-weight: bold; text-shadow: -1px 0 white, 0 1px white, 1px 0 white, 0 -1px white;">AMD Ryzen</h3>
                        <div class="buttons-group">
                            <a href="#Produse-link"><button>Faceți clic pentru a vizualiza</button></a>
                        </div>
                    </div>
                <img src="./images/banner_4.png" class="special_04" alt="">
            </div>
            </li>
        </ul>
        </div>
        <!-- Side Bar arcurile -->
        <div class="glide__arrows" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fas fa-arrow-left"></i></button>
        <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i
            class="fas fa-arrow-right"></i></button>
        </div>
        </div>
    <section class="section blog" id="blog">
    <div class="title-container">
        <div class="section-titles">
            <div class="section-title active">
                <h1 class="primary-title" style="font-weight: bold;">Grăbiți-vă! Mai jos aveți cele mai noi oferte.</h1>
            </div>
        </div>
    </div>
    </section>
        <!--header-->
        <header id="header">
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
                                    <li class="cos"><a href="#" id="cart_container1" class="dropdown-toggle function_for_user" data-toggle="dropdown">
                                    <span class="glyphicon glyphicon-shopping-cart function_for_user_span">
                                    </span>  Coşul meu&nbsp;<span class=""><b style="color:red"> (<?php include 'count_for_guest.php';?>)</b>&nbsp;</span>&nbsp;</a>
                                        <div class="dropdown-menu" style="width:1002px; margin-left: -908px">
                                            <div style="width: 1000px;" class="panel panel-success">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                    <div class="col-md-2 col-xs-2"><b>Produs</b></div>
                                                        <div class="col-md-2 col-xs-2"><b>Elemente</b></div>
                                                        <div class="col-md-2 col-xs-2"><b>Cantitate</b></div>
                                                        <div class="col-md-2 col-xs-2"><b>Șterge</b></div>
                                                        <div class="col-md-2 col-xs-2"><b>Preț</b></div>
                                                        <div class="col-md-2 col-xs-2"><b>Total</b></div>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <div id="cart_product1">
                                                    </div>
                                                </div>
                                                    <div class="panel-footer"></div>
                                            </div>
                                        </div>
                                        </li>
                                    <li class="autentificare">
                                        <a href="#" class=" dropdown-toggle function_for_user" data-toggle="dropdown" >
                                            <span class=" glyphicon glyphicon-user function_for_user_span"></span>&ensp;Autentificare 
                                        </a>
                                        <ul class="dropdown-menu loginup">
                                            <div style="width:300px;">
                                                <div class="panel panel-primary">
                                                    <h2 class="center">Autentificare</h2> 
                                                    <div id="" class="panel-heading">
                                                        <label for="email">E-mail:</label>
                                                        <input type="email" class="form-control" onclick="focus(this)" placeholder="Adresa de e-mail" id="email" required/> 
                                                        <label for="email">Parola:</label>
                                                        <input type="password" class="form-control"  placeholder="Parola dumneavoastră" id="password" required/>
                                                        <p><br/></p>
                                                        <h6><a class="register" href="customer_registration.php"><i>Înregistrare pentru un cont nou</i></a></h6>
                                                        <input type="submit" class="btn btn-success" style="float:right;" id="login" value="Autentificare">
                                                    </div>
                                                    <div style="height: 65px;" class="panel-footer" id="e_msg"></div>
                                                </div>
                                            </div>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/header_top-->

        <section class="gallary container">
        <figure class="gallary-item item-1">
        <img src="./images/grid_1.jpg" alt="" class="gallary-img">
            <div class="content">
                <h2>Produse favorite</h2>
                <a href="#Produse-link">Vezi mai mult</a>
            </div>
        </figure>
        <figure class="gallary-item item-2">
        <img src="./images/grid_2.png" alt="" class="gallary-img">
            <div class="content">
                <h2>Noile plăci de bază</h2>
            </div>
        </figure>
        <figure class="gallary-item item-3">
        <img src="./images/grid_3.png" alt="" class="gallary-img">
            <div class="content">
                <h2>Reducere ASUS 30%</h2>
            </div>
        </figure>
        <figure class="gallary-item item-4">
        <img src="./images/grid_4.png" alt="" class="gallary-img">
            <div class="content">
                <h2>Reducere de până la 70% reducere de primăvară!</h2>
            </div>
        </figure>
        </section>
        <!--/header bot-->
        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-12">
                        <div id="get_category" style="border: #1E122B;">
                        </div>
                            <div id="get_brand" style="border: #1E122B;">
                        </div>
                    </div>
                <div class="col-md-9 col-xs-12">
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="">
                                <input type="text" class="form-control" id="search" >
                            </div>
                                <div>
                                    <input  type="button" class="btn btn-primary" id="search_btn" value="Căutare">
                                </div>
                        </div>
                    </div>      
                <br><br>
                    <div class="row">
                        <h2 class="title text-center" id="Produse-link">Produse</h2>
                        <div style="position: fixed;
                        float: right;
                        margin-left: 721px; 
                        z-index: 1;
                        margin-top: -1085px;" class="col-md-2 col-xs-2" id="product_msg">
                        </div>
                    </div> 
                    <div class="panel panel-info">
                        <div class="panel-body">
                            <div id="get_product" >
                            </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>
    <section class="section blog" id="blog">
        <div class="title-container">
            <div class="section-titles">
                <div class="section-title active">
                    <h1 class="primary-title">Cele mai recente știri:</h1>
                </div>
            </div>
        </div>
        <div class="blog-container container">
            <div class="glide" id="glide3">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                    <li class="glide__slide">
                        <div class="blog-card">
                            <div class="card-header">
                                <img src="./images/stire1.png" alt="">
                            </div>
                    <div class="card-footer">
                    <h3>Noul ASUS</h3>
                    <span>By playtech.ro</span>
                    <p>ASUS tocmai a lansat telefonul care îți umilește laptopul prin performanță...</p>
                    <a href="https://playtech.ro/2021/asus-tocmai-a-lansat-telefonul-care-iti-umileste-laptopul-prin-performanta/" target="_blank"><button>Citeste mai multe</button></a>
                    </div>
                </div>
                </li>
                <li class="glide__slide">
                <div class="blog-card">
                    <div class="card-header">
                    <img src="./images/stire2.png" alt="">
                    </div>
                    <div class="card-footer">
                    <h3>Laptop ASUS</h3>
                    <span>By playtech.ro</span>
                    <p>Acest laptop ASUS e tot ce ai nevoie dacă ești pasionat de gaming: de ce e atât de special?...</p>
                    <a href="https://playtech.ro/2021/acest-laptop-asus-e-tot-ce-ai-nevoie-daca-esti-pasionat-de-gaming-de-ce-e-atat-de-special/" target="_blank"><button>Citeste mai multe</button></a>
                    </div>
                </div>
                </li>
                <li class="glide__slide">
                <div class="blog-card">
                    <div class="card-header">
                    <img src="./images/stire3.png" alt="">
                    </div>
                    <div class="card-footer">
                    <h3>Samsung Galaxy S21</h3>
                    <span>By playtech.ro</span>
                    <p>Samsung Galaxy S21 Ultra este unul dintre cele mai scumpe telefoanele ale momentului și....</p>
                    <a href="https://playtech.ro/2021/samsung-galaxy-s21-ultra-mai-slab-decat-galaxy-s20-ultra-de-ce-nu-merita-banii-conform-expertilor/" target="_blank"><button>Citeste mai multe</button></a>
                    </div>
                </div>
                </li>
                <li class="glide__slide">
                <div class="blog-card">
                    <div class="card-header">
                    <img src="./images/stire4.png" alt="">
                    </div>
                    <div class="card-footer">
                    <h3>Intel atacă Apple</h3>
                    <span>By zonait.ro</span>
                    <p>Apple a renunțat la Intel pentru a-și dezvolta propriul procesor pe care să-l folosească în...</p>
                    <a href="https://zonait.ro/intel-ataca-apple/" target="_blank"><button>Citeste mai multe</button></a>
                    </div>
                </div>
                </li>
                <li class="glide__slide">
                <div class="blog-card">
                    <div class="card-header">
                    <img src="./images/stire5.PNG" alt="">
                    </div>
                    <div class="card-footer">
                    <h3>NVIDIA a dominat AMD</h3>
                    <span>By zonait.ro</span>
                    <p>NVIDIA a dominat AMD în 2020 din perspectiva vânzărilor de plăci video...</p>
                    <a href="https://zonait.ro/nvidia-amd-2020-vanzari/" target="_blank"><button>Citeste mai multe</button></a>
                    </div>
                </div>
                </li> 
            </ul>
            </div>
        </div>
        </div>
    </section>
<?php include 'footer.php'; ?>
    
    <?php
    include 'jsfile.php';
    ?>
    <script type="text/javascript">
        function Focus(object) {
            object.value = "Test";
        }

        function Blur(object) {
            if (object.value == "")
                object.value = "Nhap tu khoa";
        }
    </script>

</body>
</html>
















































