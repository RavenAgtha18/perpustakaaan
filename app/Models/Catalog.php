<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable = ['name'];

    public function book()
    {
        return $this->hasMany('App\Models\Book', 'catalog_id');
    }
}
