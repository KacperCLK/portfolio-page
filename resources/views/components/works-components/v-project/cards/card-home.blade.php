@props(['id' => '', 'homeSliderImages' => []])

<div id="{{ $id }}" class="card-home u-margin-bottom-huge">

    <x-works-components.v-project.cards.carousel-bootstrap :images="$homeSliderImages"/> {{-- Carousel from bootstrap --}}
    <div class="card-home__background"></div> {{-- Gray semi-transparent background --}}

    {{-- Container with all subtitles --}}
    <div class="card-home__container">
        <div class="card-home__title">
            {{__('V-Projects')}}
        </div>

        <div class="card-home__subtitle">
            <span class="card-home__subtitle__text">{{__('Wants professional and stunning site?')}}</span> 
        </div>

        <div class="card-home__description u-margin-top-small">
            <div class="card-home__text">
                {{__('You’ve come to the')}} 
                <span class="card-home__text--bold">
                    {{__('right place!')}}
                </span>
            </div>

            <div class="card-home__text u-margin-top-medium">
                {{__('Learn our')}} 
                <a href="#offers" class='card-home__link'>
                    {{__('offer')}}
                </a> 
                {{__('and pricing,')}}
            </div>

            <div class="card-home__text">
                <a href="#contact" class='card-home__link'>
                    {{__('Contact_HC')}}
                </a>
                {{__('us and we will make your vision')}}
                <span class="card-home__text--yellow">
                    {{__('REAL')}}
                </span>
                !
            </div>
        </div>
    </div>
</div>
