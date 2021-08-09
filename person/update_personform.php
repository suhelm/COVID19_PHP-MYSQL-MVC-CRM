

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

            $pid =(isset($_POST['pid'])) ? $_POST['pid'] : null;
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
            $healthworker =(isset($_POST['healthworker'])) ? $_POST['healthworker'] : null;



            $query = "UPDATE PERSON SET FIRST_NAME='$fname',LAST_NAME='$lname',DATE_OF_BIRTH='$dob',CITIZENSHIP='$citizenship',EMAIL='$email',MEDICARE_NUMBER='$medicare',TELEPHONE=$telephone,SSN_PASSPORT='$iddocno',HEALTH_WORKER='$healthworker', ID_TYPE ='$idtype' where PERSON_ID=$pid";

            //echo 'Executed SQL <br><br>' . $query .'</br></br>';

            if ($mysqli->query($query) === TRUE) {
                echo "<br><br>Person updated successfully";
                $query = "UPDATE  ADDRESS set ADDRESS_LINE1 ='$addressline1' ,ADDRESS_LINE2='$addressline2',CITY='$city',PROVINCE='$province',POSTAL_CODE='$zipcode'  WHERE  PERSON_ID=$pid";
                        if ($mysqli->query($query) === TRUE) {
                            echo "<br><br> Address updated successfully";
                        } else {
                            echo "Error updating Address: " . $mysqli->error;
                        }

            } else {
                echo "Error updating record: " . $mysqli->error;
            }

            //GENERATE THE HEALTH WORKER ID
            if ($healthworker=="Y"){
                //echo "health worker";
                $query ="update PERSON SET HEALTH_WORKER_ID=GetSequenceVal() WHERE PERSON_ID=$pid AND HEALTH_WORKER_ID IS NULL";
                if ($mysqli->query($query) === TRUE) {
                    //echo "Health worker no updated";
                }  else {
                echo "Error updating record: " . $mysqli->error;
               }
            }






                $mysqli->close();
        }
        ?>
    </div>



</div>

