<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoModel extends Model
{
    use HasFactory;

    protected $table = 'todo';

    protected $fillable = [
        'todo',
        'due_date',
    ];

    protected $primaryKey = 'todo_id';
}
