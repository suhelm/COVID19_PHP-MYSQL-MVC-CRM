<?php
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "SUMMER_MIDTERM";

$servername = "";
$username = "";
$password = "";
$dbname = "";


// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($mysqli ->connect_error) {
    die("Connection failed: " . $mysqli ->connect_error);
}


function getAllFacilities()
{
    global $mysqli;
    $query = "SELECT  FACILITY_ID ,FACILITY_NAME from VACCINATION_FACILITIES";
    $result = mysqli_query($mysqli, $query);
    //$numRows=mysqli_num_rows($result);
    $regions = array();
    while ($row = $result->fetch_row()) {
        echo  "<option value=$row[0] >$row[0] - $row[1] $row[2] </option>";
        $regions[]=$row;
    }

    return $regions;

}

function getAllVaccine()
{
    global $mysqli;
    $query = "SELECT  VACCINE_ID ,VACCINE_NAME from VACCINE";
    $result = mysqli_query($mysqli, $query);
    //$numRows=mysqli_num_rows($result);
    $regions = array();
    while ($row = $result->fetch_row()) {
        echo  "<option value=$row[0] >$row[0] - $row[1] $row[2] </option>";
        $regions[]=$row;
    }
    return $regions;
}

function getAllPerson()
{
    global $mysqli;
    $query = "SELECT  PERSON_ID ,FIRST_NAME,LAST_NAME from PERSON";
    $result = mysqli_query($mysqli, $query);
    //$numRows=mysqli_num_rows($result);
    $regions = array();
    while ($row = $result->fetch_row()) {
        echo  "<option value=$row[0] >$row[0] - $row[1] $row[2] </option>";
        $regions[]=$row;
    }
    return $regions;
}

function getFacilityWorker()
{
    global $mysqli;
    $query = "select HEALTH_WORKER_ID,PERSON_ID,FIRST_NAME,LAST_NAME from PERSON where HEALTH_WORKER='Y'";
    $result = mysqli_query($mysqli, $query);
    //$numRows=mysqli_num_rows($result);
    $regions = array();
    while ($row = $result->fetch_row()) {
        echo  "<option value=$row[0] >$row[0] - $row[1] $row[2] </option>";
        $regions[]=$row;
    }
    return $regions;
}

function getCovidVariant()
{
    global $mysqli;
    $query = "select VARIANT_ID, VARIANT_TYPE from COVID_VARIANTS";
    $result = mysqli_query($mysqli, $query);
    //$numRows=mysqli_num_rows($result);
    $regions = array();
    while ($row = $result->fetch_row()) {
        echo  "<option value=$row[0] >$row[0] - $row[1] $row[2] </option>";
        $regions[]=$row;
    }
    return $regions;
}

?>
