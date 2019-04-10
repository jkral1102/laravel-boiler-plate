<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    // // Table Name (default = Todo)
    protected $table = 'todos';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
