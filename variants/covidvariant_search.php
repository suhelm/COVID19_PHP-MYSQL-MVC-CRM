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
    
    <form method="post" action="search_covidvariantform.php">
    <label for="fname">Search String</label>
    <input type="text" id="searchstring" name="searchstring" placeholder=" search by name" value="%">
    <input type="submit" name="searchData" value="search" name="QUERY">
  </form>



