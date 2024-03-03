<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable=['name','deskripsi','jenis','harga','img'];
    protected $table='menu';
    public $timestamps=false;
}
