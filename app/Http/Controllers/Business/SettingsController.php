<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use App\Http\Requests\Business\UpdateBusiness;
use App\Picture;
use App\Restaurant;
use Illuminate\Http\Request;

/**
 * @resource Restaurant Settings
 * Manage Resturant Settings
 */
class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /**
         * Get restaurant configuration
         * Get all the data from the current restaurant
         *
         * @var App\Restaurant::class
         */
        $settings = Restaurant::find(auth()->user()->restaurant_id);

        if ($request->wantsJson()) {
            return $settings;
        }

        return view('business.settings', compact('settings'));
    }

    /**
     * Update Business Settings.
     * Update the Business (restaurant) configurations
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UpdateBusiness $request)
    {

        $settings = auth()->user()->restaurant;

        $settings->update($request->all());

        if ($request->has('image')) {
            $settings->image = Picture::storeImage($settings->id, $request->image, Restaurant::class)->path;
        }

        if ($request->has('cover')) {
            $settings->cover = Picture::storeImage($settings->id, $request->cover, Restaurant::class)->path;
        }

        $settings->save();

        if ($request->wantsJson()) {
            return $settings;
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
     * @hideFromAPIDocumentation
     */
    public function destroy($id)
    {
        //
    }
}
