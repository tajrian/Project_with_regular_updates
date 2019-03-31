<?php

namespace App\Http\Controllers;

use App\Teacher;
 
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
use Auth;
use View;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {


        $id= Auth::guard('teacher')->user()->id;
        $teacher = Teacher::find($id);
        //dd(Auth::user());

        $name=$teacher->name;
        //dd($name);

        $project = \DB::table('Projects')
                   ->where('advisor','LIKE','%'.$name.'%')
                   ->get();
        //dd($project);

        return view('teacher', compact('teacher','project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        //return $id;
        //dd($id);
        //echo $id;
        //return view('new');
        $teachers = Teacher::where('id',$id)->first();
        dd($teachers);
        return view('editTeacher', compact('teachers', 'teachers'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        //
        //$teachers = Auth::user();

        //view('teacher',['teachers' => $teachers] );

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        //
    }
}
