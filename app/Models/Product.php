<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'tbl_products';
    protected $primaryKey = 'flight_id';

    protected $fillable = [
        'prod_id', 'prod_name','prod_desc','price'
    ];
}
