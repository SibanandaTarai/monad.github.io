<html>
<head>
    <title>Add Data</title>
</head>
 
<body>
<?php
//including the database connection file
include_once("config.php");
 
if(isset($_POST['Submit'])) {    
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
	$password = $_POST['password'];
        
    // checking empty fields
    if(empty($name) || empty($phone) || empty($email) || empty($password)) {                
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($phone)) {
            echo "<font color='red'>Phone field is empty.</font><br/>";
        }
        
        if(empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }
		
        if(empty($passwors)) {
            echo "<font color='red'>Password field is empty.</font><br/>";
        }
        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else {
        // if all the fields are filled (not empty)             
        //insert data to database
        $result = mysqli_query($con, "INSERT INTO users(name,phone,email,password) VALUES('$name','$phone','$email','$password')");
        
        //display success message
        echo "<font color='green'>Registration successful.";
		header("Location:https://www.google.com"); //add page url after register
        echo "<br/><a href='index.php'>View Result</a>";
    }
}
?>
</body>
</html>
