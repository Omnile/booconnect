<?php

namespace App\BooConnect\Search;

trait Searchable {

	public static function search($query)
	{
		$result = static::where('name' ,'LIKE' ,'%'. $query.'%')->get();

		return $result;
	}
}