<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use App\Item;
use App\Resturant;
use App\Search;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SearchRequest $request)
    {
        $query = $request->get('query');
        $type = $request->get('type');

        //check and provide the type of model the request queries on 
        if($type == 'Item'){

            $result = Item::search($query);

            if ($request->wantsJson()) {
                return $result;
            }
            return $result;

        } elseif($type == 'Resturant') {

            $result = Resturant::search($query);

            if ($request->wantsJson()) {
                return $result;
            }
            return $result;
        }

        //if the type is not reconized return this
        return $type. ' type does not exist';
    }


   
}
