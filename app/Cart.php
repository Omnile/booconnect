<?php

namespace App;

use Gloudemans\Shoppingcart\Facades\Cart as CartHelper;

class Cart extends CartHelper
{
    // as you see, we can always exted :)
    // now we could add functions, and all. instead of using injection. and everything is readable and reachable.
    // Most importantly, testable!
}
