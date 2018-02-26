<?php

namespace App\Http\Controllers;

use App\Picture;
use Illuminate\Http\Request;

/**
 * @resource Pictures
 *
 * Pictures resource endpoints
 */
class PictureController extends Controller
{

    /**
     * @hideFromAPIDocumentation
     */
    public function index()
    {
        //
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
     * @hideFromAPIDocumentation
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function show(Picture $picture)
    {
        return $picture->load('imageable');
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function edit(Picture $picture)
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function update(Request $request, Picture $picture)
    {
        //
    }

    /**
     * @hideFromAPIDocumentation
     */
    public function destroy(Picture $picture)
    {
        //
    }
}
