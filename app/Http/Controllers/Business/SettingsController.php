<?php

namespace App\Http\Controllers\Business;

use App\Http\Controllers\Controller;
use App\Http\Requests\Business\UpdateBusiness;
use App\Picture;
use App\Restaurant;
use Illuminate\Http\Request;

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
         * Get all the data from the
         * current restaurant
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
