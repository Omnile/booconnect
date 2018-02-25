<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Gloudemans\Shoppingcart\Facades\Cart as CartRepository;

class Cart extends CartRepository
{
    // as you see, we can always exted :)
    // now we could add functions, and all. instead of using injection. and everything is readable and reachable.
    // Most importantly, testable!
}
