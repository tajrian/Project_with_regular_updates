<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,800" rel="stylesheet" />
    <link href="{{asset('home/css/main.css')}}" rel="stylesheet" />
	<link rel="shortcut icon" type="image/png" href="{{asset('home/favicon.ico')}}"/>
	<title>Project & Thesis Management System</title>
  </head>
  <body>
    <div class="menu">
    <ul>
	<li><a href="/register/teacher" style="text-decoration:none;">Teacher Sign Up </a></li>
  <li><a href="/register/student" style="text-decoration:none;">Student Sign Up </a></li>
	<li><a href="/login/teacher" style="text-decoration:none;">Teacher Sign In</a></li>
  <li><a href="/login/student" style="text-decoration:none;">Student Sign In</a></li>

	<!--<li><a href="ContactFrom_v15/index.html" style="text-decoration:none;"></a></li>-->
	</ul>
	</ul>
	</div>
    <div class="s004">
      <form action="/searchresult" method="POST" role="search">
        {{ csrf_field() }}

          <legend><img src="{{asset('home/logo.svg')}}"></legend>
            
          <input type="text" class="form-control" name="q" placeholder="What are you looking for?">
              <!--<input type="button" value="search" class="close-btn"> -->
          <div class="suggestion-wrap">
            <span>#teacher</span>
            <span>#student</span>
            <span>#project</span>
            <span>#thesis</span>
          </div> 
      </form>
    </div>
    

   
  </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
