<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;

/**
 * @resource Restaurant
 *
 * Lists restaurants registered on booconnect
 */
class RestaurantController extends Controller
{
    /**
     * Query Restaurants.
     *
     * Get a paginated result of all restaurants
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Restaurant $restaurants)
    {

        $restaurants = $restaurants->paginate(20);

        if ($request->wantsJson()) {
            return $restaurants;
        }

        return view('restaurants', compact('restaurants'));
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
     * Get Restaurant
     * A restaurant resource with pagination of it's items
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Restaurant $restaurant)
    {
        $items = $restaurant->items()->paginate(20);
        $restaurant->items = $items;

        if ($request->wantsJson()) {
            return $restaurant;
        }

        return view('restaurant', compact('restaurant'));
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function edit(Restaurant $restaurant)
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function destroy(Restaurant $restaurant)
    {
        //
    }
}
