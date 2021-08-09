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

        <form method="post" action="../agegroup/search_AgeGroupform.php">
            <label for="province">Search By Province </label>
            <input type="text" id="searchstring" name="province" value="%">
            <input type="submit" name="searchData" value="search" name="QUERY">
        </form>
    </div>
