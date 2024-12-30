<?php
$name=$_GET['name'];
$conn=mysqli_connect("localhost","root","","recipe_sharing") or die("Connection error");
?>
<!DOCTYPE html>
<head>
    <title>Recipe Details </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width ,initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    
        
    <style>
       body{
    margin:0;
    padding:0;
    font-family: Arial, Helvetica, sans-serif;
  
}
.navbar{
    background-color:rgba(4, 17, 1, 0.89);
  width:100%;
    align-items: center;
   display: flex;
    position:fixed;
}
.logo{
    font-size: 25px;
    margin-left: 5%; 
    user-select: none;
    align-items: center;
}
.logo a{
    text-decoration: none;
    color:white;
}
.logo:hover{
    color:red;
    
}
.navbar button{
    font-size: 20px;
    padding:10px;
    background-color: rgb(76, 212, 12);
    color:white;
    margin:10px;
   width:100px;
   border-radius: 10px;
}
.btn{
    margin-left:50%;
}
.image img{
    margin-top:8%;
    width: 50%;
    margin-left:350px;
    box-shadow:0 10px 20px 0 black;
}
 h1{
    text-align:center;
    color:rgb(76, 212, 12);
    font-size:40px;
}
.data h3{
    margin:0 250px 20px 150px;
   white-space: pre-line;
   text-wrap:stable;
}
.row{
    display: flex;
    flex-direction: row;
 width:100%;
 flex-wrap: wrap;
  padding: 15px;
}
.card{
    height: 300px;
    width: 300px;
  background-color:rgba(4, 17, 1, 0.89);
  margin: 10px 15px;
  border-radius: 10px;
  color: white;
  text-align: center;
  
  box-shadow: 0 8px 16px 0 black;
} 
.card a{
    
    color: white;
}
h1,h2{
    color:rgb(76, 212, 12);
}
.card a:hover{
    color: blue;
}
.card img{
    border-radius: 10px;
}

#box{
    height: 150px;
    background-color: rgba(4, 17, 1, 0.89);
    text-align: center;
    font-size: 20px;
    padding:40px;
    color:white;
}

@media (max-width:600px){
   
    .logo{
        font-size:15px;
    }
    .navbar button{
        font-size:15px;
        width:70px;
        padding:3%;
        
    }
    .btn{
        margin-left:5%;
    }
    .image img{
        margin-top:20%;
        margin-left:80px;
    }
    #box{
        height: 80px;
        font-size: 10px;
        margin-top:50px;
    }
    .data h1{
        font-size:20px;
    }
    .data h3{
        font-size:10px;
        margin:0 20px 0px 30px;
    }
}

    </style>

</head>
<body>
    <?php
      
     $sql="select * from recipe_list where Recipe_name='{$name}'";
     $result=mysqli_query($conn,$sql);
     if(mysqli_num_rows($result)>0)
     {
     while($row = mysqli_fetch_assoc($result)) {
         
    ?>
    <div class="navbar">
        <h1 class="logo">
           <a href="index1.php"> All-In-One Recipes</a>
        </h1>
        <div class="btn">
        

        <button onclick="location.href='updateitem.php?name=<?php echo $name; ?>'">Edit</button>

        <button onclick="confirmDelete('<?php echo $name; ?>') ">Delete</button>

</div>
    </div>
 <div class="image">
    <?php
           echo "<img src ='photo/$row[image]'>";
    ?>
    </div>
   <div class="data">
    <br><h1 ><?php echo $row['recipe_name']; ?></h1>
    <br><h1>Ingredients:<br></h1><h3><?php echo $row['Ingrdeint']; ?></h3>
    <br><h1>Steps:<br></h1>
    <h3><?php echo $row['step']; ?></h3>
   <?php $c1=$row['catergory']; ?>
  
    <?php
       }}  ?>
       </div>


<h1>Related Recipes</h1>
       <div class="row">
        <?php
       
            $sql= "select * from recipe_list  order by rand() limit 4";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0)
            {
            while($row = mysqli_fetch_assoc($result)) {
           ?>
                <div class="card">
                    <img src="photo/<?php echo $row['image']?>" height="150" width="300">
                    <h2><?php  echo $row['recipe_name'] ?></h2>
                    <?php      echo "   <a href='recipedetail.php?name=" .$row["recipe_name"]. "'>View recipe</a>"?>
                </div> 
             <?php }}?>
             </div>  





       <footer id="box">
        @All-In-One Recipes 2024
    </footer>
      <script>
    function confirmDelete(name) {
        var result = confirm("Do you want to delete recipe ");
        if (result) {
            
            window.location.href = 'deleterecipe.php?name=' + name;
        }
    }
    </script>
</body>
</html>