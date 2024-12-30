<?php
session_start();
$email=$_SESSION['emailid'];
?>
<!DOCTYPE html>
<head>
    <title>Recipe Sharing Website</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width ,initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <style>
        body{
            margin:0;
           
        }
     .box{
        width:60%;
        height:850px;
        background-color:rgba(4, 17, 1, 0.89);
       color:white;
      margin:5% 20%;
     
     }
     svg{
       margin:10% 40% 0 40%;
     }
     
     h1{
      color:rgb(76, 212, 12);
      margin-left:20%;
     }
     h2{
      margin-left:25%;
     }
     button{
      font-size: 20px;
    padding:10px ;
    background-color:rgb(76, 212, 12);
    margin:40px  130px;
    border-radius: 10px;
    border:0;
    color: white;
   width:120px;
   box-shadow: 0 4px 8px 0 black;
     }
     
     @media (max-width:600px){
      .box{
        margin:5%;
        width:90%;
        height:550px;
      }
      svg{
        width:100px;
        margin: -5% 35%;
      }
      h1{
        font-size:20px;
        margin-left:10%;
      }
      h2{
        font-size:15px;
      }
      button{
    font-size:10px;
    width:80px;
    margin:40px;
  }
     }

    </style>
</head>
<body>
<?php
      
      $conn=mysqli_connect("localhost","root","","recipe_sharing") or die("Connection error");
     
      $sql="select * from person_details where email='{$email}'";
      $result=mysqli_query($conn,$sql);
      if(mysqli_num_rows($result)>0)
      {
      while($row = mysqli_fetch_assoc($result)) {
          
     ?>
<div class="box">

<svg xmlns="http://www.w3.org/2000/svg" width="200" height="250" fill="white" class="bi bi-person-circle"
            viewBox="0 0 16 16" >
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
            <path fill-rule="evenodd"
                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
        </svg>
      
   <h1>Name:</h1>   <h2><?php echo $row['name'];?></h2> 
    <h1>Email:</h1>  <h2><?php echo $row['email'];?></h2>
   <h1> Phone no.:</h1> <h2> <?php echo $row['mobile'];?> </h2>
     <button onclick="location.href='index.php'">log out</button>
     <button onclick="location.href='index1.php'">Back</button>
      <?php }} ?>
</div>
 
</div>
</body>
</html>