<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Purchase;
use App\Models\Notes;
use App\Models\Manufacturer;

class Equipment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'ghz',
        'ram',
        'category',
        'manufacturer_id',
    ];
    protected $table = 'equipment';
    
    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }

       public function notes()
    {
        return $this->hasMany(Notes::class);
    }

    public function purchases()
    {
        return $this->belongsToMany(Purchase::class, 'purchase_equipment')->distinct();;
    }
}
