<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    use HasFactory;
    protected $fillable = ['equipment_id','services', 'software','notes'];
    protected $table = 'notes';

    public function equipment()
    {
        return $this->belongto(Equipment::class);
    }
}
