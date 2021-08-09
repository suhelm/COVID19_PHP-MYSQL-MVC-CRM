<html>
<head>
    <link rel="stylesheet" href="../style.css">
</head>
<?php
include('../config.php');

$key =(isset($_GET['key'])) ? $_GET['key'] : null;
//$key = $_GET['key'];
$query = "SELECT * FROM PERSON P, ADDRESS A WHERE P.PERSON_ID=A.PERSON_ID AND P.PERSON_ID='$key'";

global $mysqli;
$result = mysqli_query($mysqli, $query);
$fields_num = mysqli_field_count($mysqli);
$_SESSION["output"]=null;

?>

<div class="container">
    <div class="a-6WXKx-0"><?php include '../menu.php';?></div>

    <div class="main">


        <?php

        if ($result->num_rows > 0) {
            //echo "here";
            while($row = $result->fetch_assoc()) {
                //echo  " - Name: " . $row["FIRST_NAME"]. " " . $row["LAST_NAME"]. "<br>";
                $data=$row;
            }
            //echo  " - Name: " . $data["FIRST_NAME"]. " " . $data["LAST_NAME"]. "<br>";
        } else {
            echo "0 results";
        }
        ?>


        <form method="post" action="update_personform.php">
            <label for="pid">Person Id</label>
            <input type="text" id="pid" name="pid" readonly value="<?php echo (isset($data['PERSON_ID'])) ? $data['PERSON_ID'] : null; ?>" aria-readonly="true">

            <label for="healthworker">Is a Health Worker?</label>
            <select id="healthworker" name="healthworker">
                <option value="<?php echo (isset($data['HEALTH_WORKER'])) ? $data['HEALTH_WORKER'] : null; ?>"><?php echo (isset($data['HEALTH_WORKER'])) ? $data['HEALTH_WORKER'] : null; ?></option>
                <option value="Y">YES</option>
                <option value="N">NO</option>
            </select>
            <label for="healthworkerID">Health Worker ID</label>
            <input type="text" id="healthworkerID" name="healthworkerID" readonly value="<?php echo (isset($data['HEALTH_WORKER_ID'])) ? $data['HEALTH_WORKER_ID'] : null; ?>" aria-readonly="true" readonly>


            <label for="fname">First Name</label>
            <input type="text" id="fname" name="fname" value="<?php echo (isset($data['FIRST_NAME'])) ? $data['FIRST_NAME'] : null; ?>">

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lname" value="<?php echo (isset($data['LAST_NAME'])) ? $data['LAST_NAME'] : null; ?>">

            <label for="dob">Date of Birth</label>
            <input type="date" id="dob" name="dob" value="<?php echo (isset($data['DATE_OF_BIRTH'])) ? $data['DATE_OF_BIRTH'] : null; ?>">
<br>
            <label for="citizenship">Citizenship</label>
            <input type="text" id="citizenship" name="citizenship" value="<?php echo (isset($data['CITIZENSHIP'])) ? $data['CITIZENSHIP'] : null; ?>">

            <label for="email">email</label>
            <input type="email" id="email" name="email" value="<?php echo (isset($data['EMAIL'])) ? $data['EMAIL'] : null; ?>">
<br>
            <label for="medicare">Medicare Number</label>
            <input type="text" id="medicare" name="medicare" value="<?php echo (isset($data['MEDICARE_NUMBER'])) ? $data['MEDICARE_NUMBER'] : null; ?>">

            <label for="telephone">telephone</label>
            <input type="text" id="telephone" name="telephone" value="<?php echo (isset($data['TELEPHONE'])) ? $data['TELEPHONE'] : null; ?>">

            <label for="addressline1">Address Line 1</label>
            <input type="text" id="addressline1" name="addressline1" value="<?php echo (isset($data['ADDRESS_LINE1'])) ? $data['ADDRESS_LINE1'] : null; ?>">


            <label for="addressline2">Address Line 2</label>
            <input type="text" id="addressline2" name="addressline2" value="<?php echo (isset($data['ADDRESS_LINE2'])) ? $data['ADDRESS_LINE2'] : null; ?>">


            <label for="city">City</label>
            <input type="text" id="city" name="city" value="<?php echo (isset($data['CITY'])) ? $data['CITY'] : null; ?>">

            <label for="zipcode">Zip Code</label>
            <input type="text" id="zipcode" name="zipcode" value="<?php echo (isset($data['POSTAL_CODE'])) ? $data['POSTAL_CODE'] : null; ?>">

            <label for="province">Province</label>
            <select id="province" name="province">
                <option value="<?php echo (isset($data['PROVINCE'])) ? $data['PROVINCE'] : null; ?>"><?php echo (isset($data['PROVINCE'])) ? $data['PROVINCE'] : null; ?></option>
                <option value="AB">Alberta</option>
                <option value="BC">British Columbia</option>
                <option value="MB">Manitoba</option>
                <option value="NB">New Brunswick</option>
                <option value="NL">Newfoundland and Labrador</option>
                <option value="NS">Nova Scotia</option>
                <option value="ON">Ontario</option>
                <option value="PE">Prince Edward Island</option>
                <option value="QC">Quebec</option>
                <option value="SK">Saskatchewan</option>
                <option value="NT">Northwest Territories</option>
                <option value="NU">Nunavut</option>
                <option value="YT">Yukon</option>
            </select>
            <input type="submit" value="UPDATE DATA" name="updateData">
        </form>
        <form method="POST" action="delete_personform.php">
            <input type="hidden"  id="pid2" name="pid2" value="<?php echo (isset($data['PERSON_ID'])) ? $data['PERSON_ID'] : null; ?>">
            <input type="submit" value="DELETE DATA" name="deleteData">
        </form>
    </div>

    <div class="footer-1-0">

        <?php echo $_SESSION["output"] ?>
    </div>

</div>

</html>


    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['updateData'])) {
        //include('../config.php');
        global $mysqli;

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $country = $_POST['country'];


        $query = "update TEMPLATE set first_name='$firstname'";

        if ($mysqli->query($query) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $query->error;
        }
        $mysqli->close();
    }
    ?>

    <?php
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['deleteData'])) {
        //include('../config.php');
        global $mysqli;
     $query = "DELETE FROM  TEMPLATE WHERE FIRST_NAME=$key";
        echo $query;

        if ($mysqli->query($query) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $query->error;
        }
        //$_SESSION["output"]=$output;
        $mysqli->close();
    }
    ?>





