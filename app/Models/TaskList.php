<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskList extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'title', 'status', 'position' , 'created_at' , 'updated_at',];
}
