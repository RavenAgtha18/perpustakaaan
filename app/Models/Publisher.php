<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    use SoftDeletes;
    // use SoftDeletes;

    use HasFactory;
    
    protected $dates = ['deleted_at'];

    protected $fillable = ['name','email','phone_number','addres'];


    public function books()
    {
        return $this->hasMany('App\Models\Book', 'publisher_id');
    }
}
      