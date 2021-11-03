<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicineInformation extends Model
{
    use HasFactory;

    protected $table = 'medicine_informations';

    protected $guarded = [
        'id',
    ];
}
