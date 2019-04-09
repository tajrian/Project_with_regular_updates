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
      <a href="/"><img src="{{asset('anik/logo.svg')}}" alt="Logo here">

      
      <a href="/register/teacher"><button class="btn default" style="color: #fff;">Sign up Teacher</button></a>
      <a href="/register/student"><button class="btn default" style="color: #fff;">Student Sign Up </button></a>
      <a href="/login/teacher"><button class="btn default" style="color: #fff;">Teacher Sign In</button></a>
      <a href="/login/student"><button class="btn default" style="color: #fff;">Student Sign In</button></a>

    </div>
  </header>

     <!--search bar-->

    

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



     




  <!--sidebar goes here-->

 <!-- <section class="main">
    <div class="container">
      <h1>tourist</h1>
      <h2>Personal Info</h2>
      <ul>
        <h4><li>Full Name: Gennady</li></h4>
        <h4><li>Age: 24</li></h4>
      </ul>
      <h2>Education</h2>
      <ul>
        <h4><li>University: SEC</li></h4>
        <h4><li>Department: CSE</li></h4>
        <h4><li>Semester: Fall</li></h4>
        <h4><li>Session: 2015-16</li></h4>
      </ul>
      <h2>Contact Info</h2>
      <ul>
        <h4><li>E-mail: <a href="anik.3290@gmail.com"></a></li></h4>
        <h4><li>Phone: 01858337417</li></h4>
      </ul>
      <h2>Skills</h2>
      <h4><li>Programming</li></h4>
      <h4><li>Web Developing</li></h4>
      <h4><li>Management</li></h4>


    </div>
  </section>

  <div class="sidebar">
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">News</a></li>
      <li><a href="#">Contact Us</a></li>
    </ul>
  </div>
-->

<!--
<div class="row">
  <div class="col-lg-12">
    <div class="card bg-white" style="margin-top:20px">
      <div class="card-block">

        <div class="card-text" style="padding-right: 20px">
          <div style="color:#000; padding-top: 5px; font-family:Comic Sans Ms,cursive,sans-serif;">

            <h3 style="padding: 12px; margin-left:8px;">Search-Results:<span style="color: #FF0000;"> students</span></h3>

              <div class="ridge" style="border-style: ridge; margin-left: 17px; padding-bottom: 10px; border-radius: 10px;">
                
                  <h2 style="padding: 12px;">tourist</h2>
                  <h6 style="padding-left: 15px; margin-top: -13px;">2 complited project</h6>
                  <a href="index.html"><button class="btn default" style="color: #21618C; float: right; margin-top: -55px; margin-right: 5px;">Visit Profile</button></a>
               </div>
 
               <div class="ridge" style="border-style: ridge; margin-top:20px; margin-left:17px; padding-bottom: 10px; border-radius: 10px;">
                  <h2 style="padding: 12px;">tajrian</h2>
                  <h6 style="padding-left: 15px; margin-top: -13px;">1 complited project</h6>
                 <a href="index.html"> <button class="btn default" style="color: #21618C; float: right; margin-top: -55px; margin-right: 5px;">Visit Profile</button></a>
                </div>


                <div class="ridge mb-4" style="border-style: ridge; margin-top:20px; margin-left:17px; padding-bottom: 10px; border-radius: 10px;">

                    <h2 style="padding: 12px;">tilottoma</h2>
                    <h6 style="padding-left: 15px; margin-top: -13px;">4 complited project</h6>
                   <a href="index.html"> <button class="btn default" style="color: #21618C; float: right; margin-top: -55px; margin-right: 5px;">Visit Profile</button></a>
                </div>


                <div class="clearfix"></div>

             </div>

           </div>
        
         </div>
      
       </div>
   
     </div>

   </div>
         

-->




<div class="container" >
     
     <table class="table table-striped table-bordered" background="{{asset('anik/images/image.jpg')}}" style="color: white;" >
            
            <tr>
                <td>Title</td>
                <td>{{ $project->title}}</td>
            </tr>

            <tr>
                <td>Advisor</td>
                <td>{{ $project->advisor}}</td>
            </tr>

            <tr>
                <td>Student</td>
                <td>{{ $sname }}</td>
            </tr>

            <tr>
                <td>Description</td>
                <td>{{ $project->description }}</td>
            </tr>

            <tr>
                <td>Platform</td>
                <td>{{ $project->platform }}</td>
            </tr>

            <tr>
                <td>Framework</td>
                <td>{{ $project->framework }}</td>
            </tr>

            <tr>
                <td>Technology</td>
                <td>{{ $project->technology }}</td>
            </tr>

            <tr>
                <td>Git</td>
                <td>{{ $project->git }}</td>
            </tr>

            <tr>
                <td>Tags</td>
                <td>{{ $project->tags }}</td>
            </tr>

            <tr>
                <td>Idea status</td>
                <td>{{ $project->is_accepted }}</td>
            </tr>

            

            <tr>
                <td>1st phase</td>
                <td>{{ $project->_1st_phase }}</td>
            </tr>

            <tr>
                <td>2nd Phase</td>
                <td>{{ $project->_2nd_phase }}</td>
            </tr>

            <tr>
                <td>3rd phase</td>
                <td>{{ $project->_3rd_phase }}</td>
            </tr>
            
            <tr>
                <td>Is published</td>
                <td>{{ $project->is_published }}</td>
            </tr>



            

            <tr>
                <td>Commment</td>
                <td>{{ $project->comment }}</td>
            </tr>

      
           
      </table>
      
      

      

      
        

</div>



</div>
  
  
</body>
</html>


