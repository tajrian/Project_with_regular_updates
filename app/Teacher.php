<?php

    namespace App;

    use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class Teacher extends Authenticatable
    {
        use Notifiable;

        protected $guard = 'teacher';

        protected $fillable = [
            'name', 'institute', 'dept', 'iid', 'cell', 'email', 'password',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
    }

    