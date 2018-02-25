<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

/**
 * @resource Items
 *
 * Items sold in resturants registered on BooConnect
 */
class ItemController extends Controller
{
    /**
     * Query Items
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
     * @hideFromAPIDocumentation
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
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
     * Get Item
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
    }
}
