<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Innov8Agent Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>admin-panel/assets/img/logo.png" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <link href="<?php echo base_url(); ?>/admin-panel/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>/admin-panel/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/admin-panel/assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?php echo base_url(); ?>/admin-panel/assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link class="main-stylesheet" href="<?php echo base_url(); ?>/admin-panel/pages/css/themes/corporate.css" rel="stylesheet" type="text/css" />
    <!-- Please remove the file below for production: Contains demo classes -->
    <link class="main-stylesheet" href="<?php echo base_url(); ?>/admin-panel/assets/css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
    window.onload = function()
    {
      // fix for windows 8
      if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
        document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/admin-panel/pages/css/windows.chrome.fix.css" />'
    }
    </script>
  </head>
  <body class="fixed-header menu-pin menu-behind">
    <div class="login-wrapper ">
      <!-- START Login Background Pic Wrapper-->
      <div class="bg-pic">
        <!-- START Background Caption-->
        <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
          <h1 class="semi-bold text-white">Professional Real Estate Agents, Elevate Your Game!</h1>
        </div>
        <!-- END Background Caption-->
      </div>
      
      <!-- END Login Background Pic Wrapper-->
      <!-- START Login Right Container-->
      <div class="login-container bg-white">
        <div class="p-l-50 p-r-50 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
          <img src="<?php echo base_url(); ?>/admin-panel/assets/img/logo-48x48_c.png" alt="logo" data-src="<?php echo base_url(); ?>/admin-panel/assets/img/logo-48x48_c.png" data-src-retina="<?php echo base_url(); ?>/admin-panel/assets/img/logo-48x48_c.png" width="255" >
          <h2 class="p-t-25">Innov8Agent Admin Panel</h2>
          <p class="mw-80 m-t-5">Sign in to your account</p>
          
			<?php if(session()->get('fail')){ ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">Invalid username or password</div>
            <?php } ?>
                        
          <!-- START Login Form -->
          <form id="form-login" class="p-t-15" role="form" action="<?php echo base_url(); ?>/innova-admin/login" method="post">
            <!-- START Form Control-->
            <div class="form-group form-group-default">
              <label>Login</label>
              <div class="controls">
                <input type="text" name="username" id="username" placeholder="User Name" value="<?php if(isset($_COOKIE['username'])) { echo $_COOKIE['username']; } ?>" class="form-control" required>
              </div>
            </div>
            <!-- END Form Control-->
            <!-- START Form Control-->
            <div class="form-group form-group-default">
              <label>Password</label>
              <div class="controls">
                <input type="password" class="form-control" name="password" id="password" value="<?php if(isset($_COOKIE['password'])) { echo $_COOKIE['password']; } ?>" placeholder="Credentials" required>
              </div>
            </div>
            <!-- START Form Control-->
            <div class="row">
              <div class="col-md-6 no-padding sm-p-l-10">
                <div class="form-check">
                  <input type="checkbox" name="keep_my" value="1" id="checkbox1" <?php if(isset($_COOKIE['password']) && $_COOKIE['keep_my']==1) { ?> checked <?php } ?>>
                  <label for="checkbox1">Remember me</label>
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-center justify-content-end">
                <button aria-label="" class="btn btn-primary btn-lg m-t-10" type="submit" name="loginButton" id="loginButton">Sign in</button>
              </div>
            </div>
            
            <!-- END Form Control-->
          </form>
          <!--END Login Form-->
          
        </div>
      </div>
      <!-- END Login Right Container-->
    </div>
    <!-- START OVERLAY -->
    
    <!-- END OVERLAY -->
    <!-- BEGIN VENDOR JS -->
    <script src="<?php echo base_url(); ?>/admin-panel/assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <!--  A polyfill for browsers that don't support ligatures: remove liga.js if not needed-->
    <script src="<?php echo base_url(); ?>/admin-panel/assets/plugins/liga.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>/admin-panel/assets/plugins/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>/admin-panel/assets/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>/admin-panel/assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>/admin-panel/assets/plugins/popper/umd/popper.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>/admin-panel/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>/admin-panel/assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>/admin-panel/assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>/admin-panel/assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>/admin-panel/assets/plugins/jquery-actual/jquery.actual.min.js"></script>
    <script src="<?php echo base_url(); ?>/admin-panel/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/admin-panel/assets/plugins/select2/js/select2.full.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/admin-panel/assets/plugins/classie/classie.js"></script>
    <script src="<?php echo base_url(); ?>/admin-panel/assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <!-- END VENDOR JS -->
    <script src="<?php echo base_url(); ?>/admin-panel/pages/js/pages.min.js"></script>
    <script>
    $(function()
    {
      $('#form-login').validate()
    })
    </script>
  </body>
</html>