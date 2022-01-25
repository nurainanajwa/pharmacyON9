<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Customer's Login</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/A.css">



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
    <?php if (isset($_SESSION['email'])) { ?>
        <div class="container">
            <div class="logo">
                <img src="logo.png" alt="" width="230" />
            </div>
            <div class="navbar">
                <a></a>
                <div class="dropdown">
                    <button class="dropbtn" onclick="myFunction()"><?php echo htmlentities($_SESSION["email"]); ?>
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content" id="myDropdown">
                        <a href="cus_profile.php">Profile</a>
                        <a href="logout.php">Logout</a>

                    </div>
                </div>
                <a href="#news">SHOP</a>
                <a href="home.php">HOME</a>

            </div>
        </div>

    <?php } else { ?>
        <div class="container">
            <div class="logo">
                <img src="logo.png" alt="" width="230" />
            </div>
            <div class="navbar">
                <a></a>
                <div class="dropdown">
                    <button class="dropbtn" onclick="myFunction()">SIGN IN
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content" id="myDropdown">
                        <a href="cus_login.php">Customer</a>
                        <a href="phar_login.php">Pharmacist</a>

                    </div>
                </div>
                <a href="#news">SHOP</a>
                <a href="home.php">HOME</a>

            </div>
        </div>
    <?php } ?>
    <script>
        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
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
    </script>
</body>

</html>