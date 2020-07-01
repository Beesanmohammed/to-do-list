<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Todo extends Model{

    protected $fillable=['title','completed'];

    public $table = "todo";

}
