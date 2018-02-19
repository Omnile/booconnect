<!-- Carousel Swiper slider-->
    <div class="swiper-container swiper-coverflow">
        <div class="swiper-wrapper">

            @foreach (collect(
                [
                    [
                        'title' => 'Pizza Inn',
                        'description' => 'Get your mouth full with a good meal from Pizza Inn',
                        'image' => 'https://www.pizzainn.com.au/uploads/PI2015/images/logo.png',
                        'color' => '#e1e6e6',
                    ],
                    [
                        'title' => 'Baritas',
                        'description' => 'You will not find any chicken more tasty. In simple words, We\'re the best!.',
                        'image' => 'https://media-cdn.tripadvisor.com/media/photo-s/04/34/63/a2/baritas.jpg',
                        'color' => '#e1efff',
                    ]
                ]
            ) as $slide)

                <div class="swiper-slide" style="background-color:{{ $slide['color'] }};">
                    <div class="slider-content">
                        <div class="box text-left">
                            <h1 class="text-primary">{{ $slide['title'] }}</h1>
                            <p class="text-dark">{{ $slide['description'] }}</p>
                            <a href="javascript:void(0);" class="btn btn-default semi-circle">View Menu</a>
                        </div>
                        <div class="box text-right hidden-xs hidden-sm fa">
                            <img src="{{ $slide['image'] }}" alt="" />
                        </div>
                    </div><!-- end slider-content -->
                </div><!-- end swiper-slider -->

            @endforeach

        </div><!-- end swiper wrapper -->
        <!-- Pagination -->
        <div class="swiper-pagination swiper-pagination-h"></div>
        <!-- Arrows -->
        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
    </div><!-- end Carousal swiper-container -->
