            <div class="card-header">
                <h6 class="header">Recent Bookings</h6>
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