<?php
//echo"welcome";
$con=pg_connect("host=localhost dbname=parking user=postgres password=soham111");

if($con!=NULL)
{
 echo"Database connected successfully";
} 
 else
{
 echo"Database connection fails";
}
?>
