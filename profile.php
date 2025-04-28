<?php
session_start();
$username=$_SESSION['username'];
if(!isset($username)){
    header("location:login.php");
}
if(isset($_GET['logout'])){
    unset($username);
    session_destroy();
    header("location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            min-height: 100vh;
            background-color: #ff7f7f;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .container .profile{
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 1);
            text-align: center;
            width: 400px;
        }
        .container .profile img{
            height: 150px;
            width: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 5px;
        }
        .container .profile h3{
            background-color: #ff7f7f;
            font-size: 25px;
            padding: 10px 0px;
            margin: 25px 0;
            border-radius: 10px;
            color:white;
        }
        .container .profile a{
            font-size: 25px;
            background-color: #0091ff;
            color:white;
            padding: 10px 5px;
            border-radius: 10px;
            text-decoration: none;
        }
        .container .profile a:hover{
            text-decoration: underline;
        } 
    </style>
</head>
<body>
    <div class="container">
        <div class="profile">
            <?php
                 $conn=mysqli_connect("localhost","root","","visitdatabase");
                 $select=mysqli_query($conn,"SELECT * FROM `register` WHERE username='$username'");
                 if(mysqli_num_rows($select)>0){
                    $fetch=mysqli_fetch_assoc($select);
                    
                 }
                 if($fetch['image'] == ""){
                    echo"<img src='human.png'>";
                 }else{
                    echo"<img src=".$fetch['image'].">";
                 }
            ?>
            
            <h3><?php echo $fetch['username']; ?></h3>
            <a href="update_profile.php" class="btn">Update Profile</a>
            <a href="profile.php?logout=<?php echo $username; ?>" class="delete-btn">Logout</a>
            <a href="home.php" class="delete-btn">Go back</a>
            </form>
        </div>
</body>
</html>
