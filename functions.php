<?php
include('../config.php');

function displayTable($table_name){
    global $db;
    $whereClause="1=1";
    $query = "SELECT * FROM {$table_name}";

    $result = mysqli_query($db, $query);
    $fields_num = mysqli_field_count($db);



    while (($row = $result->fetch_assoc()) !== null) {
        $data[] = $row;
    }

    if ( @$data!==null) {
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
                if ($colName != "pkey") {
                    if ($colName != "screenname") {
                        echo "<td>" . $row[$colName] . "</td>";
                    }

                }
            }
            echo "<td><a href=" . @$row['screenname'] . "_view.php?" . @$row['pkey'] . ">view</a>";


            echo "</tr>";
        }
    }



    mysqli_free_result($result);
}
    ?>