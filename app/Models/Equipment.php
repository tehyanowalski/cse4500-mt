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
        'ghz',
        'ram',
        'category',
        'manufacturer_id'
    ];

    protected $table = 'equipment';

    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }

    public function invoice()
    {
        return $this->belongsToMany(Invoice::class, 'invoice_equipment');
    }
}
