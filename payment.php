<!DOCTYPE html>
<html lang="en">
<head>
  <title>Payment</title>
  <?php include 'links.php' ?>
  <!-- <link rel="stylesheet" href="orders.css"> -->
</head>
<body>
<div class="container" style="margin-top: 25px;">
  <h2 style="padding: 10px 0 15px 0">Payment information</h2>
  <form action="payinsert.php" method="POST" class="form">
    <div class="form-group">
      <label for="order_no">Order Number</label>
      <input type="text" class="form-control" id="order_no"  name="order_no" placeholder="Enter order number">
    </div>
    <div class="form-group">
      <label for="name">NAME</label>
      <input type="text" class="form-control" id="name"  name="name" placeholder="Enter your name">
    </div>
    <div class="form-group">
        <label for="event_code">Event CODE</label>
        <br><select name="event_code" class="form-control" id="event_code">
                          <option value="">--Select Event Name--</option>
                          <option value="E001">E001</option>
                          <option value="E002">E002</option>
                          <option value="E003">E003</option>
                          <option value="E004">E004</option>
                          <option value="E005">E005</option>
                        </select>
    </div>
    <div class="form-group">
      <label for="service_id">SERVICE ID</label>
      <select name="service_id" class="form-control" id="service_id">
                          <option value="">--Select SERVICE--</option>
                          <option value="S001">S001</option>
                          <option value="S002">S002</option>
                          <option value="S003">S003</option>
                          <option value="S004">S004</option>
                          <option value="S005">S005</option>
                          <option value="S005">S006</option>
                        </select>
    </div>
    <div class="form-group">
      <label for="bill_date">Bill Date</label>
      <input type="date" class="form-control" id="bill_date"  name="bill_date">
    </div>

    <div class="form-group">
      <label for="tot_amt">Total Amount</label>
      <input type="number" class="form-control" id="tot_amt"  name="tot_amt" placeholder="Enter the Total Amount">
    </div>
    <div class="form-group">
        <label for="advance_pay">Advance Paid</label>
        <input type="number" class="form-control" id="advance_pay" placeholder="Enter the advance amount to be paid by the client " name="advance_pay" >
    </div>
    <div class="form-group">
      <label for="balance_pay">Balance Amount</label>
      <input type="number" class="form-control" id="balance_pay"  name="balance_pay" placeholder="Enter Balance Amount">
    </div>
    <button CLASS="btn btn-primary" name="psubmit" style="margin-bottom: 50px;">SUBMIT</button>
  </form>
</div>
</body>
</html>