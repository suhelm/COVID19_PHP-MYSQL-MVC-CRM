<html>
<head>
  <link rel="stylesheet" href="../style.css">
</head>
<div class="container">
  <div class="a-6WXKx-0"><?php include '../menu.php';?></div>
  <div class="main">
    <form method="post" action="save_vaccineform.php">
    <label for="vname">Vaccine Name</label>
    <input type="text" id="vname" name="vaccinename" placeholder="vaccine name..">



        <label for="vstatus">Vaccine Status</label>
        <select id="vstatus" name="vstatus">
            <option value="SAFE">SAFE</option>
            <option value="SUSPENDED">SUSPENDED</option>
        </select>


        <label for="appdate">Approval Date</label>
        <input type="date" id="appdate" name="approvaldate" placeholder="vaccine status..">

        <label for="suspdate">Suspension Date</label>
        <input type="date" id="suspdate" name="suspdate" placeholder="vaccine status..">
       <br><br>
    <input type="submit" value="Submit" name="saveData">
  </form>
    </div>
  <div class="footer-1-0"><?php include 'footer.php';?></div>
</div>



