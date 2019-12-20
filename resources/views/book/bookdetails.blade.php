<!DOCTYPE html>
<html>
<head>
  <title>All Books</title>
  <link href="\css\style.css" rel="stylesheet" type="text/css">
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
	  <li>
		<form action="/home" method="post">
			<input type="text" name="search" >
			<input type="submit" name= "submit" value="Search">
		</form>
	  </li>
	  @if(session('id'))	
				<li><a href=""><span>profile</span></a></li>
				<li><a href="{{route('logout.index')}}"><span>Signout</span></a></li>
			@else
				<li><a href="/login"><span>Signin</span></a></li>
				<li> <a href="/user/reg"><span>Signup</span></a></li>
			@endif
	</ul>
	</div>
	</div>
	
	
	<div class="sections">
		<h2>{{$books->name}}<br><br></h2>
			<div class="section1">
			
				<p>&nbsp;</p>
				<p>
					<img src="/upload/image/{{ $books->image }}" alt="HTML5 Icon" width="170" height="200"><br>
				</p>
			</div>
			<div class="description">
				<h3>Author: {{ $books->author }}</h3>
				<p>&nbsp;</p>
				<h3>Genre: {{ $books->genre }}</h3>
				<br><br>
				<p>
					<h3>Description: </h3>
					<br>
					{{ $books->details }}
				</p>
				<p>&nbsp;</p>
				<p>
				@if(session('id'))
				
					<a href="/upload/{{$books->file}}"><span>Download</span></a>
				
				@else
				
					<h4><br>Only Members Can Download Books. <a href="{{route('reg.index')}}"><span>Signup</span></a> Now</h4>
				
				@endif
				</p>
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