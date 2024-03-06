<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\OrderDetails;

class Orders extends Model
{
    use HasFactory;

    protected $table = 'tbl_orders';
    protected $primaryKey = 'order_id';

    protected $fillable = [
        'order_id', 'user_id','date_ordered','archive'
    ];

    /**
     * Get the order details associated with the user.
    */
    public function orderdetails(): HasMany
    {
        return $this->hasMany(OrderDetails::class);
    }
}
