<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use HasFactory;

    public function book()
    {
        return $this->hasMany('App\Models\Book', 'catalog_id');
    }
}
