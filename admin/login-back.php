<?php
session_start();

error_reporting(E_ALL ^ E_DEPRECATED);
require_once 'connection.php';

if (isset($_POST['submit'])) {
    $username = $_POST['user-name'];
    $password = $_POST['password'];


    $sql = "select *  from admin where username =  '$username' and password = md5('$password')";
 

    $res = mysqli_query($conn,$sql);

    $rows = mysqli_num_rows($res);
    if($rows==1){
      $_SESSION['username'] = $username;
      header("Location: product-list.php"); // Redirect user to index.php
            }else{
      echo "<div class='error_msg' style= 'color:red; width: 550px; margin:0 auto;text-align:center;    font-family: fantasy; '>The Username and/or Password entered is invalid, please try again.</div></br>";
        }
    
    if ($rows > 0) {
        $_SESSION['usernameAdmin'] = $username; // Initializing Session 
        while ($row = mysqli_fetch_array($conn,$res)) {
            $_SESSION['id-Admin'] = $row['id'];
        }
       
        ?>
        <!--
-->                <script type="text/javascript">
                    window.location = '../admin/product-list.php';
                </script>

        <?php
    } else {
        $_SESSION['error'] = 'Username or Password is invalid';
        ?>
                <script type="text/javascript">
             window.location = ' ../admin/index.php?error=wrong';
                </script>
        <?php
        die("");
        exit();
    }
} else {
//    echo 'lala';
}
//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
//    $idad = strip_tags($idad);
//    $idad = addslashes($idad);
//    insert into users(username, password, fullname,email, phone, created) 
//values('hau', md5('abc'), 'Do Thi Hau', 'haudt@gmail.com', 01674249594);
?>
 