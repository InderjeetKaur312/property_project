<?php
   include ("connection.php");
if(isset($_POST['email']) && isset ($_POST['password']))
{
    $email=$_POST["email"];
    $pass=$_POST["password"];
   $query=mysqli_query($conn,"select * from users where email='$email' && pasword='$pass'");
    $count=mysqli_num_rows($query);
    if($count>=1)
    {
        echo " right"."<br>";
        while($rows=mysqli_fetch_assoc($query))
        {
            $data[]=$rows;
        }
        print(json_encode($data));
        
    }
    else{
        echo "wrong";
    }
}

