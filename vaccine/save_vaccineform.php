
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
            $vaccinename =(isset($_POST['vaccinename'])) ? $_POST['vaccinename'] : null;
            $status = (isset($_POST['vstatus'])) ? $_POST['vstatus'] : null;
            $appdate = (isset($_POST['approvaldate'])) ? $_POST['approvaldate'] : null;
            $susdate = (isset($_POST['suspdate'])) ? $_POST['suspdate'] : null;


            $query = "INSERT INTO VACCINE(VACCINE_NAME,VACCINE_STATUS,VACCINE_APPROVAL_DATE,VACCINE_SUSPENDED_DATE) VALUES('$vaccinename','$status','$appdate','$susdate') ";
            echo 'Executed SQL <br><br>' . $query .'</br></br>';

            if ($mysqli->query($query) === TRUE) {
                echo "<br><br>Record updated successfully";
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