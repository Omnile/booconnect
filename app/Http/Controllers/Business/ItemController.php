<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use App\Http\Requests\Business\Items\DeleteItem;
use App\Http\Requests\Business\Items\ShowItem;
use App\Http\Requests\Business\Items\UpdateItem;
use App\Http\Requests\Items\AddItem;
use App\Item;
use Illuminate\Http\Request;

/**
 * @resource Items
 *
 * Manage Items (Products)
 */
class ItemController extends Controller
{
    /**
     * Query All Items (Products)
     * Get a list of paginated items.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = auth()->user()->restaurant()->items()->paginate(20);

        if ($request->wantsJson()) {
            return $items;
        }

        return view('business.items', compact('items'));
    }

    /**
     * Create Item Form (Product)
     * Show the form for creating a new item.
     *
     * @hideFromAPIDocumentation
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('business.items.create');
    }

    /**
     * Create a new Item (Product)
     * Store a newly created Item in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddItem $request)
    {
        $item = auth()->user()->restaurant()->items()->create($request->all());

        if ($request->wantsJson()) {
            return $item;
        }

        return back();
    }

    /**
     * Get Item
     * Get a single Item
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(ShowItem $request, Item $item)
    {
        if ($request->wantsJson()) {
            return $item;
        }

        return view('business.items.item');
    }

    /**
     * Show Form for Editing Item
     * Edit an Item
     *
     * @hideFromAPIDocumentation
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(ShowItem $request, Item $item)
    {
        if ($request->wantsJson()) {
            return $item;
        }

        return view('business.items.edit');
    }

    /**
     * Update Item
     * Update an item.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateItem $request, Item $item)
    {
        $item->update($request->all());

        if ($request->wantsJson()) {
            return $item;
        }

        return back();
    }

    /**
     * Delete an Item
     * Remove an Item from the Items in this store.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeleteItem $request, Item $item)
    {
        $item->delete();

        if ($request->wantsJson()) {
            return $item;
        }

        return back();
    }
}
