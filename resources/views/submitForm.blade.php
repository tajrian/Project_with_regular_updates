<!DOCTYPE html>
<html lang="en">
<head>
	<title>Submit</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('submitForm/images/icons/fav.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('submitForm/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('submitForm/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('submitForm/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('submitForm/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('submitForm/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('submitForm/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('submitForm/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('submitForm/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('submitForm/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('submitForm/css/main.css')}}">
<!--===============================================================================================-->
<!-- j quary head part -->
    <!-- <link rel="stylesheet" href="{{asset('//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('/resources/demos/style.css')}}">
    -->

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    


<!--===============================================================================================-->

</head>
<body style="background-color: #2F4F4F; height:1100px; ">

	<div class="container-contact100">
		<div class="contact100-map">
		</div>

		<div class="wrap-contact100">
			<div class="contact100-form-title">
				<span class="contact100-form-title-1">
					Submit your project/thesis idea here.
				</span>

				
			</div>

			<form class="contact100-form validate-form" method="POST" action="/projectSubmit">
			{{ csrf_field() }}

			    <div class="wrap-input100 validate-input" data-validate="Advisor Name is required">
					<span class="label-input100">Advisor:*</span>
					<input class="input100" type="text" name="advisor" id="advisor" placeholder="advisor name">
					<span class="focus-input100"></span>
				</div> 


				
				
					<input class="input100" type="hidden" name="student_id" id="student_id" value="<?php echo htmlspecialchars($id); ?>" />
					
				

				<div class="wrap-input100 validate-input" data-validate="title is required">
					<span class="label-input100">Project/Thesis title:*</span>
					<input class="input100" type="text" name="title" id="title" placeholder="title">
					<span class="focus-input100"></span>
				</div>


				
				
				<div class="wrap-input100 validate-input" data-validate ="description is required">
					<span class="label-input100">Project/Thesis Summary:*</span>
					<input class="input100" type="text" name="description" id="description" placeholder="maximum 100 characters.">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="platform is required">
					<span class="label-input100">platform:*</span>
					<input class="input100" type="text" name="platform" id="platform" placeholder="ios/android/web" list="options">
					<datalist id="options">
                    <option>ios</option>
                    <option>android</option>
                    <option>web</option>
                    </datalist>

					<!--<span class="focus-input100">
					</span> -->
				</div>

				<div class="wrap-input100 validate-input" data-validate="framework is required">
					<span class="label-input100">framework:*</span>
					<input class="input100" type="text" name="framework" id="framework" placeholder="framework" list="xxd">
					<datalist id="xxd">
                    <option>laravel</option>
                    <option>django</option>
                    <option>.NET</option>
                    <option>Spring</option>
                    <option>None</option>



                    </datalist>

					<!-- <span class="focus-input100"></span> -->
				</div>

				<div class="wrap-input100 validate-input" data-validate="technology is required">
					<span class="label-input100">technology:*</span>
					<input class="input100" type="text" name="technology" id="technology" placeholder="technology">
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 validate-input" data-validate="git is required">
					<span class="label-input100">git:*</span>
					<input class="input100" type="text" name="git" id="git" placeholder="Enter git id">
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 validate-input" data-validate="tags is required">
					<span class="label-input100">tags:*</span>
					<input class="input100" type="text" name="tags" id="add tags" placeholder="use space for multiple tags">
					<!--<span class="focus-input100"></span> -->
				</div>

				<div class="wrap-input100 validate-input" data-validate="comment is required">
					<span class="label-input100">comment:*</span>
					<input class="input100" type="text" name="comment" id="comment" placeholder="comment">
					<span class="focus-input100"></span>
				</div>
                
				

				
				
				
				
				
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>



  <div id="dropDownSelect1"></div>
    
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
      $(document).ready( function() {
    
        $( "#advisor" ).autocomplete({
          source: 'http://127.0.0.1:8000/search'
       });
     } );
   </script>

</body>
</html>
