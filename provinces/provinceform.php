<html>
<head>
  <link rel="stylesheet" href="../style.css">
</head>
<div class="container">
  <div class="a-6WXKx-0"><?php include '../menu.php';?></div>
  <div class="main">All form Goes here
    <form method="post" action="save_provinceform.php">
    <label for="scode">Short Code</label>
    <input type="text" id="scode" name="scode" placeholder="Province Short Code..">

    <label for="pname">Last Name</label>
    <input type="text" id="pname" name="pname" placeholder="Province Name">
  
    <input type="submit" value="Submit" name="saveData">
  </form>
    </div>
  <div class="footer-1-0"><?php include 'footer.php';?></div>
</div>



