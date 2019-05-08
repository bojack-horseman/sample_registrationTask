<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width initial-scale=1.0">
  <title>Registration Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>
  <div class="container-fluid">
    <div class="modal-lg shadow-lg mx-auto d-block mt-5">
      <h1 class=" text-center">Registration Page</h1>
      <form action="#" class="p-4" name="signup-form" method="POST" id="signup-form">
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" class="form-control" id="username" placeholder="username" name="username" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="text" class="form-control" id="email" placeholder="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="phone">Phone-Number:</label>
          <input type="tel" class="form-control" id="phone" pattern="[1-9]{1}[0-9]{9}" title="Enter 10 digit mobile number" placeholder="phone number" name="phone" required>
        </div>
        <label for="address[]">Address:</label>
        <div id="address_block">
          <div class="form-group">
            <div class="row">
              <div class="col-6">
                <input type="text" class="form-control" id="line1" placeholder="line1" name="address[0][line1]" required>
              </div>
              <div class="col-6">
                <input type="text" class="form-control" id="locality" placeholder="locality" name="address[0][locality]" required>
              </div>
            </div>
          </div>
          <button type="button" class="btn btn-dark text-white float-right" id="add_address">+</button>
          <div class="form-group">
            <div class="row">
              <div class="col-6 pl-0">
                <input type="text" class="form-control" id="state" placeholder="state" name="address[0][state]" required>
              </div>
              <div class="col-6 pl-0">
                <input type="number" class="form-control" id="pin" placeholder="pin" pattern="[1-4]{1}[0-9]{5}" title="Enter 6 digit pincode" name="address[0][pin]" required>
              </div>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-warning btn-block" id="signup_submit">Register</button>
      </form>
    </div>
  </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="js/signup-page.js"></script>
</html>
