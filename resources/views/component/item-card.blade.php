<div class="thumbnail store style{{ $style }}" style="border-top-right-radius: 30%;">
    <div class="header" style="border-top-right-radius: 30%;">
        {{-- <div class="badges">

            <span class="product-badge top left primary-background text-white semi-circle">Sale</span>

            <span class="product-badge top right text-warning">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
            </span>
        </div> --}}
        <figure class="layer" style="border-top-right-radius: 30%;">
            <a href="javascript:void(0);">
                <img src="{{$item->image}}" alt="" style="border-top-right-radius: 30%;">
            </a>
        </figure>
        <div class="icons">
            <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-heart-o"></i></a>
            <a class="icon semi-circle" href="javascript:void(0);"><i class="fa fa-gift"></i></a>
            <a class="icon semi-circle" href="/resturant/{{ $resturant->id }}/items/{{ $item->id }}"><i class="fa fa-search"></i></a>
        </div>


        {{-- <ul class="countdown-product">
            <li>
                <span class="days">00</span>
                <p>Days</p>
            </li>
            <li>
                <span class="hours">00</span>
                <p>Hours</p>
            </li>
            <li>
                <span class="minutes">00</span>
                <p>Mins</p>
            </li>
            <li>
                <span class="seconds">00</span>
                <p>Secs</p>
            </li>
        </ul><!-- end countdown --> --}}
    </div>
    <div class="caption">
        <h6 class="regular"><a href="/items/{{$item->id}}">{{ $item->name }}</a></h6>
        <div class="price">
            {{-- <small class="amount off text-danger">{{ $item->formatted_price }}</small> --}}
            <span class="amount text-primary">{{ $item->formatted_price }}</span>
        </div>
        <a href="javascript:void(0);"><i class="fa fa-cart-plus mr-5"></i>Add to cart</a>
    </div><!-- end caption -->
</div><!-- end thumbnail -->
