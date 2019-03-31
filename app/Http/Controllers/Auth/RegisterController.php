<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Admin;
use App\Teacher;
use App\Student;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:admin');
        $this->middleware('guest:teacher');
        $this->middleware('guest:student');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */






    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'institute' => ['required', 'string', 'max:255'],
            'dept' => ['required', 'string', 'max:255'],
            'iid'  => ['required', 'string', 'max:255'],
            'cell' => ['required', 'string', 'max:11',  'min:8'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    public function showAdminRegisterForm()
    {
        return view('auth.register', ['url' => 'admin']);
    }

    public function showTeacherRegisterForm()
    {
        return view('auth.register', ['url' => 'teacher']);
    }

    public function showStudentRegisterForm()
    {
        return view('auth.register', ['url' => 'student']);
    }


    protected function createAdmin(Request $request)
    {
        $this->validator($request->all())->validate();
        $admin = Admin::create([
            'name' => $request['name'],
            'institute' => $request['institute'],
            'dept' => $request['dept'],
            'cell' => $request['cell'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/admin');
    }


    protected function createTeacher(Request $request)
    {
        $this->validator($request->all())->validate();
        $teacher = Teacher::create([
            'name' => $request['name'],
            'institute' => $request['institute'],
            'dept' => $request['dept'],
            'iid' => $request['iid'],
            'cell' => $request['cell'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/teacher');
    }

    protected function createStudent(Request $request)
    {
        $this->validator($request->all())->validate();
        $student = Student::create([
            'name' => $request['name'],
            'institute' => $request['institute'],
            'dept' => $request['dept'],
            'iid' => $request['iid'],
            'cell' => $request['cell'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->intended('login/student');
    }










    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'institute' => $data['institute'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
