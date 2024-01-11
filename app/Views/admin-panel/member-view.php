<?php $pagename = 'user'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta charset="utf-8" />
  <title>Admin Member View</title>
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
                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>innova-admin/alluser">User List</a></li>
                <li class="breadcrumb-item active">Member View</li>
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
              <h4 class="mw-80"><?php echo stripslashes($singleuser[0]->member_username); ?>'s detail information given below.</h4>
              <form id="form-personal" class="p-t-15" role="form" autocomplete="off" method="post" enctype="multipart/form-data" action="">
                <div class="row clearfix pt-2">
                  <div class="col-xl-6 controls">
                    <div class="form-group form-group-default controls">
                      <label>Username</label>
                      <?php echo stripslashes($singleuser[0]->member_username); ?>
                    </div>
                  </div>
                  
                  <div class="col-xl-6 controls">
                    <div class="form-group form-group-default controls">
                      <label>Email address</label>
                      <?php echo stripslashes($singleuser[0]->member_email); ?>
                    </div>
                  </div>
                </div>
                
                <div class="row clearfix pt-2">
                  <div class="col-xl-6 controls">
                    <div class="form-group form-group-default controls">
                      <label>Conatct</label>
                      <?php if($singleuser[0]->member_contact!='') { echo stripslashes($singleuser[0]->member_contact); } else { echo "N/A" ; } ?>
                    </div>
                  </div>
                  
                  <div class="col-xl-6 controls">
                    <div class="form-group form-group-default controls">
                      <label>User From</label>
                      <?php if($singleuser[0]->member_type!='') { echo stripslashes($singleuser[0]->member_type); } else { echo "N/A" ; } ?>
                    </div>
                  </div>
                </div>
                
                <div class="row clearfix pt-2">
                  <div class="col-xl-12 controls">
                    <div class="form-group form-group-default controls">
                      <label>Welcome Message</label>
                      <?php if($singleuser[0]->welcome_message!='') { echo stripslashes($singleuser[0]->welcome_message); } else { echo "N/A" ; } ?>
                    </div>
                  </div>
                </div>
                
                <div class="row clearfix pt-2">
                  <div class="col-xl-12 controls">
                    <div class="form-group form-group-default controls">
                      <label>Real Estate Name (Company Name)</label>
                      <?php if($singleuser[0]->welcome_estate!='') { echo stripslashes($singleuser[0]->welcome_estate); } else { echo "N/A" ; } ?>
                    </div>
                  </div>
                </div>
				
                <div class="row clearfix pt-2">
                  <div class="col-xl-3 controls">
                    <div class="form-group form-group-default controls">
                      <label>Date Format</label>
                      <?php if($singleuser[0]->date_formats!='') { echo stripslashes($singleuser[0]->date_formats); } else { echo "N/A" ; } ?>
                    </div>
                  </div>
                  
                  <div class="col-xl-3 controls">
                    <div class="form-group form-group-default controls">
                      <label>Time Format</label>
                      <?php if($singleuser[0]->time_formats!='') { echo stripslashes($singleuser[0]->time_formats); } else { echo "N/A" ; } ?>
                    </div>
                  </div>
                  
                  <div class="col-xl-3 controls">
                    <div class="form-group form-group-default controls">
                      <label>Country</label>
                      <?php if($singleuser[0]->member_country!='') { echo stripslashes($singleuser[0]->member_country); } else { echo "N/A" ; } ?>
                    </div>
                  </div>
                  
                  <div class="col-xl-3 controls">
                    <div class="form-group form-group-default controls">
                      <label>Time Zone</label>
                      <?php if($singleuser[0]->time_zone!='') { echo stripslashes($singleuser[0]->time_zone); } else { echo "N/A" ; } ?>
                    </div>
                  </div>
                </div>
                
                <h4 class="mw-80">Subscription information given below.</h4>
                
                <div class="row clearfix pt-2">
                  <div class="col-xl-4 controls">
                    <div class="form-group form-group-default controls">
                      <label>Membership</label>
                      <?php if($subscription_type!='') { echo stripslashes($subscription_type); } else { echo "N/A" ; } ?>
                    </div>
                  </div>
                  
                  <div class="col-xl-4 controls">
                    <div class="form-group form-group-default controls">
                      <label>Start Date</label>
                      <?php if($start_date!='') { echo stripslashes($start_date); } else { echo "N/A" ; } ?>
                    </div>
                  </div>
                  
                  <div class="col-xl-4 controls">
                    <div class="form-group form-group-default controls">
                      <label>End Date</label>
                      <?php if($end_date!='') { echo stripslashes($end_date); } else { echo "N/A" ; } ?>
                    </div>
                  </div>
                </div>
                
                <h4 class="mw-80">Payment history given below.</h4>
                
                <div class="card-body">
                	<table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
                    <thead>
                    <tr>
                    <th style="width:1%; display:none"></th>
                    <th style="width:1%" class="no-sort">ID</th>
                    <th style="width:12%">Payer Id</th>
                    <th style="width:12%">Item Numner</th>
                    <th style="width:14%">Subscription</th>
                    <th style="width:12%">Start Sate</th>
                    <th style="width:12%">End Sate</th>
                    <th style="width:8%">Amount</th>
                    <th style="width:6%">Status</th>
                    </tr>
                    </thead>
                    
                    <?php 
					foreach ($userpayment as $payments) 
					{
						$current_date = current_date();	
						if($payments->payment_status == 'Y')
						{
							if($payments->subscription_type == 'basic'){ $subscription_type = 'Agent Essentials Plan'; }
							if($payments->subscription_type == 'premium'){ $subscription_type = 'Agent Advantage Plan'; }
							if($payments->subscription_type == 'elite'){ $subscription_type = 'Agent Excellence Plan'; }
							
							$start_date = date("M j, Y", strtotime($payments->start_date));
							$end_date = date("M j, Y", strtotime($payments->end_date));
							
							if($current_date <= $payments->end_date)
							{
								$payment_status = 'Active';
							}
							else
							{
								$payment_status = '<span style="color:red">Expired</span>';
							}
						}
						else
						{
							$subscription_type = 'No Membership';
							$end_date = '--';
							$start_date = '--';
							$payment_status = '--';
						}
					?>
                    <tr>
                    <td class="v-align-middle semi-bold" style="display:none"><p></p></td>
                    <td class="v-align-middle semi-bold"><p><?php echo $payments->payment_id; ?></p></td>
                    <td class="v-align-middle"><p><?php echo $payments->payerid; ?></p> </td>
                    <td class="v-align-middle"><p><?php echo $payments->item_number; ?></p> </td>
                    <td class="v-align-middle"><p><?php echo $subscription_type; ?></p></td>
                    <td class="v-align-middle"><p><?php echo $start_date; ?></p> </td>
                    <td class="v-align-middle"><p><?php echo $end_date; ?></p> </td>
                    <td class="v-align-middle"><p><?php echo $payments->payment_amount; ?></p> </td>
                    <td class="v-align-middle"><p><?php echo $payment_status; ?></p> </td>
                    </tr>
                	<?php } ?>
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