<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Your Profile</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
    <link href="{{ asset('A.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('login.css') }}" rel="stylesheet" type="text/css">

</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap');

    body {
        background-image: url('home.png');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
</style>

<body id="top">
    <div class="container1">
        <div class="logo">
            <img src="logo.png" alt="" width="230" />
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
                <button class="dropbtn" onclick="myFunction2()">SHOP
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

    <div class="center3">
        <h1>Your Profile</h1>

        <form action="" method="post" class="login-form">

            <div class="grid-container">
                <div class="txt_field">
                    <p>Full Name</p>
                    <input name="name" id="name" type="text" class="form-control" value="{{$data->name}}">

                </div>


                <div class="txt_field">
                    <p>Email</p>
                    <input name="email" id="email" type="text" class="form-control" value="{{$data->email}}">

                </div>


                <div class="txt_field">
                    <p>Username</p>
                    <input name="username" id="username" type="text" class="form-control" value="{{$data->username}}">

                </div>

                <div class="txt_field">
                    <p>Phone Number</p>
                    <input name="phoneNo" id="phoneNo" type="text" class="form-control" value="{{$data->phoneNo}}">

                </div>

                <div class="txt_field">
                    <p>Address</p>
                    <input name="address" id="address" type="text" class="form-control" placeholder="Address" value="{{$data->address}}" class="resizedTextbox">

                </div>

                <div></div>
                </br>
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