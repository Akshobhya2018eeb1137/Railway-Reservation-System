<!-- <?php
	$val=$_GET['value'];
	if($val==1){
	?>
	<h3>User already exists</h3
	<?php
	}
?> -->

<!DOCTYPE html>
<html>
<head>
	<title> Registration </title>
	<link rel="shortcut icon" href="images/favicon.png"></link>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	</link>
	<link href="css/Default.css" rel="stylesheet">
	</link>
	<script type="text/javascript" src="js/jquery.js"></script>
<!-- 	<script>
		$(document).ready(function()
		{
			$('.wrap').css();
		});
	</script> -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/man.js"></script>
		
</head>

<body>
	
	<div class="wrap">
		<!-- Header -->
		<div class="header">
			<div style="float:left;width:140px;">
				<img src="images/log.png"/>
			</div>
			<div id="heading">
				<a href="index.php">Railway Reservation</a>
			</div>
		</div>
		<!-- Navigation bar -->
		<div class="navbar navbar-inverse" >
			<div class="navbar-inner">
				<div class="container" >
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
				<a class="brand" href="index.php" ><i class="fa fa-home"></i>&nbsp; HOME</a>
				<a class="brand" href="train.php" ><i class="fa fa-search"></i>&nbsp; FIND TRAIN</a>
				<a class="brand" href="reservation.php"><i class="fa fa-train"></i>&nbsp; BOOK</a>
				<a class="brand" href="profile.php"><i class="fa fa-id-card"></i>&nbsp; PROFILE</a>
				<a class="brand" href="display.php"><i class="fa fa-book"></i>&nbsp; BOOKINGS</a>
				<a class="brand" href="admin_login1.php"><i class="fa fa-user"></i>&nbsp; ADMIN</a>
				<div class="container">
				  <label class="switch" for="checkbox">
				    <input type="checkbox" id="checkbox" />
				    <div class="slider round"></div>
				  </label>
				</div>
				</div>
			</div>
		</div>
		
		<!-- registration form -->
		<div align="center">
		<div class="span12 well">
		<div style="font-size:30px;"> Registration Form</div>
		<br/>
		
		
		<div class="table">
		
		<form name="signup"  method="post" action="register.php">
		<table>
		<tr>
			<!-- <td style="border-top:0px;"> First Name <font color=red>* </font></td> -->
			<td style="border-top:0px;">First Name <font color=red>* <input type="text" name="fname" class="input-block-level" placeholder="Enter the First name" pattern="[A-Za-z ]{1,50}" required><span id="fn"></span></td>
		<!-- </tr>
		<tr> -->
			<!-- <td style="border-top:0px;"> Last Name <font color=red>* </font> </td> -->
			<td style="border-top:0px;">Last Name <font color=red>* <input type="text" name="lname" class="input-block-level" placeholder="Enter the Last name" pattern="[A-Za-z ]{1,50}" required><span id="ln"></span></td>
			<td style="border-top:0px;">Username <font color=red>* <input type="text" name="uname" class="input-block-level" placeholder="Enter the user name" required><span id="ln"></span></td>
		</tr>
		<tr>
		<!-- </tr>
		<tr> -->
			<!-- <td style="border-top:0px;"> Email ID <font color=red>* </font> </td> -->
			<td style="border-top:0px;">Email ID <font color=red>*</font> <input type="email" class="input-block-level" name="eid" placeholder="Enter the valid email id" required></td>
		<!-- </tr>
		<tr> -->
			<!-- <td style="border-top:0px;"> Password <font color=red>* </font> </td> -->
			<td style="border-top:0px;">Password <font color=red>* </font><input type="password" class="input-block-level" name="psd" placeholder="Enter the password" onblur="return check1()"> <span id="ps"  required></span></td>
		<!-- </tr>
		
		<tr> -->
			<!-- <td style="border-top:0px;"> Confirm Password <font color=red>* </font> </td> -->
			<td style="border-top:0px;">Confirm Password <font color=red>*<input type="password" class="input-block-level" name="cpsd" placeholder="Re-type the password" onblur="return confirm1()" required> <span id="cps" ></span></td>
		</tr>
		
		<tr>
			<!-- <td style="border-top:0px;"> Gender <font color=red>* </font> </td> -->
			<td style="border-top:0px;">Gender <font color=red>* &nbsp; <select name="gnd">
				<option value="male">MALE</option>
				<option value="female">FEMALE</option>
			    </select>
			</td>
		<!-- </tr>
		
		<tr> -->
			<!-- <td style="border-top:0px;"> Date of Birth <font color=red>* </font></td> -->
			<td style="border-top:0px;">Date of Birth <font color=red>* &nbsp;<input type="date" class="input-block-level input-medium"  name="dob" max="<?php echo date('Y-m-d',time()-60*60*24*365*18);?>" value="<?php echo date('Y-m-d',time()-60*60*24*365*18);?>"> </td>

			<td style="border-top:0px;"> Mobile No. +91<font color=red>*</font> <input type="number" class="input-block-level input-medium"  name="mobile" pattern="[1-9][0-9]{9}" placeholder="xxxxxxxxxx" required> <span id="mn"></span></td>

		</tr>
		
		<tr>
			<td style="border-top:0px;">Credit Card Number <font color=red>* &nbsp;<input type="number" class="input-block-level"  name="card" pattern="[0-9]{16}" placeholder="xxxxxxxxxxxxxxxx" required> </td>
			
			<td style="border-top:0px;"> Postal Address<font color=red>*</font> <input type="text" class="input-block-level"  name="address" placeholder="Landmark, City, Pincode" required></td>
		</tr>
<!-- 		<tr>
			<td style="border-top:0px;"> Security Question <font color=red>* </font></td>
			<td style="border-top:0px;">
				<select name="ques">
				<option value="What is your pets name ?">What is your pets name ?</option>				
				<option value="What was the name of your first school?">What was the name of your first school?</option>				
				<option value="What is your favorite hero?">What is your favorite hero?</option>
				<option value="What is your favorite movie?">What is your favorite movie?</option>
				</select>
			</td>
		</tr>
		<tr>
			<td style="border-top:0px;"> Your Answer <font color=red>* </font></td>
			<td style="border-top:0px;"> <input type="text" name="ans" class="input-block-level" placeholder="Enter the your answer" onblur="return ans1()"><span id="an"></span></td>
		</tr> -->
		<tr>
			<td style="border-top:0px;"><input class="btn btn-primary" type="submit" value="Submit" id="subb" ></td>
			<td style="border-top:0px;"><input class="btn btn-info" type="reset" value="Reset"></td>
		</tr>
		
		</table>
		</form>
		</div>
		</div>
		</div>
		
		
		<!-- Footer -->
<footer >
		<div style="width:100%;">
			<div style="float:left;">
			<p class="text-right text-info">  &copy; DBMS Project</p>	
			</div>
			<div style="float:right;">
			<p class="text-right text-info"><strong>Developed By:</strong> Akshat, Aman & Prateek</p>
			</div>
		</div>
		</footer>
	</div>

<script>

			var el = document.getElementById('checkbox');

			el.addEventListener('click', function() {
			  if(document.getElementById("checkbox").checked === false){
			    document.documentElement.classList.toggle('dark-mode');
			    document.querySelectorAll('.inverted').forEach((result) => {
						result.classList.toggle('invert');
					})
			  } 
			  else {
			    document.documentElement.classList.toggle('dark-mode');
			    document.querySelectorAll('.inverted').forEach((result) => {
						result.classList.toggle('invert');
					})
			  }    
			});

		</script>
</body>
</html>