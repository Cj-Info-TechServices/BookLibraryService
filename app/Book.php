<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // accessible fields
    protected $fillable = ['BookName', 'Author', 'Read', 'created_at'];
}
