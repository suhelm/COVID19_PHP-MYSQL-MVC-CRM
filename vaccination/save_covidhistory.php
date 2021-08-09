
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
            $person_id =(isset($_POST['pid'])) ? $_POST['pid'] : null;
            $idate = (isset($_POST['idate'])) ? $_POST['idate'] : null;
            $infectionvariant = (isset($_POST['infectionvariant'])) ? $_POST['infectionvariant'] : null;


            //echo 'PERSON ID' .$personId;
            $query = "INSERT INTO PERSON_COVID_HISTORY(PERSON_ID, INFECTION_DATE, COVID_VARIANT) VALUES($person_id,'$idate','$infectionvariant')";
            //echo 'Executed SQL <br><br>' . $query .'</br></br>';

            //echo $query;

            if ($mysqli->query($query) === TRUE) {
                echo "<br><br>Record updated successfully";
                if($covid_history =='Y'){
                    echo " <br><br>COVID HISTORY IS MARKED AS YES ! PLEASE RECORD COVID HISTORY";
                    echo "<br><br><a href='covidhistory.php?key='. $personId> CLICK HERE TO LOG COVID HISTORY</a>";
                }
            } else {
                echo "Error updating record: " . $mysqli->error;
            }

            $mysqli->close();
        }
        ?>
    </div>



</div>