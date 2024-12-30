<!DOCTYPE html>
<head>
    <title>Signup</title>
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
    input{
        width:350px;
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
        height:650px;
        width:600px;
       margin:100px 400px;
    }
    @media (max-width:600px)
    {
    body{
            height:700px;
        }
        h1{
            font-size:25px;
        }
        .box{
            margin:10px 20px;
            width:320px;
            height:550px;
        }
        input{
            width:200px;
            height:20px;
        }
        form{
            font-size:20px;
        }
        button{
            font-size:15px;
            padding:4%;
            margin-top:10px;
        }
    }
</style>
<body> 
    
<button style="margin-top:2px; margin-right:1000px;" onclick="location.href='index.php'"> <-Back </button>
    <div class="box">
    <h1>Register</h1>
<form action="" method="Post">
    Name:<input type="text" name="n1" required>
    Email:<input type="email" name="e1" required>
    Mobile no.:<input type="text" name="m1" required>
    Password:<input type="text" minlength="6" name="p1" required>
    <button name="s1">Sign up</button>
</form>
</div>
<?php 
 if(isset($_POST['s1']))
 {
    $name=$_POST['n1'];
    $email=$_POST['e1'];
    $mobile=$_POST['m1'];
    $pass=$_POST['p1'];
    $conn=mysqli_connect("localhost","root","","recipe_sharing") or die("Connection error");
    $sql="insert into person_details(name,email,mobile,password) values('{$name}','{$email}','{$mobile}','{$pass}')";
    $result=mysqli_query($conn,$sql);
    if($result== true)
    {
        header("Location:http://localhost/recipesharingwebsite/login.php");
    }
    
 }
?>
</body>
</html>