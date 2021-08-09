<html>
<head>
  <link rel="stylesheet" href="../style.css">
</head>
<div class="container">
  <div class="a-6WXKx-0"><?php include '../menu.php';?></div>
  <div class="main">
    <form method="post" action="save_healthworkerform.php">

        <label for="empId">Health Worker ID</label>
        <input type="text" id="empId" name="empId" placeholder="Health Worker Employee ID will be auto generated" READONLY>

 <label for="fname">First Name</label>
        <input type="text" id="fname" name="fname" placeholder="First name.." required>
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lname" placeholder="Last name.." required>
        <label for="dob">Date of Birth</label>
        <input type="date" id="dob" name="dob" placeholder="Date of Birth.." required>

        <label for="citizenship">Citizenship</label>
        <input type="text" id="citizenship" name="citizenship" placeholder="Citizenship.." required>

        <label for="email">email</label>
        <input type="email" id="email" name="email" placeholder="email.." required>

        <label for="medicare">Medicare Number</label>
        <input type="text" id="medicare" name="medicare" placeholder="medicare number.." required>

        <label for="telephone">telephone</label>
        <input type="text" id="telephone" name="telephone" placeholder="telephone number.." required>

        <label for="addressline1">Address Line 1</label>
        <input type="text" id="addressline1" name="addressline1" placeholder="address line1.." required>


        <label for="addressline2">Address Line 2</label>
        <input type="text" id="addressline2" name="addressline2" placeholder="address line2" required>


        <label for="city">City</label>
        <input type="text" id="city" name="city" placeholder="city.." required>

        <label for="zipcode">Zip Code</label>
        <input type="text" id="zipcode" name="zipcode" placeholder="zipcode.." required>

        <label for="province">Province</label>
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

       <br><br>
    <input type="submit" value="Submit" name="saveData">
  </form>
    </div>

</div>



