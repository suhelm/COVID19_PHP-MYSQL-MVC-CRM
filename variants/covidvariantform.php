<html>
<head>
  <link rel="stylesheet" href="../style.css">
</head>
<div class="container">
  <div class="a-6WXKx-0"><?php include '../menu.php';?></div>
  <div class="main">
    <form method="post" action="save_covidvariantform.php">

        <label for="vid">Variant Id</label>
    <input type="text" id="vid" name="vid" placeholder="Variant ID">

    <label for="vname">Variant Name</label>
    <input type="text" id="vname" name="vname" placeholder="Variant name..">

  
    <input type="submit" value="Submit" name="saveData">
  </form>
    </div>
  <div class="footer-1-0"><?php include 'footer.php';?></div>
</div>



