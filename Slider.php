<?php
include "db.php";
$product_query = "SELECT * FROM Slider LIMIT 4";              //SQL querry
$run_query = mysqli_query($con, $product_query);
if (mysqli_num_rows($run_query) > 0) {
    while ($row = mysqli_fetch_array($run_query)) {
            $slide_image = $row['URL'];
        echo "<img class='slide-box' src='images/$slide_image' />";
    }
}
?>

