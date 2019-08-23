<html>

<head>
    <title>Project</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<!-- Header Start -->

<body class="bg-light">
    <div class="container-fluid">
        <!-- Navbar Start Here -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand" href="#">
                <!-- Logo -->
                <img src="images/log.jpg" class="rounded-circle" alt="logo" height="50px" , width="50px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active p-1">
                        <a class="nav-link w3-button w3-hover-green text-dark" href="#"><b>Home</b> <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item p-1">
                        <a class="nav-link w3-button w3-hover-green text-dark" href="#"><b>About us</b></a>
                    </li>
                    <li class="nav-item p-1">
                        <a class="nav-link w3-button w3-hover-green text-dark" href="#"><b>contact us</b></a>
                    </li>
                </ul>
                <form class="form my-2 my-lg-0 p-2">
                    <a href="..\login\login.html">
                        <button type="button" class="btn btn-info  p-2">LogIn</button>
                    </a>
                    <a href="..\signup\signup.php">
                        <button type="button" class="btn btn-info p-2">SignUp</button>
                    </a>
                </form>
            </div>
        </nav>
        <!-- Nav Bar End Here -->
        <!-- Header End -->
        <!-- Carousel Image Start -->
        <div class="row">
            <div class="col-lg-12 col-sm-12" id="main">
                <div id="background_image">
                    <!-- <input type="text" class="search-field business"> -->

                    <form action="" method="POST">
                    <div class="row">

                        <div class="col-lg-5">
                        
                            <div class="form-group text-center ">
                                <select name="city" class="form-control search-field business" id="sel1">
                                        <option selected disabled hidden>Search By Cities</option>
                              <option value="d">Delhi</option>
                              <option value="m">Mumbai</option>
                              <option value="b">Bengluru</option>
                              <option value="h">Hyderabad</option>

                               </select>
                            </div>
                        </div>
                        
                        <div class="col-lg-2">
                            <!-- <input type="text" class="search-field location" placeholder="Search By Budget"> -->
                            <button class=" search-btn w3-btn w3-round-xxlarge bg-dark" name="search">Search</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-lg-12 col-sm-12">
            <h2 class="text-center text-danger"><b>Project Gallery</b></h2>
        </div>
    </div>
         <?php    
           
            include('connection.php');
            error_reporting(0);

            $city_data=$_POST['city'];
             
             if(isset($_POST['search'])){
                $sql="select * from property_images,properties where loc_id='$city_data' and location_id=loc_id and image like 'h_%';";
                }
            else{
                    $sql="select * from property_images,properties where loc_id='d' and location_id=loc_id and image like 'h_%';";
                }
            
            $res=mysqli_query($conn,$sql);
            if($res->num_rows)
            {
                while($row=mysqli_fetch_assoc($res))
                {
                $img_data=$row['id'];
               
                echo 
                    '<div class="col-md-5 d-inline-block ml-5 mt-3">
                    <div class="card" style="width:100%;height:100%">
                    <img class="card-img-top" src="images/'.$row['image'].'" alt="Card image" style="width:100%;height:390px">
                
                    <div class="card-body">
                    <div class="row">
                        <div class="col-lg-5 ">
                            <h4 class="card-title"><b>TDI City Kundli</b></h4>
                            <p class="card-text">TDI Group</p>
                            <p class="card-text">2,3,4 BHK Flats</p>
                        </div>
                        <div class="col-lg-4"></div>

                        <div class="col-lg-3 float-right">

                            <p class="card-text">Rs.<b>28 Lac </b><span class="text-danger">onwards</span></p>
                            <a href="../property_layout/layout.php ? id='.$img_data.'" class="btn btn-primary mt-4">See Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>';              
    }
}
    ?>
        
    <!-- Section Start -->
    <div class="row mt-4">
        <div class="jumbotron jumbotron-fluid text-center">
            <h2 class="text-danger"><b>Top Cities In India</b></h2>
            <div id="small-img" class=" mx-auto col-sm-10 mt-4 col-lg-9">
                <ul class="mx-auto pl-5" id="imgs">
                    <li class="pl-4">
                        <img src="images/Delhi.jpg" class="inline-block rounded-circle">
                        <h4>Delhi</h4>
                    </li>
                    <li class="pl-4">
                        <img src="images/Mumbai.jpg" class="inline-block rounded-circle" alt="Responsive image" />
                        <h4>Mumbai</h4>
                    </li>
                    <li class="pl-4">
                        <img src="images/Bengluru.jpg" class="inline-block rounded-circle" alt="Responsive image" />
                        <h4>Bengluru</h4>

                    </li>

                    <li class="pl-4">
                        <img src="images/Hyderabad.jpg" class="inline-block rounded-circle" alt="Responsive image" />
                        <h4>Hyderabad</h4>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="jumbotron jumbotron-fluid w-100 bg-info ">
            <div class="col-lg-12">
                <h2 class="text-center text-danger"><b>Users Love Us</b></h2>

                <div class="w3-panel w3-card-4 w3-light-grey text-center mx-auto" style="width:50%">
                    <p class=" w3-large w3-serif">
                        <i class="fa fa-quote-right w3-xxlarge w3-text-red"></i>
                        <br>
                        <p>Housing.com made my life easy.It helped me with the aearch for my first ever investment i.e 1BHK apartment in Mira Road. Thanks to the team for providing relevant tools like smart search.
                        </p>
                </div>
            </div>
            <div class="text-center">
                <img src="images/User.jpg" class="rounded-circle mx-auto">
                <p>Neeti Rana</p>
            </div>

        </div>
        <!-- Section End -->
    </div>

    <!-- Footer Start -->
    <div class="row bg-dark">
        <div class="col-lg-2"></div>

        <div class="col-lg-4 mt-3">
            <h5 class=" text-danger"> About Us</h5>
            <p class="text-light">Housing.com is a marketplace where sellers can sell property or cater to those wish to rent a house. We know that buying and sellingproperty is not easy. So, this platform is made to ensure that verified listings attract genuine buyers and
                customers. Partner with Makaan.com, post property for sale or post rent ad for free and enjoy the benefits of partnering with us. We help you find joy and more. Makaan.com is the most preferred property website among buyers. When you join
                us, you get connected with only genuine buyers. Start today.
            </p>
        </div>
        <div class="col-lg-5 mt-4">
            <p class=" text-danger"> Contact Us</p>
            <p class=" text-light">Toll Free: +9876543210</p>
            <p class="text-danger">Email Us At</p>
            <p class="text-light">customer.service@housing.com</p>
            <p class="text-danger">Follow Us At:</p>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-youtube"></a>
        </div>
        <div class="col-lg-1"></div>

    </div>

    </div>
    </div>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="home.css">
</body>

</html>