<?php
include('../config.php');
?>
<html>
<head>
  <link rel="stylesheet" href="../style.css">
</head>
<div class="container">
  <div class="a-6WXKx-0"><?php include '../menu.php';?></div>
  <div class="main">
    
    <form method="post" action="search_inventoryorm.php">
    <label for="fname">Search By Facility Id</label>
    <input type="text" id="searchstring" name="searchstring" value="%">
    <input type="submit" name="searchData" value="search" name="QUERY">
  </form>



