<?php

namespace App\Http\Controllers;

use App\Item;
use App\Order;
use Illuminate\Http\Request;

/**
 * @resource Orders
 *
 * Orders resource endpoints
 */
class OrderController extends Controller
{
    /**
     * List all orders
     *
     * Display a paginated list of all orders.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Item $items)
    {
        $items = $items->paginate(20);

        if ($request->wantsJson()) {
            return $items;
        }

        return view('orders', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Cancel an order
     *
     * A user can cancel an order within the first NUMBER minuites after
     * making the order.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        return $order->cancel();
    }
}
