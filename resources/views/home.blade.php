<!DOCTYPE html>
<html lang="en">

<head>
  <title>Home</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ asset('A.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('login.css') }}" rel="stylesheet" type="text/css">
  <style>
    body {
      background-image: url('home.png');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }

    h1{
      font-size: 60px;
    }
  </style>
</head>

<body>
  <div class="container1">
    <div class="logo">
      <img src="logo.png" alt="" width="195" />
    </div>
    <div class="navbar">
      <a href="home"></a>


      <div class="dropdown1">
        <button class="dropbtn" onclick="myFunction()">SIGN IN
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown1-content" id="myDropdown">
          <a href="cus_login">Customer</a>
          <a href="phar_login">Pharmacist</a>

        </div>
      </div>

      <a href="home">HOME</a>
    </div>
  </div></br></br></br></br>
  <div class="text">
    <h1>EASY AND</h1>
    <h1>CONVENIENT<h1>
        <a href="cus_register" class="button" >SHOP NOW</a>
  </div>


  <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }

    function myFunction2() {
      document.getElementById("myDropdown2").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(e) {
      if (!e.target.matches('.dropbtn')) {
        var myDropdown = document.getElementById("myDropdown");
        if (myDropdown.classList.contains('show')) {
          myDropdown.classList.remove('show');
        }
      }
    }

    window.onclick = function(e) {
      if (!e.target.matches('.dropbtn')) {
        var myDropdown = document.getElementById("myDropdown2");
        if (myDropdown.classList.contains('show')) {
          myDropdown.classList.remove('show');
        }
      }
    }
  </script>
</body>

</html>