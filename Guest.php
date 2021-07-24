<?php
	$q1 = "INSERT INTO history VALUES('NULL','$f_name','$total_amt','Đã thanh toán','$date_orderok');";
    
    $q2 = "DROP TABLE Guest;";
    
    $q3 = "
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
	$q4 ="ALTER TABLE Guest ADD PRIMARY KEY (ID);";
	$q5 = "ALTER TABLE Guest MODIFY ID INT(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;";

	$rrrrrr = mysqli_query($con, $q1);
	$rrrrrrr = mysqli_query($con, $q2);
	$rrrrrrrr = mysqli_query($con, $q3);
	$rrrrrrrrr = mysqli_query($con, $q4);
	$rrrrrrrrrr = mysqli_query($con, $q5);
?>