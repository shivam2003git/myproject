<?php
    session_start(); 
    $username=$_SESSION['username'];
    if(isset($_POST['submit'])){
        
        $name=$_POST['name'];
        $email=$_POST['email'];
        $number=$_POST['number'];
        $subject=$_POST['subject'];
        $mssg=$_POST['mssg'];

        $conn=mysqli_connect('localhost','root','','visitdatabase');
        if($conn){
            $sql="INSERT INTO contact  VALUES('$username','$name','$email',$number,'$subject','$mssg')";
            $res=mysqli_query($conn,$sql);
            if($res){
                echo"<script>alert('Contact send successfull');
              window.location.href='home.php';
              </script>";
            }
        }
    }
    ?>
