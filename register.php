<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <style>
   * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Open Sans", sans-serif;
}
body {
  color:black;
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  width: 100%;
  padding: 0 10px;
}
body::before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background:url(travel.jpg);
  background-position: center;
  background-size: cover;
}
.wrapper {
  
  width: 400px;
  border-radius: 8px;
  padding: 30px;
  text-align: center;
  border: 1px solid rgba(255, 255, 255, 0.5);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
}
form {
  display: flex;
  flex-direction: column;
}
h2 {
  font-size: 2rem;
  margin-bottom: 20px;
}
.input-field {
  position: relative;
  border-bottom: 2px solid #ccc;
  margin: 15px 0;
}
.input-field label {
  position: absolute;
  margin:-10px 0px;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  font-size: 16px;
  pointer-events: none;
  transition: 0.15s ease;
}
.input-field input {
  width: 100%;
  height: 40px;
  background: transparent;
  border: none;
  outline: none;
  font-size: 16px;

}
.input-field input:focus~label,
.input-field input:valid~label,
.input-field input:focus~label,
.input-field input:focus~label {
  font-size: 0.8rem;
  top: 10px;
  transform: translateY(-120%);
  
}


.submit{
  height:50px;
  background: #fff;
  font-weight: 600;
  border: none;
  padding: 12px 20px;
  cursor: pointer;
  border-radius: 3px;
  font-size: 16px;
  border: 2px solid transparent;
  transition: 0.3s ease;
}


  </style>
</head>
<body>
  <div class="wrapper">
  <form action="" method="post" enctype="multipart/form-data">
      <h2>Register</h2>
      
      <div class="input-field">
        <input type="text" name="username" required>
        <label>Enter your Username</label>
      </div>
      <div class="input-field">
        <input type="password" name="password" required>
        <label>Enter your password</label>
      </div>
      <div class="input-field">
        <input type="number" name="number" required>
        <label>Enter your Number</label>
      </div>
      <div class="input-field">
        <input type="file" name="file" accept="image/jpg,image/jpeg,image/png">
        <label>Upload Your Image</label>
      </div>
      <input type="submit" name="submit" class="submit"></input>
      <a href="index.php">Back</a>
      
      
    </form>
  </div>

    <?php
    if(isset($_POST['submit'])){
      $username=$_POST['username'];
      $password=$_POST['password'];
      $number=$_POST['number'];
      $image=$_FILES['file'];
   

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
      $sql="INSERT INTO register (username,password,number,image) VALUES ('$username','$password','$number','$upload_image')";
      $result=mysqli_query($conn,$sql);
      if($result){
        echo"<script>alert('Registration succsesfull');
              window.location.href='login.php';
              </script>";
        
      }else{
            echo"<script>alert('Registration failed');
            window.location.href='register.php';
            </script>";
      }
    } 
  }
    

?>
</body>
</html>