<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatInformation extends Model
{
    use HasFactory;

    protected $table = 'cat_informations';

    protected $guarded = [
        'id',
    ];
}
