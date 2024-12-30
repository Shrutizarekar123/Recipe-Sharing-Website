<?php
$rec_name=$_POST['n1'];
$catergory=$_POST['c1'];
$ingre=$_POST['i2'];
$step=$_POST['s1'];
$btn=$_POST['b1'];


$image=time().$_FILES["i1"]['name'];
if(move_uploaded_file($_FILES['i1']['tmp_name'],$_SERVER['DOCUMENT_ROOT'].'/recipesharingwebsite/photo/'.$image))
{
    $target_file =$_SERVER['DOCUMENT_ROOT'].'/recipesharingwebsite/photo/'.$image;
    $imagefiletype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $picname =basename($_FILES['i1']['name']);
    $photo=time().$picname;
}


$conn=mysqli_connect("localhost","root","","recipe_sharing") or die("Connection error");
$sql="Insert into recipe_list(recipe_name,image,catergory,Ingrdeint,step) values('{$rec_name}','{$photo}','{$catergory}','{$ingre}','{$step}')";
$result=mysqli_query($conn,$sql) or die("error");

header("Location:http://localhost/recipesharingwebsite/index1.php");

?>
