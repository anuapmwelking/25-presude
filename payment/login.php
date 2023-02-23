<?php include "header.php"; ?>
<?php session_start(); ?>

    <br><br>
    <div class="container">
   

    <h2>Login page</h2>
    <br>


    <p style="color:red"><?php if (isset($_SESSION['failed']))
{
    echo $_SESSION['failed'];
    unset($_SESSION['failed']);
} ?></p>


<p style="color:green"><?php if (isset($_SESSION['created']))
{
    echo $_SESSION['created'];
    unset($_SESSION['created']);
} ?></p>


    <form action="logincheck.php" method='POST'>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" class="form-control" name="userName" id="exampleInputEmail1" required aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control"   name="userPassword" required id="exampleInputPassword1">
  </div>
  <button type="submit"  name="submit" id="submit" value="submit"  class="btn btn-primary">Submit</button>
  
  
</form>

<a href="register.php"><button class="btn btn-primary my-4">Register</button></a>

    </div>
