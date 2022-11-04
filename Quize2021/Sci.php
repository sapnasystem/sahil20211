<?php 
$hostname="localhost";
$username="root";
$password="";
$dbname="quiz";

$conn=mysqli_connect("$hostname","$username","$password","$dbname");

if(mysqli_connect_errno())
{
    echo "Failed To Connect the database!!.....".mysqli_connect_error;
}

$result=mysqli_query($conn,"select *  from gk2");

echo "<center>";
echo   "<h2> WELCOME TO COMPETITIVE KEEDA</h2>";
echo   "<h3>Science QUIZE</h3>";
echo   "<hr>";
echo "</centeer>";
if(mysqli_num_rows($result)>0)
{
    echo "<table>" ;
    while($row=mysqli_fetch_array($result))
    {
        echo "<tr> ";
        echo "<td>".$row['Qid'].")".$row['Question']."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "</tr>";
        echo "<tr>";
        echo "<td><input type='radio' id='Option1' name=".$row['Qid']." class='radoptions' value=".$row['Option1']."/>".$row['Option1']."";
        echo "<input type='radio' id='Option2' name=".$row['Qid']."class='radoptions' value=".$row['Option2']."/>".$row['Option2']."";
        echo "<input type='radio' id='Option3' name=".$row['Qid']."class='radoptions' value=".$row['Option3']."/>".$row['Option3']."";
        echo "<input type='radio' id='Option4' name=".$row['Qid']."class='radoptions' value=".$row['Option4']."/>".$row['Option4']."";
        echo "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>";
        echo "</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td> <span id='span1' class='radoptions' style='color:green; display:none;'><hr/><b>Correct Answer is : ".$row['Answer']."</b><hr/></span></td>";
        echo "</tr>";


    }
    echo "</table>";
}
mysqli_close($conn);
?>

<link rel="stylesheet" href="style.css">
<center>
<button id="but1" type="button" onclick="displayans();"><b><h3> Submit</h3></b> </a></button>
<button><a href="home.php"><b><h3>HOME PAGE</h3></b></button>
<button><a href="gk2.php"><b><h3>NEXT PAGE</h3></b></a></button>
<label id="Labmsg"><label>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
   $(document).ready(function()
   {
        $("#but1").click(function()
        {
           $(".radoptions").show();
           $(".radoptions").attr("disabled",true);
           $("#but1").attr("disabled",true);
        });
    });
       function displayans()
       {
           document.getElementById("Labmsg").innerHTML="";
           var results=document.getElementByTagName('input');
           for(i=0;i<results.length;i++)
           {
               if(results[i].type=="radio")
               {
                   if(results[i].checked)
                   {
                       document.getElementById("Labmsg").innerHTML 
                       +="Q"+results[i].name+")"+"Your Selected Answer is :"+results[i].value+"<br/>" ;
                   }
               }
           }
       }
</script>