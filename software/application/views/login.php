<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SIRIKA Login</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url(); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>css/sb-admin.css" rel="stylesheet">

  <style>
    .login-bg{
      background-color: red;
    }
  </style>
</head>

<body class="bg-dark login-bg">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">SIRIKA Login </div>
        <p>
          <?php $success_msg= $this->session->flashdata('success_msg');
          $error_msg= $this->session->flashdata('error_msg');
          
          if($success_msg){?>
            <div class="alert alert-success">
              <?php echo $success_msg; ?>
            </div>
          <?php }
          
          if($error_msg){ ?>
            <div class="alert alert-danger">
              <?php echo $error_msg; ?>
            </div>
          <?php } ?>
        </p>
      <div class="card-body">
        <form action="<?php echo base_url(); ?>welcome/login_user" method="POST">
          <div class="form-group">
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" name="email" placeholder="Enter email" required>
          </div>
          <div class="form-group">
            <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password" name="password" required>
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
          <button class="btn btn-primary btn-block" >Login</button>
        </form>
        <div class="text-center">
          <br>
          <a class="d-block small" href="user/account-support">Need help with your account?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url(); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url(); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
