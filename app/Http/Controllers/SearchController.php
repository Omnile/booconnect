<?php

namespace App\Http\Controllers;

use App\Http\Requests\Search\SearchRequest;
use App\Item;
use App\Restaurant;
use App\Search;

/**
 * @resource Search
 *
 * Search for either Restaurants or Items
 */
class SearchController extends Controller
{
    /**
     * The default view that will be returned based on
     * the type of model the client is looking for.
     * @var string
     */
    protected $view = 'welcome';

    /**
     * This wil hold the set of results after the search
     * query has been carried out
     */
    protected $result;

    /**
     * Search
     *
     * This will allow the clients to seach for items, restaurants
     * or a combination of both.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SearchRequest $request)
    {

        $query = $request->get('query');
        $type = $request->get('type');

        /**
         * Check that the type passed in is 'items'
         *
         * @var string
         */
        if ($type == 'items') {
            $this->result = Item::search($query)->paginate(12);
        }

        /**
         * Check that the type passed in is 'restaurants'
         *
         * @var string
         */
        if ($type == 'restaurants') {
            $this->result = Restaurant::search($query)->paginate(12);
        }

        /**
         * Respon to Ajax request
         */
        if ($request->wantsJson()) {
            return $this->result;
        }

        return view('search', ['result' => $this->result, 'type' => $type]);
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
    public function update(Request $request)
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
