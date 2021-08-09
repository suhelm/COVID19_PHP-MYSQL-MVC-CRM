

<html>
<head>
    <link rel="stylesheet" href="../style.css">
</head>

<div class="container">
    <div class="a-6WXKx-0"><?php include '../menu.php';?></div>

    <div class="main">
        <?php
        if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['deleteData'])) {
            include('../config.php');
            global $mysqli;

            $id = $_POST['vid2'];



            $query = "DELETE FROM VACCINE WHERE VACCINE_ID='$id'";
            //echo 'Executed SQL <br><br>' . $query .'</br></br>';

            if ($mysqli->query($query) === TRUE) {
                echo "<br><br>Record deleted successfully";
            } else {
                echo "Error deleting record: " . $query->error;
            }
            $mysqli->close();
        }
        ?>
    </div>

    <div class="footer-1-0">
        footer
    </div>

</div>

