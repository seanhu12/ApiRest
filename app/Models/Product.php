<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;


    protected $fillable =
        [
            'name',
            'code',
            'category',
            'image',
            'description',
            'price',
            'amount'
        ];
    public function activities(): HasMany
    {
        return $this->hasMany(Activity::class);
    }
}
