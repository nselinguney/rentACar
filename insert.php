<?php

$con = mysqli_connect("localhost:3308","root","","rentacar");

if (mysqli_connect_errno())
  {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else
	echo "bağlantı tamam";


    /*$sorgu = mysqli_query($connect,"SELECT * FROM arabalar");
    while($str=mysqli_fetch_assoc($sorgu))
	{
	print $str['arac_markasi'];
	print "<br>";
	}*/


    $bilgi=mysqli_query($con,"SELECT*FROM arabalar");
    $mevcut=mysqli_num_rows($bilgi);

?>