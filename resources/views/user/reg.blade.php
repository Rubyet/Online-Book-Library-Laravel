<!DOCTYPE html>
<html>
<head>
  <title>Registration Page</title>
  <link href="\css\style2.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="main">
	<div class="page-out">
	<div class="page">
	<div class="header">
	<div class="header-top">
	<h1>Register Here</h1>
	<ul>
	  <li><a href="/home"><span>Home</span></a></li>
	  <li> <a href="/login"><span>Signin</span></a></li>
	</ul>
	</div>
	</div>
	
	
	<div class="content">
	<div class="left-out">
	<div class="left-in">
	<div class="left-panel">
	<p>
		<form  method="post" enctype="multipart/form-data">
		{{csrf_field()}}
		  <div class="container">
			<label for="uname"><b>Username</b></label>
			<input type="text" placeholder="Enter Username" name="username" required>
			
			<label for="uname"><b>Address</b></label>
			<input type="text" placeholder="Enter address" name="address" required>
			
			<label for="uname"><b>Phone/Mobile No.</b></label>
			<input type="text" placeholder="Enter Phone No." name="phone" required>
			
			<label for="uname"><b>Email</b></label>
			<input type="text" placeholder="Enter email" name="email" required>
			
			<label for="psw"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="password" required>
			
			<label for="uname"><b>Image<br></b></label>
			<input type="file" name="image"><br><br>
			
			<label for="uname"><b>Type<br></b></label>
			<select name="type">
			  <option value="Admin">Admin</option>
			  <option value="Moderator">Moderator</option>
			  <option value="Member">Member</option>
			</select>

			<button type="submit">Register</button>
			
		  </div>

		  <div class="container" style="background-color:#f1f1f1">
			<a href="/home" class="cancelbtn">Cancel</a>
		  </div>
		</form>
	<br><br><br>
	</p>

	</div>
	</div>
	</div>
		
		
	</div>
	<div class="footer">
	<div class="footer-left">
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p><strong>Contact info</strong></p>
	<p>&nbsp;</p>
	<p>If you Like Our Website Consider <a href="#" class="footer-left">DONATE</a></p>
	</div>
	<div class="footer-right">
	<ul>
	  <li><a href="index.html">Home</a>/</li>
	  <li><a href="#">Go to Top</a>/</li>
	  <li><a href="#">About</a></li>
	</ul>
	</div>
	</div>
	</div>
	</div>
	</div>


</body>
</html>