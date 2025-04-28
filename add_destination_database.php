<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    Destination: 
    <input type="text" name="name">
    <br>
    Basic Price: 
    <input type="number" name="basic">
    <br>
    Premium Price: 
    <input type="number" name="premium">
    <br>
    <input type="submit" value="Submit" name="submit">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $destination=$_POST['name'];
        $basic=$_POST['basic'];
        $premium=$_POST['premium'];

        $conn=mysqli_connect("localhost","root","","visitdatabase");
        if($conn){
      $sql="INSERT INTO destination (destination,basic,premium) VALUES ('$destination',$basic,$premium)";
      $result=mysqli_query($conn,$sql);
      if($result){
        echo "Insert Successfull";
      }else{
        echo "Not Insert";
      }

    }else{
      echo "not connect";
    }
  }
    ?>
</body>
</html>