

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

            $fid =(isset($_POST['faciltyId'])) ? $_POST['faciltyId'] : null;
            $vid =(isset($_POST['vacid'])) ? $_POST['vacid'] : null;
            $qtty =(isset($_POST['qtty'])) ? $_POST['qtty'] : null;

            $query = "SELECT INVENTORY_ID FROM INVENTORY WHERE FACILITY_ID =$fid AND VACCINE_ID =$vid";
            echo "Check " .  $query;
            $result = mysqli_query($mysqli, $query);

            if ($mysqli->query($query) === TRUE){
                echo "data is not null, need to update";
                $query = "UPDATE INVENTORY SET QUANTITY =QUANTITY + $qtty WHERE WHERE FACILITY_ID =$fid AND VACCINE_ID =$vid";
            } else{
                $query ="INSERT INTO INVENTORY(FACILITY_ID,VACCINE_ID,QUANTITY)VALUES($fid,$vid,$qtty) ";
            }

            echo 'Executed SQL <br><br>' . $query .'</br></br>';
            if ($mysqli->query($query) === TRUE) {
                $person_id=$mysqli->insert_id;
                echo "<br><br>Inventory saved successfully !! Inventory Id : " .$person_id;
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

