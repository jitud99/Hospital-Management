<?php require('connection.php');
$ano=rand(2,1000);
?>
<html>
 <head>
  <title>Add Appointments</title>
 <link rel="stylesheet" href="css/bootstrap.css"/>
  <a href="PLIST.php">Patient list</a><td>
  <a href="DLIST.php">Doctor list</a>
  <a href="ALIST.php">Appointment list</a>
 <form name=fdadd method=post action=APP.php>
 <tr><td><table width=750 cellspacing=0 cellpadding=5>
 </table></td></tr>
 <tr><td>Speciality required </td><td><input type=text name=Speciality size=30
 maxlength=30></td></tr>
 <tr><td align=center><input type=submit name="button_2" value=Search /></td></tr>
 </form>
 </head>
 <body>
      <?php
      $AAdharid=trim($_POST["AAdharid"]);

      if (isset($_POST['button_1']))
      {
?>
<tr><td><table width=750 cellspacing=0 cellpadding=5>
<tr bgcolor=#ccccc><td align=center>Patient name</td><td align=center>Patient
Address</td><td align=center>Gender</td><td align=center></td><td
>Aadhar id</td></tr>

<?php
//$AAdharid=trim($_POST["AAdharid"]);
echo "<tr><td>$AAdharid</td></tr>";
$rs1=mysqli_query($link,"SELECT * from patient where AAdharid='$AAdharid';");
//$sno=1;


while( $row=mysqli_fetch_array($rs1)) {
echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td></tr>";

 //$sno++;
}
$error=0;
if ($AAdharid=="") { $error=1; echo "<tr><td><font color=red size=4>aadhar
can't empty</font></td></tr>"; }
if ($ano=="") { $error=1; echo "<tr><td><font color=red
size=4>ano can't empty</font></td></tr>"; }
//mysqli_query($link,"insert into appt(ano,p_Aadhar,d_Aadhar,speciality) values('$ano','$AAdharid','2','2')");
echo "Second: " . mysqli_error($link);
echo "<tr><td align=center><font size=4 color=green>Successfully
Records Inserted</font></td></tr>";
}
else if (isset($_POST['button_2'])) {


?>
<tr><td><table width=750 cellspacing=0 cellpadding=5>
<tr bgcolor=#ccccc><td>AAdharid</td><td>doctor name</td><td>Speciality</td><td></td></tr>

<?php
$Speciality=trim($_POST["Speciality"]);
echo "$Speciality";
$rs2=mysqli_query($link,"SELECT * from doct where dspec='$Speciality' and dshow='Y';");
while( $row=mysqli_fetch_array($rs2)) {
echo "<tr><td >$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";

 //$sno++;
}
}
 if (isset($_POST['button_3']))
{    $AAdharid_doct=trim($_POST["AAdharid_doct"]);
     //mysqli_query($link,"update doct SET dshow='N' where AAdharid='$AAdharid_doct' ;");
     echo "Appointment fixed with doctor Aadhar id $AAdharid_doct ";
     echo "<br>";
     echo "$AAdharid";
     //$error=0;
     //if ($AAdharid=="") { $error=1; echo "<tr><td><font color=red size=4>Name
     //can't empty</font></td></tr>"; }
     if ($AAdharid_doct=="") { $error=1; echo "<tr><td><font color=red
     size=4>Sex can't empty</font></td></tr>"; }
     if ($ano=="") { $error=1; echo "<tr><td><font color=red
     size=4>acs can't empty</font></td></tr>"; }
     mysqli_query($link,"update appt SET d_Aadhar='$AAdharid_doct' where ano=$ano ");
     echo "Second: " . mysqli_error($link);
}
?>
<form name=fdadd1 method=post action=APP.php>
<tr><td><table width=750 cellspacing=0 cellpadding=5>
     <br><br><br>
<tr><td>AAdharid of patient:&nbsp;<input type=text name=AAdharid size=30
maxlength=30></td></tr>
</table></td></tr>
</td></tr>
<tr><td>Speciality required:&nbsp;<input type=text name=Speciality size=30
maxlength=30></td></tr>
</td></tr><br>
<tr><td>Enter doctor aadharid to make appointment:&nbsp;<input type=text name=AAdharid_doct size=30
maxlength=30></td></tr><br>
<tr><td align=center><input type=submit name="button_4" value=AppointmentFix />
</td></tr>
</form>
<?php
if (isset($_POST['button_4']))
{    $error=0;
     $AAdharid_doct=trim($_POST["AAdharid_doct"]);
     $Speciality=trim($_POST["Speciality"]);
     $AAdharid=trim($_POST["AAdharid"]);
     if ($AAdharid_doct=="") { $error=1; echo "<tr><td><font color=red
     size=4>aadharid can't empty</font></td></tr>"; }
     if ($ano=="") { $error=1; echo "<tr><td><font color=red
     size=4>acs can't empty</font></td></tr>"; }
     if ($AAdharid=="") { $error=1; echo "<tr><td><font color=red size=4>aadhar
     can't empty</font></td></tr>"; }
     //if ($Speciality=="") { $error=1; echo "<tr><td><font color=red
     //size=4>ano can't empty</font></td></tr>"; }
     mysqli_query($link,"insert into appt(ano,p_Aadhar,d_Aadhar,speciality) values('$ano','$AAdharid','$AAdharid_doct','$Speciality')");
     mysqli_query($link,"update doct SET dshow='N' where AAdharid='$AAdharid_doct' ;");
     echo "Appointment fixed";

}
