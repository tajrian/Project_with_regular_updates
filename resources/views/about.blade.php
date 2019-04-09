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

        <div class="ridge mb-4 mt-4" style="border-style: ridge; margin-left: 0; width: 100%; border-radius: 10px; height: 257px;">

          <img src="{{asset('anik/images/picture.jpg')}}" style="height: 250px; width: 250px; float: left; margin-right: 13px; border:solid white 1px; ">
          <h3 style="color: #fff; padding: 10px;">Welcome to PTM</h3>

          <p style="padding: 10px; color: #fff; font-size: 20px;">
             It is the platform you're looking for sharing your ideas and make them implemented! 
             You can submit your project/thesis in PTM (Project & Thesis Management) easily. 
             You can choose a supervisor and submit a project/thesis under that supervisor. 

             Supervisor can also call for project/thesis in our page. It is easy to interact between Supervisor and Student by our page.

             We hope you enjoy our page as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.
          </p>


         </div>


         <div class="ridge mb-4 mt-4" style="border-style: ridge; margin-left: 0; width: 100%; border-radius: 10px; height: 257px;">

          <img src="{{asset('anik/images/31.jpg')}}" style="height: 250px; width: 250px; float: right; margin-left: 13px; border:solid white 1px; ">
          <h3 style="color: #fff; padding: 10px; float: right;">Our Mission</h3>

          <p style="padding: 10px; color: #fff; font-size: 20px; text-align: center; float: center; padding-top: 115px;">

              To help bring creative projects to life.

          </p>


         </div>


         <div class="ridge mb-4 mt-4" style="border-style: ridge; margin-left: 0; width: 100%; border-radius: 10px; height: 257px;">


          
          <img src="{{asset('anik/images/diff.jpg')}}" style="height: 250px; width: 250px; float: left; margin-right: 13px; border:solid white 1px; ">
          <div class="mr-2">

          <h3 style="color: #fff; padding: 10px;" class="text-align">Why We Different</h3>

            
              <ul style="color: #fff; font-size: 20px; padding-top: 10px;">
                <li style="padding: 5px;"> > Maintaining and cultivating relationships with Supervisors and Students.</li>
                <li style="padding: 5px;"> > Our design approach is easy to use, very few formalities indeed.</li>
                <li style="padding: 5px;"> > It can give you opportunity to share your ideas with your very own University's professors and fellow students.</li>
                <li style="padding: 5px;"> > You can call for a idea and implement a project in a very straight foward way.</li>
                
              </ul>

            </div>

          

        


         </div>




     




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





  
  
</body>
</html>


