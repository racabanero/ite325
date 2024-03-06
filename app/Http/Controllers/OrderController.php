<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;

class OrderController extends Controller
{
	
	public function getOrderDetails() {

		$orders = Orders::select('*')
				->leftJoin('tbl_order_details', 'tbl_order_details.order_id', '=', 'tbl_orders.order_id')
				->leftJoin('tbl_products', 'tbl_products.prod_id', '=', 'tbl_order_details.prod_id')
				->leftJoin('users', 'users.id', '=', 'tbl_orders.user_id')
				->where('users.id', 1)
				->where('tbl_orders.status', 'completed')
				->get();
		 
		foreach ($orders as $order) {
		    
		    $table = '<table border="1">';
		    $table .= '<tr>';
		    $table .= '<td>';
		    $table .= $order->order_id;
		    $table .= '</td>';
		    $table .= '<td>';
		    $table .= $order->name;
		    $table .= '</td>';
		    $table .= '<td>';
		    $table .= $order->prod_name;
		    $table .= '</td>';
		    $table .= '</tr>';
		    $table .= '</table>';

		    echo $table;

		}

	}

}
