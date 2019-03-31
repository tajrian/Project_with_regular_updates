<?php

    namespace App;

    use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class Student extends Authenticatable
    {
        use Notifiable;

        protected $guard = 'student';

        protected $fillable = [
            'name', 'institute', 'dept', 'iid', 'cell', 'email', 'password',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
    }
