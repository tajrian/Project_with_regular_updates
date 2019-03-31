<?php

namespace App\Http\Controllers;

use App\Project;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class SubmitFormController extends Controller
{
    //

    public function view(){
    	return view('success');
    } 
    
    protected function store(Request $request)
    {
        //$this->validator($request->all(),)->validate();

        $project = Project::create([
            'advisor' => $request['advisor'],
            'student_id' => $request['student_id'],
            'title' => $request['title'],
            'description' => $request['description'],
            'platform' => $request['platform'],
            'framework' => $request['framework'],
            'technology' => $request['technology'],
            'git' => $request['git'],
            'tags' => $request['tags'],
            'comment' => $request['comment'],
        ]);
        return redirect('/success');
    }

}
