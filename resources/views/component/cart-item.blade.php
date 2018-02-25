
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
            <select class="form-control" name="select">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </td>
        <td>
            <span class="text-primary">{{ config('booconnect.currency') . ' ' . number_format($item->subtotal, 2) }}</span>
        </td>
        <td>
            <button type="button" class="close">×</button>
        </td>
    </tr>
