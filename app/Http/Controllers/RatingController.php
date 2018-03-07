<?php

namespace App\Http\Controllers;

use App\Http\Requests\Rating\AddRating;
use App\Item;
use App\Rating;
use App\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * @resource Rating
 *
 * Rating resource endpoints
 */
class RatingController extends Controller
{
    /**
     * List all ratings
     *
     * List ratings related to either an item or restaurant
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->input('rateable_type') == 'item') {
            $ratings = Item::find($request->input('ratable_id'))->rating->paginate(20);
        }

        if ($request->input('rateable_type') == 'restaurant') {
            $ratings = Restaurant::find($request->input('ratable_id'))->rating->paginate(20);
        }

        if ($request->wantsJson()) {
            return $items;
        }

        return view('ratings', compact('items'));
    }

    /**
     * Add Rating
     *
     * Add rating to an item or restaurant
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddRating $request)
    {

        $rating = Auth::user()->ratings()->create($request->all());

        if ($request->wantsJson()) {
            return $rating;
        }

        return back();
    }

    /**
     * Get Rating
     *
     * Get a single rating review
     *
     * @param  \App\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function show(Rating $rating)
    {
        if ($request->wantsJson()) {
            return $rating;
        }

        return view('components.rating', compact('rating'));
    }

    /**
     * Delete a rating review
     *
     * Delete a rating for either an item or restaurant
     *
     * @param  \App\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rating $rating)
    {
        if ($rating->user_id !== auth()->user()->id) {
            return response(402);
        }

        $rating->delete();

        if ($request->wantsJson()) {
            return $rating;
        }

        return redirect()->back();
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function create()
    {
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function edit(Rating $rating)
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function update(Request $request, Rating $rating)
    {
        //
    }
}
