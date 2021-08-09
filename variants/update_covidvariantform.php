

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

            $id = (isset($_POST['vid'])) ? $_POST['vid'] : null;
            $vname = (isset($_POST['vname'])) ? $_POST['vname'] : null;




            $query = "UPDATE COVID_VARIANTS SET VARIANT_TYPE='$vname' where VARIANT_ID=$id";

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

