
@import url('https://fonts.googleapis.com/css2?family=Ephesis&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;1,100;1,200;1,300;1,400&display=swap');





html, body{
  margin: 0;
  padding: 0;
  
}

.custom-toggler-icon span {
  display: block;
  width: 40px;
  height: 2px;
  background: rgb(0, 0, 0);
  margin: 8px 0;
}
.custom-toggler-icon::after {
  content: "";
  display: block;
  width: 40px;
  height: 2px;
  background: rgb(0, 0, 0);
}
.custom-toggler-icon::before {
  content: "";
  display: block;
  width: 40px;
  height: 2px;
  background: rgb(0, 0, 0);
}




  
  .main{
    background-color: black;
  }


#jvp{
    font-family: 'Orbitron';
    color: black;
}

a{
    font-family: 'Montserrat';
    color: black;
}

h6{
  color: white;
}


.main {
  
    /* Grid */
    display: grid;
    grid-template-rows: repeat(2, 100vh) 80vh; 
  }

  .layer1 {
    grid-row: 1/2;
    background: rgb(255, 254, 254);
  }
  .layer2 {
    grid-row: 2/3;
    background: blue;
  }
  .layer3 {
    grid-row: 3/4;
    background: yellow;
  }

 