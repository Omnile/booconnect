<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use App\Http\Requests\Business\Orders\CancelOrder;
use App\Http\Requests\Business\Orders\ShowOrder;
use App\Order;
use App\Restaurant;
use Illuminate\Http\Request;

/**
 * @resource Pending Orders
 * Manage pending orders
 */
class PendingOrderController extends Controller
{
    /**
     * List Pending Orders
     * Query paginated list of pending orders.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $restaurantId = auth()->user()->restaurant_id;

        $orders = Restaurant::find($restaurantId)

            ->orders()
            ->where('status', '=', 'pending')
            ->paginate(20)
        ;

        if ($request->wantsJson()) {
            return $orders;
        }

        return view('business.pending-orders.index', compact('orders'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(ShowOrder $request, Order $order)
    {
        return view('business.pending-orders.order', compact('order'));
    }

    /**
     * Cancel Order
     * Cancel an order that was placed.
     * This option is only available within first 5 mins from time of order.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(CancelOrder $request, Order $order)
    {
        $order->delete();

        if ($request->wantsJson()) {
            return $order;
        }

        return back();
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
}
