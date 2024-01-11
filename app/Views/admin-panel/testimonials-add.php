<?php $pagename = 'cms'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta charset="utf-8" />
  <title>Admin Testimonials Add</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
  <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>admin-panel/assets/img/logo.png" />
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-touch-fullscreen" content="yes">
  <?php include("top-script.php"); ?>
</head>

<body class="fixed-header menu-pin menu-behind">
  <!-- BEGIN SIDEBPANEL-->
  <nav class="page-sidebar" data-pages="sidebar">
    <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
    <div class="sidebar-overlay-slide from-top" id="appMenu">
      <div class="row">
        <div class="col-sm-6 no-padding">
          <a href="#" class="p-l-40"><img src="<?php echo base_url(); ?>admin-panel/assets/img/demo/social_app.svg" alt="socail">
          </a>
        </div>
        <div class="col-sm-6 no-padding">
          <a href="#" class="p-l-10"><img src="<?php echo base_url(); ?>admin-panel/assets/img/demo/email_app.svg" alt="socail">
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 m-t-20 no-padding">
          <a href="#" class="p-l-40"><img src="<?php echo base_url(); ?>admin-panel/assets/img/demo/calendar_app.svg" alt="socail">
          </a>
        </div>
        <div class="col-sm-6 m-t-20 no-padding">
          <a href="#" class="p-l-10"><img src="<?php echo base_url(); ?>admin-panel/assets/img/demo/add_more.svg" alt="socail">
          </a>
        </div>
      </div>
    </div>
    <!-- END SIDEBAR MENU TOP TRAY CONTENT-->
    <!-- BEGIN SIDEBAR MENU HEADER-->
    <?php include("top-side-bar.php"); ?>
    <!-- END SIDEBAR MENU HEADER-->
    <!-- START SIDEBAR MENU -->
    <div class="sidebar-menu">
      <!-- BEGIN SIDEBAR MENU ITEMS-->
      <?php include("left-menu.php"); ?>
      <div class="clearfix"></div>
    </div>
    <!-- END SIDEBAR MENU -->
  </nav>
  <!-- END SIDEBAR -->
  <!-- END SIDEBPANEL-->
  <!-- START PAGE-CONTAINER -->
  <div class="page-container ">
    <!-- START HEADER -->
    <?php include("top-bar.php"); ?>
    <!-- END HEADER -->
    <!-- START PAGE CONTENT WRAPPER -->
    <div class="page-content-wrapper ">
      <!-- START PAGE CONTENT -->
      <div class="content ">
        <!-- MODAL STICK UP  -->

        <!-- START JUMBOTRON -->
        <div class="jumbotron" data-pages="parallax">
          <div class=" container-fluid   container-fixed-lg sm-p-l-0 sm-p-r-0">
            <div class="inner">
              <!-- START BREADCRUMB -->
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>innova-admin/dashboard">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>innova-admin/testimonials">Testimonials</a></li>
                <li class="breadcrumb-item active">Testimonials Add</li>
              </ol>
              <!-- END BREADCRUMB -->
            </div>
          </div>
        </div>
        <!-- END JUMBOTRON -->

        <!-- START CONTAINER FLUID -->
        <div class=" container-fluid   container-fixed-lg p-t-30">
          <!-- START card -->
          <div class="card card-default">

            <div class="card-body">
              <h2 class="mw-80">Get started with your Testimonial.</h2>
              <form id="form-personal" class="p-t-15" role="form" autocomplete="off" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>innova-admin/testimonials-add">
                <div class="row clearfix pt-2">
                  <div class="col-xl-12 controls">
                    <div class="form-group form-group-default required controls">
                      <label>Testimonial By</label>
                      <input type="text" class="form-control" name="testimonialsby" id="testimonialsby" required>
                    </div>
                  </div>
                </div>
                
                <div class="row clearfix pt-2">
                  <div class="col-xl-12 controls">
                    <div class="form-group form-group-default required controls">
                      <label>Designation</label>
                      <input type="text" class="form-control" name="testimonialstype" id="testimonialstype" required>
                    </div>
                  </div>
                </div>


                <div class="row clearfix pt-2">
                  <div class="col-xl-12">
                    <div class="form-group form-group-default controls">
                      <label>Image</label>
                      <img src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/avatar.jpg" style="width:50px">
                      <input type="file" class="form-control" name="testimonialsimage" id="testimonialsimage">
                    </div>
                  </div>
                </div>

                <div class="row clearfix pt-3">
                  <div class="col-xl-12">
                    <div class="form-group form-group-default required">
                      <label>Testimonial Description</label>
                      <textarea class="form-control" id="testimonialsdesc" name="testimonialsdesc" rows="3" style="min-height:150px" required></textarea>
                    </div>
                  </div>
                </div>
                
                <div class="row clearfix">
                  <div class="col-xl-6 controls">
                    <label for="categorySelect" class="form-label">Position</label>
                    <select class="form-select" id="test_position" name="test_position" data-init-plugin="select2">
                        <option value="1">Left</option>
                        <option value="2">Right</option>
                    </select>
                  </div>
                  
                  <div class="col-xl-6 controls">
                    <label for="categorySelect" class="form-label">Status</label>
                    <select class="form-select" id="testimonialsstatus" name="testimonialsstatus" data-init-plugin="select2">
                        <option value="Y">Active</option>
                        <option value="N">inactive</option>
                    </select>
                  </div>
                </div>


                <div class="clearfix"></div>
                <div class="row m-t-25">
                  <div class="col-xl-6 p-b-10">
                  </div>
                  <div class="col-xl-6">
                    <button aria-label="" name="catsubmit" id="catsubmit" class="btn btn-primary pull-right btn-lg btn-block w-25" type="submit">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- END card -->
        </div>
      </div>

      <div class=" container-fluid  container-fixed-lg footer">
        <?php include("copy-right.php"); ?>
      </div>
      <!-- END COPYRIGHT -->
    </div>
    <!-- END PAGE CONTENT WRAPPER -->
  </div>

  <?php include("bottom-script.php"); ?>
</body>

</html>