<section class="about-us-swiper u-margin-top-small">
    <div class="swiper mySwiper u-margin-bottom-small"> <!-- "mySwiper" - od Swipera -->
        <div class="swiper-wrapper"> <!-- "swiper-wrapper" - od Swipera -->

            @foreach ($members as $member)
                @if ($member->displaying)
                    <div class="swiper__card swiper-slide"> <!-- "swiper-slide" - od Swipera -->
                        <div class="swiper__card-content">
                            <div class="swiper__img-box" style="background-color: {{$member->member_color}};">
                                <img class="swiper__img" src="{{ asset($member->member_image_url)}}" alt="img" draggable="false">
                                <a href="{{$member->member_git_link}}" class="swiper__git-img-box">
                                    <i class="fa-brands fa-github swiper__git-icon"></i>
                                </a>
                            </div>
                            <h2 class="swiper__member-name">{{$member->member_name}}</h2>
                            <span class="swiper__member-description">{{$member->member_short_desc}}</span>
                        </div>
                    </div>
                @endif
            @endforeach

        </div>
    </div>

    <div class="swiper-button-next"></div> <!-- "swiper-button-next" - od Swipera -->
    <div class="swiper-button-prev"></div> <!-- "swiper-button-prev" - od Swipera -->
    <div class="swiper-pagination"></div> <!-- "swiper-pagination" - od Swipera -->
</section>