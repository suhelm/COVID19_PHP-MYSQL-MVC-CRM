<html>
<head>
    <link rel="stylesheet" href="../style.css">
</head>
<div class="container">
    <div class="a-6WXKx-0"><?php include '../menu.php';?></div>
    <div class="main">
        <form method="post" action="../agegroup/save_agegroup.php">

            <label for="gno">Group Number</label>
            <input type="text" id="gno" name="gno" placeholder="Group Number..">


            <label for="start_age"> Start Age</label>
            <input type="text" id="start_age" name="start_age" placeholder="Start age..">

            <label for="end_age"> End Age</label>
            <input type="text" id="end_age" name="end_age" placeholder="End age..">

            <label for="province">Province</label>
            <select>
                <option value="AB">Alberta</option>
                <option value="BC">British Columbia</option>
                <option value="MB">Manitoba</option>
                <option value="NB">New Brunswick</option>
                <option value="NL">Newfoundland and Labrador</option>
                <option value="NS">Nova Scotia</option>
                <option value="ON">Ontario</option>
                <option value="PE">Prince Edward Island</option>
                <option value="QC">Quebec</option>
                <option value="SK">Saskatchewan</option>
                <option value="NT">Northwest Territories</option>
                <option value="NU">Nunavut</option>
                <option value="YT">Yukon</option>
            </select>

            <label for="province">Currently Vaccinated Group</label>
            <select id="cvg" name="cvg">
                <option value="Y">YES</option>
                <option value="N">NO</option>
            
            </select>

            <input type="submit" value="Submit" name="saveData">
        </form>
    </div>
    <div class="footer-1-0"><?php include 'footer.php';?></div>
</div>



