<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchases extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_num',
        'price',
        'purchase_date',
        'equipment_id'
    ];

    protected $table = 'purchases';
    
    public function Equipment()
    {
        return $this->belongsTo(Equipment::class);
    }

    public function Customer()
    {
        return $this->belongsToMany(Customer::class);
    }

}
