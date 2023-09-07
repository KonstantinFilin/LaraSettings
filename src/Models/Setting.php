<?php

namespace KonstantinFilin\LaraSettings\Models; 

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $table = "larasettings";
    public $timestamps = false;
}
