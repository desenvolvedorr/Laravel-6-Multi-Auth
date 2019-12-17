<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    public $fillable = ['name', ];

    protected $dates = ['birth'];

    public function getFormattedDateAttribute()
    {
        return $this->birth->format('m/d/Y');
    }

    protected $appends = ['formattedDate'];


    // Mutator para o campo "name" para gravar e exibir todas MAIÚSCULAS
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtoupper($value);
    }
    public function getNameAttribute($value)
    {
        return strtoupper($value);
    }
    //
}

