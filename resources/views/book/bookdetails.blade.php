<!DOCTYPE html>
<html>
<head>
  <title>All Books</title>
  <link href="\css\style3.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="/css/rating.css" type="text/css" >
  
  <link rel="stylesheet" href="scss.css" type="text/css">
</head>
<body>
	<div class="main">
	<div class="page-out">
	<div class="page">
	<div class="header">
	<div class="header-top">
	<h1>Online Book Libray</h1>
	<ul>
	@if(session('id'))	
			  <li><a href="{{ route('user.index') }}"><span>Home</span></a></li>
				<li>
					<form action="/book/search/post" method="post">
					{{csrf_field()}}
						<input type="text" name="search" >
						<input type="submit" name= "submit" value="Search">
					</form>
				</li>
				<li><a href="{{route('user.profile',session('id'))}}"><span>profile</span></a></li>
				<li><a href="{{route('logout.index')}}"><span>Signout</span></a></li>
			@else
				<li><a href="{{ route('home.index') }}"><span>Home</span></a></li>
				<li>
					<form action="/book/search/post" method="post">
					{{csrf_field()}}
						<input type="text" name="search" >
						<input type="submit" name= "submit" value="Search">
					</form>
				</li>
				<li><a href="{{ route('login.index') }}"><span>Signin</span></a></li>
				<li> <a href="{{ route('reg.index') }}"><span>Signup</span></a></li>
			@endif
	</ul>
	</div>
	</div>
	
	<div>
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
				<br>
				<p>Total downloads: {{$history}}</p>
				<br>
				<p>
				@if(session('id'))
					<div>
						<section class="container">
							<input type="radio" name="example" class="rating" value="1" />
							<input type="radio" name="example" class="rating" value="2" />
							<input type="radio" name="example" class="rating" value="3" />
							<input type="radio" name="example" class="rating" value="4" />
							<input type="radio" name="example" class="rating" value="5" />
						</section>
						<br>
					</div>
					<div>
						<form method="post" action="/book/download/{{$books->file}}">
						{{csrf_field()}}
							<input type="submit" value="Download">
						</form>
					</div>
					<br><br><br>
					<div>
						<h3>Reviews of this book</h3>
						
						@foreach($comments as $comment)
						<table border="0" width="500">
							<tr>
								<td colspan="2">
									<p id="comment">{{$comment->details}}</p>	
								</td>
							</tr>
							<tr>
								<td>
									
								</td>
								<td>
									<p id="time">⌛: {{$comment->date}}</p>
								</td>
							</tr>
							<br>
						</table>
						@endforeach
						<br>
						<form method="post" action="/book/comment/{{ $books->id }}">
						{{csrf_field()}}
							<input type="text" name="comment" placeholder="Join the conversation.." id="text">
							<input type="submit" value="Submit" id="button">
						</form>

					</div>
					
					</div>
				@else
				
					<h4><br>Only Members Can Download Books. and see the review <a href="{{route('reg.index')}}"><span>Signup</span></a> Now</h4>
				
				@endif
				</p>
			</div>
		</div>
	</div>

	<div>
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

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
    <script type="text/javascript" src="/javascript/rating.js"></script>
    <script type="text/javascript">
        $(function(){
            $('.container').rating();
        });
    </script>

</body>
</html>