<? php
session_start();
if(!isset($_SESSION['username'])){
header('location:login.php')
}
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet.css" type="text/css" href="bootstrap.css">
</head>


<center>
<br><br>

<h1> ONLINE Quiz Application</h1><BR><BR>

<table ><h2>
<tr>
<th>
<button type="submit" class="btn btn-primary"> <a href="gk1.php"><b>GENERAL KNOWLEDGE</b></button></td>
</tr>
<tr><th> </th></tr>
<tr>
<td><button type="submit" class="btn btn-primary"><a href="computer1.php"><b>COMPUTER</b></button></td>
</tr><tr><th></th></tr>
<tr>
<td><button type="submit" class="btn btn-primary"><a href="HISTORY.php"><b>HISTORY</b></button></td>
</tr><tr><th></th></tr>
<td><button type="submit" class="btn btn-primary"><a href="eng1.php"><b>ENGLISH</b></button></td>
</tr><tr><th></th></tr>
<tr>
<td><button type="submit" class="btn btn-primary"><a href="sci.php"><b>SCIENCE</b></button></td>
</tr><tr><th></th></tr>
<tr><td></td></tr>
<tr>
<td><button type="submit" class="btn btn-primary"><a href="geo.php"><b>GEOGRAPHY</b></button></td></tr>
</h2>
</table>
<br><br>
<br>

       <br><br>
<button type="submit" class="btn btn-primary">  <a href="login.php">LOGOUT</a></button>
 
</center>
</body>
</html>