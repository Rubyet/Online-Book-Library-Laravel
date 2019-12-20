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
		<form action="/book/search/post" method="post">
		{{csrf_field()}}
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
		<h2>All Catagory<br><br></h2>
		
			@foreach($books as $book)
				<div class="section1">
				
					<h3>{{$book->name}}</h3>
					<p>&nbsp;</p>
					<p>
						<img src="/upload/image/{{ $book->image }}" alt="HTML5 Icon" width="170" height="200"><br>
					</p>
					<p>&nbsp;</p>
					<p><a href="{{route('book.show',$book->id)}}" class="more">Read Details</a></p>
				</div>
			@endforeach
			
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