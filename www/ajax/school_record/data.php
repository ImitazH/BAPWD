<?php

include 'db.php';

if($_REQUEST['req'] != ''){
	
	if($_REQUEST['req'] == 'add_new_record'){
		
		$student_name = $_REQUEST['stu_name'];
		$student_subject = $_REQUEST['stu_subject'];
		$student_fee = $_REQUEST['stu_fee'];


		$ins_sql = " INSERT INTO student_data(student_name, student_subject, student_fee) VALUES ('$student_name','$student_subject','$student_fee')";

		$run_sql = mysqli_query($conn, $ins_sql);
		
	}
	
	elseif($_REQUEST['req'] == 'delete_record'){
		$del_id = $_REQUEST['id'];
		$del_sql = " DELETE FROM student_data WHERE id ='$del_id' ";
		$run_sql = mysqli_query($conn,$del_sql);
	}
	
//	$student_name = $_REQUEST['stu_name'];
//	$student_subject = $_REQUEST['stu_subject'];
//	$student_fee = $_REQUEST['stu_fee'];
//	
//	
//	$ins_sql = " INSERT INTO student_data(student_name, student_subject, student_fee) VALUES ('$student_name','$student_subject','$student_fee')";
//	
//	$run_sql = mysqli_query($conn, $ins_sql);

}


$sql = " SELECT * FROM student_data";

$run = mysqli_query($conn,$sql);

while ( $rows= mysqli_fetch_assoc($run) ){  // $rows= mysqli_fetch_assoc($run) etake upore likhe ekhane sudu #rows likhe try koecilam. But kaj koreni.
	
	?>
	
<tr>
	<td> <?php echo $rows['id']; ?> </td>
	<td> <?php echo $rows['student_name']; ?></td>
	<td> <?php echo $rows['student_subject']; ?> </td>
	<td> <?php echo $rows['student_fee']; ?> /=</td>
	<td> 
		<div class="dropdown">
			<button class="btn btn-primary" data-toggle="dropdown"> Actions <span class="caret"></span></button>
			<ul class="dropdown-menu">
				<li><a href="#">Edit</a></li>
				<li><a href="javacsript:void(0);" onclick="ajax_request('delete_request',<?php $rows['id'] ?>);"> Delete </a></li>
			</ul>
		</div>
	</td>
</tr>

	
	<?php
	
}

?>






<!--
	<tr>
		<td>2.</td>
		<td> Mathew</td>
		<td> Psychology</td>
		<td> 1000/= </td>
		<td> 
		<div class="dropdown">
		<button class="btn btn-primary" data-toggle="dropdown"> Actions <span class="caret"></span></button>
		<ul class="dropdown-menu">
		<li><a href="#">Edit</a></li>
		<li><a href="#">delete</a></li>
		</ul>
		</div>
		</td>
	</tr>
-->



