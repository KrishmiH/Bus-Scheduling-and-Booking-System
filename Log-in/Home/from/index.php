<html>
<head>
    <title>Contact us - Submit Your Feedback</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body style="padding:50px;">
<h3>Contact Us / Feedback Form</h3>
<div class="container">
<form method="POST" action="process.php">

    <div class="form-group">
        <label for="firstname">First Name</label>
        <input type="text" name="firstname" id="firstname" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="lastname">Last Name</label>
        <input type="text" name="lastname" id="lastname" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="phone">Phone NO</label>
        <input type="text" name="phone" id="phone" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="message">Message</label><br><br>
        <textarea rows="10" cols="120" name="message"></textarea>
    </div>
    <br>
    <div class="form-group">
        <button type="submit" class="btn-btn-success" >Submit</button>
    </div>
    




</form>




</div>






</body>







</html>



