<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
ul, #myUL {
  list-style-type: none;
}

#myUL {
  margin: 0;
  padding: 0;
}

.caret {
  cursor: pointer;
  -webkit-user-select: none; /* Safari 3.1+ */
  -moz-user-select: none; /* Firefox 2+ */
  -ms-user-select: none; /* IE 10+ */
  user-select: none;
}

.caret::before {
  content: "\25B6";
  color: black;
  display: inline-block;
  margin-right: 6px;
}

.caret-down::before {
  -ms-transform: rotate(90deg); /* IE 9 */
  -webkit-transform: rotate(90deg); /* Safari */'
  transform: rotate(90deg);  
}

.nested {
  display: none;
}

.active {
  display: block;
}
</style>
</head>
<body>

<img src="../logo.png" style="width:200px;height:200px;">

<ul id="myUL">
    <li><span class="caret">Covid Variants</span>
        <ul class="nested">
            <li><span class="caret"><a href="../variants/covidvariant_search.php">Search</a></li>
            <li><span class="caret"><a href="../variants/covidvariantform.php">Add New</a></li>

        </ul>
    </li>
</ul>

<ul id="myUL">
    <li><span class="caret">Provinces</span>
        <ul class="nested">
            <li><span class="caret"><a href="../provinces/province_search.php">Search</a></li>
            <li><span class="caret"><a href="../provinces/provinceform.php">Add New</a></li>

        </ul>
    </li>
</ul>

<ul id="myUL">
    <li><span class="caret">Health Worker Records</span>
        <ul class="nested">
            <li><span class="caret"><a href="../healthworker/healthworker_search.php">Search</a></li>
            <li><span class="caret"><a href="../healthworker/healthworkerform.php">Add New</a></li>
            <li><span class="caret"><a href="../healthworker/search_workerby_facility.php">Search by Facility</a></li>
            <li><span class="caret"><a href="../worklog/worklog.php">work log</a></li>
            <li><span class="caret"><a href="../worklog/unvaccinated_worker.php">UnVaccinated Workers</a></li>

        </ul>
    </li>
</ul>

<ul id="myUL">
    <li><span class="caret">Vaccines</span>
        <ul class="nested">
            <li><span class="caret"><a href="../vaccine/vaccine_search.php">Search</a></li>
            <li><span class="caret"><a href="../vaccine/vaccineform.php">Add New</a></li>
        </ul>
    </li>
</ul>

<ul id="myUL">
    <li><span class="caret">Vaccination Facilities</span>
        <ul class="nested">
            <li><span class="caret"><a href="../facility/facility_search.php">Search</a></li>
            <li><span class="caret"><a href="../facility/facilityform.php">Add New</a></li>
            <li><span class="caret"><a href="../inventory/inventory_search.php">Inventory</a></li>
            <li><span class="caret"><a href="../inventory/inventoryform.php">Add New Inventory</a></li>

        </ul>
    </li>
</ul>

<ul id="myUL">
    <li><span class="caret">Person Records</span>
        <ul class="nested">
            <li><span class="caret"><a href="../person/person_search.php">Search</a></li>
            <li><span class="caret"><a href="../person/personform.php">Add New</a></li>

        </ul>
    </li>
</ul>

<ul id="myUL">
    <li><span class="caret">PERFORM VACCINATION</span>
        <ul class="nested">
            <li><span class="caret"><a href="../vaccination/register_vacinationform.php">Record Vaccination</a></li>
        </ul>
    </li>
</ul>


<ul id="myUL">
    <li><span class="caret">Age Groups</span>
        <ul class="nested">
            <li><span class="caret"><a href="../agegroup/viewAgeGroup.php">View Age Groups</a></li>
            <li><span class="caret"><a href="../agegroup/agegroup_search.php">Search</a></li>
            <li><span class="caret"><a href="../agegroup/agegroup_form.php">Add New</a></li>
         
        </ul>
    </li>
</ul>
  
  <ul id="myUL">
    <li><span class="caret">Transfer Vaccine</span>
        <ul class="nested">
            <li><span class="caret"><a href="../transfer/transferform.php">Make a Transfer</a></li>


        </ul>
    </li>
</ul>
  

<ul id="myUL">
    <li><span class="caret">Reports</span>
        <ul class="nested">
            <li><span class="caret"><a href="../shipping/received_shipping.php">Shipping</a></li>
            <li><span class="caret"><a href="../shipping/received_shipping.php">Transfers</a></li>
            <li><span class="caret"><a href="../reports/personwithonedose.php">Persons with One Dose</a></li>
            <li><span class="caret"><a href="../reports/nfvhw.php">Not Fully Vaccinated Health Worker</a></li>
            <li><span class="caret"><a href="../reports/fvacc.php">Fully Vaccinated with Diff Vaccine</a></li>
            <li><span class="caret"><a href="../reports/inventory.php">Inventory Report</a></li>
            <li><span class="caret"><a href="../reports/vaccination_citysearch.php">Search By City Report</a></li>
        </ul>
    </li>
</ul>



<script>
var toggler = document.getElementsByClassName("caret");
var i;

for (i = 0; i < toggler.length; i++) {
  toggler[i].addEventListener("click", function() {
    this.parentElement.querySelector(".nested").classList.toggle("active");
    this.classList.toggle("caret-down");
  });
}
</script>

</body>
</html>
