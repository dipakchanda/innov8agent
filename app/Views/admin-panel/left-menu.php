<ul class="menu-items">
   <li class="m-t-20 ">
        <a href="<?php echo base_url(); ?>innova-admin/dashboard" class="detailed">
        <span class="title">Dashboard</span>
        <!--<span class="details">12 New Updates</span>-->
        </a>
        <span class="icon-thumbnail"><i class="pg-icon">home</i></span>
    </li>
    
    <li <?php if($pagename=='category') { ?>class="open active" <?php } ?>>
        <a href="javascript:;"><span class="title">Projects</span>
        <span class=" arrow"></span></a>
        <span class="icon-thumbnail"><i class="pg-icon">calendar</i></span>
        
        <ul class="sub-menu" <?php if($pagename=='category') { ?> style="display:block" <?php } ?>>
            <li class="">
            <a href="<?php echo base_url(); ?>innova-admin/category">Category</a>
            <span class="icon-thumbnail"><i class="pg-icon">c</i></span>
            </li>
            
            <li class="">
            <a href="<?php echo base_url(); ?>innova-admin/prompt-questions">Prompt</a>
            <span class="icon-thumbnail"><i class="pg-icon">P</i></span>
            </li>
        </ul>
    </li>
    
    <li <?php if($pagename=='user') { ?>class="open active" <?php } ?>>
        <a href="javascript:;"><span class="title">User Mgmt</span>
        <span class=" arrow"></span></a>
        <span class="icon-thumbnail"><i class="pg-icon">calendar</i></span>
        
        <ul class="sub-menu" <?php if($pagename=='user') { ?> style="display:block" <?php } ?>>
            <li class="">
            <a href="<?php echo base_url(); ?>innova-admin/all-subscription">Subscription</a>
            <span class="icon-thumbnail"><i class="pg-icon">s</i></span>
            </li>
            
            <li class="">
            <a href="<?php echo base_url(); ?>innova-admin/alluser">Users</a>
            <span class="icon-thumbnail"><i class="pg-icon">u</i></span>
            </li>
        </ul>
    </li>
    
    <!--<li <?php //if($pagename=='home') { ?>class="open active" <?php //} ?>>
        <a href="javascript:;"><span class="title">Home Mgmt</span>
        <span class=" arrow"></span></a>
        <span class="icon-thumbnail"><i class="pg-icon">calendar</i></span>
        
        <ul class="sub-menu" <?php //if($pagename=='home') { ?> style="display:block" <?php //} ?>>
            <li class="">
            <a href="<?php //echo base_url(); ?>innova-admin/banner-update">Banner</a>
            <span class="icon-thumbnail"><i class="pg-icon">B</i></span>
            </li>
            
            <li class="">
            <a href="<?php //echo base_url(); ?>innova-admin/services-highlights-update">Services Highlights</a>
            <span class="icon-thumbnail"><i class="pg-icon">SH</i></span>
            </li>
            
            <li class="">
            <a href="<?php //echo base_url(); ?>innova-admin/revolutionizing">Revolutionizing</a>
            <span class="icon-thumbnail"><i class="pg-icon">R</i></span>
            </li>
            
            <li class="">
            <a href="<?php //echo base_url(); ?>innova-admin/about-us">About Us</a>
            <span class="icon-thumbnail"><i class="pg-icon">A</i></span>
            </li>
        </ul>
    </li>-->
    
    <li <?php if($pagename=='cms') { ?>class="open active" <?php } ?>>
        <a href="javascript:;"><span class="title">CMS Mgmt</span>
        <span class=" arrow"></span></a>
        <span class="icon-thumbnail"><i class="pg-icon">calendar</i></span>
        
        <ul class="sub-menu" <?php if($pagename=='cms') { ?> style="display:block" <?php } ?>>
            <li class="">
            <a href="<?php echo base_url(); ?>innova-admin/testimonials">Testimonials</a>
            <span class="icon-thumbnail"><i class="pg-icon">T</i></span>
            </li>
            
            <li class="">
            <a href="<?php echo base_url(); ?>innova-admin/faq">FAQ</a>
            <span class="icon-thumbnail"><i class="pg-icon">F</i></span>
            </li>
            
            <li class="">
            <a href="<?php echo base_url(); ?>innova-admin/professionals-teams">Prof. & teams</a>
            <span class="icon-thumbnail"><i class="pg-icon">PT</i></span>
            </li>
            
            <!--<li class="">
            <a href="<?php //echo base_url(); ?>innova-admin/how-it-works-marketing">How it works(Marketing)</a>
            <span class="icon-thumbnail"><i class="pg-icon">HM</i></span>
            </li>-->
            
            <!--<li class="">
            <a href="<?php //echo base_url(); ?>innova-admin/how-it-works-optimized">How it works(Optimized)</a>
            <span class="icon-thumbnail"><i class="pg-icon">HM</i></span>
            </li>-->
            
            <!--<li class="">
            <a href="<?php //echo base_url(); ?>innova-admin/services-highlights">Services Highlights</a>
            <span class="icon-thumbnail"><i class="pg-icon">SH</i></span>
            </li>-->
        </ul>
    </li>
    
    <li <?php if($pagename=='contact') { ?>class="open active" <?php } ?>>
        <a href="javascript:;"><span class="title">Contact Mgmt</span>
        <span class=" arrow"></span></a>
        <span class="icon-thumbnail"><i class="pg-icon">calendar</i></span>
        
        <ul class="sub-menu" <?php if($pagename=='contact') { ?> style="display:block" <?php } ?>>
            <li class="">
            <a href="<?php echo base_url(); ?>innova-admin/contact-message">Contact Message</a>
            <span class="icon-thumbnail"><i class="pg-icon">C</i></span>
            </li>
            
            <li class="">
            <a href="<?php echo base_url(); ?>innova-admin/contact-information">Contact Info.</a>
            <span class="icon-thumbnail"><i class="pg-icon">I</i></span>
            </li>
        </ul>
    </li>
    
     <li <?php if($pagename=='password') { ?>class="open active" <?php } ?>>
        <a href="javascript:;"><span class="title">Settings</span>
        <span class=" arrow"></span></a>
        <span class="icon-thumbnail"><i class="pg-icon">calendar</i></span>
        
        <ul class="sub-menu" <?php if($pagename=='password') { ?> style="display:block" <?php } ?>>
            <li class="">
            <a href="<?php echo base_url(); ?>innova-admin/changepassword">Change Password</a>
            <span class="icon-thumbnail"><i class="pg-icon">C</i></span>
            </li>
            
            <li class="">
            <a href="<?php echo base_url(); ?>innova-admin/logout">Logout</a>
            <span class="icon-thumbnail"><i class="pg-icon">L</i></span>
            </li>
        </ul>
    </li>
    
     
    
    
</ul>