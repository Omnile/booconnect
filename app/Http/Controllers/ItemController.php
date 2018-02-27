<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

/**
 * @resource Items
 *
 * Items sold in restaurants registered on BooConnect
 */
class ItemController extends Controller
{
    /**
     * Query All Items
     * Get a list of paginated items.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Item $items)
    {
        $items = $items->paginate(20);

        if ($request->wantsJson()) {
            return $items;
        }

        return view('items', compact('items'));
    }

    /**
     * Get Single Item
     *
     * This will return a single item with it's
     * attributes and set of pictures.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Item $item)
    {
        $item = $item->load('pictures');

        if ($request->wantsJson()) {
            return $item;
        }

        return view('item', compact('item'));
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
    public function store()
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
    public function update()
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function destroy()
    {
        //
    }
}
