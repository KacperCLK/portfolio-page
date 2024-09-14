<nav class="header">
    <input type="checkbox" class="header__checkbox" id="navi-toggle">
    <label id="toggle-button" class="header__toggle-button header--unactive" for="navi-toggle">
        Menu
    </label>

    <div class="header__left">
        <a href="#" class="link-main">
            <img src="{{ asset('storage\photos\works-page\v-project\logo.png')}}" alt="LOGO">
            <span class="header__item">V-Project</span>
        </a>
    </div>

    <div class="header__right" id="main-nav">
        <ul class="header__list">
            @foreach ($links as $label => $link)
                <li class="header__item">
                    <a class="link-main" href="{{ $link }}">
                        {{strtoupper($label)}}
                        <div class="link-main__underline"></div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="header__hidden" id="main-nav">
        <ul class="header__list">
            @foreach ($links as $label => $link)
                <li class="header__item">
                    <a class="link-main" href="{{ $link }}">
                        {{strtoupper($label)}}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</nav>

<script>
    // Script that show/hide list of links depend on screen width
    const toggleButton = document.getElementById('toggle-button');
    const navList = document.querySelector('.header__list');
    const checkbox = document.getElementById('navi-toggle');

    function toggleMenuButton() {
        if (window.innerWidth < 600) {
            navList.classList.add('header--unactive');
            toggleButton.classList.remove('header--unactive');
            checkbox.checked = false;
        } else {
            navList.classList.remove('header--unactive');
            toggleButton.classList.add('header--unactive');
            checkbox.checked = false;
        }
    }

    window.addEventListener('load', toggleMenuButton);
    window.addEventListener('resize', toggleMenuButton);
</script>