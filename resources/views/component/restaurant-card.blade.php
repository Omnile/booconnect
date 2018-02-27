
    <div class="thumbnail blog" style="border-top-left-radius: 20%;border-bottom-right-radius: 20%; height: 450px">
        <div class="header" style="border-top-left-radius: 20%;border-bottom-right-radius: 20%;">
            <figure>
                <a href="/restaurants/{{ $restaurant->id }}">
                    <img src="{{ $restaurant->image }}" alt="" style="border-top-left-radius: 20%;border-bottom-right-radius: 20%;">
                </a>
            </figure>
            <div class="meta">
                <span><i class="fa fa-calendar mr-5"></i>{{ $restaurant->created_at }}</span>
                {{-- <span><i class="fa fa-comment mr-5"></i>({{ $restaurant->rating->count() }})</span> --}}
                {{-- <span><i class="fa fa-heart mr-5"></i>({{ $restaurant->transactions_count }})</span> --}}
            </div>
        </div>
        <div class="caption">
            <h6><a href="/restaurants/{{ $restaurant->id }}">{{ $restaurant->name }}</a></h6>
            <div class="author-category">
                <span class="author mr-20">
                    <i class="fa fa-map-marker text-danger mr-5"></i>
                    <a href="/restaurants/{{ $restaurant->id }}">{{ $restaurant->city }}, {{ $restaurant->state }}</a>
                </span>
                {{-- <br>
                <span class="category">
                    <a href="javascript:void(0);">Post Formats</a>
                </span> --}}
                <br>
                <br>
                <p>{{ $restaurant->description }}</p>
            </div>
        </div><!-- end caption -->
    </div><!-- end thumbnail -->
