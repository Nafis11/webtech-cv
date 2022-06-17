<?php
$isPost=false;
$Name=$email=$number=$passwrd=$address=$dob="";
$city="city";
$gender="gender";
if(isset($_POST["submit"]))
{
$isPost=true;
if($_POST["name"]!="")
$Name=$_POST["name"];
if($_POST["email"]!="")
$email=$_POST["email"];
if($_POST["number"]!="")
$number=$_POST["number"];
if($_POST["passwrd"]!="")
$passwrd=$_POST["passwrd"];
if($_POST["city"]!="")
$city=$_POST["city"];
if($_POST["address"]!="")
$address=$_POST["address"];
if($_POST["gender"]!="")
$gender=$_POST["gender"];
if($_POST["dob"]!="")
$dob=$_POST["dob"];

}
?>



<html>
<head>

<title>Create an account</title>

</head>
<body>
<section id="container">

<h3>Create a new account</h3>

<br>
<br>


<form action="#" method="post">

<input type="text" id="name" name="name" placeholder="Name">
<?php
if($isPost==true && $Name=="")
echo "<span style='color:red;font-size:13px;text-align:left;'>Required</span>";
?>

<br>
<br>



<input type="email" id="email" name="email" placeholder="E-mail">
<?php
if($isPost==true && $email=="")
echo "<span style='color:red;font-size:13px;text-align:left;'>Required</span>";
?>

<br>
<br>


<input type="number" id="number" name="number" placeholder="Phone Number">
<?php
if($isPost==true && $number=="")
echo "<span style='color:red;font-size:13px;text-align:left;'>Required</span>";
?>

<br>
<br>


<input type="password" id="passwrd" name="passwrd" placeholder="Password">
<?php
if($isPost==true && $passwrd=="")
echo "<span style='color:red;font-size:13px;text-align:left;'>Required</span>";
?>

<br>
<br>


<input type="text" id="address" name="address" placeholder="Address:">
<?php
if($isPost==true && $address=="")
echo "<span style='color:red;font-size:13px;text-align:left;'>Required</span>";
?>

<br>
<br>


<select name="city">
<option value="city">city</option>
<option value="Rangpur">Rangpur</option>
<option value="Barisal">Barisal</option>
<option value="Chittagong">Chittagong</option>
<option value="Dhaka">Dhaka</option>
<option value="Kurigram">Kurigram</option>
<option value="Feni">Feni</option>
</select>

<?php
if($isPost==true && $city=="city")
echo "<span style='color:red;font-size:13px;text-align:left;'>Required</span>";
?>

<br>
<br>
<select name="gender">
<option value="Select gender">gender</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Otherss">Others</option>
</select>
<?php
if($isPost==true && $gender=="Select Gender")
echo "<span style='color:red;font-size:13px;text-align:left;'>Required</span>";
?>


<br>
<br>

<input type="date" id="dob" name="dob">
<?php
if($isPost==true && $dob=="")
echo "<span style='color:red;font-size:13px;text-align:left;'>Required</span>";
?>


<br>
<br>

<input type="submit" name="submit" value="Submit">


</form>

<a href="#">Already have an account?</a>

</section>


</body>

</html>
