<?php

namespace App\Models;;

use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{

    protected $table = 'academics';
    public $timestamps = true;

    protected $fillable = [
        "name",
        "notes",
        "academic_years",
        "requirements"
    ];

}
