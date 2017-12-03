<?php
    include_once('conn.php');


    if (sizeof($_POST) >= 10) {
      mysqli_query($conn, "INSERT INTO users(firstname, mi, lastname, address, birthdate, gender, phone, email, password)
      VALUES
      (
        '$_POST[fname]',
        '$_POST[mi]',
        '$_POST[lname]',
        '$_POST[address]',
        '$_POST[bdate]',
        '$_POST[gender]',
        '$_POST[cpnum]',
        '$_POST[email]',
        '$_POST[password]'

      )") or die (mysql_error($conn));
    }
    if (!$_POST);

    else {
      
      echo "May POST<br>";

      foreach($_POST as $key => $data)
        echo "$key: $data<br>";
      return;

    }

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<style>

#body {
  background-color: #ffffff;

}
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
    }
    
    li {
        float: left;
    }
    
    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }
    
    li a:hover {
        background-color: #111;
    }

    
    </style>


<body id="body" class="hold-transition login-page">
  
<div class="login-box">

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          
          <ul class="nav navbar-nav">
            <li><a href="index.html">Login</a></li>
            <li class="active"><a href="#">Register</a></li>
            <li><a href="carinfo.html">F.A.Q.</a></li>
          </ul>
        </div>
      </nav>

  
  

    <form action="" method="post">
      <div class="row">
        
          <div class="form-group input-sm col-xs-5">
              <label>Firstname</label>
            <input type="text" class="form-control" name="fname" placeholder="" required>
          </div>
          
          <div class="form-group input-sm col-xs-2">
              <label>MI</label>
              <input type="text" class="form-control" name="mi"  maxlength="2" placeholder="" required>
          </div>

          <div class="form-group input-sm col-xs-5">
              <label>Lastname</label>
              <input type="text" class="form-control" name="lname" placeholder="" required>
          </div>

      </div>
      &nbsp;


          <div class="row">
              <div class="form-group input-sm col-xs-12">
                <label>Address</label>
                <input type="text" class="form-control" name="address" placeholder="" required>
              </div>
          </div>&nbsp;
          
          <div class="row">
            <div class="form-group input-sm col-xs-12">
              <label>Birthdate</label>
              <input type="date" max="2000-12-31" name="bdate" class="form-control pull-right"  id="datepicker" required>
            </div>
          </div>&nbsp;
              
          <div class="row"> 
            <div class="form-group input-sm col-xs-12">
              <label>Gender</label>
                <select name="gender" class="form-control">
                  <option>Male</option>
                  <option>Female</option>
                </select>
            </div>
          </div>&nbsp;

          <div class="row">
              <div class="form-group input-sm col-xs-12">
                <label>Phone Number</label>
                <input type="text" class="form-control" name="cpnum" placeholder="" required>
              </div>
          </div>&nbsp;

          <div class="row">
              <div class="form-group input-sm col-xs-12">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="" required>
              </div>
          </div>&nbsp;

          <div class="row">
              <div class="form-group input-sm col-xs-12">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="" required>
              </div>
          </div>&nbsp;

          <div class="row">
              <div class="form-group input-sm col-xs-12">
                <label>Confirm Password</label>
                <input type="password" class="form-control" name="confirm_pass" placeholder="" required>
              </div>
          </div>&nbsp;

            <div class="row">
                
              <!-- /.col -->
              <div class="form-group col-xs-4">&nbsp;
                  <center>
                <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                </center>
              </div>
              <!-- /.col -->
            </div>

              </div>
              
     
    </form>

  

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js">
  //Date picker
  
</script>
<!-- Bootstrap 3.3.6 -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>


<script>


  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>



