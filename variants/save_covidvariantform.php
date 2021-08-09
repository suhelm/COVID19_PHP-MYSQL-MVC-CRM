

<html>
<head>
    <link rel="stylesheet" href="../style.css">
</head>

<div class="container">
    <div class="a-6WXKx-0"><?php include '../menu.php';?></div>

    <div class="main">
        <?php
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['saveData'])) {
            include('../config.php');
            global $mysqli;

            $vid =(isset($_POST['vid'])) ? $_POST['vid'] : null;
            $vname = (isset($_POST['vname'])) ? $_POST['vname'] : null;


            $query = "INSERT INTO COVID_VARIANTS(VARIANT_ID,VARIANT_TYPE)VALUES($vid,'$vname')";
            //echo 'Executed SQL <br><br>' . $query .'</br></br>';

            if ($mysqli->query($query) === TRUE) {
                echo "<br><br>Record saved successfully";
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

