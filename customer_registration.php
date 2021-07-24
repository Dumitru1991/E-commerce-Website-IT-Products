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
        <link rel="shortcut icon" href="images/icon.png" type="image/x-icon"/>
        <title>IT Shop | Inregistreaza-te</title>
        <?php
        include 'cssfile.php';
        ?>
    </head>
    <body>
        
        <header id="header">
            <div class="header_top navbar-fixed-top">
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
                                <li class=""><a href="#" id="cart_container1" class="" data-toggle="dropdown">
                                        
                                        
                                        <div class="dropdown-menu" style="width:1002px; margin-left: -908px">
                                            <div style="width: 1000px;" class="panel panel-success">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <div class="col-md-2 col-xs-2"><b>Produs</b></div>
                                                        <div class="col-md-2 col-xs-2"><b>Elemente</b></div>
                                                        <div class="col-md-2 col-xs-2"><b>Cantitate</b></div>
                                                        <div class="col-md-2 col-xs-2"><b>Delete</b></div>
                                                        <div class="col-md-2 col-xs-2"><b>Preț</b></div>
                                                        <div class="col-md-2 col-xs-2"><b>Total</b></div>
                                                    </div>
                                                </div>
                                                <div class="panel-body"></div>
                                                <div class="panel-footer"></div>
                                            </div>
                                        </div>

                                    </li>
                                    <li></li>
                                    <li class="">
                                        <a href="#" class=" dropdown-toggle function_for_user" data-toggle="dropdown" >
                                            <span class=" glyphicon glyphicon-user function_for_user_span"></span> Autentificare 
                                        </a>
                                        <ul class="dropdown-menu loginup">
                                            <div style="width:300px;">
                                                <div class="panel panel-primary">
                                                    <h2 class="center">Autentificare</h2> 
                                                    <div id="" class="panel-heading">
                                                        <label for="email">E-mail:</label>
                                                        <input type="email" class="form-control" onclick="focus(this)" placeholder="Adresa de e-mail" id="email" required/>
                                                        <label for="email">Parola: </label>
                                                        <input type="password" class="form-control" onclick="focus(this)" placeholder="Parola dumneavoastră" id="password" required/>
                                                        <p><br/></p>
                                                        <h6><a class="register" href="customer_registration.php"><i>Înscrieți-vă pentru un cont nou</i></a></h6>
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

                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div style="
                        position: fixed;
                        margin-top: 96px;
                        margin-left: 950px;
                        z-index: 9999;" class="col-md-2 col-xs-2" id="signup_msg">
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="panel" style="border-color: #1E122B;
                            height: 690px; margin-top: 65px;">
                            <div class="panel-heading">
                                <h2 class="center">Înscrieți-vă pentru un cont nou</h2>
                            </div>
                            <div class="panel-body">
                                <form method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="f_name">Nume</label>
                                            <input type="text"
                                                placeholder="Nume "
                                                id="f_name" 
                                                name="f_name" 
                                                class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="f_name">Prenume</label>
                                            <input type="text" 
                                                placeholder="Prenume"
                                                id="l_name" 
                                                name="l_name"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="email">E-mail</label>
                                            <input type="text" 
                                                placeholder="E-mail"
                                                id="email" 
                                                name="email"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="password">Parola</label>
                                            <input type="password"
                                                placeholder="Parola"
                                                id="password" 
                                                name="password"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="repassword">Introduceți parola</label>
                                            <input type="password"
                                                placeholder="Introduceți parola"
                                                id="repassword" 
                                                name="repassword"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="mobile">Număr de telefon</label>
                                            <input type="text" 
                                                placeholder="Număr de telefon"
                                                id="mobile" 
                                                name="mobile"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="address1">Adresa 1</label>
                                            <input type="text" 
                                                placeholder="Adresa 1"
                                                id="address1" 
                                                name="address1"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="address2">Adresa 2</label>
                                            <input type="text" 
                                                placeholder="Adresa 2"
                                                id="address2" 
                                                name="address2"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <p><br/></p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5 class="center">Prin înregistrare, sunteți de acord cu 
                                                <a class="red" href="#popup1">
                                                termenii de utilizare
                                                </a>
                                                a IT Shop</h5>
                                        </div>
                                    </div>
                                    <p><br/></p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input style="float:right;" 
                                                value="Înregistrare" 
                                                type="button" 
                                                id="signup_button" 
                                                name="signup_button"
                                                class="btn btn-success btn-lg">
                                        </div>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </section>
        <?php include 'footer.php'; ?>

        <div id="popup1" class="overlay">
            <div class="popup">
                <h2>Termeni de utilizare și condiți</h2>
                
                <a class="close" href="#" style="
                margin-top: 66px;
                margin-right: 73px;
                ">&times;</a>
                <div style="overflow:auto;" class="content">
                    <table border="0" width="100%" cellspacing="0" id="table1">
                        <tbody><tr>
                                <td></td>
                            </tr>
                            <tr>
                                
                                </td>
                            </tr>
                            <tr bgcolor="#EAEAEA"><td><b></b></td></tr>
                            <tr bgcolor="#EAEAEA"><td>
                            1. Despre conturile de utilizator: Când vă înregistrați pentru un cont, ar trebui să furnizați informații complete despre numele dvs. complet, numele de utilizator, adresa de e-mail, etc... Acestea nu sunt informații obligatorii, dar când sunt disponibile Pentru riscuri și pierderi viitoare, acceptăm doar cazurile în care informațiile de mai sus sunt completate corect și complet. Cazurile pline de informații lipsă sau informații false nu vor fi soluționate. Aceste informații vor fi utilizate ca bază pentru susținerea decontării.<br>
                            2. Parola contului: În secțiunea de gestionare a contului, pentru un cont, utilizatorul va avea o parolă. Parola utilizată pentru a vă conecta la Shop. Dacă utilizatorul își uită parola, își poate folosi e-mailul pentru a prelua parola. Este responsabilitatea utilizatorului să aibă grijă de parolă și e-mail, dacă parola sau poșta electronică sunt dezvăluite în vreun fel, Shop IT. nu va fi responsabil pentru nici o pierdere suferită.<br>
                            3. Articole: Cu un singur cont puteți cumpăra multe produse. Dacă doriți o cantitate mare, ne puteți contacta prin e-mail shop.it@gmail.com.<br>
                            4. Absolut, nu utilizați niciun program, instrument sau altă formă pentru a interfera cu site-ul web sau pentru a schimba structura site-ului (hacks, trucuri, roboți ...). Orice încălcare atunci când este detectată va fi tratată în conformitate cu legea.<br>
                            5. Interzice absolut toate actele de propagandă, sabotaj și denaturare a guvernului, a instituțiilor politice și a politicilor statului ... În caz de detectare, nu numai că contul va fi șters, dar vom șterge și contul. furnizați informațiile acelei persoane autorităților pentru tratarea legală. <br>
                                </td></tr>
                            <tr>
                                <td bgcolor="#15aeb4">
                                </td>
                            </tr>
                        </tbody></table>
                </div>
            </div>
        </div>

        <script src="js/jquery2.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="main.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/functions.js"></script>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/jquery.li-scroller.1.0.js"></script>
        <script src="assets/js/jquery.newsTicker.min.js"></script>
        <script src="assets/js/jquery.fancybox.pack.js"></script>
        <script src="assets/js/custom.js"></script>
        <script src="assets/js/preloader.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/script.js"></script>
        <script src="assets/js/slider.min.js"></script>
        <script type="text/javascript">
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



















