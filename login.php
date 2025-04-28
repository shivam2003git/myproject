<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
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
  background:url(travel.jpg);
  background-position: center;
  background-size: cover;
}
body::before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  
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
.btn{
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
.message{
  margin: 5px 0;
  width: 100%;
  border-radius: 5px;
  padding: 10px;
  text-align: center;
  color:red;
  font-size: 16px;
}
    </style>
</head>
<body>
<div class="wrapper">
    <form action="" method="post">
        <h2>login</h2>
        <?php
      if(isset($message)){
        foreach($message as $message){
          echo"<div class='message'>.$message.</div>";
        }
      }
      ?>
     
        <div class="input-field">
            <input type="text" class="box"  name="logusername" required>
            <label>Enter your Username</label>
        </div>
        <div class="input-field">
            <input type="text" class="box" name="logpass" required>
            <label>Enter your Password</label>
        </div>
            
        <input type="submit" value="Login now" class="btn" name="log">
           
       
        <p>don't have and account? <a href="register.php">Register Now</a></p><br>
        <a href="index.php">Back to home</a>
    </form>
</div>
<?php
session_start();
if(isset($_POST['log'])){
    $name=$_POST['logusername'];
    $pass=$_POST['logpass'];
    $conn=mysqli_connect("localhost","root","","visitdatabase");
    if($conn){
      
      $select=mysqli_query($conn,"SELECT * FROM `register` WHERE username='$name' AND password='$pass'");
      if(mysqli_num_rows($select)>0){
        $row=mysqli_fetch_assoc($select);
        $_SESSION['username']=$row['username'];
        
        echo"<script>alert('Login succsesfull');
              window.location.href='home.php';
              </script>";
      }else if($name=="admin" && $pass=="admin"){
        echo"<script>alert('Login succsesfull');
             window.location.href='admin-dashboard.php';
            </script>";
      }
      else{
        echo"<script>alert('Invalid Username/Password');
             window.location.href='login.php';
            </script>";
      }
    }
}
?>



</body>
</html>