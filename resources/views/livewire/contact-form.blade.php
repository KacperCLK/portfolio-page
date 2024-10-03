<form wire:submit.prevent="submit" class="form">
    <div class="form__inputBx">
        <label for="name">Name:</label>
        <input 
            id="name" 
            class="
                form__input 
                @error('name') form__input--error @enderror 
                @if (session()->has('success')) form__input--success @endif
            "
            type="text" 
            wire:model.defer="name" 
        >
        <span class="form__error @error('name') form__error--active @enderror">@error('name') {{ $message }} @enderror</span>
    </div>

    <div class="form__inputBx">
        <label for="email">Email:</label>
        <input 
            id="email" 
            class="
                form__input 
                @error('email') form__input--error @enderror 
                @if (session()->has('success')) form__input--success @endif
            "
            type="text" 
            wire:model.defer="email" 
        >
        <span class="form__error @error('email') form__error--active @enderror">@error('email') {{ $message }} @enderror</span>

    </div>

    <div class="form__textareaBx">
        <label for="message">Your message:</label>
        <textarea 
            id="message" 
            class="
                form__textarea 
                @error('message') form__textarea--error @enderror 
                @if (session()->has('success')) form__textarea--success @endif
            " 
            rows="4" 
            wire:model.defer="message" 
        ></textarea>
        <span class="form__error @error('message') form__error--active @enderror">@error('message') {{ $message }} @enderror</span>

    </div>

    <button class="form__button button button--main-button" type="submit">Submit</button>

    
    {{-- <div class="form__success-message @if (session()->has('success')) form__success-message--active @endif"> --}}
    <div class="form__success-message form__success-message--active">
        {{ session('success') }}
        Message has been sent succesfully!
    </div>
</form>