<?php

namespace App\BooConnect\Search;

trait Searchable
{

    public static function search($query)
    {
        return self::where('name', 'LIKE', '%' . $query . '%');
    }
}
