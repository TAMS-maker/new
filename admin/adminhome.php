      


</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



<style>
    @import url('https://fonts.googleapis.com/css2?family=Ephesis&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;1,100;1,200;1,300;1,400&display=swap');


html, body{
  margin: 0;
  padding: 0;
  
}

:root{
  --gold : #f0c483;
  --secodary : #242526;
   --primary: #1f1f1f;
}



.row{
  background-color: #242526;
}

a{
  font-family: 'Montserrat';

}

.navbar-collapse ul li a{
  
  color: white;
  
}


.custom-toggler-icon span {
  display: block;
  width: 40px;
  height: 2px;
  background: white;
  margin: 8px 0;
}
.custom-toggler-icon::after {
  content: "";
  display: block;
  width: 40px;
  height: 2px;
  background: var(--gold);
}
.custom-toggler-icon::before {
  content: "";
  display: block;
  width: 40px;
  height: 2px;
  background: var(--gold);
}

.logo{
  cursor: pointer;
}

#logout{
    float: right;
}

.right{
    float:right;
}


</style>

<link
rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
crossorigin="anonymous"
/>

</head>
<body>
    <div class="row">
<div class="col">
                          <a class="navbar-brand" href="index.html">
                            <img class="logo" src="../assets/logo.png"  width="40" height="40" alt="logo" />
                            
                          </a>
                         
                          </div> 

                         <div class="col mt-3"><a class ="right" href="logout.php"  id="logout">Log-out</a></div>
                                                
                                           
                         
                        


                        </div>

                        <div class="container">

<div class="center text-center "> <h1> Hi,
  <?php
     session_start();
     echo $_SESSION['User'];?>!
    
  
  
  <br>
  <br>

  <a href="http://localhost/jvp/admin/admintest.php" class="m-0 p-0">SHOW CLIENT</a>
  
  </h1></div>







</body>
<script
src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
crossorigin="anonymous"
></script>
</html>