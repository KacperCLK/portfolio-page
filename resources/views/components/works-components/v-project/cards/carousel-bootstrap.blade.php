@props(['images' => '','indicators' => true, 'icons' => false])

{{-- <div id="carouselIndicators" class="carousel slide" data-bs-ride=""> --}}
<div id="carouselIndicators" class="carousel slide" data-bs-ride="carousel">
    @if ($indicators)
        <div class="carousel-indicators">
            @foreach ($images as $index => $image)
                <button 
                    type="button" 
                    data-bs-target="#carouselIndicators" 
                    data-bs-slide-to="{{$index}}" 
                    aria-label="Slide {{$index+1}}"
                    class="{{ $index == 0 ? 'active' : '' }}">
                </button>
            @endforeach
        </div>
    @endif
    
    <div class="carousel-inner">
        @foreach ($images as $index => $image)
            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                <img src="{{ asset($image->home_slider_imgs)}}"  alt="..." class="carousel__img">
            </div>
        @endforeach
    </div>
    
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators" data-bs-slide="prev">
        @if ($icons)
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        @endif
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators" data-bs-slide="next">
        @if ($icons)
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        @endif
    </button>
</div>