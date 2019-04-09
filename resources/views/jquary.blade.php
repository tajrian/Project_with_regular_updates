<!--just a test page -->
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
	  <li><a href="/register/teacher" style="text-decoration:none;">New Teacher</a></li>
    <li><a href="/register/student" style="text-decoration:none;">New Student</a></li>
	  <li><a href="/login/teacher" style="text-decoration:none;">Teacher Profile</a></li>
    <li><a href="/login/student" style="text-decoration:none;">Student Profile</a></li>

	<!--<li><a href="ContactFrom_v15/index.html" style="text-decoration:none;"></a></li>-->
	  </ul>
	  </div>
    <div class="s004">
      <form action="/searchresult" method="POST" role="search">
        {{ csrf_field() }}
           
          <legend><img src="{{asset('home/logo.svg')}}"></legend>
          <div>
          <input type="text" id="inp" class="form-control" name="q" placeholder="#student  #teacher  #project  #thesis" >
          </div>

          <div class="suggestion-wrap">
          <span id="t">#teacher</span>
          <span id="s">#student</span>
          <span id="p">#project</span>
          <span id="th">#thesis</span>
          </div>

      </form>
     </div>

     

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
      $("#t").click(function(){
         var node = "#teacher ";
         $("#inp").val(function(){
           return node;
         });
      });

      $("#th").click(function(){
         var node = "#thesis ";
         $("#inp").val(function(){
           return node;
         });
      });

      $("#s").click(function(){
         var node = "#student ";
         $("#inp").val(function(){
           return node;
         });
      });

      $("#p").click(function(){
         var node = "#project ";
         $("#inp").val(function(){
           return node;
         });
      });

    });
    </script>
  </body>
</html>
