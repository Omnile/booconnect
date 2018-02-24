
    <div class="thumbnail blog" style="border-top-left-radius: 20%;border-bottom-right-radius: 20%;">
        <div class="header" style="border-top-left-radius: 20%;border-bottom-right-radius: 20%;">
            <figure>
                <a href="/resturants/{{ $resturant->id }}">
                    <img src="{{ $resturant->image }}" alt="" style="border-top-left-radius: 20%;border-bottom-right-radius: 20%;">
                </a>
            </figure>
            <div class="meta">
                <span><i class="fa fa-calendar mr-5"></i>{{ $resturant->created_at }}</span>
                {{-- <span><i class="fa fa-comment mr-5"></i>({{ $resturant->rating->count() }})</span> --}}
                {{-- <span><i class="fa fa-heart mr-5"></i>({{ $resturant->transactions_count }})</span> --}}
            </div>
        </div>
        <div class="caption">
            <h6><a href="/resturants/{{ $resturant->id }}">{{ $resturant->name }}</a></h6>
            <div class="author-category">
                <span class="author mr-20">
                    <i class="fa fa-map-marker text-danger mr-5"></i>
                    <a href="/resturants/{{ $resturant->id }}">{{ $resturant->city }}, {{ $resturant->state }}</a>
                </span>
                {{-- <br>
                <span class="category">
                    <a href="javascript:void(0);">Post Formats</a>
                </span> --}}
            </div>
            <p>{{ $resturant->description }}</p>
        </div><!-- end caption -->
    </div><!-- end thumbnail -->
