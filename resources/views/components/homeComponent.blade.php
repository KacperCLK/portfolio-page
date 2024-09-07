<div id="home" class="home-page thickness-500">
    <h1 class="home-page__title main-title thickness-400">
        <span class="font-colot-main-blue ">About</span> Me
    </h1>
    <div class="home-page__introduction">
        {{-- <span>Hi,</span> --}}
        <span>Hi, I'am <span class="font-colot-main-blue thickness-600">Kacper</span></span>
        <span>Constructor Estimator</span>
        <span>BIM Modeller and</span>
        <span>Web Developer</span>

        <div class="home-page__link">
            <a href="{{route('contact')}}" class="link link--button thickness-500">Contact</a>
        </div>
    </div>

    <div class="home-page__photo">
        <img src="{{ asset('storage/photos/portfolio_photo.jpg') }}" alt="portfolio_photo">
    </div>
</div>