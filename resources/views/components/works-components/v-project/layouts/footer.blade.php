<footer class="footer">
    <div class="footer__links">
        <div class="footer__icons">
            <div class="icon-link icon-link--blue">
                <div class="icon-link__content">
                    <i class="fa-regular fa-envelope"></i>
                </div>
            </div>
            <div class="icon-link icon-link">
                <div class="icon-link__content">
                    <img src="{{ asset('storage\photos\works-page\v-project\fi.png')}}" alt="">
                </div>
            </div>
        </div>

        <ul class="footer__list" style="">
            @foreach ($links as $label => $link)
                <li class="footer__item" style="">
                    <a class="link-main" href="{{ $link }}">
                        {{strtoupper($label)}}
                        <div class="link-main__underline"></div>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="footer__legal-disclaimer">
        ©<?php echo date("Y"); ?> {{ __('V-Projects')}}. {{ __('All right reserved.')}}
    </div>
</footer>