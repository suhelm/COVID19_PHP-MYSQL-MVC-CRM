
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
            $sending =(isset($_POST['sendingFacilityId'])) ? $_POST['sendingFacilityId'] : null;
            $receiving = (isset($_POST['recievingFaciltyId'])) ? $_POST['recievingFaciltyId'] : null;
            $date = (isset($_POST['tdate'])) ? $_POST['tdate'] : null;
            $qtty = (isset($_POST['quantity'])) ? $_POST['quantity'] : null;
            $vacid = (isset($_POST['vacid'])) ? $_POST['vacid'] : null;




            $query = "INSERT INTO TRANSFER(TRANSFER_DATE,SENDING_FACILITY_ID,RECEIVING_FACILITY_ID,VACCINE_ID,QUANTITY) VALUES('$date','$sending','$receiving','$vacid','$qtty') ";
            //echo 'Executed SQL <br><br>' . $query .'</br></br>';

            if ($mysqli->query($query) === TRUE) {
                echo "<br><br>Record updated successfully";
            } else {
                echo "Error updating record: " . $mysqli->error;
            }

        $mysqli->close();
        }
        ?>
    </div>

    <div class="footer-1-0">
        footer
    </div>

</div>