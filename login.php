<DOCTYPE html>
<html>
<head>  
</head>
<link rel="stylesheet" href="style.css">

<body>
 <div class="container">
     <h1>Login Form</h1>
     <div class="GrpCtn" >
            <form action="user.php" method="GET"> 
                <label for="username">Username:</label>
                <input type="text" name="username" id="username"> <br/><br/>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password"><br/><br/>
                <input type="submit" value="Submit" class="GrpBtn1">
                <a href="index.php"><p class="GrpBtn2"></p></a>
            </form>
    </div>
 </div>
 <?php
 include("config.php");
    if(isset($_GET['username'])){
        $username = $_GET['username'];
        $password = $_GET['password'];
        $result = mysqli_query($mysqli,"SELECT * FROM register WHERE username='$username' AND password='$password'");
        if(mysqli_num_rows($result)==1){
            echo "Login Successful";
        }
        else{
            echo "Login Failed";
        }
    }
 ?>

</body>   
</html>    