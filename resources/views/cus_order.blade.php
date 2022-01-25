<!DOCTYPE html>
<html lang="en">

<head>
  <title>Order Details</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ asset('A.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('style.css') }}" rel="stylesheet" type="text/css">
  <style>
    body {
      background-image: url('home.png');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: cover;
    }
  </style>

</head>

<body id="top">
  <div class="container1">
    <div class="logo">
      <img src="logo.png" alt="" width="195" />
    </div>
    <div class="navbar">
      <a href="home"></a>


      <div class="dropdown1">
        <button class="dropbtn" onclick="myFunction()">WELCOME
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown1-content" id="myDropdown">
          <a href="cus_profile">Profile</a>
          <a href="logout">Logout</a>

        </div>
      </div>

      <div class="dropdown1">
        <button class="dropbtn" onclick="myFunction2()">ORDER
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown1-content" id="myDropdown2">
          <a href="cus_shop">Shop</a>
          <a href="cus_cart">Cart</a>
          <a href="cus_order">Order Details</a>
          <a href="cus_history">Purchased History</a>

        </div>
      </div>

    </div>
  </div>

  <div></div>

  <div class="text" style="background-color:white; width: 550px; height: 400px; margin-top: 60px; margin-left: 350px; padding:40px">
    <h3><b>Your Order Details</b></h3>
    <form method="post">
      <table class="table" style="width:100%">

        <tr>
          <th class="">No</th>
          <th class="">Product Name</th>
          <th class="">Price</th>
          <th class="">Quantity</th>
        </tr>



        @php $total = 0; @endphp
        @foreach ($cart as $carts)
        <tr class="">
          <td class="">{{ $carts->id }}</td>
          <td class="">
            <div class="product-info">

              <a href="product_details">{{ $carts->product_name }}</a>
            </div>
          </td>
          <td class="">RM {{ $carts->price }}</td>
          <td class="">{{ $carts->quantity }}</td>
        </tr>
        @php $total += ((int)$carts->price) * ((int)$carts->quantity); @endphp
        @endforeach
      </table>
      <div class="card-footer">
        <h5 style="text-align:right">Total Price: RM {{ $total }}</h5>
      </div>
    </form>
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