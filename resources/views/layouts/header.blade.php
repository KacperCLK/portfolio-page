<div class="header">
    <span>Kacper</span>

    <div class="header__links">
        @foreach ($links as $link)
            <a href="{{ $link['url'] }}" class="header__link link link--1 link--underline {{ $link['active'] ? 'link--active' : '' }}">
                {{$link['name']}}
            </a>
        @endforeach
    </div>
</div>