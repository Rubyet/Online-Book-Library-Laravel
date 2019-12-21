<!DOCTYPE html>
<html>
<head>
  <title>Online Book Libray</title>
  <link href="\css\style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="main">
	<div class="page-out">
	<div class="page">
	<div class="header">
	<div class="header-top">
	<h1>Online Book Library</h1>
	<ul>
	  <li><a href="{{ route('home.index') }}"><span>Home</span></a></li>
	  <li>
	  <form action="/book/search/post" method="post">
		{{csrf_field()}}
			<input type="text" name="search" >
			<input type="submit" name= "submit" value="Search">
		</form>
	  </li>
	  <li><a href="{{ route('login.index') }}"><span>Signin</span></a></li>
	  <li><a href="{{ route('reg.index') }}"><span>Signup</span></a></li>
	</ul>
	</div>
	<div class="header-img"><img src="\images\header.jpg" alt="" height="225" width="899"></div>
	</div>
	<div class="content">
	<div class="left-out">
	<div class="left-in">
	<div class="left-panel">
	<h1 class="title">Welcome To <span> The Virtual Library</span></h1>
	<p>
	The Biggest online library where you can find all kinds of latest and most poular 
	collection of books all free and ready to read on any device.
	just download and start reading NOW! 
	<br><br>
	We have one of the biggest collection of ebooks ready to download from all kinds of genre.
	From Action to Romantic , From Thrilling to Horror, From Novels to Poems you will find all 
	shots of new and latest collection of books and also all the classics. 
	<br><br>
	Wanna get your most favorite Book right now on your device and start reading now? or get 
	in the adventure of your super hero with thrilling comics?
	What are you waiting for? Just become a member and get all the collection that you need.
	<br><br><br>
	</p>

	</div>
	</div>
	</div>
	<div class="right-out">
	<div class="right-in">
	<div class="right-panel">
	<div class="right-block">
	<h2>Categories</h2>
	<ul>
	  <li><a href="{{ route('book.index') }}">ALL</a></li>
	  <li><a href="{{ route('book.search', 'Action and adventure') }}">Action and adventure</a></li>
	  <li><a href="{{ route('book.search', 'Biography') }}">Biography</a></li>
	  <li><a href="{{ route('book.search', 'Comic book') }}">Comic book</a></li>
	  <li><a href="{{ route('book.search', 'Encyclopedia') }}">Encyclopedia</a></li>
	  <li><a href="{{ route('book.search', 'Guide') }}">Guide</a></li>
	  <li><a href="{{ route('book.search', 'Fantasy') }}">Fantasy</a></li>
	  <li><a href="{{ route('book.search', 'Poetry') }}">Poetry</a></li>
	  <li><a href="{{ route('book.search', 'Novel') }}">Novels</a></li>
	  <li><a href="#">>More</a></li>
	</ul>
	</div>
	</div>
	</div>
	</div>
	
		<div class="sections">
		<h2>Latest Added Books<br><br></h2>
			<div class="section1">
				
				<h3>{{ $books[0]->name }}</h3>
				<p>&nbsp;</p>
				<p>
					<img src="/upload/image/{{ $books[0]->image }}" alt="HTML5 Icon" width="170" height="200"><br>
				</p>
				<p>&nbsp;</p>
				<p><a href="{{route('book.show',$books[0]->id)}}" class="more">Read Details</a></p>
			</div>
			<div class="section2">
				<h3>{{ $books[1]->name }}</h3>
				<p>&nbsp;</p>
				<p>
					<img src="/upload/image/{{ $books[1]->image }}" alt="HTML5 Icon" width="170" height="200"> <br>
				</p>
				<p>&nbsp;</p>
				<p><a href="{{route('book.show',$books[1]->id)}}" class="more">Read Details</a></p>
			</div>
			<div class="section3">
				<h3>{{ $books[2]->name }}</h3>
				<p>&nbsp;</p>
				<p>
					<img src="/upload/image/{{ $books[2]->image }}" alt="HTML5 Icon" width="170" height="200"><br>
				</p>
				<p>&nbsp;</p>
				<p><a href="{{route('book.show',$books[2]->id)}}" class="more">Read Details</a></p>
			</div>
			<div class="section4">
				<h3>{{ $books[3]->name }}</h3>
				<p>&nbsp;</p>
				<p>
					<img src="/upload/image/{{ $books[3]->image }}" alt="HTML5 Icon" width="170" height="200"><br>
				</p>
				<p>&nbsp;</p>
				<p><a href="{{route('book.show',$books[3]->id)}}" class="more">Read Details</a></p>
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