<h5>4 Review for "Lorem ipsum dolor sit amet"</h5>

<hr class="spacer-10 no-border">

@foreach ([1,2,3,4,5,6,7] as $review)
    @include('component.review', ['some' => 'data'])
@endforeach

<hr class="spacer-30">

<h5>Add a review</h5>
<p>How do you rate this product?</p>

<hr class="spacer-5 no-border">

<form>
    <input type="text" class="rating rating-loading" value="5" data-size="sm" title="">
</form>

<hr class="spacer-10 no-border">

<div class="form-group">
    <label for="reviewName">Name</label>
    <input type="text" id="reviewName" class="form-control input-md" placeholder="Your Name">
</div><!-- end form-group -->
<div class="form-group">
    <label for="reviewEmail">E-mail</label>
    <input type="text" id="reviewEmail" class="form-control input-md" placeholder="Your E-mail">
</div><!-- end form-group -->
<div class="form-group">
    <label for="reviewMessage">Review</label>
    <textarea id="reviewMessage" rows="5" class="form-control" placeholder="Your review"></textarea>
</div><!-- end form-group -->
<div class="form-group">
    <input type="submit" class="btn btn-default round btn-md" value="Submit Review">
</div><!-- end form-group -->
