<?php 
include "conDb.php";
header("Location:home.php?success=button clicked");

if (isset($_POST['uname']) && 
   isset($_POST['pname'])){



    $uname = $_POST['uname'];
    $pname = $_POST['pname'];
    // $pname=password_hash($pname,PASSWORD_DEFAULT);

    $data ="uname=".$uname;
    
     
	if(empty($uname)){
    	$em = "User name is required";
    	header("Location:login.php?error=$em&$data");
	    exit;

    }
	else if(empty($pname)){
    	$em = "Password is required";
    	header("Location:login.php?error=$em&$data");
	    exit;

    }
	else{

  
    	$sql ="SELECT * FROM signup WHERE username = '$uname'";

        $res=mysqli_query($conn,$sql);
        if(mysqli_num_rows($res)===1){
           $users=mysqli_fetch_assoc($res);
           $username=$users['username'];
           $password=$users['password'];   
        //    $fname=$users['fname']; 
        //    $id=$users['id'];
           if($username===$uname){
           
            if(password_verify($pname,$password)){
             header("Location:hello.php");

            }
            else{
                $em = "Incorrect Username or Password!";
                header("Location:login.php?error=$em&$data");
                exit;
            }
         }  
           else{
            $em = "Incorrect Username or Password!";
            header("Location:login.php?error=$em&$data");
            exit;     


        }
    }
        else{
        $em = "Incorrect Username or Password!";
    	header("Location:login.php?error=$em&$data");
	    exit;
    }
        }
     
    }   

else 
{
	header("Location:login.php?error=error");
	exit;
}
?>