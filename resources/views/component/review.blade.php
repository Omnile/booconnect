<div class="comments">
    <div class="comment-image">
        <figure>
            <img src="{{ $review->user->name }}" alt="">
        </figure>
    </div><!-- end comments-image -->
    <div class="comment-content">
        <div class="comment-content-head">
            <ul class="list list-inline comment-meta">
                <li>
                   @for ($i = 0; $i < $review->rating; $i++)
                        <i class="fa fa-star text-warning"></i>
                    @endfor
                    {{-- <i class="fa fa-star-half-empty text-warning"></i> --}}
                    {{-- <i class="fa fa-star-o text-warning"></i> --}}
                </li>
            </ul>
        </div><!-- end comment-content-head -->
        <p>{{ $review->comment }}.</p>
        <cite>{{ $review->user->name }}</cite>r
    </div><!-- end comment-content -->
</div><!-- end comments -->
