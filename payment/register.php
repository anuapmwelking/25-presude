<?php include('header.php'); ?>
<div class="container">

<form method="post" name="customerData" action="addUser.php">
        <h2 class="my-3">Registration Form</h2>
        <div class="my-3">
          <p>
              <label for="name"> Name </label>
            <input type="text"  class="form-control" name="billing_name" placeholder="Mention your name" required />
          </p>
          <p>
              <label for="email"> Email </label>
            <input type="email"  class="form-control" name="useremail" placeholder="Mention your email"/>
          </p>
          <p>
              <label for="password"> Password </label>
            <input type="text"  class="form-control" name="userpass" placeholder="Mention your password"/>
          </p>
         
          <p>
            <input type="submit" class="btn btn-primary" value="SUBMIT" />
          </p>
          </div>
        </form>
        </div>