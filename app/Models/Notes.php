<?php

namespace App\Models;

protected $fillable = ['equipment_id', 'services', 'software', 'notes'];

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    use HasFactory;
}
