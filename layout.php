<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="bg-light">
    <div class="col-lg-12 text-center">
    <h2 class="text-danger bg-dark p-2"><b>Flat In Building</b></h2>
     </div>
    <?php
    include("connection.php");  
    error_reporting(0);
$prob_id=$_GET['id'];

    $sql="select interior_image from property_images ,interiors where house_id=$prob_id and property_images.id=house_id";
$result=mysqli_query($conn,$sql);
    
    $sql1="select image from property_images ,interiors where house_id=$prob_id and property_images.id=house_id";
    $result1=mysqli_query($conn,$sql1);
    $row = mysqli_fetch_assoc($result1);
    echo '
        <div class="row ml-3 mr-3">
        <img src="images/'.$row['image'].'" alt="Card image" style="width:100%;height:510px">
        </div>
        <div class="col-lg-12 text-center">
            <h2 class="text-danger bg-dark p-2"><b>Interiors</b></h2>
        </div>'; 
        
        while($rows=mysqli_fetch_assoc($result))
        {
            echo '
                <div class="row">
                    <div class="col-lg-4">
                    <img src="images/'.$rows['interior_image'].'" alt="Card image" style="width:100%;height:390px;">
                    </div>
                </div>'; 
        } 
        $sql2="select * from property_images ,interiors where house_id=$prob_id and property_images.id=house_id";
        $result2=mysqli_query($conn,$sql2);
        $row1 = mysqli_fetch_assoc($result2);
        echo'   
        <div class="jumbotron jumbotron-fluid mt-3 bg-info">
            <div class="container text-center">
                <h2 class="text-danger"><b>Properties Details</b></h2>
                <div class="row mt-4">
                    <div class="col-lg-6 text-center">
                        <p><b class="w3-badge w3-xlarge w3-padding w3-green">Price</b>:<span class="w3-amber p-1" style="font-size:20px">'.$row1['price'].'</span></p>
                    </div>
                    <div class="col-lg-6 text-center">
                    
                        <p><b class="w3-badge w3-xlarge w3-padding w3-green">Flat Area</b>:<span class="w3-amber p-1" style="font-size:20px">'.$row1['flat_area'].'</span></p>
                    </div>
                </div>
            </div>
       </div>
       <div class="row">
           <div class="col-lg-12 text-center bg-dark p-2">
               <h2 class="text-danger">
                   <b>   specifications</b>
               </h2>
           </div>
       </div>
       <div class="row mt-2">
           <div class="col-lg-2"></div>
           <div class="col-lg-4 ml-2 shadow-lg p-4 mb-4 bg-white">
               <h3 class="text-success"><b>Balcony</b></h3>
               <p>Anti-Skid Ceramic Tiles/Porcelain Tiles</p>
               <h3 class="text-success"><b>Kitchen</b></h3>
               <p>Porcelain Tiles/Ceramic Tiles</p>
               <h3 class="text-success"><b>Living/Dining</b></h3>
               <p>Vitrified Tiles</p>
               <h3 class="text-success"><b>Electrical</b></h3>
               <p>Copper Wiring in Concealed Conduits with Modular Switches</p>
           </div>
           <div class="col-lg-4 ml-3 shadow-lg p-4 mb-4 bg-white">
               <h3 class="text-success"><b>Bedrooms</b></h3>
               <p>Master Bedroom: Laminated Wooden Flooring</p>
               <p>Other Bedroom: Laminated Wooden Flooring</p>
               <h3 class="text-success"><b>Toilet</b></h3>
               <p>Ceramic Tiles/Porcelain Tiles</p>
               <h3 class="text-success"><b>Doors</b></h3>
               <p>Natural Seasoned Hardware Door</p>
               <p>Main Door: Melamine Wenge Finished European Styke Moulded/Skin Shutter</p>
           </div>
           <div class="col-lg-1"></div>
        </div>';
        ?>
   
</body>
</html>