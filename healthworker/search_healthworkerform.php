

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
        $query = "SELECT P.HEALTH_WORKER_ID,P.PERSON_ID,P.FIRST_NAME,P.LAST_NAME,A.ADDRESS_LINE1,A.ADDRESS_LINE2,A.CITY,A.POSTAL_CODE,A.PROVINCE FROM PERSON P,ADDRESS A WHERE P.HEALTH_WORKER = 'Y' AND P.PERSON_ID = A.PERSON_ID ";

        //echo $query ."<br><br>";

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



                    if ($colName == "PERSON_ID") {
                        echo "<td><a href=../person/personsingle_view.php?key=$row[$colName]>$row[$colName]</a></td>";
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

