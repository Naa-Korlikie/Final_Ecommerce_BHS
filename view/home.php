<?php
include("../settings/core.php");
?>
<?php
if (logged_in() == true) {
	$user_role = check_user_role();
	//$new=cart_count();
	if ($user_role == 2){
		header("location: ../view/user_index.php");}

	else{
		header("location: ../NiceAdmin/index.php");

	}
	}
	?>