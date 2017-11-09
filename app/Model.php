<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    //Removing all the protection for MassAssignment
    protected $guarded = [];
}
