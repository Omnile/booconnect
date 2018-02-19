<?php

namespace App\Http\Controllers;

use App\Resturant;
use Illuminate\Http\Request;

/**
 * @resource Resturant
 *
 * Lists resturants registered on booconnect
 */
class ResturantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Resturant $resturants)
    {

        $resturants = $resturants->paginate(20);

        if ($request->wantsJson()) {
            return $resturants;
        }

        return view('resturants', compact('resturants'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Resturant  $resturant
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Resturant $resturant)
    {
        $resturant = collect(compact('resturant'))
            ->union($resturant->items()->paginate(20));

        if ($request->wantsJson()) {
            return $resturant;
        }

        return view('resturant', compact('resturant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Resturant  $resturant
     * @return \Illuminate\Http\Response
     */
    public function edit(Resturant $resturant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Resturant  $resturant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resturant $resturant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Resturant  $resturant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resturant $resturant)
    {
        //
    }
}
