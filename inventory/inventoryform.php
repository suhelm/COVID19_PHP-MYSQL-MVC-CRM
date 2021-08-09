<html>
<head>
    <?php
    include('../config.php');
    ?>
    <link rel="stylesheet" href="../style.css">
</head>
<div class="container">
    <div class="a-6WXKx-0"><?php include '../menu.php';?></div>
    <div class="main">
        <form method="post" action="../facility/save_inventory.php">

            <label for="faciltyId">Facilty</label>
            <select name="faciltyId" id="faciltyId">
              <?php getAllFacilities(); ?>
            </select>

            <label for="vacid">Vaccine ID</label>
            <select name="vacid" id="vacid">
              <?php getAllVaccine(); ?>
            </select>

            <label for="qtty">Quantity</label>
            <input type="text" id="qtty" name="qtty" placeholder="Quantity">

            <input type="submit" value="Submit" name="saveData">
        </form>
    </div>
    <div class="footer-1-0"><?php include 'footer.php';?></div>
</div>



