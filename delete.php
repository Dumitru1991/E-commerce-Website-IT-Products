<?php

include "db.php";
$q1 = "DROP TABLE IF EXISTS `Guest`;";
$q2 = "
    CREATE TABLE Guest
    (
	ID INT(100),
        Pro_ID INT(100),
        Pro_name VARCHAR(255),
        Date_order VARCHAR(255),
        Product_image VARCHAR(255),
        Qty INT(100),
        Price INT(100),
        Total_amt INT(100)
    )ENGINE=InnoDB DEFAULT CHARSET=utf8;";
$q3="ALTER TABLE Guest ADD PRIMARY KEY (ID);";
$q4="ALTER TABLE Guest MODIFY ID INT(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;";

$r1 = mysqli_query($con, $q1);
$r2 = mysqli_query($con, $q2);
$r3 = mysqli_query($con, $q3);
$r4 = mysqli_query($con, $q4);

?>
