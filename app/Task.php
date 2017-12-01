<?php

namespace tasks;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
    protected $fillable = [
      'title',
      'description',
      'valor',
      'users_id'
    ];

    public function user(){
        return $this->belongsTo('User','users_id');
    }
}
