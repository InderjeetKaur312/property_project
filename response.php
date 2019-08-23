<?php
    include("connection.php");
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $user_name=$email=$password=$phone_number=$address="";
        $user_name=$_POST["user_name"];
        $email=$_POST["email"];
        $password=$_POST["pswd"];
        $phone_number=$_POST["phn"];
        $address=$_POST["address"];
    
        $sql1="select * from users where (email='$email' or phone_no='$phone_number');";
        $res=mysqli_query($conn,$sql1);
        if(mysqli_num_rows($res)>0)
        {
            $row=mysqli_fetch_assoc($res);
            if($email==$row['email'])
            {
                echo "  email already exists";
            }
            else if($phone_number==$row['phone_no'])
            {
                echo "phone number already exists";
            }
        }
            else{
                echo "all right";
            }
        $sql="insert into users (name,email,pasword,phone_no,address) values('$user_name','$email','$password','$phone_number','$address')";
        if(mysqli_query($conn, $sql)){
        echo "Records inserted successfully.";
        } 
        else{
        echo "<br>"."ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }   
    } 
?>