			
						
						<ul	 id="da-thumbs" class="da-thumbs">
										<?php $query = mysqli_query($conn,"SELECT  teacher.teacher_id, teacher.user_id, teacher_class.teacher_class_id, teacher_class.teacher_id, teacher_class.class_id, teacher_class.subject_id, teacher_class.thumbnails, teacher_class.school_year, SUBJECT.subject_id, SUBJECT.subject_code, SUBJECT.subject_title, SUBJECT.category, SUBJECT.description, class.class_name, class.class_name FROM teacher_class LEFT JOIN teacher ON teacher_class.teacher_id = teacher.teacher_id LEFT JOIN class ON teacher_class.class_id = class.class_id LEFT JOIN SUBJECT ON teacher_class.subject_id = SUBJECT.subject_id WHERE teacher.user_id = '$session_id' and teacher_class.school_year = '$school_year_id' ")or die(mysqli_error());
										$count = mysqli_num_rows($query);
										
										if ($count > 0){
										while($row = mysqli_fetch_array($query)){
										$id = $row['teacher_class_id'];
				
										?>
											<li id="del<?php echo $id; ?>">
												<a href="my_students.php<?php echo '?id='.$id; ?>">
														<img src ="<?php echo $row['thumbnails'] ?>" width="124" height="140" class="img-polaroid" alt="">
													<div>
													<span><p><?php echo $row['class_name']; ?></p></span>
													</div>
												</a>
												<p class="class"><?php echo $row['class_name']; ?></p>
												<p class="subject"><?php echo $row['subject_code']; ?></p>
												<a href="#<?php echo $id; ?>" data-toggle="modal"><i class="icon-trash"></i> Remove</a>	
											
											</li>
										<?php include("delete_class_modal.php"); ?>
									<?php } }else{ ?>
									<div class="alert alert-info"><i class="icon-info-sign"></i> No Class Currently Added</div>
									<?php  } ?>
									</ul>