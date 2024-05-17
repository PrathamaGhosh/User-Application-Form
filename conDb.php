<?php
 
$conn=mysqli_connect("localhost:4306","root","","signupdb");
 

//here we are checking the connection(php with db)
if($conn){
    echo "yup connection is successfull";  
}
else{
    // die("sorry failed to connect".mysqli_connect_error());
    echo "not connected";
}
 

?>