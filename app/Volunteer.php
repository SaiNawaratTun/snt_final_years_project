<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    //
    protected $fillable = ['name','email','phone','city','sdate','edate'];

}
