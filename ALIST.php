<?php
require('connection.php');
error_reporting(1);
?>
<html>
 <head>
  <title>HOSPITAL MANAGEMENT SYSTEM</title>
  <link rel="stylesheet" href="css/bootstrap.css"/>
 </head>
 <body>
<table class="table table-bordered">

<tr bgcolor=blue><td align=center><font SIZE=6 color=white>HOSPITAL
MANAGEMENT SYSTEM</font></td></tr>
<tr><td><table align=center width=750 cellspacing=0 cellpadding=5>
<tr><td align=center><a href=dlist.php>Doctors</td><td align=center><a
href=plist.php>Patients</td><td align=center><a
href=alist.php>Appointments</td>
</table></td></tr>
<tr bgcolor=red><td ><font size=4 color=white>Appointments
List</font></td></tr>
<tr><td><a href=app.php>Add New Appointments</a></td></tr>
<tr><td><table width=750 cellspacing=0 cellpadding=5>
<tr bgcolor=#ccccc><td>ano</td><td >Patient
AAdhar</td><td>Doctor
AAdhar</td><td>Speciality</td>
</tr>
<?php

if($_GET['rno']!=null)
{
$todel=$_GET['rno'];
mysqli_query($link,"update appt SET ashow='N' where ano='$todel' ;");
}
$rs1=mysqli_query($link,"SELECT * from appt");
//$sno=1;
while( $row=mysqli_fetch_array($rs1)) {

$rs2=mysqli_query($link,"SELECT pname from patient");
$rs3=mysqli_query($link,"SELECT dname from doct where dno='$row[1]'");
$rs22=mysqli_fetch_assoc($rs2);
$rs33=mysqli_fetch_assoc($rs3);
$row1=mysqli_fetch_array($rs2);
 echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>";
 //$sno++;
}
if ($sno==1) echo "<tr><td align=center><font size=4 color=red>Records
Not Found</font></td></tr>";?>
</table></td></tr>
<tr><td align=center><hr></td></tr>
<tr><td><table width=750 cellspacing=0 cellpadding=5>

<?php
//$rs1=mysqli_query($link,"SELECT * from appt where ashow='N'");
//$sno=1;
while( $row=mysqli_fetch_array($rs1)) {

$rs2=mysqli_query($link,"SELECT pname from patient where pno='$row[2]'");
$rs3=mysqli_query($link,"SELECT dname from doct where dno='$row[1]'");
$rs22=mysqli_fetch_assoc($rs2);
$rs33=mysqli_fetch_assoc($rs3);

}

?>
</table></td></tr>
</table>
</body>
</html>
