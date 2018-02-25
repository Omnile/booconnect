<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Http\Requests\Cart\AddItem;
use App\Http\Requests\Cart\UpdateItem;
use App\Item;
use Illuminate\Http\Request;

/**
 * @resource Cart
 *
 * Shopping cart endpoints
 */
class CartController extends Controller
{

    /**
     * Get Items
     * List items in the shopping cart
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cart_items = Cart::content();

        if ($request->wantsJson()) {
            return $cart_items;
        }

        return view('cart', compact('items'));
    }

    /**
     * Add Item.
     * Add and item to the shopping cart
     *
     * @return \Illuminate\Http\Response
     */
    public function store(AddItem $request)
    {
        $cart_item = Cart::add(Item::find($request->item_id), $request->qty);

        if ($request->wantsJson()) {
            return $cart_item;
        }

        return back();
    }

    /**
     * Update Cart Item Quantity
     * Update a specific cart Item.
     *
     * @param  \Illuminate\Http\UpdateItem  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateItem $request, $cart_item)
    {
        $cart_item = Cart::update($cart_item, ['qty' => $request->quantity]);

        if ($request->wantsJson()) {
            return $cart_item;
        }

        return back();
    }

    /**
     * Remove Cart Item
     * Remove an item from the shopping cart.
     *
     * @param  integer  $cart_item_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cart_item)
    {
        return Cart::remove($cart_item);
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function show()
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function edit()
    {
        //
    }
    /**
     * @hideFromAPIDocumentation
     */
    public function create()
    {
        //
    }
}
