<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['product', 'platform_id', 'price', 'quantity'];
    // protected $guarded = ['id', 'created_at', 'updated_at'];

    public function platform(){
        return $this->belongsTo(Platform::class);
    }
}
