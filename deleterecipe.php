<?php
$name=$_GET['name'];
$conn=mysqli_connect("localhost","root","","recipe_sharing") or die("Connection error");


           $query="DELETE FROM recipe_list WHERE recipe_name='{$name}'";
           $r1 =mysqli_query($conn,$query) or die("connection error");
          
         
            header("Location:http://localhost/recipesharingwebsite/index1.php"); ?>
       
    