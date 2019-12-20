<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link href="\css\style2.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="main">
	<div class="page-out">
	<div class="page">
	<div class="header">
	<div class="header-top">
	<h1>Login Here</h1>
	<ul>
	  <li><a href="{{ route('home.index') }}"><span>Home</span></a></li>
	  <li> <a href="{{ route('reg.index') }}"><span>Signup</span></a></li>
	</ul>
	</div>
	</div>
	
	
	<div class="content">
	<div class="left-out">
	<div class="left-in">
	<div class="left-panel">
	<p>
		<form  method="post">
		{{csrf_field()}}
		  <div class="imgcontainer">
			<img src="/images/Avater.png" alt="Avatar" class="avatar" width="200" height="200" >
		  </div>

		  <div class="container">
			<label for="uname"><b>Username</b></label>
			<input type="text" placeholder="Enter Username" name="username" required>

			<label for="psw"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="password" required>

			<button type="submit">Login</button>
			
		  </div>

		  <div class="container" style="background-color:#f1f1f1">
			<a href="{{ route('home.index') }}" class="cancelbtn">Cancel</a>
			<span class="psw">Forgot <a href="#">password?</a></span>
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
	  <li><a href="{{ route('home.index') }}">Home</a>/</li>
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