

<html>
<head>
    <link rel="stylesheet" href="../style.css">
</head>

<div class="container">
    <div class="a-6WXKx-0"><?php include '../menu.php';?></div>

    <div class="main">

        <?php
        include('../config.php');
        global $mysqli;
        $searchString = $_POST['searchstring'];

        $query = "SELECT VACCINE_NAME as 'Vaccine Type',sum(QUANTITY) as 'Vaccine Count', PROVINCE from INVENTORY,
   VACCINATION_FACILITIES, VACCINE
    where INVENTORY.FACILITY_ID = VACCINATION_FACILITIES.FACILITY_ID and INVENTORY.VACCINE_ID = VACCINE.VACCINE_ID
    group by PROVINCE, VACCINE_NAME order by PROVINCE asc ,'Vaccine Count' desc;";

        echo "Inventory Count <br/>";

        $result = mysqli_query($mysqli, $query);
        $fields_num = mysqli_field_count($mysqli);

        while (($row = $result->fetch_assoc()) !== null) {
            $data[] = $row;
        }
        if ( @$data==null) {
            echo " No Records Found ";

        }

        if ( @$data!==null) {
            //echo 'data hay';
            @$colNames = array_keys(reset($data));

            echo "<table class=table>";
            echo "<thead>";

            foreach ($colNames as $colName) {
                if ($colName != "pkey") {
                    if ($colName != "screenname") {
                        echo "<th>$colName</th>";
                    }
                }
            };
            echo "</thead>";
            foreach ($data as $row) {
                echo "<tr>";
                foreach ($colNames as $colName) {



                    if ($colName == "FACILITY_ID") {
                        echo "<td><a href=facilitysingle_view.php?key=$row[$colName]>$row[$colName]</a></td>";
                    }else{
                        echo "<td>" . $row[$colName] . "</td>";
                    }

                }

                echo "</tr>";
            }


        }
        ?>

    </div>



</div>

