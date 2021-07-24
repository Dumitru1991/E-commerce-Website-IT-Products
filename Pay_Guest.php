<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="images/icon.png" type="image/x-icon"/>
        <title>Modern Bag | Register</title>
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
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div style="
                         position: fixed;
                         margin-top: -196px;
                         margin-left: 1125px;
                         z-index: 9999;" class="col-md-2 col-xs-2" id="signup_msg">
                        <!--                    Hộp thoại thông báo-->
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="panel" style="border-color: #15aeb4;
                             height: 720px;">
                            <div class="panel-heading">
                                <h2 class="center">Đăng kí thông tin thanh toán</h2>
                            </div>
                            <div class="panel-body">

                                <form method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="f_name">Tên</label>
                                            <input type="text"
                                                   placeholder="Tên"
                                                   id="f_name" 
                                                   name="f_name" 
                                                   class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="f_name">Họ</label>
                                            <input type="text" 
                                                   placeholder="Họ"
                                                   id="l_name" 
                                                   name="l_name"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="email">Email</label>
                                            <input type="text" 
                                                   placeholder="Email"
                                                   id="email" 
                                                   name="email"
                                                   class="form-control"><br>
                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="password">Mật khẩu</label>
                                            <input type="password"
                                                   placeholder="Mật khẩu"
                                                   id="password" 
                                                   name="password"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="repassword">Nhập lại mật khẩu</label>
                                            <input type="password"
                                                   placeholder="Nhập lại mật khẩu"
                                                   id="repassword" 
                                                   name="repassword"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="mobile">Số điện thoại</label>
                                            <input type="text" 
                                                   placeholder="Số điện thoại"
                                                   id="mobile" 
                                                   name="mobile"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="address1">Địa chỉ 1</label>
                                            <input type="text" 
                                                   placeholder="Địa chỉ 1"
                                                   id="address1" 
                                                   name="address1"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="address2">Địa chỉ 2</label>
                                            <input type="text" 
                                                   placeholder="Địa chỉ 2"
                                                   id="address2" 
                                                   name="address2"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <p><br/></p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5 class="center">Bằng với việc đăng kí là bạn đã đồng ý với 
                                                <a class="red" href="dieukhoan.php">
                                                    điều khoản sử dụng
                                                </a>
                                                của Modern Bag</h5>
                                        </div>
                                    </div>
                                    <p><br/></p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input style="float:right;" 
                                                   value="Đăng kí" 
                                                   type="button" 
                                                   id="signup_button1" 
                                                   name="signup_button1"
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
        <div id=""></div>
        <?php include 'jsfile.php'; ?>

    </body>
</html>



















