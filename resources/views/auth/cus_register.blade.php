<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Customer's Register</title>
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
    </div>

    <div class="center2">
        <h1>Customer's Register</h1>

        <form action="{{route('register-cus')}}" method="post" class="login-form">
            @if(Session::has('success'))
            <b>
                <div class="alert alert-success">{{Session::get('success')}}</div>
            </b>
            @endif

            @if(Session::has('fail'))
            <b>
                <div class="alert alert-danger">{{Session::get('fail')}}</div>
            </b>
            @endif
            @csrf

            <div class="grid-container">
                <div class="txt_field">
                    <input name="name" id="name" type="text" class="form-control" placeholder="Full Name" value="{{old('name')}}">
                    <span class="text-danger"> @error('name') {{$message}} @enderror </span>

                </div>


                <div class="txt_field">
                    <input name="email" id="email" type="text" class="form-control" placeholder="Email" value="{{old('email')}}">
                    <span class="text-danger"> @error('email') {{$message}} @enderror </span>

                </div>


                <div class="txt_field">
                    <input name="username" id="username" type="text" class="form-control" placeholder="Username" value="{{old('username')}}">
                    <span class="text-danger"> @error('username') {{$message}} @enderror </span>

                </div>

                <div class="txt_field">
                    <input name="password" id="password" type="password" class="form-control" placeholder="Password" value="{{old('password')}}">
                    <span class="text-danger"> @error('password') {{$message}} @enderror </span>

                </div>

                <div class="txt_field">
                    <input name="phoneNo" id="phoneNo" type="text" class="form-control" placeholder="Phone Number" value="{{old('phoneNo')}}">
                    <span class="text-danger"> @error('phoneNo') {{$message}} @enderror </span>

                </div>

                <div class="txt_field">
                    <input name="address" id="address" type="text" class="form-control" placeholder="Address" value="{{old('address')}}">
                    <span class="text-danger"> @error('address') {{$message}} @enderror </span>

                </div>


                <input type="submit" id="submit" name="submit" value="Register">
                <div class="login_link">
                    <p>Already have account? <a href="cus_login">Login Here</a>.</p>
                </div><br>
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