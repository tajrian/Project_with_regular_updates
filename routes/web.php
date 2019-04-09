<?php

    use Illuminate\Support\Facades\Input;
    use Illuminate\Http\Request;

    Route::view('/', 'index');
    //Route::view('/jquary', 'jquary');
    Route::view('/publicsearch', 'search');

   


    
    Route::post('/editProject',function(Request $request){
        $q = $request->id;
        //dd($q);
        $project=\DB::table('Projects')
                   ->where('title','LIKE','%'.$q.'%')
                   ->first();
        //dd($project);

        $id=$project->student_id;

        $student=\DB::table('Students')
                   ->where('id','=',$id)
                   ->first();

        $sname=$student->name;

        return view('editProject',compact('project','sname')); 
    });


    Route::any('/pdprivate',function(){
        $q = Input::get ('project_id');
        //dd($q);
        
        $project=\DB::table('Projects')
                   ->where('title','LIKE','%'.$q.'%')
                   ->first();
        //dd($project);

        return view('project',compact('project')); 
    });

    Auth::routes();

    Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
    Route::get('/login/teacher', 'Auth\LoginController@showTeacherLoginForm');
    Route::get('/login/student', 'Auth\LoginController@showStudentLoginForm');

    Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
    Route::get('/register/teacher', 'Auth\RegisterController@showTeacherRegisterForm');
    Route::get('/register/student', 'Auth\RegisterController@showStudentRegisterForm');

    


    Route::post('/login/admin', 'Auth\LoginController@adminLogin');
    Route::post('/login/teacher', 'Auth\LoginController@teacherLogin');
    Route::post('/login/student', 'Auth\LoginController@studentLogin');
    

    Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
    Route::post('/register/teacher', 'Auth\RegisterController@createTeacher');
    Route::post('/register/student', 'Auth\RegisterController@createStudent');



    Route::view('/home', 'home')->middleware('auth');
    Route::view('/admin', 'admin');
    //Route::view('/student', 'student');
    
    Route::resource('teacher','TeacherController');

    Route::get('/submit','StudentController@index2');
    //Route::get('/form','FormController@form');
    Route::get('/search','SearchController@search');

    Route::resource('student','StudentController');

    Route::post("/projectSubmit","SubmitFormController@store");
    Route::get('/success','SubmitFormController@view');

    Route::get('/about',function(){
       return view('about');
    });

    Route::get('/contact',function(){
       return view('contact');
    });


    Route::post('/editStatus',function(Request $request ){
        $id=$request->id;
        $idea=$request->idea;
        $first=$request->first;
        $second=$request->second;
        $third=$request->third;
        $publish=$request->publish;
        $comment=$request->comment;
        
        
        \DB::table('Projects')->where('P_ID',$id)->update(['is_accepted' => $idea ]);
        \DB::table('Projects')->where('P_ID',$id)->update(['_1st_phase' => $first ]);
        \DB::table('Projects')->where('P_ID',$id)->update(['_2nd_phase' => $second ]);
        \DB::table('Projects')->where('P_ID',$id)->update(['_3rd_phase' => $third ]);
        \DB::table('Projects')->where('P_ID',$id)->update(['is_published' => $publish ]);
        \DB::table('Projects')->where('P_ID',$id)->update(['comment' => $comment ]);
       $hs= \DB::table('Projects')->where('P_ID',$id)->first();
       $tn = $hs->advisor;
       //dd($tn);
       $teacher=\DB::table('Teachers')
                   ->where('name','LIKE','%'.$tn.'%')
                   ->first();
       
       $project=\DB::table('Projects')
                   ->where('advisor','LIKE','%'.$tn.'%')
                   ->get();
      

       return view('/teacher',compact('teacher','project'));


         
    });
    
    Route::any('/pd',function(){
        $q = Input::get ('project_id');
        //dd($q);
        $project=\DB::table('Projects')
                   ->where('title','LIKE','%'.$q.'%')
                   ->first();
        //dd($project);
                   $id=$project->student_id;

        $student=\DB::table('Students')
                   ->where('id','=',$id)
                   ->first();

        $sname=$student->name;
        return view('publicProjectDetails',compact('project','sname')); 
    });

    Route::any('/pdprivate',function(){
        $q = Input::get ('project_id');
        //dd($q);
        $project=\DB::table('Projects')
                   ->where('title','LIKE','%'.$q.'%')
                   ->first();
        //dd($project);

        $id=$project->student_id;

        $student=\DB::table('Students')
                   ->where('id','=',$id)
                   ->first();

        $sname=$student->name;

        return view('project',compact('project','sname')); 
    });

    Route::any('/pdprivatestudent',function(){
        $q = Input::get ('project_id');
        //dd($q);
        $project=\DB::table('Projects')
                   ->where('title','LIKE','%'.$q.'%')
                   ->first();
        //dd($project);
        $id=$project->student_id;

        $student=\DB::table('Students')
                   ->where('id','=',$id)
                   ->first();

        $sname=$student->name;


        return view('projectStudent',compact('project','sname')); 
    });



    Route::any('/pdt',function(){
        $q = Input::get ('project_id');
        //dd($q);
        $teacher=\DB::table('Teachers')
                   ->where('name','LIKE','%'.$q.'%')
                   ->first();
        //dd($teacher);
        $s=$teacher->name;
        //dd($id);
        //$hq=1;
        $project=\DB::table('Projects')
                   ->where([['advisor','LIKE','%'.$s.'%'],['is_accepted','LIKE','%Yes%'],])

                   ->get();
        //dd($project);
        return view('publicTeacherProfile',compact('teacher','project'));

    });



    Route::any('/pds',function(){
        $q = Input::get ('project_id');
        //dd($q);
        $student=\DB::table('Students')
                   ->where('name','LIKE','%'.$q.'%')
                   ->first();
        //dd($student);
        $id=$student->id;
        //dd($id);
        //$hq=1;
        $project=\DB::table('Projects')
                   ->where('student_id','=',$id)
                   ->get();
        //dd($project);


        return view('publicStudentProfile',compact('student','project'));

    });

     Route::get('/allproject', function(){

      $project=\DB::table('Projects')
                   ->get();
      //dd($project);

      return view('allProject',compact('project')); 

    });




    Route::any('/searchresult',function(){

        $q = Input::get ('q');
        //dd($q);
        if (strpos($q, '#student') !== false){
            $s=trim($q,"#student ");
            //dd($s);
            $student=\DB::table('Students')
                   ->where('name','LIKE','%'.$s.'%')
                   ->get();
            //dd($student);
            return view('studentSearch',compact('student'));
            //return view('studentSearch');
        }
        elseif (strpos($q, '#teacher') !== false) {
            $s=trim($q,"#teacher ");
            //dd($s);
            $teacher=\DB::table('Teachers')
                   ->where('name','LIKE','%'.$s.'%')
                   ->get();

            //dd($user);
            return view('teacherSearch',compact('teacher'));

        }
        elseif (strpos($q, '#project') !== false ) {

            $s=trim($q,"#project ");
            //dd($s);
            $project=\DB::table('Projects')
                   ->where([['title','LIKE','%'.$s.'%'],['is_accepted', 'LIKE', '%yes%'],])
                   ->get();

            //dd($project);
            return view('projectSearch',compact('project'));

        }
        elseif (strpos($q, '#thesis') !== false ) {
            $s=trim($q,"#thesis ");
            //dd($s);
            $project=\DB::table('Projects')
                   ->where('title','LIKE','%'.$s.'%')
                   ->get();

            //dd($project);
            return view('projectSearch',compact('project'));

        }
        else{
          $project=\DB::table('Projects')
                   ->where('title','LIKE','%'.$q.'%')
                   ->orWhere('tags','LIKE','%'.$q.'%')
                   ->get();

            //dd($project);

          $teacher=\DB::table('Teachers')
                   ->where('name','LIKE','%'.$q.'%')
                   ->get();

          $student=\DB::table('Students')
                   ->where('name','LIKE','%'.$q.'%')
                   ->get();

          

          return view('uncategorized',compact('project','teacher','student'));

        }
    });


    //Route::resource('projectDeatils','projectController');

  
    //Route::get('/projectDeatils/edit/{id}', 'projectController@show');
    //Route::post('projectDeatils/edit/{id}', 'projectController@postEdit');

    
    
    










    
