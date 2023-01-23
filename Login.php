<?php

     session_start();
	//  session_create_id();
	require_once "DBConn.php";
    $Error="";
    // Retrieve the URL variables (using PHP).
    $Username = $_GET['Username'];
    $Password = $_GET['Password'];

    // $Username = isset($_POST['Username'])?$_POST['Username']:'';
    // $Password = isset($_POST['Password'])?$_POST['Password']:'';
	

	if($Username != "" && $Password != "")
	{
		$encryptPass = md5($Password);
		$sql = "SELECT Username, Password FROM tbluser Where Password = '".$encryptPass."'"." AND Username = '".$Username."'";
		
		$result = $conn->query($sql);

		
		if ($result->num_rows > 0) {
			$_SESSION['admin'] = true;
			header("Location: AppList.php");
			}
			else 
			{
			$Error= "Password or Username is wrong ";
			}
	}
    if (isset($_POST['login']))
    {
		$sql = "SELECT Username, Password FROM tblUser Where Password = '".$encryptPass."'"." AND Username = '".$Username."'";
		
		$result = $conn->query($sql);

		
		if ($result->num_rows > 0) {
			$_SESSION['admin'] = true;
			header("Location: index.php");
			}
			else 
			{
			$Error= "Password or Username is wrong ";
			}
	}

	if (isset($_POST['register']))
    {
		header("Location: Register.php");
	}


?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Login</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<title> EMMANUEL DAYCARE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <style>

	a {
  color: #7E0272;
  text-decoration: none;
  background-color: transparent; }
  a:hover {
    color: #7E0272;
    text-decoration: underline; }


			body {
				background-image: url(images/reg.png);
				background-repeat: no-repeat;
				background-attachment: fixed;  
  				background-size: cover;
				
			}
		* {
			box-sizing: border-box;
		  }
		  
		 /* Add padding to containers */
		 .container {
			align-items: right;
			width: 630px;
			height: 650px;
			padding: 10px;
			background-color: white;
		  }

		  .input-container {
			border-radius: 4px;
			display: -ms-flexbox; /* IE10 */
			display: flex;
			width: 100%;
			margin-bottom: 15px;
}
		  
		  /* Full-width input fields */
		  input[type=text], input[type=password] {
			width: 100%;
			padding: 15px;
			margin: 5px 0 22px 0;
			display: inline-block;
			border: none;
			background: #ffffff;
		  }
		  
		  input[type=text]:focus, input[type=password]:focus {
			background-color: #ffffff;
			outline: none;
		  }
		  
		  /* Overwrite default styles of hr */
		  hr {
			border: 1px solid #f1f1f1;
			margin-bottom: 25px;
		  }
		  
		  /* Set a style for the submit button */
		  .registerbtn {
			background-color: #7E0272;
			color: white;
			padding: 12px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			margin-top: 6px;
			margin-bottom: 16px;
			resize: vertical;
			padding: 16px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 100%;
			opacity: 0.9;
		  }
		  .registerbtn:hover {
			opacity: 1;
		  }
		  
		  /* Add a blue text color to links */
		  a {
			color: #97C71B;
		  }
		  
		  /* Set a grey background color and center the text of the "sign in" section */
		  .signin {
			background-color:#97C71B;
			text-align: center
			;
		  }
		  <!-- Form -->

* {box-sizing: border-box;}

input[type=text], select, textarea {
   font-family: Arial;
   background-color: white;
	width: 100%;
	padding: 12px;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
	margin-top: 6px;
	margin-bottom: 16px;
	resize: vertical;
}
input[type=password], select, textarea {
   font-family: Arial;
   background-color: white;
	width: 100%;
	padding: 12px;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
	margin-top: 6px;
	margin-bottom: 16px;
	resize: vertical;
}


.container {
	margin-left: 50px;
	margin-right: 50px;
	color: #585858;
	background-color: #97C71B;
	border-radius: 5px;
	padding: 30px;
	box-shadow: 0 0 30px 0 #7E0272;
}

.icon {
padding: 12px;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
	margin-top: 6px;
	margin-bottom: 16px;
	resize: vertical;
	border-radius: 4px;
	background: #7E0272;
	color: white;
	min-width: 50px;
	text-align: center;
}

@media screen and (max-width: 768px) {
	h1.ex1 {
		font-size: 15pt;
		margin-left: 25px;
		margin-right: 25px;
	}
	   h2.ex1 {
		font-size: 12pt;
	 
	}
	p.ex1 {
		font-size: 12pt;
		margin-left: 25px;
		margin-right: 25px;
		border-style: dotted;
		border-width: medium;
	}

}
 /* Center the image and position the close button */
		  </style>
		  </head>
		  <body class="is-preload" align="left ">
			
			<br>
			<br>

			<div style="display: flex; justify-content: flex-end">
			<div class="container">
			<div class="inner">
            </div> <!--(The IIE, 2021)-->
		  <form action="Login.php" method = "post">
<DIV>
		  <h1 class="mb-2 bread" align="center" style="color:#7E0272; align:center" ><b>LOGIN</b></h1>
			  <p align="center" style="color:#FFFFFF;"><b>PLEASE ENTER YOUR LOGIN DETAILS</b></p>
</DIV>

<label>
          <?php echo $Error; ?> 
        </label><br/>
					<label for="uname" style="color:#7E0272;"><b>Username</b></label>
					<div class="input-container">
					<i class="fa fa-user icon"></i>
					<input type="text" required name="Username"
          			value="<?php echo isset($Username) ? $Username: ''; ?>" placeholder="Enter Username"></div>

					<label for="psw"style="color:#7E0272;"><b>Password</b></label>
					<div class="input-container">
    				<i class="fa fa-key icon"></i>
					<input type="password" required name="Password"
           			value="<?php echo isset($Password) ? $Password: ''; ?>" placeholder="Enter Password"></div>
					
					
					<a href="Login.php"><button type="submit" name="login" class="registerbtn" style="font-weight: 900; letter-spacing: 0.2em; text-transform: uppercase;">Login</button></a>
					<p style="font-weight: 900; letter-spacing: 0.2em; text-transform: uppercase; color:#7E0272" align= "center" ><a  href="index.php">Back to website</a></p>
					<label style="color:#7E0272;" >
					  <input type="checkbox" checked="checked" name="remember"> <B>Remember me</B>
					</label>

				  </div>
				</form>
				</body>
				</html>