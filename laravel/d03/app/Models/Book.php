<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table='tbbook';
    protected $fillable = ['id','title','author','picture','price','edition'];
    public $timestamps = false;  // remove update_at, create_at in SQL insert/update query

}
