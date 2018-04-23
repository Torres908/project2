<?php include 'view/header.php'; ?>


<html>
<body>


<div class="container">
  <h2>Sign Up Page</h2>
  <form method="post" action="createaccount.php">
    <div class="form-group">
      <!-- <label>Email:</label> -->
      <input type="text" name="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <!-- <label>Password:</label> -->
      <input type="password" name="password" class="form-control" id="email" placeholder="Enter password">
    </div>
    <div class="form-group">
      <!-- <label>First Name:</label> -->
      <input type="text" name="fname" class="form-control" id="email" placeholder="Enter first name">
    </div>
    <div class="form-group">
      <!-- <label>Last Name:</label> -->
      <input type="text" name="lname" class="form-control" id="email" placeholder="Enter last name">
    </div>
    <div class="form-group">
      <!-- <label>Phone Number:</label> -->
      <input type="text" name="phone" class="form-control" id="email" placeholder="Enter phone number">
    </div>
    <div class="form-group">
      <!-- <label>Date of Birth:</label> -->
      <input type="date" name="birhtday" class="form-control" id="pwd" >
    </div>
    <div class="form-group">
      <!-- <label>Gender:</label> -->
      <input type="text" name="gender" class="form-control" id="pwd" placeholder="Enter gender">
    </div>
    <input type="submit" action="createaccount.php" value="Create Account" class="btn btn-default">
  </form>
</div><br>
</body>
</html>


<?php include 'view/footer.php'; ?>


