<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    protected $fillable = ['brand','type','nationality','manufactoring_plant','label_image','description','price'];
}
