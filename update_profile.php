<?php
session_start();
$username=$_SESSION['username'];

if(isset($_POST['update_profile'])){
  
   $new_pass=$_POST['new_pass'];
   $image=$_FILES['new_img'];


   $imagefilename=$image['name'];
   $imagefileerror=$image['error'];
   $imagefiletmp=$image['tmp_name'];
   $filename_separate=explode('.',$imagefilename);
   $file_extension=strtolower(end($filename_separate));
   $extension=array('jpg','jpeg','png');
    
   
   if(in_array($file_extension,$extension)){
      $upload_image='images/'.$imagefilename;
      move_uploaded_file($imagefiletmp,$upload_image);
      $conn=mysqli_connect("localhost","root","","visitdatabase");

      $sql="UPDATE `register` SET `password`='$new_pass',`image`='$upload_image' WHERE username='$username'";
      
      if( mysqli_query($conn,$sql)){
         echo"<script>alert('Updated successfully!');
              window.location.href='update_profile.php';
              </script>";
      }

   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update profile</title>
    <style>
         .update-profile{
            min-height: 100vh;
            background-color: #ff7f7f;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
         }
         .update-profile form{
            padding: 20px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 1);
            text-align: center;
            width: 700px;
         }
         .update-profile form img{
            height: 200px;
            width: 200px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 5px;
         }  
         .update-profile form .flex{
            display: flex;
            justify-content: space-between;
            gap: 15px;
            margin-bottom: 20px;
         }
         .update-profile form .flex .inputBox{
            width: 49%;
         }
         .update-profile form .flex .inputBox span{
            display: block;
            text-align: left;
            margin-top: 15px;
            font-size: 25px;
            color: black;
         }
         .update-profile form .flex .inputBox .box{
            width: 90%;
            border-radius: 5px;
            background-color:#ff7f7f;
            padding: 12px 14px;
            font-size: 17px;
            color: black;
            margin-top: 10px;
         }
         
         .btn{
            background-color: #0091ff;
            color:white;
            font-size: 25px;
            padding: 10px 15px;
            border-radius: 10px;
            text-decoration: none;  
         }
         a{
            background-color: #0091ff;
            color:white;
            font-size: 25px;
            padding: 10px 15px;
            border-radius: 10px;
            text-decoration: none;
            border: 2px solid black;
         }

         @media (max-width:650px){
            .update-profile form .flex{
                flex-wrap: wrap;
                gap: 0;
            }
            .update-profile form .flex .inputBox{
                width: 100%;
            }
         }
    </style>
</head>
<body>
    <div class="update-profile">
   
    <form action="" method="post" enctype="multipart/form-data">
        <?php
        $conn=mysqli_connect("localhost","root","","visitdatabase");
        $select=mysqli_query($conn,"SELECT * FROM `register` WHERE username='$username'");
        if(mysqli_num_rows($select)>0){
           $fetch=mysqli_fetch_assoc($select);
             if($fetch['image'] == ""){
                echo"<img src='human.png' alt=''>";
             }else{
                echo"<img src=".$fetch['image']." alt=''>";
             }
        }
        
        ?>
        <div class="flex">
            <div class="inputBox">
                <span>Username</span>
                <input type="text" name="update_name" value="<?php echo $fetch['username']; ?>" class="box" required>
                <span>Your pic</span>
                <input type="file" name="new_img" accept="image/jpg,image/jpeg,image/png" class="box" required>
            </div>
            <div class="inputBox">
               
             
                <span>New password</span>
                <input type="password" name="new_pass" placeholder="enter new password" class="box" required>
               
            </div>
          
        </div>
        <input type="submit" name="update_profile" value="Update profile" class="btn">
        <a href="profile.php" class="delete-btn">Go back</a>
    </form>
</html>