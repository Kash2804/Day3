<?php
$a=$_POST['txt1'];
$b=$_POST['txt2'];
$c=$_POST['txt3'];
$d=$_POST['txt4'];
$e=$_POST['txt5'];
$f=($a+$b+$c+$d+$e);
$g=(($f/500)*100);
echo"<h2>Marks Obtained in each Subject</h2>";
echo"</br>MATHS:$a </br>SCINCE:$b </br>S.S:$c </br>HINDI:$d </br>ENGLISH:$e ";
echo"<b></br>Total Marks:$f</b>";
echo"<b></br>Percentage:$g%</b>";
  switch($g){
      case $g>=80: 
        echo"<b></br>First class</b>";      
       break;
      case $g>=50||$g<80:
        echo"</br><b>Second class</b>";
        break;
      case $g>=30||$g<50:
        echo"</br><b>Third class</b>";
        break;
      default:
        echo"Failed";       
    }
?>