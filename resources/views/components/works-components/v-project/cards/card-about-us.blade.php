@props(['id' => '', 'members' => []])

<div id="{{ $id }}" class="card-about-us u-margin-bottom-huge">
    <div class="card-about-us__container">
        {{-- Heading + subtitle --}}
        <div class="card-about-us__title"> {{ __('ABOUT US') }} </div>
        <div class="card-about-us__subtitle">
            <span class="card-about-us__subtitle__text">
                {{ __('We are a group of young but experienced programmers.') }} 
            </span>
        </div>
        
        <x-works-components.v-project.cards.custom-slider-1 :members="$members"/>
    </div>
</div>