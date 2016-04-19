<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $fillable = [
        'Name',
        'Address',
        'Phone',
        'Notes'
    ];
}
