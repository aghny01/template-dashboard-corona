<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;
    protected $fillable=['name','email','phone','no_meja','date','orang','message'];
    protected $table='reservasis';
    public $timestamps='false';
}
