<div class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li class="nav-label">Restaurant</li>
                <li>
                    <a class="" href="/" aria-expanded="false">
                        <i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="nav-label">Items</li>
                <li>
                    <a href="/items/create">
                        <i class="fa fa-plus"></i><span class="hide-menu">Create Item</span>
                    </a>
                </li>
                <li>
                    <a href="/items">
                        <i class="fa fa-coffee"></i><span class="hide-menu">Items</span>
                    </a>
                </li>
                <li class="nav-label">Orders</li>
                <li>
                    <a href="/pending-orders" aria-expanded="false">
                        <i class="fa fa-gift"></i>
                        <span class="hide-menu">Pending Orders</span>
                    </a>
                </li>
                <li>
                    <a href="/completed-orders" aria-expanded="false">
                        <i class="fa fa-cart-arrow-down"></i><span class="hide-menu">Completed Orders </span>
                    </a>
                </li>

                <li class="nav-label">Transactions</li>

                <li>
                    <a href="/transactions">
                        <i class="fa fa-money"></i><span class="hide-menu">Transactions</span>
                    </a>
                </li>
                <li class="nav-label">Settings</li>
                <li>
                    <a href="/account">
                        <i class="fa fa-user"></i><span class="hide-menu">Account Settings</span>
                    </a>
                </li>
                <li>
                    <a href="/settings">
                        <i class="fa fa-gear"></i><span class="hide-menu">Admin Settings</span>
                    </a>
                </li>



                @if (count($errors) > 0)
                    <li class="text-center alert alert-danger"><h3><b>Errors</b></h3></li>

                    @foreach ($errors->all() as $error)
                        <li class="alert alert-danger" style="font-size: 8pt !important">{{ $error }}</li>
                    @endforeach
                @endif
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</div>
