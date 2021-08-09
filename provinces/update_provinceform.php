

<html>
<head>
    <link rel="stylesheet" href="../style.css">
</head>

<div class="container">
    <div class="a-6WXKx-0"><?php include '../menu.php';?></div>

    <div class="main">
        <?php
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['updateData'])) {
            include('../config.php');
            global $mysqli;

            $scode = (isset($_POST['scode'])) ? $_POST['scode'] : null;
            $pname= (isset($_POST['pname'])) ? $_POST['pname'] : null;




            $query = "UPDATE PROVINCES SET PROVINCE_NAME='$pname'  WHERE SHORT_CODE='$scode'";

            //echo 'Executed SQL <br><br>' . $query .'</br></br>';

            if ($mysqli->query($query) === TRUE) {
                echo "<br><br>Record updated successfully";
            } else {
                echo "Error updating record: " . $query->error;
            }
            $mysqli->close();
        }
        ?>
    </div>

    <div class="footer-1-0">
        footer
    </div>

</div>

