<?php
 $conn=mysqli_connect("localhost","root","","recipe_sharing") or die("Connection error");
?>
<!DOCTYPE html>
<head>
    <title>Recipe Sharing Website</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width ,initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="navbar">
        <h1 class="logo">
        <a href="index.php">  All-In-One Recipes </a>
        </h1>

        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#aboutus">About&nbsp;Us</li>
            <li><a href="#catergory">Category</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <button onclick="location.href='login.php'">Add Recipe</button>
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-circle"
            viewBox="0 0 16 16" onclick="location.href='login.php'">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
            <path fill-rule="evenodd"
                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
        </svg>
    </div>
    <section class="container">
        <div class="container-text">
            <h2>Welcome to All-In-One Recipes</h2>
            <p>Search your Favourite Recipes,Read the steps carefully and Cook</p>
            <form  action= "" method="post">
                <input type="text" name="rec_name" placeholder="Search Recipes">
                <button type="submit" name="search">Search</button>
            </form>
            </div>
            </section>
          
                        <div class="row">
                        
                    <?php
                    if(isset($_POST['search'])){
                       $name=$_POST['rec_name'];
                    
                    $sql= "select * from recipe_list  where recipe_name='{$name}'";
                    $result=mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)>0)
                    {
                    while($row = mysqli_fetch_assoc($result)) {
                        
                       ?>
                        <div class="card">
                            <img src="photo/<?php echo $row['image']?>" height="150" width="300">
                            <h2><?php  echo $row['recipe_name'] ?></h2>
                            <a href="login.php">View recipe</a>
                        </div> 
                    <?php
                   }}}
                   ?>  
                    </div> 
  
    <div id ="catergory">
        <div class="bar">
            <button id="b1" >Nasta</button>
            <button id="b2">Lunch/Dinner</button>
            <button id="b3">Sweets</button>
            <button id="b4">Snacks</button>
        </div>
        
        <div id="nasta">
        <h1>Nasta</h1>
        <div class="row">
        <?php
           
            $sql= "select * from recipe_list  where catergory = 1";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0)
            {
            while($row = mysqli_fetch_assoc($result)) {
                
           ?>
                <div class="card">
                    <img src="photo/<?php echo $row['image']?>" height="150" width="300">
                    <h2><?php  echo $row['recipe_name'] ?></h2>
            <a href='login.php '>View recipe</a>
                </div> 
             <?php }}?>  
             </div> 
            </div>
    
        
        <div id="lunch">
        <h1>Lunch/Dinner</h1>
        <div class="row">
        <?php
       
            $sql= "select * from recipe_list  where catergory = 2";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0)
            {
            while($row = mysqli_fetch_assoc($result)) {
           ?>
                <div class="card">
                    <img src="photo/<?php echo $row['image']?>" height="150" width="300">
                    <h2><?php  echo $row['recipe_name'] ?></h2>
                    <a href="login.php">View recipe</a>
                </div> 
             <?php }}?>
             </div>   
        </div>

        <div id="beverages">
        <h1>sweets</h1>
        <div class="row">
        <?php
            
            $sql= "select * from recipe_list  where catergory = 3";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0)
            {
            while($row = mysqli_fetch_assoc($result)) {
           ?>
                <div class="card">
                    <img src="photo/<?php echo $row['image']?>" height="150" width="300">
                    <h2><?php  echo $row['recipe_name'] ?></h2> 
                    <a href="login.php">View recipe</a>
                </div>
             <?php }}?> 
             </div>   
        </div>

        <div id="desserts">
        <h1>snacks</h1>
        <div class="row">
        <?php
         
            $sql= "select * from recipe_list  where catergory = 4";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0)
            {
            while($row = mysqli_fetch_assoc($result)) {
           ?>
                <div class="card">
                    <img src="photo/<?php echo $row['image']?>" height="150" width="300">
                    <h2><?php  echo $row['recipe_name'] ?></h2>
                    <a href="login.php">View recipe</a>
                </div>
             <?php }}?> 
             </div>   
    </div>
   

    <footer id="box">
        @All-In-One Recipes 2024
    </footer>
    <script src="script.js"></script>
</body>

</html>