<?php
include('connection.php');
$target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["fImages"]["name"]);
$uploadOk = 1;

if (isset($_POST['addSlide'])) {
    $image = basename($_FILES["fImages"]["name"]);
    if ($image == null || $image = '') {
//        $image = $_POST['image'];
        $image = '';
        $uploadOk = 0;
    } else {
        $check = getimagesize($_FILES["fImages"]["tmp_name"]);
        if ($check !== false) {
            $image = basename($_FILES["fImages"]["name"]);

            $uploadOk = 1;
        } else {
            $image = '';
            ?>
            <script type="text/javascript">
                window.location = 'slide.php?noimage=notimage';
            </script>
            <?php
            $uploadOk = 0;
        }
    }


    //Upload image
    if (file_exists($target_file)) {
//        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
//        echo "Sorry, your file was not uploaded.";
//// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fImages"]["tmp_name"], $target_file)) {
            echo "The file " . basename($_FILES["fImages"]["name"]) . " has been uploaded.";
        } else {
//            echo "Sorry, there was an error uploading your file.";
        }
    }
    
    
     $sql = "INSERT INTO Slider(URL) VALUES ('$image')";
     echo $sql;

    $res = mysqli_query($conn,$sql);
    if($res) {
        header("location: slide.php");
    }
}
else {
    echo 'error';
}
?>