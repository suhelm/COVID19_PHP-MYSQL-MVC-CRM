
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
            $record_date =(isset($_POST['record_date'])) ? $_POST['record_date'] : null;
            $facilityId = (isset($_POST['facilityId'])) ? $_POST['facilityId'] : null;
            $personId = (isset($_POST['personid'])) ? $_POST['personid'] : null;
            $vaccineId = (isset($_POST['vacid'])) ? $_POST['vacid'] : null;
            $doseNo= (isset($_POST['dose_no'])) ? $_POST['dose_no'] : null;
            $covid_history= (isset($_POST['covid_history'])) ? $_POST['covid_history'] : null;

            //echo 'PERSON ID' .$personId;
            $query = "INSERT INTO VACCINATION(person_id, record_date, record_facility_id, vaccine_id, dose_no, HAS_INFECTION_HISTORY) values ($personId, '$record_date', $facilityId, $vaccineId, $doseNo, '$covid_history')";
            //echo 'Executed SQL <br><br>' . $query .'</br></br>';

            //echo $query;

            if ($mysqli->query($query) === TRUE) {
                echo "<br><br>Record updated successfully";
                if($covid_history =='Y'){
                    echo " <br><br>COVID HISTORY IS MARKED AS YES ! PLEASE RECORD COVID HISTORY";
                    echo "<br><br><a href=covidhistory.php?key=".$personId."> CLICK HERE TO LOG COVID HISTORY</a>";
                }
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