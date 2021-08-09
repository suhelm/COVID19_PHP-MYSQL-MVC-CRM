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
    
    <form method="post" action="search_personform.php">
    <label for="fname">Search By User First Name or Last Name or Address</label>
    <input type="text" id="searchstring" name="searchstring" value="%">
    <input type="submit" name="searchData" value="search" name="QUERY">
  </form>



