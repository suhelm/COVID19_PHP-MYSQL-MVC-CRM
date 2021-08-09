
<html>
<head>
    <link rel="stylesheet" href="../style.css">
</head>

<div class="container">
    <div class="a-6WXKx-0"><?php include '../menu.php';?></div>

    <div class="main">
        REQUIREMENT : Get details of all the people who live in the city of Montreal and who got vaccinated at
        least two doses of different types of vaccines. (First-name, last name, date of birth, email, phone, city,
        date of vaccination, vaccination type, been infected by COVID-19 before or not).


        <?php
        include('../config.php');
        global $mysqli;
        //$searchString = $_POST['searchstring'];

        $query ="SELECT * FROM FULLY_VAC_WITH_DIFF_VACC";


        //echo $query ."<br><br>";

        $result = mysqli_query($mysqli, $query);
        $fields_num = mysqli_field_count($mysqli);

        while (($row = $result->fetch_assoc()) !== null) {
            $data[] = $row;
        }
        if ( $data==null) {
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
                        echo "<td><a href=personsingle_view.php?key=$row[$colName]>$row[$colName]</a></td>";
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
<div class="footer">

</div>

