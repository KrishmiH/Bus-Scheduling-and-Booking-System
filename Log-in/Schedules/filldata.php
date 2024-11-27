<html>
<head>
    <title>Book the Ticket</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body style="padding:50px;">
<h3 >Boooking from</h3>
<div class="container">
<form method="POST" action="nextproc.php">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="phone">Phone NO</label>
        <input type="text" name="phone" id="phone" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="seats">No of Seats</label>
        <input type="text" name="seats" id="seats" class="form-control" required>
    </div>
     <div class="form-group">
        <label for="Type">Ticket type(E-ticket,M-ticket)</label>
        <input type="text" name="Type" id="Type" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="Type">Payment(card,bank transfer or paypal)</label>
        <input type="text" name="payment" id="payment" class="form-control" required>
    </div>
    <br>
    <div class="form-group">
        <button type="submit" class="btn-btn-success" >Submit</button>
    </div>
</form>
</div>
</body>
</html>

