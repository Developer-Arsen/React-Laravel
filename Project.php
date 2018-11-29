<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'user_id', 'like_count'];

    public function project()
    {
        //return $this->hasMany('App\Task');

        // return $this->belongsTo('App\User', 'id', 'project_id');
        return $this->hasMany('App\Task', 'task_id', 'id');
    }
}
