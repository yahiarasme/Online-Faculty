<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class faculty extends Model
{
    protected $fillable = ['name', 'department', 'courses' , 'areaofexpertise' , 'professionalInterest'];
}
