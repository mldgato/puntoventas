<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'create_at', 'update_at'];
    //Relación uno a muchos inversa
    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }
    public function rack()
    {
        return $this->belongsTo(Rack::class);
    }
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
    public function measure()
    {
        return $this->belongsTo(Measure::class);
    }
    //relación uno a uno polimórfica
    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
