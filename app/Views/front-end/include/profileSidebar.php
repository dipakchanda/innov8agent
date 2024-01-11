<div class="accountSidebar">
    <ul class="menuListOne">
        <li>
            <a href="<?php echo base_url(); ?>myaccount" <?php if($pagename=='myaccunt') { ?>class="active"<?php } ?>>
                <em class="icon-user"></em> Profile 
            </a>
        </li>
        <?php //if($memberpayment == 'Active') { ?>
        <li>
            <a href="<?php echo base_url(); ?>tools"  <?php if($pagename=='tools') { ?>class="active"<?php } ?>>
                <em class="icon-ecommerce"></em> Tools
            </a>
        </li>
        
        <li>
            <a href="#"  <?php if($pagename=='history') { ?>class="active"<?php } ?>>
                <em class="icon-ecommerce"></em> History
            </a>
        </li>
        <?php //} ?>
        
        <li>
            <a href="<?php echo base_url(); ?>changepassword" <?php if($pagename=='changepassword') { ?>class="active"<?php } ?>>
                <em class="icon-setting"></em> Change Password
            </a>
        </li>
        
        <li>
            <a href="">
                <em class="icon-link"></em> My Links
            </a>
        </li>
        
        <li>
            <a href="<?php echo base_url(); ?>phone" <?php if($pagename=='phone') { ?>class="active"<?php } ?>>
                <em class="icon-call"></em> Phone number(s)
            </a>
        </li>
        
    </ul>
    <div class="bgGraph">
        <div class="title">
            <h6>Your Plan: Agent Essentials</h6>
            <p>You’re using 80% of your plan.</p>
        </div>
        <div class="graph">
            <div class="progress circleProgress">
                <div class="barOverflow">
                    <div class="bar"></div>
                </div>
                <h3>
                    <span>80</span>%
                </h3>
            </div>
        </div>
        <div class="details">
            <h6>You’ve almost reached your limit</h6>
            <p>You have used 80% of your plan. Upgrade now and do MORE!</p>
        </div>
    </div>
    <div class="logoutSec">
        <img src="<?php echo base_url(); ?>front-panel/images/logo/iconColor.svg" alt="">
        <a href="<?php echo base_url(); ?>signout"><em class="icon-logout"></em> Logout</a>
    </div>
</div>