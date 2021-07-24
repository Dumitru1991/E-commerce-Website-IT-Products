<?php

include "db.php";

$f_name = $_POST["f_name"];
$l_name = $_POST["l_name"];
$email = $_POST['email'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$mobile = $_POST['mobile'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$name = "/^[A-Z][a-zA-Z ]+$/";
$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
$number = "/^[0-9]+$/";

if (empty($f_name) || empty($l_name) || empty($email) || empty($password) || empty($repassword) ||
        empty($mobile) || empty($address1) || empty($address2)) {

    echo "<script>alert('Câmpurile nu pot fi lăsate necompletate!')</script>";
    exit();
} else {
    if (!preg_match($name, $f_name)) {
        echo "<script>alert('$f_name incorect!')</script>";
        exit();
    }
    if (!preg_match($name, $l_name)) {
        echo "<script>alert('$l_name incorect!')</script>";
        exit();
    }
    if (!preg_match($emailValidation, $email)) {
        echo "<script>alert('$email incorect!')</script>";
        exit();
    }
    if (strlen($password) < 8) {
        echo "<script>alert('Parola este prea slabă!')</script>";
        exit();
    }
    if (strlen($repassword) < 8) {
        echo "<script>alert('Parola este prea slabă!')</script>";
        exit();
    }
    if ($password != $repassword) {
        echo "<script>alert('Parola incorecta!')</script>";
        exit();
    }
    if (!preg_match($number, $mobile)) {
        echo "<script>alert('$mobile incorect!')</script>";
        exit();
    }
    if ((strlen($mobile) < 10) || (strlen($mobile) > 11)) {
        echo "<script>alert('Număr de telefon din minim 10 numere!')</script>";
        exit();
    }
    //existing email address in our database
    $sql = "SELECT user_id FROM user_info WHERE email = '$email' LIMIT 1";
    $check_query = mysqli_query($con, $sql);
    $count_email = mysqli_num_rows($check_query);
    if ($count_email > 0) {
        echo "<script>alert('Acest e-mail există deja, vă rugăm să încercați din nou!')</script>";
        exit();
    } else {
        // $password = md5($password);
        $password = ($password);
        $sql = "INSERT INTO `user_info` 
		(`user_id`, `first_name`, `last_name`, `email`, 
		`password`, `mobile`, `address1`, `address2`) 
		VALUES (NULL, '$f_name', '$l_name', '$email', 
		'$password', '$mobile', '$address1', '$address2')";
        $run_query = mysqli_query($con, $sql);


        $sql1 = "SELECT * FROM Guest;";                         //SQL querry
        $run_query1 = mysqli_query($con, $sql1);
        $count = mysqli_num_rows($run_query1);
        if ($count > 0) {
            $no = 1;
            $total_amt = 0;
            while ($row = mysqli_fetch_array($run_query1)) {
                $qty = $row["Qty"];
                $pro_price = $row["Price"];
                $total = $row["Total_amt"];
                $price_array = array($total);
                $total_sum = array_sum($price_array);
                $total_amt = $total_amt + $total_sum;
            }
        }

        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $timeok = time();
        $date_orderok = date("d-m-Y H:i:s", $timeok);


        include('Guest.php');



        if ($run_query) {
            echo "
            <script type='text/javascript'>   
                alert('Succes!')
                $('#f_name').val('');
                $('#l_name').val('');
                $('#email').val('');
                $('#password').val('');
                $('#repassword').val('');
                $('#mobile').val('');
                $('#address1').val('');
                $('#address2').val('');
            </script>
			";
        }
    }
}



?>






















































