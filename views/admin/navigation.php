<div class="sidebar-background">

	<div class="primary-sidebar-background">

	</div>

</div>

<div class="primary-sidebar">

	<!-- Main nav -->

    <br />

    <div style="text-align:center;">

    	<a href="<?php echo base_url();?>">

        	<img src="<?php echo base_url();?>uploads/hmslg.png" />

        </a>

    </div>

   	<br />

	<ul class="nav nav-collapse collapse nav-collapse-primary">

    

        

        <!------dashboard----->

		<li class="<?php if($page_name == 'dashboard')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php?admin/dashboard" >

					<i class="icon-desktop icon-2x"></i>

					<span><?php echo ('Dashboard');?></span>

				</a>

		</li>

        

        <!------department----->

		<li class="<?php if($page_name == 'manage_department')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php?admin/manage_department" >

					<i class="icon-sitemap icon-2x"></i>

					<span><?php echo ('Department');?></span>

				</a>

		</li>

        

        <!------doctor----->

		<li class="<?php if($page_name == 'manage_doctor')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php?admin/manage_doctor" >

					<i class="icon-user-md icon-2x"></i>

					<span><?php echo ('Doctor');?></span>

				</a>

		</li>

        

        <!------patient----->

		<li class="<?php if($page_name == 'manage_patient')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php?admin/manage_patient" >

					<i class="icon-user icon-2x"></i>

					<span><?php echo ('Patient');?></span>

				</a>

		</li>

        

        <!------nurse----->

		<li class="<?php if($page_name == 'manage_nurse')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php?admin/manage_nurse" >

					<i class="icon-plus-sign-alt icon-2x"></i>

					<span><?php echo ('Nurse');?></span>

				</a>

		</li>

        

        <!------pharmacist----->

		<li class="<?php if($page_name == 'manage_pharmacist')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php?admin/manage_pharmacist" >

					<i class="icon-medkit icon-2x"></i>

					<span><?php echo ('Pharmacist');?></span>

				</a>

		</li>

        

        <!------laboratorist----->

		<li class="<?php if($page_name == 'manage_laboratorist')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php?admin/manage_laboratorist" >

					<i class="icon-beaker icon-2x"></i>

					<span><?php echo ('Laboratorist');?></span>

				</a>

		</li>

        

        <!------accountant----->

		<li class="<?php if($page_name == 'manage_accountant')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php?admin/manage_accountant" >

					<i class="icon-money icon-2x"></i>

					<span><?php echo ('Accountant');?></span>

				</a>

		</li>

        

        

		<!------manage hospital------>

		<li class="dark-nav <?php if(	$page_name == 'view_appointment' 	|| 

										$page_name == 'view_payment' 		|| 

										$page_name == 'view_bed_status' 	|| 

										$page_name == 'view_blood_bank' 	|| 

										$page_name == 'view_medicine' 		|| 

										$page_name == 'view_report'  )echo 'active';?>">

			<span class="glow"></span>

            <a class="accordion-toggle  " data-toggle="collapse" href="#view_hospital_submenu" >

                <i class="icon-screenshot icon-2x"></i>

                <span><?php echo ('Monitor Hospital');?><i class="icon-caret-down"></i></span>

            </a>

            

            <ul id="view_hospital_submenu" class="collapse <?php if(	$page_name == 'view_appointment' 	|| 

																		$page_name == 'view_payment' 		|| 

																		$page_name == 'view_bed_status' 	|| 

																		$page_name == 'view_blood_bank' 	|| 

																		$page_name == 'view_medicine' 		|| 

																		$page_name == 'view_report'  )echo 'in';?>">

                <li class="<?php if($page_name == 'view_appointment')echo 'active';?>">

                  <a href="<?php echo base_url();?>index.php?admin/view_appointment">

                      <i class="icon-exchange"></i> <?php echo ('View Appointment');?>

                  </a>

                </li>

                <li class="<?php if($page_name == 'view_payment')echo 'active';?>">

                  <a href="<?php echo base_url();?>index.php?admin/view_payment">

                      <i class="icon-money"></i> <?php echo ('View Payment');?>

                  </a>

                </li>

                <li class="<?php if($page_name == 'view_bed_status')echo 'active';?>">

                  <a href="<?php echo base_url();?>index.php?admin/view_bed_status">

                      <i class="icon-hdd"></i> <?php echo ('View Bed Status');?>

                  </a>

                </li>

                <li class="<?php if($page_name == 'view_blood_bank')echo 'active';?>">

                  <a href="<?php echo base_url();?>index.php?admin/view_blood_bank">

                      <i class="icon-tint"></i> <?php echo ('View Blood Bank');?>

                  </a>

                </li>

                <li class="<?php if($page_name == 'view_medicine')echo 'active';?>">

                  <a href="<?php echo base_url();?>index.php?admin/view_medicine">

                      <i class="icon-medkit"></i> <?php echo ('View Medicine');?>

                  </a>

                </li>

                <li class="<?php if($page_name == 'view_report' && $report_type	==	'operation')echo 'active';?>">

                  <a href="<?php echo base_url();?>index.php?admin/view_report/operation">

                      <i class="icon-reorder"></i> <?php echo ('View Operation');?>

                  </a>

                </li>

                <li class="<?php if($page_name == 'view_report' && $report_type	==	'birth')echo 'active';?>">

                  <a href="<?php echo base_url();?>index.php?admin/view_report/birth">

                      <i class="icon-github-alt"></i> <?php echo ('View Birth Report');?>

                  </a>

                </li>

                <li class="<?php if($page_name == 'view_report' && $report_type	==	'death')echo 'active';?>">

                  <a href="<?php echo base_url();?>index.php?admin/view_report/death">

                      <i class="icon-user"></i> <?php echo ('View Death Report');?>

                  </a>

                </li>

            </ul>

		</li>

        

        

        <!------system settings------>

		<li class="dark-nav <?php if(	$page_name == 'manage_email_template' 	|| 

										$page_name == 'manage_noticeboard' 		||

										$page_name == 'system_settings' 		|| 

										$page_name == 'manage_language' 		|| 

										$page_name == 'backup_restore' )echo 'active';?>">

			<span class="glow"></span>

            <a class="accordion-toggle  " data-toggle="collapse" href="#settings_submenu" >

                <i class="icon-wrench icon-2x"></i>

                <span><?php echo ('Settings');?><i class="icon-caret-down"></i></span>

            </a>

            

            <ul id="settings_submenu" class="collapse <?php if(	$page_name == 'manage_email_template' 	|| 

																$page_name == 'manage_noticeboard' 		||

																$page_name == 'system_settings' 		|| 

																$page_name == 'manage_language' 		|| 

																$page_name == 'backup_restore' )echo 'in';?>">

                <!--<li class="<?php if($page_name == 'manage_email_template')echo 'active';?>">

                  <a href="<?php echo base_url();?>index.php?admin/manage_email_template">

                      <i class="icon-envelope"></i> <?php echo ('Manage Email Template');?>

                  </a>

                </li>-->

                <li class="<?php if($page_name == 'manage_noticeboard')echo 'active';?>">

                  <a href="<?php echo base_url();?>index.php?admin/manage_noticeboard">

                      <i class="icon-columns"></i> <?php echo ('Manage Noticeboard');?>

                  </a>

                </li>

                <li class="<?php if($page_name == 'system_settings')echo 'active';?>">

                  <a href="<?php echo base_url();?>index.php?admin/system_settings">

                      <i class="icon-h-sign"></i> <?php echo ('System Settings');?>

                  </a>

                </li>

                <li class="<?php if($page_name == 'manage_language')echo 'active';?>">

                  <a href="<?php echo base_url();?>index.php?admin/manage_language">

                      <i class="icon-globe"></i> <?php echo ('Manage Language');?>

                  </a>

                </li>

                <li class="<?php if($page_name == 'backup_restore')echo 'active';?>">

                  <a href="<?php echo base_url();?>index.php?admin/backup_restore">

                      <i class="icon-download-alt"></i> <?php echo ('Backup Restore');?>

                  </a>

                </li>

            </ul>

		</li>



		<!------manage own profile--->

		<li class="<?php if($page_name == 'manage_profile')echo 'dark-nav active';?>">

			<span class="glow"></span>

				<a href="<?php echo base_url();?>index.php?admin/manage_profile" >

					<i class="icon-lock icon-2x"></i>

					<span><?php echo ('Profile');?></span>

				</a>

		</li>

		

	</ul>

	

</div>