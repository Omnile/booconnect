<h5>{{ $reviews->count() }} Review for "{{ $ratable->name }}"</h5>

<hr class="spacer-10 no-border">

@foreach ($reviews as $review)
    @include('component.review', compact('review'))
@endforeach

<hr class="spacer-30">

@unless (Auth::check())
    <h5>You must be authented to add a review.</h5>
@else
    <h5>Add a review</h5>
    <p>How do you rate this?</p>

    <hr class="spacer-5 no-border">

    <form method="POST" action="/ratings" >
        @csrf
        <div class="rating-container rating-sm rating-animate">
            <div class="rating">
                <span class="filled-stars" style="width: 100%;">
                    <span class="star"><i class="glyphicon glyphicon-star"></i></span>
                    <span class="star"><i class="glyphicon glyphicon-star"></i></span>
                    <span class="star"><i class="glyphicon glyphicon-star"></i></span>
                    <span class="star"><i class="glyphicon glyphicon-star"></i></span>
                    <span class="star"><i class="glyphicon glyphicon-star"></i></span>
                </span>
            </div>
            <div class="caption">
                <input type="text" class="rating hide" value="5" data-size="sm" title="" name="rating">
            </div>

        <hr class="spacer-10 no-border">

        <div class="form-group">
            <label for="reviewMessage">Review</label>
            <textarea id="reviewMessage" rows="5" class="form-control" placeholder="Your Comment" name="comment"></textarea>
        </div><!-- end form-group -->
        <div class="form-group">
            <input type="hidden" name="rateable_id" value="{{ $ratable->id }}">
            <input type="hidden" name="rateable_type" value="App\{{ class_basename($ratable) }}">
            <input type="submit" class="btn btn-default round btn-md" >
        </div><!-- end form-group -->


    </form>
@endif
