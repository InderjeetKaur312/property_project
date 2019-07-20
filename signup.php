<html>
    <head>
        <title>signup</title>
  
    </head>
    <body>
        <div class="wrap">
            <h2>Sign up Here</h2>
            <form action="response.php" method="POST">

                <div><input type="text" name="name" class="name" placeholder="Enter Name.." required></div>
                <div><input type="text" name="email" class="email" placeholder="Enter Email.." required></div>
                <div><input type="text" name="pswd" class="pswd" placeholder="Enter Password.." required></div>
                <div><input type="text" name="phn" class="phn" placeholder="Enter Phone Number.." required>  </div>    
                <div><input type="text" name="address" class="address" placeholder="Enter Address.." required></div>
                <input type="submit" class="button" name="submit" value="Submit">               
            </form>
        </div>    
        <link rel="stylesheet" href="signup.css">   
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="validation.js" type="text/javascript"></script> 
            </body>
</html>