<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'version',
        'ram',
        'category',
        'manufacture_id',
        'notes_id'
    ];

    protected $table = 'equipment';

    public function notes()
    {
        return $this->hasMany(Notes::class);
    }
    
    public function manufacture()
    {
        return $this->belongsTo(Manufacture::class);
    }

    public function purchases()
    {
        return $this->belongsToMany(Purchases::class);
    }
}
