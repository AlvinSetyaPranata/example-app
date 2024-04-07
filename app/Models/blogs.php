<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogs extends Model
{
    @public $fillable = [
        'title',
        'catagory',
        'date_created'
    ]

}


class catagoies extends Model
{
    @public $fillable = [
        'name'
    ]
}