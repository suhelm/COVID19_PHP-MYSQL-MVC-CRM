<html>
<head>

    <link rel="stylesheet" href="../style.css">
    <?php
        include('../config.php');
        //include('../vfunctions/vaccination-functions.php');
    $key =(isset($_GET['key'])) ? $_GET['key'] : null;

    ?>
</head>
<div class="container">
    <div class="a-6WXKx-0"><?php include '../menu.php';?></div>
    <div class="main">
        <form method="post" action="save_covidhistory.php">

            <label for="pid">Person Id</label>
            <input type="text" id="pid" name="pid"  value="<?php echo $key ?>" readonly>
            <label for="idate">Infection Date</label>
            <input type="date" id="idate" name="idate" required>

            <label for="infectionvariant">Infection Variant</label>
            <select  id="infectionvariant" name="infectionvariant">
                <option value="0">UNKNOWN</option>
                <?php  getCovidVariant() ?>
            </select>
            <br><br>
            <input type="submit" value="Submit" name="saveData">
        </form>
    </div>

</div>



