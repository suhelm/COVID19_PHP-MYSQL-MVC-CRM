<html>
<head>
  <link rel="stylesheet" href="../style.css">
</head>
<div class="container">
  <div class="a-6WXKx-0"><?php include '../menu.php';?></div>
  <div class="main">
    <form method="post" action="save_facilityform.php">

    <label for="fname">Facility Name</label>
    <input type="text" id="fname" name="facilityname" placeholder="Facility name..">

    <label for="address">Address</label>
    <input type="text" id="address" name="address" placeholder="Address..">

        <label for="city">City</label>
        <input type="text" id="city" name="city" placeholder="city..">

        <label for="province">Province</label>
        <select id="province" name="province" required>
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

        <label for="phone">phone</label>
        <input type="text" id="phone" name="phone" placeholder="phone..">




        <label for="website">Website</label>
        <input type="text" id="website" name="website" placeholder="website..">


    <label for="ftype">Facility Type</label>
    <select id="ftype" name="ftype">
      <option value="P">Public Hospital</option>
      <option value="C">Private Clinic</option>
      <option value="S">Special Arrangement</option>
    </select>
  
    <input type="submit" value="Submit" name="saveData">
  </form>
    </div>

</div>



