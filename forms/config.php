<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME','farukfolio');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

 
$msg = "";
$error = "";
if (isset($_POST['submit'])) {  
        $name = $_POST['name'];    
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
 
        $query=mysqli_query($con,"insert into tblmessages(name,email,subject,message) values('$name','$email','$subject','$message')");
        if($query) {
            $msg = "Message sent successfully ";
        } else {
            $error = "Something went wrong . Please try again.";
        }
    }
 
 
?>
