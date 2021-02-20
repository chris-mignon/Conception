   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add Student</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form id="add_student" method="post">
								
								<div class="control-group">
            <div class="controls">
              <input name="firstname"  class="input focused" id="focusedInput" type="text" placeholder = "First name" required>
            </div>
          </div>

            
          <div class="control-group">
             <div class="controls">
               <input name="lastname"  class="input focused" id="focusedInput" type="text" placeholder = "Last name" required>
             </div>
          </div>

          <div class="control-group">
              <div class="controls">
                <input name="username"  class="input focused" id="focusedInput" type="text" placeholder = "username" required>
              </div>
          </div>

                                        
          <div class="control-group">
              <div class="controls">
               <input name="password"  class="input focused" id="focusedInput" type="text" placeholder = "password" required>
              </div>
          </div>



          <div class="control-group">
                                   
              <div class="controls">
                <select  name="school" class="" required>
              
                <?php
                $school_query = mysqli_query($conn,"select * from school order by school_name");
                               while($school_row = mysqli_fetch_array($school_query)){
                              ?>
               <option value="<?php echo $school_row['school_id']; ?>"><?php echo $school_row['school_name']; ?></option>
               <?php } ?>
                </select>
              </div>
          </div>
                            
					<div class="control-group">                        
          <div class="controls">
            <select  name="class" class="" required>
            
											<?php
											 $class_query = mysqli_query($conn,"select * from class order by class_name");
										  while($class_row = mysqli_fetch_array($class_query)){
											?>
						  <option value="<?php echo $class_row['class_id']; ?>"><?php echo $class_row['class_name']; ?></option>
					  	 <?php } ?>
             </select>
           </div>
         </div>
								
								
										
          <div class="control-group">
                                           
            <div class="controls">
              <select  name="status" class="" required>
                
                  <?php
                    $status_query = mysqli_query($conn,"select * from user_status  WHERE status_id BETWEEN 1 AND 2 order by status_name");
                    while($status_row = mysqli_fetch_array($status_query)){
                   ?>
               <option value="<?php echo $status_row['status_id']; ?>"><?php echo $status_row['status_name']; ?></option>
               <?php } ?>
              </select>
           </div>
        </div>
										
											<div class="control-group">
                                          <div class="controls">
												<button name="save" class="btn btn-info"><i class="icon-plus-sign icon-large"></i></button>

                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
			<script>
			jQuery(document).ready(function($){
				$("#add_student").submit(function(e){
					e.preventDefault();
					var _this = $(e.target);
					var formData = $(this).serialize();
					$.ajax({
						type: "POST",
						url: "save_student.php",
						data: formData,
						success: function(html){
							$.jGrowl("Student Successfully  Added", { header: 'Student Added' });
							$('#studentTableDiv').load('student_table.php', function(response){
								$("#studentTableDiv").html(response);
								$('#example').dataTable( {
									"sDom": "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>",
									"sPaginationType": "bootstrap",
									"oLanguage": {
										"sLengthMenu": "_MENU_ records per page"
									}
								} );
								$(_this).find(":input").val('');
								$(_this).find('select option').attr('selected',false);
								$(_this).find('select option:first').attr('selected',true);
							});
						}
					});
				});
			});
			</script>		
