<?php 
include 'db.php';
    $sql = "SELECT * FROM Guest";                         //SQL querry
    $run_query = mysqli_query($con, $sql);
    echo mysqli_num_rows($run_query);
?>