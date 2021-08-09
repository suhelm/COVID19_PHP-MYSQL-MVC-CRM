<html>
<head>
    <link rel="stylesheet" href="../style.css">
</head>
<?php
include('../config.php');

$key =(isset($_GET['key'])) ? $_GET['key'] : null;
//$key = $_GET['key'];
$query = "SELECT * FROM PROVINCES WHERE SHORT_CODE='$key'";

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


        <form method="post" action="update_provinceform.php">
            <label for="scode">Short Code</label>
            <input type="text" id="scode" name="scode" readonly value="<?php echo (isset($data['SHORT_CODE'])) ? $data['SHORT_CODE'] : null; ?>">

            <label for="pname">Province Name</label>
            <input type="text" id="pname" name="pname" value="<?php echo (isset($data['PROVINCE_NAME'])) ? $data['PROVINCE_NAME'] : null; ?>">

<br><br>
            <input type="submit" value="UPDATE DATA" name="updateData">
        </form>
        <form method="POST" action="delete_provinceform.php">
            <input type="hidden"  id="vid2" name="vid2" value="<?php echo (isset($data['SHORT_CODE'])) ? $data['SHORT_CODE'] : null; ?>">
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





