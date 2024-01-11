<div class="header ">
        <!-- START MOBILE SIDEBAR TOGGLE -->
        <a href="#" class="btn-link toggle-sidebar d-lg-none pg-icon btn-icon-link" data-toggle="sidebar">
      		menu</a>
        <!-- END MOBILE SIDEBAR TOGGLE -->
        <div class="">
          <div class="brand inline   m-l-10">
            <img src="<?php echo base_url(); ?>admin-panel/assets/img/logo.png" alt="logo" data-src="<?php echo base_url(); ?>admin-panel/assets/img/logo.png" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/logo.png" width="200">
          </div>
          <!-- START NOTIFICATION LIST -->
          
          <!-- END NOTIFICATIONS LIST -->
          
        </div>
        
        <div class="d-flex align-items-center">
          <!-- START User Info-->
          <div class="dropdown pull-right d-lg-block d-none">
            <button class="profile-dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="profile dropdown">
              <span class="thumbnail-wrapper d32 circular inline"><img src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/avatar.jpg" alt="" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/avatar.jpg" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/avatar.jpg" width="32" height="32"></span>
            </button>
            
            <div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
              <a href="<?php echo base_url(); ?>innova-admin/changepassword" class="dropdown-item">Settings</a>
              <a href="<?php echo base_url(); ?>innova-admin/logout" class="dropdown-item">Logout</a>
            </div>
          </div>
          <!-- END User Info-->
          <a href="#" class="header-icon m-l-5 sm-no-margin d-inline-block" data-toggle="quickview" data-toggle-element="#quickview">
            <i class="pg-icon btn-icon-link">menu_add</i>
          </a>
        </div>
      </div>
      <!-- END HEADER -->
      
      <!-- START PAGE CONTENT WRAPPER -->
      
      <!-- END PAGE CONTENT WRAPPER -->
      
       <!--START QUICKVIEW -->
    <div id="quickview" class="quickview-wrapper" data-pages="quickview">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li class="">
          <a href="#quickview-notes" data-bs-target="#quickview-notes" data-bs-toggle="tab" role="tab">Notes</a>
        </li>
        <li>
          <a href="#quickview-alerts" data-bs-target="#quickview-alerts" data-bs-toggle="tab" role="tab">Alerts</a>
        </li>
        <li class="">
          <a class="active" href="#quickview-chat" data-bs-toggle="tab" role="tab">Chat</a>
        </li>
      </ul>
      <a class="btn-icon-link invert quickview-toggle" data-toggle-element="#quickview" data-toggle="quickview"><i class="pg-icon">close</i></a>
      <!-- Tab panes -->
      <div class="tab-content">
        <!-- BEGIN Notes !-->
        <div class="tab-pane no-padding" id="quickview-notes">
          <div class="view-port clearfix quickview-notes" id="note-views">
            <!-- BEGIN Note List !-->
            <div class="view list" id="quick-note-list">
              <div class="toolbar clearfix">
                <ul class="pull-right ">
                  <li>
                    <a href="#" class="delete-note-link"><i class="pg-icon">trash_alt</i></a>
                  </li>
                  <li>
                    <a href="#" class="new-note-link" data-navigate="view" data-view-port="#note-views" data-view-animation="push"><i class="pg-icon">add</i></a>
                  </li>
                </ul>
                <button aria-label="" class="btn-remove-notes btn btn-xs btn-block hide"><i class="pg-icon">close</i>Delete</button>
              </div>
              <ul>
                <!-- BEGIN Note Item !-->
                <li data-noteid="1" class="d-flex justify-space-between">
                  <div class="left">
                    <!-- BEGIN Note Action !-->
                    <div class="form-check warning no-margin">
                      <input id="qncheckbox1" type="checkbox" value="1">
                      <label for="qncheckbox1"></label>
                    </div>
                    <!-- END Note Action !-->
                    <!-- BEGIN Note Preview Text !-->
                    <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    <!-- BEGIN Note Preview Text !-->
                  </div>
                  <!-- BEGIN Note Details !-->
                  <div class="d-flex right justify-content-end">
                    <!-- BEGIN Note Date !-->
                    <span class="date">12/12/20</span>
                    <a href="#" class="d-flex align-items-center" data-navigate="view" data-view-port="#note-views" data-view-animation="push">
                      <i class="pg-icon">chevron_right</i>
                    </a>
                    <!-- END Note Date !-->
                  </div>
                  <!-- END Note Details !-->
                </li>
                <!-- END Note List !-->
                <!-- BEGIN Note Item !-->
                <li data-noteid="2" class="d-flex justify-space-between">
                  <div class="left">
                    <!-- BEGIN Note Action !-->
                    <div class="form-check warning no-margin">
                      <input id="qncheckbox2" type="checkbox" value="1">
                      <label for="qncheckbox2"></label>
                    </div>
                    <!-- END Note Action !-->
                    <!-- BEGIN Note Preview Text !-->
                    <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    <!-- BEGIN Note Preview Text !-->
                  </div>
                  <!-- BEGIN Note Details !-->
                  <div class="d-flex right justify-content-end">
                    <!-- BEGIN Note Date !-->
                    <span class="date">12/12/20</span>
                    <a href="#" class="d-flex align-items-center" data-navigate="view" data-view-port="#note-views" data-view-animation="push"><i class="pg-icon">chevron_right</i></a>
                    <!-- END Note Date !-->
                  </div>
                  <!-- END Note Details !-->
                </li>
                <!-- END Note List !-->
                <!-- BEGIN Note Item !-->
                <li data-noteid="2" class="d-flex justify-space-between">
                  <div class="left">
                    <!-- BEGIN Note Action !-->
                    <div class="form-check warning no-margin">
                      <input id="qncheckbox3" type="checkbox" value="1">
                      <label for="qncheckbox3"></label>
                    </div>
                    <!-- END Note Action !-->
                    <!-- BEGIN Note Preview Text !-->
                    <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    <!-- BEGIN Note Preview Text !-->
                  </div>
                  <!-- BEGIN Note Details !-->
                  <div class="d-flex right justify-content-end">
                    <!-- BEGIN Note Date !-->
                    <span class="date">12/12/20</span>
                    <a href="#" class="d-flex align-items-center" data-navigate="view" data-view-port="#note-views" data-view-animation="push"><i class="pg-icon">chevron_right</i></a>
                    <!-- END Note Date !-->
                  </div>
                  <!-- END Note Details !-->
                </li>
                <!-- END Note List !-->
                <!-- BEGIN Note Item !-->
                <li data-noteid="3" class="d-flex justify-space-between">
                  <div class="left">
                    <!-- BEGIN Note Action !-->
                    <div class="form-check warning no-margin">
                      <input id="qncheckbox4" type="checkbox" value="1">
                      <label for="qncheckbox4"></label>
                    </div>
                    <!-- END Note Action !-->
                    <!-- BEGIN Note Preview Text !-->
                    <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    <!-- BEGIN Note Preview Text !-->
                  </div>
                  <!-- BEGIN Note Details !-->
                  <div class="d-flex right justify-content-end">
                    <!-- BEGIN Note Date !-->
                    <span class="date">12/12/20</span>
                    <a href="#" class="d-flex align-items-center" data-navigate="view" data-view-port="#note-views" data-view-animation="push"><i class="pg-icon">chevron_right</i></a>
                    <!-- END Note Date !-->
                  </div>
                  <!-- END Note Details !-->
                </li>
                <!-- END Note List !-->
                <!-- BEGIN Note Item !-->
                <li data-noteid="4" class="d-flex justify-space-between">
                  <div class="left">
                    <!-- BEGIN Note Action !-->
                    <div class="form-check warning no-margin">
                      <input id="qncheckbox5" type="checkbox" value="1">
                      <label for="qncheckbox5"></label>
                    </div>
                    <!-- END Note Action !-->
                    <!-- BEGIN Note Preview Text !-->
                    <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    <!-- BEGIN Note Preview Text !-->
                  </div>
                  <!-- BEGIN Note Details !-->
                  <div class="d-flex right justify-content-end">
                    <!-- BEGIN Note Date !-->
                    <span class="date">12/12/20</span>
                    <a href="#" class="d-flex align-items-center" data-navigate="view" data-view-port="#note-views" data-view-animation="push"><i class="pg-icon">chevron_right</i></a>
                    <!-- END Note Date !-->
                  </div>
                  <!-- END Note Details !-->
                </li>
                <!-- END Note List !-->
              </ul>
            </div>
            <!-- END Note List !-->
            <div class="view note" id="quick-note">
              <div>
                <ul class="toolbar">
                  <li><a href="#" class="close-note-link"><i class="pg-icon">chevron_left</i></a>
                  </li>
                  <li><a href="#" data-action="Bold" class="fs-12"><i class="pg-icon">format_bold</i></a>
                  </li>
                  <li><a href="#" data-action="Italic" class="fs-12"><i class="pg-icon">format_italics</i></a>
                  </li>
                  <li><a href="#" class="fs-12"><i class="pg-icon">link</i></a>
                  </li>
                </ul>
                <div class="body">
                  <div>
                    <div class="top">
                      <span>21st april 2020 2:13am</span>
                    </div>
                    <div class="content">
                      <div class="quick-note-editor full-width full-height js-input" contenteditable="true"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END Notes !-->
        <!-- BEGIN Alerts !-->
        <div class="tab-pane no-padding" id="quickview-alerts">
          <div class="view-port clearfix" id="alerts">
            <!-- BEGIN Alerts View !-->
            <div class="view bg-white">
              <!-- BEGIN View Header !-->
              <div class="navbar navbar-default navbar-sm">
                <div class="navbar-inner">
                  <!-- BEGIN Header Controler !-->
                  <a href="javascript:;" class="action p-l-10 link text-color" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                    <i class="pg-icon">more_horizontal</i>
                  </a>
                  <!-- END Header Controler !-->
                  <div class="view-heading">
                    Notications
                  </div>
                  <!-- BEGIN Header Controler !-->
                  <a href="#" class="action p-r-10 pull-right link text-color">
                    <i class="pg-icon">search</i>
                  </a>
                  <!-- END Header Controler !-->
                </div>
              </div>
              <!-- END View Header !-->
              <!-- BEGIN Alert List !-->
              <div data-init-list-view="ioslist" class="list-view boreded no-top-border">
                <!-- BEGIN List Group !-->
                <div class="list-view-group-container">
                  <!-- BEGIN List Group Header!-->
                  <div class="list-view-group-header text-uppercase">
                    Calendar
                  </div>
                  <!-- END List Group Header!-->
                  <ul>
                    <!-- BEGIN List Group Item!-->
                    <li class="alert-list">
                      <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                      <a href="javascript:;" class="align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                        <p class="">
                          <span class="text-warning fs-10"><i class="pg-icon">circle_fill</i></span>
                        </p>
                        <p class="p-l-10 overflow-ellipsis fs-12">
                          <span class="text-color">David Nester Birthday</span>
                        </p>
                        <p class="p-r-10 ml-auto fs-12 text-right">
                          <span class="text-warning">Today <br></span>
                          <span class="text-color">All Day</span>
                        </p>
                      </a>
                      <!-- END Alert Item!-->
                      <!-- BEGIN List Group Item!-->
                    </li>
                    <!-- END List Group Item!-->
                    <!-- BEGIN List Group Item!-->
                    <li class="alert-list">
                      <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                      <a href="#" class="align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                        <p class="">
                          <span class="text-warning fs-10"><i class="pg-icon">circle_fill</i></span>
                        </p>
                        <p class="p-l-10 overflow-ellipsis fs-12">
                          <span class="text-color">Meeting at 2:30</span>
                        </p>
                        <p class="p-r-10 ml-auto fs-12 text-right">
                          <span class="text-warning">Today</span>
                        </p>
                      </a>
                      <!-- END Alert Item!-->
                    </li>
                    <!-- END List Group Item!-->
                  </ul>
                </div>
                <!-- END List Group !-->
                <div class="list-view-group-container">
                  <!-- BEGIN List Group Header!-->
                  <div class="list-view-group-header text-uppercase">
                    Social
                  </div>
                  <!-- END List Group Header!-->
                  <ul>
                    <!-- BEGIN List Group Item!-->
                    <li class="alert-list">
                      <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                      <a href="javascript:;" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                        <p class="">
                          <span class="text-complete fs-10"><i class="pg-icon">circle_fill</i></span>
                        </p>
                        <p class="col overflow-ellipsis fs-12 p-l-10">
                          <span class="text-color link">Jame Smith commented on your status<br></span>
                          <span class="text-color">�Perfection Simplified - Company Revox"</span>
                        </p>
                      </a>
                      <!-- END Alert Item!-->
                    </li>
                    <!-- END List Group Item!-->
                    <!-- BEGIN List Group Item!-->
                    <li class="alert-list">
                      <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                      <a href="javascript:;" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                        <p class="">
                          <span class="text-complete fs-10"><i class="pg-icon">circle_fill</i></span>
                        </p>
                        <p class="col overflow-ellipsis fs-12 p-l-10">
                          <span class="text-color link">Jame Smith commented on your status<br></span>
                          <span class="text-color">�Perfection Simplified - Company Revox"</span>
                        </p>
                      </a>
                      <!-- END Alert Item!-->
                    </li>
                    <!-- END List Group Item!-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <!-- BEGIN List Group Header!-->
                  <div class="list-view-group-header text-uppercase">
                    Sever Status
                  </div>
                  <!-- END List Group Header!-->
                  <ul>
                    <!-- BEGIN List Group Item!-->
                    <li class="alert-list">
                      <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                      <a href="#" class="p-t-10 p-b-10 align-items-center" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                        <p class="">
                          <span class="text-danger fs-10"><i class="pg-icon">circle_fill</i></span>
                        </p>
                        <p class="col overflow-ellipsis fs-12 p-l-10">
                          <span class="text-color link">12:13AM GTM, 10230, ID:WR174s<br></span>
                          <span class="text-color">Server Load Exceeted. Take action</span>
                        </p>
                      </a>
                      <!-- END Alert Item!-->
                    </li>
                    <!-- END List Group Item!-->
                  </ul>
                </div>
              </div>
              <!-- END Alert List !-->
            </div>
            <!-- EEND Alerts View !-->
          </div>
        </div>
        <!-- END Alerts !-->
        <div class="tab-pane active no-padding" id="quickview-chat">
          <div class="view-port clearfix" id="chat">
            <div class="view bg-white">
              <!-- BEGIN View Header !-->
              <div class="navbar navbar-default">
                <div class="navbar-inner">
                  <!-- BEGIN Header Controler !-->
                  <a href="javascript:;" class="action p-l-10 link text-color" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                    <i class="pg-icon">add</i>
                  </a>
                  <!-- END Header Controler !-->
                  <div class="view-heading">
                    Chat List
                    <div class="fs-11">Show All</div>
                  </div>
                  <!-- BEGIN Header Controler !-->
                  <a href="#" class="action p-r-10 pull-right link text-color">
                    <i class="pg-icon">more_horizontal</i>
                  </a>
                  <!-- END Header Controler !-->
                </div>
              </div>
              <!-- END View Header !-->
              <div data-init-list-view="ioslist" class="list-view boreded no-top-border">
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">
                    a</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/1x.jpg" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/1.jpg" src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/1x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">ava flores</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">b</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/2x.jpg" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/2.jpg" src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/2x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">bella mccoy</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/3x.jpg" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/3.jpg" src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/3x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">bob stephens</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">c</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/4x.jpg" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/4.jpg" src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/4x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">carole roberts</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/5x.jpg" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/5.jpg" src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/5x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">christopher perez</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">d</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/6x.jpg" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/6.jpg" src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/6x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">danielle fletcher</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/7x.jpg" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/7.jpg" src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/7x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">david sutton</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">e</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/8x.jpg" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/8.jpg" src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/8x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">earl hamilton</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/9x.jpg" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/9.jpg" src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/9x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">elaine lawrence</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/1x.jpg" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/1.jpg" src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/1x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">ellen grant</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/2x.jpg" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/2.jpg" src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/2x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">erik taylor</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/3x.jpg" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/3.jpg" src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/3x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">everett wagner</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">f</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/4x.jpg" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/4.jpg" src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/4x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">freddie gomez</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">g</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/5x.jpg" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/5.jpg" src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/5x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">glen jensen</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/6x.jpg" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/6.jpg" src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/6x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">gwendolyn walker</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">j</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/7x.jpg" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/7.jpg" src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/7x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">janet romero</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">k</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/8x.jpg" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/8.jpg" src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/8x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">kim martinez</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">l</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/9x.jpg" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/9.jpg" src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/9x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">lawrence white</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/1x.jpg" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/1.jpg" src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/1x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">leroy bell</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/2x.jpg" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/2.jpg" src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/2x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">letitia carr</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/3x.jpg" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/3.jpg" src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/3x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">lucy castro</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">m</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/4x.jpg" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/4.jpg" src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/4x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">mae hayes</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>

                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/5x.jpg" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/5.jpg" src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/5x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">marilyn owens</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/6x.jpg" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/6.jpg" src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/6x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">marlene cole</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/7x.jpg" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/7.jpg" src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/7x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">marsha warren</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/8x.jpg" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/8.jpg" src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/8x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">marsha dean</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/9x.jpg" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/9.jpg" src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/9x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">mia diaz</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">n</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/1x.jpg" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/1.jpg" src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/1x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">noah elliott</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">p</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/2x.jpg" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/2.jpg" src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/2x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">phyllis hamilton</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">r</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/3x.jpg" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/3.jpg" src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/3x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">raul rodriquez</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/4x.jpg" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/4.jpg" src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/4x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">rhonda barnett</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/5x.jpg" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/5.jpg" src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/5x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">roberta king</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">s</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/6x.jpg" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/6.jpg" src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/6x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">scott armstrong</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/7x.jpg" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/7.jpg" src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/7x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">sebastian austin</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/8x.jpg" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/8.jpg" src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/8x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">sofia davis</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">t</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/9x.jpg" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/9.jpg" src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/9x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">terrance young</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/1x.jpg" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/1.jpg" src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/1x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">theodore woods</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/2x.jpg" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/2.jpg" src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/2x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">todd wood</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/3x.jpg" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/3.jpg" src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/3x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">tommy jenkins</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">w</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/4x.jpg" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/4.jpg" src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/4x.jpg" class="col-top">
                        </span>
                        <p class="p-l-10 ">
                          <span class="text-color">wilma hicks</span>
                          <span class="block text-color hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
              </div>
            </div>
            <!-- BEGIN Conversation View  !-->
            <div class="view chat-view bg-white clearfix">
              <!-- BEGIN Header  !-->
              <div class="navbar navbar-default">
                <div class="navbar-inner">
                  <a href="javascript:;" class="link text-color action p-l-10 p-r-10" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                    <i class="pg-icon">chevron_left</i>
                  </a>
                  <div class="view-heading">
                    John Smith
                    <div class="fs-11 hint-text">Online</div>
                  </div>
                  <a href="#" class="link text-color action p-r-10 pull-right ">
                    <i class="pg-icon">more_horizontal</i>
                  </a>
                </div>
              </div>
              <!-- END Header  !-->
              <!-- BEGIN Conversation  !-->
              <div class="chat-inner" id="my-conversation">
                <!-- BEGIN From Me Message  !-->
                <div class="message clearfix">
                  <div class="chat-bubble from-me">
                    Hello there
                  </div>
                </div>
                <!-- END From Me Message  !-->
                <!-- BEGIN From Them Message  !-->
                <div class="message clearfix">
                  <div class="profile-img-wrapper m-t-5 inline">
                    <img class="col-top" width="30" height="30" src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/avatar_small.jpg" alt="" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/avatar_small.jpg" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/avatar_small2x.jpg">
                  </div>
                  <div class="chat-bubble from-them">
                    Hey
                  </div>
                </div>
                <!-- END From Them Message  !-->
                <!-- BEGIN From Me Message  !-->
                <div class="message clearfix">
                  <div class="chat-bubble from-me">
                    Did you check out Pages framework ?
                  </div>
                </div>
                <!-- END From Me Message  !-->
                <!-- BEGIN From Me Message  !-->
                <div class="message clearfix">
                  <div class="chat-bubble from-me">
                    Its an awesome chat
                  </div>
                </div>
                <!-- END From Me Message  !-->
                <!-- BEGIN From Them Message  !-->
                <div class="message clearfix">
                  <div class="profile-img-wrapper m-t-5 inline">
                    <img class="col-top" width="30" height="30" src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/avatar_small.jpg" alt="" data-src="<?php echo base_url(); ?>admin-panel/assets/img/profiles/avatar_small.jpg" data-src-retina="<?php echo base_url(); ?>admin-panel/assets/img/profiles/avatar_small2x.jpg">
                  </div>
                  <div class="chat-bubble from-them">
                    Yea
                  </div>
                </div>
                <!-- END From Them Message  !-->
              </div>
              <!-- BEGIN Conversation  !-->
              <!-- BEGIN Chat Input  !-->
              <div class="b-t b-grey bg-white clearfix p-l-10 p-r-10">
                <div class="row">
                  <div class="col-1 p-t-15">
                    <a href="#" class="link text-color"><i class="pg-icon">add</i></a>
                  </div>
                  <div class="col-8 no-padding">
                    <label class="d-none">Reply</label>
                    <input type="text" class="form-control chat-input" data-chat-input="" data-chat-conversation="#my-conversation" placeholder="Say something">
                  </div>
                  <div class="col-2 link text-color m-l-10 m-t-15 p-l-10 b-l b-grey col-top">
                    <a href="#" class="link text-color"><i class="pg-icon">camera</i></a>
                  </div>
                </div>
              </div>
              <!-- END Chat Input  !-->
            </div>
            <!-- END Conversation View  !-->
          </div>
        </div>
      </div>
    </div>
    <!-- END QUICKVIEW-->