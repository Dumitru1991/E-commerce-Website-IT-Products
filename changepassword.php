<?php

include "db.php";
session_start();

$user_id = $_SESSION["uid"];
$admin_oldpass = $_POST["oldpass"];
$admin_newpass = $_POST["newpass"];
$admin_retypenewpass = $_POST["retypenewpass"];
$sql = "SELECT password FROM user_info WHERE user_id = $user_id";         //SQL querry
$run_query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($run_query);
$pass = $row["password"];

if (empty($admin_oldpass) || empty($admin_newpass) || empty($admin_retypenewpass)) {
    echo "
        <div class='alert alert-warning'>
            <b>Introducerea este goală!</b>
	</div>   
";
    exit();
}elseif ($admin_oldpass != $pass) {
    echo "
        <div class='alert alert-warning'>
            <b>Parola veche nu se potriveste!</b>
	</div>";
} elseif (strlen($admin_newpass) < 8) {
    echo "
        <div class='alert alert-warning'>
            <b>Parola este prea slabă!</b>
	</div>";
} elseif ($admin_newpass != $admin_retypenewpass) {
    echo "
        <div class='alert alert-warning'>
            <b>Parola reintrodusă nu se potrivește!</b>
	</div>";
} else {
    $sql = "UPDATE `shop`.`user_info` SET `password`='$admin_retypenewpass' WHERE `user_id`='$user_id';";
    $run_query = mysqli_query($con, $sql);
    echo "
        <div class='alert alert-success'>
            <b>Schimbarea parolei a reușit!</b>
	</div>
    <script type='text/javascript'>   
        $('#oldpass').val('');
        $('#newpass').val('');
        $('#retypenewpass').val('');
    </script>
";
}
?>

