<html>
<head>
    <link rel="stylesheet" href="../style.css">
</head>
<?php
include('../config.php');

$key =(isset($_GET['key'])) ? $_GET['key'] : null;
//$key = $_GET['key'];
$query = "SELECT * FROM VACCINATION_FACILITIES WHERE FACILITY_ID='$key'";

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


        <form method="post" action="update_facilityform.php">

            <label for="fid">Facility Id</label>
            <input type="text" id="fid" name="fid" value="<?php echo (isset($data['FACILITY_ID'])) ? $data['FACILITY_ID'] : null; ?>" readonly>

            <label for="fname">Facility Name</label>
            <input type="text" id="fname" name="facilityname" value="<?php echo (isset($data['FACILITY_NAME'])) ? $data['FACILITY_NAME'] : null; ?>">

            <label for="address">Address</label>
            <input type="text" id="address" name="address" value="<?php echo (isset($data['ADDRESS'])) ? $data['ADDRESS'] : null; ?>">

            <label for="city">City</label>
            <input type="text" id="city" name="city" value="<?php echo (isset($data['CITY'])) ? $data['CITY'] : null; ?>">

            <label for="province">Province</label>
            <select id="province" name="province" required>
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

            <label for="phone">phone</label>
            <input type="text" id="phone" name="phone" value="<?php echo (isset($data['PHONE_NUMBER'])) ? $data['PHONE_NUMBER'] : null; ?>">

            <label for="website">Website</label>
            <input type="text" id="website" name="website" value="<?php echo (isset($data['WEB_ADDRESS'])) ? $data['WEB_ADDRESS'] : null; ?>">


            <label for="ftype">Facility Type</label>
            <select id="ftype" name="ftype">
                <option value="<?php echo (isset($data['FACILITY_TYPE'])) ? $data['FACILITY_TYPE'] : null;?>"><?php echo (isset($data['FACILITY_TYPE'])) ? $data['FACILITY_TYPE'] : null; ?></option>
                <option value="P">Public Hospital</option>
                <option value="C">Private Clinic</option>
                <option value="S">Special Arrangement</option>
            </select><br><br>
            <input type="submit" value="UPDATE DATA" name="updateData">
        </form>
        <form method="POST" action="delete_facilityform.php">
            <input type="hidden"  id="fid2" name="fid2" value="<?php echo (isset($data['FACILITY_ID'])) ? $data['FACILITY_ID'] : null; ?>">
            <input type="submit" value="DELETE DATA" name="deleteData">
        </form>
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





