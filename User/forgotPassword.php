<?php
if(isset($_POST["inputEmail"]))
  {
  mail("varada.best@gmail.com","Test","Test message");
  header("Location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>AES - Assignment Evaluation System</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="../css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">

      <div class="card card-login mx-auto mt-5">
        <div class="card-header">
          Reset Password
        </div>
        <div class="card-body">
          <div class="text-center mt-4 mb-5">
            <h4>Forgot your password?</h4>
            <p>Enter your email address and we will send you instructions on how to reset your password.</p>
          </div>
          <form method="POST" action="">
            <div class="form-group">
              <input type="email" class="form-control" id="inputEmail" name="inputEmail" aria-describedby="emailHelp" placeholder="Enter email address" required>
            </div>
            <input type="submit" class="btn btn-primary btn-block" value="Reset Password"></a>
          </form>
          <div class="text-center">
            <a class="d-block small" href="login.php">Login Page</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/popper/popper.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>