<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use App\Http\Requests\Business\Orders\CompletedOrder;
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

        $completed_orders = Restaurant::find($restaurantId)

            ->orders()
            ->where('status', '<>', 'pending')
            ->paginate(20)
        ;

        if ($request->wantsJson()) {
            return $completed_orders;
        }

        return view('business.completed-orders.index', ['orders' => $completed_orders]);
    }

    /**
     * Get completed order
     * Get a completed order form storage
     *
     * @param  \App\Order  $completed_order
     * @return \Illuminate\Http\Response
     */
    public function show(CompletedOrder $request, Order $completed_order)
    {

        if ($request->wantsJson()) {
            return $completed_order;
        }

        return view('business.completed-orders.order', ['order' => $completed_order]);
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
    public function edit($completed_order)
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function update(Request $request, $completed_order)
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function destroy($completed_order)
    {
        //
    }
}
