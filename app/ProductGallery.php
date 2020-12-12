<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductGallery extends Model
{

    protected $fillable = [
        'photos', 'products_id',
    ];


    protected $hidden = [
        //
    ];

    /* Model ini Gallery hanya boleh dimiliki product */
    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id', 'id');
    }
}
