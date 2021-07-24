<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Document</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style1.css">
        <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
        <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font.css">
        <link rel="stylesheet" type="text/css" href="assets/css/theme.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style2.css">
        <link rel="stylesheet" type="text/css" href="assets/css/social.css">
        <link rel="stylesheet" type="text/css" href="assets/css/css.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style_H.css">
        <link rel="stylesheet" type="text/css" href="assets/css/homepage-content.css">
    </head>
    <body>
        <div class="container-fluid text-center">
            <div class="row header_background">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 header_top1">
                    <img src="assets/images/logo.png" class="img-responsive " alt="">
                </div>
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                    <img src="assets/images/img-header11.jpg" class=" img-responsive " alt="">
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2  header_top1">
                    <div class="login">
                        <button type="button" class="btn btn-link" id="myBtn"><span class="glyphicon glyphicon-log-in"></span> Login</button>
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                                
                                <div class="modal-content">
                                    <div class="modal-header modal-header-background">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="size-login"><span class="glyphicon glyphicon-lock"></span> Login</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form role="form">
                                            <div class="form-group">
                                                <label for="usrname" class="color-label label1"><span class="glyphicon glyphicon-user"></span> Username</label>
                                                <input type="password" class="form-control" id="usrname" placeholder="Enter email">
                                            </div>
                                            <div class="form-group">
                                                <label for="psw" class="color-label label2"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                                                <input type="password" class="form-control" id="psw" placeholder="Enter password">
                                            </div>
                                            <div class="checkbox">
                                                <label class="color-label label3">
                                                    <input type="checkbox" value="" checked>Remember me</label>
                                            </div>
                                            <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                                        <p>Not a member? <a href="#">Sign Up</a></p>
                                        <p>Forgot <a href="#">Password?</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Trang chủ</a></li>
                        <li><a href="#">La phong trang trí</a></li>
                        <li><a href="#">Phào nẹp PU</a></li>
                        <li><a href="#">Trần nhôm 3D</a></li>
                        <li><a href="#">Liên hệ</a></li>
                    </ul>
                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Tìm kiếm tại đây?">
                        </div>
                        <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </form>
                    <!-- <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul> -->
                </div>
            </div>
        </nav>
        <div class="container-fluid text-center">
            <div class="row content">
                <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 left-content">
                    <div class="content-left-category">
                        <h3>SẢN PHẨM</h3>
                        <ul class="list-unstyled">
                            <li><a href="/blank" title="">La phong trang trí</a></li>
                            <li><a href="/blank" title="">Phào nẹp PU</a></li>
                            <li><a href="/blank" title="">Trần nhôm</a></li>
                            <li><a href="/blank" title="">Nội thất</a></li>
                            <li><a href="/blank" title="">Phòng bếp</a></li>
                            <li><a href="/blank" title="">Phòng khách</a></li>
                            <li><a href="/blank" title="">Phòng ăn</a></li>
                            <li><a href="/blank" title="">Phòng ngủ</a></li>
                        </ul>
                    </div>
                    <div class="content-left-best-seller">
                        <h3>SẢN PHẨM BÁN CHẠY</h3>
                        <div class="content-left-best-seller-content">
                            <div class="col-xs-6 col-sm-6 col-md-12 col-lg-12 part">
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 image">
                                    <a href="/blank" title="">
                                        <img src="./assets/images/square.png" alt="">
                                    </a>
                                </div>
                                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 info">
                                    <h5><a href="/blank" title="">Trần nhà cho phòng bếp</a></h5>
                                    <p>Chất liệu gỗ liêm cao cấp</p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-12 col-lg-12">
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <a href="/blank" title="">
                                        <img src="./assets/images/square.png" alt="">
                                    </a>
                                </div>
                                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                    <h5><a href="/blank" title="">Trần nhà cho phòng bếp</a></h5>
                                    <p>Chất liệu gỗ liêm cao cấp</p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-12 col-lg-12">
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <a href="/blank" title="">
                                        <img src="./assets/images/square.png" alt="">
                                    </a>
                                </div>
                                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                    <h5><a href="/blank" title="">Trần nhà cho phòng bếp</a></h5>
                                    <p>Chất liệu gỗ liêm cao cấp</p>
                                </div>
                            </div>
                            <div class="col-xs-6col-sm-6 col-md-12 col-lg-12">
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <a href="/blank" title="">
                                        <img src="./assets/images/square.png" alt="">
                                    </a>
                                </div>
                                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                    <h5><a href="/blank" title="">Trần nhà cho phòng bếp</a></h5>
                                    <p>Chất liệu gỗ liêm cao cấp</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 content-right pull-right">
                    <div class="block">
                        <h1 class="title">BÀI ĐĂNG MỚI NHẤT</h1>
                        <ul>
                            <li><a href="">&#9679; La phong giá rẻ tại Đà Nẵng</a></li>
                            <li><a href="">&#9679; Các mẫu trần cổ</a></li>
                            <li><a href="">&#9679; Các nội thất cho phòng khách</a></li>
                            <li><a href="">&#9679; Cách lựa chọn chỉ phào</a></li>
                            <li><a href=""></a></li>
                        </ul>
                    </div>
                    <div class="block">
                        <h1 class="title">CHUYÊN MỤC</h1>
                        <ul>
                            <li><a href="">&#9679; La phong thạch cao</a></li>
                            <li><a href="">&#9679; Chỉ phào cho phòng ngủ</a></li>
                            <li><a href="">&#9679; Thiết kế cổ, quý phái</a></li>
                            <li><a href=""></a></li>
                        </ul>
                    </div>
                    <div class="block">
                        <h1 class="title">ĐÁNH GIÁ, GÓP Ý</h1>
                        <form action="" class="feedback-form">
                            <div class="form-group">
                                <input type="text" class="form-control" id="phone-number" placeholder="Số điện thoại" name="phone-number">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                            </div>
                            <h2>Nội dung</h2>
                            <textarea name=""></textarea>
                            <button type="submit" class="btn btn-default">Gửi</button>
                        </form>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="row">
                        <div class="slide-show">
                            <h2>Carousel Example</h2>
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="./assets/images/square.png" alt="Los Angeles">
                                        <div class="carousel-caption">
                                            <h3>Los Angeles</h3>
                                            <p>LA is always so much fun!</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="./assets/images/square.png" alt="Chicago">
                                        <div class="carousel-caption">
                                            <h3>Chicago</h3>
                                            <p>Thank you, Chicago!</p>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <img src="./assets/images/square.png" alt="New York">
                                        <div class="carousel-caption">
                                            <h3>New York</h3>
                                            <p>We love the Big Apple!</p>
                                        </div>
                                    </div>

                                </div>
                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="content-product-part">
                            <h4>La phong trang trí</h4>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 content-product-part-info">
                                <div class="product-part list-inline">
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <a href="/blank" title=""><img src="./assets/images/square.png" alt=""></a>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <div class="content-product-info">
                                            <h5 class="content-product-name"><a href="/blank" title="">Sản phẩm 1</a></h5>
                                            <p class="content-product-price">Giá: 2000$</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 content-product-part-info">
                                <div class="product-part list-inline">
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <a href="/blank" title=""><img src="./assets/images/square.png" alt=""></a>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <div class="content-product-info">
                                            <h5 class="content-product-name"><a href="/blank" title="">Sản phẩm 2</a></h5>
                                            <p class="content-product-price">Giá: 2000$</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-product-part">
                            <h4>Phào nẹp PU</h4>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 content-product-part-info">
                                <div class="product-part list-inline">
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <a href="/blank" title=""><img src="./assets/images/square.png" alt=""></a>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <div class="content-product-info">
                                            <h5 class="content-product-name"><a href="/blank" title="">Sản phẩm 1</a></h5>
                                            <p class="content-product-price">Giá: 2000$</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 content-product-part-info">
                                <div class="product-part list-inline">
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <a href="/blank" title=""><img src="./assets/images/square.png" alt=""></a>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <div class="content-product-info">
                                            <h5 class="content-product-name"><a href="/blank" title="">Sản phẩm 2</a></h5>
                                            <p class="content-product-price">Giá: 2000$</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-product-part">
                            <h4>Trần nhôm 3D</h4>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 content-product-part-info">
                                <div class="product-part list-inline">
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <a href="/blank" title=""><img src="./assets/images/square.png" alt=""></a>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <div class="content-product-info">
                                            <h5 class="content-product-name"><a href="/blank" title="">Sản phẩm 1</a></h5>
                                            <p class="content-product-price">Giá: 2000$</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 content-product-part-info">
                                <div class="product-part list-inline">
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <a href="/blank" title=""><img src="./assets/images/square.png" alt=""></a>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <div class="content-product-info">
                                            <h5 class="content-product-name"><a href="/blank" title="">Sản phẩm 2</a></h5>
                                            <p class="content-product-price">Giá: 2000$</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-product-part">
                            <h4>Sản phẩm khác</h4>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 content-product-part-info">
                                <div class="product-part list-inline">
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <a href="/blank" title=""><img src="./assets/images/square.png" alt=""></a>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <div class="content-product-info">
                                            <h5 class="content-product-name"><a href="/blank" title="">Sản phẩm 1</a></h5>
                                            <p class="content-product-price">Giá: 2000$</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 content-product-part-info">
                                <div class="product-part list-inline">
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <a href="/blank" title=""><img src="./assets/images/square.png" alt=""></a>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <div class="content-product-info">
                                            <h5 class="content-product-name"><a href="/blank" title="">Sản phẩm 2</a></h5>
                                            <p class="content-product-price">Giá: 2000$</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer id="footer">
            <div class="footer_top">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="footer_widget wow fadeInLeftBig">
                            <h2>About us</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="footer_widget wow fadeInDown">
                            <h2>Tag</h2>
                            <ul class="tag_nav">
                                <li><a href="#">This is link 1</a></li>
                                <li><a href="#">This is link 2</a></li>
                                <li><a href="#">This is link 3</a></li>
                                <li><a href="#">This is link 4</a></li>
                                <li><a href="#">This is link 5</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="footer_widget wow fadeInRightBig">
                            <h2>Contact</h2>
                            <p>Passerelles Numeriques</p>
                            <address>
                                99 To Hien Thanh-Phuoc My-Son Tra-Da Nang-Viet Nam
                                <br> Phone: 123-326-789 Fax: 123-546-567
                            </address>
                            <div class="footer-social-icons">
                                <h3 class="_14">Follow us on</h3>
                                <ul class="social-icons">
                                    <li><a href="" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
                                    <li><a href="" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
                                    <li><a href="" class="social-icon"> <i class="fa fa-rss"></i></a></li>
                                    <li><a href="" class="social-icon"> <i class="fa fa-youtube"></i></a></li>
                                    <li><a href="" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="" class="social-icon"> <i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                            <div>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.070016991597!2d108.24014711480521!3d16.061856043901944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142177f5d9b8943%3A0xa45f1dd4fe3394cf!2zOTkgVMO0IEhp4bq_biBUaMOgbmgsIFBoxrDhu5tjIE3hu7ksIFPGoW4gVHLDoCwgxJDDoCBO4bq1bmcsIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1508929777758" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/custom.js"></script>
        <script src="assets/js/social.js"></script>
        <script>
            $(document).ready(function () {
                $("#myBtn").click(function () {
                    $("#myModal").modal();
                });
            });
        </script>
    </body>
</html>