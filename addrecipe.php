<html>

<head>
    <title>Add Recipe</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width ,initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <style>
      body{
    margin:0;
    padding:0;
    font-family: Arial, Helvetica, sans-serif;
   color:white;
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
    <button onclick="location.href='index1.php'"> <-Back </button>
   <form action="savedata.php" method="post" enctype="multipart/form-data">
    <h2>Add Recipe</h2>
    Recipe Name: <input type="text" name="n1" placeholder="Enter name of Recipe" required><br>
    Image: <input type="file" name="i1" required><br>
    Category:<select name="c1"  required>
        <option value=""selected disabled>Catergory</option>
        <?php
          $conn=mysqli_connect("localhost","root","","recipe_sharing") or die("Connection error");
          $sql= "select * from catergory";
          $result=mysqli_query($conn,$sql) or die("query unsuccessful.");
        while($row=mysqli_fetch_assoc($result)){
         ?>
         <option value=" <?php echo $row['catergory_id'] ?>"> <?php echo $row['catergory_name'] ?> </option>
        <?php } ?>
      
      </select><br>
    Ingredients:<br><textarea name="i2" placeholder="Ingredients Required" required>  </textarea><br>
    Steps:<br><textarea name="s1" placeholder="Steps of the Recipe" required></textarea><br>
    <button name="b1" >Add</button>
   </form>
</body>

</html>