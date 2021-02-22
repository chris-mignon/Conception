<?php
include('dbcon.php');
$session_id = $_POST['session_id'];
$subject_id = $_POST['subject_id'];
$class_id = $_POST['class_id'];
$school_year = $_POST['school_year'];


$query = mysqli_query($conn," SELECT teacher.user_id, teacher_class.teacher_class_id, teacher_class.teacher_id, teacher_class.class_id, teacher_class.subject_id, teacher_class.school_year FROM teacher_class LEFT JOIN teacher ON teacher_class.teacher_id = teacher.teacher_id  WHERE
teacher_class.subject_id = '$subject_id' AND teacher_class.class_id = '$class_id' AND teacher.user_id = '$session_id' AND teacher_class.school_year = '$school_year' ")or die(mysqli_error());


$count = mysqli_num_rows($query);
$teach= mysqli_fetch_array($query);
$class_teacher = $teach['teacher_id'];

if ($count > 0){ 
echo "true";
}else{

mysqli_query($conn,"insert into teacher_class (teacher_id,subject_id,class_id,thumbnails,school_year) values('$class_teacher','$subject_id','$class_id','admin/uploads/thumbnails.jpg','$school_year')")or die(mysqli_error());

$teacher_class = mysqli_query($conn,"select * from teacher_class order by teacher_class_id DESC")or die(mysqli_error());
$teacher_row = mysqli_fetch_array($teacher_class);
$teacher_id = $teacher_row['teacher_class_id'];


$insert_query = mysqli_query($conn,"select * from student where class_id = '$class_id'")or die(mysqli_error());
while($row = mysqli_fetch_array($insert_query)){
$id = $row['student_id'];
mysqli_query($conn,"insert into teacher_class_student (teacher_id,student_id,teacher_class_id) values('$class_teacher','$id','$teacher_id')")or die(mysqli_error());
echo "yes";
}
}
?>