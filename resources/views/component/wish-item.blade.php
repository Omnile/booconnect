
    <tr>
        <td>
            <a href="/items/{{$item->id}}">
                <img width="60px" src="{{ $item->image }}" alt="product">
            </a>
        </td>
        <td>
            <h6 class="regular"><a href="/items/{{$item->id}}">{{ $item->name }}</a></h6>
            <small>{{ $item->measurement }}</small>
        </td>
        <td>
            <span class="text-primary">{{ $item->formatted_price }}</span>
        </td>
        <td>
            <a href="javascript:void(0)" class="btn btn-default round btn-sm"><i class="fa fa-cart-plus mr-5"></i> Add to cart</a>
        </td>
        <td>
            <button type="button" class="close">×</button>
        </td>
    </tr>
