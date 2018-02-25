<?php

namespace App\Http\Controllers;

use App\Http\Requests\Wishlist\AddItem;
use App\Item;
use App\Wishlist;
use Illuminate\Http\Request;

/**
 * @resource Wishlist
 *
 * Item-Wishlist resource endpoints
 */
class WishlistController extends Controller
{
    /**
     * Get Items
     *
     * Get paginated list of items on wishlist
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Wishlist $wishlist)
    {
        $items = $wishlist->paginate(20);

        if ($request->wantsJson()) {
            return $items;
        }

        return view('wishlist', compact('items'));
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function create()
    {
        //
    }

    /**
     * Add Wishlist item
     *
     * Add an item to wishlist
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddItem $request)
    {
        $wishlist_item = Wishlist::create($request->all());

        if ($request->wantsJson()) {
            return $wishlist_item;
        }

        return redirect('items')->back();
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function show($id)
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function edit($id)
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove Item
     *
     * Remove an item from the set of items on tieh wishlist.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wishlist $withlist)
    {
        $wishlist_item = $withlist;

        $withlist_item->delete();

        return $withlist_item;
    }
}
