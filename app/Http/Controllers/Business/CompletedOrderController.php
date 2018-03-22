<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use App\Http\Requests\Business\Orders\ShowOrder;
use App\Order;
use App\Restaurant;
use Illuminate\Http\Request;

/**
 * @resource Completed Orders
 *
 * View order history
 */
class CompletedOrderController extends Controller
{
    /**
     * List Completed Orders
     * Display the order history list.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $restaurantId = anyAuth()->user()->restaurant_id;

        $orders = Restaurant::find($restaurantId)

            ->orders()
            ->where('status', '<>', 'pending')
            ->paginate(20)
        ;

        if ($request->wantsJson()) {
            return $orders;
        }

        return view('business.completed-orders.index', compact('orders'));
    }

    /**
     * Get completed order
     * Get a completed order form storage
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(ShowOrder $request, Order $order)
    {

        if ($request->wantsJson()) {
            return $order;
        }

        return view('business.completed-orders.order', compact('order'));
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function create()
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function edit($order)
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function update(Request $request, $order)
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function destroy($order)
    {
        //
    }
}
