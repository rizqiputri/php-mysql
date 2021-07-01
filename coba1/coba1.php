<?php

$con=mysqli_connect("localhost","root","");


if (!$con)

{

die('Could not connect: ' . mysql_error());

}

mysqli_select_db($con, "mysql");

print "<h2>MySQL: Simple select statement</h2>";

$result = mysqli_query($con, "select * from emp_dtl");

echo "<tableborder='1'>

<tr>

<th>EmpId</th>

<th>Firstname</th>

<th>Lastname</th>

<th>Role</th>

<th>Salary</th>

</tr>";

while($row = mysqli_fetch_array($result,MYSQLI_BOTH))

{

echo "<tr>";

echo "<td>" . $row['id'] . "</td>";

echo "<td>" . $row['Firstname'] . "</td>";

echo "<td>" . $row['Lastname'] . "</td>";

echo "<td>" . $row['role'] . "</td>";

echo "<td>" . $row['salary'] . "</td>";

echo "</tr>";

}

echo "</table>";

 

//Create an index in PHP

$result = mysqli_query($con, "CREATE INDEX xyz ON emp_dtl(id)");

print "<h2>MySQL: MySQl index has been Created. </h2>";

 

//Drop an index in PHP

$result = mysqli_query($con,"DROP INDEX xyz ON emp_dtl");

print "<h2>MySQL: MySQl index has been Removed. </h2>";

mysqli_close($con);

?>