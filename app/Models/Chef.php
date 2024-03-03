<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chef extends Model
{
    use HasFactory;
    protected $fillable=['name','posisi','facebook','twitter','instagram','img'];
    protected $table='chefs';
    public $timestamps=false;
}
