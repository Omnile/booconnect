<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use App\Http\Requests\Business\Orders\PendingOrder;
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
        $restaurantId = anyAuth()->user()->restaurant_id;

        $pending_orders = Restaurant::find($restaurantId)

            ->orders()
            ->where('status', '=', 'pending')
            ->paginate(20)
        ;

        if ($request->wantsJson()) {
            return $pending_orders;
        }

        return view('business.pending-orders.index', ['orders' => $pending_orders]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $pending_order
     * @return \Illuminate\Http\Response
     */
    public function show(PendingOrder $request, Order $pending_order)
    {
        if ($request->wantsJson()) {
            return $pending_order;
        }

        return view('business.pending-orders.order', ['order' => $pending_order]);
    }

    /**
     * Cancel Order
     * Cancel an order that was placed.
     * This option is only available within first 5 mins from time of order.
     *
     * @response {}
     *
     * @param  \App\Order  $pending_order
     * @return \Illuminate\Http\Response
     */
    public function destroy(PendingOrder $request, Order $pending_order)
    {
        $pending_order->delete();

        if ($request->wantsJson()) {
            return $pending_order;
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
    public function edit(Order $pending_order)
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function update(Request $request, Order $pending_order)
    {
        //
    }
}
