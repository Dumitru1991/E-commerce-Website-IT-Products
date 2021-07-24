<?php

error_reporting(E_ALL ^ E_DEPRECATED);
require_once 'db.php';
if (isset($_POST['sendcontact'])) {
    $namect = $_POST['contact-name'];
    $emailct = $_POST['contact-email'];
    $subject = $_POST['contact-subject'];
    $contentct = $_POST['contact-content'];
    $sql = "INSERT INTO contacts(name, email, title, contents, created) values('$namect', '$emailct', '$subject', '$contentct', now())";
   echo $sql;
    $res = mysqli_query($con,$sql) or die("hihi");
    if ($res) {
        ?>
        <script>
            window.location = 'contact.php?cs=successs';
        </script>
        <?php

    } else {
        
    
    ?>
    <script type="text/javascript">
        window.location = 'contact.php?cf=fail';
    </script>

    <?php
    }

}
?>