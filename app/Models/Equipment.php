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
    
      public function num_of_notes()
    {
        return count($this->notes);
    }

    public function purchases()
    {
        return $this->belongsToMany(Purchase::class, 'purchase_equipment')->distinct();;
    }
}
