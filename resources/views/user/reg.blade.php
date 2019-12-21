<!DOCTYPE html>
<html>
<head>
  <title>Registration Page</title>
  <link href="\css\style2.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css">
</head>
<body >
	<div class="main">
	<div class="page-out">
	<div class="page">
	<div class="header">
	<div class="header-top">
	<h1>Register Here</h1>
	<ul>
	<li><a href="{{route('home.index')}}"><span>Home</span></a></li>
	  <li> <a href="{{route('login.index')}}"><span>Signin</span></a></li>
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
			<input type="text" placeholder="Enter Username" name="username" value="{{old('username')}}">
			
			<label for="uname"><b>Address</b></label>
			<input type="text" placeholder="Enter address" name="address" value="{{old('address')}}">
			
			<label for="uname"><b>Phone/Mobile No.</b></label>
			<input type="text" placeholder="Enter Phone No." name="phone" value="{{old('phone')}}">
			
			<label for="uname"><b>Email</b></label>
			<input type="text" placeholder="Enter email" name="email" value="{{old('email')}}">
			
			<label for="psw"><b>Password</b></label>
			<input type="password" placeholder="Enter Password" name="password" value="{{old('password')}}">
			
			<label for="uname"><b>Image<br></b></label>
			<input type="file" name="image"><br><br>
			
			<label for="uname"><b>Type<br></b></label>
			<select name="type">
			  <option value="Admin">Admin</option>
			  <option value="Moderator">Moderator</option>
			  <option value="Member">Member</option>
			</select>
			<input type="hidden" id="namid" value="
				@foreach($errors->all() as $err)
				{{$err}} ||
				@endforeach
			">
			<button type="submit" id="btnresult">Register</button>
			
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
	  <li><a href="{{route('home.index')}}">Home</a>/</li>
	  <li><a href="#">Go to Top</a>/</li>
	  <li><a href="#">About</a></li>
	</ul>
	</div>
	</div>
	</div>
	</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.js"></script>

	<script>

			var data=$('#namid').val();
			console.log(data);
			 if(data.includes("||"))
			 {
			 	Swal.fire({
			 	title: 'You can not continue',
			 	text: data,
			 	icon: 'warning',
			 	confirmButtonColor: '#3085d6',
			 	confirmButtonText: 'Close',
			 	type: 'error',
			 	})
			 }
			
	</script>
</body>
</html>