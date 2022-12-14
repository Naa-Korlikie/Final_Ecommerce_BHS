<?php

include("../controllers/customer_controller.php");
include("../settings/core.php");


if (isset($_POST['submit1'])) {
  $email = $_POST['customer_email'];
  $password = $_POST['customer_pass'];

  //calling the ctr
  $check = loggingin_ctr($email, $password);

  //method for checking the email and password to retrive the information for the touser logins
  if ($check) {
    $_SESSION['cid'] = $check['customer_id'];
    $_SESSION['userRole'] = $check['user_role'];
    //checking if the person logging in is an admin or customer
    $adminchecking = check_user_role();

    // now redirects to the index page
    header("Location: ../view/home.php?login=success");
  } else {
    echo "Log in failed,check your password or email again";
    header("Location: login.php?login=error");
  }
}
