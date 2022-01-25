<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">


    <!-- Admin Styling -->
    <link href="{{ asset('pharmacist.css') }}" rel="stylesheet" type="text/css">

    <title>Customer's History</title>
</head>

<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="" width="195" />
        </div>
        <i class="fa fa-bars menu-toggle"></i>
        <ul class="nav">
            <li>
                <a href="#">
                    <i class="fa fa-user"></i>
                    Pharmacist
                    <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
                </a>
                <ul>
                    <li><a href="logout">Logout</a></li>
                </ul>
            </li>
        </ul>
    </header>

    <!-- Admin Page Wrapper -->
    <div class="admin-wrapper">

        <!-- Left Sidebar -->
        <div class="left-sidebar">
            <ul>
                <li><a href="phar_products">List of Products</a></li>
                <li><a href="phar_history">Purchased History</a></li>
            </ul>
        </div>
        <!-- // Left Sidebar -->


        <!-- Admin Content -->
        <div class="admin-content">



            <div class="content">

                <h2 class="page-title">LIST OF CUSTOMER'S PURCHASED HISTORY</h2>

                <table>
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Customer Name</th>
                            <th>Date</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Total Price</th>

                   
                        </tr>

                    <tbody>
                        </thead>
                        @foreach ($order as $orders)
                        <td>{{ $orders->id }}</td>
                        <td>{{ $orders->cus_name }}</td>
                        <td>{{ $orders->created_at}}</td>
                        
                        @endforeach

                        @php $total = 0; @endphp



                        @foreach ($cart as $carts)
                        <td>{{ $carts->product_name }}</td>
                        <td>{{ $carts->quantity}}</td>
                        <td>{{ $carts->price}}</td>
                        @php $total += ((int)$carts->price) * ((int)$carts->quantity); @endphp
                        @endforeach
                        <td>RM {{$total}} </td>
                        </tr>
                       
                    </tbody>
                </table>

            </div>

        </div>
        <!-- // Admin Content -->

    </div>
    <!-- // Page Wrapper -->



    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Custom Script -->
    <script src="../../js/scripts.js"></script>

</body>

</html>