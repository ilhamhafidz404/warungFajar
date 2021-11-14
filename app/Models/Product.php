<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable= ['nama', 'modal', 'harga_jual_minim', 'harga_jual_sedang', 'harga_jual_mahal', 'total', 'jumlah'];
}
