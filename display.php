<?php
//including the database connection file
include_once("config.php");
 
//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($con, "SELECT * FROM users ORDER BY id DESC"); // using mysqli_query instead
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
    <!--<a href="add.html"><button>Add New Data</button></a><br/><br/>-->
 
    <table width='100%' border=0>
        <tr bgcolor='#CCCCCC'>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
			<td>Password</td>
            <td>Action</td>
        </tr>
        <?php
        //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
        while($resu = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$resu['name']."</td>";
            echo "<td>".$resu['email']."</td>";
            echo "<td>".$resu['phone']."</td>";
			echo "<td>".$resu['password']."</td>";			
            echo "<td><a href=\"delete.php?id=$resu[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
        }
        ?>
    </table>
</body>
</html>
