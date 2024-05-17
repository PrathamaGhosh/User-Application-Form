<?php 

if(isset($_POST['fname']) && 
   isset($_POST['uname']) && 
   isset($_POST['pname'])){

    include "conDb.php";

    $fname = $_POST['fname'];
    $uname = $_POST['uname'];
    $pname = $_POST['pname'];

    $data = "fname=".$fname."uname=".$uname;
    
    if (empty($fname)) {
    	$em = "Full name is required";
    	header("Location:home.php?error=$em&$data");
	    exit;

    }
	else if(empty($uname)){
    	$em = "User name is required";
    	header("Location:home.php?error=$em&$data");
	    exit;

    }
	else if(empty($pname)){
    	$em = "Password is required";
    	header("Location:home.php?error=$em&$data");
	    exit;

    }
	else{

    	// hashing the password
    	$pname = password_hash($pname,PASSWORD_DEFAULT);
    	$sql = "INSERT INTO signup(fullname, username, password) 
    	        VALUES('$fname','$uname','$pname')";
        $res=mysqli_query($conn,$sql);
    	header("Location:home.php?success=Your account has been created successfully");
	    exit;
    }
}
else 
{
	header("Location:home.php?error=error");
	exit;
}