<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Equipment;

class Manufacturer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'tech_email',
        'tech_phone',
        'sales_email',
        'sales_phone'
    ];
    protected $table = 'manufacturers';
    
    public function equipment()
    {
        return $this->hasMany(Equipment::class);
    }
}
