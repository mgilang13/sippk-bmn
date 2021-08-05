<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>SISTEM INFORMASI PENGINGAT PAJAK KENDARAAN BMN</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />
  <!-- <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/> -->
  <link href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css" rel="stylesheet" type="text/css"> -->
  <link href="<?php echo base_url(); ?>assets/css/style-metro.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet" type="text/css" />
  <link href="<?php echo base_url(); ?>assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color" />
  <link href="<?php echo base_url(); ?>assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/select2/select2_metro.css" />
  <link href="<?php echo base_url(); ?>assets/css/pages/login-soft.css" rel="stylesheet" type="text/css" />

  <link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico" />

  <!-- <script src="<?php echo base_url(); ?>assets/scripts/jquery-1.8.3.js"></script>   -->

</head>

<body class="hold-transition login-page">
  <div class="login-box">


    <!-- /.login-logo -->
    <div class="login-box-body rounded">
      <div class="login-logo">
        <h1>SIPPK-BMN</h1>
        <H6>Sistem Informasi Pengingat Pajak Kendaraan BMN</H6>
      </div>
      <p class="login-box-msg">
        Log in to start your session
      </p>

      <form action="<?php echo base_url('Auth/login'); ?>" method="post">
        <div class="input-group mb-3">
          <div class="input-group-addon">
            <span class="input-group-text p-3" id="basic-addon1">
              <i class="icon-user"></i>
            </span>
          </div>
          <input type="text" class="form-control" placeholder="Username" name="username">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-addon">
            <span class="input-group-text p-3" id="basic-addon1">
              <i class="icon-lock"></i>
            </span>
          </div>
          <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
        <div class="row">
          <div class="col">
            <button type="submit" class="btn blue btn-block btn-flat text-uppercase">Sign In</button>
          </div>
        </div>
      </form>
    </div>
    <?php
    echo show_err_msg($this->session->flashdata('error_msg'));
    ?>
  </div>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script type="text/javascript">
  $(document).ready(function() {

    $('#username').focus();

  });
</script>

</html>