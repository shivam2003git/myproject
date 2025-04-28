<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tours & Travel Admin Dashboard</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background: #f8f9fc;
        }
        .row {
            display: flex;
        }
        .sidebarone {
            position: fixed;
            width: 118px;
            min-height: 100%;
            background: #4e73df;
            padding: 20px 0;
        }
        .nav-item {
            text-decoration:none;
            display:block;
            padding: 15px 20px;
            color: rgba(255,255,255,.8);
            cursor: pointer;
            transition: all 0.3s;
        }
        .nav-item:hover {
            background: rgba(255,255,255,.1);
            color: white;
        }
        .main-content-bookings{
            margin:0 130px;
            flex: 1;
            padding: 25px;
        }
      
        .dashboard {
            margin-bottom: 25px;
        }
        .rowtwo {
            display: flex;
            gap: 20px;
            margin-bottom: 25px;
        }
        .card-body {
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            flex: 1;
        }
        .boxone {
            color: #4e73df;
            font-size: 14px;
            margin-bottom: 10px;
        }
        .boxtwo {
            font-size: 20px;
            font-weight: bold;
        }
        .card-header {
            background: white;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 15px;
        }
        .header {
            color: #4e73df;
            font-size: 16px;
        }
        .table {

            width: 100%;
            background: white;
            border-radius: 5px;
            padding: 15px;
        }
        .table th {
            text-align: left;
            padding: 12px;
            background: #f8f9fc;
        }
        .table td {
            padding: 12px;
            border-top: 1px solid #e3e6f0;
        }
        
    </style>
</head>
<body>
    <?php    
    $conn = mysqli_connect('localhost', 'root', '', 'visitdatabase');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$total_bookings = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as count FROM payment"))['count'];

$sql="SELECT * FROM payment";
$query=mysqli_query($conn,$sql);
$pending_tours=0;
$completed_tours=0;
while($row=mysqli_fetch_assoc($query)){
    $stringdate=$row['departDate'];
    $uy=date('Y',strtotime($stringdate));
    $um=date('m',strtotime($stringdate)); 
    $ud=date('d',strtotime($stringdate));  
    $udays=($uy-1) * 365 + ($um-1) * 30 + $ud;
    $sy=date('Y');
    $sm=date('m');
    $sd=date('d');
    $sdays=($sy-1) * 365 + ($sm-1) * 30 + $sd;
    if($udays > $sdays){
        $pending_tours +=1;
    }else{
        $completed_tours +=1;
    }
}
    
    ?>
    <!-- dashboard -->
    <div class="row" >
        <div class="sidebarone">    
            <div class="nav">
                <a href="admin-dashboard.php" class="nav-item" >Dashboard</a>
                <a href="admin-bookings.php" class="nav-item" >Bookings</a>       
                <a href="admin-user.php" class="nav-item">Users</a>
                <a href="admin-destination.php" class="nav-item">Destination</a>
                <a href="index.php" class="nav-item">Log Out</a>
            </div>
        </div>
        <div class="main-content-bookings" id="bookings" >
            <div class="dashboard">
                <h1>Bookings</h1>        
            </div>

            <div class="rowtwo">
                <div class="card-body">
                    <div class="boxone">Total Tours Bookings</div>
                    <div class="boxtwo"><?php echo $total_bookings; ?></div>        
                </div>
            </div>

            <div class="card-header">
                <h6 class="header">Bookings</h6>
            </div>    

            <table class="table">
                <thead>
                    <tr>
                        <th>User Name</th>
                        <th>Customer Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Destination</th>
                        <th>Travelers</th>
                        <th>Date</th>
                        <th>Price</th>
                        <th>Total</th>
                        <th>Payment</th>
                        <th>Card Number</th>
                        <th>Card Expiry</th>
                        <th>Card CVV</th>
                        <th>UPI Id</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $sql = "SELECT * FROM payment";
                    $result = mysqli_query($conn, $sql);
                    
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['username'] . "</td>";
                        echo "<td>" . $row['name']."".$row['lastname'] ."</td>";
                        echo "<td>" . $row['email'] . "</td>"; 
                        echo "<td>" . $row['phone'] . "</td>";
                        echo "<td>" . $row['destination'] . "</td>";
                        echo "<td>" . $row['travelers'] . "</td>";
                        echo "<td>" . $row['departDate'] . "</td>";
                        echo "<td>" . $row['price'] . "</td>";
                        echo "<td>" . $row['total'] . "</td>";
                        echo "<td>" . $row['payment'] . "</td>";
                        echo "<td>" . $row['cardnumber'] . "</td>";
                        echo "<td>" . $row['cardexpiry'] . "</td>";
                        echo "<td>" . $row['cardcvv'] . "</td>";
                        echo "<td>" . $row['upiid'] . "</td>";
                        echo "</tr>";
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
