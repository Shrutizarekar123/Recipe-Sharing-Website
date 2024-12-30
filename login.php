<?php 
session_start();
?>
<!DOCTYPE html>
<head>
    <title>login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width ,initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body{
       background-image:url("image.jpg");
       background-size:cover;
       background-repeat:no-repeat;
       backdrop-filter:blur(3px);
    
    }
    form{
       padding:5%  15%;
       font-size:20px;
       align-content:cneter;
    }
    h1{
      color:rgb(76, 212, 12);
      text-align:center;
      font-size:40px;
      padding:20px;
    }
   
    a{
        color:rgb(76, 212, 12);
    }
    input{
        width:300px;
        height:30px;
       margin:20px;
    }
    button{
        font-size:20px;
        background-color:rgb(76, 212, 12);
        border:none;
        padding:10px;
        border-radius:10px;
        float:right;
        margin-top:30px;
    }
    .box{
        background-color:rgba(4, 17, 1, 0.89);
        height:500px;
        width:500px;
       margin:100px 450px;
    }
    @media (max-width:600px){
        body{
            height:500px;
        }
        h1{
            font-size:25px;
        }
        .box{
            margin:10px 20px;
            width:320px;
            height:350px;
        }
        input{
            width:200px;
            height:20px;
        }
        form{
            font-size:20px;
        }
        button .s1{
            font-size:15px;
            padding:4%;
            margin-top:10px;
        }
        h5{
            font-size:10px;
        }
    }
</style>
<body> 

<button style="margin-top:5px; margin-right:1000px;" onclick="location.href='index.php'"> <-Back </button>
    <div class="box">
    <h1>LOGIN</h1>
<form action="" method="Post">
    Email:<input type="email" name="e1" required>
    Password:<input type="text" minlength="6" name="p1" required>
    <button name="s1">Log In</button>
    <h5>don't have a account?<a href="signup.php">Register</a></h5>
    </form>
</div>
    <?php
        
         if(isset($_POST['s1'])){
            $email=$_POST['e1'];
            $pass=$_POST['p1'];
            $conn=mysqli_connect("localhost","root","","recipe_sharing") or die("Connection error");
             $sql="select * from person_details";
             $result=mysqli_query($conn,$sql) or die("connection error");
             if(mysqli_num_rows($result)>0)
     {
     while($row = mysqli_fetch_assoc($result)) {
        $_SESSION['emailid']=$row['email'];
        echo $_SESSION['emailid'];
         if($email==$row['email'] && $pass == $row['password']){
         
            header("Location:http://localhost/recipesharingwebsite/index1.php");
            
         }
         else{
            echo"login unsuccesful";
         }
         }
        }
        }
    ?>
</body>
</html>