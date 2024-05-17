<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
        <div class="pos">
       
            <form class="shadow w-450 p-3" action="loginCon.php" method="post">
                <h4 class="heading">Login Here</h4><br>
            
              <?php  if(isset($_GET['error'])){ ?>
                      <div class="alert alert-danger" role="alert">
                       <?php echo $_GET['error'];?>
                      </div>
                <?php }?>

              
              
                
              <div class="mb-3">
                    <label class="form-label">UserName</label>
                    <input type="text" class="form-control" name="uname"
                    value="<?php echo (isset($_GET['uname']))?$_GET['uname']:
                    ""?>"><br>
              </div>
              <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="pname">
                    </div> 

                    <button type="submit" class="btn btn-primary">Login</button>
                    <!-- <a href="signUP.php"class="link-secondary">Sign Up</a> -->
                    <button onclick="location.href ='signUP.php'"class="btn btn-primary">Sign Up</button>
             
            </form>

        </div>
   


</body>

</html>