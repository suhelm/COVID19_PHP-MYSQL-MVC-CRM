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

      <select method="post" action="save_vaccinationform.php">

        <label for="tdate">Record Date</label>
        <input type="date" id="tdate" name="tdate" required/>

       <label for="facilityId">
            Facility
        </label>
        <select name="facilityId" id="facilityId"  required/>
          <?php getAllFacilities(); ?>
        </select>

        <label for="personId">
            Facility
        </label>

        <select name="personId" id="personId"  required/>
        <?php getAllPerson() ?>
        </select>

        <label for="vaccineId">
            Vaccine
        </label>


        <label for="vacid">Vaccine ID</label>

        <select name="vacid" id="vacid"  required/>
        <?php getAllVaccine(); ?>
        </select>

        <label for="doseNo">Dose No</label>
        <select name="doseNo" id="doseNo"  required/>
        <option value="1">1</option>
        <option value="2">2</option>
        </select>

      <label for="covidhistory">Has Covid history</label>
      <select name="covidhistory" id="covidhistory"  required/>
      <option value="Y">YES</option>
      <option value="N">NO</option>
      </select>

        <input type="submit" value="Submit" name="saveData">
  </form>
    </div>
  <div class="footer-1-0"><?php include 'footer.php';?></div>
</div>




