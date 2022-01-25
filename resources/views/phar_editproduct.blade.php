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

    <title>Edit Product</title>
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
                    <li><a href="logout" class="logout">Logout</a></li>
                </ul>
            </li>
        </ul>
    </header>

    <!-- Admin Page Wrapper -->
    <div class="admin-wrapper">

        <!-- Left Sidebar -->
        <div class="left-sidebar">
            <ul>
                <li><a href="/phar_products">List of Products</a></li>
                <li><a href="/phar_history">Purchased History</a></li>
            </ul>
        </div>
        <!-- // Left Sidebar -->


        <!-- Admin Content -->
        <div class="admin-content">

            <div class="content">

                <h2 class="page-title">EDIT PRODUCT</h2>

                <form action="{{url('update-product'.$products->id)}}" method="post" enctype="multipart/form-data">
                    @if(Session::has('success'))
                    <b>
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                    </b>
                    @endif
                
                    @csrf
                    @method('PUT')
                  

                    <div>
                        <label>NAME</label>
                        <input type="text" name="name" value="{{$products->name}}" class="text-input">
                    </div>

                    <div>
                        <label>EXP.DATE</label>
                        <input type="text" name="exp_date" value="{{$products->exp_date}}"class="text-input">
                    </div>

                    <div>
                        <label>PRICE</label>
                        <input type="text" name="price" value="{{$products->price}}" class="text-input" >
                    </div>

                    <div>
                        <label>STOCK</label>
                        <input type="text" name="stock" value="{{$products->stock}}" class="text-input">
                    </div>

                    <div>
                        <label>DESCRIPTION</label></br>
                        <textarea id="description" type="text" class="text-input" name="description">{{ $products->description }}</textarea>
                       
                    </div>

                    <div>
                        <label>IMAGE</label></br>
                        
                        <img src ="{{asset('uploads/product/'.$products->image)}}" width="200px" height="200px" alt="Image">
                        <input type="file" name="image" class="text-input">
                    </div>

                    <div>
                        <button type="submit" class="btn btn-big" value="Submit">Update Product</button>
                    </div>
                </form>

            </div>

        </div>
        <!-- // Admin Content -->

    </div>
    <!-- // Page Wrapper -->



    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Ckeditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
    <!-- Custom Script -->
    <script src="../../js/scripts.js"></script>

</body>

</html>