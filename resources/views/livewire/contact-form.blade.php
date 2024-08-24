<form wire:submit.prevent="submit" class="contact-page__form">
    <div class="contact-page__inputBx">
        <label for="name">Name:</label>
        <input 
            id="name" 
            class="
                contact-page__input 
                @error('name') contact-page__input--error @enderror 
                @if (session()->has('success')) contact-page__input--success @endif
            "
            type="text" 
            wire:model.defer="name" 
        >
        <span class="contact-page__error @error('name') contact-page__error--active @enderror">@error('name') {{ $message }} @enderror</span>
    </div>

    <div class="contact-page__inputBx">
        <label for="email">Email:</label>
        <input 
            id="email" 
            class="
                contact-page__input 
                @error('email') contact-page__input--error @enderror 
                @if (session()->has('success')) contact-page__input--success @endif
            "
            type="text" 
            wire:model.defer="email" 
        >
        <span class="contact-page__error @error('email') contact-page__error--active @enderror">@error('email') {{ $message }} @enderror</span>

    </div>

    <div class="contact-page__inputBx">
        <label for="message">Your message:</label>
        <textarea 
            id="message" 
            class="
                contact-page__textarea 
                @error('message') contact-page__textarea--error @enderror 
                @if (session()->has('success')) contact-page__textarea--success @endif
            " 
            rows="4" 
            wire:model.defer="message" 
        ></textarea>
        <span class="contact-page__error @error('message') contact-page__error--active @enderror">@error('message') {{ $message }} @enderror</span>

    </div>

    <button class="contact-page__button button button--main-button" type="submit">Submit</button>

    
    <div class="contact-page__success-message @if (session()->has('success')) contact-page__success-message--active @endif">
        {{ session('success') }}
    </div>
</form>