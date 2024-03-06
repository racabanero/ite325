<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;

    protected $table = 'tbl_order_details';
    protected $primaryKey = 'order_detail_id';

    protected $fillable = [
        'order_detail_id', 'order_id', 'prod_id', 'date_ordered','archive'
    ];
}
