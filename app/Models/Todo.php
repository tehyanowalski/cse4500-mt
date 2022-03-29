<?php

namespace App\Models;

protected $fillable = ['title','progress'];

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
}
