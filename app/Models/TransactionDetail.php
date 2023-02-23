<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;
    public function transactiondetail()
    {
        return $this->hasOne('App\Models\TransactionDetail', 'book_id');
        // return $this->hasOne('App\Models\User', 'member_id');
    }
}
