<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'users_id', 'categories_id', 'price', 'description', 'slug',
    ];

    protected $hidden = [
        //
    ];

    /* Product mempunyai banyak gallery*/
    public function galleries()
    {
        return $this->hasMany(ProductGallery::class, 'products_id', 'id');
    }

    /* Product hanya memiliki oleh model user */
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'users_id');
    }

    /* Product hanya dimiliki oleh satu category saja */
    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id', 'id');
    }
}
