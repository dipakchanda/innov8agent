<?php $pagename='user'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Admin Subscription List</title>
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
            <div class=" container-fluid  container-fixed-lg sm-p-l-0 sm-p-r-0">
              <div class="inner">
                <!-- START BREADCRUMB -->
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>innova-admin/dashboard">Home</a></li>
                  <li class="breadcrumb-item active">All Subscription</li>
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
              <div class="card-header ">
                <div class="pull-left">
                <div class="col-xs-12">
                <!--<button aria-label="" id="add-category-button" class="btn btn-primary btn-cons"><i class="pg-icon">add</i> Add Testimonial</button>-->
                </div>
                 </div> 
                
                <div class="pull-right">
                  <div class="col-xs-12"><input type="text" id="search-table" class="form-control pull-right" placeholder="Search"></div>
                </div>
                
                <div class="clearfix"></div>
                <?php if(session()->get('addedd')) { ?>
                <div class="alert alert-success mt-2" role="alert" id="cat-add" style="display:block">Updated successfully completed</div>
                <?php } ?>
              </div>
              
              <div class="card-body">
                <table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
                <thead>
                <tr>
                <th style="width:1%; display:none"></th>
                <th style="width:1%">ID</th>
                <th style="width:50%">Subscription</th>
                <th style="width:10%">Amount</th>
                <th style="width:10%">Action</th>
                </tr>
                </thead>
                
                <tbody>
                <?php 
                foreach ($allsubscription as $subscription) 
                {
                ?>
                <tr>
                <td class="v-align-middle semi-bold" style="display:none"><p></p></td>
                <td class="v-align-middle semi-bold"><p><?php echo $subscription->subscription_id; ?></p></td>
                <td class="v-align-middle"><p><?php echo $subscription->subscription_name;?></p> </td>
                <td class="v-align-middle"><p>$<?php echo $subscription->subscription_amt;?></p> </td>
                <td class="v-align-middle">
                <p>
                <button aria-label="" class="btn btn-info btn-lg btn-icon-left m-b-10" type="button" onClick="viewEdit('<?php echo $subscription->subscription_id; ?>')"><i class="pg-icon">edit</i><span class="">Edit</span></button>
                </p>
                </td>
                </tr>
                <?php } ?>
                </tbody>
                </table>
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
    
    <script>
	 function viewEdit(subscription_id)
	 {
	 	window.location.href='<?php echo base_url(); ?>innova-admin/subscription-update/'+subscription_id;	
	 }
	</script>
  </body>
</html>