<?php

namespace App\Models;;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Academic extends Model
{
    protected $table = 'academics';
    public $timestamps = true;

    use HasTranslations;

    public $translatable = ['name'];


    protected $fillable = [
        "name",
        "notes",
        "academic_years",
        "requirements"
    ];

}
