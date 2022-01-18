<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INVOICE GENERATION</title>
    <link rel="stylesheet" href="orders.css">
</head>
<body>
<div class="main">
      <div class="header">
        <div class="topbar">
          <div class="topbar-content">
            <ul>
                <li>
                  <a href="dashboard.php">Home</a>
               </li>
              <li>
                <a href="services.php">Services</a>
              </li>
              <li>
                <a href="event_types">Events</a>
              </li>
              <li>
                <a href="#">FAQ</a>
              </li>
              <li>
                <a href="#">Contact</a>
               </li>
            </ul>
          </div>
        </div>
      </div>
    <div id="main-content">
        <h2>PAYMENT DETAILS</h2>
        <?php
        include 'config.php';

        // $sql = "SELECT * FROM invoice ";
        // CALLING STORED PROCEDURE TO FETCH PAYMENT DETAILS

        $sql = "call display_paymentdetails"; 

        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
        if(mysqli_num_rows($result) > 0) {
        ?>
        <table cellpadding="7px">
        <thead>
        <th>BILL_NO</th>
        <th>ORDER_NO</th>
        <th>NAME</th>
        <th>EVENT_CODE</th>
        <th>SERVICE_ID</th>
        <th>BILL_DATE</th>
        <th>TOTAL AMOUNT</th>
        <th>ADVANCE PAYMENT</th>
        <th>BALANCE AMOUNT</th>
        <th>GENERATE RECEIPT</th>
        </thead>
        <tbody>
        <?php
        while($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
        <td><?php echo $row['BILL_NO']; ?></td>
        <td><?php echo $row['ORDER_NO']; ?></td>
        <td><?php echo $row['NAME'];?></td>
        <td><?php echo $row['EVENT_CODE']; ?></td>
        <td><?php echo $row['SERVICE_ID']; ?></td>
        <td><?php echo $row['BILL_DATE']; ?></td>
        <td><?php echo $row['TOTAL_AMOUNT']; ?></td>
        <td><?php echo $row['ADVANCE_PAYMENT']; ?></td>
        <td><?php echo $row['BALANCE']; ?></td>
        <td><a href='receipt.php?bill_n=<?php echo $row['BILL_NO'] ?>' class="payment">RECEIPT</a></td>
        </tr>
        <?php } ?>
        </tbody>
        </table>
        <?php }else{
        echo "<h2>No Record Found</h2>";
        }
        mysqli_close($conn);
        ?>
        </div>
        </div>    
</body>
</html>