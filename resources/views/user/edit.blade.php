<!DOCTYPE html>
<html>
<head>
  <title>Profile</title>
  <link href="\css\style2.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="main">
	<div class="page-out">
	<div class="page">
	<div class="header">
	<div class="header-top">
	<h1>Online Book Libray</h1>
	<ul>
	  <li><a href="/home"><span>Home</span></a></li>
	  <li><a href="/user/profile"><span>Profile</span></a></li>
	  <li> <a href="/logout"><span>Signout</span></a></li>
	</ul>
	</div>
	</div>
	
	
	<div class="content">
	<div class="left-out">
	<div class="left-in">
	<div class="left-panel">
	<p>
		<form method="post" enctype="multipart/form-data">
			{{csrf_field()}}
			<input type="hidden"  name="{{ $user->id }}" >
			<div class="sections">
		<h2>Edit your Profile<br><br></h2>
			<div class="section1">
				
				<p>&nbsp;</p>
				<p>
					<img src="/upload/image/{{ $user->image }}" alt="HTML5 Icon" width="170" height="200"><br>
				</p>
			</div>
			<div class="profile">
				<div class="container">
					<label for="uname"><b>Username</b></label>
					<input type="text" value="{{ $user->name }}" name="username" >
					
					<label for="uname"><b>Address</b></label>
					<input type="text" value="{{ $user->address }}" name="address">
					
					<label for="uname"><b>Phone/Mobile No.</b></label>
					<input type="text" value="{{ $user->phone }}" name="phone" >
					
					<label for="uname"><b>Email</b></label>
					<input type="text" value="{{ $user->email }}" name="email" >
					
					<label for="psw"><b>Password</b></label>
					<input type="password" value="{{ $user->password }}" name="password" >
					
					<label for="uname"><b>Type<br></b></label>
					<select name="type" >
					@if($user->type=="Admin")
					
						<option value="Admin" "selected" >Admin</option>
					@elseif($user->type=="Member")
						
						<option value="Member"  "selected" >Member</option>
					@else
					
						<option value="Moderator" "selected">Moderator</option>
					
					@endif
					</select>

					<label for="uname"><b>Image<br></b></label>
					<input type="file" name="image"><br><br>

					<button type="submit">Edit</button>
					
				  </div>
			</div>
		</div>
		  

		  <div class="container" style="background-color:#f1f1f1">
			<a href="{{ route('user.index') }}" class="cancelbtn">Cancel</a>
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
	  <li><a href="/home">Home</a>/</li>
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