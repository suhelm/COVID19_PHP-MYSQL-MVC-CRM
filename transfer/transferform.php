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
    <form method="post" action="save_transferform.php">

        <label for="tdate">Transfer Date</label>
        <input type="date" id="tdate" name="tdate" required>

    <label for="sendingFacilityId">
            Sending Facility
        </label>
        <select name="sendingFacilityId" id="sendingFacilityId"  required/>
          <?php getAllFacilities(); ?>
        </select>

        <label for="recievingFaciltyId">
            Receiving Facility
        </label>
        <select name="recievingFaciltyId" id="recievingFaciltyId"  required/>
               <?php getAllFacilities(); ?>
        </select>


        <label for="vid">Vaccine ID</label>

        <select name="vacid" id="vacid"  required/>
        <?php getAllVaccine(); ?>
        </select>

        <label for="quantity">Qyantity</label>
        <input type="text" id="quantity" name="quantity"  required>







        <input type="submit" value="Submit" name="saveData">
  </form>
    </div>

</div>




