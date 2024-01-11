<?php $pagename='dashboard'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>admin-panel/assets/img/logo.png" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <?php include("top-script.php"); ?>
  </head>
  
  <body class="fixed-header dashboard menu-pin menu-behind">
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
                  <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <!-- END BREADCRUMB -->
              </div>
            </div>
          </div>
          <!-- END JUMBOTRON -->
          
          <!-- START CONTAINER FLUID -->
          <div class=" container-fluid   container-fixed-lg m-t-30">
            <!-- START card -->
            <div class="container sm-padding-10 p-l-0 p-r-0">
            <!-- START ROW -->
            <div class="row m-b-30">
              <div class="col-lg-7">
                <!-- START ROW -->
                <div class="row">
                  <div class="col-sm-6 sm-p-b-10">
                    <!-- START WIDGET widget_pendingComments.tpl-->
                    <div class=" card   no-margin widget-loader-circle todolist-widget pending-projects-widget">
                      <div class="card-header ">
                        <div class="card-title">
                          <span class="d-flex align-items-center font-montserrat all-caps">
                  Recent projects <i class="pg-icon">chevron_right</i>
              </span>
                        </div>
                        <div class="card-controls">
                          <ul>
                            <li><a href="#" class="card-refresh text-black" data-bs-toggle="refresh"><i
        class="card-icon card-icon-refresh"></i></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="card-body">
                        <h5 class="">Ongoing projects at <span class="semi-bold">pages</span></h5>
                        <ul class="nav nav-tabs nav-tabs-simple m-b-20" role="tablist" data-init-reponsive-tabs="collapse">
                          <li class="nav-item"><a href="#pending" class="active" data-bs-toggle="tab" role="tab" aria-expanded="true">Pending</a>
                          </li>
                          <li class="nav-item"><a href="#completed" data-bs-toggle="tab" role="tab" aria-expanded="false">Completed</a>
                          </li>
                        </ul>
                        <div class="tab-content no-padding">
                          <div class="tab-pane active" id="pending">
                            <div class="p-t-10">
                              <div class="d-flex">
                                <span class="icon-thumbnail bg-contrast-low pull-left">kp</span>
                                <div class="flex-1 full-width overflow-ellipsis">
                                  <p class="hint-text all-caps font-montserrat fs-11 no-margin overflow-ellipsis ">Revox Ltd
                                  </p>
                                  <h5 class="no-margin overflow-ellipsis ">Kepler - wordpress builder</h5>
                                </div>
                              </div>
                              <div class="m-t-15">
                                <p class="hint-text small pull-left no-margin">71% completed from total</p>
                                <a href="#" class="pull-right "><i class="pg-icon">more_horizontal</i></a>
                                <div class="clearfix"></div>
                              </div>
                              <div class="progress progress-small m-b-15 m-t-10">
                                <!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
                                <div class="progress-bar progress-bar-info" style="width:71%"></div>
                                <!-- END BOOTSTRAP PROGRESS -->
                              </div>
                            </div>
                            <div class="p-t-15">
                              <div class="d-flex">
                                <span class="icon-thumbnail bg-warning-light pull-left ">cr</span>
                                <div class="flex-1 full-width overflow-ellipsis">
                                  <p class="hint-text all-caps font-montserrat fs-11 no-margin overflow-ellipsis ">Nike Ltd
                                  </p>
                                  <h5 class="no-margin overflow-ellipsis ">Corporate rebranding</h5>
                                </div>
                              </div>
                              <div class="m-t-15">
                                <p class="hint-text small pull-left no-margin">20% completed from total</p>
                                <a href="#" class="pull-right "><i class="pg-icon">more_horizontal</i></a>
                                <div class="clearfix"></div>
                              </div>
                              <div class="progress progress-small m-b-15 m-t-10">
                                <!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
                                <div class="progress-bar progress-bar-warning" style="width:20%"></div>
                                <!-- END BOOTSTRAP PROGRESS -->
                              </div>
                            </div>
                            <a href="#" class="btn btn-block m-t-30 w-100">See all projects</a>
                          </div>
                          <div class="tab-pane" id="completed">
                            <div class="p-t-10">
                              <div class="d-flex">
                                <span class="icon-thumbnail bg-contrast-higher pull-left ">ws</span>
                                <div class="flex-1 full-width overflow-ellipsis">
                                  <p class="hint-text all-caps font-montserrat fs-11 no-margin overflow-ellipsis ">Apple Corp
                                  </p>
                                  <h5 class="no-margin overflow-ellipsis ">Marketing Campaign for revox</h5>
                                </div>
                                <div class="clearfix"></div>
                              </div>
                              <div class="m-t-15">
                                <p class="hint-text  small pull-left no-margin">45% completed from total</p>
                                <a href="#" class="pull-right "><i class="pg-icon">more_horizontal</i></a>
                                <div class="clearfix"></div>
                              </div>
                              <div class="progress progress-small m-b-15 m-t-10">
                                <!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
                                <div class="progress-bar progress-bar-info" style="width:45%"></div>
                                <!-- END BOOTSTRAP PROGRESS -->
                              </div>
                            </div>
                            <div class="p-t-15">
                              <div class="d-flex">
                                <span class="icon-thumbnail bg-primary-light pull-left ">cr</span>
                                <div class="flex-1 full-width overflow-ellipsis">
                                  <p class="hint-text all-caps font-montserrat fs-11 no-margin overflow-ellipsis ">Yahoo Inc
                                  </p>
                                  <h5 class="no-margin overflow-ellipsis ">Corporate rebranding</h5>
                                </div>
                                <div class="clearfix"></div>
                              </div>
                              <div class="m-t-15">
                                <p class="hint-text  small pull-left no-margin">20% completed from total</p>
                                <a href="#" class="pull-right "><i class="pg-icon">more_horizontal</i></a>
                                <div class="clearfix"></div>
                              </div>
                              <div class="progress progress-small m-b-15 m-t-10">
                                <!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
                                <div class="progress-bar progress-bar-warning" style="width:20%"></div>
                                <!-- END BOOTSTRAP PROGRESS -->
                              </div>
                            </div>
                            <a href="#" class="btn btn-block m-t-30 w-100">See all projects</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- END WIDGET -->
                  </div>
                  <div class="col-sm-6 sm-m-t-10 sm-p-b-10 d-flex">
                    <!-- START WIDGET widget_pendingComments.tpl-->
                    <div class=" card no-border  no-margin widget-loader-circle todolist-widget align-self-stretch">
                      <div class="card-header">
                        <div class="card-title">TODOLIST
                        </div>
                        <div class="card-controls">
                          <ul>
                            <li><a href="#" class="portlet-refresh text-black" data-toggle="refresh"><i
						                        class="portlet-icon portlet-icon-refresh"></i></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <ul class="list-unstyled p-l-20 p-r-20 p-t-10 m-b-20">
                        <li>
                          <h5 class="pull-left normal no-margin">28th September</h5>
                          <a href="#" class="text-black pull-right m-l-5" data-toggle="refresh"><i class="fa fa-angle-right"></i></a>
                          <a href="#" class="text-black pull-right m-r-5" data-toggle="refresh"><i class="fa fa-angle-left"></i></a>
                        </li>
                        <div class="clearfix"></div>
                      </ul>
                      <div class="task-list p-t-0 p-r-20 p-b-20 p-l-20 clearfix flex-1">
                        <!-- START TAKS !-->
                        <div class="task clearfix row completed">
                          <div class="task-list-title col-10 justify-content-between">
                            <a href="#" class="text-color strikethrough" data-task="name">Purchase Pages before 10am
						                    </a>
                            <i class="fs-14 pg-close hidden"></i>
                          </div>
                          <div class="form-check checkbox-circle no-margin text-center col-2 d-flex justify-content-center align-items-center">
                            <input type="checkbox" checked="checked" value="1" id="todocheckbox" data-toggler="task" class="hidden">
                            <label for="todocheckbox" class=" no-margin no-padding absolute"></label>
                          </div>
                        </div>
                        <!-- END TAKS !-->
                        <!-- START TAKS !-->
                        <div class="task clearfix row">
                          <div class="task-list-title col-10 justify-content-between">
                            <a href="#" class="text-color" data-task="name">Meeting with CFO
						                    </a>
                            <i class="fs-14 pg-close hidden"></i>
                          </div>
                          <div class="form-check checkbox-circle no-margin text-center col-2 d-flex justify-content-center align-items-center">
                            <input type="checkbox" value="1" id="todocheck2" data-toggler="task" class="hidden">
                            <label for="todocheck2" class=" no-margin no-padding absolute"></label>
                          </div>
                        </div>
                        <!-- END TAKS !-->
                        <!-- START TAKS !-->
                        <div class="task clearfix row">
                          <div class="task-list-title col-10 justify-content-between">
                            <a href="#" class="text-color" data-task="name">AGM Conference at 1pm
						                    </a>
                            <i class="fs-14 pg-close hidden"></i>
                          </div>
                          <div class="form-check checkbox-circle no-margin text-center col-2 d-flex justify-content-center align-items-center">
                            <input type="checkbox" value="1" id="todocheck3" data-toggler="task" class="hidden">
                            <label for="todocheck3" class=" no-margin no-padding absolute"></label>
                          </div>
                        </div>
                        <!-- END TAKS !-->
                        <!-- START TAKS !-->
                        <div class="task clearfix row">
                          <div class="task-list-title col-10 justify-content-between">
                            <a href="#" class="text-color" data-task="name">Revise Annual Reports
						                    </a>
                            <i class="fs-14 pg-close hidden"></i>
                          </div>
                          <div class="form-check checkbox-circle no-margin text-center col-2 d-flex justify-content-center align-items-center">
                            <input type="checkbox" value="1" id="todocheck4" data-toggler="task" class="hidden">
                            <label for="todocheck4" class=" no-margin no-padding absolute"></label>
                          </div>
                        </div>
                        <!-- END TAKS !-->
                      </div>
                      <div class="clearfix"></div>
                      <div class="bg-master-light padding-20 full-width ">
                        <div class="row">
                          <div class="col-10">
                            <p class="no-margin normal text-black">Type Event Here</p>
                            <div class="input-group transparent no-border full-width">
                              <input class="form-control transparent p-l-0" type="text" placeholder="What do you need to remeber?">
                            </div>
                          </div>
                          <div class="col-2 text-center">
                            
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- END WIDGET -->
                  </div>
                </div>
                <!-- END ROW -->
              </div>
              <div class="col-lg-5 sm-m-t-10 d-flex">
                <!-- START WIDGET widget_pendingComments.tpl-->
                <div class="widget-11-2 card no-border card-condensed no-margin widget-loader-circle d-flex flex-column align-self-stretch">
                  <div class="card-header top-right">
                    <div class="card-controls">
                      <ul>
                        <li><a data-toggle="refresh" class="portlet-refresh text-black" href="#"><i
										class="portlet-icon portlet-icon-refresh"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="padding-25">
                    <div class="pull-left">
                      <h2 class="text-success no-margin">webarch</h2>
                      <p class="no-margin">Today's sales</p>
                    </div>
                    <h3 class="pull-right semi-bold"><sup>
							<small class="semi-bold">$</small>
						</sup> 102,967
						</h3>
                    <div class="clearfix"></div>
                  </div>
                  <div class="auto-overflow widget-11-2-table">
                    <table class="table table-condensed table-hover">
                      <tbody>
                        <tr>
                          <td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
                          <td class="text-right hidden-lg">
                            <span class="hint-text small">dewdrops</span>
                          </td>
                          <td class="text-right b-r b-dashed b-grey w-25">
                            <span class="hint-text small">Qty 1</span>
                          </td>
                          <td class="w-25">
                            <span class="font-montserrat fs-18">$27</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
                          <td class="text-right hidden-lg">
                            <span class="hint-text small">dewdrops</span>
                          </td>
                          <td class="text-right b-r b-dashed b-grey w-25">
                            <span class="hint-text small">Qty 1</span>
                          </td>
                          <td class="w-25">
                            <span class="font-montserrat fs-18">$27</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
                          <td class="text-right hidden-lg">
                            <span class="hint-text small">dewdrops</span>
                          </td>
                          <td class="text-right b-r b-dashed b-grey w-25">
                            <span class="hint-text small">Qty 1</span>
                          </td>
                          <td class="w-25">
                            <span class="font-montserrat fs-18">$27</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
                          <td class="text-right hidden-lg">
                            <span class="hint-text small">dewdrops</span>
                          </td>
                          <td class="text-right b-r b-dashed b-grey w-25">
                            <span class="hint-text small">Qty 1</span>
                          </td>
                          <td class="w-25">
                            <span class="font-montserrat fs-18">$27</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
                          <td class="text-right hidden-lg">
                            <span class="hint-text small">dewdrops</span>
                          </td>
                          <td class="text-right b-r b-dashed b-grey w-25">
                            <span class="hint-text small">Qty 1</span>
                          </td>
                          <td class="w-25">
                            <span class="font-montserrat fs-18">$27</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
                          <td class="text-right hidden-lg">
                            <span class="hint-text small">dewdrops</span>
                          </td>
                          <td class="text-right b-r b-dashed b-grey w-25">
                            <span class="hint-text small">Qty 1</span>
                          </td>
                          <td class="w-25">
                            <span class="font-montserrat fs-18">$27</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
                          <td class="text-right hidden-lg">
                            <span class="hint-text small">dewdrops</span>
                          </td>
                          <td class="text-right b-r b-dashed b-grey w-25">
                            <span class="hint-text small">Qty 1</span>
                          </td>
                          <td class="w-25">
                            <span class="font-montserrat fs-18">$27</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
                          <td class="text-right hidden-lg">
                            <span class="hint-text small">dewdrops</span>
                          </td>
                          <td class="text-right b-r b-dashed b-grey w-25">
                            <span class="hint-text small">Qty 1</span>
                          </td>
                          <td class="w-25">
                            <span class="font-montserrat fs-18">$27</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
                          <td class="text-right hidden-lg">
                            <span class="hint-text small">dewdrops</span>
                          </td>
                          <td class="text-right b-r b-dashed b-grey w-25">
                            <span class="hint-text small">Qty 1</span>
                          </td>
                          <td class="w-25">
                            <span class="font-montserrat fs-18">$27</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-montserrat all-caps fs-12 w-50">Purchase CODE #2345</td>
                          <td class="text-right hidden-lg">
                            <span class="hint-text small">dewdrops</span>
                          </td>
                          <td class="text-right b-r b-dashed b-grey w-25">
                            <span class="hint-text small">Qty 1</span>
                          </td>
                          <td class="w-25">
                            <span class="font-montserrat fs-18">$27</span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="padding-25 mt-auto">
                    <p class="small no-margin">
                      <a href="#"><i class="fa fs-16 fa-arrow-circle-o-down text-success m-r-10"></i></a>
                      <span class="hint-text ">Show more details of APPLE . INC</span>
                    </p>
                  </div>
                </div>
                <!-- END WIDGET -->
              </div>
            </div>
            <!-- END ROW -->
          </div>
            <!-- END card -->
          </div>
        </div>
        
        <div class=" container-fluid  container-fixed-lg footer">
          <?php include("copy-right.php"); ?>
        </div>
        <!-- END COPYRIGHT -->
      </div>
    </div>
    
   
    <?php include("bottom-script.php"); ?>
  </body>
</html>