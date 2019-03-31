<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //

        protected $fillable = [
            'advisor',
            'student_id',
            'title',
            'description',
            'platform',
            'framework',
            'technology',
            'git',
            'tags',
            'is_accepted',
            '_1st_phase',
            '_2nd_phase',
            '_3rd_phase',
            'is_published',
            'comment',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];

        //protected $table = 'projects';
}
