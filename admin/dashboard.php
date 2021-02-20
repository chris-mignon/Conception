<?php  include('header.php'); ?>
<?php  include('session.php'); ?>
    <body>
		<?php include('navbar.php') ?>
        <div class="container-fluid">
            <div class="row-fluid">
					<?php include('sidebar_dashboard.php'); ?>
                <!--/span-->
                <div class="span9" id="content">
						<div  class="row-fluid"></div>
						
                    <div class="row-fluid">
            
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">System Stats</div>
                            </div>
                            <div class="block-content collapse in">

							        <div class="span12">
								<?php 
								$query_subject = mysqli_query($conn,"select * from school")or die(mysqli_error());
								$count_subject = mysqli_num_rows($query_subject);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_subject; ?>"><?php echo $count_subject; ?></div>
                                    <div class="chart-bottom-heading"><strong>Schools</strong>

                                    </div>
                                </div>


								
								<?php 
								$query_teacher = mysqli_query($conn,"select * from users where user_role = '3'")or die(mysqli_error());
								$count_teacher = mysqli_num_rows($query_teacher);
								?>
								
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_teacher; ?>"><?php echo $count_teacher ?></div>
                                    <div class="chart-bottom-heading"><strong>Teachers</strong>

                                    </div>
                                </div>
								

                                <?php 
								$query_student = mysqli_query($conn,"select * from users where user_role ='4'")or die(mysqli_error());
								$count_student = mysqli_num_rows($query_student);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_student ?>"><?php echo $count_student ?></div>
                                    <div class="chart-bottom-heading"><strong>Students</strong>

                                    </div>
                                </div>
                                    <!-- class -->
									<?php 
								$query_class = mysqli_query($conn,"select * from class")or die(mysqli_error());
								$count_class = mysqli_num_rows($query_class);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_class; ?>"><?php echo $count_class; ?></div>
                                    <div class="chart-bottom-heading"><strong>Classes</strong>

                                    </div>
                                </div>
								<!-- subjects -->
								<?php 
								$query_subject = mysqli_query($conn,"select * from subject")or die(mysqli_error());
								$count_subject = mysqli_num_rows($query_subject);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_subject; ?>"><?php echo $count_subject; ?></div>
                                    <div class="chart-bottom-heading"><strong>Subjects</strong>

                                    </div>
                                </div>

                            <!-- Registered teachers -->
                                <?php 
								$query_reg_teacher = mysqli_query($conn,"select * from users where user_role ='3' and user_status = '3' ")or die(mysqli_error());
								$count_reg_teacher = mysqli_num_rows($query_reg_teacher);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_reg_teacher; ?>"><?php echo $count_reg_teacher; ?></div>
                                    <div class="chart-bottom-heading"><strong>Active Teachers</strong>

                                    </div>
                                </div>
								  <!-- Registered students -->
                                <?php 
								$query_student = mysqli_query($conn,"select * from users where user_role= '3' and user_status='1'")or die(mysqli_error());
								$count_student = mysqli_num_rows($query_student);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_student ?>"><?php echo $count_student ?></div>
                                    <div class="chart-bottom-heading"><strong>Registered Students</strong>

                                    </div>
                                </div>
								
										
						
                        
										<?php 
								$query_file = mysqli_query($conn,"select * from files")or die(mysqli_error());
								$count_file = mysqli_num_rows($query_file);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_file; ?>"><?php echo $count_file; ?></div>
                                    <div class="chart-bottom-heading"><strong>Downloadable Files</strong>

                                    </div>
                                </div>
                        
                            </div>
                        </div>
                        <!-- /block -->
						
                    </div>
                    </div>
                 
                </div>
            </div>
    
         <?php include('footer.php'); ?>
        </div>
	<?php include('script.php'); ?>
    </body>

</html>