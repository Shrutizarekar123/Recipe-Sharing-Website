<html>

<head>
    <title>Update item</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width ,initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <style>
      body{
    margin:0;
    padding:0;
    font-family: Arial, Helvetica, sans-serif;
  
}
      button{
    font-size: 20px;
    padding:10px;
    background-color:rgb(76, 212, 12);
    margin:40px;
    border-radius: 10px;
    border:0;
    color: white;
   width:120px;
   box-shadow: 0 4px 8px 0 black;
}
h2{
  color:rgb(76, 212, 12);
  text-align:center;

}
form{
    font-size: 20px;
margin: 10px 200px;
padding:50px 200px;
 background-color:rgba(4, 17, 1, 0.89);
 width:500px;
 font-size:30px;
 box-shadow: 0 10px 20px 0 black;
}
input,textarea,select{
   margin:30px;
   width:500px;
   padding:10px;
   height:50px;
   font-size:20px;
}
@media (max-width:600px){
  button{
    font-size:10px;
    width:80px;
  }
  form{
     font-size:10px;
     width:200px;
     padding: 2px 50px;
     margin: 10px 40px;
  }
  input,textarea,select{
    width:200px;
    font-size:10px;
    height:20px;
    padding:2px;
    margin:10px;
  }
}
    </style>
</head>


<body>
    <?php
    $name=$_GET['name'];
    $conn=mysqli_connect("localhost","root","","recipe_sharing") or die("Connection error");
    $sql="select * from recipe_list where Recipe_name='{$name}'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
    while($row = mysqli_fetch_assoc($result)) {
       
    ?>
    <button onclick="location.href='recipedetail.php?name=<?php echo $name; ?>'"> <-Back </button>
   <form action="" method="post" enctype="multipart/form-data">
    <h2>Add Recipe</h2>
    Recipe Name: <input type="text" name="n1" Value="<?php echo $row['recipe_name'];?>" required readonly><br>
    Image: <input type="file" name="i1" required><br>
    
    Ingredients:<br><textarea name="i2"  required> <?php echo $row['Ingrdeint'];?> </textarea><br>
    Steps:<br><textarea name="s1"  required><?php echo $row['step'];?></textarea><br>
    <button name="b1" >UPDATE</button>
   </form><?php
   }}
   if(isset($_POST['b1'])){
          $ingr=$_POST['i2'];
          $step=$_POST['s1'];
          $image=time().$_FILES["i1"]['name'];
            if(move_uploaded_file($_FILES['i1']['tmp_name'],$_SERVER['DOCUMENT_ROOT'].'/recipesharingwebsite/photo/'.$image))
            {
                $target_file =$_SERVER['DOCUMENT_ROOT'].'/recipesharingwebsite/photo/'.$image;
                $imagefiletype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                $picname =basename($_FILES['i1']['name']);
                $photo=time().$picname;
            }
            $query="UPDATE recipe_list  SET image='{$photo}',Ingrdeint='{$ingr}',step= '{$step}'WHERE  recipe_name='{$name}'";
            $r1=mysqli_query($conn,$query) or die("error");
            header("Location:http://localhost/recipesharingwebsite/index1.php");
   }
   ?>

</body>

</html>