<?php
include('login.php');
if(isset($_SESSION['login_user'])){
header("location: home.php"); 
}
?>
<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    ADMIN LOGIN | GNDEC
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link href="assets/css/material-kit.css?v=2.0.5" rel="stylesheet" />
</head>
<body class="login-page sidebar-collapse">
  <div class="page-header header-filter">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-login">
            <form class="form" method="post" action="">
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">GNDECB | Admin Login</h4>
              </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>
                  <input type="email" class="form-control" name="lemail" placeholder="Email...">
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" class="form-control" name="lpass" placeholder="Password...">
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons"></i>
                    </span>
                  </div>
                <button class="btn btn-primary"style="position: relative;left: 10px;width:250px" name="submit">Login</button><span><?php echo $error; ?></span>
                
                </div>
              </div> 
            </form>
          </div>
        </div>
      </div>
    </div> 
  </div>
</body>
</html>