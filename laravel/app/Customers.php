<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $fillable = [
        'Name',
        'Street',
        'City',
        'State',
        'Zip',
        'Phone',
        'Notes'
    ];
}
