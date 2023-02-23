<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:login.php');
}
?>
<?php include('header.php'); ?>
    <div class="container">
    <a href="logout.php"><button class="btn-danger " style="float: right;
    margin-right: 37px;
    padding: 8px;
    border-radius: 4px;" >Logout</button></a>
      <div class="py-5 text-center">
        <h2>Payment Form</h2>
      </div>
      <fieldset>
      <form method="post" name="customerData" action="ccavRequestHandler.php">
          <p>
            <!-- <label for="tid"> Transaction ID</label> -->
            <input type="hidden" class="form-control" name="tid" id="tid" value="<?php echo(rand(11111,99999)); ?>" readonly required />
          </p>
          <p>
            
            <input type="hidden" class="form-control" name="order_id" id="order_id" value="<?php echo(rand(11111,99999)); ?>" readonly required />
          </p>
          <p>
          <input  type="hidden" name="merchant_id" value="2071243"/>
          </p>
          <p>
            <label for="amount"> Amount </label>
            <input type="text"  class="form-control" name="amount" placeholder="Enter Amount" required/>
          </p>
          <p>
            <label for="reason"> Paying For </label>
            <input type="text"  class="form-control"  placeholder="Enter Payment Details " required/>
          </p>

          <p>
            <label for="currency"> Currency </label>    

        <select class="form-select" name="currency" aria-label="Default select example">
  
            <option value="INR" selected='true'>Indian Rupees</option>
                <option value="USD">US Dollar</option>
                <option value="AUD">Australian Dollar</option>
                <option value="GBP">Pound Sterling</option>
            </select>
          </p>
          <p>
            <input type="hidden"  class="form-control" name="redirect_url" value="http://localhost/all_test_folder/payment/ccavResponseHandler.php" />
          </p>
          <p>
            <input type="hidden"  class="form-control" name="cancel_url" value="http://localhost/all_test_folder/payment/ccavRequestHandler.php" />
          </p>
          <p>
            <input type="hidden"  class="form-control" name="language" value="EN" />
          </p>
          <h3 for="name"> Billing Information: </h3>
          <p>
              <label for="name"> Name </label>
            <input type="text"  class="form-control" name="billing_name" placeholder="Mention your name" required />
          </p>
          <p>
              <label for="address"> Address </label>
            <input type="text"  class="form-control" name="billing_address" placeholder="Mention your address"/>
          </p>
          <p>
              <label for="city"> City </label>
            <input type="text"  class="form-control" name="billing_city" placeholder="Mention city name"/>
          </p>
          <p>
              <label for="state"> State </label>
            <input type="text"  class="form-control" name="billing_state" Placeholder="Mention state name"/>
          </p>
          <p>
              <label for="pin"> Pincode </label>
            <input type="text"  class="form-control" name="billing_zip" placeholder="Mention Zipcode"/>
          </p>
          <p>
              <label for="country"> Country </label>
            <input type="text"  class="form-control" name="billing_country" placeholder="Mention country name"/>
          </p>
          <p>
            <label for="email"> Email</label>
            <input type="email"  class="form-control"  name="billing_email" placeholder="Mention your email id" required/>
          </p>
          <p>
            <label for="phone"> Phone</label>
            <input type="number"  class="form-control" name="billing_tel" placeholder="Mention contact number" required required />
          </p>
          
          
          <p>&nbsp;</p>
          <p>
            <input TYPE="submit" class="btn btn-primary" value="SUBMIT" />
          
          </p>
        </form>
        
      </fieldset>
    </div>
  
  <script src="reg-form2.js"></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"
  ></script>
<?php include('footer.php'); ?>
