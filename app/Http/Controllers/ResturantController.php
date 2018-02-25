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
     * Query Resturants.
     *
     * Get a paginated result of all resturants
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
     * Get Resturant
     * A resturant resource with pagination of it's items
     *
     * @param  \App\Resturant  $resturant
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Resturant $resturant)
    {
        $items = $resturant->items()->paginate(20);
        $resturant->items = $items;

        if ($request->wantsJson()) {
            return $resturant;
        }

        return view('resturant', compact('resturant'));
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function edit(Resturant $resturant)
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function update(Request $request, Resturant $resturant)
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function destroy(Resturant $resturant)
    {
        //
    }
}
