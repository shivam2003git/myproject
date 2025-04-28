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
        .row .sidebarone {
        position: fixed;
            width: 118px;
            min-height: 100%;
            background: #4e73df;
            padding: 20px 0;
        }
        .nav-item {
            display:block;
            text-decoration:none;
            padding: 15px 20px;
            color: rgba(255,255,255,.8);
            cursor: pointer;
            transition: all 0.3s;
        }
        .nav-item:hover {
            background: rgba(255,255,255,.1);
            color: white;
        }
        .main-content-dashboard{
            margin:0 130px;
            flex: 1;
            padding: 25px;
        }
       
        .dashboard {
            margin-bottom: 25px;
        }
        .rowtwo {
        width: 90vw;
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
    @media (max-width: 1200px) {
        .rowtwo {
            width: 100vw;
            gap: 15px;
        }
        .card-body {
            padding: 15px;
        }
        .boxtwo , .boxone{
            font-size: 20px;
        }
    }

    @media (max-width: 991px) {
        body{
            font-size:20px;
        }
        .sidebarone{
            width: 100%;
        }
        .rowtwo {
            flex-direction: column;
            gap: 15px;
        }
        .boxtwo, .boxone{
            font-size: 20px;
        }
        .card-body {
            width: 100%;
        }
        .table {
            padding: 10px;
        }
        .table th,
        .table td {
            padding: 8px;
        }
    }

    @media (max-width: 768px) {
        .dashboard {
            margin-bottom: 15px;
        }
        .card-header {
            padding: 10px;
            margin-bottom: 10px;
        }
        .header {
            font-size: 14px;
        }
        .boxone {
            font-size: 12px;
        }
        .boxtwo, .boxone{
            font-size: 20px;
        }
        .table {
            font-size: 14px;
        }
    }

    @media (max-width: 576px) {
        .table {
            display: block;
            overflow-x: auto;
            white-space: nowrap;
        }
        .card-body {
            padding: 10px;
        }
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
    $sqla="SELECT * FROM payment";
    $querya=mysqli_query($conn,$sqla);
    $totalamount=0;
    while($row=mysqli_fetch_assoc($querya)){
        $totalamount +=  $row['total'];
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

        <div class="main-content-dashboard" id="dashboard" >
            <div class="dashboard">
                <h1>Dashboard</h1>        
            </div>

            <div class="rowtwo">
                <div class="card-body">
                    <div class="boxone">Total Tours Bookings</div>
                    <div class="boxtwo"><?php echo $total_bookings; ?></div>
                              
                </div>
                <div class="card-body">
                    <div class="boxone">Completed Tours</div>
                    <div class="boxtwo"><?php echo $completed_tours; ?></div>
                </div>       
                <div class="card-body">           
                    <div class="boxone">Pending Tours</div>
                    <div class="boxtwo"><?php echo $pending_tours; ?></div>         
                </div>
                <div class="card-body">           
                    <div class="boxone">Total Amount</div>
                    <div class="boxtwo"><?php echo $totalamount; ?></div>         
                </div>
            </div>
            

            <div class="charts-container" style="margin-top: 40px;">
                <h2>Tours Analytics Dashboard</h2>
                
                <!-- Bookings Chart -->
                <div class="chart-wrapper" style="margin-bottom: 30px;">
                    <h3>Booking Status Distribution</h3>
                    <div id="bookings-chart" style="width: 100%; height: 400px;"></div>
                </div>

               
        
                <!-- Payment Chart -->
                <div class="chart-wrapper">
                    <h3>Payment Overview</h3>
                    <div id="payment-chart" style="width: 100%; height: 400px;"></div>
                </div>
            </div>

            <!-- Load Google Charts -->
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawCharts);

                function drawCharts() {
                    // Bookings Chart
                    var bookingsData = google.visualization.arrayToDataTable([
                        ['Status', 'Number of Tours', { role: 'style' }],
                        ['Completed Tours', <?php echo $completed_tours; ?>, '#34a853'],
                        ['Pending Tours', <?php echo $pending_tours; ?>, '#fbbc05']
                    ]);

                    var bookingsOptions = {
                        is3D: true,
                        backgroundColor: 'transparent',
                        legend: { position: 'right' },
                        colors: ['#34a853', '#fbbc05']
                    };

                    var bookingsChart = new google.visualization.PieChart(document.getElementById('bookings-chart'));
                    bookingsChart.draw(bookingsData, bookingsOptions);

                   

                    // Payment Distribution Chart
                    <?php
                        $sql = "SELECT payment, COUNT(*) as count FROM payment GROUP BY payment";
                        $result = mysqli_query($conn, $sql);
                        $paymentData = array();
                        while($row = mysqli_fetch_assoc($result)) {
                            $paymentData[] = "['". $row['payment'] ."', ". $row['count'] ."]";
                        }
                    ?>
                    var paymentData = google.visualization.arrayToDataTable([
                        ['Payment Method', 'Count'],
                        <?php echo implode(",", $paymentData); ?>
                    ]);

                    var paymentOptions = {
                        is3D: true,
                        backgroundColor: 'transparent',
                        legend: { position: 'right' },
                        colors: ['#ea4335', '#4285f4', '#fbbc05']
                    };

                    var paymentChart = new google.visualization.PieChart(document.getElementById('payment-chart'));
                    paymentChart.draw(paymentData, paymentOptions);

                    // Make charts responsive
                    window.addEventListener('resize', function() {
                        bookingsChart.draw(bookingsData, bookingsOptions);
                        revenueChart.draw(revenueData, revenueOptions);
                        paymentChart.draw(paymentData, paymentOptions);
                    });
                }
            </script>
        </div>
    </div>
</body>
</html>
