<!-- start topBar -->
<div class="topBar">
    <div class="container">
        <ul class="topBarNav pull-right">

            @if (Auth::guest())
                <li><a href="/login"> Login</a></li>
                <li><a href="/register"> Register</a></li>
            @endif
            <li class="linkdown">
                <a href="javascript:void(0);">
                    <i class="fa fa-user mr-5"></i>
                    <span class="hidden-xs">
                        @if (Auth::check())
                            {{ Auth::user()->name }}
                        @else
                            My Account
                        @endif
                        <i class="fa fa-angle-down ml-5"></i>
                    </span>
                </a>
                <ul class="w-150">
                    @if (Auth::check())
                        <li><a href="/wishlist">Wishlist (5)</a></li>
                    @endif

                    <li><a href="/cart">My Cart</a></li>
                    <li><a href="/checkout">Checkout</a></li>
                    <li><a href="/orders">Orders</a></li>
                    <li><a href="/account">Account</a></li>

                    @if (Auth::check())
                        <li><a href="/logout">Logout</a></li>
                    @endif

                </ul>
            </li>
            <li class="linkdown">
                <a href="javascript:void(0);">
                    <i class="fa fa-shopping-basket mr-5"></i>
                    <span class="hidden-xs">
                        Cart<sup class="text-primary">(3)</sup>
                        <i class="fa fa-angle-down ml-5"></i>
                    </span>
                </a>
                <ul class="cart w-250">
                    <li>
                        <div class="cart-items">
                            <ol class="items">
                                <li>
                                    <a href="/items/1" class="product-image">
                                        <img src="/img/products/men_06.jpg" alt="Sample Product ">
                                    </a>
                                    <div class="product-details">
                                        <div class="close-icon">
                                            <a href="javascript:void(0);"><i class="fa fa-close"></i></a>
                                        </div>
                                        <p class="product-name">
                                            <a href="/items/1">Lorem Ipsum dolor sit</a>
                                        </p>
                                        <strong>1</strong> x <span class="price text-primary">$59.99</span>
                                    </div><!-- end product-details -->
                                </li><!-- end item -->
                                <li>
                                    <a href="/items/1" class="product-image">
                                        <img src="/img/products/shoes_01.jpg" alt="Sample Product ">
                                    </a>
                                    <div class="product-details">
                                        <div class="close-icon">
                                            <a href="javascript:void(0);"><i class="fa fa-close"></i></a>
                                        </div>
                                        <p class="product-name">
                                            <a href="/items/1">Lorem Ipsum dolor sit</a>
                                        </p>
                                        <strong>1</strong> x <span class="price text-primary">$39.99</span>
                                    </div><!-- end product-details -->
                                </li><!-- end item -->
                                <li>
                                    <a href="/items/1" class="product-image">
                                        <img src="/img/products/bags_07.jpg" alt="Sample Product ">
                                    </a>
                                    <div class="product-details">
                                        <div class="close-icon">
                                            <a href="javascript:void(0);"><i class="fa fa-close"></i></a>
                                        </div>
                                        <p class="product-name">
                                            <a href="/items/1">Lorem Ipsum dolor sit</a>
                                        </p>
                                        <strong>1</strong> x <span class="price text-primary">$29.99</span>
                                    </div><!-- end product-details -->
                                </li><!-- end item -->
                            </ol>
                        </div>
                    </li>
                    <li>
                        <div class="cart-footer">
                            <a href="/cart" class="pull-left"><i class="fa fa-cart-plus mr-5"></i>View Cart</a>
                            <a href="/checkout" class="pull-right"><i class="fa fa-shopping-basket mr-5"></i>Checkout</a>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div><!-- end container -->
</div>
<!-- end topBar -->
