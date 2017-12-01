<?php

namespace tasks;

use Illuminate\Database\Eloquent\Model;

class Troca extends Model
{
    public function my_tasks(){
        return $this->belongsTo('tasks\Task','tasks_id_my','id');
    }

    public function users(){
        return $this->belongsTo('tasks\User','users_id');
    }
    public function Tasks(){
        return $this->belongsTo('tasks\Task','tasks_id');
    }
}
