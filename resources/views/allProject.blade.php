<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Search Result-Student</title>
    <link rel="stylesheet" href="{{asset('anik/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" />
    <script src="{{asset('anik/js/bootstrap.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="{{asset('anik/js/bootstrap.js')}}"></script>

  <link rel="stylesheet" href="{{asset('anik/css/studentsearch.css')}}">
  <link rel="shortcut icon" type="image/png" href="{{asset('anik/favicon.ico')}}"/>

  <style>
    .btn:hover{
      background-color: #C0C0C0;
      color:#fff;
    }
  </style>

</head>
<body background="{{asset('anik/images/picture.jpg')}}" style="background-repeat: no-repeat; background-size: 100% 100%; height: 100%; background-attachment: fixed;">

  <!--Logo and header-->
  <div class="container">

    <header class="main-header">
    <div>
      <a href="colorlib-search-4/index.html"><img src="{{asset('anik/logo.svg')}}" alt="Logo here">

      
      <a href="/register/teacher"><button class="btn default" style="color: #fff;">Sign up Teacher</button></a>
      <a href="/register/student"><button class="btn default" style="color: #fff;">Student Sign Up </button></a>
      <a href="/login/teacher"><button class="btn default" style="color: #fff;">Teacher Sign In</button></a>
      <a href="/login/student"><button class="btn default" style="color: #fff;">Student Sign In</button></a>

    </div>
  </header>

     

  <!--navigation bar-->
        <div>
          <nav id="navbar" class="nav-mx border rounded mb-4">
            <ul>
              <li class="nav-item"><a href="/" class="rounded nav-link">Home</a></li>
              <li class="nav-item"><a href="/" class="rounded nav-link">Profile</a></li>
              <li class="nav-item"><a href="/about" class="rounded nav-link">About</a></li>
              <li class="nav-item"><a href="/allproject" class="rounded nav-link">Projects</a></li>
              <li class="nav-item"><a href="/" class="rounded nav-link">Search</a></li>
              <li class="nav-item"><a href="/contact" class="rounded nav-link">Contact Us</a></li>
            </ul>
          </nav>
        </div>
        <div class="clearfix"></div>




     









<div class="container">
        
        <table class="table table-striped table-bordered" background="{{asset('anik/images/image.jpg')}}">
            
            <thead style="color: #EEE;" >
                <tr> 
                    <td>title</td>
                    <td>platform</td>
                    <td>description</td>
                    <td>details</td>
                </tr>
            </thead>

           <tbody style="color: #EEE;">
               @foreach($project as $project)
               @php
               $id=$project->title
               @endphp
               <tr>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->platform }}</td>
                    <td>{{ $project->description }}</td>
                    <td>
                    <form action="/pd" method="POST" role="search">
                    {{ csrf_field() }}
                    <input type="hidden" name="project_id" id="project_id" value="<?php echo htmlspecialchars($id); ?>" />
                    <button type="submit" class="btn btn-default" style="background-color: pink;">Click Here</button>
                  
                    </form>
                    </td>


               </tr>
               @endforeach
            </tbody>
          </table>
</div>



</div>
  
  
</body>
</html>


