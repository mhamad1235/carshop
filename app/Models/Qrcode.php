<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qrcode extends Model
{
    use HasFactory;
    protected $table='qrcode';
    public $timestamps=false;
public $fillable=['id','name','price','type','description','image'];

public function scopeFindById($query, $id)
{
    return $query->where('id', $id)->first();
}
}
