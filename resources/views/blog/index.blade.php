<!DOCTYPE html>
<html>
<head>
  <title>All Books</title>
  <link href="\css\style.css" rel="stylesheet" type="text/css">
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
	
        @foreach($Blog as $blog)
        <table border="1" align="center" >
            <tr>
                <td><h2>
                    {{$blog['userId'] }}
                </h2></td>
            </tr>
            <tr>
                <td><h4>{{$blog['details']}}</td>
            </tr>
            
        </table>	
        <br><br>
                
            
        @endforeach
	
	
	
	
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

