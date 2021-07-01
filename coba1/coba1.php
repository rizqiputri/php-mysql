<?php

$con=mysql_connect("localhost","root","");

if (!$con)

{

die('Could not connect: ' . mysql_error());

}

mysql_select_db("mysql", $con);

print "<h2>MySQL: Simple select statement</h2>";

$result = mysql_query("select * from emp_dtl");

echo "<tableborder='1'>

<tr>

<th>EmpId</th>

<th>Firstname</th>

<th>Lastname</th>

<th>Role</th>

<th>Salary</th>

</tr>";

while($row = mysql_fetch_array($result))

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

$result = mysql_query("CREATE INDEX xyz ON emp_dtl(id)",$con);

print "<h2>MySQL: MySQl index has been Created. </h2>";

 

//Drop an index in PHP

$result = mysql_query("DROP INDEX xyz ON emp_dtl",$con);

print "<h2>MySQL: MySQl index has been Removed. </h2>";

mysql_close($con);

?>