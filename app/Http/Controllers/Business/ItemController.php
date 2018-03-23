<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use App\Http\Requests\Business\Items\DeleteItem;
use App\Http\Requests\Business\Items\ShowItem;
use App\Http\Requests\Business\Items\UpdateItem;
use App\Http\Requests\Items\AddItem;
use App\Item;
use App\Picture;
use App\Restaurant;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

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
    public function index(Request $request)
    {
        $restaurantId = anyAuth()->user()->restaurant_id;

        $items = Restaurant::find($restaurantId)->items()->paginate(20);

        if ($request->wantsJson()) {
            return $items;
        }

        return view('business.items.index', compact('items'));
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
        $user = anyAuth()->user();

        $item = new Item($request->all());

        $item->user()->associate($user);
        $item->restaurant()->associate($user->restaurant);

        $item->image = Picture::storeImage($item->id, $request->image, Item::class)->path;
        $item->save();

        if ($request->wantsJson()) {
            return $item;
        }

        flash()->titleAs('Success')->withMessage('Item added successfuly')->createFlash('success');

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
            return $item->load('rating', 'orders', 'pictures', 'wishlist');
        }

        return view('business.items.item', compact('item'));
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

        return view('business.items.edit', compact('item'));
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

        if ($request->has('image')) {
            $item->image = Picture::storeImage($item->id, $request->image, Item::class)->path;
            $item->save();
        }

        if ($request->wantsJson()) {
            return $item;
        }

        return back();
    }

    /**
     * Delete an Item
     * Remove an Item from the Items in this store.
     *
     * @response {}
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
