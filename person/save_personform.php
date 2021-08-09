
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
            $fname =(isset($_POST['fname'])) ? $_POST['fname'] : null;
            $lname =(isset($_POST['lname'])) ? $_POST['lname'] : null;
            $dob =(isset($_POST['dob'])) ? $_POST['dob'] : null;
            $citizenship =(isset($_POST['citizenship'])) ? $_POST['citizenship'] : null;
            $email =(isset($_POST['email'])) ? $_POST['email'] : null;
            $medicare =(isset($_POST['medicare'])) ? $_POST['medicare'] : null;
            $telephone =(isset($_POST['telephone'])) ? $_POST['telephone'] : null;
            //$covidhistory =(isset($_POST['covidhistory'])) ? $_POST['covidhistory'] : null;
            $addressline1 =(isset($_POST['addressline1'])) ? $_POST['addressline1'] : null;
            $addressline2 =(isset($_POST['addressline2'])) ? $_POST['addressline2'] : null;
            $city =(isset($_POST['city'])) ? $_POST['city'] : null;
            $zipcode =(isset($_POST['zipcode'])) ? $_POST['zipcode'] : null;
            $province =(isset($_POST['province'])) ? $_POST['province'] : null;
            $idtype =(isset($_POST['idtype'])) ? $_POST['idtype'] : null;
            $iddocno =(isset($_POST['iddocno'])) ? $_POST['iddocno'] : null;

            if ($medicare == null){
                $medicare="NA";
            }


            $query = "INSERT INTO PERSON(FIRST_NAME,LAST_NAME,DATE_OF_BIRTH,CITIZENSHIP,EMAIL,MEDICARE_NUMBER,TELEPHONE,ID_TYPE,SSN_PASSPORT) VALUES('$fname','$lname','$dob','$citizenship','$email','$medicare','$telephone','$idtype','$iddocno')";
            //echo 'Executed SQL <br><br>' . $query .'</br></br>';
            if ($mysqli->query($query) === TRUE) {
                $person_id=$mysqli->insert_id;
                echo "<br><br>Person saved successfully !! Person Id    :  " .$person_id;
            } else {
                echo "Error updating record: " . $mysqli->error;
            }

            $query = "INSERT INTO  ADDRESS(PERSON_ID,ADDRESS_LINE1,ADDRESS_LINE2,CITY,PROVINCE,POSTAL_CODE) VALUES($person_id,'$addressline1','$addressline2','$city','$province','$zipcode')";
            //echo 'Executed SQL <br><br>' . $query .'</br></br>';
            if ($mysqli->query($query) === TRUE) {
                echo "<br><br>Address saved successfully";
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