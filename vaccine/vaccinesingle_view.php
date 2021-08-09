<html>
<head>
    <link rel="stylesheet" href="../style.css">
</head>
<?php
include('../config.php');

$key =(isset($_GET['key'])) ? $_GET['key'] : null;
//$key = $_GET['key'];
$query = "SELECT * FROM VACCINE WHERE VACCINE_ID='$key'";

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


        <form method="post" action="update_vaccineform.php">
            <label for="vid">Vaccine Id</label>
            <input type="text" id="vid" name="vid" readonly value="<?php echo (isset($data['VACCINE_ID'])) ? $data['VACCINE_ID'] : null; ?>">

            <label for="vname">Vaccine Name</label>
            <input type="text" id="vname" name="vaccinename" value="<?php echo (isset($data['VACCINE_NAME'])) ? $data['VACCINE_NAME'] : null; ?>">



            <label for="vstatus">Vaccine Status</label>
            <select id="vstatus" name="vstatus" >
                <option value="<?php echo (isset($data['VACCINE_STATUS'])) ? $data['VACCINE_STATUS'] : null;?>"><?php echo (isset($data['VACCINE_STATUS'])) ? $data['VACCINE_STATUS'] : null; ?></option>
                <option value="SAFE">SAFE</option>
                <option value="SUSPENDED">SUSPENDED</option>
            </select>


            <label for="appdate">Approval Date</label>
            <input type="date" id="appdate" name="approvaldate" value="<?php echo (isset($data['VACCINE_APPROVAL_DATE'])) ? $data['VACCINE_APPROVAL_DATE'] : null; ?>">

            <label for="suspdate">Suspension Date</label>
            <input type="date" id="suspdate" name="suspdate" value="<?php echo (isset($data['VACCINE_SUSPENDED_DATE'])) ? $data['VACCINE_SUSPENDED_DATE'] : null; ?>">
<br><br>
            <input type="submit" value="UPDATE DATA" name="updateData">
        </form>
        <form method="POST" action="delete_vaccineform.php">
            <input type="hidden"  id="vid2" name="vid2" value="<?php echo (isset($data['VACCINE_ID'])) ? $data['VACCINE_ID'] : null; ?>">
            <input type="submit" value="DELETE DATA" name="deleteData">
        </form>
    </div>

    <div class="footer-1-0">
        footer
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





