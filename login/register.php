<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">
 
  <link rel="stylesheet" href="../assets/css/reg.css">
	<!-- title -->
	<title>Fruitkha - Slider Version</title>
  <link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
</head>

<body>
<div class="body-content">
  <div class="module">
    <h1>Create an account</h1>
    <form class="form" action="register_process.php" method="POST" enctype="multipart/form-data">
      <div class="alert alert-error"></div>
      <input type="text" placeholder="User Name" name="customer_name" required />
      <input type="email" placeholder="Email" name="customer_email" required />
      <input type="password" placeholder="Password" name="customer_pass" autocomplete="new-password" required />
      <input type="text" placeholder="Country" name="customer_country"  required />
      <input type="text" placeholder="City" name="customer_city"   required />
      <input type="text" placeholder="Contact" name="customer_contact"   required />
    
      <div class="avatar"><label>Select your avatar: </label><input type="file" name="img" accept="image/*" required /></div>
      <input type="submit" value="Register" name="submit" class="btn btn-block btn-primary" />
    </form>
    <div>Already have an account? | <a href="login.php">Log In</a></div>
    <a href="../index.php">CANCEL</a>
    
  </div>
</div>
   
</div>

</body> 
	
	
	
	
	
	





	
	
	

	



	
	<!-- jquery -->
	<script src="../assets/js/jquery-1.11.3.min.js"></script>
  <script src="../js/app.js"></script>


</body>
</html>