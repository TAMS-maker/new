<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>test</title>

 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"/>



<!-- for date picker-->

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
        

<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>



@import url('https://fonts.googleapis.com/css2?family=Ephesis&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;1,100;1,200;1,300;1,400&display=swap');





html, body{
  margin: 0;
  padding: 0;
  background-color: #d0d0d0;  
}


.navbar{
  background-color: #242526;
}

a{
  font-Sfamily: 'Montserrat';

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
  background: white;
}
.custom-toggler-icon::before {
  content: "";
  display: block;
  width: 40px;
  height: 2px;
  background: white;
}

.logo{
  cursor: pointer;
}


  .navbar{
    overflow: auto;
  }








a{
    font-family: 'Montserrat';
    color: black;
}

h6{
  color: white;
}


#bg1{
  background-color: white;
  border: solid black 1px;

}






  </style>



</head>


<?php


include ('connect.php');

if (isset($_POST['Register']))
{
    $Fname = $_POST['Fname'];
    $Lname = $_POST['Lname'];
    $Email = $_POST['Email'];
    $Pnumber = $_POST['Pnumber'];
    $Event = $_POST['Event'];
    $Date = $_POST['Date'];
    $Guest = $_POST['Guest'];
    $Plocation = $_POST['Plocation'];
    $Clocation = $_POST['Clocation'];
    $Reception = $_POST['Reception'];
    $Host = $_POST['Host'];
    $Hmua = $_POST['Hmua'];
    $Gown = $_POST['Gown'];
    $Catering = $_POST['Catering'];
    $Band = $_POST['Band'];
    $Coordinator = $_POST['Coordinator'];
    $VP = $_POST['VP'];
    $Bcar = $_POST['Bcar'];
    $Church = $_POST['Church'];
    $Cake = $_POST['Cake'];
    $Gtable = $_POST['Gtable'];
    $Pbooth = $_POST['Pbooth'];
    $Invi = $_POST['Invi'];
    $SL = $_POST['SL'];
    $PS = $_POST['PS'];
    $Otherp = $_POST['Otherp'];
    $Others = $_POST['Others'];




    $sql = "INSERT INTO userinfo VALUES ('', '$Fname','$Lname','$Email','$Pnumber','$Event','$Date','$Guest','$Plocation','$Clocation','$Reception','$Host','$Hmua','$Gown','$Catering','$Band','$Coordinator','$VP','$Bcar','$Church','$Cake','$Gtable','$Pbooth','$Invi','$SL','$PS','$Otherp','$Others')";
    mysqli_query($con,$sql);

  
}
if (isset($_POST['Register'])) 
{
//do somthing
header("Location: booking.php");
}

?>

<body>


                      <div class="navbar navbar-expand-md">
                                            <div class="navbar-brand">
                                            <a class="navbar-brand" href="http://127.0.0.1:5501/index.html">
                          <?php 
                              if (file_exists ('assets/logo.png')) {
                                  echo '<img src="assets/logo.png" width="40" height="40">'; 
                              } 
                                  else 
                              { 
                                  echo ''; 
                              }
                          ?>
                        </a>
                                              
                                            </div>
                                            <button
                                              class="navbar-toggler"
                                              data-toggle="collapse"
                                              data-target="#myNavbarMenu"
                                            >
                                              <i class="custom-toggler-icon">
                                                <span></span>
                                              </i>
                                            </button>
                                            <div class="navbar-collapse collapse" id="myNavbarMenu">
                                              <ul class="navbar-nav ml-auto">
                                              <li class="nav-item">
                                                <a class="nav-link" href="#">PACKAGE</a>
                                              </li>
                                              <li class="nav-item">
                                                <a class="nav-link" href="gallery.html">GALLERY</a>
                                              </li>
                                              <li class="nav-item">
                                                <a class="nav-link" href="services.html">SERVICES</a>
                                              </li>
                                              <li class="nav-item">
                                                <a class="nav-link " href="http://localhost/jvp/booking.php">BOOKING</a>
                                              </li>
                                              <li class="nav-item">
                                                <a class="nav-link" href="#">ABOUT US</a>
                                              </li>
                                              </ul>
                                            </div>
                                          </div> 





<div class="container mt-5" id="bg1">





                              
                          <form action="booking.php" method="POST" class="row g-3 needs-validation" required>
                            <p><h1  class="text-center">BOOK AN EVENT NOW!</h1></p>
                             <p><h3  class="text-left">Personal Details</h3></p>
                             
                            <div class="col-lg-6 col-md-6">
                              <label for="validationCustom01" class="form-label">First name</label>
                              <input type="text" class="form-control" id="validationCustom01" name="Fname" required>
                              <div class="valid-feedback">
                                Looks good!
                              </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                              <label for="validationCustom02" class="form-label">Last name</label>
                              <input type="text" class="form-control" id="validationCustom02"  name="Lname"  required>
                              <div class="valid-feedback">
                                Looks good!
                              </div>
                            </div>

                            
                            <div class="col-md-6">
                              <label for="email" class="form-label">Email Address</label>
                              <input type="email" class="form-control" id="email" name="Email"  required>
                              <div class="invalid-feedback">
                                Please provide a valid Email Address.
                              </div>
                            </div>

                            <div class="col-md-6">
                              <label for="phone" class="form-label">Phone Number</label>
                              <input class="form-control" id="phone" name="Pnumber" type="number" onKeyPress="if(this.value.length==11) return false;"  required>
                              <div class="invalid-feedback">
                                Please provide a valid Phone Number.
                              </div>
                            </div>

                            <div class="col-lg-12 col-md-3">
                              <label for="validationCustom05" class="form-label">TYPE OF EVENT</label>
                              <select class="form-select" id="validationCustom05" name="Event"  required>
                                <option selected disabled value="">Choose...</option>
                                <option >Wedding</option>
                                <option >Birthday</option>
                                <option >Debut</option>
                              </select>
                              <div class="invalid-feedback">
                                Please select a valid state.
                              </div>
                            </div>

                            <div class="col-md-6">
                            <input type="text" name="Date" class="form-control datepicker" autocomplete="off">
                            </div>

                            <div class="col-lg-6 col-md-3 mb-5">
                              <label for="validationCustom06" class="form-label">ESTIMATED GUEST COUNT</label>
                              <select class="form-select" id="validationCustom06" name="Guest" required>
                                <option selected disabled value="">Choose...</option>
                                <option >0-49</option>
                                <option >50-74</option>
                                <option >75-99</option>
                              </select>
                              <div class="invalid-feedback">
                                Please select a valid state.
                              </div>
                            </div>



                           
                          


                          

</div>



<div class="container mt-5" id="bg1">

<p><h3 class="text-left">Event Details</h3></p>

<div class="container">


                            <div class="col-lg-6 col-md-6">
                              <label for="location" class="form-label">Pre.location</label>
                              <input type="text" class="form-control" id="location" name="Plocation" required>
                            </div>

                            <div class="col-lg-6 col-md-6">
                              <label for="Clocation" class="form-label">Church location</label>
                              <input type="text" class="form-control" id="Clocation" name="Clocation" required>
                            </div>

                            <div class="col-lg-6 col-md-6">
                              <label for="Recep" class="form-label">Reception</label>
                              <input type="text" class="form-control" id="Recep" name="Reception" required>
                            </div>

                            <div class="col-lg-6 col-md-6">
                              <label for="host" class="form-label">Host</label>
                              <input type="text" class="form-control" id="host" name="Host" required>
                            </div>

                            <div class="col-lg-6 col-md-6">
                              <label for="hmua" class="form-label">Hmua</label>
                              <input type="text" class="form-control" id="hmua" name="Hmua" required>
                            </div>

                            <div class="col-lg-6 col-md-6">
                              <label for="gown" class="form-label">Gown</label>
                              <input type="text" class="form-control" id="gown" name="Gown" required>
                            </div>
 
                            <div class="col-lg-6 col-md-6">
                              <label for="cat" class="form-label">Catering</label>
                              <input type="text" class="form-control" id="cat" name="Catering" required>
                            </div>

                            <div class="col-lg-6 col-md-6">
                              <label for="band" class="form-label">Band</label>
                              <input type="text" class="form-control" id="band" name="Band" required>
                            </div>
 
                            <div class="col-lg-6 col-md-6">
                              <label for="coordinator" class="form-label">Coordinator</label>
                              <input type="text" class="form-control" id="coordinator" name="Coordinator" required>
                            </div>

                            <div class="col-lg-6 col-md-6">
                              <label for="vid&pho" class="form-label">Video & Photo</label>
                              <input type="text" class="form-control" id="vid&pho" name="VP" required>
                            </div>

                          
                            <div class="col-lg-6 col-md-6">
                              <label for="b-car" class="form-label">Bridal car</label>
                              <input type="text" class="form-control" id="b-car" name="Bcar" required>
                            </div>

                            <div class="col-lg-6 col-md-6">
                              <label for="church" class="form-label">Church</label>
                              <input type="text" class="form-control" id="church" name="Church" required>
                            </div>
 
                            <div class="col-lg-6 col-md-6">
                              <label for="cake" class="form-label">Cake</label>
                              <input type="text" class="form-control" id="cake" name="Cake" required>
                            </div>

                            <div class="col-lg-6 col-md-6">
                              <label for="g-table" class="form-label">Grazing table</label>
                              <input type="text" class="form-control" id="g-table" name="Gtable" required>
                            </div>
 
                            <div class="col-lg-6 col-md-6">
                              <label for="p-booth" class="form-label">Photo Booth</label>
                              <input type="text" class="form-control" id="p-booth" name="Pbooth" required>
                            </div>
 
                            <div class="col-lg-6 col-md-6">
                              <label for="invi" class="form-label">Invitation</label>
                              <input type="text" class="form-control" id="invi" name="Invi" required>
                            </div>

                            <div class="col-lg-6 col-md-6">
                              <label for="S&L" class="form-label">Sound & Light</label>
                              <input type="text" class="form-control" id="S&L" name="SL" required>
                            </div>

                            <div class="col-lg-6 col-md-6">
                              <label for="P&S" class="form-label">Primary & Secondary sponsor</label>
                              <input type="text" class="form-control" id="P&S" name="PS" required>
                            </div>

                            <div class="col-lg-6 col-md-6">
                              <label for="other-p" class="form-label">Other performers</label>
                              <input type="text" class="form-control" id="other-p" name="Otherp" required>
                            </div>

                            <div class="col-lg-6 col-md-6">
                              <label for="other" class="form-label">Other/s</label>
                              <input type="text" class="form-control" id="other" name="Others" required>
                            </div>
 
 <br>

<div class="col-12">
                              <button class="btn btn-primary" type="submit" name="Register">Submit form</button>
                            </div>
                          </form>  



  </div>   

</div>

   

    <p class="text-center text-white" id="footer"><h6 class="text-center text-white">© 2022 JVP Event Planner Management System. Website design & management by Hi tams & Friends</h6></p>


</body>
     
<script type="text/javascript">
   
    $('.datepicker').datepicker({ 
        startDate: '+9d',
        changeMonth: true,
        todayHighlight : true
    });
  
  
</script>

   <!--for datepicker-->












<script
src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
crossorigin="anonymous"
></script>
<script
src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
crossorigin="anonymous"
></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>