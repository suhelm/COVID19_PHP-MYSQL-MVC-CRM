<html>
<head>

    <link rel="stylesheet" href="../style.css">
    <?php
        include('../config.php');
        //include('../vfunctions/vaccination-functions.php');

    ?>
</head>
<div class="container">
    <div class="a-6WXKx-0"><?php include '../menu.php';?></div>
    <div class="main">
        <form method="post" action="save_vaccinationform.php">

            <label for="vname">Vaccine ID</label>
            <select  id="vname" name="vacid" placeholder="vaccine name..">
                <?php  getAllVaccine(); ?>
            </select>

            <label for="personid">Person ID</label>
            <select  id="personid" name="personid" placeholder="Person..">
                <?php  getAllPerson(); ?>
            </select>

            <label for="record_date">Record Date</label>
            <input type="date" id="record_date" name="record_date" placeholder="vaccination record date.." REQUIRED>

            <label for="record_date">Vaccination Facility Name</label>
            <select  id="facilityId" name="facilityId" placeholder="vaccine facility id..">
                <?php  getAllFacilities() ?>
            </select>

            <label for="workerid">Worker ID</label>
            <select  id="workerid" name="workerid" placeholder="Public Health Worker ID...">
                <?php  getFacilityWorker(); ?>
            </select>


            <label for="covid_history">Covid History </label>
            <select  id="covid_history" name="covid_history" placeholder="Covid History..">
                <option value='Y'> Yes </option>
                <option value='N'> No </option>
            </select>

            <label for="dose_no">Dose Number </label>
            <select  id="dose_no" name="dose_no" placeholder="Dose Number..">
                <option value="1"> 1 </option>
                <option value="2"> 2 </option>
            </select>

            <br><br>
            <input type="submit" value="Submit" name="saveData">
        </form>
    </div>

</div>



