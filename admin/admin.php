<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MINDS ONLINE</title>
<style>
body {
    font-family: "Lato", sans-serif;
}



.main-head{
    height: 150px;
    background: #FFF;
   
}

.sidenav {
    height: 100%;
    background-color: #000;
    overflow-x: hidden;
    padding-top: 20px;
}


.main {
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
}

@media screen and (max-width: 450px) {
    .login-form{
        margin-top: 10%;
    }

    .register-form{
        margin-top: 10%;
    }
}

@media screen and (min-width: 768px){
    .main{
        margin-left: 40%; 
    }

    .sidenav{
        width: 40%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
    }

    .login-form{
        margin-top: 80%;
    }

    .register-form{
        margin-top: 20%;
    }
}


.login-main-text{
    margin-top: 20%;
    padding: 60px;
    color: #fff;
}

.login-main-text h2{
    font-weight: 300;
}

.btn-black{
    background-color: #000 !important;
    color: #fff;
}
</style>
</head>
<?php


include ('connect.php');


if (isset($_POST['Login']))
{


    $User = $_POST['User'];
    $Password = $_POST['Password'];

    $sql = "SELECT * FROM adminuser WHERE User = '$User' ";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array ($result, MYSQLI_ASSOC);
    $numrow = mysqli_num_rows($result);

    if ($numrow > 0)
    {

        $dbpassword = $row['Password'];

        if ($Password == $dbpassword)
        {
            session_start();
            $_SESSION['User'] = $row['User'];

            header ('location: adminhome.php');
            exit ();

        }

        else

        {
            echo 'xxx.';
        }

    }

    else
    {
        echo 'please check your username';
        echo '<br />';

    }

}


?>
<body>  






<div class="sidenav" style="background-image: url('../bg.jpg');">
         <div class="login-main-text">
            <h1>JVP</h1>
            <p>Login from here to access.</p>
         </div>
      </div>
      
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form action="admin.php" method="POST">
                  <div class="form-group">
                     <label>User Name</label>
                     <input type="text" class="form-control" placeholder="User Name" name="User" required>
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" placeholder="Password" name="Password" required>
                  </div>
                  <button type="submit" class="btn btn-black" name="Login">Login</button>
                 
               </form>
            </div>
         </div>
      </div>



</body>


</html>