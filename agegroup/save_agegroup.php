
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

            //$vaccinename = $_POST['vaccinename'];
            $gno=(isset($_POST['gno'])) ? $_POST['gno'] : null;
            $start_age = (isset($_POST['start_age'])) ? $_POST['start_age'] : null;
            $end_age= (isset($_POST['end_age'])) ? $_POST['end_age'] : null;
            $province = (isset($_POST['province'])) ? $_POST['province'] : null;
            $cvg = (isset($_POST['cvg'])) ? $_POST['cvg'] : null;



            $query = " INSERT INTO AGE_GROUP(group_no, start_age, end_age, province, CURRENT_VAC_GROUP) values ($gno, $start_age, $end_age, '$province', '$cvg');";
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