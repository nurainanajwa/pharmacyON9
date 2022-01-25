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

    <title>List of Product</title>
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
            <div class="button-group">
                <a href="phar_addnew" class="btn btn-big">Add New Products</a>
            </div></br>
                <h2 class="page-title">LIST OF PRODUCTS</h2>

                <table>
                    <thead>
                        <tr>
                        <th>ID</th> 
                        <th>NAME</th> 
                        <th>PRICE</th>
                        <th>EXP.DATE</th>
                        <th>STOCK</th>
                        <th>DESCRIPTION</th>
                        <th>IMAGE</th>

                        <th colspan="3">ACTION</th>
                        </tr>
                  
                    <tbody>
                    </thead>
                    @foreach ($products as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->exp_date}}</td>
                            <td>{{$item->price}}</td>
                            <td>{{$item->stock}}</td>
                            <td>{{$item->description}}</td>
                            
                            <td>
                                <img src ="{{asset('uploads/product/'.$item->image)}}" width="50px" height="50px" alt="Image">
                            </td>
                            <td><a href="{{ url('edit-product'.$item->id)}}" class="edit" >EDIT</a></td>
                            <td><a href="{{ url('delete-product/'.$item->id)}}" class="delete" >DELETE</a></td>
                        </tr>
                        @endforeach
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