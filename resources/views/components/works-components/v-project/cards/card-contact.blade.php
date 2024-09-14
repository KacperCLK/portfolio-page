@props(['id' => ''])

<div id="{{ $id }}" class="contact u-margin-bottom-huge">
    <div class="contact__card">
        <div class="contact__title">{{ __("Contact as") }}</div>
        <div class="contact__text u-margin-bottom-small">{{__('Leave your message and we’ll get back to you shortly')}}</div>

        @livewire('customer-msg') 

        {{-- @livewire('customer-msg') Obsługa wysyłania formularza w livewire, omijamy js i przeładowanie strony --}}
    </div>
    
    <div class="contact__links">
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

    @livewireScripts
</div>