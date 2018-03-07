
    <tr>
        <td>
            <a href="/items/{{$item->id}}">
                <img width="60px" src="{{ $item->model->image }}" alt="product">
            </a>
        </td>
        <td>
            <h6 class="regular"><a href="/items/{{$item->id}}">{{ $item->model->name }}</a></h6>
            <p>{{ $item->model->discription }}</p>
        </td>
        <td>
            <span>{{ $item->model->formatted_price }}</span>
        </td>
        <td>
            <input type="number" name="qty" value="{{ $item->qty }}" class="form-control" >
        </td>
        <td>
            <span class="text-primary">{{ config('booconnect.currency') . ' ' . number_format($item->subtotal, 2) }}</span>
        </td>
        <td>
            <button type="button" class="close">×</button>
        </td>
    </tr>
